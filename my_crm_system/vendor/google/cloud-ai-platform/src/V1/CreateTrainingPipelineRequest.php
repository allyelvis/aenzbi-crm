<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/pipeline_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [PipelineService.CreateTrainingPipeline][google.cloud.aiplatform.v1.PipelineService.CreateTrainingPipeline].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.CreateTrainingPipelineRequest</code>
 */
class CreateTrainingPipelineRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the Location to create the TrainingPipeline
     * in. Format: `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The TrainingPipeline to create.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.TrainingPipeline training_pipeline = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $training_pipeline = null;

    /**
     * @param string                                       $parent           Required. The resource name of the Location to create the TrainingPipeline
     *                                                                       in. Format: `projects/{project}/locations/{location}`
     *                                                                       Please see {@see PipelineServiceClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\AIPlatform\V1\TrainingPipeline $trainingPipeline Required. The TrainingPipeline to create.
     *
     * @return \Google\Cloud\AIPlatform\V1\CreateTrainingPipelineRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\AIPlatform\V1\TrainingPipeline $trainingPipeline): self
    {
        return (new self())
            ->setParent($parent)
            ->setTrainingPipeline($trainingPipeline);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the Location to create the TrainingPipeline
     *           in. Format: `projects/{project}/locations/{location}`
     *     @type \Google\Cloud\AIPlatform\V1\TrainingPipeline $training_pipeline
     *           Required. The TrainingPipeline to create.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\PipelineService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the Location to create the TrainingPipeline
     * in. Format: `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the Location to create the TrainingPipeline
     * in. Format: `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The TrainingPipeline to create.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.TrainingPipeline training_pipeline = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\AIPlatform\V1\TrainingPipeline|null
     */
    public function getTrainingPipeline()
    {
        return $this->training_pipeline;
    }

    public function hasTrainingPipeline()
    {
        return isset($this->training_pipeline);
    }

    public function clearTrainingPipeline()
    {
        unset($this->training_pipeline);
    }

    /**
     * Required. The TrainingPipeline to create.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.TrainingPipeline training_pipeline = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AIPlatform\V1\TrainingPipeline $var
     * @return $this
     */
    public function setTrainingPipeline($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\TrainingPipeline::class);
        $this->training_pipeline = $var;

        return $this;
    }

}

