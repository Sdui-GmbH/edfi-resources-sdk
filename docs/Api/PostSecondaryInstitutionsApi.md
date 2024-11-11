# Resources\PostSecondaryInstitutionsApi

All URIs are relative to https://api.ed-fi.org:443/v7.1/api/data/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deletePostSecondaryInstitutionById()**](PostSecondaryInstitutionsApi.md#deletePostSecondaryInstitutionById) | **DELETE** /ed-fi/postSecondaryInstitutions/{id} | Deletes an existing resource using the resource identifier. |
| [**deletesPostSecondaryInstitutions()**](PostSecondaryInstitutionsApi.md#deletesPostSecondaryInstitutions) | **GET** /ed-fi/postSecondaryInstitutions/deletes | Retrieves deleted resources based on change version. |
| [**getPostSecondaryInstitutions()**](PostSecondaryInstitutionsApi.md#getPostSecondaryInstitutions) | **GET** /ed-fi/postSecondaryInstitutions | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern). |
| [**getPostSecondaryInstitutionsById()**](PostSecondaryInstitutionsApi.md#getPostSecondaryInstitutionsById) | **GET** /ed-fi/postSecondaryInstitutions/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern). |
| [**keyChangesPostSecondaryInstitutions()**](PostSecondaryInstitutionsApi.md#keyChangesPostSecondaryInstitutions) | **GET** /ed-fi/postSecondaryInstitutions/keyChanges | Retrieves resources key changes based on change version. |
| [**postPostSecondaryInstitution()**](PostSecondaryInstitutionsApi.md#postPostSecondaryInstitution) | **POST** /ed-fi/postSecondaryInstitutions | Creates or updates resources based on the natural key values of the supplied resource. |
| [**putPostSecondaryInstitution()**](PostSecondaryInstitutionsApi.md#putPostSecondaryInstitution) | **PUT** /ed-fi/postSecondaryInstitutions/{id} | Updates a resource based on the resource identifier. |


## `deletePostSecondaryInstitutionById()`

```php
deletePostSecondaryInstitutionById($id, $if_match)
```

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier. If the resource doesn't exist, an error will result (the resource will not be found).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\PostSecondaryInstitutionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try {
    $apiInstance->deletePostSecondaryInstitutionById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling PostSecondaryInstitutionsApi->deletePostSecondaryInstitutionById: ', $e->getMessage(), PHP_EOL;
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

## `deletesPostSecondaryInstitutions()`

```php
deletesPostSecondaryInstitutions($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiPostSecondaryInstitutionDelete[]
```

Retrieves deleted resources based on change version.

This operation is used to retrieve identifying information about resources that have been deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\PostSecondaryInstitutionsApi(
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
    $result = $apiInstance->deletesPostSecondaryInstitutions($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostSecondaryInstitutionsApi->deletesPostSecondaryInstitutions: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiPostSecondaryInstitutionDelete[]**](../Model/TrackedChangesEdFiPostSecondaryInstitutionDelete.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPostSecondaryInstitutions()`

```php
getPostSecondaryInstitutions($offset, $limit, $min_change_version, $max_change_version, $total_count, $post_secondary_institution_id, $administrative_funding_control_descriptor, $post_secondary_institution_level_descriptor, $use_snapshot): \Resources\Model\EdFiPostSecondaryInstitution[]
```

Retrieves specific resources using the resource's property values (using the \"Get\" pattern).

This GET operation provides access to resources using the \"Get\" search pattern.  The values of any properties of the resource that are specified will be used to return all matching results (if it exists).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\PostSecondaryInstitutionsApi(
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
$post_secondary_institution_id = 56; // int | The ID of the post secondary institution.
$administrative_funding_control_descriptor = 'administrative_funding_control_descriptor_example'; // string | A classification of whether a postsecondary institution is operated by publicly elected or appointed officials (public control) or by privately elected or appointed officials and derives its major source of funds from private sources (private control).
$post_secondary_institution_level_descriptor = 'post_secondary_institution_level_descriptor_example'; // string | A classification of whether a post secondary institution's highest level of offering is a program of 4-years or higher (4 year), 2-but-less-than 4-years (2 year), or less than 2-years.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getPostSecondaryInstitutions($offset, $limit, $min_change_version, $max_change_version, $total_count, $post_secondary_institution_id, $administrative_funding_control_descriptor, $post_secondary_institution_level_descriptor, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostSecondaryInstitutionsApi->getPostSecondaryInstitutions: ', $e->getMessage(), PHP_EOL;
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
| **post_secondary_institution_id** | **int**| The ID of the post secondary institution. | [optional] |
| **administrative_funding_control_descriptor** | **string**| A classification of whether a postsecondary institution is operated by publicly elected or appointed officials (public control) or by privately elected or appointed officials and derives its major source of funds from private sources (private control). | [optional] |
| **post_secondary_institution_level_descriptor** | **string**| A classification of whether a post secondary institution&#39;s highest level of offering is a program of 4-years or higher (4 year), 2-but-less-than 4-years (2 year), or less than 2-years. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiPostSecondaryInstitution[]**](../Model/EdFiPostSecondaryInstitution.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPostSecondaryInstitutionsById()`

```php
getPostSecondaryInstitutionsById($id, $if_none_match, $use_snapshot): \Resources\Model\EdFiPostSecondaryInstitution
```

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\PostSecondaryInstitutionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_none_match = 'if_none_match_example'; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getPostSecondaryInstitutionsById($id, $if_none_match, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostSecondaryInstitutionsApi->getPostSecondaryInstitutionsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiPostSecondaryInstitution**](../Model/EdFiPostSecondaryInstitution.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `keyChangesPostSecondaryInstitutions()`

```php
keyChangesPostSecondaryInstitutions($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiPostSecondaryInstitutionKeyChange[]
```

Retrieves resources key changes based on change version.

This operation is used to retrieve identifying information about resources whose key values have been changed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\PostSecondaryInstitutionsApi(
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
    $result = $apiInstance->keyChangesPostSecondaryInstitutions($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostSecondaryInstitutionsApi->keyChangesPostSecondaryInstitutions: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiPostSecondaryInstitutionKeyChange[]**](../Model/TrackedChangesEdFiPostSecondaryInstitutionKeyChange.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPostSecondaryInstitution()`

```php
postPostSecondaryInstitution($ed_fi_post_secondary_institution)
```

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update). Clients should NOT include the resource \"id\" in the JSON body because it will result in an error. The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately. It is recommended to use POST for both create and update except while updating natural key of a resource in which case PUT operation must be used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\PostSecondaryInstitutionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ed_fi_post_secondary_institution = new \Resources\Model\EdFiPostSecondaryInstitution(); // \Resources\Model\EdFiPostSecondaryInstitution | The JSON representation of the \"postSecondaryInstitution\" resource to be created or updated.

try {
    $apiInstance->postPostSecondaryInstitution($ed_fi_post_secondary_institution);
} catch (Exception $e) {
    echo 'Exception when calling PostSecondaryInstitutionsApi->postPostSecondaryInstitution: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ed_fi_post_secondary_institution** | [**\Resources\Model\EdFiPostSecondaryInstitution**](../Model/EdFiPostSecondaryInstitution.md)| The JSON representation of the \&quot;postSecondaryInstitution\&quot; resource to be created or updated. | |

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

## `putPostSecondaryInstitution()`

```php
putPostSecondaryInstitution($id, $ed_fi_post_secondary_institution, $if_match)
```

Updates a resource based on the resource identifier.

The PUT operation is used to update a resource by identifier. If the resource identifier (\"id\") is provided in the JSON body, it will be ignored. Additionally, this API resource is not configured for cascading natural key updates. Natural key values for this resource cannot be changed using PUT operation, so the recommendation is to use POST as that supports upsert behavior.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\PostSecondaryInstitutionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$ed_fi_post_secondary_institution = new \Resources\Model\EdFiPostSecondaryInstitution(); // \Resources\Model\EdFiPostSecondaryInstitution | The JSON representation of the \"postSecondaryInstitution\" resource to be created or updated.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try {
    $apiInstance->putPostSecondaryInstitution($id, $ed_fi_post_secondary_institution, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling PostSecondaryInstitutionsApi->putPostSecondaryInstitution: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **ed_fi_post_secondary_institution** | [**\Resources\Model\EdFiPostSecondaryInstitution**](../Model/EdFiPostSecondaryInstitution.md)| The JSON representation of the \&quot;postSecondaryInstitution\&quot; resource to be created or updated. | |
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
