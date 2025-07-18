# Resources\CredentialsApi

All URIs are relative to https://api.ed-fi.org:443/v7.3/api/data/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteCredentialById()**](CredentialsApi.md#deleteCredentialById) | **DELETE** /ed-fi/credentials/{id} | Deletes an existing resource using the resource identifier. |
| [**deletesCredentials()**](CredentialsApi.md#deletesCredentials) | **GET** /ed-fi/credentials/deletes | Retrieves deleted resources based on change version. |
| [**getCredentials()**](CredentialsApi.md#getCredentials) | **GET** /ed-fi/credentials | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern). |
| [**getCredentialsById()**](CredentialsApi.md#getCredentialsById) | **GET** /ed-fi/credentials/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern). |
| [**getCredentialsPartitions()**](CredentialsApi.md#getCredentialsPartitions) | **GET** /ed-fi/credentials/partitions | Retrieves a set of page tokens to be used for efficient client-side parallel processing. |
| [**keyChangesCredentials()**](CredentialsApi.md#keyChangesCredentials) | **GET** /ed-fi/credentials/keyChanges | Retrieves resources key changes based on change version. |
| [**postCredential()**](CredentialsApi.md#postCredential) | **POST** /ed-fi/credentials | Creates or updates resources based on the natural key values of the supplied resource. |
| [**putCredential()**](CredentialsApi.md#putCredential) | **PUT** /ed-fi/credentials/{id} | Updates a resource based on the resource identifier. |


## `deleteCredentialById()`

```php
deleteCredentialById($id, $if_match)
```

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier. If the resource doesn't exist, an error will result (the resource will not be found).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\CredentialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try {
    $apiInstance->deleteCredentialById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling CredentialsApi->deleteCredentialById: ', $e->getMessage(), PHP_EOL;
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

## `deletesCredentials()`

```php
deletesCredentials($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiCredentialDelete[]
```

Retrieves deleted resources based on change version.

This operation is used to retrieve identifying information about resources that have been deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\CredentialsApi(
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
    $result = $apiInstance->deletesCredentials($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CredentialsApi->deletesCredentials: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiCredentialDelete[]**](../Model/TrackedChangesEdFiCredentialDelete.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCredentials()`

```php
getCredentials($offset, $limit, $page_token, $page_size, $min_change_version, $max_change_version, $total_count, $state_of_issue_state_abbreviation_descriptor, $credential_identifier, $credential_field_descriptor, $credential_type_descriptor, $teaching_credential_basis_descriptor, $teaching_credential_descriptor, $effective_date, $expiration_date, $id, $issuance_date, $namespace, $use_snapshot): \Resources\Model\EdFiCredential[]
```

Retrieves specific resources using the resource's property values (using the \"Get\" pattern).

This GET operation provides access to resources using the \"Get\" search pattern.  The values of any properties of the resource that are specified will be used to return all matching results (if it exists).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\CredentialsApi(
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
$state_of_issue_state_abbreviation_descriptor = 'state_of_issue_state_abbreviation_descriptor_example'; // string | The abbreviation for the name of the state (within the United States) or extra-state jurisdiction in which a license/credential was issued.
$credential_identifier = 'credential_identifier_example'; // string | Identifier or serial number assigned to the credential.
$credential_field_descriptor = 'credential_field_descriptor_example'; // string | The field of certification for the certificate (e.g., Mathematics, Music).
$credential_type_descriptor = 'credential_type_descriptor_example'; // string | An indication of the category of credential an individual holds.
$teaching_credential_basis_descriptor = 'teaching_credential_basis_descriptor_example'; // string | An indication of the pre-determined criteria for granting the teaching credential that an individual holds.
$teaching_credential_descriptor = 'teaching_credential_descriptor_example'; // string | An indication of the category of a legal document giving authorization to perform teaching assignment services.
$effective_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The year, month and day on which an active credential held by an individual was issued.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines.
$expiration_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The month, day, and year on which an active credential held by an individual will expire.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines.
$id = 'id_example'; // string | 
$issuance_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The month, day, and year on which an active credential was issued to an individual.
$namespace = 'namespace_example'; // string | Namespace for the credential.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getCredentials($offset, $limit, $page_token, $page_size, $min_change_version, $max_change_version, $total_count, $state_of_issue_state_abbreviation_descriptor, $credential_identifier, $credential_field_descriptor, $credential_type_descriptor, $teaching_credential_basis_descriptor, $teaching_credential_descriptor, $effective_date, $expiration_date, $id, $issuance_date, $namespace, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CredentialsApi->getCredentials: ', $e->getMessage(), PHP_EOL;
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
| **state_of_issue_state_abbreviation_descriptor** | **string**| The abbreviation for the name of the state (within the United States) or extra-state jurisdiction in which a license/credential was issued. | [optional] |
| **credential_identifier** | **string**| Identifier or serial number assigned to the credential. | [optional] |
| **credential_field_descriptor** | **string**| The field of certification for the certificate (e.g., Mathematics, Music). | [optional] |
| **credential_type_descriptor** | **string**| An indication of the category of credential an individual holds. | [optional] |
| **teaching_credential_basis_descriptor** | **string**| An indication of the pre-determined criteria for granting the teaching credential that an individual holds. | [optional] |
| **teaching_credential_descriptor** | **string**| An indication of the category of a legal document giving authorization to perform teaching assignment services. | [optional] |
| **effective_date** | **\DateTime**| The year, month and day on which an active credential held by an individual was issued.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines. | [optional] |
| **expiration_date** | **\DateTime**| The month, day, and year on which an active credential held by an individual will expire.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines. | [optional] |
| **id** | **string**|  | [optional] |
| **issuance_date** | **\DateTime**| The month, day, and year on which an active credential was issued to an individual. | [optional] |
| **namespace** | **string**| Namespace for the credential. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiCredential[]**](../Model/EdFiCredential.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCredentialsById()`

```php
getCredentialsById($id, $if_none_match, $use_snapshot): \Resources\Model\EdFiCredential
```

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\CredentialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_none_match = 'if_none_match_example'; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getCredentialsById($id, $if_none_match, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CredentialsApi->getCredentialsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiCredential**](../Model/EdFiCredential.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCredentialsPartitions()`

```php
getCredentialsPartitions($number, $min_change_version, $max_change_version, $state_of_issue_state_abbreviation_descriptor, $credential_identifier, $credential_field_descriptor, $credential_type_descriptor, $teaching_credential_basis_descriptor, $teaching_credential_descriptor, $effective_date, $expiration_date, $id, $issuance_date, $namespace, $use_snapshot): \Resources\Model\GetAcademicWeeksPartitions200Response
```

Retrieves a set of page tokens to be used for efficient client-side parallel processing.

Computes an evenly distributed set of partitions over the accessible data and returns a set of page tokens, each representing the first page of one of the partitions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\CredentialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$number = 56; // int | The number of evenly distributed partitions to provide for client-side parallel processing. If unspecified, a reasonable set of partitions will be determined based on the total number of accessible items.
$min_change_version = 56; // int | Used in synchronization to set sequence minimum ChangeVersion
$max_change_version = 56; // int | Used in synchronization to set sequence maximum ChangeVersion
$state_of_issue_state_abbreviation_descriptor = 'state_of_issue_state_abbreviation_descriptor_example'; // string | The abbreviation for the name of the state (within the United States) or extra-state jurisdiction in which a license/credential was issued.
$credential_identifier = 'credential_identifier_example'; // string | Identifier or serial number assigned to the credential.
$credential_field_descriptor = 'credential_field_descriptor_example'; // string | The field of certification for the certificate (e.g., Mathematics, Music).
$credential_type_descriptor = 'credential_type_descriptor_example'; // string | An indication of the category of credential an individual holds.
$teaching_credential_basis_descriptor = 'teaching_credential_basis_descriptor_example'; // string | An indication of the pre-determined criteria for granting the teaching credential that an individual holds.
$teaching_credential_descriptor = 'teaching_credential_descriptor_example'; // string | An indication of the category of a legal document giving authorization to perform teaching assignment services.
$effective_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The year, month and day on which an active credential held by an individual was issued.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines.
$expiration_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The month, day, and year on which an active credential held by an individual will expire.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines.
$id = 'id_example'; // string | 
$issuance_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The month, day, and year on which an active credential was issued to an individual.
$namespace = 'namespace_example'; // string | Namespace for the credential.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getCredentialsPartitions($number, $min_change_version, $max_change_version, $state_of_issue_state_abbreviation_descriptor, $credential_identifier, $credential_field_descriptor, $credential_type_descriptor, $teaching_credential_basis_descriptor, $teaching_credential_descriptor, $effective_date, $expiration_date, $id, $issuance_date, $namespace, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CredentialsApi->getCredentialsPartitions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **number** | **int**| The number of evenly distributed partitions to provide for client-side parallel processing. If unspecified, a reasonable set of partitions will be determined based on the total number of accessible items. | [optional] |
| **min_change_version** | **int**| Used in synchronization to set sequence minimum ChangeVersion | [optional] |
| **max_change_version** | **int**| Used in synchronization to set sequence maximum ChangeVersion | [optional] |
| **state_of_issue_state_abbreviation_descriptor** | **string**| The abbreviation for the name of the state (within the United States) or extra-state jurisdiction in which a license/credential was issued. | [optional] |
| **credential_identifier** | **string**| Identifier or serial number assigned to the credential. | [optional] |
| **credential_field_descriptor** | **string**| The field of certification for the certificate (e.g., Mathematics, Music). | [optional] |
| **credential_type_descriptor** | **string**| An indication of the category of credential an individual holds. | [optional] |
| **teaching_credential_basis_descriptor** | **string**| An indication of the pre-determined criteria for granting the teaching credential that an individual holds. | [optional] |
| **teaching_credential_descriptor** | **string**| An indication of the category of a legal document giving authorization to perform teaching assignment services. | [optional] |
| **effective_date** | **\DateTime**| The year, month and day on which an active credential held by an individual was issued.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines. | [optional] |
| **expiration_date** | **\DateTime**| The month, day, and year on which an active credential held by an individual will expire.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines. | [optional] |
| **id** | **string**|  | [optional] |
| **issuance_date** | **\DateTime**| The month, day, and year on which an active credential was issued to an individual. | [optional] |
| **namespace** | **string**| Namespace for the credential. | [optional] |
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

## `keyChangesCredentials()`

```php
keyChangesCredentials($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiCredentialKeyChange[]
```

Retrieves resources key changes based on change version.

This operation is used to retrieve identifying information about resources whose key values have been changed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\CredentialsApi(
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
    $result = $apiInstance->keyChangesCredentials($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CredentialsApi->keyChangesCredentials: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiCredentialKeyChange[]**](../Model/TrackedChangesEdFiCredentialKeyChange.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCredential()`

```php
postCredential($ed_fi_credential)
```

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update). Clients should NOT include the resource \"id\" in the JSON body because it will result in an error. The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately. It is recommended to use POST for both create and update except while updating natural key of a resource in which case PUT operation must be used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\CredentialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ed_fi_credential = new \Resources\Model\EdFiCredential(); // \Resources\Model\EdFiCredential | The JSON representation of the \"credential\" resource to be created or updated.

try {
    $apiInstance->postCredential($ed_fi_credential);
} catch (Exception $e) {
    echo 'Exception when calling CredentialsApi->postCredential: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ed_fi_credential** | [**\Resources\Model\EdFiCredential**](../Model/EdFiCredential.md)| The JSON representation of the \&quot;credential\&quot; resource to be created or updated. | |

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

## `putCredential()`

```php
putCredential($id, $ed_fi_credential, $if_match)
```

Updates a resource based on the resource identifier.

The PUT operation is used to update a resource by identifier. If the resource identifier (\"id\") is provided in the JSON body, it will be ignored. Additionally, this API resource is not configured for cascading natural key updates. Natural key values for this resource cannot be changed using PUT operation, so the recommendation is to use POST as that supports upsert behavior.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\CredentialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$ed_fi_credential = new \Resources\Model\EdFiCredential(); // \Resources\Model\EdFiCredential | The JSON representation of the \"credential\" resource to be created or updated.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try {
    $apiInstance->putCredential($id, $ed_fi_credential, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling CredentialsApi->putCredential: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **ed_fi_credential** | [**\Resources\Model\EdFiCredential**](../Model/EdFiCredential.md)| The JSON representation of the \&quot;credential\&quot; resource to be created or updated. | |
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
