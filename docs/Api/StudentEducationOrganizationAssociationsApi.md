# Resources\StudentEducationOrganizationAssociationsApi

All URIs are relative to https://api.ed-fi.org:443/v7.3/api/data/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteStudentEducationOrganizationAssociationById()**](StudentEducationOrganizationAssociationsApi.md#deleteStudentEducationOrganizationAssociationById) | **DELETE** /ed-fi/studentEducationOrganizationAssociations/{id} | Deletes an existing resource using the resource identifier. |
| [**deletesStudentEducationOrganizationAssociations()**](StudentEducationOrganizationAssociationsApi.md#deletesStudentEducationOrganizationAssociations) | **GET** /ed-fi/studentEducationOrganizationAssociations/deletes | Retrieves deleted resources based on change version. |
| [**getStudentEducationOrganizationAssociations()**](StudentEducationOrganizationAssociationsApi.md#getStudentEducationOrganizationAssociations) | **GET** /ed-fi/studentEducationOrganizationAssociations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern). |
| [**getStudentEducationOrganizationAssociationsById()**](StudentEducationOrganizationAssociationsApi.md#getStudentEducationOrganizationAssociationsById) | **GET** /ed-fi/studentEducationOrganizationAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern). |
| [**getStudentEducationOrganizationAssociationsPartitions()**](StudentEducationOrganizationAssociationsApi.md#getStudentEducationOrganizationAssociationsPartitions) | **GET** /ed-fi/studentEducationOrganizationAssociations/partitions | Retrieves a set of page tokens to be used for efficient client-side parallel processing. |
| [**keyChangesStudentEducationOrganizationAssociations()**](StudentEducationOrganizationAssociationsApi.md#keyChangesStudentEducationOrganizationAssociations) | **GET** /ed-fi/studentEducationOrganizationAssociations/keyChanges | Retrieves resources key changes based on change version. |
| [**postStudentEducationOrganizationAssociation()**](StudentEducationOrganizationAssociationsApi.md#postStudentEducationOrganizationAssociation) | **POST** /ed-fi/studentEducationOrganizationAssociations | Creates or updates resources based on the natural key values of the supplied resource. |
| [**putStudentEducationOrganizationAssociation()**](StudentEducationOrganizationAssociationsApi.md#putStudentEducationOrganizationAssociation) | **PUT** /ed-fi/studentEducationOrganizationAssociations/{id} | Updates a resource based on the resource identifier. |


## `deleteStudentEducationOrganizationAssociationById()`

```php
deleteStudentEducationOrganizationAssociationById($id, $if_match)
```

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier. If the resource doesn't exist, an error will result (the resource will not be found).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentEducationOrganizationAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try {
    $apiInstance->deleteStudentEducationOrganizationAssociationById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StudentEducationOrganizationAssociationsApi->deleteStudentEducationOrganizationAssociationById: ', $e->getMessage(), PHP_EOL;
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

## `deletesStudentEducationOrganizationAssociations()`

```php
deletesStudentEducationOrganizationAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiStudentEducationOrganizationAssociationDelete[]
```

Retrieves deleted resources based on change version.

This operation is used to retrieve identifying information about resources that have been deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentEducationOrganizationAssociationsApi(
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
    $result = $apiInstance->deletesStudentEducationOrganizationAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentEducationOrganizationAssociationsApi->deletesStudentEducationOrganizationAssociations: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiStudentEducationOrganizationAssociationDelete[]**](../Model/TrackedChangesEdFiStudentEducationOrganizationAssociationDelete.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStudentEducationOrganizationAssociations()`

```php
getStudentEducationOrganizationAssociations($offset, $limit, $page_token, $page_size, $min_change_version, $max_change_version, $total_count, $education_organization_id, $student_unique_id, $barrier_to_internet_access_in_residence_descriptor, $internet_access_type_in_residence_descriptor, $internet_performance_in_residence_descriptor, $limited_english_proficiency_descriptor, $primary_learning_device_access_descriptor, $primary_learning_device_away_from_school_descriptor, $primary_learning_device_provider_descriptor, $sex_descriptor, $supporter_military_connection_descriptor, $gender_identity, $hispanic_latino_ethnicity, $id, $internet_access_in_residence, $login_id, $profile_thumbnail, $use_snapshot, $student_identification_system_descriptor, $assigning_organization_identification_code, $identification_code): \Resources\Model\EdFiStudentEducationOrganizationAssociation[]
```

Retrieves specific resources using the resource's property values (using the \"Get\" pattern).

This GET operation provides access to resources using the \"Get\" search pattern.  The values of any properties of the resource that are specified will be used to return all matching results (if it exists).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentEducationOrganizationAssociationsApi(
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
$student_unique_id = 'student_unique_id_example'; // string | A unique alphanumeric code assigned to a student.
$barrier_to_internet_access_in_residence_descriptor = 'barrier_to_internet_access_in_residence_descriptor_example'; // string | An indication of the barrier to having internet access in the student s primary place of residence.
$internet_access_type_in_residence_descriptor = 'internet_access_type_in_residence_descriptor_example'; // string | The primary type of internet service used in the student s primary place of residence.
$internet_performance_in_residence_descriptor = 'internet_performance_in_residence_descriptor_example'; // string | An indication of whether the student can complete the full range of learning activities, including video streaming and assignment upload, without interruptions caused by poor internet performance in their primary place of residence.
$limited_english_proficiency_descriptor = 'limited_english_proficiency_descriptor_example'; // string | An indication that the student has been identified as limited English proficient by the Language Proficiency Assessment Committee (LPAC), or English proficient.
$primary_learning_device_access_descriptor = 'primary_learning_device_access_descriptor_example'; // string | An indication of whether the primary learning device is shared or not shared with another individual.
$primary_learning_device_away_from_school_descriptor = 'primary_learning_device_away_from_school_descriptor_example'; // string | The type of device the student uses most often to complete learning activities away from school.
$primary_learning_device_provider_descriptor = 'primary_learning_device_provider_descriptor_example'; // string | The provider of the primary learning device.
$sex_descriptor = 'sex_descriptor_example'; // string | The student's birth sex as reported to the education organization.
$supporter_military_connection_descriptor = 'supporter_military_connection_descriptor_example'; // string | Military connection of the person/people whom the student is a dependent of.
$gender_identity = 'gender_identity_example'; // string | The student's gender as last reported to the education organization.
$hispanic_latino_ethnicity = True; // bool | An indication that the individual traces his or her origin or descent to Mexico, Puerto Rico, Cuba, Central, and South America, and other Spanish cultures, regardless of race, as last reported to the education organization. The term, \"Spanish origin,\" can be used in addition to \"Hispanic or Latino.\"
$id = 'id_example'; // string | 
$internet_access_in_residence = True; // bool | An indication of whether the student is able to access the internet in their primary place of residence.
$login_id = 'login_id_example'; // string | The login ID for the user; used for security access control interface.
$profile_thumbnail = 'profile_thumbnail_example'; // string | Locator reference for the student photo. The specification for that reference is left to local definition.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.
$student_identification_system_descriptor = 'student_identification_system_descriptor_example'; // string | A coding scheme that is used for identification and record-keeping purposes by schools, social services, or other agencies to refer to a student.
$assigning_organization_identification_code = 'assigning_organization_identification_code_example'; // string | The organization code or name assigning the StudentIdentificationCode.
$identification_code = 'identification_code_example'; // string | A unique number or alphanumeric code assigned to a student by a school, school system, a state, or other agency or entity.

try {
    $result = $apiInstance->getStudentEducationOrganizationAssociations($offset, $limit, $page_token, $page_size, $min_change_version, $max_change_version, $total_count, $education_organization_id, $student_unique_id, $barrier_to_internet_access_in_residence_descriptor, $internet_access_type_in_residence_descriptor, $internet_performance_in_residence_descriptor, $limited_english_proficiency_descriptor, $primary_learning_device_access_descriptor, $primary_learning_device_away_from_school_descriptor, $primary_learning_device_provider_descriptor, $sex_descriptor, $supporter_military_connection_descriptor, $gender_identity, $hispanic_latino_ethnicity, $id, $internet_access_in_residence, $login_id, $profile_thumbnail, $use_snapshot, $student_identification_system_descriptor, $assigning_organization_identification_code, $identification_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentEducationOrganizationAssociationsApi->getStudentEducationOrganizationAssociations: ', $e->getMessage(), PHP_EOL;
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
| **student_unique_id** | **string**| A unique alphanumeric code assigned to a student. | [optional] |
| **barrier_to_internet_access_in_residence_descriptor** | **string**| An indication of the barrier to having internet access in the student s primary place of residence. | [optional] |
| **internet_access_type_in_residence_descriptor** | **string**| The primary type of internet service used in the student s primary place of residence. | [optional] |
| **internet_performance_in_residence_descriptor** | **string**| An indication of whether the student can complete the full range of learning activities, including video streaming and assignment upload, without interruptions caused by poor internet performance in their primary place of residence. | [optional] |
| **limited_english_proficiency_descriptor** | **string**| An indication that the student has been identified as limited English proficient by the Language Proficiency Assessment Committee (LPAC), or English proficient. | [optional] |
| **primary_learning_device_access_descriptor** | **string**| An indication of whether the primary learning device is shared or not shared with another individual. | [optional] |
| **primary_learning_device_away_from_school_descriptor** | **string**| The type of device the student uses most often to complete learning activities away from school. | [optional] |
| **primary_learning_device_provider_descriptor** | **string**| The provider of the primary learning device. | [optional] |
| **sex_descriptor** | **string**| The student&#39;s birth sex as reported to the education organization. | [optional] |
| **supporter_military_connection_descriptor** | **string**| Military connection of the person/people whom the student is a dependent of. | [optional] |
| **gender_identity** | **string**| The student&#39;s gender as last reported to the education organization. | [optional] |
| **hispanic_latino_ethnicity** | **bool**| An indication that the individual traces his or her origin or descent to Mexico, Puerto Rico, Cuba, Central, and South America, and other Spanish cultures, regardless of race, as last reported to the education organization. The term, \&quot;Spanish origin,\&quot; can be used in addition to \&quot;Hispanic or Latino.\&quot; | [optional] |
| **id** | **string**|  | [optional] |
| **internet_access_in_residence** | **bool**| An indication of whether the student is able to access the internet in their primary place of residence. | [optional] |
| **login_id** | **string**| The login ID for the user; used for security access control interface. | [optional] |
| **profile_thumbnail** | **string**| Locator reference for the student photo. The specification for that reference is left to local definition. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |
| **student_identification_system_descriptor** | **string**| A coding scheme that is used for identification and record-keeping purposes by schools, social services, or other agencies to refer to a student. | [optional] |
| **assigning_organization_identification_code** | **string**| The organization code or name assigning the StudentIdentificationCode. | [optional] |
| **identification_code** | **string**| A unique number or alphanumeric code assigned to a student by a school, school system, a state, or other agency or entity. | [optional] |

### Return type

[**\Resources\Model\EdFiStudentEducationOrganizationAssociation[]**](../Model/EdFiStudentEducationOrganizationAssociation.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStudentEducationOrganizationAssociationsById()`

```php
getStudentEducationOrganizationAssociationsById($id, $if_none_match, $use_snapshot): \Resources\Model\EdFiStudentEducationOrganizationAssociation
```

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentEducationOrganizationAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_none_match = 'if_none_match_example'; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getStudentEducationOrganizationAssociationsById($id, $if_none_match, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentEducationOrganizationAssociationsApi->getStudentEducationOrganizationAssociationsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiStudentEducationOrganizationAssociation**](../Model/EdFiStudentEducationOrganizationAssociation.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStudentEducationOrganizationAssociationsPartitions()`

```php
getStudentEducationOrganizationAssociationsPartitions($number, $min_change_version, $max_change_version, $education_organization_id, $student_unique_id, $barrier_to_internet_access_in_residence_descriptor, $internet_access_type_in_residence_descriptor, $internet_performance_in_residence_descriptor, $limited_english_proficiency_descriptor, $primary_learning_device_access_descriptor, $primary_learning_device_away_from_school_descriptor, $primary_learning_device_provider_descriptor, $sex_descriptor, $supporter_military_connection_descriptor, $gender_identity, $hispanic_latino_ethnicity, $id, $internet_access_in_residence, $login_id, $profile_thumbnail, $use_snapshot, $student_identification_system_descriptor, $assigning_organization_identification_code, $identification_code): \Resources\Model\GetAcademicWeeksPartitions200Response
```

Retrieves a set of page tokens to be used for efficient client-side parallel processing.

Computes an evenly distributed set of partitions over the accessible data and returns a set of page tokens, each representing the first page of one of the partitions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentEducationOrganizationAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$number = 56; // int | The number of evenly distributed partitions to provide for client-side parallel processing. If unspecified, a reasonable set of partitions will be determined based on the total number of accessible items.
$min_change_version = 56; // int | Used in synchronization to set sequence minimum ChangeVersion
$max_change_version = 56; // int | Used in synchronization to set sequence maximum ChangeVersion
$education_organization_id = 56; // int | The identifier assigned to an education organization.
$student_unique_id = 'student_unique_id_example'; // string | A unique alphanumeric code assigned to a student.
$barrier_to_internet_access_in_residence_descriptor = 'barrier_to_internet_access_in_residence_descriptor_example'; // string | An indication of the barrier to having internet access in the student s primary place of residence.
$internet_access_type_in_residence_descriptor = 'internet_access_type_in_residence_descriptor_example'; // string | The primary type of internet service used in the student s primary place of residence.
$internet_performance_in_residence_descriptor = 'internet_performance_in_residence_descriptor_example'; // string | An indication of whether the student can complete the full range of learning activities, including video streaming and assignment upload, without interruptions caused by poor internet performance in their primary place of residence.
$limited_english_proficiency_descriptor = 'limited_english_proficiency_descriptor_example'; // string | An indication that the student has been identified as limited English proficient by the Language Proficiency Assessment Committee (LPAC), or English proficient.
$primary_learning_device_access_descriptor = 'primary_learning_device_access_descriptor_example'; // string | An indication of whether the primary learning device is shared or not shared with another individual.
$primary_learning_device_away_from_school_descriptor = 'primary_learning_device_away_from_school_descriptor_example'; // string | The type of device the student uses most often to complete learning activities away from school.
$primary_learning_device_provider_descriptor = 'primary_learning_device_provider_descriptor_example'; // string | The provider of the primary learning device.
$sex_descriptor = 'sex_descriptor_example'; // string | The student's birth sex as reported to the education organization.
$supporter_military_connection_descriptor = 'supporter_military_connection_descriptor_example'; // string | Military connection of the person/people whom the student is a dependent of.
$gender_identity = 'gender_identity_example'; // string | The student's gender as last reported to the education organization.
$hispanic_latino_ethnicity = True; // bool | An indication that the individual traces his or her origin or descent to Mexico, Puerto Rico, Cuba, Central, and South America, and other Spanish cultures, regardless of race, as last reported to the education organization. The term, \"Spanish origin,\" can be used in addition to \"Hispanic or Latino.\"
$id = 'id_example'; // string | 
$internet_access_in_residence = True; // bool | An indication of whether the student is able to access the internet in their primary place of residence.
$login_id = 'login_id_example'; // string | The login ID for the user; used for security access control interface.
$profile_thumbnail = 'profile_thumbnail_example'; // string | Locator reference for the student photo. The specification for that reference is left to local definition.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.
$student_identification_system_descriptor = 'student_identification_system_descriptor_example'; // string | A coding scheme that is used for identification and record-keeping purposes by schools, social services, or other agencies to refer to a student.
$assigning_organization_identification_code = 'assigning_organization_identification_code_example'; // string | The organization code or name assigning the StudentIdentificationCode.
$identification_code = 'identification_code_example'; // string | A unique number or alphanumeric code assigned to a student by a school, school system, a state, or other agency or entity.

try {
    $result = $apiInstance->getStudentEducationOrganizationAssociationsPartitions($number, $min_change_version, $max_change_version, $education_organization_id, $student_unique_id, $barrier_to_internet_access_in_residence_descriptor, $internet_access_type_in_residence_descriptor, $internet_performance_in_residence_descriptor, $limited_english_proficiency_descriptor, $primary_learning_device_access_descriptor, $primary_learning_device_away_from_school_descriptor, $primary_learning_device_provider_descriptor, $sex_descriptor, $supporter_military_connection_descriptor, $gender_identity, $hispanic_latino_ethnicity, $id, $internet_access_in_residence, $login_id, $profile_thumbnail, $use_snapshot, $student_identification_system_descriptor, $assigning_organization_identification_code, $identification_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentEducationOrganizationAssociationsApi->getStudentEducationOrganizationAssociationsPartitions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **number** | **int**| The number of evenly distributed partitions to provide for client-side parallel processing. If unspecified, a reasonable set of partitions will be determined based on the total number of accessible items. | [optional] |
| **min_change_version** | **int**| Used in synchronization to set sequence minimum ChangeVersion | [optional] |
| **max_change_version** | **int**| Used in synchronization to set sequence maximum ChangeVersion | [optional] |
| **education_organization_id** | **int**| The identifier assigned to an education organization. | [optional] |
| **student_unique_id** | **string**| A unique alphanumeric code assigned to a student. | [optional] |
| **barrier_to_internet_access_in_residence_descriptor** | **string**| An indication of the barrier to having internet access in the student s primary place of residence. | [optional] |
| **internet_access_type_in_residence_descriptor** | **string**| The primary type of internet service used in the student s primary place of residence. | [optional] |
| **internet_performance_in_residence_descriptor** | **string**| An indication of whether the student can complete the full range of learning activities, including video streaming and assignment upload, without interruptions caused by poor internet performance in their primary place of residence. | [optional] |
| **limited_english_proficiency_descriptor** | **string**| An indication that the student has been identified as limited English proficient by the Language Proficiency Assessment Committee (LPAC), or English proficient. | [optional] |
| **primary_learning_device_access_descriptor** | **string**| An indication of whether the primary learning device is shared or not shared with another individual. | [optional] |
| **primary_learning_device_away_from_school_descriptor** | **string**| The type of device the student uses most often to complete learning activities away from school. | [optional] |
| **primary_learning_device_provider_descriptor** | **string**| The provider of the primary learning device. | [optional] |
| **sex_descriptor** | **string**| The student&#39;s birth sex as reported to the education organization. | [optional] |
| **supporter_military_connection_descriptor** | **string**| Military connection of the person/people whom the student is a dependent of. | [optional] |
| **gender_identity** | **string**| The student&#39;s gender as last reported to the education organization. | [optional] |
| **hispanic_latino_ethnicity** | **bool**| An indication that the individual traces his or her origin or descent to Mexico, Puerto Rico, Cuba, Central, and South America, and other Spanish cultures, regardless of race, as last reported to the education organization. The term, \&quot;Spanish origin,\&quot; can be used in addition to \&quot;Hispanic or Latino.\&quot; | [optional] |
| **id** | **string**|  | [optional] |
| **internet_access_in_residence** | **bool**| An indication of whether the student is able to access the internet in their primary place of residence. | [optional] |
| **login_id** | **string**| The login ID for the user; used for security access control interface. | [optional] |
| **profile_thumbnail** | **string**| Locator reference for the student photo. The specification for that reference is left to local definition. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |
| **student_identification_system_descriptor** | **string**| A coding scheme that is used for identification and record-keeping purposes by schools, social services, or other agencies to refer to a student. | [optional] |
| **assigning_organization_identification_code** | **string**| The organization code or name assigning the StudentIdentificationCode. | [optional] |
| **identification_code** | **string**| A unique number or alphanumeric code assigned to a student by a school, school system, a state, or other agency or entity. | [optional] |

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

## `keyChangesStudentEducationOrganizationAssociations()`

```php
keyChangesStudentEducationOrganizationAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiStudentEducationOrganizationAssociationKeyChange[]
```

Retrieves resources key changes based on change version.

This operation is used to retrieve identifying information about resources whose key values have been changed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentEducationOrganizationAssociationsApi(
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
    $result = $apiInstance->keyChangesStudentEducationOrganizationAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentEducationOrganizationAssociationsApi->keyChangesStudentEducationOrganizationAssociations: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiStudentEducationOrganizationAssociationKeyChange[]**](../Model/TrackedChangesEdFiStudentEducationOrganizationAssociationKeyChange.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postStudentEducationOrganizationAssociation()`

```php
postStudentEducationOrganizationAssociation($ed_fi_student_education_organization_association)
```

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update). Clients should NOT include the resource \"id\" in the JSON body because it will result in an error. The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately. It is recommended to use POST for both create and update except while updating natural key of a resource in which case PUT operation must be used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentEducationOrganizationAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ed_fi_student_education_organization_association = new \Resources\Model\EdFiStudentEducationOrganizationAssociation(); // \Resources\Model\EdFiStudentEducationOrganizationAssociation | The JSON representation of the \"studentEducationOrganizationAssociation\" resource to be created or updated.

try {
    $apiInstance->postStudentEducationOrganizationAssociation($ed_fi_student_education_organization_association);
} catch (Exception $e) {
    echo 'Exception when calling StudentEducationOrganizationAssociationsApi->postStudentEducationOrganizationAssociation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ed_fi_student_education_organization_association** | [**\Resources\Model\EdFiStudentEducationOrganizationAssociation**](../Model/EdFiStudentEducationOrganizationAssociation.md)| The JSON representation of the \&quot;studentEducationOrganizationAssociation\&quot; resource to be created or updated. | |

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

## `putStudentEducationOrganizationAssociation()`

```php
putStudentEducationOrganizationAssociation($id, $ed_fi_student_education_organization_association, $if_match)
```

Updates a resource based on the resource identifier.

The PUT operation is used to update a resource by identifier. If the resource identifier (\"id\") is provided in the JSON body, it will be ignored. Additionally, this API resource is not configured for cascading natural key updates. Natural key values for this resource cannot be changed using PUT operation, so the recommendation is to use POST as that supports upsert behavior.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentEducationOrganizationAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$ed_fi_student_education_organization_association = new \Resources\Model\EdFiStudentEducationOrganizationAssociation(); // \Resources\Model\EdFiStudentEducationOrganizationAssociation | The JSON representation of the \"studentEducationOrganizationAssociation\" resource to be created or updated.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try {
    $apiInstance->putStudentEducationOrganizationAssociation($id, $ed_fi_student_education_organization_association, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StudentEducationOrganizationAssociationsApi->putStudentEducationOrganizationAssociation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **ed_fi_student_education_organization_association** | [**\Resources\Model\EdFiStudentEducationOrganizationAssociation**](../Model/EdFiStudentEducationOrganizationAssociation.md)| The JSON representation of the \&quot;studentEducationOrganizationAssociation\&quot; resource to be created or updated. | |
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
