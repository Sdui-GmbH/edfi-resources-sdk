# Resources\StudentsApi

All URIs are relative to https://api.ed-fi.org:443/v7.3/api/data/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteStudentById()**](StudentsApi.md#deleteStudentById) | **DELETE** /ed-fi/students/{id} | Deletes an existing resource using the resource identifier. |
| [**deletesStudents()**](StudentsApi.md#deletesStudents) | **GET** /ed-fi/students/deletes | Retrieves deleted resources based on change version. |
| [**getStudents()**](StudentsApi.md#getStudents) | **GET** /ed-fi/students | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern). |
| [**getStudentsById()**](StudentsApi.md#getStudentsById) | **GET** /ed-fi/students/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern). |
| [**getStudentsPartitions()**](StudentsApi.md#getStudentsPartitions) | **GET** /ed-fi/students/partitions | Retrieves a set of page tokens to be used for efficient client-side parallel processing. |
| [**keyChangesStudents()**](StudentsApi.md#keyChangesStudents) | **GET** /ed-fi/students/keyChanges | Retrieves resources key changes based on change version. |
| [**postStudent()**](StudentsApi.md#postStudent) | **POST** /ed-fi/students | Creates or updates resources based on the natural key values of the supplied resource. |
| [**putStudent()**](StudentsApi.md#putStudent) | **PUT** /ed-fi/students/{id} | Updates a resource based on the resource identifier. |


## `deleteStudentById()`

```php
deleteStudentById($id, $if_match)
```

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier. If the resource doesn't exist, an error will result (the resource will not be found).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try {
    $apiInstance->deleteStudentById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StudentsApi->deleteStudentById: ', $e->getMessage(), PHP_EOL;
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

## `deletesStudents()`

```php
deletesStudents($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiStudentDelete[]
```

Retrieves deleted resources based on change version.

This operation is used to retrieve identifying information about resources that have been deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentsApi(
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
    $result = $apiInstance->deletesStudents($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentsApi->deletesStudents: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiStudentDelete[]**](../Model/TrackedChangesEdFiStudentDelete.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStudents()`

```php
getStudents($offset, $limit, $page_token, $page_size, $min_change_version, $max_change_version, $total_count, $student_unique_id, $person_id, $source_system_descriptor, $citizenship_status_descriptor, $birth_country_descriptor, $birth_sex_descriptor, $birth_state_abbreviation_descriptor, $birth_city, $birth_date, $birth_international_province, $date_entered_us, $first_name, $generation_code_suffix, $id, $last_surname, $maiden_name, $middle_name, $multiple_birth_status, $personal_title_prefix, $preferred_first_name, $preferred_last_surname, $use_snapshot): \Resources\Model\EdFiStudent[]
```

Retrieves specific resources using the resource's property values (using the \"Get\" pattern).

This GET operation provides access to resources using the \"Get\" search pattern.  The values of any properties of the resource that are specified will be used to return all matching results (if it exists).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentsApi(
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
$student_unique_id = 'student_unique_id_example'; // string | A unique alphanumeric code assigned to a student.
$person_id = 'person_id_example'; // string | A unique alphanumeric code assigned to a person.
$source_system_descriptor = 'source_system_descriptor_example'; // string | This descriptor defines the originating record source system for the person.
$citizenship_status_descriptor = 'citizenship_status_descriptor_example'; // string | An indicator of whether or not the person is a U.S. citizen.
$birth_country_descriptor = 'birth_country_descriptor_example'; // string | The country in which an individual is born. It is strongly recommended that entries use only ISO 3166 2-letter country codes.
$birth_sex_descriptor = 'birth_sex_descriptor_example'; // string | A person's sex at birth.
$birth_state_abbreviation_descriptor = 'birth_state_abbreviation_descriptor_example'; // string | The abbreviation for the name of the state (within the United States) or extra-state jurisdiction in which an individual was born.
$birth_city = 'birth_city_example'; // string | The city the student was born in.
$birth_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The month, day, and year on which an individual was born.
$birth_international_province = 'birth_international_province_example'; // string | For students born outside of the U.S., the Province or jurisdiction in which an individual is born.
$date_entered_us = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | For students born outside of the U.S., the date the student entered the U.S.
$first_name = 'first_name_example'; // string | A name given to an individual at birth, baptism, or during another naming ceremony, or through legal change.
$generation_code_suffix = 'generation_code_suffix_example'; // string | An appendage, if any, used to denote an individual's generation in his family (e.g., Jr., Sr., III).
$id = 'id_example'; // string | 
$last_surname = 'last_surname_example'; // string | The name borne in common by members of a family.
$maiden_name = 'maiden_name_example'; // string | The individual's maiden name.
$middle_name = 'middle_name_example'; // string | A secondary name given to an individual at birth, baptism, or during another naming ceremony.
$multiple_birth_status = True; // bool | Indicator of whether the student was born with other siblings (i.e., twins, triplets, etc.)
$personal_title_prefix = 'personal_title_prefix_example'; // string | A prefix used to denote the title, degree, position, or seniority of the individual.
$preferred_first_name = 'preferred_first_name_example'; // string | The first name the individual prefers, if different from their legal first name
$preferred_last_surname = 'preferred_last_surname_example'; // string | The last name the individual prefers, if different from their legal last name
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getStudents($offset, $limit, $page_token, $page_size, $min_change_version, $max_change_version, $total_count, $student_unique_id, $person_id, $source_system_descriptor, $citizenship_status_descriptor, $birth_country_descriptor, $birth_sex_descriptor, $birth_state_abbreviation_descriptor, $birth_city, $birth_date, $birth_international_province, $date_entered_us, $first_name, $generation_code_suffix, $id, $last_surname, $maiden_name, $middle_name, $multiple_birth_status, $personal_title_prefix, $preferred_first_name, $preferred_last_surname, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentsApi->getStudents: ', $e->getMessage(), PHP_EOL;
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
| **student_unique_id** | **string**| A unique alphanumeric code assigned to a student. | [optional] |
| **person_id** | **string**| A unique alphanumeric code assigned to a person. | [optional] |
| **source_system_descriptor** | **string**| This descriptor defines the originating record source system for the person. | [optional] |
| **citizenship_status_descriptor** | **string**| An indicator of whether or not the person is a U.S. citizen. | [optional] |
| **birth_country_descriptor** | **string**| The country in which an individual is born. It is strongly recommended that entries use only ISO 3166 2-letter country codes. | [optional] |
| **birth_sex_descriptor** | **string**| A person&#39;s sex at birth. | [optional] |
| **birth_state_abbreviation_descriptor** | **string**| The abbreviation for the name of the state (within the United States) or extra-state jurisdiction in which an individual was born. | [optional] |
| **birth_city** | **string**| The city the student was born in. | [optional] |
| **birth_date** | **\DateTime**| The month, day, and year on which an individual was born. | [optional] |
| **birth_international_province** | **string**| For students born outside of the U.S., the Province or jurisdiction in which an individual is born. | [optional] |
| **date_entered_us** | **\DateTime**| For students born outside of the U.S., the date the student entered the U.S. | [optional] |
| **first_name** | **string**| A name given to an individual at birth, baptism, or during another naming ceremony, or through legal change. | [optional] |
| **generation_code_suffix** | **string**| An appendage, if any, used to denote an individual&#39;s generation in his family (e.g., Jr., Sr., III). | [optional] |
| **id** | **string**|  | [optional] |
| **last_surname** | **string**| The name borne in common by members of a family. | [optional] |
| **maiden_name** | **string**| The individual&#39;s maiden name. | [optional] |
| **middle_name** | **string**| A secondary name given to an individual at birth, baptism, or during another naming ceremony. | [optional] |
| **multiple_birth_status** | **bool**| Indicator of whether the student was born with other siblings (i.e., twins, triplets, etc.) | [optional] |
| **personal_title_prefix** | **string**| A prefix used to denote the title, degree, position, or seniority of the individual. | [optional] |
| **preferred_first_name** | **string**| The first name the individual prefers, if different from their legal first name | [optional] |
| **preferred_last_surname** | **string**| The last name the individual prefers, if different from their legal last name | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiStudent[]**](../Model/EdFiStudent.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStudentsById()`

```php
getStudentsById($id, $if_none_match, $use_snapshot): \Resources\Model\EdFiStudent
```

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_none_match = 'if_none_match_example'; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getStudentsById($id, $if_none_match, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentsApi->getStudentsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiStudent**](../Model/EdFiStudent.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStudentsPartitions()`

```php
getStudentsPartitions($number, $min_change_version, $max_change_version, $student_unique_id, $person_id, $source_system_descriptor, $citizenship_status_descriptor, $birth_country_descriptor, $birth_sex_descriptor, $birth_state_abbreviation_descriptor, $birth_city, $birth_date, $birth_international_province, $date_entered_us, $first_name, $generation_code_suffix, $id, $last_surname, $maiden_name, $middle_name, $multiple_birth_status, $personal_title_prefix, $preferred_first_name, $preferred_last_surname, $use_snapshot): \Resources\Model\GetAcademicWeeksPartitions200Response
```

Retrieves a set of page tokens to be used for efficient client-side parallel processing.

Computes an evenly distributed set of partitions over the accessible data and returns a set of page tokens, each representing the first page of one of the partitions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$number = 56; // int | The number of evenly distributed partitions to provide for client-side parallel processing. If unspecified, a reasonable set of partitions will be determined based on the total number of accessible items.
$min_change_version = 56; // int | Used in synchronization to set sequence minimum ChangeVersion
$max_change_version = 56; // int | Used in synchronization to set sequence maximum ChangeVersion
$student_unique_id = 'student_unique_id_example'; // string | A unique alphanumeric code assigned to a student.
$person_id = 'person_id_example'; // string | A unique alphanumeric code assigned to a person.
$source_system_descriptor = 'source_system_descriptor_example'; // string | This descriptor defines the originating record source system for the person.
$citizenship_status_descriptor = 'citizenship_status_descriptor_example'; // string | An indicator of whether or not the person is a U.S. citizen.
$birth_country_descriptor = 'birth_country_descriptor_example'; // string | The country in which an individual is born. It is strongly recommended that entries use only ISO 3166 2-letter country codes.
$birth_sex_descriptor = 'birth_sex_descriptor_example'; // string | A person's sex at birth.
$birth_state_abbreviation_descriptor = 'birth_state_abbreviation_descriptor_example'; // string | The abbreviation for the name of the state (within the United States) or extra-state jurisdiction in which an individual was born.
$birth_city = 'birth_city_example'; // string | The city the student was born in.
$birth_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The month, day, and year on which an individual was born.
$birth_international_province = 'birth_international_province_example'; // string | For students born outside of the U.S., the Province or jurisdiction in which an individual is born.
$date_entered_us = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | For students born outside of the U.S., the date the student entered the U.S.
$first_name = 'first_name_example'; // string | A name given to an individual at birth, baptism, or during another naming ceremony, or through legal change.
$generation_code_suffix = 'generation_code_suffix_example'; // string | An appendage, if any, used to denote an individual's generation in his family (e.g., Jr., Sr., III).
$id = 'id_example'; // string | 
$last_surname = 'last_surname_example'; // string | The name borne in common by members of a family.
$maiden_name = 'maiden_name_example'; // string | The individual's maiden name.
$middle_name = 'middle_name_example'; // string | A secondary name given to an individual at birth, baptism, or during another naming ceremony.
$multiple_birth_status = True; // bool | Indicator of whether the student was born with other siblings (i.e., twins, triplets, etc.)
$personal_title_prefix = 'personal_title_prefix_example'; // string | A prefix used to denote the title, degree, position, or seniority of the individual.
$preferred_first_name = 'preferred_first_name_example'; // string | The first name the individual prefers, if different from their legal first name
$preferred_last_surname = 'preferred_last_surname_example'; // string | The last name the individual prefers, if different from their legal last name
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getStudentsPartitions($number, $min_change_version, $max_change_version, $student_unique_id, $person_id, $source_system_descriptor, $citizenship_status_descriptor, $birth_country_descriptor, $birth_sex_descriptor, $birth_state_abbreviation_descriptor, $birth_city, $birth_date, $birth_international_province, $date_entered_us, $first_name, $generation_code_suffix, $id, $last_surname, $maiden_name, $middle_name, $multiple_birth_status, $personal_title_prefix, $preferred_first_name, $preferred_last_surname, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentsApi->getStudentsPartitions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **number** | **int**| The number of evenly distributed partitions to provide for client-side parallel processing. If unspecified, a reasonable set of partitions will be determined based on the total number of accessible items. | [optional] |
| **min_change_version** | **int**| Used in synchronization to set sequence minimum ChangeVersion | [optional] |
| **max_change_version** | **int**| Used in synchronization to set sequence maximum ChangeVersion | [optional] |
| **student_unique_id** | **string**| A unique alphanumeric code assigned to a student. | [optional] |
| **person_id** | **string**| A unique alphanumeric code assigned to a person. | [optional] |
| **source_system_descriptor** | **string**| This descriptor defines the originating record source system for the person. | [optional] |
| **citizenship_status_descriptor** | **string**| An indicator of whether or not the person is a U.S. citizen. | [optional] |
| **birth_country_descriptor** | **string**| The country in which an individual is born. It is strongly recommended that entries use only ISO 3166 2-letter country codes. | [optional] |
| **birth_sex_descriptor** | **string**| A person&#39;s sex at birth. | [optional] |
| **birth_state_abbreviation_descriptor** | **string**| The abbreviation for the name of the state (within the United States) or extra-state jurisdiction in which an individual was born. | [optional] |
| **birth_city** | **string**| The city the student was born in. | [optional] |
| **birth_date** | **\DateTime**| The month, day, and year on which an individual was born. | [optional] |
| **birth_international_province** | **string**| For students born outside of the U.S., the Province or jurisdiction in which an individual is born. | [optional] |
| **date_entered_us** | **\DateTime**| For students born outside of the U.S., the date the student entered the U.S. | [optional] |
| **first_name** | **string**| A name given to an individual at birth, baptism, or during another naming ceremony, or through legal change. | [optional] |
| **generation_code_suffix** | **string**| An appendage, if any, used to denote an individual&#39;s generation in his family (e.g., Jr., Sr., III). | [optional] |
| **id** | **string**|  | [optional] |
| **last_surname** | **string**| The name borne in common by members of a family. | [optional] |
| **maiden_name** | **string**| The individual&#39;s maiden name. | [optional] |
| **middle_name** | **string**| A secondary name given to an individual at birth, baptism, or during another naming ceremony. | [optional] |
| **multiple_birth_status** | **bool**| Indicator of whether the student was born with other siblings (i.e., twins, triplets, etc.) | [optional] |
| **personal_title_prefix** | **string**| A prefix used to denote the title, degree, position, or seniority of the individual. | [optional] |
| **preferred_first_name** | **string**| The first name the individual prefers, if different from their legal first name | [optional] |
| **preferred_last_surname** | **string**| The last name the individual prefers, if different from their legal last name | [optional] |
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

## `keyChangesStudents()`

```php
keyChangesStudents($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiStudentKeyChange[]
```

Retrieves resources key changes based on change version.

This operation is used to retrieve identifying information about resources whose key values have been changed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentsApi(
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
    $result = $apiInstance->keyChangesStudents($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentsApi->keyChangesStudents: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiStudentKeyChange[]**](../Model/TrackedChangesEdFiStudentKeyChange.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postStudent()`

```php
postStudent($ed_fi_student)
```

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update). Clients should NOT include the resource \"id\" in the JSON body because it will result in an error. The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately. It is recommended to use POST for both create and update except while updating natural key of a resource in which case PUT operation must be used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ed_fi_student = new \Resources\Model\EdFiStudent(); // \Resources\Model\EdFiStudent | The JSON representation of the \"student\" resource to be created or updated.

try {
    $apiInstance->postStudent($ed_fi_student);
} catch (Exception $e) {
    echo 'Exception when calling StudentsApi->postStudent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ed_fi_student** | [**\Resources\Model\EdFiStudent**](../Model/EdFiStudent.md)| The JSON representation of the \&quot;student\&quot; resource to be created or updated. | |

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

## `putStudent()`

```php
putStudent($id, $ed_fi_student, $if_match)
```

Updates a resource based on the resource identifier.

The PUT operation is used to update a resource by identifier. If the resource identifier (\"id\") is provided in the JSON body, it will be ignored. Additionally, this API resource is not configured for cascading natural key updates. Natural key values for this resource cannot be changed using PUT operation, so the recommendation is to use POST as that supports upsert behavior.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$ed_fi_student = new \Resources\Model\EdFiStudent(); // \Resources\Model\EdFiStudent | The JSON representation of the \"student\" resource to be created or updated.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try {
    $apiInstance->putStudent($id, $ed_fi_student, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StudentsApi->putStudent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **ed_fi_student** | [**\Resources\Model\EdFiStudent**](../Model/EdFiStudent.md)| The JSON representation of the \&quot;student\&quot; resource to be created or updated. | |
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
