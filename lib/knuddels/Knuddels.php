<?php
	class Knuddels {
		private $register = null;
		private $request = null;
		private $utils = null;
		
		public function __construct() {
			MessageDepency::register('/registration.RegistrationRequest', \registration\RegistrationRequest::class);
			MessageDepency::register('/registration.RegistrationResponse', \registration\RegistrationResponse::class);
			MessageDepency::register('/registration.Success', \registration\Success::class);
			
			$this->register = new KnuddelsRegister();
			$this->utils = new Utils();
			$this->request = new NetworkManager();
		}
		
		public function register() {
			return $this->register;
		}
		
		public function utils() {
			return $this->utils;
		}
		
		public function request($url, $packet, $callback) {
			return $this->request->protobufFetch($url, $packet, $callback);
		}
	}
	
	class NetworkManager {
		public function protobufFetch($url, $packet, $callback) {			
			$http = curl_init();

			curl_setopt($http, CURLOPT_URL, $url);
			curl_setopt($http, CURLOPT_HTTPHEADER, [
				'Accept: application/x-protobuf+base64',
				'Content-Type: application/x-protobuf+base64; charset=UTF-8'
			]);
			curl_setopt($http, CURLOPT_POST, true);
			curl_setopt($http, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($http, CURLOPT_POSTFIELDS, $packet);

			$callback(Packet::decode(base64_decode(curl_exec($http))));
			curl_close($http);
		}
	}
	
	class Utils {
		public function getEnum($enum, $value) {
			
		}
	}
	
	class MessageDepency {
		private static $registred = [];
		
		public static function register($name, $class) {
			new $class(); // Call to add to the Descriptor Pool automatically
			
			self::$registred[$name] = $class;
		}
		
		public static function exists($name) {
			return isset(self::$registred[$name]);
		}
		
		public static function get($name) {
			return self::$registred[$name];
		}
	}
	
	class Packet {
		public static function encode($message, $base64 = true) {
			$name	= '/' . str_replace('\\', '.', lcfirst(get_class($message)));
			$any	= new \google\protobuf\Any();
			$token	= new Token();
			
			$any->pack($message);
			$any->setTypeUrl($name);
			$token->setMessage($any);
			
			$bytes = $token->serializeToString();
			
			if($base64) {
				return base64_encode($bytes);
			}
			
			return $bytes;
		}
		
		public static function decode($data) {
			$token	= new Token();
			$token->mergeFromString($data);
			$any = $token->getMessage();
			$type = $any->getTypeUrl();
			
			if(!MessageDepency::exists($type)) {
				throw new \Exception('Didn\'t register protocol: "' . $type . '"');
			}
			
			$registred	= MessageDepency::get($type);
			
			$any->setTypeUrl('type.googleapis.com' . $type);
			return $any->unpack();
		}
	}
	
	class KnuddelsRegister {
		public function checkNick($nickname) {
			$request = new \registration\RegistrationRequest();
			$request->setType(\registration\RequestType::NICK);
			$request->setNick($nickname);
			
			return Packet::encode($request);
		}
	}
?>