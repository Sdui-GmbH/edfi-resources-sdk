# # EdFiProgramEvaluationElement

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**program_evaluation_element_title** | **string** | The name or title of the program evaluation element. |
**program_evaluation_objective_reference** | [**\Resources\Model\EdFiProgramEvaluationObjectiveReference**](EdFiProgramEvaluationObjectiveReference.md) |  | [optional]
**program_evaluation_reference** | [**\Resources\Model\EdFiProgramEvaluationReference**](EdFiProgramEvaluationReference.md) |  |
**element_max_numeric_rating** | **float** | The maximum summary numerical rating or score for the program evaluation element. | [optional]
**element_min_numeric_rating** | **float** | The minimum summary numerical rating or score for the program evaluation element. If omitted, assumed to be 0.0. | [optional]
**element_sort_order** | **int** | The sort order of this program evaluation element. | [optional]
**program_evaluation_element_description** | **string** | The long description of the program evaluation element. | [optional]
**program_evaluation_levels** | [**\Resources\Model\EdFiProgramEvaluationElementProgramEvaluationLevel[]**](EdFiProgramEvaluationElementProgramEvaluationLevel.md) | An unordered collection of programEvaluationElementProgramEvaluationLevels. The descriptive level(s) of ratings (cut scores) for the program evaluation element. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
