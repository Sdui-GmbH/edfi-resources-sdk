# # EdFiStaff

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**staff_unique_id** | **string** | A unique alphanumeric code assigned to a staff. |
**person_reference** | [**\Resources\Model\EdFiPersonReference**](EdFiPersonReference.md) |  | [optional]
**addresses** | [**\Resources\Model\EdFiStaffAddress[]**](EdFiStaffAddress.md) | An unordered collection of staffAddresses. The set of elements that describes an address, including the street address, city, state, and ZIP code. | [optional]
**ancestry_ethnic_origins** | [**\Resources\Model\EdFiStaffAncestryEthnicOrigin[]**](EdFiStaffAncestryEthnicOrigin.md) | An unordered collection of staffAncestryEthnicOrigins. The original peoples or cultures with which the individual identifies. | [optional]
**birth_date** | **\DateTime** | The month, day, and year on which an individual was born. | [optional]
**citizenship_status_descriptor** | **string** | An indicator of whether or not the person is a U.S. citizen. | [optional]
**credentials** | [**\Resources\Model\EdFiStaffCredential[]**](EdFiStaffCredential.md) | An unordered collection of staffCredentials. The legal document giving authorization to perform teaching assignment services. | [optional]
**electronic_mails** | [**\Resources\Model\EdFiStaffElectronicMail[]**](EdFiStaffElectronicMail.md) | An unordered collection of staffElectronicMails. The numbers, letters, and symbols used to identify an electronic mail (e-mail) user within the network to which the individual or organization belongs. | [optional]
**first_name** | **string** | A name given to an individual at birth, baptism, or during another naming ceremony, or through legal change. |
**gender_identity** | **string** | The gender the staff member identifies themselves as. | [optional]
**generation_code_suffix** | **string** | An appendage, if any, used to denote an individual&#39;s generation in his family (e.g., Jr., Sr., III). | [optional]
**highest_completed_level_of_education_descriptor** | **string** | The extent of formal instruction an individual has received (e.g., the highest grade in school completed or its equivalent or the highest degree received). | [optional]
**highly_qualified_teacher** | **bool** | An indication of whether a teacher is classified as highly qualified for his/her assignment according to state definition. This attribute indicates the teacher is highly qualified for ALL Sections being taught. | [optional]
**hispanic_latino_ethnicity** | **bool** | An indication that the individual traces his or her origin or descent to Mexico, Puerto Rico, Cuba, Central, and South America, and other Spanish cultures, regardless of race. The term, \&quot;Spanish origin,\&quot; can be used in addition to \&quot;Hispanic or Latino.\&quot; | [optional]
**identification_codes** | [**\Resources\Model\EdFiStaffIdentificationCode[]**](EdFiStaffIdentificationCode.md) | An unordered collection of staffIdentificationCodes. A unique number or alphanumeric code assigned to a staff member by a school, school system, a state, or other agency or entity. | [optional]
**identification_documents** | [**\Resources\Model\EdFiStaffIdentificationDocument[]**](EdFiStaffIdentificationDocument.md) | An unordered collection of staffIdentificationDocuments. Describe the documentation of citizenship. | [optional]
**international_addresses** | [**\Resources\Model\EdFiStaffInternationalAddress[]**](EdFiStaffInternationalAddress.md) | An unordered collection of staffInternationalAddresses. The set of elements that describes an international address. | [optional]
**languages** | [**\Resources\Model\EdFiStaffLanguage[]**](EdFiStaffLanguage.md) | An unordered collection of staffLanguages. The language(s) the individual uses to communicate. It is strongly recommended that entries use only ISO 639-2 language codes. | [optional]
**last_surname** | **string** | The name borne in common by members of a family. |
**login_id** | **string** | The login ID for the user; used for security access control interface. | [optional]
**maiden_name** | **string** | The individual&#39;s maiden name. | [optional]
**middle_name** | **string** | A secondary name given to an individual at birth, baptism, or during another naming ceremony. | [optional]
**other_names** | [**\Resources\Model\EdFiStaffOtherName[]**](EdFiStaffOtherName.md) | An unordered collection of staffOtherNames. Other names (e.g., alias, nickname, previous legal name) associated with a person. | [optional]
**personal_identification_documents** | [**\Resources\Model\EdFiStaffPersonalIdentificationDocument[]**](EdFiStaffPersonalIdentificationDocument.md) | An unordered collection of staffPersonalIdentificationDocuments. The documents presented as evident to verify one&#39;s personal identity; for example: drivers license, passport, birth certificate, etc. | [optional]
**personal_title_prefix** | **string** | A prefix used to denote the title, degree, position, or seniority of the individual. | [optional]
**preferred_first_name** | **string** | The first name the individual prefers, if different from their legal first name | [optional]
**preferred_last_surname** | **string** | The last name the individual prefers, if different from their legal last name | [optional]
**races** | [**\Resources\Model\EdFiStaffRace[]**](EdFiStaffRace.md) | An unordered collection of staffRaces. The general racial category which most clearly reflects the individual&#39;s recognition of his or her community or with which the individual most identifies. The way this data element is listed, it must allow for multiple entries so that each individual can specify all appropriate races. | [optional]
**recognitions** | [**\Resources\Model\EdFiStaffRecognition[]**](EdFiStaffRecognition.md) | An unordered collection of staffRecognitions. Recognitions given to the staff for accomplishments in a co-curricular or extracurricular activity. | [optional]
**sex_descriptor** | **string** | The birth sex of the staff member. | [optional]
**telephones** | [**\Resources\Model\EdFiStaffTelephone[]**](EdFiStaffTelephone.md) | An unordered collection of staffTelephones. The 10-digit telephone number, including the area code, for the person. | [optional]
**tribal_affiliations** | [**\Resources\Model\EdFiStaffTribalAffiliation[]**](EdFiStaffTribalAffiliation.md) | An unordered collection of staffTribalAffiliations. An American Indian tribe with which the staff member is affiliated. | [optional]
**visas** | [**\Resources\Model\EdFiStaffVisa[]**](EdFiStaffVisa.md) | An unordered collection of staffVisas. An indicator of a non-US citizen&#39;s Visa type. | [optional]
**years_of_prior_professional_experience** | **float** | The total number of years that an individual has previously held a similar professional position in one or more education institutions prior to the current school year. | [optional]
**years_of_prior_teaching_experience** | **float** | The total number of years that an individual has previously held a teaching position in one or more education institutions prior to the current school year. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
