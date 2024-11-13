# # TpdmPerformanceEvaluationRating

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**performance_evaluation_reference** | [**\Resources\Model\TpdmPerformanceEvaluationReference**](TpdmPerformanceEvaluationReference.md) |  |
**person_reference** | [**\Resources\Model\EdFiPersonReference**](EdFiPersonReference.md) |  |
**actual_date** | **\DateTime** | The month, day, and year on which the performance evaluation was conducted. |
**actual_duration** | **int** | The actual or estimated number of clock minutes during which the performance evaluation was conducted. | [optional]
**actual_time** | **string** | An indication of the the time at which the performance evaluation was conducted. | [optional]
**announced** | **bool** | An indicator of whether the performance evaluation was announced or not. | [optional]
**comments** | **string** | Any comments about the performance evaluation to be captured. | [optional]
**coteaching_style_observed_descriptor** | **string** | A type of co-teaching observed as part of the performance evaluation. | [optional]
**performance_evaluation_rating_level_descriptor** | **string** | The rating level achieved based upon the rating or score. | [optional]
**results** | [**\Resources\Model\TpdmPerformanceEvaluationRatingResult[]**](TpdmPerformanceEvaluationRatingResult.md) | An unordered collection of performanceEvaluationRatingResults. The numerical summary rating or score for the performance evaluation. | [optional]
**reviewers** | [**\Resources\Model\TpdmPerformanceEvaluationRatingReviewer[]**](TpdmPerformanceEvaluationRatingReviewer.md) | An unordered collection of performanceEvaluationRatingReviewers. The person(s) that conducted the performance evaluation. | [optional]
**schedule_date** | **\DateTime** | The month, day, and year on which the performance evaluation was scheduled. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
