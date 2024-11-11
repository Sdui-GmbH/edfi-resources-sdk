# # EdFiStudent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**student_unique_id** | **string** | A unique alphanumeric code assigned to a student. |
**person_reference** | [**\OpenAPI\Client\Model\EdFiPersonReference**](EdFiPersonReference.md) |  | [optional]
**birth_city** | **string** | The city the student was born in. | [optional]
**birth_country_descriptor** | **string** | The country in which an individual is born. It is strongly recommended that entries use only ISO 3166 2-letter country codes. | [optional]
**birth_date** | **\DateTime** | The month, day, and year on which an individual was born. |
**birth_international_province** | **string** | For students born outside of the U.S., the Province or jurisdiction in which an individual is born. | [optional]
**birth_sex_descriptor** | **string** | A person&#39;s sex at birth. | [optional]
**birth_state_abbreviation_descriptor** | **string** | The abbreviation for the name of the state (within the United States) or extra-state jurisdiction in which an individual was born. | [optional]
**citizenship_status_descriptor** | **string** | An indicator of whether or not the person is a U.S. citizen. | [optional]
**date_entered_us** | **\DateTime** | For students born outside of the U.S., the date the student entered the U.S. | [optional]
**first_name** | **string** | A name given to an individual at birth, baptism, or during another naming ceremony, or through legal change. |
**generation_code_suffix** | **string** | An appendage, if any, used to denote an individual&#39;s generation in his family (e.g., Jr., Sr., III). | [optional]
**identification_documents** | [**\OpenAPI\Client\Model\EdFiStudentIdentificationDocument[]**](EdFiStudentIdentificationDocument.md) | An unordered collection of studentIdentificationDocuments. Describe the documentation of citizenship. | [optional]
**last_surname** | **string** | The name borne in common by members of a family. |
**maiden_name** | **string** | The individual&#39;s maiden name. | [optional]
**middle_name** | **string** | A secondary name given to an individual at birth, baptism, or during another naming ceremony. | [optional]
**multiple_birth_status** | **bool** | Indicator of whether the student was born with other siblings (i.e., twins, triplets, etc.) | [optional]
**other_names** | [**\OpenAPI\Client\Model\EdFiStudentOtherName[]**](EdFiStudentOtherName.md) | An unordered collection of studentOtherNames. Other names (e.g., alias, nickname, previous legal name) associated with a person. | [optional]
**personal_identification_documents** | [**\OpenAPI\Client\Model\EdFiStudentPersonalIdentificationDocument[]**](EdFiStudentPersonalIdentificationDocument.md) | An unordered collection of studentPersonalIdentificationDocuments. The documents presented as evident to verify one&#39;s personal identity; for example: drivers license, passport, birth certificate, etc. | [optional]
**personal_title_prefix** | **string** | A prefix used to denote the title, degree, position, or seniority of the individual. | [optional]
**preferred_first_name** | **string** | The first name the individual prefers, if different from their legal first name | [optional]
**preferred_last_surname** | **string** | The last name the individual prefers, if different from their legal last name | [optional]
**visas** | [**\OpenAPI\Client\Model\EdFiStudentVisa[]**](EdFiStudentVisa.md) | An unordered collection of studentVisas. An indicator of a non-US citizen&#39;s Visa type. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
