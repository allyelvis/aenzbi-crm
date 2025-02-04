<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/vertex_rag_data_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [VertexRagDataService.ListRagCorpora][google.cloud.aiplatform.v1.VertexRagDataService.ListRagCorpora].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ListRagCorporaRequest</code>
 */
class ListRagCorporaRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the Location from which to list the
     * RagCorpora. Format: `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Optional. The standard list page size.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_size = 0;
    /**
     * Optional. The standard list page token.
     * Typically obtained via
     * [ListRagCorporaResponse.next_page_token][google.cloud.aiplatform.v1.ListRagCorporaResponse.next_page_token]
     * of the previous
     * [VertexRagDataService.ListRagCorpora][google.cloud.aiplatform.v1.VertexRagDataService.ListRagCorpora]
     * call.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_token = '';

    /**
     * @param string $parent Required. The resource name of the Location from which to list the
     *                       RagCorpora. Format: `projects/{project}/locations/{location}`
     *                       Please see {@see VertexRagDataServiceClient::locationName()} for help formatting this field.
     *
     * @return \Google\Cloud\AIPlatform\V1\ListRagCorporaRequest
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
     *           Required. The resource name of the Location from which to list the
     *           RagCorpora. Format: `projects/{project}/locations/{location}`
     *     @type int $page_size
     *           Optional. The standard list page size.
     *     @type string $page_token
     *           Optional. The standard list page token.
     *           Typically obtained via
     *           [ListRagCorporaResponse.next_page_token][google.cloud.aiplatform.v1.ListRagCorporaResponse.next_page_token]
     *           of the previous
     *           [VertexRagDataService.ListRagCorpora][google.cloud.aiplatform.v1.VertexRagDataService.ListRagCorpora]
     *           call.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\VertexRagDataService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the Location from which to list the
     * RagCorpora. Format: `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the Location from which to list the
     * RagCorpora. Format: `projects/{project}/locations/{location}`
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
     * Optional. The standard list page size.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. The standard list page size.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Typically obtained via
     * [ListRagCorporaResponse.next_page_token][google.cloud.aiplatform.v1.ListRagCorporaResponse.next_page_token]
     * of the previous
     * [VertexRagDataService.ListRagCorpora][google.cloud.aiplatform.v1.VertexRagDataService.ListRagCorpora]
     * call.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. The standard list page token.
     * Typically obtained via
     * [ListRagCorporaResponse.next_page_token][google.cloud.aiplatform.v1.ListRagCorporaResponse.next_page_token]
     * of the previous
     * [VertexRagDataService.ListRagCorpora][google.cloud.aiplatform.v1.VertexRagDataService.ListRagCorpora]
     * call.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
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

