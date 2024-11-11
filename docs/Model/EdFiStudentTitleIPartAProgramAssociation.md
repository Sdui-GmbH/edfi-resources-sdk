# # EdFiStudentTitleIPartAProgramAssociation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**begin_date** | **\DateTime** | The earliest date the student is involved with the program. Typically, this is the date the student becomes eligible for the program. |
**education_organization_reference** | [**\OpenAPI\Client\Model\EdFiEducationOrganizationReference**](EdFiEducationOrganizationReference.md) |  |
**program_reference** | [**\OpenAPI\Client\Model\EdFiProgramReference**](EdFiProgramReference.md) |  |
**student_reference** | [**\OpenAPI\Client\Model\EdFiStudentReference**](EdFiStudentReference.md) |  |
**end_date** | **\DateTime** | The month, day, and year on which the student exited the program or stopped receiving services. | [optional]
**program_participation_statuses** | [**\OpenAPI\Client\Model\EdFiGeneralStudentProgramAssociationProgramParticipationStatus[]**](EdFiGeneralStudentProgramAssociationProgramParticipationStatus.md) | An unordered collection of generalStudentProgramAssociationProgramParticipationStatuses. The status of the student&#39;s program participation. | [optional]
**reason_exited_descriptor** | **string** | The reason the student left the program within a school or district. | [optional]
**served_outside_of_regular_session** | **bool** | Indicates whether the student received services during the summer session or between sessions. | [optional]
**title_i_part_a_participant_descriptor** | **string** | An indication of the type of Title I program, if any, in which the student is participating and by which the student is served. |
**title_i_part_a_program_services** | [**\OpenAPI\Client\Model\EdFiStudentTitleIPartAProgramAssociationTitleIPartAProgramService[]**](EdFiStudentTitleIPartAProgramAssociationTitleIPartAProgramService.md) | An unordered collection of studentTitleIPartAProgramAssociationTitleIPartAProgramServices. Indicates the service(s) being provided to the student by the Title I Part A program. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
