# # EdFiStudentSchoolAssociationReference

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**entry_date** | **\DateTime** | The month, day, and year on which an individual enters and begins to receive instructional services in a school for each school year. The EntryDate value should be the date the student enrolled, or when the student&#39;s enrollment materially changed, such as with a grade promotion.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines. |
**school_id** | **int** | The identifier assigned to a school. It must be distinct from any other identifier assigned to educational organizations, such as a LocalEducationAgencyId, to prevent duplication. |
**student_unique_id** | **string** | A unique alphanumeric code assigned to a student. |
**link** | [**\Resources\Model\Link**](Link.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
