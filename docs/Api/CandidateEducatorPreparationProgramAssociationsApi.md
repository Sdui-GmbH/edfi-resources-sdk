# Resources\CandidateEducatorPreparationProgramAssociationsApi

All URIs are relative to https://api.ed-fi.org:443/v7.2/api/data/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteCandidateEducatorPreparationProgramAssociationById()**](CandidateEducatorPreparationProgramAssociationsApi.md#deleteCandidateEducatorPreparationProgramAssociationById) | **DELETE** /tpdm/candidateEducatorPreparationProgramAssociations/{id} | Deletes an existing resource using the resource identifier. |
| [**deletesCandidateEducatorPreparationProgramAssociations()**](CandidateEducatorPreparationProgramAssociationsApi.md#deletesCandidateEducatorPreparationProgramAssociations) | **GET** /tpdm/candidateEducatorPreparationProgramAssociations/deletes | Retrieves deleted resources based on change version. |
| [**getCandidateEducatorPreparationProgramAssociations()**](CandidateEducatorPreparationProgramAssociationsApi.md#getCandidateEducatorPreparationProgramAssociations) | **GET** /tpdm/candidateEducatorPreparationProgramAssociations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern). |
| [**getCandidateEducatorPreparationProgramAssociationsById()**](CandidateEducatorPreparationProgramAssociationsApi.md#getCandidateEducatorPreparationProgramAssociationsById) | **GET** /tpdm/candidateEducatorPreparationProgramAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern). |
| [**keyChangesCandidateEducatorPreparationProgramAssociations()**](CandidateEducatorPreparationProgramAssociationsApi.md#keyChangesCandidateEducatorPreparationProgramAssociations) | **GET** /tpdm/candidateEducatorPreparationProgramAssociations/keyChanges | Retrieves resources key changes based on change version. |
| [**postCandidateEducatorPreparationProgramAssociation()**](CandidateEducatorPreparationProgramAssociationsApi.md#postCandidateEducatorPreparationProgramAssociation) | **POST** /tpdm/candidateEducatorPreparationProgramAssociations | Creates or updates resources based on the natural key values of the supplied resource. |
| [**putCandidateEducatorPreparationProgramAssociation()**](CandidateEducatorPreparationProgramAssociationsApi.md#putCandidateEducatorPreparationProgramAssociation) | **PUT** /tpdm/candidateEducatorPreparationProgramAssociations/{id} | Updates a resource based on the resource identifier. |


## `deleteCandidateEducatorPreparationProgramAssociationById()`

```php
deleteCandidateEducatorPreparationProgramAssociationById($id, $if_match)
```

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier. If the resource doesn't exist, an error will result (the resource will not be found).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\CandidateEducatorPreparationProgramAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try {
    $apiInstance->deleteCandidateEducatorPreparationProgramAssociationById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling CandidateEducatorPreparationProgramAssociationsApi->deleteCandidateEducatorPreparationProgramAssociationById: ', $e->getMessage(), PHP_EOL;
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

## `deletesCandidateEducatorPreparationProgramAssociations()`

```php
deletesCandidateEducatorPreparationProgramAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesTpdmCandidateEducatorPreparationProgramAssociationDelete[]
```

Retrieves deleted resources based on change version.

This operation is used to retrieve identifying information about resources that have been deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\CandidateEducatorPreparationProgramAssociationsApi(
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
    $result = $apiInstance->deletesCandidateEducatorPreparationProgramAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CandidateEducatorPreparationProgramAssociationsApi->deletesCandidateEducatorPreparationProgramAssociations: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesTpdmCandidateEducatorPreparationProgramAssociationDelete[]**](../Model/TrackedChangesTpdmCandidateEducatorPreparationProgramAssociationDelete.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCandidateEducatorPreparationProgramAssociations()`

```php
getCandidateEducatorPreparationProgramAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $begin_date, $candidate_identifier, $education_organization_id, $program_name, $program_type_descriptor, $epp_program_pathway_descriptor, $reason_exited_descriptor, $end_date, $id, $use_snapshot): \Resources\Model\TpdmCandidateEducatorPreparationProgramAssociation[]
```

Retrieves specific resources using the resource's property values (using the \"Get\" pattern).

This GET operation provides access to resources using the \"Get\" search pattern.  The values of any properties of the resource that are specified will be used to return all matching results (if it exists).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\CandidateEducatorPreparationProgramAssociationsApi(
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
$begin_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The begin date for the association.
$candidate_identifier = 'candidate_identifier_example'; // string | A unique alphanumeric code assigned to a candidate.
$education_organization_id = 56; // int | The identifier assigned to an education organization.
$program_name = 'program_name_example'; // string | The name of the Educator Preparation Program.
$program_type_descriptor = 'program_type_descriptor_example'; // string | The type of program.
$epp_program_pathway_descriptor = 'epp_program_pathway_descriptor_example'; // string | The program pathway the candidate is following; for example: Residency, Internship, Traditional
$reason_exited_descriptor = 'reason_exited_descriptor_example'; // string | Reason exited for the association.
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date for the association.
$id = 'id_example'; // string | 
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getCandidateEducatorPreparationProgramAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $begin_date, $candidate_identifier, $education_organization_id, $program_name, $program_type_descriptor, $epp_program_pathway_descriptor, $reason_exited_descriptor, $end_date, $id, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CandidateEducatorPreparationProgramAssociationsApi->getCandidateEducatorPreparationProgramAssociations: ', $e->getMessage(), PHP_EOL;
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
| **begin_date** | **\DateTime**| The begin date for the association. | [optional] |
| **candidate_identifier** | **string**| A unique alphanumeric code assigned to a candidate. | [optional] |
| **education_organization_id** | **int**| The identifier assigned to an education organization. | [optional] |
| **program_name** | **string**| The name of the Educator Preparation Program. | [optional] |
| **program_type_descriptor** | **string**| The type of program. | [optional] |
| **epp_program_pathway_descriptor** | **string**| The program pathway the candidate is following; for example: Residency, Internship, Traditional | [optional] |
| **reason_exited_descriptor** | **string**| Reason exited for the association. | [optional] |
| **end_date** | **\DateTime**| The end date for the association. | [optional] |
| **id** | **string**|  | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\TpdmCandidateEducatorPreparationProgramAssociation[]**](../Model/TpdmCandidateEducatorPreparationProgramAssociation.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCandidateEducatorPreparationProgramAssociationsById()`

```php
getCandidateEducatorPreparationProgramAssociationsById($id, $if_none_match, $use_snapshot): \Resources\Model\TpdmCandidateEducatorPreparationProgramAssociation
```

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\CandidateEducatorPreparationProgramAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_none_match = 'if_none_match_example'; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getCandidateEducatorPreparationProgramAssociationsById($id, $if_none_match, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CandidateEducatorPreparationProgramAssociationsApi->getCandidateEducatorPreparationProgramAssociationsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\TpdmCandidateEducatorPreparationProgramAssociation**](../Model/TpdmCandidateEducatorPreparationProgramAssociation.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `keyChangesCandidateEducatorPreparationProgramAssociations()`

```php
keyChangesCandidateEducatorPreparationProgramAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesTpdmCandidateEducatorPreparationProgramAssociationKeyChange[]
```

Retrieves resources key changes based on change version.

This operation is used to retrieve identifying information about resources whose key values have been changed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\CandidateEducatorPreparationProgramAssociationsApi(
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
    $result = $apiInstance->keyChangesCandidateEducatorPreparationProgramAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CandidateEducatorPreparationProgramAssociationsApi->keyChangesCandidateEducatorPreparationProgramAssociations: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesTpdmCandidateEducatorPreparationProgramAssociationKeyChange[]**](../Model/TrackedChangesTpdmCandidateEducatorPreparationProgramAssociationKeyChange.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCandidateEducatorPreparationProgramAssociation()`

```php
postCandidateEducatorPreparationProgramAssociation($tpdm_candidate_educator_preparation_program_association)
```

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update). Clients should NOT include the resource \"id\" in the JSON body because it will result in an error. The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately. It is recommended to use POST for both create and update except while updating natural key of a resource in which case PUT operation must be used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\CandidateEducatorPreparationProgramAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tpdm_candidate_educator_preparation_program_association = new \Resources\Model\TpdmCandidateEducatorPreparationProgramAssociation(); // \Resources\Model\TpdmCandidateEducatorPreparationProgramAssociation | The JSON representation of the \"candidateEducatorPreparationProgramAssociation\" resource to be created or updated.

try {
    $apiInstance->postCandidateEducatorPreparationProgramAssociation($tpdm_candidate_educator_preparation_program_association);
} catch (Exception $e) {
    echo 'Exception when calling CandidateEducatorPreparationProgramAssociationsApi->postCandidateEducatorPreparationProgramAssociation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tpdm_candidate_educator_preparation_program_association** | [**\Resources\Model\TpdmCandidateEducatorPreparationProgramAssociation**](../Model/TpdmCandidateEducatorPreparationProgramAssociation.md)| The JSON representation of the \&quot;candidateEducatorPreparationProgramAssociation\&quot; resource to be created or updated. | |

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

## `putCandidateEducatorPreparationProgramAssociation()`

```php
putCandidateEducatorPreparationProgramAssociation($id, $tpdm_candidate_educator_preparation_program_association, $if_match)
```

Updates a resource based on the resource identifier.

The PUT operation is used to update a resource by identifier. If the resource identifier (\"id\") is provided in the JSON body, it will be ignored. Additionally, this API resource is not configured for cascading natural key updates. Natural key values for this resource cannot be changed using PUT operation, so the recommendation is to use POST as that supports upsert behavior.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\CandidateEducatorPreparationProgramAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$tpdm_candidate_educator_preparation_program_association = new \Resources\Model\TpdmCandidateEducatorPreparationProgramAssociation(); // \Resources\Model\TpdmCandidateEducatorPreparationProgramAssociation | The JSON representation of the \"candidateEducatorPreparationProgramAssociation\" resource to be created or updated.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try {
    $apiInstance->putCandidateEducatorPreparationProgramAssociation($id, $tpdm_candidate_educator_preparation_program_association, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling CandidateEducatorPreparationProgramAssociationsApi->putCandidateEducatorPreparationProgramAssociation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **tpdm_candidate_educator_preparation_program_association** | [**\Resources\Model\TpdmCandidateEducatorPreparationProgramAssociation**](../Model/TpdmCandidateEducatorPreparationProgramAssociation.md)| The JSON representation of the \&quot;candidateEducatorPreparationProgramAssociation\&quot; resource to be created or updated. | |
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
