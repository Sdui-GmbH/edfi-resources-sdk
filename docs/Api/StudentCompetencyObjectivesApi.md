# Resources\StudentCompetencyObjectivesApi

All URIs are relative to https://api.ed-fi.org:443/v7.1/api/data/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteStudentCompetencyObjectiveById()**](StudentCompetencyObjectivesApi.md#deleteStudentCompetencyObjectiveById) | **DELETE** /ed-fi/studentCompetencyObjectives/{id} | Deletes an existing resource using the resource identifier. |
| [**deletesStudentCompetencyObjectives()**](StudentCompetencyObjectivesApi.md#deletesStudentCompetencyObjectives) | **GET** /ed-fi/studentCompetencyObjectives/deletes | Retrieves deleted resources based on change version. |
| [**getStudentCompetencyObjectives()**](StudentCompetencyObjectivesApi.md#getStudentCompetencyObjectives) | **GET** /ed-fi/studentCompetencyObjectives | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern). |
| [**getStudentCompetencyObjectivesById()**](StudentCompetencyObjectivesApi.md#getStudentCompetencyObjectivesById) | **GET** /ed-fi/studentCompetencyObjectives/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern). |
| [**keyChangesStudentCompetencyObjectives()**](StudentCompetencyObjectivesApi.md#keyChangesStudentCompetencyObjectives) | **GET** /ed-fi/studentCompetencyObjectives/keyChanges | Retrieves resources key changes based on change version. |
| [**postStudentCompetencyObjective()**](StudentCompetencyObjectivesApi.md#postStudentCompetencyObjective) | **POST** /ed-fi/studentCompetencyObjectives | Creates or updates resources based on the natural key values of the supplied resource. |
| [**putStudentCompetencyObjective()**](StudentCompetencyObjectivesApi.md#putStudentCompetencyObjective) | **PUT** /ed-fi/studentCompetencyObjectives/{id} | Updates a resource based on the resource identifier. |


## `deleteStudentCompetencyObjectiveById()`

```php
deleteStudentCompetencyObjectiveById($id, $if_match)
```

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier. If the resource doesn't exist, an error will result (the resource will not be found).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentCompetencyObjectivesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try {
    $apiInstance->deleteStudentCompetencyObjectiveById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StudentCompetencyObjectivesApi->deleteStudentCompetencyObjectiveById: ', $e->getMessage(), PHP_EOL;
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

## `deletesStudentCompetencyObjectives()`

```php
deletesStudentCompetencyObjectives($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiStudentCompetencyObjectiveDelete[]
```

Retrieves deleted resources based on change version.

This operation is used to retrieve identifying information about resources that have been deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentCompetencyObjectivesApi(
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
    $result = $apiInstance->deletesStudentCompetencyObjectives($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentCompetencyObjectivesApi->deletesStudentCompetencyObjectives: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiStudentCompetencyObjectiveDelete[]**](../Model/TrackedChangesEdFiStudentCompetencyObjectiveDelete.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStudentCompetencyObjectives()`

```php
getStudentCompetencyObjectives($offset, $limit, $min_change_version, $max_change_version, $total_count, $objective_education_organization_id, $objective, $objective_grade_level_descriptor, $grading_period_descriptor, $grading_period_name, $grading_period_school_id, $grading_period_school_year, $student_unique_id, $competency_level_descriptor, $diagnostic_statement, $id, $use_snapshot): \Resources\Model\EdFiStudentCompetencyObjective[]
```

Retrieves specific resources using the resource's property values (using the \"Get\" pattern).

This GET operation provides access to resources using the \"Get\" search pattern.  The values of any properties of the resource that are specified will be used to return all matching results (if it exists).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentCompetencyObjectivesApi(
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
$objective_education_organization_id = 56; // int | The identifier assigned to an education organization.
$objective = 'objective_example'; // string | The designated title of the competency objective.
$objective_grade_level_descriptor = 'objective_grade_level_descriptor_example'; // string | The grade level for which the competency objective is targeted.
$grading_period_descriptor = 'grading_period_descriptor_example'; // string | The state's name of the period for which grades are reported.
$grading_period_name = 'grading_period_name_example'; // string | The school's descriptive name of the grading period.
$grading_period_school_id = 56; // int | The identifier assigned to a school.
$grading_period_school_year = 56; // int | The identifier for the grading period school year.
$student_unique_id = 'student_unique_id_example'; // string | A unique alphanumeric code assigned to a student.
$competency_level_descriptor = 'competency_level_descriptor_example'; // string | The competency level assessed for the student for the referenced competency objective.
$diagnostic_statement = 'diagnostic_statement_example'; // string | A statement provided by the teacher that provides information in addition to the grade or assessment score.
$id = 'id_example'; // string | 
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getStudentCompetencyObjectives($offset, $limit, $min_change_version, $max_change_version, $total_count, $objective_education_organization_id, $objective, $objective_grade_level_descriptor, $grading_period_descriptor, $grading_period_name, $grading_period_school_id, $grading_period_school_year, $student_unique_id, $competency_level_descriptor, $diagnostic_statement, $id, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentCompetencyObjectivesApi->getStudentCompetencyObjectives: ', $e->getMessage(), PHP_EOL;
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
| **objective_education_organization_id** | **int**| The identifier assigned to an education organization. | [optional] |
| **objective** | **string**| The designated title of the competency objective. | [optional] |
| **objective_grade_level_descriptor** | **string**| The grade level for which the competency objective is targeted. | [optional] |
| **grading_period_descriptor** | **string**| The state&#39;s name of the period for which grades are reported. | [optional] |
| **grading_period_name** | **string**| The school&#39;s descriptive name of the grading period. | [optional] |
| **grading_period_school_id** | **int**| The identifier assigned to a school. | [optional] |
| **grading_period_school_year** | **int**| The identifier for the grading period school year. | [optional] |
| **student_unique_id** | **string**| A unique alphanumeric code assigned to a student. | [optional] |
| **competency_level_descriptor** | **string**| The competency level assessed for the student for the referenced competency objective. | [optional] |
| **diagnostic_statement** | **string**| A statement provided by the teacher that provides information in addition to the grade or assessment score. | [optional] |
| **id** | **string**|  | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiStudentCompetencyObjective[]**](../Model/EdFiStudentCompetencyObjective.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStudentCompetencyObjectivesById()`

```php
getStudentCompetencyObjectivesById($id, $if_none_match, $use_snapshot): \Resources\Model\EdFiStudentCompetencyObjective
```

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentCompetencyObjectivesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_none_match = 'if_none_match_example'; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getStudentCompetencyObjectivesById($id, $if_none_match, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentCompetencyObjectivesApi->getStudentCompetencyObjectivesById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiStudentCompetencyObjective**](../Model/EdFiStudentCompetencyObjective.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `keyChangesStudentCompetencyObjectives()`

```php
keyChangesStudentCompetencyObjectives($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiStudentCompetencyObjectiveKeyChange[]
```

Retrieves resources key changes based on change version.

This operation is used to retrieve identifying information about resources whose key values have been changed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentCompetencyObjectivesApi(
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
    $result = $apiInstance->keyChangesStudentCompetencyObjectives($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentCompetencyObjectivesApi->keyChangesStudentCompetencyObjectives: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiStudentCompetencyObjectiveKeyChange[]**](../Model/TrackedChangesEdFiStudentCompetencyObjectiveKeyChange.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postStudentCompetencyObjective()`

```php
postStudentCompetencyObjective($ed_fi_student_competency_objective)
```

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update). Clients should NOT include the resource \"id\" in the JSON body because it will result in an error. The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately. It is recommended to use POST for both create and update except while updating natural key of a resource in which case PUT operation must be used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentCompetencyObjectivesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ed_fi_student_competency_objective = new \Resources\Model\EdFiStudentCompetencyObjective(); // \Resources\Model\EdFiStudentCompetencyObjective | The JSON representation of the \"studentCompetencyObjective\" resource to be created or updated.

try {
    $apiInstance->postStudentCompetencyObjective($ed_fi_student_competency_objective);
} catch (Exception $e) {
    echo 'Exception when calling StudentCompetencyObjectivesApi->postStudentCompetencyObjective: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ed_fi_student_competency_objective** | [**\Resources\Model\EdFiStudentCompetencyObjective**](../Model/EdFiStudentCompetencyObjective.md)| The JSON representation of the \&quot;studentCompetencyObjective\&quot; resource to be created or updated. | |

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

## `putStudentCompetencyObjective()`

```php
putStudentCompetencyObjective($id, $ed_fi_student_competency_objective, $if_match)
```

Updates a resource based on the resource identifier.

The PUT operation is used to update a resource by identifier. If the resource identifier (\"id\") is provided in the JSON body, it will be ignored. Additionally, this API resource is not configured for cascading natural key updates. Natural key values for this resource cannot be changed using PUT operation, so the recommendation is to use POST as that supports upsert behavior.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentCompetencyObjectivesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$ed_fi_student_competency_objective = new \Resources\Model\EdFiStudentCompetencyObjective(); // \Resources\Model\EdFiStudentCompetencyObjective | The JSON representation of the \"studentCompetencyObjective\" resource to be created or updated.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try {
    $apiInstance->putStudentCompetencyObjective($id, $ed_fi_student_competency_objective, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StudentCompetencyObjectivesApi->putStudentCompetencyObjective: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **ed_fi_student_competency_objective** | [**\Resources\Model\EdFiStudentCompetencyObjective**](../Model/EdFiStudentCompetencyObjective.md)| The JSON representation of the \&quot;studentCompetencyObjective\&quot; resource to be created or updated. | |
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
