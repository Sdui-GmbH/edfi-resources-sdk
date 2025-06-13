# # EdFiStudentSectionAssociation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**begin_date** | **\DateTime** | Month, day, and year of the student&#39;s entry or assignment to the section.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines. |
**dual_credit_education_organization_reference** | [**\Resources\Model\EdFiEducationOrganizationReference**](EdFiEducationOrganizationReference.md) |  | [optional]
**section_reference** | [**\Resources\Model\EdFiSectionReference**](EdFiSectionReference.md) |  |
**student_reference** | [**\Resources\Model\EdFiStudentReference**](EdFiStudentReference.md) |  |
**attempt_status_descriptor** | **string** | An indication of the student&#39;s completion status for the section. | [optional]
**dual_credit_indicator** | **bool** | Indicates whether the student assigned to the section is to receive dual credit upon successful completion. | [optional]
**dual_credit_institution_descriptor** | **string** | Descriptor for the postsecondary institution offering college credit. This descriptor may be used to select a postsecondary institution that is not defined as an education organization, and/or select a general type of postsecondary institution. | [optional]
**dual_credit_type_descriptor** | **string** | For a student taking a dual credit course in a college or high school setting, indicates the type of dual credit program. | [optional]
**dual_high_school_credit_indicator** | **bool** | Indicates whether successful completion of the course will result in credits toward high school graduation. | [optional]
**end_date** | **\DateTime** | Month, day, and year of the withdrawal or exit of the student from the section.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines. | [optional]
**homeroom_indicator** | **bool** | Indicates the section is the student&#39;s homeroom. Homeroom period may the convention for taking daily attendance. | [optional]
**programs** | [**\Resources\Model\EdFiStudentSectionAssociationProgram[]**](EdFiStudentSectionAssociationProgram.md) | An unordered collection of studentSectionAssociationPrograms. The program(s) that the student is participating in the context of the course. | [optional]
**repeat_identifier_descriptor** | **string** | An indication as to whether a student has previously taken a given course. | [optional]
**teacher_student_data_link_exclusion** | **bool** | Indicates that the student-section combination is excluded from calculation of value-added or growth attribution calculations used for a particular teacher evaluation. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
