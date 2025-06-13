# Resources\StudentSchoolAssociationsApi

All URIs are relative to https://api.ed-fi.org:443/v7.3/api/data/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteStudentSchoolAssociationById()**](StudentSchoolAssociationsApi.md#deleteStudentSchoolAssociationById) | **DELETE** /ed-fi/studentSchoolAssociations/{id} | Deletes an existing resource using the resource identifier. |
| [**deletesStudentSchoolAssociations()**](StudentSchoolAssociationsApi.md#deletesStudentSchoolAssociations) | **GET** /ed-fi/studentSchoolAssociations/deletes | Retrieves deleted resources based on change version. |
| [**getStudentSchoolAssociations()**](StudentSchoolAssociationsApi.md#getStudentSchoolAssociations) | **GET** /ed-fi/studentSchoolAssociations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern). |
| [**getStudentSchoolAssociationsById()**](StudentSchoolAssociationsApi.md#getStudentSchoolAssociationsById) | **GET** /ed-fi/studentSchoolAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern). |
| [**getStudentSchoolAssociationsPartitions()**](StudentSchoolAssociationsApi.md#getStudentSchoolAssociationsPartitions) | **GET** /ed-fi/studentSchoolAssociations/partitions | Retrieves a set of page tokens to be used for efficient client-side parallel processing. |
| [**keyChangesStudentSchoolAssociations()**](StudentSchoolAssociationsApi.md#keyChangesStudentSchoolAssociations) | **GET** /ed-fi/studentSchoolAssociations/keyChanges | Retrieves resources key changes based on change version. |
| [**postStudentSchoolAssociation()**](StudentSchoolAssociationsApi.md#postStudentSchoolAssociation) | **POST** /ed-fi/studentSchoolAssociations | Creates or updates resources based on the natural key values of the supplied resource. |
| [**putStudentSchoolAssociation()**](StudentSchoolAssociationsApi.md#putStudentSchoolAssociation) | **PUT** /ed-fi/studentSchoolAssociations/{id} | Updates a resource based on the resource identifier. |


## `deleteStudentSchoolAssociationById()`

```php
deleteStudentSchoolAssociationById($id, $if_match)
```

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier. If the resource doesn't exist, an error will result (the resource will not be found).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentSchoolAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try {
    $apiInstance->deleteStudentSchoolAssociationById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StudentSchoolAssociationsApi->deleteStudentSchoolAssociationById: ', $e->getMessage(), PHP_EOL;
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

## `deletesStudentSchoolAssociations()`

```php
deletesStudentSchoolAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiStudentSchoolAssociationDelete[]
```

Retrieves deleted resources based on change version.

This operation is used to retrieve identifying information about resources that have been deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentSchoolAssociationsApi(
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
    $result = $apiInstance->deletesStudentSchoolAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentSchoolAssociationsApi->deletesStudentSchoolAssociations: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiStudentSchoolAssociationDelete[]**](../Model/TrackedChangesEdFiStudentSchoolAssociationDelete.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStudentSchoolAssociations()`

```php
getStudentSchoolAssociations($offset, $limit, $page_token, $page_size, $min_change_version, $max_change_version, $total_count, $entry_date, $school_id, $student_unique_id, $calendar_code, $school_year, $education_organization_id, $graduation_plan_type_descriptor, $graduation_school_year, $next_year_school_id, $class_of_school_year, $enrollment_type_descriptor, $entry_grade_level_reason_descriptor, $entry_type_descriptor, $exit_withdraw_type_descriptor, $entry_grade_level_descriptor, $next_year_grade_level_descriptor, $residency_status_descriptor, $school_choice_basis_descriptor, $employed_while_enrolled, $exit_withdraw_date, $full_time_equivalency, $id, $primary_school, $repeat_grade_indicator, $school_choice, $school_choice_transfer, $term_completion_indicator, $use_snapshot): \Resources\Model\EdFiStudentSchoolAssociation[]
```

Retrieves specific resources using the resource's property values (using the \"Get\" pattern).

This GET operation provides access to resources using the \"Get\" search pattern.  The values of any properties of the resource that are specified will be used to return all matching results (if it exists).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentSchoolAssociationsApi(
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
$entry_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The month, day, and year on which an individual enters and begins to receive instructional services in a school for each school year. The EntryDate value should be the date the student enrolled, or when the student's enrollment materially changed, such as with a grade promotion.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines.
$school_id = 56; // int | The identifier assigned to a school. It must be distinct from any other identifier assigned to educational organizations, such as a LocalEducationAgencyId, to prevent duplication.
$student_unique_id = 'student_unique_id_example'; // string | A unique alphanumeric code assigned to a student.
$calendar_code = 'calendar_code_example'; // string | The identifier for the calendar.
$school_year = 56; // int | The school year associated with the student's enrollment.
$education_organization_id = 56; // int | The identifier assigned to an education organization.
$graduation_plan_type_descriptor = 'graduation_plan_type_descriptor_example'; // string | The type of academic plan the student is following for graduation.
$graduation_school_year = 56; // int | The school year the student is expected to graduate.
$next_year_school_id = 56; // int | The identifier assigned to a school. It must be distinct from any other identifier assigned to educational organizations, such as a LocalEducationAgencyId, to prevent duplication.
$class_of_school_year = 56; // int | Projected high school graduation year.
$enrollment_type_descriptor = 'enrollment_type_descriptor_example'; // string | The type of enrollment reflected by the StudentSchoolAssociation.
$entry_grade_level_reason_descriptor = 'entry_grade_level_reason_descriptor_example'; // string | The primary reason as to why a staff member determined that a student should be promoted or not (or be demoted) at the end of a given school term.
$entry_type_descriptor = 'entry_type_descriptor_example'; // string | The process by which a student enters a school during a given academic session.
$exit_withdraw_type_descriptor = 'exit_withdraw_type_descriptor_example'; // string | The circumstances under which the student exited from membership in an educational institution.
$entry_grade_level_descriptor = 'entry_grade_level_descriptor_example'; // string | The grade level or primary instructional level at which a student enters and receives services in a school or an educational institution during a given academic session.
$next_year_grade_level_descriptor = 'next_year_grade_level_descriptor_example'; // string | The anticipated grade level for the student for the next school year.
$residency_status_descriptor = 'residency_status_descriptor_example'; // string | An indication of the location of a persons legal residence relative to (within or outside of) the boundaries of the public school attended and its administrative unit.
$school_choice_basis_descriptor = 'school_choice_basis_descriptor_example'; // string | The legal basis for the school choice enrollment according to local, state or federal policy or regulation. (The descriptor provides the list of available bases specific to the state
$employed_while_enrolled = True; // bool | An individual who is a paid employee or works in his or her own business, profession, or farm and at the same time is enrolled in secondary, postsecondary, or adult education.
$exit_withdraw_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The recorded exit or withdraw date for the student.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines.
$full_time_equivalency = 3.4; // float | The full-time equivalent ratio for the student s assignment to a school for services or instruction. For example, a full-time student would have an FTE value of 1 while a half-time student would have an FTE value of 0.5.
$id = 'id_example'; // string | 
$primary_school = True; // bool | Indicates if a given enrollment record should be considered the primary record for a student.
$repeat_grade_indicator = True; // bool | An indicator of whether the student is enrolling to repeat a grade level, either by failure or an agreement to hold the student back.
$school_choice = True; // bool | An indication of whether the student enrolled in this school under the provisions for public school choice
$school_choice_transfer = True; // bool | An indication of whether students transferred in or out of the school did so during the school year under the provisions for public school choice in accordance with Title I, Part A, Section 1116.
$term_completion_indicator = True; // bool | Idicates whether or not a student completed the most recent school term.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getStudentSchoolAssociations($offset, $limit, $page_token, $page_size, $min_change_version, $max_change_version, $total_count, $entry_date, $school_id, $student_unique_id, $calendar_code, $school_year, $education_organization_id, $graduation_plan_type_descriptor, $graduation_school_year, $next_year_school_id, $class_of_school_year, $enrollment_type_descriptor, $entry_grade_level_reason_descriptor, $entry_type_descriptor, $exit_withdraw_type_descriptor, $entry_grade_level_descriptor, $next_year_grade_level_descriptor, $residency_status_descriptor, $school_choice_basis_descriptor, $employed_while_enrolled, $exit_withdraw_date, $full_time_equivalency, $id, $primary_school, $repeat_grade_indicator, $school_choice, $school_choice_transfer, $term_completion_indicator, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentSchoolAssociationsApi->getStudentSchoolAssociations: ', $e->getMessage(), PHP_EOL;
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
| **entry_date** | **\DateTime**| The month, day, and year on which an individual enters and begins to receive instructional services in a school for each school year. The EntryDate value should be the date the student enrolled, or when the student&#39;s enrollment materially changed, such as with a grade promotion.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines. | [optional] |
| **school_id** | **int**| The identifier assigned to a school. It must be distinct from any other identifier assigned to educational organizations, such as a LocalEducationAgencyId, to prevent duplication. | [optional] |
| **student_unique_id** | **string**| A unique alphanumeric code assigned to a student. | [optional] |
| **calendar_code** | **string**| The identifier for the calendar. | [optional] |
| **school_year** | **int**| The school year associated with the student&#39;s enrollment. | [optional] |
| **education_organization_id** | **int**| The identifier assigned to an education organization. | [optional] |
| **graduation_plan_type_descriptor** | **string**| The type of academic plan the student is following for graduation. | [optional] |
| **graduation_school_year** | **int**| The school year the student is expected to graduate. | [optional] |
| **next_year_school_id** | **int**| The identifier assigned to a school. It must be distinct from any other identifier assigned to educational organizations, such as a LocalEducationAgencyId, to prevent duplication. | [optional] |
| **class_of_school_year** | **int**| Projected high school graduation year. | [optional] |
| **enrollment_type_descriptor** | **string**| The type of enrollment reflected by the StudentSchoolAssociation. | [optional] |
| **entry_grade_level_reason_descriptor** | **string**| The primary reason as to why a staff member determined that a student should be promoted or not (or be demoted) at the end of a given school term. | [optional] |
| **entry_type_descriptor** | **string**| The process by which a student enters a school during a given academic session. | [optional] |
| **exit_withdraw_type_descriptor** | **string**| The circumstances under which the student exited from membership in an educational institution. | [optional] |
| **entry_grade_level_descriptor** | **string**| The grade level or primary instructional level at which a student enters and receives services in a school or an educational institution during a given academic session. | [optional] |
| **next_year_grade_level_descriptor** | **string**| The anticipated grade level for the student for the next school year. | [optional] |
| **residency_status_descriptor** | **string**| An indication of the location of a persons legal residence relative to (within or outside of) the boundaries of the public school attended and its administrative unit. | [optional] |
| **school_choice_basis_descriptor** | **string**| The legal basis for the school choice enrollment according to local, state or federal policy or regulation. (The descriptor provides the list of available bases specific to the state | [optional] |
| **employed_while_enrolled** | **bool**| An individual who is a paid employee or works in his or her own business, profession, or farm and at the same time is enrolled in secondary, postsecondary, or adult education. | [optional] |
| **exit_withdraw_date** | **\DateTime**| The recorded exit or withdraw date for the student.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines. | [optional] |
| **full_time_equivalency** | **float**| The full-time equivalent ratio for the student s assignment to a school for services or instruction. For example, a full-time student would have an FTE value of 1 while a half-time student would have an FTE value of 0.5. | [optional] |
| **id** | **string**|  | [optional] |
| **primary_school** | **bool**| Indicates if a given enrollment record should be considered the primary record for a student. | [optional] |
| **repeat_grade_indicator** | **bool**| An indicator of whether the student is enrolling to repeat a grade level, either by failure or an agreement to hold the student back. | [optional] |
| **school_choice** | **bool**| An indication of whether the student enrolled in this school under the provisions for public school choice | [optional] |
| **school_choice_transfer** | **bool**| An indication of whether students transferred in or out of the school did so during the school year under the provisions for public school choice in accordance with Title I, Part A, Section 1116. | [optional] |
| **term_completion_indicator** | **bool**| Idicates whether or not a student completed the most recent school term. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiStudentSchoolAssociation[]**](../Model/EdFiStudentSchoolAssociation.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStudentSchoolAssociationsById()`

```php
getStudentSchoolAssociationsById($id, $if_none_match, $use_snapshot): \Resources\Model\EdFiStudentSchoolAssociation
```

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentSchoolAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_none_match = 'if_none_match_example'; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getStudentSchoolAssociationsById($id, $if_none_match, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentSchoolAssociationsApi->getStudentSchoolAssociationsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiStudentSchoolAssociation**](../Model/EdFiStudentSchoolAssociation.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStudentSchoolAssociationsPartitions()`

```php
getStudentSchoolAssociationsPartitions($number, $min_change_version, $max_change_version, $entry_date, $school_id, $student_unique_id, $calendar_code, $school_year, $education_organization_id, $graduation_plan_type_descriptor, $graduation_school_year, $next_year_school_id, $class_of_school_year, $enrollment_type_descriptor, $entry_grade_level_reason_descriptor, $entry_type_descriptor, $exit_withdraw_type_descriptor, $entry_grade_level_descriptor, $next_year_grade_level_descriptor, $residency_status_descriptor, $school_choice_basis_descriptor, $employed_while_enrolled, $exit_withdraw_date, $full_time_equivalency, $id, $primary_school, $repeat_grade_indicator, $school_choice, $school_choice_transfer, $term_completion_indicator, $use_snapshot): \Resources\Model\GetAcademicWeeksPartitions200Response
```

Retrieves a set of page tokens to be used for efficient client-side parallel processing.

Computes an evenly distributed set of partitions over the accessible data and returns a set of page tokens, each representing the first page of one of the partitions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentSchoolAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$number = 56; // int | The number of evenly distributed partitions to provide for client-side parallel processing. If unspecified, a reasonable set of partitions will be determined based on the total number of accessible items.
$min_change_version = 56; // int | Used in synchronization to set sequence minimum ChangeVersion
$max_change_version = 56; // int | Used in synchronization to set sequence maximum ChangeVersion
$entry_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The month, day, and year on which an individual enters and begins to receive instructional services in a school for each school year. The EntryDate value should be the date the student enrolled, or when the student's enrollment materially changed, such as with a grade promotion.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines.
$school_id = 56; // int | The identifier assigned to a school. It must be distinct from any other identifier assigned to educational organizations, such as a LocalEducationAgencyId, to prevent duplication.
$student_unique_id = 'student_unique_id_example'; // string | A unique alphanumeric code assigned to a student.
$calendar_code = 'calendar_code_example'; // string | The identifier for the calendar.
$school_year = 56; // int | The school year associated with the student's enrollment.
$education_organization_id = 56; // int | The identifier assigned to an education organization.
$graduation_plan_type_descriptor = 'graduation_plan_type_descriptor_example'; // string | The type of academic plan the student is following for graduation.
$graduation_school_year = 56; // int | The school year the student is expected to graduate.
$next_year_school_id = 56; // int | The identifier assigned to a school. It must be distinct from any other identifier assigned to educational organizations, such as a LocalEducationAgencyId, to prevent duplication.
$class_of_school_year = 56; // int | Projected high school graduation year.
$enrollment_type_descriptor = 'enrollment_type_descriptor_example'; // string | The type of enrollment reflected by the StudentSchoolAssociation.
$entry_grade_level_reason_descriptor = 'entry_grade_level_reason_descriptor_example'; // string | The primary reason as to why a staff member determined that a student should be promoted or not (or be demoted) at the end of a given school term.
$entry_type_descriptor = 'entry_type_descriptor_example'; // string | The process by which a student enters a school during a given academic session.
$exit_withdraw_type_descriptor = 'exit_withdraw_type_descriptor_example'; // string | The circumstances under which the student exited from membership in an educational institution.
$entry_grade_level_descriptor = 'entry_grade_level_descriptor_example'; // string | The grade level or primary instructional level at which a student enters and receives services in a school or an educational institution during a given academic session.
$next_year_grade_level_descriptor = 'next_year_grade_level_descriptor_example'; // string | The anticipated grade level for the student for the next school year.
$residency_status_descriptor = 'residency_status_descriptor_example'; // string | An indication of the location of a persons legal residence relative to (within or outside of) the boundaries of the public school attended and its administrative unit.
$school_choice_basis_descriptor = 'school_choice_basis_descriptor_example'; // string | The legal basis for the school choice enrollment according to local, state or federal policy or regulation. (The descriptor provides the list of available bases specific to the state
$employed_while_enrolled = True; // bool | An individual who is a paid employee or works in his or her own business, profession, or farm and at the same time is enrolled in secondary, postsecondary, or adult education.
$exit_withdraw_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The recorded exit or withdraw date for the student.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines.
$full_time_equivalency = 3.4; // float | The full-time equivalent ratio for the student s assignment to a school for services or instruction. For example, a full-time student would have an FTE value of 1 while a half-time student would have an FTE value of 0.5.
$id = 'id_example'; // string | 
$primary_school = True; // bool | Indicates if a given enrollment record should be considered the primary record for a student.
$repeat_grade_indicator = True; // bool | An indicator of whether the student is enrolling to repeat a grade level, either by failure or an agreement to hold the student back.
$school_choice = True; // bool | An indication of whether the student enrolled in this school under the provisions for public school choice
$school_choice_transfer = True; // bool | An indication of whether students transferred in or out of the school did so during the school year under the provisions for public school choice in accordance with Title I, Part A, Section 1116.
$term_completion_indicator = True; // bool | Idicates whether or not a student completed the most recent school term.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getStudentSchoolAssociationsPartitions($number, $min_change_version, $max_change_version, $entry_date, $school_id, $student_unique_id, $calendar_code, $school_year, $education_organization_id, $graduation_plan_type_descriptor, $graduation_school_year, $next_year_school_id, $class_of_school_year, $enrollment_type_descriptor, $entry_grade_level_reason_descriptor, $entry_type_descriptor, $exit_withdraw_type_descriptor, $entry_grade_level_descriptor, $next_year_grade_level_descriptor, $residency_status_descriptor, $school_choice_basis_descriptor, $employed_while_enrolled, $exit_withdraw_date, $full_time_equivalency, $id, $primary_school, $repeat_grade_indicator, $school_choice, $school_choice_transfer, $term_completion_indicator, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentSchoolAssociationsApi->getStudentSchoolAssociationsPartitions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **number** | **int**| The number of evenly distributed partitions to provide for client-side parallel processing. If unspecified, a reasonable set of partitions will be determined based on the total number of accessible items. | [optional] |
| **min_change_version** | **int**| Used in synchronization to set sequence minimum ChangeVersion | [optional] |
| **max_change_version** | **int**| Used in synchronization to set sequence maximum ChangeVersion | [optional] |
| **entry_date** | **\DateTime**| The month, day, and year on which an individual enters and begins to receive instructional services in a school for each school year. The EntryDate value should be the date the student enrolled, or when the student&#39;s enrollment materially changed, such as with a grade promotion.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines. | [optional] |
| **school_id** | **int**| The identifier assigned to a school. It must be distinct from any other identifier assigned to educational organizations, such as a LocalEducationAgencyId, to prevent duplication. | [optional] |
| **student_unique_id** | **string**| A unique alphanumeric code assigned to a student. | [optional] |
| **calendar_code** | **string**| The identifier for the calendar. | [optional] |
| **school_year** | **int**| The school year associated with the student&#39;s enrollment. | [optional] |
| **education_organization_id** | **int**| The identifier assigned to an education organization. | [optional] |
| **graduation_plan_type_descriptor** | **string**| The type of academic plan the student is following for graduation. | [optional] |
| **graduation_school_year** | **int**| The school year the student is expected to graduate. | [optional] |
| **next_year_school_id** | **int**| The identifier assigned to a school. It must be distinct from any other identifier assigned to educational organizations, such as a LocalEducationAgencyId, to prevent duplication. | [optional] |
| **class_of_school_year** | **int**| Projected high school graduation year. | [optional] |
| **enrollment_type_descriptor** | **string**| The type of enrollment reflected by the StudentSchoolAssociation. | [optional] |
| **entry_grade_level_reason_descriptor** | **string**| The primary reason as to why a staff member determined that a student should be promoted or not (or be demoted) at the end of a given school term. | [optional] |
| **entry_type_descriptor** | **string**| The process by which a student enters a school during a given academic session. | [optional] |
| **exit_withdraw_type_descriptor** | **string**| The circumstances under which the student exited from membership in an educational institution. | [optional] |
| **entry_grade_level_descriptor** | **string**| The grade level or primary instructional level at which a student enters and receives services in a school or an educational institution during a given academic session. | [optional] |
| **next_year_grade_level_descriptor** | **string**| The anticipated grade level for the student for the next school year. | [optional] |
| **residency_status_descriptor** | **string**| An indication of the location of a persons legal residence relative to (within or outside of) the boundaries of the public school attended and its administrative unit. | [optional] |
| **school_choice_basis_descriptor** | **string**| The legal basis for the school choice enrollment according to local, state or federal policy or regulation. (The descriptor provides the list of available bases specific to the state | [optional] |
| **employed_while_enrolled** | **bool**| An individual who is a paid employee or works in his or her own business, profession, or farm and at the same time is enrolled in secondary, postsecondary, or adult education. | [optional] |
| **exit_withdraw_date** | **\DateTime**| The recorded exit or withdraw date for the student.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines. | [optional] |
| **full_time_equivalency** | **float**| The full-time equivalent ratio for the student s assignment to a school for services or instruction. For example, a full-time student would have an FTE value of 1 while a half-time student would have an FTE value of 0.5. | [optional] |
| **id** | **string**|  | [optional] |
| **primary_school** | **bool**| Indicates if a given enrollment record should be considered the primary record for a student. | [optional] |
| **repeat_grade_indicator** | **bool**| An indicator of whether the student is enrolling to repeat a grade level, either by failure or an agreement to hold the student back. | [optional] |
| **school_choice** | **bool**| An indication of whether the student enrolled in this school under the provisions for public school choice | [optional] |
| **school_choice_transfer** | **bool**| An indication of whether students transferred in or out of the school did so during the school year under the provisions for public school choice in accordance with Title I, Part A, Section 1116. | [optional] |
| **term_completion_indicator** | **bool**| Idicates whether or not a student completed the most recent school term. | [optional] |
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

## `keyChangesStudentSchoolAssociations()`

```php
keyChangesStudentSchoolAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiStudentSchoolAssociationKeyChange[]
```

Retrieves resources key changes based on change version.

This operation is used to retrieve identifying information about resources whose key values have been changed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentSchoolAssociationsApi(
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
    $result = $apiInstance->keyChangesStudentSchoolAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentSchoolAssociationsApi->keyChangesStudentSchoolAssociations: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiStudentSchoolAssociationKeyChange[]**](../Model/TrackedChangesEdFiStudentSchoolAssociationKeyChange.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postStudentSchoolAssociation()`

```php
postStudentSchoolAssociation($ed_fi_student_school_association)
```

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update). Clients should NOT include the resource \"id\" in the JSON body because it will result in an error. The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately. It is recommended to use POST for both create and update except while updating natural key of a resource in which case PUT operation must be used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentSchoolAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ed_fi_student_school_association = new \Resources\Model\EdFiStudentSchoolAssociation(); // \Resources\Model\EdFiStudentSchoolAssociation | The JSON representation of the \"studentSchoolAssociation\" resource to be created or updated.

try {
    $apiInstance->postStudentSchoolAssociation($ed_fi_student_school_association);
} catch (Exception $e) {
    echo 'Exception when calling StudentSchoolAssociationsApi->postStudentSchoolAssociation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ed_fi_student_school_association** | [**\Resources\Model\EdFiStudentSchoolAssociation**](../Model/EdFiStudentSchoolAssociation.md)| The JSON representation of the \&quot;studentSchoolAssociation\&quot; resource to be created or updated. | |

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

## `putStudentSchoolAssociation()`

```php
putStudentSchoolAssociation($id, $ed_fi_student_school_association, $if_match)
```

Updates a resource based on the resource identifier.

The PUT operation is used to update a resource by identifier. If the resource identifier (\"id\") is provided in the JSON body, it will be ignored. Additionally, if natural key values are being updated by the JSON body, those changes will be applied to the resource and will also cascade through to dependent resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentSchoolAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$ed_fi_student_school_association = new \Resources\Model\EdFiStudentSchoolAssociation(); // \Resources\Model\EdFiStudentSchoolAssociation | The JSON representation of the \"studentSchoolAssociation\" resource to be created or updated.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try {
    $apiInstance->putStudentSchoolAssociation($id, $ed_fi_student_school_association, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StudentSchoolAssociationsApi->putStudentSchoolAssociation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **ed_fi_student_school_association** | [**\Resources\Model\EdFiStudentSchoolAssociation**](../Model/EdFiStudentSchoolAssociation.md)| The JSON representation of the \&quot;studentSchoolAssociation\&quot; resource to be created or updated. | |
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
