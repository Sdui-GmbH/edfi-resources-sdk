# # EdFiContact

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**contact_unique_id** | **string** | A unique alphanumeric code assigned to a contact. |
**person_reference** | [**\Resources\Model\EdFiPersonReference**](EdFiPersonReference.md) |  | [optional]
**addresses** | [**\Resources\Model\EdFiContactAddress[]**](EdFiContactAddress.md) | An unordered collection of contactAddresses. Contact&#39;s address, if different from the student address. | [optional]
**electronic_mails** | [**\Resources\Model\EdFiContactElectronicMail[]**](EdFiContactElectronicMail.md) | An unordered collection of contactElectronicMails. The numbers, letters, and symbols used to identify an electronic mail (e-mail) user within the network to which the individual or organization belongs. | [optional]
**first_name** | **string** | A name given to an individual at birth, baptism, or during another naming ceremony, or through legal change. |
**gender_identity** | **string** | The gender the contact identifies themselves as. | [optional]
**generation_code_suffix** | **string** | An appendage, if any, used to denote an individual&#39;s generation in his family (e.g., Jr., Sr., III). | [optional]
**highest_completed_level_of_education_descriptor** | **string** | The extent of formal instruction an individual has received (e.g., the highest grade in school completed or its equivalent or the highest degree received). | [optional]
**international_addresses** | [**\Resources\Model\EdFiContactInternationalAddress[]**](EdFiContactInternationalAddress.md) | An unordered collection of contactInternationalAddresses. The set of elements that describes an international address. | [optional]
**languages** | [**\Resources\Model\EdFiContactLanguage[]**](EdFiContactLanguage.md) | An unordered collection of contactLanguages. The language(s) the individual uses to communicate. It is strongly recommended that entries use only ISO 639-2 language codes. | [optional]
**last_surname** | **string** | The name borne in common by members of a family. |
**login_id** | **string** | The login ID for the user; used for security access control interface. | [optional]
**maiden_name** | **string** | The individual&#39;s maiden name. | [optional]
**middle_name** | **string** | A secondary name given to an individual at birth, baptism, or during another naming ceremony. | [optional]
**other_names** | [**\Resources\Model\EdFiContactOtherName[]**](EdFiContactOtherName.md) | An unordered collection of contactOtherNames. Other names (e.g., alias, nickname, previous legal name) associated with a person. | [optional]
**personal_identification_documents** | [**\Resources\Model\EdFiContactPersonalIdentificationDocument[]**](EdFiContactPersonalIdentificationDocument.md) | An unordered collection of contactPersonalIdentificationDocuments. The documents presented as evident to verify one&#39;s personal identity; for example: drivers license, passport, birth certificate, etc. | [optional]
**personal_title_prefix** | **string** | A prefix used to denote the title, degree, position, or seniority of the individual. | [optional]
**preferred_first_name** | **string** | The first name the individual prefers, if different from their legal first name | [optional]
**preferred_last_surname** | **string** | The last name the individual prefers, if different from their legal last name | [optional]
**sex_descriptor** | **string** | A person&#39;s birth sex. | [optional]
**telephones** | [**\Resources\Model\EdFiContactTelephone[]**](EdFiContactTelephone.md) | An unordered collection of contactTelephones. The 10-digit telephone number, including the area code, for the person. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
