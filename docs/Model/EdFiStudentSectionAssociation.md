# # EdFiStudentSectionAssociation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**begin_date** | **\DateTime** | Month, day, and year of the student&#39;s entry or assignment to the section. |
**section_reference** | [**\Resources\Model\EdFiSectionReference**](EdFiSectionReference.md) |  |
**student_reference** | [**\Resources\Model\EdFiStudentReference**](EdFiStudentReference.md) |  |
**attempt_status_descriptor** | **string** | An indication of the student&#39;s completion status for the section. | [optional]
**end_date** | **\DateTime** | Month, day, and year of the withdrawal or exit of the student from the section. | [optional]
**homeroom_indicator** | **bool** | Indicates the section is the student&#39;s homeroom. Homeroom period may the convention for taking daily attendance. | [optional]
**programs** | [**\Resources\Model\EdFiStudentSectionAssociationProgram[]**](EdFiStudentSectionAssociationProgram.md) | An unordered collection of studentSectionAssociationPrograms. The program(s) that the student is participating in the context of the course. | [optional]
**repeat_identifier_descriptor** | **string** | An indication as to whether a student has previously taken a given course. | [optional]
**teacher_student_data_link_exclusion** | **bool** | Indicates that the student-section combination is excluded from calculation of value-added or growth attribution calculations used for a particular teacher evaluation. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
