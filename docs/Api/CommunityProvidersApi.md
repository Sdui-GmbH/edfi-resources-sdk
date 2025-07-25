# Resources\CommunityProvidersApi

All URIs are relative to https://api.ed-fi.org:443/v7.3/api/data/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteCommunityProviderById()**](CommunityProvidersApi.md#deleteCommunityProviderById) | **DELETE** /ed-fi/communityProviders/{id} | Deletes an existing resource using the resource identifier. |
| [**deletesCommunityProviders()**](CommunityProvidersApi.md#deletesCommunityProviders) | **GET** /ed-fi/communityProviders/deletes | Retrieves deleted resources based on change version. |
| [**getCommunityProviders()**](CommunityProvidersApi.md#getCommunityProviders) | **GET** /ed-fi/communityProviders | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern). |
| [**getCommunityProvidersById()**](CommunityProvidersApi.md#getCommunityProvidersById) | **GET** /ed-fi/communityProviders/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern). |
| [**getCommunityProvidersPartitions()**](CommunityProvidersApi.md#getCommunityProvidersPartitions) | **GET** /ed-fi/communityProviders/partitions | Retrieves a set of page tokens to be used for efficient client-side parallel processing. |
| [**keyChangesCommunityProviders()**](CommunityProvidersApi.md#keyChangesCommunityProviders) | **GET** /ed-fi/communityProviders/keyChanges | Retrieves resources key changes based on change version. |
| [**postCommunityProvider()**](CommunityProvidersApi.md#postCommunityProvider) | **POST** /ed-fi/communityProviders | Creates or updates resources based on the natural key values of the supplied resource. |
| [**putCommunityProvider()**](CommunityProvidersApi.md#putCommunityProvider) | **PUT** /ed-fi/communityProviders/{id} | Updates a resource based on the resource identifier. |


## `deleteCommunityProviderById()`

```php
deleteCommunityProviderById($id, $if_match)
```

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier. If the resource doesn't exist, an error will result (the resource will not be found).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\CommunityProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try {
    $apiInstance->deleteCommunityProviderById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling CommunityProvidersApi->deleteCommunityProviderById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **if_match** | **string**| The ETag header value used to prevent the DELETE from removing a resource modified by another consumer. | [optional] |

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletesCommunityProviders()`

```php
deletesCommunityProviders($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiCommunityProviderDelete[]
```

Retrieves deleted resources based on change version.

This operation is used to retrieve identifying information about resources that have been deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\CommunityProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 56; // int | Indicates how many items should be skipped before returning results.
$limit = 25; // int | Indicates the maximum number of items that should be returned in the results.
$min_change_version = 56; // int | Used in synchronization to set sequence minimum ChangeVersion
$max_change_version = 56; // int | Used in synchronization to set sequence maximum ChangeVersion
$total_count = false; // bool | Indicates if the total number of items available should be returned in the 'Total-Count' header of the response.  If set to false, 'Total-Count' header will not be provided. Must be false when using cursor paging (with pageToken).
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->deletesCommunityProviders($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunityProvidersApi->deletesCommunityProviders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **int**| Indicates how many items should be skipped before returning results. | [optional] |
| **limit** | **int**| Indicates the maximum number of items that should be returned in the results. | [optional] [default to 25] |
| **min_change_version** | **int**| Used in synchronization to set sequence minimum ChangeVersion | [optional] |
| **max_change_version** | **int**| Used in synchronization to set sequence maximum ChangeVersion | [optional] |
| **total_count** | **bool**| Indicates if the total number of items available should be returned in the &#39;Total-Count&#39; header of the response.  If set to false, &#39;Total-Count&#39; header will not be provided. Must be false when using cursor paging (with pageToken). | [optional] [default to false] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\TrackedChangesEdFiCommunityProviderDelete[]**](../Model/TrackedChangesEdFiCommunityProviderDelete.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCommunityProviders()`

```php
getCommunityProviders($offset, $limit, $page_token, $page_size, $min_change_version, $max_change_version, $total_count, $community_provider_id, $community_organization_id, $provider_category_descriptor, $provider_profitability_descriptor, $provider_status_descriptor, $license_exempt_indicator, $school_indicator, $operational_status_descriptor, $id, $name_of_institution, $short_name_of_institution, $web_site, $use_snapshot, $education_organization_identification_system_descriptor, $identification_code): \Resources\Model\EdFiCommunityProvider[]
```

Retrieves specific resources using the resource's property values (using the \"Get\" pattern).

This GET operation provides access to resources using the \"Get\" search pattern.  The values of any properties of the resource that are specified will be used to return all matching results (if it exists).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\CommunityProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 56; // int | Indicates how many items should be skipped before returning results.
$limit = 25; // int | Indicates the maximum number of items that should be returned in the results.
$page_token = 'page_token_example'; // string | The token of the page to retrieve, obtained either from the \"Next-Page-Token\" header of the previous request, or from the \"partitions\" endpoint for the resource. Cannot be used with limit/offset paging.
$page_size = 25; // int | The maximum number of items to retrieve in the page. For use with pageToken (cursor paging) only.
$min_change_version = 56; // int | Used in synchronization to set sequence minimum ChangeVersion
$max_change_version = 56; // int | Used in synchronization to set sequence maximum ChangeVersion
$total_count = false; // bool | Indicates if the total number of items available should be returned in the 'Total-Count' header of the response.  If set to false, 'Total-Count' header will not be provided. Must be false when using cursor paging (with pageToken).
$community_provider_id = 56; // int | The identifier assigned to a community provider. It must be distinct from any other identifier assigned to educational organizations, such as a LocalEducationAgencyId, to prevent duplication.
$community_organization_id = 56; // int | The identifier assigned to a community organization. It must be distinct from any other identifier assigned to educational organizations, such as a LocalEducationAgencyId, to prevent duplication.
$provider_category_descriptor = 'provider_category_descriptor_example'; // string | Indicates the category of the provider.
$provider_profitability_descriptor = 'provider_profitability_descriptor_example'; // string | Indicates the profitability status of the provider.
$provider_status_descriptor = 'provider_status_descriptor_example'; // string | Indicates the status of the provider.
$license_exempt_indicator = True; // bool | An indication of whether the provider is exempt from having a license.
$school_indicator = True; // bool | An indication of whether the community provider is a school.
$operational_status_descriptor = 'operational_status_descriptor_example'; // string | The current operational status of the education organization (e.g., active, inactive).
$id = 'id_example'; // string | 
$name_of_institution = 'name_of_institution_example'; // string | The full, legally accepted name of the institution.
$short_name_of_institution = 'short_name_of_institution_example'; // string | A short name for the institution.
$web_site = 'web_site_example'; // string | The public web site address (URL) for the education organization.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.
$education_organization_identification_system_descriptor = 'education_organization_identification_system_descriptor_example'; // string | The school system, state, or agency assigning the identification code.
$identification_code = 'identification_code_example'; // string | A unique number or alphanumeric code that is assigned to an education organization by a school, school system, state, or other agency or entity.

try {
    $result = $apiInstance->getCommunityProviders($offset, $limit, $page_token, $page_size, $min_change_version, $max_change_version, $total_count, $community_provider_id, $community_organization_id, $provider_category_descriptor, $provider_profitability_descriptor, $provider_status_descriptor, $license_exempt_indicator, $school_indicator, $operational_status_descriptor, $id, $name_of_institution, $short_name_of_institution, $web_site, $use_snapshot, $education_organization_identification_system_descriptor, $identification_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunityProvidersApi->getCommunityProviders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **int**| Indicates how many items should be skipped before returning results. | [optional] |
| **limit** | **int**| Indicates the maximum number of items that should be returned in the results. | [optional] [default to 25] |
| **page_token** | **string**| The token of the page to retrieve, obtained either from the \&quot;Next-Page-Token\&quot; header of the previous request, or from the \&quot;partitions\&quot; endpoint for the resource. Cannot be used with limit/offset paging. | [optional] |
| **page_size** | **int**| The maximum number of items to retrieve in the page. For use with pageToken (cursor paging) only. | [optional] [default to 25] |
| **min_change_version** | **int**| Used in synchronization to set sequence minimum ChangeVersion | [optional] |
| **max_change_version** | **int**| Used in synchronization to set sequence maximum ChangeVersion | [optional] |
| **total_count** | **bool**| Indicates if the total number of items available should be returned in the &#39;Total-Count&#39; header of the response.  If set to false, &#39;Total-Count&#39; header will not be provided. Must be false when using cursor paging (with pageToken). | [optional] [default to false] |
| **community_provider_id** | **int**| The identifier assigned to a community provider. It must be distinct from any other identifier assigned to educational organizations, such as a LocalEducationAgencyId, to prevent duplication. | [optional] |
| **community_organization_id** | **int**| The identifier assigned to a community organization. It must be distinct from any other identifier assigned to educational organizations, such as a LocalEducationAgencyId, to prevent duplication. | [optional] |
| **provider_category_descriptor** | **string**| Indicates the category of the provider. | [optional] |
| **provider_profitability_descriptor** | **string**| Indicates the profitability status of the provider. | [optional] |
| **provider_status_descriptor** | **string**| Indicates the status of the provider. | [optional] |
| **license_exempt_indicator** | **bool**| An indication of whether the provider is exempt from having a license. | [optional] |
| **school_indicator** | **bool**| An indication of whether the community provider is a school. | [optional] |
| **operational_status_descriptor** | **string**| The current operational status of the education organization (e.g., active, inactive). | [optional] |
| **id** | **string**|  | [optional] |
| **name_of_institution** | **string**| The full, legally accepted name of the institution. | [optional] |
| **short_name_of_institution** | **string**| A short name for the institution. | [optional] |
| **web_site** | **string**| The public web site address (URL) for the education organization. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |
| **education_organization_identification_system_descriptor** | **string**| The school system, state, or agency assigning the identification code. | [optional] |
| **identification_code** | **string**| A unique number or alphanumeric code that is assigned to an education organization by a school, school system, state, or other agency or entity. | [optional] |

### Return type

[**\Resources\Model\EdFiCommunityProvider[]**](../Model/EdFiCommunityProvider.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCommunityProvidersById()`

```php
getCommunityProvidersById($id, $if_none_match, $use_snapshot): \Resources\Model\EdFiCommunityProvider
```

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\CommunityProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_none_match = 'if_none_match_example'; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getCommunityProvidersById($id, $if_none_match, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunityProvidersApi->getCommunityProvidersById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiCommunityProvider**](../Model/EdFiCommunityProvider.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCommunityProvidersPartitions()`

```php
getCommunityProvidersPartitions($number, $min_change_version, $max_change_version, $community_provider_id, $community_organization_id, $provider_category_descriptor, $provider_profitability_descriptor, $provider_status_descriptor, $license_exempt_indicator, $school_indicator, $operational_status_descriptor, $id, $name_of_institution, $short_name_of_institution, $web_site, $use_snapshot, $education_organization_identification_system_descriptor, $identification_code): \Resources\Model\GetAcademicWeeksPartitions200Response
```

Retrieves a set of page tokens to be used for efficient client-side parallel processing.

Computes an evenly distributed set of partitions over the accessible data and returns a set of page tokens, each representing the first page of one of the partitions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\CommunityProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$number = 56; // int | The number of evenly distributed partitions to provide for client-side parallel processing. If unspecified, a reasonable set of partitions will be determined based on the total number of accessible items.
$min_change_version = 56; // int | Used in synchronization to set sequence minimum ChangeVersion
$max_change_version = 56; // int | Used in synchronization to set sequence maximum ChangeVersion
$community_provider_id = 56; // int | The identifier assigned to a community provider. It must be distinct from any other identifier assigned to educational organizations, such as a LocalEducationAgencyId, to prevent duplication.
$community_organization_id = 56; // int | The identifier assigned to a community organization. It must be distinct from any other identifier assigned to educational organizations, such as a LocalEducationAgencyId, to prevent duplication.
$provider_category_descriptor = 'provider_category_descriptor_example'; // string | Indicates the category of the provider.
$provider_profitability_descriptor = 'provider_profitability_descriptor_example'; // string | Indicates the profitability status of the provider.
$provider_status_descriptor = 'provider_status_descriptor_example'; // string | Indicates the status of the provider.
$license_exempt_indicator = True; // bool | An indication of whether the provider is exempt from having a license.
$school_indicator = True; // bool | An indication of whether the community provider is a school.
$operational_status_descriptor = 'operational_status_descriptor_example'; // string | The current operational status of the education organization (e.g., active, inactive).
$id = 'id_example'; // string | 
$name_of_institution = 'name_of_institution_example'; // string | The full, legally accepted name of the institution.
$short_name_of_institution = 'short_name_of_institution_example'; // string | A short name for the institution.
$web_site = 'web_site_example'; // string | The public web site address (URL) for the education organization.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.
$education_organization_identification_system_descriptor = 'education_organization_identification_system_descriptor_example'; // string | The school system, state, or agency assigning the identification code.
$identification_code = 'identification_code_example'; // string | A unique number or alphanumeric code that is assigned to an education organization by a school, school system, state, or other agency or entity.

try {
    $result = $apiInstance->getCommunityProvidersPartitions($number, $min_change_version, $max_change_version, $community_provider_id, $community_organization_id, $provider_category_descriptor, $provider_profitability_descriptor, $provider_status_descriptor, $license_exempt_indicator, $school_indicator, $operational_status_descriptor, $id, $name_of_institution, $short_name_of_institution, $web_site, $use_snapshot, $education_organization_identification_system_descriptor, $identification_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunityProvidersApi->getCommunityProvidersPartitions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **number** | **int**| The number of evenly distributed partitions to provide for client-side parallel processing. If unspecified, a reasonable set of partitions will be determined based on the total number of accessible items. | [optional] |
| **min_change_version** | **int**| Used in synchronization to set sequence minimum ChangeVersion | [optional] |
| **max_change_version** | **int**| Used in synchronization to set sequence maximum ChangeVersion | [optional] |
| **community_provider_id** | **int**| The identifier assigned to a community provider. It must be distinct from any other identifier assigned to educational organizations, such as a LocalEducationAgencyId, to prevent duplication. | [optional] |
| **community_organization_id** | **int**| The identifier assigned to a community organization. It must be distinct from any other identifier assigned to educational organizations, such as a LocalEducationAgencyId, to prevent duplication. | [optional] |
| **provider_category_descriptor** | **string**| Indicates the category of the provider. | [optional] |
| **provider_profitability_descriptor** | **string**| Indicates the profitability status of the provider. | [optional] |
| **provider_status_descriptor** | **string**| Indicates the status of the provider. | [optional] |
| **license_exempt_indicator** | **bool**| An indication of whether the provider is exempt from having a license. | [optional] |
| **school_indicator** | **bool**| An indication of whether the community provider is a school. | [optional] |
| **operational_status_descriptor** | **string**| The current operational status of the education organization (e.g., active, inactive). | [optional] |
| **id** | **string**|  | [optional] |
| **name_of_institution** | **string**| The full, legally accepted name of the institution. | [optional] |
| **short_name_of_institution** | **string**| A short name for the institution. | [optional] |
| **web_site** | **string**| The public web site address (URL) for the education organization. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |
| **education_organization_identification_system_descriptor** | **string**| The school system, state, or agency assigning the identification code. | [optional] |
| **identification_code** | **string**| A unique number or alphanumeric code that is assigned to an education organization by a school, school system, state, or other agency or entity. | [optional] |

### Return type

[**\Resources\Model\GetAcademicWeeksPartitions200Response**](../Model/GetAcademicWeeksPartitions200Response.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `keyChangesCommunityProviders()`

```php
keyChangesCommunityProviders($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiCommunityProviderKeyChange[]
```

Retrieves resources key changes based on change version.

This operation is used to retrieve identifying information about resources whose key values have been changed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\CommunityProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 56; // int | Indicates how many items should be skipped before returning results.
$limit = 25; // int | Indicates the maximum number of items that should be returned in the results.
$min_change_version = 56; // int | Used in synchronization to set sequence minimum ChangeVersion
$max_change_version = 56; // int | Used in synchronization to set sequence maximum ChangeVersion
$total_count = false; // bool | Indicates if the total number of items available should be returned in the 'Total-Count' header of the response.  If set to false, 'Total-Count' header will not be provided. Must be false when using cursor paging (with pageToken).
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->keyChangesCommunityProviders($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunityProvidersApi->keyChangesCommunityProviders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **int**| Indicates how many items should be skipped before returning results. | [optional] |
| **limit** | **int**| Indicates the maximum number of items that should be returned in the results. | [optional] [default to 25] |
| **min_change_version** | **int**| Used in synchronization to set sequence minimum ChangeVersion | [optional] |
| **max_change_version** | **int**| Used in synchronization to set sequence maximum ChangeVersion | [optional] |
| **total_count** | **bool**| Indicates if the total number of items available should be returned in the &#39;Total-Count&#39; header of the response.  If set to false, &#39;Total-Count&#39; header will not be provided. Must be false when using cursor paging (with pageToken). | [optional] [default to false] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\TrackedChangesEdFiCommunityProviderKeyChange[]**](../Model/TrackedChangesEdFiCommunityProviderKeyChange.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCommunityProvider()`

```php
postCommunityProvider($ed_fi_community_provider)
```

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update). Clients should NOT include the resource \"id\" in the JSON body because it will result in an error. The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately. It is recommended to use POST for both create and update except while updating natural key of a resource in which case PUT operation must be used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\CommunityProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ed_fi_community_provider = new \Resources\Model\EdFiCommunityProvider(); // \Resources\Model\EdFiCommunityProvider | The JSON representation of the \"communityProvider\" resource to be created or updated.

try {
    $apiInstance->postCommunityProvider($ed_fi_community_provider);
} catch (Exception $e) {
    echo 'Exception when calling CommunityProvidersApi->postCommunityProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ed_fi_community_provider** | [**\Resources\Model\EdFiCommunityProvider**](../Model/EdFiCommunityProvider.md)| The JSON representation of the \&quot;communityProvider\&quot; resource to be created or updated. | |

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putCommunityProvider()`

```php
putCommunityProvider($id, $ed_fi_community_provider, $if_match)
```

Updates a resource based on the resource identifier.

The PUT operation is used to update a resource by identifier. If the resource identifier (\"id\") is provided in the JSON body, it will be ignored. Additionally, this API resource is not configured for cascading natural key updates. Natural key values for this resource cannot be changed using PUT operation, so the recommendation is to use POST as that supports upsert behavior.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\CommunityProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$ed_fi_community_provider = new \Resources\Model\EdFiCommunityProvider(); // \Resources\Model\EdFiCommunityProvider | The JSON representation of the \"communityProvider\" resource to be created or updated.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try {
    $apiInstance->putCommunityProvider($id, $ed_fi_community_provider, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling CommunityProvidersApi->putCommunityProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **ed_fi_community_provider** | [**\Resources\Model\EdFiCommunityProvider**](../Model/EdFiCommunityProvider.md)| The JSON representation of the \&quot;communityProvider\&quot; resource to be created or updated. | |
| **if_match** | **string**| The ETag header value used to prevent the PUT from updating a resource modified by another consumer. | [optional] |

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
