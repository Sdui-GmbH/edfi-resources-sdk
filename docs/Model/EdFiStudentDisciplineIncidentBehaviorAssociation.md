# # EdFiStudentDisciplineIncidentBehaviorAssociation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**behavior_descriptor** | **string** | Describes behavior by category. |
**discipline_incident_reference** | [**\Resources\Model\EdFiDisciplineIncidentReference**](EdFiDisciplineIncidentReference.md) |  |
**student_reference** | [**\Resources\Model\EdFiStudentReference**](EdFiStudentReference.md) |  |
**behavior_detailed_description** | **string** | Specifies a more granular level of detail of a behavior involved in the incident. | [optional]
**discipline_incident_participation_codes** | [**\Resources\Model\EdFiStudentDisciplineIncidentBehaviorAssociationDisciplineIncidentParticipationCode[]**](EdFiStudentDisciplineIncidentBehaviorAssociationDisciplineIncidentParticipationCode.md) | An unordered collection of studentDisciplineIncidentBehaviorAssociationDisciplineIncidentParticipationCodes. The role or type of participation of a student in a discipline incident. | [optional]
**weapons** | [**\Resources\Model\EdFiStudentDisciplineIncidentBehaviorAssociationWeapon[]**](EdFiStudentDisciplineIncidentBehaviorAssociationWeapon.md) | An unordered collection of studentDisciplineIncidentBehaviorAssociationWeapons. Identifies the type(s) of weapon used by the student during a discipline incident. The Federal Gun-Free Schools Act requires states to report the number of students expelled for bringing firearms to school by type of firearm. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
