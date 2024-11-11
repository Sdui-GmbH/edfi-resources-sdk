# # TpdmEvaluationElement

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**evaluation_element_title** | **string** | The name or title of the evaluation element. |
**evaluation_objective_reference** | [**\OpenAPI\Client\Model\TpdmEvaluationObjectiveReference**](TpdmEvaluationObjectiveReference.md) |  |
**evaluation_type_descriptor** | **string** | The type of the evaluation (e.g., observation, principal, peer, student survey, student growth). | [optional]
**max_rating** | **float** | The maximum summary numerical rating or score for the evaluation element. | [optional]
**min_rating** | **float** | The minimum summary numerical rating or score for the evaluation element. If omitted, assumed to be 0.0. | [optional]
**rating_levels** | [**\OpenAPI\Client\Model\TpdmEvaluationElementRatingLevel[]**](TpdmEvaluationElementRatingLevel.md) | An unordered collection of evaluationElementRatingLevels. The descriptive level(s) of ratings (cut scores) for evaluation element. | [optional]
**sort_order** | **int** | The sort order of this Evaluation Element. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
