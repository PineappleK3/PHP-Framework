<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Messenger/UnArchiveConversation.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\GPBWrapperUtils;

/**
 * Generated from protobuf message <code>UnArchiveConversation</code>
 */
class UnArchiveConversation extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 messageId = 1;</code>
     */
    private $messageId = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $messageId
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Messenger\UnArchiveConversation::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 messageId = 1;</code>
     * @return int|string
     */
    public function getMessageId()
    {
        return $this->messageId;
    }

    /**
     * Generated from protobuf field <code>int64 messageId = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMessageId($var)
    {
        GPBUtil::checkInt64($var);
        $this->messageId = $var;

        return $this;
    }

}
