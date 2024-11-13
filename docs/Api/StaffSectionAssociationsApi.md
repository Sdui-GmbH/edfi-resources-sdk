# Resources\StaffSectionAssociationsApi

All URIs are relative to https://api.ed-fi.org:443/v7.1/api/data/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteStaffSectionAssociationById()**](StaffSectionAssociationsApi.md#deleteStaffSectionAssociationById) | **DELETE** /ed-fi/staffSectionAssociations/{id} | Deletes an existing resource using the resource identifier. |
| [**deletesStaffSectionAssociations()**](StaffSectionAssociationsApi.md#deletesStaffSectionAssociations) | **GET** /ed-fi/staffSectionAssociations/deletes | Retrieves deleted resources based on change version. |
| [**getStaffSectionAssociations()**](StaffSectionAssociationsApi.md#getStaffSectionAssociations) | **GET** /ed-fi/staffSectionAssociations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern). |
| [**getStaffSectionAssociationsById()**](StaffSectionAssociationsApi.md#getStaffSectionAssociationsById) | **GET** /ed-fi/staffSectionAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern). |
| [**keyChangesStaffSectionAssociations()**](StaffSectionAssociationsApi.md#keyChangesStaffSectionAssociations) | **GET** /ed-fi/staffSectionAssociations/keyChanges | Retrieves resources key changes based on change version. |
| [**postStaffSectionAssociation()**](StaffSectionAssociationsApi.md#postStaffSectionAssociation) | **POST** /ed-fi/staffSectionAssociations | Creates or updates resources based on the natural key values of the supplied resource. |
| [**putStaffSectionAssociation()**](StaffSectionAssociationsApi.md#putStaffSectionAssociation) | **PUT** /ed-fi/staffSectionAssociations/{id} | Updates a resource based on the resource identifier. |


## `deleteStaffSectionAssociationById()`

```php
deleteStaffSectionAssociationById($id, $if_match)
```

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier. If the resource doesn't exist, an error will result (the resource will not be found).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StaffSectionAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try {
    $apiInstance->deleteStaffSectionAssociationById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StaffSectionAssociationsApi->deleteStaffSectionAssociationById: ', $e->getMessage(), PHP_EOL;
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

## `deletesStaffSectionAssociations()`

```php
deletesStaffSectionAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiStaffSectionAssociationDelete[]
```

Retrieves deleted resources based on change version.

This operation is used to retrieve identifying information about resources that have been deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StaffSectionAssociationsApi(
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
    $result = $apiInstance->deletesStaffSectionAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaffSectionAssociationsApi->deletesStaffSectionAssociations: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiStaffSectionAssociationDelete[]**](../Model/TrackedChangesEdFiStaffSectionAssociationDelete.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStaffSectionAssociations()`

```php
getStaffSectionAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $begin_date, $local_course_code, $school_id, $school_year, $section_identifier, $session_name, $staff_unique_id, $classroom_position_descriptor, $end_date, $highly_qualified_teacher, $id, $percentage_contribution, $teacher_student_data_link_exclusion, $use_snapshot): \Resources\Model\EdFiStaffSectionAssociation[]
```

Retrieves specific resources using the resource's property values (using the \"Get\" pattern).

This GET operation provides access to resources using the \"Get\" search pattern.  The values of any properties of the resource that are specified will be used to return all matching results (if it exists).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StaffSectionAssociationsApi(
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
$begin_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Month, day, and year of a teacher's assignment to the section.
$local_course_code = 'local_course_code_example'; // string | The local code assigned by the School that identifies the course offering provided for the instruction of students.
$school_id = 56; // int | The identifier assigned to a school.
$school_year = 56; // int | The identifier for the school year.
$section_identifier = 'section_identifier_example'; // string | The local identifier assigned to a section.
$session_name = 'session_name_example'; // string | The identifier for the calendar for the academic session.
$staff_unique_id = 'staff_unique_id_example'; // string | A unique alphanumeric code assigned to a staff.
$classroom_position_descriptor = 'classroom_position_descriptor_example'; // string | The type of position the staff member holds in the specific class/section.
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Month, day, and year of the last day of a staff member's assignment to the section.
$highly_qualified_teacher = True; // bool | An indication of whether a teacher is classified as highly qualified for his/her assignment according to state definition. This attribute indicates the teacher is highly qualified for this section being taught.
$id = 'id_example'; // string | 
$percentage_contribution = 3.4; // float | Indicates the percentage of the total scheduled course time, academic standards, and/or learning activities delivered in this section by this staff member. A teacher of record designation may be based solely or partially on this contribution percentage.
$teacher_student_data_link_exclusion = True; // bool | Indicates that the entire section is excluded from calculation of value-added or growth attribution calculations used for a particular teacher evaluation.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getStaffSectionAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $begin_date, $local_course_code, $school_id, $school_year, $section_identifier, $session_name, $staff_unique_id, $classroom_position_descriptor, $end_date, $highly_qualified_teacher, $id, $percentage_contribution, $teacher_student_data_link_exclusion, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaffSectionAssociationsApi->getStaffSectionAssociations: ', $e->getMessage(), PHP_EOL;
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
| **begin_date** | **\DateTime**| Month, day, and year of a teacher&#39;s assignment to the section. | [optional] |
| **local_course_code** | **string**| The local code assigned by the School that identifies the course offering provided for the instruction of students. | [optional] |
| **school_id** | **int**| The identifier assigned to a school. | [optional] |
| **school_year** | **int**| The identifier for the school year. | [optional] |
| **section_identifier** | **string**| The local identifier assigned to a section. | [optional] |
| **session_name** | **string**| The identifier for the calendar for the academic session. | [optional] |
| **staff_unique_id** | **string**| A unique alphanumeric code assigned to a staff. | [optional] |
| **classroom_position_descriptor** | **string**| The type of position the staff member holds in the specific class/section. | [optional] |
| **end_date** | **\DateTime**| Month, day, and year of the last day of a staff member&#39;s assignment to the section. | [optional] |
| **highly_qualified_teacher** | **bool**| An indication of whether a teacher is classified as highly qualified for his/her assignment according to state definition. This attribute indicates the teacher is highly qualified for this section being taught. | [optional] |
| **id** | **string**|  | [optional] |
| **percentage_contribution** | **float**| Indicates the percentage of the total scheduled course time, academic standards, and/or learning activities delivered in this section by this staff member. A teacher of record designation may be based solely or partially on this contribution percentage. | [optional] |
| **teacher_student_data_link_exclusion** | **bool**| Indicates that the entire section is excluded from calculation of value-added or growth attribution calculations used for a particular teacher evaluation. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiStaffSectionAssociation[]**](../Model/EdFiStaffSectionAssociation.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStaffSectionAssociationsById()`

```php
getStaffSectionAssociationsById($id, $if_none_match, $use_snapshot): \Resources\Model\EdFiStaffSectionAssociation
```

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StaffSectionAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_none_match = 'if_none_match_example'; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getStaffSectionAssociationsById($id, $if_none_match, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaffSectionAssociationsApi->getStaffSectionAssociationsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiStaffSectionAssociation**](../Model/EdFiStaffSectionAssociation.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `keyChangesStaffSectionAssociations()`

```php
keyChangesStaffSectionAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiStaffSectionAssociationKeyChange[]
```

Retrieves resources key changes based on change version.

This operation is used to retrieve identifying information about resources whose key values have been changed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StaffSectionAssociationsApi(
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
    $result = $apiInstance->keyChangesStaffSectionAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaffSectionAssociationsApi->keyChangesStaffSectionAssociations: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiStaffSectionAssociationKeyChange[]**](../Model/TrackedChangesEdFiStaffSectionAssociationKeyChange.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postStaffSectionAssociation()`

```php
postStaffSectionAssociation($ed_fi_staff_section_association)
```

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update). Clients should NOT include the resource \"id\" in the JSON body because it will result in an error. The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately. It is recommended to use POST for both create and update except while updating natural key of a resource in which case PUT operation must be used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StaffSectionAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ed_fi_staff_section_association = new \Resources\Model\EdFiStaffSectionAssociation(); // \Resources\Model\EdFiStaffSectionAssociation | The JSON representation of the \"staffSectionAssociation\" resource to be created or updated.

try {
    $apiInstance->postStaffSectionAssociation($ed_fi_staff_section_association);
} catch (Exception $e) {
    echo 'Exception when calling StaffSectionAssociationsApi->postStaffSectionAssociation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ed_fi_staff_section_association** | [**\Resources\Model\EdFiStaffSectionAssociation**](../Model/EdFiStaffSectionAssociation.md)| The JSON representation of the \&quot;staffSectionAssociation\&quot; resource to be created or updated. | |

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

## `putStaffSectionAssociation()`

```php
putStaffSectionAssociation($id, $ed_fi_staff_section_association, $if_match)
```

Updates a resource based on the resource identifier.

The PUT operation is used to update a resource by identifier. If the resource identifier (\"id\") is provided in the JSON body, it will be ignored. Additionally, this API resource is not configured for cascading natural key updates. Natural key values for this resource cannot be changed using PUT operation, so the recommendation is to use POST as that supports upsert behavior.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StaffSectionAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$ed_fi_staff_section_association = new \Resources\Model\EdFiStaffSectionAssociation(); // \Resources\Model\EdFiStaffSectionAssociation | The JSON representation of the \"staffSectionAssociation\" resource to be created or updated.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try {
    $apiInstance->putStaffSectionAssociation($id, $ed_fi_staff_section_association, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StaffSectionAssociationsApi->putStaffSectionAssociation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **ed_fi_staff_section_association** | [**\Resources\Model\EdFiStaffSectionAssociation**](../Model/EdFiStaffSectionAssociation.md)| The JSON representation of the \&quot;staffSectionAssociation\&quot; resource to be created or updated. | |
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
