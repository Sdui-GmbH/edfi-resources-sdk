# # EdFiSurveyQuestion

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**question_code** | **string** | The identifying code for the question, unique for the survey. |
**survey_reference** | [**\Resources\Model\EdFiSurveyReference**](EdFiSurveyReference.md) |  |
**survey_section_reference** | [**\Resources\Model\EdFiSurveySectionReference**](EdFiSurveySectionReference.md) |  | [optional]
**matrices** | [**\Resources\Model\EdFiSurveyQuestionMatrix[]**](EdFiSurveyQuestionMatrix.md) | An unordered collection of surveyQuestionMatrices. Information about the matrix element in the survey. | [optional]
**question_form_descriptor** | **string** | The form or type of question. |
**question_text** | **string** | The text of the question. |
**response_choices** | [**\Resources\Model\EdFiSurveyQuestionResponseChoice[]**](EdFiSurveyQuestionResponseChoice.md) | An unordered collection of surveyQuestionResponseChoices. The optional list of possible responses to a survey question. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
