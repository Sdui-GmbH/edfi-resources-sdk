# # EdFiDescriptorMapping

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**mapped_namespace** | **string** | The namespace of the descriptor value to which the from descriptor value is mapped to. |
**mapped_value** | **string** | The descriptor value to which the from descriptor value is being mapped to. |
**namespace** | **string** | The namespace of the descriptor value that is being mapped to another value. |
**value** | **string** | The descriptor value that is being mapped to another value. |
**model_entities** | [**\Resources\Model\EdFiDescriptorMappingModelEntity[]**](EdFiDescriptorMappingModelEntity.md) | An unordered collection of descriptorMappingModelEntities. The resources for which the descriptor mapping applies. If empty, the mapping is assumed to be applicable to all resources in which the descriptor appears. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
