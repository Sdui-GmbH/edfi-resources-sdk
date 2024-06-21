# # EdFiAssessmentScoreRangeLearningStandard

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**learning_standards** | [**\OpenAPI\Client\Model\EdFiAssessmentScoreRangeLearningStandardLearningStandard[]**](EdFiAssessmentScoreRangeLearningStandardLearningStandard.md) | An unordered collection of assessmentScoreRangeLearningStandardLearningStandards. Learning standard associated with the score range. |
**score_range_id** | **string** | A unique number or alphanumeric code assigned to the score range associated with one or more learning standards. |
**assessment_reference** | [**\OpenAPI\Client\Model\EdFiAssessmentReference**](EdFiAssessmentReference.md) |  |
**objective_assessment_reference** | [**\OpenAPI\Client\Model\EdFiObjectiveAssessmentReference**](EdFiObjectiveAssessmentReference.md) |  | [optional]
**assessment_reporting_method_descriptor** | **string** | The assessment reporting method defined (e.g., scale score, RIT scale score) associated with the referenced learning standard(s). | [optional]
**maximum_score** | **string** | The maximum score in the score range. |
**minimum_score** | **string** | The minimum score in the score range. |
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
