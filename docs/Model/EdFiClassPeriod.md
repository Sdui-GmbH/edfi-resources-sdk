# # EdFiClassPeriod

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**class_period_name** | **string** | An indication of the portion of a typical daily session in which students receive instruction in a specified subject (e.g., morning, sixth period, block period, or AB schedules). |
**school_reference** | [**\OpenAPI\Client\Model\EdFiSchoolReference**](EdFiSchoolReference.md) |  |
**meeting_times** | [**\OpenAPI\Client\Model\EdFiClassPeriodMeetingTime[]**](EdFiClassPeriodMeetingTime.md) | An unordered collection of classPeriodMeetingTimes. The meeting time(s) for a class period. | [optional]
**official_attendance_period** | **bool** | Indicator of whether this class period is used for official daily attendance. Alternatively, official daily attendance may be tied to a section. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
