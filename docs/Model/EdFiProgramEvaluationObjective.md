# # EdFiProgramEvaluationObjective

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**program_evaluation_objective_title** | **string** | The name or title of the program evaluation objective. |
**program_evaluation_reference** | [**\OpenAPI\Client\Model\EdFiProgramEvaluationReference**](EdFiProgramEvaluationReference.md) |  |
**objective_max_numeric_rating** | **float** | The maximum summary numerical rating or score for the program evaluation objective. | [optional]
**objective_min_numeric_rating** | **float** | The minimum summary numerical rating or score for the program evaluation objective. If omitted, assumed to be 0.0 | [optional]
**objective_sort_order** | **int** | The sort order of this program evaluation objective. | [optional]
**program_evaluation_levels** | [**\OpenAPI\Client\Model\EdFiProgramEvaluationObjectiveProgramEvaluationLevel[]**](EdFiProgramEvaluationObjectiveProgramEvaluationLevel.md) | An unordered collection of programEvaluationObjectiveProgramEvaluationLevels. The descriptive level(s) of ratings (cut scores) for the program evaluation objective. | [optional]
**program_evaluation_objective_description** | **string** | The long description of the program evaluation objective. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
