# Resources\EvaluationRubricDimensionsApi

All URIs are relative to https://api.ed-fi.org:443/v7.1/api/data/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteEvaluationRubricDimensionById()**](EvaluationRubricDimensionsApi.md#deleteEvaluationRubricDimensionById) | **DELETE** /ed-fi/evaluationRubricDimensions/{id} | Deletes an existing resource using the resource identifier. |
| [**deletesEvaluationRubricDimensions()**](EvaluationRubricDimensionsApi.md#deletesEvaluationRubricDimensions) | **GET** /ed-fi/evaluationRubricDimensions/deletes | Retrieves deleted resources based on change version. |
| [**getEvaluationRubricDimensions()**](EvaluationRubricDimensionsApi.md#getEvaluationRubricDimensions) | **GET** /ed-fi/evaluationRubricDimensions | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern). |
| [**getEvaluationRubricDimensionsById()**](EvaluationRubricDimensionsApi.md#getEvaluationRubricDimensionsById) | **GET** /ed-fi/evaluationRubricDimensions/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern). |
| [**keyChangesEvaluationRubricDimensions()**](EvaluationRubricDimensionsApi.md#keyChangesEvaluationRubricDimensions) | **GET** /ed-fi/evaluationRubricDimensions/keyChanges | Retrieves resources key changes based on change version. |
| [**postEvaluationRubricDimension()**](EvaluationRubricDimensionsApi.md#postEvaluationRubricDimension) | **POST** /ed-fi/evaluationRubricDimensions | Creates or updates resources based on the natural key values of the supplied resource. |
| [**putEvaluationRubricDimension()**](EvaluationRubricDimensionsApi.md#putEvaluationRubricDimension) | **PUT** /ed-fi/evaluationRubricDimensions/{id} | Updates a resource based on the resource identifier. |


## `deleteEvaluationRubricDimensionById()`

```php
deleteEvaluationRubricDimensionById($id, $if_match)
```

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier. If the resource doesn't exist, an error will result (the resource will not be found).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\EvaluationRubricDimensionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try {
    $apiInstance->deleteEvaluationRubricDimensionById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling EvaluationRubricDimensionsApi->deleteEvaluationRubricDimensionById: ', $e->getMessage(), PHP_EOL;
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

## `deletesEvaluationRubricDimensions()`

```php
deletesEvaluationRubricDimensions($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiEvaluationRubricDimensionDelete[]
```

Retrieves deleted resources based on change version.

This operation is used to retrieve identifying information about resources that have been deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\EvaluationRubricDimensionsApi(
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
    $result = $apiInstance->deletesEvaluationRubricDimensions($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EvaluationRubricDimensionsApi->deletesEvaluationRubricDimensions: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiEvaluationRubricDimensionDelete[]**](../Model/TrackedChangesEdFiEvaluationRubricDimensionDelete.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEvaluationRubricDimensions()`

```php
getEvaluationRubricDimensions($offset, $limit, $min_change_version, $max_change_version, $total_count, $evaluation_rubric_rating, $program_education_organization_id, $program_evaluation_element_title, $program_evaluation_period_descriptor, $program_evaluation_title, $program_evaluation_type_descriptor, $program_name, $program_type_descriptor, $evaluation_rubric_rating_level_descriptor, $evaluation_criterion_description, $id, $rubric_dimension_sort_order, $use_snapshot): \Resources\Model\EdFiEvaluationRubricDimension[]
```

Retrieves specific resources using the resource's property values (using the \"Get\" pattern).

This GET operation provides access to resources using the \"Get\" search pattern.  The values of any properties of the resource that are specified will be used to return all matching results (if it exists).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\EvaluationRubricDimensionsApi(
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
$evaluation_rubric_rating = 56; // int | The numeric rating associated with the evaluation rubric dimension.
$program_education_organization_id = 56; // int | The identifier assigned to an education organization.
$program_evaluation_element_title = 'program_evaluation_element_title_example'; // string | The name or title of the program evaluation element.
$program_evaluation_period_descriptor = 'program_evaluation_period_descriptor_example'; // string | The name of the period for the program evaluation.
$program_evaluation_title = 'program_evaluation_title_example'; // string | An assigned unique identifier for the student program evaluation.
$program_evaluation_type_descriptor = 'program_evaluation_type_descriptor_example'; // string | The type of program evaluation conducted.
$program_name = 'program_name_example'; // string | The formal name of the program of instruction, training, services, or benefits available through federal, state, or local agencies.
$program_type_descriptor = 'program_type_descriptor_example'; // string | The type of program.
$evaluation_rubric_rating_level_descriptor = 'evaluation_rubric_rating_level_descriptor_example'; // string | The rating level achieved for the evaluation rubric dimension.
$evaluation_criterion_description = 'evaluation_criterion_description_example'; // string | The evaluation criterion description for the evaluation rubric dimension.
$id = 'id_example'; // string | 
$rubric_dimension_sort_order = 56; // int | The sort order of the rubric dimension.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getEvaluationRubricDimensions($offset, $limit, $min_change_version, $max_change_version, $total_count, $evaluation_rubric_rating, $program_education_organization_id, $program_evaluation_element_title, $program_evaluation_period_descriptor, $program_evaluation_title, $program_evaluation_type_descriptor, $program_name, $program_type_descriptor, $evaluation_rubric_rating_level_descriptor, $evaluation_criterion_description, $id, $rubric_dimension_sort_order, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EvaluationRubricDimensionsApi->getEvaluationRubricDimensions: ', $e->getMessage(), PHP_EOL;
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
| **evaluation_rubric_rating** | **int**| The numeric rating associated with the evaluation rubric dimension. | [optional] |
| **program_education_organization_id** | **int**| The identifier assigned to an education organization. | [optional] |
| **program_evaluation_element_title** | **string**| The name or title of the program evaluation element. | [optional] |
| **program_evaluation_period_descriptor** | **string**| The name of the period for the program evaluation. | [optional] |
| **program_evaluation_title** | **string**| An assigned unique identifier for the student program evaluation. | [optional] |
| **program_evaluation_type_descriptor** | **string**| The type of program evaluation conducted. | [optional] |
| **program_name** | **string**| The formal name of the program of instruction, training, services, or benefits available through federal, state, or local agencies. | [optional] |
| **program_type_descriptor** | **string**| The type of program. | [optional] |
| **evaluation_rubric_rating_level_descriptor** | **string**| The rating level achieved for the evaluation rubric dimension. | [optional] |
| **evaluation_criterion_description** | **string**| The evaluation criterion description for the evaluation rubric dimension. | [optional] |
| **id** | **string**|  | [optional] |
| **rubric_dimension_sort_order** | **int**| The sort order of the rubric dimension. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiEvaluationRubricDimension[]**](../Model/EdFiEvaluationRubricDimension.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEvaluationRubricDimensionsById()`

```php
getEvaluationRubricDimensionsById($id, $if_none_match, $use_snapshot): \Resources\Model\EdFiEvaluationRubricDimension
```

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\EvaluationRubricDimensionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_none_match = 'if_none_match_example'; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getEvaluationRubricDimensionsById($id, $if_none_match, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EvaluationRubricDimensionsApi->getEvaluationRubricDimensionsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiEvaluationRubricDimension**](../Model/EdFiEvaluationRubricDimension.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `keyChangesEvaluationRubricDimensions()`

```php
keyChangesEvaluationRubricDimensions($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiEvaluationRubricDimensionKeyChange[]
```

Retrieves resources key changes based on change version.

This operation is used to retrieve identifying information about resources whose key values have been changed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\EvaluationRubricDimensionsApi(
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
    $result = $apiInstance->keyChangesEvaluationRubricDimensions($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EvaluationRubricDimensionsApi->keyChangesEvaluationRubricDimensions: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiEvaluationRubricDimensionKeyChange[]**](../Model/TrackedChangesEdFiEvaluationRubricDimensionKeyChange.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEvaluationRubricDimension()`

```php
postEvaluationRubricDimension($ed_fi_evaluation_rubric_dimension)
```

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update). Clients should NOT include the resource \"id\" in the JSON body because it will result in an error. The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately. It is recommended to use POST for both create and update except while updating natural key of a resource in which case PUT operation must be used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\EvaluationRubricDimensionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ed_fi_evaluation_rubric_dimension = new \Resources\Model\EdFiEvaluationRubricDimension(); // \Resources\Model\EdFiEvaluationRubricDimension | The JSON representation of the \"evaluationRubricDimension\" resource to be created or updated.

try {
    $apiInstance->postEvaluationRubricDimension($ed_fi_evaluation_rubric_dimension);
} catch (Exception $e) {
    echo 'Exception when calling EvaluationRubricDimensionsApi->postEvaluationRubricDimension: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ed_fi_evaluation_rubric_dimension** | [**\Resources\Model\EdFiEvaluationRubricDimension**](../Model/EdFiEvaluationRubricDimension.md)| The JSON representation of the \&quot;evaluationRubricDimension\&quot; resource to be created or updated. | |

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

## `putEvaluationRubricDimension()`

```php
putEvaluationRubricDimension($id, $ed_fi_evaluation_rubric_dimension, $if_match)
```

Updates a resource based on the resource identifier.

The PUT operation is used to update a resource by identifier. If the resource identifier (\"id\") is provided in the JSON body, it will be ignored. Additionally, this API resource is not configured for cascading natural key updates. Natural key values for this resource cannot be changed using PUT operation, so the recommendation is to use POST as that supports upsert behavior.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\EvaluationRubricDimensionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$ed_fi_evaluation_rubric_dimension = new \Resources\Model\EdFiEvaluationRubricDimension(); // \Resources\Model\EdFiEvaluationRubricDimension | The JSON representation of the \"evaluationRubricDimension\" resource to be created or updated.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try {
    $apiInstance->putEvaluationRubricDimension($id, $ed_fi_evaluation_rubric_dimension, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling EvaluationRubricDimensionsApi->putEvaluationRubricDimension: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **ed_fi_evaluation_rubric_dimension** | [**\Resources\Model\EdFiEvaluationRubricDimension**](../Model/EdFiEvaluationRubricDimension.md)| The JSON representation of the \&quot;evaluationRubricDimension\&quot; resource to be created or updated. | |
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
