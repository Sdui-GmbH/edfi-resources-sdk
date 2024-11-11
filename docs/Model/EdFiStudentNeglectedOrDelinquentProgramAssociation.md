# # EdFiStudentNeglectedOrDelinquentProgramAssociation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**begin_date** | **\DateTime** | The earliest date the student is involved with the program. Typically, this is the date the student becomes eligible for the program. |
**education_organization_reference** | [**\Resources\Model\EdFiEducationOrganizationReference**](EdFiEducationOrganizationReference.md) |  |
**program_reference** | [**\Resources\Model\EdFiProgramReference**](EdFiProgramReference.md) |  |
**student_reference** | [**\Resources\Model\EdFiStudentReference**](EdFiStudentReference.md) |  |
**ela_progress_level_descriptor** | **string** | The progress measured from pre- to post- test for ELA. | [optional]
**end_date** | **\DateTime** | The month, day, and year on which the student exited the program or stopped receiving services. | [optional]
**mathematics_progress_level_descriptor** | **string** | The progress measured from pre- to post-test for Mathematics. | [optional]
**neglected_or_delinquent_program_descriptor** | **string** | The type of program under ESEA Title I, Part D, Subpart 1 (state programs) or Subpart 2 (LEA). | [optional]
**neglected_or_delinquent_program_services** | [**\Resources\Model\EdFiStudentNeglectedOrDelinquentProgramAssociationNeglectedOrDelinquentProgramService[]**](EdFiStudentNeglectedOrDelinquentProgramAssociationNeglectedOrDelinquentProgramService.md) | An unordered collection of studentNeglectedOrDelinquentProgramAssociationNeglectedOrDelinquentProgramServices. Indicates the service(s) being provided to the student by the neglected or delinquent program. | [optional]
**program_participation_statuses** | [**\Resources\Model\EdFiGeneralStudentProgramAssociationProgramParticipationStatus[]**](EdFiGeneralStudentProgramAssociationProgramParticipationStatus.md) | An unordered collection of generalStudentProgramAssociationProgramParticipationStatuses. The status of the student&#39;s program participation. | [optional]
**reason_exited_descriptor** | **string** | The reason the student left the program within a school or district. | [optional]
**served_outside_of_regular_session** | **bool** | Indicates whether the student received services during the summer session or between sessions. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
