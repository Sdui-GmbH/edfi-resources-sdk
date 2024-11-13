# # EdFiSchool

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**education_organization_categories** | [**\Resources\Model\EdFiEducationOrganizationCategory[]**](EdFiEducationOrganizationCategory.md) | An unordered collection of educationOrganizationCategories. The classification of the education agency within the geographic boundaries of a state according to the level of administrative and operational control granted by the state. |
**grade_levels** | [**\Resources\Model\EdFiSchoolGradeLevel[]**](EdFiSchoolGradeLevel.md) | An unordered collection of schoolGradeLevels. The grade levels served at the school. |
**school_id** | **int** | The identifier assigned to a school. |
**charter_approval_school_year_type_reference** | [**\Resources\Model\EdFiSchoolYearTypeReference**](EdFiSchoolYearTypeReference.md) |  | [optional]
**local_education_agency_reference** | [**\Resources\Model\EdFiLocalEducationAgencyReference**](EdFiLocalEducationAgencyReference.md) |  | [optional]
**addresses** | [**\Resources\Model\EdFiEducationOrganizationAddress[]**](EdFiEducationOrganizationAddress.md) | An unordered collection of educationOrganizationAddresses. The set of elements that describes an address for the education entity, including the street address, city, state, ZIP code, and ZIP code + 4. | [optional]
**administrative_funding_control_descriptor** | **string** | The type of education institution as classified by its funding source, for example public or private. | [optional]
**charter_approval_agency_type_descriptor** | **string** | The type of agency that approved the establishment or continuation of a charter school. | [optional]
**charter_status_descriptor** | **string** | A school or agency providing free public elementary or secondary education to eligible students under a specific charter granted by the state legislature or other appropriate authority and designated by such authority to be a charter school. | [optional]
**identification_codes** | [**\Resources\Model\EdFiEducationOrganizationIdentificationCode[]**](EdFiEducationOrganizationIdentificationCode.md) | An unordered collection of educationOrganizationIdentificationCodes. A unique number or alphanumeric code assigned to an education organization by a school, school system, a state, or other agency or entity. | [optional]
**indicators** | [**\Resources\Model\EdFiEducationOrganizationIndicator[]**](EdFiEducationOrganizationIndicator.md) | An unordered collection of educationOrganizationIndicators. An indicator or metric of an education organization. | [optional]
**institution_telephones** | [**\Resources\Model\EdFiEducationOrganizationInstitutionTelephone[]**](EdFiEducationOrganizationInstitutionTelephone.md) | An unordered collection of educationOrganizationInstitutionTelephones. The 10-digit telephone number, including the area code, for the education entity. | [optional]
**international_addresses** | [**\Resources\Model\EdFiEducationOrganizationInternationalAddress[]**](EdFiEducationOrganizationInternationalAddress.md) | An unordered collection of educationOrganizationInternationalAddresses. The set of elements that describes the international physical location of the education entity. | [optional]
**internet_access_descriptor** | **string** | The type of Internet access available. | [optional]
**magnet_special_program_emphasis_school_descriptor** | **string** | A school that has been designed: 1) to attract students of different racial/ethnic backgrounds for the purpose of reducing, preventing, or eliminating racial isolation; and/or 2) to provide an academic or social focus on a particular theme (e.g., science/math, performing arts, gifted/talented, or foreign language). | [optional]
**name_of_institution** | **string** | The full, legally accepted name of the institution. |
**operational_status_descriptor** | **string** | The current operational status of the education organization (e.g., active, inactive). | [optional]
**school_categories** | [**\Resources\Model\EdFiSchoolCategory[]**](EdFiSchoolCategory.md) | An unordered collection of schoolCategories. The one or more categories of school. | [optional]
**school_type_descriptor** | **string** | The type of education institution as classified by its primary focus. | [optional]
**short_name_of_institution** | **string** | A short name for the institution. | [optional]
**title_i_part_a_school_designation_descriptor** | **string** | Denotes the Title I Part A designation for the school. | [optional]
**web_site** | **string** | The public web site address (URL) for the education organization. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]
**_ext** | [**\Resources\Model\SchoolExtensions**](SchoolExtensions.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
