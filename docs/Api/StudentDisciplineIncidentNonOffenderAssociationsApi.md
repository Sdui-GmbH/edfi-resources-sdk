# OpenAPI\Client\StudentDisciplineIncidentNonOffenderAssociationsApi

All URIs are relative to https://api.ed-fi.org:443/v7.1/api/data/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteStudentDisciplineIncidentNonOffenderAssociationById()**](StudentDisciplineIncidentNonOffenderAssociationsApi.md#deleteStudentDisciplineIncidentNonOffenderAssociationById) | **DELETE** /ed-fi/studentDisciplineIncidentNonOffenderAssociations/{id} | Deletes an existing resource using the resource identifier. |
| [**deletesStudentDisciplineIncidentNonOffenderAssociations()**](StudentDisciplineIncidentNonOffenderAssociationsApi.md#deletesStudentDisciplineIncidentNonOffenderAssociations) | **GET** /ed-fi/studentDisciplineIncidentNonOffenderAssociations/deletes | Retrieves deleted resources based on change version. |
| [**getStudentDisciplineIncidentNonOffenderAssociations()**](StudentDisciplineIncidentNonOffenderAssociationsApi.md#getStudentDisciplineIncidentNonOffenderAssociations) | **GET** /ed-fi/studentDisciplineIncidentNonOffenderAssociations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern). |
| [**getStudentDisciplineIncidentNonOffenderAssociationsById()**](StudentDisciplineIncidentNonOffenderAssociationsApi.md#getStudentDisciplineIncidentNonOffenderAssociationsById) | **GET** /ed-fi/studentDisciplineIncidentNonOffenderAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern). |
| [**keyChangesStudentDisciplineIncidentNonOffenderAssociations()**](StudentDisciplineIncidentNonOffenderAssociationsApi.md#keyChangesStudentDisciplineIncidentNonOffenderAssociations) | **GET** /ed-fi/studentDisciplineIncidentNonOffenderAssociations/keyChanges | Retrieves resources key changes based on change version. |
| [**postStudentDisciplineIncidentNonOffenderAssociation()**](StudentDisciplineIncidentNonOffenderAssociationsApi.md#postStudentDisciplineIncidentNonOffenderAssociation) | **POST** /ed-fi/studentDisciplineIncidentNonOffenderAssociations | Creates or updates resources based on the natural key values of the supplied resource. |
| [**putStudentDisciplineIncidentNonOffenderAssociation()**](StudentDisciplineIncidentNonOffenderAssociationsApi.md#putStudentDisciplineIncidentNonOffenderAssociation) | **PUT** /ed-fi/studentDisciplineIncidentNonOffenderAssociations/{id} | Updates a resource based on the resource identifier. |


## `deleteStudentDisciplineIncidentNonOffenderAssociationById()`

```php
deleteStudentDisciplineIncidentNonOffenderAssociationById($id, $if_match)
```

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier. If the resource doesn't exist, an error will result (the resource will not be found).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StudentDisciplineIncidentNonOffenderAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try {
    $apiInstance->deleteStudentDisciplineIncidentNonOffenderAssociationById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StudentDisciplineIncidentNonOffenderAssociationsApi->deleteStudentDisciplineIncidentNonOffenderAssociationById: ', $e->getMessage(), PHP_EOL;
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

## `deletesStudentDisciplineIncidentNonOffenderAssociations()`

```php
deletesStudentDisciplineIncidentNonOffenderAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \OpenAPI\Client\Model\TrackedChangesEdFiStudentDisciplineIncidentNonOffenderAssociationDelete[]
```

Retrieves deleted resources based on change version.

This operation is used to retrieve identifying information about resources that have been deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StudentDisciplineIncidentNonOffenderAssociationsApi(
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
    $result = $apiInstance->deletesStudentDisciplineIncidentNonOffenderAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentDisciplineIncidentNonOffenderAssociationsApi->deletesStudentDisciplineIncidentNonOffenderAssociations: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\TrackedChangesEdFiStudentDisciplineIncidentNonOffenderAssociationDelete[]**](../Model/TrackedChangesEdFiStudentDisciplineIncidentNonOffenderAssociationDelete.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStudentDisciplineIncidentNonOffenderAssociations()`

```php
getStudentDisciplineIncidentNonOffenderAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $incident_identifier, $school_id, $student_unique_id, $id, $use_snapshot): \OpenAPI\Client\Model\EdFiStudentDisciplineIncidentNonOffenderAssociation[]
```

Retrieves specific resources using the resource's property values (using the \"Get\" pattern).

This GET operation provides access to resources using the \"Get\" search pattern.  The values of any properties of the resource that are specified will be used to return all matching results (if it exists).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StudentDisciplineIncidentNonOffenderAssociationsApi(
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
$incident_identifier = 'incident_identifier_example'; // string | A locally assigned unique identifier (within the school or school district) to identify each specific DisciplineIncident or occurrence. The same identifier should be used to document the entire discipline incident even if it included multiple offenses and multiple offenders.
$school_id = 56; // int | The identifier assigned to a school.
$student_unique_id = 'student_unique_id_example'; // string | A unique alphanumeric code assigned to a student.
$id = 'id_example'; // string | 
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getStudentDisciplineIncidentNonOffenderAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $incident_identifier, $school_id, $student_unique_id, $id, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentDisciplineIncidentNonOffenderAssociationsApi->getStudentDisciplineIncidentNonOffenderAssociations: ', $e->getMessage(), PHP_EOL;
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
| **incident_identifier** | **string**| A locally assigned unique identifier (within the school or school district) to identify each specific DisciplineIncident or occurrence. The same identifier should be used to document the entire discipline incident even if it included multiple offenses and multiple offenders. | [optional] |
| **school_id** | **int**| The identifier assigned to a school. | [optional] |
| **student_unique_id** | **string**| A unique alphanumeric code assigned to a student. | [optional] |
| **id** | **string**|  | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\EdFiStudentDisciplineIncidentNonOffenderAssociation[]**](../Model/EdFiStudentDisciplineIncidentNonOffenderAssociation.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStudentDisciplineIncidentNonOffenderAssociationsById()`

```php
getStudentDisciplineIncidentNonOffenderAssociationsById($id, $if_none_match, $use_snapshot): \OpenAPI\Client\Model\EdFiStudentDisciplineIncidentNonOffenderAssociation
```

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StudentDisciplineIncidentNonOffenderAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_none_match = 'if_none_match_example'; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getStudentDisciplineIncidentNonOffenderAssociationsById($id, $if_none_match, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentDisciplineIncidentNonOffenderAssociationsApi->getStudentDisciplineIncidentNonOffenderAssociationsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\EdFiStudentDisciplineIncidentNonOffenderAssociation**](../Model/EdFiStudentDisciplineIncidentNonOffenderAssociation.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `keyChangesStudentDisciplineIncidentNonOffenderAssociations()`

```php
keyChangesStudentDisciplineIncidentNonOffenderAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \OpenAPI\Client\Model\TrackedChangesEdFiStudentDisciplineIncidentNonOffenderAssociationKeyChange[]
```

Retrieves resources key changes based on change version.

This operation is used to retrieve identifying information about resources whose key values have been changed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StudentDisciplineIncidentNonOffenderAssociationsApi(
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
    $result = $apiInstance->keyChangesStudentDisciplineIncidentNonOffenderAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentDisciplineIncidentNonOffenderAssociationsApi->keyChangesStudentDisciplineIncidentNonOffenderAssociations: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\TrackedChangesEdFiStudentDisciplineIncidentNonOffenderAssociationKeyChange[]**](../Model/TrackedChangesEdFiStudentDisciplineIncidentNonOffenderAssociationKeyChange.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postStudentDisciplineIncidentNonOffenderAssociation()`

```php
postStudentDisciplineIncidentNonOffenderAssociation($ed_fi_student_discipline_incident_non_offender_association)
```

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update). Clients should NOT include the resource \"id\" in the JSON body because it will result in an error. The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately. It is recommended to use POST for both create and update except while updating natural key of a resource in which case PUT operation must be used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StudentDisciplineIncidentNonOffenderAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ed_fi_student_discipline_incident_non_offender_association = new \OpenAPI\Client\Model\EdFiStudentDisciplineIncidentNonOffenderAssociation(); // \OpenAPI\Client\Model\EdFiStudentDisciplineIncidentNonOffenderAssociation | The JSON representation of the \"studentDisciplineIncidentNonOffenderAssociation\" resource to be created or updated.

try {
    $apiInstance->postStudentDisciplineIncidentNonOffenderAssociation($ed_fi_student_discipline_incident_non_offender_association);
} catch (Exception $e) {
    echo 'Exception when calling StudentDisciplineIncidentNonOffenderAssociationsApi->postStudentDisciplineIncidentNonOffenderAssociation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ed_fi_student_discipline_incident_non_offender_association** | [**\OpenAPI\Client\Model\EdFiStudentDisciplineIncidentNonOffenderAssociation**](../Model/EdFiStudentDisciplineIncidentNonOffenderAssociation.md)| The JSON representation of the \&quot;studentDisciplineIncidentNonOffenderAssociation\&quot; resource to be created or updated. | |

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

## `putStudentDisciplineIncidentNonOffenderAssociation()`

```php
putStudentDisciplineIncidentNonOffenderAssociation($id, $ed_fi_student_discipline_incident_non_offender_association, $if_match)
```

Updates a resource based on the resource identifier.

The PUT operation is used to update a resource by identifier. If the resource identifier (\"id\") is provided in the JSON body, it will be ignored. Additionally, this API resource is not configured for cascading natural key updates. Natural key values for this resource cannot be changed using PUT operation, so the recommendation is to use POST as that supports upsert behavior.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StudentDisciplineIncidentNonOffenderAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$ed_fi_student_discipline_incident_non_offender_association = new \OpenAPI\Client\Model\EdFiStudentDisciplineIncidentNonOffenderAssociation(); // \OpenAPI\Client\Model\EdFiStudentDisciplineIncidentNonOffenderAssociation | The JSON representation of the \"studentDisciplineIncidentNonOffenderAssociation\" resource to be created or updated.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try {
    $apiInstance->putStudentDisciplineIncidentNonOffenderAssociation($id, $ed_fi_student_discipline_incident_non_offender_association, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StudentDisciplineIncidentNonOffenderAssociationsApi->putStudentDisciplineIncidentNonOffenderAssociation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **ed_fi_student_discipline_incident_non_offender_association** | [**\OpenAPI\Client\Model\EdFiStudentDisciplineIncidentNonOffenderAssociation**](../Model/EdFiStudentDisciplineIncidentNonOffenderAssociation.md)| The JSON representation of the \&quot;studentDisciplineIncidentNonOffenderAssociation\&quot; resource to be created or updated. | |
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
