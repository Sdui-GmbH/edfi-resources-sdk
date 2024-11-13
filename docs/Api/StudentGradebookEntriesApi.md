# Resources\StudentGradebookEntriesApi

All URIs are relative to https://api.ed-fi.org:443/v7.1/api/data/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteStudentGradebookEntryById()**](StudentGradebookEntriesApi.md#deleteStudentGradebookEntryById) | **DELETE** /ed-fi/studentGradebookEntries/{id} | Deletes an existing resource using the resource identifier. |
| [**deletesStudentGradebookEntries()**](StudentGradebookEntriesApi.md#deletesStudentGradebookEntries) | **GET** /ed-fi/studentGradebookEntries/deletes | Retrieves deleted resources based on change version. |
| [**getStudentGradebookEntries()**](StudentGradebookEntriesApi.md#getStudentGradebookEntries) | **GET** /ed-fi/studentGradebookEntries | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern). |
| [**getStudentGradebookEntriesById()**](StudentGradebookEntriesApi.md#getStudentGradebookEntriesById) | **GET** /ed-fi/studentGradebookEntries/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern). |
| [**keyChangesStudentGradebookEntries()**](StudentGradebookEntriesApi.md#keyChangesStudentGradebookEntries) | **GET** /ed-fi/studentGradebookEntries/keyChanges | Retrieves resources key changes based on change version. |
| [**postStudentGradebookEntry()**](StudentGradebookEntriesApi.md#postStudentGradebookEntry) | **POST** /ed-fi/studentGradebookEntries | Creates or updates resources based on the natural key values of the supplied resource. |
| [**putStudentGradebookEntry()**](StudentGradebookEntriesApi.md#putStudentGradebookEntry) | **PUT** /ed-fi/studentGradebookEntries/{id} | Updates a resource based on the resource identifier. |


## `deleteStudentGradebookEntryById()`

```php
deleteStudentGradebookEntryById($id, $if_match)
```

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier. If the resource doesn't exist, an error will result (the resource will not be found).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentGradebookEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try {
    $apiInstance->deleteStudentGradebookEntryById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StudentGradebookEntriesApi->deleteStudentGradebookEntryById: ', $e->getMessage(), PHP_EOL;
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

## `deletesStudentGradebookEntries()`

```php
deletesStudentGradebookEntries($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiStudentGradebookEntryDelete[]
```

Retrieves deleted resources based on change version.

This operation is used to retrieve identifying information about resources that have been deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentGradebookEntriesApi(
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
    $result = $apiInstance->deletesStudentGradebookEntries($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentGradebookEntriesApi->deletesStudentGradebookEntries: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiStudentGradebookEntryDelete[]**](../Model/TrackedChangesEdFiStudentGradebookEntryDelete.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStudentGradebookEntries()`

```php
getStudentGradebookEntries($offset, $limit, $min_change_version, $max_change_version, $total_count, $gradebook_entry_identifier, $namespace, $student_unique_id, $assignment_late_status_descriptor, $competency_level_descriptor, $submission_status_descriptor, $date_fulfilled, $diagnostic_statement, $id, $letter_grade_earned, $numeric_grade_earned, $points_earned, $time_fulfilled, $use_snapshot): \Resources\Model\EdFiStudentGradebookEntry[]
```

Retrieves specific resources using the resource's property values (using the \"Get\" pattern).

This GET operation provides access to resources using the \"Get\" search pattern.  The values of any properties of the resource that are specified will be used to return all matching results (if it exists).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentGradebookEntriesApi(
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
$gradebook_entry_identifier = 'gradebook_entry_identifier_example'; // string | A unique number or alphanumeric code assigned to a gradebook entry by the source system.
$namespace = 'namespace_example'; // string | Namespace URI for the source of the gradebook entry.
$student_unique_id = 'student_unique_id_example'; // string | A unique alphanumeric code assigned to a student.
$assignment_late_status_descriptor = 'assignment_late_status_descriptor_example'; // string | Status of whether the assignment was submitted after the due date and/or marked as.
$competency_level_descriptor = 'competency_level_descriptor_example'; // string | The competency level assessed for the student for the referenced learning objective.
$submission_status_descriptor = 'submission_status_descriptor_example'; // string | The status of the student's submission.
$date_fulfilled = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date an assignment was turned in or the date of an assessment.
$diagnostic_statement = 'diagnostic_statement_example'; // string | A statement provided by the teacher that provides information in addition to the grade or assessment score.
$id = 'id_example'; // string | 
$letter_grade_earned = 'letter_grade_earned_example'; // string | A final or interim (grading period) indicator of student performance in a class as submitted by the instructor.
$numeric_grade_earned = 3.4; // float | A final or interim (grading period) indicator of student performance in a class as submitted by the instructor.
$points_earned = 3.4; // float | The points earned for the submission. With extra credit, the points earned may exceed the max points.
$time_fulfilled = 'time_fulfilled_example'; // string | The time an assignment was turned in on the date fulfilled.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getStudentGradebookEntries($offset, $limit, $min_change_version, $max_change_version, $total_count, $gradebook_entry_identifier, $namespace, $student_unique_id, $assignment_late_status_descriptor, $competency_level_descriptor, $submission_status_descriptor, $date_fulfilled, $diagnostic_statement, $id, $letter_grade_earned, $numeric_grade_earned, $points_earned, $time_fulfilled, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentGradebookEntriesApi->getStudentGradebookEntries: ', $e->getMessage(), PHP_EOL;
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
| **gradebook_entry_identifier** | **string**| A unique number or alphanumeric code assigned to a gradebook entry by the source system. | [optional] |
| **namespace** | **string**| Namespace URI for the source of the gradebook entry. | [optional] |
| **student_unique_id** | **string**| A unique alphanumeric code assigned to a student. | [optional] |
| **assignment_late_status_descriptor** | **string**| Status of whether the assignment was submitted after the due date and/or marked as. | [optional] |
| **competency_level_descriptor** | **string**| The competency level assessed for the student for the referenced learning objective. | [optional] |
| **submission_status_descriptor** | **string**| The status of the student&#39;s submission. | [optional] |
| **date_fulfilled** | **\DateTime**| The date an assignment was turned in or the date of an assessment. | [optional] |
| **diagnostic_statement** | **string**| A statement provided by the teacher that provides information in addition to the grade or assessment score. | [optional] |
| **id** | **string**|  | [optional] |
| **letter_grade_earned** | **string**| A final or interim (grading period) indicator of student performance in a class as submitted by the instructor. | [optional] |
| **numeric_grade_earned** | **float**| A final or interim (grading period) indicator of student performance in a class as submitted by the instructor. | [optional] |
| **points_earned** | **float**| The points earned for the submission. With extra credit, the points earned may exceed the max points. | [optional] |
| **time_fulfilled** | **string**| The time an assignment was turned in on the date fulfilled. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiStudentGradebookEntry[]**](../Model/EdFiStudentGradebookEntry.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStudentGradebookEntriesById()`

```php
getStudentGradebookEntriesById($id, $if_none_match, $use_snapshot): \Resources\Model\EdFiStudentGradebookEntry
```

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentGradebookEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_none_match = 'if_none_match_example'; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getStudentGradebookEntriesById($id, $if_none_match, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentGradebookEntriesApi->getStudentGradebookEntriesById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiStudentGradebookEntry**](../Model/EdFiStudentGradebookEntry.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `keyChangesStudentGradebookEntries()`

```php
keyChangesStudentGradebookEntries($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiStudentGradebookEntryKeyChange[]
```

Retrieves resources key changes based on change version.

This operation is used to retrieve identifying information about resources whose key values have been changed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentGradebookEntriesApi(
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
    $result = $apiInstance->keyChangesStudentGradebookEntries($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentGradebookEntriesApi->keyChangesStudentGradebookEntries: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiStudentGradebookEntryKeyChange[]**](../Model/TrackedChangesEdFiStudentGradebookEntryKeyChange.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postStudentGradebookEntry()`

```php
postStudentGradebookEntry($ed_fi_student_gradebook_entry)
```

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update). Clients should NOT include the resource \"id\" in the JSON body because it will result in an error. The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately. It is recommended to use POST for both create and update except while updating natural key of a resource in which case PUT operation must be used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentGradebookEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ed_fi_student_gradebook_entry = new \Resources\Model\EdFiStudentGradebookEntry(); // \Resources\Model\EdFiStudentGradebookEntry | The JSON representation of the \"studentGradebookEntry\" resource to be created or updated.

try {
    $apiInstance->postStudentGradebookEntry($ed_fi_student_gradebook_entry);
} catch (Exception $e) {
    echo 'Exception when calling StudentGradebookEntriesApi->postStudentGradebookEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ed_fi_student_gradebook_entry** | [**\Resources\Model\EdFiStudentGradebookEntry**](../Model/EdFiStudentGradebookEntry.md)| The JSON representation of the \&quot;studentGradebookEntry\&quot; resource to be created or updated. | |

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

## `putStudentGradebookEntry()`

```php
putStudentGradebookEntry($id, $ed_fi_student_gradebook_entry, $if_match)
```

Updates a resource based on the resource identifier.

The PUT operation is used to update a resource by identifier. If the resource identifier (\"id\") is provided in the JSON body, it will be ignored. Additionally, this API resource is not configured for cascading natural key updates. Natural key values for this resource cannot be changed using PUT operation, so the recommendation is to use POST as that supports upsert behavior.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentGradebookEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$ed_fi_student_gradebook_entry = new \Resources\Model\EdFiStudentGradebookEntry(); // \Resources\Model\EdFiStudentGradebookEntry | The JSON representation of the \"studentGradebookEntry\" resource to be created or updated.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try {
    $apiInstance->putStudentGradebookEntry($id, $ed_fi_student_gradebook_entry, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StudentGradebookEntriesApi->putStudentGradebookEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **ed_fi_student_gradebook_entry** | [**\Resources\Model\EdFiStudentGradebookEntry**](../Model/EdFiStudentGradebookEntry.md)| The JSON representation of the \&quot;studentGradebookEntry\&quot; resource to be created or updated. | |
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
