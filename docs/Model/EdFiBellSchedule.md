# # EdFiBellSchedule

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**bell_schedule_name** | **string** | Name or title of the bell schedule. |
**class_periods** | [**\OpenAPI\Client\Model\EdFiBellScheduleClassPeriod[]**](EdFiBellScheduleClassPeriod.md) | An unordered collection of bellScheduleClassPeriods. The class periods that compose this bell schedule. |
**school_reference** | [**\OpenAPI\Client\Model\EdFiSchoolReference**](EdFiSchoolReference.md) |  |
**alternate_day_name** | **string** | An alternate name for the day (e.g., Red, Blue). | [optional]
**dates** | [**\OpenAPI\Client\Model\EdFiBellScheduleDate[]**](EdFiBellScheduleDate.md) | An unordered collection of bellScheduleDates. The dates for which the bell schedule applies. | [optional]
**end_time** | **string** | An indication of the time of day the bell schedule ends. | [optional]
**grade_levels** | [**\OpenAPI\Client\Model\EdFiBellScheduleGradeLevel[]**](EdFiBellScheduleGradeLevel.md) | An unordered collection of bellScheduleGradeLevels. The grade levels the particular bell schedule applies to. | [optional]
**start_time** | **string** | An indication of the time of day the bell schedule begins. | [optional]
**total_instructional_time** | **int** | The total instructional time in minutes per day for the bell schedule. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
