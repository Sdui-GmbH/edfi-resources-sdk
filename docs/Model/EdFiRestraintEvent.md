# # EdFiRestraintEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**restraint_event_identifier** | **string** | A unique number or alphanumeric code assigned to a restraint event by a school, school system, state, or other agency or entity. |
**discipline_incident_reference** | [**\Resources\Model\EdFiDisciplineIncidentReference**](EdFiDisciplineIncidentReference.md) |  | [optional]
**school_reference** | [**\Resources\Model\EdFiSchoolReference**](EdFiSchoolReference.md) |  |
**student_reference** | [**\Resources\Model\EdFiStudentReference**](EdFiStudentReference.md) |  |
**educational_environment_descriptor** | **string** | The setting where the RestraintEvent was exercised. | [optional]
**event_date** | **\DateTime** | Month, day, and year of the restraint event. |
**programs** | [**\Resources\Model\EdFiRestraintEventProgram[]**](EdFiRestraintEventProgram.md) | An unordered collection of restraintEventPrograms. The special education program associated with the restraint event. | [optional]
**reasons** | [**\Resources\Model\EdFiRestraintEventReason[]**](EdFiRestraintEventReason.md) | An unordered collection of restraintEventReasons. A categorization of the circumstances or reason for the RestraintEvent. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
