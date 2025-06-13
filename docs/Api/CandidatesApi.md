# Resources\CandidatesApi

All URIs are relative to https://api.ed-fi.org:443/v7.3/api/data/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteCandidateById()**](CandidatesApi.md#deleteCandidateById) | **DELETE** /tpdm/candidates/{id} | Deletes an existing resource using the resource identifier. |
| [**deletesCandidates()**](CandidatesApi.md#deletesCandidates) | **GET** /tpdm/candidates/deletes | Retrieves deleted resources based on change version. |
| [**getCandidates()**](CandidatesApi.md#getCandidates) | **GET** /tpdm/candidates | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern). |
| [**getCandidatesById()**](CandidatesApi.md#getCandidatesById) | **GET** /tpdm/candidates/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern). |
| [**getCandidatesPartitions()**](CandidatesApi.md#getCandidatesPartitions) | **GET** /tpdm/candidates/partitions | Retrieves a set of page tokens to be used for efficient client-side parallel processing. |
| [**keyChangesCandidates()**](CandidatesApi.md#keyChangesCandidates) | **GET** /tpdm/candidates/keyChanges | Retrieves resources key changes based on change version. |
| [**postCandidate()**](CandidatesApi.md#postCandidate) | **POST** /tpdm/candidates | Creates or updates resources based on the natural key values of the supplied resource. |
| [**putCandidate()**](CandidatesApi.md#putCandidate) | **PUT** /tpdm/candidates/{id} | Updates a resource based on the resource identifier. |


## `deleteCandidateById()`

```php
deleteCandidateById($id, $if_match)
```

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier. If the resource doesn't exist, an error will result (the resource will not be found).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\CandidatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try {
    $apiInstance->deleteCandidateById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling CandidatesApi->deleteCandidateById: ', $e->getMessage(), PHP_EOL;
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

## `deletesCandidates()`

```php
deletesCandidates($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesTpdmCandidateDelete[]
```

Retrieves deleted resources based on change version.

This operation is used to retrieve identifying information about resources that have been deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\CandidatesApi(
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
    $result = $apiInstance->deletesCandidates($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CandidatesApi->deletesCandidates: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesTpdmCandidateDelete[]**](../Model/TrackedChangesTpdmCandidateDelete.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCandidates()`

```php
getCandidates($offset, $limit, $page_token, $page_size, $min_change_version, $max_change_version, $total_count, $candidate_identifier, $person_id, $source_system_descriptor, $birth_country_descriptor, $english_language_exam_descriptor, $gender_descriptor, $limited_english_proficiency_descriptor, $sex_descriptor, $birth_sex_descriptor, $birth_state_abbreviation_descriptor, $birth_city, $birth_date, $birth_international_province, $date_entered_us, $displacement_status, $economic_disadvantaged, $first_generation_student, $first_name, $generation_code_suffix, $hispanic_latino_ethnicity, $id, $last_surname, $maiden_name, $middle_name, $multiple_birth_status, $personal_title_prefix, $preferred_first_name, $preferred_last_surname, $use_snapshot): \Resources\Model\TpdmCandidate[]
```

Retrieves specific resources using the resource's property values (using the \"Get\" pattern).

This GET operation provides access to resources using the \"Get\" search pattern.  The values of any properties of the resource that are specified will be used to return all matching results (if it exists).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\CandidatesApi(
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
$candidate_identifier = 'candidate_identifier_example'; // string | A unique alphanumeric code assigned to a candidate.
$person_id = 'person_id_example'; // string | A unique alphanumeric code assigned to a person.
$source_system_descriptor = 'source_system_descriptor_example'; // string | This descriptor defines the originating record source system for the person.
$birth_country_descriptor = 'birth_country_descriptor_example'; // string | The country in which an individual is born. It is strongly recommended that entries use only ISO 3166 2-letter country codes.
$english_language_exam_descriptor = 'english_language_exam_descriptor_example'; // string | Indicates that a person passed, failed, or did not take an English Language assessment (e.g., TOEFFL).
$gender_descriptor = 'gender_descriptor_example'; // string | The gender of the candidate.
$limited_english_proficiency_descriptor = 'limited_english_proficiency_descriptor_example'; // string | An indication that the student has been identified as limited English proficient by the Language Proficiency Assessment Committee (LPAC), or English proficient.
$sex_descriptor = 'sex_descriptor_example'; // string | The sex of the candidate.
$birth_sex_descriptor = 'birth_sex_descriptor_example'; // string | A person's sex at birth.
$birth_state_abbreviation_descriptor = 'birth_state_abbreviation_descriptor_example'; // string | The abbreviation for the name of the state (within the United States) or extra-state jurisdiction in which an individual was born.
$birth_city = 'birth_city_example'; // string | The city the student was born in.
$birth_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The month, day, and year on which an individual was born.
$birth_international_province = 'birth_international_province_example'; // string | For students born outside of the U.S., the Province or jurisdiction in which an individual is born.
$date_entered_us = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | For students born outside of the U.S., the date the student entered the U.S.
$displacement_status = 'displacement_status_example'; // string | Indicates a state health or weather related event that displaces a group of students, and may require additional funding, educational, or social services.
$economic_disadvantaged = True; // bool | An indication of inadequate financial condition of an individual's family, as determined by family income, number of family members/dependents, participation in public assistance programs, and/or other characteristics considered relevant by federal, state, and local policy.
$first_generation_student = True; // bool | Indicator of whether individual is a first generation college student.
$first_name = 'first_name_example'; // string | A name given to an individual at birth, baptism, or during another naming ceremony, or through legal change.
$generation_code_suffix = 'generation_code_suffix_example'; // string | An appendage, if any, used to denote an individual's generation in his family (e.g., Jr., Sr., III).
$hispanic_latino_ethnicity = True; // bool | An indication that the individual traces his or her origin or descent to Mexico, Puerto Rico, Cuba, Central, and South America, and other Spanish cultures, regardless of race. The term, \"Spanish origin,\" can be used in addition to \"Hispanic or Latino.\"
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
    $result = $apiInstance->getCandidates($offset, $limit, $page_token, $page_size, $min_change_version, $max_change_version, $total_count, $candidate_identifier, $person_id, $source_system_descriptor, $birth_country_descriptor, $english_language_exam_descriptor, $gender_descriptor, $limited_english_proficiency_descriptor, $sex_descriptor, $birth_sex_descriptor, $birth_state_abbreviation_descriptor, $birth_city, $birth_date, $birth_international_province, $date_entered_us, $displacement_status, $economic_disadvantaged, $first_generation_student, $first_name, $generation_code_suffix, $hispanic_latino_ethnicity, $id, $last_surname, $maiden_name, $middle_name, $multiple_birth_status, $personal_title_prefix, $preferred_first_name, $preferred_last_surname, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CandidatesApi->getCandidates: ', $e->getMessage(), PHP_EOL;
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
| **candidate_identifier** | **string**| A unique alphanumeric code assigned to a candidate. | [optional] |
| **person_id** | **string**| A unique alphanumeric code assigned to a person. | [optional] |
| **source_system_descriptor** | **string**| This descriptor defines the originating record source system for the person. | [optional] |
| **birth_country_descriptor** | **string**| The country in which an individual is born. It is strongly recommended that entries use only ISO 3166 2-letter country codes. | [optional] |
| **english_language_exam_descriptor** | **string**| Indicates that a person passed, failed, or did not take an English Language assessment (e.g., TOEFFL). | [optional] |
| **gender_descriptor** | **string**| The gender of the candidate. | [optional] |
| **limited_english_proficiency_descriptor** | **string**| An indication that the student has been identified as limited English proficient by the Language Proficiency Assessment Committee (LPAC), or English proficient. | [optional] |
| **sex_descriptor** | **string**| The sex of the candidate. | [optional] |
| **birth_sex_descriptor** | **string**| A person&#39;s sex at birth. | [optional] |
| **birth_state_abbreviation_descriptor** | **string**| The abbreviation for the name of the state (within the United States) or extra-state jurisdiction in which an individual was born. | [optional] |
| **birth_city** | **string**| The city the student was born in. | [optional] |
| **birth_date** | **\DateTime**| The month, day, and year on which an individual was born. | [optional] |
| **birth_international_province** | **string**| For students born outside of the U.S., the Province or jurisdiction in which an individual is born. | [optional] |
| **date_entered_us** | **\DateTime**| For students born outside of the U.S., the date the student entered the U.S. | [optional] |
| **displacement_status** | **string**| Indicates a state health or weather related event that displaces a group of students, and may require additional funding, educational, or social services. | [optional] |
| **economic_disadvantaged** | **bool**| An indication of inadequate financial condition of an individual&#39;s family, as determined by family income, number of family members/dependents, participation in public assistance programs, and/or other characteristics considered relevant by federal, state, and local policy. | [optional] |
| **first_generation_student** | **bool**| Indicator of whether individual is a first generation college student. | [optional] |
| **first_name** | **string**| A name given to an individual at birth, baptism, or during another naming ceremony, or through legal change. | [optional] |
| **generation_code_suffix** | **string**| An appendage, if any, used to denote an individual&#39;s generation in his family (e.g., Jr., Sr., III). | [optional] |
| **hispanic_latino_ethnicity** | **bool**| An indication that the individual traces his or her origin or descent to Mexico, Puerto Rico, Cuba, Central, and South America, and other Spanish cultures, regardless of race. The term, \&quot;Spanish origin,\&quot; can be used in addition to \&quot;Hispanic or Latino.\&quot; | [optional] |
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

[**\Resources\Model\TpdmCandidate[]**](../Model/TpdmCandidate.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCandidatesById()`

```php
getCandidatesById($id, $if_none_match, $use_snapshot): \Resources\Model\TpdmCandidate
```

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\CandidatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_none_match = 'if_none_match_example'; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.
$use_snapshot = false; // bool | Indicates if the configured Snapshot should be used.

try {
    $result = $apiInstance->getCandidatesById($id, $if_none_match, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CandidatesApi->getCandidatesById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] |
| **use_snapshot** | **bool**| Indicates if the configured Snapshot should be used. | [optional] [default to false] |

### Return type

[**\Resources\Model\TpdmCandidate**](../Model/TpdmCandidate.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCandidatesPartitions()`

```php
getCandidatesPartitions($number, $min_change_version, $max_change_version, $candidate_identifier, $person_id, $source_system_descriptor, $birth_country_descriptor, $english_language_exam_descriptor, $gender_descriptor, $limited_english_proficiency_descriptor, $sex_descriptor, $birth_sex_descriptor, $birth_state_abbreviation_descriptor, $birth_city, $birth_date, $birth_international_province, $date_entered_us, $displacement_status, $economic_disadvantaged, $first_generation_student, $first_name, $generation_code_suffix, $hispanic_latino_ethnicity, $id, $last_surname, $maiden_name, $middle_name, $multiple_birth_status, $personal_title_prefix, $preferred_first_name, $preferred_last_surname, $use_snapshot): \Resources\Model\GetAcademicWeeksPartitions200Response
```

Retrieves a set of page tokens to be used for efficient client-side parallel processing.

Computes an evenly distributed set of partitions over the accessible data and returns a set of page tokens, each representing the first page of one of the partitions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\CandidatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$number = 56; // int | The number of evenly distributed partitions to provide for client-side parallel processing. If unspecified, a reasonable set of partitions will be determined based on the total number of accessible items.
$min_change_version = 56; // int | Used in synchronization to set sequence minimum ChangeVersion
$max_change_version = 56; // int | Used in synchronization to set sequence maximum ChangeVersion
$candidate_identifier = 'candidate_identifier_example'; // string | A unique alphanumeric code assigned to a candidate.
$person_id = 'person_id_example'; // string | A unique alphanumeric code assigned to a person.
$source_system_descriptor = 'source_system_descriptor_example'; // string | This descriptor defines the originating record source system for the person.
$birth_country_descriptor = 'birth_country_descriptor_example'; // string | The country in which an individual is born. It is strongly recommended that entries use only ISO 3166 2-letter country codes.
$english_language_exam_descriptor = 'english_language_exam_descriptor_example'; // string | Indicates that a person passed, failed, or did not take an English Language assessment (e.g., TOEFFL).
$gender_descriptor = 'gender_descriptor_example'; // string | The gender of the candidate.
$limited_english_proficiency_descriptor = 'limited_english_proficiency_descriptor_example'; // string | An indication that the student has been identified as limited English proficient by the Language Proficiency Assessment Committee (LPAC), or English proficient.
$sex_descriptor = 'sex_descriptor_example'; // string | The sex of the candidate.
$birth_sex_descriptor = 'birth_sex_descriptor_example'; // string | A person's sex at birth.
$birth_state_abbreviation_descriptor = 'birth_state_abbreviation_descriptor_example'; // string | The abbreviation for the name of the state (within the United States) or extra-state jurisdiction in which an individual was born.
$birth_city = 'birth_city_example'; // string | The city the student was born in.
$birth_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The month, day, and year on which an individual was born.
$birth_international_province = 'birth_international_province_example'; // string | For students born outside of the U.S., the Province or jurisdiction in which an individual is born.
$date_entered_us = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | For students born outside of the U.S., the date the student entered the U.S.
$displacement_status = 'displacement_status_example'; // string | Indicates a state health or weather related event that displaces a group of students, and may require additional funding, educational, or social services.
$economic_disadvantaged = True; // bool | An indication of inadequate financial condition of an individual's family, as determined by family income, number of family members/dependents, participation in public assistance programs, and/or other characteristics considered relevant by federal, state, and local policy.
$first_generation_student = True; // bool | Indicator of whether individual is a first generation college student.
$first_name = 'first_name_example'; // string | A name given to an individual at birth, baptism, or during another naming ceremony, or through legal change.
$generation_code_suffix = 'generation_code_suffix_example'; // string | An appendage, if any, used to denote an individual's generation in his family (e.g., Jr., Sr., III).
$hispanic_latino_ethnicity = True; // bool | An indication that the individual traces his or her origin or descent to Mexico, Puerto Rico, Cuba, Central, and South America, and other Spanish cultures, regardless of race. The term, \"Spanish origin,\" can be used in addition to \"Hispanic or Latino.\"
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
    $result = $apiInstance->getCandidatesPartitions($number, $min_change_version, $max_change_version, $candidate_identifier, $person_id, $source_system_descriptor, $birth_country_descriptor, $english_language_exam_descriptor, $gender_descriptor, $limited_english_proficiency_descriptor, $sex_descriptor, $birth_sex_descriptor, $birth_state_abbreviation_descriptor, $birth_city, $birth_date, $birth_international_province, $date_entered_us, $displacement_status, $economic_disadvantaged, $first_generation_student, $first_name, $generation_code_suffix, $hispanic_latino_ethnicity, $id, $last_surname, $maiden_name, $middle_name, $multiple_birth_status, $personal_title_prefix, $preferred_first_name, $preferred_last_surname, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CandidatesApi->getCandidatesPartitions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **number** | **int**| The number of evenly distributed partitions to provide for client-side parallel processing. If unspecified, a reasonable set of partitions will be determined based on the total number of accessible items. | [optional] |
| **min_change_version** | **int**| Used in synchronization to set sequence minimum ChangeVersion | [optional] |
| **max_change_version** | **int**| Used in synchronization to set sequence maximum ChangeVersion | [optional] |
| **candidate_identifier** | **string**| A unique alphanumeric code assigned to a candidate. | [optional] |
| **person_id** | **string**| A unique alphanumeric code assigned to a person. | [optional] |
| **source_system_descriptor** | **string**| This descriptor defines the originating record source system for the person. | [optional] |
| **birth_country_descriptor** | **string**| The country in which an individual is born. It is strongly recommended that entries use only ISO 3166 2-letter country codes. | [optional] |
| **english_language_exam_descriptor** | **string**| Indicates that a person passed, failed, or did not take an English Language assessment (e.g., TOEFFL). | [optional] |
| **gender_descriptor** | **string**| The gender of the candidate. | [optional] |
| **limited_english_proficiency_descriptor** | **string**| An indication that the student has been identified as limited English proficient by the Language Proficiency Assessment Committee (LPAC), or English proficient. | [optional] |
| **sex_descriptor** | **string**| The sex of the candidate. | [optional] |
| **birth_sex_descriptor** | **string**| A person&#39;s sex at birth. | [optional] |
| **birth_state_abbreviation_descriptor** | **string**| The abbreviation for the name of the state (within the United States) or extra-state jurisdiction in which an individual was born. | [optional] |
| **birth_city** | **string**| The city the student was born in. | [optional] |
| **birth_date** | **\DateTime**| The month, day, and year on which an individual was born. | [optional] |
| **birth_international_province** | **string**| For students born outside of the U.S., the Province or jurisdiction in which an individual is born. | [optional] |
| **date_entered_us** | **\DateTime**| For students born outside of the U.S., the date the student entered the U.S. | [optional] |
| **displacement_status** | **string**| Indicates a state health or weather related event that displaces a group of students, and may require additional funding, educational, or social services. | [optional] |
| **economic_disadvantaged** | **bool**| An indication of inadequate financial condition of an individual&#39;s family, as determined by family income, number of family members/dependents, participation in public assistance programs, and/or other characteristics considered relevant by federal, state, and local policy. | [optional] |
| **first_generation_student** | **bool**| Indicator of whether individual is a first generation college student. | [optional] |
| **first_name** | **string**| A name given to an individual at birth, baptism, or during another naming ceremony, or through legal change. | [optional] |
| **generation_code_suffix** | **string**| An appendage, if any, used to denote an individual&#39;s generation in his family (e.g., Jr., Sr., III). | [optional] |
| **hispanic_latino_ethnicity** | **bool**| An indication that the individual traces his or her origin or descent to Mexico, Puerto Rico, Cuba, Central, and South America, and other Spanish cultures, regardless of race. The term, \&quot;Spanish origin,\&quot; can be used in addition to \&quot;Hispanic or Latino.\&quot; | [optional] |
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

## `keyChangesCandidates()`

```php
keyChangesCandidates($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot): \Resources\Model\TrackedChangesTpdmCandidateKeyChange[]
```

Retrieves resources key changes based on change version.

This operation is used to retrieve identifying information about resources whose key values have been changed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\CandidatesApi(
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
    $result = $apiInstance->keyChangesCandidates($offset, $limit, $min_change_version, $max_change_version, $total_count, $use_snapshot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CandidatesApi->keyChangesCandidates: ', $e->getMessage(), PHP_EOL;
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

[**\Resources\Model\TrackedChangesTpdmCandidateKeyChange[]**](../Model/TrackedChangesTpdmCandidateKeyChange.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCandidate()`

```php
postCandidate($tpdm_candidate)
```

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update). Clients should NOT include the resource \"id\" in the JSON body because it will result in an error. The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately. It is recommended to use POST for both create and update except while updating natural key of a resource in which case PUT operation must be used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\CandidatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tpdm_candidate = new \Resources\Model\TpdmCandidate(); // \Resources\Model\TpdmCandidate | The JSON representation of the \"candidate\" resource to be created or updated.

try {
    $apiInstance->postCandidate($tpdm_candidate);
} catch (Exception $e) {
    echo 'Exception when calling CandidatesApi->postCandidate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tpdm_candidate** | [**\Resources\Model\TpdmCandidate**](../Model/TpdmCandidate.md)| The JSON representation of the \&quot;candidate\&quot; resource to be created or updated. | |

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

## `putCandidate()`

```php
putCandidate($id, $tpdm_candidate, $if_match)
```

Updates a resource based on the resource identifier.

The PUT operation is used to update a resource by identifier. If the resource identifier (\"id\") is provided in the JSON body, it will be ignored. Additionally, this API resource is not configured for cascading natural key updates. Natural key values for this resource cannot be changed using PUT operation, so the recommendation is to use POST as that supports upsert behavior.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\CandidatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$tpdm_candidate = new \Resources\Model\TpdmCandidate(); // \Resources\Model\TpdmCandidate | The JSON representation of the \"candidate\" resource to be created or updated.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try {
    $apiInstance->putCandidate($id, $tpdm_candidate, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling CandidatesApi->putCandidate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A resource identifier that uniquely identifies the resource. | |
| **tpdm_candidate** | [**\Resources\Model\TpdmCandidate**](../Model/TpdmCandidate.md)| The JSON representation of the \&quot;candidate\&quot; resource to be created or updated. | |
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
