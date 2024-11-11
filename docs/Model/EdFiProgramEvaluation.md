# # EdFiProgramEvaluation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**program_evaluation_period_descriptor** | **string** | The name of the period for the program evaluation. |
**program_evaluation_title** | **string** | An assigned unique identifier for the student program evaluation. |
**program_evaluation_type_descriptor** | **string** | The type of program evaluation conducted. |
**program_reference** | [**\OpenAPI\Client\Model\EdFiProgramReference**](EdFiProgramReference.md) |  |
**evaluation_max_numeric_rating** | **float** | The maximum summary numerical rating or score for the program evaluation. | [optional]
**evaluation_min_numeric_rating** | **float** | The minimum summary numerical rating or score for the program evaluation. If omitted, assumed to be 0.0 | [optional]
**levels** | [**\OpenAPI\Client\Model\EdFiProgramEvaluationLevel[]**](EdFiProgramEvaluationLevel.md) | An unordered collection of programEvaluationLevels. The descriptive level(s) of ratings (cut scores) for the program evaluation. | [optional]
**program_evaluation_description** | **string** | The long description of the program evaluation. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
