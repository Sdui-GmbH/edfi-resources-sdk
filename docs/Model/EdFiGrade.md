# # EdFiGrade

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**grade_type_descriptor** | **string** | The type of grade reported (e.g., exam, final, grading period). |
**grading_period_reference** | [**\Resources\Model\EdFiGradingPeriodReference**](EdFiGradingPeriodReference.md) |  |
**student_section_association_reference** | [**\Resources\Model\EdFiStudentSectionAssociationReference**](EdFiStudentSectionAssociationReference.md) |  |
**current_grade_as_of_date** | **\DateTime** | As-Of date for a grade posted as the current grade. | [optional]
**current_grade_indicator** | **bool** | An indicator that the posted grade is an interim grade for the grading period and not the final grade. | [optional]
**diagnostic_statement** | **string** | A statement provided by the teacher that provides information in addition to the grade or assessment score. | [optional]
**grade_earned_description** | **string** | A description of the grade earned by the learner. | [optional]
**learning_standard_grades** | [**\Resources\Model\EdFiGradeLearningStandardGrade[]**](EdFiGradeLearningStandardGrade.md) | An unordered collection of gradeLearningStandardGrades. A collection of learning standards associated with the grade. | [optional]
**letter_grade_earned** | **string** | A final or interim (grading period) indicator of student performance in a class as submitted by the instructor. | [optional]
**numeric_grade_earned** | **float** | A final or interim (grading period) indicator of student performance in a class as submitted by the instructor. | [optional]
**performance_base_conversion_descriptor** | **string** | A conversion of the level to a standard set of performance levels. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
