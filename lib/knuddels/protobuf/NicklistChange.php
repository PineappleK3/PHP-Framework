<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Channel/NicklistChange.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\GPBWrapperUtils;

/**
 * Generated from protobuf message <code>NicklistChange</code>
 */
class NicklistChange extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.UserNicklistData user = 1;</code>
     */
    private $user = null;
    /**
     * Generated from protobuf field <code>int32 action = 2;</code>
     */
    private $action = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \UserNicklistData $user
     *     @type int $action
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Channel\NicklistChange::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.UserNicklistData user = 1;</code>
     * @return \UserNicklistData
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Generated from protobuf field <code>.UserNicklistData user = 1;</code>
     * @param \UserNicklistData $var
     * @return $this
     */
    public function setUser($var)
    {
        GPBUtil::checkMessage($var, \UserNicklistData::class);
        $this->user = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 action = 2;</code>
     * @return int
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Generated from protobuf field <code>int32 action = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setAction($var)
    {
        GPBUtil::checkInt32($var);
        $this->action = $var;

        return $this;
    }

}

