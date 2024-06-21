# # EdFiStudentAssessmentStudentObjectiveAssessment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**administration_date** | **\DateTime** | The date and time an assessment was completed by the student. The use of ISO-8601 formats with a timezone designator (UTC or time offset) is recommended in order to prevent ambiguity due to time zones. | [optional]
**administration_end_date** | **\DateTime** | The date and time an assessment administration ended. | [optional]
**assessed_minutes** | **int** | Reported time student was assessed in minutes. | [optional]
**objective_assessment_reference** | [**\OpenAPI\Client\Model\EdFiObjectiveAssessmentReference**](EdFiObjectiveAssessmentReference.md) |  |
**performance_levels** | [**\OpenAPI\Client\Model\EdFiStudentAssessmentStudentObjectiveAssessmentPerformanceLevel[]**](EdFiStudentAssessmentStudentObjectiveAssessmentPerformanceLevel.md) | An unordered collection of studentAssessmentStudentObjectiveAssessmentPerformanceLevels. The performance level(s) achieved for the objective assessment. | [optional]
**score_results** | [**\OpenAPI\Client\Model\EdFiStudentAssessmentStudentObjectiveAssessmentScoreResult[]**](EdFiStudentAssessmentStudentObjectiveAssessmentScoreResult.md) | An unordered collection of studentAssessmentStudentObjectiveAssessmentScoreResults. A meaningful score or statistical expression of the performance of an individual. The results can be expressed as a number, percentile, range, level, etc. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
