# OpenAPI\Client\PerformanceEvaluationRatingsApi

All URIs are relative to https://api.ed-fi.org:443/v7.1/api/data/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deletePerformanceEvaluationRatingById()**](PerformanceEvaluationRatingsApi.md#deletePerformanceEvaluationRatingById) | **DELETE** /tpdm/performanceEvaluationRatings/{id} | Deletes an existing resource using the resource identifier. |
| [**deletesPerformanceEvaluationRatings()**](PerformanceEvaluationRatingsApi.md#deletesPerformanceEvaluationRatings) | **GET** /tpdm/performanceEvaluationRatings/deletes | Retrieves deleted resources based on change version. |
| [**getPerformanceEvaluationRatings()**](PerformanceEvaluationRatingsApi.md#getPerformanceEvaluationRatings) | **GET** /tpdm/performanceEvaluationRatings | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern). |
| [**getPerformanceEvaluationRatingsById()**](PerformanceEvaluationRatingsApi.md#getPerformanceEvaluationRatingsById) | **GET** /tpdm/performanceEvaluationRatings/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern). |
| [**keyChangesPerformanceEvaluationRatings()**](PerformanceEvaluationRatingsApi.md#keyChangesPerformanceEvaluationRatings) | **GET** /tpdm/performanceEvaluationRatings/keyChanges | Retrieves resources key changes based on change version. |
| [**postPerformanceEvaluationRating()**](PerformanceEvaluationRatingsApi.md#postPerformanceEvaluationRating) | **POST** /tpdm/performanceEvaluationRatings | Creates or updates resources based on the natural key values of the supplied resource. |
| [**putPerformanceEvaluationRating()**](PerformanceEvaluationRatingsApi.md#putPerformanceEvaluationRating) | **PUT** /tpdm/performanceEvaluationRatings/{id} | Updates a resource based on the resource identifier. |


## `deletePerformanceEvaluationRatingById()`

```php
deletePerformanceEvaluationRatingById($id, $if_match)
```

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier. If the resource doesn't exist, an error will result (the resource will not be found).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PerformanceEvaluationRatingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try {
    $apiInstance->deletePerformanceEvaluationRatingById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling PerformanceEvaluationRatingsApi->deletePerformanceEvaluationRatingById: ', $e->getMessage(), PHP_EOL;
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

## `deletesPerformanceEvaluationRatings()`

```php
deletesPerformanceEvaluationRatings($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \OpenAPI\Client\Model\TrackedChangesTpdmPerformanceEvaluationRatingDelete[]
```

Retrieves deleted resources based on change version.

This operation is used to retrieve identifying information about resources that have been deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PerformanceEvaluationRatingsApi(
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
    $result = $apiInstance->deletesPerformanceEvaluationRatings($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PerformanceEvaluationRatingsApi->deletesPerformanceEvaluationRatings: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\TrackedChangesTpdmPerformanceEvaluationRatingDelete[]**](../Model/TrackedChangesTpdmPerformanceEvaluationRatingDelete.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPerformanceEvaluationRatings()`

```php
getPerformanceEvaluationRatings($offset, $limit, $min_change_version, $max_change_version, $total_count, $education_organization_id, $evaluation_period_descriptor, $performance_evaluation_title, $performance_evaluation_type_descriptor, $school_year, $term_descriptor, $person_id, $source_system_descriptor, $coteaching_style_observed_descriptor, $performance_evaluation_rating_level_descriptor, $actual_date, $actual_duration, $actual_time, $announced, $comments, $id, $schedule_date, $use_snapshot): \OpenAPI\Client\Model\TpdmPerformanceEvaluationRating[]
```

Retrieves specific resources using the resource's property values (using the \"Get\" pattern).

This GET operation provides access to resources using the \"Get\" search pattern.  The values of any properties of the resource that are specified will be used to return all matching results (if it exists).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PerformanceEvaluationRatingsApi(
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
$education_organization_id = 56; // int | The identifier assigned to an education organization.
$evaluation_period_descriptor = 'evaluation_period_descriptor_example'; // string | The period for the evaluation.
$performance_evaluation_title = 'performance_evaluation_title_example'; // string | An assigned unique identifier for the performance evaluation.
$performance_evaluation_type_descriptor = 'performance_evaluation_type_descriptor_example'; // string | The type of performance evaluation conducted.
$school_year = 56; // int | The identifier for the school year.
$term_descriptor = 'term_descriptor_example'; // string | The term for the session during the school year.
$person_id = 'person_id_example'; // string | A unique alphanumeric code assigned to a person.
$source_system_descriptor = 'source_system_descriptor_example'; // string | This descriptor defines the originating record source system for the person.
$coteaching_style_observed_descriptor = 'coteaching_style_observed_descriptor_example'; // string | A type of co-teaching observed as part of the performance evaluation.
$performance_evaluation_rating_level_descriptor = 'performance_evaluation_rating_level_descriptor_example'; // string | The rating level achieved based upon the rating or score.
$actual_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The month, day, and year on which the performance evaluation was conducted.
$actual_duration = 56; // int | The actual or estimated number of clock minutes during which the performance evaluation was conducted.
$actual_time = 'actual_time_example'; // string | An indication of the the time at which the performance evaluation was conducted.
$announced = True; // bool | An indicator of whether the performance evaluation was announced or not.
$comments = 'comments_example'; // string | Any comments about the performance evaluation to be captured.
$id = 'id_example'; // string | 
$schedule_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The month, day, and year on which the performance evaluation was scheduled.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getPerformanceEvaluationRatings($offset, $limit, $min_change_version, $max_change_version, $total_count, $education_organization_id, $evaluation_period_descriptor, $performance_evaluation_title, $performance_evaluation_type_descriptor, $school_year, $term_descriptor, $person_id, $source_system_descriptor, $coteaching_style_observed_descriptor, $performance_evaluation_rating_level_descriptor, $actual_date, $actual_duration, $actual_time, $announced, $comments, $id, $schedule_date, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PerformanceEvaluationRatingsApi->getPerformanceEvaluationRatings: ', $e->getMessage(), PHP_EOL;
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
| **education_organization_id** | **int**| The identifier assigned to an education organization. | [optional] |
| **evaluation_period_descriptor** | **string**| The period for the evaluation. | [optional] |
| **performance_evaluation_title** | **string**| An assigned unique identifier for the performance evaluation. | [optional] |
| **performance_evaluation_type_descriptor** | **string**| The type of performance evaluation conducted. | [optional] |
| **school_year** | **int**| The identifier for the school year. | [optional] |
| **term_descriptor** | **string**| The term for the session during the school year. | [optional] |
| **person_id** | **string**| A unique alphanumeric code assigned to a person. | [optional] |
| **source_system_descriptor** | **string**| This descriptor defines the originating record source system for the person. | [optional] |
| **coteaching_style_observed_descriptor** | **string**| A type of co-teaching observed as part of the performance evaluation. | [optional] |
| **performance_evaluation_rating_level_descriptor** | **string**| The rating level achieved based upon the rating or score. | [optional] |
| **actual_date** | **\DateTime**| The month, day, and year on which the performance evaluation was conducted. | [optional] |
| **actual_duration** | **int**| The actual or estimated number of clock minutes during which the performance evaluation was conducted. | [optional] |
| **actual_time** | **string**| An indication of the the time at which the performance evaluation was conducted. | [optional] |
| **announced** | **bool**| An indicator of whether the performance evaluation was announced or not. | [optional] |
| **comments** | **string**| Any comments about the performance evaluation to be captured. | [optional] |
| **id** | **string**|  | [optional] |
| **schedule_date** | **\DateTime**| The month, day, and year on which the performance evaluation was scheduled. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\TpdmPerformanceEvaluationRating[]**](../Model/TpdmPerformanceEvaluationRating.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPerformanceEvaluationRatingsById()`

```php
getPerformanceEvaluationRatingsById($id, $if_none_match, $use_snapshot): \OpenAPI\Client\Model\TpdmPerformanceEvaluationRating
```

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PerformanceEvaluationRatingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_none_match = 'if_none_match_example'; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getPerformanceEvaluationRatingsById($id, $if_none_match, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PerformanceEvaluationRatingsApi->getPerformanceEvaluationRatingsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\TpdmPerformanceEvaluationRating**](../Model/TpdmPerformanceEvaluationRating.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `keyChangesPerformanceEvaluationRatings()`

```php
keyChangesPerformanceEvaluationRatings($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \OpenAPI\Client\Model\TrackedChangesTpdmPerformanceEvaluationRatingKeyChange[]
```

Retrieves resources key changes based on change version.

This operation is used to retrieve identifying information about resources whose key values have been changed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PerformanceEvaluationRatingsApi(
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
    $result = $apiInstance->keyChangesPerformanceEvaluationRatings($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PerformanceEvaluationRatingsApi->keyChangesPerformanceEvaluationRatings: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\TrackedChangesTpdmPerformanceEvaluationRatingKeyChange[]**](../Model/TrackedChangesTpdmPerformanceEvaluationRatingKeyChange.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPerformanceEvaluationRating()`

```php
postPerformanceEvaluationRating($tpdm_performance_evaluation_rating)
```

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update). Clients should NOT include the resource \"id\" in the JSON body because it will result in an error. The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately. It is recommended to use POST for both create and update except while updating natural key of a resource in which case PUT operation must be used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PerformanceEvaluationRatingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tpdm_performance_evaluation_rating = new \OpenAPI\Client\Model\TpdmPerformanceEvaluationRating(); // \OpenAPI\Client\Model\TpdmPerformanceEvaluationRating | The JSON representation of the \"performanceEvaluationRating\" resource to be created or updated.

try {
    $apiInstance->postPerformanceEvaluationRating($tpdm_performance_evaluation_rating);
} catch (Exception $e) {
    echo 'Exception when calling PerformanceEvaluationRatingsApi->postPerformanceEvaluationRating: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tpdm_performance_evaluation_rating** | [**\OpenAPI\Client\Model\TpdmPerformanceEvaluationRating**](../Model/TpdmPerformanceEvaluationRating.md)| The JSON representation of the \&quot;performanceEvaluationRating\&quot; resource to be created or updated. | |

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

## `putPerformanceEvaluationRating()`

```php
putPerformanceEvaluationRating($id, $tpdm_performance_evaluation_rating, $if_match)
```

Updates a resource based on the resource identifier.

The PUT operation is used to update a resource by identifier. If the resource identifier (\"id\") is provided in the JSON body, it will be ignored. Additionally, this API resource is not configured for cascading natural key updates. Natural key values for this resource cannot be changed using PUT operation, so the recommendation is to use POST as that supports upsert behavior.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PerformanceEvaluationRatingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$tpdm_performance_evaluation_rating = new \OpenAPI\Client\Model\TpdmPerformanceEvaluationRating(); // \OpenAPI\Client\Model\TpdmPerformanceEvaluationRating | The JSON representation of the \"performanceEvaluationRating\" resource to be created or updated.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try {
    $apiInstance->putPerformanceEvaluationRating($id, $tpdm_performance_evaluation_rating, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling PerformanceEvaluationRatingsApi->putPerformanceEvaluationRating: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **tpdm_performance_evaluation_rating** | [**\OpenAPI\Client\Model\TpdmPerformanceEvaluationRating**](../Model/TpdmPerformanceEvaluationRating.md)| The JSON representation of the \&quot;performanceEvaluationRating\&quot; resource to be created or updated. | |
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
