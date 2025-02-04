<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/index_service.proto

namespace GPBMetadata\Google\Cloud\Aiplatform\V1;

class IndexService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Index::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Operation::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(
            '
�$
.google/cloud/aiplatform/v1/index_service.protogoogle.cloud.aiplatform.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto&google/cloud/aiplatform/v1/index.proto*google/cloud/aiplatform/v1/operation.proto#google/longrunning/operations.protogoogle/protobuf/empty.proto google/protobuf/field_mask.proto"�
CreateIndexRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location5
index (2!.google.cloud.aiplatform.v1.IndexB�A"�
CreateIndexOperationMetadataN
generic_metadata (24.google.cloud.aiplatform.v1.GenericOperationMetadatav
*nearest_neighbor_search_operation_metadata (2B.google.cloud.aiplatform.v1.NearestNeighborSearchOperationMetadata"H
GetIndexRequest5
name (	B\'�A�A!
aiplatform.googleapis.com/Index"�
ListIndexesRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
filter (	
	page_size (

page_token (	-
	read_mask (2.google.protobuf.FieldMask"b
ListIndexesResponse2
indexes (2!.google.cloud.aiplatform.v1.Index
next_page_token (	"|
UpdateIndexRequest5
index (2!.google.cloud.aiplatform.v1.IndexB�A/
update_mask (2.google.protobuf.FieldMask"�
UpdateIndexOperationMetadataN
generic_metadata (24.google.cloud.aiplatform.v1.GenericOperationMetadatav
*nearest_neighbor_search_operation_metadata (2B.google.cloud.aiplatform.v1.NearestNeighborSearchOperationMetadata"K
DeleteIndexRequest5
name (	B\'�A�A!
aiplatform.googleapis.com/Index"�
UpsertDatapointsRequest6
index (	B\'�A�A!
aiplatform.googleapis.com/Index>

datapoints (2*.google.cloud.aiplatform.v1.IndexDatapoint4
update_mask (2.google.protobuf.FieldMaskB�A"
UpsertDatapointsResponse"h
RemoveDatapointsRequest6
index (	B\'�A�A!
aiplatform.googleapis.com/Index
datapoint_ids (	"
RemoveDatapointsResponse"�	
&NearestNeighborSearchOperationMetadata{
content_validation_stats (2Y.google.cloud.aiplatform.v1.NearestNeighborSearchOperationMetadata.ContentValidationStats
data_bytes_count (�
RecordErrorr

error_type (2^.google.cloud.aiplatform.v1.NearestNeighborSearchOperationMetadata.RecordError.RecordErrorType
error_message (	
source_gcs_uri (	
embedding_id (	

raw_record (	"�
RecordErrorType
ERROR_TYPE_UNSPECIFIED 

EMPTY_LINE
INVALID_JSON_SYNTAX
INVALID_CSV_SYNTAX
INVALID_AVRO_SYNTAX
INVALID_EMBEDDING_ID
EMBEDDING_SIZE_MISMATCH
NAMESPACE_MISSING
PARSING_ERROR
DUPLICATE_NAMESPACE	
OP_IN_DATAPOINT

MULTIPLE_VALUES
INVALID_NUMERIC_VALUE
INVALID_ENCODING
INVALID_SPARSE_DIMENSIONS
INVALID_TOKEN_VALUE
INVALID_SPARSE_EMBEDDING
INVALID_EMBEDDING�
ContentValidationStats
source_gcs_uri (	
valid_record_count (
invalid_record_count (f
partial_errors (2N.google.cloud.aiplatform.v1.NearestNeighborSearchOperationMetadata.RecordError!
valid_sparse_record_count (#
invalid_sparse_record_count (2�
IndexService�
CreateIndex..google.cloud.aiplatform.v1.CreateIndexRequest.google.longrunning.Operation"q�A%
IndexCreateIndexOperationMetadata�Aparent,index���4"+/v1/{parent=projects/*/locations/*}/indexes:index�
GetIndex+.google.cloud.aiplatform.v1.GetIndexRequest!.google.cloud.aiplatform.v1.Index":�Aname���-+/v1/{name=projects/*/locations/*/indexes/*}�
ListIndexes..google.cloud.aiplatform.v1.ListIndexesRequest/.google.cloud.aiplatform.v1.ListIndexesResponse"<�Aparent���-+/v1/{parent=projects/*/locations/*}/indexes�
UpdateIndex..google.cloud.aiplatform.v1.UpdateIndexRequest.google.longrunning.Operation"|�A%
IndexUpdateIndexOperationMetadata�Aindex,update_mask���:21/v1/{index.name=projects/*/locations/*/indexes/*}:index�
DeleteIndex..google.cloud.aiplatform.v1.DeleteIndexRequest.google.longrunning.Operation"m�A0
google.protobuf.EmptyDeleteOperationMetadata�Aname���-*+/v1/{name=projects/*/locations/*/indexes/*}�
UpsertDatapoints3.google.cloud.aiplatform.v1.UpsertDatapointsRequest4.google.cloud.aiplatform.v1.UpsertDatapointsResponse"H���B"=/v1/{index=projects/*/locations/*/indexes/*}:upsertDatapoints:*�
RemoveDatapoints3.google.cloud.aiplatform.v1.RemoveDatapointsRequest4.google.cloud.aiplatform.v1.RemoveDatapointsResponse"H���B"=/v1/{index=projects/*/locations/*/indexes/*}:removeDatapoints:*M�Aaiplatform.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
com.google.cloud.aiplatform.v1BIndexServiceProtoPZ>cloud.google.com/go/aiplatform/apiv1/aiplatformpb;aiplatformpb�Google.Cloud.AIPlatform.V1�Google\\Cloud\\AIPlatform\\V1�Google::Cloud::AIPlatform::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

