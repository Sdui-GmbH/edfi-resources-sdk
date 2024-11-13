# # EdFiLocalEducationAgency

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**categories** | [**\Resources\Model\EdFiEducationOrganizationCategory[]**](EdFiEducationOrganizationCategory.md) | An unordered collection of educationOrganizationCategories. The classification of the education agency within the geographic boundaries of a state according to the level of administrative and operational control granted by the state. |
**local_education_agency_id** | **int** | The identifier assigned to a local education agency. |
**education_service_center_reference** | [**\Resources\Model\EdFiEducationServiceCenterReference**](EdFiEducationServiceCenterReference.md) |  | [optional]
**parent_local_education_agency_reference** | [**\Resources\Model\EdFiLocalEducationAgencyReference**](EdFiLocalEducationAgencyReference.md) |  | [optional]
**state_education_agency_reference** | [**\Resources\Model\EdFiStateEducationAgencyReference**](EdFiStateEducationAgencyReference.md) |  | [optional]
**accountabilities** | [**\Resources\Model\EdFiLocalEducationAgencyAccountability[]**](EdFiLocalEducationAgencyAccountability.md) | An unordered collection of localEducationAgencyAccountabilities. This entity maintains information about federal reporting and accountability for local education agencies. | [optional]
**addresses** | [**\Resources\Model\EdFiEducationOrganizationAddress[]**](EdFiEducationOrganizationAddress.md) | An unordered collection of educationOrganizationAddresses. The set of elements that describes an address for the education entity, including the street address, city, state, ZIP code, and ZIP code + 4. | [optional]
**charter_status_descriptor** | **string** | A school or agency providing free public elementary or secondary education to eligible students under a specific charter granted by the state legislature or other appropriate authority and designated by such authority to be a charter school. | [optional]
**federal_funds** | [**\Resources\Model\EdFiLocalEducationAgencyFederalFunds[]**](EdFiLocalEducationAgencyFederalFunds.md) | An unordered collection of localEducationAgencyFederalFunds. Contains the information about the reception and use of federal funds for reporting purposes. | [optional]
**identification_codes** | [**\Resources\Model\EdFiEducationOrganizationIdentificationCode[]**](EdFiEducationOrganizationIdentificationCode.md) | An unordered collection of educationOrganizationIdentificationCodes. A unique number or alphanumeric code assigned to an education organization by a school, school system, a state, or other agency or entity. | [optional]
**indicators** | [**\Resources\Model\EdFiEducationOrganizationIndicator[]**](EdFiEducationOrganizationIndicator.md) | An unordered collection of educationOrganizationIndicators. An indicator or metric of an education organization. | [optional]
**institution_telephones** | [**\Resources\Model\EdFiEducationOrganizationInstitutionTelephone[]**](EdFiEducationOrganizationInstitutionTelephone.md) | An unordered collection of educationOrganizationInstitutionTelephones. The 10-digit telephone number, including the area code, for the education entity. | [optional]
**international_addresses** | [**\Resources\Model\EdFiEducationOrganizationInternationalAddress[]**](EdFiEducationOrganizationInternationalAddress.md) | An unordered collection of educationOrganizationInternationalAddresses. The set of elements that describes the international physical location of the education entity. | [optional]
**local_education_agency_category_descriptor** | **string** | The category of local education agency/district. |
**name_of_institution** | **string** | The full, legally accepted name of the institution. |
**operational_status_descriptor** | **string** | The current operational status of the education organization (e.g., active, inactive). | [optional]
**short_name_of_institution** | **string** | A short name for the institution. | [optional]
**web_site** | **string** | The public web site address (URL) for the education organization. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
