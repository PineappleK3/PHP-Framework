<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: login/PasswordCredentialsData.proto

namespace GPBMetadata\Login;

class PasswordCredentialsData
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(hex2bin(
            "0a6c0a236c6f67696e2f50617373776f726443726564656e7469616c7344" .
            "6174612e70726f746f223d0a1750617373776f726443726564656e746961" .
            "6c734461746112100a08757365726e616d6518012001280912100a087061" .
            "7373776f7264180220012809620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}
