# Resources\StudentSpecialEducationProgramAssociationsApi

All URIs are relative to https://api.ed-fi.org:443/v7.1/api/data/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteStudentSpecialEducationProgramAssociationById()**](StudentSpecialEducationProgramAssociationsApi.md#deleteStudentSpecialEducationProgramAssociationById) | **DELETE** /ed-fi/studentSpecialEducationProgramAssociations/{id} | Deletes an existing resource using the resource identifier. |
| [**deletesStudentSpecialEducationProgramAssociations()**](StudentSpecialEducationProgramAssociationsApi.md#deletesStudentSpecialEducationProgramAssociations) | **GET** /ed-fi/studentSpecialEducationProgramAssociations/deletes | Retrieves deleted resources based on change version. |
| [**getStudentSpecialEducationProgramAssociations()**](StudentSpecialEducationProgramAssociationsApi.md#getStudentSpecialEducationProgramAssociations) | **GET** /ed-fi/studentSpecialEducationProgramAssociations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern). |
| [**getStudentSpecialEducationProgramAssociationsById()**](StudentSpecialEducationProgramAssociationsApi.md#getStudentSpecialEducationProgramAssociationsById) | **GET** /ed-fi/studentSpecialEducationProgramAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern). |
| [**keyChangesStudentSpecialEducationProgramAssociations()**](StudentSpecialEducationProgramAssociationsApi.md#keyChangesStudentSpecialEducationProgramAssociations) | **GET** /ed-fi/studentSpecialEducationProgramAssociations/keyChanges | Retrieves resources key changes based on change version. |
| [**postStudentSpecialEducationProgramAssociation()**](StudentSpecialEducationProgramAssociationsApi.md#postStudentSpecialEducationProgramAssociation) | **POST** /ed-fi/studentSpecialEducationProgramAssociations | Creates or updates resources based on the natural key values of the supplied resource. |
| [**putStudentSpecialEducationProgramAssociation()**](StudentSpecialEducationProgramAssociationsApi.md#putStudentSpecialEducationProgramAssociation) | **PUT** /ed-fi/studentSpecialEducationProgramAssociations/{id} | Updates a resource based on the resource identifier. |


## `deleteStudentSpecialEducationProgramAssociationById()`

```php
deleteStudentSpecialEducationProgramAssociationById($id, $if_match)
```

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier. If the resource doesn't exist, an error will result (the resource will not be found).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentSpecialEducationProgramAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try {
    $apiInstance->deleteStudentSpecialEducationProgramAssociationById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StudentSpecialEducationProgramAssociationsApi->deleteStudentSpecialEducationProgramAssociationById: ', $e->getMessage(), PHP_EOL;
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

## `deletesStudentSpecialEducationProgramAssociations()`

```php
deletesStudentSpecialEducationProgramAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiStudentSpecialEducationProgramAssociationDelete[]
```

Retrieves deleted resources based on change version.

This operation is used to retrieve identifying information about resources that have been deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentSpecialEducationProgramAssociationsApi(
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
    $result = $apiInstance->deletesStudentSpecialEducationProgramAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentSpecialEducationProgramAssociationsApi->deletesStudentSpecialEducationProgramAssociations: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiStudentSpecialEducationProgramAssociationDelete[]**](../Model/TrackedChangesEdFiStudentSpecialEducationProgramAssociationDelete.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStudentSpecialEducationProgramAssociations()`

```php
getStudentSpecialEducationProgramAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $begin_date, $education_organization_id, $program_education_organization_id, $program_name, $program_type_descriptor, $student_unique_id, $special_education_exit_reason_descriptor, $special_education_setting_descriptor, $idea_eligibility, $iep_begin_date, $iep_end_date, $iep_review_date, $last_evaluation_date, $medically_fragile, $multiply_disabled, $school_hours_per_week, $special_education_exit_date, $special_education_exit_explained, $special_education_hours_per_week, $use_snapshot): \Resources\Model\EdFiStudentSpecialEducationProgramAssociation[]
```

Retrieves specific resources using the resource's property values (using the \"Get\" pattern).

This GET operation provides access to resources using the \"Get\" search pattern.  The values of any properties of the resource that are specified will be used to return all matching results (if it exists).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentSpecialEducationProgramAssociationsApi(
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
$special_education_exit_reason_descriptor = 'special_education_exit_reason_descriptor_example'; // string | The reason why a person stops receiving special education services.
$special_education_setting_descriptor = 'special_education_setting_descriptor_example'; // string | The major instructional setting (more than 50 percent of a student's special education program).
$idea_eligibility = True; // bool | Indicator of the eligibility of the student to receive special education services according to the Individuals with Disabilities Education Act (IDEA).
$iep_begin_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The effective date of the most recent IEP.
$iep_end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date of the most recent IEP.
$iep_review_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date of the last IEP review.
$last_evaluation_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date of the last special education evaluation.
$medically_fragile = True; // bool | Indicates whether the student receiving special education and related services is: 1) in the age range of birth to 22 years, and 2) has a serious, ongoing illness or a chronic condition that has lasted or is anticipated to last at least 12 or more months or has required at least one month of hospitalization, and that requires daily, ongoing medical treatments and monitoring by appropriately trained personnel which may include parents or other family members, and 3) requires the routine use of medical device or of assistive technology to compensate for the loss of usefulness of a body function needed to participate in activities of daily living, and 4) lives with ongoing threat to his or her continued well-being. Aligns with federal requirements.
$multiply_disabled = True; // bool | Indicates whether the student receiving special education and related services has been designated as multiply disabled by the admission, review, and dismissal committee as aligned with federal requirements.
$school_hours_per_week = 3.4; // float | Indicate the total number of hours of instructional time per week for the school that the student attends.
$special_education_exit_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The  month, day and year on which a person stops receiving special education services.
$special_education_exit_explained = 'special_education_exit_explained_example'; // string | Explanation on why a person stops receiving special education services.
$special_education_hours_per_week = 3.4; // float | The number of hours per week for special education instruction and therapy.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getStudentSpecialEducationProgramAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $begin_date, $education_organization_id, $program_education_organization_id, $program_name, $program_type_descriptor, $student_unique_id, $special_education_exit_reason_descriptor, $special_education_setting_descriptor, $idea_eligibility, $iep_begin_date, $iep_end_date, $iep_review_date, $last_evaluation_date, $medically_fragile, $multiply_disabled, $school_hours_per_week, $special_education_exit_date, $special_education_exit_explained, $special_education_hours_per_week, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentSpecialEducationProgramAssociationsApi->getStudentSpecialEducationProgramAssociations: ', $e->getMessage(), PHP_EOL;
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
| **special_education_exit_reason_descriptor** | **string**| The reason why a person stops receiving special education services. | [optional] |
| **special_education_setting_descriptor** | **string**| The major instructional setting (more than 50 percent of a student&#39;s special education program). | [optional] |
| **idea_eligibility** | **bool**| Indicator of the eligibility of the student to receive special education services according to the Individuals with Disabilities Education Act (IDEA). | [optional] |
| **iep_begin_date** | **\DateTime**| The effective date of the most recent IEP. | [optional] |
| **iep_end_date** | **\DateTime**| The end date of the most recent IEP. | [optional] |
| **iep_review_date** | **\DateTime**| The date of the last IEP review. | [optional] |
| **last_evaluation_date** | **\DateTime**| The date of the last special education evaluation. | [optional] |
| **medically_fragile** | **bool**| Indicates whether the student receiving special education and related services is: 1) in the age range of birth to 22 years, and 2) has a serious, ongoing illness or a chronic condition that has lasted or is anticipated to last at least 12 or more months or has required at least one month of hospitalization, and that requires daily, ongoing medical treatments and monitoring by appropriately trained personnel which may include parents or other family members, and 3) requires the routine use of medical device or of assistive technology to compensate for the loss of usefulness of a body function needed to participate in activities of daily living, and 4) lives with ongoing threat to his or her continued well-being. Aligns with federal requirements. | [optional] |
| **multiply_disabled** | **bool**| Indicates whether the student receiving special education and related services has been designated as multiply disabled by the admission, review, and dismissal committee as aligned with federal requirements. | [optional] |
| **school_hours_per_week** | **float**| Indicate the total number of hours of instructional time per week for the school that the student attends. | [optional] |
| **special_education_exit_date** | **\DateTime**| The  month, day and year on which a person stops receiving special education services. | [optional] |
| **special_education_exit_explained** | **string**| Explanation on why a person stops receiving special education services. | [optional] |
| **special_education_hours_per_week** | **float**| The number of hours per week for special education instruction and therapy. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiStudentSpecialEducationProgramAssociation[]**](../Model/EdFiStudentSpecialEducationProgramAssociation.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStudentSpecialEducationProgramAssociationsById()`

```php
getStudentSpecialEducationProgramAssociationsById($id, $if_none_match, $use_snapshot): \Resources\Model\EdFiStudentSpecialEducationProgramAssociation
```

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentSpecialEducationProgramAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_none_match = 'if_none_match_example'; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getStudentSpecialEducationProgramAssociationsById($id, $if_none_match, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentSpecialEducationProgramAssociationsApi->getStudentSpecialEducationProgramAssociationsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiStudentSpecialEducationProgramAssociation**](../Model/EdFiStudentSpecialEducationProgramAssociation.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `keyChangesStudentSpecialEducationProgramAssociations()`

```php
keyChangesStudentSpecialEducationProgramAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiStudentSpecialEducationProgramAssociationKeyChange[]
```

Retrieves resources key changes based on change version.

This operation is used to retrieve identifying information about resources whose key values have been changed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentSpecialEducationProgramAssociationsApi(
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
    $result = $apiInstance->keyChangesStudentSpecialEducationProgramAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentSpecialEducationProgramAssociationsApi->keyChangesStudentSpecialEducationProgramAssociations: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiStudentSpecialEducationProgramAssociationKeyChange[]**](../Model/TrackedChangesEdFiStudentSpecialEducationProgramAssociationKeyChange.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postStudentSpecialEducationProgramAssociation()`

```php
postStudentSpecialEducationProgramAssociation($ed_fi_student_special_education_program_association)
```

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update). Clients should NOT include the resource \"id\" in the JSON body because it will result in an error. The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately. It is recommended to use POST for both create and update except while updating natural key of a resource in which case PUT operation must be used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentSpecialEducationProgramAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ed_fi_student_special_education_program_association = new \Resources\Model\EdFiStudentSpecialEducationProgramAssociation(); // \Resources\Model\EdFiStudentSpecialEducationProgramAssociation | The JSON representation of the \"studentSpecialEducationProgramAssociation\" resource to be created or updated.

try {
    $apiInstance->postStudentSpecialEducationProgramAssociation($ed_fi_student_special_education_program_association);
} catch (Exception $e) {
    echo 'Exception when calling StudentSpecialEducationProgramAssociationsApi->postStudentSpecialEducationProgramAssociation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ed_fi_student_special_education_program_association** | [**\Resources\Model\EdFiStudentSpecialEducationProgramAssociation**](../Model/EdFiStudentSpecialEducationProgramAssociation.md)| The JSON representation of the \&quot;studentSpecialEducationProgramAssociation\&quot; resource to be created or updated. | |

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

## `putStudentSpecialEducationProgramAssociation()`

```php
putStudentSpecialEducationProgramAssociation($id, $ed_fi_student_special_education_program_association, $if_match)
```

Updates a resource based on the resource identifier.

The PUT operation is used to update a resource by identifier. If the resource identifier (\"id\") is provided in the JSON body, it will be ignored. Additionally, this API resource is not configured for cascading natural key updates. Natural key values for this resource cannot be changed using PUT operation, so the recommendation is to use POST as that supports upsert behavior.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\StudentSpecialEducationProgramAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$ed_fi_student_special_education_program_association = new \Resources\Model\EdFiStudentSpecialEducationProgramAssociation(); // \Resources\Model\EdFiStudentSpecialEducationProgramAssociation | The JSON representation of the \"studentSpecialEducationProgramAssociation\" resource to be created or updated.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try {
    $apiInstance->putStudentSpecialEducationProgramAssociation($id, $ed_fi_student_special_education_program_association, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StudentSpecialEducationProgramAssociationsApi->putStudentSpecialEducationProgramAssociation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **ed_fi_student_special_education_program_association** | [**\Resources\Model\EdFiStudentSpecialEducationProgramAssociation**](../Model/EdFiStudentSpecialEducationProgramAssociation.md)| The JSON representation of the \&quot;studentSpecialEducationProgramAssociation\&quot; resource to be created or updated. | |
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
