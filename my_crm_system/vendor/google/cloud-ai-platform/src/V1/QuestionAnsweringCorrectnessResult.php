<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/evaluation_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Spec for question answering correctness result.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.QuestionAnsweringCorrectnessResult</code>
 */
class QuestionAnsweringCorrectnessResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Question Answering Correctness score.
     *
     * Generated from protobuf field <code>optional float score = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $score = null;
    /**
     * Output only. Explanation for question answering correctness score.
     *
     * Generated from protobuf field <code>string explanation = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $explanation = '';
    /**
     * Output only. Confidence for question answering correctness score.
     *
     * Generated from protobuf field <code>optional float confidence = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $confidence = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $score
     *           Output only. Question Answering Correctness score.
     *     @type string $explanation
     *           Output only. Explanation for question answering correctness score.
     *     @type float $confidence
     *           Output only. Confidence for question answering correctness score.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\EvaluationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Question Answering Correctness score.
     *
     * Generated from protobuf field <code>optional float score = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return float
     */
    public function getScore()
    {
        return isset($this->score) ? $this->score : 0.0;
    }

    public function hasScore()
    {
        return isset($this->score);
    }

    public function clearScore()
    {
        unset($this->score);
    }

    /**
     * Output only. Question Answering Correctness score.
     *
     * Generated from protobuf field <code>optional float score = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param float $var
     * @return $this
     */
    public function setScore($var)
    {
        GPBUtil::checkFloat($var);
        $this->score = $var;

        return $this;
    }

    /**
     * Output only. Explanation for question answering correctness score.
     *
     * Generated from protobuf field <code>string explanation = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getExplanation()
    {
        return $this->explanation;
    }

    /**
     * Output only. Explanation for question answering correctness score.
     *
     * Generated from protobuf field <code>string explanation = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setExplanation($var)
    {
        GPBUtil::checkString($var, True);
        $this->explanation = $var;

        return $this;
    }

    /**
     * Output only. Confidence for question answering correctness score.
     *
     * Generated from protobuf field <code>optional float confidence = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return float
     */
    public function getConfidence()
    {
        return isset($this->confidence) ? $this->confidence : 0.0;
    }

    public function hasConfidence()
    {
        return isset($this->confidence);
    }

    public function clearConfidence()
    {
        unset($this->confidence);
    }

    /**
     * Output only. Confidence for question answering correctness score.
     *
     * Generated from protobuf field <code>optional float confidence = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param float $var
     * @return $this
     */
    public function setConfidence($var)
    {
        GPBUtil::checkFloat($var);
        $this->confidence = $var;

        return $this;
    }

}

