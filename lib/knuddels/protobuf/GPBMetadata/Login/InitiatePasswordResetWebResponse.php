<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: login/InitiatePasswordResetWebResponse.proto

namespace GPBMetadata\Login;

class InitiatePasswordResetWebResponse
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(hex2bin(
            "0a6a0a2c6c6f67696e2f496e69746961746550617373776f726452657365" .
            "74576562526573706f6e73652e70726f746f22320a20496e697469617465" .
            "50617373776f72645265736574576562526573706f6e7365120e0a067265" .
            "73756c74180120012805620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}
