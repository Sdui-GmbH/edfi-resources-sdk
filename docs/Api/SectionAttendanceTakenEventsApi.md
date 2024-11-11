# Resources\SectionAttendanceTakenEventsApi

All URIs are relative to https://api.ed-fi.org:443/v7.1/api/data/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteSectionAttendanceTakenEventById()**](SectionAttendanceTakenEventsApi.md#deleteSectionAttendanceTakenEventById) | **DELETE** /ed-fi/sectionAttendanceTakenEvents/{id} | Deletes an existing resource using the resource identifier. |
| [**deletesSectionAttendanceTakenEvents()**](SectionAttendanceTakenEventsApi.md#deletesSectionAttendanceTakenEvents) | **GET** /ed-fi/sectionAttendanceTakenEvents/deletes | Retrieves deleted resources based on change version. |
| [**getSectionAttendanceTakenEvents()**](SectionAttendanceTakenEventsApi.md#getSectionAttendanceTakenEvents) | **GET** /ed-fi/sectionAttendanceTakenEvents | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern). |
| [**getSectionAttendanceTakenEventsById()**](SectionAttendanceTakenEventsApi.md#getSectionAttendanceTakenEventsById) | **GET** /ed-fi/sectionAttendanceTakenEvents/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern). |
| [**keyChangesSectionAttendanceTakenEvents()**](SectionAttendanceTakenEventsApi.md#keyChangesSectionAttendanceTakenEvents) | **GET** /ed-fi/sectionAttendanceTakenEvents/keyChanges | Retrieves resources key changes based on change version. |
| [**postSectionAttendanceTakenEvent()**](SectionAttendanceTakenEventsApi.md#postSectionAttendanceTakenEvent) | **POST** /ed-fi/sectionAttendanceTakenEvents | Creates or updates resources based on the natural key values of the supplied resource. |
| [**putSectionAttendanceTakenEvent()**](SectionAttendanceTakenEventsApi.md#putSectionAttendanceTakenEvent) | **PUT** /ed-fi/sectionAttendanceTakenEvents/{id} | Updates a resource based on the resource identifier. |


## `deleteSectionAttendanceTakenEventById()`

```php
deleteSectionAttendanceTakenEventById($id, $if_match)
```

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier. If the resource doesn't exist, an error will result (the resource will not be found).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\SectionAttendanceTakenEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try {
    $apiInstance->deleteSectionAttendanceTakenEventById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling SectionAttendanceTakenEventsApi->deleteSectionAttendanceTakenEventById: ', $e->getMessage(), PHP_EOL;
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

## `deletesSectionAttendanceTakenEvents()`

```php
deletesSectionAttendanceTakenEvents($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiSectionAttendanceTakenEventDelete[]
```

Retrieves deleted resources based on change version.

This operation is used to retrieve identifying information about resources that have been deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\SectionAttendanceTakenEventsApi(
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
    $result = $apiInstance->deletesSectionAttendanceTakenEvents($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SectionAttendanceTakenEventsApi->deletesSectionAttendanceTakenEvents: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiSectionAttendanceTakenEventDelete[]**](../Model/TrackedChangesEdFiSectionAttendanceTakenEventDelete.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSectionAttendanceTakenEvents()`

```php
getSectionAttendanceTakenEvents($offset, $limit, $min_change_version, $max_change_version, $total_count, $calendar_code, $date, $school_id, $school_year, $local_course_code, $section_identifier, $session_name, $staff_unique_id, $event_date, $id, $use_snapshot): \Resources\Model\EdFiSectionAttendanceTakenEvent[]
```

Retrieves specific resources using the resource's property values (using the \"Get\" pattern).

This GET operation provides access to resources using the \"Get\" search pattern.  The values of any properties of the resource that are specified will be used to return all matching results (if it exists).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\SectionAttendanceTakenEventsApi(
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
$calendar_code = 'calendar_code_example'; // string | The identifier for the calendar.
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The month, day, and year of the calendar event.
$school_id = 56; // int | The identifier assigned to a school.
$school_year = 56; // int | The identifier for the school year.
$local_course_code = 'local_course_code_example'; // string | The local code assigned by the School that identifies the course offering provided for the instruction of students.
$section_identifier = 'section_identifier_example'; // string | The local identifier assigned to a section.
$session_name = 'session_name_example'; // string | The identifier for the calendar for the academic session.
$staff_unique_id = 'staff_unique_id_example'; // string | A unique alphanumeric code assigned to a staff.
$event_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date the section attendance taken event was submitted, which could be a different date than the instructional day.
$id = 'id_example'; // string | 
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getSectionAttendanceTakenEvents($offset, $limit, $min_change_version, $max_change_version, $total_count, $calendar_code, $date, $school_id, $school_year, $local_course_code, $section_identifier, $session_name, $staff_unique_id, $event_date, $id, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SectionAttendanceTakenEventsApi->getSectionAttendanceTakenEvents: ', $e->getMessage(), PHP_EOL;
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
| **calendar_code** | **string**| The identifier for the calendar. | [optional] |
| **date** | **\DateTime**| The month, day, and year of the calendar event. | [optional] |
| **school_id** | **int**| The identifier assigned to a school. | [optional] |
| **school_year** | **int**| The identifier for the school year. | [optional] |
| **local_course_code** | **string**| The local code assigned by the School that identifies the course offering provided for the instruction of students. | [optional] |
| **section_identifier** | **string**| The local identifier assigned to a section. | [optional] |
| **session_name** | **string**| The identifier for the calendar for the academic session. | [optional] |
| **staff_unique_id** | **string**| A unique alphanumeric code assigned to a staff. | [optional] |
| **event_date** | **\DateTime**| The date the section attendance taken event was submitted, which could be a different date than the instructional day. | [optional] |
| **id** | **string**|  | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiSectionAttendanceTakenEvent[]**](../Model/EdFiSectionAttendanceTakenEvent.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSectionAttendanceTakenEventsById()`

```php
getSectionAttendanceTakenEventsById($id, $if_none_match, $use_snapshot): \Resources\Model\EdFiSectionAttendanceTakenEvent
```

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\SectionAttendanceTakenEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_none_match = 'if_none_match_example'; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getSectionAttendanceTakenEventsById($id, $if_none_match, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SectionAttendanceTakenEventsApi->getSectionAttendanceTakenEventsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiSectionAttendanceTakenEvent**](../Model/EdFiSectionAttendanceTakenEvent.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `keyChangesSectionAttendanceTakenEvents()`

```php
keyChangesSectionAttendanceTakenEvents($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiSectionAttendanceTakenEventKeyChange[]
```

Retrieves resources key changes based on change version.

This operation is used to retrieve identifying information about resources whose key values have been changed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\SectionAttendanceTakenEventsApi(
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
    $result = $apiInstance->keyChangesSectionAttendanceTakenEvents($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SectionAttendanceTakenEventsApi->keyChangesSectionAttendanceTakenEvents: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiSectionAttendanceTakenEventKeyChange[]**](../Model/TrackedChangesEdFiSectionAttendanceTakenEventKeyChange.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postSectionAttendanceTakenEvent()`

```php
postSectionAttendanceTakenEvent($ed_fi_section_attendance_taken_event)
```

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update). Clients should NOT include the resource \"id\" in the JSON body because it will result in an error. The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately. It is recommended to use POST for both create and update except while updating natural key of a resource in which case PUT operation must be used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\SectionAttendanceTakenEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ed_fi_section_attendance_taken_event = new \Resources\Model\EdFiSectionAttendanceTakenEvent(); // \Resources\Model\EdFiSectionAttendanceTakenEvent | The JSON representation of the \"sectionAttendanceTakenEvent\" resource to be created or updated.

try {
    $apiInstance->postSectionAttendanceTakenEvent($ed_fi_section_attendance_taken_event);
} catch (Exception $e) {
    echo 'Exception when calling SectionAttendanceTakenEventsApi->postSectionAttendanceTakenEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ed_fi_section_attendance_taken_event** | [**\Resources\Model\EdFiSectionAttendanceTakenEvent**](../Model/EdFiSectionAttendanceTakenEvent.md)| The JSON representation of the \&quot;sectionAttendanceTakenEvent\&quot; resource to be created or updated. | |

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

## `putSectionAttendanceTakenEvent()`

```php
putSectionAttendanceTakenEvent($id, $ed_fi_section_attendance_taken_event, $if_match)
```

Updates a resource based on the resource identifier.

The PUT operation is used to update a resource by identifier. If the resource identifier (\"id\") is provided in the JSON body, it will be ignored. Additionally, this API resource is not configured for cascading natural key updates. Natural key values for this resource cannot be changed using PUT operation, so the recommendation is to use POST as that supports upsert behavior.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\SectionAttendanceTakenEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$ed_fi_section_attendance_taken_event = new \Resources\Model\EdFiSectionAttendanceTakenEvent(); // \Resources\Model\EdFiSectionAttendanceTakenEvent | The JSON representation of the \"sectionAttendanceTakenEvent\" resource to be created or updated.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try {
    $apiInstance->putSectionAttendanceTakenEvent($id, $ed_fi_section_attendance_taken_event, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling SectionAttendanceTakenEventsApi->putSectionAttendanceTakenEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **ed_fi_section_attendance_taken_event** | [**\Resources\Model\EdFiSectionAttendanceTakenEvent**](../Model/EdFiSectionAttendanceTakenEvent.md)| The JSON representation of the \&quot;sectionAttendanceTakenEvent\&quot; resource to be created or updated. | |
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
