# Resources\LearningStandardEquivalenceAssociationsApi

All URIs are relative to https://api.ed-fi.org:443/v7.2/api/data/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteLearningStandardEquivalenceAssociationById()**](LearningStandardEquivalenceAssociationsApi.md#deleteLearningStandardEquivalenceAssociationById) | **DELETE** /ed-fi/learningStandardEquivalenceAssociations/{id} | Deletes an existing resource using the resource identifier. |
| [**deletesLearningStandardEquivalenceAssociations()**](LearningStandardEquivalenceAssociationsApi.md#deletesLearningStandardEquivalenceAssociations) | **GET** /ed-fi/learningStandardEquivalenceAssociations/deletes | Retrieves deleted resources based on change version. |
| [**getLearningStandardEquivalenceAssociations()**](LearningStandardEquivalenceAssociationsApi.md#getLearningStandardEquivalenceAssociations) | **GET** /ed-fi/learningStandardEquivalenceAssociations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern). |
| [**getLearningStandardEquivalenceAssociationsById()**](LearningStandardEquivalenceAssociationsApi.md#getLearningStandardEquivalenceAssociationsById) | **GET** /ed-fi/learningStandardEquivalenceAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern). |
| [**keyChangesLearningStandardEquivalenceAssociations()**](LearningStandardEquivalenceAssociationsApi.md#keyChangesLearningStandardEquivalenceAssociations) | **GET** /ed-fi/learningStandardEquivalenceAssociations/keyChanges | Retrieves resources key changes based on change version. |
| [**postLearningStandardEquivalenceAssociation()**](LearningStandardEquivalenceAssociationsApi.md#postLearningStandardEquivalenceAssociation) | **POST** /ed-fi/learningStandardEquivalenceAssociations | Creates or updates resources based on the natural key values of the supplied resource. |
| [**putLearningStandardEquivalenceAssociation()**](LearningStandardEquivalenceAssociationsApi.md#putLearningStandardEquivalenceAssociation) | **PUT** /ed-fi/learningStandardEquivalenceAssociations/{id} | Updates a resource based on the resource identifier. |


## `deleteLearningStandardEquivalenceAssociationById()`

```php
deleteLearningStandardEquivalenceAssociationById($id, $if_match)
```

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier. If the resource doesn't exist, an error will result (the resource will not be found).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\LearningStandardEquivalenceAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try {
    $apiInstance->deleteLearningStandardEquivalenceAssociationById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling LearningStandardEquivalenceAssociationsApi->deleteLearningStandardEquivalenceAssociationById: ', $e->getMessage(), PHP_EOL;
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

## `deletesLearningStandardEquivalenceAssociations()`

```php
deletesLearningStandardEquivalenceAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiLearningStandardEquivalenceAssociationDelete[]
```

Retrieves deleted resources based on change version.

This operation is used to retrieve identifying information about resources that have been deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\LearningStandardEquivalenceAssociationsApi(
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
    $result = $apiInstance->deletesLearningStandardEquivalenceAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearningStandardEquivalenceAssociationsApi->deletesLearningStandardEquivalenceAssociations: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiLearningStandardEquivalenceAssociationDelete[]**](../Model/TrackedChangesEdFiLearningStandardEquivalenceAssociationDelete.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLearningStandardEquivalenceAssociations()`

```php
getLearningStandardEquivalenceAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $namespace, $source_learning_standard_id, $target_learning_standard_id, $learning_standard_equivalence_strength_descriptor, $effective_date, $id, $learning_standard_equivalence_strength_description, $use_snapshot): \Resources\Model\EdFiLearningStandardEquivalenceAssociation[]
```

Retrieves specific resources using the resource's property values (using the \"Get\" pattern).

This GET operation provides access to resources using the \"Get\" search pattern.  The values of any properties of the resource that are specified will be used to return all matching results (if it exists).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\LearningStandardEquivalenceAssociationsApi(
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
$namespace = 'namespace_example'; // string | The namespace of the organization that has created and owns the association.
$source_learning_standard_id = 'source_learning_standard_id_example'; // string | The identifier for the specific learning standard (e.g., 111.15.3.1.A).
$target_learning_standard_id = 'target_learning_standard_id_example'; // string | The identifier for the specific learning standard (e.g., 111.15.3.1.A).
$learning_standard_equivalence_strength_descriptor = 'learning_standard_equivalence_strength_descriptor_example'; // string | A measure that indicates the strength or quality of the equivalence relationship.
$effective_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date that the association is considered to be applicable or effective.
$id = 'id_example'; // string | 
$learning_standard_equivalence_strength_description = 'learning_standard_equivalence_strength_description_example'; // string | Captures supplemental information on the relationship. Recommended for use only when the match is partial.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getLearningStandardEquivalenceAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $namespace, $source_learning_standard_id, $target_learning_standard_id, $learning_standard_equivalence_strength_descriptor, $effective_date, $id, $learning_standard_equivalence_strength_description, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearningStandardEquivalenceAssociationsApi->getLearningStandardEquivalenceAssociations: ', $e->getMessage(), PHP_EOL;
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
| **namespace** | **string**| The namespace of the organization that has created and owns the association. | [optional] |
| **source_learning_standard_id** | **string**| The identifier for the specific learning standard (e.g., 111.15.3.1.A). | [optional] |
| **target_learning_standard_id** | **string**| The identifier for the specific learning standard (e.g., 111.15.3.1.A). | [optional] |
| **learning_standard_equivalence_strength_descriptor** | **string**| A measure that indicates the strength or quality of the equivalence relationship. | [optional] |
| **effective_date** | **\DateTime**| The date that the association is considered to be applicable or effective. | [optional] |
| **id** | **string**|  | [optional] |
| **learning_standard_equivalence_strength_description** | **string**| Captures supplemental information on the relationship. Recommended for use only when the match is partial. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiLearningStandardEquivalenceAssociation[]**](../Model/EdFiLearningStandardEquivalenceAssociation.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLearningStandardEquivalenceAssociationsById()`

```php
getLearningStandardEquivalenceAssociationsById($id, $if_none_match, $use_snapshot): \Resources\Model\EdFiLearningStandardEquivalenceAssociation
```

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\LearningStandardEquivalenceAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_none_match = 'if_none_match_example'; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getLearningStandardEquivalenceAssociationsById($id, $if_none_match, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearningStandardEquivalenceAssociationsApi->getLearningStandardEquivalenceAssociationsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiLearningStandardEquivalenceAssociation**](../Model/EdFiLearningStandardEquivalenceAssociation.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `keyChangesLearningStandardEquivalenceAssociations()`

```php
keyChangesLearningStandardEquivalenceAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiLearningStandardEquivalenceAssociationKeyChange[]
```

Retrieves resources key changes based on change version.

This operation is used to retrieve identifying information about resources whose key values have been changed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\LearningStandardEquivalenceAssociationsApi(
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
    $result = $apiInstance->keyChangesLearningStandardEquivalenceAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearningStandardEquivalenceAssociationsApi->keyChangesLearningStandardEquivalenceAssociations: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiLearningStandardEquivalenceAssociationKeyChange[]**](../Model/TrackedChangesEdFiLearningStandardEquivalenceAssociationKeyChange.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postLearningStandardEquivalenceAssociation()`

```php
postLearningStandardEquivalenceAssociation($ed_fi_learning_standard_equivalence_association)
```

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update). Clients should NOT include the resource \"id\" in the JSON body because it will result in an error. The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately. It is recommended to use POST for both create and update except while updating natural key of a resource in which case PUT operation must be used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\LearningStandardEquivalenceAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ed_fi_learning_standard_equivalence_association = new \Resources\Model\EdFiLearningStandardEquivalenceAssociation(); // \Resources\Model\EdFiLearningStandardEquivalenceAssociation | The JSON representation of the \"learningStandardEquivalenceAssociation\" resource to be created or updated.

try {
    $apiInstance->postLearningStandardEquivalenceAssociation($ed_fi_learning_standard_equivalence_association);
} catch (Exception $e) {
    echo 'Exception when calling LearningStandardEquivalenceAssociationsApi->postLearningStandardEquivalenceAssociation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ed_fi_learning_standard_equivalence_association** | [**\Resources\Model\EdFiLearningStandardEquivalenceAssociation**](../Model/EdFiLearningStandardEquivalenceAssociation.md)| The JSON representation of the \&quot;learningStandardEquivalenceAssociation\&quot; resource to be created or updated. | |

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

## `putLearningStandardEquivalenceAssociation()`

```php
putLearningStandardEquivalenceAssociation($id, $ed_fi_learning_standard_equivalence_association, $if_match)
```

Updates a resource based on the resource identifier.

The PUT operation is used to update a resource by identifier. If the resource identifier (\"id\") is provided in the JSON body, it will be ignored. Additionally, this API resource is not configured for cascading natural key updates. Natural key values for this resource cannot be changed using PUT operation, so the recommendation is to use POST as that supports upsert behavior.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\LearningStandardEquivalenceAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$ed_fi_learning_standard_equivalence_association = new \Resources\Model\EdFiLearningStandardEquivalenceAssociation(); // \Resources\Model\EdFiLearningStandardEquivalenceAssociation | The JSON representation of the \"learningStandardEquivalenceAssociation\" resource to be created or updated.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try {
    $apiInstance->putLearningStandardEquivalenceAssociation($id, $ed_fi_learning_standard_equivalence_association, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling LearningStandardEquivalenceAssociationsApi->putLearningStandardEquivalenceAssociation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **ed_fi_learning_standard_equivalence_association** | [**\Resources\Model\EdFiLearningStandardEquivalenceAssociation**](../Model/EdFiLearningStandardEquivalenceAssociation.md)| The JSON representation of the \&quot;learningStandardEquivalenceAssociation\&quot; resource to be created or updated. | |
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
