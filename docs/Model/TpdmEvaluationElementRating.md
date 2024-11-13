# # TpdmEvaluationElementRating

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**evaluation_element_reference** | [**\Resources\Model\TpdmEvaluationElementReference**](TpdmEvaluationElementReference.md) |  |
**evaluation_objective_rating_reference** | [**\Resources\Model\TpdmEvaluationObjectiveRatingReference**](TpdmEvaluationObjectiveRatingReference.md) |  |
**area_of_refinement** | **string** | Area identified for person to refine or improve as part of the evaluation. | [optional]
**area_of_reinforcement** | **string** | Area identified for reinforcement or positive feedback as part of the evaluation. | [optional]
**comments** | **string** | Any comments about the performance evaluation to be captured. | [optional]
**evaluation_element_rating_level_descriptor** | **string** | The rating level achieved based upon the rating or score. | [optional]
**feedback** | **string** | Feedback provided to the evaluated person. | [optional]
**results** | [**\Resources\Model\TpdmEvaluationElementRatingResult[]**](TpdmEvaluationElementRatingResult.md) | An unordered collection of evaluationElementRatingResults. The numerical summary rating or score for the evaluation element. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
