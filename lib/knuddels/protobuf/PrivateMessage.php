<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Channel/PrivateMessage.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\GPBWrapperUtils;

/**
 * Generated from protobuf message <code>PrivateMessage</code>
 */
class PrivateMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated string receivers = 1;</code>
     */
    private $receivers;
    /**
     * Generated from protobuf field <code>string message = 2;</code>
     */
    private $message = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $receivers
     *     @type string $message
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Channel\PrivateMessage::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated string receivers = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getReceivers()
    {
        return $this->receivers;
    }

    /**
     * Generated from protobuf field <code>repeated string receivers = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setReceivers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->receivers = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string message = 2;</code>
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Generated from protobuf field <code>string message = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->message = $var;

        return $this;
    }

}
