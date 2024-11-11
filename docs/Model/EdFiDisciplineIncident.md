# # EdFiDisciplineIncident

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**incident_identifier** | **string** | A locally assigned unique identifier (within the school or school district) to identify each specific DisciplineIncident or occurrence. The same identifier should be used to document the entire discipline incident even if it included multiple offenses and multiple offenders. |
**school_reference** | [**\OpenAPI\Client\Model\EdFiSchoolReference**](EdFiSchoolReference.md) |  |
**behaviors** | [**\OpenAPI\Client\Model\EdFiDisciplineIncidentBehavior[]**](EdFiDisciplineIncidentBehavior.md) | An unordered collection of disciplineIncidentBehaviors. Describes behavior by category and provides a detailed description. | [optional]
**case_number** | **string** | The case number assigned to the DisciplineIncident by law enforcement or other organization. | [optional]
**external_participants** | [**\OpenAPI\Client\Model\EdFiDisciplineIncidentExternalParticipant[]**](EdFiDisciplineIncidentExternalParticipant.md) | An unordered collection of disciplineIncidentExternalParticipants. Information on an individual involved in the discipline incident. | [optional]
**incident_cost** | **float** | The value of any quantifiable monetary loss directly resulting from the discipline incident. Examples include the value of repairs necessitated by vandalism of a school facility, or the value of personnel resources used for repairs or consumed by the incident. | [optional]
**incident_date** | **\DateTime** | The month, day, and year on which the discipline incident occurred. |
**incident_description** | **string** | The description for an incident. | [optional]
**incident_location_descriptor** | **string** | Identifies where the discipline incident occurred and whether or not it occurred on school. | [optional]
**incident_time** | **string** | An indication of the time of day the incident took place. | [optional]
**reported_to_law_enforcement** | **bool** | Indicator of whether the incident was reported to law enforcement. | [optional]
**reporter_description_descriptor** | **string** | Information on the type of individual who reported the discipline incident. When known and/or if useful, use a more specific option code (e.g., \&quot;Counselor\&quot; rather than \&quot;Professional Staff\&quot;). | [optional]
**reporter_name** | **string** | Identifies the reporter of the discipline incident by name. | [optional]
**weapons** | [**\OpenAPI\Client\Model\EdFiDisciplineIncidentWeapon[]**](EdFiDisciplineIncidentWeapon.md) | An unordered collection of disciplineIncidentWeapons. Identifies the type of weapon used during an incident. The Federal Gun-Free Schools Act requires states to report the number of students expelled for bringing firearms to school by type of firearm. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
