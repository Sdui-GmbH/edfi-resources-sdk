# # TpdmPerformanceEvaluation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**evaluation_period_descriptor** | **string** | The period for the evaluation. |
**performance_evaluation_title** | **string** | An assigned unique identifier for the performance evaluation. |
**performance_evaluation_type_descriptor** | **string** | The type of performance evaluation conducted. |
**term_descriptor** | **string** | The term for the session during the school year. |
**education_organization_reference** | [**\Resources\Model\EdFiEducationOrganizationReference**](EdFiEducationOrganizationReference.md) |  |
**school_year_type_reference** | [**\Resources\Model\EdFiSchoolYearTypeReference**](EdFiSchoolYearTypeReference.md) |  |
**academic_subject_descriptor** | **string** | The description of the content or subject area of a performance evaluation. | [optional]
**grade_levels** | [**\Resources\Model\TpdmPerformanceEvaluationGradeLevel[]**](TpdmPerformanceEvaluationGradeLevel.md) | An unordered collection of performanceEvaluationGradeLevels. The grade levels involved with the performance evaluation. | [optional]
**performance_evaluation_description** | **string** | The long description of the Performance Evaluation. | [optional]
**rating_levels** | [**\Resources\Model\TpdmPerformanceEvaluationRatingLevel[]**](TpdmPerformanceEvaluationRatingLevel.md) | An unordered collection of performanceEvaluationRatingLevels. The descriptive level(s) of ratings (cut scores) for the evaluation. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
