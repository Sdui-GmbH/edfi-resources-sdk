# Resources\CoursesApi

All URIs are relative to https://api.ed-fi.org:443/v7.3/api/data/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteCourseById()**](CoursesApi.md#deleteCourseById) | **DELETE** /ed-fi/courses/{id} | Deletes an existing resource using the resource identifier. |
| [**deletesCourses()**](CoursesApi.md#deletesCourses) | **GET** /ed-fi/courses/deletes | Retrieves deleted resources based on change version. |
| [**getCourses()**](CoursesApi.md#getCourses) | **GET** /ed-fi/courses | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern). |
| [**getCoursesById()**](CoursesApi.md#getCoursesById) | **GET** /ed-fi/courses/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern). |
| [**getCoursesPartitions()**](CoursesApi.md#getCoursesPartitions) | **GET** /ed-fi/courses/partitions | Retrieves a set of page tokens to be used for efficient client-side parallel processing. |
| [**keyChangesCourses()**](CoursesApi.md#keyChangesCourses) | **GET** /ed-fi/courses/keyChanges | Retrieves resources key changes based on change version. |
| [**postCourse()**](CoursesApi.md#postCourse) | **POST** /ed-fi/courses | Creates or updates resources based on the natural key values of the supplied resource. |
| [**putCourse()**](CoursesApi.md#putCourse) | **PUT** /ed-fi/courses/{id} | Updates a resource based on the resource identifier. |


## `deleteCourseById()`

```php
deleteCourseById($id, $if_match)
```

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier. If the resource doesn't exist, an error will result (the resource will not be found).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\CoursesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try {
    $apiInstance->deleteCourseById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling CoursesApi->deleteCourseById: ', $e->getMessage(), PHP_EOL;
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

## `deletesCourses()`

```php
deletesCourses($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiCourseDelete[]
```

Retrieves deleted resources based on change version.

This operation is used to retrieve identifying information about resources that have been deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\CoursesApi(
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
    $result = $apiInstance->deletesCourses($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoursesApi->deletesCourses: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiCourseDelete[]**](../Model/TrackedChangesEdFiCourseDelete.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCourses()`

```php
getCourses($offset, $limit, $page_token, $page_size, $min_change_version, $max_change_version, $total_count, $course_code, $education_organization_id, $career_pathway_descriptor, $course_defined_by_descriptor, $course_gpa_applicability_descriptor, $minimum_available_credit_type_descriptor, $maximum_available_credit_type_descriptor, $course_description, $course_title, $date_course_adopted, $high_school_course_requirement, $id, $max_completions_for_credit, $maximum_available_credit_conversion, $maximum_available_credits, $minimum_available_credit_conversion, $minimum_available_credits, $number_of_parts, $time_required_for_completion, $use_snapshot, $course_identification_system_descriptor, $assigning_organization_identification_code, $course_catalog_url, $identification_code): \Resources\Model\EdFiCourse[]
```

Retrieves specific resources using the resource's property values (using the \"Get\" pattern).

This GET operation provides access to resources using the \"Get\" search pattern.  The values of any properties of the resource that are specified will be used to return all matching results (if it exists).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\CoursesApi(
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
$course_code = 'course_code_example'; // string | A unique alphanumeric code assigned to a course.
$education_organization_id = 56; // int | The identifier assigned to an education organization.
$career_pathway_descriptor = 'career_pathway_descriptor_example'; // string | Indicates the career cluster or pathway the course is associated with as part of a CTE curriculum.
$course_defined_by_descriptor = 'course_defined_by_descriptor_example'; // string | Specifies whether the course was defined by the SEA, LEA, School, or national organization.
$course_gpa_applicability_descriptor = 'course_gpa_applicability_descriptor_example'; // string | An indicator of whether or not the course being described is included in the computation of the student's grade point average, and if so, if it is weighted differently from regular courses.
$minimum_available_credit_type_descriptor = 'minimum_available_credit_type_descriptor_example'; // string | The type of credits or units of value awarded for the completion of a course.
$maximum_available_credit_type_descriptor = 'maximum_available_credit_type_descriptor_example'; // string | The type of credits or units of value awarded for the completion of a course.
$course_description = 'course_description_example'; // string | A description of the content standards and goals covered in the course. Reference may be made to state or national content standards.
$course_title = 'course_title_example'; // string | The descriptive name given to a course of study offered in a school or other institution or organization. In departmentalized classes at the elementary, secondary, and postsecondary levels (and for staff development activities), this refers to the name by which a course is identified (e.g., American History, English III). For elementary and other non-departmentalized classes, it refers to any portion of the instruction for which a grade or report is assigned (e.g., reading, composition, spelling, and language arts).
$date_course_adopted = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date the course was adopted by the education agency.
$high_school_course_requirement = True; // bool | An indication that this course may satisfy high school graduation requirements in the course's subject area.
$id = 'id_example'; // string | 
$max_completions_for_credit = 56; // int | Designates how many times the course may be taken with credit received by the student.
$maximum_available_credit_conversion = 3.4; // float | Conversion factor that when multiplied by the number of credits is equivalent to Carnegie units.
$maximum_available_credits = 3.4; // float | The value of credits or units of value awarded for the completion of a course.
$minimum_available_credit_conversion = 3.4; // float | Conversion factor that when multiplied by the number of credits is equivalent to Carnegie units.
$minimum_available_credits = 3.4; // float | The value of credits or units of value awarded for the completion of a course.
$number_of_parts = 56; // int | The number of parts identified for a course.
$time_required_for_completion = 56; // int | The actual or estimated number of clock minutes required for class completion. This number is especially important for career and technical education classes and may represent (in minutes) the clock hour requirement of the class.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.
$course_identification_system_descriptor = 'course_identification_system_descriptor_example'; // string | A system that is used to identify the organization of subject matter and related learning experiences provided for the instruction of students.
$assigning_organization_identification_code = 'assigning_organization_identification_code_example'; // string | The organization code or name assigning the Identification Code.
$course_catalog_url = 'course_catalog_url_example'; // string | The URL for the course catalog that defines the course identification code.
$identification_code = 'identification_code_example'; // string | A unique number or alphanumeric code assigned to a course by a school, school system, state, or other agency or entity. For multi-part course codes, concatenate the parts separated by a \"/\". For example, consider the following SCED code-    subject = 20 Math    course = 272 Geometry    level = G General    credits = 1.00   course sequence 1 of 1- would be entered as 20/272/G/1.00/1 of 1.

try {
    $result = $apiInstance->getCourses($offset, $limit, $page_token, $page_size, $min_change_version, $max_change_version, $total_count, $course_code, $education_organization_id, $career_pathway_descriptor, $course_defined_by_descriptor, $course_gpa_applicability_descriptor, $minimum_available_credit_type_descriptor, $maximum_available_credit_type_descriptor, $course_description, $course_title, $date_course_adopted, $high_school_course_requirement, $id, $max_completions_for_credit, $maximum_available_credit_conversion, $maximum_available_credits, $minimum_available_credit_conversion, $minimum_available_credits, $number_of_parts, $time_required_for_completion, $use_snapshot, $course_identification_system_descriptor, $assigning_organization_identification_code, $course_catalog_url, $identification_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoursesApi->getCourses: ', $e->getMessage(), PHP_EOL;
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
| **course_code** | **string**| A unique alphanumeric code assigned to a course. | [optional] |
| **education_organization_id** | **int**| The identifier assigned to an education organization. | [optional] |
| **career_pathway_descriptor** | **string**| Indicates the career cluster or pathway the course is associated with as part of a CTE curriculum. | [optional] |
| **course_defined_by_descriptor** | **string**| Specifies whether the course was defined by the SEA, LEA, School, or national organization. | [optional] |
| **course_gpa_applicability_descriptor** | **string**| An indicator of whether or not the course being described is included in the computation of the student&#39;s grade point average, and if so, if it is weighted differently from regular courses. | [optional] |
| **minimum_available_credit_type_descriptor** | **string**| The type of credits or units of value awarded for the completion of a course. | [optional] |
| **maximum_available_credit_type_descriptor** | **string**| The type of credits or units of value awarded for the completion of a course. | [optional] |
| **course_description** | **string**| A description of the content standards and goals covered in the course. Reference may be made to state or national content standards. | [optional] |
| **course_title** | **string**| The descriptive name given to a course of study offered in a school or other institution or organization. In departmentalized classes at the elementary, secondary, and postsecondary levels (and for staff development activities), this refers to the name by which a course is identified (e.g., American History, English III). For elementary and other non-departmentalized classes, it refers to any portion of the instruction for which a grade or report is assigned (e.g., reading, composition, spelling, and language arts). | [optional] |
| **date_course_adopted** | **\DateTime**| Date the course was adopted by the education agency. | [optional] |
| **high_school_course_requirement** | **bool**| An indication that this course may satisfy high school graduation requirements in the course&#39;s subject area. | [optional] |
| **id** | **string**|  | [optional] |
| **max_completions_for_credit** | **int**| Designates how many times the course may be taken with credit received by the student. | [optional] |
| **maximum_available_credit_conversion** | **float**| Conversion factor that when multiplied by the number of credits is equivalent to Carnegie units. | [optional] |
| **maximum_available_credits** | **float**| The value of credits or units of value awarded for the completion of a course. | [optional] |
| **minimum_available_credit_conversion** | **float**| Conversion factor that when multiplied by the number of credits is equivalent to Carnegie units. | [optional] |
| **minimum_available_credits** | **float**| The value of credits or units of value awarded for the completion of a course. | [optional] |
| **number_of_parts** | **int**| The number of parts identified for a course. | [optional] |
| **time_required_for_completion** | **int**| The actual or estimated number of clock minutes required for class completion. This number is especially important for career and technical education classes and may represent (in minutes) the clock hour requirement of the class. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |
| **course_identification_system_descriptor** | **string**| A system that is used to identify the organization of subject matter and related learning experiences provided for the instruction of students. | [optional] |
| **assigning_organization_identification_code** | **string**| The organization code or name assigning the Identification Code. | [optional] |
| **course_catalog_url** | **string**| The URL for the course catalog that defines the course identification code. | [optional] |
| **identification_code** | **string**| A unique number or alphanumeric code assigned to a course by a school, school system, state, or other agency or entity. For multi-part course codes, concatenate the parts separated by a \&quot;/\&quot;. For example, consider the following SCED code-    subject &#x3D; 20 Math    course &#x3D; 272 Geometry    level &#x3D; G General    credits &#x3D; 1.00   course sequence 1 of 1- would be entered as 20/272/G/1.00/1 of 1. | [optional] |

### Return type

[**\Resources\Model\EdFiCourse[]**](../Model/EdFiCourse.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCoursesById()`

```php
getCoursesById($id, $if_none_match, $use_snapshot): \Resources\Model\EdFiCourse
```

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\CoursesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_none_match = 'if_none_match_example'; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getCoursesById($id, $if_none_match, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoursesApi->getCoursesById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiCourse**](../Model/EdFiCourse.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCoursesPartitions()`

```php
getCoursesPartitions($number, $min_change_version, $max_change_version, $course_code, $education_organization_id, $career_pathway_descriptor, $course_defined_by_descriptor, $course_gpa_applicability_descriptor, $minimum_available_credit_type_descriptor, $maximum_available_credit_type_descriptor, $course_description, $course_title, $date_course_adopted, $high_school_course_requirement, $id, $max_completions_for_credit, $maximum_available_credit_conversion, $maximum_available_credits, $minimum_available_credit_conversion, $minimum_available_credits, $number_of_parts, $time_required_for_completion, $use_snapshot, $course_identification_system_descriptor, $assigning_organization_identification_code, $course_catalog_url, $identification_code): \Resources\Model\GetAcademicWeeksPartitions200Response
```

Retrieves a set of page tokens to be used for efficient client-side parallel processing.

Computes an evenly distributed set of partitions over the accessible data and returns a set of page tokens, each representing the first page of one of the partitions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\CoursesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$number = 56; // int | The number of evenly distributed partitions to provide for client-side parallel processing. If unspecified, a reasonable set of partitions will be determined based on the total number of accessible items.
$min_change_version = 56; // int | Used in synchronization to set sequence minimum ChangeVersion
$max_change_version = 56; // int | Used in synchronization to set sequence maximum ChangeVersion
$course_code = 'course_code_example'; // string | A unique alphanumeric code assigned to a course.
$education_organization_id = 56; // int | The identifier assigned to an education organization.
$career_pathway_descriptor = 'career_pathway_descriptor_example'; // string | Indicates the career cluster or pathway the course is associated with as part of a CTE curriculum.
$course_defined_by_descriptor = 'course_defined_by_descriptor_example'; // string | Specifies whether the course was defined by the SEA, LEA, School, or national organization.
$course_gpa_applicability_descriptor = 'course_gpa_applicability_descriptor_example'; // string | An indicator of whether or not the course being described is included in the computation of the student's grade point average, and if so, if it is weighted differently from regular courses.
$minimum_available_credit_type_descriptor = 'minimum_available_credit_type_descriptor_example'; // string | The type of credits or units of value awarded for the completion of a course.
$maximum_available_credit_type_descriptor = 'maximum_available_credit_type_descriptor_example'; // string | The type of credits or units of value awarded for the completion of a course.
$course_description = 'course_description_example'; // string | A description of the content standards and goals covered in the course. Reference may be made to state or national content standards.
$course_title = 'course_title_example'; // string | The descriptive name given to a course of study offered in a school or other institution or organization. In departmentalized classes at the elementary, secondary, and postsecondary levels (and for staff development activities), this refers to the name by which a course is identified (e.g., American History, English III). For elementary and other non-departmentalized classes, it refers to any portion of the instruction for which a grade or report is assigned (e.g., reading, composition, spelling, and language arts).
$date_course_adopted = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date the course was adopted by the education agency.
$high_school_course_requirement = True; // bool | An indication that this course may satisfy high school graduation requirements in the course's subject area.
$id = 'id_example'; // string | 
$max_completions_for_credit = 56; // int | Designates how many times the course may be taken with credit received by the student.
$maximum_available_credit_conversion = 3.4; // float | Conversion factor that when multiplied by the number of credits is equivalent to Carnegie units.
$maximum_available_credits = 3.4; // float | The value of credits or units of value awarded for the completion of a course.
$minimum_available_credit_conversion = 3.4; // float | Conversion factor that when multiplied by the number of credits is equivalent to Carnegie units.
$minimum_available_credits = 3.4; // float | The value of credits or units of value awarded for the completion of a course.
$number_of_parts = 56; // int | The number of parts identified for a course.
$time_required_for_completion = 56; // int | The actual or estimated number of clock minutes required for class completion. This number is especially important for career and technical education classes and may represent (in minutes) the clock hour requirement of the class.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.
$course_identification_system_descriptor = 'course_identification_system_descriptor_example'; // string | A system that is used to identify the organization of subject matter and related learning experiences provided for the instruction of students.
$assigning_organization_identification_code = 'assigning_organization_identification_code_example'; // string | The organization code or name assigning the Identification Code.
$course_catalog_url = 'course_catalog_url_example'; // string | The URL for the course catalog that defines the course identification code.
$identification_code = 'identification_code_example'; // string | A unique number or alphanumeric code assigned to a course by a school, school system, state, or other agency or entity. For multi-part course codes, concatenate the parts separated by a \"/\". For example, consider the following SCED code-    subject = 20 Math    course = 272 Geometry    level = G General    credits = 1.00   course sequence 1 of 1- would be entered as 20/272/G/1.00/1 of 1.

try {
    $result = $apiInstance->getCoursesPartitions($number, $min_change_version, $max_change_version, $course_code, $education_organization_id, $career_pathway_descriptor, $course_defined_by_descriptor, $course_gpa_applicability_descriptor, $minimum_available_credit_type_descriptor, $maximum_available_credit_type_descriptor, $course_description, $course_title, $date_course_adopted, $high_school_course_requirement, $id, $max_completions_for_credit, $maximum_available_credit_conversion, $maximum_available_credits, $minimum_available_credit_conversion, $minimum_available_credits, $number_of_parts, $time_required_for_completion, $use_snapshot, $course_identification_system_descriptor, $assigning_organization_identification_code, $course_catalog_url, $identification_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoursesApi->getCoursesPartitions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **number** | **int**| The number of evenly distributed partitions to provide for client-side parallel processing. If unspecified, a reasonable set of partitions will be determined based on the total number of accessible items. | [optional] |
| **min_change_version** | **int**| Used in synchronization to set sequence minimum ChangeVersion | [optional] |
| **max_change_version** | **int**| Used in synchronization to set sequence maximum ChangeVersion | [optional] |
| **course_code** | **string**| A unique alphanumeric code assigned to a course. | [optional] |
| **education_organization_id** | **int**| The identifier assigned to an education organization. | [optional] |
| **career_pathway_descriptor** | **string**| Indicates the career cluster or pathway the course is associated with as part of a CTE curriculum. | [optional] |
| **course_defined_by_descriptor** | **string**| Specifies whether the course was defined by the SEA, LEA, School, or national organization. | [optional] |
| **course_gpa_applicability_descriptor** | **string**| An indicator of whether or not the course being described is included in the computation of the student&#39;s grade point average, and if so, if it is weighted differently from regular courses. | [optional] |
| **minimum_available_credit_type_descriptor** | **string**| The type of credits or units of value awarded for the completion of a course. | [optional] |
| **maximum_available_credit_type_descriptor** | **string**| The type of credits or units of value awarded for the completion of a course. | [optional] |
| **course_description** | **string**| A description of the content standards and goals covered in the course. Reference may be made to state or national content standards. | [optional] |
| **course_title** | **string**| The descriptive name given to a course of study offered in a school or other institution or organization. In departmentalized classes at the elementary, secondary, and postsecondary levels (and for staff development activities), this refers to the name by which a course is identified (e.g., American History, English III). For elementary and other non-departmentalized classes, it refers to any portion of the instruction for which a grade or report is assigned (e.g., reading, composition, spelling, and language arts). | [optional] |
| **date_course_adopted** | **\DateTime**| Date the course was adopted by the education agency. | [optional] |
| **high_school_course_requirement** | **bool**| An indication that this course may satisfy high school graduation requirements in the course&#39;s subject area. | [optional] |
| **id** | **string**|  | [optional] |
| **max_completions_for_credit** | **int**| Designates how many times the course may be taken with credit received by the student. | [optional] |
| **maximum_available_credit_conversion** | **float**| Conversion factor that when multiplied by the number of credits is equivalent to Carnegie units. | [optional] |
| **maximum_available_credits** | **float**| The value of credits or units of value awarded for the completion of a course. | [optional] |
| **minimum_available_credit_conversion** | **float**| Conversion factor that when multiplied by the number of credits is equivalent to Carnegie units. | [optional] |
| **minimum_available_credits** | **float**| The value of credits or units of value awarded for the completion of a course. | [optional] |
| **number_of_parts** | **int**| The number of parts identified for a course. | [optional] |
| **time_required_for_completion** | **int**| The actual or estimated number of clock minutes required for class completion. This number is especially important for career and technical education classes and may represent (in minutes) the clock hour requirement of the class. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |
| **course_identification_system_descriptor** | **string**| A system that is used to identify the organization of subject matter and related learning experiences provided for the instruction of students. | [optional] |
| **assigning_organization_identification_code** | **string**| The organization code or name assigning the Identification Code. | [optional] |
| **course_catalog_url** | **string**| The URL for the course catalog that defines the course identification code. | [optional] |
| **identification_code** | **string**| A unique number or alphanumeric code assigned to a course by a school, school system, state, or other agency or entity. For multi-part course codes, concatenate the parts separated by a \&quot;/\&quot;. For example, consider the following SCED code-    subject &#x3D; 20 Math    course &#x3D; 272 Geometry    level &#x3D; G General    credits &#x3D; 1.00   course sequence 1 of 1- would be entered as 20/272/G/1.00/1 of 1. | [optional] |

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

## `keyChangesCourses()`

```php
keyChangesCourses($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiCourseKeyChange[]
```

Retrieves resources key changes based on change version.

This operation is used to retrieve identifying information about resources whose key values have been changed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\CoursesApi(
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
    $result = $apiInstance->keyChangesCourses($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoursesApi->keyChangesCourses: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiCourseKeyChange[]**](../Model/TrackedChangesEdFiCourseKeyChange.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCourse()`

```php
postCourse($ed_fi_course)
```

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update). Clients should NOT include the resource \"id\" in the JSON body because it will result in an error. The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately. It is recommended to use POST for both create and update except while updating natural key of a resource in which case PUT operation must be used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\CoursesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ed_fi_course = new \Resources\Model\EdFiCourse(); // \Resources\Model\EdFiCourse | The JSON representation of the \"course\" resource to be created or updated.

try {
    $apiInstance->postCourse($ed_fi_course);
} catch (Exception $e) {
    echo 'Exception when calling CoursesApi->postCourse: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ed_fi_course** | [**\Resources\Model\EdFiCourse**](../Model/EdFiCourse.md)| The JSON representation of the \&quot;course\&quot; resource to be created or updated. | |

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

## `putCourse()`

```php
putCourse($id, $ed_fi_course, $if_match)
```

Updates a resource based on the resource identifier.

The PUT operation is used to update a resource by identifier. If the resource identifier (\"id\") is provided in the JSON body, it will be ignored. Additionally, this API resource is not configured for cascading natural key updates. Natural key values for this resource cannot be changed using PUT operation, so the recommendation is to use POST as that supports upsert behavior.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\CoursesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$ed_fi_course = new \Resources\Model\EdFiCourse(); // \Resources\Model\EdFiCourse | The JSON representation of the \"course\" resource to be created or updated.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try {
    $apiInstance->putCourse($id, $ed_fi_course, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling CoursesApi->putCourse: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **ed_fi_course** | [**\Resources\Model\EdFiCourse**](../Model/EdFiCourse.md)| The JSON representation of the \&quot;course\&quot; resource to be created or updated. | |
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
