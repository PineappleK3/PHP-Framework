<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: UserData/IgnoreListUpdate.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\GPBWrapperUtils;

/**
 * Generated from protobuf message <code>IgnoreListUpdate</code>
 */
class IgnoreListUpdate extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 userID = 1;</code>
     */
    private $userID = 0;
    /**
     * Generated from protobuf field <code>.IgnoreListUpdate.Action action = 2;</code>
     */
    private $action = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $userID
     *     @type int $action
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\UserData\IgnoreListUpdate::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 userID = 1;</code>
     * @return int
     */
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     * Generated from protobuf field <code>int32 userID = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setUserID($var)
    {
        GPBUtil::checkInt32($var);
        $this->userID = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.IgnoreListUpdate.Action action = 2;</code>
     * @return int
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Generated from protobuf field <code>.IgnoreListUpdate.Action action = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setAction($var)
    {
        GPBUtil::checkEnum($var, \IgnoreListUpdate_Action::class);
        $this->action = $var;

        return $this;
    }

}
