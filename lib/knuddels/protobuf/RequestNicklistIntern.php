<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Channel/RequestNicklistIntern.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\GPBWrapperUtils;

/**
 * Generated from protobuf message <code>RequestNicklistIntern</code>
 */
class RequestNicklistIntern extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ChannelIdentifier channelID = 1;</code>
     */
    private $channelID = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \ChannelIdentifier $channelID
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Channel\RequestNicklistIntern::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ChannelIdentifier channelID = 1;</code>
     * @return \ChannelIdentifier
     */
    public function getChannelID()
    {
        return $this->channelID;
    }

    /**
     * Generated from protobuf field <code>.ChannelIdentifier channelID = 1;</code>
     * @param \ChannelIdentifier $var
     * @return $this
     */
    public function setChannelID($var)
    {
        GPBUtil::checkMessage($var, \ChannelIdentifier::class);
        $this->channelID = $var;

        return $this;
    }

}

