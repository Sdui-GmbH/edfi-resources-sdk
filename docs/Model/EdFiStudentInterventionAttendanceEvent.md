# # EdFiStudentInterventionAttendanceEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**attendance_event_category_descriptor** | **string** | A code describing the attendance event, for example:         Present         Unexcused absence         Excused absence         Tardy. |
**event_date** | **\DateTime** | Date for this attendance event. |
**intervention_reference** | [**\Resources\Model\EdFiInterventionReference**](EdFiInterventionReference.md) |  |
**student_reference** | [**\Resources\Model\EdFiStudentReference**](EdFiStudentReference.md) |  |
**attendance_event_reason** | **string** | The reported reason for a student&#39;s absence. | [optional]
**educational_environment_descriptor** | **string** | The setting in which a child receives education and related services. This attribute is only used if it differs from the EducationalEnvironment of the Section. This is only used in the AttendanceEvent if different from the associated Section. | [optional]
**event_duration** | **float** | The amount of time for the event as recognized by the school: 1 day &#x3D; 1, 1/2 day &#x3D; 0.5, 1/3 day &#x3D; 0.33. | [optional]
**intervention_duration** | **int** | The duration in minutes in which the student participated in the intervention during this instance. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
