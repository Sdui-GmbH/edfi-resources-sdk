# Resources\GradebookEntriesApi

All URIs are relative to https://api.ed-fi.org:443/v7.2/api/data/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteGradebookEntryById()**](GradebookEntriesApi.md#deleteGradebookEntryById) | **DELETE** /ed-fi/gradebookEntries/{id} | Deletes an existing resource using the resource identifier. |
| [**deletesGradebookEntries()**](GradebookEntriesApi.md#deletesGradebookEntries) | **GET** /ed-fi/gradebookEntries/deletes | Retrieves deleted resources based on change version. |
| [**getGradebookEntries()**](GradebookEntriesApi.md#getGradebookEntries) | **GET** /ed-fi/gradebookEntries | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern). |
| [**getGradebookEntriesById()**](GradebookEntriesApi.md#getGradebookEntriesById) | **GET** /ed-fi/gradebookEntries/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern). |
| [**keyChangesGradebookEntries()**](GradebookEntriesApi.md#keyChangesGradebookEntries) | **GET** /ed-fi/gradebookEntries/keyChanges | Retrieves resources key changes based on change version. |
| [**postGradebookEntry()**](GradebookEntriesApi.md#postGradebookEntry) | **POST** /ed-fi/gradebookEntries | Creates or updates resources based on the natural key values of the supplied resource. |
| [**putGradebookEntry()**](GradebookEntriesApi.md#putGradebookEntry) | **PUT** /ed-fi/gradebookEntries/{id} | Updates a resource based on the resource identifier. |


## `deleteGradebookEntryById()`

```php
deleteGradebookEntryById($id, $if_match)
```

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier. If the resource doesn't exist, an error will result (the resource will not be found).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\GradebookEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try {
    $apiInstance->deleteGradebookEntryById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling GradebookEntriesApi->deleteGradebookEntryById: ', $e->getMessage(), PHP_EOL;
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

## `deletesGradebookEntries()`

```php
deletesGradebookEntries($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiGradebookEntryDelete[]
```

Retrieves deleted resources based on change version.

This operation is used to retrieve identifying information about resources that have been deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\GradebookEntriesApi(
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
    $result = $apiInstance->deletesGradebookEntries($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GradebookEntriesApi->deletesGradebookEntries: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiGradebookEntryDelete[]**](../Model/TrackedChangesEdFiGradebookEntryDelete.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGradebookEntries()`

```php
getGradebookEntries($offset, $limit, $min_change_version, $max_change_version, $total_count, $gradebook_entry_identifier, $namespace, $grading_period_descriptor, $grading_period_name, $school_id, $school_year, $local_course_code, $section_identifier, $session_name, $gradebook_entry_type_descriptor, $date_assigned, $description, $due_date, $due_time, $id, $max_points, $source_section_identifier, $title, $use_snapshot): \Resources\Model\EdFiGradebookEntry[]
```

Retrieves specific resources using the resource's property values (using the \"Get\" pattern).

This GET operation provides access to resources using the \"Get\" search pattern.  The values of any properties of the resource that are specified will be used to return all matching results (if it exists).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\GradebookEntriesApi(
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
$grading_period_descriptor = 'grading_period_descriptor_example'; // string | The state's name of the period for which grades are reported.
$grading_period_name = 'grading_period_name_example'; // string | The school's descriptive name of the grading period.
$school_id = 56; // int | The identifier assigned to a school. It must be distinct from any other identifier assigned to educational organizations, such as a LocalEducationAgencyId, to prevent duplication.
$school_year = 56; // int | The identifier for the school year.
$local_course_code = 'local_course_code_example'; // string | The local code assigned by the School that identifies the course offering provided for the instruction of students.
$section_identifier = 'section_identifier_example'; // string | The local identifier assigned to a section.
$session_name = 'session_name_example'; // string | The identifier for the calendar for the academic session.
$gradebook_entry_type_descriptor = 'gradebook_entry_type_descriptor_example'; // string | The type of the gradebook entry.
$date_assigned = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date the assignment, homework, or assessment was assigned or executed.
$description = 'description_example'; // string | A description of the assignment, homework, or classroom assessment.
$due_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date the assignment, homework, or assessment is due.
$due_time = 'due_time_example'; // string | The time the assignment, homework, or assessment is due.
$id = 'id_example'; // string | 
$max_points = 3.4; // float | The maximum number of points  that can be earned for the submission.
$source_section_identifier = 'source_section_identifier_example'; // string | The local identifier assigned to a section.
$title = 'title_example'; // string | The name or title of the activity to be recorded in the gradebook entry.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getGradebookEntries($offset, $limit, $min_change_version, $max_change_version, $total_count, $gradebook_entry_identifier, $namespace, $grading_period_descriptor, $grading_period_name, $school_id, $school_year, $local_course_code, $section_identifier, $session_name, $gradebook_entry_type_descriptor, $date_assigned, $description, $due_date, $due_time, $id, $max_points, $source_section_identifier, $title, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GradebookEntriesApi->getGradebookEntries: ', $e->getMessage(), PHP_EOL;
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
| **grading_period_descriptor** | **string**| The state&#39;s name of the period for which grades are reported. | [optional] |
| **grading_period_name** | **string**| The school&#39;s descriptive name of the grading period. | [optional] |
| **school_id** | **int**| The identifier assigned to a school. It must be distinct from any other identifier assigned to educational organizations, such as a LocalEducationAgencyId, to prevent duplication. | [optional] |
| **school_year** | **int**| The identifier for the school year. | [optional] |
| **local_course_code** | **string**| The local code assigned by the School that identifies the course offering provided for the instruction of students. | [optional] |
| **section_identifier** | **string**| The local identifier assigned to a section. | [optional] |
| **session_name** | **string**| The identifier for the calendar for the academic session. | [optional] |
| **gradebook_entry_type_descriptor** | **string**| The type of the gradebook entry. | [optional] |
| **date_assigned** | **\DateTime**| The date the assignment, homework, or assessment was assigned or executed. | [optional] |
| **description** | **string**| A description of the assignment, homework, or classroom assessment. | [optional] |
| **due_date** | **\DateTime**| The date the assignment, homework, or assessment is due. | [optional] |
| **due_time** | **string**| The time the assignment, homework, or assessment is due. | [optional] |
| **id** | **string**|  | [optional] |
| **max_points** | **float**| The maximum number of points  that can be earned for the submission. | [optional] |
| **source_section_identifier** | **string**| The local identifier assigned to a section. | [optional] |
| **title** | **string**| The name or title of the activity to be recorded in the gradebook entry. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiGradebookEntry[]**](../Model/EdFiGradebookEntry.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGradebookEntriesById()`

```php
getGradebookEntriesById($id, $if_none_match, $use_snapshot): \Resources\Model\EdFiGradebookEntry
```

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\GradebookEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_none_match = 'if_none_match_example'; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getGradebookEntriesById($id, $if_none_match, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GradebookEntriesApi->getGradebookEntriesById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiGradebookEntry**](../Model/EdFiGradebookEntry.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `keyChangesGradebookEntries()`

```php
keyChangesGradebookEntries($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiGradebookEntryKeyChange[]
```

Retrieves resources key changes based on change version.

This operation is used to retrieve identifying information about resources whose key values have been changed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\GradebookEntriesApi(
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
    $result = $apiInstance->keyChangesGradebookEntries($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GradebookEntriesApi->keyChangesGradebookEntries: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiGradebookEntryKeyChange[]**](../Model/TrackedChangesEdFiGradebookEntryKeyChange.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postGradebookEntry()`

```php
postGradebookEntry($ed_fi_gradebook_entry)
```

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update). Clients should NOT include the resource \"id\" in the JSON body because it will result in an error. The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately. It is recommended to use POST for both create and update except while updating natural key of a resource in which case PUT operation must be used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\GradebookEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ed_fi_gradebook_entry = new \Resources\Model\EdFiGradebookEntry(); // \Resources\Model\EdFiGradebookEntry | The JSON representation of the \"gradebookEntry\" resource to be created or updated.

try {
    $apiInstance->postGradebookEntry($ed_fi_gradebook_entry);
} catch (Exception $e) {
    echo 'Exception when calling GradebookEntriesApi->postGradebookEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ed_fi_gradebook_entry** | [**\Resources\Model\EdFiGradebookEntry**](../Model/EdFiGradebookEntry.md)| The JSON representation of the \&quot;gradebookEntry\&quot; resource to be created or updated. | |

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

## `putGradebookEntry()`

```php
putGradebookEntry($id, $ed_fi_gradebook_entry, $if_match)
```

Updates a resource based on the resource identifier.

The PUT operation is used to update a resource by identifier. If the resource identifier (\"id\") is provided in the JSON body, it will be ignored. Additionally, if natural key values are being updated by the JSON body, those changes will be applied to the resource and will also cascade through to dependent resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\GradebookEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$ed_fi_gradebook_entry = new \Resources\Model\EdFiGradebookEntry(); // \Resources\Model\EdFiGradebookEntry | The JSON representation of the \"gradebookEntry\" resource to be created or updated.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try {
    $apiInstance->putGradebookEntry($id, $ed_fi_gradebook_entry, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling GradebookEntriesApi->putGradebookEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **ed_fi_gradebook_entry** | [**\Resources\Model\EdFiGradebookEntry**](../Model/EdFiGradebookEntry.md)| The JSON representation of the \&quot;gradebookEntry\&quot; resource to be created or updated. | |
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
