# # EdFiStudentProgramEvaluation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**evaluation_date** | **\DateTime** | The month, day, and year on which the evaluation was conducted. |
**education_organization_reference** | [**\Resources\Model\EdFiEducationOrganizationReference**](EdFiEducationOrganizationReference.md) |  | [optional]
**program_evaluation_reference** | [**\Resources\Model\EdFiProgramEvaluationReference**](EdFiProgramEvaluationReference.md) |  |
**staff_evaluator_staff_reference** | [**\Resources\Model\EdFiStaffReference**](EdFiStaffReference.md) |  | [optional]
**student_reference** | [**\Resources\Model\EdFiStudentReference**](EdFiStudentReference.md) |  |
**evaluation_duration** | **int** | The actual or estimated number of clock minutes during which the evaluation was conducted. | [optional]
**external_evaluators** | [**\Resources\Model\EdFiStudentProgramEvaluationExternalEvaluator[]**](EdFiStudentProgramEvaluationExternalEvaluator.md) | An unordered collection of studentProgramEvaluationExternalEvaluators. The external person(s) - not staff - that conducted the evaluation. | [optional]
**student_evaluation_elements** | [**\Resources\Model\EdFiStudentProgramEvaluationStudentEvaluationElement[]**](EdFiStudentProgramEvaluationStudentEvaluationElement.md) | An unordered collection of studentProgramEvaluationStudentEvaluationElements. The student&#39;s rating and/or rating levels earned for a program evaluation element. | [optional]
**student_evaluation_objectives** | [**\Resources\Model\EdFiStudentProgramEvaluationStudentEvaluationObjective[]**](EdFiStudentProgramEvaluationStudentEvaluationObjective.md) | An unordered collection of studentProgramEvaluationStudentEvaluationObjectives. The student&#39;s rating and/or rating levels earned for a program evaluation objective. | [optional]
**summary_evaluation_comment** | **string** | Any comments about the summary evaluation to be captured. | [optional]
**summary_evaluation_numeric_rating** | **float** | The numerical summary rating or score for the evaluation. | [optional]
**summary_evaluation_rating_level_descriptor** | **string** | The summary rating level achieved based upon the rating or score. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
