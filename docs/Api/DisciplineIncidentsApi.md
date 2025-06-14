# Resources\DisciplineIncidentsApi

All URIs are relative to https://api.ed-fi.org:443/v7.3/api/data/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteDisciplineIncidentById()**](DisciplineIncidentsApi.md#deleteDisciplineIncidentById) | **DELETE** /ed-fi/disciplineIncidents/{id} | Deletes an existing resource using the resource identifier. |
| [**deletesDisciplineIncidents()**](DisciplineIncidentsApi.md#deletesDisciplineIncidents) | **GET** /ed-fi/disciplineIncidents/deletes | Retrieves deleted resources based on change version. |
| [**getDisciplineIncidents()**](DisciplineIncidentsApi.md#getDisciplineIncidents) | **GET** /ed-fi/disciplineIncidents | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern). |
| [**getDisciplineIncidentsById()**](DisciplineIncidentsApi.md#getDisciplineIncidentsById) | **GET** /ed-fi/disciplineIncidents/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern). |
| [**getDisciplineIncidentsPartitions()**](DisciplineIncidentsApi.md#getDisciplineIncidentsPartitions) | **GET** /ed-fi/disciplineIncidents/partitions | Retrieves a set of page tokens to be used for efficient client-side parallel processing. |
| [**keyChangesDisciplineIncidents()**](DisciplineIncidentsApi.md#keyChangesDisciplineIncidents) | **GET** /ed-fi/disciplineIncidents/keyChanges | Retrieves resources key changes based on change version. |
| [**postDisciplineIncident()**](DisciplineIncidentsApi.md#postDisciplineIncident) | **POST** /ed-fi/disciplineIncidents | Creates or updates resources based on the natural key values of the supplied resource. |
| [**putDisciplineIncident()**](DisciplineIncidentsApi.md#putDisciplineIncident) | **PUT** /ed-fi/disciplineIncidents/{id} | Updates a resource based on the resource identifier. |


## `deleteDisciplineIncidentById()`

```php
deleteDisciplineIncidentById($id, $if_match)
```

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier. If the resource doesn't exist, an error will result (the resource will not be found).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\DisciplineIncidentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try {
    $apiInstance->deleteDisciplineIncidentById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling DisciplineIncidentsApi->deleteDisciplineIncidentById: ', $e->getMessage(), PHP_EOL;
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

## `deletesDisciplineIncidents()`

```php
deletesDisciplineIncidents($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiDisciplineIncidentDelete[]
```

Retrieves deleted resources based on change version.

This operation is used to retrieve identifying information about resources that have been deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\DisciplineIncidentsApi(
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
    $result = $apiInstance->deletesDisciplineIncidents($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisciplineIncidentsApi->deletesDisciplineIncidents: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiDisciplineIncidentDelete[]**](../Model/TrackedChangesEdFiDisciplineIncidentDelete.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDisciplineIncidents()`

```php
getDisciplineIncidents($offset, $limit, $page_token, $page_size, $min_change_version, $max_change_version, $total_count, $incident_identifier, $school_id, $incident_location_descriptor, $reporter_description_descriptor, $case_number, $id, $incident_cost, $incident_date, $incident_description, $incident_time, $reported_to_law_enforcement, $reporter_name, $use_snapshot): \Resources\Model\EdFiDisciplineIncident[]
```

Retrieves specific resources using the resource's property values (using the \"Get\" pattern).

This GET operation provides access to resources using the \"Get\" search pattern.  The values of any properties of the resource that are specified will be used to return all matching results (if it exists).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\DisciplineIncidentsApi(
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
$incident_identifier = 'incident_identifier_example'; // string | A locally assigned unique identifier (within the school or school district) to identify each specific DisciplineIncident or occurrence. The same identifier should be used to document the entire discipline incident even if it included multiple offenses and multiple offenders.
$school_id = 56; // int | The identifier assigned to a school. It must be distinct from any other identifier assigned to educational organizations, such as a LocalEducationAgencyId, to prevent duplication.
$incident_location_descriptor = 'incident_location_descriptor_example'; // string | Identifies where the discipline incident occurred and whether or not it occurred on school.
$reporter_description_descriptor = 'reporter_description_descriptor_example'; // string | Information on the type of individual who reported the discipline incident. When known and/or if useful, use a more specific option code (e.g., \"Counselor\" rather than \"Professional Staff\").
$case_number = 'case_number_example'; // string | The case number assigned to the DisciplineIncident by law enforcement or other organization.
$id = 'id_example'; // string | 
$incident_cost = 3.4; // float | The value of any quantifiable monetary loss directly resulting from the discipline incident. Examples include the value of repairs necessitated by vandalism of a school facility, or the value of personnel resources used for repairs or consumed by the incident.
$incident_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The month, day, and year on which the discipline incident occurred.
$incident_description = 'incident_description_example'; // string | The description for an incident.
$incident_time = 'incident_time_example'; // string | An indication of the time of day the incident took place.
$reported_to_law_enforcement = True; // bool | Indicator of whether the incident was reported to law enforcement.
$reporter_name = 'reporter_name_example'; // string | Identifies the reporter of the discipline incident by name.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getDisciplineIncidents($offset, $limit, $page_token, $page_size, $min_change_version, $max_change_version, $total_count, $incident_identifier, $school_id, $incident_location_descriptor, $reporter_description_descriptor, $case_number, $id, $incident_cost, $incident_date, $incident_description, $incident_time, $reported_to_law_enforcement, $reporter_name, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisciplineIncidentsApi->getDisciplineIncidents: ', $e->getMessage(), PHP_EOL;
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
| **incident_identifier** | **string**| A locally assigned unique identifier (within the school or school district) to identify each specific DisciplineIncident or occurrence. The same identifier should be used to document the entire discipline incident even if it included multiple offenses and multiple offenders. | [optional] |
| **school_id** | **int**| The identifier assigned to a school. It must be distinct from any other identifier assigned to educational organizations, such as a LocalEducationAgencyId, to prevent duplication. | [optional] |
| **incident_location_descriptor** | **string**| Identifies where the discipline incident occurred and whether or not it occurred on school. | [optional] |
| **reporter_description_descriptor** | **string**| Information on the type of individual who reported the discipline incident. When known and/or if useful, use a more specific option code (e.g., \&quot;Counselor\&quot; rather than \&quot;Professional Staff\&quot;). | [optional] |
| **case_number** | **string**| The case number assigned to the DisciplineIncident by law enforcement or other organization. | [optional] |
| **id** | **string**|  | [optional] |
| **incident_cost** | **float**| The value of any quantifiable monetary loss directly resulting from the discipline incident. Examples include the value of repairs necessitated by vandalism of a school facility, or the value of personnel resources used for repairs or consumed by the incident. | [optional] |
| **incident_date** | **\DateTime**| The month, day, and year on which the discipline incident occurred. | [optional] |
| **incident_description** | **string**| The description for an incident. | [optional] |
| **incident_time** | **string**| An indication of the time of day the incident took place. | [optional] |
| **reported_to_law_enforcement** | **bool**| Indicator of whether the incident was reported to law enforcement. | [optional] |
| **reporter_name** | **string**| Identifies the reporter of the discipline incident by name. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiDisciplineIncident[]**](../Model/EdFiDisciplineIncident.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDisciplineIncidentsById()`

```php
getDisciplineIncidentsById($id, $if_none_match, $use_snapshot): \Resources\Model\EdFiDisciplineIncident
```

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\DisciplineIncidentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_none_match = 'if_none_match_example'; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getDisciplineIncidentsById($id, $if_none_match, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisciplineIncidentsApi->getDisciplineIncidentsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiDisciplineIncident**](../Model/EdFiDisciplineIncident.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDisciplineIncidentsPartitions()`

```php
getDisciplineIncidentsPartitions($number, $min_change_version, $max_change_version, $incident_identifier, $school_id, $incident_location_descriptor, $reporter_description_descriptor, $case_number, $id, $incident_cost, $incident_date, $incident_description, $incident_time, $reported_to_law_enforcement, $reporter_name, $use_snapshot): \Resources\Model\GetAcademicWeeksPartitions200Response
```

Retrieves a set of page tokens to be used for efficient client-side parallel processing.

Computes an evenly distributed set of partitions over the accessible data and returns a set of page tokens, each representing the first page of one of the partitions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\DisciplineIncidentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$number = 56; // int | The number of evenly distributed partitions to provide for client-side parallel processing. If unspecified, a reasonable set of partitions will be determined based on the total number of accessible items.
$min_change_version = 56; // int | Used in synchronization to set sequence minimum ChangeVersion
$max_change_version = 56; // int | Used in synchronization to set sequence maximum ChangeVersion
$incident_identifier = 'incident_identifier_example'; // string | A locally assigned unique identifier (within the school or school district) to identify each specific DisciplineIncident or occurrence. The same identifier should be used to document the entire discipline incident even if it included multiple offenses and multiple offenders.
$school_id = 56; // int | The identifier assigned to a school. It must be distinct from any other identifier assigned to educational organizations, such as a LocalEducationAgencyId, to prevent duplication.
$incident_location_descriptor = 'incident_location_descriptor_example'; // string | Identifies where the discipline incident occurred and whether or not it occurred on school.
$reporter_description_descriptor = 'reporter_description_descriptor_example'; // string | Information on the type of individual who reported the discipline incident. When known and/or if useful, use a more specific option code (e.g., \"Counselor\" rather than \"Professional Staff\").
$case_number = 'case_number_example'; // string | The case number assigned to the DisciplineIncident by law enforcement or other organization.
$id = 'id_example'; // string | 
$incident_cost = 3.4; // float | The value of any quantifiable monetary loss directly resulting from the discipline incident. Examples include the value of repairs necessitated by vandalism of a school facility, or the value of personnel resources used for repairs or consumed by the incident.
$incident_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The month, day, and year on which the discipline incident occurred.
$incident_description = 'incident_description_example'; // string | The description for an incident.
$incident_time = 'incident_time_example'; // string | An indication of the time of day the incident took place.
$reported_to_law_enforcement = True; // bool | Indicator of whether the incident was reported to law enforcement.
$reporter_name = 'reporter_name_example'; // string | Identifies the reporter of the discipline incident by name.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getDisciplineIncidentsPartitions($number, $min_change_version, $max_change_version, $incident_identifier, $school_id, $incident_location_descriptor, $reporter_description_descriptor, $case_number, $id, $incident_cost, $incident_date, $incident_description, $incident_time, $reported_to_law_enforcement, $reporter_name, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisciplineIncidentsApi->getDisciplineIncidentsPartitions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **number** | **int**| The number of evenly distributed partitions to provide for client-side parallel processing. If unspecified, a reasonable set of partitions will be determined based on the total number of accessible items. | [optional] |
| **min_change_version** | **int**| Used in synchronization to set sequence minimum ChangeVersion | [optional] |
| **max_change_version** | **int**| Used in synchronization to set sequence maximum ChangeVersion | [optional] |
| **incident_identifier** | **string**| A locally assigned unique identifier (within the school or school district) to identify each specific DisciplineIncident or occurrence. The same identifier should be used to document the entire discipline incident even if it included multiple offenses and multiple offenders. | [optional] |
| **school_id** | **int**| The identifier assigned to a school. It must be distinct from any other identifier assigned to educational organizations, such as a LocalEducationAgencyId, to prevent duplication. | [optional] |
| **incident_location_descriptor** | **string**| Identifies where the discipline incident occurred and whether or not it occurred on school. | [optional] |
| **reporter_description_descriptor** | **string**| Information on the type of individual who reported the discipline incident. When known and/or if useful, use a more specific option code (e.g., \&quot;Counselor\&quot; rather than \&quot;Professional Staff\&quot;). | [optional] |
| **case_number** | **string**| The case number assigned to the DisciplineIncident by law enforcement or other organization. | [optional] |
| **id** | **string**|  | [optional] |
| **incident_cost** | **float**| The value of any quantifiable monetary loss directly resulting from the discipline incident. Examples include the value of repairs necessitated by vandalism of a school facility, or the value of personnel resources used for repairs or consumed by the incident. | [optional] |
| **incident_date** | **\DateTime**| The month, day, and year on which the discipline incident occurred. | [optional] |
| **incident_description** | **string**| The description for an incident. | [optional] |
| **incident_time** | **string**| An indication of the time of day the incident took place. | [optional] |
| **reported_to_law_enforcement** | **bool**| Indicator of whether the incident was reported to law enforcement. | [optional] |
| **reporter_name** | **string**| Identifies the reporter of the discipline incident by name. | [optional] |
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

## `keyChangesDisciplineIncidents()`

```php
keyChangesDisciplineIncidents($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiDisciplineIncidentKeyChange[]
```

Retrieves resources key changes based on change version.

This operation is used to retrieve identifying information about resources whose key values have been changed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\DisciplineIncidentsApi(
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
    $result = $apiInstance->keyChangesDisciplineIncidents($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisciplineIncidentsApi->keyChangesDisciplineIncidents: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiDisciplineIncidentKeyChange[]**](../Model/TrackedChangesEdFiDisciplineIncidentKeyChange.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postDisciplineIncident()`

```php
postDisciplineIncident($ed_fi_discipline_incident)
```

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update). Clients should NOT include the resource \"id\" in the JSON body because it will result in an error. The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately. It is recommended to use POST for both create and update except while updating natural key of a resource in which case PUT operation must be used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\DisciplineIncidentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ed_fi_discipline_incident = new \Resources\Model\EdFiDisciplineIncident(); // \Resources\Model\EdFiDisciplineIncident | The JSON representation of the \"disciplineIncident\" resource to be created or updated.

try {
    $apiInstance->postDisciplineIncident($ed_fi_discipline_incident);
} catch (Exception $e) {
    echo 'Exception when calling DisciplineIncidentsApi->postDisciplineIncident: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ed_fi_discipline_incident** | [**\Resources\Model\EdFiDisciplineIncident**](../Model/EdFiDisciplineIncident.md)| The JSON representation of the \&quot;disciplineIncident\&quot; resource to be created or updated. | |

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

## `putDisciplineIncident()`

```php
putDisciplineIncident($id, $ed_fi_discipline_incident, $if_match)
```

Updates a resource based on the resource identifier.

The PUT operation is used to update a resource by identifier. If the resource identifier (\"id\") is provided in the JSON body, it will be ignored. Additionally, this API resource is not configured for cascading natural key updates. Natural key values for this resource cannot be changed using PUT operation, so the recommendation is to use POST as that supports upsert behavior.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\DisciplineIncidentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$ed_fi_discipline_incident = new \Resources\Model\EdFiDisciplineIncident(); // \Resources\Model\EdFiDisciplineIncident | The JSON representation of the \"disciplineIncident\" resource to be created or updated.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try {
    $apiInstance->putDisciplineIncident($id, $ed_fi_discipline_incident, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling DisciplineIncidentsApi->putDisciplineIncident: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **ed_fi_discipline_incident** | [**\Resources\Model\EdFiDisciplineIncident**](../Model/EdFiDisciplineIncident.md)| The JSON representation of the \&quot;disciplineIncident\&quot; resource to be created or updated. | |
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
