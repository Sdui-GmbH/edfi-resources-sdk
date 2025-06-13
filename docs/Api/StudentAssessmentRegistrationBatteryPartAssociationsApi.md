# Resources\StudentAssessmentRegistrationBatteryPartAssociationsApi

All URIs are relative to https://api.ed-fi.org:443/v7.3/api/data/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteStudentAssessmentRegistrationBatteryPartAssociationById()**](StudentAssessmentRegistrationBatteryPartAssociationsApi.md#deleteStudentAssessmentRegistrationBatteryPartAssociationById) | **DELETE** /ed-fi/studentAssessmentRegistrationBatteryPartAssociations/{id} | Deletes an existing resource using the resource identifier. |
| [**deletesStudentAssessmentRegistrationBatteryPartAssociations()**](StudentAssessmentRegistrationBatteryPartAssociationsApi.md#deletesStudentAssessmentRegistrationBatteryPartAssociations) | **GET** /ed-fi/studentAssessmentRegistrationBatteryPartAssociations/deletes | Retrieves deleted resources based on change version. |
| [**getStudentAssessmentRegistrationBatteryPartAssociations()**](StudentAssessmentRegistrationBatteryPartAssociationsApi.md#getStudentAssessmentRegistrationBatteryPartAssociations) | **GET** /ed-fi/studentAssessmentRegistrationBatteryPartAssociations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern). |
| [**getStudentAssessmentRegistrationBatteryPartAssociationsById()**](StudentAssessmentRegistrationBatteryPartAssociationsApi.md#getStudentAssessmentRegistrationBatteryPartAssociationsById) | **GET** /ed-fi/studentAssessmentRegistrationBatteryPartAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern). |
| [**getStudentAssessmentRegistrationBatteryPartAssociationsPartitions()**](StudentAssessmentRegistrationBatteryPartAssociationsApi.md#getStudentAssessmentRegistrationBatteryPartAssociationsPartitions) | **GET** /ed-fi/studentAssessmentRegistrationBatteryPartAssociations/partitions | Retrieves a set of page tokens to be used for efficient client-side parallel processing. |
| [**keyChangesStudentAssessmentRegistrationBatteryPartAssociations()**](StudentAssessmentRegistrationBatteryPartAssociationsApi.md#keyChangesStudentAssessmentRegistrationBatteryPartAssociations) | **GET** /ed-fi/studentAssessmentRegistrationBatteryPartAssociations/keyChanges | Retrieves resources key changes based on change version. |
| [**postStudentAssessmentRegistrationBatteryPartAssociation()**](StudentAssessmentRegistrationBatteryPartAssociationsApi.md#postStudentAssessmentRegistrationBatteryPartAssociation) | **POST** /ed-fi/studentAssessmentRegistrationBatteryPartAssociations | Creates or updates resources based on the natural key values of the supplied resource. |
| [**putStudentAssessmentRegistrationBatteryPartAssociation()**](StudentAssessmentRegistrationBatteryPartAssociationsApi.md#putStudentAssessmentRegistrationBatteryPartAssociation) | **PUT** /ed-fi/studentAssessmentRegistrationBatteryPartAssociations/{id} | Updates a resource based on the resource identifier. |


## `deleteStudentAssessmentRegistrationBatteryPartAssociationById()`

```php
deleteStudentAssessmentRegistrationBatteryPartAssociationById($id, $if_match)
```

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier. If the resource doesn't exist, an error will result (the resource will not be found).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentAssessmentRegistrationBatteryPartAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try {
    $apiInstance->deleteStudentAssessmentRegistrationBatteryPartAssociationById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StudentAssessmentRegistrationBatteryPartAssociationsApi->deleteStudentAssessmentRegistrationBatteryPartAssociationById: ', $e->getMessage(), PHP_EOL;
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

## `deletesStudentAssessmentRegistrationBatteryPartAssociations()`

```php
deletesStudentAssessmentRegistrationBatteryPartAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiStudentAssessmentRegistrationBatteryPartAssociationDelete[]
```

Retrieves deleted resources based on change version.

This operation is used to retrieve identifying information about resources that have been deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentAssessmentRegistrationBatteryPartAssociationsApi(
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
    $result = $apiInstance->deletesStudentAssessmentRegistrationBatteryPartAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentAssessmentRegistrationBatteryPartAssociationsApi->deletesStudentAssessmentRegistrationBatteryPartAssociations: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiStudentAssessmentRegistrationBatteryPartAssociationDelete[]**](../Model/TrackedChangesEdFiStudentAssessmentRegistrationBatteryPartAssociationDelete.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStudentAssessmentRegistrationBatteryPartAssociations()`

```php
getStudentAssessmentRegistrationBatteryPartAssociations($offset, $limit, $page_token, $page_size, $min_change_version, $max_change_version, $total_count, $assessment_battery_part_name, $assessment_identifier, $namespace, $administration_identifier, $assigning_education_organization_id, $education_organization_id, $student_unique_id, $id, $use_snapshot): \Resources\Model\EdFiStudentAssessmentRegistrationBatteryPartAssociation[]
```

Retrieves specific resources using the resource's property values (using the \"Get\" pattern).

This GET operation provides access to resources using the \"Get\" search pattern.  The values of any properties of the resource that are specified will be used to return all matching results (if it exists).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentAssessmentRegistrationBatteryPartAssociationsApi(
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
$assessment_battery_part_name = 'assessment_battery_part_name_example'; // string | The name of the part of an assessment battery.
$assessment_identifier = 'assessment_identifier_example'; // string | A unique number or alphanumeric code assigned to an assessment.
$namespace = 'namespace_example'; // string | Namespace for the assessment.
$administration_identifier = 'administration_identifier_example'; // string | The title or name of the assessment in the context of its administration.
$assigning_education_organization_id = 56; // int | The identifier assigned to an education organization.
$education_organization_id = 56; // int | The identifier assigned to an education organization.
$student_unique_id = 'student_unique_id_example'; // string | A unique alphanumeric code assigned to a student.
$id = 'id_example'; // string | 
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getStudentAssessmentRegistrationBatteryPartAssociations($offset, $limit, $page_token, $page_size, $min_change_version, $max_change_version, $total_count, $assessment_battery_part_name, $assessment_identifier, $namespace, $administration_identifier, $assigning_education_organization_id, $education_organization_id, $student_unique_id, $id, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentAssessmentRegistrationBatteryPartAssociationsApi->getStudentAssessmentRegistrationBatteryPartAssociations: ', $e->getMessage(), PHP_EOL;
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
| **assessment_battery_part_name** | **string**| The name of the part of an assessment battery. | [optional] |
| **assessment_identifier** | **string**| A unique number or alphanumeric code assigned to an assessment. | [optional] |
| **namespace** | **string**| Namespace for the assessment. | [optional] |
| **administration_identifier** | **string**| The title or name of the assessment in the context of its administration. | [optional] |
| **assigning_education_organization_id** | **int**| The identifier assigned to an education organization. | [optional] |
| **education_organization_id** | **int**| The identifier assigned to an education organization. | [optional] |
| **student_unique_id** | **string**| A unique alphanumeric code assigned to a student. | [optional] |
| **id** | **string**|  | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiStudentAssessmentRegistrationBatteryPartAssociation[]**](../Model/EdFiStudentAssessmentRegistrationBatteryPartAssociation.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStudentAssessmentRegistrationBatteryPartAssociationsById()`

```php
getStudentAssessmentRegistrationBatteryPartAssociationsById($id, $if_none_match, $use_snapshot): \Resources\Model\EdFiStudentAssessmentRegistrationBatteryPartAssociation
```

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentAssessmentRegistrationBatteryPartAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_none_match = 'if_none_match_example'; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getStudentAssessmentRegistrationBatteryPartAssociationsById($id, $if_none_match, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentAssessmentRegistrationBatteryPartAssociationsApi->getStudentAssessmentRegistrationBatteryPartAssociationsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiStudentAssessmentRegistrationBatteryPartAssociation**](../Model/EdFiStudentAssessmentRegistrationBatteryPartAssociation.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStudentAssessmentRegistrationBatteryPartAssociationsPartitions()`

```php
getStudentAssessmentRegistrationBatteryPartAssociationsPartitions($number, $min_change_version, $max_change_version, $assessment_battery_part_name, $assessment_identifier, $namespace, $administration_identifier, $assigning_education_organization_id, $education_organization_id, $student_unique_id, $id, $use_snapshot): \Resources\Model\GetAcademicWeeksPartitions200Response
```

Retrieves a set of page tokens to be used for efficient client-side parallel processing.

Computes an evenly distributed set of partitions over the accessible data and returns a set of page tokens, each representing the first page of one of the partitions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentAssessmentRegistrationBatteryPartAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$number = 56; // int | The number of evenly distributed partitions to provide for client-side parallel processing. If unspecified, a reasonable set of partitions will be determined based on the total number of accessible items.
$min_change_version = 56; // int | Used in synchronization to set sequence minimum ChangeVersion
$max_change_version = 56; // int | Used in synchronization to set sequence maximum ChangeVersion
$assessment_battery_part_name = 'assessment_battery_part_name_example'; // string | The name of the part of an assessment battery.
$assessment_identifier = 'assessment_identifier_example'; // string | A unique number or alphanumeric code assigned to an assessment.
$namespace = 'namespace_example'; // string | Namespace for the assessment.
$administration_identifier = 'administration_identifier_example'; // string | The title or name of the assessment in the context of its administration.
$assigning_education_organization_id = 56; // int | The identifier assigned to an education organization.
$education_organization_id = 56; // int | The identifier assigned to an education organization.
$student_unique_id = 'student_unique_id_example'; // string | A unique alphanumeric code assigned to a student.
$id = 'id_example'; // string | 
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getStudentAssessmentRegistrationBatteryPartAssociationsPartitions($number, $min_change_version, $max_change_version, $assessment_battery_part_name, $assessment_identifier, $namespace, $administration_identifier, $assigning_education_organization_id, $education_organization_id, $student_unique_id, $id, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentAssessmentRegistrationBatteryPartAssociationsApi->getStudentAssessmentRegistrationBatteryPartAssociationsPartitions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **number** | **int**| The number of evenly distributed partitions to provide for client-side parallel processing. If unspecified, a reasonable set of partitions will be determined based on the total number of accessible items. | [optional] |
| **min_change_version** | **int**| Used in synchronization to set sequence minimum ChangeVersion | [optional] |
| **max_change_version** | **int**| Used in synchronization to set sequence maximum ChangeVersion | [optional] |
| **assessment_battery_part_name** | **string**| The name of the part of an assessment battery. | [optional] |
| **assessment_identifier** | **string**| A unique number or alphanumeric code assigned to an assessment. | [optional] |
| **namespace** | **string**| Namespace for the assessment. | [optional] |
| **administration_identifier** | **string**| The title or name of the assessment in the context of its administration. | [optional] |
| **assigning_education_organization_id** | **int**| The identifier assigned to an education organization. | [optional] |
| **education_organization_id** | **int**| The identifier assigned to an education organization. | [optional] |
| **student_unique_id** | **string**| A unique alphanumeric code assigned to a student. | [optional] |
| **id** | **string**|  | [optional] |
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

## `keyChangesStudentAssessmentRegistrationBatteryPartAssociations()`

```php
keyChangesStudentAssessmentRegistrationBatteryPartAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiStudentAssessmentRegistrationBatteryPartAssociationKeyChange[]
```

Retrieves resources key changes based on change version.

This operation is used to retrieve identifying information about resources whose key values have been changed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentAssessmentRegistrationBatteryPartAssociationsApi(
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
    $result = $apiInstance->keyChangesStudentAssessmentRegistrationBatteryPartAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentAssessmentRegistrationBatteryPartAssociationsApi->keyChangesStudentAssessmentRegistrationBatteryPartAssociations: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiStudentAssessmentRegistrationBatteryPartAssociationKeyChange[]**](../Model/TrackedChangesEdFiStudentAssessmentRegistrationBatteryPartAssociationKeyChange.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postStudentAssessmentRegistrationBatteryPartAssociation()`

```php
postStudentAssessmentRegistrationBatteryPartAssociation($ed_fi_student_assessment_registration_battery_part_association)
```

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update). Clients should NOT include the resource \"id\" in the JSON body because it will result in an error. The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately. It is recommended to use POST for both create and update except while updating natural key of a resource in which case PUT operation must be used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentAssessmentRegistrationBatteryPartAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ed_fi_student_assessment_registration_battery_part_association = new \Resources\Model\EdFiStudentAssessmentRegistrationBatteryPartAssociation(); // \Resources\Model\EdFiStudentAssessmentRegistrationBatteryPartAssociation | The JSON representation of the \"studentAssessmentRegistrationBatteryPartAssociation\" resource to be created or updated.

try {
    $apiInstance->postStudentAssessmentRegistrationBatteryPartAssociation($ed_fi_student_assessment_registration_battery_part_association);
} catch (Exception $e) {
    echo 'Exception when calling StudentAssessmentRegistrationBatteryPartAssociationsApi->postStudentAssessmentRegistrationBatteryPartAssociation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ed_fi_student_assessment_registration_battery_part_association** | [**\Resources\Model\EdFiStudentAssessmentRegistrationBatteryPartAssociation**](../Model/EdFiStudentAssessmentRegistrationBatteryPartAssociation.md)| The JSON representation of the \&quot;studentAssessmentRegistrationBatteryPartAssociation\&quot; resource to be created or updated. | |

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

## `putStudentAssessmentRegistrationBatteryPartAssociation()`

```php
putStudentAssessmentRegistrationBatteryPartAssociation($id, $ed_fi_student_assessment_registration_battery_part_association, $if_match)
```

Updates a resource based on the resource identifier.

The PUT operation is used to update a resource by identifier. If the resource identifier (\"id\") is provided in the JSON body, it will be ignored. Additionally, this API resource is not configured for cascading natural key updates. Natural key values for this resource cannot be changed using PUT operation, so the recommendation is to use POST as that supports upsert behavior.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentAssessmentRegistrationBatteryPartAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$ed_fi_student_assessment_registration_battery_part_association = new \Resources\Model\EdFiStudentAssessmentRegistrationBatteryPartAssociation(); // \Resources\Model\EdFiStudentAssessmentRegistrationBatteryPartAssociation | The JSON representation of the \"studentAssessmentRegistrationBatteryPartAssociation\" resource to be created or updated.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try {
    $apiInstance->putStudentAssessmentRegistrationBatteryPartAssociation($id, $ed_fi_student_assessment_registration_battery_part_association, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StudentAssessmentRegistrationBatteryPartAssociationsApi->putStudentAssessmentRegistrationBatteryPartAssociation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **ed_fi_student_assessment_registration_battery_part_association** | [**\Resources\Model\EdFiStudentAssessmentRegistrationBatteryPartAssociation**](../Model/EdFiStudentAssessmentRegistrationBatteryPartAssociation.md)| The JSON representation of the \&quot;studentAssessmentRegistrationBatteryPartAssociation\&quot; resource to be created or updated. | |
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
