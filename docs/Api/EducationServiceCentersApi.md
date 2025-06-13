# Resources\EducationServiceCentersApi

All URIs are relative to https://api.ed-fi.org:443/v7.3/api/data/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteEducationServiceCenterById()**](EducationServiceCentersApi.md#deleteEducationServiceCenterById) | **DELETE** /ed-fi/educationServiceCenters/{id} | Deletes an existing resource using the resource identifier. |
| [**deletesEducationServiceCenters()**](EducationServiceCentersApi.md#deletesEducationServiceCenters) | **GET** /ed-fi/educationServiceCenters/deletes | Retrieves deleted resources based on change version. |
| [**getEducationServiceCenters()**](EducationServiceCentersApi.md#getEducationServiceCenters) | **GET** /ed-fi/educationServiceCenters | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern). |
| [**getEducationServiceCentersById()**](EducationServiceCentersApi.md#getEducationServiceCentersById) | **GET** /ed-fi/educationServiceCenters/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern). |
| [**getEducationServiceCentersPartitions()**](EducationServiceCentersApi.md#getEducationServiceCentersPartitions) | **GET** /ed-fi/educationServiceCenters/partitions | Retrieves a set of page tokens to be used for efficient client-side parallel processing. |
| [**keyChangesEducationServiceCenters()**](EducationServiceCentersApi.md#keyChangesEducationServiceCenters) | **GET** /ed-fi/educationServiceCenters/keyChanges | Retrieves resources key changes based on change version. |
| [**postEducationServiceCenter()**](EducationServiceCentersApi.md#postEducationServiceCenter) | **POST** /ed-fi/educationServiceCenters | Creates or updates resources based on the natural key values of the supplied resource. |
| [**putEducationServiceCenter()**](EducationServiceCentersApi.md#putEducationServiceCenter) | **PUT** /ed-fi/educationServiceCenters/{id} | Updates a resource based on the resource identifier. |


## `deleteEducationServiceCenterById()`

```php
deleteEducationServiceCenterById($id, $if_match)
```

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier. If the resource doesn't exist, an error will result (the resource will not be found).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\EducationServiceCentersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try {
    $apiInstance->deleteEducationServiceCenterById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling EducationServiceCentersApi->deleteEducationServiceCenterById: ', $e->getMessage(), PHP_EOL;
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

## `deletesEducationServiceCenters()`

```php
deletesEducationServiceCenters($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiEducationServiceCenterDelete[]
```

Retrieves deleted resources based on change version.

This operation is used to retrieve identifying information about resources that have been deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\EducationServiceCentersApi(
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
    $result = $apiInstance->deletesEducationServiceCenters($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EducationServiceCentersApi->deletesEducationServiceCenters: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiEducationServiceCenterDelete[]**](../Model/TrackedChangesEdFiEducationServiceCenterDelete.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEducationServiceCenters()`

```php
getEducationServiceCenters($offset, $limit, $page_token, $page_size, $min_change_version, $max_change_version, $total_count, $education_service_center_id, $state_education_agency_id, $operational_status_descriptor, $id, $name_of_institution, $short_name_of_institution, $web_site, $use_snapshot, $education_organization_identification_system_descriptor, $identification_code): \Resources\Model\EdFiEducationServiceCenter[]
```

Retrieves specific resources using the resource's property values (using the \"Get\" pattern).

This GET operation provides access to resources using the \"Get\" search pattern.  The values of any properties of the resource that are specified will be used to return all matching results (if it exists).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\EducationServiceCentersApi(
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
$education_service_center_id = 56; // int | The identifier assigned to an education service center. It must be distinct from any other identifier assigned to educational organizations, such as a LocalEducationAgencyId, to prevent duplication.
$state_education_agency_id = 56; // int | The identifier assigned to a state education agency. It must be distinct from any other identifier assigned to educational organizations, such as a LocalEducationAgencyId, to prevent duplication.
$operational_status_descriptor = 'operational_status_descriptor_example'; // string | The current operational status of the education organization (e.g., active, inactive).
$id = 'id_example'; // string | 
$name_of_institution = 'name_of_institution_example'; // string | The full, legally accepted name of the institution.
$short_name_of_institution = 'short_name_of_institution_example'; // string | A short name for the institution.
$web_site = 'web_site_example'; // string | The public web site address (URL) for the education organization.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.
$education_organization_identification_system_descriptor = 'education_organization_identification_system_descriptor_example'; // string | The school system, state, or agency assigning the identification code.
$identification_code = 'identification_code_example'; // string | A unique number or alphanumeric code that is assigned to an education organization by a school, school system, state, or other agency or entity.

try {
    $result = $apiInstance->getEducationServiceCenters($offset, $limit, $page_token, $page_size, $min_change_version, $max_change_version, $total_count, $education_service_center_id, $state_education_agency_id, $operational_status_descriptor, $id, $name_of_institution, $short_name_of_institution, $web_site, $use_snapshot, $education_organization_identification_system_descriptor, $identification_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EducationServiceCentersApi->getEducationServiceCenters: ', $e->getMessage(), PHP_EOL;
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
| **education_service_center_id** | **int**| The identifier assigned to an education service center. It must be distinct from any other identifier assigned to educational organizations, such as a LocalEducationAgencyId, to prevent duplication. | [optional] |
| **state_education_agency_id** | **int**| The identifier assigned to a state education agency. It must be distinct from any other identifier assigned to educational organizations, such as a LocalEducationAgencyId, to prevent duplication. | [optional] |
| **operational_status_descriptor** | **string**| The current operational status of the education organization (e.g., active, inactive). | [optional] |
| **id** | **string**|  | [optional] |
| **name_of_institution** | **string**| The full, legally accepted name of the institution. | [optional] |
| **short_name_of_institution** | **string**| A short name for the institution. | [optional] |
| **web_site** | **string**| The public web site address (URL) for the education organization. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |
| **education_organization_identification_system_descriptor** | **string**| The school system, state, or agency assigning the identification code. | [optional] |
| **identification_code** | **string**| A unique number or alphanumeric code that is assigned to an education organization by a school, school system, state, or other agency or entity. | [optional] |

### Return type

[**\Resources\Model\EdFiEducationServiceCenter[]**](../Model/EdFiEducationServiceCenter.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEducationServiceCentersById()`

```php
getEducationServiceCentersById($id, $if_none_match, $use_snapshot): \Resources\Model\EdFiEducationServiceCenter
```

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\EducationServiceCentersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_none_match = 'if_none_match_example'; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getEducationServiceCentersById($id, $if_none_match, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EducationServiceCentersApi->getEducationServiceCentersById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiEducationServiceCenter**](../Model/EdFiEducationServiceCenter.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEducationServiceCentersPartitions()`

```php
getEducationServiceCentersPartitions($number, $min_change_version, $max_change_version, $education_service_center_id, $state_education_agency_id, $operational_status_descriptor, $id, $name_of_institution, $short_name_of_institution, $web_site, $use_snapshot, $education_organization_identification_system_descriptor, $identification_code): \Resources\Model\GetAcademicWeeksPartitions200Response
```

Retrieves a set of page tokens to be used for efficient client-side parallel processing.

Computes an evenly distributed set of partitions over the accessible data and returns a set of page tokens, each representing the first page of one of the partitions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\EducationServiceCentersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$number = 56; // int | The number of evenly distributed partitions to provide for client-side parallel processing. If unspecified, a reasonable set of partitions will be determined based on the total number of accessible items.
$min_change_version = 56; // int | Used in synchronization to set sequence minimum ChangeVersion
$max_change_version = 56; // int | Used in synchronization to set sequence maximum ChangeVersion
$education_service_center_id = 56; // int | The identifier assigned to an education service center. It must be distinct from any other identifier assigned to educational organizations, such as a LocalEducationAgencyId, to prevent duplication.
$state_education_agency_id = 56; // int | The identifier assigned to a state education agency. It must be distinct from any other identifier assigned to educational organizations, such as a LocalEducationAgencyId, to prevent duplication.
$operational_status_descriptor = 'operational_status_descriptor_example'; // string | The current operational status of the education organization (e.g., active, inactive).
$id = 'id_example'; // string | 
$name_of_institution = 'name_of_institution_example'; // string | The full, legally accepted name of the institution.
$short_name_of_institution = 'short_name_of_institution_example'; // string | A short name for the institution.
$web_site = 'web_site_example'; // string | The public web site address (URL) for the education organization.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.
$education_organization_identification_system_descriptor = 'education_organization_identification_system_descriptor_example'; // string | The school system, state, or agency assigning the identification code.
$identification_code = 'identification_code_example'; // string | A unique number or alphanumeric code that is assigned to an education organization by a school, school system, state, or other agency or entity.

try {
    $result = $apiInstance->getEducationServiceCentersPartitions($number, $min_change_version, $max_change_version, $education_service_center_id, $state_education_agency_id, $operational_status_descriptor, $id, $name_of_institution, $short_name_of_institution, $web_site, $use_snapshot, $education_organization_identification_system_descriptor, $identification_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EducationServiceCentersApi->getEducationServiceCentersPartitions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **number** | **int**| The number of evenly distributed partitions to provide for client-side parallel processing. If unspecified, a reasonable set of partitions will be determined based on the total number of accessible items. | [optional] |
| **min_change_version** | **int**| Used in synchronization to set sequence minimum ChangeVersion | [optional] |
| **max_change_version** | **int**| Used in synchronization to set sequence maximum ChangeVersion | [optional] |
| **education_service_center_id** | **int**| The identifier assigned to an education service center. It must be distinct from any other identifier assigned to educational organizations, such as a LocalEducationAgencyId, to prevent duplication. | [optional] |
| **state_education_agency_id** | **int**| The identifier assigned to a state education agency. It must be distinct from any other identifier assigned to educational organizations, such as a LocalEducationAgencyId, to prevent duplication. | [optional] |
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

## `keyChangesEducationServiceCenters()`

```php
keyChangesEducationServiceCenters($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiEducationServiceCenterKeyChange[]
```

Retrieves resources key changes based on change version.

This operation is used to retrieve identifying information about resources whose key values have been changed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\EducationServiceCentersApi(
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
    $result = $apiInstance->keyChangesEducationServiceCenters($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EducationServiceCentersApi->keyChangesEducationServiceCenters: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiEducationServiceCenterKeyChange[]**](../Model/TrackedChangesEdFiEducationServiceCenterKeyChange.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEducationServiceCenter()`

```php
postEducationServiceCenter($ed_fi_education_service_center)
```

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update). Clients should NOT include the resource \"id\" in the JSON body because it will result in an error. The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately. It is recommended to use POST for both create and update except while updating natural key of a resource in which case PUT operation must be used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\EducationServiceCentersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ed_fi_education_service_center = new \Resources\Model\EdFiEducationServiceCenter(); // \Resources\Model\EdFiEducationServiceCenter | The JSON representation of the \"educationServiceCenter\" resource to be created or updated.

try {
    $apiInstance->postEducationServiceCenter($ed_fi_education_service_center);
} catch (Exception $e) {
    echo 'Exception when calling EducationServiceCentersApi->postEducationServiceCenter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ed_fi_education_service_center** | [**\Resources\Model\EdFiEducationServiceCenter**](../Model/EdFiEducationServiceCenter.md)| The JSON representation of the \&quot;educationServiceCenter\&quot; resource to be created or updated. | |

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

## `putEducationServiceCenter()`

```php
putEducationServiceCenter($id, $ed_fi_education_service_center, $if_match)
```

Updates a resource based on the resource identifier.

The PUT operation is used to update a resource by identifier. If the resource identifier (\"id\") is provided in the JSON body, it will be ignored. Additionally, this API resource is not configured for cascading natural key updates. Natural key values for this resource cannot be changed using PUT operation, so the recommendation is to use POST as that supports upsert behavior.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\EducationServiceCentersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$ed_fi_education_service_center = new \Resources\Model\EdFiEducationServiceCenter(); // \Resources\Model\EdFiEducationServiceCenter | The JSON representation of the \"educationServiceCenter\" resource to be created or updated.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try {
    $apiInstance->putEducationServiceCenter($id, $ed_fi_education_service_center, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling EducationServiceCentersApi->putEducationServiceCenter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **ed_fi_education_service_center** | [**\Resources\Model\EdFiEducationServiceCenter**](../Model/EdFiEducationServiceCenter.md)| The JSON representation of the \&quot;educationServiceCenter\&quot; resource to be created or updated. | |
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
