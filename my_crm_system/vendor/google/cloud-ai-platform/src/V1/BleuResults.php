<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/evaluation_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Results for bleu metric.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.BleuResults</code>
 */
class BleuResults extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Bleu metric values.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.BleuMetricValue bleu_metric_values = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $bleu_metric_values;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\AIPlatform\V1\BleuMetricValue>|\Google\Protobuf\Internal\RepeatedField $bleu_metric_values
     *           Output only. Bleu metric values.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\EvaluationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Bleu metric values.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.BleuMetricValue bleu_metric_values = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBleuMetricValues()
    {
        return $this->bleu_metric_values;
    }

    /**
     * Output only. Bleu metric values.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.BleuMetricValue bleu_metric_values = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Cloud\AIPlatform\V1\BleuMetricValue>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBleuMetricValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\BleuMetricValue::class);
        $this->bleu_metric_values = $arr;

        return $this;
    }

}

