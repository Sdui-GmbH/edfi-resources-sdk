# Resources\AssessmentsApi

All URIs are relative to https://api.ed-fi.org:443/v7.3/api/data/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteAssessmentById()**](AssessmentsApi.md#deleteAssessmentById) | **DELETE** /ed-fi/assessments/{id} | Deletes an existing resource using the resource identifier. |
| [**deletesAssessments()**](AssessmentsApi.md#deletesAssessments) | **GET** /ed-fi/assessments/deletes | Retrieves deleted resources based on change version. |
| [**getAssessments()**](AssessmentsApi.md#getAssessments) | **GET** /ed-fi/assessments | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern). |
| [**getAssessmentsById()**](AssessmentsApi.md#getAssessmentsById) | **GET** /ed-fi/assessments/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern). |
| [**getAssessmentsPartitions()**](AssessmentsApi.md#getAssessmentsPartitions) | **GET** /ed-fi/assessments/partitions | Retrieves a set of page tokens to be used for efficient client-side parallel processing. |
| [**keyChangesAssessments()**](AssessmentsApi.md#keyChangesAssessments) | **GET** /ed-fi/assessments/keyChanges | Retrieves resources key changes based on change version. |
| [**postAssessment()**](AssessmentsApi.md#postAssessment) | **POST** /ed-fi/assessments | Creates or updates resources based on the natural key values of the supplied resource. |
| [**putAssessment()**](AssessmentsApi.md#putAssessment) | **PUT** /ed-fi/assessments/{id} | Updates a resource based on the resource identifier. |


## `deleteAssessmentById()`

```php
deleteAssessmentById($id, $if_match)
```

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier. If the resource doesn't exist, an error will result (the resource will not be found).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\AssessmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try {
    $apiInstance->deleteAssessmentById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling AssessmentsApi->deleteAssessmentById: ', $e->getMessage(), PHP_EOL;
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

## `deletesAssessments()`

```php
deletesAssessments($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiAssessmentDelete[]
```

Retrieves deleted resources based on change version.

This operation is used to retrieve identifying information about resources that have been deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\AssessmentsApi(
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
    $result = $apiInstance->deletesAssessments($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssessmentsApi->deletesAssessments: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiAssessmentDelete[]**](../Model/TrackedChangesEdFiAssessmentDelete.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAssessments()`

```php
getAssessments($offset, $limit, $page_token, $page_size, $min_change_version, $max_change_version, $total_count, $assessment_identifier, $namespace, $education_organization_id, $assessment_category_descriptor, $adaptive_assessment, $assessment_family, $assessment_form, $assessment_title, $assessment_version, $id, $max_raw_score, $nomenclature, $revision_date, $use_snapshot, $assessment_identification_system_descriptor, $assigning_organization_identification_code, $identification_code): \Resources\Model\EdFiAssessment[]
```

Retrieves specific resources using the resource's property values (using the \"Get\" pattern).

This GET operation provides access to resources using the \"Get\" search pattern.  The values of any properties of the resource that are specified will be used to return all matching results (if it exists).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\AssessmentsApi(
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
$assessment_identifier = 'assessment_identifier_example'; // string | A unique number or alphanumeric code assigned to an assessment.
$namespace = 'namespace_example'; // string | Namespace for the assessment.
$education_organization_id = 56; // int | The identifier assigned to an education organization.
$assessment_category_descriptor = 'assessment_category_descriptor_example'; // string | The category of an assessment based on format and content.
$adaptive_assessment = True; // bool | Indicates that the assessment is adaptive.
$assessment_family = 'assessment_family_example'; // string | The assessment family this assessment is a member of.
$assessment_form = 'assessment_form_example'; // string | Identifies the form of the assessment, for example a regular versus makeup form, multiple choice versus constructed response, etc.
$assessment_title = 'assessment_title_example'; // string | The title or name of the assessment.
$assessment_version = 56; // int | The version identifier for the assessment.
$id = 'id_example'; // string | 
$max_raw_score = 3.4; // float | The maximum raw score achievable across all assessment items that are correct and scored at the maximum.
$nomenclature = 'nomenclature_example'; // string | Reflects the specific nomenclature used for assessment.
$revision_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The month, day, and year that the conceptual design for the assessment was most recently revised substantially.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.
$assessment_identification_system_descriptor = 'assessment_identification_system_descriptor_example'; // string | A coding scheme that is used for identification and record-keeping purposes by schools, social services, or other agencies to refer to an assessment.
$assigning_organization_identification_code = 'assigning_organization_identification_code_example'; // string | The organization code or name assigning the assessment identification code.
$identification_code = 'identification_code_example'; // string | A unique number or alphanumeric code assigned to an assessment by a school, school system, state, or other agency or entity.

try {
    $result = $apiInstance->getAssessments($offset, $limit, $page_token, $page_size, $min_change_version, $max_change_version, $total_count, $assessment_identifier, $namespace, $education_organization_id, $assessment_category_descriptor, $adaptive_assessment, $assessment_family, $assessment_form, $assessment_title, $assessment_version, $id, $max_raw_score, $nomenclature, $revision_date, $use_snapshot, $assessment_identification_system_descriptor, $assigning_organization_identification_code, $identification_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssessmentsApi->getAssessments: ', $e->getMessage(), PHP_EOL;
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
| **assessment_identifier** | **string**| A unique number or alphanumeric code assigned to an assessment. | [optional] |
| **namespace** | **string**| Namespace for the assessment. | [optional] |
| **education_organization_id** | **int**| The identifier assigned to an education organization. | [optional] |
| **assessment_category_descriptor** | **string**| The category of an assessment based on format and content. | [optional] |
| **adaptive_assessment** | **bool**| Indicates that the assessment is adaptive. | [optional] |
| **assessment_family** | **string**| The assessment family this assessment is a member of. | [optional] |
| **assessment_form** | **string**| Identifies the form of the assessment, for example a regular versus makeup form, multiple choice versus constructed response, etc. | [optional] |
| **assessment_title** | **string**| The title or name of the assessment. | [optional] |
| **assessment_version** | **int**| The version identifier for the assessment. | [optional] |
| **id** | **string**|  | [optional] |
| **max_raw_score** | **float**| The maximum raw score achievable across all assessment items that are correct and scored at the maximum. | [optional] |
| **nomenclature** | **string**| Reflects the specific nomenclature used for assessment. | [optional] |
| **revision_date** | **\DateTime**| The month, day, and year that the conceptual design for the assessment was most recently revised substantially. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |
| **assessment_identification_system_descriptor** | **string**| A coding scheme that is used for identification and record-keeping purposes by schools, social services, or other agencies to refer to an assessment. | [optional] |
| **assigning_organization_identification_code** | **string**| The organization code or name assigning the assessment identification code. | [optional] |
| **identification_code** | **string**| A unique number or alphanumeric code assigned to an assessment by a school, school system, state, or other agency or entity. | [optional] |

### Return type

[**\Resources\Model\EdFiAssessment[]**](../Model/EdFiAssessment.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAssessmentsById()`

```php
getAssessmentsById($id, $if_none_match, $use_snapshot): \Resources\Model\EdFiAssessment
```

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\AssessmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_none_match = 'if_none_match_example'; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getAssessmentsById($id, $if_none_match, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssessmentsApi->getAssessmentsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\EdFiAssessment**](../Model/EdFiAssessment.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAssessmentsPartitions()`

```php
getAssessmentsPartitions($number, $min_change_version, $max_change_version, $assessment_identifier, $namespace, $education_organization_id, $assessment_category_descriptor, $adaptive_assessment, $assessment_family, $assessment_form, $assessment_title, $assessment_version, $id, $max_raw_score, $nomenclature, $revision_date, $use_snapshot, $assessment_identification_system_descriptor, $assigning_organization_identification_code, $identification_code): \Resources\Model\GetAcademicWeeksPartitions200Response
```

Retrieves a set of page tokens to be used for efficient client-side parallel processing.

Computes an evenly distributed set of partitions over the accessible data and returns a set of page tokens, each representing the first page of one of the partitions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\AssessmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$number = 56; // int | The number of evenly distributed partitions to provide for client-side parallel processing. If unspecified, a reasonable set of partitions will be determined based on the total number of accessible items.
$min_change_version = 56; // int | Used in synchronization to set sequence minimum ChangeVersion
$max_change_version = 56; // int | Used in synchronization to set sequence maximum ChangeVersion
$assessment_identifier = 'assessment_identifier_example'; // string | A unique number or alphanumeric code assigned to an assessment.
$namespace = 'namespace_example'; // string | Namespace for the assessment.
$education_organization_id = 56; // int | The identifier assigned to an education organization.
$assessment_category_descriptor = 'assessment_category_descriptor_example'; // string | The category of an assessment based on format and content.
$adaptive_assessment = True; // bool | Indicates that the assessment is adaptive.
$assessment_family = 'assessment_family_example'; // string | The assessment family this assessment is a member of.
$assessment_form = 'assessment_form_example'; // string | Identifies the form of the assessment, for example a regular versus makeup form, multiple choice versus constructed response, etc.
$assessment_title = 'assessment_title_example'; // string | The title or name of the assessment.
$assessment_version = 56; // int | The version identifier for the assessment.
$id = 'id_example'; // string | 
$max_raw_score = 3.4; // float | The maximum raw score achievable across all assessment items that are correct and scored at the maximum.
$nomenclature = 'nomenclature_example'; // string | Reflects the specific nomenclature used for assessment.
$revision_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The month, day, and year that the conceptual design for the assessment was most recently revised substantially.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.
$assessment_identification_system_descriptor = 'assessment_identification_system_descriptor_example'; // string | A coding scheme that is used for identification and record-keeping purposes by schools, social services, or other agencies to refer to an assessment.
$assigning_organization_identification_code = 'assigning_organization_identification_code_example'; // string | The organization code or name assigning the assessment identification code.
$identification_code = 'identification_code_example'; // string | A unique number or alphanumeric code assigned to an assessment by a school, school system, state, or other agency or entity.

try {
    $result = $apiInstance->getAssessmentsPartitions($number, $min_change_version, $max_change_version, $assessment_identifier, $namespace, $education_organization_id, $assessment_category_descriptor, $adaptive_assessment, $assessment_family, $assessment_form, $assessment_title, $assessment_version, $id, $max_raw_score, $nomenclature, $revision_date, $use_snapshot, $assessment_identification_system_descriptor, $assigning_organization_identification_code, $identification_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssessmentsApi->getAssessmentsPartitions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **number** | **int**| The number of evenly distributed partitions to provide for client-side parallel processing. If unspecified, a reasonable set of partitions will be determined based on the total number of accessible items. | [optional] |
| **min_change_version** | **int**| Used in synchronization to set sequence minimum ChangeVersion | [optional] |
| **max_change_version** | **int**| Used in synchronization to set sequence maximum ChangeVersion | [optional] |
| **assessment_identifier** | **string**| A unique number or alphanumeric code assigned to an assessment. | [optional] |
| **namespace** | **string**| Namespace for the assessment. | [optional] |
| **education_organization_id** | **int**| The identifier assigned to an education organization. | [optional] |
| **assessment_category_descriptor** | **string**| The category of an assessment based on format and content. | [optional] |
| **adaptive_assessment** | **bool**| Indicates that the assessment is adaptive. | [optional] |
| **assessment_family** | **string**| The assessment family this assessment is a member of. | [optional] |
| **assessment_form** | **string**| Identifies the form of the assessment, for example a regular versus makeup form, multiple choice versus constructed response, etc. | [optional] |
| **assessment_title** | **string**| The title or name of the assessment. | [optional] |
| **assessment_version** | **int**| The version identifier for the assessment. | [optional] |
| **id** | **string**|  | [optional] |
| **max_raw_score** | **float**| The maximum raw score achievable across all assessment items that are correct and scored at the maximum. | [optional] |
| **nomenclature** | **string**| Reflects the specific nomenclature used for assessment. | [optional] |
| **revision_date** | **\DateTime**| The month, day, and year that the conceptual design for the assessment was most recently revised substantially. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |
| **assessment_identification_system_descriptor** | **string**| A coding scheme that is used for identification and record-keeping purposes by schools, social services, or other agencies to refer to an assessment. | [optional] |
| **assigning_organization_identification_code** | **string**| The organization code or name assigning the assessment identification code. | [optional] |
| **identification_code** | **string**| A unique number or alphanumeric code assigned to an assessment by a school, school system, state, or other agency or entity. | [optional] |

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

## `keyChangesAssessments()`

```php
keyChangesAssessments($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesEdFiAssessmentKeyChange[]
```

Retrieves resources key changes based on change version.

This operation is used to retrieve identifying information about resources whose key values have been changed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\AssessmentsApi(
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
    $result = $apiInstance->keyChangesAssessments($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssessmentsApi->keyChangesAssessments: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesEdFiAssessmentKeyChange[]**](../Model/TrackedChangesEdFiAssessmentKeyChange.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postAssessment()`

```php
postAssessment($ed_fi_assessment)
```

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update). Clients should NOT include the resource \"id\" in the JSON body because it will result in an error. The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately. It is recommended to use POST for both create and update except while updating natural key of a resource in which case PUT operation must be used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\AssessmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ed_fi_assessment = new \Resources\Model\EdFiAssessment(); // \Resources\Model\EdFiAssessment | The JSON representation of the \"assessment\" resource to be created or updated.

try {
    $apiInstance->postAssessment($ed_fi_assessment);
} catch (Exception $e) {
    echo 'Exception when calling AssessmentsApi->postAssessment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ed_fi_assessment** | [**\Resources\Model\EdFiAssessment**](../Model/EdFiAssessment.md)| The JSON representation of the \&quot;assessment\&quot; resource to be created or updated. | |

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

## `putAssessment()`

```php
putAssessment($id, $ed_fi_assessment, $if_match)
```

Updates a resource based on the resource identifier.

The PUT operation is used to update a resource by identifier. If the resource identifier (\"id\") is provided in the JSON body, it will be ignored. Additionally, this API resource is not configured for cascading natural key updates. Natural key values for this resource cannot be changed using PUT operation, so the recommendation is to use POST as that supports upsert behavior.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\AssessmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$ed_fi_assessment = new \Resources\Model\EdFiAssessment(); // \Resources\Model\EdFiAssessment | The JSON representation of the \"assessment\" resource to be created or updated.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try {
    $apiInstance->putAssessment($id, $ed_fi_assessment, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling AssessmentsApi->putAssessment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **ed_fi_assessment** | [**\Resources\Model\EdFiAssessment**](../Model/EdFiAssessment.md)| The JSON representation of the \&quot;assessment\&quot; resource to be created or updated. | |
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
