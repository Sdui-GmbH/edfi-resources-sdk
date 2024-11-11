# # EdFiStudentSpecialEducationProgramAssociation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**begin_date** | **\DateTime** | The earliest date the student is involved with the program. Typically, this is the date the student becomes eligible for the program. |
**education_organization_reference** | [**\Resources\Model\EdFiEducationOrganizationReference**](EdFiEducationOrganizationReference.md) |  |
**program_reference** | [**\Resources\Model\EdFiProgramReference**](EdFiProgramReference.md) |  |
**student_reference** | [**\Resources\Model\EdFiStudentReference**](EdFiStudentReference.md) |  |
**disabilities** | [**\Resources\Model\EdFiStudentSpecialEducationProgramAssociationDisability[]**](EdFiStudentSpecialEducationProgramAssociationDisability.md) | An unordered collection of studentSpecialEducationProgramAssociationDisabilities. The disability condition(s) that best describes an individual&#39;s impairment, as related to special education services received. | [optional]
**end_date** | **\DateTime** | The month, day, and year on which the student exited the program or stopped receiving services. | [optional]
**idea_eligibility** | **bool** | Indicator of the eligibility of the student to receive special education services according to the Individuals with Disabilities Education Act (IDEA). | [optional]
**iep_begin_date** | **\DateTime** | The effective date of the most recent IEP. | [optional]
**iep_end_date** | **\DateTime** | The end date of the most recent IEP. | [optional]
**iep_review_date** | **\DateTime** | The date of the last IEP review. | [optional]
**last_evaluation_date** | **\DateTime** | The date of the last special education evaluation. | [optional]
**medically_fragile** | **bool** | Indicates whether the student receiving special education and related services is: 1) in the age range of birth to 22 years, and 2) has a serious, ongoing illness or a chronic condition that has lasted or is anticipated to last at least 12 or more months or has required at least one month of hospitalization, and that requires daily, ongoing medical treatments and monitoring by appropriately trained personnel which may include parents or other family members, and 3) requires the routine use of medical device or of assistive technology to compensate for the loss of usefulness of a body function needed to participate in activities of daily living, and 4) lives with ongoing threat to his or her continued well-being. Aligns with federal requirements. | [optional]
**multiply_disabled** | **bool** | Indicates whether the student receiving special education and related services has been designated as multiply disabled by the admission, review, and dismissal committee as aligned with federal requirements. | [optional]
**program_participation_statuses** | [**\Resources\Model\EdFiGeneralStudentProgramAssociationProgramParticipationStatus[]**](EdFiGeneralStudentProgramAssociationProgramParticipationStatus.md) | An unordered collection of generalStudentProgramAssociationProgramParticipationStatuses. The status of the student&#39;s program participation. | [optional]
**reason_exited_descriptor** | **string** | The reason the student left the program within a school or district. | [optional]
**school_hours_per_week** | **float** | Indicate the total number of hours of instructional time per week for the school that the student attends. | [optional]
**served_outside_of_regular_session** | **bool** | Indicates whether the student received services during the summer session or between sessions. | [optional]
**service_providers** | [**\Resources\Model\EdFiStudentSpecialEducationProgramAssociationServiceProvider[]**](EdFiStudentSpecialEducationProgramAssociationServiceProvider.md) | An unordered collection of studentSpecialEducationProgramAssociationServiceProviders. The staff providing special education services to the student. | [optional]
**special_education_exit_date** | **\DateTime** | The  month, day and year on which a person stops receiving special education services. | [optional]
**special_education_exit_explained** | **string** | Explanation on why a person stops receiving special education services. | [optional]
**special_education_exit_reason_descriptor** | **string** | The reason why a person stops receiving special education services. | [optional]
**special_education_hours_per_week** | **float** | The number of hours per week for special education instruction and therapy. | [optional]
**special_education_program_services** | [**\Resources\Model\EdFiStudentSpecialEducationProgramAssociationSpecialEducationProgramService[]**](EdFiStudentSpecialEducationProgramAssociationSpecialEducationProgramService.md) | An unordered collection of studentSpecialEducationProgramAssociationSpecialEducationProgramServices. Indicates the service(s) being provided to the student by the special education program. | [optional]
**special_education_setting_descriptor** | **string** | The major instructional setting (more than 50 percent of a student&#39;s special education program). | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
