<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Messenger/ConversationMessage.proto

namespace ConversationMessage;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\GPBWrapperUtils;

/**
 * Generated from protobuf message <code>ConversationMessage.NestedMessage</code>
 */
class NestedMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 messageId = 1;</code>
     */
    private $messageId = 0;
    /**
     * Generated from protobuf field <code>string deprecated_text = 2;</code>
     */
    private $deprecated_text = '';
    /**
     * Generated from protobuf field <code>int64 timestamp = 3;</code>
     */
    private $timestamp = 0;
    /**
     * Generated from protobuf field <code>int32 sender = 4;</code>
     */
    private $sender = 0;
    /**
     * Generated from protobuf field <code>.ConversationMessage.NestedMessage.NestedMessageType type = 5;</code>
     */
    private $type = 0;
    /**
     * Generated from protobuf field <code>bool hasSnap = 6;</code>
     */
    private $hasSnap = false;
    /**
     * Generated from protobuf field <code>.FormattedText text = 7;</code>
     */
    private $text = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $messageId
     *     @type string $deprecated_text
     *     @type int|string $timestamp
     *     @type int $sender
     *     @type int $type
     *     @type bool $hasSnap
     *     @type \FormattedText $text
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Messenger\ConversationMessage::initOnce();
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

    /**
     * Generated from protobuf field <code>string deprecated_text = 2;</code>
     * @return string
     */
    public function getDeprecatedText()
    {
        return $this->deprecated_text;
    }

    /**
     * Generated from protobuf field <code>string deprecated_text = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDeprecatedText($var)
    {
        GPBUtil::checkString($var, True);
        $this->deprecated_text = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 timestamp = 3;</code>
     * @return int|string
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Generated from protobuf field <code>int64 timestamp = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimestamp($var)
    {
        GPBUtil::checkInt64($var);
        $this->timestamp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 sender = 4;</code>
     * @return int
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * Generated from protobuf field <code>int32 sender = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setSender($var)
    {
        GPBUtil::checkInt32($var);
        $this->sender = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ConversationMessage.NestedMessage.NestedMessageType type = 5;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.ConversationMessage.NestedMessage.NestedMessageType type = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \ConversationMessage_NestedMessage_NestedMessageType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool hasSnap = 6;</code>
     * @return bool
     */
    public function getHasSnap()
    {
        return $this->hasSnap;
    }

    /**
     * Generated from protobuf field <code>bool hasSnap = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setHasSnap($var)
    {
        GPBUtil::checkBool($var);
        $this->hasSnap = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.FormattedText text = 7;</code>
     * @return \FormattedText
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Generated from protobuf field <code>.FormattedText text = 7;</code>
     * @param \FormattedText $var
     * @return $this
     */
    public function setText($var)
    {
        GPBUtil::checkMessage($var, \FormattedText::class);
        $this->text = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(NestedMessage::class, \ConversationMessage_NestedMessage::class);

