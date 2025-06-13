# # EdFiStudentCTEProgramAssociation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**begin_date** | **\DateTime** | The earliest date the student is involved with the program. Typically, this is the date the student becomes eligible for the program.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines. |
**education_organization_reference** | [**\Resources\Model\EdFiEducationOrganizationReference**](EdFiEducationOrganizationReference.md) |  |
**program_reference** | [**\Resources\Model\EdFiProgramReference**](EdFiProgramReference.md) |  |
**student_reference** | [**\Resources\Model\EdFiStudentReference**](EdFiStudentReference.md) |  |
**cte_program_services** | [**\Resources\Model\EdFiStudentCTEProgramAssociationCTEProgramService[]**](EdFiStudentCTEProgramAssociationCTEProgramService.md) | An unordered collection of studentCTEProgramAssociationCTEProgramServices. Indicates the service(s) being provided to the student by the CTE program. | [optional]
**end_date** | **\DateTime** | The month, day, and year on which the student exited the program or stopped receiving services.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines. | [optional]
**non_traditional_gender_status** | **bool** | Indicator that student is from a gender group that comprises less than 25% of the individuals employed in an occupation or field of work. | [optional]
**private_cte_program** | **bool** | Indicator that student participated in career and technical education at private agencies or institutions that are reported by the state for purposes of the Elementary and Secondary Education Act (ESEA). Students in private institutions which do not receive Perkins funding are reported only in the state file. | [optional]
**program_participation_statuses** | [**\Resources\Model\EdFiGeneralStudentProgramAssociationProgramParticipationStatus[]**](EdFiGeneralStudentProgramAssociationProgramParticipationStatus.md) | An unordered collection of generalStudentProgramAssociationProgramParticipationStatuses. The status of the student&#39;s program participation. | [optional]
**reason_exited_descriptor** | **string** | The reason the student left the program within a school or district. | [optional]
**served_outside_of_regular_session** | **bool** | Indicates whether the student received services during the summer session or between sessions. | [optional]
**technical_skills_assessment_descriptor** | **string** | Results of technical skills assessment aligned with industry recognized standards. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
