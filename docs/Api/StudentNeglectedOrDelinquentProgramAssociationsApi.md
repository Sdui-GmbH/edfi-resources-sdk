# Resources\StudentNeglectedOrDelinquentProgramAssociationsApi

All URIs are relative to https://api.ed-fi.org:443/v7.2/api/data/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteStudentNeglectedOrDelinquentProgramAssociationById()**](StudentNeglectedOrDelinquentProgramAssociationsApi.md#deleteStudentNeglectedOrDelinquentProgramAssociationById) | **DELETE** /ed-fi/studentNeglectedOrDelinquentProgramAssociations/{id} | Deletes an existing resource using the resource identifier. |
| [**deletesStudentNeglectedOrDelinquentProgramAssociations()**](StudentNeglectedOrDelinquentProgramAssociationsApi.md#deletesStudentNeglectedOrDelinquentProgramAssociations) | **GET** /ed-fi/studentNeglectedOrDelinquentProgramAssociations/deletes | Retrieves deleted resources based on change version. |
| [**getStudentNeglectedOrDelinquentProgramAssociations()**](StudentNeglectedOrDelinquentProgramAssociationsApi.md#getStudentNeglectedOrDelinquentProgramAssociations) | **GET** /ed-fi/studentNeglectedOrDelinquentProgramAssociations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern). |
| [**getStudentNeglectedOrDelinquentProgramAssociationsById()**](StudentNeglectedOrDelinquentProgramAssociationsApi.md#getStudentNeglectedOrDelinquentProgramAssociationsById) | **GET** /ed-fi/studentNeglectedOrDelinquentProgramAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern). |
| [**keyChangesStudentNeglectedOrDelinquentProgramAssociations()**](StudentNeglectedOrDelinquentProgramAssociationsApi.md#keyChangesStudentNeglectedOrDelinquentProgramAssociations) | **GET** /ed-fi/studentNeglectedOrDelinquentProgramAssociations/keyChanges | Retrieves resources key changes based on change version. |
| [**postStudentNeglectedOrDelinquentProgramAssociation()**](StudentNeglectedOrDelinquentProgramAssociationsApi.md#postStudentNeglectedOrDelinquentProgramAssociation) | **POST** /ed-fi/studentNeglectedOrDelinquentProgramAssociations | Creates or updates resources based on the natural key values of the supplied resource. |
| [**putStudentNeglectedOrDelinquentProgramAssociation()**](StudentNeglectedOrDelinquentProgramAssociationsApi.md#putStudentNeglectedOrDelinquentProgramAssociation) | **PUT** /ed-fi/studentNeglectedOrDelinquentProgramAssociations/{id} | Updates a resource based on the resource identifier. |


## `deleteStudentNeglectedOrDelinquentProgramAssociationById()`

```php
deleteStudentNeglectedOrDelinquentProgramAssociationById($id, $if_match)
```

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier. If the resource doesn't exist, an error will result (the resource will not be found).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentNeglectedOrDelinquentProgramAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try {
    $apiInstance->deleteStudentNeglectedOrDelinquentProgramAssociationById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StudentNeglectedOrDelinquentProgramAssociationsApi->deleteStudentNeglectedOrDelinquentProgramAssociationById: ', $e->getMessage(), PHP_EOL;
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

## `deletesStudentNeglectedOrDelinquentProgramAssociations()`

```php
deletesStudentNeglectedOrDelinquentProgramAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiStudentNeglectedOrDelinquentProgramAssociationDelete[]
```

Retrieves deleted resources based on change version.

This operation is used to retrieve identifying information about resources that have been deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentNeglectedOrDelinquentProgramAssociationsApi(
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
    $result = $apiInstance->deletesStudentNeglectedOrDelinquentProgramAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentNeglectedOrDelinquentProgramAssociationsApi->deletesStudentNeglectedOrDelinquentProgramAssociations: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiStudentNeglectedOrDelinquentProgramAssociationDelete[]**](../Model/TrackedChangesEdFiStudentNeglectedOrDelinquentProgramAssociationDelete.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStudentNeglectedOrDelinquentProgramAssociations()`

```php
getStudentNeglectedOrDelinquentProgramAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $begin_date, $education_organization_id, $program_education_organization_id, $program_name, $program_type_descriptor, $student_unique_id, $neglected_or_delinquent_program_descriptor, $ela_progress_level_descriptor, $mathematics_progress_level_descriptor, $id, $use_snapshot): \Resources\Model\EdFiStudentNeglectedOrDelinquentProgramAssociation[]
```

Retrieves specific resources using the resource's property values (using the \"Get\" pattern).

This GET operation provides access to resources using the \"Get\" search pattern.  The values of any properties of the resource that are specified will be used to return all matching results (if it exists).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentNeglectedOrDelinquentProgramAssociationsApi(
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
$begin_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The earliest date the student is involved with the program. Typically, this is the date the student becomes eligible for the program.
$education_organization_id = 56; // int | The identifier assigned to an education organization.
$program_education_organization_id = 56; // int | The identifier assigned to an education organization.
$program_name = 'program_name_example'; // string | The formal name of the program of instruction, training, services, or benefits available through federal, state, or local agencies.
$program_type_descriptor = 'program_type_descriptor_example'; // string | The type of program.
$student_unique_id = 'student_unique_id_example'; // string | A unique alphanumeric code assigned to a student.
$neglected_or_delinquent_program_descriptor = 'neglected_or_delinquent_program_descriptor_example'; // string | The type of program under ESEA Title I, Part D, Subpart 1 (state programs) or Subpart 2 (LEA).
$ela_progress_level_descriptor = 'ela_progress_level_descriptor_example'; // string | The progress measured from pre- to post- test for ELA.
$mathematics_progress_level_descriptor = 'mathematics_progress_level_descriptor_example'; // string | The progress measured from pre- to post-test for Mathematics.
$id = 'id_example'; // string | 
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getStudentNeglectedOrDelinquentProgramAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $begin_date, $education_organization_id, $program_education_organization_id, $program_name, $program_type_descriptor, $student_unique_id, $neglected_or_delinquent_program_descriptor, $ela_progress_level_descriptor, $mathematics_progress_level_descriptor, $id, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentNeglectedOrDelinquentProgramAssociationsApi->getStudentNeglectedOrDelinquentProgramAssociations: ', $e->getMessage(), PHP_EOL;
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
| **begin_date** | **\DateTime**| The earliest date the student is involved with the program. Typically, this is the date the student becomes eligible for the program. | [optional] |
| **education_organization_id** | **int**| The identifier assigned to an education organization. | [optional] |
| **program_education_organization_id** | **int**| The identifier assigned to an education organization. | [optional] |
| **program_name** | **string**| The formal name of the program of instruction, training, services, or benefits available through federal, state, or local agencies. | [optional] |
| **program_type_descriptor** | **string**| The type of program. | [optional] |
| **student_unique_id** | **string**| A unique alphanumeric code assigned to a student. | [optional] |
| **neglected_or_delinquent_program_descriptor** | **string**| The type of program under ESEA Title I, Part D, Subpart 1 (state programs) or Subpart 2 (LEA). | [optional] |
| **ela_progress_level_descriptor** | **string**| The progress measured from pre- to post- test for ELA. | [optional] |
| **mathematics_progress_level_descriptor** | **string**| The progress measured from pre- to post-test for Mathematics. | [optional] |
| **id** | **string**|  | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiStudentNeglectedOrDelinquentProgramAssociation[]**](../Model/EdFiStudentNeglectedOrDelinquentProgramAssociation.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStudentNeglectedOrDelinquentProgramAssociationsById()`

```php
getStudentNeglectedOrDelinquentProgramAssociationsById($id, $if_none_match, $use_snapshot): \Resources\Model\EdFiStudentNeglectedOrDelinquentProgramAssociation
```

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentNeglectedOrDelinquentProgramAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_none_match = 'if_none_match_example'; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getStudentNeglectedOrDelinquentProgramAssociationsById($id, $if_none_match, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentNeglectedOrDelinquentProgramAssociationsApi->getStudentNeglectedOrDelinquentProgramAssociationsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiStudentNeglectedOrDelinquentProgramAssociation**](../Model/EdFiStudentNeglectedOrDelinquentProgramAssociation.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `keyChangesStudentNeglectedOrDelinquentProgramAssociations()`

```php
keyChangesStudentNeglectedOrDelinquentProgramAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiStudentNeglectedOrDelinquentProgramAssociationKeyChange[]
```

Retrieves resources key changes based on change version.

This operation is used to retrieve identifying information about resources whose key values have been changed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentNeglectedOrDelinquentProgramAssociationsApi(
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
    $result = $apiInstance->keyChangesStudentNeglectedOrDelinquentProgramAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentNeglectedOrDelinquentProgramAssociationsApi->keyChangesStudentNeglectedOrDelinquentProgramAssociations: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiStudentNeglectedOrDelinquentProgramAssociationKeyChange[]**](../Model/TrackedChangesEdFiStudentNeglectedOrDelinquentProgramAssociationKeyChange.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postStudentNeglectedOrDelinquentProgramAssociation()`

```php
postStudentNeglectedOrDelinquentProgramAssociation($ed_fi_student_neglected_or_delinquent_program_association)
```

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update). Clients should NOT include the resource \"id\" in the JSON body because it will result in an error. The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately. It is recommended to use POST for both create and update except while updating natural key of a resource in which case PUT operation must be used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentNeglectedOrDelinquentProgramAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ed_fi_student_neglected_or_delinquent_program_association = new \Resources\Model\EdFiStudentNeglectedOrDelinquentProgramAssociation(); // \Resources\Model\EdFiStudentNeglectedOrDelinquentProgramAssociation | The JSON representation of the \"studentNeglectedOrDelinquentProgramAssociation\" resource to be created or updated.

try {
    $apiInstance->postStudentNeglectedOrDelinquentProgramAssociation($ed_fi_student_neglected_or_delinquent_program_association);
} catch (Exception $e) {
    echo 'Exception when calling StudentNeglectedOrDelinquentProgramAssociationsApi->postStudentNeglectedOrDelinquentProgramAssociation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ed_fi_student_neglected_or_delinquent_program_association** | [**\Resources\Model\EdFiStudentNeglectedOrDelinquentProgramAssociation**](../Model/EdFiStudentNeglectedOrDelinquentProgramAssociation.md)| The JSON representation of the \&quot;studentNeglectedOrDelinquentProgramAssociation\&quot; resource to be created or updated. | |

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

## `putStudentNeglectedOrDelinquentProgramAssociation()`

```php
putStudentNeglectedOrDelinquentProgramAssociation($id, $ed_fi_student_neglected_or_delinquent_program_association, $if_match)
```

Updates a resource based on the resource identifier.

The PUT operation is used to update a resource by identifier. If the resource identifier (\"id\") is provided in the JSON body, it will be ignored. Additionally, this API resource is not configured for cascading natural key updates. Natural key values for this resource cannot be changed using PUT operation, so the recommendation is to use POST as that supports upsert behavior.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentNeglectedOrDelinquentProgramAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$ed_fi_student_neglected_or_delinquent_program_association = new \Resources\Model\EdFiStudentNeglectedOrDelinquentProgramAssociation(); // \Resources\Model\EdFiStudentNeglectedOrDelinquentProgramAssociation | The JSON representation of the \"studentNeglectedOrDelinquentProgramAssociation\" resource to be created or updated.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try {
    $apiInstance->putStudentNeglectedOrDelinquentProgramAssociation($id, $ed_fi_student_neglected_or_delinquent_program_association, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StudentNeglectedOrDelinquentProgramAssociationsApi->putStudentNeglectedOrDelinquentProgramAssociation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **ed_fi_student_neglected_or_delinquent_program_association** | [**\Resources\Model\EdFiStudentNeglectedOrDelinquentProgramAssociation**](../Model/EdFiStudentNeglectedOrDelinquentProgramAssociation.md)| The JSON representation of the \&quot;studentNeglectedOrDelinquentProgramAssociation\&quot; resource to be created or updated. | |
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
