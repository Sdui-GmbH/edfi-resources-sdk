# # EdFiSurveyQuestionResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**survey_question_reference** | [**\OpenAPI\Client\Model\EdFiSurveyQuestionReference**](EdFiSurveyQuestionReference.md) |  |
**survey_response_reference** | [**\OpenAPI\Client\Model\EdFiSurveyResponseReference**](EdFiSurveyResponseReference.md) |  |
**comment** | **string** | Additional information provided by the responder about the question in the survey. | [optional]
**no_response** | **bool** | Indicates there was no response to the question. | [optional]
**survey_question_matrix_element_responses** | [**\OpenAPI\Client\Model\EdFiSurveyQuestionResponseSurveyQuestionMatrixElementResponse[]**](EdFiSurveyQuestionResponseSurveyQuestionMatrixElementResponse.md) | An unordered collection of surveyQuestionResponseSurveyQuestionMatrixElementResponses. For matrix questions, the response for each row of the matrix. | [optional]
**values** | [**\OpenAPI\Client\Model\EdFiSurveyQuestionResponseValue[]**](EdFiSurveyQuestionResponseValue.md) | An unordered collection of surveyQuestionResponseValues. For free-form, single- or multiple-selection questions, one or more responses. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
