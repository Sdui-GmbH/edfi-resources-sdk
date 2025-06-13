# # EdFiSurveyResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**survey_response_identifier** | **string** | The identifier of the survey typically from the survey application. |
**contact_reference** | [**\Resources\Model\EdFiContactReference**](EdFiContactReference.md) |  | [optional]
**staff_reference** | [**\Resources\Model\EdFiStaffReference**](EdFiStaffReference.md) |  | [optional]
**student_reference** | [**\Resources\Model\EdFiStudentReference**](EdFiStudentReference.md) |  | [optional]
**survey_reference** | [**\Resources\Model\EdFiSurveyReference**](EdFiSurveyReference.md) |  |
**electronic_mail_address** | **string** | Email address of the respondent. | [optional]
**full_name** | **string** | Full name of the respondent. | [optional]
**location** | **string** | Location of the respondent, often a city, district, or school. | [optional]
**response_date** | **\DateTime** | Date of the survey response. |
**response_time** | **int** | The amount of time in seconds it took for the respondent to complete the survey. | [optional]
**survey_levels** | [**\Resources\Model\EdFiSurveyResponseSurveyLevel[]**](EdFiSurveyResponseSurveyLevel.md) | An unordered collection of surveyResponseSurveyLevels. Provides information about the respondents of a survey and how they can be grouped together. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]
**_ext** | [**\Resources\Model\SurveyResponseExtensions**](SurveyResponseExtensions.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
