<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: UserData/UserDataResponse.proto

namespace GPBMetadata\UserData;

class UserDataResponse
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\UserData\UserData::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a560a1f55736572446174612f5573657244617461526573706f6e73652e" .
            "70726f746f222b0a105573657244617461526573706f6e736512170a0464" .
            "61746118012003280b32092e5573657244617461620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}
