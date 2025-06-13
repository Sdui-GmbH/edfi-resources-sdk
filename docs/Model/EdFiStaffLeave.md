# # EdFiStaffLeave

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**begin_date** | **\DateTime** | The begin date of the staff leave.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines. |
**staff_leave_event_category_descriptor** | **string** | The code describing the type of leave taken. |
**staff_reference** | [**\Resources\Model\EdFiStaffReference**](EdFiStaffReference.md) |  |
**end_date** | **\DateTime** | The end date of the staff leave.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines. | [optional]
**reason** | **string** | Expanded reason for the staff leave. | [optional]
**substitute_assigned** | **bool** | Indicator of whether a substitute was assigned during the period of staff leave. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
