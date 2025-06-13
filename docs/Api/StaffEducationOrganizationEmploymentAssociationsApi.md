# Resources\StaffEducationOrganizationEmploymentAssociationsApi

All URIs are relative to https://api.ed-fi.org:443/v7.3/api/data/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteStaffEducationOrganizationEmploymentAssociationById()**](StaffEducationOrganizationEmploymentAssociationsApi.md#deleteStaffEducationOrganizationEmploymentAssociationById) | **DELETE** /ed-fi/staffEducationOrganizationEmploymentAssociations/{id} | Deletes an existing resource using the resource identifier. |
| [**deletesStaffEducationOrganizationEmploymentAssociations()**](StaffEducationOrganizationEmploymentAssociationsApi.md#deletesStaffEducationOrganizationEmploymentAssociations) | **GET** /ed-fi/staffEducationOrganizationEmploymentAssociations/deletes | Retrieves deleted resources based on change version. |
| [**getStaffEducationOrganizationEmploymentAssociations()**](StaffEducationOrganizationEmploymentAssociationsApi.md#getStaffEducationOrganizationEmploymentAssociations) | **GET** /ed-fi/staffEducationOrganizationEmploymentAssociations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern). |
| [**getStaffEducationOrganizationEmploymentAssociationsById()**](StaffEducationOrganizationEmploymentAssociationsApi.md#getStaffEducationOrganizationEmploymentAssociationsById) | **GET** /ed-fi/staffEducationOrganizationEmploymentAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern). |
| [**getStaffEducationOrganizationEmploymentAssociationsPartitions()**](StaffEducationOrganizationEmploymentAssociationsApi.md#getStaffEducationOrganizationEmploymentAssociationsPartitions) | **GET** /ed-fi/staffEducationOrganizationEmploymentAssociations/partitions | Retrieves a set of page tokens to be used for efficient client-side parallel processing. |
| [**keyChangesStaffEducationOrganizationEmploymentAssociations()**](StaffEducationOrganizationEmploymentAssociationsApi.md#keyChangesStaffEducationOrganizationEmploymentAssociations) | **GET** /ed-fi/staffEducationOrganizationEmploymentAssociations/keyChanges | Retrieves resources key changes based on change version. |
| [**postStaffEducationOrganizationEmploymentAssociation()**](StaffEducationOrganizationEmploymentAssociationsApi.md#postStaffEducationOrganizationEmploymentAssociation) | **POST** /ed-fi/staffEducationOrganizationEmploymentAssociations | Creates or updates resources based on the natural key values of the supplied resource. |
| [**putStaffEducationOrganizationEmploymentAssociation()**](StaffEducationOrganizationEmploymentAssociationsApi.md#putStaffEducationOrganizationEmploymentAssociation) | **PUT** /ed-fi/staffEducationOrganizationEmploymentAssociations/{id} | Updates a resource based on the resource identifier. |


## `deleteStaffEducationOrganizationEmploymentAssociationById()`

```php
deleteStaffEducationOrganizationEmploymentAssociationById($id, $if_match)
```

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier. If the resource doesn't exist, an error will result (the resource will not be found).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StaffEducationOrganizationEmploymentAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try {
    $apiInstance->deleteStaffEducationOrganizationEmploymentAssociationById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StaffEducationOrganizationEmploymentAssociationsApi->deleteStaffEducationOrganizationEmploymentAssociationById: ', $e->getMessage(), PHP_EOL;
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

## `deletesStaffEducationOrganizationEmploymentAssociations()`

```php
deletesStaffEducationOrganizationEmploymentAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiStaffEducationOrganizationEmploymentAssociationDelete[]
```

Retrieves deleted resources based on change version.

This operation is used to retrieve identifying information about resources that have been deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StaffEducationOrganizationEmploymentAssociationsApi(
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
    $result = $apiInstance->deletesStaffEducationOrganizationEmploymentAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaffEducationOrganizationEmploymentAssociationsApi->deletesStaffEducationOrganizationEmploymentAssociations: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiStaffEducationOrganizationEmploymentAssociationDelete[]**](../Model/TrackedChangesEdFiStaffEducationOrganizationEmploymentAssociationDelete.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStaffEducationOrganizationEmploymentAssociations()`

```php
getStaffEducationOrganizationEmploymentAssociations($offset, $limit, $page_token, $page_size, $min_change_version, $max_change_version, $total_count, $employment_status_descriptor, $hire_date, $education_organization_id, $staff_unique_id, $credential_identifier, $state_of_issue_state_abbreviation_descriptor, $separation_descriptor, $separation_reason_descriptor, $annual_wage, $department, $end_date, $full_time_equivalency, $hourly_wage, $id, $offer_date, $use_snapshot): \Resources\Model\EdFiStaffEducationOrganizationEmploymentAssociation[]
```

Retrieves specific resources using the resource's property values (using the \"Get\" pattern).

This GET operation provides access to resources using the \"Get\" search pattern.  The values of any properties of the resource that are specified will be used to return all matching results (if it exists).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StaffEducationOrganizationEmploymentAssociationsApi(
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
$employment_status_descriptor = 'employment_status_descriptor_example'; // string | Reflects the type of employment or contract.
$hire_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The month, day, and year on which an individual was hired for a position.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines.
$education_organization_id = 56; // int | The identifier assigned to an education organization.
$staff_unique_id = 'staff_unique_id_example'; // string | A unique alphanumeric code assigned to a staff.
$credential_identifier = 'credential_identifier_example'; // string | Identifier or serial number assigned to the credential.
$state_of_issue_state_abbreviation_descriptor = 'state_of_issue_state_abbreviation_descriptor_example'; // string | The abbreviation for the name of the state (within the United States) or extra-state jurisdiction in which a license/credential was issued.
$separation_descriptor = 'separation_descriptor_example'; // string | Type of employment separation.
$separation_reason_descriptor = 'separation_reason_descriptor_example'; // string | Reason for terminating the employment.
$annual_wage = 3.4; // float | Annual wage associated with the employment position being reported.
$department = 'department_example'; // string | The department or suborganization the employee/contractor is associated with in the education organization.
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The month, day, and year on which a contract between an individual and a governing authority ends or is terminated under the provisions of the contract (or the date on which the agreement is made invalid).  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines.
$full_time_equivalency = 3.4; // float | The ratio between the hours of work expected in a position and the hours of work normally expected in a full-time position in the same setting.
$hourly_wage = 3.4; // float | Hourly wage associated with the employment position being reported.
$id = 'id_example'; // string | 
$offer_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date at which the staff member was made an official offer for this employment.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getStaffEducationOrganizationEmploymentAssociations($offset, $limit, $page_token, $page_size, $min_change_version, $max_change_version, $total_count, $employment_status_descriptor, $hire_date, $education_organization_id, $staff_unique_id, $credential_identifier, $state_of_issue_state_abbreviation_descriptor, $separation_descriptor, $separation_reason_descriptor, $annual_wage, $department, $end_date, $full_time_equivalency, $hourly_wage, $id, $offer_date, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaffEducationOrganizationEmploymentAssociationsApi->getStaffEducationOrganizationEmploymentAssociations: ', $e->getMessage(), PHP_EOL;
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
| **employment_status_descriptor** | **string**| Reflects the type of employment or contract. | [optional] |
| **hire_date** | **\DateTime**| The month, day, and year on which an individual was hired for a position.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines. | [optional] |
| **education_organization_id** | **int**| The identifier assigned to an education organization. | [optional] |
| **staff_unique_id** | **string**| A unique alphanumeric code assigned to a staff. | [optional] |
| **credential_identifier** | **string**| Identifier or serial number assigned to the credential. | [optional] |
| **state_of_issue_state_abbreviation_descriptor** | **string**| The abbreviation for the name of the state (within the United States) or extra-state jurisdiction in which a license/credential was issued. | [optional] |
| **separation_descriptor** | **string**| Type of employment separation. | [optional] |
| **separation_reason_descriptor** | **string**| Reason for terminating the employment. | [optional] |
| **annual_wage** | **float**| Annual wage associated with the employment position being reported. | [optional] |
| **department** | **string**| The department or suborganization the employee/contractor is associated with in the education organization. | [optional] |
| **end_date** | **\DateTime**| The month, day, and year on which a contract between an individual and a governing authority ends or is terminated under the provisions of the contract (or the date on which the agreement is made invalid).  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines. | [optional] |
| **full_time_equivalency** | **float**| The ratio between the hours of work expected in a position and the hours of work normally expected in a full-time position in the same setting. | [optional] |
| **hourly_wage** | **float**| Hourly wage associated with the employment position being reported. | [optional] |
| **id** | **string**|  | [optional] |
| **offer_date** | **\DateTime**| Date at which the staff member was made an official offer for this employment. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiStaffEducationOrganizationEmploymentAssociation[]**](../Model/EdFiStaffEducationOrganizationEmploymentAssociation.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStaffEducationOrganizationEmploymentAssociationsById()`

```php
getStaffEducationOrganizationEmploymentAssociationsById($id, $if_none_match, $use_snapshot): \Resources\Model\EdFiStaffEducationOrganizationEmploymentAssociation
```

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StaffEducationOrganizationEmploymentAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_none_match = 'if_none_match_example'; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getStaffEducationOrganizationEmploymentAssociationsById($id, $if_none_match, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaffEducationOrganizationEmploymentAssociationsApi->getStaffEducationOrganizationEmploymentAssociationsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiStaffEducationOrganizationEmploymentAssociation**](../Model/EdFiStaffEducationOrganizationEmploymentAssociation.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStaffEducationOrganizationEmploymentAssociationsPartitions()`

```php
getStaffEducationOrganizationEmploymentAssociationsPartitions($number, $min_change_version, $max_change_version, $employment_status_descriptor, $hire_date, $education_organization_id, $staff_unique_id, $credential_identifier, $state_of_issue_state_abbreviation_descriptor, $separation_descriptor, $separation_reason_descriptor, $annual_wage, $department, $end_date, $full_time_equivalency, $hourly_wage, $id, $offer_date, $use_snapshot): \Resources\Model\GetAcademicWeeksPartitions200Response
```

Retrieves a set of page tokens to be used for efficient client-side parallel processing.

Computes an evenly distributed set of partitions over the accessible data and returns a set of page tokens, each representing the first page of one of the partitions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StaffEducationOrganizationEmploymentAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$number = 56; // int | The number of evenly distributed partitions to provide for client-side parallel processing. If unspecified, a reasonable set of partitions will be determined based on the total number of accessible items.
$min_change_version = 56; // int | Used in synchronization to set sequence minimum ChangeVersion
$max_change_version = 56; // int | Used in synchronization to set sequence maximum ChangeVersion
$employment_status_descriptor = 'employment_status_descriptor_example'; // string | Reflects the type of employment or contract.
$hire_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The month, day, and year on which an individual was hired for a position.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines.
$education_organization_id = 56; // int | The identifier assigned to an education organization.
$staff_unique_id = 'staff_unique_id_example'; // string | A unique alphanumeric code assigned to a staff.
$credential_identifier = 'credential_identifier_example'; // string | Identifier or serial number assigned to the credential.
$state_of_issue_state_abbreviation_descriptor = 'state_of_issue_state_abbreviation_descriptor_example'; // string | The abbreviation for the name of the state (within the United States) or extra-state jurisdiction in which a license/credential was issued.
$separation_descriptor = 'separation_descriptor_example'; // string | Type of employment separation.
$separation_reason_descriptor = 'separation_reason_descriptor_example'; // string | Reason for terminating the employment.
$annual_wage = 3.4; // float | Annual wage associated with the employment position being reported.
$department = 'department_example'; // string | The department or suborganization the employee/contractor is associated with in the education organization.
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The month, day, and year on which a contract between an individual and a governing authority ends or is terminated under the provisions of the contract (or the date on which the agreement is made invalid).  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines.
$full_time_equivalency = 3.4; // float | The ratio between the hours of work expected in a position and the hours of work normally expected in a full-time position in the same setting.
$hourly_wage = 3.4; // float | Hourly wage associated with the employment position being reported.
$id = 'id_example'; // string | 
$offer_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date at which the staff member was made an official offer for this employment.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getStaffEducationOrganizationEmploymentAssociationsPartitions($number, $min_change_version, $max_change_version, $employment_status_descriptor, $hire_date, $education_organization_id, $staff_unique_id, $credential_identifier, $state_of_issue_state_abbreviation_descriptor, $separation_descriptor, $separation_reason_descriptor, $annual_wage, $department, $end_date, $full_time_equivalency, $hourly_wage, $id, $offer_date, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaffEducationOrganizationEmploymentAssociationsApi->getStaffEducationOrganizationEmploymentAssociationsPartitions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **number** | **int**| The number of evenly distributed partitions to provide for client-side parallel processing. If unspecified, a reasonable set of partitions will be determined based on the total number of accessible items. | [optional] |
| **min_change_version** | **int**| Used in synchronization to set sequence minimum ChangeVersion | [optional] |
| **max_change_version** | **int**| Used in synchronization to set sequence maximum ChangeVersion | [optional] |
| **employment_status_descriptor** | **string**| Reflects the type of employment or contract. | [optional] |
| **hire_date** | **\DateTime**| The month, day, and year on which an individual was hired for a position.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines. | [optional] |
| **education_organization_id** | **int**| The identifier assigned to an education organization. | [optional] |
| **staff_unique_id** | **string**| A unique alphanumeric code assigned to a staff. | [optional] |
| **credential_identifier** | **string**| Identifier or serial number assigned to the credential. | [optional] |
| **state_of_issue_state_abbreviation_descriptor** | **string**| The abbreviation for the name of the state (within the United States) or extra-state jurisdiction in which a license/credential was issued. | [optional] |
| **separation_descriptor** | **string**| Type of employment separation. | [optional] |
| **separation_reason_descriptor** | **string**| Reason for terminating the employment. | [optional] |
| **annual_wage** | **float**| Annual wage associated with the employment position being reported. | [optional] |
| **department** | **string**| The department or suborganization the employee/contractor is associated with in the education organization. | [optional] |
| **end_date** | **\DateTime**| The month, day, and year on which a contract between an individual and a governing authority ends or is terminated under the provisions of the contract (or the date on which the agreement is made invalid).  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines. | [optional] |
| **full_time_equivalency** | **float**| The ratio between the hours of work expected in a position and the hours of work normally expected in a full-time position in the same setting. | [optional] |
| **hourly_wage** | **float**| Hourly wage associated with the employment position being reported. | [optional] |
| **id** | **string**|  | [optional] |
| **offer_date** | **\DateTime**| Date at which the staff member was made an official offer for this employment. | [optional] |
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

## `keyChangesStaffEducationOrganizationEmploymentAssociations()`

```php
keyChangesStaffEducationOrganizationEmploymentAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiStaffEducationOrganizationEmploymentAssociationKeyChange[]
```

Retrieves resources key changes based on change version.

This operation is used to retrieve identifying information about resources whose key values have been changed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StaffEducationOrganizationEmploymentAssociationsApi(
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
    $result = $apiInstance->keyChangesStaffEducationOrganizationEmploymentAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaffEducationOrganizationEmploymentAssociationsApi->keyChangesStaffEducationOrganizationEmploymentAssociations: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiStaffEducationOrganizationEmploymentAssociationKeyChange[]**](../Model/TrackedChangesEdFiStaffEducationOrganizationEmploymentAssociationKeyChange.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postStaffEducationOrganizationEmploymentAssociation()`

```php
postStaffEducationOrganizationEmploymentAssociation($ed_fi_staff_education_organization_employment_association)
```

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update). Clients should NOT include the resource \"id\" in the JSON body because it will result in an error. The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately. It is recommended to use POST for both create and update except while updating natural key of a resource in which case PUT operation must be used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StaffEducationOrganizationEmploymentAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ed_fi_staff_education_organization_employment_association = new \Resources\Model\EdFiStaffEducationOrganizationEmploymentAssociation(); // \Resources\Model\EdFiStaffEducationOrganizationEmploymentAssociation | The JSON representation of the \"staffEducationOrganizationEmploymentAssociation\" resource to be created or updated.

try {
    $apiInstance->postStaffEducationOrganizationEmploymentAssociation($ed_fi_staff_education_organization_employment_association);
} catch (Exception $e) {
    echo 'Exception when calling StaffEducationOrganizationEmploymentAssociationsApi->postStaffEducationOrganizationEmploymentAssociation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ed_fi_staff_education_organization_employment_association** | [**\Resources\Model\EdFiStaffEducationOrganizationEmploymentAssociation**](../Model/EdFiStaffEducationOrganizationEmploymentAssociation.md)| The JSON representation of the \&quot;staffEducationOrganizationEmploymentAssociation\&quot; resource to be created or updated. | |

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

## `putStaffEducationOrganizationEmploymentAssociation()`

```php
putStaffEducationOrganizationEmploymentAssociation($id, $ed_fi_staff_education_organization_employment_association, $if_match)
```

Updates a resource based on the resource identifier.

The PUT operation is used to update a resource by identifier. If the resource identifier (\"id\") is provided in the JSON body, it will be ignored. Additionally, this API resource is not configured for cascading natural key updates. Natural key values for this resource cannot be changed using PUT operation, so the recommendation is to use POST as that supports upsert behavior.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StaffEducationOrganizationEmploymentAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$ed_fi_staff_education_organization_employment_association = new \Resources\Model\EdFiStaffEducationOrganizationEmploymentAssociation(); // \Resources\Model\EdFiStaffEducationOrganizationEmploymentAssociation | The JSON representation of the \"staffEducationOrganizationEmploymentAssociation\" resource to be created or updated.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try {
    $apiInstance->putStaffEducationOrganizationEmploymentAssociation($id, $ed_fi_staff_education_organization_employment_association, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StaffEducationOrganizationEmploymentAssociationsApi->putStaffEducationOrganizationEmploymentAssociation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **ed_fi_staff_education_organization_employment_association** | [**\Resources\Model\EdFiStaffEducationOrganizationEmploymentAssociation**](../Model/EdFiStaffEducationOrganizationEmploymentAssociation.md)| The JSON representation of the \&quot;staffEducationOrganizationEmploymentAssociation\&quot; resource to be created or updated. | |
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
