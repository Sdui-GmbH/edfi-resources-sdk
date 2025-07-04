# # EdFiStudentSectionAssociationReference

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**begin_date** | **\DateTime** | Month, day, and year of the student&#39;s entry or assignment to the section.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines. |
**local_course_code** | **string** | The local code assigned by the School that identifies the course offering provided for the instruction of students. |
**school_id** | **int** | The identifier assigned to a school. It must be distinct from any other identifier assigned to educational organizations, such as a LocalEducationAgencyId, to prevent duplication. |
**school_year** | **int** | The identifier for the school year. |
**section_identifier** | **string** | The local identifier assigned to a section. |
**session_name** | **string** | The identifier for the calendar for the academic session. |
**student_unique_id** | **string** | A unique alphanumeric code assigned to a student. |
**link** | [**\Resources\Model\Link**](Link.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
