# Resources\StudentInterventionAttendanceEventsApi

All URIs are relative to https://api.ed-fi.org:443/v7.1/api/data/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteStudentInterventionAttendanceEventById()**](StudentInterventionAttendanceEventsApi.md#deleteStudentInterventionAttendanceEventById) | **DELETE** /ed-fi/studentInterventionAttendanceEvents/{id} | Deletes an existing resource using the resource identifier. |
| [**deletesStudentInterventionAttendanceEvents()**](StudentInterventionAttendanceEventsApi.md#deletesStudentInterventionAttendanceEvents) | **GET** /ed-fi/studentInterventionAttendanceEvents/deletes | Retrieves deleted resources based on change version. |
| [**getStudentInterventionAttendanceEvents()**](StudentInterventionAttendanceEventsApi.md#getStudentInterventionAttendanceEvents) | **GET** /ed-fi/studentInterventionAttendanceEvents | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern). |
| [**getStudentInterventionAttendanceEventsById()**](StudentInterventionAttendanceEventsApi.md#getStudentInterventionAttendanceEventsById) | **GET** /ed-fi/studentInterventionAttendanceEvents/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern). |
| [**keyChangesStudentInterventionAttendanceEvents()**](StudentInterventionAttendanceEventsApi.md#keyChangesStudentInterventionAttendanceEvents) | **GET** /ed-fi/studentInterventionAttendanceEvents/keyChanges | Retrieves resources key changes based on change version. |
| [**postStudentInterventionAttendanceEvent()**](StudentInterventionAttendanceEventsApi.md#postStudentInterventionAttendanceEvent) | **POST** /ed-fi/studentInterventionAttendanceEvents | Creates or updates resources based on the natural key values of the supplied resource. |
| [**putStudentInterventionAttendanceEvent()**](StudentInterventionAttendanceEventsApi.md#putStudentInterventionAttendanceEvent) | **PUT** /ed-fi/studentInterventionAttendanceEvents/{id} | Updates a resource based on the resource identifier. |


## `deleteStudentInterventionAttendanceEventById()`

```php
deleteStudentInterventionAttendanceEventById($id, $if_match)
```

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier. If the resource doesn't exist, an error will result (the resource will not be found).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentInterventionAttendanceEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try {
    $apiInstance->deleteStudentInterventionAttendanceEventById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StudentInterventionAttendanceEventsApi->deleteStudentInterventionAttendanceEventById: ', $e->getMessage(), PHP_EOL;
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

## `deletesStudentInterventionAttendanceEvents()`

```php
deletesStudentInterventionAttendanceEvents($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiStudentInterventionAttendanceEventDelete[]
```

Retrieves deleted resources based on change version.

This operation is used to retrieve identifying information about resources that have been deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentInterventionAttendanceEventsApi(
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
    $result = $apiInstance->deletesStudentInterventionAttendanceEvents($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentInterventionAttendanceEventsApi->deletesStudentInterventionAttendanceEvents: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiStudentInterventionAttendanceEventDelete[]**](../Model/TrackedChangesEdFiStudentInterventionAttendanceEventDelete.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStudentInterventionAttendanceEvents()`

```php
getStudentInterventionAttendanceEvents($offset, $limit, $min_change_version, $max_change_version, $total_count, $attendance_event_category_descriptor, $event_date, $education_organization_id, $intervention_identification_code, $student_unique_id, $educational_environment_descriptor, $attendance_event_reason, $event_duration, $id, $intervention_duration, $use_snapshot): \Resources\Model\EdFiStudentInterventionAttendanceEvent[]
```

Retrieves specific resources using the resource's property values (using the \"Get\" pattern).

This GET operation provides access to resources using the \"Get\" search pattern.  The values of any properties of the resource that are specified will be used to return all matching results (if it exists).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentInterventionAttendanceEventsApi(
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
$intervention_identification_code = 'intervention_identification_code_example'; // string | A unique number or alphanumeric code assigned to an intervention.
$student_unique_id = 'student_unique_id_example'; // string | A unique alphanumeric code assigned to a student.
$educational_environment_descriptor = 'educational_environment_descriptor_example'; // string | The setting in which a child receives education and related services. This attribute is only used if it differs from the EducationalEnvironment of the Section. This is only used in the AttendanceEvent if different from the associated Section.
$attendance_event_reason = 'attendance_event_reason_example'; // string | The reported reason for a student's absence.
$event_duration = 3.4; // float | The amount of time for the event as recognized by the school: 1 day = 1, 1/2 day = 0.5, 1/3 day = 0.33.
$id = 'id_example'; // string | 
$intervention_duration = 56; // int | The duration in minutes in which the student participated in the intervention during this instance.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getStudentInterventionAttendanceEvents($offset, $limit, $min_change_version, $max_change_version, $total_count, $attendance_event_category_descriptor, $event_date, $education_organization_id, $intervention_identification_code, $student_unique_id, $educational_environment_descriptor, $attendance_event_reason, $event_duration, $id, $intervention_duration, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentInterventionAttendanceEventsApi->getStudentInterventionAttendanceEvents: ', $e->getMessage(), PHP_EOL;
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
| **intervention_identification_code** | **string**| A unique number or alphanumeric code assigned to an intervention. | [optional] |
| **student_unique_id** | **string**| A unique alphanumeric code assigned to a student. | [optional] |
| **educational_environment_descriptor** | **string**| The setting in which a child receives education and related services. This attribute is only used if it differs from the EducationalEnvironment of the Section. This is only used in the AttendanceEvent if different from the associated Section. | [optional] |
| **attendance_event_reason** | **string**| The reported reason for a student&#39;s absence. | [optional] |
| **event_duration** | **float**| The amount of time for the event as recognized by the school: 1 day &#x3D; 1, 1/2 day &#x3D; 0.5, 1/3 day &#x3D; 0.33. | [optional] |
| **id** | **string**|  | [optional] |
| **intervention_duration** | **int**| The duration in minutes in which the student participated in the intervention during this instance. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiStudentInterventionAttendanceEvent[]**](../Model/EdFiStudentInterventionAttendanceEvent.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStudentInterventionAttendanceEventsById()`

```php
getStudentInterventionAttendanceEventsById($id, $if_none_match, $use_snapshot): \Resources\Model\EdFiStudentInterventionAttendanceEvent
```

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentInterventionAttendanceEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_none_match = 'if_none_match_example'; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getStudentInterventionAttendanceEventsById($id, $if_none_match, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentInterventionAttendanceEventsApi->getStudentInterventionAttendanceEventsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiStudentInterventionAttendanceEvent**](../Model/EdFiStudentInterventionAttendanceEvent.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `keyChangesStudentInterventionAttendanceEvents()`

```php
keyChangesStudentInterventionAttendanceEvents($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiStudentInterventionAttendanceEventKeyChange[]
```

Retrieves resources key changes based on change version.

This operation is used to retrieve identifying information about resources whose key values have been changed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentInterventionAttendanceEventsApi(
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
    $result = $apiInstance->keyChangesStudentInterventionAttendanceEvents($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentInterventionAttendanceEventsApi->keyChangesStudentInterventionAttendanceEvents: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiStudentInterventionAttendanceEventKeyChange[]**](../Model/TrackedChangesEdFiStudentInterventionAttendanceEventKeyChange.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postStudentInterventionAttendanceEvent()`

```php
postStudentInterventionAttendanceEvent($ed_fi_student_intervention_attendance_event)
```

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update). Clients should NOT include the resource \"id\" in the JSON body because it will result in an error. The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately. It is recommended to use POST for both create and update except while updating natural key of a resource in which case PUT operation must be used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentInterventionAttendanceEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ed_fi_student_intervention_attendance_event = new \Resources\Model\EdFiStudentInterventionAttendanceEvent(); // \Resources\Model\EdFiStudentInterventionAttendanceEvent | The JSON representation of the \"studentInterventionAttendanceEvent\" resource to be created or updated.

try {
    $apiInstance->postStudentInterventionAttendanceEvent($ed_fi_student_intervention_attendance_event);
} catch (Exception $e) {
    echo 'Exception when calling StudentInterventionAttendanceEventsApi->postStudentInterventionAttendanceEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ed_fi_student_intervention_attendance_event** | [**\Resources\Model\EdFiStudentInterventionAttendanceEvent**](../Model/EdFiStudentInterventionAttendanceEvent.md)| The JSON representation of the \&quot;studentInterventionAttendanceEvent\&quot; resource to be created or updated. | |

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

## `putStudentInterventionAttendanceEvent()`

```php
putStudentInterventionAttendanceEvent($id, $ed_fi_student_intervention_attendance_event, $if_match)
```

Updates a resource based on the resource identifier.

The PUT operation is used to update a resource by identifier. If the resource identifier (\"id\") is provided in the JSON body, it will be ignored. Additionally, this API resource is not configured for cascading natural key updates. Natural key values for this resource cannot be changed using PUT operation, so the recommendation is to use POST as that supports upsert behavior.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentInterventionAttendanceEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$ed_fi_student_intervention_attendance_event = new \Resources\Model\EdFiStudentInterventionAttendanceEvent(); // \Resources\Model\EdFiStudentInterventionAttendanceEvent | The JSON representation of the \"studentInterventionAttendanceEvent\" resource to be created or updated.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try {
    $apiInstance->putStudentInterventionAttendanceEvent($id, $ed_fi_student_intervention_attendance_event, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StudentInterventionAttendanceEventsApi->putStudentInterventionAttendanceEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **ed_fi_student_intervention_attendance_event** | [**\Resources\Model\EdFiStudentInterventionAttendanceEvent**](../Model/EdFiStudentInterventionAttendanceEvent.md)| The JSON representation of the \&quot;studentInterventionAttendanceEvent\&quot; resource to be created or updated. | |
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
