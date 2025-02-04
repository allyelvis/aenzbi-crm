<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/notebook_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [NotebookService.GetNotebookRuntime][google.cloud.aiplatform.v1.NotebookService.GetNotebookRuntime]
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.GetNotebookRuntimeRequest</code>
 */
class GetNotebookRuntimeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the NotebookRuntime resource.
     * Instead of checking whether the name is in valid NotebookRuntime resource
     * name format, directly throw NotFound exception if there is no such
     * NotebookRuntime in spanner.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. The name of the NotebookRuntime resource.
     *                     Instead of checking whether the name is in valid NotebookRuntime resource
     *                     name format, directly throw NotFound exception if there is no such
     *                     NotebookRuntime in spanner. Please see
     *                     {@see NotebookServiceClient::notebookRuntimeName()} for help formatting this field.
     *
     * @return \Google\Cloud\AIPlatform\V1\GetNotebookRuntimeRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the NotebookRuntime resource.
     *           Instead of checking whether the name is in valid NotebookRuntime resource
     *           name format, directly throw NotFound exception if there is no such
     *           NotebookRuntime in spanner.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\NotebookService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the NotebookRuntime resource.
     * Instead of checking whether the name is in valid NotebookRuntime resource
     * name format, directly throw NotFound exception if there is no such
     * NotebookRuntime in spanner.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the NotebookRuntime resource.
     * Instead of checking whether the name is in valid NotebookRuntime resource
     * name format, directly throw NotFound exception if there is no such
     * NotebookRuntime in spanner.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

