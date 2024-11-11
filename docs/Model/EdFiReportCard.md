# # EdFiReportCard

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**education_organization_reference** | [**\OpenAPI\Client\Model\EdFiEducationOrganizationReference**](EdFiEducationOrganizationReference.md) |  |
**grading_period_reference** | [**\OpenAPI\Client\Model\EdFiGradingPeriodReference**](EdFiGradingPeriodReference.md) |  |
**student_reference** | [**\OpenAPI\Client\Model\EdFiStudentReference**](EdFiStudentReference.md) |  |
**grade_point_averages** | [**\OpenAPI\Client\Model\EdFiReportCardGradePointAverage[]**](EdFiReportCardGradePointAverage.md) | An unordered collection of reportCardGradePointAverages. A measure of average performance for courses taken by an individual. | [optional]
**grades** | [**\OpenAPI\Client\Model\EdFiReportCardGrade[]**](EdFiReportCardGrade.md) | An unordered collection of reportCardGrades. Grades for the classes attended by the student for this grading period. | [optional]
**number_of_days_absent** | **float** | The number of days an individual is absent when school is in session during a given reporting period. | [optional]
**number_of_days_in_attendance** | **float** | The number of days an individual is present when school is in session during a given reporting period. | [optional]
**number_of_days_tardy** | **int** | The number of days an individual is tardy during a given reporting period. | [optional]
**student_competency_objectives** | [**\OpenAPI\Client\Model\EdFiReportCardStudentCompetencyObjective[]**](EdFiReportCardStudentCompetencyObjective.md) | An unordered collection of reportCardStudentCompetencyObjectives. The student competency evaluations associated for this grading period. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
