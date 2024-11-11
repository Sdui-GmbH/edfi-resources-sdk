# # EdFiSession

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**session_name** | **string** | The identifier for the calendar for the academic session. |
**school_reference** | [**\OpenAPI\Client\Model\EdFiSchoolReference**](EdFiSchoolReference.md) |  |
**school_year_type_reference** | [**\OpenAPI\Client\Model\EdFiSchoolYearTypeReference**](EdFiSchoolYearTypeReference.md) |  |
**academic_weeks** | [**\OpenAPI\Client\Model\EdFiSessionAcademicWeek[]**](EdFiSessionAcademicWeek.md) | An unordered collection of sessionAcademicWeeks. The academic weeks associated with the school year. | [optional]
**begin_date** | **\DateTime** | Month, day, and year of the first day of the session. |
**end_date** | **\DateTime** | Month, day and year of the last day of the session. |
**grading_periods** | [**\OpenAPI\Client\Model\EdFiSessionGradingPeriod[]**](EdFiSessionGradingPeriod.md) | An unordered collection of sessionGradingPeriods. Grading periods associated with the session. | [optional]
**term_descriptor** | **string** | A descriptor value to indicate the term that the session is associated with. |
**total_instructional_days** | **int** | The total number of instructional days in the school calendar. |
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
