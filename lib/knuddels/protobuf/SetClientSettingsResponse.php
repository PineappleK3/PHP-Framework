<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Messenger/SetClientSettingsResponse.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\GPBWrapperUtils;

/**
 * Generated from protobuf message <code>SetClientSettingsResponse</code>
 */
class SetClientSettingsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.SetClientSettingsResponse.Result result = 1;</code>
     */
    private $result = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $result
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Messenger\SetClientSettingsResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.SetClientSettingsResponse.Result result = 1;</code>
     * @return int
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Generated from protobuf field <code>.SetClientSettingsResponse.Result result = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \SetClientSettingsResponse_Result::class);
        $this->result = $var;

        return $this;
    }

}
