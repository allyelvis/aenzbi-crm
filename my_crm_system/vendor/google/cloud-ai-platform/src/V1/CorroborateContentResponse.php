<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/vertex_rag_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for CorroborateContent.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.CorroborateContentResponse</code>
 */
class CorroborateContentResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Confidence score of corroborating content. Value is [0,1] with 1 is the
     * most confidence.
     *
     * Generated from protobuf field <code>optional float corroboration_score = 1;</code>
     */
    protected $corroboration_score = null;
    /**
     * Claims that are extracted from the input content and facts that support the
     * claims.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Claim claims = 2;</code>
     */
    private $claims;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $corroboration_score
     *           Confidence score of corroborating content. Value is [0,1] with 1 is the
     *           most confidence.
     *     @type array<\Google\Cloud\AIPlatform\V1\Claim>|\Google\Protobuf\Internal\RepeatedField $claims
     *           Claims that are extracted from the input content and facts that support the
     *           claims.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\VertexRagService::initOnce();
        parent::__construct($data);
    }

    /**
     * Confidence score of corroborating content. Value is [0,1] with 1 is the
     * most confidence.
     *
     * Generated from protobuf field <code>optional float corroboration_score = 1;</code>
     * @return float
     */
    public function getCorroborationScore()
    {
        return isset($this->corroboration_score) ? $this->corroboration_score : 0.0;
    }

    public function hasCorroborationScore()
    {
        return isset($this->corroboration_score);
    }

    public function clearCorroborationScore()
    {
        unset($this->corroboration_score);
    }

    /**
     * Confidence score of corroborating content. Value is [0,1] with 1 is the
     * most confidence.
     *
     * Generated from protobuf field <code>optional float corroboration_score = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setCorroborationScore($var)
    {
        GPBUtil::checkFloat($var);
        $this->corroboration_score = $var;

        return $this;
    }

    /**
     * Claims that are extracted from the input content and facts that support the
     * claims.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Claim claims = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getClaims()
    {
        return $this->claims;
    }

    /**
     * Claims that are extracted from the input content and facts that support the
     * claims.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Claim claims = 2;</code>
     * @param array<\Google\Cloud\AIPlatform\V1\Claim>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setClaims($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\Claim::class);
        $this->claims = $arr;

        return $this;
    }

}

