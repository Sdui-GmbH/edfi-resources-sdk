# # EdFiGradingPeriod

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**grading_period_descriptor** | **string** | The state&#39;s name of the period for which grades are reported. |
**grading_period_name** | **string** | The school&#39;s descriptive name of the grading period. |
**school_reference** | [**\Resources\Model\EdFiSchoolReference**](EdFiSchoolReference.md) |  |
**school_year_type_reference** | [**\Resources\Model\EdFiSchoolYearTypeReference**](EdFiSchoolYearTypeReference.md) |  |
**begin_date** | **\DateTime** | Month, day, and year of the first day of the grading period.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines. |
**end_date** | **\DateTime** | Month, day, and year of the last day of the grading period.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines. |
**period_sequence** | **int** | The sequential order of this period relative to other periods. | [optional]
**total_instructional_days** | **int** | Total days available for educational instruction during the grading period. |
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
