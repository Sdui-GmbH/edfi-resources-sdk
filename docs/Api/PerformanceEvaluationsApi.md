# Resources\PerformanceEvaluationsApi

All URIs are relative to https://api.ed-fi.org:443/v7.3/api/data/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deletePerformanceEvaluationById()**](PerformanceEvaluationsApi.md#deletePerformanceEvaluationById) | **DELETE** /tpdm/performanceEvaluations/{id} | Deletes an existing resource using the resource identifier. |
| [**deletesPerformanceEvaluations()**](PerformanceEvaluationsApi.md#deletesPerformanceEvaluations) | **GET** /tpdm/performanceEvaluations/deletes | Retrieves deleted resources based on change version. |
| [**getPerformanceEvaluations()**](PerformanceEvaluationsApi.md#getPerformanceEvaluations) | **GET** /tpdm/performanceEvaluations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern). |
| [**getPerformanceEvaluationsById()**](PerformanceEvaluationsApi.md#getPerformanceEvaluationsById) | **GET** /tpdm/performanceEvaluations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern). |
| [**getPerformanceEvaluationsPartitions()**](PerformanceEvaluationsApi.md#getPerformanceEvaluationsPartitions) | **GET** /tpdm/performanceEvaluations/partitions | Retrieves a set of page tokens to be used for efficient client-side parallel processing. |
| [**keyChangesPerformanceEvaluations()**](PerformanceEvaluationsApi.md#keyChangesPerformanceEvaluations) | **GET** /tpdm/performanceEvaluations/keyChanges | Retrieves resources key changes based on change version. |
| [**postPerformanceEvaluation()**](PerformanceEvaluationsApi.md#postPerformanceEvaluation) | **POST** /tpdm/performanceEvaluations | Creates or updates resources based on the natural key values of the supplied resource. |
| [**putPerformanceEvaluation()**](PerformanceEvaluationsApi.md#putPerformanceEvaluation) | **PUT** /tpdm/performanceEvaluations/{id} | Updates a resource based on the resource identifier. |


## `deletePerformanceEvaluationById()`

```php
deletePerformanceEvaluationById($id, $if_match)
```

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier. If the resource doesn't exist, an error will result (the resource will not be found).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\PerformanceEvaluationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try {
    $apiInstance->deletePerformanceEvaluationById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling PerformanceEvaluationsApi->deletePerformanceEvaluationById: ', $e->getMessage(), PHP_EOL;
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

## `deletesPerformanceEvaluations()`

```php
deletesPerformanceEvaluations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesTpdmPerformanceEvaluationDelete[]
```

Retrieves deleted resources based on change version.

This operation is used to retrieve identifying information about resources that have been deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\PerformanceEvaluationsApi(
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
    $result = $apiInstance->deletesPerformanceEvaluations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PerformanceEvaluationsApi->deletesPerformanceEvaluations: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesTpdmPerformanceEvaluationDelete[]**](../Model/TrackedChangesTpdmPerformanceEvaluationDelete.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPerformanceEvaluations()`

```php
getPerformanceEvaluations($offset, $limit, $page_token, $page_size, $min_change_version, $max_change_version, $total_count, $evaluation_period_descriptor, $performance_evaluation_type_descriptor, $term_descriptor, $performance_evaluation_title, $education_organization_id, $school_year, $academic_subject_descriptor, $id, $performance_evaluation_description, $use_snapshot): \Resources\Model\TpdmPerformanceEvaluation[]
```

Retrieves specific resources using the resource's property values (using the \"Get\" pattern).

This GET operation provides access to resources using the \"Get\" search pattern.  The values of any properties of the resource that are specified will be used to return all matching results (if it exists).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\PerformanceEvaluationsApi(
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
$evaluation_period_descriptor = 'evaluation_period_descriptor_example'; // string | The period for the evaluation.
$performance_evaluation_type_descriptor = 'performance_evaluation_type_descriptor_example'; // string | The type of performance evaluation conducted.
$term_descriptor = 'term_descriptor_example'; // string | The term for the session during the school year.
$performance_evaluation_title = 'performance_evaluation_title_example'; // string | An assigned unique identifier for the performance evaluation.
$education_organization_id = 56; // int | The identifier assigned to an education organization.
$school_year = 56; // int | The identifier for the school year.
$academic_subject_descriptor = 'academic_subject_descriptor_example'; // string | The description of the content or subject area of a performance evaluation.
$id = 'id_example'; // string | 
$performance_evaluation_description = 'performance_evaluation_description_example'; // string | The long description of the Performance Evaluation.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getPerformanceEvaluations($offset, $limit, $page_token, $page_size, $min_change_version, $max_change_version, $total_count, $evaluation_period_descriptor, $performance_evaluation_type_descriptor, $term_descriptor, $performance_evaluation_title, $education_organization_id, $school_year, $academic_subject_descriptor, $id, $performance_evaluation_description, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PerformanceEvaluationsApi->getPerformanceEvaluations: ', $e->getMessage(), PHP_EOL;
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
| **evaluation_period_descriptor** | **string**| The period for the evaluation. | [optional] |
| **performance_evaluation_type_descriptor** | **string**| The type of performance evaluation conducted. | [optional] |
| **term_descriptor** | **string**| The term for the session during the school year. | [optional] |
| **performance_evaluation_title** | **string**| An assigned unique identifier for the performance evaluation. | [optional] |
| **education_organization_id** | **int**| The identifier assigned to an education organization. | [optional] |
| **school_year** | **int**| The identifier for the school year. | [optional] |
| **academic_subject_descriptor** | **string**| The description of the content or subject area of a performance evaluation. | [optional] |
| **id** | **string**|  | [optional] |
| **performance_evaluation_description** | **string**| The long description of the Performance Evaluation. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\TpdmPerformanceEvaluation[]**](../Model/TpdmPerformanceEvaluation.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPerformanceEvaluationsById()`

```php
getPerformanceEvaluationsById($id, $if_none_match, $use_snapshot): \Resources\Model\TpdmPerformanceEvaluation
```

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\PerformanceEvaluationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_none_match = 'if_none_match_example'; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getPerformanceEvaluationsById($id, $if_none_match, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PerformanceEvaluationsApi->getPerformanceEvaluationsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\TpdmPerformanceEvaluation**](../Model/TpdmPerformanceEvaluation.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPerformanceEvaluationsPartitions()`

```php
getPerformanceEvaluationsPartitions($number, $min_change_version, $max_change_version, $evaluation_period_descriptor, $performance_evaluation_type_descriptor, $term_descriptor, $performance_evaluation_title, $education_organization_id, $school_year, $academic_subject_descriptor, $id, $performance_evaluation_description, $use_snapshot): \Resources\Model\GetAcademicWeeksPartitions200Response
```

Retrieves a set of page tokens to be used for efficient client-side parallel processing.

Computes an evenly distributed set of partitions over the accessible data and returns a set of page tokens, each representing the first page of one of the partitions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\PerformanceEvaluationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$number = 56; // int | The number of evenly distributed partitions to provide for client-side parallel processing. If unspecified, a reasonable set of partitions will be determined based on the total number of accessible items.
$min_change_version = 56; // int | Used in synchronization to set sequence minimum ChangeVersion
$max_change_version = 56; // int | Used in synchronization to set sequence maximum ChangeVersion
$evaluation_period_descriptor = 'evaluation_period_descriptor_example'; // string | The period for the evaluation.
$performance_evaluation_type_descriptor = 'performance_evaluation_type_descriptor_example'; // string | The type of performance evaluation conducted.
$term_descriptor = 'term_descriptor_example'; // string | The term for the session during the school year.
$performance_evaluation_title = 'performance_evaluation_title_example'; // string | An assigned unique identifier for the performance evaluation.
$education_organization_id = 56; // int | The identifier assigned to an education organization.
$school_year = 56; // int | The identifier for the school year.
$academic_subject_descriptor = 'academic_subject_descriptor_example'; // string | The description of the content or subject area of a performance evaluation.
$id = 'id_example'; // string | 
$performance_evaluation_description = 'performance_evaluation_description_example'; // string | The long description of the Performance Evaluation.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getPerformanceEvaluationsPartitions($number, $min_change_version, $max_change_version, $evaluation_period_descriptor, $performance_evaluation_type_descriptor, $term_descriptor, $performance_evaluation_title, $education_organization_id, $school_year, $academic_subject_descriptor, $id, $performance_evaluation_description, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PerformanceEvaluationsApi->getPerformanceEvaluationsPartitions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **number** | **int**| The number of evenly distributed partitions to provide for client-side parallel processing. If unspecified, a reasonable set of partitions will be determined based on the total number of accessible items. | [optional] |
| **min_change_version** | **int**| Used in synchronization to set sequence minimum ChangeVersion | [optional] |
| **max_change_version** | **int**| Used in synchronization to set sequence maximum ChangeVersion | [optional] |
| **evaluation_period_descriptor** | **string**| The period for the evaluation. | [optional] |
| **performance_evaluation_type_descriptor** | **string**| The type of performance evaluation conducted. | [optional] |
| **term_descriptor** | **string**| The term for the session during the school year. | [optional] |
| **performance_evaluation_title** | **string**| An assigned unique identifier for the performance evaluation. | [optional] |
| **education_organization_id** | **int**| The identifier assigned to an education organization. | [optional] |
| **school_year** | **int**| The identifier for the school year. | [optional] |
| **academic_subject_descriptor** | **string**| The description of the content or subject area of a performance evaluation. | [optional] |
| **id** | **string**|  | [optional] |
| **performance_evaluation_description** | **string**| The long description of the Performance Evaluation. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

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

## `keyChangesPerformanceEvaluations()`

```php
keyChangesPerformanceEvaluations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesTpdmPerformanceEvaluationKeyChange[]
```

Retrieves resources key changes based on change version.

This operation is used to retrieve identifying information about resources whose key values have been changed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\PerformanceEvaluationsApi(
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
    $result = $apiInstance->keyChangesPerformanceEvaluations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PerformanceEvaluationsApi->keyChangesPerformanceEvaluations: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesTpdmPerformanceEvaluationKeyChange[]**](../Model/TrackedChangesTpdmPerformanceEvaluationKeyChange.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPerformanceEvaluation()`

```php
postPerformanceEvaluation($tpdm_performance_evaluation)
```

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update). Clients should NOT include the resource \"id\" in the JSON body because it will result in an error. The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately. It is recommended to use POST for both create and update except while updating natural key of a resource in which case PUT operation must be used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\PerformanceEvaluationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tpdm_performance_evaluation = new \Resources\Model\TpdmPerformanceEvaluation(); // \Resources\Model\TpdmPerformanceEvaluation | The JSON representation of the \"performanceEvaluation\" resource to be created or updated.

try {
    $apiInstance->postPerformanceEvaluation($tpdm_performance_evaluation);
} catch (Exception $e) {
    echo 'Exception when calling PerformanceEvaluationsApi->postPerformanceEvaluation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tpdm_performance_evaluation** | [**\Resources\Model\TpdmPerformanceEvaluation**](../Model/TpdmPerformanceEvaluation.md)| The JSON representation of the \&quot;performanceEvaluation\&quot; resource to be created or updated. | |

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

## `putPerformanceEvaluation()`

```php
putPerformanceEvaluation($id, $tpdm_performance_evaluation, $if_match)
```

Updates a resource based on the resource identifier.

The PUT operation is used to update a resource by identifier. If the resource identifier (\"id\") is provided in the JSON body, it will be ignored. Additionally, this API resource is not configured for cascading natural key updates. Natural key values for this resource cannot be changed using PUT operation, so the recommendation is to use POST as that supports upsert behavior.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\PerformanceEvaluationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$tpdm_performance_evaluation = new \Resources\Model\TpdmPerformanceEvaluation(); // \Resources\Model\TpdmPerformanceEvaluation | The JSON representation of the \"performanceEvaluation\" resource to be created or updated.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try {
    $apiInstance->putPerformanceEvaluation($id, $tpdm_performance_evaluation, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling PerformanceEvaluationsApi->putPerformanceEvaluation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **tpdm_performance_evaluation** | [**\Resources\Model\TpdmPerformanceEvaluation**](../Model/TpdmPerformanceEvaluation.md)| The JSON representation of the \&quot;performanceEvaluation\&quot; resource to be created or updated. | |
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
