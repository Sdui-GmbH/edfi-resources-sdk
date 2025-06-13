# Resources\EvaluationElementRatingsApi

All URIs are relative to https://api.ed-fi.org:443/v7.2/api/data/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteEvaluationElementRatingById()**](EvaluationElementRatingsApi.md#deleteEvaluationElementRatingById) | **DELETE** /tpdm/evaluationElementRatings/{id} | Deletes an existing resource using the resource identifier. |
| [**deletesEvaluationElementRatings()**](EvaluationElementRatingsApi.md#deletesEvaluationElementRatings) | **GET** /tpdm/evaluationElementRatings/deletes | Retrieves deleted resources based on change version. |
| [**getEvaluationElementRatings()**](EvaluationElementRatingsApi.md#getEvaluationElementRatings) | **GET** /tpdm/evaluationElementRatings | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern). |
| [**getEvaluationElementRatingsById()**](EvaluationElementRatingsApi.md#getEvaluationElementRatingsById) | **GET** /tpdm/evaluationElementRatings/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern). |
| [**keyChangesEvaluationElementRatings()**](EvaluationElementRatingsApi.md#keyChangesEvaluationElementRatings) | **GET** /tpdm/evaluationElementRatings/keyChanges | Retrieves resources key changes based on change version. |
| [**postEvaluationElementRating()**](EvaluationElementRatingsApi.md#postEvaluationElementRating) | **POST** /tpdm/evaluationElementRatings | Creates or updates resources based on the natural key values of the supplied resource. |
| [**putEvaluationElementRating()**](EvaluationElementRatingsApi.md#putEvaluationElementRating) | **PUT** /tpdm/evaluationElementRatings/{id} | Updates a resource based on the resource identifier. |


## `deleteEvaluationElementRatingById()`

```php
deleteEvaluationElementRatingById($id, $if_match)
```

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier. If the resource doesn't exist, an error will result (the resource will not be found).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\EvaluationElementRatingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try {
    $apiInstance->deleteEvaluationElementRatingById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling EvaluationElementRatingsApi->deleteEvaluationElementRatingById: ', $e->getMessage(), PHP_EOL;
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

## `deletesEvaluationElementRatings()`

```php
deletesEvaluationElementRatings($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesTpdmEvaluationElementRatingDelete[]
```

Retrieves deleted resources based on change version.

This operation is used to retrieve identifying information about resources that have been deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\EvaluationElementRatingsApi(
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
    $result = $apiInstance->deletesEvaluationElementRatings($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EvaluationElementRatingsApi->deletesEvaluationElementRatings: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesTpdmEvaluationElementRatingDelete[]**](../Model/TrackedChangesTpdmEvaluationElementRatingDelete.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEvaluationElementRatings()`

```php
getEvaluationElementRatings($offset, $limit, $min_change_version, $max_change_version, $total_count, $education_organization_id, $evaluation_element_title, $evaluation_objective_title, $evaluation_period_descriptor, $evaluation_title, $performance_evaluation_title, $performance_evaluation_type_descriptor, $school_year, $term_descriptor, $evaluation_date, $person_id, $source_system_descriptor, $evaluation_element_rating_level_descriptor, $area_of_refinement, $area_of_reinforcement, $comments, $feedback, $id, $use_snapshot): \Resources\Model\TpdmEvaluationElementRating[]
```

Retrieves specific resources using the resource's property values (using the \"Get\" pattern).

This GET operation provides access to resources using the \"Get\" search pattern.  The values of any properties of the resource that are specified will be used to return all matching results (if it exists).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\EvaluationElementRatingsApi(
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
$evaluation_element_title = 'evaluation_element_title_example'; // string | The name or title of the evaluation element.
$evaluation_objective_title = 'evaluation_objective_title_example'; // string | The name or title of the evaluation Objective.
$evaluation_period_descriptor = 'evaluation_period_descriptor_example'; // string | The period for the evaluation.
$evaluation_title = 'evaluation_title_example'; // string | The name or title of the evaluation.
$performance_evaluation_title = 'performance_evaluation_title_example'; // string | An assigned unique identifier for the performance evaluation.
$performance_evaluation_type_descriptor = 'performance_evaluation_type_descriptor_example'; // string | The type of performance evaluation conducted.
$school_year = 56; // int | The identifier for the school year.
$term_descriptor = 'term_descriptor_example'; // string | The term for the session during the school year.
$evaluation_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date for the person's evaluation.
$person_id = 'person_id_example'; // string | A unique alphanumeric code assigned to a person.
$source_system_descriptor = 'source_system_descriptor_example'; // string | This descriptor defines the originating record source system for the person.
$evaluation_element_rating_level_descriptor = 'evaluation_element_rating_level_descriptor_example'; // string | The rating level achieved based upon the rating or score.
$area_of_refinement = 'area_of_refinement_example'; // string | Area identified for person to refine or improve as part of the evaluation.
$area_of_reinforcement = 'area_of_reinforcement_example'; // string | Area identified for reinforcement or positive feedback as part of the evaluation.
$comments = 'comments_example'; // string | Any comments about the performance evaluation to be captured.
$feedback = 'feedback_example'; // string | Feedback provided to the evaluated person.
$id = 'id_example'; // string | 
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getEvaluationElementRatings($offset, $limit, $min_change_version, $max_change_version, $total_count, $education_organization_id, $evaluation_element_title, $evaluation_objective_title, $evaluation_period_descriptor, $evaluation_title, $performance_evaluation_title, $performance_evaluation_type_descriptor, $school_year, $term_descriptor, $evaluation_date, $person_id, $source_system_descriptor, $evaluation_element_rating_level_descriptor, $area_of_refinement, $area_of_reinforcement, $comments, $feedback, $id, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EvaluationElementRatingsApi->getEvaluationElementRatings: ', $e->getMessage(), PHP_EOL;
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
| **evaluation_element_title** | **string**| The name or title of the evaluation element. | [optional] |
| **evaluation_objective_title** | **string**| The name or title of the evaluation Objective. | [optional] |
| **evaluation_period_descriptor** | **string**| The period for the evaluation. | [optional] |
| **evaluation_title** | **string**| The name or title of the evaluation. | [optional] |
| **performance_evaluation_title** | **string**| An assigned unique identifier for the performance evaluation. | [optional] |
| **performance_evaluation_type_descriptor** | **string**| The type of performance evaluation conducted. | [optional] |
| **school_year** | **int**| The identifier for the school year. | [optional] |
| **term_descriptor** | **string**| The term for the session during the school year. | [optional] |
| **evaluation_date** | **\DateTime**| The date for the person&#39;s evaluation. | [optional] |
| **person_id** | **string**| A unique alphanumeric code assigned to a person. | [optional] |
| **source_system_descriptor** | **string**| This descriptor defines the originating record source system for the person. | [optional] |
| **evaluation_element_rating_level_descriptor** | **string**| The rating level achieved based upon the rating or score. | [optional] |
| **area_of_refinement** | **string**| Area identified for person to refine or improve as part of the evaluation. | [optional] |
| **area_of_reinforcement** | **string**| Area identified for reinforcement or positive feedback as part of the evaluation. | [optional] |
| **comments** | **string**| Any comments about the performance evaluation to be captured. | [optional] |
| **feedback** | **string**| Feedback provided to the evaluated person. | [optional] |
| **id** | **string**|  | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\TpdmEvaluationElementRating[]**](../Model/TpdmEvaluationElementRating.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEvaluationElementRatingsById()`

```php
getEvaluationElementRatingsById($id, $if_none_match, $use_snapshot): \Resources\Model\TpdmEvaluationElementRating
```

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\EvaluationElementRatingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_none_match = 'if_none_match_example'; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getEvaluationElementRatingsById($id, $if_none_match, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EvaluationElementRatingsApi->getEvaluationElementRatingsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\TpdmEvaluationElementRating**](../Model/TpdmEvaluationElementRating.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `keyChangesEvaluationElementRatings()`

```php
keyChangesEvaluationElementRatings($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesTpdmEvaluationElementRatingKeyChange[]
```

Retrieves resources key changes based on change version.

This operation is used to retrieve identifying information about resources whose key values have been changed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\EvaluationElementRatingsApi(
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
    $result = $apiInstance->keyChangesEvaluationElementRatings($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EvaluationElementRatingsApi->keyChangesEvaluationElementRatings: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesTpdmEvaluationElementRatingKeyChange[]**](../Model/TrackedChangesTpdmEvaluationElementRatingKeyChange.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEvaluationElementRating()`

```php
postEvaluationElementRating($tpdm_evaluation_element_rating)
```

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update). Clients should NOT include the resource \"id\" in the JSON body because it will result in an error. The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately. It is recommended to use POST for both create and update except while updating natural key of a resource in which case PUT operation must be used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\EvaluationElementRatingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tpdm_evaluation_element_rating = new \Resources\Model\TpdmEvaluationElementRating(); // \Resources\Model\TpdmEvaluationElementRating | The JSON representation of the \"evaluationElementRating\" resource to be created or updated.

try {
    $apiInstance->postEvaluationElementRating($tpdm_evaluation_element_rating);
} catch (Exception $e) {
    echo 'Exception when calling EvaluationElementRatingsApi->postEvaluationElementRating: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tpdm_evaluation_element_rating** | [**\Resources\Model\TpdmEvaluationElementRating**](../Model/TpdmEvaluationElementRating.md)| The JSON representation of the \&quot;evaluationElementRating\&quot; resource to be created or updated. | |

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

## `putEvaluationElementRating()`

```php
putEvaluationElementRating($id, $tpdm_evaluation_element_rating, $if_match)
```

Updates a resource based on the resource identifier.

The PUT operation is used to update a resource by identifier. If the resource identifier (\"id\") is provided in the JSON body, it will be ignored. Additionally, this API resource is not configured for cascading natural key updates. Natural key values for this resource cannot be changed using PUT operation, so the recommendation is to use POST as that supports upsert behavior.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\EvaluationElementRatingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$tpdm_evaluation_element_rating = new \Resources\Model\TpdmEvaluationElementRating(); // \Resources\Model\TpdmEvaluationElementRating | The JSON representation of the \"evaluationElementRating\" resource to be created or updated.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try {
    $apiInstance->putEvaluationElementRating($id, $tpdm_evaluation_element_rating, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling EvaluationElementRatingsApi->putEvaluationElementRating: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **tpdm_evaluation_element_rating** | [**\Resources\Model\TpdmEvaluationElementRating**](../Model/TpdmEvaluationElementRating.md)| The JSON representation of the \&quot;evaluationElementRating\&quot; resource to be created or updated. | |
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
