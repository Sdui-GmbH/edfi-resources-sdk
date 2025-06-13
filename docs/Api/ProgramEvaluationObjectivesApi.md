# Resources\ProgramEvaluationObjectivesApi

All URIs are relative to https://api.ed-fi.org:443/v7.3/api/data/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteProgramEvaluationObjectiveById()**](ProgramEvaluationObjectivesApi.md#deleteProgramEvaluationObjectiveById) | **DELETE** /ed-fi/programEvaluationObjectives/{id} | Deletes an existing resource using the resource identifier. |
| [**deletesProgramEvaluationObjectives()**](ProgramEvaluationObjectivesApi.md#deletesProgramEvaluationObjectives) | **GET** /ed-fi/programEvaluationObjectives/deletes | Retrieves deleted resources based on change version. |
| [**getProgramEvaluationObjectives()**](ProgramEvaluationObjectivesApi.md#getProgramEvaluationObjectives) | **GET** /ed-fi/programEvaluationObjectives | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern). |
| [**getProgramEvaluationObjectivesById()**](ProgramEvaluationObjectivesApi.md#getProgramEvaluationObjectivesById) | **GET** /ed-fi/programEvaluationObjectives/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern). |
| [**getProgramEvaluationObjectivesPartitions()**](ProgramEvaluationObjectivesApi.md#getProgramEvaluationObjectivesPartitions) | **GET** /ed-fi/programEvaluationObjectives/partitions | Retrieves a set of page tokens to be used for efficient client-side parallel processing. |
| [**keyChangesProgramEvaluationObjectives()**](ProgramEvaluationObjectivesApi.md#keyChangesProgramEvaluationObjectives) | **GET** /ed-fi/programEvaluationObjectives/keyChanges | Retrieves resources key changes based on change version. |
| [**postProgramEvaluationObjective()**](ProgramEvaluationObjectivesApi.md#postProgramEvaluationObjective) | **POST** /ed-fi/programEvaluationObjectives | Creates or updates resources based on the natural key values of the supplied resource. |
| [**putProgramEvaluationObjective()**](ProgramEvaluationObjectivesApi.md#putProgramEvaluationObjective) | **PUT** /ed-fi/programEvaluationObjectives/{id} | Updates a resource based on the resource identifier. |


## `deleteProgramEvaluationObjectiveById()`

```php
deleteProgramEvaluationObjectiveById($id, $if_match)
```

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier. If the resource doesn't exist, an error will result (the resource will not be found).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\ProgramEvaluationObjectivesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try {
    $apiInstance->deleteProgramEvaluationObjectiveById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling ProgramEvaluationObjectivesApi->deleteProgramEvaluationObjectiveById: ', $e->getMessage(), PHP_EOL;
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

## `deletesProgramEvaluationObjectives()`

```php
deletesProgramEvaluationObjectives($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiProgramEvaluationObjectiveDelete[]
```

Retrieves deleted resources based on change version.

This operation is used to retrieve identifying information about resources that have been deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\ProgramEvaluationObjectivesApi(
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
    $result = $apiInstance->deletesProgramEvaluationObjectives($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramEvaluationObjectivesApi->deletesProgramEvaluationObjectives: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiProgramEvaluationObjectiveDelete[]**](../Model/TrackedChangesEdFiProgramEvaluationObjectiveDelete.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProgramEvaluationObjectives()`

```php
getProgramEvaluationObjectives($offset, $limit, $page_token, $page_size, $min_change_version, $max_change_version, $total_count, $program_evaluation_objective_title, $program_education_organization_id, $program_evaluation_period_descriptor, $program_evaluation_title, $program_evaluation_type_descriptor, $program_name, $program_type_descriptor, $id, $objective_max_numeric_rating, $objective_min_numeric_rating, $objective_sort_order, $program_evaluation_objective_description, $use_snapshot): \Resources\Model\EdFiProgramEvaluationObjective[]
```

Retrieves specific resources using the resource's property values (using the \"Get\" pattern).

This GET operation provides access to resources using the \"Get\" search pattern.  The values of any properties of the resource that are specified will be used to return all matching results (if it exists).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\ProgramEvaluationObjectivesApi(
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
$program_evaluation_objective_title = 'program_evaluation_objective_title_example'; // string | The name or title of the program evaluation objective.
$program_education_organization_id = 56; // int | The identifier assigned to an education organization.
$program_evaluation_period_descriptor = 'program_evaluation_period_descriptor_example'; // string | The name of the period for the program evaluation.
$program_evaluation_title = 'program_evaluation_title_example'; // string | An assigned unique identifier for the student program evaluation.
$program_evaluation_type_descriptor = 'program_evaluation_type_descriptor_example'; // string | The type of program evaluation conducted.
$program_name = 'program_name_example'; // string | The formal name of the program of instruction, training, services, or benefits available through federal, state, or local agencies.
$program_type_descriptor = 'program_type_descriptor_example'; // string | The type of program.
$id = 'id_example'; // string | 
$objective_max_numeric_rating = 3.4; // float | The maximum summary numerical rating or score for the program evaluation objective.
$objective_min_numeric_rating = 3.4; // float | The minimum summary numerical rating or score for the program evaluation objective. If omitted, assumed to be 0.0
$objective_sort_order = 56; // int | The sort order of this program evaluation objective.
$program_evaluation_objective_description = 'program_evaluation_objective_description_example'; // string | The long description of the program evaluation objective.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getProgramEvaluationObjectives($offset, $limit, $page_token, $page_size, $min_change_version, $max_change_version, $total_count, $program_evaluation_objective_title, $program_education_organization_id, $program_evaluation_period_descriptor, $program_evaluation_title, $program_evaluation_type_descriptor, $program_name, $program_type_descriptor, $id, $objective_max_numeric_rating, $objective_min_numeric_rating, $objective_sort_order, $program_evaluation_objective_description, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramEvaluationObjectivesApi->getProgramEvaluationObjectives: ', $e->getMessage(), PHP_EOL;
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
| **program_evaluation_objective_title** | **string**| The name or title of the program evaluation objective. | [optional] |
| **program_education_organization_id** | **int**| The identifier assigned to an education organization. | [optional] |
| **program_evaluation_period_descriptor** | **string**| The name of the period for the program evaluation. | [optional] |
| **program_evaluation_title** | **string**| An assigned unique identifier for the student program evaluation. | [optional] |
| **program_evaluation_type_descriptor** | **string**| The type of program evaluation conducted. | [optional] |
| **program_name** | **string**| The formal name of the program of instruction, training, services, or benefits available through federal, state, or local agencies. | [optional] |
| **program_type_descriptor** | **string**| The type of program. | [optional] |
| **id** | **string**|  | [optional] |
| **objective_max_numeric_rating** | **float**| The maximum summary numerical rating or score for the program evaluation objective. | [optional] |
| **objective_min_numeric_rating** | **float**| The minimum summary numerical rating or score for the program evaluation objective. If omitted, assumed to be 0.0 | [optional] |
| **objective_sort_order** | **int**| The sort order of this program evaluation objective. | [optional] |
| **program_evaluation_objective_description** | **string**| The long description of the program evaluation objective. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiProgramEvaluationObjective[]**](../Model/EdFiProgramEvaluationObjective.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProgramEvaluationObjectivesById()`

```php
getProgramEvaluationObjectivesById($id, $if_none_match, $use_snapshot): \Resources\Model\EdFiProgramEvaluationObjective
```

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\ProgramEvaluationObjectivesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_none_match = 'if_none_match_example'; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getProgramEvaluationObjectivesById($id, $if_none_match, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramEvaluationObjectivesApi->getProgramEvaluationObjectivesById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiProgramEvaluationObjective**](../Model/EdFiProgramEvaluationObjective.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProgramEvaluationObjectivesPartitions()`

```php
getProgramEvaluationObjectivesPartitions($number, $min_change_version, $max_change_version, $program_evaluation_objective_title, $program_education_organization_id, $program_evaluation_period_descriptor, $program_evaluation_title, $program_evaluation_type_descriptor, $program_name, $program_type_descriptor, $id, $objective_max_numeric_rating, $objective_min_numeric_rating, $objective_sort_order, $program_evaluation_objective_description, $use_snapshot): \Resources\Model\GetAcademicWeeksPartitions200Response
```

Retrieves a set of page tokens to be used for efficient client-side parallel processing.

Computes an evenly distributed set of partitions over the accessible data and returns a set of page tokens, each representing the first page of one of the partitions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\ProgramEvaluationObjectivesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$number = 56; // int | The number of evenly distributed partitions to provide for client-side parallel processing. If unspecified, a reasonable set of partitions will be determined based on the total number of accessible items.
$min_change_version = 56; // int | Used in synchronization to set sequence minimum ChangeVersion
$max_change_version = 56; // int | Used in synchronization to set sequence maximum ChangeVersion
$program_evaluation_objective_title = 'program_evaluation_objective_title_example'; // string | The name or title of the program evaluation objective.
$program_education_organization_id = 56; // int | The identifier assigned to an education organization.
$program_evaluation_period_descriptor = 'program_evaluation_period_descriptor_example'; // string | The name of the period for the program evaluation.
$program_evaluation_title = 'program_evaluation_title_example'; // string | An assigned unique identifier for the student program evaluation.
$program_evaluation_type_descriptor = 'program_evaluation_type_descriptor_example'; // string | The type of program evaluation conducted.
$program_name = 'program_name_example'; // string | The formal name of the program of instruction, training, services, or benefits available through federal, state, or local agencies.
$program_type_descriptor = 'program_type_descriptor_example'; // string | The type of program.
$id = 'id_example'; // string | 
$objective_max_numeric_rating = 3.4; // float | The maximum summary numerical rating or score for the program evaluation objective.
$objective_min_numeric_rating = 3.4; // float | The minimum summary numerical rating or score for the program evaluation objective. If omitted, assumed to be 0.0
$objective_sort_order = 56; // int | The sort order of this program evaluation objective.
$program_evaluation_objective_description = 'program_evaluation_objective_description_example'; // string | The long description of the program evaluation objective.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getProgramEvaluationObjectivesPartitions($number, $min_change_version, $max_change_version, $program_evaluation_objective_title, $program_education_organization_id, $program_evaluation_period_descriptor, $program_evaluation_title, $program_evaluation_type_descriptor, $program_name, $program_type_descriptor, $id, $objective_max_numeric_rating, $objective_min_numeric_rating, $objective_sort_order, $program_evaluation_objective_description, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramEvaluationObjectivesApi->getProgramEvaluationObjectivesPartitions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **number** | **int**| The number of evenly distributed partitions to provide for client-side parallel processing. If unspecified, a reasonable set of partitions will be determined based on the total number of accessible items. | [optional] |
| **min_change_version** | **int**| Used in synchronization to set sequence minimum ChangeVersion | [optional] |
| **max_change_version** | **int**| Used in synchronization to set sequence maximum ChangeVersion | [optional] |
| **program_evaluation_objective_title** | **string**| The name or title of the program evaluation objective. | [optional] |
| **program_education_organization_id** | **int**| The identifier assigned to an education organization. | [optional] |
| **program_evaluation_period_descriptor** | **string**| The name of the period for the program evaluation. | [optional] |
| **program_evaluation_title** | **string**| An assigned unique identifier for the student program evaluation. | [optional] |
| **program_evaluation_type_descriptor** | **string**| The type of program evaluation conducted. | [optional] |
| **program_name** | **string**| The formal name of the program of instruction, training, services, or benefits available through federal, state, or local agencies. | [optional] |
| **program_type_descriptor** | **string**| The type of program. | [optional] |
| **id** | **string**|  | [optional] |
| **objective_max_numeric_rating** | **float**| The maximum summary numerical rating or score for the program evaluation objective. | [optional] |
| **objective_min_numeric_rating** | **float**| The minimum summary numerical rating or score for the program evaluation objective. If omitted, assumed to be 0.0 | [optional] |
| **objective_sort_order** | **int**| The sort order of this program evaluation objective. | [optional] |
| **program_evaluation_objective_description** | **string**| The long description of the program evaluation objective. | [optional] |
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

## `keyChangesProgramEvaluationObjectives()`

```php
keyChangesProgramEvaluationObjectives($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiProgramEvaluationObjectiveKeyChange[]
```

Retrieves resources key changes based on change version.

This operation is used to retrieve identifying information about resources whose key values have been changed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\ProgramEvaluationObjectivesApi(
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
    $result = $apiInstance->keyChangesProgramEvaluationObjectives($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramEvaluationObjectivesApi->keyChangesProgramEvaluationObjectives: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiProgramEvaluationObjectiveKeyChange[]**](../Model/TrackedChangesEdFiProgramEvaluationObjectiveKeyChange.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProgramEvaluationObjective()`

```php
postProgramEvaluationObjective($ed_fi_program_evaluation_objective)
```

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update). Clients should NOT include the resource \"id\" in the JSON body because it will result in an error. The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately. It is recommended to use POST for both create and update except while updating natural key of a resource in which case PUT operation must be used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\ProgramEvaluationObjectivesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ed_fi_program_evaluation_objective = new \Resources\Model\EdFiProgramEvaluationObjective(); // \Resources\Model\EdFiProgramEvaluationObjective | The JSON representation of the \"programEvaluationObjective\" resource to be created or updated.

try {
    $apiInstance->postProgramEvaluationObjective($ed_fi_program_evaluation_objective);
} catch (Exception $e) {
    echo 'Exception when calling ProgramEvaluationObjectivesApi->postProgramEvaluationObjective: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ed_fi_program_evaluation_objective** | [**\Resources\Model\EdFiProgramEvaluationObjective**](../Model/EdFiProgramEvaluationObjective.md)| The JSON representation of the \&quot;programEvaluationObjective\&quot; resource to be created or updated. | |

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

## `putProgramEvaluationObjective()`

```php
putProgramEvaluationObjective($id, $ed_fi_program_evaluation_objective, $if_match)
```

Updates a resource based on the resource identifier.

The PUT operation is used to update a resource by identifier. If the resource identifier (\"id\") is provided in the JSON body, it will be ignored. Additionally, this API resource is not configured for cascading natural key updates. Natural key values for this resource cannot be changed using PUT operation, so the recommendation is to use POST as that supports upsert behavior.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\ProgramEvaluationObjectivesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$ed_fi_program_evaluation_objective = new \Resources\Model\EdFiProgramEvaluationObjective(); // \Resources\Model\EdFiProgramEvaluationObjective | The JSON representation of the \"programEvaluationObjective\" resource to be created or updated.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try {
    $apiInstance->putProgramEvaluationObjective($id, $ed_fi_program_evaluation_objective, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling ProgramEvaluationObjectivesApi->putProgramEvaluationObjective: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **ed_fi_program_evaluation_objective** | [**\Resources\Model\EdFiProgramEvaluationObjective**](../Model/EdFiProgramEvaluationObjective.md)| The JSON representation of the \&quot;programEvaluationObjective\&quot; resource to be created or updated. | |
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
