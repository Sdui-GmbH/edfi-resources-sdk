# # EdFiStudentSection504ProgramAssociation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**begin_date** | **\DateTime** | The earliest date the student is involved with the program. Typically, this is the date the student becomes eligible for the program.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines. |
**education_organization_reference** | [**\Resources\Model\EdFiEducationOrganizationReference**](EdFiEducationOrganizationReference.md) |  |
**program_reference** | [**\Resources\Model\EdFiProgramReference**](EdFiProgramReference.md) |  |
**student_reference** | [**\Resources\Model\EdFiStudentReference**](EdFiStudentReference.md) |  |
**accommodation_plan** | **bool** | Indicates whether student has a Section 504 accommodation plan. | [optional]
**end_date** | **\DateTime** | The month, day, and year on which the student exited the program or stopped receiving services.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines. | [optional]
**program_participation_statuses** | [**\Resources\Model\EdFiGeneralStudentProgramAssociationProgramParticipationStatus[]**](EdFiGeneralStudentProgramAssociationProgramParticipationStatus.md) | An unordered collection of generalStudentProgramAssociationProgramParticipationStatuses. The status of the student&#39;s program participation. | [optional]
**reason_exited_descriptor** | **string** | The reason the student left the program within a school or district. | [optional]
**section504_disability_descriptor** | **string** | Defines one or more disabilities student has that qualifies them for a Section 504 plan. | [optional]
**section504_eligibility** | **bool** | Indicates whether student has a disability, either temporary or permenant, that qualifies student for Section 504 consideration. Selection of FALSE for this boolean is equivalent to marking student as &#39;Did Not Qualify&#39;. |
**section504_eligibility_decision_date** | **\DateTime** | The month, day, and year on which the Section 504 eligibility decision is made. | [optional]
**section504_meeting_date** | **\DateTime** | The month, day, and year on which the meeting with student&#39;s parent/guardian held to discuss the 504 eligibility of the student. | [optional]
**served_outside_of_regular_session** | **bool** | Indicates whether the student received services during the summer session or between sessions. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
