<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/reasoning_engine_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [ReasoningEngineService.ListReasoningEngines][google.cloud.aiplatform.v1.ReasoningEngineService.ListReasoningEngines].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ListReasoningEnginesRequest</code>
 */
class ListReasoningEnginesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the Location to list the ReasoningEngines
     * from. Format: `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Optional. The standard list filter.
     * More detail in [AIP-160](https://google.aip.dev/160).
     *
     * Generated from protobuf field <code>string filter = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $filter = '';
    /**
     * Optional. The standard list page size.
     *
     * Generated from protobuf field <code>int32 page_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_size = 0;
    /**
     * Optional. The standard list page token.
     *
     * Generated from protobuf field <code>string page_token = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_token = '';

    /**
     * @param string $parent Required. The resource name of the Location to list the ReasoningEngines
     *                       from. Format: `projects/{project}/locations/{location}`
     *                       Please see {@see ReasoningEngineServiceClient::locationName()} for help formatting this field.
     *
     * @return \Google\Cloud\AIPlatform\V1\ListReasoningEnginesRequest
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
     *           Required. The resource name of the Location to list the ReasoningEngines
     *           from. Format: `projects/{project}/locations/{location}`
     *     @type string $filter
     *           Optional. The standard list filter.
     *           More detail in [AIP-160](https://google.aip.dev/160).
     *     @type int $page_size
     *           Optional. The standard list page size.
     *     @type string $page_token
     *           Optional. The standard list page token.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\ReasoningEngineService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the Location to list the ReasoningEngines
     * from. Format: `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the Location to list the ReasoningEngines
     * from. Format: `projects/{project}/locations/{location}`
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
     * Optional. The standard list filter.
     * More detail in [AIP-160](https://google.aip.dev/160).
     *
     * Generated from protobuf field <code>string filter = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Optional. The standard list filter.
     * More detail in [AIP-160](https://google.aip.dev/160).
     *
     * Generated from protobuf field <code>string filter = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. The standard list page size.
     *
     * Generated from protobuf field <code>int32 page_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. The standard list page size.
     *
     * Generated from protobuf field <code>int32 page_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. The standard list page token.
     *
     * Generated from protobuf field <code>string page_token = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. The standard list page token.
     *
     * Generated from protobuf field <code>string page_token = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

