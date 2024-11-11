# OpenAPI\Client\AssessmentItemsApi

All URIs are relative to https://api.ed-fi.org:443/v7.1/api/data/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteAssessmentItemById()**](AssessmentItemsApi.md#deleteAssessmentItemById) | **DELETE** /ed-fi/assessmentItems/{id} | Deletes an existing resource using the resource identifier. |
| [**deletesAssessmentItems()**](AssessmentItemsApi.md#deletesAssessmentItems) | **GET** /ed-fi/assessmentItems/deletes | Retrieves deleted resources based on change version. |
| [**getAssessmentItems()**](AssessmentItemsApi.md#getAssessmentItems) | **GET** /ed-fi/assessmentItems | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern). |
| [**getAssessmentItemsById()**](AssessmentItemsApi.md#getAssessmentItemsById) | **GET** /ed-fi/assessmentItems/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern). |
| [**keyChangesAssessmentItems()**](AssessmentItemsApi.md#keyChangesAssessmentItems) | **GET** /ed-fi/assessmentItems/keyChanges | Retrieves resources key changes based on change version. |
| [**postAssessmentItem()**](AssessmentItemsApi.md#postAssessmentItem) | **POST** /ed-fi/assessmentItems | Creates or updates resources based on the natural key values of the supplied resource. |
| [**putAssessmentItem()**](AssessmentItemsApi.md#putAssessmentItem) | **PUT** /ed-fi/assessmentItems/{id} | Updates a resource based on the resource identifier. |


## `deleteAssessmentItemById()`

```php
deleteAssessmentItemById($id, $if_match)
```

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier. If the resource doesn't exist, an error will result (the resource will not be found).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AssessmentItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try {
    $apiInstance->deleteAssessmentItemById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling AssessmentItemsApi->deleteAssessmentItemById: ', $e->getMessage(), PHP_EOL;
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

## `deletesAssessmentItems()`

```php
deletesAssessmentItems($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \OpenAPI\Client\Model\TrackedChangesEdFiAssessmentItemDelete[]
```

Retrieves deleted resources based on change version.

This operation is used to retrieve identifying information about resources that have been deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AssessmentItemsApi(
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
    $result = $apiInstance->deletesAssessmentItems($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssessmentItemsApi->deletesAssessmentItems: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\TrackedChangesEdFiAssessmentItemDelete[]**](../Model/TrackedChangesEdFiAssessmentItemDelete.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAssessmentItems()`

```php
getAssessmentItems($offset, $limit, $min_change_version, $max_change_version, $total_count, $identification_code, $assessment_identifier, $namespace, $assessment_item_category_descriptor, $assessment_item_uri, $expected_time_assessed, $id, $item_text, $max_raw_score, $nomenclature, $use_snapshot): \OpenAPI\Client\Model\EdFiAssessmentItem[]
```

Retrieves specific resources using the resource's property values (using the \"Get\" pattern).

This GET operation provides access to resources using the \"Get\" search pattern.  The values of any properties of the resource that are specified will be used to return all matching results (if it exists).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AssessmentItemsApi(
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
$identification_code = 'identification_code_example'; // string | A unique number or alphanumeric code assigned to a space, room, site, building, individual, organization, program, or institution by a school, school system, state, or other agency or entity.
$assessment_identifier = 'assessment_identifier_example'; // string | A unique number or alphanumeric code assigned to an assessment.
$namespace = 'namespace_example'; // string | Namespace for the assessment.
$assessment_item_category_descriptor = 'assessment_item_category_descriptor_example'; // string | Category or type of the assessment item.
$assessment_item_uri = 'assessment_item_uri_example'; // string | The URI (typical a URL) pointing to the entry in an assessment item bank, which describes this content item.
$expected_time_assessed = 'expected_time_assessed_example'; // string | The duration of time allotted for the assessment item.
$id = 'id_example'; // string | 
$item_text = 'item_text_example'; // string | The text of the item.
$max_raw_score = 3.4; // float | The maximum raw score achievable across all assessment items that are correct and scored at the maximum.
$nomenclature = 'nomenclature_example'; // string | Reflects the specific nomenclature used for assessment item.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getAssessmentItems($offset, $limit, $min_change_version, $max_change_version, $total_count, $identification_code, $assessment_identifier, $namespace, $assessment_item_category_descriptor, $assessment_item_uri, $expected_time_assessed, $id, $item_text, $max_raw_score, $nomenclature, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssessmentItemsApi->getAssessmentItems: ', $e->getMessage(), PHP_EOL;
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
| **identification_code** | **string**| A unique number or alphanumeric code assigned to a space, room, site, building, individual, organization, program, or institution by a school, school system, state, or other agency or entity. | [optional] |
| **assessment_identifier** | **string**| A unique number or alphanumeric code assigned to an assessment. | [optional] |
| **namespace** | **string**| Namespace for the assessment. | [optional] |
| **assessment_item_category_descriptor** | **string**| Category or type of the assessment item. | [optional] |
| **assessment_item_uri** | **string**| The URI (typical a URL) pointing to the entry in an assessment item bank, which describes this content item. | [optional] |
| **expected_time_assessed** | **string**| The duration of time allotted for the assessment item. | [optional] |
| **id** | **string**|  | [optional] |
| **item_text** | **string**| The text of the item. | [optional] |
| **max_raw_score** | **float**| The maximum raw score achievable across all assessment items that are correct and scored at the maximum. | [optional] |
| **nomenclature** | **string**| Reflects the specific nomenclature used for assessment item. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\EdFiAssessmentItem[]**](../Model/EdFiAssessmentItem.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAssessmentItemsById()`

```php
getAssessmentItemsById($id, $if_none_match, $use_snapshot): \OpenAPI\Client\Model\EdFiAssessmentItem
```

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AssessmentItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_none_match = 'if_none_match_example'; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getAssessmentItemsById($id, $if_none_match, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssessmentItemsApi->getAssessmentItemsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\EdFiAssessmentItem**](../Model/EdFiAssessmentItem.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `keyChangesAssessmentItems()`

```php
keyChangesAssessmentItems($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \OpenAPI\Client\Model\TrackedChangesEdFiAssessmentItemKeyChange[]
```

Retrieves resources key changes based on change version.

This operation is used to retrieve identifying information about resources whose key values have been changed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AssessmentItemsApi(
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
    $result = $apiInstance->keyChangesAssessmentItems($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssessmentItemsApi->keyChangesAssessmentItems: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\TrackedChangesEdFiAssessmentItemKeyChange[]**](../Model/TrackedChangesEdFiAssessmentItemKeyChange.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postAssessmentItem()`

```php
postAssessmentItem($ed_fi_assessment_item)
```

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update). Clients should NOT include the resource \"id\" in the JSON body because it will result in an error. The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately. It is recommended to use POST for both create and update except while updating natural key of a resource in which case PUT operation must be used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AssessmentItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ed_fi_assessment_item = new \OpenAPI\Client\Model\EdFiAssessmentItem(); // \OpenAPI\Client\Model\EdFiAssessmentItem | The JSON representation of the \"assessmentItem\" resource to be created or updated.

try {
    $apiInstance->postAssessmentItem($ed_fi_assessment_item);
} catch (Exception $e) {
    echo 'Exception when calling AssessmentItemsApi->postAssessmentItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ed_fi_assessment_item** | [**\OpenAPI\Client\Model\EdFiAssessmentItem**](../Model/EdFiAssessmentItem.md)| The JSON representation of the \&quot;assessmentItem\&quot; resource to be created or updated. | |

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

## `putAssessmentItem()`

```php
putAssessmentItem($id, $ed_fi_assessment_item, $if_match)
```

Updates a resource based on the resource identifier.

The PUT operation is used to update a resource by identifier. If the resource identifier (\"id\") is provided in the JSON body, it will be ignored. Additionally, this API resource is not configured for cascading natural key updates. Natural key values for this resource cannot be changed using PUT operation, so the recommendation is to use POST as that supports upsert behavior.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AssessmentItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$ed_fi_assessment_item = new \OpenAPI\Client\Model\EdFiAssessmentItem(); // \OpenAPI\Client\Model\EdFiAssessmentItem | The JSON representation of the \"assessmentItem\" resource to be created or updated.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try {
    $apiInstance->putAssessmentItem($id, $ed_fi_assessment_item, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling AssessmentItemsApi->putAssessmentItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **ed_fi_assessment_item** | [**\OpenAPI\Client\Model\EdFiAssessmentItem**](../Model/EdFiAssessmentItem.md)| The JSON representation of the \&quot;assessmentItem\&quot; resource to be created or updated. | |
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
