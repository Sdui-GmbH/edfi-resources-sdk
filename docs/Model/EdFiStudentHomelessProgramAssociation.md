# # EdFiStudentHomelessProgramAssociation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**begin_date** | **\DateTime** | The earliest date the student is involved with the program. Typically, this is the date the student becomes eligible for the program. |
**education_organization_reference** | [**\OpenAPI\Client\Model\EdFiEducationOrganizationReference**](EdFiEducationOrganizationReference.md) |  |
**program_reference** | [**\OpenAPI\Client\Model\EdFiProgramReference**](EdFiProgramReference.md) |  |
**student_reference** | [**\OpenAPI\Client\Model\EdFiStudentReference**](EdFiStudentReference.md) |  |
**awaiting_foster_care** | **bool** | State defined definition for awaiting foster care. | [optional]
**end_date** | **\DateTime** | The month, day, and year on which the student exited the program or stopped receiving services. | [optional]
**homeless_primary_nighttime_residence_descriptor** | **string** | The primary nighttime residence of the student at the time the student is identified as homeless. | [optional]
**homeless_program_services** | [**\OpenAPI\Client\Model\EdFiStudentHomelessProgramAssociationHomelessProgramService[]**](EdFiStudentHomelessProgramAssociationHomelessProgramService.md) | An unordered collection of studentHomelessProgramAssociationHomelessProgramServices. Indicates the service(s) being provided to the student by the homeless program. | [optional]
**homeless_unaccompanied_youth** | **bool** | A homeless unaccompanied youth is a youth who is not in the physical custody of a parent or guardian and who fits the McKinney-Vento definition of homeless. Students must be both unaccompanied and homeless to be included as an unaccompanied homeless youth. | [optional]
**program_participation_statuses** | [**\OpenAPI\Client\Model\EdFiGeneralStudentProgramAssociationProgramParticipationStatus[]**](EdFiGeneralStudentProgramAssociationProgramParticipationStatus.md) | An unordered collection of generalStudentProgramAssociationProgramParticipationStatuses. The status of the student&#39;s program participation. | [optional]
**reason_exited_descriptor** | **string** | The reason the student left the program within a school or district. | [optional]
**served_outside_of_regular_session** | **bool** | Indicates whether the student received services during the summer session or between sessions. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
