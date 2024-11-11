# Resources\StudentProgramAttendanceEventsApi

All URIs are relative to https://api.ed-fi.org:443/v7.1/api/data/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteStudentProgramAttendanceEventById()**](StudentProgramAttendanceEventsApi.md#deleteStudentProgramAttendanceEventById) | **DELETE** /ed-fi/studentProgramAttendanceEvents/{id} | Deletes an existing resource using the resource identifier. |
| [**deletesStudentProgramAttendanceEvents()**](StudentProgramAttendanceEventsApi.md#deletesStudentProgramAttendanceEvents) | **GET** /ed-fi/studentProgramAttendanceEvents/deletes | Retrieves deleted resources based on change version. |
| [**getStudentProgramAttendanceEvents()**](StudentProgramAttendanceEventsApi.md#getStudentProgramAttendanceEvents) | **GET** /ed-fi/studentProgramAttendanceEvents | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern). |
| [**getStudentProgramAttendanceEventsById()**](StudentProgramAttendanceEventsApi.md#getStudentProgramAttendanceEventsById) | **GET** /ed-fi/studentProgramAttendanceEvents/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern). |
| [**keyChangesStudentProgramAttendanceEvents()**](StudentProgramAttendanceEventsApi.md#keyChangesStudentProgramAttendanceEvents) | **GET** /ed-fi/studentProgramAttendanceEvents/keyChanges | Retrieves resources key changes based on change version. |
| [**postStudentProgramAttendanceEvent()**](StudentProgramAttendanceEventsApi.md#postStudentProgramAttendanceEvent) | **POST** /ed-fi/studentProgramAttendanceEvents | Creates or updates resources based on the natural key values of the supplied resource. |
| [**putStudentProgramAttendanceEvent()**](StudentProgramAttendanceEventsApi.md#putStudentProgramAttendanceEvent) | **PUT** /ed-fi/studentProgramAttendanceEvents/{id} | Updates a resource based on the resource identifier. |


## `deleteStudentProgramAttendanceEventById()`

```php
deleteStudentProgramAttendanceEventById($id, $if_match)
```

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier. If the resource doesn't exist, an error will result (the resource will not be found).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentProgramAttendanceEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try {
    $apiInstance->deleteStudentProgramAttendanceEventById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StudentProgramAttendanceEventsApi->deleteStudentProgramAttendanceEventById: ', $e->getMessage(), PHP_EOL;
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

## `deletesStudentProgramAttendanceEvents()`

```php
deletesStudentProgramAttendanceEvents($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiStudentProgramAttendanceEventDelete[]
```

Retrieves deleted resources based on change version.

This operation is used to retrieve identifying information about resources that have been deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentProgramAttendanceEventsApi(
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
    $result = $apiInstance->deletesStudentProgramAttendanceEvents($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentProgramAttendanceEventsApi->deletesStudentProgramAttendanceEvents: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiStudentProgramAttendanceEventDelete[]**](../Model/TrackedChangesEdFiStudentProgramAttendanceEventDelete.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStudentProgramAttendanceEvents()`

```php
getStudentProgramAttendanceEvents($offset, $limit, $min_change_version, $max_change_version, $total_count, $attendance_event_category_descriptor, $event_date, $education_organization_id, $program_education_organization_id, $program_name, $program_type_descriptor, $student_unique_id, $educational_environment_descriptor, $attendance_event_reason, $event_duration, $id, $program_attendance_duration, $use_snapshot): \Resources\Model\EdFiStudentProgramAttendanceEvent[]
```

Retrieves specific resources using the resource's property values (using the \"Get\" pattern).

This GET operation provides access to resources using the \"Get\" search pattern.  The values of any properties of the resource that are specified will be used to return all matching results (if it exists).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentProgramAttendanceEventsApi(
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
$attendance_event_category_descriptor = 'attendance_event_category_descriptor_example'; // string | A code describing the attendance event, for example:         Present         Unexcused absence         Excused absence         Tardy.
$event_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date for this attendance event.
$education_organization_id = 56; // int | The identifier assigned to an education organization.
$program_education_organization_id = 56; // int | The identifier assigned to an education organization.
$program_name = 'program_name_example'; // string | The formal name of the program of instruction, training, services, or benefits available through federal, state, or local agencies.
$program_type_descriptor = 'program_type_descriptor_example'; // string | The type of program.
$student_unique_id = 'student_unique_id_example'; // string | A unique alphanumeric code assigned to a student.
$educational_environment_descriptor = 'educational_environment_descriptor_example'; // string | The setting in which a child receives education and related services. This attribute is only used if it differs from the EducationalEnvironment of the Section. This is only used in the AttendanceEvent if different from the associated Section.
$attendance_event_reason = 'attendance_event_reason_example'; // string | The reported reason for a student's absence.
$event_duration = 3.4; // float | The amount of time for the event as recognized by the school: 1 day = 1, 1/2 day = 0.5, 1/3 day = 0.33.
$id = 'id_example'; // string | 
$program_attendance_duration = 56; // int | The duration in minutes of the program attendance event.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getStudentProgramAttendanceEvents($offset, $limit, $min_change_version, $max_change_version, $total_count, $attendance_event_category_descriptor, $event_date, $education_organization_id, $program_education_organization_id, $program_name, $program_type_descriptor, $student_unique_id, $educational_environment_descriptor, $attendance_event_reason, $event_duration, $id, $program_attendance_duration, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentProgramAttendanceEventsApi->getStudentProgramAttendanceEvents: ', $e->getMessage(), PHP_EOL;
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
| **attendance_event_category_descriptor** | **string**| A code describing the attendance event, for example:         Present         Unexcused absence         Excused absence         Tardy. | [optional] |
| **event_date** | **\DateTime**| Date for this attendance event. | [optional] |
| **education_organization_id** | **int**| The identifier assigned to an education organization. | [optional] |
| **program_education_organization_id** | **int**| The identifier assigned to an education organization. | [optional] |
| **program_name** | **string**| The formal name of the program of instruction, training, services, or benefits available through federal, state, or local agencies. | [optional] |
| **program_type_descriptor** | **string**| The type of program. | [optional] |
| **student_unique_id** | **string**| A unique alphanumeric code assigned to a student. | [optional] |
| **educational_environment_descriptor** | **string**| The setting in which a child receives education and related services. This attribute is only used if it differs from the EducationalEnvironment of the Section. This is only used in the AttendanceEvent if different from the associated Section. | [optional] |
| **attendance_event_reason** | **string**| The reported reason for a student&#39;s absence. | [optional] |
| **event_duration** | **float**| The amount of time for the event as recognized by the school: 1 day &#x3D; 1, 1/2 day &#x3D; 0.5, 1/3 day &#x3D; 0.33. | [optional] |
| **id** | **string**|  | [optional] |
| **program_attendance_duration** | **int**| The duration in minutes of the program attendance event. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiStudentProgramAttendanceEvent[]**](../Model/EdFiStudentProgramAttendanceEvent.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStudentProgramAttendanceEventsById()`

```php
getStudentProgramAttendanceEventsById($id, $if_none_match, $use_snapshot): \Resources\Model\EdFiStudentProgramAttendanceEvent
```

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentProgramAttendanceEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_none_match = 'if_none_match_example'; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getStudentProgramAttendanceEventsById($id, $if_none_match, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentProgramAttendanceEventsApi->getStudentProgramAttendanceEventsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiStudentProgramAttendanceEvent**](../Model/EdFiStudentProgramAttendanceEvent.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `keyChangesStudentProgramAttendanceEvents()`

```php
keyChangesStudentProgramAttendanceEvents($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiStudentProgramAttendanceEventKeyChange[]
```

Retrieves resources key changes based on change version.

This operation is used to retrieve identifying information about resources whose key values have been changed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentProgramAttendanceEventsApi(
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
    $result = $apiInstance->keyChangesStudentProgramAttendanceEvents($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentProgramAttendanceEventsApi->keyChangesStudentProgramAttendanceEvents: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiStudentProgramAttendanceEventKeyChange[]**](../Model/TrackedChangesEdFiStudentProgramAttendanceEventKeyChange.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postStudentProgramAttendanceEvent()`

```php
postStudentProgramAttendanceEvent($ed_fi_student_program_attendance_event)
```

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update). Clients should NOT include the resource \"id\" in the JSON body because it will result in an error. The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately. It is recommended to use POST for both create and update except while updating natural key of a resource in which case PUT operation must be used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentProgramAttendanceEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ed_fi_student_program_attendance_event = new \Resources\Model\EdFiStudentProgramAttendanceEvent(); // \Resources\Model\EdFiStudentProgramAttendanceEvent | The JSON representation of the \"studentProgramAttendanceEvent\" resource to be created or updated.

try {
    $apiInstance->postStudentProgramAttendanceEvent($ed_fi_student_program_attendance_event);
} catch (Exception $e) {
    echo 'Exception when calling StudentProgramAttendanceEventsApi->postStudentProgramAttendanceEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ed_fi_student_program_attendance_event** | [**\Resources\Model\EdFiStudentProgramAttendanceEvent**](../Model/EdFiStudentProgramAttendanceEvent.md)| The JSON representation of the \&quot;studentProgramAttendanceEvent\&quot; resource to be created or updated. | |

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

## `putStudentProgramAttendanceEvent()`

```php
putStudentProgramAttendanceEvent($id, $ed_fi_student_program_attendance_event, $if_match)
```

Updates a resource based on the resource identifier.

The PUT operation is used to update a resource by identifier. If the resource identifier (\"id\") is provided in the JSON body, it will be ignored. Additionally, this API resource is not configured for cascading natural key updates. Natural key values for this resource cannot be changed using PUT operation, so the recommendation is to use POST as that supports upsert behavior.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentProgramAttendanceEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$ed_fi_student_program_attendance_event = new \Resources\Model\EdFiStudentProgramAttendanceEvent(); // \Resources\Model\EdFiStudentProgramAttendanceEvent | The JSON representation of the \"studentProgramAttendanceEvent\" resource to be created or updated.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try {
    $apiInstance->putStudentProgramAttendanceEvent($id, $ed_fi_student_program_attendance_event, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StudentProgramAttendanceEventsApi->putStudentProgramAttendanceEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **ed_fi_student_program_attendance_event** | [**\Resources\Model\EdFiStudentProgramAttendanceEvent**](../Model/EdFiStudentProgramAttendanceEvent.md)| The JSON representation of the \&quot;studentProgramAttendanceEvent\&quot; resource to be created or updated. | |
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
