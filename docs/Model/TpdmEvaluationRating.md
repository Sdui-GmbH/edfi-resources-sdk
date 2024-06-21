# # TpdmEvaluationRating

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**evaluation_date** | **\DateTime** | The date for the person&#39;s evaluation. |
**evaluation_reference** | [**\OpenAPI\Client\Model\TpdmEvaluationReference**](TpdmEvaluationReference.md) |  |
**performance_evaluation_rating_reference** | [**\OpenAPI\Client\Model\TpdmPerformanceEvaluationRatingReference**](TpdmPerformanceEvaluationRatingReference.md) |  |
**section_reference** | [**\OpenAPI\Client\Model\EdFiSectionReference**](EdFiSectionReference.md) |  | [optional]
**evaluation_rating_level_descriptor** | **string** | The rating level achieved based upon the rating or score. | [optional]
**evaluation_rating_status_descriptor** | **string** | The Status of the poerformance evaluation. | [optional]
**results** | [**\OpenAPI\Client\Model\TpdmEvaluationRatingResult[]**](TpdmEvaluationRatingResult.md) | An unordered collection of evaluationRatingResults. The numerical summary rating or score for the evaluation. | [optional]
**reviewers** | [**\OpenAPI\Client\Model\TpdmEvaluationRatingReviewer[]**](TpdmEvaluationRatingReviewer.md) | An unordered collection of evaluationRatingReviewers. The person(s) that conducted the performance evaluation. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
