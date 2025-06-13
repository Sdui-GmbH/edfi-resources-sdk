# Resources\SchoolsApi

All URIs are relative to https://api.ed-fi.org:443/v7.3/api/data/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteSchoolById()**](SchoolsApi.md#deleteSchoolById) | **DELETE** /ed-fi/schools/{id} | Deletes an existing resource using the resource identifier. |
| [**deletesSchools()**](SchoolsApi.md#deletesSchools) | **GET** /ed-fi/schools/deletes | Retrieves deleted resources based on change version. |
| [**getSchools()**](SchoolsApi.md#getSchools) | **GET** /ed-fi/schools | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern). |
| [**getSchoolsById()**](SchoolsApi.md#getSchoolsById) | **GET** /ed-fi/schools/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern). |
| [**getSchoolsPartitions()**](SchoolsApi.md#getSchoolsPartitions) | **GET** /ed-fi/schools/partitions | Retrieves a set of page tokens to be used for efficient client-side parallel processing. |
| [**keyChangesSchools()**](SchoolsApi.md#keyChangesSchools) | **GET** /ed-fi/schools/keyChanges | Retrieves resources key changes based on change version. |
| [**postSchool()**](SchoolsApi.md#postSchool) | **POST** /ed-fi/schools | Creates or updates resources based on the natural key values of the supplied resource. |
| [**putSchool()**](SchoolsApi.md#putSchool) | **PUT** /ed-fi/schools/{id} | Updates a resource based on the resource identifier. |


## `deleteSchoolById()`

```php
deleteSchoolById($id, $if_match)
```

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier. If the resource doesn't exist, an error will result (the resource will not be found).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\SchoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try {
    $apiInstance->deleteSchoolById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling SchoolsApi->deleteSchoolById: ', $e->getMessage(), PHP_EOL;
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

## `deletesSchools()`

```php
deletesSchools($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiSchoolDelete[]
```

Retrieves deleted resources based on change version.

This operation is used to retrieve identifying information about resources that have been deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\SchoolsApi(
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
    $result = $apiInstance->deletesSchools($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchoolsApi->deletesSchools: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiSchoolDelete[]**](../Model/TrackedChangesEdFiSchoolDelete.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSchools()`

```php
getSchools($offset, $limit, $page_token, $page_size, $min_change_version, $max_change_version, $total_count, $school_id, $local_education_agency_id, $charter_approval_school_year, $administrative_funding_control_descriptor, $charter_approval_agency_type_descriptor, $charter_status_descriptor, $internet_access_descriptor, $magnet_special_program_emphasis_school_descriptor, $school_type_descriptor, $title_i_part_a_school_designation_descriptor, $operational_status_descriptor, $id, $name_of_institution, $short_name_of_institution, $web_site, $use_snapshot, $education_organization_identification_system_descriptor, $identification_code): \Resources\Model\EdFiSchool[]
```

Retrieves specific resources using the resource's property values (using the \"Get\" pattern).

This GET operation provides access to resources using the \"Get\" search pattern.  The values of any properties of the resource that are specified will be used to return all matching results (if it exists).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\SchoolsApi(
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
$school_id = 56; // int | The identifier assigned to a school. It must be distinct from any other identifier assigned to educational organizations, such as a LocalEducationAgencyId, to prevent duplication.
$local_education_agency_id = 56; // int | The identifier assigned to a local education agency. It must be distinct from any other identifier assigned to educational organizations, such as a SchoolId, to prevent duplication.
$charter_approval_school_year = 56; // int | The school year in which a charter school was initially approved.
$administrative_funding_control_descriptor = 'administrative_funding_control_descriptor_example'; // string | The type of education institution as classified by its funding source, for example public or private.
$charter_approval_agency_type_descriptor = 'charter_approval_agency_type_descriptor_example'; // string | The type of agency that approved the establishment or continuation of a charter school.
$charter_status_descriptor = 'charter_status_descriptor_example'; // string | A school or agency providing free public elementary or secondary education to eligible students under a specific charter granted by the state legislature or other appropriate authority and designated by such authority to be a charter school.
$internet_access_descriptor = 'internet_access_descriptor_example'; // string | The type of Internet access available.
$magnet_special_program_emphasis_school_descriptor = 'magnet_special_program_emphasis_school_descriptor_example'; // string | A school that has been designed: 1) to attract students of different racial/ethnic backgrounds for the purpose of reducing, preventing, or eliminating racial isolation; and/or 2) to provide an academic or social focus on a particular theme (e.g., science/math, performing arts, gifted/talented, or foreign language).
$school_type_descriptor = 'school_type_descriptor_example'; // string | The type of education institution as classified by its primary focus.
$title_i_part_a_school_designation_descriptor = 'title_i_part_a_school_designation_descriptor_example'; // string | Denotes the Title I Part A designation for the school.
$operational_status_descriptor = 'operational_status_descriptor_example'; // string | The current operational status of the education organization (e.g., active, inactive).
$id = 'id_example'; // string | 
$name_of_institution = 'name_of_institution_example'; // string | The full, legally accepted name of the institution.
$short_name_of_institution = 'short_name_of_institution_example'; // string | A short name for the institution.
$web_site = 'web_site_example'; // string | The public web site address (URL) for the education organization.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.
$education_organization_identification_system_descriptor = 'education_organization_identification_system_descriptor_example'; // string | The school system, state, or agency assigning the identification code.
$identification_code = 'identification_code_example'; // string | A unique number or alphanumeric code that is assigned to an education organization by a school, school system, state, or other agency or entity.

try {
    $result = $apiInstance->getSchools($offset, $limit, $page_token, $page_size, $min_change_version, $max_change_version, $total_count, $school_id, $local_education_agency_id, $charter_approval_school_year, $administrative_funding_control_descriptor, $charter_approval_agency_type_descriptor, $charter_status_descriptor, $internet_access_descriptor, $magnet_special_program_emphasis_school_descriptor, $school_type_descriptor, $title_i_part_a_school_designation_descriptor, $operational_status_descriptor, $id, $name_of_institution, $short_name_of_institution, $web_site, $use_snapshot, $education_organization_identification_system_descriptor, $identification_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchoolsApi->getSchools: ', $e->getMessage(), PHP_EOL;
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
| **school_id** | **int**| The identifier assigned to a school. It must be distinct from any other identifier assigned to educational organizations, such as a LocalEducationAgencyId, to prevent duplication. | [optional] |
| **local_education_agency_id** | **int**| The identifier assigned to a local education agency. It must be distinct from any other identifier assigned to educational organizations, such as a SchoolId, to prevent duplication. | [optional] |
| **charter_approval_school_year** | **int**| The school year in which a charter school was initially approved. | [optional] |
| **administrative_funding_control_descriptor** | **string**| The type of education institution as classified by its funding source, for example public or private. | [optional] |
| **charter_approval_agency_type_descriptor** | **string**| The type of agency that approved the establishment or continuation of a charter school. | [optional] |
| **charter_status_descriptor** | **string**| A school or agency providing free public elementary or secondary education to eligible students under a specific charter granted by the state legislature or other appropriate authority and designated by such authority to be a charter school. | [optional] |
| **internet_access_descriptor** | **string**| The type of Internet access available. | [optional] |
| **magnet_special_program_emphasis_school_descriptor** | **string**| A school that has been designed: 1) to attract students of different racial/ethnic backgrounds for the purpose of reducing, preventing, or eliminating racial isolation; and/or 2) to provide an academic or social focus on a particular theme (e.g., science/math, performing arts, gifted/talented, or foreign language). | [optional] |
| **school_type_descriptor** | **string**| The type of education institution as classified by its primary focus. | [optional] |
| **title_i_part_a_school_designation_descriptor** | **string**| Denotes the Title I Part A designation for the school. | [optional] |
| **operational_status_descriptor** | **string**| The current operational status of the education organization (e.g., active, inactive). | [optional] |
| **id** | **string**|  | [optional] |
| **name_of_institution** | **string**| The full, legally accepted name of the institution. | [optional] |
| **short_name_of_institution** | **string**| A short name for the institution. | [optional] |
| **web_site** | **string**| The public web site address (URL) for the education organization. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |
| **education_organization_identification_system_descriptor** | **string**| The school system, state, or agency assigning the identification code. | [optional] |
| **identification_code** | **string**| A unique number or alphanumeric code that is assigned to an education organization by a school, school system, state, or other agency or entity. | [optional] |

### Return type

[**\Resources\Model\EdFiSchool[]**](../Model/EdFiSchool.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSchoolsById()`

```php
getSchoolsById($id, $if_none_match, $use_snapshot): \Resources\Model\EdFiSchool
```

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\SchoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_none_match = 'if_none_match_example'; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getSchoolsById($id, $if_none_match, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchoolsApi->getSchoolsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiSchool**](../Model/EdFiSchool.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSchoolsPartitions()`

```php
getSchoolsPartitions($number, $min_change_version, $max_change_version, $school_id, $local_education_agency_id, $charter_approval_school_year, $administrative_funding_control_descriptor, $charter_approval_agency_type_descriptor, $charter_status_descriptor, $internet_access_descriptor, $magnet_special_program_emphasis_school_descriptor, $school_type_descriptor, $title_i_part_a_school_designation_descriptor, $operational_status_descriptor, $id, $name_of_institution, $short_name_of_institution, $web_site, $use_snapshot, $education_organization_identification_system_descriptor, $identification_code): \Resources\Model\GetAcademicWeeksPartitions200Response
```

Retrieves a set of page tokens to be used for efficient client-side parallel processing.

Computes an evenly distributed set of partitions over the accessible data and returns a set of page tokens, each representing the first page of one of the partitions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\SchoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$number = 56; // int | The number of evenly distributed partitions to provide for client-side parallel processing. If unspecified, a reasonable set of partitions will be determined based on the total number of accessible items.
$min_change_version = 56; // int | Used in synchronization to set sequence minimum ChangeVersion
$max_change_version = 56; // int | Used in synchronization to set sequence maximum ChangeVersion
$school_id = 56; // int | The identifier assigned to a school. It must be distinct from any other identifier assigned to educational organizations, such as a LocalEducationAgencyId, to prevent duplication.
$local_education_agency_id = 56; // int | The identifier assigned to a local education agency. It must be distinct from any other identifier assigned to educational organizations, such as a SchoolId, to prevent duplication.
$charter_approval_school_year = 56; // int | The school year in which a charter school was initially approved.
$administrative_funding_control_descriptor = 'administrative_funding_control_descriptor_example'; // string | The type of education institution as classified by its funding source, for example public or private.
$charter_approval_agency_type_descriptor = 'charter_approval_agency_type_descriptor_example'; // string | The type of agency that approved the establishment or continuation of a charter school.
$charter_status_descriptor = 'charter_status_descriptor_example'; // string | A school or agency providing free public elementary or secondary education to eligible students under a specific charter granted by the state legislature or other appropriate authority and designated by such authority to be a charter school.
$internet_access_descriptor = 'internet_access_descriptor_example'; // string | The type of Internet access available.
$magnet_special_program_emphasis_school_descriptor = 'magnet_special_program_emphasis_school_descriptor_example'; // string | A school that has been designed: 1) to attract students of different racial/ethnic backgrounds for the purpose of reducing, preventing, or eliminating racial isolation; and/or 2) to provide an academic or social focus on a particular theme (e.g., science/math, performing arts, gifted/talented, or foreign language).
$school_type_descriptor = 'school_type_descriptor_example'; // string | The type of education institution as classified by its primary focus.
$title_i_part_a_school_designation_descriptor = 'title_i_part_a_school_designation_descriptor_example'; // string | Denotes the Title I Part A designation for the school.
$operational_status_descriptor = 'operational_status_descriptor_example'; // string | The current operational status of the education organization (e.g., active, inactive).
$id = 'id_example'; // string | 
$name_of_institution = 'name_of_institution_example'; // string | The full, legally accepted name of the institution.
$short_name_of_institution = 'short_name_of_institution_example'; // string | A short name for the institution.
$web_site = 'web_site_example'; // string | The public web site address (URL) for the education organization.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.
$education_organization_identification_system_descriptor = 'education_organization_identification_system_descriptor_example'; // string | The school system, state, or agency assigning the identification code.
$identification_code = 'identification_code_example'; // string | A unique number or alphanumeric code that is assigned to an education organization by a school, school system, state, or other agency or entity.

try {
    $result = $apiInstance->getSchoolsPartitions($number, $min_change_version, $max_change_version, $school_id, $local_education_agency_id, $charter_approval_school_year, $administrative_funding_control_descriptor, $charter_approval_agency_type_descriptor, $charter_status_descriptor, $internet_access_descriptor, $magnet_special_program_emphasis_school_descriptor, $school_type_descriptor, $title_i_part_a_school_designation_descriptor, $operational_status_descriptor, $id, $name_of_institution, $short_name_of_institution, $web_site, $use_snapshot, $education_organization_identification_system_descriptor, $identification_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchoolsApi->getSchoolsPartitions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **number** | **int**| The number of evenly distributed partitions to provide for client-side parallel processing. If unspecified, a reasonable set of partitions will be determined based on the total number of accessible items. | [optional] |
| **min_change_version** | **int**| Used in synchronization to set sequence minimum ChangeVersion | [optional] |
| **max_change_version** | **int**| Used in synchronization to set sequence maximum ChangeVersion | [optional] |
| **school_id** | **int**| The identifier assigned to a school. It must be distinct from any other identifier assigned to educational organizations, such as a LocalEducationAgencyId, to prevent duplication. | [optional] |
| **local_education_agency_id** | **int**| The identifier assigned to a local education agency. It must be distinct from any other identifier assigned to educational organizations, such as a SchoolId, to prevent duplication. | [optional] |
| **charter_approval_school_year** | **int**| The school year in which a charter school was initially approved. | [optional] |
| **administrative_funding_control_descriptor** | **string**| The type of education institution as classified by its funding source, for example public or private. | [optional] |
| **charter_approval_agency_type_descriptor** | **string**| The type of agency that approved the establishment or continuation of a charter school. | [optional] |
| **charter_status_descriptor** | **string**| A school or agency providing free public elementary or secondary education to eligible students under a specific charter granted by the state legislature or other appropriate authority and designated by such authority to be a charter school. | [optional] |
| **internet_access_descriptor** | **string**| The type of Internet access available. | [optional] |
| **magnet_special_program_emphasis_school_descriptor** | **string**| A school that has been designed: 1) to attract students of different racial/ethnic backgrounds for the purpose of reducing, preventing, or eliminating racial isolation; and/or 2) to provide an academic or social focus on a particular theme (e.g., science/math, performing arts, gifted/talented, or foreign language). | [optional] |
| **school_type_descriptor** | **string**| The type of education institution as classified by its primary focus. | [optional] |
| **title_i_part_a_school_designation_descriptor** | **string**| Denotes the Title I Part A designation for the school. | [optional] |
| **operational_status_descriptor** | **string**| The current operational status of the education organization (e.g., active, inactive). | [optional] |
| **id** | **string**|  | [optional] |
| **name_of_institution** | **string**| The full, legally accepted name of the institution. | [optional] |
| **short_name_of_institution** | **string**| A short name for the institution. | [optional] |
| **web_site** | **string**| The public web site address (URL) for the education organization. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |
| **education_organization_identification_system_descriptor** | **string**| The school system, state, or agency assigning the identification code. | [optional] |
| **identification_code** | **string**| A unique number or alphanumeric code that is assigned to an education organization by a school, school system, state, or other agency or entity. | [optional] |

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

## `keyChangesSchools()`

```php
keyChangesSchools($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiSchoolKeyChange[]
```

Retrieves resources key changes based on change version.

This operation is used to retrieve identifying information about resources whose key values have been changed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\SchoolsApi(
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
    $result = $apiInstance->keyChangesSchools($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchoolsApi->keyChangesSchools: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiSchoolKeyChange[]**](../Model/TrackedChangesEdFiSchoolKeyChange.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postSchool()`

```php
postSchool($ed_fi_school)
```

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update). Clients should NOT include the resource \"id\" in the JSON body because it will result in an error. The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately. It is recommended to use POST for both create and update except while updating natural key of a resource in which case PUT operation must be used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\SchoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ed_fi_school = new \Resources\Model\EdFiSchool(); // \Resources\Model\EdFiSchool | The JSON representation of the \"school\" resource to be created or updated.

try {
    $apiInstance->postSchool($ed_fi_school);
} catch (Exception $e) {
    echo 'Exception when calling SchoolsApi->postSchool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ed_fi_school** | [**\Resources\Model\EdFiSchool**](../Model/EdFiSchool.md)| The JSON representation of the \&quot;school\&quot; resource to be created or updated. | |

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

## `putSchool()`

```php
putSchool($id, $ed_fi_school, $if_match)
```

Updates a resource based on the resource identifier.

The PUT operation is used to update a resource by identifier. If the resource identifier (\"id\") is provided in the JSON body, it will be ignored. Additionally, this API resource is not configured for cascading natural key updates. Natural key values for this resource cannot be changed using PUT operation, so the recommendation is to use POST as that supports upsert behavior.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\SchoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$ed_fi_school = new \Resources\Model\EdFiSchool(); // \Resources\Model\EdFiSchool | The JSON representation of the \"school\" resource to be created or updated.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try {
    $apiInstance->putSchool($id, $ed_fi_school, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling SchoolsApi->putSchool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **ed_fi_school** | [**\Resources\Model\EdFiSchool**](../Model/EdFiSchool.md)| The JSON representation of the \&quot;school\&quot; resource to be created or updated. | |
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
