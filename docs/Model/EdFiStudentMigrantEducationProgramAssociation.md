# # EdFiStudentMigrantEducationProgramAssociation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**begin_date** | **\DateTime** | The earliest date the student is involved with the program. Typically, this is the date the student becomes eligible for the program. |
**education_organization_reference** | [**\OpenAPI\Client\Model\EdFiEducationOrganizationReference**](EdFiEducationOrganizationReference.md) |  |
**program_reference** | [**\OpenAPI\Client\Model\EdFiProgramReference**](EdFiProgramReference.md) |  |
**student_reference** | [**\OpenAPI\Client\Model\EdFiStudentReference**](EdFiStudentReference.md) |  |
**continuation_of_services_reason_descriptor** | **string** | The \&quot;continuation of services\&quot; provision found in Section 1304(e) of the statute provides that (1) a child who ceases to be a migratory child during a school term shall be eligible for services until the end of such term; (2) a child who is no longer a migratory child may continue to receive services for one additional school year, but only if comparable services are not available through other programs; and (3) secondary school students who were eligible for services in secondary school may continue to be served through credit accrual programs until graduation. Only students who received services at any time during their 36 month eligibility period may continue to receive services (not necessarily the same service). | [optional]
**eligibility_expiration_date** | **\DateTime** | The eligibility expiration date is used to determine end of eligibility and to account for a child&#39;s eligibility expiring earlier than 36 months from the child&#39;s QAD. A child&#39;s eligibility would end earlier than 36 months from the child&#39;s QAD, if the child is no longer entitled to a free public education (e.g., graduated with a high school diploma, obtained a high school equivalency diploma (HSED), or for other reasons as determined by states&#39; requirements), or if the child passes away. | [optional]
**end_date** | **\DateTime** | The month, day, and year on which the student exited the program or stopped receiving services. | [optional]
**last_qualifying_move** | **\DateTime** | Date the last qualifying move occurred; used to compute MEP status. |
**migrant_education_program_services** | [**\OpenAPI\Client\Model\EdFiStudentMigrantEducationProgramAssociationMigrantEducationProgramService[]**](EdFiStudentMigrantEducationProgramAssociationMigrantEducationProgramService.md) | An unordered collection of studentMigrantEducationProgramAssociationMigrantEducationProgramServices. Indicates the service(s) being provided to the student by the migrant education program. | [optional]
**priority_for_services** | **bool** | Report migratory children who are classified as having \&quot;priority for services\&quot; because they are failing, or most at risk of failing to meet the state&#39;s challenging state academic content standards and challenging state student academic achievement standards, and their education has been interrupted during the regular school year. |
**program_participation_statuses** | [**\OpenAPI\Client\Model\EdFiGeneralStudentProgramAssociationProgramParticipationStatus[]**](EdFiGeneralStudentProgramAssociationProgramParticipationStatus.md) | An unordered collection of generalStudentProgramAssociationProgramParticipationStatuses. The status of the student&#39;s program participation. | [optional]
**qualifying_arrival_date** | **\DateTime** | The qualifying arrival date (QAD) is the date the child joins the worker who has already moved, or the date when the worker joins the child who has already moved. The QAD is the date that the child&#39;s eligibility for the MEP begins. The QAD is not affected by subsequent non-qualifying moves. | [optional]
**reason_exited_descriptor** | **string** | The reason the student left the program within a school or district. | [optional]
**served_outside_of_regular_session** | **bool** | Indicates whether the student received services during the summer session or between sessions. | [optional]
**state_residency_date** | **\DateTime** | The verified state residency for the student. | [optional]
**us_initial_entry** | **\DateTime** | The month, day, and year on which the student first entered the U.S. | [optional]
**us_initial_school_entry** | **\DateTime** | The month, day, and year on which the student first entered a U.S. school. | [optional]
**us_most_recent_entry** | **\DateTime** | The month, day, and year of the student&#39;s most recent entry into the U.S. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
