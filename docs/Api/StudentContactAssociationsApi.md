# Resources\StudentContactAssociationsApi

All URIs are relative to https://api.ed-fi.org:443/v7.3/api/data/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteStudentContactAssociationById()**](StudentContactAssociationsApi.md#deleteStudentContactAssociationById) | **DELETE** /ed-fi/studentContactAssociations/{id} | Deletes an existing resource using the resource identifier. |
| [**deletesStudentContactAssociations()**](StudentContactAssociationsApi.md#deletesStudentContactAssociations) | **GET** /ed-fi/studentContactAssociations/deletes | Retrieves deleted resources based on change version. |
| [**getStudentContactAssociations()**](StudentContactAssociationsApi.md#getStudentContactAssociations) | **GET** /ed-fi/studentContactAssociations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern). |
| [**getStudentContactAssociationsById()**](StudentContactAssociationsApi.md#getStudentContactAssociationsById) | **GET** /ed-fi/studentContactAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern). |
| [**getStudentContactAssociationsPartitions()**](StudentContactAssociationsApi.md#getStudentContactAssociationsPartitions) | **GET** /ed-fi/studentContactAssociations/partitions | Retrieves a set of page tokens to be used for efficient client-side parallel processing. |
| [**keyChangesStudentContactAssociations()**](StudentContactAssociationsApi.md#keyChangesStudentContactAssociations) | **GET** /ed-fi/studentContactAssociations/keyChanges | Retrieves resources key changes based on change version. |
| [**postStudentContactAssociation()**](StudentContactAssociationsApi.md#postStudentContactAssociation) | **POST** /ed-fi/studentContactAssociations | Creates or updates resources based on the natural key values of the supplied resource. |
| [**putStudentContactAssociation()**](StudentContactAssociationsApi.md#putStudentContactAssociation) | **PUT** /ed-fi/studentContactAssociations/{id} | Updates a resource based on the resource identifier. |


## `deleteStudentContactAssociationById()`

```php
deleteStudentContactAssociationById($id, $if_match)
```

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier. If the resource doesn't exist, an error will result (the resource will not be found).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentContactAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try {
    $apiInstance->deleteStudentContactAssociationById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StudentContactAssociationsApi->deleteStudentContactAssociationById: ', $e->getMessage(), PHP_EOL;
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

## `deletesStudentContactAssociations()`

```php
deletesStudentContactAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiStudentContactAssociationDelete[]
```

Retrieves deleted resources based on change version.

This operation is used to retrieve identifying information about resources that have been deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentContactAssociationsApi(
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
    $result = $apiInstance->deletesStudentContactAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentContactAssociationsApi->deletesStudentContactAssociations: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiStudentContactAssociationDelete[]**](../Model/TrackedChangesEdFiStudentContactAssociationDelete.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStudentContactAssociations()`

```php
getStudentContactAssociations($offset, $limit, $page_token, $page_size, $min_change_version, $max_change_version, $total_count, $contact_unique_id, $student_unique_id, $relation_descriptor, $contact_priority, $contact_restrictions, $emergency_contact_status, $id, $legal_guardian, $lives_with, $primary_contact_status, $use_snapshot): \Resources\Model\EdFiStudentContactAssociation[]
```

Retrieves specific resources using the resource's property values (using the \"Get\" pattern).

This GET operation provides access to resources using the \"Get\" search pattern.  The values of any properties of the resource that are specified will be used to return all matching results (if it exists).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentContactAssociationsApi(
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
$contact_unique_id = 'contact_unique_id_example'; // string | A unique alphanumeric code assigned to a contact.
$student_unique_id = 'student_unique_id_example'; // string | A unique alphanumeric code assigned to a student.
$relation_descriptor = 'relation_descriptor_example'; // string | The nature of an individual's relationship to a student, primarily used to capture family relationships.
$contact_priority = 56; // int | The numeric order of the preferred sequence or priority of contact.
$contact_restrictions = 'contact_restrictions_example'; // string | Restrictions for student and/or teacher contact with the individual (e.g., the student may not be picked up by the individual).
$emergency_contact_status = True; // bool | Indicator of whether the person is a designated emergency contact for the student.
$id = 'id_example'; // string | 
$legal_guardian = True; // bool | Indicator of whether the person is a legal guardian for the student.
$lives_with = True; // bool | Indicator of whether the student lives with the associated contact.
$primary_contact_status = True; // bool | Indicator of whether the person is a primary contact for the student.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getStudentContactAssociations($offset, $limit, $page_token, $page_size, $min_change_version, $max_change_version, $total_count, $contact_unique_id, $student_unique_id, $relation_descriptor, $contact_priority, $contact_restrictions, $emergency_contact_status, $id, $legal_guardian, $lives_with, $primary_contact_status, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentContactAssociationsApi->getStudentContactAssociations: ', $e->getMessage(), PHP_EOL;
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
| **contact_unique_id** | **string**| A unique alphanumeric code assigned to a contact. | [optional] |
| **student_unique_id** | **string**| A unique alphanumeric code assigned to a student. | [optional] |
| **relation_descriptor** | **string**| The nature of an individual&#39;s relationship to a student, primarily used to capture family relationships. | [optional] |
| **contact_priority** | **int**| The numeric order of the preferred sequence or priority of contact. | [optional] |
| **contact_restrictions** | **string**| Restrictions for student and/or teacher contact with the individual (e.g., the student may not be picked up by the individual). | [optional] |
| **emergency_contact_status** | **bool**| Indicator of whether the person is a designated emergency contact for the student. | [optional] |
| **id** | **string**|  | [optional] |
| **legal_guardian** | **bool**| Indicator of whether the person is a legal guardian for the student. | [optional] |
| **lives_with** | **bool**| Indicator of whether the student lives with the associated contact. | [optional] |
| **primary_contact_status** | **bool**| Indicator of whether the person is a primary contact for the student. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiStudentContactAssociation[]**](../Model/EdFiStudentContactAssociation.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStudentContactAssociationsById()`

```php
getStudentContactAssociationsById($id, $if_none_match, $use_snapshot): \Resources\Model\EdFiStudentContactAssociation
```

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentContactAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_none_match = 'if_none_match_example'; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getStudentContactAssociationsById($id, $if_none_match, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentContactAssociationsApi->getStudentContactAssociationsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiStudentContactAssociation**](../Model/EdFiStudentContactAssociation.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStudentContactAssociationsPartitions()`

```php
getStudentContactAssociationsPartitions($number, $min_change_version, $max_change_version, $contact_unique_id, $student_unique_id, $relation_descriptor, $contact_priority, $contact_restrictions, $emergency_contact_status, $id, $legal_guardian, $lives_with, $primary_contact_status, $use_snapshot): \Resources\Model\GetAcademicWeeksPartitions200Response
```

Retrieves a set of page tokens to be used for efficient client-side parallel processing.

Computes an evenly distributed set of partitions over the accessible data and returns a set of page tokens, each representing the first page of one of the partitions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentContactAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$number = 56; // int | The number of evenly distributed partitions to provide for client-side parallel processing. If unspecified, a reasonable set of partitions will be determined based on the total number of accessible items.
$min_change_version = 56; // int | Used in synchronization to set sequence minimum ChangeVersion
$max_change_version = 56; // int | Used in synchronization to set sequence maximum ChangeVersion
$contact_unique_id = 'contact_unique_id_example'; // string | A unique alphanumeric code assigned to a contact.
$student_unique_id = 'student_unique_id_example'; // string | A unique alphanumeric code assigned to a student.
$relation_descriptor = 'relation_descriptor_example'; // string | The nature of an individual's relationship to a student, primarily used to capture family relationships.
$contact_priority = 56; // int | The numeric order of the preferred sequence or priority of contact.
$contact_restrictions = 'contact_restrictions_example'; // string | Restrictions for student and/or teacher contact with the individual (e.g., the student may not be picked up by the individual).
$emergency_contact_status = True; // bool | Indicator of whether the person is a designated emergency contact for the student.
$id = 'id_example'; // string | 
$legal_guardian = True; // bool | Indicator of whether the person is a legal guardian for the student.
$lives_with = True; // bool | Indicator of whether the student lives with the associated contact.
$primary_contact_status = True; // bool | Indicator of whether the person is a primary contact for the student.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getStudentContactAssociationsPartitions($number, $min_change_version, $max_change_version, $contact_unique_id, $student_unique_id, $relation_descriptor, $contact_priority, $contact_restrictions, $emergency_contact_status, $id, $legal_guardian, $lives_with, $primary_contact_status, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentContactAssociationsApi->getStudentContactAssociationsPartitions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **number** | **int**| The number of evenly distributed partitions to provide for client-side parallel processing. If unspecified, a reasonable set of partitions will be determined based on the total number of accessible items. | [optional] |
| **min_change_version** | **int**| Used in synchronization to set sequence minimum ChangeVersion | [optional] |
| **max_change_version** | **int**| Used in synchronization to set sequence maximum ChangeVersion | [optional] |
| **contact_unique_id** | **string**| A unique alphanumeric code assigned to a contact. | [optional] |
| **student_unique_id** | **string**| A unique alphanumeric code assigned to a student. | [optional] |
| **relation_descriptor** | **string**| The nature of an individual&#39;s relationship to a student, primarily used to capture family relationships. | [optional] |
| **contact_priority** | **int**| The numeric order of the preferred sequence or priority of contact. | [optional] |
| **contact_restrictions** | **string**| Restrictions for student and/or teacher contact with the individual (e.g., the student may not be picked up by the individual). | [optional] |
| **emergency_contact_status** | **bool**| Indicator of whether the person is a designated emergency contact for the student. | [optional] |
| **id** | **string**|  | [optional] |
| **legal_guardian** | **bool**| Indicator of whether the person is a legal guardian for the student. | [optional] |
| **lives_with** | **bool**| Indicator of whether the student lives with the associated contact. | [optional] |
| **primary_contact_status** | **bool**| Indicator of whether the person is a primary contact for the student. | [optional] |
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

## `keyChangesStudentContactAssociations()`

```php
keyChangesStudentContactAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiStudentContactAssociationKeyChange[]
```

Retrieves resources key changes based on change version.

This operation is used to retrieve identifying information about resources whose key values have been changed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentContactAssociationsApi(
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
    $result = $apiInstance->keyChangesStudentContactAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentContactAssociationsApi->keyChangesStudentContactAssociations: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiStudentContactAssociationKeyChange[]**](../Model/TrackedChangesEdFiStudentContactAssociationKeyChange.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postStudentContactAssociation()`

```php
postStudentContactAssociation($ed_fi_student_contact_association)
```

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update). Clients should NOT include the resource \"id\" in the JSON body because it will result in an error. The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately. It is recommended to use POST for both create and update except while updating natural key of a resource in which case PUT operation must be used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentContactAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ed_fi_student_contact_association = new \Resources\Model\EdFiStudentContactAssociation(); // \Resources\Model\EdFiStudentContactAssociation | The JSON representation of the \"studentContactAssociation\" resource to be created or updated.

try {
    $apiInstance->postStudentContactAssociation($ed_fi_student_contact_association);
} catch (Exception $e) {
    echo 'Exception when calling StudentContactAssociationsApi->postStudentContactAssociation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ed_fi_student_contact_association** | [**\Resources\Model\EdFiStudentContactAssociation**](../Model/EdFiStudentContactAssociation.md)| The JSON representation of the \&quot;studentContactAssociation\&quot; resource to be created or updated. | |

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

## `putStudentContactAssociation()`

```php
putStudentContactAssociation($id, $ed_fi_student_contact_association, $if_match)
```

Updates a resource based on the resource identifier.

The PUT operation is used to update a resource by identifier. If the resource identifier (\"id\") is provided in the JSON body, it will be ignored. Additionally, this API resource is not configured for cascading natural key updates. Natural key values for this resource cannot be changed using PUT operation, so the recommendation is to use POST as that supports upsert behavior.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentContactAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$ed_fi_student_contact_association = new \Resources\Model\EdFiStudentContactAssociation(); // \Resources\Model\EdFiStudentContactAssociation | The JSON representation of the \"studentContactAssociation\" resource to be created or updated.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try {
    $apiInstance->putStudentContactAssociation($id, $ed_fi_student_contact_association, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StudentContactAssociationsApi->putStudentContactAssociation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **ed_fi_student_contact_association** | [**\Resources\Model\EdFiStudentContactAssociation**](../Model/EdFiStudentContactAssociation.md)| The JSON representation of the \&quot;studentContactAssociation\&quot; resource to be created or updated. | |
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
