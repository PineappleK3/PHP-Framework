<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/Token.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\GPBWrapperUtils;

/**
 * Generated from protobuf message <code>Token</code>
 */
class Token extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.google.protobuf.Any message = 1;</code>
     */
    private $message = null;
    /**
     * Generated from protobuf field <code>bool logPerformance = 2;</code>
     */
    private $logPerformance = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Any $message
     *     @type bool $logPerformance
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Core\Token::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Any message = 1;</code>
     * @return \Google\Protobuf\Any
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Any message = 1;</code>
     * @param \Google\Protobuf\Any $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Any::class);
        $this->message = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool logPerformance = 2;</code>
     * @return bool
     */
    public function getLogPerformance()
    {
        return $this->logPerformance;
    }

    /**
     * Generated from protobuf field <code>bool logPerformance = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setLogPerformance($var)
    {
        GPBUtil::checkBool($var);
        $this->logPerformance = $var;

        return $this;
    }

}
