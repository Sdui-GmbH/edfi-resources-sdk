# OpenAPI\Client\StudentSpecialEducationProgramEligibilityAssociationsApi

All URIs are relative to https://api.ed-fi.org:443/v7.1/api/data/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteStudentSpecialEducationProgramEligibilityAssociationById()**](StudentSpecialEducationProgramEligibilityAssociationsApi.md#deleteStudentSpecialEducationProgramEligibilityAssociationById) | **DELETE** /ed-fi/studentSpecialEducationProgramEligibilityAssociations/{id} | Deletes an existing resource using the resource identifier. |
| [**deletesStudentSpecialEducationProgramEligibilityAssociations()**](StudentSpecialEducationProgramEligibilityAssociationsApi.md#deletesStudentSpecialEducationProgramEligibilityAssociations) | **GET** /ed-fi/studentSpecialEducationProgramEligibilityAssociations/deletes | Retrieves deleted resources based on change version. |
| [**getStudentSpecialEducationProgramEligibilityAssociations()**](StudentSpecialEducationProgramEligibilityAssociationsApi.md#getStudentSpecialEducationProgramEligibilityAssociations) | **GET** /ed-fi/studentSpecialEducationProgramEligibilityAssociations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern). |
| [**getStudentSpecialEducationProgramEligibilityAssociationsById()**](StudentSpecialEducationProgramEligibilityAssociationsApi.md#getStudentSpecialEducationProgramEligibilityAssociationsById) | **GET** /ed-fi/studentSpecialEducationProgramEligibilityAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern). |
| [**keyChangesStudentSpecialEducationProgramEligibilityAssociations()**](StudentSpecialEducationProgramEligibilityAssociationsApi.md#keyChangesStudentSpecialEducationProgramEligibilityAssociations) | **GET** /ed-fi/studentSpecialEducationProgramEligibilityAssociations/keyChanges | Retrieves resources key changes based on change version. |
| [**postStudentSpecialEducationProgramEligibilityAssociation()**](StudentSpecialEducationProgramEligibilityAssociationsApi.md#postStudentSpecialEducationProgramEligibilityAssociation) | **POST** /ed-fi/studentSpecialEducationProgramEligibilityAssociations | Creates or updates resources based on the natural key values of the supplied resource. |
| [**putStudentSpecialEducationProgramEligibilityAssociation()**](StudentSpecialEducationProgramEligibilityAssociationsApi.md#putStudentSpecialEducationProgramEligibilityAssociation) | **PUT** /ed-fi/studentSpecialEducationProgramEligibilityAssociations/{id} | Updates a resource based on the resource identifier. |


## `deleteStudentSpecialEducationProgramEligibilityAssociationById()`

```php
deleteStudentSpecialEducationProgramEligibilityAssociationById($id, $if_match)
```

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier. If the resource doesn't exist, an error will result (the resource will not be found).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StudentSpecialEducationProgramEligibilityAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try {
    $apiInstance->deleteStudentSpecialEducationProgramEligibilityAssociationById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StudentSpecialEducationProgramEligibilityAssociationsApi->deleteStudentSpecialEducationProgramEligibilityAssociationById: ', $e->getMessage(), PHP_EOL;
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

## `deletesStudentSpecialEducationProgramEligibilityAssociations()`

```php
deletesStudentSpecialEducationProgramEligibilityAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \OpenAPI\Client\Model\TrackedChangesEdFiStudentSpecialEducationProgramEligibilityAssociationDelete[]
```

Retrieves deleted resources based on change version.

This operation is used to retrieve identifying information about resources that have been deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StudentSpecialEducationProgramEligibilityAssociationsApi(
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
    $result = $apiInstance->deletesStudentSpecialEducationProgramEligibilityAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentSpecialEducationProgramEligibilityAssociationsApi->deletesStudentSpecialEducationProgramEligibilityAssociations: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\TrackedChangesEdFiStudentSpecialEducationProgramEligibilityAssociationDelete[]**](../Model/TrackedChangesEdFiStudentSpecialEducationProgramEligibilityAssociationDelete.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStudentSpecialEducationProgramEligibilityAssociations()`

```php
getStudentSpecialEducationProgramEligibilityAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $consent_to_evaluation_received_date, $education_organization_id, $program_name, $program_type_descriptor, $student_unique_id, $eligibility_delay_reason_descriptor, $eligibility_evaluation_type_descriptor, $evaluation_delay_reason_descriptor, $idea_part_descriptor, $consent_to_evaluation_date, $eligibility_conference_date, $eligibility_determination_date, $eligibility_evaluation_date, $evaluation_complete_indicator, $evaluation_delay_days, $evaluation_late_reason, $id, $idea_indicator, $original_eci_services_date, $transition_conference_date, $transition_notification_date, $use_snapshot): \OpenAPI\Client\Model\EdFiStudentSpecialEducationProgramEligibilityAssociation[]
```

Retrieves specific resources using the resource's property values (using the \"Get\" pattern).

This GET operation provides access to resources using the \"Get\" search pattern.  The values of any properties of the resource that are specified will be used to return all matching results (if it exists).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StudentSpecialEducationProgramEligibilityAssociationsApi(
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
$consent_to_evaluation_received_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Indicates the date on which the local education agency received written consent for the evaluation from the student's parent or guardian. This is the first day of the evaluation timeframe.
$education_organization_id = 56; // int | The identifier assigned to an education organization.
$program_name = 'program_name_example'; // string | The formal name of the program of instruction, training, services, or benefits available through federal, state, or local agencies.
$program_type_descriptor = 'program_type_descriptor_example'; // string | The type of program.
$student_unique_id = 'student_unique_id_example'; // string | A unique alphanumeric code assigned to a student.
$eligibility_delay_reason_descriptor = 'eligibility_delay_reason_descriptor_example'; // string | The reason why the eligibility determination was completed beyond the required timeframe.
$eligibility_evaluation_type_descriptor = 'eligibility_evaluation_type_descriptor_example'; // string | Indicates if this is an initial evaluation or a reevaluation.
$evaluation_delay_reason_descriptor = 'evaluation_delay_reason_descriptor_example'; // string | Refers to the justification as to why the evaluation report was completed beyond the state-established timeframe. This descriptor field will have allowed reasons as descriptor values.
$idea_part_descriptor = 'idea_part_descriptor_example'; // string | Indicates if the evaluation is done under Part B IDEA or Part C IDEA.
$consent_to_evaluation_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date on which the student's parent gave a consent (Parent Consent Date).
$eligibility_conference_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The month, day, and year when the eligibility conference is held between the parent(s)/guardian(s) and the educational organization responsible staff member(s) to review and make decision on special education related services eligibility.
$eligibility_determination_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Indicates the month, day, and year the local education agency (LEA) held the admission, review, and dismissal committee meeting regarding the child's eligibility determination for special education and related services. An individualized education plan (IEP) would be developed and implemented for a child admitted into special education on this same date.
$eligibility_evaluation_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Indicates the month, day, and year when the written individual evaluation report was completed.
$evaluation_complete_indicator = True; // bool | Indicates the evaluation completed status.
$evaluation_delay_days = 56; // int | Indicates the number of student absences, if any, beginning the first instructional day following the date on which the local education agency (LEA) received written parental or guardian consent for the evaluation.
$evaluation_late_reason = 'evaluation_late_reason_example'; // string | Refers to additional information for delay in doing the evaluation.
$id = 'id_example'; // string | 
$idea_indicator = True; // bool | Indicates whether or not the student was determined eligible as a result of an evaluation.
$original_eci_services_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The month, date, and year when an infant or toddler, from birth through age 2, began participating in the early childhood intervention (ECI) program.
$transition_conference_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Indicates the month, day, and year when the transition conference was held (for a child receiving early childhood intervention (ECI) services) among the lead agency, the family, and the local education agency (LEA) where the child resides to discuss the child's potential eligibility for early childhood special education (ECSE) services.
$transition_notification_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Indicates the month, day, and year the LEA Notification of Potentially Eligible for Special Education Services was sent by the early childhood intervention (ECI) contractor to the local education agency (LEA) to notify them that a child enrolled in ECI will shortly reach the age of eligibility for Part B services and the child is potentially eligible for services under Part B, early childhood special education (ECSE). The LEA Notification constitutes a referral to the LEA for an initial evaluation and eligibility determination of the child which the parent or guardian may opt out from the referral.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getStudentSpecialEducationProgramEligibilityAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $consent_to_evaluation_received_date, $education_organization_id, $program_name, $program_type_descriptor, $student_unique_id, $eligibility_delay_reason_descriptor, $eligibility_evaluation_type_descriptor, $evaluation_delay_reason_descriptor, $idea_part_descriptor, $consent_to_evaluation_date, $eligibility_conference_date, $eligibility_determination_date, $eligibility_evaluation_date, $evaluation_complete_indicator, $evaluation_delay_days, $evaluation_late_reason, $id, $idea_indicator, $original_eci_services_date, $transition_conference_date, $transition_notification_date, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentSpecialEducationProgramEligibilityAssociationsApi->getStudentSpecialEducationProgramEligibilityAssociations: ', $e->getMessage(), PHP_EOL;
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
| **consent_to_evaluation_received_date** | **\DateTime**| Indicates the date on which the local education agency received written consent for the evaluation from the student&#39;s parent or guardian. This is the first day of the evaluation timeframe. | [optional] |
| **education_organization_id** | **int**| The identifier assigned to an education organization. | [optional] |
| **program_name** | **string**| The formal name of the program of instruction, training, services, or benefits available through federal, state, or local agencies. | [optional] |
| **program_type_descriptor** | **string**| The type of program. | [optional] |
| **student_unique_id** | **string**| A unique alphanumeric code assigned to a student. | [optional] |
| **eligibility_delay_reason_descriptor** | **string**| The reason why the eligibility determination was completed beyond the required timeframe. | [optional] |
| **eligibility_evaluation_type_descriptor** | **string**| Indicates if this is an initial evaluation or a reevaluation. | [optional] |
| **evaluation_delay_reason_descriptor** | **string**| Refers to the justification as to why the evaluation report was completed beyond the state-established timeframe. This descriptor field will have allowed reasons as descriptor values. | [optional] |
| **idea_part_descriptor** | **string**| Indicates if the evaluation is done under Part B IDEA or Part C IDEA. | [optional] |
| **consent_to_evaluation_date** | **\DateTime**| The date on which the student&#39;s parent gave a consent (Parent Consent Date). | [optional] |
| **eligibility_conference_date** | **\DateTime**| The month, day, and year when the eligibility conference is held between the parent(s)/guardian(s) and the educational organization responsible staff member(s) to review and make decision on special education related services eligibility. | [optional] |
| **eligibility_determination_date** | **\DateTime**| Indicates the month, day, and year the local education agency (LEA) held the admission, review, and dismissal committee meeting regarding the child&#39;s eligibility determination for special education and related services. An individualized education plan (IEP) would be developed and implemented for a child admitted into special education on this same date. | [optional] |
| **eligibility_evaluation_date** | **\DateTime**| Indicates the month, day, and year when the written individual evaluation report was completed. | [optional] |
| **evaluation_complete_indicator** | **bool**| Indicates the evaluation completed status. | [optional] |
| **evaluation_delay_days** | **int**| Indicates the number of student absences, if any, beginning the first instructional day following the date on which the local education agency (LEA) received written parental or guardian consent for the evaluation. | [optional] |
| **evaluation_late_reason** | **string**| Refers to additional information for delay in doing the evaluation. | [optional] |
| **id** | **string**|  | [optional] |
| **idea_indicator** | **bool**| Indicates whether or not the student was determined eligible as a result of an evaluation. | [optional] |
| **original_eci_services_date** | **\DateTime**| The month, date, and year when an infant or toddler, from birth through age 2, began participating in the early childhood intervention (ECI) program. | [optional] |
| **transition_conference_date** | **\DateTime**| Indicates the month, day, and year when the transition conference was held (for a child receiving early childhood intervention (ECI) services) among the lead agency, the family, and the local education agency (LEA) where the child resides to discuss the child&#39;s potential eligibility for early childhood special education (ECSE) services. | [optional] |
| **transition_notification_date** | **\DateTime**| Indicates the month, day, and year the LEA Notification of Potentially Eligible for Special Education Services was sent by the early childhood intervention (ECI) contractor to the local education agency (LEA) to notify them that a child enrolled in ECI will shortly reach the age of eligibility for Part B services and the child is potentially eligible for services under Part B, early childhood special education (ECSE). The LEA Notification constitutes a referral to the LEA for an initial evaluation and eligibility determination of the child which the parent or guardian may opt out from the referral. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\EdFiStudentSpecialEducationProgramEligibilityAssociation[]**](../Model/EdFiStudentSpecialEducationProgramEligibilityAssociation.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStudentSpecialEducationProgramEligibilityAssociationsById()`

```php
getStudentSpecialEducationProgramEligibilityAssociationsById($id, $if_none_match, $use_snapshot): \OpenAPI\Client\Model\EdFiStudentSpecialEducationProgramEligibilityAssociation
```

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StudentSpecialEducationProgramEligibilityAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_none_match = 'if_none_match_example'; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getStudentSpecialEducationProgramEligibilityAssociationsById($id, $if_none_match, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentSpecialEducationProgramEligibilityAssociationsApi->getStudentSpecialEducationProgramEligibilityAssociationsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\EdFiStudentSpecialEducationProgramEligibilityAssociation**](../Model/EdFiStudentSpecialEducationProgramEligibilityAssociation.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `keyChangesStudentSpecialEducationProgramEligibilityAssociations()`

```php
keyChangesStudentSpecialEducationProgramEligibilityAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \OpenAPI\Client\Model\TrackedChangesEdFiStudentSpecialEducationProgramEligibilityAssociationKeyChange[]
```

Retrieves resources key changes based on change version.

This operation is used to retrieve identifying information about resources whose key values have been changed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StudentSpecialEducationProgramEligibilityAssociationsApi(
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
    $result = $apiInstance->keyChangesStudentSpecialEducationProgramEligibilityAssociations($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentSpecialEducationProgramEligibilityAssociationsApi->keyChangesStudentSpecialEducationProgramEligibilityAssociations: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\TrackedChangesEdFiStudentSpecialEducationProgramEligibilityAssociationKeyChange[]**](../Model/TrackedChangesEdFiStudentSpecialEducationProgramEligibilityAssociationKeyChange.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postStudentSpecialEducationProgramEligibilityAssociation()`

```php
postStudentSpecialEducationProgramEligibilityAssociation($ed_fi_student_special_education_program_eligibility_association)
```

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update). Clients should NOT include the resource \"id\" in the JSON body because it will result in an error. The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately. It is recommended to use POST for both create and update except while updating natural key of a resource in which case PUT operation must be used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StudentSpecialEducationProgramEligibilityAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ed_fi_student_special_education_program_eligibility_association = new \OpenAPI\Client\Model\EdFiStudentSpecialEducationProgramEligibilityAssociation(); // \OpenAPI\Client\Model\EdFiStudentSpecialEducationProgramEligibilityAssociation | The JSON representation of the \"studentSpecialEducationProgramEligibilityAssociation\" resource to be created or updated.

try {
    $apiInstance->postStudentSpecialEducationProgramEligibilityAssociation($ed_fi_student_special_education_program_eligibility_association);
} catch (Exception $e) {
    echo 'Exception when calling StudentSpecialEducationProgramEligibilityAssociationsApi->postStudentSpecialEducationProgramEligibilityAssociation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ed_fi_student_special_education_program_eligibility_association** | [**\OpenAPI\Client\Model\EdFiStudentSpecialEducationProgramEligibilityAssociation**](../Model/EdFiStudentSpecialEducationProgramEligibilityAssociation.md)| The JSON representation of the \&quot;studentSpecialEducationProgramEligibilityAssociation\&quot; resource to be created or updated. | |

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

## `putStudentSpecialEducationProgramEligibilityAssociation()`

```php
putStudentSpecialEducationProgramEligibilityAssociation($id, $ed_fi_student_special_education_program_eligibility_association, $if_match)
```

Updates a resource based on the resource identifier.

The PUT operation is used to update a resource by identifier. If the resource identifier (\"id\") is provided in the JSON body, it will be ignored. Additionally, this API resource is not configured for cascading natural key updates. Natural key values for this resource cannot be changed using PUT operation, so the recommendation is to use POST as that supports upsert behavior.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StudentSpecialEducationProgramEligibilityAssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$ed_fi_student_special_education_program_eligibility_association = new \OpenAPI\Client\Model\EdFiStudentSpecialEducationProgramEligibilityAssociation(); // \OpenAPI\Client\Model\EdFiStudentSpecialEducationProgramEligibilityAssociation | The JSON representation of the \"studentSpecialEducationProgramEligibilityAssociation\" resource to be created or updated.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try {
    $apiInstance->putStudentSpecialEducationProgramEligibilityAssociation($id, $ed_fi_student_special_education_program_eligibility_association, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StudentSpecialEducationProgramEligibilityAssociationsApi->putStudentSpecialEducationProgramEligibilityAssociation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **ed_fi_student_special_education_program_eligibility_association** | [**\OpenAPI\Client\Model\EdFiStudentSpecialEducationProgramEligibilityAssociation**](../Model/EdFiStudentSpecialEducationProgramEligibilityAssociation.md)| The JSON representation of the \&quot;studentSpecialEducationProgramEligibilityAssociation\&quot; resource to be created or updated. | |
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
