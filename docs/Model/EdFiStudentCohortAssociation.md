# # EdFiStudentCohortAssociation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**begin_date** | **\DateTime** | The month, day, and year on which the student was first identified as part of the cohort.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines. |
**cohort_reference** | [**\Resources\Model\EdFiCohortReference**](EdFiCohortReference.md) |  |
**student_reference** | [**\Resources\Model\EdFiStudentReference**](EdFiStudentReference.md) |  |
**end_date** | **\DateTime** | The month, day, and year on which the student was removed as part of the cohort.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines. | [optional]
**sections** | [**\Resources\Model\EdFiStudentCohortAssociationSection[]**](EdFiStudentCohortAssociationSection.md) | An unordered collection of studentCohortAssociationSections. The cohort representing the subdivision of students within one or more sections. For example, a group of students may be given additional instruction and tracked as a cohort. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
