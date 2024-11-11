# # EdFiAssessmentItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**identification_code** | **string** | A unique number or alphanumeric code assigned to a space, room, site, building, individual, organization, program, or institution by a school, school system, state, or other agency or entity. |
**assessment_reference** | [**\Resources\Model\EdFiAssessmentReference**](EdFiAssessmentReference.md) |  |
**assessment_item_category_descriptor** | **string** | Category or type of the assessment item. | [optional]
**assessment_item_uri** | **string** | The URI (typical a URL) pointing to the entry in an assessment item bank, which describes this content item. | [optional]
**expected_time_assessed** | **string** | The duration of time allotted for the assessment item. | [optional]
**item_text** | **string** | The text of the item. | [optional]
**learning_standards** | [**\Resources\Model\EdFiAssessmentItemLearningStandard[]**](EdFiAssessmentItemLearningStandard.md) | An unordered collection of assessmentItemLearningStandards. Learning standard tested by this item. | [optional]
**max_raw_score** | **float** | The maximum raw score achievable across all assessment items that are correct and scored at the maximum. | [optional]
**nomenclature** | **string** | Reflects the specific nomenclature used for assessment item. | [optional]
**possible_responses** | [**\Resources\Model\EdFiAssessmentItemPossibleResponse[]**](EdFiAssessmentItemPossibleResponse.md) | An unordered collection of assessmentItemPossibleResponses. A possible response to an assessment item. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
