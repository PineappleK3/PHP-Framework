<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: CheckFlag.proto

namespace CheckFlag;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\GPBWrapperUtils;

/**
 * Generated from protobuf message <code>CheckFlag.RequestFlagCheck</code>
 */
class RequestFlagCheck extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string jwt = 1;</code>
     */
    private $jwt = '';
    /**
     * Generated from protobuf field <code>repeated int32 flagsToCheck = 2;</code>
     */
    private $flagsToCheck;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $jwt
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $flagsToCheck
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\CheckFlag::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string jwt = 1;</code>
     * @return string
     */
    public function getJwt()
    {
        return $this->jwt;
    }

    /**
     * Generated from protobuf field <code>string jwt = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setJwt($var)
    {
        GPBUtil::checkString($var, True);
        $this->jwt = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated int32 flagsToCheck = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFlagsToCheck()
    {
        return $this->flagsToCheck;
    }

    /**
     * Generated from protobuf field <code>repeated int32 flagsToCheck = 2;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFlagsToCheck($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->flagsToCheck = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RequestFlagCheck::class, \CheckFlag_RequestFlagCheck::class);
