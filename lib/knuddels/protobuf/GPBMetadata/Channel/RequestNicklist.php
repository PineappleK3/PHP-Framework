<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Channel/RequestNicklist.proto

namespace GPBMetadata\Channel;

class RequestNicklist
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Channel\ChannelIdentifier::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a610a1d4368616e6e656c2f526571756573744e69636b6c6973742e7072" .
            "6f746f22380a0f526571756573744e69636b6c69737412250a096368616e" .
            "6e656c494418012001280b32122e4368616e6e656c4964656e7469666965" .
            "72620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}
