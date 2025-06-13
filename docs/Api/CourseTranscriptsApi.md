# Resources\CourseTranscriptsApi

All URIs are relative to https://api.ed-fi.org:443/v7.2/api/data/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteCourseTranscriptById()**](CourseTranscriptsApi.md#deleteCourseTranscriptById) | **DELETE** /ed-fi/courseTranscripts/{id} | Deletes an existing resource using the resource identifier. |
| [**deletesCourseTranscripts()**](CourseTranscriptsApi.md#deletesCourseTranscripts) | **GET** /ed-fi/courseTranscripts/deletes | Retrieves deleted resources based on change version. |
| [**getCourseTranscripts()**](CourseTranscriptsApi.md#getCourseTranscripts) | **GET** /ed-fi/courseTranscripts | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern). |
| [**getCourseTranscriptsById()**](CourseTranscriptsApi.md#getCourseTranscriptsById) | **GET** /ed-fi/courseTranscripts/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern). |
| [**keyChangesCourseTranscripts()**](CourseTranscriptsApi.md#keyChangesCourseTranscripts) | **GET** /ed-fi/courseTranscripts/keyChanges | Retrieves resources key changes based on change version. |
| [**postCourseTranscript()**](CourseTranscriptsApi.md#postCourseTranscript) | **POST** /ed-fi/courseTranscripts | Creates or updates resources based on the natural key values of the supplied resource. |
| [**putCourseTranscript()**](CourseTranscriptsApi.md#putCourseTranscript) | **PUT** /ed-fi/courseTranscripts/{id} | Updates a resource based on the resource identifier. |


## `deleteCourseTranscriptById()`

```php
deleteCourseTranscriptById($id, $if_match)
```

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier. If the resource doesn't exist, an error will result (the resource will not be found).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\CourseTranscriptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try {
    $apiInstance->deleteCourseTranscriptById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling CourseTranscriptsApi->deleteCourseTranscriptById: ', $e->getMessage(), PHP_EOL;
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

## `deletesCourseTranscripts()`

```php
deletesCourseTranscripts($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiCourseTranscriptDelete[]
```

Retrieves deleted resources based on change version.

This operation is used to retrieve identifying information about resources that have been deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\CourseTranscriptsApi(
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
    $result = $apiInstance->deletesCourseTranscripts($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseTranscriptsApi->deletesCourseTranscripts: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiCourseTranscriptDelete[]**](../Model/TrackedChangesEdFiCourseTranscriptDelete.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCourseTranscripts()`

```php
getCourseTranscripts($offset, $limit, $min_change_version, $max_change_version, $total_count, $course_attempt_result_descriptor, $course_code, $course_education_organization_id, $education_organization_id, $school_year, $student_unique_id, $term_descriptor, $external_education_organization_id, $responsible_teacher_staff_unique_id, $course_repeat_code_descriptor, $attempted_credit_type_descriptor, $earned_credit_type_descriptor, $when_taken_grade_level_descriptor, $method_credit_earned_descriptor, $alternative_course_title, $assigning_organization_identification_code, $attempted_credit_conversion, $attempted_credits, $course_catalog_url, $course_title, $earned_credit_conversion, $earned_credits, $external_education_organization_name_of_institution, $final_letter_grade_earned, $final_numeric_grade_earned, $id, $use_snapshot): \Resources\Model\EdFiCourseTranscript[]
```

Retrieves specific resources using the resource's property values (using the \"Get\" pattern).

This GET operation provides access to resources using the \"Get\" search pattern.  The values of any properties of the resource that are specified will be used to return all matching results (if it exists).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\CourseTranscriptsApi(
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
$course_attempt_result_descriptor = 'course_attempt_result_descriptor_example'; // string | The result from the student's attempt to take the course.
$course_code = 'course_code_example'; // string | A unique alphanumeric code assigned to a course.
$course_education_organization_id = 56; // int | The identifier assigned to an education organization.
$education_organization_id = 56; // int | The identifier assigned to an education organization.
$school_year = 56; // int | The identifier for the school year.
$student_unique_id = 'student_unique_id_example'; // string | A unique alphanumeric code assigned to a student.
$term_descriptor = 'term_descriptor_example'; // string | The term for the session during the school year.
$external_education_organization_id = 56; // int | The identifier assigned to an education organization.
$responsible_teacher_staff_unique_id = 'responsible_teacher_staff_unique_id_example'; // string | A unique alphanumeric code assigned to a responsibleteacherstaff.
$course_repeat_code_descriptor = 'course_repeat_code_descriptor_example'; // string | Indicates that an academic course has been repeated by a student and how that repeat is to be computed in the student's academic grade average.
$attempted_credit_type_descriptor = 'attempted_credit_type_descriptor_example'; // string | The type of credits or units of value awarded for the completion of a course.
$earned_credit_type_descriptor = 'earned_credit_type_descriptor_example'; // string | The type of credits or units of value awarded for the completion of a course.
$when_taken_grade_level_descriptor = 'when_taken_grade_level_descriptor_example'; // string | Student's grade level at time of course.
$method_credit_earned_descriptor = 'method_credit_earned_descriptor_example'; // string | The method the credits were earned.
$alternative_course_title = 'alternative_course_title_example'; // string | The descriptive name given to a course of study offered in the school, if different from the CourseTitle.
$assigning_organization_identification_code = 'assigning_organization_identification_code_example'; // string | The organization code or name assigning the course identification code.
$attempted_credit_conversion = 3.4; // float | Conversion factor that when multiplied by the number of credits is equivalent to Carnegie units.
$attempted_credits = 3.4; // float | The value of credits or units of value awarded for the completion of a course.
$course_catalog_url = 'course_catalog_url_example'; // string | The URL for the course catalog that defines the course identification code.
$course_title = 'course_title_example'; // string | The descriptive name given to a course of study offered in a school or other institution or organization. In departmentalized classes at the elementary, secondary, and postsecondary levels (and for staff development activities), this refers to the name by which a course is identified (e.g., American History, English III). For elementary and other non-departmentalized classes, it refers to any portion of the instruction for which a grade or report is assigned (e.g., reading, composition, spelling, language arts).
$earned_credit_conversion = 3.4; // float | Conversion factor that when multiplied by the number of credits is equivalent to Carnegie units.
$earned_credits = 3.4; // float | The value of credits or units of value awarded for the completion of a course.
$external_education_organization_name_of_institution = 'external_education_organization_name_of_institution_example'; // string | Name of the external institution where the student completed the course; to be used only when the reference external education organization is not available.
$final_letter_grade_earned = 'final_letter_grade_earned_example'; // string | The final indicator of student performance in a class as submitted by the instructor.
$final_numeric_grade_earned = 3.4; // float | The final indicator of student performance in a class as submitted by the instructor.
$id = 'id_example'; // string | 
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getCourseTranscripts($offset, $limit, $min_change_version, $max_change_version, $total_count, $course_attempt_result_descriptor, $course_code, $course_education_organization_id, $education_organization_id, $school_year, $student_unique_id, $term_descriptor, $external_education_organization_id, $responsible_teacher_staff_unique_id, $course_repeat_code_descriptor, $attempted_credit_type_descriptor, $earned_credit_type_descriptor, $when_taken_grade_level_descriptor, $method_credit_earned_descriptor, $alternative_course_title, $assigning_organization_identification_code, $attempted_credit_conversion, $attempted_credits, $course_catalog_url, $course_title, $earned_credit_conversion, $earned_credits, $external_education_organization_name_of_institution, $final_letter_grade_earned, $final_numeric_grade_earned, $id, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseTranscriptsApi->getCourseTranscripts: ', $e->getMessage(), PHP_EOL;
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
| **course_attempt_result_descriptor** | **string**| The result from the student&#39;s attempt to take the course. | [optional] |
| **course_code** | **string**| A unique alphanumeric code assigned to a course. | [optional] |
| **course_education_organization_id** | **int**| The identifier assigned to an education organization. | [optional] |
| **education_organization_id** | **int**| The identifier assigned to an education organization. | [optional] |
| **school_year** | **int**| The identifier for the school year. | [optional] |
| **student_unique_id** | **string**| A unique alphanumeric code assigned to a student. | [optional] |
| **term_descriptor** | **string**| The term for the session during the school year. | [optional] |
| **external_education_organization_id** | **int**| The identifier assigned to an education organization. | [optional] |
| **responsible_teacher_staff_unique_id** | **string**| A unique alphanumeric code assigned to a responsibleteacherstaff. | [optional] |
| **course_repeat_code_descriptor** | **string**| Indicates that an academic course has been repeated by a student and how that repeat is to be computed in the student&#39;s academic grade average. | [optional] |
| **attempted_credit_type_descriptor** | **string**| The type of credits or units of value awarded for the completion of a course. | [optional] |
| **earned_credit_type_descriptor** | **string**| The type of credits or units of value awarded for the completion of a course. | [optional] |
| **when_taken_grade_level_descriptor** | **string**| Student&#39;s grade level at time of course. | [optional] |
| **method_credit_earned_descriptor** | **string**| The method the credits were earned. | [optional] |
| **alternative_course_title** | **string**| The descriptive name given to a course of study offered in the school, if different from the CourseTitle. | [optional] |
| **assigning_organization_identification_code** | **string**| The organization code or name assigning the course identification code. | [optional] |
| **attempted_credit_conversion** | **float**| Conversion factor that when multiplied by the number of credits is equivalent to Carnegie units. | [optional] |
| **attempted_credits** | **float**| The value of credits or units of value awarded for the completion of a course. | [optional] |
| **course_catalog_url** | **string**| The URL for the course catalog that defines the course identification code. | [optional] |
| **course_title** | **string**| The descriptive name given to a course of study offered in a school or other institution or organization. In departmentalized classes at the elementary, secondary, and postsecondary levels (and for staff development activities), this refers to the name by which a course is identified (e.g., American History, English III). For elementary and other non-departmentalized classes, it refers to any portion of the instruction for which a grade or report is assigned (e.g., reading, composition, spelling, language arts). | [optional] |
| **earned_credit_conversion** | **float**| Conversion factor that when multiplied by the number of credits is equivalent to Carnegie units. | [optional] |
| **earned_credits** | **float**| The value of credits or units of value awarded for the completion of a course. | [optional] |
| **external_education_organization_name_of_institution** | **string**| Name of the external institution where the student completed the course; to be used only when the reference external education organization is not available. | [optional] |
| **final_letter_grade_earned** | **string**| The final indicator of student performance in a class as submitted by the instructor. | [optional] |
| **final_numeric_grade_earned** | **float**| The final indicator of student performance in a class as submitted by the instructor. | [optional] |
| **id** | **string**|  | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiCourseTranscript[]**](../Model/EdFiCourseTranscript.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCourseTranscriptsById()`

```php
getCourseTranscriptsById($id, $if_none_match, $use_snapshot): \Resources\Model\EdFiCourseTranscript
```

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\CourseTranscriptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_none_match = 'if_none_match_example'; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getCourseTranscriptsById($id, $if_none_match, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseTranscriptsApi->getCourseTranscriptsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiCourseTranscript**](../Model/EdFiCourseTranscript.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `keyChangesCourseTranscripts()`

```php
keyChangesCourseTranscripts($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiCourseTranscriptKeyChange[]
```

Retrieves resources key changes based on change version.

This operation is used to retrieve identifying information about resources whose key values have been changed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\CourseTranscriptsApi(
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
    $result = $apiInstance->keyChangesCourseTranscripts($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseTranscriptsApi->keyChangesCourseTranscripts: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiCourseTranscriptKeyChange[]**](../Model/TrackedChangesEdFiCourseTranscriptKeyChange.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCourseTranscript()`

```php
postCourseTranscript($ed_fi_course_transcript)
```

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update). Clients should NOT include the resource \"id\" in the JSON body because it will result in an error. The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately. It is recommended to use POST for both create and update except while updating natural key of a resource in which case PUT operation must be used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\CourseTranscriptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ed_fi_course_transcript = new \Resources\Model\EdFiCourseTranscript(); // \Resources\Model\EdFiCourseTranscript | The JSON representation of the \"courseTranscript\" resource to be created or updated.

try {
    $apiInstance->postCourseTranscript($ed_fi_course_transcript);
} catch (Exception $e) {
    echo 'Exception when calling CourseTranscriptsApi->postCourseTranscript: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ed_fi_course_transcript** | [**\Resources\Model\EdFiCourseTranscript**](../Model/EdFiCourseTranscript.md)| The JSON representation of the \&quot;courseTranscript\&quot; resource to be created or updated. | |

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

## `putCourseTranscript()`

```php
putCourseTranscript($id, $ed_fi_course_transcript, $if_match)
```

Updates a resource based on the resource identifier.

The PUT operation is used to update a resource by identifier. If the resource identifier (\"id\") is provided in the JSON body, it will be ignored. Additionally, this API resource is not configured for cascading natural key updates. Natural key values for this resource cannot be changed using PUT operation, so the recommendation is to use POST as that supports upsert behavior.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\CourseTranscriptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$ed_fi_course_transcript = new \Resources\Model\EdFiCourseTranscript(); // \Resources\Model\EdFiCourseTranscript | The JSON representation of the \"courseTranscript\" resource to be created or updated.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try {
    $apiInstance->putCourseTranscript($id, $ed_fi_course_transcript, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling CourseTranscriptsApi->putCourseTranscript: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **ed_fi_course_transcript** | [**\Resources\Model\EdFiCourseTranscript**](../Model/EdFiCourseTranscript.md)| The JSON representation of the \&quot;courseTranscript\&quot; resource to be created or updated. | |
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
