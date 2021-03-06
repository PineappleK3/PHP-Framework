<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Messenger/SetClientSettingsResponse.proto

namespace SetClientSettingsResponse;

use UnexpectedValueException;

/**
 * Protobuf type <code>SetClientSettingsResponse.Result</code>
 */
class Result
{
    /**
     * Generated from protobuf enum <code>NotSet = 0;</code>
     */
    const NotSet = 0;
    /**
     * Generated from protobuf enum <code>Ok = 1;</code>
     */
    const Ok = 1;
    /**
     * Generated from protobuf enum <code>Error = 2;</code>
     */
    const Error = 2;

    private static $valueToName = [
        self::NotSet => 'NotSet',
        self::Ok => 'Ok',
        self::Error => 'Error',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Result::class, \SetClientSettingsResponse_Result::class);

