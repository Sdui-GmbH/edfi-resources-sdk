# # EdFiPostSecondaryInstitution

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**categories** | [**\Resources\Model\EdFiEducationOrganizationCategory[]**](EdFiEducationOrganizationCategory.md) | An unordered collection of educationOrganizationCategories. The classification of the education agency within the geographic boundaries of a state according to the level of administrative and operational control granted by the state. |
**post_secondary_institution_id** | **int** | The ID of the post secondary institution. It must be distinct from any other identifier assigned to educational organizations, such as a LocalEducationAgencyId, to prevent duplication. |
**addresses** | [**\Resources\Model\EdFiEducationOrganizationAddress[]**](EdFiEducationOrganizationAddress.md) | An unordered collection of educationOrganizationAddresses. The set of elements that describes an address for the education entity, including the street address, city, state, ZIP code, and ZIP code + 4. | [optional]
**administrative_funding_control_descriptor** | **string** | A classification of whether a postsecondary institution is operated by publicly elected or appointed officials (public control) or by privately elected or appointed officials and derives its major source of funds from private sources (private control). | [optional]
**identification_codes** | [**\Resources\Model\EdFiEducationOrganizationIdentificationCode[]**](EdFiEducationOrganizationIdentificationCode.md) | An unordered collection of educationOrganizationIdentificationCodes. A unique number or alphanumeric code assigned to an education organization by a school, school system, a state, or other agency or entity. | [optional]
**indicators** | [**\Resources\Model\EdFiEducationOrganizationIndicator[]**](EdFiEducationOrganizationIndicator.md) | An unordered collection of educationOrganizationIndicators. An indicator or metric of an education organization. | [optional]
**institution_telephones** | [**\Resources\Model\EdFiEducationOrganizationInstitutionTelephone[]**](EdFiEducationOrganizationInstitutionTelephone.md) | An unordered collection of educationOrganizationInstitutionTelephones. The 10-digit telephone number, including the area code, for the education entity. | [optional]
**international_addresses** | [**\Resources\Model\EdFiEducationOrganizationInternationalAddress[]**](EdFiEducationOrganizationInternationalAddress.md) | An unordered collection of educationOrganizationInternationalAddresses. The set of elements that describes the international physical location of the education entity. | [optional]
**medium_of_instructions** | [**\Resources\Model\EdFiPostSecondaryInstitutionMediumOfInstruction[]**](EdFiPostSecondaryInstitutionMediumOfInstruction.md) | An unordered collection of postSecondaryInstitutionMediumOfInstructions. The categories in which an institution serves the students. | [optional]
**name_of_institution** | **string** | The full, legally accepted name of the institution. |
**operational_status_descriptor** | **string** | The current operational status of the education organization (e.g., active, inactive). | [optional]
**post_secondary_institution_level_descriptor** | **string** | A classification of whether a post secondary institution&#39;s highest level of offering is a program of 4-years or higher (4 year), 2-but-less-than 4-years (2 year), or less than 2-years. | [optional]
**short_name_of_institution** | **string** | A short name for the institution. | [optional]
**web_site** | **string** | The public web site address (URL) for the education organization. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
