# # TpdmCandidate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**candidate_identifier** | **string** | A unique alphanumeric code assigned to a candidate. |
**person_reference** | [**\Resources\Model\EdFiPersonReference**](EdFiPersonReference.md) |  | [optional]
**addresses** | [**\Resources\Model\TpdmCandidateAddress[]**](TpdmCandidateAddress.md) | An unordered collection of candidateAddresses. The set of elements that describes an address, including the street address, city, state, and ZIP code. | [optional]
**birth_city** | **string** | The city the student was born in. | [optional]
**birth_country_descriptor** | **string** | The country in which an individual is born. It is strongly recommended that entries use only ISO 3166 2-letter country codes. | [optional]
**birth_date** | **\DateTime** | The month, day, and year on which an individual was born. |
**birth_international_province** | **string** | For students born outside of the U.S., the Province or jurisdiction in which an individual is born. | [optional]
**birth_sex_descriptor** | **string** | A person&#39;s sex at birth. | [optional]
**birth_state_abbreviation_descriptor** | **string** | The abbreviation for the name of the state (within the United States) or extra-state jurisdiction in which an individual was born. | [optional]
**date_entered_us** | **\DateTime** | For students born outside of the U.S., the date the student entered the U.S. | [optional]
**disabilities** | [**\Resources\Model\TpdmCandidateDisability[]**](TpdmCandidateDisability.md) | An unordered collection of candidateDisabilities. The disability condition(s) that best describes an individual&#39;s impairment. | [optional]
**displacement_status** | **string** | Indicates a state health or weather related event that displaces a group of students, and may require additional funding, educational, or social services. | [optional]
**economic_disadvantaged** | **bool** | An indication of inadequate financial condition of an individual&#39;s family, as determined by family income, number of family members/dependents, participation in public assistance programs, and/or other characteristics considered relevant by federal, state, and local policy. | [optional]
**electronic_mails** | [**\Resources\Model\TpdmCandidateElectronicMail[]**](TpdmCandidateElectronicMail.md) | An unordered collection of candidateElectronicMails. The numbers, letters, and symbols used to identify an electronic mail (e-mail) user within the network to which the individual or organization belongs. | [optional]
**english_language_exam_descriptor** | **string** | Indicates that a person passed, failed, or did not take an English Language assessment (e.g., TOEFFL). | [optional]
**first_generation_student** | **bool** | Indicator of whether individual is a first generation college student. | [optional]
**first_name** | **string** | A name given to an individual at birth, baptism, or during another naming ceremony, or through legal change. |
**gender_descriptor** | **string** | The gender of the candidate. | [optional]
**generation_code_suffix** | **string** | An appendage, if any, used to denote an individual&#39;s generation in his family (e.g., Jr., Sr., III). | [optional]
**hispanic_latino_ethnicity** | **bool** | An indication that the individual traces his or her origin or descent to Mexico, Puerto Rico, Cuba, Central, and South America, and other Spanish cultures, regardless of race. The term, \&quot;Spanish origin,\&quot; can be used in addition to \&quot;Hispanic or Latino.\&quot; | [optional]
**languages** | [**\Resources\Model\TpdmCandidateLanguage[]**](TpdmCandidateLanguage.md) | An unordered collection of candidateLanguages. The language(s) the individual uses to communicate. | [optional]
**last_surname** | **string** | The name borne in common by members of a family. |
**limited_english_proficiency_descriptor** | **string** | An indication that the student has been identified as limited English proficient by the Language Proficiency Assessment Committee (LPAC), or English proficient. | [optional]
**maiden_name** | **string** | The individual&#39;s maiden name. | [optional]
**middle_name** | **string** | A secondary name given to an individual at birth, baptism, or during another naming ceremony. | [optional]
**multiple_birth_status** | **bool** | Indicator of whether the student was born with other siblings (i.e., twins, triplets, etc.) | [optional]
**other_names** | [**\Resources\Model\TpdmCandidateOtherName[]**](TpdmCandidateOtherName.md) | An unordered collection of candidateOtherNames. Other names (e.g., alias, nickname, previous legal name) associated with a person. | [optional]
**personal_identification_documents** | [**\Resources\Model\TpdmCandidatePersonalIdentificationDocument[]**](TpdmCandidatePersonalIdentificationDocument.md) | An unordered collection of candidatePersonalIdentificationDocuments. The documents presented as evident to verify one&#39;s personal identity; for example: drivers license, passport, birth certificate, etc. | [optional]
**personal_title_prefix** | **string** | A prefix used to denote the title, degree, position, or seniority of the individual. | [optional]
**preferred_first_name** | **string** | The first name the individual prefers, if different from their legal first name | [optional]
**preferred_last_surname** | **string** | The last name the individual prefers, if different from their legal last name | [optional]
**races** | [**\Resources\Model\TpdmCandidateRace[]**](TpdmCandidateRace.md) | An unordered collection of candidateRaces. The general racial category which most clearly reflects the individual&#39;s recognition of his or her community or with which the individual most identifies. The data model allows for multiple entries so that each individual can specify all appropriate races. | [optional]
**sex_descriptor** | **string** | The sex of the candidate. | [optional]
**telephones** | [**\Resources\Model\TpdmCandidateTelephone[]**](TpdmCandidateTelephone.md) | An unordered collection of candidateTelephones. The 10-digit telephone number, including the area code, for the person. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
