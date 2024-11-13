# Resources\StudentAssessmentsApi

All URIs are relative to https://api.ed-fi.org:443/v7.1/api/data/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteStudentAssessmentById()**](StudentAssessmentsApi.md#deleteStudentAssessmentById) | **DELETE** /ed-fi/studentAssessments/{id} | Deletes an existing resource using the resource identifier. |
| [**deletesStudentAssessments()**](StudentAssessmentsApi.md#deletesStudentAssessments) | **GET** /ed-fi/studentAssessments/deletes | Retrieves deleted resources based on change version. |
| [**getStudentAssessments()**](StudentAssessmentsApi.md#getStudentAssessments) | **GET** /ed-fi/studentAssessments | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern). |
| [**getStudentAssessmentsById()**](StudentAssessmentsApi.md#getStudentAssessmentsById) | **GET** /ed-fi/studentAssessments/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern). |
| [**keyChangesStudentAssessments()**](StudentAssessmentsApi.md#keyChangesStudentAssessments) | **GET** /ed-fi/studentAssessments/keyChanges | Retrieves resources key changes based on change version. |
| [**postStudentAssessment()**](StudentAssessmentsApi.md#postStudentAssessment) | **POST** /ed-fi/studentAssessments | Creates or updates resources based on the natural key values of the supplied resource. |
| [**putStudentAssessment()**](StudentAssessmentsApi.md#putStudentAssessment) | **PUT** /ed-fi/studentAssessments/{id} | Updates a resource based on the resource identifier. |


## `deleteStudentAssessmentById()`

```php
deleteStudentAssessmentById($id, $if_match)
```

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier. If the resource doesn't exist, an error will result (the resource will not be found).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentAssessmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try {
    $apiInstance->deleteStudentAssessmentById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StudentAssessmentsApi->deleteStudentAssessmentById: ', $e->getMessage(), PHP_EOL;
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

## `deletesStudentAssessments()`

```php
deletesStudentAssessments($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiStudentAssessmentDelete[]
```

Retrieves deleted resources based on change version.

This operation is used to retrieve identifying information about resources that have been deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentAssessmentsApi(
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
    $result = $apiInstance->deletesStudentAssessments($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentAssessmentsApi->deletesStudentAssessments: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiStudentAssessmentDelete[]**](../Model/TrackedChangesEdFiStudentAssessmentDelete.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStudentAssessments()`

```php
getStudentAssessments($offset, $limit, $min_change_version, $max_change_version, $total_count, $student_assessment_identifier, $assessment_identifier, $namespace, $student_unique_id, $reported_school_id, $school_year, $administration_environment_descriptor, $event_circumstance_descriptor, $when_assessed_grade_level_descriptor, $administration_language_descriptor, $platform_type_descriptor, $reason_not_tested_descriptor, $retest_indicator_descriptor, $administration_date, $administration_end_date, $assessed_minutes, $event_description, $id, $reported_school_identifier, $serial_number, $use_snapshot): \Resources\Model\EdFiStudentAssessment[]
```

Retrieves specific resources using the resource's property values (using the \"Get\" pattern).

This GET operation provides access to resources using the \"Get\" search pattern.  The values of any properties of the resource that are specified will be used to return all matching results (if it exists).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentAssessmentsApi(
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
$student_assessment_identifier = 'student_assessment_identifier_example'; // string | A unique number or alphanumeric code assigned to an assessment administered to a student.
$assessment_identifier = 'assessment_identifier_example'; // string | A unique number or alphanumeric code assigned to an assessment.
$namespace = 'namespace_example'; // string | Namespace for the assessment.
$student_unique_id = 'student_unique_id_example'; // string | A unique alphanumeric code assigned to a student.
$reported_school_id = 56; // int | The identifier assigned to a school.
$school_year = 56; // int | The school year for which the assessment was administered to a student. Among other uses, handles cases in which a student takes a prior-year exam in a subsequent school year during an exam re-test.
$administration_environment_descriptor = 'administration_environment_descriptor_example'; // string | The environment in which the test was administered.
$event_circumstance_descriptor = 'event_circumstance_descriptor_example'; // string | An unusual event occurred during the administration of the assessment. This could include fire alarm, student became ill, etc.
$when_assessed_grade_level_descriptor = 'when_assessed_grade_level_descriptor_example'; // string | The grade level of a student when assessed.
$administration_language_descriptor = 'administration_language_descriptor_example'; // string | The language in which an assessment is written and/or administered.
$platform_type_descriptor = 'platform_type_descriptor_example'; // string | The platform with which the assessment was delivered to the student during the assessment session.
$reason_not_tested_descriptor = 'reason_not_tested_descriptor_example'; // string | The primary reason student is not tested.
$retest_indicator_descriptor = 'retest_indicator_descriptor_example'; // string | Indicator if the test was a retake.
$administration_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date and time an assessment was completed by the student. The use of ISO-8601 formats with a timezone designator (UTC or time offset) is recommended in order to prevent ambiguity due to time zones.
$administration_end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date and time an assessment administration ended.
$assessed_minutes = 56; // int | Reported time student was assessed in minutes.
$event_description = 'event_description_example'; // string | Describes special events that occur before during or after the assessment session that may impact use of results.
$id = 'id_example'; // string | 
$reported_school_identifier = 'reported_school_identifier_example'; // string | A reported school identifier for the school the enrollment at the time of the assessment used when the assigned SchoolId is not known by the assessment vendor.
$serial_number = 'serial_number_example'; // string | The unique number for the assessment form or answer document.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getStudentAssessments($offset, $limit, $min_change_version, $max_change_version, $total_count, $student_assessment_identifier, $assessment_identifier, $namespace, $student_unique_id, $reported_school_id, $school_year, $administration_environment_descriptor, $event_circumstance_descriptor, $when_assessed_grade_level_descriptor, $administration_language_descriptor, $platform_type_descriptor, $reason_not_tested_descriptor, $retest_indicator_descriptor, $administration_date, $administration_end_date, $assessed_minutes, $event_description, $id, $reported_school_identifier, $serial_number, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentAssessmentsApi->getStudentAssessments: ', $e->getMessage(), PHP_EOL;
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
| **student_assessment_identifier** | **string**| A unique number or alphanumeric code assigned to an assessment administered to a student. | [optional] |
| **assessment_identifier** | **string**| A unique number or alphanumeric code assigned to an assessment. | [optional] |
| **namespace** | **string**| Namespace for the assessment. | [optional] |
| **student_unique_id** | **string**| A unique alphanumeric code assigned to a student. | [optional] |
| **reported_school_id** | **int**| The identifier assigned to a school. | [optional] |
| **school_year** | **int**| The school year for which the assessment was administered to a student. Among other uses, handles cases in which a student takes a prior-year exam in a subsequent school year during an exam re-test. | [optional] |
| **administration_environment_descriptor** | **string**| The environment in which the test was administered. | [optional] |
| **event_circumstance_descriptor** | **string**| An unusual event occurred during the administration of the assessment. This could include fire alarm, student became ill, etc. | [optional] |
| **when_assessed_grade_level_descriptor** | **string**| The grade level of a student when assessed. | [optional] |
| **administration_language_descriptor** | **string**| The language in which an assessment is written and/or administered. | [optional] |
| **platform_type_descriptor** | **string**| The platform with which the assessment was delivered to the student during the assessment session. | [optional] |
| **reason_not_tested_descriptor** | **string**| The primary reason student is not tested. | [optional] |
| **retest_indicator_descriptor** | **string**| Indicator if the test was a retake. | [optional] |
| **administration_date** | **\DateTime**| The date and time an assessment was completed by the student. The use of ISO-8601 formats with a timezone designator (UTC or time offset) is recommended in order to prevent ambiguity due to time zones. | [optional] |
| **administration_end_date** | **\DateTime**| The date and time an assessment administration ended. | [optional] |
| **assessed_minutes** | **int**| Reported time student was assessed in minutes. | [optional] |
| **event_description** | **string**| Describes special events that occur before during or after the assessment session that may impact use of results. | [optional] |
| **id** | **string**|  | [optional] |
| **reported_school_identifier** | **string**| A reported school identifier for the school the enrollment at the time of the assessment used when the assigned SchoolId is not known by the assessment vendor. | [optional] |
| **serial_number** | **string**| The unique number for the assessment form or answer document. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiStudentAssessment[]**](../Model/EdFiStudentAssessment.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStudentAssessmentsById()`

```php
getStudentAssessmentsById($id, $if_none_match, $use_snapshot): \Resources\Model\EdFiStudentAssessment
```

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentAssessmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_none_match = 'if_none_match_example'; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getStudentAssessmentsById($id, $if_none_match, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentAssessmentsApi->getStudentAssessmentsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiStudentAssessment**](../Model/EdFiStudentAssessment.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `keyChangesStudentAssessments()`

```php
keyChangesStudentAssessments($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiStudentAssessmentKeyChange[]
```

Retrieves resources key changes based on change version.

This operation is used to retrieve identifying information about resources whose key values have been changed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentAssessmentsApi(
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
    $result = $apiInstance->keyChangesStudentAssessments($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentAssessmentsApi->keyChangesStudentAssessments: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiStudentAssessmentKeyChange[]**](../Model/TrackedChangesEdFiStudentAssessmentKeyChange.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postStudentAssessment()`

```php
postStudentAssessment($ed_fi_student_assessment)
```

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update). Clients should NOT include the resource \"id\" in the JSON body because it will result in an error. The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately. It is recommended to use POST for both create and update except while updating natural key of a resource in which case PUT operation must be used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentAssessmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ed_fi_student_assessment = new \Resources\Model\EdFiStudentAssessment(); // \Resources\Model\EdFiStudentAssessment | The JSON representation of the \"studentAssessment\" resource to be created or updated.

try {
    $apiInstance->postStudentAssessment($ed_fi_student_assessment);
} catch (Exception $e) {
    echo 'Exception when calling StudentAssessmentsApi->postStudentAssessment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ed_fi_student_assessment** | [**\Resources\Model\EdFiStudentAssessment**](../Model/EdFiStudentAssessment.md)| The JSON representation of the \&quot;studentAssessment\&quot; resource to be created or updated. | |

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

## `putStudentAssessment()`

```php
putStudentAssessment($id, $ed_fi_student_assessment, $if_match)
```

Updates a resource based on the resource identifier.

The PUT operation is used to update a resource by identifier. If the resource identifier (\"id\") is provided in the JSON body, it will be ignored. Additionally, this API resource is not configured for cascading natural key updates. Natural key values for this resource cannot be changed using PUT operation, so the recommendation is to use POST as that supports upsert behavior.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentAssessmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$ed_fi_student_assessment = new \Resources\Model\EdFiStudentAssessment(); // \Resources\Model\EdFiStudentAssessment | The JSON representation of the \"studentAssessment\" resource to be created or updated.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try {
    $apiInstance->putStudentAssessment($id, $ed_fi_student_assessment, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StudentAssessmentsApi->putStudentAssessment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **ed_fi_student_assessment** | [**\Resources\Model\EdFiStudentAssessment**](../Model/EdFiStudentAssessment.md)| The JSON representation of the \&quot;studentAssessment\&quot; resource to be created or updated. | |
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
