# # EdFiStateEducationAgency

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**categories** | [**\OpenAPI\Client\Model\EdFiEducationOrganizationCategory[]**](EdFiEducationOrganizationCategory.md) | An unordered collection of educationOrganizationCategories. The classification of the education agency within the geographic boundaries of a state according to the level of administrative and operational control granted by the state. |
**state_education_agency_id** | **int** | The identifier assigned to a state education agency. |
**accountabilities** | [**\OpenAPI\Client\Model\EdFiStateEducationAgencyAccountability[]**](EdFiStateEducationAgencyAccountability.md) | An unordered collection of stateEducationAgencyAccountabilities. This entity maintains information about federal reporting and accountability for state education agencies. | [optional]
**addresses** | [**\OpenAPI\Client\Model\EdFiEducationOrganizationAddress[]**](EdFiEducationOrganizationAddress.md) | An unordered collection of educationOrganizationAddresses. The set of elements that describes an address for the education entity, including the street address, city, state, ZIP code, and ZIP code + 4. | [optional]
**federal_funds** | [**\OpenAPI\Client\Model\EdFiStateEducationAgencyFederalFunds[]**](EdFiStateEducationAgencyFederalFunds.md) | An unordered collection of stateEducationAgencyFederalFunds. Contains the information about the reception and use of federal funds for reporting purposes. | [optional]
**identification_codes** | [**\OpenAPI\Client\Model\EdFiEducationOrganizationIdentificationCode[]**](EdFiEducationOrganizationIdentificationCode.md) | An unordered collection of educationOrganizationIdentificationCodes. A unique number or alphanumeric code assigned to an education organization by a school, school system, a state, or other agency or entity. | [optional]
**indicators** | [**\OpenAPI\Client\Model\EdFiEducationOrganizationIndicator[]**](EdFiEducationOrganizationIndicator.md) | An unordered collection of educationOrganizationIndicators. An indicator or metric of an education organization. | [optional]
**institution_telephones** | [**\OpenAPI\Client\Model\EdFiEducationOrganizationInstitutionTelephone[]**](EdFiEducationOrganizationInstitutionTelephone.md) | An unordered collection of educationOrganizationInstitutionTelephones. The 10-digit telephone number, including the area code, for the education entity. | [optional]
**international_addresses** | [**\OpenAPI\Client\Model\EdFiEducationOrganizationInternationalAddress[]**](EdFiEducationOrganizationInternationalAddress.md) | An unordered collection of educationOrganizationInternationalAddresses. The set of elements that describes the international physical location of the education entity. | [optional]
**name_of_institution** | **string** | The full, legally accepted name of the institution. |
**operational_status_descriptor** | **string** | The current operational status of the education organization (e.g., active, inactive). | [optional]
**short_name_of_institution** | **string** | A short name for the institution. | [optional]
**web_site** | **string** | The public web site address (URL) for the education organization. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
