# # TpdmEvaluationObjective

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**evaluation_objective_title** | **string** | The name or title of the evaluation Objective. |
**evaluation_reference** | [**\OpenAPI\Client\Model\TpdmEvaluationReference**](TpdmEvaluationReference.md) |  |
**evaluation_objective_description** | **string** | The long description of the Evaluation Objective. | [optional]
**evaluation_type_descriptor** | **string** | The type of the evaluation Objective (e.g., observation, principal, peer, student survey, student growth). | [optional]
**max_rating** | **float** | The maximum summary numerical rating or score for the evaluation Objective. | [optional]
**min_rating** | **float** | The minimum summary numerical rating or score for the evaluation Objective. If omitted, assumed to be 0.0. | [optional]
**rating_levels** | [**\OpenAPI\Client\Model\TpdmEvaluationObjectiveRatingLevel[]**](TpdmEvaluationObjectiveRatingLevel.md) | An unordered collection of evaluationObjectiveRatingLevels. The descriptive level(s) of ratings (cut scores) for evaluation Objective. | [optional]
**sort_order** | **int** | The sort order of this Evaluation Objective. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
