<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/featurestore_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [FeaturestoreService.UpdateFeaturestore][google.cloud.aiplatform.v1.FeaturestoreService.UpdateFeaturestore].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.UpdateFeaturestoreRequest</code>
 */
class UpdateFeaturestoreRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The Featurestore's `name` field is used to identify the
     * Featurestore to be updated. Format:
     * `projects/{project}/locations/{location}/featurestores/{featurestore}`
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Featurestore featurestore = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $featurestore = null;
    /**
     * Field mask is used to specify the fields to be overwritten in the
     * Featurestore resource by the update.
     * The fields specified in the update_mask are relative to the resource, not
     * the full request. A field will be overwritten if it is in the mask. If the
     * user does not provide a mask then only the non-empty fields present in the
     * request will be overwritten. Set the update_mask to `*` to override all
     * fields.
     * Updatable fields:
     *   * `labels`
     *   * `online_serving_config.fixed_node_count`
     *   * `online_serving_config.scaling`
     *   * `online_storage_ttl_days`
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    protected $update_mask = null;

    /**
     * @param \Google\Cloud\AIPlatform\V1\Featurestore $featurestore Required. The Featurestore's `name` field is used to identify the
     *                                                               Featurestore to be updated. Format:
     *                                                               `projects/{project}/locations/{location}/featurestores/{featurestore}`
     * @param \Google\Protobuf\FieldMask               $updateMask   Field mask is used to specify the fields to be overwritten in the
     *                                                               Featurestore resource by the update.
     *                                                               The fields specified in the update_mask are relative to the resource, not
     *                                                               the full request. A field will be overwritten if it is in the mask. If the
     *                                                               user does not provide a mask then only the non-empty fields present in the
     *                                                               request will be overwritten. Set the update_mask to `*` to override all
     *                                                               fields.
     *
     *                                                               Updatable fields:
     *
     *                                                               * `labels`
     *                                                               * `online_serving_config.fixed_node_count`
     *                                                               * `online_serving_config.scaling`
     *                                                               * `online_storage_ttl_days`
     *
     * @return \Google\Cloud\AIPlatform\V1\UpdateFeaturestoreRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\AIPlatform\V1\Featurestore $featurestore, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setFeaturestore($featurestore)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AIPlatform\V1\Featurestore $featurestore
     *           Required. The Featurestore's `name` field is used to identify the
     *           Featurestore to be updated. Format:
     *           `projects/{project}/locations/{location}/featurestores/{featurestore}`
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Field mask is used to specify the fields to be overwritten in the
     *           Featurestore resource by the update.
     *           The fields specified in the update_mask are relative to the resource, not
     *           the full request. A field will be overwritten if it is in the mask. If the
     *           user does not provide a mask then only the non-empty fields present in the
     *           request will be overwritten. Set the update_mask to `*` to override all
     *           fields.
     *           Updatable fields:
     *             * `labels`
     *             * `online_serving_config.fixed_node_count`
     *             * `online_serving_config.scaling`
     *             * `online_storage_ttl_days`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\FeaturestoreService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The Featurestore's `name` field is used to identify the
     * Featurestore to be updated. Format:
     * `projects/{project}/locations/{location}/featurestores/{featurestore}`
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Featurestore featurestore = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\AIPlatform\V1\Featurestore|null
     */
    public function getFeaturestore()
    {
        return $this->featurestore;
    }

    public function hasFeaturestore()
    {
        return isset($this->featurestore);
    }

    public function clearFeaturestore()
    {
        unset($this->featurestore);
    }

    /**
     * Required. The Featurestore's `name` field is used to identify the
     * Featurestore to be updated. Format:
     * `projects/{project}/locations/{location}/featurestores/{featurestore}`
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Featurestore featurestore = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AIPlatform\V1\Featurestore $var
     * @return $this
     */
    public function setFeaturestore($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\Featurestore::class);
        $this->featurestore = $var;

        return $this;
    }

    /**
     * Field mask is used to specify the fields to be overwritten in the
     * Featurestore resource by the update.
     * The fields specified in the update_mask are relative to the resource, not
     * the full request. A field will be overwritten if it is in the mask. If the
     * user does not provide a mask then only the non-empty fields present in the
     * request will be overwritten. Set the update_mask to `*` to override all
     * fields.
     * Updatable fields:
     *   * `labels`
     *   * `online_serving_config.fixed_node_count`
     *   * `online_serving_config.scaling`
     *   * `online_storage_ttl_days`
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Field mask is used to specify the fields to be overwritten in the
     * Featurestore resource by the update.
     * The fields specified in the update_mask are relative to the resource, not
     * the full request. A field will be overwritten if it is in the mask. If the
     * user does not provide a mask then only the non-empty fields present in the
     * request will be overwritten. Set the update_mask to `*` to override all
     * fields.
     * Updatable fields:
     *   * `labels`
     *   * `online_serving_config.fixed_node_count`
     *   * `online_serving_config.scaling`
     *   * `online_storage_ttl_days`
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

