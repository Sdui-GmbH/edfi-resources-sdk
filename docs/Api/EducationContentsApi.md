# Resources\EducationContentsApi

All URIs are relative to https://api.ed-fi.org:443/v7.2/api/data/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteEducationContentById()**](EducationContentsApi.md#deleteEducationContentById) | **DELETE** /ed-fi/educationContents/{id} | Deletes an existing resource using the resource identifier. |
| [**deletesEducationContents()**](EducationContentsApi.md#deletesEducationContents) | **GET** /ed-fi/educationContents/deletes | Retrieves deleted resources based on change version. |
| [**getEducationContents()**](EducationContentsApi.md#getEducationContents) | **GET** /ed-fi/educationContents | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern). |
| [**getEducationContentsById()**](EducationContentsApi.md#getEducationContentsById) | **GET** /ed-fi/educationContents/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern). |
| [**keyChangesEducationContents()**](EducationContentsApi.md#keyChangesEducationContents) | **GET** /ed-fi/educationContents/keyChanges | Retrieves resources key changes based on change version. |
| [**postEducationContent()**](EducationContentsApi.md#postEducationContent) | **POST** /ed-fi/educationContents | Creates or updates resources based on the natural key values of the supplied resource. |
| [**putEducationContent()**](EducationContentsApi.md#putEducationContent) | **PUT** /ed-fi/educationContents/{id} | Updates a resource based on the resource identifier. |


## `deleteEducationContentById()`

```php
deleteEducationContentById($id, $if_match)
```

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier. If the resource doesn't exist, an error will result (the resource will not be found).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\EducationContentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try {
    $apiInstance->deleteEducationContentById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling EducationContentsApi->deleteEducationContentById: ', $e->getMessage(), PHP_EOL;
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

## `deletesEducationContents()`

```php
deletesEducationContents($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiEducationContentDelete[]
```

Retrieves deleted resources based on change version.

This operation is used to retrieve identifying information about resources that have been deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\EducationContentsApi(
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
    $result = $apiInstance->deletesEducationContents($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EducationContentsApi->deletesEducationContents: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiEducationContentDelete[]**](../Model/TrackedChangesEdFiEducationContentDelete.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEducationContents()`

```php
getEducationContents($offset, $limit, $min_change_version, $max_change_version, $total_count, $content_identifier, $learning_standard_id, $content_class_descriptor, $cost_rate_descriptor, $interactivity_style_descriptor, $additional_authors_indicator, $cost, $description, $id, $learning_resource_metadata_uri, $namespace, $publication_date, $publication_year, $publisher, $short_description, $time_required, $use_rights_url, $version, $use_snapshot): \Resources\Model\EdFiEducationContent[]
```

Retrieves specific resources using the resource's property values (using the \"Get\" pattern).

This GET operation provides access to resources using the \"Get\" search pattern.  The values of any properties of the resource that are specified will be used to return all matching results (if it exists).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\EducationContentsApi(
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
$content_identifier = 'content_identifier_example'; // string | A unique identifier for the education content.
$learning_standard_id = 'learning_standard_id_example'; // string | The identifier for the specific learning standard (e.g., 111.15.3.1.A).
$content_class_descriptor = 'content_class_descriptor_example'; // string | The predominate type or kind characterizing the learning resource.
$cost_rate_descriptor = 'cost_rate_descriptor_example'; // string | The rate by which the cost applies.
$interactivity_style_descriptor = 'interactivity_style_descriptor_example'; // string | The predominate mode of learning supported by the learning resource. Acceptable values are active, expositive, or mixed.
$additional_authors_indicator = True; // bool | Indicates whether there are additional un-named authors. In a research report, this is often marked by the abbreviation \"et al\".
$cost = 3.4; // float | An amount that has to be paid or spent to buy or obtain the education content.
$description = 'description_example'; // string | An extended written representation of the education content.
$id = 'id_example'; // string | 
$learning_resource_metadata_uri = 'learning_resource_metadata_uri_example'; // string | The URI (typical a URL) pointing to the metadata entry in a LRMI metadata repository, which describes this content item.
$namespace = 'namespace_example'; // string | Namespace for the education content.
$publication_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date on which this content was first published.
$publication_year = 56; // int | The year at which this content was first published.
$publisher = 'publisher_example'; // string | The organization credited with publishing the resource.
$short_description = 'short_description_example'; // string | A short description or name of the entity.
$time_required = 'time_required_example'; // string | Approximate or typical time it takes to work with or through this learning resource for the typical intended target audience.
$use_rights_url = 'use_rights_url_example'; // string | The URL where the owner specifies permissions for using the resource.
$version = 'version_example'; // string | The version identifier for the content.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getEducationContents($offset, $limit, $min_change_version, $max_change_version, $total_count, $content_identifier, $learning_standard_id, $content_class_descriptor, $cost_rate_descriptor, $interactivity_style_descriptor, $additional_authors_indicator, $cost, $description, $id, $learning_resource_metadata_uri, $namespace, $publication_date, $publication_year, $publisher, $short_description, $time_required, $use_rights_url, $version, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EducationContentsApi->getEducationContents: ', $e->getMessage(), PHP_EOL;
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
| **content_identifier** | **string**| A unique identifier for the education content. | [optional] |
| **learning_standard_id** | **string**| The identifier for the specific learning standard (e.g., 111.15.3.1.A). | [optional] |
| **content_class_descriptor** | **string**| The predominate type or kind characterizing the learning resource. | [optional] |
| **cost_rate_descriptor** | **string**| The rate by which the cost applies. | [optional] |
| **interactivity_style_descriptor** | **string**| The predominate mode of learning supported by the learning resource. Acceptable values are active, expositive, or mixed. | [optional] |
| **additional_authors_indicator** | **bool**| Indicates whether there are additional un-named authors. In a research report, this is often marked by the abbreviation \&quot;et al\&quot;. | [optional] |
| **cost** | **float**| An amount that has to be paid or spent to buy or obtain the education content. | [optional] |
| **description** | **string**| An extended written representation of the education content. | [optional] |
| **id** | **string**|  | [optional] |
| **learning_resource_metadata_uri** | **string**| The URI (typical a URL) pointing to the metadata entry in a LRMI metadata repository, which describes this content item. | [optional] |
| **namespace** | **string**| Namespace for the education content. | [optional] |
| **publication_date** | **\DateTime**| The date on which this content was first published. | [optional] |
| **publication_year** | **int**| The year at which this content was first published. | [optional] |
| **publisher** | **string**| The organization credited with publishing the resource. | [optional] |
| **short_description** | **string**| A short description or name of the entity. | [optional] |
| **time_required** | **string**| Approximate or typical time it takes to work with or through this learning resource for the typical intended target audience. | [optional] |
| **use_rights_url** | **string**| The URL where the owner specifies permissions for using the resource. | [optional] |
| **version** | **string**| The version identifier for the content. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiEducationContent[]**](../Model/EdFiEducationContent.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEducationContentsById()`

```php
getEducationContentsById($id, $if_none_match, $use_snapshot): \Resources\Model\EdFiEducationContent
```

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\EducationContentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_none_match = 'if_none_match_example'; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getEducationContentsById($id, $if_none_match, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EducationContentsApi->getEducationContentsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiEducationContent**](../Model/EdFiEducationContent.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `keyChangesEducationContents()`

```php
keyChangesEducationContents($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiEducationContentKeyChange[]
```

Retrieves resources key changes based on change version.

This operation is used to retrieve identifying information about resources whose key values have been changed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\EducationContentsApi(
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
    $result = $apiInstance->keyChangesEducationContents($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EducationContentsApi->keyChangesEducationContents: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiEducationContentKeyChange[]**](../Model/TrackedChangesEdFiEducationContentKeyChange.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEducationContent()`

```php
postEducationContent($ed_fi_education_content)
```

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update). Clients should NOT include the resource \"id\" in the JSON body because it will result in an error. The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately. It is recommended to use POST for both create and update except while updating natural key of a resource in which case PUT operation must be used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\EducationContentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ed_fi_education_content = new \Resources\Model\EdFiEducationContent(); // \Resources\Model\EdFiEducationContent | The JSON representation of the \"educationContent\" resource to be created or updated.

try {
    $apiInstance->postEducationContent($ed_fi_education_content);
} catch (Exception $e) {
    echo 'Exception when calling EducationContentsApi->postEducationContent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ed_fi_education_content** | [**\Resources\Model\EdFiEducationContent**](../Model/EdFiEducationContent.md)| The JSON representation of the \&quot;educationContent\&quot; resource to be created or updated. | |

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

## `putEducationContent()`

```php
putEducationContent($id, $ed_fi_education_content, $if_match)
```

Updates a resource based on the resource identifier.

The PUT operation is used to update a resource by identifier. If the resource identifier (\"id\") is provided in the JSON body, it will be ignored. Additionally, this API resource is not configured for cascading natural key updates. Natural key values for this resource cannot be changed using PUT operation, so the recommendation is to use POST as that supports upsert behavior.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\EducationContentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$ed_fi_education_content = new \Resources\Model\EdFiEducationContent(); // \Resources\Model\EdFiEducationContent | The JSON representation of the \"educationContent\" resource to be created or updated.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try {
    $apiInstance->putEducationContent($id, $ed_fi_education_content, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling EducationContentsApi->putEducationContent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **ed_fi_education_content** | [**\Resources\Model\EdFiEducationContent**](../Model/EdFiEducationContent.md)| The JSON representation of the \&quot;educationContent\&quot; resource to be created or updated. | |
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
