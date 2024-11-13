# Resources\CommunityProviderLicensesApi

All URIs are relative to https://api.ed-fi.org:443/v7.1/api/data/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteCommunityProviderLicenseById()**](CommunityProviderLicensesApi.md#deleteCommunityProviderLicenseById) | **DELETE** /ed-fi/communityProviderLicenses/{id} | Deletes an existing resource using the resource identifier. |
| [**deletesCommunityProviderLicenses()**](CommunityProviderLicensesApi.md#deletesCommunityProviderLicenses) | **GET** /ed-fi/communityProviderLicenses/deletes | Retrieves deleted resources based on change version. |
| [**getCommunityProviderLicenses()**](CommunityProviderLicensesApi.md#getCommunityProviderLicenses) | **GET** /ed-fi/communityProviderLicenses | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern). |
| [**getCommunityProviderLicensesById()**](CommunityProviderLicensesApi.md#getCommunityProviderLicensesById) | **GET** /ed-fi/communityProviderLicenses/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern). |
| [**keyChangesCommunityProviderLicenses()**](CommunityProviderLicensesApi.md#keyChangesCommunityProviderLicenses) | **GET** /ed-fi/communityProviderLicenses/keyChanges | Retrieves resources key changes based on change version. |
| [**postCommunityProviderLicense()**](CommunityProviderLicensesApi.md#postCommunityProviderLicense) | **POST** /ed-fi/communityProviderLicenses | Creates or updates resources based on the natural key values of the supplied resource. |
| [**putCommunityProviderLicense()**](CommunityProviderLicensesApi.md#putCommunityProviderLicense) | **PUT** /ed-fi/communityProviderLicenses/{id} | Updates a resource based on the resource identifier. |


## `deleteCommunityProviderLicenseById()`

```php
deleteCommunityProviderLicenseById($id, $if_match)
```

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier. If the resource doesn't exist, an error will result (the resource will not be found).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\CommunityProviderLicensesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try {
    $apiInstance->deleteCommunityProviderLicenseById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling CommunityProviderLicensesApi->deleteCommunityProviderLicenseById: ', $e->getMessage(), PHP_EOL;
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

## `deletesCommunityProviderLicenses()`

```php
deletesCommunityProviderLicenses($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiCommunityProviderLicenseDelete[]
```

Retrieves deleted resources based on change version.

This operation is used to retrieve identifying information about resources that have been deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\CommunityProviderLicensesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 0; // int | Indicates how many items should be skipped before returning results.
$limit = 25; // int | Indicates the maximum number of items that should be returned in the results.
$min_change_version = 56; // int | Used in synchronization to set sequence minimum ChangeVersion
$max_change_version = 56; // int | Used in synchronization to set sequence maximum ChangeVersion
$total_count = false; // bool | Indicates if the total number of items available should be returned in the 'Total-Count' header of the response.  If set to false, 'Total-Count' header will not be provided.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->deletesCommunityProviderLicenses($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunityProviderLicensesApi->deletesCommunityProviderLicenses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **int**| Indicates how many items should be skipped before returning results. | [optional] [default to 0] |
| **limit** | **int**| Indicates the maximum number of items that should be returned in the results. | [optional] [default to 25] |
| **min_change_version** | **int**| Used in synchronization to set sequence minimum ChangeVersion | [optional] |
| **max_change_version** | **int**| Used in synchronization to set sequence maximum ChangeVersion | [optional] |
| **total_count** | **bool**| Indicates if the total number of items available should be returned in the &#39;Total-Count&#39; header of the response.  If set to false, &#39;Total-Count&#39; header will not be provided. | [optional] [default to false] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\TrackedChangesEdFiCommunityProviderLicenseDelete[]**](../Model/TrackedChangesEdFiCommunityProviderLicenseDelete.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCommunityProviderLicenses()`

```php
getCommunityProviderLicenses($offset, $limit, $min_change_version, $max_change_version, $total_count, $license_identifier, $licensing_organization, $community_provider_id, $license_status_descriptor, $license_type_descriptor, $authorized_facility_capacity, $id, $license_effective_date, $license_expiration_date, $license_issue_date, $oldest_age_authorized_to_serve, $youngest_age_authorized_to_serve, $use_snapshot): \Resources\Model\EdFiCommunityProviderLicense[]
```

Retrieves specific resources using the resource's property values (using the \"Get\" pattern).

This GET operation provides access to resources using the \"Get\" search pattern.  The values of any properties of the resource that are specified will be used to return all matching results (if it exists).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\CommunityProviderLicensesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 0; // int | Indicates how many items should be skipped before returning results.
$limit = 25; // int | Indicates the maximum number of items that should be returned in the results.
$min_change_version = 56; // int | Used in synchronization to set sequence minimum ChangeVersion
$max_change_version = 56; // int | Used in synchronization to set sequence maximum ChangeVersion
$total_count = false; // bool | Indicates if the total number of items available should be returned in the 'Total-Count' header of the response.  If set to false, 'Total-Count' header will not be provided.
$license_identifier = 'license_identifier_example'; // string | The unique identifier issued by the licensing organization.
$licensing_organization = 'licensing_organization_example'; // string | The organization issuing the license.
$community_provider_id = 56; // int | The identifier assigned to a community provider.
$license_status_descriptor = 'license_status_descriptor_example'; // string | An indication of the status of the license.
$license_type_descriptor = 'license_type_descriptor_example'; // string | An indication of the category of the license.
$authorized_facility_capacity = 56; // int | The maximum number that can be contained or accommodated which a provider is authorized or licensed to serve.
$id = 'id_example'; // string | 
$license_effective_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The month, day, and year on which a license is active or becomes effective.
$license_expiration_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The month, day, and year on which a license will expire.
$license_issue_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The month, day, and year on which an active license was issued.
$oldest_age_authorized_to_serve = 56; // int | The oldest age of children a provider is authorized or licensed to serve.
$youngest_age_authorized_to_serve = 56; // int | The youngest age of children a provider is authorized or licensed to serve.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getCommunityProviderLicenses($offset, $limit, $min_change_version, $max_change_version, $total_count, $license_identifier, $licensing_organization, $community_provider_id, $license_status_descriptor, $license_type_descriptor, $authorized_facility_capacity, $id, $license_effective_date, $license_expiration_date, $license_issue_date, $oldest_age_authorized_to_serve, $youngest_age_authorized_to_serve, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunityProviderLicensesApi->getCommunityProviderLicenses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **int**| Indicates how many items should be skipped before returning results. | [optional] [default to 0] |
| **limit** | **int**| Indicates the maximum number of items that should be returned in the results. | [optional] [default to 25] |
| **min_change_version** | **int**| Used in synchronization to set sequence minimum ChangeVersion | [optional] |
| **max_change_version** | **int**| Used in synchronization to set sequence maximum ChangeVersion | [optional] |
| **total_count** | **bool**| Indicates if the total number of items available should be returned in the &#39;Total-Count&#39; header of the response.  If set to false, &#39;Total-Count&#39; header will not be provided. | [optional] [default to false] |
| **license_identifier** | **string**| The unique identifier issued by the licensing organization. | [optional] |
| **licensing_organization** | **string**| The organization issuing the license. | [optional] |
| **community_provider_id** | **int**| The identifier assigned to a community provider. | [optional] |
| **license_status_descriptor** | **string**| An indication of the status of the license. | [optional] |
| **license_type_descriptor** | **string**| An indication of the category of the license. | [optional] |
| **authorized_facility_capacity** | **int**| The maximum number that can be contained or accommodated which a provider is authorized or licensed to serve. | [optional] |
| **id** | **string**|  | [optional] |
| **license_effective_date** | **\DateTime**| The month, day, and year on which a license is active or becomes effective. | [optional] |
| **license_expiration_date** | **\DateTime**| The month, day, and year on which a license will expire. | [optional] |
| **license_issue_date** | **\DateTime**| The month, day, and year on which an active license was issued. | [optional] |
| **oldest_age_authorized_to_serve** | **int**| The oldest age of children a provider is authorized or licensed to serve. | [optional] |
| **youngest_age_authorized_to_serve** | **int**| The youngest age of children a provider is authorized or licensed to serve. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiCommunityProviderLicense[]**](../Model/EdFiCommunityProviderLicense.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCommunityProviderLicensesById()`

```php
getCommunityProviderLicensesById($id, $if_none_match, $use_snapshot): \Resources\Model\EdFiCommunityProviderLicense
```

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\CommunityProviderLicensesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_none_match = 'if_none_match_example'; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getCommunityProviderLicensesById($id, $if_none_match, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunityProviderLicensesApi->getCommunityProviderLicensesById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiCommunityProviderLicense**](../Model/EdFiCommunityProviderLicense.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `keyChangesCommunityProviderLicenses()`

```php
keyChangesCommunityProviderLicenses($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiCommunityProviderLicenseKeyChange[]
```

Retrieves resources key changes based on change version.

This operation is used to retrieve identifying information about resources whose key values have been changed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\CommunityProviderLicensesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 0; // int | Indicates how many items should be skipped before returning results.
$limit = 25; // int | Indicates the maximum number of items that should be returned in the results.
$min_change_version = 56; // int | Used in synchronization to set sequence minimum ChangeVersion
$max_change_version = 56; // int | Used in synchronization to set sequence maximum ChangeVersion
$total_count = false; // bool | Indicates if the total number of items available should be returned in the 'Total-Count' header of the response.  If set to false, 'Total-Count' header will not be provided.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->keyChangesCommunityProviderLicenses($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunityProviderLicensesApi->keyChangesCommunityProviderLicenses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **int**| Indicates how many items should be skipped before returning results. | [optional] [default to 0] |
| **limit** | **int**| Indicates the maximum number of items that should be returned in the results. | [optional] [default to 25] |
| **min_change_version** | **int**| Used in synchronization to set sequence minimum ChangeVersion | [optional] |
| **max_change_version** | **int**| Used in synchronization to set sequence maximum ChangeVersion | [optional] |
| **total_count** | **bool**| Indicates if the total number of items available should be returned in the &#39;Total-Count&#39; header of the response.  If set to false, &#39;Total-Count&#39; header will not be provided. | [optional] [default to false] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\TrackedChangesEdFiCommunityProviderLicenseKeyChange[]**](../Model/TrackedChangesEdFiCommunityProviderLicenseKeyChange.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCommunityProviderLicense()`

```php
postCommunityProviderLicense($ed_fi_community_provider_license)
```

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update). Clients should NOT include the resource \"id\" in the JSON body because it will result in an error. The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately. It is recommended to use POST for both create and update except while updating natural key of a resource in which case PUT operation must be used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\CommunityProviderLicensesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ed_fi_community_provider_license = new \Resources\Model\EdFiCommunityProviderLicense(); // \Resources\Model\EdFiCommunityProviderLicense | The JSON representation of the \"communityProviderLicense\" resource to be created or updated.

try {
    $apiInstance->postCommunityProviderLicense($ed_fi_community_provider_license);
} catch (Exception $e) {
    echo 'Exception when calling CommunityProviderLicensesApi->postCommunityProviderLicense: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ed_fi_community_provider_license** | [**\Resources\Model\EdFiCommunityProviderLicense**](../Model/EdFiCommunityProviderLicense.md)| The JSON representation of the \&quot;communityProviderLicense\&quot; resource to be created or updated. | |

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

## `putCommunityProviderLicense()`

```php
putCommunityProviderLicense($id, $ed_fi_community_provider_license, $if_match)
```

Updates a resource based on the resource identifier.

The PUT operation is used to update a resource by identifier. If the resource identifier (\"id\") is provided in the JSON body, it will be ignored. Additionally, this API resource is not configured for cascading natural key updates. Natural key values for this resource cannot be changed using PUT operation, so the recommendation is to use POST as that supports upsert behavior.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\CommunityProviderLicensesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$ed_fi_community_provider_license = new \Resources\Model\EdFiCommunityProviderLicense(); // \Resources\Model\EdFiCommunityProviderLicense | The JSON representation of the \"communityProviderLicense\" resource to be created or updated.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try {
    $apiInstance->putCommunityProviderLicense($id, $ed_fi_community_provider_license, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling CommunityProviderLicensesApi->putCommunityProviderLicense: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **ed_fi_community_provider_license** | [**\Resources\Model\EdFiCommunityProviderLicense**](../Model/EdFiCommunityProviderLicense.md)| The JSON representation of the \&quot;communityProviderLicense\&quot; resource to be created or updated. | |
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
