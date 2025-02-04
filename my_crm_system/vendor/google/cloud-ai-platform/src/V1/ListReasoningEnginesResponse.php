<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/reasoning_engine_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for
 * [ReasoningEngineService.ListReasoningEngines][google.cloud.aiplatform.v1.ReasoningEngineService.ListReasoningEngines]
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ListReasoningEnginesResponse</code>
 */
class ListReasoningEnginesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * List of ReasoningEngines in the requested page.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.ReasoningEngine reasoning_engines = 1;</code>
     */
    private $reasoning_engines;
    /**
     * A token to retrieve the next page of results.
     * Pass to
     * [ListReasoningEnginesRequest.page_token][google.cloud.aiplatform.v1.ListReasoningEnginesRequest.page_token]
     * to obtain that page.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\AIPlatform\V1\ReasoningEngine>|\Google\Protobuf\Internal\RepeatedField $reasoning_engines
     *           List of ReasoningEngines in the requested page.
     *     @type string $next_page_token
     *           A token to retrieve the next page of results.
     *           Pass to
     *           [ListReasoningEnginesRequest.page_token][google.cloud.aiplatform.v1.ListReasoningEnginesRequest.page_token]
     *           to obtain that page.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\ReasoningEngineService::initOnce();
        parent::__construct($data);
    }

    /**
     * List of ReasoningEngines in the requested page.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.ReasoningEngine reasoning_engines = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getReasoningEngines()
    {
        return $this->reasoning_engines;
    }

    /**
     * List of ReasoningEngines in the requested page.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.ReasoningEngine reasoning_engines = 1;</code>
     * @param array<\Google\Cloud\AIPlatform\V1\ReasoningEngine>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setReasoningEngines($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\ReasoningEngine::class);
        $this->reasoning_engines = $arr;

        return $this;
    }

    /**
     * A token to retrieve the next page of results.
     * Pass to
     * [ListReasoningEnginesRequest.page_token][google.cloud.aiplatform.v1.ListReasoningEnginesRequest.page_token]
     * to obtain that page.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token to retrieve the next page of results.
     * Pass to
     * [ListReasoningEnginesRequest.page_token][google.cloud.aiplatform.v1.ListReasoningEnginesRequest.page_token]
     * to obtain that page.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

