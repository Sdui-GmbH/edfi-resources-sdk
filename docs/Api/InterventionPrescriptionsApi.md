# OpenAPI\Client\InterventionPrescriptionsApi

All URIs are relative to https://api.ed-fi.org:443/v7.1/api/data/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteInterventionPrescriptionById()**](InterventionPrescriptionsApi.md#deleteInterventionPrescriptionById) | **DELETE** /ed-fi/interventionPrescriptions/{id} | Deletes an existing resource using the resource identifier. |
| [**deletesInterventionPrescriptions()**](InterventionPrescriptionsApi.md#deletesInterventionPrescriptions) | **GET** /ed-fi/interventionPrescriptions/deletes | Retrieves deleted resources based on change version. |
| [**getInterventionPrescriptions()**](InterventionPrescriptionsApi.md#getInterventionPrescriptions) | **GET** /ed-fi/interventionPrescriptions | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern). |
| [**getInterventionPrescriptionsById()**](InterventionPrescriptionsApi.md#getInterventionPrescriptionsById) | **GET** /ed-fi/interventionPrescriptions/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern). |
| [**keyChangesInterventionPrescriptions()**](InterventionPrescriptionsApi.md#keyChangesInterventionPrescriptions) | **GET** /ed-fi/interventionPrescriptions/keyChanges | Retrieves resources key changes based on change version. |
| [**postInterventionPrescription()**](InterventionPrescriptionsApi.md#postInterventionPrescription) | **POST** /ed-fi/interventionPrescriptions | Creates or updates resources based on the natural key values of the supplied resource. |
| [**putInterventionPrescription()**](InterventionPrescriptionsApi.md#putInterventionPrescription) | **PUT** /ed-fi/interventionPrescriptions/{id} | Updates a resource based on the resource identifier. |


## `deleteInterventionPrescriptionById()`

```php
deleteInterventionPrescriptionById($id, $if_match)
```

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier. If the resource doesn't exist, an error will result (the resource will not be found).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InterventionPrescriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try {
    $apiInstance->deleteInterventionPrescriptionById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling InterventionPrescriptionsApi->deleteInterventionPrescriptionById: ', $e->getMessage(), PHP_EOL;
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

## `deletesInterventionPrescriptions()`

```php
deletesInterventionPrescriptions($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \OpenAPI\Client\Model\TrackedChangesEdFiInterventionPrescriptionDelete[]
```

Retrieves deleted resources based on change version.

This operation is used to retrieve identifying information about resources that have been deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InterventionPrescriptionsApi(
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
    $result = $apiInstance->deletesInterventionPrescriptions($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InterventionPrescriptionsApi->deletesInterventionPrescriptions: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\TrackedChangesEdFiInterventionPrescriptionDelete[]**](../Model/TrackedChangesEdFiInterventionPrescriptionDelete.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInterventionPrescriptions()`

```php
getInterventionPrescriptions($offset, $limit, $min_change_version, $max_change_version, $total_count, $intervention_prescription_identification_code, $education_organization_id, $delivery_method_descriptor, $intervention_class_descriptor, $id, $max_dosage, $min_dosage, $namespace, $use_snapshot): \OpenAPI\Client\Model\EdFiInterventionPrescription[]
```

Retrieves specific resources using the resource's property values (using the \"Get\" pattern).

This GET operation provides access to resources using the \"Get\" search pattern.  The values of any properties of the resource that are specified will be used to return all matching results (if it exists).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InterventionPrescriptionsApi(
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
$intervention_prescription_identification_code = 'intervention_prescription_identification_code_example'; // string | A unique number or alphanumeric code assigned to an intervention prescription.
$education_organization_id = 56; // int | The identifier assigned to an education organization.
$delivery_method_descriptor = 'delivery_method_descriptor_example'; // string | The way in which an intervention was implemented: individual, small group, whole class, or whole school.
$intervention_class_descriptor = 'intervention_class_descriptor_example'; // string | The way in which an intervention is used: curriculum, supplement, or practice.
$id = 'id_example'; // string | 
$max_dosage = 56; // int | The maximum duration of time in minutes that is recommended for the intervention.
$min_dosage = 56; // int | The minimum duration of time in minutes that is recommended for the intervention.
$namespace = 'namespace_example'; // string | Namespace for the intervention.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getInterventionPrescriptions($offset, $limit, $min_change_version, $max_change_version, $total_count, $intervention_prescription_identification_code, $education_organization_id, $delivery_method_descriptor, $intervention_class_descriptor, $id, $max_dosage, $min_dosage, $namespace, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InterventionPrescriptionsApi->getInterventionPrescriptions: ', $e->getMessage(), PHP_EOL;
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
| **intervention_prescription_identification_code** | **string**| A unique number or alphanumeric code assigned to an intervention prescription. | [optional] |
| **education_organization_id** | **int**| The identifier assigned to an education organization. | [optional] |
| **delivery_method_descriptor** | **string**| The way in which an intervention was implemented: individual, small group, whole class, or whole school. | [optional] |
| **intervention_class_descriptor** | **string**| The way in which an intervention is used: curriculum, supplement, or practice. | [optional] |
| **id** | **string**|  | [optional] |
| **max_dosage** | **int**| The maximum duration of time in minutes that is recommended for the intervention. | [optional] |
| **min_dosage** | **int**| The minimum duration of time in minutes that is recommended for the intervention. | [optional] |
| **namespace** | **string**| Namespace for the intervention. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\EdFiInterventionPrescription[]**](../Model/EdFiInterventionPrescription.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInterventionPrescriptionsById()`

```php
getInterventionPrescriptionsById($id, $if_none_match, $use_snapshot): \OpenAPI\Client\Model\EdFiInterventionPrescription
```

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InterventionPrescriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_none_match = 'if_none_match_example'; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getInterventionPrescriptionsById($id, $if_none_match, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InterventionPrescriptionsApi->getInterventionPrescriptionsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\EdFiInterventionPrescription**](../Model/EdFiInterventionPrescription.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `keyChangesInterventionPrescriptions()`

```php
keyChangesInterventionPrescriptions($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \OpenAPI\Client\Model\TrackedChangesEdFiInterventionPrescriptionKeyChange[]
```

Retrieves resources key changes based on change version.

This operation is used to retrieve identifying information about resources whose key values have been changed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InterventionPrescriptionsApi(
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
    $result = $apiInstance->keyChangesInterventionPrescriptions($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InterventionPrescriptionsApi->keyChangesInterventionPrescriptions: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\TrackedChangesEdFiInterventionPrescriptionKeyChange[]**](../Model/TrackedChangesEdFiInterventionPrescriptionKeyChange.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postInterventionPrescription()`

```php
postInterventionPrescription($ed_fi_intervention_prescription)
```

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update). Clients should NOT include the resource \"id\" in the JSON body because it will result in an error. The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately. It is recommended to use POST for both create and update except while updating natural key of a resource in which case PUT operation must be used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InterventionPrescriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ed_fi_intervention_prescription = new \OpenAPI\Client\Model\EdFiInterventionPrescription(); // \OpenAPI\Client\Model\EdFiInterventionPrescription | The JSON representation of the \"interventionPrescription\" resource to be created or updated.

try {
    $apiInstance->postInterventionPrescription($ed_fi_intervention_prescription);
} catch (Exception $e) {
    echo 'Exception when calling InterventionPrescriptionsApi->postInterventionPrescription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ed_fi_intervention_prescription** | [**\OpenAPI\Client\Model\EdFiInterventionPrescription**](../Model/EdFiInterventionPrescription.md)| The JSON representation of the \&quot;interventionPrescription\&quot; resource to be created or updated. | |

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

## `putInterventionPrescription()`

```php
putInterventionPrescription($id, $ed_fi_intervention_prescription, $if_match)
```

Updates a resource based on the resource identifier.

The PUT operation is used to update a resource by identifier. If the resource identifier (\"id\") is provided in the JSON body, it will be ignored. Additionally, this API resource is not configured for cascading natural key updates. Natural key values for this resource cannot be changed using PUT operation, so the recommendation is to use POST as that supports upsert behavior.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InterventionPrescriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$ed_fi_intervention_prescription = new \OpenAPI\Client\Model\EdFiInterventionPrescription(); // \OpenAPI\Client\Model\EdFiInterventionPrescription | The JSON representation of the \"interventionPrescription\" resource to be created or updated.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try {
    $apiInstance->putInterventionPrescription($id, $ed_fi_intervention_prescription, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling InterventionPrescriptionsApi->putInterventionPrescription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **ed_fi_intervention_prescription** | [**\OpenAPI\Client\Model\EdFiInterventionPrescription**](../Model/EdFiInterventionPrescription.md)| The JSON representation of the \&quot;interventionPrescription\&quot; resource to be created or updated. | |
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
