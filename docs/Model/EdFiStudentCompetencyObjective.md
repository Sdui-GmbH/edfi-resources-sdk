# # EdFiStudentCompetencyObjective

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**grading_period_reference** | [**\OpenAPI\Client\Model\EdFiGradingPeriodReference**](EdFiGradingPeriodReference.md) |  |
**objective_competency_objective_reference** | [**\OpenAPI\Client\Model\EdFiCompetencyObjectiveReference**](EdFiCompetencyObjectiveReference.md) |  |
**student_reference** | [**\OpenAPI\Client\Model\EdFiStudentReference**](EdFiStudentReference.md) |  |
**competency_level_descriptor** | **string** | The competency level assessed for the student for the referenced competency objective. |
**diagnostic_statement** | **string** | A statement provided by the teacher that provides information in addition to the grade or assessment score. | [optional]
**general_student_program_associations** | [**\OpenAPI\Client\Model\EdFiStudentCompetencyObjectiveGeneralStudentProgramAssociation[]**](EdFiStudentCompetencyObjectiveGeneralStudentProgramAssociation.md) | An unordered collection of studentCompetencyObjectiveGeneralStudentProgramAssociations. Relates the student and program associated with the competency objective. | [optional]
**student_section_associations** | [**\OpenAPI\Client\Model\EdFiStudentCompetencyObjectiveStudentSectionAssociation[]**](EdFiStudentCompetencyObjectiveStudentSectionAssociation.md) | An unordered collection of studentCompetencyObjectiveStudentSectionAssociations. Relates the student and section associated with the competency objective. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
