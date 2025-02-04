<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/featurestore_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [FeaturestoreService.ListFeaturestores][google.cloud.aiplatform.v1.FeaturestoreService.ListFeaturestores].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ListFeaturestoresRequest</code>
 */
class ListFeaturestoresRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the Location to list Featurestores.
     * Format:
     * `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Lists the featurestores that match the filter expression. The following
     * fields are supported:
     * * `create_time`: Supports `=`, `!=`, `<`, `>`, `<=`, and `>=` comparisons.
     * Values must be
     *   in RFC 3339 format.
     * * `update_time`: Supports `=`, `!=`, `<`, `>`, `<=`, and `>=` comparisons.
     * Values must be
     *   in RFC 3339 format.
     * * `online_serving_config.fixed_node_count`: Supports `=`, `!=`, `<`, `>`,
     * `<=`, and `>=` comparisons.
     * * `labels`: Supports key-value equality and key presence.
     * Examples:
     * * `create_time > "2020-01-01" OR update_time > "2020-01-01"`
     *    Featurestores created or updated after 2020-01-01.
     * * `labels.env = "prod"`
     *    Featurestores with label "env" set to "prod".
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     */
    protected $filter = '';
    /**
     * The maximum number of Featurestores to return. The service may return fewer
     * than this value. If unspecified, at most 100 Featurestores will be
     * returned. The maximum value is 100; any value greater than 100 will be
     * coerced to 100.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     */
    protected $page_size = 0;
    /**
     * A page token, received from a previous
     * [FeaturestoreService.ListFeaturestores][google.cloud.aiplatform.v1.FeaturestoreService.ListFeaturestores]
     * call. Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to
     * [FeaturestoreService.ListFeaturestores][google.cloud.aiplatform.v1.FeaturestoreService.ListFeaturestores]
     * must match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     */
    protected $page_token = '';
    /**
     * A comma-separated list of fields to order by, sorted in ascending order.
     * Use "desc" after a field name for descending.
     * Supported Fields:
     *   * `create_time`
     *   * `update_time`
     *   * `online_serving_config.fixed_node_count`
     *
     * Generated from protobuf field <code>string order_by = 5;</code>
     */
    protected $order_by = '';
    /**
     * Mask specifying which fields to read.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask read_mask = 6;</code>
     */
    protected $read_mask = null;

    /**
     * @param string $parent Required. The resource name of the Location to list Featurestores.
     *                       Format:
     *                       `projects/{project}/locations/{location}`
     *                       Please see {@see FeaturestoreServiceClient::locationName()} for help formatting this field.
     *
     * @return \Google\Cloud\AIPlatform\V1\ListFeaturestoresRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the Location to list Featurestores.
     *           Format:
     *           `projects/{project}/locations/{location}`
     *     @type string $filter
     *           Lists the featurestores that match the filter expression. The following
     *           fields are supported:
     *           * `create_time`: Supports `=`, `!=`, `<`, `>`, `<=`, and `>=` comparisons.
     *           Values must be
     *             in RFC 3339 format.
     *           * `update_time`: Supports `=`, `!=`, `<`, `>`, `<=`, and `>=` comparisons.
     *           Values must be
     *             in RFC 3339 format.
     *           * `online_serving_config.fixed_node_count`: Supports `=`, `!=`, `<`, `>`,
     *           `<=`, and `>=` comparisons.
     *           * `labels`: Supports key-value equality and key presence.
     *           Examples:
     *           * `create_time > "2020-01-01" OR update_time > "2020-01-01"`
     *              Featurestores created or updated after 2020-01-01.
     *           * `labels.env = "prod"`
     *              Featurestores with label "env" set to "prod".
     *     @type int $page_size
     *           The maximum number of Featurestores to return. The service may return fewer
     *           than this value. If unspecified, at most 100 Featurestores will be
     *           returned. The maximum value is 100; any value greater than 100 will be
     *           coerced to 100.
     *     @type string $page_token
     *           A page token, received from a previous
     *           [FeaturestoreService.ListFeaturestores][google.cloud.aiplatform.v1.FeaturestoreService.ListFeaturestores]
     *           call. Provide this to retrieve the subsequent page.
     *           When paginating, all other parameters provided to
     *           [FeaturestoreService.ListFeaturestores][google.cloud.aiplatform.v1.FeaturestoreService.ListFeaturestores]
     *           must match the call that provided the page token.
     *     @type string $order_by
     *           A comma-separated list of fields to order by, sorted in ascending order.
     *           Use "desc" after a field name for descending.
     *           Supported Fields:
     *             * `create_time`
     *             * `update_time`
     *             * `online_serving_config.fixed_node_count`
     *     @type \Google\Protobuf\FieldMask $read_mask
     *           Mask specifying which fields to read.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\FeaturestoreService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the Location to list Featurestores.
     * Format:
     * `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the Location to list Featurestores.
     * Format:
     * `projects/{project}/locations/{location}`
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
     * Lists the featurestores that match the filter expression. The following
     * fields are supported:
     * * `create_time`: Supports `=`, `!=`, `<`, `>`, `<=`, and `>=` comparisons.
     * Values must be
     *   in RFC 3339 format.
     * * `update_time`: Supports `=`, `!=`, `<`, `>`, `<=`, and `>=` comparisons.
     * Values must be
     *   in RFC 3339 format.
     * * `online_serving_config.fixed_node_count`: Supports `=`, `!=`, `<`, `>`,
     * `<=`, and `>=` comparisons.
     * * `labels`: Supports key-value equality and key presence.
     * Examples:
     * * `create_time > "2020-01-01" OR update_time > "2020-01-01"`
     *    Featurestores created or updated after 2020-01-01.
     * * `labels.env = "prod"`
     *    Featurestores with label "env" set to "prod".
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Lists the featurestores that match the filter expression. The following
     * fields are supported:
     * * `create_time`: Supports `=`, `!=`, `<`, `>`, `<=`, and `>=` comparisons.
     * Values must be
     *   in RFC 3339 format.
     * * `update_time`: Supports `=`, `!=`, `<`, `>`, `<=`, and `>=` comparisons.
     * Values must be
     *   in RFC 3339 format.
     * * `online_serving_config.fixed_node_count`: Supports `=`, `!=`, `<`, `>`,
     * `<=`, and `>=` comparisons.
     * * `labels`: Supports key-value equality and key presence.
     * Examples:
     * * `create_time > "2020-01-01" OR update_time > "2020-01-01"`
     *    Featurestores created or updated after 2020-01-01.
     * * `labels.env = "prod"`
     *    Featurestores with label "env" set to "prod".
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * The maximum number of Featurestores to return. The service may return fewer
     * than this value. If unspecified, at most 100 Featurestores will be
     * returned. The maximum value is 100; any value greater than 100 will be
     * coerced to 100.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of Featurestores to return. The service may return fewer
     * than this value. If unspecified, at most 100 Featurestores will be
     * returned. The maximum value is 100; any value greater than 100 will be
     * coerced to 100.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * A page token, received from a previous
     * [FeaturestoreService.ListFeaturestores][google.cloud.aiplatform.v1.FeaturestoreService.ListFeaturestores]
     * call. Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to
     * [FeaturestoreService.ListFeaturestores][google.cloud.aiplatform.v1.FeaturestoreService.ListFeaturestores]
     * must match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * A page token, received from a previous
     * [FeaturestoreService.ListFeaturestores][google.cloud.aiplatform.v1.FeaturestoreService.ListFeaturestores]
     * call. Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to
     * [FeaturestoreService.ListFeaturestores][google.cloud.aiplatform.v1.FeaturestoreService.ListFeaturestores]
     * must match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * A comma-separated list of fields to order by, sorted in ascending order.
     * Use "desc" after a field name for descending.
     * Supported Fields:
     *   * `create_time`
     *   * `update_time`
     *   * `online_serving_config.fixed_node_count`
     *
     * Generated from protobuf field <code>string order_by = 5;</code>
     * @return string
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * A comma-separated list of fields to order by, sorted in ascending order.
     * Use "desc" after a field name for descending.
     * Supported Fields:
     *   * `create_time`
     *   * `update_time`
     *   * `online_serving_config.fixed_node_count`
     *
     * Generated from protobuf field <code>string order_by = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setOrderBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_by = $var;

        return $this;
    }

    /**
     * Mask specifying which fields to read.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask read_mask = 6;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getReadMask()
    {
        return $this->read_mask;
    }

    public function hasReadMask()
    {
        return isset($this->read_mask);
    }

    public function clearReadMask()
    {
        unset($this->read_mask);
    }

    /**
     * Mask specifying which fields to read.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask read_mask = 6;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setReadMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->read_mask = $var;

        return $this;
    }

}

