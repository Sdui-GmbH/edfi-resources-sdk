# Resources\StaffEducationOrganizationAssignmentAssociationsApi

All URIs are relative to https://api.ed-fi.org:443/v7.1/api/data/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteStaffEducationOrganizationAssignmentAssociationById()**](StaffEducationOrganizationAssignmentAssociationsApi.md#deleteStaffEducationOrganizationAssignmentAssociationById) | **DELETE** /ed-fi/staffEducationOrganizationAssignmentAssociations/{id} | Deletes an existing resource using the resource identifier. |
| [**deletesStaffEducationOrganizationAssignmentAssociations()**](StaffEducationOrganizationAssignmentAssociationsApi.md#deletesStaffEducationOrganizationAssignmentAssociations) | **GET** /ed-fi/staffEducationOrganizationAssignmentAssociations/deletes | Retrieves deleted resources based on change version. |
| [**getStaffEducationOrganizationAssignmentAssociations()**](StaffEducationOrganizationAssignmentAssociationsApi.md#getStaffEducationOrganizationAssignmentAssociations) | **GET** /ed-fi/staffEducationOrganizationAssignmentAssociations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern). |
| [**getStaffEducationOrganizationAssignmentAssociationsById()**](StaffEducationOrganizationAssignmentAssociationsApi.md#getStaffEducationOrganizationAssignmentAssociationsById) | **GET** /ed-fi/staffEducationOrganizationAssignmentAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern). |
| [**keyChangesStaffEducationOrganizationAssignmentAssociations()**](StaffEducationOrganizationAssignmentAssociationsApi.md#keyChangesStaffEducationOrganizationAssignmentAssociations) | **GET** /ed-fi/staffEducationOrganizationAssignmentAssociations/keyChanges | Retrieves resources key changes based on change version. |
| [**postStaffEducationOrganizationAssignmentAssociation()**](StaffEducationOrganizationAssignmentAssociationsApi.md#postStaffEducationOrganizationAssignmentAssociation) | **POST** /ed-fi/staffEducationOrganizationAssignmentAssociations | Creates or updates resources based on the natural key values of the supplied resource. |
| [**putStaffEducationOrganizationAssignmentAssociation()**](StaffEducationOrganizationAssignmentAssociationsApi.md#putStaffEducationOrganizationAssignmentAssociation) | **PUT** /ed-fi/staffEducationOrganizationAssignmentAssociations/{id} | Updates a resource based on the resource identifier. |


## `deleteStaffEducationOrganizationAssignmentAssociationById()`

```php
deleteStaffEducationOrganizationAssignmentAssociationById($id, $if_match)
```

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier. If the resource doesn't exist, an error will result (the resource will not be found).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StaffEducationOrganizationAssignmentAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try {
    $apiInstance->deleteStaffEducationOrganizationAssignmentAssociationById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StaffEducationOrganizationAssignmentAssociationsApi->deleteStaffEducationOrganizationAssignmentAssociationById: ', $e->getMessage(), PHP_EOL;
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

## `deletesStaffEducationOrganizationAssignmentAssociations()`

```php
deletesStaffEducationOrganizationAssignmentAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiStaffEducationOrganizationAssignmentAssociationDelete[]
```

Retrieves deleted resources based on change version.

This operation is used to retrieve identifying information about resources that have been deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StaffEducationOrganizationAssignmentAssociationsApi(
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
    $result = $apiInstance->deletesStaffEducationOrganizationAssignmentAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaffEducationOrganizationAssignmentAssociationsApi->deletesStaffEducationOrganizationAssignmentAssociations: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiStaffEducationOrganizationAssignmentAssociationDelete[]**](../Model/TrackedChangesEdFiStaffEducationOrganizationAssignmentAssociationDelete.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStaffEducationOrganizationAssignmentAssociations()`

```php
getStaffEducationOrganizationAssignmentAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $staff_classification_descriptor, $begin_date, $education_organization_id, $staff_unique_id, $credential_identifier, $state_of_issue_state_abbreviation_descriptor, $employment_education_organization_id, $employment_status_descriptor, $employment_hire_date, $end_date, $full_time_equivalency, $id, $order_of_assignment, $position_title, $use_snapshot): \Resources\Model\EdFiStaffEducationOrganizationAssignmentAssociation[]
```

Retrieves specific resources using the resource's property values (using the \"Get\" pattern).

This GET operation provides access to resources using the \"Get\" search pattern.  The values of any properties of the resource that are specified will be used to return all matching results (if it exists).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StaffEducationOrganizationAssignmentAssociationsApi(
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
$staff_classification_descriptor = 'staff_classification_descriptor_example'; // string | The titles of employment, official status, or rank of education staff.
$begin_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Month, day, and year of the start or effective date of a staff member's employment, contract, or relationship with the education organization.
$education_organization_id = 56; // int | The identifier assigned to an education organization.
$staff_unique_id = 'staff_unique_id_example'; // string | A unique alphanumeric code assigned to a staff.
$credential_identifier = 'credential_identifier_example'; // string | Identifier or serial number assigned to the credential.
$state_of_issue_state_abbreviation_descriptor = 'state_of_issue_state_abbreviation_descriptor_example'; // string | The abbreviation for the name of the state (within the United States) or extra-state jurisdiction in which a license/credential was issued.
$employment_education_organization_id = 56; // int | The identifier assigned to an education organization.
$employment_status_descriptor = 'employment_status_descriptor_example'; // string | Reflects the type of employment or contract.
$employment_hire_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The month, day, and year on which an individual was hired for a position.
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Month, day, and year of the end or termination date of a staff member's employment, contract, or relationship with the education organization.
$full_time_equivalency = 3.4; // float | The ratio between the hours of work expected in a position and the hours of work normally expected in a full-time position in the same setting.
$id = 'id_example'; // string | 
$order_of_assignment = 56; // int | Describes whether the assignment is this the staff member's primary assignment, secondary assignment, etc.
$position_title = 'position_title_example'; // string | The descriptive name of an individual's position.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getStaffEducationOrganizationAssignmentAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $staff_classification_descriptor, $begin_date, $education_organization_id, $staff_unique_id, $credential_identifier, $state_of_issue_state_abbreviation_descriptor, $employment_education_organization_id, $employment_status_descriptor, $employment_hire_date, $end_date, $full_time_equivalency, $id, $order_of_assignment, $position_title, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaffEducationOrganizationAssignmentAssociationsApi->getStaffEducationOrganizationAssignmentAssociations: ', $e->getMessage(), PHP_EOL;
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
| **staff_classification_descriptor** | **string**| The titles of employment, official status, or rank of education staff. | [optional] |
| **begin_date** | **\DateTime**| Month, day, and year of the start or effective date of a staff member&#39;s employment, contract, or relationship with the education organization. | [optional] |
| **education_organization_id** | **int**| The identifier assigned to an education organization. | [optional] |
| **staff_unique_id** | **string**| A unique alphanumeric code assigned to a staff. | [optional] |
| **credential_identifier** | **string**| Identifier or serial number assigned to the credential. | [optional] |
| **state_of_issue_state_abbreviation_descriptor** | **string**| The abbreviation for the name of the state (within the United States) or extra-state jurisdiction in which a license/credential was issued. | [optional] |
| **employment_education_organization_id** | **int**| The identifier assigned to an education organization. | [optional] |
| **employment_status_descriptor** | **string**| Reflects the type of employment or contract. | [optional] |
| **employment_hire_date** | **\DateTime**| The month, day, and year on which an individual was hired for a position. | [optional] |
| **end_date** | **\DateTime**| Month, day, and year of the end or termination date of a staff member&#39;s employment, contract, or relationship with the education organization. | [optional] |
| **full_time_equivalency** | **float**| The ratio between the hours of work expected in a position and the hours of work normally expected in a full-time position in the same setting. | [optional] |
| **id** | **string**|  | [optional] |
| **order_of_assignment** | **int**| Describes whether the assignment is this the staff member&#39;s primary assignment, secondary assignment, etc. | [optional] |
| **position_title** | **string**| The descriptive name of an individual&#39;s position. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiStaffEducationOrganizationAssignmentAssociation[]**](../Model/EdFiStaffEducationOrganizationAssignmentAssociation.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStaffEducationOrganizationAssignmentAssociationsById()`

```php
getStaffEducationOrganizationAssignmentAssociationsById($id, $if_none_match, $use_snapshot): \Resources\Model\EdFiStaffEducationOrganizationAssignmentAssociation
```

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StaffEducationOrganizationAssignmentAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_none_match = 'if_none_match_example'; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getStaffEducationOrganizationAssignmentAssociationsById($id, $if_none_match, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaffEducationOrganizationAssignmentAssociationsApi->getStaffEducationOrganizationAssignmentAssociationsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiStaffEducationOrganizationAssignmentAssociation**](../Model/EdFiStaffEducationOrganizationAssignmentAssociation.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `keyChangesStaffEducationOrganizationAssignmentAssociations()`

```php
keyChangesStaffEducationOrganizationAssignmentAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiStaffEducationOrganizationAssignmentAssociationKeyChange[]
```

Retrieves resources key changes based on change version.

This operation is used to retrieve identifying information about resources whose key values have been changed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StaffEducationOrganizationAssignmentAssociationsApi(
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
    $result = $apiInstance->keyChangesStaffEducationOrganizationAssignmentAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaffEducationOrganizationAssignmentAssociationsApi->keyChangesStaffEducationOrganizationAssignmentAssociations: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiStaffEducationOrganizationAssignmentAssociationKeyChange[]**](../Model/TrackedChangesEdFiStaffEducationOrganizationAssignmentAssociationKeyChange.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postStaffEducationOrganizationAssignmentAssociation()`

```php
postStaffEducationOrganizationAssignmentAssociation($ed_fi_staff_education_organization_assignment_association)
```

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update). Clients should NOT include the resource \"id\" in the JSON body because it will result in an error. The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately. It is recommended to use POST for both create and update except while updating natural key of a resource in which case PUT operation must be used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StaffEducationOrganizationAssignmentAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ed_fi_staff_education_organization_assignment_association = new \Resources\Model\EdFiStaffEducationOrganizationAssignmentAssociation(); // \Resources\Model\EdFiStaffEducationOrganizationAssignmentAssociation | The JSON representation of the \"staffEducationOrganizationAssignmentAssociation\" resource to be created or updated.

try {
    $apiInstance->postStaffEducationOrganizationAssignmentAssociation($ed_fi_staff_education_organization_assignment_association);
} catch (Exception $e) {
    echo 'Exception when calling StaffEducationOrganizationAssignmentAssociationsApi->postStaffEducationOrganizationAssignmentAssociation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ed_fi_staff_education_organization_assignment_association** | [**\Resources\Model\EdFiStaffEducationOrganizationAssignmentAssociation**](../Model/EdFiStaffEducationOrganizationAssignmentAssociation.md)| The JSON representation of the \&quot;staffEducationOrganizationAssignmentAssociation\&quot; resource to be created or updated. | |

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

## `putStaffEducationOrganizationAssignmentAssociation()`

```php
putStaffEducationOrganizationAssignmentAssociation($id, $ed_fi_staff_education_organization_assignment_association, $if_match)
```

Updates a resource based on the resource identifier.

The PUT operation is used to update a resource by identifier. If the resource identifier (\"id\") is provided in the JSON body, it will be ignored. Additionally, this API resource is not configured for cascading natural key updates. Natural key values for this resource cannot be changed using PUT operation, so the recommendation is to use POST as that supports upsert behavior.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StaffEducationOrganizationAssignmentAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$ed_fi_staff_education_organization_assignment_association = new \Resources\Model\EdFiStaffEducationOrganizationAssignmentAssociation(); // \Resources\Model\EdFiStaffEducationOrganizationAssignmentAssociation | The JSON representation of the \"staffEducationOrganizationAssignmentAssociation\" resource to be created or updated.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try {
    $apiInstance->putStaffEducationOrganizationAssignmentAssociation($id, $ed_fi_staff_education_organization_assignment_association, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StaffEducationOrganizationAssignmentAssociationsApi->putStaffEducationOrganizationAssignmentAssociation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **ed_fi_staff_education_organization_assignment_association** | [**\Resources\Model\EdFiStaffEducationOrganizationAssignmentAssociation**](../Model/EdFiStaffEducationOrganizationAssignmentAssociation.md)| The JSON representation of the \&quot;staffEducationOrganizationAssignmentAssociation\&quot; resource to be created or updated. | |
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
