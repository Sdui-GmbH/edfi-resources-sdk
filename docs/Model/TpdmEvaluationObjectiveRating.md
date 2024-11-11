# # TpdmEvaluationObjectiveRating

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**evaluation_objective_reference** | [**\OpenAPI\Client\Model\TpdmEvaluationObjectiveReference**](TpdmEvaluationObjectiveReference.md) |  |
**evaluation_rating_reference** | [**\OpenAPI\Client\Model\TpdmEvaluationRatingReference**](TpdmEvaluationRatingReference.md) |  |
**comments** | **string** | Any comments about the performance evaluation to be captured. | [optional]
**objective_rating_level_descriptor** | **string** | The rating level achieved based upon the rating or score. | [optional]
**results** | [**\OpenAPI\Client\Model\TpdmEvaluationObjectiveRatingResult[]**](TpdmEvaluationObjectiveRatingResult.md) | An unordered collection of evaluationObjectiveRatingResults. The numerical summary rating or score for the evaluation Objective. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
