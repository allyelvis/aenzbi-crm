<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/tool.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Retrieve from Vertex AI Search datastore for grounding.
 * See https://cloud.google.com/products/agent-builder
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.VertexAISearch</code>
 */
class VertexAISearch extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Fully-qualified Vertex AI Search data store resource ID.
     * Format:
     * `projects/{project}/locations/{location}/collections/{collection}/dataStores/{dataStore}`
     *
     * Generated from protobuf field <code>string datastore = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $datastore = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $datastore
     *           Required. Fully-qualified Vertex AI Search data store resource ID.
     *           Format:
     *           `projects/{project}/locations/{location}/collections/{collection}/dataStores/{dataStore}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Tool::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Fully-qualified Vertex AI Search data store resource ID.
     * Format:
     * `projects/{project}/locations/{location}/collections/{collection}/dataStores/{dataStore}`
     *
     * Generated from protobuf field <code>string datastore = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDatastore()
    {
        return $this->datastore;
    }

    /**
     * Required. Fully-qualified Vertex AI Search data store resource ID.
     * Format:
     * `projects/{project}/locations/{location}/collections/{collection}/dataStores/{dataStore}`
     *
     * Generated from protobuf field <code>string datastore = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDatastore($var)
    {
        GPBUtil::checkString($var, True);
        $this->datastore = $var;

        return $this;
    }

}

