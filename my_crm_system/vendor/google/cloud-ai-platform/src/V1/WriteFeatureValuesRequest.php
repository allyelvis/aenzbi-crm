<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/featurestore_online_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [FeaturestoreOnlineServingService.WriteFeatureValues][google.cloud.aiplatform.v1.FeaturestoreOnlineServingService.WriteFeatureValues].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.WriteFeatureValuesRequest</code>
 */
class WriteFeatureValuesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the EntityType for the entities being
     * written. Value format:
     * `projects/{project}/locations/{location}/featurestores/
     * {featurestore}/entityTypes/{entityType}`. For example,
     * for a machine learning model predicting user clicks on a website, an
     * EntityType ID could be `user`.
     *
     * Generated from protobuf field <code>string entity_type = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $entity_type = '';
    /**
     * Required. The entities to be written. Up to 100,000 feature values can be
     * written across all `payloads`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.WriteFeatureValuesPayload payloads = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $payloads;

    /**
     * @param string                                                  $entityType Required. The resource name of the EntityType for the entities being
     *                                                                            written. Value format:
     *                                                                            `projects/{project}/locations/{location}/featurestores/
     *                                                                            {featurestore}/entityTypes/{entityType}`. For example,
     *                                                                            for a machine learning model predicting user clicks on a website, an
     *                                                                            EntityType ID could be `user`. Please see
     *                                                                            {@see FeaturestoreOnlineServingServiceClient::entityTypeName()} for help formatting this field.
     * @param \Google\Cloud\AIPlatform\V1\WriteFeatureValuesPayload[] $payloads   Required. The entities to be written. Up to 100,000 feature values can be
     *                                                                            written across all `payloads`.
     *
     * @return \Google\Cloud\AIPlatform\V1\WriteFeatureValuesRequest
     *
     * @experimental
     */
    public static function build(string $entityType, array $payloads): self
    {
        return (new self())
            ->setEntityType($entityType)
            ->setPayloads($payloads);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $entity_type
     *           Required. The resource name of the EntityType for the entities being
     *           written. Value format:
     *           `projects/{project}/locations/{location}/featurestores/
     *           {featurestore}/entityTypes/{entityType}`. For example,
     *           for a machine learning model predicting user clicks on a website, an
     *           EntityType ID could be `user`.
     *     @type array<\Google\Cloud\AIPlatform\V1\WriteFeatureValuesPayload>|\Google\Protobuf\Internal\RepeatedField $payloads
     *           Required. The entities to be written. Up to 100,000 feature values can be
     *           written across all `payloads`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\FeaturestoreOnlineService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the EntityType for the entities being
     * written. Value format:
     * `projects/{project}/locations/{location}/featurestores/
     * {featurestore}/entityTypes/{entityType}`. For example,
     * for a machine learning model predicting user clicks on a website, an
     * EntityType ID could be `user`.
     *
     * Generated from protobuf field <code>string entity_type = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getEntityType()
    {
        return $this->entity_type;
    }

    /**
     * Required. The resource name of the EntityType for the entities being
     * written. Value format:
     * `projects/{project}/locations/{location}/featurestores/
     * {featurestore}/entityTypes/{entityType}`. For example,
     * for a machine learning model predicting user clicks on a website, an
     * EntityType ID could be `user`.
     *
     * Generated from protobuf field <code>string entity_type = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setEntityType($var)
    {
        GPBUtil::checkString($var, True);
        $this->entity_type = $var;

        return $this;
    }

    /**
     * Required. The entities to be written. Up to 100,000 feature values can be
     * written across all `payloads`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.WriteFeatureValuesPayload payloads = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPayloads()
    {
        return $this->payloads;
    }

    /**
     * Required. The entities to be written. Up to 100,000 feature values can be
     * written across all `payloads`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.WriteFeatureValuesPayload payloads = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<\Google\Cloud\AIPlatform\V1\WriteFeatureValuesPayload>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPayloads($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\WriteFeatureValuesPayload::class);
        $this->payloads = $arr;

        return $this;
    }

}

