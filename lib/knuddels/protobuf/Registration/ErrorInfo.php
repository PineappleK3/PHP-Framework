<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: registration/ErrorInfo.proto

namespace Registration;

use UnexpectedValueException;

/**
 * Protobuf type <code>registration.ErrorInfo</code>
 */
class ErrorInfo
{
    /**
     * Generated from protobuf enum <code>fieldName = 0;</code>
     */
    const fieldName = 0;
    /**
     * Generated from protobuf enum <code>errorType = 1;</code>
     */
    const errorType = 1;
    /**
     * Generated from protobuf enum <code>errorSubType = 2;</code>
     */
    const errorSubType = 2;
    /**
     * Generated from protobuf enum <code>min = 3;</code>
     */
    const min = 3;
    /**
     * Generated from protobuf enum <code>max = 4;</code>
     */
    const max = 4;
    /**
     * Generated from protobuf enum <code>problemChar = 5;</code>
     */
    const problemChar = 5;
    /**
     * Generated from protobuf enum <code>customInfo = 6;</code>
     */
    const customInfo = 6;

    private static $valueToName = [
        self::fieldName => 'fieldName',
        self::errorType => 'errorType',
        self::errorSubType => 'errorSubType',
        self::min => 'min',
        self::max => 'max',
        self::problemChar => 'problemChar',
        self::customInfo => 'customInfo',
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

