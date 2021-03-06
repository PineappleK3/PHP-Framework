<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Messenger/SnapDownloadResponse.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\GPBWrapperUtils;

/**
 * Generated from protobuf message <code>SnapDownloadResponse</code>
 */
class SnapDownloadResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string url = 1;</code>
     */
    private $url = '';
    /**
     * Generated from protobuf field <code>int64 messageId = 2;</code>
     */
    private $messageId = 0;
    /**
     * Generated from protobuf field <code>int64 photoId = 3;</code>
     */
    private $photoId = 0;
    /**
     * Generated from protobuf field <code>bool isPreview = 4;</code>
     */
    private $isPreview = false;
    /**
     * Enum
     *
     * Generated from protobuf field <code>int32 snapType = 5;</code>
     */
    private $snapType = 0;
    /**
     * Generated from protobuf field <code>string imageKey = 6;</code>
     */
    private $imageKey = '';
    /**
     * Generated from protobuf field <code>int32 extraTime = 7;</code>
     */
    private $extraTime = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $url
     *     @type int|string $messageId
     *     @type int|string $photoId
     *     @type bool $isPreview
     *     @type int $snapType
     *           Enum
     *     @type string $imageKey
     *     @type int $extraTime
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Messenger\SnapDownloadResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string url = 1;</code>
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Generated from protobuf field <code>string url = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->url = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 messageId = 2;</code>
     * @return int|string
     */
    public function getMessageId()
    {
        return $this->messageId;
    }

    /**
     * Generated from protobuf field <code>int64 messageId = 2;</code>
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
     * Generated from protobuf field <code>int64 photoId = 3;</code>
     * @return int|string
     */
    public function getPhotoId()
    {
        return $this->photoId;
    }

    /**
     * Generated from protobuf field <code>int64 photoId = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPhotoId($var)
    {
        GPBUtil::checkInt64($var);
        $this->photoId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool isPreview = 4;</code>
     * @return bool
     */
    public function getIsPreview()
    {
        return $this->isPreview;
    }

    /**
     * Generated from protobuf field <code>bool isPreview = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsPreview($var)
    {
        GPBUtil::checkBool($var);
        $this->isPreview = $var;

        return $this;
    }

    /**
     * Enum
     *
     * Generated from protobuf field <code>int32 snapType = 5;</code>
     * @return int
     */
    public function getSnapType()
    {
        return $this->snapType;
    }

    /**
     * Enum
     *
     * Generated from protobuf field <code>int32 snapType = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setSnapType($var)
    {
        GPBUtil::checkInt32($var);
        $this->snapType = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string imageKey = 6;</code>
     * @return string
     */
    public function getImageKey()
    {
        return $this->imageKey;
    }

    /**
     * Generated from protobuf field <code>string imageKey = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setImageKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->imageKey = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 extraTime = 7;</code>
     * @return int
     */
    public function getExtraTime()
    {
        return $this->extraTime;
    }

    /**
     * Generated from protobuf field <code>int32 extraTime = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setExtraTime($var)
    {
        GPBUtil::checkInt32($var);
        $this->extraTime = $var;

        return $this;
    }

}

