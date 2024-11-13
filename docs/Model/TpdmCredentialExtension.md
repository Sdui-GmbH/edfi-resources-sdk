# # TpdmCredentialExtension

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**certification_route_descriptor** | **string** | The process, program, or pathway used to obtain certification. | [optional]
**credential_status_descriptor** | **string** | The current status of the credential (e.g., active, suspended, etc.). | [optional]
**educator_role_descriptor** | **string** | The specific roles or positions within an organization that the credential is intended to authorize (e.g., Principal, Reading Specialist), typically associated with service and administrative certifications. | [optional]
**board_certification_indicator** | **bool** | Indicator that the credential was granted under the authority of a national Board Certification. | [optional]
**certification_title** | **string** | The title of the certification obtained by the educator. | [optional]
**credential_status_date** | **\DateTime** | The month, day, and year on which the credential status was effective. | [optional]
**person_reference** | [**\Resources\Model\EdFiPersonReference**](EdFiPersonReference.md) |  | [optional]
**student_academic_records** | [**\Resources\Model\TpdmCredentialStudentAcademicRecord[]**](TpdmCredentialStudentAcademicRecord.md) | An unordered collection of credentialStudentAcademicRecords. Reference to the person&#39;s Student Academic Records for the school(s) with which the Credential is associated. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
