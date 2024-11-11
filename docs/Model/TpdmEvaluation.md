# # TpdmEvaluation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**evaluation_title** | **string** | The name or title of the evaluation. |
**performance_evaluation_reference** | [**\OpenAPI\Client\Model\TpdmPerformanceEvaluationReference**](TpdmPerformanceEvaluationReference.md) |  |
**evaluation_description** | **string** | The long description of the Evaluation. | [optional]
**evaluation_type_descriptor** | **string** | The type of the evaluation (e.g., observation, principal, peer, student survey, student growth). | [optional]
**inter_rater_reliability_score** | **int** | A score indicating how much homogeneity, or consensus, there is in the ratings given by judges. Most commonly a percentage scale (1-100) | [optional]
**max_rating** | **float** | The maximum summary numerical rating or score for the evaluation. | [optional]
**min_rating** | **float** | The minimum summary numerical rating or score for the evaluation. If omitted, assumed to be 0.0. | [optional]
**rating_levels** | [**\OpenAPI\Client\Model\TpdmEvaluationRatingLevel[]**](TpdmEvaluationRatingLevel.md) | An unordered collection of evaluationRatingLevels. The descriptive level(s) of ratings (cut scores) for the evaluation. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
