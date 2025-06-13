# Resources\AssessmentScoreRangeLearningStandardsApi

All URIs are relative to https://api.ed-fi.org:443/v7.3/api/data/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteAssessmentScoreRangeLearningStandardById()**](AssessmentScoreRangeLearningStandardsApi.md#deleteAssessmentScoreRangeLearningStandardById) | **DELETE** /ed-fi/assessmentScoreRangeLearningStandards/{id} | Deletes an existing resource using the resource identifier. |
| [**deletesAssessmentScoreRangeLearningStandards()**](AssessmentScoreRangeLearningStandardsApi.md#deletesAssessmentScoreRangeLearningStandards) | **GET** /ed-fi/assessmentScoreRangeLearningStandards/deletes | Retrieves deleted resources based on change version. |
| [**getAssessmentScoreRangeLearningStandards()**](AssessmentScoreRangeLearningStandardsApi.md#getAssessmentScoreRangeLearningStandards) | **GET** /ed-fi/assessmentScoreRangeLearningStandards | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern). |
| [**getAssessmentScoreRangeLearningStandardsById()**](AssessmentScoreRangeLearningStandardsApi.md#getAssessmentScoreRangeLearningStandardsById) | **GET** /ed-fi/assessmentScoreRangeLearningStandards/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern). |
| [**getAssessmentScoreRangeLearningStandardsPartitions()**](AssessmentScoreRangeLearningStandardsApi.md#getAssessmentScoreRangeLearningStandardsPartitions) | **GET** /ed-fi/assessmentScoreRangeLearningStandards/partitions | Retrieves a set of page tokens to be used for efficient client-side parallel processing. |
| [**keyChangesAssessmentScoreRangeLearningStandards()**](AssessmentScoreRangeLearningStandardsApi.md#keyChangesAssessmentScoreRangeLearningStandards) | **GET** /ed-fi/assessmentScoreRangeLearningStandards/keyChanges | Retrieves resources key changes based on change version. |
| [**postAssessmentScoreRangeLearningStandard()**](AssessmentScoreRangeLearningStandardsApi.md#postAssessmentScoreRangeLearningStandard) | **POST** /ed-fi/assessmentScoreRangeLearningStandards | Creates or updates resources based on the natural key values of the supplied resource. |
| [**putAssessmentScoreRangeLearningStandard()**](AssessmentScoreRangeLearningStandardsApi.md#putAssessmentScoreRangeLearningStandard) | **PUT** /ed-fi/assessmentScoreRangeLearningStandards/{id} | Updates a resource based on the resource identifier. |


## `deleteAssessmentScoreRangeLearningStandardById()`

```php
deleteAssessmentScoreRangeLearningStandardById($id, $if_match)
```

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier. If the resource doesn't exist, an error will result (the resource will not be found).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\AssessmentScoreRangeLearningStandardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try {
    $apiInstance->deleteAssessmentScoreRangeLearningStandardById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling AssessmentScoreRangeLearningStandardsApi->deleteAssessmentScoreRangeLearningStandardById: ', $e->getMessage(), PHP_EOL;
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

## `deletesAssessmentScoreRangeLearningStandards()`

```php
deletesAssessmentScoreRangeLearningStandards($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiAssessmentScoreRangeLearningStandardDelete[]
```

Retrieves deleted resources based on change version.

This operation is used to retrieve identifying information about resources that have been deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\AssessmentScoreRangeLearningStandardsApi(
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
    $result = $apiInstance->deletesAssessmentScoreRangeLearningStandards($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssessmentScoreRangeLearningStandardsApi->deletesAssessmentScoreRangeLearningStandards: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiAssessmentScoreRangeLearningStandardDelete[]**](../Model/TrackedChangesEdFiAssessmentScoreRangeLearningStandardDelete.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAssessmentScoreRangeLearningStandards()`

```php
getAssessmentScoreRangeLearningStandards($offset, $limit, $page_token, $page_size, $min_change_version, $max_change_version, $total_count, $score_range_id, $assessment_identifier, $namespace, $identification_code, $assessment_reporting_method_descriptor, $id, $maximum_score, $minimum_score, $use_snapshot): \Resources\Model\EdFiAssessmentScoreRangeLearningStandard[]
```

Retrieves specific resources using the resource's property values (using the \"Get\" pattern).

This GET operation provides access to resources using the \"Get\" search pattern.  The values of any properties of the resource that are specified will be used to return all matching results (if it exists).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\AssessmentScoreRangeLearningStandardsApi(
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
$score_range_id = 'score_range_id_example'; // string | A unique number or alphanumeric code assigned to the score range associated with one or more learning standards.
$assessment_identifier = 'assessment_identifier_example'; // string | A unique number or alphanumeric code assigned to an assessment.
$namespace = 'namespace_example'; // string | Namespace for the assessment.
$identification_code = 'identification_code_example'; // string | A unique number or alphanumeric code assigned to an objective assessment by a school, school system, a state, or other agency or entity.
$assessment_reporting_method_descriptor = 'assessment_reporting_method_descriptor_example'; // string | The assessment reporting method defined (e.g., scale score, RIT scale score) associated with the referenced learning standard(s).
$id = 'id_example'; // string | 
$maximum_score = 'maximum_score_example'; // string | The maximum score in the score range.
$minimum_score = 'minimum_score_example'; // string | The minimum score in the score range.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getAssessmentScoreRangeLearningStandards($offset, $limit, $page_token, $page_size, $min_change_version, $max_change_version, $total_count, $score_range_id, $assessment_identifier, $namespace, $identification_code, $assessment_reporting_method_descriptor, $id, $maximum_score, $minimum_score, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssessmentScoreRangeLearningStandardsApi->getAssessmentScoreRangeLearningStandards: ', $e->getMessage(), PHP_EOL;
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
| **score_range_id** | **string**| A unique number or alphanumeric code assigned to the score range associated with one or more learning standards. | [optional] |
| **assessment_identifier** | **string**| A unique number or alphanumeric code assigned to an assessment. | [optional] |
| **namespace** | **string**| Namespace for the assessment. | [optional] |
| **identification_code** | **string**| A unique number or alphanumeric code assigned to an objective assessment by a school, school system, a state, or other agency or entity. | [optional] |
| **assessment_reporting_method_descriptor** | **string**| The assessment reporting method defined (e.g., scale score, RIT scale score) associated with the referenced learning standard(s). | [optional] |
| **id** | **string**|  | [optional] |
| **maximum_score** | **string**| The maximum score in the score range. | [optional] |
| **minimum_score** | **string**| The minimum score in the score range. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiAssessmentScoreRangeLearningStandard[]**](../Model/EdFiAssessmentScoreRangeLearningStandard.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAssessmentScoreRangeLearningStandardsById()`

```php
getAssessmentScoreRangeLearningStandardsById($id, $if_none_match, $use_snapshot): \Resources\Model\EdFiAssessmentScoreRangeLearningStandard
```

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\AssessmentScoreRangeLearningStandardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_none_match = 'if_none_match_example'; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getAssessmentScoreRangeLearningStandardsById($id, $if_none_match, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssessmentScoreRangeLearningStandardsApi->getAssessmentScoreRangeLearningStandardsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiAssessmentScoreRangeLearningStandard**](../Model/EdFiAssessmentScoreRangeLearningStandard.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAssessmentScoreRangeLearningStandardsPartitions()`

```php
getAssessmentScoreRangeLearningStandardsPartitions($number, $min_change_version, $max_change_version, $score_range_id, $assessment_identifier, $namespace, $identification_code, $assessment_reporting_method_descriptor, $id, $maximum_score, $minimum_score, $use_snapshot): \Resources\Model\GetAcademicWeeksPartitions200Response
```

Retrieves a set of page tokens to be used for efficient client-side parallel processing.

Computes an evenly distributed set of partitions over the accessible data and returns a set of page tokens, each representing the first page of one of the partitions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\AssessmentScoreRangeLearningStandardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$number = 56; // int | The number of evenly distributed partitions to provide for client-side parallel processing. If unspecified, a reasonable set of partitions will be determined based on the total number of accessible items.
$min_change_version = 56; // int | Used in synchronization to set sequence minimum ChangeVersion
$max_change_version = 56; // int | Used in synchronization to set sequence maximum ChangeVersion
$score_range_id = 'score_range_id_example'; // string | A unique number or alphanumeric code assigned to the score range associated with one or more learning standards.
$assessment_identifier = 'assessment_identifier_example'; // string | A unique number or alphanumeric code assigned to an assessment.
$namespace = 'namespace_example'; // string | Namespace for the assessment.
$identification_code = 'identification_code_example'; // string | A unique number or alphanumeric code assigned to an objective assessment by a school, school system, a state, or other agency or entity.
$assessment_reporting_method_descriptor = 'assessment_reporting_method_descriptor_example'; // string | The assessment reporting method defined (e.g., scale score, RIT scale score) associated with the referenced learning standard(s).
$id = 'id_example'; // string | 
$maximum_score = 'maximum_score_example'; // string | The maximum score in the score range.
$minimum_score = 'minimum_score_example'; // string | The minimum score in the score range.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getAssessmentScoreRangeLearningStandardsPartitions($number, $min_change_version, $max_change_version, $score_range_id, $assessment_identifier, $namespace, $identification_code, $assessment_reporting_method_descriptor, $id, $maximum_score, $minimum_score, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssessmentScoreRangeLearningStandardsApi->getAssessmentScoreRangeLearningStandardsPartitions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **number** | **int**| The number of evenly distributed partitions to provide for client-side parallel processing. If unspecified, a reasonable set of partitions will be determined based on the total number of accessible items. | [optional] |
| **min_change_version** | **int**| Used in synchronization to set sequence minimum ChangeVersion | [optional] |
| **max_change_version** | **int**| Used in synchronization to set sequence maximum ChangeVersion | [optional] |
| **score_range_id** | **string**| A unique number or alphanumeric code assigned to the score range associated with one or more learning standards. | [optional] |
| **assessment_identifier** | **string**| A unique number or alphanumeric code assigned to an assessment. | [optional] |
| **namespace** | **string**| Namespace for the assessment. | [optional] |
| **identification_code** | **string**| A unique number or alphanumeric code assigned to an objective assessment by a school, school system, a state, or other agency or entity. | [optional] |
| **assessment_reporting_method_descriptor** | **string**| The assessment reporting method defined (e.g., scale score, RIT scale score) associated with the referenced learning standard(s). | [optional] |
| **id** | **string**|  | [optional] |
| **maximum_score** | **string**| The maximum score in the score range. | [optional] |
| **minimum_score** | **string**| The minimum score in the score range. | [optional] |
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

## `keyChangesAssessmentScoreRangeLearningStandards()`

```php
keyChangesAssessmentScoreRangeLearningStandards($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiAssessmentScoreRangeLearningStandardKeyChange[]
```

Retrieves resources key changes based on change version.

This operation is used to retrieve identifying information about resources whose key values have been changed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\AssessmentScoreRangeLearningStandardsApi(
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
    $result = $apiInstance->keyChangesAssessmentScoreRangeLearningStandards($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssessmentScoreRangeLearningStandardsApi->keyChangesAssessmentScoreRangeLearningStandards: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiAssessmentScoreRangeLearningStandardKeyChange[]**](../Model/TrackedChangesEdFiAssessmentScoreRangeLearningStandardKeyChange.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postAssessmentScoreRangeLearningStandard()`

```php
postAssessmentScoreRangeLearningStandard($ed_fi_assessment_score_range_learning_standard)
```

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update). Clients should NOT include the resource \"id\" in the JSON body because it will result in an error. The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately. It is recommended to use POST for both create and update except while updating natural key of a resource in which case PUT operation must be used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\AssessmentScoreRangeLearningStandardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ed_fi_assessment_score_range_learning_standard = new \Resources\Model\EdFiAssessmentScoreRangeLearningStandard(); // \Resources\Model\EdFiAssessmentScoreRangeLearningStandard | The JSON representation of the \"assessmentScoreRangeLearningStandard\" resource to be created or updated.

try {
    $apiInstance->postAssessmentScoreRangeLearningStandard($ed_fi_assessment_score_range_learning_standard);
} catch (Exception $e) {
    echo 'Exception when calling AssessmentScoreRangeLearningStandardsApi->postAssessmentScoreRangeLearningStandard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ed_fi_assessment_score_range_learning_standard** | [**\Resources\Model\EdFiAssessmentScoreRangeLearningStandard**](../Model/EdFiAssessmentScoreRangeLearningStandard.md)| The JSON representation of the \&quot;assessmentScoreRangeLearningStandard\&quot; resource to be created or updated. | |

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

## `putAssessmentScoreRangeLearningStandard()`

```php
putAssessmentScoreRangeLearningStandard($id, $ed_fi_assessment_score_range_learning_standard, $if_match)
```

Updates a resource based on the resource identifier.

The PUT operation is used to update a resource by identifier. If the resource identifier (\"id\") is provided in the JSON body, it will be ignored. Additionally, this API resource is not configured for cascading natural key updates. Natural key values for this resource cannot be changed using PUT operation, so the recommendation is to use POST as that supports upsert behavior.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\AssessmentScoreRangeLearningStandardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$ed_fi_assessment_score_range_learning_standard = new \Resources\Model\EdFiAssessmentScoreRangeLearningStandard(); // \Resources\Model\EdFiAssessmentScoreRangeLearningStandard | The JSON representation of the \"assessmentScoreRangeLearningStandard\" resource to be created or updated.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try {
    $apiInstance->putAssessmentScoreRangeLearningStandard($id, $ed_fi_assessment_score_range_learning_standard, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling AssessmentScoreRangeLearningStandardsApi->putAssessmentScoreRangeLearningStandard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **ed_fi_assessment_score_range_learning_standard** | [**\Resources\Model\EdFiAssessmentScoreRangeLearningStandard**](../Model/EdFiAssessmentScoreRangeLearningStandard.md)| The JSON representation of the \&quot;assessmentScoreRangeLearningStandard\&quot; resource to be created or updated. | |
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
