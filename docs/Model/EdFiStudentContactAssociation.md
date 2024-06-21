# # EdFiStudentContactAssociation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**contact_reference** | [**\OpenAPI\Client\Model\EdFiContactReference**](EdFiContactReference.md) |  |
**student_reference** | [**\OpenAPI\Client\Model\EdFiStudentReference**](EdFiStudentReference.md) |  |
**contact_priority** | **int** | The numeric order of the preferred sequence or priority of contact. | [optional]
**contact_restrictions** | **string** | Restrictions for student and/or teacher contact with the individual (e.g., the student may not be picked up by the individual). | [optional]
**emergency_contact_status** | **bool** | Indicator of whether the person is a designated emergency contact for the student. | [optional]
**legal_guardian** | **bool** | Indicator of whether the person is a legal guardian for the student. | [optional]
**lives_with** | **bool** | Indicator of whether the student lives with the associated contact. | [optional]
**primary_contact_status** | **bool** | Indicator of whether the person is a primary contact for the student. | [optional]
**relation_descriptor** | **string** | The nature of an individual&#39;s relationship to a student, primarily used to capture family relationships. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
