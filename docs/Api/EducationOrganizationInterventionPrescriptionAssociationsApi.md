# Resources\EducationOrganizationInterventionPrescriptionAssociationsApi

All URIs are relative to https://api.ed-fi.org:443/v7.3/api/data/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteEducationOrganizationInterventionPrescriptionAssociationById()**](EducationOrganizationInterventionPrescriptionAssociationsApi.md#deleteEducationOrganizationInterventionPrescriptionAssociationById) | **DELETE** /ed-fi/educationOrganizationInterventionPrescriptionAssociations/{id} | Deletes an existing resource using the resource identifier. |
| [**deletesEducationOrganizationInterventionPrescriptionAssociations()**](EducationOrganizationInterventionPrescriptionAssociationsApi.md#deletesEducationOrganizationInterventionPrescriptionAssociations) | **GET** /ed-fi/educationOrganizationInterventionPrescriptionAssociations/deletes | Retrieves deleted resources based on change version. |
| [**getEducationOrganizationInterventionPrescriptionAssociations()**](EducationOrganizationInterventionPrescriptionAssociationsApi.md#getEducationOrganizationInterventionPrescriptionAssociations) | **GET** /ed-fi/educationOrganizationInterventionPrescriptionAssociations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern). |
| [**getEducationOrganizationInterventionPrescriptionAssociationsById()**](EducationOrganizationInterventionPrescriptionAssociationsApi.md#getEducationOrganizationInterventionPrescriptionAssociationsById) | **GET** /ed-fi/educationOrganizationInterventionPrescriptionAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern). |
| [**getEducationOrganizationInterventionPrescriptionAssociationsPartitions()**](EducationOrganizationInterventionPrescriptionAssociationsApi.md#getEducationOrganizationInterventionPrescriptionAssociationsPartitions) | **GET** /ed-fi/educationOrganizationInterventionPrescriptionAssociations/partitions | Retrieves a set of page tokens to be used for efficient client-side parallel processing. |
| [**keyChangesEducationOrganizationInterventionPrescriptionAssociations()**](EducationOrganizationInterventionPrescriptionAssociationsApi.md#keyChangesEducationOrganizationInterventionPrescriptionAssociations) | **GET** /ed-fi/educationOrganizationInterventionPrescriptionAssociations/keyChanges | Retrieves resources key changes based on change version. |
| [**postEducationOrganizationInterventionPrescriptionAssociation()**](EducationOrganizationInterventionPrescriptionAssociationsApi.md#postEducationOrganizationInterventionPrescriptionAssociation) | **POST** /ed-fi/educationOrganizationInterventionPrescriptionAssociations | Creates or updates resources based on the natural key values of the supplied resource. |
| [**putEducationOrganizationInterventionPrescriptionAssociation()**](EducationOrganizationInterventionPrescriptionAssociationsApi.md#putEducationOrganizationInterventionPrescriptionAssociation) | **PUT** /ed-fi/educationOrganizationInterventionPrescriptionAssociations/{id} | Updates a resource based on the resource identifier. |


## `deleteEducationOrganizationInterventionPrescriptionAssociationById()`

```php
deleteEducationOrganizationInterventionPrescriptionAssociationById($id, $if_match)
```

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier. If the resource doesn't exist, an error will result (the resource will not be found).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\EducationOrganizationInterventionPrescriptionAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try {
    $apiInstance->deleteEducationOrganizationInterventionPrescriptionAssociationById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling EducationOrganizationInterventionPrescriptionAssociationsApi->deleteEducationOrganizationInterventionPrescriptionAssociationById: ', $e->getMessage(), PHP_EOL;
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

## `deletesEducationOrganizationInterventionPrescriptionAssociations()`

```php
deletesEducationOrganizationInterventionPrescriptionAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiEducationOrganizationInterventionPrescriptionAssociationDelete[]
```

Retrieves deleted resources based on change version.

This operation is used to retrieve identifying information about resources that have been deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\EducationOrganizationInterventionPrescriptionAssociationsApi(
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
    $result = $apiInstance->deletesEducationOrganizationInterventionPrescriptionAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EducationOrganizationInterventionPrescriptionAssociationsApi->deletesEducationOrganizationInterventionPrescriptionAssociations: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiEducationOrganizationInterventionPrescriptionAssociationDelete[]**](../Model/TrackedChangesEdFiEducationOrganizationInterventionPrescriptionAssociationDelete.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEducationOrganizationInterventionPrescriptionAssociations()`

```php
getEducationOrganizationInterventionPrescriptionAssociations($offset, $limit, $page_token, $page_size, $min_change_version, $max_change_version, $total_count, $education_organization_id, $intervention_prescription_education_organization_id, $intervention_prescription_identification_code, $begin_date, $end_date, $id, $use_snapshot): \Resources\Model\EdFiEducationOrganizationInterventionPrescriptionAssociation[]
```

Retrieves specific resources using the resource's property values (using the \"Get\" pattern).

This GET operation provides access to resources using the \"Get\" search pattern.  The values of any properties of the resource that are specified will be used to return all matching results (if it exists).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\EducationOrganizationInterventionPrescriptionAssociationsApi(
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
$education_organization_id = 56; // int | The identifier assigned to an education organization.
$intervention_prescription_education_organization_id = 56; // int | The identifier assigned to an education organization.
$intervention_prescription_identification_code = 'intervention_prescription_identification_code_example'; // string | A unique number or alphanumeric code assigned to an intervention prescription.
$begin_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The begin date of the period during which the intervention prescription is available.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines.
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date of the period during which the intervention prescription is available.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines.
$id = 'id_example'; // string | 
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getEducationOrganizationInterventionPrescriptionAssociations($offset, $limit, $page_token, $page_size, $min_change_version, $max_change_version, $total_count, $education_organization_id, $intervention_prescription_education_organization_id, $intervention_prescription_identification_code, $begin_date, $end_date, $id, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EducationOrganizationInterventionPrescriptionAssociationsApi->getEducationOrganizationInterventionPrescriptionAssociations: ', $e->getMessage(), PHP_EOL;
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
| **education_organization_id** | **int**| The identifier assigned to an education organization. | [optional] |
| **intervention_prescription_education_organization_id** | **int**| The identifier assigned to an education organization. | [optional] |
| **intervention_prescription_identification_code** | **string**| A unique number or alphanumeric code assigned to an intervention prescription. | [optional] |
| **begin_date** | **\DateTime**| The begin date of the period during which the intervention prescription is available.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines. | [optional] |
| **end_date** | **\DateTime**| The end date of the period during which the intervention prescription is available.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines. | [optional] |
| **id** | **string**|  | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiEducationOrganizationInterventionPrescriptionAssociation[]**](../Model/EdFiEducationOrganizationInterventionPrescriptionAssociation.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEducationOrganizationInterventionPrescriptionAssociationsById()`

```php
getEducationOrganizationInterventionPrescriptionAssociationsById($id, $if_none_match, $use_snapshot): \Resources\Model\EdFiEducationOrganizationInterventionPrescriptionAssociation
```

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\EducationOrganizationInterventionPrescriptionAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_none_match = 'if_none_match_example'; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getEducationOrganizationInterventionPrescriptionAssociationsById($id, $if_none_match, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EducationOrganizationInterventionPrescriptionAssociationsApi->getEducationOrganizationInterventionPrescriptionAssociationsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiEducationOrganizationInterventionPrescriptionAssociation**](../Model/EdFiEducationOrganizationInterventionPrescriptionAssociation.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEducationOrganizationInterventionPrescriptionAssociationsPartitions()`

```php
getEducationOrganizationInterventionPrescriptionAssociationsPartitions($number, $min_change_version, $max_change_version, $education_organization_id, $intervention_prescription_education_organization_id, $intervention_prescription_identification_code, $begin_date, $end_date, $id, $use_snapshot): \Resources\Model\GetAcademicWeeksPartitions200Response
```

Retrieves a set of page tokens to be used for efficient client-side parallel processing.

Computes an evenly distributed set of partitions over the accessible data and returns a set of page tokens, each representing the first page of one of the partitions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\EducationOrganizationInterventionPrescriptionAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$number = 56; // int | The number of evenly distributed partitions to provide for client-side parallel processing. If unspecified, a reasonable set of partitions will be determined based on the total number of accessible items.
$min_change_version = 56; // int | Used in synchronization to set sequence minimum ChangeVersion
$max_change_version = 56; // int | Used in synchronization to set sequence maximum ChangeVersion
$education_organization_id = 56; // int | The identifier assigned to an education organization.
$intervention_prescription_education_organization_id = 56; // int | The identifier assigned to an education organization.
$intervention_prescription_identification_code = 'intervention_prescription_identification_code_example'; // string | A unique number or alphanumeric code assigned to an intervention prescription.
$begin_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The begin date of the period during which the intervention prescription is available.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines.
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date of the period during which the intervention prescription is available.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines.
$id = 'id_example'; // string | 
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getEducationOrganizationInterventionPrescriptionAssociationsPartitions($number, $min_change_version, $max_change_version, $education_organization_id, $intervention_prescription_education_organization_id, $intervention_prescription_identification_code, $begin_date, $end_date, $id, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EducationOrganizationInterventionPrescriptionAssociationsApi->getEducationOrganizationInterventionPrescriptionAssociationsPartitions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **number** | **int**| The number of evenly distributed partitions to provide for client-side parallel processing. If unspecified, a reasonable set of partitions will be determined based on the total number of accessible items. | [optional] |
| **min_change_version** | **int**| Used in synchronization to set sequence minimum ChangeVersion | [optional] |
| **max_change_version** | **int**| Used in synchronization to set sequence maximum ChangeVersion | [optional] |
| **education_organization_id** | **int**| The identifier assigned to an education organization. | [optional] |
| **intervention_prescription_education_organization_id** | **int**| The identifier assigned to an education organization. | [optional] |
| **intervention_prescription_identification_code** | **string**| A unique number or alphanumeric code assigned to an intervention prescription. | [optional] |
| **begin_date** | **\DateTime**| The begin date of the period during which the intervention prescription is available.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines. | [optional] |
| **end_date** | **\DateTime**| The end date of the period during which the intervention prescription is available.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines. | [optional] |
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

## `keyChangesEducationOrganizationInterventionPrescriptionAssociations()`

```php
keyChangesEducationOrganizationInterventionPrescriptionAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiEducationOrganizationInterventionPrescriptionAssociationKeyChange[]
```

Retrieves resources key changes based on change version.

This operation is used to retrieve identifying information about resources whose key values have been changed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\EducationOrganizationInterventionPrescriptionAssociationsApi(
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
    $result = $apiInstance->keyChangesEducationOrganizationInterventionPrescriptionAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EducationOrganizationInterventionPrescriptionAssociationsApi->keyChangesEducationOrganizationInterventionPrescriptionAssociations: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiEducationOrganizationInterventionPrescriptionAssociationKeyChange[]**](../Model/TrackedChangesEdFiEducationOrganizationInterventionPrescriptionAssociationKeyChange.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEducationOrganizationInterventionPrescriptionAssociation()`

```php
postEducationOrganizationInterventionPrescriptionAssociation($ed_fi_education_organization_intervention_prescription_association)
```

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update). Clients should NOT include the resource \"id\" in the JSON body because it will result in an error. The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately. It is recommended to use POST for both create and update except while updating natural key of a resource in which case PUT operation must be used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\EducationOrganizationInterventionPrescriptionAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ed_fi_education_organization_intervention_prescription_association = new \Resources\Model\EdFiEducationOrganizationInterventionPrescriptionAssociation(); // \Resources\Model\EdFiEducationOrganizationInterventionPrescriptionAssociation | The JSON representation of the \"educationOrganizationInterventionPrescriptionAssociation\" resource to be created or updated.

try {
    $apiInstance->postEducationOrganizationInterventionPrescriptionAssociation($ed_fi_education_organization_intervention_prescription_association);
} catch (Exception $e) {
    echo 'Exception when calling EducationOrganizationInterventionPrescriptionAssociationsApi->postEducationOrganizationInterventionPrescriptionAssociation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ed_fi_education_organization_intervention_prescription_association** | [**\Resources\Model\EdFiEducationOrganizationInterventionPrescriptionAssociation**](../Model/EdFiEducationOrganizationInterventionPrescriptionAssociation.md)| The JSON representation of the \&quot;educationOrganizationInterventionPrescriptionAssociation\&quot; resource to be created or updated. | |

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

## `putEducationOrganizationInterventionPrescriptionAssociation()`

```php
putEducationOrganizationInterventionPrescriptionAssociation($id, $ed_fi_education_organization_intervention_prescription_association, $if_match)
```

Updates a resource based on the resource identifier.

The PUT operation is used to update a resource by identifier. If the resource identifier (\"id\") is provided in the JSON body, it will be ignored. Additionally, this API resource is not configured for cascading natural key updates. Natural key values for this resource cannot be changed using PUT operation, so the recommendation is to use POST as that supports upsert behavior.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\EducationOrganizationInterventionPrescriptionAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$ed_fi_education_organization_intervention_prescription_association = new \Resources\Model\EdFiEducationOrganizationInterventionPrescriptionAssociation(); // \Resources\Model\EdFiEducationOrganizationInterventionPrescriptionAssociation | The JSON representation of the \"educationOrganizationInterventionPrescriptionAssociation\" resource to be created or updated.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try {
    $apiInstance->putEducationOrganizationInterventionPrescriptionAssociation($id, $ed_fi_education_organization_intervention_prescription_association, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling EducationOrganizationInterventionPrescriptionAssociationsApi->putEducationOrganizationInterventionPrescriptionAssociation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **ed_fi_education_organization_intervention_prescription_association** | [**\Resources\Model\EdFiEducationOrganizationInterventionPrescriptionAssociation**](../Model/EdFiEducationOrganizationInterventionPrescriptionAssociation.md)| The JSON representation of the \&quot;educationOrganizationInterventionPrescriptionAssociation\&quot; resource to be created or updated. | |
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
