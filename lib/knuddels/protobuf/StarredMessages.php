<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Messenger/StarredMessages.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\GPBWrapperUtils;

/**
 * Generated from protobuf message <code>StarredMessages</code>
 */
class StarredMessages extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ConversationList conversations = 1;</code>
     */
    private $conversations = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \ConversationList $conversations
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Messenger\StarredMessages::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ConversationList conversations = 1;</code>
     * @return \ConversationList
     */
    public function getConversations()
    {
        return $this->conversations;
    }

    /**
     * Generated from protobuf field <code>.ConversationList conversations = 1;</code>
     * @param \ConversationList $var
     * @return $this
     */
    public function setConversations($var)
    {
        GPBUtil::checkMessage($var, \ConversationList::class);
        $this->conversations = $var;

        return $this;
    }

}
