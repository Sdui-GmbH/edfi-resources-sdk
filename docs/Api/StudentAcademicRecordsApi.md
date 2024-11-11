# Resources\StudentAcademicRecordsApi

All URIs are relative to https://api.ed-fi.org:443/v7.1/api/data/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteStudentAcademicRecordById()**](StudentAcademicRecordsApi.md#deleteStudentAcademicRecordById) | **DELETE** /ed-fi/studentAcademicRecords/{id} | Deletes an existing resource using the resource identifier. |
| [**deletesStudentAcademicRecords()**](StudentAcademicRecordsApi.md#deletesStudentAcademicRecords) | **GET** /ed-fi/studentAcademicRecords/deletes | Retrieves deleted resources based on change version. |
| [**getStudentAcademicRecords()**](StudentAcademicRecordsApi.md#getStudentAcademicRecords) | **GET** /ed-fi/studentAcademicRecords | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern). |
| [**getStudentAcademicRecordsById()**](StudentAcademicRecordsApi.md#getStudentAcademicRecordsById) | **GET** /ed-fi/studentAcademicRecords/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern). |
| [**keyChangesStudentAcademicRecords()**](StudentAcademicRecordsApi.md#keyChangesStudentAcademicRecords) | **GET** /ed-fi/studentAcademicRecords/keyChanges | Retrieves resources key changes based on change version. |
| [**postStudentAcademicRecord()**](StudentAcademicRecordsApi.md#postStudentAcademicRecord) | **POST** /ed-fi/studentAcademicRecords | Creates or updates resources based on the natural key values of the supplied resource. |
| [**putStudentAcademicRecord()**](StudentAcademicRecordsApi.md#putStudentAcademicRecord) | **PUT** /ed-fi/studentAcademicRecords/{id} | Updates a resource based on the resource identifier. |


## `deleteStudentAcademicRecordById()`

```php
deleteStudentAcademicRecordById($id, $if_match)
```

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier. If the resource doesn't exist, an error will result (the resource will not be found).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentAcademicRecordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try {
    $apiInstance->deleteStudentAcademicRecordById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StudentAcademicRecordsApi->deleteStudentAcademicRecordById: ', $e->getMessage(), PHP_EOL;
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

## `deletesStudentAcademicRecords()`

```php
deletesStudentAcademicRecords($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiStudentAcademicRecordDelete[]
```

Retrieves deleted resources based on change version.

This operation is used to retrieve identifying information about resources that have been deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentAcademicRecordsApi(
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
    $result = $apiInstance->deletesStudentAcademicRecords($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentAcademicRecordsApi->deletesStudentAcademicRecords: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiStudentAcademicRecordDelete[]**](../Model/TrackedChangesEdFiStudentAcademicRecordDelete.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStudentAcademicRecords()`

```php
getStudentAcademicRecords($offset, $limit, $min_change_version, $max_change_version, $total_count, $term_descriptor, $education_organization_id, $school_year, $student_unique_id, $cumulative_earned_credit_type_descriptor, $cumulative_attempted_credit_type_descriptor, $session_earned_credit_type_descriptor, $session_attempted_credit_type_descriptor, $cumulative_attempted_credit_conversion, $cumulative_attempted_credits, $cumulative_earned_credit_conversion, $cumulative_earned_credits, $id, $projected_graduation_date, $session_attempted_credit_conversion, $session_attempted_credits, $session_earned_credit_conversion, $session_earned_credits, $use_snapshot): \Resources\Model\EdFiStudentAcademicRecord[]
```

Retrieves specific resources using the resource's property values (using the \"Get\" pattern).

This GET operation provides access to resources using the \"Get\" search pattern.  The values of any properties of the resource that are specified will be used to return all matching results (if it exists).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentAcademicRecordsApi(
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
$term_descriptor = 'term_descriptor_example'; // string | The term for the session during the school year.
$education_organization_id = 56; // int | The identifier assigned to an education organization.
$school_year = 56; // int | The identifier for the school year.
$student_unique_id = 'student_unique_id_example'; // string | A unique alphanumeric code assigned to a student.
$cumulative_earned_credit_type_descriptor = 'cumulative_earned_credit_type_descriptor_example'; // string | The type of credits or units of value awarded for the completion of a course.
$cumulative_attempted_credit_type_descriptor = 'cumulative_attempted_credit_type_descriptor_example'; // string | The type of credits or units of value awarded for the completion of a course.
$session_earned_credit_type_descriptor = 'session_earned_credit_type_descriptor_example'; // string | The type of credits or units of value awarded for the completion of a course.
$session_attempted_credit_type_descriptor = 'session_attempted_credit_type_descriptor_example'; // string | The type of credits or units of value awarded for the completion of a course.
$cumulative_attempted_credit_conversion = 3.4; // float | Conversion factor that when multiplied by the number of credits is equivalent to Carnegie units.
$cumulative_attempted_credits = 3.4; // float | The value of credits or units of value awarded for the completion of a course.
$cumulative_earned_credit_conversion = 3.4; // float | Conversion factor that when multiplied by the number of credits is equivalent to Carnegie units.
$cumulative_earned_credits = 3.4; // float | The value of credits or units of value awarded for the completion of a course.
$id = 'id_example'; // string | 
$projected_graduation_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The month and year the student is projected to graduate.
$session_attempted_credit_conversion = 3.4; // float | Conversion factor that when multiplied by the number of credits is equivalent to Carnegie units.
$session_attempted_credits = 3.4; // float | The value of credits or units of value awarded for the completion of a course.
$session_earned_credit_conversion = 3.4; // float | Conversion factor that when multiplied by the number of credits is equivalent to Carnegie units.
$session_earned_credits = 3.4; // float | The value of credits or units of value awarded for the completion of a course.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getStudentAcademicRecords($offset, $limit, $min_change_version, $max_change_version, $total_count, $term_descriptor, $education_organization_id, $school_year, $student_unique_id, $cumulative_earned_credit_type_descriptor, $cumulative_attempted_credit_type_descriptor, $session_earned_credit_type_descriptor, $session_attempted_credit_type_descriptor, $cumulative_attempted_credit_conversion, $cumulative_attempted_credits, $cumulative_earned_credit_conversion, $cumulative_earned_credits, $id, $projected_graduation_date, $session_attempted_credit_conversion, $session_attempted_credits, $session_earned_credit_conversion, $session_earned_credits, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentAcademicRecordsApi->getStudentAcademicRecords: ', $e->getMessage(), PHP_EOL;
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
| **term_descriptor** | **string**| The term for the session during the school year. | [optional] |
| **education_organization_id** | **int**| The identifier assigned to an education organization. | [optional] |
| **school_year** | **int**| The identifier for the school year. | [optional] |
| **student_unique_id** | **string**| A unique alphanumeric code assigned to a student. | [optional] |
| **cumulative_earned_credit_type_descriptor** | **string**| The type of credits or units of value awarded for the completion of a course. | [optional] |
| **cumulative_attempted_credit_type_descriptor** | **string**| The type of credits or units of value awarded for the completion of a course. | [optional] |
| **session_earned_credit_type_descriptor** | **string**| The type of credits or units of value awarded for the completion of a course. | [optional] |
| **session_attempted_credit_type_descriptor** | **string**| The type of credits or units of value awarded for the completion of a course. | [optional] |
| **cumulative_attempted_credit_conversion** | **float**| Conversion factor that when multiplied by the number of credits is equivalent to Carnegie units. | [optional] |
| **cumulative_attempted_credits** | **float**| The value of credits or units of value awarded for the completion of a course. | [optional] |
| **cumulative_earned_credit_conversion** | **float**| Conversion factor that when multiplied by the number of credits is equivalent to Carnegie units. | [optional] |
| **cumulative_earned_credits** | **float**| The value of credits or units of value awarded for the completion of a course. | [optional] |
| **id** | **string**|  | [optional] |
| **projected_graduation_date** | **\DateTime**| The month and year the student is projected to graduate. | [optional] |
| **session_attempted_credit_conversion** | **float**| Conversion factor that when multiplied by the number of credits is equivalent to Carnegie units. | [optional] |
| **session_attempted_credits** | **float**| The value of credits or units of value awarded for the completion of a course. | [optional] |
| **session_earned_credit_conversion** | **float**| Conversion factor that when multiplied by the number of credits is equivalent to Carnegie units. | [optional] |
| **session_earned_credits** | **float**| The value of credits or units of value awarded for the completion of a course. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiStudentAcademicRecord[]**](../Model/EdFiStudentAcademicRecord.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStudentAcademicRecordsById()`

```php
getStudentAcademicRecordsById($id, $if_none_match, $use_snapshot): \Resources\Model\EdFiStudentAcademicRecord
```

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentAcademicRecordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_none_match = 'if_none_match_example'; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getStudentAcademicRecordsById($id, $if_none_match, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentAcademicRecordsApi->getStudentAcademicRecordsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiStudentAcademicRecord**](../Model/EdFiStudentAcademicRecord.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `keyChangesStudentAcademicRecords()`

```php
keyChangesStudentAcademicRecords($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiStudentAcademicRecordKeyChange[]
```

Retrieves resources key changes based on change version.

This operation is used to retrieve identifying information about resources whose key values have been changed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentAcademicRecordsApi(
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
    $result = $apiInstance->keyChangesStudentAcademicRecords($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentAcademicRecordsApi->keyChangesStudentAcademicRecords: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiStudentAcademicRecordKeyChange[]**](../Model/TrackedChangesEdFiStudentAcademicRecordKeyChange.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postStudentAcademicRecord()`

```php
postStudentAcademicRecord($ed_fi_student_academic_record)
```

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update). Clients should NOT include the resource \"id\" in the JSON body because it will result in an error. The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately. It is recommended to use POST for both create and update except while updating natural key of a resource in which case PUT operation must be used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentAcademicRecordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ed_fi_student_academic_record = new \Resources\Model\EdFiStudentAcademicRecord(); // \Resources\Model\EdFiStudentAcademicRecord | The JSON representation of the \"studentAcademicRecord\" resource to be created or updated.

try {
    $apiInstance->postStudentAcademicRecord($ed_fi_student_academic_record);
} catch (Exception $e) {
    echo 'Exception when calling StudentAcademicRecordsApi->postStudentAcademicRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ed_fi_student_academic_record** | [**\Resources\Model\EdFiStudentAcademicRecord**](../Model/EdFiStudentAcademicRecord.md)| The JSON representation of the \&quot;studentAcademicRecord\&quot; resource to be created or updated. | |

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

## `putStudentAcademicRecord()`

```php
putStudentAcademicRecord($id, $ed_fi_student_academic_record, $if_match)
```

Updates a resource based on the resource identifier.

The PUT operation is used to update a resource by identifier. If the resource identifier (\"id\") is provided in the JSON body, it will be ignored. Additionally, this API resource is not configured for cascading natural key updates. Natural key values for this resource cannot be changed using PUT operation, so the recommendation is to use POST as that supports upsert behavior.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentAcademicRecordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$ed_fi_student_academic_record = new \Resources\Model\EdFiStudentAcademicRecord(); // \Resources\Model\EdFiStudentAcademicRecord | The JSON representation of the \"studentAcademicRecord\" resource to be created or updated.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try {
    $apiInstance->putStudentAcademicRecord($id, $ed_fi_student_academic_record, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StudentAcademicRecordsApi->putStudentAcademicRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **ed_fi_student_academic_record** | [**\Resources\Model\EdFiStudentAcademicRecord**](../Model/EdFiStudentAcademicRecord.md)| The JSON representation of the \&quot;studentAcademicRecord\&quot; resource to be created or updated. | |
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
