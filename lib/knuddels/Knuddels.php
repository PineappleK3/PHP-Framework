<?php
	class Knuddels {
		private $register = null;
		
		public function __construct() {
			MessageDepency::register('/registration.RegistrationRequest', \registration\RegistrationRequest::class);
			$this->register = new KnuddelsRegister();
		}
		
		public function register() {
			return $this->register;
		}
	}
	
	class MessageDepency {
		private static $registred = [];
		
		public static function register($name, $class) {
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
			if(!empty(htmlspecialchars(base64_decode($data, true)))) {
				$data = base64_decode($data);
			}
			
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
			$request->setType(RequestType::NICK);
			$request->setNick($nickname);
			
			return Packet::encode($request);
		}
	}
?>