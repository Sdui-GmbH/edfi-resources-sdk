# # EdFiDisciplineAction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**discipline_action_identifier** | **string** | Identifier assigned by the education organization to the discipline action. |
**discipline_date** | **\DateTime** | The date of the discipline action. |
**disciplines** | [**\OpenAPI\Client\Model\EdFiDisciplineActionDiscipline[]**](EdFiDisciplineActionDiscipline.md) | An unordered collection of disciplineActionDisciplines. Type of action, such as removal from the classroom, used to discipline the student involved as a perpetrator in a discipline incident. |
**assignment_school_reference** | [**\OpenAPI\Client\Model\EdFiSchoolReference**](EdFiSchoolReference.md) |  | [optional]
**responsibility_school_reference** | [**\OpenAPI\Client\Model\EdFiSchoolReference**](EdFiSchoolReference.md) |  |
**student_reference** | [**\OpenAPI\Client\Model\EdFiStudentReference**](EdFiStudentReference.md) |  |
**actual_discipline_action_length** | **float** | Indicates the actual length in school days of a student&#39;s disciplinary assignment. | [optional]
**discipline_action_length** | **float** | The length of time in school days for the discipline action (e.g. removal, detention), if applicable. | [optional]
**discipline_action_length_difference_reason_descriptor** | **string** | Indicates the reason for the difference, if any, between the official and actual lengths of a student&#39;s disciplinary assignment. | [optional]
**iep_placement_meeting_indicator** | **bool** | An indication as to whether an offense and/or disciplinary action resulted in a meeting of a student&#39;s Individualized Education Program (IEP) team to determine appropriate placement. | [optional]
**related_to_zero_tolerance_policy** | **bool** | An indication of whether or not this disciplinary action taken against a student was imposed as a consequence of state or local zero tolerance policies. | [optional]
**staffs** | [**\OpenAPI\Client\Model\EdFiDisciplineActionStaff[]**](EdFiDisciplineActionStaff.md) | An unordered collection of disciplineActionStaffs. The staff responsible for enforcing the discipline action. | [optional]
**student_discipline_incident_behavior_associations** | [**\OpenAPI\Client\Model\EdFiDisciplineActionStudentDisciplineIncidentBehaviorAssociation[]**](EdFiDisciplineActionStudentDisciplineIncidentBehaviorAssociation.md) | An unordered collection of disciplineActionStudentDisciplineIncidentBehaviorAssociations. A reference to the behavior(s) by the student that led or contributed to this specific action. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
