# Resources\StudentMigrantEducationProgramAssociationsApi

All URIs are relative to https://api.ed-fi.org:443/v7.2/api/data/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteStudentMigrantEducationProgramAssociationById()**](StudentMigrantEducationProgramAssociationsApi.md#deleteStudentMigrantEducationProgramAssociationById) | **DELETE** /ed-fi/studentMigrantEducationProgramAssociations/{id} | Deletes an existing resource using the resource identifier. |
| [**deletesStudentMigrantEducationProgramAssociations()**](StudentMigrantEducationProgramAssociationsApi.md#deletesStudentMigrantEducationProgramAssociations) | **GET** /ed-fi/studentMigrantEducationProgramAssociations/deletes | Retrieves deleted resources based on change version. |
| [**getStudentMigrantEducationProgramAssociations()**](StudentMigrantEducationProgramAssociationsApi.md#getStudentMigrantEducationProgramAssociations) | **GET** /ed-fi/studentMigrantEducationProgramAssociations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern). |
| [**getStudentMigrantEducationProgramAssociationsById()**](StudentMigrantEducationProgramAssociationsApi.md#getStudentMigrantEducationProgramAssociationsById) | **GET** /ed-fi/studentMigrantEducationProgramAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern). |
| [**keyChangesStudentMigrantEducationProgramAssociations()**](StudentMigrantEducationProgramAssociationsApi.md#keyChangesStudentMigrantEducationProgramAssociations) | **GET** /ed-fi/studentMigrantEducationProgramAssociations/keyChanges | Retrieves resources key changes based on change version. |
| [**postStudentMigrantEducationProgramAssociation()**](StudentMigrantEducationProgramAssociationsApi.md#postStudentMigrantEducationProgramAssociation) | **POST** /ed-fi/studentMigrantEducationProgramAssociations | Creates or updates resources based on the natural key values of the supplied resource. |
| [**putStudentMigrantEducationProgramAssociation()**](StudentMigrantEducationProgramAssociationsApi.md#putStudentMigrantEducationProgramAssociation) | **PUT** /ed-fi/studentMigrantEducationProgramAssociations/{id} | Updates a resource based on the resource identifier. |


## `deleteStudentMigrantEducationProgramAssociationById()`

```php
deleteStudentMigrantEducationProgramAssociationById($id, $if_match)
```

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier. If the resource doesn't exist, an error will result (the resource will not be found).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentMigrantEducationProgramAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try {
    $apiInstance->deleteStudentMigrantEducationProgramAssociationById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StudentMigrantEducationProgramAssociationsApi->deleteStudentMigrantEducationProgramAssociationById: ', $e->getMessage(), PHP_EOL;
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

## `deletesStudentMigrantEducationProgramAssociations()`

```php
deletesStudentMigrantEducationProgramAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiStudentMigrantEducationProgramAssociationDelete[]
```

Retrieves deleted resources based on change version.

This operation is used to retrieve identifying information about resources that have been deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentMigrantEducationProgramAssociationsApi(
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
    $result = $apiInstance->deletesStudentMigrantEducationProgramAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentMigrantEducationProgramAssociationsApi->deletesStudentMigrantEducationProgramAssociations: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiStudentMigrantEducationProgramAssociationDelete[]**](../Model/TrackedChangesEdFiStudentMigrantEducationProgramAssociationDelete.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStudentMigrantEducationProgramAssociations()`

```php
getStudentMigrantEducationProgramAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $begin_date, $education_organization_id, $program_education_organization_id, $program_name, $program_type_descriptor, $student_unique_id, $continuation_of_services_reason_descriptor, $eligibility_expiration_date, $last_qualifying_move, $priority_for_services, $qualifying_arrival_date, $state_residency_date, $us_initial_entry, $us_initial_school_entry, $us_most_recent_entry, $id, $use_snapshot): \Resources\Model\EdFiStudentMigrantEducationProgramAssociation[]
```

Retrieves specific resources using the resource's property values (using the \"Get\" pattern).

This GET operation provides access to resources using the \"Get\" search pattern.  The values of any properties of the resource that are specified will be used to return all matching results (if it exists).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentMigrantEducationProgramAssociationsApi(
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
$begin_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The earliest date the student is involved with the program. Typically, this is the date the student becomes eligible for the program.
$education_organization_id = 56; // int | The identifier assigned to an education organization.
$program_education_organization_id = 56; // int | The identifier assigned to an education organization.
$program_name = 'program_name_example'; // string | The formal name of the program of instruction, training, services, or benefits available through federal, state, or local agencies.
$program_type_descriptor = 'program_type_descriptor_example'; // string | The type of program.
$student_unique_id = 'student_unique_id_example'; // string | A unique alphanumeric code assigned to a student.
$continuation_of_services_reason_descriptor = 'continuation_of_services_reason_descriptor_example'; // string | The \"continuation of services\" provision found in Section 1304(e) of the statute provides that (1) a child who ceases to be a migratory child during a school term shall be eligible for services until the end of such term; (2) a child who is no longer a migratory child may continue to receive services for one additional school year, but only if comparable services are not available through other programs; and (3) secondary school students who were eligible for services in secondary school may continue to be served through credit accrual programs until graduation. Only students who received services at any time during their 36 month eligibility period may continue to receive services (not necessarily the same service).
$eligibility_expiration_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The eligibility expiration date is used to determine end of eligibility and to account for a child's eligibility expiring earlier than 36 months from the child's QAD. A child's eligibility would end earlier than 36 months from the child's QAD, if the child is no longer entitled to a free public education (e.g., graduated with a high school diploma, obtained a high school equivalency diploma (HSED), or for other reasons as determined by states' requirements), or if the child passes away.
$last_qualifying_move = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date the last qualifying move occurred; used to compute MEP status.
$priority_for_services = True; // bool | Report migratory children who are classified as having \"priority for services\" because they are failing, or most at risk of failing to meet the state's challenging state academic content standards and challenging state student academic achievement standards, and their education has been interrupted during the regular school year.
$qualifying_arrival_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The qualifying arrival date (QAD) is the date the child joins the worker who has already moved, or the date when the worker joins the child who has already moved. The QAD is the date that the child's eligibility for the MEP begins. The QAD is not affected by subsequent non-qualifying moves.
$state_residency_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The verified state residency for the student.
$us_initial_entry = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The month, day, and year on which the student first entered the U.S.
$us_initial_school_entry = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The month, day, and year on which the student first entered a U.S. school.
$us_most_recent_entry = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The month, day, and year of the student's most recent entry into the U.S.
$id = 'id_example'; // string | 
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getStudentMigrantEducationProgramAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $begin_date, $education_organization_id, $program_education_organization_id, $program_name, $program_type_descriptor, $student_unique_id, $continuation_of_services_reason_descriptor, $eligibility_expiration_date, $last_qualifying_move, $priority_for_services, $qualifying_arrival_date, $state_residency_date, $us_initial_entry, $us_initial_school_entry, $us_most_recent_entry, $id, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentMigrantEducationProgramAssociationsApi->getStudentMigrantEducationProgramAssociations: ', $e->getMessage(), PHP_EOL;
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
| **begin_date** | **\DateTime**| The earliest date the student is involved with the program. Typically, this is the date the student becomes eligible for the program. | [optional] |
| **education_organization_id** | **int**| The identifier assigned to an education organization. | [optional] |
| **program_education_organization_id** | **int**| The identifier assigned to an education organization. | [optional] |
| **program_name** | **string**| The formal name of the program of instruction, training, services, or benefits available through federal, state, or local agencies. | [optional] |
| **program_type_descriptor** | **string**| The type of program. | [optional] |
| **student_unique_id** | **string**| A unique alphanumeric code assigned to a student. | [optional] |
| **continuation_of_services_reason_descriptor** | **string**| The \&quot;continuation of services\&quot; provision found in Section 1304(e) of the statute provides that (1) a child who ceases to be a migratory child during a school term shall be eligible for services until the end of such term; (2) a child who is no longer a migratory child may continue to receive services for one additional school year, but only if comparable services are not available through other programs; and (3) secondary school students who were eligible for services in secondary school may continue to be served through credit accrual programs until graduation. Only students who received services at any time during their 36 month eligibility period may continue to receive services (not necessarily the same service). | [optional] |
| **eligibility_expiration_date** | **\DateTime**| The eligibility expiration date is used to determine end of eligibility and to account for a child&#39;s eligibility expiring earlier than 36 months from the child&#39;s QAD. A child&#39;s eligibility would end earlier than 36 months from the child&#39;s QAD, if the child is no longer entitled to a free public education (e.g., graduated with a high school diploma, obtained a high school equivalency diploma (HSED), or for other reasons as determined by states&#39; requirements), or if the child passes away. | [optional] |
| **last_qualifying_move** | **\DateTime**| Date the last qualifying move occurred; used to compute MEP status. | [optional] |
| **priority_for_services** | **bool**| Report migratory children who are classified as having \&quot;priority for services\&quot; because they are failing, or most at risk of failing to meet the state&#39;s challenging state academic content standards and challenging state student academic achievement standards, and their education has been interrupted during the regular school year. | [optional] |
| **qualifying_arrival_date** | **\DateTime**| The qualifying arrival date (QAD) is the date the child joins the worker who has already moved, or the date when the worker joins the child who has already moved. The QAD is the date that the child&#39;s eligibility for the MEP begins. The QAD is not affected by subsequent non-qualifying moves. | [optional] |
| **state_residency_date** | **\DateTime**| The verified state residency for the student. | [optional] |
| **us_initial_entry** | **\DateTime**| The month, day, and year on which the student first entered the U.S. | [optional] |
| **us_initial_school_entry** | **\DateTime**| The month, day, and year on which the student first entered a U.S. school. | [optional] |
| **us_most_recent_entry** | **\DateTime**| The month, day, and year of the student&#39;s most recent entry into the U.S. | [optional] |
| **id** | **string**|  | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiStudentMigrantEducationProgramAssociation[]**](../Model/EdFiStudentMigrantEducationProgramAssociation.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStudentMigrantEducationProgramAssociationsById()`

```php
getStudentMigrantEducationProgramAssociationsById($id, $if_none_match, $use_snapshot): \Resources\Model\EdFiStudentMigrantEducationProgramAssociation
```

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentMigrantEducationProgramAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_none_match = 'if_none_match_example'; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getStudentMigrantEducationProgramAssociationsById($id, $if_none_match, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentMigrantEducationProgramAssociationsApi->getStudentMigrantEducationProgramAssociationsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiStudentMigrantEducationProgramAssociation**](../Model/EdFiStudentMigrantEducationProgramAssociation.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `keyChangesStudentMigrantEducationProgramAssociations()`

```php
keyChangesStudentMigrantEducationProgramAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiStudentMigrantEducationProgramAssociationKeyChange[]
```

Retrieves resources key changes based on change version.

This operation is used to retrieve identifying information about resources whose key values have been changed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentMigrantEducationProgramAssociationsApi(
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
    $result = $apiInstance->keyChangesStudentMigrantEducationProgramAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentMigrantEducationProgramAssociationsApi->keyChangesStudentMigrantEducationProgramAssociations: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiStudentMigrantEducationProgramAssociationKeyChange[]**](../Model/TrackedChangesEdFiStudentMigrantEducationProgramAssociationKeyChange.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postStudentMigrantEducationProgramAssociation()`

```php
postStudentMigrantEducationProgramAssociation($ed_fi_student_migrant_education_program_association)
```

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update). Clients should NOT include the resource \"id\" in the JSON body because it will result in an error. The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately. It is recommended to use POST for both create and update except while updating natural key of a resource in which case PUT operation must be used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentMigrantEducationProgramAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ed_fi_student_migrant_education_program_association = new \Resources\Model\EdFiStudentMigrantEducationProgramAssociation(); // \Resources\Model\EdFiStudentMigrantEducationProgramAssociation | The JSON representation of the \"studentMigrantEducationProgramAssociation\" resource to be created or updated.

try {
    $apiInstance->postStudentMigrantEducationProgramAssociation($ed_fi_student_migrant_education_program_association);
} catch (Exception $e) {
    echo 'Exception when calling StudentMigrantEducationProgramAssociationsApi->postStudentMigrantEducationProgramAssociation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ed_fi_student_migrant_education_program_association** | [**\Resources\Model\EdFiStudentMigrantEducationProgramAssociation**](../Model/EdFiStudentMigrantEducationProgramAssociation.md)| The JSON representation of the \&quot;studentMigrantEducationProgramAssociation\&quot; resource to be created or updated. | |

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

## `putStudentMigrantEducationProgramAssociation()`

```php
putStudentMigrantEducationProgramAssociation($id, $ed_fi_student_migrant_education_program_association, $if_match)
```

Updates a resource based on the resource identifier.

The PUT operation is used to update a resource by identifier. If the resource identifier (\"id\") is provided in the JSON body, it will be ignored. Additionally, this API resource is not configured for cascading natural key updates. Natural key values for this resource cannot be changed using PUT operation, so the recommendation is to use POST as that supports upsert behavior.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentMigrantEducationProgramAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$ed_fi_student_migrant_education_program_association = new \Resources\Model\EdFiStudentMigrantEducationProgramAssociation(); // \Resources\Model\EdFiStudentMigrantEducationProgramAssociation | The JSON representation of the \"studentMigrantEducationProgramAssociation\" resource to be created or updated.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try {
    $apiInstance->putStudentMigrantEducationProgramAssociation($id, $ed_fi_student_migrant_education_program_association, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StudentMigrantEducationProgramAssociationsApi->putStudentMigrantEducationProgramAssociation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **ed_fi_student_migrant_education_program_association** | [**\Resources\Model\EdFiStudentMigrantEducationProgramAssociation**](../Model/EdFiStudentMigrantEducationProgramAssociation.md)| The JSON representation of the \&quot;studentMigrantEducationProgramAssociation\&quot; resource to be created or updated. | |
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
