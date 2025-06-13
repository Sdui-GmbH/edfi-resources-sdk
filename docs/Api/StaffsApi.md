# Resources\StaffsApi

All URIs are relative to https://api.ed-fi.org:443/v7.2/api/data/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteStaffById()**](StaffsApi.md#deleteStaffById) | **DELETE** /ed-fi/staffs/{id} | Deletes an existing resource using the resource identifier. |
| [**deletesStaffs()**](StaffsApi.md#deletesStaffs) | **GET** /ed-fi/staffs/deletes | Retrieves deleted resources based on change version. |
| [**getStaffs()**](StaffsApi.md#getStaffs) | **GET** /ed-fi/staffs | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern). |
| [**getStaffsById()**](StaffsApi.md#getStaffsById) | **GET** /ed-fi/staffs/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern). |
| [**keyChangesStaffs()**](StaffsApi.md#keyChangesStaffs) | **GET** /ed-fi/staffs/keyChanges | Retrieves resources key changes based on change version. |
| [**postStaff()**](StaffsApi.md#postStaff) | **POST** /ed-fi/staffs | Creates or updates resources based on the natural key values of the supplied resource. |
| [**putStaff()**](StaffsApi.md#putStaff) | **PUT** /ed-fi/staffs/{id} | Updates a resource based on the resource identifier. |


## `deleteStaffById()`

```php
deleteStaffById($id, $if_match)
```

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier. If the resource doesn't exist, an error will result (the resource will not be found).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StaffsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try {
    $apiInstance->deleteStaffById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StaffsApi->deleteStaffById: ', $e->getMessage(), PHP_EOL;
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

## `deletesStaffs()`

```php
deletesStaffs($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiStaffDelete[]
```

Retrieves deleted resources based on change version.

This operation is used to retrieve identifying information about resources that have been deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StaffsApi(
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
    $result = $apiInstance->deletesStaffs($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaffsApi->deletesStaffs: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiStaffDelete[]**](../Model/TrackedChangesEdFiStaffDelete.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStaffs()`

```php
getStaffs($offset, $limit, $min_change_version, $max_change_version, $total_count, $staff_unique_id, $person_id, $source_system_descriptor, $citizenship_status_descriptor, $highest_completed_level_of_education_descriptor, $sex_descriptor, $birth_date, $first_name, $gender_identity, $generation_code_suffix, $highly_qualified_teacher, $hispanic_latino_ethnicity, $id, $last_surname, $login_id, $maiden_name, $middle_name, $personal_title_prefix, $preferred_first_name, $preferred_last_surname, $years_of_prior_professional_experience, $years_of_prior_teaching_experience, $use_snapshot): \Resources\Model\EdFiStaff[]
```

Retrieves specific resources using the resource's property values (using the \"Get\" pattern).

This GET operation provides access to resources using the \"Get\" search pattern.  The values of any properties of the resource that are specified will be used to return all matching results (if it exists).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StaffsApi(
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
$staff_unique_id = 'staff_unique_id_example'; // string | A unique alphanumeric code assigned to a staff.
$person_id = 'person_id_example'; // string | A unique alphanumeric code assigned to a person.
$source_system_descriptor = 'source_system_descriptor_example'; // string | This descriptor defines the originating record source system for the person.
$citizenship_status_descriptor = 'citizenship_status_descriptor_example'; // string | An indicator of whether or not the person is a U.S. citizen.
$highest_completed_level_of_education_descriptor = 'highest_completed_level_of_education_descriptor_example'; // string | The extent of formal instruction an individual has received (e.g., the highest grade in school completed or its equivalent or the highest degree received).
$sex_descriptor = 'sex_descriptor_example'; // string | The birth sex of the staff member.
$birth_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The month, day, and year on which an individual was born.
$first_name = 'first_name_example'; // string | A name given to an individual at birth, baptism, or during another naming ceremony, or through legal change.
$gender_identity = 'gender_identity_example'; // string | The gender the staff member identifies themselves as.
$generation_code_suffix = 'generation_code_suffix_example'; // string | An appendage, if any, used to denote an individual's generation in his family (e.g., Jr., Sr., III).
$highly_qualified_teacher = True; // bool | An indication of whether a teacher is classified as highly qualified for his/her assignment according to state definition. This attribute indicates the teacher is highly qualified for ALL Sections being taught.
$hispanic_latino_ethnicity = True; // bool | An indication that the individual traces his or her origin or descent to Mexico, Puerto Rico, Cuba, Central, and South America, and other Spanish cultures, regardless of race. The term, \"Spanish origin,\" can be used in addition to \"Hispanic or Latino.\"
$id = 'id_example'; // string | 
$last_surname = 'last_surname_example'; // string | The name borne in common by members of a family.
$login_id = 'login_id_example'; // string | The login ID for the user; used for security access control interface.
$maiden_name = 'maiden_name_example'; // string | The individual's maiden name.
$middle_name = 'middle_name_example'; // string | A secondary name given to an individual at birth, baptism, or during another naming ceremony.
$personal_title_prefix = 'personal_title_prefix_example'; // string | A prefix used to denote the title, degree, position, or seniority of the individual.
$preferred_first_name = 'preferred_first_name_example'; // string | The first name the individual prefers, if different from their legal first name
$preferred_last_surname = 'preferred_last_surname_example'; // string | The last name the individual prefers, if different from their legal last name
$years_of_prior_professional_experience = 3.4; // float | The total number of years that an individual has previously held a similar professional position in one or more education institutions prior to the current school year.
$years_of_prior_teaching_experience = 3.4; // float | The total number of years that an individual has previously held a teaching position in one or more education institutions prior to the current school year.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getStaffs($offset, $limit, $min_change_version, $max_change_version, $total_count, $staff_unique_id, $person_id, $source_system_descriptor, $citizenship_status_descriptor, $highest_completed_level_of_education_descriptor, $sex_descriptor, $birth_date, $first_name, $gender_identity, $generation_code_suffix, $highly_qualified_teacher, $hispanic_latino_ethnicity, $id, $last_surname, $login_id, $maiden_name, $middle_name, $personal_title_prefix, $preferred_first_name, $preferred_last_surname, $years_of_prior_professional_experience, $years_of_prior_teaching_experience, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaffsApi->getStaffs: ', $e->getMessage(), PHP_EOL;
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
| **staff_unique_id** | **string**| A unique alphanumeric code assigned to a staff. | [optional] |
| **person_id** | **string**| A unique alphanumeric code assigned to a person. | [optional] |
| **source_system_descriptor** | **string**| This descriptor defines the originating record source system for the person. | [optional] |
| **citizenship_status_descriptor** | **string**| An indicator of whether or not the person is a U.S. citizen. | [optional] |
| **highest_completed_level_of_education_descriptor** | **string**| The extent of formal instruction an individual has received (e.g., the highest grade in school completed or its equivalent or the highest degree received). | [optional] |
| **sex_descriptor** | **string**| The birth sex of the staff member. | [optional] |
| **birth_date** | **\DateTime**| The month, day, and year on which an individual was born. | [optional] |
| **first_name** | **string**| A name given to an individual at birth, baptism, or during another naming ceremony, or through legal change. | [optional] |
| **gender_identity** | **string**| The gender the staff member identifies themselves as. | [optional] |
| **generation_code_suffix** | **string**| An appendage, if any, used to denote an individual&#39;s generation in his family (e.g., Jr., Sr., III). | [optional] |
| **highly_qualified_teacher** | **bool**| An indication of whether a teacher is classified as highly qualified for his/her assignment according to state definition. This attribute indicates the teacher is highly qualified for ALL Sections being taught. | [optional] |
| **hispanic_latino_ethnicity** | **bool**| An indication that the individual traces his or her origin or descent to Mexico, Puerto Rico, Cuba, Central, and South America, and other Spanish cultures, regardless of race. The term, \&quot;Spanish origin,\&quot; can be used in addition to \&quot;Hispanic or Latino.\&quot; | [optional] |
| **id** | **string**|  | [optional] |
| **last_surname** | **string**| The name borne in common by members of a family. | [optional] |
| **login_id** | **string**| The login ID for the user; used for security access control interface. | [optional] |
| **maiden_name** | **string**| The individual&#39;s maiden name. | [optional] |
| **middle_name** | **string**| A secondary name given to an individual at birth, baptism, or during another naming ceremony. | [optional] |
| **personal_title_prefix** | **string**| A prefix used to denote the title, degree, position, or seniority of the individual. | [optional] |
| **preferred_first_name** | **string**| The first name the individual prefers, if different from their legal first name | [optional] |
| **preferred_last_surname** | **string**| The last name the individual prefers, if different from their legal last name | [optional] |
| **years_of_prior_professional_experience** | **float**| The total number of years that an individual has previously held a similar professional position in one or more education institutions prior to the current school year. | [optional] |
| **years_of_prior_teaching_experience** | **float**| The total number of years that an individual has previously held a teaching position in one or more education institutions prior to the current school year. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiStaff[]**](../Model/EdFiStaff.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStaffsById()`

```php
getStaffsById($id, $if_none_match, $use_snapshot): \Resources\Model\EdFiStaff
```

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StaffsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_none_match = 'if_none_match_example'; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getStaffsById($id, $if_none_match, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaffsApi->getStaffsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiStaff**](../Model/EdFiStaff.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `keyChangesStaffs()`

```php
keyChangesStaffs($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiStaffKeyChange[]
```

Retrieves resources key changes based on change version.

This operation is used to retrieve identifying information about resources whose key values have been changed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StaffsApi(
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
    $result = $apiInstance->keyChangesStaffs($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaffsApi->keyChangesStaffs: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiStaffKeyChange[]**](../Model/TrackedChangesEdFiStaffKeyChange.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postStaff()`

```php
postStaff($ed_fi_staff)
```

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update). Clients should NOT include the resource \"id\" in the JSON body because it will result in an error. The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately. It is recommended to use POST for both create and update except while updating natural key of a resource in which case PUT operation must be used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StaffsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ed_fi_staff = new \Resources\Model\EdFiStaff(); // \Resources\Model\EdFiStaff | The JSON representation of the \"staff\" resource to be created or updated.

try {
    $apiInstance->postStaff($ed_fi_staff);
} catch (Exception $e) {
    echo 'Exception when calling StaffsApi->postStaff: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ed_fi_staff** | [**\Resources\Model\EdFiStaff**](../Model/EdFiStaff.md)| The JSON representation of the \&quot;staff\&quot; resource to be created or updated. | |

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

## `putStaff()`

```php
putStaff($id, $ed_fi_staff, $if_match)
```

Updates a resource based on the resource identifier.

The PUT operation is used to update a resource by identifier. If the resource identifier (\"id\") is provided in the JSON body, it will be ignored. Additionally, this API resource is not configured for cascading natural key updates. Natural key values for this resource cannot be changed using PUT operation, so the recommendation is to use POST as that supports upsert behavior.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StaffsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$ed_fi_staff = new \Resources\Model\EdFiStaff(); // \Resources\Model\EdFiStaff | The JSON representation of the \"staff\" resource to be created or updated.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try {
    $apiInstance->putStaff($id, $ed_fi_staff, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StaffsApi->putStaff: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **ed_fi_staff** | [**\Resources\Model\EdFiStaff**](../Model/EdFiStaff.md)| The JSON representation of the \&quot;staff\&quot; resource to be created or updated. | |
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
