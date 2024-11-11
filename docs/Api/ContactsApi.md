# Resources\ContactsApi

All URIs are relative to https://api.ed-fi.org:443/v7.1/api/data/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteContactById()**](ContactsApi.md#deleteContactById) | **DELETE** /ed-fi/contacts/{id} | Deletes an existing resource using the resource identifier. |
| [**deletesContacts()**](ContactsApi.md#deletesContacts) | **GET** /ed-fi/contacts/deletes | Retrieves deleted resources based on change version. |
| [**getContacts()**](ContactsApi.md#getContacts) | **GET** /ed-fi/contacts | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern). |
| [**getContactsById()**](ContactsApi.md#getContactsById) | **GET** /ed-fi/contacts/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern). |
| [**keyChangesContacts()**](ContactsApi.md#keyChangesContacts) | **GET** /ed-fi/contacts/keyChanges | Retrieves resources key changes based on change version. |
| [**postContact()**](ContactsApi.md#postContact) | **POST** /ed-fi/contacts | Creates or updates resources based on the natural key values of the supplied resource. |
| [**putContact()**](ContactsApi.md#putContact) | **PUT** /ed-fi/contacts/{id} | Updates a resource based on the resource identifier. |


## `deleteContactById()`

```php
deleteContactById($id, $if_match)
```

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier. If the resource doesn't exist, an error will result (the resource will not be found).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try {
    $apiInstance->deleteContactById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->deleteContactById: ', $e->getMessage(), PHP_EOL;
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

## `deletesContacts()`

```php
deletesContacts($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiContactDelete[]
```

Retrieves deleted resources based on change version.

This operation is used to retrieve identifying information about resources that have been deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\ContactsApi(
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
    $result = $apiInstance->deletesContacts($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->deletesContacts: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiContactDelete[]**](../Model/TrackedChangesEdFiContactDelete.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContacts()`

```php
getContacts($offset, $limit, $min_change_version, $max_change_version, $total_count, $contact_unique_id, $person_id, $source_system_descriptor, $highest_completed_level_of_education_descriptor, $sex_descriptor, $first_name, $gender_identity, $generation_code_suffix, $id, $last_surname, $login_id, $maiden_name, $middle_name, $personal_title_prefix, $preferred_first_name, $preferred_last_surname, $use_snapshot): \Resources\Model\EdFiContact[]
```

Retrieves specific resources using the resource's property values (using the \"Get\" pattern).

This GET operation provides access to resources using the \"Get\" search pattern.  The values of any properties of the resource that are specified will be used to return all matching results (if it exists).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\ContactsApi(
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
$contact_unique_id = 'contact_unique_id_example'; // string | A unique alphanumeric code assigned to a contact.
$person_id = 'person_id_example'; // string | A unique alphanumeric code assigned to a person.
$source_system_descriptor = 'source_system_descriptor_example'; // string | This descriptor defines the originating record source system for the person.
$highest_completed_level_of_education_descriptor = 'highest_completed_level_of_education_descriptor_example'; // string | The extent of formal instruction an individual has received (e.g., the highest grade in school completed or its equivalent or the highest degree received).
$sex_descriptor = 'sex_descriptor_example'; // string | A person's birth sex.
$first_name = 'first_name_example'; // string | A name given to an individual at birth, baptism, or during another naming ceremony, or through legal change.
$gender_identity = 'gender_identity_example'; // string | The gender the contact identifies themselves as.
$generation_code_suffix = 'generation_code_suffix_example'; // string | An appendage, if any, used to denote an individual's generation in his family (e.g., Jr., Sr., III).
$id = 'id_example'; // string | 
$last_surname = 'last_surname_example'; // string | The name borne in common by members of a family.
$login_id = 'login_id_example'; // string | The login ID for the user; used for security access control interface.
$maiden_name = 'maiden_name_example'; // string | The individual's maiden name.
$middle_name = 'middle_name_example'; // string | A secondary name given to an individual at birth, baptism, or during another naming ceremony.
$personal_title_prefix = 'personal_title_prefix_example'; // string | A prefix used to denote the title, degree, position, or seniority of the individual.
$preferred_first_name = 'preferred_first_name_example'; // string | The first name the individual prefers, if different from their legal first name
$preferred_last_surname = 'preferred_last_surname_example'; // string | The last name the individual prefers, if different from their legal last name
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getContacts($offset, $limit, $min_change_version, $max_change_version, $total_count, $contact_unique_id, $person_id, $source_system_descriptor, $highest_completed_level_of_education_descriptor, $sex_descriptor, $first_name, $gender_identity, $generation_code_suffix, $id, $last_surname, $login_id, $maiden_name, $middle_name, $personal_title_prefix, $preferred_first_name, $preferred_last_surname, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getContacts: ', $e->getMessage(), PHP_EOL;
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
| **contact_unique_id** | **string**| A unique alphanumeric code assigned to a contact. | [optional] |
| **person_id** | **string**| A unique alphanumeric code assigned to a person. | [optional] |
| **source_system_descriptor** | **string**| This descriptor defines the originating record source system for the person. | [optional] |
| **highest_completed_level_of_education_descriptor** | **string**| The extent of formal instruction an individual has received (e.g., the highest grade in school completed or its equivalent or the highest degree received). | [optional] |
| **sex_descriptor** | **string**| A person&#39;s birth sex. | [optional] |
| **first_name** | **string**| A name given to an individual at birth, baptism, or during another naming ceremony, or through legal change. | [optional] |
| **gender_identity** | **string**| The gender the contact identifies themselves as. | [optional] |
| **generation_code_suffix** | **string**| An appendage, if any, used to denote an individual&#39;s generation in his family (e.g., Jr., Sr., III). | [optional] |
| **id** | **string**|  | [optional] |
| **last_surname** | **string**| The name borne in common by members of a family. | [optional] |
| **login_id** | **string**| The login ID for the user; used for security access control interface. | [optional] |
| **maiden_name** | **string**| The individual&#39;s maiden name. | [optional] |
| **middle_name** | **string**| A secondary name given to an individual at birth, baptism, or during another naming ceremony. | [optional] |
| **personal_title_prefix** | **string**| A prefix used to denote the title, degree, position, or seniority of the individual. | [optional] |
| **preferred_first_name** | **string**| The first name the individual prefers, if different from their legal first name | [optional] |
| **preferred_last_surname** | **string**| The last name the individual prefers, if different from their legal last name | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiContact[]**](../Model/EdFiContact.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContactsById()`

```php
getContactsById($id, $if_none_match, $use_snapshot): \Resources\Model\EdFiContact
```

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_none_match = 'if_none_match_example'; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getContactsById($id, $if_none_match, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getContactsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiContact**](../Model/EdFiContact.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `keyChangesContacts()`

```php
keyChangesContacts($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiContactKeyChange[]
```

Retrieves resources key changes based on change version.

This operation is used to retrieve identifying information about resources whose key values have been changed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\ContactsApi(
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
    $result = $apiInstance->keyChangesContacts($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->keyChangesContacts: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiContactKeyChange[]**](../Model/TrackedChangesEdFiContactKeyChange.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postContact()`

```php
postContact($ed_fi_contact)
```

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update). Clients should NOT include the resource \"id\" in the JSON body because it will result in an error. The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately. It is recommended to use POST for both create and update except while updating natural key of a resource in which case PUT operation must be used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ed_fi_contact = new \Resources\Model\EdFiContact(); // \Resources\Model\EdFiContact | The JSON representation of the \"contact\" resource to be created or updated.

try {
    $apiInstance->postContact($ed_fi_contact);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->postContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ed_fi_contact** | [**\Resources\Model\EdFiContact**](../Model/EdFiContact.md)| The JSON representation of the \&quot;contact\&quot; resource to be created or updated. | |

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

## `putContact()`

```php
putContact($id, $ed_fi_contact, $if_match)
```

Updates a resource based on the resource identifier.

The PUT operation is used to update a resource by identifier. If the resource identifier (\"id\") is provided in the JSON body, it will be ignored. Additionally, this API resource is not configured for cascading natural key updates. Natural key values for this resource cannot be changed using PUT operation, so the recommendation is to use POST as that supports upsert behavior.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$ed_fi_contact = new \Resources\Model\EdFiContact(); // \Resources\Model\EdFiContact | The JSON representation of the \"contact\" resource to be created or updated.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try {
    $apiInstance->putContact($id, $ed_fi_contact, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->putContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **ed_fi_contact** | [**\Resources\Model\EdFiContact**](../Model/EdFiContact.md)| The JSON representation of the \&quot;contact\&quot; resource to be created or updated. | |
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
