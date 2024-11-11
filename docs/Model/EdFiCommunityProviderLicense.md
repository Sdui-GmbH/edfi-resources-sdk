# # EdFiCommunityProviderLicense

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**license_identifier** | **string** | The unique identifier issued by the licensing organization. |
**licensing_organization** | **string** | The organization issuing the license. |
**community_provider_reference** | [**\Resources\Model\EdFiCommunityProviderReference**](EdFiCommunityProviderReference.md) |  |
**authorized_facility_capacity** | **int** | The maximum number that can be contained or accommodated which a provider is authorized or licensed to serve. | [optional]
**license_effective_date** | **\DateTime** | The month, day, and year on which a license is active or becomes effective. |
**license_expiration_date** | **\DateTime** | The month, day, and year on which a license will expire. | [optional]
**license_issue_date** | **\DateTime** | The month, day, and year on which an active license was issued. | [optional]
**license_status_descriptor** | **string** | An indication of the status of the license. | [optional]
**license_type_descriptor** | **string** | An indication of the category of the license. |
**oldest_age_authorized_to_serve** | **int** | The oldest age of children a provider is authorized or licensed to serve. | [optional]
**youngest_age_authorized_to_serve** | **int** | The youngest age of children a provider is authorized or licensed to serve. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
