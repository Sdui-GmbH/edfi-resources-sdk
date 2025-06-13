# Resources\GradesApi

All URIs are relative to https://api.ed-fi.org:443/v7.3/api/data/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteGradeById()**](GradesApi.md#deleteGradeById) | **DELETE** /ed-fi/grades/{id} | Deletes an existing resource using the resource identifier. |
| [**deletesGrades()**](GradesApi.md#deletesGrades) | **GET** /ed-fi/grades/deletes | Retrieves deleted resources based on change version. |
| [**getGrades()**](GradesApi.md#getGrades) | **GET** /ed-fi/grades | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern). |
| [**getGradesById()**](GradesApi.md#getGradesById) | **GET** /ed-fi/grades/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern). |
| [**getGradesPartitions()**](GradesApi.md#getGradesPartitions) | **GET** /ed-fi/grades/partitions | Retrieves a set of page tokens to be used for efficient client-side parallel processing. |
| [**keyChangesGrades()**](GradesApi.md#keyChangesGrades) | **GET** /ed-fi/grades/keyChanges | Retrieves resources key changes based on change version. |
| [**postGrade()**](GradesApi.md#postGrade) | **POST** /ed-fi/grades | Creates or updates resources based on the natural key values of the supplied resource. |
| [**putGrade()**](GradesApi.md#putGrade) | **PUT** /ed-fi/grades/{id} | Updates a resource based on the resource identifier. |


## `deleteGradeById()`

```php
deleteGradeById($id, $if_match)
```

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier. If the resource doesn't exist, an error will result (the resource will not be found).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\GradesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try {
    $apiInstance->deleteGradeById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling GradesApi->deleteGradeById: ', $e->getMessage(), PHP_EOL;
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

## `deletesGrades()`

```php
deletesGrades($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiGradeDelete[]
```

Retrieves deleted resources based on change version.

This operation is used to retrieve identifying information about resources that have been deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\GradesApi(
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
    $result = $apiInstance->deletesGrades($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GradesApi->deletesGrades: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiGradeDelete[]**](../Model/TrackedChangesEdFiGradeDelete.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGrades()`

```php
getGrades($offset, $limit, $page_token, $page_size, $min_change_version, $max_change_version, $total_count, $grade_type_descriptor, $grading_period_descriptor, $grading_period_name, $school_id, $grading_period_school_year, $begin_date, $local_course_code, $school_year, $section_identifier, $session_name, $student_unique_id, $performance_base_conversion_descriptor, $current_grade_as_of_date, $current_grade_indicator, $diagnostic_statement, $grade_earned_description, $id, $letter_grade_earned, $numeric_grade_earned, $use_snapshot): \Resources\Model\EdFiGrade[]
```

Retrieves specific resources using the resource's property values (using the \"Get\" pattern).

This GET operation provides access to resources using the \"Get\" search pattern.  The values of any properties of the resource that are specified will be used to return all matching results (if it exists).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\GradesApi(
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
$grade_type_descriptor = 'grade_type_descriptor_example'; // string | The type of grade reported (e.g., exam, final, grading period).
$grading_period_descriptor = 'grading_period_descriptor_example'; // string | The state's name of the period for which grades are reported.
$grading_period_name = 'grading_period_name_example'; // string | The school's descriptive name of the grading period.
$school_id = 56; // int | The identifier assigned to a school. It must be distinct from any other identifier assigned to educational organizations, such as a LocalEducationAgencyId, to prevent duplication.
$grading_period_school_year = 56; // int | The identifier for the grading period school year.
$begin_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Month, day, and year of the student's entry or assignment to the section.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines.
$local_course_code = 'local_course_code_example'; // string | The local code assigned by the School that identifies the course offering provided for the instruction of students.
$school_year = 56; // int | The identifier for the school year.
$section_identifier = 'section_identifier_example'; // string | The local identifier assigned to a section.
$session_name = 'session_name_example'; // string | The identifier for the calendar for the academic session.
$student_unique_id = 'student_unique_id_example'; // string | A unique alphanumeric code assigned to a student.
$performance_base_conversion_descriptor = 'performance_base_conversion_descriptor_example'; // string | A conversion of the level to a standard set of performance levels.
$current_grade_as_of_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | As-Of date for a grade posted as the current grade.
$current_grade_indicator = True; // bool | An indicator that the posted grade is an interim grade for the grading period and not the final grade.
$diagnostic_statement = 'diagnostic_statement_example'; // string | A statement provided by the teacher that provides information in addition to the grade or assessment score.
$grade_earned_description = 'grade_earned_description_example'; // string | A description of the grade earned by the learner.
$id = 'id_example'; // string | 
$letter_grade_earned = 'letter_grade_earned_example'; // string | A final or interim (grading period) indicator of student performance in a class as submitted by the instructor.
$numeric_grade_earned = 3.4; // float | A final or interim (grading period) indicator of student performance in a class as submitted by the instructor.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getGrades($offset, $limit, $page_token, $page_size, $min_change_version, $max_change_version, $total_count, $grade_type_descriptor, $grading_period_descriptor, $grading_period_name, $school_id, $grading_period_school_year, $begin_date, $local_course_code, $school_year, $section_identifier, $session_name, $student_unique_id, $performance_base_conversion_descriptor, $current_grade_as_of_date, $current_grade_indicator, $diagnostic_statement, $grade_earned_description, $id, $letter_grade_earned, $numeric_grade_earned, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GradesApi->getGrades: ', $e->getMessage(), PHP_EOL;
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
| **grade_type_descriptor** | **string**| The type of grade reported (e.g., exam, final, grading period). | [optional] |
| **grading_period_descriptor** | **string**| The state&#39;s name of the period for which grades are reported. | [optional] |
| **grading_period_name** | **string**| The school&#39;s descriptive name of the grading period. | [optional] |
| **school_id** | **int**| The identifier assigned to a school. It must be distinct from any other identifier assigned to educational organizations, such as a LocalEducationAgencyId, to prevent duplication. | [optional] |
| **grading_period_school_year** | **int**| The identifier for the grading period school year. | [optional] |
| **begin_date** | **\DateTime**| Month, day, and year of the student&#39;s entry or assignment to the section.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines. | [optional] |
| **local_course_code** | **string**| The local code assigned by the School that identifies the course offering provided for the instruction of students. | [optional] |
| **school_year** | **int**| The identifier for the school year. | [optional] |
| **section_identifier** | **string**| The local identifier assigned to a section. | [optional] |
| **session_name** | **string**| The identifier for the calendar for the academic session. | [optional] |
| **student_unique_id** | **string**| A unique alphanumeric code assigned to a student. | [optional] |
| **performance_base_conversion_descriptor** | **string**| A conversion of the level to a standard set of performance levels. | [optional] |
| **current_grade_as_of_date** | **\DateTime**| As-Of date for a grade posted as the current grade. | [optional] |
| **current_grade_indicator** | **bool**| An indicator that the posted grade is an interim grade for the grading period and not the final grade. | [optional] |
| **diagnostic_statement** | **string**| A statement provided by the teacher that provides information in addition to the grade or assessment score. | [optional] |
| **grade_earned_description** | **string**| A description of the grade earned by the learner. | [optional] |
| **id** | **string**|  | [optional] |
| **letter_grade_earned** | **string**| A final or interim (grading period) indicator of student performance in a class as submitted by the instructor. | [optional] |
| **numeric_grade_earned** | **float**| A final or interim (grading period) indicator of student performance in a class as submitted by the instructor. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiGrade[]**](../Model/EdFiGrade.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGradesById()`

```php
getGradesById($id, $if_none_match, $use_snapshot): \Resources\Model\EdFiGrade
```

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\GradesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_none_match = 'if_none_match_example'; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getGradesById($id, $if_none_match, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GradesApi->getGradesById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiGrade**](../Model/EdFiGrade.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGradesPartitions()`

```php
getGradesPartitions($number, $min_change_version, $max_change_version, $grade_type_descriptor, $grading_period_descriptor, $grading_period_name, $school_id, $grading_period_school_year, $begin_date, $local_course_code, $school_year, $section_identifier, $session_name, $student_unique_id, $performance_base_conversion_descriptor, $current_grade_as_of_date, $current_grade_indicator, $diagnostic_statement, $grade_earned_description, $id, $letter_grade_earned, $numeric_grade_earned, $use_snapshot): \Resources\Model\GetAcademicWeeksPartitions200Response
```

Retrieves a set of page tokens to be used for efficient client-side parallel processing.

Computes an evenly distributed set of partitions over the accessible data and returns a set of page tokens, each representing the first page of one of the partitions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\GradesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$number = 56; // int | The number of evenly distributed partitions to provide for client-side parallel processing. If unspecified, a reasonable set of partitions will be determined based on the total number of accessible items.
$min_change_version = 56; // int | Used in synchronization to set sequence minimum ChangeVersion
$max_change_version = 56; // int | Used in synchronization to set sequence maximum ChangeVersion
$grade_type_descriptor = 'grade_type_descriptor_example'; // string | The type of grade reported (e.g., exam, final, grading period).
$grading_period_descriptor = 'grading_period_descriptor_example'; // string | The state's name of the period for which grades are reported.
$grading_period_name = 'grading_period_name_example'; // string | The school's descriptive name of the grading period.
$school_id = 56; // int | The identifier assigned to a school. It must be distinct from any other identifier assigned to educational organizations, such as a LocalEducationAgencyId, to prevent duplication.
$grading_period_school_year = 56; // int | The identifier for the grading period school year.
$begin_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Month, day, and year of the student's entry or assignment to the section.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines.
$local_course_code = 'local_course_code_example'; // string | The local code assigned by the School that identifies the course offering provided for the instruction of students.
$school_year = 56; // int | The identifier for the school year.
$section_identifier = 'section_identifier_example'; // string | The local identifier assigned to a section.
$session_name = 'session_name_example'; // string | The identifier for the calendar for the academic session.
$student_unique_id = 'student_unique_id_example'; // string | A unique alphanumeric code assigned to a student.
$performance_base_conversion_descriptor = 'performance_base_conversion_descriptor_example'; // string | A conversion of the level to a standard set of performance levels.
$current_grade_as_of_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | As-Of date for a grade posted as the current grade.
$current_grade_indicator = True; // bool | An indicator that the posted grade is an interim grade for the grading period and not the final grade.
$diagnostic_statement = 'diagnostic_statement_example'; // string | A statement provided by the teacher that provides information in addition to the grade or assessment score.
$grade_earned_description = 'grade_earned_description_example'; // string | A description of the grade earned by the learner.
$id = 'id_example'; // string | 
$letter_grade_earned = 'letter_grade_earned_example'; // string | A final or interim (grading period) indicator of student performance in a class as submitted by the instructor.
$numeric_grade_earned = 3.4; // float | A final or interim (grading period) indicator of student performance in a class as submitted by the instructor.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getGradesPartitions($number, $min_change_version, $max_change_version, $grade_type_descriptor, $grading_period_descriptor, $grading_period_name, $school_id, $grading_period_school_year, $begin_date, $local_course_code, $school_year, $section_identifier, $session_name, $student_unique_id, $performance_base_conversion_descriptor, $current_grade_as_of_date, $current_grade_indicator, $diagnostic_statement, $grade_earned_description, $id, $letter_grade_earned, $numeric_grade_earned, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GradesApi->getGradesPartitions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **number** | **int**| The number of evenly distributed partitions to provide for client-side parallel processing. If unspecified, a reasonable set of partitions will be determined based on the total number of accessible items. | [optional] |
| **min_change_version** | **int**| Used in synchronization to set sequence minimum ChangeVersion | [optional] |
| **max_change_version** | **int**| Used in synchronization to set sequence maximum ChangeVersion | [optional] |
| **grade_type_descriptor** | **string**| The type of grade reported (e.g., exam, final, grading period). | [optional] |
| **grading_period_descriptor** | **string**| The state&#39;s name of the period for which grades are reported. | [optional] |
| **grading_period_name** | **string**| The school&#39;s descriptive name of the grading period. | [optional] |
| **school_id** | **int**| The identifier assigned to a school. It must be distinct from any other identifier assigned to educational organizations, such as a LocalEducationAgencyId, to prevent duplication. | [optional] |
| **grading_period_school_year** | **int**| The identifier for the grading period school year. | [optional] |
| **begin_date** | **\DateTime**| Month, day, and year of the student&#39;s entry or assignment to the section.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines. | [optional] |
| **local_course_code** | **string**| The local code assigned by the School that identifies the course offering provided for the instruction of students. | [optional] |
| **school_year** | **int**| The identifier for the school year. | [optional] |
| **section_identifier** | **string**| The local identifier assigned to a section. | [optional] |
| **session_name** | **string**| The identifier for the calendar for the academic session. | [optional] |
| **student_unique_id** | **string**| A unique alphanumeric code assigned to a student. | [optional] |
| **performance_base_conversion_descriptor** | **string**| A conversion of the level to a standard set of performance levels. | [optional] |
| **current_grade_as_of_date** | **\DateTime**| As-Of date for a grade posted as the current grade. | [optional] |
| **current_grade_indicator** | **bool**| An indicator that the posted grade is an interim grade for the grading period and not the final grade. | [optional] |
| **diagnostic_statement** | **string**| A statement provided by the teacher that provides information in addition to the grade or assessment score. | [optional] |
| **grade_earned_description** | **string**| A description of the grade earned by the learner. | [optional] |
| **id** | **string**|  | [optional] |
| **letter_grade_earned** | **string**| A final or interim (grading period) indicator of student performance in a class as submitted by the instructor. | [optional] |
| **numeric_grade_earned** | **float**| A final or interim (grading period) indicator of student performance in a class as submitted by the instructor. | [optional] |
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

## `keyChangesGrades()`

```php
keyChangesGrades($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiGradeKeyChange[]
```

Retrieves resources key changes based on change version.

This operation is used to retrieve identifying information about resources whose key values have been changed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\GradesApi(
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
    $result = $apiInstance->keyChangesGrades($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GradesApi->keyChangesGrades: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiGradeKeyChange[]**](../Model/TrackedChangesEdFiGradeKeyChange.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postGrade()`

```php
postGrade($ed_fi_grade)
```

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update). Clients should NOT include the resource \"id\" in the JSON body because it will result in an error. The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately. It is recommended to use POST for both create and update except while updating natural key of a resource in which case PUT operation must be used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\GradesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ed_fi_grade = new \Resources\Model\EdFiGrade(); // \Resources\Model\EdFiGrade | The JSON representation of the \"grade\" resource to be created or updated.

try {
    $apiInstance->postGrade($ed_fi_grade);
} catch (Exception $e) {
    echo 'Exception when calling GradesApi->postGrade: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ed_fi_grade** | [**\Resources\Model\EdFiGrade**](../Model/EdFiGrade.md)| The JSON representation of the \&quot;grade\&quot; resource to be created or updated. | |

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

## `putGrade()`

```php
putGrade($id, $ed_fi_grade, $if_match)
```

Updates a resource based on the resource identifier.

The PUT operation is used to update a resource by identifier. If the resource identifier (\"id\") is provided in the JSON body, it will be ignored. Additionally, if natural key values are being updated by the JSON body, those changes will be applied to the resource and will also cascade through to dependent resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\GradesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$ed_fi_grade = new \Resources\Model\EdFiGrade(); // \Resources\Model\EdFiGrade | The JSON representation of the \"grade\" resource to be created or updated.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try {
    $apiInstance->putGrade($id, $ed_fi_grade, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling GradesApi->putGrade: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **ed_fi_grade** | [**\Resources\Model\EdFiGrade**](../Model/EdFiGrade.md)| The JSON representation of the \&quot;grade\&quot; resource to be created or updated. | |
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
