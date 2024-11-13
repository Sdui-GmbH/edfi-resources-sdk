# # EdFiStaffAddress

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address_type_descriptor** | **string** | The type of address listed for an individual or organization.    For example:  Physical Address, Mailing Address, Home Address, etc.) |
**state_abbreviation_descriptor** | **string** | The abbreviation for the state (within the United States) or outlying area in which an address is located. |
**city** | **string** | The name of the city in which an address is located. |
**postal_code** | **string** | The five or nine digit zip code or overseas postal code portion of an address. |
**street_number_name** | **string** | The street number and street name or post office box number of an address. |
**locale_descriptor** | **string** | A general geographic indicator that categorizes U.S. territory (e.g., City, Suburban). | [optional]
**apartment_room_suite_number** | **string** | The apartment, room, or suite number of an address. | [optional]
**building_site_number** | **string** | The number of the building on the site, if more than one building shares the same address. | [optional]
**congressional_district** | **string** | The congressional district in which an address is located. | [optional]
**county_fips_code** | **string** | The Federal Information Processing Standards (FIPS) numeric code for the county issued by the National Institute of Standards and Technology (NIST). Counties are considered to be the \&quot;first-order subdivisions\&quot; of each State and statistically equivalent entity, regardless of their local designations (county, parish, borough, etc.) Counties in different States will have the same code. A unique county number is created when combined with the 2-digit FIPS State Code. | [optional]
**do_not_publish_indicator** | **bool** | An indication that the address should not be published. | [optional]
**latitude** | **string** | The geographic latitude of the physical address. | [optional]
**longitude** | **string** | The geographic longitude of the physical address. | [optional]
**name_of_county** | **string** | The name of the county, parish, borough, or comparable unit (within a state) in                       &#39;which an address is located. | [optional]
**periods** | [**\Resources\Model\EdFiStaffAddressPeriod[]**](EdFiStaffAddressPeriod.md) | An unordered collection of staffAddressPeriods. The time periods for which the address is valid. For physical addresses, the periods in which the person lived at that address. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
