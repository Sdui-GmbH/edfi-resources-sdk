# Resources\StudentSectionAssociationsApi

All URIs are relative to https://api.ed-fi.org:443/v7.3/api/data/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteStudentSectionAssociationById()**](StudentSectionAssociationsApi.md#deleteStudentSectionAssociationById) | **DELETE** /ed-fi/studentSectionAssociations/{id} | Deletes an existing resource using the resource identifier. |
| [**deletesStudentSectionAssociations()**](StudentSectionAssociationsApi.md#deletesStudentSectionAssociations) | **GET** /ed-fi/studentSectionAssociations/deletes | Retrieves deleted resources based on change version. |
| [**getStudentSectionAssociations()**](StudentSectionAssociationsApi.md#getStudentSectionAssociations) | **GET** /ed-fi/studentSectionAssociations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern). |
| [**getStudentSectionAssociationsById()**](StudentSectionAssociationsApi.md#getStudentSectionAssociationsById) | **GET** /ed-fi/studentSectionAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern). |
| [**getStudentSectionAssociationsPartitions()**](StudentSectionAssociationsApi.md#getStudentSectionAssociationsPartitions) | **GET** /ed-fi/studentSectionAssociations/partitions | Retrieves a set of page tokens to be used for efficient client-side parallel processing. |
| [**keyChangesStudentSectionAssociations()**](StudentSectionAssociationsApi.md#keyChangesStudentSectionAssociations) | **GET** /ed-fi/studentSectionAssociations/keyChanges | Retrieves resources key changes based on change version. |
| [**postStudentSectionAssociation()**](StudentSectionAssociationsApi.md#postStudentSectionAssociation) | **POST** /ed-fi/studentSectionAssociations | Creates or updates resources based on the natural key values of the supplied resource. |
| [**putStudentSectionAssociation()**](StudentSectionAssociationsApi.md#putStudentSectionAssociation) | **PUT** /ed-fi/studentSectionAssociations/{id} | Updates a resource based on the resource identifier. |


## `deleteStudentSectionAssociationById()`

```php
deleteStudentSectionAssociationById($id, $if_match)
```

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier. If the resource doesn't exist, an error will result (the resource will not be found).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentSectionAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try {
    $apiInstance->deleteStudentSectionAssociationById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StudentSectionAssociationsApi->deleteStudentSectionAssociationById: ', $e->getMessage(), PHP_EOL;
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

## `deletesStudentSectionAssociations()`

```php
deletesStudentSectionAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiStudentSectionAssociationDelete[]
```

Retrieves deleted resources based on change version.

This operation is used to retrieve identifying information about resources that have been deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentSectionAssociationsApi(
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
    $result = $apiInstance->deletesStudentSectionAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentSectionAssociationsApi->deletesStudentSectionAssociations: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiStudentSectionAssociationDelete[]**](../Model/TrackedChangesEdFiStudentSectionAssociationDelete.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStudentSectionAssociations()`

```php
getStudentSectionAssociations($offset, $limit, $page_token, $page_size, $min_change_version, $max_change_version, $total_count, $begin_date, $local_course_code, $school_id, $school_year, $section_identifier, $session_name, $student_unique_id, $dual_credit_education_organization_id, $attempt_status_descriptor, $dual_credit_institution_descriptor, $dual_credit_type_descriptor, $repeat_identifier_descriptor, $dual_credit_indicator, $dual_high_school_credit_indicator, $end_date, $homeroom_indicator, $id, $teacher_student_data_link_exclusion, $use_snapshot): \Resources\Model\EdFiStudentSectionAssociation[]
```

Retrieves specific resources using the resource's property values (using the \"Get\" pattern).

This GET operation provides access to resources using the \"Get\" search pattern.  The values of any properties of the resource that are specified will be used to return all matching results (if it exists).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentSectionAssociationsApi(
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
$begin_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Month, day, and year of the student's entry or assignment to the section.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines.
$local_course_code = 'local_course_code_example'; // string | The local code assigned by the School that identifies the course offering provided for the instruction of students.
$school_id = 56; // int | The identifier assigned to a school. It must be distinct from any other identifier assigned to educational organizations, such as a LocalEducationAgencyId, to prevent duplication.
$school_year = 56; // int | The identifier for the school year.
$section_identifier = 'section_identifier_example'; // string | The local identifier assigned to a section.
$session_name = 'session_name_example'; // string | The identifier for the calendar for the academic session.
$student_unique_id = 'student_unique_id_example'; // string | A unique alphanumeric code assigned to a student.
$dual_credit_education_organization_id = 56; // int | The identifier assigned to an education organization.
$attempt_status_descriptor = 'attempt_status_descriptor_example'; // string | An indication of the student's completion status for the section.
$dual_credit_institution_descriptor = 'dual_credit_institution_descriptor_example'; // string | Descriptor for the postsecondary institution offering college credit. This descriptor may be used to select a postsecondary institution that is not defined as an education organization, and/or select a general type of postsecondary institution.
$dual_credit_type_descriptor = 'dual_credit_type_descriptor_example'; // string | For a student taking a dual credit course in a college or high school setting, indicates the type of dual credit program.
$repeat_identifier_descriptor = 'repeat_identifier_descriptor_example'; // string | An indication as to whether a student has previously taken a given course.
$dual_credit_indicator = True; // bool | Indicates whether the student assigned to the section is to receive dual credit upon successful completion.
$dual_high_school_credit_indicator = True; // bool | Indicates whether successful completion of the course will result in credits toward high school graduation.
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Month, day, and year of the withdrawal or exit of the student from the section.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines.
$homeroom_indicator = True; // bool | Indicates the section is the student's homeroom. Homeroom period may the convention for taking daily attendance.
$id = 'id_example'; // string | 
$teacher_student_data_link_exclusion = True; // bool | Indicates that the student-section combination is excluded from calculation of value-added or growth attribution calculations used for a particular teacher evaluation.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getStudentSectionAssociations($offset, $limit, $page_token, $page_size, $min_change_version, $max_change_version, $total_count, $begin_date, $local_course_code, $school_id, $school_year, $section_identifier, $session_name, $student_unique_id, $dual_credit_education_organization_id, $attempt_status_descriptor, $dual_credit_institution_descriptor, $dual_credit_type_descriptor, $repeat_identifier_descriptor, $dual_credit_indicator, $dual_high_school_credit_indicator, $end_date, $homeroom_indicator, $id, $teacher_student_data_link_exclusion, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentSectionAssociationsApi->getStudentSectionAssociations: ', $e->getMessage(), PHP_EOL;
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
| **begin_date** | **\DateTime**| Month, day, and year of the student&#39;s entry or assignment to the section.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines. | [optional] |
| **local_course_code** | **string**| The local code assigned by the School that identifies the course offering provided for the instruction of students. | [optional] |
| **school_id** | **int**| The identifier assigned to a school. It must be distinct from any other identifier assigned to educational organizations, such as a LocalEducationAgencyId, to prevent duplication. | [optional] |
| **school_year** | **int**| The identifier for the school year. | [optional] |
| **section_identifier** | **string**| The local identifier assigned to a section. | [optional] |
| **session_name** | **string**| The identifier for the calendar for the academic session. | [optional] |
| **student_unique_id** | **string**| A unique alphanumeric code assigned to a student. | [optional] |
| **dual_credit_education_organization_id** | **int**| The identifier assigned to an education organization. | [optional] |
| **attempt_status_descriptor** | **string**| An indication of the student&#39;s completion status for the section. | [optional] |
| **dual_credit_institution_descriptor** | **string**| Descriptor for the postsecondary institution offering college credit. This descriptor may be used to select a postsecondary institution that is not defined as an education organization, and/or select a general type of postsecondary institution. | [optional] |
| **dual_credit_type_descriptor** | **string**| For a student taking a dual credit course in a college or high school setting, indicates the type of dual credit program. | [optional] |
| **repeat_identifier_descriptor** | **string**| An indication as to whether a student has previously taken a given course. | [optional] |
| **dual_credit_indicator** | **bool**| Indicates whether the student assigned to the section is to receive dual credit upon successful completion. | [optional] |
| **dual_high_school_credit_indicator** | **bool**| Indicates whether successful completion of the course will result in credits toward high school graduation. | [optional] |
| **end_date** | **\DateTime**| Month, day, and year of the withdrawal or exit of the student from the section.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines. | [optional] |
| **homeroom_indicator** | **bool**| Indicates the section is the student&#39;s homeroom. Homeroom period may the convention for taking daily attendance. | [optional] |
| **id** | **string**|  | [optional] |
| **teacher_student_data_link_exclusion** | **bool**| Indicates that the student-section combination is excluded from calculation of value-added or growth attribution calculations used for a particular teacher evaluation. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiStudentSectionAssociation[]**](../Model/EdFiStudentSectionAssociation.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStudentSectionAssociationsById()`

```php
getStudentSectionAssociationsById($id, $if_none_match, $use_snapshot): \Resources\Model\EdFiStudentSectionAssociation
```

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentSectionAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_none_match = 'if_none_match_example'; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getStudentSectionAssociationsById($id, $if_none_match, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentSectionAssociationsApi->getStudentSectionAssociationsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiStudentSectionAssociation**](../Model/EdFiStudentSectionAssociation.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStudentSectionAssociationsPartitions()`

```php
getStudentSectionAssociationsPartitions($number, $min_change_version, $max_change_version, $begin_date, $local_course_code, $school_id, $school_year, $section_identifier, $session_name, $student_unique_id, $dual_credit_education_organization_id, $attempt_status_descriptor, $dual_credit_institution_descriptor, $dual_credit_type_descriptor, $repeat_identifier_descriptor, $dual_credit_indicator, $dual_high_school_credit_indicator, $end_date, $homeroom_indicator, $id, $teacher_student_data_link_exclusion, $use_snapshot): \Resources\Model\GetAcademicWeeksPartitions200Response
```

Retrieves a set of page tokens to be used for efficient client-side parallel processing.

Computes an evenly distributed set of partitions over the accessible data and returns a set of page tokens, each representing the first page of one of the partitions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentSectionAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$number = 56; // int | The number of evenly distributed partitions to provide for client-side parallel processing. If unspecified, a reasonable set of partitions will be determined based on the total number of accessible items.
$min_change_version = 56; // int | Used in synchronization to set sequence minimum ChangeVersion
$max_change_version = 56; // int | Used in synchronization to set sequence maximum ChangeVersion
$begin_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Month, day, and year of the student's entry or assignment to the section.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines.
$local_course_code = 'local_course_code_example'; // string | The local code assigned by the School that identifies the course offering provided for the instruction of students.
$school_id = 56; // int | The identifier assigned to a school. It must be distinct from any other identifier assigned to educational organizations, such as a LocalEducationAgencyId, to prevent duplication.
$school_year = 56; // int | The identifier for the school year.
$section_identifier = 'section_identifier_example'; // string | The local identifier assigned to a section.
$session_name = 'session_name_example'; // string | The identifier for the calendar for the academic session.
$student_unique_id = 'student_unique_id_example'; // string | A unique alphanumeric code assigned to a student.
$dual_credit_education_organization_id = 56; // int | The identifier assigned to an education organization.
$attempt_status_descriptor = 'attempt_status_descriptor_example'; // string | An indication of the student's completion status for the section.
$dual_credit_institution_descriptor = 'dual_credit_institution_descriptor_example'; // string | Descriptor for the postsecondary institution offering college credit. This descriptor may be used to select a postsecondary institution that is not defined as an education organization, and/or select a general type of postsecondary institution.
$dual_credit_type_descriptor = 'dual_credit_type_descriptor_example'; // string | For a student taking a dual credit course in a college or high school setting, indicates the type of dual credit program.
$repeat_identifier_descriptor = 'repeat_identifier_descriptor_example'; // string | An indication as to whether a student has previously taken a given course.
$dual_credit_indicator = True; // bool | Indicates whether the student assigned to the section is to receive dual credit upon successful completion.
$dual_high_school_credit_indicator = True; // bool | Indicates whether successful completion of the course will result in credits toward high school graduation.
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Month, day, and year of the withdrawal or exit of the student from the section.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines.
$homeroom_indicator = True; // bool | Indicates the section is the student's homeroom. Homeroom period may the convention for taking daily attendance.
$id = 'id_example'; // string | 
$teacher_student_data_link_exclusion = True; // bool | Indicates that the student-section combination is excluded from calculation of value-added or growth attribution calculations used for a particular teacher evaluation.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getStudentSectionAssociationsPartitions($number, $min_change_version, $max_change_version, $begin_date, $local_course_code, $school_id, $school_year, $section_identifier, $session_name, $student_unique_id, $dual_credit_education_organization_id, $attempt_status_descriptor, $dual_credit_institution_descriptor, $dual_credit_type_descriptor, $repeat_identifier_descriptor, $dual_credit_indicator, $dual_high_school_credit_indicator, $end_date, $homeroom_indicator, $id, $teacher_student_data_link_exclusion, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentSectionAssociationsApi->getStudentSectionAssociationsPartitions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **number** | **int**| The number of evenly distributed partitions to provide for client-side parallel processing. If unspecified, a reasonable set of partitions will be determined based on the total number of accessible items. | [optional] |
| **min_change_version** | **int**| Used in synchronization to set sequence minimum ChangeVersion | [optional] |
| **max_change_version** | **int**| Used in synchronization to set sequence maximum ChangeVersion | [optional] |
| **begin_date** | **\DateTime**| Month, day, and year of the student&#39;s entry or assignment to the section.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines. | [optional] |
| **local_course_code** | **string**| The local code assigned by the School that identifies the course offering provided for the instruction of students. | [optional] |
| **school_id** | **int**| The identifier assigned to a school. It must be distinct from any other identifier assigned to educational organizations, such as a LocalEducationAgencyId, to prevent duplication. | [optional] |
| **school_year** | **int**| The identifier for the school year. | [optional] |
| **section_identifier** | **string**| The local identifier assigned to a section. | [optional] |
| **session_name** | **string**| The identifier for the calendar for the academic session. | [optional] |
| **student_unique_id** | **string**| A unique alphanumeric code assigned to a student. | [optional] |
| **dual_credit_education_organization_id** | **int**| The identifier assigned to an education organization. | [optional] |
| **attempt_status_descriptor** | **string**| An indication of the student&#39;s completion status for the section. | [optional] |
| **dual_credit_institution_descriptor** | **string**| Descriptor for the postsecondary institution offering college credit. This descriptor may be used to select a postsecondary institution that is not defined as an education organization, and/or select a general type of postsecondary institution. | [optional] |
| **dual_credit_type_descriptor** | **string**| For a student taking a dual credit course in a college or high school setting, indicates the type of dual credit program. | [optional] |
| **repeat_identifier_descriptor** | **string**| An indication as to whether a student has previously taken a given course. | [optional] |
| **dual_credit_indicator** | **bool**| Indicates whether the student assigned to the section is to receive dual credit upon successful completion. | [optional] |
| **dual_high_school_credit_indicator** | **bool**| Indicates whether successful completion of the course will result in credits toward high school graduation. | [optional] |
| **end_date** | **\DateTime**| Month, day, and year of the withdrawal or exit of the student from the section.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines. | [optional] |
| **homeroom_indicator** | **bool**| Indicates the section is the student&#39;s homeroom. Homeroom period may the convention for taking daily attendance. | [optional] |
| **id** | **string**|  | [optional] |
| **teacher_student_data_link_exclusion** | **bool**| Indicates that the student-section combination is excluded from calculation of value-added or growth attribution calculations used for a particular teacher evaluation. | [optional] |
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

## `keyChangesStudentSectionAssociations()`

```php
keyChangesStudentSectionAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiStudentSectionAssociationKeyChange[]
```

Retrieves resources key changes based on change version.

This operation is used to retrieve identifying information about resources whose key values have been changed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentSectionAssociationsApi(
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
    $result = $apiInstance->keyChangesStudentSectionAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentSectionAssociationsApi->keyChangesStudentSectionAssociations: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiStudentSectionAssociationKeyChange[]**](../Model/TrackedChangesEdFiStudentSectionAssociationKeyChange.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postStudentSectionAssociation()`

```php
postStudentSectionAssociation($ed_fi_student_section_association)
```

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update). Clients should NOT include the resource \"id\" in the JSON body because it will result in an error. The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately. It is recommended to use POST for both create and update except while updating natural key of a resource in which case PUT operation must be used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentSectionAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ed_fi_student_section_association = new \Resources\Model\EdFiStudentSectionAssociation(); // \Resources\Model\EdFiStudentSectionAssociation | The JSON representation of the \"studentSectionAssociation\" resource to be created or updated.

try {
    $apiInstance->postStudentSectionAssociation($ed_fi_student_section_association);
} catch (Exception $e) {
    echo 'Exception when calling StudentSectionAssociationsApi->postStudentSectionAssociation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ed_fi_student_section_association** | [**\Resources\Model\EdFiStudentSectionAssociation**](../Model/EdFiStudentSectionAssociation.md)| The JSON representation of the \&quot;studentSectionAssociation\&quot; resource to be created or updated. | |

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

## `putStudentSectionAssociation()`

```php
putStudentSectionAssociation($id, $ed_fi_student_section_association, $if_match)
```

Updates a resource based on the resource identifier.

The PUT operation is used to update a resource by identifier. If the resource identifier (\"id\") is provided in the JSON body, it will be ignored. Additionally, if natural key values are being updated by the JSON body, those changes will be applied to the resource and will also cascade through to dependent resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentSectionAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$ed_fi_student_section_association = new \Resources\Model\EdFiStudentSectionAssociation(); // \Resources\Model\EdFiStudentSectionAssociation | The JSON representation of the \"studentSectionAssociation\" resource to be created or updated.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try {
    $apiInstance->putStudentSectionAssociation($id, $ed_fi_student_section_association, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StudentSectionAssociationsApi->putStudentSectionAssociation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **ed_fi_student_section_association** | [**\Resources\Model\EdFiStudentSectionAssociation**](../Model/EdFiStudentSectionAssociation.md)| The JSON representation of the \&quot;studentSectionAssociation\&quot; resource to be created or updated. | |
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
