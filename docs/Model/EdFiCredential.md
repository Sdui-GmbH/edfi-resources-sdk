# # EdFiCredential

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**credential_identifier** | **string** | Identifier or serial number assigned to the credential. |
**state_of_issue_state_abbreviation_descriptor** | **string** | The abbreviation for the name of the state (within the United States) or extra-state jurisdiction in which a license/credential was issued. |
**academic_subjects** | [**\Resources\Model\EdFiCredentialAcademicSubject[]**](EdFiCredentialAcademicSubject.md) | An unordered collection of credentialAcademicSubjects. The academic subjects to which the credential pertains. | [optional]
**credential_field_descriptor** | **string** | The field of certification for the certificate (e.g., Mathematics, Music). | [optional]
**credential_type_descriptor** | **string** | An indication of the category of credential an individual holds. |
**effective_date** | **\DateTime** | The year, month and day on which an active credential held by an individual was issued.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines. | [optional]
**endorsements** | [**\Resources\Model\EdFiCredentialEndorsement[]**](EdFiCredentialEndorsement.md) | An unordered collection of credentialEndorsements. Endorsements are attachments to teaching certificates and indicate areas of specialization. | [optional]
**expiration_date** | **\DateTime** | The month, day, and year on which an active credential held by an individual will expire.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines. | [optional]
**grade_levels** | [**\Resources\Model\EdFiCredentialGradeLevel[]**](EdFiCredentialGradeLevel.md) | An unordered collection of credentialGradeLevels. The grade level(s) certified for teaching. | [optional]
**issuance_date** | **\DateTime** | The month, day, and year on which an active credential was issued to an individual. |
**namespace** | **string** | Namespace for the credential. |
**teaching_credential_basis_descriptor** | **string** | An indication of the pre-determined criteria for granting the teaching credential that an individual holds. | [optional]
**teaching_credential_descriptor** | **string** | An indication of the category of a legal document giving authorization to perform teaching assignment services. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]
**_ext** | [**\Resources\Model\CredentialExtensions**](CredentialExtensions.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
