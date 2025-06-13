# Resources\StudentProgramEvaluationsApi

All URIs are relative to https://api.ed-fi.org:443/v7.3/api/data/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteStudentProgramEvaluationById()**](StudentProgramEvaluationsApi.md#deleteStudentProgramEvaluationById) | **DELETE** /ed-fi/studentProgramEvaluations/{id} | Deletes an existing resource using the resource identifier. |
| [**deletesStudentProgramEvaluations()**](StudentProgramEvaluationsApi.md#deletesStudentProgramEvaluations) | **GET** /ed-fi/studentProgramEvaluations/deletes | Retrieves deleted resources based on change version. |
| [**getStudentProgramEvaluations()**](StudentProgramEvaluationsApi.md#getStudentProgramEvaluations) | **GET** /ed-fi/studentProgramEvaluations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern). |
| [**getStudentProgramEvaluationsById()**](StudentProgramEvaluationsApi.md#getStudentProgramEvaluationsById) | **GET** /ed-fi/studentProgramEvaluations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern). |
| [**getStudentProgramEvaluationsPartitions()**](StudentProgramEvaluationsApi.md#getStudentProgramEvaluationsPartitions) | **GET** /ed-fi/studentProgramEvaluations/partitions | Retrieves a set of page tokens to be used for efficient client-side parallel processing. |
| [**keyChangesStudentProgramEvaluations()**](StudentProgramEvaluationsApi.md#keyChangesStudentProgramEvaluations) | **GET** /ed-fi/studentProgramEvaluations/keyChanges | Retrieves resources key changes based on change version. |
| [**postStudentProgramEvaluation()**](StudentProgramEvaluationsApi.md#postStudentProgramEvaluation) | **POST** /ed-fi/studentProgramEvaluations | Creates or updates resources based on the natural key values of the supplied resource. |
| [**putStudentProgramEvaluation()**](StudentProgramEvaluationsApi.md#putStudentProgramEvaluation) | **PUT** /ed-fi/studentProgramEvaluations/{id} | Updates a resource based on the resource identifier. |


## `deleteStudentProgramEvaluationById()`

```php
deleteStudentProgramEvaluationById($id, $if_match)
```

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier. If the resource doesn't exist, an error will result (the resource will not be found).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentProgramEvaluationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try {
    $apiInstance->deleteStudentProgramEvaluationById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StudentProgramEvaluationsApi->deleteStudentProgramEvaluationById: ', $e->getMessage(), PHP_EOL;
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

## `deletesStudentProgramEvaluations()`

```php
deletesStudentProgramEvaluations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiStudentProgramEvaluationDelete[]
```

Retrieves deleted resources based on change version.

This operation is used to retrieve identifying information about resources that have been deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentProgramEvaluationsApi(
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
    $result = $apiInstance->deletesStudentProgramEvaluations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentProgramEvaluationsApi->deletesStudentProgramEvaluations: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiStudentProgramEvaluationDelete[]**](../Model/TrackedChangesEdFiStudentProgramEvaluationDelete.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStudentProgramEvaluations()`

```php
getStudentProgramEvaluations($offset, $limit, $page_token, $page_size, $min_change_version, $max_change_version, $total_count, $evaluation_date, $program_education_organization_id, $program_evaluation_period_descriptor, $program_evaluation_title, $program_evaluation_type_descriptor, $program_name, $program_type_descriptor, $student_unique_id, $education_organization_id, $staff_evaluator_staff_unique_id, $summary_evaluation_rating_level_descriptor, $evaluation_duration, $id, $summary_evaluation_comment, $summary_evaluation_numeric_rating, $use_snapshot): \Resources\Model\EdFiStudentProgramEvaluation[]
```

Retrieves specific resources using the resource's property values (using the \"Get\" pattern).

This GET operation provides access to resources using the \"Get\" search pattern.  The values of any properties of the resource that are specified will be used to return all matching results (if it exists).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentProgramEvaluationsApi(
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
$evaluation_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The month, day, and year on which the evaluation was conducted.
$program_education_organization_id = 56; // int | The identifier assigned to an education organization.
$program_evaluation_period_descriptor = 'program_evaluation_period_descriptor_example'; // string | The name of the period for the program evaluation.
$program_evaluation_title = 'program_evaluation_title_example'; // string | An assigned unique identifier for the student program evaluation.
$program_evaluation_type_descriptor = 'program_evaluation_type_descriptor_example'; // string | The type of program evaluation conducted.
$program_name = 'program_name_example'; // string | The formal name of the program of instruction, training, services, or benefits available through federal, state, or local agencies.
$program_type_descriptor = 'program_type_descriptor_example'; // string | The type of program.
$student_unique_id = 'student_unique_id_example'; // string | A unique alphanumeric code assigned to a student.
$education_organization_id = 56; // int | The identifier assigned to an education organization.
$staff_evaluator_staff_unique_id = 'staff_evaluator_staff_unique_id_example'; // string | A unique alphanumeric code assigned to a staffevaluatorstaff.
$summary_evaluation_rating_level_descriptor = 'summary_evaluation_rating_level_descriptor_example'; // string | The summary rating level achieved based upon the rating or score.
$evaluation_duration = 56; // int | The actual number of minutes to conduct the evaluation.
$id = 'id_example'; // string | 
$summary_evaluation_comment = 'summary_evaluation_comment_example'; // string | Any comments about the summary evaluation to be captured.
$summary_evaluation_numeric_rating = 3.4; // float | The numerical summary rating or score for the evaluation.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getStudentProgramEvaluations($offset, $limit, $page_token, $page_size, $min_change_version, $max_change_version, $total_count, $evaluation_date, $program_education_organization_id, $program_evaluation_period_descriptor, $program_evaluation_title, $program_evaluation_type_descriptor, $program_name, $program_type_descriptor, $student_unique_id, $education_organization_id, $staff_evaluator_staff_unique_id, $summary_evaluation_rating_level_descriptor, $evaluation_duration, $id, $summary_evaluation_comment, $summary_evaluation_numeric_rating, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentProgramEvaluationsApi->getStudentProgramEvaluations: ', $e->getMessage(), PHP_EOL;
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
| **evaluation_date** | **\DateTime**| The month, day, and year on which the evaluation was conducted. | [optional] |
| **program_education_organization_id** | **int**| The identifier assigned to an education organization. | [optional] |
| **program_evaluation_period_descriptor** | **string**| The name of the period for the program evaluation. | [optional] |
| **program_evaluation_title** | **string**| An assigned unique identifier for the student program evaluation. | [optional] |
| **program_evaluation_type_descriptor** | **string**| The type of program evaluation conducted. | [optional] |
| **program_name** | **string**| The formal name of the program of instruction, training, services, or benefits available through federal, state, or local agencies. | [optional] |
| **program_type_descriptor** | **string**| The type of program. | [optional] |
| **student_unique_id** | **string**| A unique alphanumeric code assigned to a student. | [optional] |
| **education_organization_id** | **int**| The identifier assigned to an education organization. | [optional] |
| **staff_evaluator_staff_unique_id** | **string**| A unique alphanumeric code assigned to a staffevaluatorstaff. | [optional] |
| **summary_evaluation_rating_level_descriptor** | **string**| The summary rating level achieved based upon the rating or score. | [optional] |
| **evaluation_duration** | **int**| The actual number of minutes to conduct the evaluation. | [optional] |
| **id** | **string**|  | [optional] |
| **summary_evaluation_comment** | **string**| Any comments about the summary evaluation to be captured. | [optional] |
| **summary_evaluation_numeric_rating** | **float**| The numerical summary rating or score for the evaluation. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiStudentProgramEvaluation[]**](../Model/EdFiStudentProgramEvaluation.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStudentProgramEvaluationsById()`

```php
getStudentProgramEvaluationsById($id, $if_none_match, $use_snapshot): \Resources\Model\EdFiStudentProgramEvaluation
```

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentProgramEvaluationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_none_match = 'if_none_match_example'; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getStudentProgramEvaluationsById($id, $if_none_match, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentProgramEvaluationsApi->getStudentProgramEvaluationsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiStudentProgramEvaluation**](../Model/EdFiStudentProgramEvaluation.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStudentProgramEvaluationsPartitions()`

```php
getStudentProgramEvaluationsPartitions($number, $min_change_version, $max_change_version, $evaluation_date, $program_education_organization_id, $program_evaluation_period_descriptor, $program_evaluation_title, $program_evaluation_type_descriptor, $program_name, $program_type_descriptor, $student_unique_id, $education_organization_id, $staff_evaluator_staff_unique_id, $summary_evaluation_rating_level_descriptor, $evaluation_duration, $id, $summary_evaluation_comment, $summary_evaluation_numeric_rating, $use_snapshot): \Resources\Model\GetAcademicWeeksPartitions200Response
```

Retrieves a set of page tokens to be used for efficient client-side parallel processing.

Computes an evenly distributed set of partitions over the accessible data and returns a set of page tokens, each representing the first page of one of the partitions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentProgramEvaluationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$number = 56; // int | The number of evenly distributed partitions to provide for client-side parallel processing. If unspecified, a reasonable set of partitions will be determined based on the total number of accessible items.
$min_change_version = 56; // int | Used in synchronization to set sequence minimum ChangeVersion
$max_change_version = 56; // int | Used in synchronization to set sequence maximum ChangeVersion
$evaluation_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The month, day, and year on which the evaluation was conducted.
$program_education_organization_id = 56; // int | The identifier assigned to an education organization.
$program_evaluation_period_descriptor = 'program_evaluation_period_descriptor_example'; // string | The name of the period for the program evaluation.
$program_evaluation_title = 'program_evaluation_title_example'; // string | An assigned unique identifier for the student program evaluation.
$program_evaluation_type_descriptor = 'program_evaluation_type_descriptor_example'; // string | The type of program evaluation conducted.
$program_name = 'program_name_example'; // string | The formal name of the program of instruction, training, services, or benefits available through federal, state, or local agencies.
$program_type_descriptor = 'program_type_descriptor_example'; // string | The type of program.
$student_unique_id = 'student_unique_id_example'; // string | A unique alphanumeric code assigned to a student.
$education_organization_id = 56; // int | The identifier assigned to an education organization.
$staff_evaluator_staff_unique_id = 'staff_evaluator_staff_unique_id_example'; // string | A unique alphanumeric code assigned to a staffevaluatorstaff.
$summary_evaluation_rating_level_descriptor = 'summary_evaluation_rating_level_descriptor_example'; // string | The summary rating level achieved based upon the rating or score.
$evaluation_duration = 56; // int | The actual number of minutes to conduct the evaluation.
$id = 'id_example'; // string | 
$summary_evaluation_comment = 'summary_evaluation_comment_example'; // string | Any comments about the summary evaluation to be captured.
$summary_evaluation_numeric_rating = 3.4; // float | The numerical summary rating or score for the evaluation.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getStudentProgramEvaluationsPartitions($number, $min_change_version, $max_change_version, $evaluation_date, $program_education_organization_id, $program_evaluation_period_descriptor, $program_evaluation_title, $program_evaluation_type_descriptor, $program_name, $program_type_descriptor, $student_unique_id, $education_organization_id, $staff_evaluator_staff_unique_id, $summary_evaluation_rating_level_descriptor, $evaluation_duration, $id, $summary_evaluation_comment, $summary_evaluation_numeric_rating, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentProgramEvaluationsApi->getStudentProgramEvaluationsPartitions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **number** | **int**| The number of evenly distributed partitions to provide for client-side parallel processing. If unspecified, a reasonable set of partitions will be determined based on the total number of accessible items. | [optional] |
| **min_change_version** | **int**| Used in synchronization to set sequence minimum ChangeVersion | [optional] |
| **max_change_version** | **int**| Used in synchronization to set sequence maximum ChangeVersion | [optional] |
| **evaluation_date** | **\DateTime**| The month, day, and year on which the evaluation was conducted. | [optional] |
| **program_education_organization_id** | **int**| The identifier assigned to an education organization. | [optional] |
| **program_evaluation_period_descriptor** | **string**| The name of the period for the program evaluation. | [optional] |
| **program_evaluation_title** | **string**| An assigned unique identifier for the student program evaluation. | [optional] |
| **program_evaluation_type_descriptor** | **string**| The type of program evaluation conducted. | [optional] |
| **program_name** | **string**| The formal name of the program of instruction, training, services, or benefits available through federal, state, or local agencies. | [optional] |
| **program_type_descriptor** | **string**| The type of program. | [optional] |
| **student_unique_id** | **string**| A unique alphanumeric code assigned to a student. | [optional] |
| **education_organization_id** | **int**| The identifier assigned to an education organization. | [optional] |
| **staff_evaluator_staff_unique_id** | **string**| A unique alphanumeric code assigned to a staffevaluatorstaff. | [optional] |
| **summary_evaluation_rating_level_descriptor** | **string**| The summary rating level achieved based upon the rating or score. | [optional] |
| **evaluation_duration** | **int**| The actual number of minutes to conduct the evaluation. | [optional] |
| **id** | **string**|  | [optional] |
| **summary_evaluation_comment** | **string**| Any comments about the summary evaluation to be captured. | [optional] |
| **summary_evaluation_numeric_rating** | **float**| The numerical summary rating or score for the evaluation. | [optional] |
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

## `keyChangesStudentProgramEvaluations()`

```php
keyChangesStudentProgramEvaluations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiStudentProgramEvaluationKeyChange[]
```

Retrieves resources key changes based on change version.

This operation is used to retrieve identifying information about resources whose key values have been changed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentProgramEvaluationsApi(
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
    $result = $apiInstance->keyChangesStudentProgramEvaluations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentProgramEvaluationsApi->keyChangesStudentProgramEvaluations: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiStudentProgramEvaluationKeyChange[]**](../Model/TrackedChangesEdFiStudentProgramEvaluationKeyChange.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postStudentProgramEvaluation()`

```php
postStudentProgramEvaluation($ed_fi_student_program_evaluation)
```

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update). Clients should NOT include the resource \"id\" in the JSON body because it will result in an error. The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately. It is recommended to use POST for both create and update except while updating natural key of a resource in which case PUT operation must be used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentProgramEvaluationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ed_fi_student_program_evaluation = new \Resources\Model\EdFiStudentProgramEvaluation(); // \Resources\Model\EdFiStudentProgramEvaluation | The JSON representation of the \"studentProgramEvaluation\" resource to be created or updated.

try {
    $apiInstance->postStudentProgramEvaluation($ed_fi_student_program_evaluation);
} catch (Exception $e) {
    echo 'Exception when calling StudentProgramEvaluationsApi->postStudentProgramEvaluation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ed_fi_student_program_evaluation** | [**\Resources\Model\EdFiStudentProgramEvaluation**](../Model/EdFiStudentProgramEvaluation.md)| The JSON representation of the \&quot;studentProgramEvaluation\&quot; resource to be created or updated. | |

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

## `putStudentProgramEvaluation()`

```php
putStudentProgramEvaluation($id, $ed_fi_student_program_evaluation, $if_match)
```

Updates a resource based on the resource identifier.

The PUT operation is used to update a resource by identifier. If the resource identifier (\"id\") is provided in the JSON body, it will be ignored. Additionally, this API resource is not configured for cascading natural key updates. Natural key values for this resource cannot be changed using PUT operation, so the recommendation is to use POST as that supports upsert behavior.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentProgramEvaluationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$ed_fi_student_program_evaluation = new \Resources\Model\EdFiStudentProgramEvaluation(); // \Resources\Model\EdFiStudentProgramEvaluation | The JSON representation of the \"studentProgramEvaluation\" resource to be created or updated.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try {
    $apiInstance->putStudentProgramEvaluation($id, $ed_fi_student_program_evaluation, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StudentProgramEvaluationsApi->putStudentProgramEvaluation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **ed_fi_student_program_evaluation** | [**\Resources\Model\EdFiStudentProgramEvaluation**](../Model/EdFiStudentProgramEvaluation.md)| The JSON representation of the \&quot;studentProgramEvaluation\&quot; resource to be created or updated. | |
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
