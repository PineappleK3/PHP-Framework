<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: PrivateMessageServer.proto

namespace GPBMetadata;

class PrivateMessageServer
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(hex2bin(
            "0a730a1a507269766174654d6573736167655365727665722e70726f746f" .
            "224d0a14507269766174654d65737361676553657276657212100a087365" .
            "6e646572494418012001280512120a0a7265636569766572494418022003" .
            "2805120f0a076d657373616765180320012809620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}
