<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Messenger/GetClientSettingsResponse.proto

namespace GPBMetadata\Messenger;

class GetClientSettingsResponse
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Messenger\ClientSettings::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ad0010a294d657373656e6765722f476574436c69656e7453657474696e" .
            "6773526573706f6e73652e70726f746f229a010a19476574436c69656e74" .
            "53657474696e6773526573706f6e736512210a0873657474696e67731801" .
            "2001280b320f2e436c69656e7453657474696e677312310a06726573756c" .
            "7418022001280e32212e476574436c69656e7453657474696e6773526573" .
            "706f6e73652e526573756c7422270a06526573756c74120a0a064e6f7453" .
            "6574100012060a024f6b100112090a054572726f721002620670726f746f" .
            "33"
        ), true);

        static::$is_initialized = true;
    }
}

