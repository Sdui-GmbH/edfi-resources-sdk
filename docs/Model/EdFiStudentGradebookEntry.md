# # EdFiStudentGradebookEntry

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**gradebook_entry_reference** | [**\Resources\Model\EdFiGradebookEntryReference**](EdFiGradebookEntryReference.md) |  |
**student_reference** | [**\Resources\Model\EdFiStudentReference**](EdFiStudentReference.md) |  |
**assignment_late_status_descriptor** | **string** | Status of whether the assignment was submitted after the due date and/or marked as. | [optional]
**competency_level_descriptor** | **string** | The competency level assessed for the student for the referenced learning objective. | [optional]
**date_fulfilled** | **\DateTime** | The date an assignment was turned in or the date of an assessment. | [optional]
**diagnostic_statement** | **string** | A statement provided by the teacher that provides information in addition to the grade or assessment score. | [optional]
**letter_grade_earned** | **string** | A final or interim (grading period) indicator of student performance in a class as submitted by the instructor. | [optional]
**numeric_grade_earned** | **float** | A final or interim (grading period) indicator of student performance in a class as submitted by the instructor. | [optional]
**points_earned** | **float** | The points earned for the submission. With extra credit, the points earned may exceed the max points. | [optional]
**submission_status_descriptor** | **string** | The status of the student&#39;s submission. | [optional]
**time_fulfilled** | **string** | The time an assignment was turned in on the date fulfilled. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
