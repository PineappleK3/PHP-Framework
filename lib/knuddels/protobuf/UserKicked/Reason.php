<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Channel/UserKicked.proto

namespace UserKicked;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\GPBWrapperUtils;

/**
 * Generated from protobuf message <code>UserKicked.Reason</code>
 */
class Reason extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 type = 1;</code>
     */
    private $type = 0;
    /**
     * Generated from protobuf field <code>string freetext = 2;</code>
     */
    private $freetext = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *     @type string $freetext
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Channel\UserKicked::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>int32 type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkInt32($var);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string freetext = 2;</code>
     * @return string
     */
    public function getFreetext()
    {
        return $this->freetext;
    }

    /**
     * Generated from protobuf field <code>string freetext = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFreetext($var)
    {
        GPBUtil::checkString($var, True);
        $this->freetext = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Reason::class, \UserKicked_Reason::class);
