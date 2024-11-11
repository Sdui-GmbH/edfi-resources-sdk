# # EdFiStaffSectionAssociation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**begin_date** | **\DateTime** | Month, day, and year of a teacher&#39;s assignment to the section. |
**section_reference** | [**\Resources\Model\EdFiSectionReference**](EdFiSectionReference.md) |  |
**staff_reference** | [**\Resources\Model\EdFiStaffReference**](EdFiStaffReference.md) |  |
**classroom_position_descriptor** | **string** | The type of position the staff member holds in the specific class/section. |
**end_date** | **\DateTime** | Month, day, and year of the last day of a staff member&#39;s assignment to the section. | [optional]
**highly_qualified_teacher** | **bool** | An indication of whether a teacher is classified as highly qualified for his/her assignment according to state definition. This attribute indicates the teacher is highly qualified for this section being taught. | [optional]
**percentage_contribution** | **float** | Indicates the percentage of the total scheduled course time, academic standards, and/or learning activities delivered in this section by this staff member. A teacher of record designation may be based solely or partially on this contribution percentage. | [optional]
**teacher_student_data_link_exclusion** | **bool** | Indicates that the entire section is excluded from calculation of value-added or growth attribution calculations used for a particular teacher evaluation. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
