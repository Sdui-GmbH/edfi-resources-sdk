# # EdFiObjectiveAssessment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**identification_code** | **string** | A unique number or alphanumeric code assigned to an objective assessment by a school, school system, a state, or other agency or entity. |
**assessment_reference** | [**\Resources\Model\EdFiAssessmentReference**](EdFiAssessmentReference.md) |  |
**parent_objective_assessment_reference** | [**\Resources\Model\EdFiObjectiveAssessmentReference**](EdFiObjectiveAssessmentReference.md) |  | [optional]
**academic_subject_descriptor** | **string** | The subject area of the objective assessment. | [optional]
**assessment_items** | [**\Resources\Model\EdFiObjectiveAssessmentAssessmentItem[]**](EdFiObjectiveAssessmentAssessmentItem.md) | An unordered collection of objectiveAssessmentAssessmentItems. References individual test items, if appropriate. | [optional]
**description** | **string** | The description of the objective assessment (e.g., vocabulary, measurement, or geometry). | [optional]
**learning_standards** | [**\Resources\Model\EdFiObjectiveAssessmentLearningStandard[]**](EdFiObjectiveAssessmentLearningStandard.md) | An unordered collection of objectiveAssessmentLearningStandards. Learning standard tested by this objective assessment. | [optional]
**max_raw_score** | **float** | The maximum raw score achievable across all assessment items that are correct and scored at the maximum. | [optional]
**nomenclature** | **string** | Reflects the specific nomenclature used for this level of objective assessment. | [optional]
**percent_of_assessment** | **float** | The percentage of the assessment that tests this objective. | [optional]
**performance_levels** | [**\Resources\Model\EdFiObjectiveAssessmentPerformanceLevel[]**](EdFiObjectiveAssessmentPerformanceLevel.md) | An unordered collection of objectiveAssessmentPerformanceLevels. Definition of the performance levels and the associated cut scores. Three styles are supported: 1. Specification of performance level by minimum and maximum score, 2. Specification of performance level by cut score, using only minimum score, 3. Specification of performance level without any mapping to scores | [optional]
**scores** | [**\Resources\Model\EdFiObjectiveAssessmentScore[]**](EdFiObjectiveAssessmentScore.md) | An unordered collection of objectiveAssessmentScores. Definition of the scores to be expected from this objective assessment. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
