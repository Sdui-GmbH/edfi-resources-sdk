# OpenAPI\Client\SectionsApi

All URIs are relative to https://api.ed-fi.org:443/v7.1/api/data/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteSectionById()**](SectionsApi.md#deleteSectionById) | **DELETE** /ed-fi/sections/{id} | Deletes an existing resource using the resource identifier. |
| [**deletesSections()**](SectionsApi.md#deletesSections) | **GET** /ed-fi/sections/deletes | Retrieves deleted resources based on change version. |
| [**getSections()**](SectionsApi.md#getSections) | **GET** /ed-fi/sections | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern). |
| [**getSectionsById()**](SectionsApi.md#getSectionsById) | **GET** /ed-fi/sections/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern). |
| [**keyChangesSections()**](SectionsApi.md#keyChangesSections) | **GET** /ed-fi/sections/keyChanges | Retrieves resources key changes based on change version. |
| [**postSection()**](SectionsApi.md#postSection) | **POST** /ed-fi/sections | Creates or updates resources based on the natural key values of the supplied resource. |
| [**putSection()**](SectionsApi.md#putSection) | **PUT** /ed-fi/sections/{id} | Updates a resource based on the resource identifier. |


## `deleteSectionById()`

```php
deleteSectionById($id, $if_match)
```

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier. If the resource doesn't exist, an error will result (the resource will not be found).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try {
    $apiInstance->deleteSectionById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling SectionsApi->deleteSectionById: ', $e->getMessage(), PHP_EOL;
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

## `deletesSections()`

```php
deletesSections($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \OpenAPI\Client\Model\TrackedChangesEdFiSectionDelete[]
```

Retrieves deleted resources based on change version.

This operation is used to retrieve identifying information about resources that have been deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SectionsApi(
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
    $result = $apiInstance->deletesSections($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SectionsApi->deletesSections: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\TrackedChangesEdFiSectionDelete[]**](../Model/TrackedChangesEdFiSectionDelete.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSections()`

```php
getSections($offset, $limit, $min_change_version, $max_change_version, $total_count, $section_identifier, $local_course_code, $school_id, $school_year, $session_name, $location_classroom_identification_code, $location_school_id, $available_credit_type_descriptor, $educational_environment_descriptor, $instruction_language_descriptor, $medium_of_instruction_descriptor, $population_served_descriptor, $section_type_descriptor, $available_credit_conversion, $available_credits, $id, $official_attendance_period, $section_name, $sequence_of_course, $use_snapshot): \OpenAPI\Client\Model\EdFiSection[]
```

Retrieves specific resources using the resource's property values (using the \"Get\" pattern).

This GET operation provides access to resources using the \"Get\" search pattern.  The values of any properties of the resource that are specified will be used to return all matching results (if it exists).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SectionsApi(
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
$section_identifier = 'section_identifier_example'; // string | The local identifier assigned to a section.
$local_course_code = 'local_course_code_example'; // string | The local code assigned by the School that identifies the course offering provided for the instruction of students.
$school_id = 56; // int | The identifier assigned to a school.
$school_year = 56; // int | The identifier for the school year.
$session_name = 'session_name_example'; // string | The identifier for the calendar for the academic session.
$location_classroom_identification_code = 'location_classroom_identification_code_example'; // string | A unique number or alphanumeric code assigned to a room by a school, school system, state, or other agency or entity.
$location_school_id = 56; // int | The identifier assigned to a school.
$available_credit_type_descriptor = 'available_credit_type_descriptor_example'; // string | The type of credits or units of value awarded for the completion of a course.
$educational_environment_descriptor = 'educational_environment_descriptor_example'; // string | The setting in which a student receives education and related services.
$instruction_language_descriptor = 'instruction_language_descriptor_example'; // string | The primary language of instruction. If omitted, English is assumed.
$medium_of_instruction_descriptor = 'medium_of_instruction_descriptor_example'; // string | The media through which teachers provide instruction to students and students and teachers communicate about instructional matters.
$population_served_descriptor = 'population_served_descriptor_example'; // string | The type of students the section is offered and tailored to.
$section_type_descriptor = 'section_type_descriptor_example'; // string | Specifies whether the section is for attendance only, credit only, or both.
$available_credit_conversion = 3.4; // float | Conversion factor that when multiplied by the number of credits is equivalent to Carnegie units.
$available_credits = 3.4; // float | The value of credits or units of value awarded for the completion of a course.
$id = 'id_example'; // string | 
$official_attendance_period = True; // bool | Indicator of whether this section is used for official daily attendance. Alternatively, official daily attendance may be tied to a class period.
$section_name = 'section_name_example'; // string | A locally-defined name for the section, generally created to make the section more recognizable in informal contexts and generally distinct from the section identifier.
$sequence_of_course = 56; // int | When a section is part of a sequence of parts for a course, the number of the sequence. If the course has only one part, the value of this section attribute should be 1.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getSections($offset, $limit, $min_change_version, $max_change_version, $total_count, $section_identifier, $local_course_code, $school_id, $school_year, $session_name, $location_classroom_identification_code, $location_school_id, $available_credit_type_descriptor, $educational_environment_descriptor, $instruction_language_descriptor, $medium_of_instruction_descriptor, $population_served_descriptor, $section_type_descriptor, $available_credit_conversion, $available_credits, $id, $official_attendance_period, $section_name, $sequence_of_course, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SectionsApi->getSections: ', $e->getMessage(), PHP_EOL;
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
| **section_identifier** | **string**| The local identifier assigned to a section. | [optional] |
| **local_course_code** | **string**| The local code assigned by the School that identifies the course offering provided for the instruction of students. | [optional] |
| **school_id** | **int**| The identifier assigned to a school. | [optional] |
| **school_year** | **int**| The identifier for the school year. | [optional] |
| **session_name** | **string**| The identifier for the calendar for the academic session. | [optional] |
| **location_classroom_identification_code** | **string**| A unique number or alphanumeric code assigned to a room by a school, school system, state, or other agency or entity. | [optional] |
| **location_school_id** | **int**| The identifier assigned to a school. | [optional] |
| **available_credit_type_descriptor** | **string**| The type of credits or units of value awarded for the completion of a course. | [optional] |
| **educational_environment_descriptor** | **string**| The setting in which a student receives education and related services. | [optional] |
| **instruction_language_descriptor** | **string**| The primary language of instruction. If omitted, English is assumed. | [optional] |
| **medium_of_instruction_descriptor** | **string**| The media through which teachers provide instruction to students and students and teachers communicate about instructional matters. | [optional] |
| **population_served_descriptor** | **string**| The type of students the section is offered and tailored to. | [optional] |
| **section_type_descriptor** | **string**| Specifies whether the section is for attendance only, credit only, or both. | [optional] |
| **available_credit_conversion** | **float**| Conversion factor that when multiplied by the number of credits is equivalent to Carnegie units. | [optional] |
| **available_credits** | **float**| The value of credits or units of value awarded for the completion of a course. | [optional] |
| **id** | **string**|  | [optional] |
| **official_attendance_period** | **bool**| Indicator of whether this section is used for official daily attendance. Alternatively, official daily attendance may be tied to a class period. | [optional] |
| **section_name** | **string**| A locally-defined name for the section, generally created to make the section more recognizable in informal contexts and generally distinct from the section identifier. | [optional] |
| **sequence_of_course** | **int**| When a section is part of a sequence of parts for a course, the number of the sequence. If the course has only one part, the value of this section attribute should be 1. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\EdFiSection[]**](../Model/EdFiSection.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSectionsById()`

```php
getSectionsById($id, $if_none_match, $use_snapshot): \OpenAPI\Client\Model\EdFiSection
```

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_none_match = 'if_none_match_example'; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getSectionsById($id, $if_none_match, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SectionsApi->getSectionsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\EdFiSection**](../Model/EdFiSection.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `keyChangesSections()`

```php
keyChangesSections($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \OpenAPI\Client\Model\TrackedChangesEdFiSectionKeyChange[]
```

Retrieves resources key changes based on change version.

This operation is used to retrieve identifying information about resources whose key values have been changed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SectionsApi(
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
    $result = $apiInstance->keyChangesSections($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SectionsApi->keyChangesSections: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\TrackedChangesEdFiSectionKeyChange[]**](../Model/TrackedChangesEdFiSectionKeyChange.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postSection()`

```php
postSection($ed_fi_section)
```

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update). Clients should NOT include the resource \"id\" in the JSON body because it will result in an error. The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately. It is recommended to use POST for both create and update except while updating natural key of a resource in which case PUT operation must be used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ed_fi_section = new \OpenAPI\Client\Model\EdFiSection(); // \OpenAPI\Client\Model\EdFiSection | The JSON representation of the \"section\" resource to be created or updated.

try {
    $apiInstance->postSection($ed_fi_section);
} catch (Exception $e) {
    echo 'Exception when calling SectionsApi->postSection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ed_fi_section** | [**\OpenAPI\Client\Model\EdFiSection**](../Model/EdFiSection.md)| The JSON representation of the \&quot;section\&quot; resource to be created or updated. | |

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

## `putSection()`

```php
putSection($id, $ed_fi_section, $if_match)
```

Updates a resource based on the resource identifier.

The PUT operation is used to update a resource by identifier. If the resource identifier (\"id\") is provided in the JSON body, it will be ignored. Additionally, if natural key values are being updated by the JSON body, those changes will be applied to the resource and will also cascade through to dependent resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$ed_fi_section = new \OpenAPI\Client\Model\EdFiSection(); // \OpenAPI\Client\Model\EdFiSection | The JSON representation of the \"section\" resource to be created or updated.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try {
    $apiInstance->putSection($id, $ed_fi_section, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling SectionsApi->putSection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **ed_fi_section** | [**\OpenAPI\Client\Model\EdFiSection**](../Model/EdFiSection.md)| The JSON representation of the \&quot;section\&quot; resource to be created or updated. | |
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
