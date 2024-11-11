# OpenAPIClient-php

The Ed-Fi ODS / API enables applications to read and write education data stored in an Ed-Fi ODS through a secure REST interface. 
***
 > *Note: Consumers of ODS / API information should sanitize all data for display and storage. The ODS / API provides reasonable safeguards against cross-site scripting attacks and other malicious content, but the platform does not and cannot guarantee that the data it contains is free of all potentially harmful content.* 
***



## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Resources\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Resources\Api\AcademicWeeksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A resource identifier that uniquely identifies the resource.
$if_match = 'if_match_example'; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try {
    $apiInstance->deleteAcademicWeekById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling AcademicWeeksApi->deleteAcademicWeekById: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.ed-fi.org:443/v7.1/api/data/v3*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AcademicWeeksApi* | [**deleteAcademicWeekById**](docs/Api/AcademicWeeksApi.md#deleteacademicweekbyid) | **DELETE** /ed-fi/academicWeeks/{id} | Deletes an existing resource using the resource identifier.
*AcademicWeeksApi* | [**deletesAcademicWeeks**](docs/Api/AcademicWeeksApi.md#deletesacademicweeks) | **GET** /ed-fi/academicWeeks/deletes | Retrieves deleted resources based on change version.
*AcademicWeeksApi* | [**getAcademicWeeks**](docs/Api/AcademicWeeksApi.md#getacademicweeks) | **GET** /ed-fi/academicWeeks | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*AcademicWeeksApi* | [**getAcademicWeeksById**](docs/Api/AcademicWeeksApi.md#getacademicweeksbyid) | **GET** /ed-fi/academicWeeks/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*AcademicWeeksApi* | [**keyChangesAcademicWeeks**](docs/Api/AcademicWeeksApi.md#keychangesacademicweeks) | **GET** /ed-fi/academicWeeks/keyChanges | Retrieves resources key changes based on change version.
*AcademicWeeksApi* | [**postAcademicWeek**](docs/Api/AcademicWeeksApi.md#postacademicweek) | **POST** /ed-fi/academicWeeks | Creates or updates resources based on the natural key values of the supplied resource.
*AcademicWeeksApi* | [**putAcademicWeek**](docs/Api/AcademicWeeksApi.md#putacademicweek) | **PUT** /ed-fi/academicWeeks/{id} | Updates a resource based on the resource identifier.
*AccountabilityRatingsApi* | [**deleteAccountabilityRatingById**](docs/Api/AccountabilityRatingsApi.md#deleteaccountabilityratingbyid) | **DELETE** /ed-fi/accountabilityRatings/{id} | Deletes an existing resource using the resource identifier.
*AccountabilityRatingsApi* | [**deletesAccountabilityRatings**](docs/Api/AccountabilityRatingsApi.md#deletesaccountabilityratings) | **GET** /ed-fi/accountabilityRatings/deletes | Retrieves deleted resources based on change version.
*AccountabilityRatingsApi* | [**getAccountabilityRatings**](docs/Api/AccountabilityRatingsApi.md#getaccountabilityratings) | **GET** /ed-fi/accountabilityRatings | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*AccountabilityRatingsApi* | [**getAccountabilityRatingsById**](docs/Api/AccountabilityRatingsApi.md#getaccountabilityratingsbyid) | **GET** /ed-fi/accountabilityRatings/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*AccountabilityRatingsApi* | [**keyChangesAccountabilityRatings**](docs/Api/AccountabilityRatingsApi.md#keychangesaccountabilityratings) | **GET** /ed-fi/accountabilityRatings/keyChanges | Retrieves resources key changes based on change version.
*AccountabilityRatingsApi* | [**postAccountabilityRating**](docs/Api/AccountabilityRatingsApi.md#postaccountabilityrating) | **POST** /ed-fi/accountabilityRatings | Creates or updates resources based on the natural key values of the supplied resource.
*AccountabilityRatingsApi* | [**putAccountabilityRating**](docs/Api/AccountabilityRatingsApi.md#putaccountabilityrating) | **PUT** /ed-fi/accountabilityRatings/{id} | Updates a resource based on the resource identifier.
*AssessmentItemsApi* | [**deleteAssessmentItemById**](docs/Api/AssessmentItemsApi.md#deleteassessmentitembyid) | **DELETE** /ed-fi/assessmentItems/{id} | Deletes an existing resource using the resource identifier.
*AssessmentItemsApi* | [**deletesAssessmentItems**](docs/Api/AssessmentItemsApi.md#deletesassessmentitems) | **GET** /ed-fi/assessmentItems/deletes | Retrieves deleted resources based on change version.
*AssessmentItemsApi* | [**getAssessmentItems**](docs/Api/AssessmentItemsApi.md#getassessmentitems) | **GET** /ed-fi/assessmentItems | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*AssessmentItemsApi* | [**getAssessmentItemsById**](docs/Api/AssessmentItemsApi.md#getassessmentitemsbyid) | **GET** /ed-fi/assessmentItems/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*AssessmentItemsApi* | [**keyChangesAssessmentItems**](docs/Api/AssessmentItemsApi.md#keychangesassessmentitems) | **GET** /ed-fi/assessmentItems/keyChanges | Retrieves resources key changes based on change version.
*AssessmentItemsApi* | [**postAssessmentItem**](docs/Api/AssessmentItemsApi.md#postassessmentitem) | **POST** /ed-fi/assessmentItems | Creates or updates resources based on the natural key values of the supplied resource.
*AssessmentItemsApi* | [**putAssessmentItem**](docs/Api/AssessmentItemsApi.md#putassessmentitem) | **PUT** /ed-fi/assessmentItems/{id} | Updates a resource based on the resource identifier.
*AssessmentScoreRangeLearningStandardsApi* | [**deleteAssessmentScoreRangeLearningStandardById**](docs/Api/AssessmentScoreRangeLearningStandardsApi.md#deleteassessmentscorerangelearningstandardbyid) | **DELETE** /ed-fi/assessmentScoreRangeLearningStandards/{id} | Deletes an existing resource using the resource identifier.
*AssessmentScoreRangeLearningStandardsApi* | [**deletesAssessmentScoreRangeLearningStandards**](docs/Api/AssessmentScoreRangeLearningStandardsApi.md#deletesassessmentscorerangelearningstandards) | **GET** /ed-fi/assessmentScoreRangeLearningStandards/deletes | Retrieves deleted resources based on change version.
*AssessmentScoreRangeLearningStandardsApi* | [**getAssessmentScoreRangeLearningStandards**](docs/Api/AssessmentScoreRangeLearningStandardsApi.md#getassessmentscorerangelearningstandards) | **GET** /ed-fi/assessmentScoreRangeLearningStandards | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*AssessmentScoreRangeLearningStandardsApi* | [**getAssessmentScoreRangeLearningStandardsById**](docs/Api/AssessmentScoreRangeLearningStandardsApi.md#getassessmentscorerangelearningstandardsbyid) | **GET** /ed-fi/assessmentScoreRangeLearningStandards/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*AssessmentScoreRangeLearningStandardsApi* | [**keyChangesAssessmentScoreRangeLearningStandards**](docs/Api/AssessmentScoreRangeLearningStandardsApi.md#keychangesassessmentscorerangelearningstandards) | **GET** /ed-fi/assessmentScoreRangeLearningStandards/keyChanges | Retrieves resources key changes based on change version.
*AssessmentScoreRangeLearningStandardsApi* | [**postAssessmentScoreRangeLearningStandard**](docs/Api/AssessmentScoreRangeLearningStandardsApi.md#postassessmentscorerangelearningstandard) | **POST** /ed-fi/assessmentScoreRangeLearningStandards | Creates or updates resources based on the natural key values of the supplied resource.
*AssessmentScoreRangeLearningStandardsApi* | [**putAssessmentScoreRangeLearningStandard**](docs/Api/AssessmentScoreRangeLearningStandardsApi.md#putassessmentscorerangelearningstandard) | **PUT** /ed-fi/assessmentScoreRangeLearningStandards/{id} | Updates a resource based on the resource identifier.
*AssessmentsApi* | [**deleteAssessmentById**](docs/Api/AssessmentsApi.md#deleteassessmentbyid) | **DELETE** /ed-fi/assessments/{id} | Deletes an existing resource using the resource identifier.
*AssessmentsApi* | [**deletesAssessments**](docs/Api/AssessmentsApi.md#deletesassessments) | **GET** /ed-fi/assessments/deletes | Retrieves deleted resources based on change version.
*AssessmentsApi* | [**getAssessments**](docs/Api/AssessmentsApi.md#getassessments) | **GET** /ed-fi/assessments | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*AssessmentsApi* | [**getAssessmentsById**](docs/Api/AssessmentsApi.md#getassessmentsbyid) | **GET** /ed-fi/assessments/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*AssessmentsApi* | [**keyChangesAssessments**](docs/Api/AssessmentsApi.md#keychangesassessments) | **GET** /ed-fi/assessments/keyChanges | Retrieves resources key changes based on change version.
*AssessmentsApi* | [**postAssessment**](docs/Api/AssessmentsApi.md#postassessment) | **POST** /ed-fi/assessments | Creates or updates resources based on the natural key values of the supplied resource.
*AssessmentsApi* | [**putAssessment**](docs/Api/AssessmentsApi.md#putassessment) | **PUT** /ed-fi/assessments/{id} | Updates a resource based on the resource identifier.
*BalanceSheetDimensionsApi* | [**deleteBalanceSheetDimensionById**](docs/Api/BalanceSheetDimensionsApi.md#deletebalancesheetdimensionbyid) | **DELETE** /ed-fi/balanceSheetDimensions/{id} | Deletes an existing resource using the resource identifier.
*BalanceSheetDimensionsApi* | [**deletesBalanceSheetDimensions**](docs/Api/BalanceSheetDimensionsApi.md#deletesbalancesheetdimensions) | **GET** /ed-fi/balanceSheetDimensions/deletes | Retrieves deleted resources based on change version.
*BalanceSheetDimensionsApi* | [**getBalanceSheetDimensions**](docs/Api/BalanceSheetDimensionsApi.md#getbalancesheetdimensions) | **GET** /ed-fi/balanceSheetDimensions | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*BalanceSheetDimensionsApi* | [**getBalanceSheetDimensionsById**](docs/Api/BalanceSheetDimensionsApi.md#getbalancesheetdimensionsbyid) | **GET** /ed-fi/balanceSheetDimensions/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*BalanceSheetDimensionsApi* | [**keyChangesBalanceSheetDimensions**](docs/Api/BalanceSheetDimensionsApi.md#keychangesbalancesheetdimensions) | **GET** /ed-fi/balanceSheetDimensions/keyChanges | Retrieves resources key changes based on change version.
*BalanceSheetDimensionsApi* | [**postBalanceSheetDimension**](docs/Api/BalanceSheetDimensionsApi.md#postbalancesheetdimension) | **POST** /ed-fi/balanceSheetDimensions | Creates or updates resources based on the natural key values of the supplied resource.
*BalanceSheetDimensionsApi* | [**putBalanceSheetDimension**](docs/Api/BalanceSheetDimensionsApi.md#putbalancesheetdimension) | **PUT** /ed-fi/balanceSheetDimensions/{id} | Updates a resource based on the resource identifier.
*BellSchedulesApi* | [**deleteBellScheduleById**](docs/Api/BellSchedulesApi.md#deletebellschedulebyid) | **DELETE** /ed-fi/bellSchedules/{id} | Deletes an existing resource using the resource identifier.
*BellSchedulesApi* | [**deletesBellSchedules**](docs/Api/BellSchedulesApi.md#deletesbellschedules) | **GET** /ed-fi/bellSchedules/deletes | Retrieves deleted resources based on change version.
*BellSchedulesApi* | [**getBellSchedules**](docs/Api/BellSchedulesApi.md#getbellschedules) | **GET** /ed-fi/bellSchedules | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*BellSchedulesApi* | [**getBellSchedulesById**](docs/Api/BellSchedulesApi.md#getbellschedulesbyid) | **GET** /ed-fi/bellSchedules/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*BellSchedulesApi* | [**keyChangesBellSchedules**](docs/Api/BellSchedulesApi.md#keychangesbellschedules) | **GET** /ed-fi/bellSchedules/keyChanges | Retrieves resources key changes based on change version.
*BellSchedulesApi* | [**postBellSchedule**](docs/Api/BellSchedulesApi.md#postbellschedule) | **POST** /ed-fi/bellSchedules | Creates or updates resources based on the natural key values of the supplied resource.
*BellSchedulesApi* | [**putBellSchedule**](docs/Api/BellSchedulesApi.md#putbellschedule) | **PUT** /ed-fi/bellSchedules/{id} | Updates a resource based on the resource identifier.
*CalendarDatesApi* | [**deleteCalendarDateById**](docs/Api/CalendarDatesApi.md#deletecalendardatebyid) | **DELETE** /ed-fi/calendarDates/{id} | Deletes an existing resource using the resource identifier.
*CalendarDatesApi* | [**deletesCalendarDates**](docs/Api/CalendarDatesApi.md#deletescalendardates) | **GET** /ed-fi/calendarDates/deletes | Retrieves deleted resources based on change version.
*CalendarDatesApi* | [**getCalendarDates**](docs/Api/CalendarDatesApi.md#getcalendardates) | **GET** /ed-fi/calendarDates | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*CalendarDatesApi* | [**getCalendarDatesById**](docs/Api/CalendarDatesApi.md#getcalendardatesbyid) | **GET** /ed-fi/calendarDates/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*CalendarDatesApi* | [**keyChangesCalendarDates**](docs/Api/CalendarDatesApi.md#keychangescalendardates) | **GET** /ed-fi/calendarDates/keyChanges | Retrieves resources key changes based on change version.
*CalendarDatesApi* | [**postCalendarDate**](docs/Api/CalendarDatesApi.md#postcalendardate) | **POST** /ed-fi/calendarDates | Creates or updates resources based on the natural key values of the supplied resource.
*CalendarDatesApi* | [**putCalendarDate**](docs/Api/CalendarDatesApi.md#putcalendardate) | **PUT** /ed-fi/calendarDates/{id} | Updates a resource based on the resource identifier.
*CalendarsApi* | [**deleteCalendarById**](docs/Api/CalendarsApi.md#deletecalendarbyid) | **DELETE** /ed-fi/calendars/{id} | Deletes an existing resource using the resource identifier.
*CalendarsApi* | [**deletesCalendars**](docs/Api/CalendarsApi.md#deletescalendars) | **GET** /ed-fi/calendars/deletes | Retrieves deleted resources based on change version.
*CalendarsApi* | [**getCalendars**](docs/Api/CalendarsApi.md#getcalendars) | **GET** /ed-fi/calendars | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*CalendarsApi* | [**getCalendarsById**](docs/Api/CalendarsApi.md#getcalendarsbyid) | **GET** /ed-fi/calendars/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*CalendarsApi* | [**keyChangesCalendars**](docs/Api/CalendarsApi.md#keychangescalendars) | **GET** /ed-fi/calendars/keyChanges | Retrieves resources key changes based on change version.
*CalendarsApi* | [**postCalendar**](docs/Api/CalendarsApi.md#postcalendar) | **POST** /ed-fi/calendars | Creates or updates resources based on the natural key values of the supplied resource.
*CalendarsApi* | [**putCalendar**](docs/Api/CalendarsApi.md#putcalendar) | **PUT** /ed-fi/calendars/{id} | Updates a resource based on the resource identifier.
*CandidateEducatorPreparationProgramAssociationsApi* | [**deleteCandidateEducatorPreparationProgramAssociationById**](docs/Api/CandidateEducatorPreparationProgramAssociationsApi.md#deletecandidateeducatorpreparationprogramassociationbyid) | **DELETE** /tpdm/candidateEducatorPreparationProgramAssociations/{id} | Deletes an existing resource using the resource identifier.
*CandidateEducatorPreparationProgramAssociationsApi* | [**deletesCandidateEducatorPreparationProgramAssociations**](docs/Api/CandidateEducatorPreparationProgramAssociationsApi.md#deletescandidateeducatorpreparationprogramassociations) | **GET** /tpdm/candidateEducatorPreparationProgramAssociations/deletes | Retrieves deleted resources based on change version.
*CandidateEducatorPreparationProgramAssociationsApi* | [**getCandidateEducatorPreparationProgramAssociations**](docs/Api/CandidateEducatorPreparationProgramAssociationsApi.md#getcandidateeducatorpreparationprogramassociations) | **GET** /tpdm/candidateEducatorPreparationProgramAssociations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*CandidateEducatorPreparationProgramAssociationsApi* | [**getCandidateEducatorPreparationProgramAssociationsById**](docs/Api/CandidateEducatorPreparationProgramAssociationsApi.md#getcandidateeducatorpreparationprogramassociationsbyid) | **GET** /tpdm/candidateEducatorPreparationProgramAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*CandidateEducatorPreparationProgramAssociationsApi* | [**keyChangesCandidateEducatorPreparationProgramAssociations**](docs/Api/CandidateEducatorPreparationProgramAssociationsApi.md#keychangescandidateeducatorpreparationprogramassociations) | **GET** /tpdm/candidateEducatorPreparationProgramAssociations/keyChanges | Retrieves resources key changes based on change version.
*CandidateEducatorPreparationProgramAssociationsApi* | [**postCandidateEducatorPreparationProgramAssociation**](docs/Api/CandidateEducatorPreparationProgramAssociationsApi.md#postcandidateeducatorpreparationprogramassociation) | **POST** /tpdm/candidateEducatorPreparationProgramAssociations | Creates or updates resources based on the natural key values of the supplied resource.
*CandidateEducatorPreparationProgramAssociationsApi* | [**putCandidateEducatorPreparationProgramAssociation**](docs/Api/CandidateEducatorPreparationProgramAssociationsApi.md#putcandidateeducatorpreparationprogramassociation) | **PUT** /tpdm/candidateEducatorPreparationProgramAssociations/{id} | Updates a resource based on the resource identifier.
*CandidatesApi* | [**deleteCandidateById**](docs/Api/CandidatesApi.md#deletecandidatebyid) | **DELETE** /tpdm/candidates/{id} | Deletes an existing resource using the resource identifier.
*CandidatesApi* | [**deletesCandidates**](docs/Api/CandidatesApi.md#deletescandidates) | **GET** /tpdm/candidates/deletes | Retrieves deleted resources based on change version.
*CandidatesApi* | [**getCandidates**](docs/Api/CandidatesApi.md#getcandidates) | **GET** /tpdm/candidates | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*CandidatesApi* | [**getCandidatesById**](docs/Api/CandidatesApi.md#getcandidatesbyid) | **GET** /tpdm/candidates/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*CandidatesApi* | [**keyChangesCandidates**](docs/Api/CandidatesApi.md#keychangescandidates) | **GET** /tpdm/candidates/keyChanges | Retrieves resources key changes based on change version.
*CandidatesApi* | [**postCandidate**](docs/Api/CandidatesApi.md#postcandidate) | **POST** /tpdm/candidates | Creates or updates resources based on the natural key values of the supplied resource.
*CandidatesApi* | [**putCandidate**](docs/Api/CandidatesApi.md#putcandidate) | **PUT** /tpdm/candidates/{id} | Updates a resource based on the resource identifier.
*ChartOfAccountsApi* | [**deleteChartOfAccountById**](docs/Api/ChartOfAccountsApi.md#deletechartofaccountbyid) | **DELETE** /ed-fi/chartOfAccounts/{id} | Deletes an existing resource using the resource identifier.
*ChartOfAccountsApi* | [**deletesChartOfAccounts**](docs/Api/ChartOfAccountsApi.md#deleteschartofaccounts) | **GET** /ed-fi/chartOfAccounts/deletes | Retrieves deleted resources based on change version.
*ChartOfAccountsApi* | [**getChartOfAccounts**](docs/Api/ChartOfAccountsApi.md#getchartofaccounts) | **GET** /ed-fi/chartOfAccounts | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*ChartOfAccountsApi* | [**getChartOfAccountsById**](docs/Api/ChartOfAccountsApi.md#getchartofaccountsbyid) | **GET** /ed-fi/chartOfAccounts/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*ChartOfAccountsApi* | [**keyChangesChartOfAccounts**](docs/Api/ChartOfAccountsApi.md#keychangeschartofaccounts) | **GET** /ed-fi/chartOfAccounts/keyChanges | Retrieves resources key changes based on change version.
*ChartOfAccountsApi* | [**postChartOfAccount**](docs/Api/ChartOfAccountsApi.md#postchartofaccount) | **POST** /ed-fi/chartOfAccounts | Creates or updates resources based on the natural key values of the supplied resource.
*ChartOfAccountsApi* | [**putChartOfAccount**](docs/Api/ChartOfAccountsApi.md#putchartofaccount) | **PUT** /ed-fi/chartOfAccounts/{id} | Updates a resource based on the resource identifier.
*ClassPeriodsApi* | [**deleteClassPeriodById**](docs/Api/ClassPeriodsApi.md#deleteclassperiodbyid) | **DELETE** /ed-fi/classPeriods/{id} | Deletes an existing resource using the resource identifier.
*ClassPeriodsApi* | [**deletesClassPeriods**](docs/Api/ClassPeriodsApi.md#deletesclassperiods) | **GET** /ed-fi/classPeriods/deletes | Retrieves deleted resources based on change version.
*ClassPeriodsApi* | [**getClassPeriods**](docs/Api/ClassPeriodsApi.md#getclassperiods) | **GET** /ed-fi/classPeriods | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*ClassPeriodsApi* | [**getClassPeriodsById**](docs/Api/ClassPeriodsApi.md#getclassperiodsbyid) | **GET** /ed-fi/classPeriods/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*ClassPeriodsApi* | [**keyChangesClassPeriods**](docs/Api/ClassPeriodsApi.md#keychangesclassperiods) | **GET** /ed-fi/classPeriods/keyChanges | Retrieves resources key changes based on change version.
*ClassPeriodsApi* | [**postClassPeriod**](docs/Api/ClassPeriodsApi.md#postclassperiod) | **POST** /ed-fi/classPeriods | Creates or updates resources based on the natural key values of the supplied resource.
*ClassPeriodsApi* | [**putClassPeriod**](docs/Api/ClassPeriodsApi.md#putclassperiod) | **PUT** /ed-fi/classPeriods/{id} | Updates a resource based on the resource identifier.
*CohortsApi* | [**deleteCohortById**](docs/Api/CohortsApi.md#deletecohortbyid) | **DELETE** /ed-fi/cohorts/{id} | Deletes an existing resource using the resource identifier.
*CohortsApi* | [**deletesCohorts**](docs/Api/CohortsApi.md#deletescohorts) | **GET** /ed-fi/cohorts/deletes | Retrieves deleted resources based on change version.
*CohortsApi* | [**getCohorts**](docs/Api/CohortsApi.md#getcohorts) | **GET** /ed-fi/cohorts | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*CohortsApi* | [**getCohortsById**](docs/Api/CohortsApi.md#getcohortsbyid) | **GET** /ed-fi/cohorts/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*CohortsApi* | [**keyChangesCohorts**](docs/Api/CohortsApi.md#keychangescohorts) | **GET** /ed-fi/cohorts/keyChanges | Retrieves resources key changes based on change version.
*CohortsApi* | [**postCohort**](docs/Api/CohortsApi.md#postcohort) | **POST** /ed-fi/cohorts | Creates or updates resources based on the natural key values of the supplied resource.
*CohortsApi* | [**putCohort**](docs/Api/CohortsApi.md#putcohort) | **PUT** /ed-fi/cohorts/{id} | Updates a resource based on the resource identifier.
*CommunityOrganizationsApi* | [**deleteCommunityOrganizationById**](docs/Api/CommunityOrganizationsApi.md#deletecommunityorganizationbyid) | **DELETE** /ed-fi/communityOrganizations/{id} | Deletes an existing resource using the resource identifier.
*CommunityOrganizationsApi* | [**deletesCommunityOrganizations**](docs/Api/CommunityOrganizationsApi.md#deletescommunityorganizations) | **GET** /ed-fi/communityOrganizations/deletes | Retrieves deleted resources based on change version.
*CommunityOrganizationsApi* | [**getCommunityOrganizations**](docs/Api/CommunityOrganizationsApi.md#getcommunityorganizations) | **GET** /ed-fi/communityOrganizations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*CommunityOrganizationsApi* | [**getCommunityOrganizationsById**](docs/Api/CommunityOrganizationsApi.md#getcommunityorganizationsbyid) | **GET** /ed-fi/communityOrganizations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*CommunityOrganizationsApi* | [**keyChangesCommunityOrganizations**](docs/Api/CommunityOrganizationsApi.md#keychangescommunityorganizations) | **GET** /ed-fi/communityOrganizations/keyChanges | Retrieves resources key changes based on change version.
*CommunityOrganizationsApi* | [**postCommunityOrganization**](docs/Api/CommunityOrganizationsApi.md#postcommunityorganization) | **POST** /ed-fi/communityOrganizations | Creates or updates resources based on the natural key values of the supplied resource.
*CommunityOrganizationsApi* | [**putCommunityOrganization**](docs/Api/CommunityOrganizationsApi.md#putcommunityorganization) | **PUT** /ed-fi/communityOrganizations/{id} | Updates a resource based on the resource identifier.
*CommunityProviderLicensesApi* | [**deleteCommunityProviderLicenseById**](docs/Api/CommunityProviderLicensesApi.md#deletecommunityproviderlicensebyid) | **DELETE** /ed-fi/communityProviderLicenses/{id} | Deletes an existing resource using the resource identifier.
*CommunityProviderLicensesApi* | [**deletesCommunityProviderLicenses**](docs/Api/CommunityProviderLicensesApi.md#deletescommunityproviderlicenses) | **GET** /ed-fi/communityProviderLicenses/deletes | Retrieves deleted resources based on change version.
*CommunityProviderLicensesApi* | [**getCommunityProviderLicenses**](docs/Api/CommunityProviderLicensesApi.md#getcommunityproviderlicenses) | **GET** /ed-fi/communityProviderLicenses | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*CommunityProviderLicensesApi* | [**getCommunityProviderLicensesById**](docs/Api/CommunityProviderLicensesApi.md#getcommunityproviderlicensesbyid) | **GET** /ed-fi/communityProviderLicenses/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*CommunityProviderLicensesApi* | [**keyChangesCommunityProviderLicenses**](docs/Api/CommunityProviderLicensesApi.md#keychangescommunityproviderlicenses) | **GET** /ed-fi/communityProviderLicenses/keyChanges | Retrieves resources key changes based on change version.
*CommunityProviderLicensesApi* | [**postCommunityProviderLicense**](docs/Api/CommunityProviderLicensesApi.md#postcommunityproviderlicense) | **POST** /ed-fi/communityProviderLicenses | Creates or updates resources based on the natural key values of the supplied resource.
*CommunityProviderLicensesApi* | [**putCommunityProviderLicense**](docs/Api/CommunityProviderLicensesApi.md#putcommunityproviderlicense) | **PUT** /ed-fi/communityProviderLicenses/{id} | Updates a resource based on the resource identifier.
*CommunityProvidersApi* | [**deleteCommunityProviderById**](docs/Api/CommunityProvidersApi.md#deletecommunityproviderbyid) | **DELETE** /ed-fi/communityProviders/{id} | Deletes an existing resource using the resource identifier.
*CommunityProvidersApi* | [**deletesCommunityProviders**](docs/Api/CommunityProvidersApi.md#deletescommunityproviders) | **GET** /ed-fi/communityProviders/deletes | Retrieves deleted resources based on change version.
*CommunityProvidersApi* | [**getCommunityProviders**](docs/Api/CommunityProvidersApi.md#getcommunityproviders) | **GET** /ed-fi/communityProviders | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*CommunityProvidersApi* | [**getCommunityProvidersById**](docs/Api/CommunityProvidersApi.md#getcommunityprovidersbyid) | **GET** /ed-fi/communityProviders/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*CommunityProvidersApi* | [**keyChangesCommunityProviders**](docs/Api/CommunityProvidersApi.md#keychangescommunityproviders) | **GET** /ed-fi/communityProviders/keyChanges | Retrieves resources key changes based on change version.
*CommunityProvidersApi* | [**postCommunityProvider**](docs/Api/CommunityProvidersApi.md#postcommunityprovider) | **POST** /ed-fi/communityProviders | Creates or updates resources based on the natural key values of the supplied resource.
*CommunityProvidersApi* | [**putCommunityProvider**](docs/Api/CommunityProvidersApi.md#putcommunityprovider) | **PUT** /ed-fi/communityProviders/{id} | Updates a resource based on the resource identifier.
*CompetencyObjectivesApi* | [**deleteCompetencyObjectiveById**](docs/Api/CompetencyObjectivesApi.md#deletecompetencyobjectivebyid) | **DELETE** /ed-fi/competencyObjectives/{id} | Deletes an existing resource using the resource identifier.
*CompetencyObjectivesApi* | [**deletesCompetencyObjectives**](docs/Api/CompetencyObjectivesApi.md#deletescompetencyobjectives) | **GET** /ed-fi/competencyObjectives/deletes | Retrieves deleted resources based on change version.
*CompetencyObjectivesApi* | [**getCompetencyObjectives**](docs/Api/CompetencyObjectivesApi.md#getcompetencyobjectives) | **GET** /ed-fi/competencyObjectives | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*CompetencyObjectivesApi* | [**getCompetencyObjectivesById**](docs/Api/CompetencyObjectivesApi.md#getcompetencyobjectivesbyid) | **GET** /ed-fi/competencyObjectives/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*CompetencyObjectivesApi* | [**keyChangesCompetencyObjectives**](docs/Api/CompetencyObjectivesApi.md#keychangescompetencyobjectives) | **GET** /ed-fi/competencyObjectives/keyChanges | Retrieves resources key changes based on change version.
*CompetencyObjectivesApi* | [**postCompetencyObjective**](docs/Api/CompetencyObjectivesApi.md#postcompetencyobjective) | **POST** /ed-fi/competencyObjectives | Creates or updates resources based on the natural key values of the supplied resource.
*CompetencyObjectivesApi* | [**putCompetencyObjective**](docs/Api/CompetencyObjectivesApi.md#putcompetencyobjective) | **PUT** /ed-fi/competencyObjectives/{id} | Updates a resource based on the resource identifier.
*ContactsApi* | [**deleteContactById**](docs/Api/ContactsApi.md#deletecontactbyid) | **DELETE** /ed-fi/contacts/{id} | Deletes an existing resource using the resource identifier.
*ContactsApi* | [**deletesContacts**](docs/Api/ContactsApi.md#deletescontacts) | **GET** /ed-fi/contacts/deletes | Retrieves deleted resources based on change version.
*ContactsApi* | [**getContacts**](docs/Api/ContactsApi.md#getcontacts) | **GET** /ed-fi/contacts | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*ContactsApi* | [**getContactsById**](docs/Api/ContactsApi.md#getcontactsbyid) | **GET** /ed-fi/contacts/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*ContactsApi* | [**keyChangesContacts**](docs/Api/ContactsApi.md#keychangescontacts) | **GET** /ed-fi/contacts/keyChanges | Retrieves resources key changes based on change version.
*ContactsApi* | [**postContact**](docs/Api/ContactsApi.md#postcontact) | **POST** /ed-fi/contacts | Creates or updates resources based on the natural key values of the supplied resource.
*ContactsApi* | [**putContact**](docs/Api/ContactsApi.md#putcontact) | **PUT** /ed-fi/contacts/{id} | Updates a resource based on the resource identifier.
*CourseOfferingsApi* | [**deleteCourseOfferingById**](docs/Api/CourseOfferingsApi.md#deletecourseofferingbyid) | **DELETE** /ed-fi/courseOfferings/{id} | Deletes an existing resource using the resource identifier.
*CourseOfferingsApi* | [**deletesCourseOfferings**](docs/Api/CourseOfferingsApi.md#deletescourseofferings) | **GET** /ed-fi/courseOfferings/deletes | Retrieves deleted resources based on change version.
*CourseOfferingsApi* | [**getCourseOfferings**](docs/Api/CourseOfferingsApi.md#getcourseofferings) | **GET** /ed-fi/courseOfferings | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*CourseOfferingsApi* | [**getCourseOfferingsById**](docs/Api/CourseOfferingsApi.md#getcourseofferingsbyid) | **GET** /ed-fi/courseOfferings/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*CourseOfferingsApi* | [**keyChangesCourseOfferings**](docs/Api/CourseOfferingsApi.md#keychangescourseofferings) | **GET** /ed-fi/courseOfferings/keyChanges | Retrieves resources key changes based on change version.
*CourseOfferingsApi* | [**postCourseOffering**](docs/Api/CourseOfferingsApi.md#postcourseoffering) | **POST** /ed-fi/courseOfferings | Creates or updates resources based on the natural key values of the supplied resource.
*CourseOfferingsApi* | [**putCourseOffering**](docs/Api/CourseOfferingsApi.md#putcourseoffering) | **PUT** /ed-fi/courseOfferings/{id} | Updates a resource based on the resource identifier.
*CourseTranscriptsApi* | [**deleteCourseTranscriptById**](docs/Api/CourseTranscriptsApi.md#deletecoursetranscriptbyid) | **DELETE** /ed-fi/courseTranscripts/{id} | Deletes an existing resource using the resource identifier.
*CourseTranscriptsApi* | [**deletesCourseTranscripts**](docs/Api/CourseTranscriptsApi.md#deletescoursetranscripts) | **GET** /ed-fi/courseTranscripts/deletes | Retrieves deleted resources based on change version.
*CourseTranscriptsApi* | [**getCourseTranscripts**](docs/Api/CourseTranscriptsApi.md#getcoursetranscripts) | **GET** /ed-fi/courseTranscripts | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*CourseTranscriptsApi* | [**getCourseTranscriptsById**](docs/Api/CourseTranscriptsApi.md#getcoursetranscriptsbyid) | **GET** /ed-fi/courseTranscripts/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*CourseTranscriptsApi* | [**keyChangesCourseTranscripts**](docs/Api/CourseTranscriptsApi.md#keychangescoursetranscripts) | **GET** /ed-fi/courseTranscripts/keyChanges | Retrieves resources key changes based on change version.
*CourseTranscriptsApi* | [**postCourseTranscript**](docs/Api/CourseTranscriptsApi.md#postcoursetranscript) | **POST** /ed-fi/courseTranscripts | Creates or updates resources based on the natural key values of the supplied resource.
*CourseTranscriptsApi* | [**putCourseTranscript**](docs/Api/CourseTranscriptsApi.md#putcoursetranscript) | **PUT** /ed-fi/courseTranscripts/{id} | Updates a resource based on the resource identifier.
*CoursesApi* | [**deleteCourseById**](docs/Api/CoursesApi.md#deletecoursebyid) | **DELETE** /ed-fi/courses/{id} | Deletes an existing resource using the resource identifier.
*CoursesApi* | [**deletesCourses**](docs/Api/CoursesApi.md#deletescourses) | **GET** /ed-fi/courses/deletes | Retrieves deleted resources based on change version.
*CoursesApi* | [**getCourses**](docs/Api/CoursesApi.md#getcourses) | **GET** /ed-fi/courses | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*CoursesApi* | [**getCoursesById**](docs/Api/CoursesApi.md#getcoursesbyid) | **GET** /ed-fi/courses/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*CoursesApi* | [**keyChangesCourses**](docs/Api/CoursesApi.md#keychangescourses) | **GET** /ed-fi/courses/keyChanges | Retrieves resources key changes based on change version.
*CoursesApi* | [**postCourse**](docs/Api/CoursesApi.md#postcourse) | **POST** /ed-fi/courses | Creates or updates resources based on the natural key values of the supplied resource.
*CoursesApi* | [**putCourse**](docs/Api/CoursesApi.md#putcourse) | **PUT** /ed-fi/courses/{id} | Updates a resource based on the resource identifier.
*CredentialsApi* | [**deleteCredentialById**](docs/Api/CredentialsApi.md#deletecredentialbyid) | **DELETE** /ed-fi/credentials/{id} | Deletes an existing resource using the resource identifier.
*CredentialsApi* | [**deletesCredentials**](docs/Api/CredentialsApi.md#deletescredentials) | **GET** /ed-fi/credentials/deletes | Retrieves deleted resources based on change version.
*CredentialsApi* | [**getCredentials**](docs/Api/CredentialsApi.md#getcredentials) | **GET** /ed-fi/credentials | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*CredentialsApi* | [**getCredentialsById**](docs/Api/CredentialsApi.md#getcredentialsbyid) | **GET** /ed-fi/credentials/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*CredentialsApi* | [**keyChangesCredentials**](docs/Api/CredentialsApi.md#keychangescredentials) | **GET** /ed-fi/credentials/keyChanges | Retrieves resources key changes based on change version.
*CredentialsApi* | [**postCredential**](docs/Api/CredentialsApi.md#postcredential) | **POST** /ed-fi/credentials | Creates or updates resources based on the natural key values of the supplied resource.
*CredentialsApi* | [**putCredential**](docs/Api/CredentialsApi.md#putcredential) | **PUT** /ed-fi/credentials/{id} | Updates a resource based on the resource identifier.
*DescriptorMappingsApi* | [**deleteDescriptorMappingById**](docs/Api/DescriptorMappingsApi.md#deletedescriptormappingbyid) | **DELETE** /ed-fi/descriptorMappings/{id} | Deletes an existing resource using the resource identifier.
*DescriptorMappingsApi* | [**deletesDescriptorMappings**](docs/Api/DescriptorMappingsApi.md#deletesdescriptormappings) | **GET** /ed-fi/descriptorMappings/deletes | Retrieves deleted resources based on change version.
*DescriptorMappingsApi* | [**getDescriptorMappings**](docs/Api/DescriptorMappingsApi.md#getdescriptormappings) | **GET** /ed-fi/descriptorMappings | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*DescriptorMappingsApi* | [**getDescriptorMappingsById**](docs/Api/DescriptorMappingsApi.md#getdescriptormappingsbyid) | **GET** /ed-fi/descriptorMappings/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*DescriptorMappingsApi* | [**keyChangesDescriptorMappings**](docs/Api/DescriptorMappingsApi.md#keychangesdescriptormappings) | **GET** /ed-fi/descriptorMappings/keyChanges | Retrieves resources key changes based on change version.
*DescriptorMappingsApi* | [**postDescriptorMapping**](docs/Api/DescriptorMappingsApi.md#postdescriptormapping) | **POST** /ed-fi/descriptorMappings | Creates or updates resources based on the natural key values of the supplied resource.
*DescriptorMappingsApi* | [**putDescriptorMapping**](docs/Api/DescriptorMappingsApi.md#putdescriptormapping) | **PUT** /ed-fi/descriptorMappings/{id} | Updates a resource based on the resource identifier.
*DisciplineActionsApi* | [**deleteDisciplineActionById**](docs/Api/DisciplineActionsApi.md#deletedisciplineactionbyid) | **DELETE** /ed-fi/disciplineActions/{id} | Deletes an existing resource using the resource identifier.
*DisciplineActionsApi* | [**deletesDisciplineActions**](docs/Api/DisciplineActionsApi.md#deletesdisciplineactions) | **GET** /ed-fi/disciplineActions/deletes | Retrieves deleted resources based on change version.
*DisciplineActionsApi* | [**getDisciplineActions**](docs/Api/DisciplineActionsApi.md#getdisciplineactions) | **GET** /ed-fi/disciplineActions | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*DisciplineActionsApi* | [**getDisciplineActionsById**](docs/Api/DisciplineActionsApi.md#getdisciplineactionsbyid) | **GET** /ed-fi/disciplineActions/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*DisciplineActionsApi* | [**keyChangesDisciplineActions**](docs/Api/DisciplineActionsApi.md#keychangesdisciplineactions) | **GET** /ed-fi/disciplineActions/keyChanges | Retrieves resources key changes based on change version.
*DisciplineActionsApi* | [**postDisciplineAction**](docs/Api/DisciplineActionsApi.md#postdisciplineaction) | **POST** /ed-fi/disciplineActions | Creates or updates resources based on the natural key values of the supplied resource.
*DisciplineActionsApi* | [**putDisciplineAction**](docs/Api/DisciplineActionsApi.md#putdisciplineaction) | **PUT** /ed-fi/disciplineActions/{id} | Updates a resource based on the resource identifier.
*DisciplineIncidentsApi* | [**deleteDisciplineIncidentById**](docs/Api/DisciplineIncidentsApi.md#deletedisciplineincidentbyid) | **DELETE** /ed-fi/disciplineIncidents/{id} | Deletes an existing resource using the resource identifier.
*DisciplineIncidentsApi* | [**deletesDisciplineIncidents**](docs/Api/DisciplineIncidentsApi.md#deletesdisciplineincidents) | **GET** /ed-fi/disciplineIncidents/deletes | Retrieves deleted resources based on change version.
*DisciplineIncidentsApi* | [**getDisciplineIncidents**](docs/Api/DisciplineIncidentsApi.md#getdisciplineincidents) | **GET** /ed-fi/disciplineIncidents | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*DisciplineIncidentsApi* | [**getDisciplineIncidentsById**](docs/Api/DisciplineIncidentsApi.md#getdisciplineincidentsbyid) | **GET** /ed-fi/disciplineIncidents/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*DisciplineIncidentsApi* | [**keyChangesDisciplineIncidents**](docs/Api/DisciplineIncidentsApi.md#keychangesdisciplineincidents) | **GET** /ed-fi/disciplineIncidents/keyChanges | Retrieves resources key changes based on change version.
*DisciplineIncidentsApi* | [**postDisciplineIncident**](docs/Api/DisciplineIncidentsApi.md#postdisciplineincident) | **POST** /ed-fi/disciplineIncidents | Creates or updates resources based on the natural key values of the supplied resource.
*DisciplineIncidentsApi* | [**putDisciplineIncident**](docs/Api/DisciplineIncidentsApi.md#putdisciplineincident) | **PUT** /ed-fi/disciplineIncidents/{id} | Updates a resource based on the resource identifier.
*EducationContentsApi* | [**deleteEducationContentById**](docs/Api/EducationContentsApi.md#deleteeducationcontentbyid) | **DELETE** /ed-fi/educationContents/{id} | Deletes an existing resource using the resource identifier.
*EducationContentsApi* | [**deletesEducationContents**](docs/Api/EducationContentsApi.md#deleteseducationcontents) | **GET** /ed-fi/educationContents/deletes | Retrieves deleted resources based on change version.
*EducationContentsApi* | [**getEducationContents**](docs/Api/EducationContentsApi.md#geteducationcontents) | **GET** /ed-fi/educationContents | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*EducationContentsApi* | [**getEducationContentsById**](docs/Api/EducationContentsApi.md#geteducationcontentsbyid) | **GET** /ed-fi/educationContents/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*EducationContentsApi* | [**keyChangesEducationContents**](docs/Api/EducationContentsApi.md#keychangeseducationcontents) | **GET** /ed-fi/educationContents/keyChanges | Retrieves resources key changes based on change version.
*EducationContentsApi* | [**postEducationContent**](docs/Api/EducationContentsApi.md#posteducationcontent) | **POST** /ed-fi/educationContents | Creates or updates resources based on the natural key values of the supplied resource.
*EducationContentsApi* | [**putEducationContent**](docs/Api/EducationContentsApi.md#puteducationcontent) | **PUT** /ed-fi/educationContents/{id} | Updates a resource based on the resource identifier.
*EducationOrganizationInterventionPrescriptionAssociationsApi* | [**deleteEducationOrganizationInterventionPrescriptionAssociationById**](docs/Api/EducationOrganizationInterventionPrescriptionAssociationsApi.md#deleteeducationorganizationinterventionprescriptionassociationbyid) | **DELETE** /ed-fi/educationOrganizationInterventionPrescriptionAssociations/{id} | Deletes an existing resource using the resource identifier.
*EducationOrganizationInterventionPrescriptionAssociationsApi* | [**deletesEducationOrganizationInterventionPrescriptionAssociations**](docs/Api/EducationOrganizationInterventionPrescriptionAssociationsApi.md#deleteseducationorganizationinterventionprescriptionassociations) | **GET** /ed-fi/educationOrganizationInterventionPrescriptionAssociations/deletes | Retrieves deleted resources based on change version.
*EducationOrganizationInterventionPrescriptionAssociationsApi* | [**getEducationOrganizationInterventionPrescriptionAssociations**](docs/Api/EducationOrganizationInterventionPrescriptionAssociationsApi.md#geteducationorganizationinterventionprescriptionassociations) | **GET** /ed-fi/educationOrganizationInterventionPrescriptionAssociations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*EducationOrganizationInterventionPrescriptionAssociationsApi* | [**getEducationOrganizationInterventionPrescriptionAssociationsById**](docs/Api/EducationOrganizationInterventionPrescriptionAssociationsApi.md#geteducationorganizationinterventionprescriptionassociationsbyid) | **GET** /ed-fi/educationOrganizationInterventionPrescriptionAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*EducationOrganizationInterventionPrescriptionAssociationsApi* | [**keyChangesEducationOrganizationInterventionPrescriptionAssociations**](docs/Api/EducationOrganizationInterventionPrescriptionAssociationsApi.md#keychangeseducationorganizationinterventionprescriptionassociations) | **GET** /ed-fi/educationOrganizationInterventionPrescriptionAssociations/keyChanges | Retrieves resources key changes based on change version.
*EducationOrganizationInterventionPrescriptionAssociationsApi* | [**postEducationOrganizationInterventionPrescriptionAssociation**](docs/Api/EducationOrganizationInterventionPrescriptionAssociationsApi.md#posteducationorganizationinterventionprescriptionassociation) | **POST** /ed-fi/educationOrganizationInterventionPrescriptionAssociations | Creates or updates resources based on the natural key values of the supplied resource.
*EducationOrganizationInterventionPrescriptionAssociationsApi* | [**putEducationOrganizationInterventionPrescriptionAssociation**](docs/Api/EducationOrganizationInterventionPrescriptionAssociationsApi.md#puteducationorganizationinterventionprescriptionassociation) | **PUT** /ed-fi/educationOrganizationInterventionPrescriptionAssociations/{id} | Updates a resource based on the resource identifier.
*EducationOrganizationNetworkAssociationsApi* | [**deleteEducationOrganizationNetworkAssociationById**](docs/Api/EducationOrganizationNetworkAssociationsApi.md#deleteeducationorganizationnetworkassociationbyid) | **DELETE** /ed-fi/educationOrganizationNetworkAssociations/{id} | Deletes an existing resource using the resource identifier.
*EducationOrganizationNetworkAssociationsApi* | [**deletesEducationOrganizationNetworkAssociations**](docs/Api/EducationOrganizationNetworkAssociationsApi.md#deleteseducationorganizationnetworkassociations) | **GET** /ed-fi/educationOrganizationNetworkAssociations/deletes | Retrieves deleted resources based on change version.
*EducationOrganizationNetworkAssociationsApi* | [**getEducationOrganizationNetworkAssociations**](docs/Api/EducationOrganizationNetworkAssociationsApi.md#geteducationorganizationnetworkassociations) | **GET** /ed-fi/educationOrganizationNetworkAssociations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*EducationOrganizationNetworkAssociationsApi* | [**getEducationOrganizationNetworkAssociationsById**](docs/Api/EducationOrganizationNetworkAssociationsApi.md#geteducationorganizationnetworkassociationsbyid) | **GET** /ed-fi/educationOrganizationNetworkAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*EducationOrganizationNetworkAssociationsApi* | [**keyChangesEducationOrganizationNetworkAssociations**](docs/Api/EducationOrganizationNetworkAssociationsApi.md#keychangeseducationorganizationnetworkassociations) | **GET** /ed-fi/educationOrganizationNetworkAssociations/keyChanges | Retrieves resources key changes based on change version.
*EducationOrganizationNetworkAssociationsApi* | [**postEducationOrganizationNetworkAssociation**](docs/Api/EducationOrganizationNetworkAssociationsApi.md#posteducationorganizationnetworkassociation) | **POST** /ed-fi/educationOrganizationNetworkAssociations | Creates or updates resources based on the natural key values of the supplied resource.
*EducationOrganizationNetworkAssociationsApi* | [**putEducationOrganizationNetworkAssociation**](docs/Api/EducationOrganizationNetworkAssociationsApi.md#puteducationorganizationnetworkassociation) | **PUT** /ed-fi/educationOrganizationNetworkAssociations/{id} | Updates a resource based on the resource identifier.
*EducationOrganizationNetworksApi* | [**deleteEducationOrganizationNetworkById**](docs/Api/EducationOrganizationNetworksApi.md#deleteeducationorganizationnetworkbyid) | **DELETE** /ed-fi/educationOrganizationNetworks/{id} | Deletes an existing resource using the resource identifier.
*EducationOrganizationNetworksApi* | [**deletesEducationOrganizationNetworks**](docs/Api/EducationOrganizationNetworksApi.md#deleteseducationorganizationnetworks) | **GET** /ed-fi/educationOrganizationNetworks/deletes | Retrieves deleted resources based on change version.
*EducationOrganizationNetworksApi* | [**getEducationOrganizationNetworks**](docs/Api/EducationOrganizationNetworksApi.md#geteducationorganizationnetworks) | **GET** /ed-fi/educationOrganizationNetworks | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*EducationOrganizationNetworksApi* | [**getEducationOrganizationNetworksById**](docs/Api/EducationOrganizationNetworksApi.md#geteducationorganizationnetworksbyid) | **GET** /ed-fi/educationOrganizationNetworks/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*EducationOrganizationNetworksApi* | [**keyChangesEducationOrganizationNetworks**](docs/Api/EducationOrganizationNetworksApi.md#keychangeseducationorganizationnetworks) | **GET** /ed-fi/educationOrganizationNetworks/keyChanges | Retrieves resources key changes based on change version.
*EducationOrganizationNetworksApi* | [**postEducationOrganizationNetwork**](docs/Api/EducationOrganizationNetworksApi.md#posteducationorganizationnetwork) | **POST** /ed-fi/educationOrganizationNetworks | Creates or updates resources based on the natural key values of the supplied resource.
*EducationOrganizationNetworksApi* | [**putEducationOrganizationNetwork**](docs/Api/EducationOrganizationNetworksApi.md#puteducationorganizationnetwork) | **PUT** /ed-fi/educationOrganizationNetworks/{id} | Updates a resource based on the resource identifier.
*EducationOrganizationPeerAssociationsApi* | [**deleteEducationOrganizationPeerAssociationById**](docs/Api/EducationOrganizationPeerAssociationsApi.md#deleteeducationorganizationpeerassociationbyid) | **DELETE** /ed-fi/educationOrganizationPeerAssociations/{id} | Deletes an existing resource using the resource identifier.
*EducationOrganizationPeerAssociationsApi* | [**deletesEducationOrganizationPeerAssociations**](docs/Api/EducationOrganizationPeerAssociationsApi.md#deleteseducationorganizationpeerassociations) | **GET** /ed-fi/educationOrganizationPeerAssociations/deletes | Retrieves deleted resources based on change version.
*EducationOrganizationPeerAssociationsApi* | [**getEducationOrganizationPeerAssociations**](docs/Api/EducationOrganizationPeerAssociationsApi.md#geteducationorganizationpeerassociations) | **GET** /ed-fi/educationOrganizationPeerAssociations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*EducationOrganizationPeerAssociationsApi* | [**getEducationOrganizationPeerAssociationsById**](docs/Api/EducationOrganizationPeerAssociationsApi.md#geteducationorganizationpeerassociationsbyid) | **GET** /ed-fi/educationOrganizationPeerAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*EducationOrganizationPeerAssociationsApi* | [**keyChangesEducationOrganizationPeerAssociations**](docs/Api/EducationOrganizationPeerAssociationsApi.md#keychangeseducationorganizationpeerassociations) | **GET** /ed-fi/educationOrganizationPeerAssociations/keyChanges | Retrieves resources key changes based on change version.
*EducationOrganizationPeerAssociationsApi* | [**postEducationOrganizationPeerAssociation**](docs/Api/EducationOrganizationPeerAssociationsApi.md#posteducationorganizationpeerassociation) | **POST** /ed-fi/educationOrganizationPeerAssociations | Creates or updates resources based on the natural key values of the supplied resource.
*EducationOrganizationPeerAssociationsApi* | [**putEducationOrganizationPeerAssociation**](docs/Api/EducationOrganizationPeerAssociationsApi.md#puteducationorganizationpeerassociation) | **PUT** /ed-fi/educationOrganizationPeerAssociations/{id} | Updates a resource based on the resource identifier.
*EducationServiceCentersApi* | [**deleteEducationServiceCenterById**](docs/Api/EducationServiceCentersApi.md#deleteeducationservicecenterbyid) | **DELETE** /ed-fi/educationServiceCenters/{id} | Deletes an existing resource using the resource identifier.
*EducationServiceCentersApi* | [**deletesEducationServiceCenters**](docs/Api/EducationServiceCentersApi.md#deleteseducationservicecenters) | **GET** /ed-fi/educationServiceCenters/deletes | Retrieves deleted resources based on change version.
*EducationServiceCentersApi* | [**getEducationServiceCenters**](docs/Api/EducationServiceCentersApi.md#geteducationservicecenters) | **GET** /ed-fi/educationServiceCenters | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*EducationServiceCentersApi* | [**getEducationServiceCentersById**](docs/Api/EducationServiceCentersApi.md#geteducationservicecentersbyid) | **GET** /ed-fi/educationServiceCenters/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*EducationServiceCentersApi* | [**keyChangesEducationServiceCenters**](docs/Api/EducationServiceCentersApi.md#keychangeseducationservicecenters) | **GET** /ed-fi/educationServiceCenters/keyChanges | Retrieves resources key changes based on change version.
*EducationServiceCentersApi* | [**postEducationServiceCenter**](docs/Api/EducationServiceCentersApi.md#posteducationservicecenter) | **POST** /ed-fi/educationServiceCenters | Creates or updates resources based on the natural key values of the supplied resource.
*EducationServiceCentersApi* | [**putEducationServiceCenter**](docs/Api/EducationServiceCentersApi.md#puteducationservicecenter) | **PUT** /ed-fi/educationServiceCenters/{id} | Updates a resource based on the resource identifier.
*EducatorPreparationProgramsApi* | [**deleteEducatorPreparationProgramById**](docs/Api/EducatorPreparationProgramsApi.md#deleteeducatorpreparationprogrambyid) | **DELETE** /tpdm/educatorPreparationPrograms/{id} | Deletes an existing resource using the resource identifier.
*EducatorPreparationProgramsApi* | [**deletesEducatorPreparationPrograms**](docs/Api/EducatorPreparationProgramsApi.md#deleteseducatorpreparationprograms) | **GET** /tpdm/educatorPreparationPrograms/deletes | Retrieves deleted resources based on change version.
*EducatorPreparationProgramsApi* | [**getEducatorPreparationPrograms**](docs/Api/EducatorPreparationProgramsApi.md#geteducatorpreparationprograms) | **GET** /tpdm/educatorPreparationPrograms | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*EducatorPreparationProgramsApi* | [**getEducatorPreparationProgramsById**](docs/Api/EducatorPreparationProgramsApi.md#geteducatorpreparationprogramsbyid) | **GET** /tpdm/educatorPreparationPrograms/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*EducatorPreparationProgramsApi* | [**keyChangesEducatorPreparationPrograms**](docs/Api/EducatorPreparationProgramsApi.md#keychangeseducatorpreparationprograms) | **GET** /tpdm/educatorPreparationPrograms/keyChanges | Retrieves resources key changes based on change version.
*EducatorPreparationProgramsApi* | [**postEducatorPreparationProgram**](docs/Api/EducatorPreparationProgramsApi.md#posteducatorpreparationprogram) | **POST** /tpdm/educatorPreparationPrograms | Creates or updates resources based on the natural key values of the supplied resource.
*EducatorPreparationProgramsApi* | [**putEducatorPreparationProgram**](docs/Api/EducatorPreparationProgramsApi.md#puteducatorpreparationprogram) | **PUT** /tpdm/educatorPreparationPrograms/{id} | Updates a resource based on the resource identifier.
*EvaluationElementRatingsApi* | [**deleteEvaluationElementRatingById**](docs/Api/EvaluationElementRatingsApi.md#deleteevaluationelementratingbyid) | **DELETE** /tpdm/evaluationElementRatings/{id} | Deletes an existing resource using the resource identifier.
*EvaluationElementRatingsApi* | [**deletesEvaluationElementRatings**](docs/Api/EvaluationElementRatingsApi.md#deletesevaluationelementratings) | **GET** /tpdm/evaluationElementRatings/deletes | Retrieves deleted resources based on change version.
*EvaluationElementRatingsApi* | [**getEvaluationElementRatings**](docs/Api/EvaluationElementRatingsApi.md#getevaluationelementratings) | **GET** /tpdm/evaluationElementRatings | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*EvaluationElementRatingsApi* | [**getEvaluationElementRatingsById**](docs/Api/EvaluationElementRatingsApi.md#getevaluationelementratingsbyid) | **GET** /tpdm/evaluationElementRatings/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*EvaluationElementRatingsApi* | [**keyChangesEvaluationElementRatings**](docs/Api/EvaluationElementRatingsApi.md#keychangesevaluationelementratings) | **GET** /tpdm/evaluationElementRatings/keyChanges | Retrieves resources key changes based on change version.
*EvaluationElementRatingsApi* | [**postEvaluationElementRating**](docs/Api/EvaluationElementRatingsApi.md#postevaluationelementrating) | **POST** /tpdm/evaluationElementRatings | Creates or updates resources based on the natural key values of the supplied resource.
*EvaluationElementRatingsApi* | [**putEvaluationElementRating**](docs/Api/EvaluationElementRatingsApi.md#putevaluationelementrating) | **PUT** /tpdm/evaluationElementRatings/{id} | Updates a resource based on the resource identifier.
*EvaluationElementsApi* | [**deleteEvaluationElementById**](docs/Api/EvaluationElementsApi.md#deleteevaluationelementbyid) | **DELETE** /tpdm/evaluationElements/{id} | Deletes an existing resource using the resource identifier.
*EvaluationElementsApi* | [**deletesEvaluationElements**](docs/Api/EvaluationElementsApi.md#deletesevaluationelements) | **GET** /tpdm/evaluationElements/deletes | Retrieves deleted resources based on change version.
*EvaluationElementsApi* | [**getEvaluationElements**](docs/Api/EvaluationElementsApi.md#getevaluationelements) | **GET** /tpdm/evaluationElements | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*EvaluationElementsApi* | [**getEvaluationElementsById**](docs/Api/EvaluationElementsApi.md#getevaluationelementsbyid) | **GET** /tpdm/evaluationElements/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*EvaluationElementsApi* | [**keyChangesEvaluationElements**](docs/Api/EvaluationElementsApi.md#keychangesevaluationelements) | **GET** /tpdm/evaluationElements/keyChanges | Retrieves resources key changes based on change version.
*EvaluationElementsApi* | [**postEvaluationElement**](docs/Api/EvaluationElementsApi.md#postevaluationelement) | **POST** /tpdm/evaluationElements | Creates or updates resources based on the natural key values of the supplied resource.
*EvaluationElementsApi* | [**putEvaluationElement**](docs/Api/EvaluationElementsApi.md#putevaluationelement) | **PUT** /tpdm/evaluationElements/{id} | Updates a resource based on the resource identifier.
*EvaluationObjectiveRatingsApi* | [**deleteEvaluationObjectiveRatingById**](docs/Api/EvaluationObjectiveRatingsApi.md#deleteevaluationobjectiveratingbyid) | **DELETE** /tpdm/evaluationObjectiveRatings/{id} | Deletes an existing resource using the resource identifier.
*EvaluationObjectiveRatingsApi* | [**deletesEvaluationObjectiveRatings**](docs/Api/EvaluationObjectiveRatingsApi.md#deletesevaluationobjectiveratings) | **GET** /tpdm/evaluationObjectiveRatings/deletes | Retrieves deleted resources based on change version.
*EvaluationObjectiveRatingsApi* | [**getEvaluationObjectiveRatings**](docs/Api/EvaluationObjectiveRatingsApi.md#getevaluationobjectiveratings) | **GET** /tpdm/evaluationObjectiveRatings | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*EvaluationObjectiveRatingsApi* | [**getEvaluationObjectiveRatingsById**](docs/Api/EvaluationObjectiveRatingsApi.md#getevaluationobjectiveratingsbyid) | **GET** /tpdm/evaluationObjectiveRatings/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*EvaluationObjectiveRatingsApi* | [**keyChangesEvaluationObjectiveRatings**](docs/Api/EvaluationObjectiveRatingsApi.md#keychangesevaluationobjectiveratings) | **GET** /tpdm/evaluationObjectiveRatings/keyChanges | Retrieves resources key changes based on change version.
*EvaluationObjectiveRatingsApi* | [**postEvaluationObjectiveRating**](docs/Api/EvaluationObjectiveRatingsApi.md#postevaluationobjectiverating) | **POST** /tpdm/evaluationObjectiveRatings | Creates or updates resources based on the natural key values of the supplied resource.
*EvaluationObjectiveRatingsApi* | [**putEvaluationObjectiveRating**](docs/Api/EvaluationObjectiveRatingsApi.md#putevaluationobjectiverating) | **PUT** /tpdm/evaluationObjectiveRatings/{id} | Updates a resource based on the resource identifier.
*EvaluationObjectivesApi* | [**deleteEvaluationObjectiveById**](docs/Api/EvaluationObjectivesApi.md#deleteevaluationobjectivebyid) | **DELETE** /tpdm/evaluationObjectives/{id} | Deletes an existing resource using the resource identifier.
*EvaluationObjectivesApi* | [**deletesEvaluationObjectives**](docs/Api/EvaluationObjectivesApi.md#deletesevaluationobjectives) | **GET** /tpdm/evaluationObjectives/deletes | Retrieves deleted resources based on change version.
*EvaluationObjectivesApi* | [**getEvaluationObjectives**](docs/Api/EvaluationObjectivesApi.md#getevaluationobjectives) | **GET** /tpdm/evaluationObjectives | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*EvaluationObjectivesApi* | [**getEvaluationObjectivesById**](docs/Api/EvaluationObjectivesApi.md#getevaluationobjectivesbyid) | **GET** /tpdm/evaluationObjectives/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*EvaluationObjectivesApi* | [**keyChangesEvaluationObjectives**](docs/Api/EvaluationObjectivesApi.md#keychangesevaluationobjectives) | **GET** /tpdm/evaluationObjectives/keyChanges | Retrieves resources key changes based on change version.
*EvaluationObjectivesApi* | [**postEvaluationObjective**](docs/Api/EvaluationObjectivesApi.md#postevaluationobjective) | **POST** /tpdm/evaluationObjectives | Creates or updates resources based on the natural key values of the supplied resource.
*EvaluationObjectivesApi* | [**putEvaluationObjective**](docs/Api/EvaluationObjectivesApi.md#putevaluationobjective) | **PUT** /tpdm/evaluationObjectives/{id} | Updates a resource based on the resource identifier.
*EvaluationRatingsApi* | [**deleteEvaluationRatingById**](docs/Api/EvaluationRatingsApi.md#deleteevaluationratingbyid) | **DELETE** /tpdm/evaluationRatings/{id} | Deletes an existing resource using the resource identifier.
*EvaluationRatingsApi* | [**deletesEvaluationRatings**](docs/Api/EvaluationRatingsApi.md#deletesevaluationratings) | **GET** /tpdm/evaluationRatings/deletes | Retrieves deleted resources based on change version.
*EvaluationRatingsApi* | [**getEvaluationRatings**](docs/Api/EvaluationRatingsApi.md#getevaluationratings) | **GET** /tpdm/evaluationRatings | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*EvaluationRatingsApi* | [**getEvaluationRatingsById**](docs/Api/EvaluationRatingsApi.md#getevaluationratingsbyid) | **GET** /tpdm/evaluationRatings/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*EvaluationRatingsApi* | [**keyChangesEvaluationRatings**](docs/Api/EvaluationRatingsApi.md#keychangesevaluationratings) | **GET** /tpdm/evaluationRatings/keyChanges | Retrieves resources key changes based on change version.
*EvaluationRatingsApi* | [**postEvaluationRating**](docs/Api/EvaluationRatingsApi.md#postevaluationrating) | **POST** /tpdm/evaluationRatings | Creates or updates resources based on the natural key values of the supplied resource.
*EvaluationRatingsApi* | [**putEvaluationRating**](docs/Api/EvaluationRatingsApi.md#putevaluationrating) | **PUT** /tpdm/evaluationRatings/{id} | Updates a resource based on the resource identifier.
*EvaluationRubricDimensionsApi* | [**deleteEvaluationRubricDimensionById**](docs/Api/EvaluationRubricDimensionsApi.md#deleteevaluationrubricdimensionbyid) | **DELETE** /ed-fi/evaluationRubricDimensions/{id} | Deletes an existing resource using the resource identifier.
*EvaluationRubricDimensionsApi* | [**deletesEvaluationRubricDimensions**](docs/Api/EvaluationRubricDimensionsApi.md#deletesevaluationrubricdimensions) | **GET** /ed-fi/evaluationRubricDimensions/deletes | Retrieves deleted resources based on change version.
*EvaluationRubricDimensionsApi* | [**getEvaluationRubricDimensions**](docs/Api/EvaluationRubricDimensionsApi.md#getevaluationrubricdimensions) | **GET** /ed-fi/evaluationRubricDimensions | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*EvaluationRubricDimensionsApi* | [**getEvaluationRubricDimensionsById**](docs/Api/EvaluationRubricDimensionsApi.md#getevaluationrubricdimensionsbyid) | **GET** /ed-fi/evaluationRubricDimensions/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*EvaluationRubricDimensionsApi* | [**keyChangesEvaluationRubricDimensions**](docs/Api/EvaluationRubricDimensionsApi.md#keychangesevaluationrubricdimensions) | **GET** /ed-fi/evaluationRubricDimensions/keyChanges | Retrieves resources key changes based on change version.
*EvaluationRubricDimensionsApi* | [**postEvaluationRubricDimension**](docs/Api/EvaluationRubricDimensionsApi.md#postevaluationrubricdimension) | **POST** /ed-fi/evaluationRubricDimensions | Creates or updates resources based on the natural key values of the supplied resource.
*EvaluationRubricDimensionsApi* | [**putEvaluationRubricDimension**](docs/Api/EvaluationRubricDimensionsApi.md#putevaluationrubricdimension) | **PUT** /ed-fi/evaluationRubricDimensions/{id} | Updates a resource based on the resource identifier.
*EvaluationsApi* | [**deleteEvaluationById**](docs/Api/EvaluationsApi.md#deleteevaluationbyid) | **DELETE** /tpdm/evaluations/{id} | Deletes an existing resource using the resource identifier.
*EvaluationsApi* | [**deletesEvaluations**](docs/Api/EvaluationsApi.md#deletesevaluations) | **GET** /tpdm/evaluations/deletes | Retrieves deleted resources based on change version.
*EvaluationsApi* | [**getEvaluations**](docs/Api/EvaluationsApi.md#getevaluations) | **GET** /tpdm/evaluations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*EvaluationsApi* | [**getEvaluationsById**](docs/Api/EvaluationsApi.md#getevaluationsbyid) | **GET** /tpdm/evaluations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*EvaluationsApi* | [**keyChangesEvaluations**](docs/Api/EvaluationsApi.md#keychangesevaluations) | **GET** /tpdm/evaluations/keyChanges | Retrieves resources key changes based on change version.
*EvaluationsApi* | [**postEvaluation**](docs/Api/EvaluationsApi.md#postevaluation) | **POST** /tpdm/evaluations | Creates or updates resources based on the natural key values of the supplied resource.
*EvaluationsApi* | [**putEvaluation**](docs/Api/EvaluationsApi.md#putevaluation) | **PUT** /tpdm/evaluations/{id} | Updates a resource based on the resource identifier.
*FeederSchoolAssociationsApi* | [**deleteFeederSchoolAssociationById**](docs/Api/FeederSchoolAssociationsApi.md#deletefeederschoolassociationbyid) | **DELETE** /ed-fi/feederSchoolAssociations/{id} | Deletes an existing resource using the resource identifier.
*FeederSchoolAssociationsApi* | [**deletesFeederSchoolAssociations**](docs/Api/FeederSchoolAssociationsApi.md#deletesfeederschoolassociations) | **GET** /ed-fi/feederSchoolAssociations/deletes | Retrieves deleted resources based on change version.
*FeederSchoolAssociationsApi* | [**getFeederSchoolAssociations**](docs/Api/FeederSchoolAssociationsApi.md#getfeederschoolassociations) | **GET** /ed-fi/feederSchoolAssociations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*FeederSchoolAssociationsApi* | [**getFeederSchoolAssociationsById**](docs/Api/FeederSchoolAssociationsApi.md#getfeederschoolassociationsbyid) | **GET** /ed-fi/feederSchoolAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*FeederSchoolAssociationsApi* | [**keyChangesFeederSchoolAssociations**](docs/Api/FeederSchoolAssociationsApi.md#keychangesfeederschoolassociations) | **GET** /ed-fi/feederSchoolAssociations/keyChanges | Retrieves resources key changes based on change version.
*FeederSchoolAssociationsApi* | [**postFeederSchoolAssociation**](docs/Api/FeederSchoolAssociationsApi.md#postfeederschoolassociation) | **POST** /ed-fi/feederSchoolAssociations | Creates or updates resources based on the natural key values of the supplied resource.
*FeederSchoolAssociationsApi* | [**putFeederSchoolAssociation**](docs/Api/FeederSchoolAssociationsApi.md#putfeederschoolassociation) | **PUT** /ed-fi/feederSchoolAssociations/{id} | Updates a resource based on the resource identifier.
*FinancialAidsApi* | [**deleteFinancialAidById**](docs/Api/FinancialAidsApi.md#deletefinancialaidbyid) | **DELETE** /tpdm/financialAids/{id} | Deletes an existing resource using the resource identifier.
*FinancialAidsApi* | [**deletesFinancialAids**](docs/Api/FinancialAidsApi.md#deletesfinancialaids) | **GET** /tpdm/financialAids/deletes | Retrieves deleted resources based on change version.
*FinancialAidsApi* | [**getFinancialAids**](docs/Api/FinancialAidsApi.md#getfinancialaids) | **GET** /tpdm/financialAids | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*FinancialAidsApi* | [**getFinancialAidsById**](docs/Api/FinancialAidsApi.md#getfinancialaidsbyid) | **GET** /tpdm/financialAids/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*FinancialAidsApi* | [**keyChangesFinancialAids**](docs/Api/FinancialAidsApi.md#keychangesfinancialaids) | **GET** /tpdm/financialAids/keyChanges | Retrieves resources key changes based on change version.
*FinancialAidsApi* | [**postFinancialAid**](docs/Api/FinancialAidsApi.md#postfinancialaid) | **POST** /tpdm/financialAids | Creates or updates resources based on the natural key values of the supplied resource.
*FinancialAidsApi* | [**putFinancialAid**](docs/Api/FinancialAidsApi.md#putfinancialaid) | **PUT** /tpdm/financialAids/{id} | Updates a resource based on the resource identifier.
*FunctionDimensionsApi* | [**deleteFunctionDimensionById**](docs/Api/FunctionDimensionsApi.md#deletefunctiondimensionbyid) | **DELETE** /ed-fi/functionDimensions/{id} | Deletes an existing resource using the resource identifier.
*FunctionDimensionsApi* | [**deletesFunctionDimensions**](docs/Api/FunctionDimensionsApi.md#deletesfunctiondimensions) | **GET** /ed-fi/functionDimensions/deletes | Retrieves deleted resources based on change version.
*FunctionDimensionsApi* | [**getFunctionDimensions**](docs/Api/FunctionDimensionsApi.md#getfunctiondimensions) | **GET** /ed-fi/functionDimensions | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*FunctionDimensionsApi* | [**getFunctionDimensionsById**](docs/Api/FunctionDimensionsApi.md#getfunctiondimensionsbyid) | **GET** /ed-fi/functionDimensions/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*FunctionDimensionsApi* | [**keyChangesFunctionDimensions**](docs/Api/FunctionDimensionsApi.md#keychangesfunctiondimensions) | **GET** /ed-fi/functionDimensions/keyChanges | Retrieves resources key changes based on change version.
*FunctionDimensionsApi* | [**postFunctionDimension**](docs/Api/FunctionDimensionsApi.md#postfunctiondimension) | **POST** /ed-fi/functionDimensions | Creates or updates resources based on the natural key values of the supplied resource.
*FunctionDimensionsApi* | [**putFunctionDimension**](docs/Api/FunctionDimensionsApi.md#putfunctiondimension) | **PUT** /ed-fi/functionDimensions/{id} | Updates a resource based on the resource identifier.
*FundDimensionsApi* | [**deleteFundDimensionById**](docs/Api/FundDimensionsApi.md#deletefunddimensionbyid) | **DELETE** /ed-fi/fundDimensions/{id} | Deletes an existing resource using the resource identifier.
*FundDimensionsApi* | [**deletesFundDimensions**](docs/Api/FundDimensionsApi.md#deletesfunddimensions) | **GET** /ed-fi/fundDimensions/deletes | Retrieves deleted resources based on change version.
*FundDimensionsApi* | [**getFundDimensions**](docs/Api/FundDimensionsApi.md#getfunddimensions) | **GET** /ed-fi/fundDimensions | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*FundDimensionsApi* | [**getFundDimensionsById**](docs/Api/FundDimensionsApi.md#getfunddimensionsbyid) | **GET** /ed-fi/fundDimensions/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*FundDimensionsApi* | [**keyChangesFundDimensions**](docs/Api/FundDimensionsApi.md#keychangesfunddimensions) | **GET** /ed-fi/fundDimensions/keyChanges | Retrieves resources key changes based on change version.
*FundDimensionsApi* | [**postFundDimension**](docs/Api/FundDimensionsApi.md#postfunddimension) | **POST** /ed-fi/fundDimensions | Creates or updates resources based on the natural key values of the supplied resource.
*FundDimensionsApi* | [**putFundDimension**](docs/Api/FundDimensionsApi.md#putfunddimension) | **PUT** /ed-fi/fundDimensions/{id} | Updates a resource based on the resource identifier.
*GradebookEntriesApi* | [**deleteGradebookEntryById**](docs/Api/GradebookEntriesApi.md#deletegradebookentrybyid) | **DELETE** /ed-fi/gradebookEntries/{id} | Deletes an existing resource using the resource identifier.
*GradebookEntriesApi* | [**deletesGradebookEntries**](docs/Api/GradebookEntriesApi.md#deletesgradebookentries) | **GET** /ed-fi/gradebookEntries/deletes | Retrieves deleted resources based on change version.
*GradebookEntriesApi* | [**getGradebookEntries**](docs/Api/GradebookEntriesApi.md#getgradebookentries) | **GET** /ed-fi/gradebookEntries | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*GradebookEntriesApi* | [**getGradebookEntriesById**](docs/Api/GradebookEntriesApi.md#getgradebookentriesbyid) | **GET** /ed-fi/gradebookEntries/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*GradebookEntriesApi* | [**keyChangesGradebookEntries**](docs/Api/GradebookEntriesApi.md#keychangesgradebookentries) | **GET** /ed-fi/gradebookEntries/keyChanges | Retrieves resources key changes based on change version.
*GradebookEntriesApi* | [**postGradebookEntry**](docs/Api/GradebookEntriesApi.md#postgradebookentry) | **POST** /ed-fi/gradebookEntries | Creates or updates resources based on the natural key values of the supplied resource.
*GradebookEntriesApi* | [**putGradebookEntry**](docs/Api/GradebookEntriesApi.md#putgradebookentry) | **PUT** /ed-fi/gradebookEntries/{id} | Updates a resource based on the resource identifier.
*GradesApi* | [**deleteGradeById**](docs/Api/GradesApi.md#deletegradebyid) | **DELETE** /ed-fi/grades/{id} | Deletes an existing resource using the resource identifier.
*GradesApi* | [**deletesGrades**](docs/Api/GradesApi.md#deletesgrades) | **GET** /ed-fi/grades/deletes | Retrieves deleted resources based on change version.
*GradesApi* | [**getGrades**](docs/Api/GradesApi.md#getgrades) | **GET** /ed-fi/grades | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*GradesApi* | [**getGradesById**](docs/Api/GradesApi.md#getgradesbyid) | **GET** /ed-fi/grades/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*GradesApi* | [**keyChangesGrades**](docs/Api/GradesApi.md#keychangesgrades) | **GET** /ed-fi/grades/keyChanges | Retrieves resources key changes based on change version.
*GradesApi* | [**postGrade**](docs/Api/GradesApi.md#postgrade) | **POST** /ed-fi/grades | Creates or updates resources based on the natural key values of the supplied resource.
*GradesApi* | [**putGrade**](docs/Api/GradesApi.md#putgrade) | **PUT** /ed-fi/grades/{id} | Updates a resource based on the resource identifier.
*GradingPeriodsApi* | [**deleteGradingPeriodById**](docs/Api/GradingPeriodsApi.md#deletegradingperiodbyid) | **DELETE** /ed-fi/gradingPeriods/{id} | Deletes an existing resource using the resource identifier.
*GradingPeriodsApi* | [**deletesGradingPeriods**](docs/Api/GradingPeriodsApi.md#deletesgradingperiods) | **GET** /ed-fi/gradingPeriods/deletes | Retrieves deleted resources based on change version.
*GradingPeriodsApi* | [**getGradingPeriods**](docs/Api/GradingPeriodsApi.md#getgradingperiods) | **GET** /ed-fi/gradingPeriods | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*GradingPeriodsApi* | [**getGradingPeriodsById**](docs/Api/GradingPeriodsApi.md#getgradingperiodsbyid) | **GET** /ed-fi/gradingPeriods/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*GradingPeriodsApi* | [**keyChangesGradingPeriods**](docs/Api/GradingPeriodsApi.md#keychangesgradingperiods) | **GET** /ed-fi/gradingPeriods/keyChanges | Retrieves resources key changes based on change version.
*GradingPeriodsApi* | [**postGradingPeriod**](docs/Api/GradingPeriodsApi.md#postgradingperiod) | **POST** /ed-fi/gradingPeriods | Creates or updates resources based on the natural key values of the supplied resource.
*GradingPeriodsApi* | [**putGradingPeriod**](docs/Api/GradingPeriodsApi.md#putgradingperiod) | **PUT** /ed-fi/gradingPeriods/{id} | Updates a resource based on the resource identifier.
*GraduationPlansApi* | [**deleteGraduationPlanById**](docs/Api/GraduationPlansApi.md#deletegraduationplanbyid) | **DELETE** /ed-fi/graduationPlans/{id} | Deletes an existing resource using the resource identifier.
*GraduationPlansApi* | [**deletesGraduationPlans**](docs/Api/GraduationPlansApi.md#deletesgraduationplans) | **GET** /ed-fi/graduationPlans/deletes | Retrieves deleted resources based on change version.
*GraduationPlansApi* | [**getGraduationPlans**](docs/Api/GraduationPlansApi.md#getgraduationplans) | **GET** /ed-fi/graduationPlans | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*GraduationPlansApi* | [**getGraduationPlansById**](docs/Api/GraduationPlansApi.md#getgraduationplansbyid) | **GET** /ed-fi/graduationPlans/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*GraduationPlansApi* | [**keyChangesGraduationPlans**](docs/Api/GraduationPlansApi.md#keychangesgraduationplans) | **GET** /ed-fi/graduationPlans/keyChanges | Retrieves resources key changes based on change version.
*GraduationPlansApi* | [**postGraduationPlan**](docs/Api/GraduationPlansApi.md#postgraduationplan) | **POST** /ed-fi/graduationPlans | Creates or updates resources based on the natural key values of the supplied resource.
*GraduationPlansApi* | [**putGraduationPlan**](docs/Api/GraduationPlansApi.md#putgraduationplan) | **PUT** /ed-fi/graduationPlans/{id} | Updates a resource based on the resource identifier.
*InterventionPrescriptionsApi* | [**deleteInterventionPrescriptionById**](docs/Api/InterventionPrescriptionsApi.md#deleteinterventionprescriptionbyid) | **DELETE** /ed-fi/interventionPrescriptions/{id} | Deletes an existing resource using the resource identifier.
*InterventionPrescriptionsApi* | [**deletesInterventionPrescriptions**](docs/Api/InterventionPrescriptionsApi.md#deletesinterventionprescriptions) | **GET** /ed-fi/interventionPrescriptions/deletes | Retrieves deleted resources based on change version.
*InterventionPrescriptionsApi* | [**getInterventionPrescriptions**](docs/Api/InterventionPrescriptionsApi.md#getinterventionprescriptions) | **GET** /ed-fi/interventionPrescriptions | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*InterventionPrescriptionsApi* | [**getInterventionPrescriptionsById**](docs/Api/InterventionPrescriptionsApi.md#getinterventionprescriptionsbyid) | **GET** /ed-fi/interventionPrescriptions/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*InterventionPrescriptionsApi* | [**keyChangesInterventionPrescriptions**](docs/Api/InterventionPrescriptionsApi.md#keychangesinterventionprescriptions) | **GET** /ed-fi/interventionPrescriptions/keyChanges | Retrieves resources key changes based on change version.
*InterventionPrescriptionsApi* | [**postInterventionPrescription**](docs/Api/InterventionPrescriptionsApi.md#postinterventionprescription) | **POST** /ed-fi/interventionPrescriptions | Creates or updates resources based on the natural key values of the supplied resource.
*InterventionPrescriptionsApi* | [**putInterventionPrescription**](docs/Api/InterventionPrescriptionsApi.md#putinterventionprescription) | **PUT** /ed-fi/interventionPrescriptions/{id} | Updates a resource based on the resource identifier.
*InterventionStudiesApi* | [**deleteInterventionStudyById**](docs/Api/InterventionStudiesApi.md#deleteinterventionstudybyid) | **DELETE** /ed-fi/interventionStudies/{id} | Deletes an existing resource using the resource identifier.
*InterventionStudiesApi* | [**deletesInterventionStudies**](docs/Api/InterventionStudiesApi.md#deletesinterventionstudies) | **GET** /ed-fi/interventionStudies/deletes | Retrieves deleted resources based on change version.
*InterventionStudiesApi* | [**getInterventionStudies**](docs/Api/InterventionStudiesApi.md#getinterventionstudies) | **GET** /ed-fi/interventionStudies | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*InterventionStudiesApi* | [**getInterventionStudiesById**](docs/Api/InterventionStudiesApi.md#getinterventionstudiesbyid) | **GET** /ed-fi/interventionStudies/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*InterventionStudiesApi* | [**keyChangesInterventionStudies**](docs/Api/InterventionStudiesApi.md#keychangesinterventionstudies) | **GET** /ed-fi/interventionStudies/keyChanges | Retrieves resources key changes based on change version.
*InterventionStudiesApi* | [**postInterventionStudy**](docs/Api/InterventionStudiesApi.md#postinterventionstudy) | **POST** /ed-fi/interventionStudies | Creates or updates resources based on the natural key values of the supplied resource.
*InterventionStudiesApi* | [**putInterventionStudy**](docs/Api/InterventionStudiesApi.md#putinterventionstudy) | **PUT** /ed-fi/interventionStudies/{id} | Updates a resource based on the resource identifier.
*InterventionsApi* | [**deleteInterventionById**](docs/Api/InterventionsApi.md#deleteinterventionbyid) | **DELETE** /ed-fi/interventions/{id} | Deletes an existing resource using the resource identifier.
*InterventionsApi* | [**deletesInterventions**](docs/Api/InterventionsApi.md#deletesinterventions) | **GET** /ed-fi/interventions/deletes | Retrieves deleted resources based on change version.
*InterventionsApi* | [**getInterventions**](docs/Api/InterventionsApi.md#getinterventions) | **GET** /ed-fi/interventions | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*InterventionsApi* | [**getInterventionsById**](docs/Api/InterventionsApi.md#getinterventionsbyid) | **GET** /ed-fi/interventions/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*InterventionsApi* | [**keyChangesInterventions**](docs/Api/InterventionsApi.md#keychangesinterventions) | **GET** /ed-fi/interventions/keyChanges | Retrieves resources key changes based on change version.
*InterventionsApi* | [**postIntervention**](docs/Api/InterventionsApi.md#postintervention) | **POST** /ed-fi/interventions | Creates or updates resources based on the natural key values of the supplied resource.
*InterventionsApi* | [**putIntervention**](docs/Api/InterventionsApi.md#putintervention) | **PUT** /ed-fi/interventions/{id} | Updates a resource based on the resource identifier.
*LearningStandardEquivalenceAssociationsApi* | [**deleteLearningStandardEquivalenceAssociationById**](docs/Api/LearningStandardEquivalenceAssociationsApi.md#deletelearningstandardequivalenceassociationbyid) | **DELETE** /ed-fi/learningStandardEquivalenceAssociations/{id} | Deletes an existing resource using the resource identifier.
*LearningStandardEquivalenceAssociationsApi* | [**deletesLearningStandardEquivalenceAssociations**](docs/Api/LearningStandardEquivalenceAssociationsApi.md#deleteslearningstandardequivalenceassociations) | **GET** /ed-fi/learningStandardEquivalenceAssociations/deletes | Retrieves deleted resources based on change version.
*LearningStandardEquivalenceAssociationsApi* | [**getLearningStandardEquivalenceAssociations**](docs/Api/LearningStandardEquivalenceAssociationsApi.md#getlearningstandardequivalenceassociations) | **GET** /ed-fi/learningStandardEquivalenceAssociations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*LearningStandardEquivalenceAssociationsApi* | [**getLearningStandardEquivalenceAssociationsById**](docs/Api/LearningStandardEquivalenceAssociationsApi.md#getlearningstandardequivalenceassociationsbyid) | **GET** /ed-fi/learningStandardEquivalenceAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*LearningStandardEquivalenceAssociationsApi* | [**keyChangesLearningStandardEquivalenceAssociations**](docs/Api/LearningStandardEquivalenceAssociationsApi.md#keychangeslearningstandardequivalenceassociations) | **GET** /ed-fi/learningStandardEquivalenceAssociations/keyChanges | Retrieves resources key changes based on change version.
*LearningStandardEquivalenceAssociationsApi* | [**postLearningStandardEquivalenceAssociation**](docs/Api/LearningStandardEquivalenceAssociationsApi.md#postlearningstandardequivalenceassociation) | **POST** /ed-fi/learningStandardEquivalenceAssociations | Creates or updates resources based on the natural key values of the supplied resource.
*LearningStandardEquivalenceAssociationsApi* | [**putLearningStandardEquivalenceAssociation**](docs/Api/LearningStandardEquivalenceAssociationsApi.md#putlearningstandardequivalenceassociation) | **PUT** /ed-fi/learningStandardEquivalenceAssociations/{id} | Updates a resource based on the resource identifier.
*LearningStandardsApi* | [**deleteLearningStandardById**](docs/Api/LearningStandardsApi.md#deletelearningstandardbyid) | **DELETE** /ed-fi/learningStandards/{id} | Deletes an existing resource using the resource identifier.
*LearningStandardsApi* | [**deletesLearningStandards**](docs/Api/LearningStandardsApi.md#deleteslearningstandards) | **GET** /ed-fi/learningStandards/deletes | Retrieves deleted resources based on change version.
*LearningStandardsApi* | [**getLearningStandards**](docs/Api/LearningStandardsApi.md#getlearningstandards) | **GET** /ed-fi/learningStandards | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*LearningStandardsApi* | [**getLearningStandardsById**](docs/Api/LearningStandardsApi.md#getlearningstandardsbyid) | **GET** /ed-fi/learningStandards/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*LearningStandardsApi* | [**keyChangesLearningStandards**](docs/Api/LearningStandardsApi.md#keychangeslearningstandards) | **GET** /ed-fi/learningStandards/keyChanges | Retrieves resources key changes based on change version.
*LearningStandardsApi* | [**postLearningStandard**](docs/Api/LearningStandardsApi.md#postlearningstandard) | **POST** /ed-fi/learningStandards | Creates or updates resources based on the natural key values of the supplied resource.
*LearningStandardsApi* | [**putLearningStandard**](docs/Api/LearningStandardsApi.md#putlearningstandard) | **PUT** /ed-fi/learningStandards/{id} | Updates a resource based on the resource identifier.
*LocalAccountsApi* | [**deleteLocalAccountById**](docs/Api/LocalAccountsApi.md#deletelocalaccountbyid) | **DELETE** /ed-fi/localAccounts/{id} | Deletes an existing resource using the resource identifier.
*LocalAccountsApi* | [**deletesLocalAccounts**](docs/Api/LocalAccountsApi.md#deleteslocalaccounts) | **GET** /ed-fi/localAccounts/deletes | Retrieves deleted resources based on change version.
*LocalAccountsApi* | [**getLocalAccounts**](docs/Api/LocalAccountsApi.md#getlocalaccounts) | **GET** /ed-fi/localAccounts | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*LocalAccountsApi* | [**getLocalAccountsById**](docs/Api/LocalAccountsApi.md#getlocalaccountsbyid) | **GET** /ed-fi/localAccounts/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*LocalAccountsApi* | [**keyChangesLocalAccounts**](docs/Api/LocalAccountsApi.md#keychangeslocalaccounts) | **GET** /ed-fi/localAccounts/keyChanges | Retrieves resources key changes based on change version.
*LocalAccountsApi* | [**postLocalAccount**](docs/Api/LocalAccountsApi.md#postlocalaccount) | **POST** /ed-fi/localAccounts | Creates or updates resources based on the natural key values of the supplied resource.
*LocalAccountsApi* | [**putLocalAccount**](docs/Api/LocalAccountsApi.md#putlocalaccount) | **PUT** /ed-fi/localAccounts/{id} | Updates a resource based on the resource identifier.
*LocalActualsApi* | [**deleteLocalActualById**](docs/Api/LocalActualsApi.md#deletelocalactualbyid) | **DELETE** /ed-fi/localActuals/{id} | Deletes an existing resource using the resource identifier.
*LocalActualsApi* | [**deletesLocalActuals**](docs/Api/LocalActualsApi.md#deleteslocalactuals) | **GET** /ed-fi/localActuals/deletes | Retrieves deleted resources based on change version.
*LocalActualsApi* | [**getLocalActuals**](docs/Api/LocalActualsApi.md#getlocalactuals) | **GET** /ed-fi/localActuals | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*LocalActualsApi* | [**getLocalActualsById**](docs/Api/LocalActualsApi.md#getlocalactualsbyid) | **GET** /ed-fi/localActuals/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*LocalActualsApi* | [**keyChangesLocalActuals**](docs/Api/LocalActualsApi.md#keychangeslocalactuals) | **GET** /ed-fi/localActuals/keyChanges | Retrieves resources key changes based on change version.
*LocalActualsApi* | [**postLocalActual**](docs/Api/LocalActualsApi.md#postlocalactual) | **POST** /ed-fi/localActuals | Creates or updates resources based on the natural key values of the supplied resource.
*LocalActualsApi* | [**putLocalActual**](docs/Api/LocalActualsApi.md#putlocalactual) | **PUT** /ed-fi/localActuals/{id} | Updates a resource based on the resource identifier.
*LocalBudgetsApi* | [**deleteLocalBudgetById**](docs/Api/LocalBudgetsApi.md#deletelocalbudgetbyid) | **DELETE** /ed-fi/localBudgets/{id} | Deletes an existing resource using the resource identifier.
*LocalBudgetsApi* | [**deletesLocalBudgets**](docs/Api/LocalBudgetsApi.md#deleteslocalbudgets) | **GET** /ed-fi/localBudgets/deletes | Retrieves deleted resources based on change version.
*LocalBudgetsApi* | [**getLocalBudgets**](docs/Api/LocalBudgetsApi.md#getlocalbudgets) | **GET** /ed-fi/localBudgets | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*LocalBudgetsApi* | [**getLocalBudgetsById**](docs/Api/LocalBudgetsApi.md#getlocalbudgetsbyid) | **GET** /ed-fi/localBudgets/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*LocalBudgetsApi* | [**keyChangesLocalBudgets**](docs/Api/LocalBudgetsApi.md#keychangeslocalbudgets) | **GET** /ed-fi/localBudgets/keyChanges | Retrieves resources key changes based on change version.
*LocalBudgetsApi* | [**postLocalBudget**](docs/Api/LocalBudgetsApi.md#postlocalbudget) | **POST** /ed-fi/localBudgets | Creates or updates resources based on the natural key values of the supplied resource.
*LocalBudgetsApi* | [**putLocalBudget**](docs/Api/LocalBudgetsApi.md#putlocalbudget) | **PUT** /ed-fi/localBudgets/{id} | Updates a resource based on the resource identifier.
*LocalContractedStaffsApi* | [**deleteLocalContractedStaffById**](docs/Api/LocalContractedStaffsApi.md#deletelocalcontractedstaffbyid) | **DELETE** /ed-fi/localContractedStaffs/{id} | Deletes an existing resource using the resource identifier.
*LocalContractedStaffsApi* | [**deletesLocalContractedStaffs**](docs/Api/LocalContractedStaffsApi.md#deleteslocalcontractedstaffs) | **GET** /ed-fi/localContractedStaffs/deletes | Retrieves deleted resources based on change version.
*LocalContractedStaffsApi* | [**getLocalContractedStaffs**](docs/Api/LocalContractedStaffsApi.md#getlocalcontractedstaffs) | **GET** /ed-fi/localContractedStaffs | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*LocalContractedStaffsApi* | [**getLocalContractedStaffsById**](docs/Api/LocalContractedStaffsApi.md#getlocalcontractedstaffsbyid) | **GET** /ed-fi/localContractedStaffs/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*LocalContractedStaffsApi* | [**keyChangesLocalContractedStaffs**](docs/Api/LocalContractedStaffsApi.md#keychangeslocalcontractedstaffs) | **GET** /ed-fi/localContractedStaffs/keyChanges | Retrieves resources key changes based on change version.
*LocalContractedStaffsApi* | [**postLocalContractedStaff**](docs/Api/LocalContractedStaffsApi.md#postlocalcontractedstaff) | **POST** /ed-fi/localContractedStaffs | Creates or updates resources based on the natural key values of the supplied resource.
*LocalContractedStaffsApi* | [**putLocalContractedStaff**](docs/Api/LocalContractedStaffsApi.md#putlocalcontractedstaff) | **PUT** /ed-fi/localContractedStaffs/{id} | Updates a resource based on the resource identifier.
*LocalEducationAgenciesApi* | [**deleteLocalEducationAgencyById**](docs/Api/LocalEducationAgenciesApi.md#deletelocaleducationagencybyid) | **DELETE** /ed-fi/localEducationAgencies/{id} | Deletes an existing resource using the resource identifier.
*LocalEducationAgenciesApi* | [**deletesLocalEducationAgencies**](docs/Api/LocalEducationAgenciesApi.md#deleteslocaleducationagencies) | **GET** /ed-fi/localEducationAgencies/deletes | Retrieves deleted resources based on change version.
*LocalEducationAgenciesApi* | [**getLocalEducationAgencies**](docs/Api/LocalEducationAgenciesApi.md#getlocaleducationagencies) | **GET** /ed-fi/localEducationAgencies | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*LocalEducationAgenciesApi* | [**getLocalEducationAgenciesById**](docs/Api/LocalEducationAgenciesApi.md#getlocaleducationagenciesbyid) | **GET** /ed-fi/localEducationAgencies/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*LocalEducationAgenciesApi* | [**keyChangesLocalEducationAgencies**](docs/Api/LocalEducationAgenciesApi.md#keychangeslocaleducationagencies) | **GET** /ed-fi/localEducationAgencies/keyChanges | Retrieves resources key changes based on change version.
*LocalEducationAgenciesApi* | [**postLocalEducationAgency**](docs/Api/LocalEducationAgenciesApi.md#postlocaleducationagency) | **POST** /ed-fi/localEducationAgencies | Creates or updates resources based on the natural key values of the supplied resource.
*LocalEducationAgenciesApi* | [**putLocalEducationAgency**](docs/Api/LocalEducationAgenciesApi.md#putlocaleducationagency) | **PUT** /ed-fi/localEducationAgencies/{id} | Updates a resource based on the resource identifier.
*LocalEncumbrancesApi* | [**deleteLocalEncumbranceById**](docs/Api/LocalEncumbrancesApi.md#deletelocalencumbrancebyid) | **DELETE** /ed-fi/localEncumbrances/{id} | Deletes an existing resource using the resource identifier.
*LocalEncumbrancesApi* | [**deletesLocalEncumbrances**](docs/Api/LocalEncumbrancesApi.md#deleteslocalencumbrances) | **GET** /ed-fi/localEncumbrances/deletes | Retrieves deleted resources based on change version.
*LocalEncumbrancesApi* | [**getLocalEncumbrances**](docs/Api/LocalEncumbrancesApi.md#getlocalencumbrances) | **GET** /ed-fi/localEncumbrances | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*LocalEncumbrancesApi* | [**getLocalEncumbrancesById**](docs/Api/LocalEncumbrancesApi.md#getlocalencumbrancesbyid) | **GET** /ed-fi/localEncumbrances/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*LocalEncumbrancesApi* | [**keyChangesLocalEncumbrances**](docs/Api/LocalEncumbrancesApi.md#keychangeslocalencumbrances) | **GET** /ed-fi/localEncumbrances/keyChanges | Retrieves resources key changes based on change version.
*LocalEncumbrancesApi* | [**postLocalEncumbrance**](docs/Api/LocalEncumbrancesApi.md#postlocalencumbrance) | **POST** /ed-fi/localEncumbrances | Creates or updates resources based on the natural key values of the supplied resource.
*LocalEncumbrancesApi* | [**putLocalEncumbrance**](docs/Api/LocalEncumbrancesApi.md#putlocalencumbrance) | **PUT** /ed-fi/localEncumbrances/{id} | Updates a resource based on the resource identifier.
*LocalPayrollsApi* | [**deleteLocalPayrollById**](docs/Api/LocalPayrollsApi.md#deletelocalpayrollbyid) | **DELETE** /ed-fi/localPayrolls/{id} | Deletes an existing resource using the resource identifier.
*LocalPayrollsApi* | [**deletesLocalPayrolls**](docs/Api/LocalPayrollsApi.md#deleteslocalpayrolls) | **GET** /ed-fi/localPayrolls/deletes | Retrieves deleted resources based on change version.
*LocalPayrollsApi* | [**getLocalPayrolls**](docs/Api/LocalPayrollsApi.md#getlocalpayrolls) | **GET** /ed-fi/localPayrolls | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*LocalPayrollsApi* | [**getLocalPayrollsById**](docs/Api/LocalPayrollsApi.md#getlocalpayrollsbyid) | **GET** /ed-fi/localPayrolls/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*LocalPayrollsApi* | [**keyChangesLocalPayrolls**](docs/Api/LocalPayrollsApi.md#keychangeslocalpayrolls) | **GET** /ed-fi/localPayrolls/keyChanges | Retrieves resources key changes based on change version.
*LocalPayrollsApi* | [**postLocalPayroll**](docs/Api/LocalPayrollsApi.md#postlocalpayroll) | **POST** /ed-fi/localPayrolls | Creates or updates resources based on the natural key values of the supplied resource.
*LocalPayrollsApi* | [**putLocalPayroll**](docs/Api/LocalPayrollsApi.md#putlocalpayroll) | **PUT** /ed-fi/localPayrolls/{id} | Updates a resource based on the resource identifier.
*LocationsApi* | [**deleteLocationById**](docs/Api/LocationsApi.md#deletelocationbyid) | **DELETE** /ed-fi/locations/{id} | Deletes an existing resource using the resource identifier.
*LocationsApi* | [**deletesLocations**](docs/Api/LocationsApi.md#deleteslocations) | **GET** /ed-fi/locations/deletes | Retrieves deleted resources based on change version.
*LocationsApi* | [**getLocations**](docs/Api/LocationsApi.md#getlocations) | **GET** /ed-fi/locations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*LocationsApi* | [**getLocationsById**](docs/Api/LocationsApi.md#getlocationsbyid) | **GET** /ed-fi/locations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*LocationsApi* | [**keyChangesLocations**](docs/Api/LocationsApi.md#keychangeslocations) | **GET** /ed-fi/locations/keyChanges | Retrieves resources key changes based on change version.
*LocationsApi* | [**postLocation**](docs/Api/LocationsApi.md#postlocation) | **POST** /ed-fi/locations | Creates or updates resources based on the natural key values of the supplied resource.
*LocationsApi* | [**putLocation**](docs/Api/LocationsApi.md#putlocation) | **PUT** /ed-fi/locations/{id} | Updates a resource based on the resource identifier.
*ObjectDimensionsApi* | [**deleteObjectDimensionById**](docs/Api/ObjectDimensionsApi.md#deleteobjectdimensionbyid) | **DELETE** /ed-fi/objectDimensions/{id} | Deletes an existing resource using the resource identifier.
*ObjectDimensionsApi* | [**deletesObjectDimensions**](docs/Api/ObjectDimensionsApi.md#deletesobjectdimensions) | **GET** /ed-fi/objectDimensions/deletes | Retrieves deleted resources based on change version.
*ObjectDimensionsApi* | [**getObjectDimensions**](docs/Api/ObjectDimensionsApi.md#getobjectdimensions) | **GET** /ed-fi/objectDimensions | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*ObjectDimensionsApi* | [**getObjectDimensionsById**](docs/Api/ObjectDimensionsApi.md#getobjectdimensionsbyid) | **GET** /ed-fi/objectDimensions/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*ObjectDimensionsApi* | [**keyChangesObjectDimensions**](docs/Api/ObjectDimensionsApi.md#keychangesobjectdimensions) | **GET** /ed-fi/objectDimensions/keyChanges | Retrieves resources key changes based on change version.
*ObjectDimensionsApi* | [**postObjectDimension**](docs/Api/ObjectDimensionsApi.md#postobjectdimension) | **POST** /ed-fi/objectDimensions | Creates or updates resources based on the natural key values of the supplied resource.
*ObjectDimensionsApi* | [**putObjectDimension**](docs/Api/ObjectDimensionsApi.md#putobjectdimension) | **PUT** /ed-fi/objectDimensions/{id} | Updates a resource based on the resource identifier.
*ObjectiveAssessmentsApi* | [**deleteObjectiveAssessmentById**](docs/Api/ObjectiveAssessmentsApi.md#deleteobjectiveassessmentbyid) | **DELETE** /ed-fi/objectiveAssessments/{id} | Deletes an existing resource using the resource identifier.
*ObjectiveAssessmentsApi* | [**deletesObjectiveAssessments**](docs/Api/ObjectiveAssessmentsApi.md#deletesobjectiveassessments) | **GET** /ed-fi/objectiveAssessments/deletes | Retrieves deleted resources based on change version.
*ObjectiveAssessmentsApi* | [**getObjectiveAssessments**](docs/Api/ObjectiveAssessmentsApi.md#getobjectiveassessments) | **GET** /ed-fi/objectiveAssessments | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*ObjectiveAssessmentsApi* | [**getObjectiveAssessmentsById**](docs/Api/ObjectiveAssessmentsApi.md#getobjectiveassessmentsbyid) | **GET** /ed-fi/objectiveAssessments/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*ObjectiveAssessmentsApi* | [**keyChangesObjectiveAssessments**](docs/Api/ObjectiveAssessmentsApi.md#keychangesobjectiveassessments) | **GET** /ed-fi/objectiveAssessments/keyChanges | Retrieves resources key changes based on change version.
*ObjectiveAssessmentsApi* | [**postObjectiveAssessment**](docs/Api/ObjectiveAssessmentsApi.md#postobjectiveassessment) | **POST** /ed-fi/objectiveAssessments | Creates or updates resources based on the natural key values of the supplied resource.
*ObjectiveAssessmentsApi* | [**putObjectiveAssessment**](docs/Api/ObjectiveAssessmentsApi.md#putobjectiveassessment) | **PUT** /ed-fi/objectiveAssessments/{id} | Updates a resource based on the resource identifier.
*OpenStaffPositionsApi* | [**deleteOpenStaffPositionById**](docs/Api/OpenStaffPositionsApi.md#deleteopenstaffpositionbyid) | **DELETE** /ed-fi/openStaffPositions/{id} | Deletes an existing resource using the resource identifier.
*OpenStaffPositionsApi* | [**deletesOpenStaffPositions**](docs/Api/OpenStaffPositionsApi.md#deletesopenstaffpositions) | **GET** /ed-fi/openStaffPositions/deletes | Retrieves deleted resources based on change version.
*OpenStaffPositionsApi* | [**getOpenStaffPositions**](docs/Api/OpenStaffPositionsApi.md#getopenstaffpositions) | **GET** /ed-fi/openStaffPositions | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*OpenStaffPositionsApi* | [**getOpenStaffPositionsById**](docs/Api/OpenStaffPositionsApi.md#getopenstaffpositionsbyid) | **GET** /ed-fi/openStaffPositions/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*OpenStaffPositionsApi* | [**keyChangesOpenStaffPositions**](docs/Api/OpenStaffPositionsApi.md#keychangesopenstaffpositions) | **GET** /ed-fi/openStaffPositions/keyChanges | Retrieves resources key changes based on change version.
*OpenStaffPositionsApi* | [**postOpenStaffPosition**](docs/Api/OpenStaffPositionsApi.md#postopenstaffposition) | **POST** /ed-fi/openStaffPositions | Creates or updates resources based on the natural key values of the supplied resource.
*OpenStaffPositionsApi* | [**putOpenStaffPosition**](docs/Api/OpenStaffPositionsApi.md#putopenstaffposition) | **PUT** /ed-fi/openStaffPositions/{id} | Updates a resource based on the resource identifier.
*OperationalUnitDimensionsApi* | [**deleteOperationalUnitDimensionById**](docs/Api/OperationalUnitDimensionsApi.md#deleteoperationalunitdimensionbyid) | **DELETE** /ed-fi/operationalUnitDimensions/{id} | Deletes an existing resource using the resource identifier.
*OperationalUnitDimensionsApi* | [**deletesOperationalUnitDimensions**](docs/Api/OperationalUnitDimensionsApi.md#deletesoperationalunitdimensions) | **GET** /ed-fi/operationalUnitDimensions/deletes | Retrieves deleted resources based on change version.
*OperationalUnitDimensionsApi* | [**getOperationalUnitDimensions**](docs/Api/OperationalUnitDimensionsApi.md#getoperationalunitdimensions) | **GET** /ed-fi/operationalUnitDimensions | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*OperationalUnitDimensionsApi* | [**getOperationalUnitDimensionsById**](docs/Api/OperationalUnitDimensionsApi.md#getoperationalunitdimensionsbyid) | **GET** /ed-fi/operationalUnitDimensions/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*OperationalUnitDimensionsApi* | [**keyChangesOperationalUnitDimensions**](docs/Api/OperationalUnitDimensionsApi.md#keychangesoperationalunitdimensions) | **GET** /ed-fi/operationalUnitDimensions/keyChanges | Retrieves resources key changes based on change version.
*OperationalUnitDimensionsApi* | [**postOperationalUnitDimension**](docs/Api/OperationalUnitDimensionsApi.md#postoperationalunitdimension) | **POST** /ed-fi/operationalUnitDimensions | Creates or updates resources based on the natural key values of the supplied resource.
*OperationalUnitDimensionsApi* | [**putOperationalUnitDimension**](docs/Api/OperationalUnitDimensionsApi.md#putoperationalunitdimension) | **PUT** /ed-fi/operationalUnitDimensions/{id} | Updates a resource based on the resource identifier.
*OrganizationDepartmentsApi* | [**deleteOrganizationDepartmentById**](docs/Api/OrganizationDepartmentsApi.md#deleteorganizationdepartmentbyid) | **DELETE** /ed-fi/organizationDepartments/{id} | Deletes an existing resource using the resource identifier.
*OrganizationDepartmentsApi* | [**deletesOrganizationDepartments**](docs/Api/OrganizationDepartmentsApi.md#deletesorganizationdepartments) | **GET** /ed-fi/organizationDepartments/deletes | Retrieves deleted resources based on change version.
*OrganizationDepartmentsApi* | [**getOrganizationDepartments**](docs/Api/OrganizationDepartmentsApi.md#getorganizationdepartments) | **GET** /ed-fi/organizationDepartments | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*OrganizationDepartmentsApi* | [**getOrganizationDepartmentsById**](docs/Api/OrganizationDepartmentsApi.md#getorganizationdepartmentsbyid) | **GET** /ed-fi/organizationDepartments/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*OrganizationDepartmentsApi* | [**keyChangesOrganizationDepartments**](docs/Api/OrganizationDepartmentsApi.md#keychangesorganizationdepartments) | **GET** /ed-fi/organizationDepartments/keyChanges | Retrieves resources key changes based on change version.
*OrganizationDepartmentsApi* | [**postOrganizationDepartment**](docs/Api/OrganizationDepartmentsApi.md#postorganizationdepartment) | **POST** /ed-fi/organizationDepartments | Creates or updates resources based on the natural key values of the supplied resource.
*OrganizationDepartmentsApi* | [**putOrganizationDepartment**](docs/Api/OrganizationDepartmentsApi.md#putorganizationdepartment) | **PUT** /ed-fi/organizationDepartments/{id} | Updates a resource based on the resource identifier.
*PeopleApi* | [**deletePersonById**](docs/Api/PeopleApi.md#deletepersonbyid) | **DELETE** /ed-fi/people/{id} | Deletes an existing resource using the resource identifier.
*PeopleApi* | [**deletesPeople**](docs/Api/PeopleApi.md#deletespeople) | **GET** /ed-fi/people/deletes | Retrieves deleted resources based on change version.
*PeopleApi* | [**getPeople**](docs/Api/PeopleApi.md#getpeople) | **GET** /ed-fi/people | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*PeopleApi* | [**getPeopleById**](docs/Api/PeopleApi.md#getpeoplebyid) | **GET** /ed-fi/people/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*PeopleApi* | [**keyChangesPeople**](docs/Api/PeopleApi.md#keychangespeople) | **GET** /ed-fi/people/keyChanges | Retrieves resources key changes based on change version.
*PeopleApi* | [**postPerson**](docs/Api/PeopleApi.md#postperson) | **POST** /ed-fi/people | Creates or updates resources based on the natural key values of the supplied resource.
*PeopleApi* | [**putPerson**](docs/Api/PeopleApi.md#putperson) | **PUT** /ed-fi/people/{id} | Updates a resource based on the resource identifier.
*PerformanceEvaluationRatingsApi* | [**deletePerformanceEvaluationRatingById**](docs/Api/PerformanceEvaluationRatingsApi.md#deleteperformanceevaluationratingbyid) | **DELETE** /tpdm/performanceEvaluationRatings/{id} | Deletes an existing resource using the resource identifier.
*PerformanceEvaluationRatingsApi* | [**deletesPerformanceEvaluationRatings**](docs/Api/PerformanceEvaluationRatingsApi.md#deletesperformanceevaluationratings) | **GET** /tpdm/performanceEvaluationRatings/deletes | Retrieves deleted resources based on change version.
*PerformanceEvaluationRatingsApi* | [**getPerformanceEvaluationRatings**](docs/Api/PerformanceEvaluationRatingsApi.md#getperformanceevaluationratings) | **GET** /tpdm/performanceEvaluationRatings | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*PerformanceEvaluationRatingsApi* | [**getPerformanceEvaluationRatingsById**](docs/Api/PerformanceEvaluationRatingsApi.md#getperformanceevaluationratingsbyid) | **GET** /tpdm/performanceEvaluationRatings/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*PerformanceEvaluationRatingsApi* | [**keyChangesPerformanceEvaluationRatings**](docs/Api/PerformanceEvaluationRatingsApi.md#keychangesperformanceevaluationratings) | **GET** /tpdm/performanceEvaluationRatings/keyChanges | Retrieves resources key changes based on change version.
*PerformanceEvaluationRatingsApi* | [**postPerformanceEvaluationRating**](docs/Api/PerformanceEvaluationRatingsApi.md#postperformanceevaluationrating) | **POST** /tpdm/performanceEvaluationRatings | Creates or updates resources based on the natural key values of the supplied resource.
*PerformanceEvaluationRatingsApi* | [**putPerformanceEvaluationRating**](docs/Api/PerformanceEvaluationRatingsApi.md#putperformanceevaluationrating) | **PUT** /tpdm/performanceEvaluationRatings/{id} | Updates a resource based on the resource identifier.
*PerformanceEvaluationsApi* | [**deletePerformanceEvaluationById**](docs/Api/PerformanceEvaluationsApi.md#deleteperformanceevaluationbyid) | **DELETE** /tpdm/performanceEvaluations/{id} | Deletes an existing resource using the resource identifier.
*PerformanceEvaluationsApi* | [**deletesPerformanceEvaluations**](docs/Api/PerformanceEvaluationsApi.md#deletesperformanceevaluations) | **GET** /tpdm/performanceEvaluations/deletes | Retrieves deleted resources based on change version.
*PerformanceEvaluationsApi* | [**getPerformanceEvaluations**](docs/Api/PerformanceEvaluationsApi.md#getperformanceevaluations) | **GET** /tpdm/performanceEvaluations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*PerformanceEvaluationsApi* | [**getPerformanceEvaluationsById**](docs/Api/PerformanceEvaluationsApi.md#getperformanceevaluationsbyid) | **GET** /tpdm/performanceEvaluations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*PerformanceEvaluationsApi* | [**keyChangesPerformanceEvaluations**](docs/Api/PerformanceEvaluationsApi.md#keychangesperformanceevaluations) | **GET** /tpdm/performanceEvaluations/keyChanges | Retrieves resources key changes based on change version.
*PerformanceEvaluationsApi* | [**postPerformanceEvaluation**](docs/Api/PerformanceEvaluationsApi.md#postperformanceevaluation) | **POST** /tpdm/performanceEvaluations | Creates or updates resources based on the natural key values of the supplied resource.
*PerformanceEvaluationsApi* | [**putPerformanceEvaluation**](docs/Api/PerformanceEvaluationsApi.md#putperformanceevaluation) | **PUT** /tpdm/performanceEvaluations/{id} | Updates a resource based on the resource identifier.
*PostSecondaryEventsApi* | [**deletePostSecondaryEventById**](docs/Api/PostSecondaryEventsApi.md#deletepostsecondaryeventbyid) | **DELETE** /ed-fi/postSecondaryEvents/{id} | Deletes an existing resource using the resource identifier.
*PostSecondaryEventsApi* | [**deletesPostSecondaryEvents**](docs/Api/PostSecondaryEventsApi.md#deletespostsecondaryevents) | **GET** /ed-fi/postSecondaryEvents/deletes | Retrieves deleted resources based on change version.
*PostSecondaryEventsApi* | [**getPostSecondaryEvents**](docs/Api/PostSecondaryEventsApi.md#getpostsecondaryevents) | **GET** /ed-fi/postSecondaryEvents | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*PostSecondaryEventsApi* | [**getPostSecondaryEventsById**](docs/Api/PostSecondaryEventsApi.md#getpostsecondaryeventsbyid) | **GET** /ed-fi/postSecondaryEvents/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*PostSecondaryEventsApi* | [**keyChangesPostSecondaryEvents**](docs/Api/PostSecondaryEventsApi.md#keychangespostsecondaryevents) | **GET** /ed-fi/postSecondaryEvents/keyChanges | Retrieves resources key changes based on change version.
*PostSecondaryEventsApi* | [**postPostSecondaryEvent**](docs/Api/PostSecondaryEventsApi.md#postpostsecondaryevent) | **POST** /ed-fi/postSecondaryEvents | Creates or updates resources based on the natural key values of the supplied resource.
*PostSecondaryEventsApi* | [**putPostSecondaryEvent**](docs/Api/PostSecondaryEventsApi.md#putpostsecondaryevent) | **PUT** /ed-fi/postSecondaryEvents/{id} | Updates a resource based on the resource identifier.
*PostSecondaryInstitutionsApi* | [**deletePostSecondaryInstitutionById**](docs/Api/PostSecondaryInstitutionsApi.md#deletepostsecondaryinstitutionbyid) | **DELETE** /ed-fi/postSecondaryInstitutions/{id} | Deletes an existing resource using the resource identifier.
*PostSecondaryInstitutionsApi* | [**deletesPostSecondaryInstitutions**](docs/Api/PostSecondaryInstitutionsApi.md#deletespostsecondaryinstitutions) | **GET** /ed-fi/postSecondaryInstitutions/deletes | Retrieves deleted resources based on change version.
*PostSecondaryInstitutionsApi* | [**getPostSecondaryInstitutions**](docs/Api/PostSecondaryInstitutionsApi.md#getpostsecondaryinstitutions) | **GET** /ed-fi/postSecondaryInstitutions | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*PostSecondaryInstitutionsApi* | [**getPostSecondaryInstitutionsById**](docs/Api/PostSecondaryInstitutionsApi.md#getpostsecondaryinstitutionsbyid) | **GET** /ed-fi/postSecondaryInstitutions/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*PostSecondaryInstitutionsApi* | [**keyChangesPostSecondaryInstitutions**](docs/Api/PostSecondaryInstitutionsApi.md#keychangespostsecondaryinstitutions) | **GET** /ed-fi/postSecondaryInstitutions/keyChanges | Retrieves resources key changes based on change version.
*PostSecondaryInstitutionsApi* | [**postPostSecondaryInstitution**](docs/Api/PostSecondaryInstitutionsApi.md#postpostsecondaryinstitution) | **POST** /ed-fi/postSecondaryInstitutions | Creates or updates resources based on the natural key values of the supplied resource.
*PostSecondaryInstitutionsApi* | [**putPostSecondaryInstitution**](docs/Api/PostSecondaryInstitutionsApi.md#putpostsecondaryinstitution) | **PUT** /ed-fi/postSecondaryInstitutions/{id} | Updates a resource based on the resource identifier.
*ProgramDimensionsApi* | [**deleteProgramDimensionById**](docs/Api/ProgramDimensionsApi.md#deleteprogramdimensionbyid) | **DELETE** /ed-fi/programDimensions/{id} | Deletes an existing resource using the resource identifier.
*ProgramDimensionsApi* | [**deletesProgramDimensions**](docs/Api/ProgramDimensionsApi.md#deletesprogramdimensions) | **GET** /ed-fi/programDimensions/deletes | Retrieves deleted resources based on change version.
*ProgramDimensionsApi* | [**getProgramDimensions**](docs/Api/ProgramDimensionsApi.md#getprogramdimensions) | **GET** /ed-fi/programDimensions | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*ProgramDimensionsApi* | [**getProgramDimensionsById**](docs/Api/ProgramDimensionsApi.md#getprogramdimensionsbyid) | **GET** /ed-fi/programDimensions/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*ProgramDimensionsApi* | [**keyChangesProgramDimensions**](docs/Api/ProgramDimensionsApi.md#keychangesprogramdimensions) | **GET** /ed-fi/programDimensions/keyChanges | Retrieves resources key changes based on change version.
*ProgramDimensionsApi* | [**postProgramDimension**](docs/Api/ProgramDimensionsApi.md#postprogramdimension) | **POST** /ed-fi/programDimensions | Creates or updates resources based on the natural key values of the supplied resource.
*ProgramDimensionsApi* | [**putProgramDimension**](docs/Api/ProgramDimensionsApi.md#putprogramdimension) | **PUT** /ed-fi/programDimensions/{id} | Updates a resource based on the resource identifier.
*ProgramEvaluationElementsApi* | [**deleteProgramEvaluationElementById**](docs/Api/ProgramEvaluationElementsApi.md#deleteprogramevaluationelementbyid) | **DELETE** /ed-fi/programEvaluationElements/{id} | Deletes an existing resource using the resource identifier.
*ProgramEvaluationElementsApi* | [**deletesProgramEvaluationElements**](docs/Api/ProgramEvaluationElementsApi.md#deletesprogramevaluationelements) | **GET** /ed-fi/programEvaluationElements/deletes | Retrieves deleted resources based on change version.
*ProgramEvaluationElementsApi* | [**getProgramEvaluationElements**](docs/Api/ProgramEvaluationElementsApi.md#getprogramevaluationelements) | **GET** /ed-fi/programEvaluationElements | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*ProgramEvaluationElementsApi* | [**getProgramEvaluationElementsById**](docs/Api/ProgramEvaluationElementsApi.md#getprogramevaluationelementsbyid) | **GET** /ed-fi/programEvaluationElements/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*ProgramEvaluationElementsApi* | [**keyChangesProgramEvaluationElements**](docs/Api/ProgramEvaluationElementsApi.md#keychangesprogramevaluationelements) | **GET** /ed-fi/programEvaluationElements/keyChanges | Retrieves resources key changes based on change version.
*ProgramEvaluationElementsApi* | [**postProgramEvaluationElement**](docs/Api/ProgramEvaluationElementsApi.md#postprogramevaluationelement) | **POST** /ed-fi/programEvaluationElements | Creates or updates resources based on the natural key values of the supplied resource.
*ProgramEvaluationElementsApi* | [**putProgramEvaluationElement**](docs/Api/ProgramEvaluationElementsApi.md#putprogramevaluationelement) | **PUT** /ed-fi/programEvaluationElements/{id} | Updates a resource based on the resource identifier.
*ProgramEvaluationObjectivesApi* | [**deleteProgramEvaluationObjectiveById**](docs/Api/ProgramEvaluationObjectivesApi.md#deleteprogramevaluationobjectivebyid) | **DELETE** /ed-fi/programEvaluationObjectives/{id} | Deletes an existing resource using the resource identifier.
*ProgramEvaluationObjectivesApi* | [**deletesProgramEvaluationObjectives**](docs/Api/ProgramEvaluationObjectivesApi.md#deletesprogramevaluationobjectives) | **GET** /ed-fi/programEvaluationObjectives/deletes | Retrieves deleted resources based on change version.
*ProgramEvaluationObjectivesApi* | [**getProgramEvaluationObjectives**](docs/Api/ProgramEvaluationObjectivesApi.md#getprogramevaluationobjectives) | **GET** /ed-fi/programEvaluationObjectives | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*ProgramEvaluationObjectivesApi* | [**getProgramEvaluationObjectivesById**](docs/Api/ProgramEvaluationObjectivesApi.md#getprogramevaluationobjectivesbyid) | **GET** /ed-fi/programEvaluationObjectives/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*ProgramEvaluationObjectivesApi* | [**keyChangesProgramEvaluationObjectives**](docs/Api/ProgramEvaluationObjectivesApi.md#keychangesprogramevaluationobjectives) | **GET** /ed-fi/programEvaluationObjectives/keyChanges | Retrieves resources key changes based on change version.
*ProgramEvaluationObjectivesApi* | [**postProgramEvaluationObjective**](docs/Api/ProgramEvaluationObjectivesApi.md#postprogramevaluationobjective) | **POST** /ed-fi/programEvaluationObjectives | Creates or updates resources based on the natural key values of the supplied resource.
*ProgramEvaluationObjectivesApi* | [**putProgramEvaluationObjective**](docs/Api/ProgramEvaluationObjectivesApi.md#putprogramevaluationobjective) | **PUT** /ed-fi/programEvaluationObjectives/{id} | Updates a resource based on the resource identifier.
*ProgramEvaluationsApi* | [**deleteProgramEvaluationById**](docs/Api/ProgramEvaluationsApi.md#deleteprogramevaluationbyid) | **DELETE** /ed-fi/programEvaluations/{id} | Deletes an existing resource using the resource identifier.
*ProgramEvaluationsApi* | [**deletesProgramEvaluations**](docs/Api/ProgramEvaluationsApi.md#deletesprogramevaluations) | **GET** /ed-fi/programEvaluations/deletes | Retrieves deleted resources based on change version.
*ProgramEvaluationsApi* | [**getProgramEvaluations**](docs/Api/ProgramEvaluationsApi.md#getprogramevaluations) | **GET** /ed-fi/programEvaluations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*ProgramEvaluationsApi* | [**getProgramEvaluationsById**](docs/Api/ProgramEvaluationsApi.md#getprogramevaluationsbyid) | **GET** /ed-fi/programEvaluations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*ProgramEvaluationsApi* | [**keyChangesProgramEvaluations**](docs/Api/ProgramEvaluationsApi.md#keychangesprogramevaluations) | **GET** /ed-fi/programEvaluations/keyChanges | Retrieves resources key changes based on change version.
*ProgramEvaluationsApi* | [**postProgramEvaluation**](docs/Api/ProgramEvaluationsApi.md#postprogramevaluation) | **POST** /ed-fi/programEvaluations | Creates or updates resources based on the natural key values of the supplied resource.
*ProgramEvaluationsApi* | [**putProgramEvaluation**](docs/Api/ProgramEvaluationsApi.md#putprogramevaluation) | **PUT** /ed-fi/programEvaluations/{id} | Updates a resource based on the resource identifier.
*ProgramsApi* | [**deleteProgramById**](docs/Api/ProgramsApi.md#deleteprogrambyid) | **DELETE** /ed-fi/programs/{id} | Deletes an existing resource using the resource identifier.
*ProgramsApi* | [**deletesPrograms**](docs/Api/ProgramsApi.md#deletesprograms) | **GET** /ed-fi/programs/deletes | Retrieves deleted resources based on change version.
*ProgramsApi* | [**getPrograms**](docs/Api/ProgramsApi.md#getprograms) | **GET** /ed-fi/programs | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*ProgramsApi* | [**getProgramsById**](docs/Api/ProgramsApi.md#getprogramsbyid) | **GET** /ed-fi/programs/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*ProgramsApi* | [**keyChangesPrograms**](docs/Api/ProgramsApi.md#keychangesprograms) | **GET** /ed-fi/programs/keyChanges | Retrieves resources key changes based on change version.
*ProgramsApi* | [**postProgram**](docs/Api/ProgramsApi.md#postprogram) | **POST** /ed-fi/programs | Creates or updates resources based on the natural key values of the supplied resource.
*ProgramsApi* | [**putProgram**](docs/Api/ProgramsApi.md#putprogram) | **PUT** /ed-fi/programs/{id} | Updates a resource based on the resource identifier.
*ProjectDimensionsApi* | [**deleteProjectDimensionById**](docs/Api/ProjectDimensionsApi.md#deleteprojectdimensionbyid) | **DELETE** /ed-fi/projectDimensions/{id} | Deletes an existing resource using the resource identifier.
*ProjectDimensionsApi* | [**deletesProjectDimensions**](docs/Api/ProjectDimensionsApi.md#deletesprojectdimensions) | **GET** /ed-fi/projectDimensions/deletes | Retrieves deleted resources based on change version.
*ProjectDimensionsApi* | [**getProjectDimensions**](docs/Api/ProjectDimensionsApi.md#getprojectdimensions) | **GET** /ed-fi/projectDimensions | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*ProjectDimensionsApi* | [**getProjectDimensionsById**](docs/Api/ProjectDimensionsApi.md#getprojectdimensionsbyid) | **GET** /ed-fi/projectDimensions/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*ProjectDimensionsApi* | [**keyChangesProjectDimensions**](docs/Api/ProjectDimensionsApi.md#keychangesprojectdimensions) | **GET** /ed-fi/projectDimensions/keyChanges | Retrieves resources key changes based on change version.
*ProjectDimensionsApi* | [**postProjectDimension**](docs/Api/ProjectDimensionsApi.md#postprojectdimension) | **POST** /ed-fi/projectDimensions | Creates or updates resources based on the natural key values of the supplied resource.
*ProjectDimensionsApi* | [**putProjectDimension**](docs/Api/ProjectDimensionsApi.md#putprojectdimension) | **PUT** /ed-fi/projectDimensions/{id} | Updates a resource based on the resource identifier.
*ReportCardsApi* | [**deleteReportCardById**](docs/Api/ReportCardsApi.md#deletereportcardbyid) | **DELETE** /ed-fi/reportCards/{id} | Deletes an existing resource using the resource identifier.
*ReportCardsApi* | [**deletesReportCards**](docs/Api/ReportCardsApi.md#deletesreportcards) | **GET** /ed-fi/reportCards/deletes | Retrieves deleted resources based on change version.
*ReportCardsApi* | [**getReportCards**](docs/Api/ReportCardsApi.md#getreportcards) | **GET** /ed-fi/reportCards | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*ReportCardsApi* | [**getReportCardsById**](docs/Api/ReportCardsApi.md#getreportcardsbyid) | **GET** /ed-fi/reportCards/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*ReportCardsApi* | [**keyChangesReportCards**](docs/Api/ReportCardsApi.md#keychangesreportcards) | **GET** /ed-fi/reportCards/keyChanges | Retrieves resources key changes based on change version.
*ReportCardsApi* | [**postReportCard**](docs/Api/ReportCardsApi.md#postreportcard) | **POST** /ed-fi/reportCards | Creates or updates resources based on the natural key values of the supplied resource.
*ReportCardsApi* | [**putReportCard**](docs/Api/ReportCardsApi.md#putreportcard) | **PUT** /ed-fi/reportCards/{id} | Updates a resource based on the resource identifier.
*RestraintEventsApi* | [**deleteRestraintEventById**](docs/Api/RestraintEventsApi.md#deleterestrainteventbyid) | **DELETE** /ed-fi/restraintEvents/{id} | Deletes an existing resource using the resource identifier.
*RestraintEventsApi* | [**deletesRestraintEvents**](docs/Api/RestraintEventsApi.md#deletesrestraintevents) | **GET** /ed-fi/restraintEvents/deletes | Retrieves deleted resources based on change version.
*RestraintEventsApi* | [**getRestraintEvents**](docs/Api/RestraintEventsApi.md#getrestraintevents) | **GET** /ed-fi/restraintEvents | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*RestraintEventsApi* | [**getRestraintEventsById**](docs/Api/RestraintEventsApi.md#getrestrainteventsbyid) | **GET** /ed-fi/restraintEvents/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*RestraintEventsApi* | [**keyChangesRestraintEvents**](docs/Api/RestraintEventsApi.md#keychangesrestraintevents) | **GET** /ed-fi/restraintEvents/keyChanges | Retrieves resources key changes based on change version.
*RestraintEventsApi* | [**postRestraintEvent**](docs/Api/RestraintEventsApi.md#postrestraintevent) | **POST** /ed-fi/restraintEvents | Creates or updates resources based on the natural key values of the supplied resource.
*RestraintEventsApi* | [**putRestraintEvent**](docs/Api/RestraintEventsApi.md#putrestraintevent) | **PUT** /ed-fi/restraintEvents/{id} | Updates a resource based on the resource identifier.
*RubricDimensionsApi* | [**deleteRubricDimensionById**](docs/Api/RubricDimensionsApi.md#deleterubricdimensionbyid) | **DELETE** /tpdm/rubricDimensions/{id} | Deletes an existing resource using the resource identifier.
*RubricDimensionsApi* | [**deletesRubricDimensions**](docs/Api/RubricDimensionsApi.md#deletesrubricdimensions) | **GET** /tpdm/rubricDimensions/deletes | Retrieves deleted resources based on change version.
*RubricDimensionsApi* | [**getRubricDimensions**](docs/Api/RubricDimensionsApi.md#getrubricdimensions) | **GET** /tpdm/rubricDimensions | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*RubricDimensionsApi* | [**getRubricDimensionsById**](docs/Api/RubricDimensionsApi.md#getrubricdimensionsbyid) | **GET** /tpdm/rubricDimensions/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*RubricDimensionsApi* | [**keyChangesRubricDimensions**](docs/Api/RubricDimensionsApi.md#keychangesrubricdimensions) | **GET** /tpdm/rubricDimensions/keyChanges | Retrieves resources key changes based on change version.
*RubricDimensionsApi* | [**postRubricDimension**](docs/Api/RubricDimensionsApi.md#postrubricdimension) | **POST** /tpdm/rubricDimensions | Creates or updates resources based on the natural key values of the supplied resource.
*RubricDimensionsApi* | [**putRubricDimension**](docs/Api/RubricDimensionsApi.md#putrubricdimension) | **PUT** /tpdm/rubricDimensions/{id} | Updates a resource based on the resource identifier.
*SchoolYearTypesApi* | [**deleteSchoolYearTypeById**](docs/Api/SchoolYearTypesApi.md#deleteschoolyeartypebyid) | **DELETE** /ed-fi/schoolYearTypes/{id} | Deletes an existing resource using the resource identifier.
*SchoolYearTypesApi* | [**getSchoolYearTypes**](docs/Api/SchoolYearTypesApi.md#getschoolyeartypes) | **GET** /ed-fi/schoolYearTypes | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*SchoolYearTypesApi* | [**getSchoolYearTypesById**](docs/Api/SchoolYearTypesApi.md#getschoolyeartypesbyid) | **GET** /ed-fi/schoolYearTypes/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*SchoolYearTypesApi* | [**postSchoolYearType**](docs/Api/SchoolYearTypesApi.md#postschoolyeartype) | **POST** /ed-fi/schoolYearTypes | Creates or updates resources based on the natural key values of the supplied resource.
*SchoolYearTypesApi* | [**putSchoolYearType**](docs/Api/SchoolYearTypesApi.md#putschoolyeartype) | **PUT** /ed-fi/schoolYearTypes/{id} | Updates a resource based on the resource identifier.
*SchoolsApi* | [**deleteSchoolById**](docs/Api/SchoolsApi.md#deleteschoolbyid) | **DELETE** /ed-fi/schools/{id} | Deletes an existing resource using the resource identifier.
*SchoolsApi* | [**deletesSchools**](docs/Api/SchoolsApi.md#deletesschools) | **GET** /ed-fi/schools/deletes | Retrieves deleted resources based on change version.
*SchoolsApi* | [**getSchools**](docs/Api/SchoolsApi.md#getschools) | **GET** /ed-fi/schools | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*SchoolsApi* | [**getSchoolsById**](docs/Api/SchoolsApi.md#getschoolsbyid) | **GET** /ed-fi/schools/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*SchoolsApi* | [**keyChangesSchools**](docs/Api/SchoolsApi.md#keychangesschools) | **GET** /ed-fi/schools/keyChanges | Retrieves resources key changes based on change version.
*SchoolsApi* | [**postSchool**](docs/Api/SchoolsApi.md#postschool) | **POST** /ed-fi/schools | Creates or updates resources based on the natural key values of the supplied resource.
*SchoolsApi* | [**putSchool**](docs/Api/SchoolsApi.md#putschool) | **PUT** /ed-fi/schools/{id} | Updates a resource based on the resource identifier.
*SectionAttendanceTakenEventsApi* | [**deleteSectionAttendanceTakenEventById**](docs/Api/SectionAttendanceTakenEventsApi.md#deletesectionattendancetakeneventbyid) | **DELETE** /ed-fi/sectionAttendanceTakenEvents/{id} | Deletes an existing resource using the resource identifier.
*SectionAttendanceTakenEventsApi* | [**deletesSectionAttendanceTakenEvents**](docs/Api/SectionAttendanceTakenEventsApi.md#deletessectionattendancetakenevents) | **GET** /ed-fi/sectionAttendanceTakenEvents/deletes | Retrieves deleted resources based on change version.
*SectionAttendanceTakenEventsApi* | [**getSectionAttendanceTakenEvents**](docs/Api/SectionAttendanceTakenEventsApi.md#getsectionattendancetakenevents) | **GET** /ed-fi/sectionAttendanceTakenEvents | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*SectionAttendanceTakenEventsApi* | [**getSectionAttendanceTakenEventsById**](docs/Api/SectionAttendanceTakenEventsApi.md#getsectionattendancetakeneventsbyid) | **GET** /ed-fi/sectionAttendanceTakenEvents/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*SectionAttendanceTakenEventsApi* | [**keyChangesSectionAttendanceTakenEvents**](docs/Api/SectionAttendanceTakenEventsApi.md#keychangessectionattendancetakenevents) | **GET** /ed-fi/sectionAttendanceTakenEvents/keyChanges | Retrieves resources key changes based on change version.
*SectionAttendanceTakenEventsApi* | [**postSectionAttendanceTakenEvent**](docs/Api/SectionAttendanceTakenEventsApi.md#postsectionattendancetakenevent) | **POST** /ed-fi/sectionAttendanceTakenEvents | Creates or updates resources based on the natural key values of the supplied resource.
*SectionAttendanceTakenEventsApi* | [**putSectionAttendanceTakenEvent**](docs/Api/SectionAttendanceTakenEventsApi.md#putsectionattendancetakenevent) | **PUT** /ed-fi/sectionAttendanceTakenEvents/{id} | Updates a resource based on the resource identifier.
*SectionsApi* | [**deleteSectionById**](docs/Api/SectionsApi.md#deletesectionbyid) | **DELETE** /ed-fi/sections/{id} | Deletes an existing resource using the resource identifier.
*SectionsApi* | [**deletesSections**](docs/Api/SectionsApi.md#deletessections) | **GET** /ed-fi/sections/deletes | Retrieves deleted resources based on change version.
*SectionsApi* | [**getSections**](docs/Api/SectionsApi.md#getsections) | **GET** /ed-fi/sections | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*SectionsApi* | [**getSectionsById**](docs/Api/SectionsApi.md#getsectionsbyid) | **GET** /ed-fi/sections/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*SectionsApi* | [**keyChangesSections**](docs/Api/SectionsApi.md#keychangessections) | **GET** /ed-fi/sections/keyChanges | Retrieves resources key changes based on change version.
*SectionsApi* | [**postSection**](docs/Api/SectionsApi.md#postsection) | **POST** /ed-fi/sections | Creates or updates resources based on the natural key values of the supplied resource.
*SectionsApi* | [**putSection**](docs/Api/SectionsApi.md#putsection) | **PUT** /ed-fi/sections/{id} | Updates a resource based on the resource identifier.
*SessionsApi* | [**deleteSessionById**](docs/Api/SessionsApi.md#deletesessionbyid) | **DELETE** /ed-fi/sessions/{id} | Deletes an existing resource using the resource identifier.
*SessionsApi* | [**deletesSessions**](docs/Api/SessionsApi.md#deletessessions) | **GET** /ed-fi/sessions/deletes | Retrieves deleted resources based on change version.
*SessionsApi* | [**getSessions**](docs/Api/SessionsApi.md#getsessions) | **GET** /ed-fi/sessions | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*SessionsApi* | [**getSessionsById**](docs/Api/SessionsApi.md#getsessionsbyid) | **GET** /ed-fi/sessions/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*SessionsApi* | [**keyChangesSessions**](docs/Api/SessionsApi.md#keychangessessions) | **GET** /ed-fi/sessions/keyChanges | Retrieves resources key changes based on change version.
*SessionsApi* | [**postSession**](docs/Api/SessionsApi.md#postsession) | **POST** /ed-fi/sessions | Creates or updates resources based on the natural key values of the supplied resource.
*SessionsApi* | [**putSession**](docs/Api/SessionsApi.md#putsession) | **PUT** /ed-fi/sessions/{id} | Updates a resource based on the resource identifier.
*SourceDimensionsApi* | [**deleteSourceDimensionById**](docs/Api/SourceDimensionsApi.md#deletesourcedimensionbyid) | **DELETE** /ed-fi/sourceDimensions/{id} | Deletes an existing resource using the resource identifier.
*SourceDimensionsApi* | [**deletesSourceDimensions**](docs/Api/SourceDimensionsApi.md#deletessourcedimensions) | **GET** /ed-fi/sourceDimensions/deletes | Retrieves deleted resources based on change version.
*SourceDimensionsApi* | [**getSourceDimensions**](docs/Api/SourceDimensionsApi.md#getsourcedimensions) | **GET** /ed-fi/sourceDimensions | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*SourceDimensionsApi* | [**getSourceDimensionsById**](docs/Api/SourceDimensionsApi.md#getsourcedimensionsbyid) | **GET** /ed-fi/sourceDimensions/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*SourceDimensionsApi* | [**keyChangesSourceDimensions**](docs/Api/SourceDimensionsApi.md#keychangessourcedimensions) | **GET** /ed-fi/sourceDimensions/keyChanges | Retrieves resources key changes based on change version.
*SourceDimensionsApi* | [**postSourceDimension**](docs/Api/SourceDimensionsApi.md#postsourcedimension) | **POST** /ed-fi/sourceDimensions | Creates or updates resources based on the natural key values of the supplied resource.
*SourceDimensionsApi* | [**putSourceDimension**](docs/Api/SourceDimensionsApi.md#putsourcedimension) | **PUT** /ed-fi/sourceDimensions/{id} | Updates a resource based on the resource identifier.
*StaffAbsenceEventsApi* | [**deleteStaffAbsenceEventById**](docs/Api/StaffAbsenceEventsApi.md#deletestaffabsenceeventbyid) | **DELETE** /ed-fi/staffAbsenceEvents/{id} | Deletes an existing resource using the resource identifier.
*StaffAbsenceEventsApi* | [**deletesStaffAbsenceEvents**](docs/Api/StaffAbsenceEventsApi.md#deletesstaffabsenceevents) | **GET** /ed-fi/staffAbsenceEvents/deletes | Retrieves deleted resources based on change version.
*StaffAbsenceEventsApi* | [**getStaffAbsenceEvents**](docs/Api/StaffAbsenceEventsApi.md#getstaffabsenceevents) | **GET** /ed-fi/staffAbsenceEvents | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*StaffAbsenceEventsApi* | [**getStaffAbsenceEventsById**](docs/Api/StaffAbsenceEventsApi.md#getstaffabsenceeventsbyid) | **GET** /ed-fi/staffAbsenceEvents/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*StaffAbsenceEventsApi* | [**keyChangesStaffAbsenceEvents**](docs/Api/StaffAbsenceEventsApi.md#keychangesstaffabsenceevents) | **GET** /ed-fi/staffAbsenceEvents/keyChanges | Retrieves resources key changes based on change version.
*StaffAbsenceEventsApi* | [**postStaffAbsenceEvent**](docs/Api/StaffAbsenceEventsApi.md#poststaffabsenceevent) | **POST** /ed-fi/staffAbsenceEvents | Creates or updates resources based on the natural key values of the supplied resource.
*StaffAbsenceEventsApi* | [**putStaffAbsenceEvent**](docs/Api/StaffAbsenceEventsApi.md#putstaffabsenceevent) | **PUT** /ed-fi/staffAbsenceEvents/{id} | Updates a resource based on the resource identifier.
*StaffCohortAssociationsApi* | [**deleteStaffCohortAssociationById**](docs/Api/StaffCohortAssociationsApi.md#deletestaffcohortassociationbyid) | **DELETE** /ed-fi/staffCohortAssociations/{id} | Deletes an existing resource using the resource identifier.
*StaffCohortAssociationsApi* | [**deletesStaffCohortAssociations**](docs/Api/StaffCohortAssociationsApi.md#deletesstaffcohortassociations) | **GET** /ed-fi/staffCohortAssociations/deletes | Retrieves deleted resources based on change version.
*StaffCohortAssociationsApi* | [**getStaffCohortAssociations**](docs/Api/StaffCohortAssociationsApi.md#getstaffcohortassociations) | **GET** /ed-fi/staffCohortAssociations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*StaffCohortAssociationsApi* | [**getStaffCohortAssociationsById**](docs/Api/StaffCohortAssociationsApi.md#getstaffcohortassociationsbyid) | **GET** /ed-fi/staffCohortAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*StaffCohortAssociationsApi* | [**keyChangesStaffCohortAssociations**](docs/Api/StaffCohortAssociationsApi.md#keychangesstaffcohortassociations) | **GET** /ed-fi/staffCohortAssociations/keyChanges | Retrieves resources key changes based on change version.
*StaffCohortAssociationsApi* | [**postStaffCohortAssociation**](docs/Api/StaffCohortAssociationsApi.md#poststaffcohortassociation) | **POST** /ed-fi/staffCohortAssociations | Creates or updates resources based on the natural key values of the supplied resource.
*StaffCohortAssociationsApi* | [**putStaffCohortAssociation**](docs/Api/StaffCohortAssociationsApi.md#putstaffcohortassociation) | **PUT** /ed-fi/staffCohortAssociations/{id} | Updates a resource based on the resource identifier.
*StaffDisciplineIncidentAssociationsApi* | [**deleteStaffDisciplineIncidentAssociationById**](docs/Api/StaffDisciplineIncidentAssociationsApi.md#deletestaffdisciplineincidentassociationbyid) | **DELETE** /ed-fi/staffDisciplineIncidentAssociations/{id} | Deletes an existing resource using the resource identifier.
*StaffDisciplineIncidentAssociationsApi* | [**deletesStaffDisciplineIncidentAssociations**](docs/Api/StaffDisciplineIncidentAssociationsApi.md#deletesstaffdisciplineincidentassociations) | **GET** /ed-fi/staffDisciplineIncidentAssociations/deletes | Retrieves deleted resources based on change version.
*StaffDisciplineIncidentAssociationsApi* | [**getStaffDisciplineIncidentAssociations**](docs/Api/StaffDisciplineIncidentAssociationsApi.md#getstaffdisciplineincidentassociations) | **GET** /ed-fi/staffDisciplineIncidentAssociations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*StaffDisciplineIncidentAssociationsApi* | [**getStaffDisciplineIncidentAssociationsById**](docs/Api/StaffDisciplineIncidentAssociationsApi.md#getstaffdisciplineincidentassociationsbyid) | **GET** /ed-fi/staffDisciplineIncidentAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*StaffDisciplineIncidentAssociationsApi* | [**keyChangesStaffDisciplineIncidentAssociations**](docs/Api/StaffDisciplineIncidentAssociationsApi.md#keychangesstaffdisciplineincidentassociations) | **GET** /ed-fi/staffDisciplineIncidentAssociations/keyChanges | Retrieves resources key changes based on change version.
*StaffDisciplineIncidentAssociationsApi* | [**postStaffDisciplineIncidentAssociation**](docs/Api/StaffDisciplineIncidentAssociationsApi.md#poststaffdisciplineincidentassociation) | **POST** /ed-fi/staffDisciplineIncidentAssociations | Creates or updates resources based on the natural key values of the supplied resource.
*StaffDisciplineIncidentAssociationsApi* | [**putStaffDisciplineIncidentAssociation**](docs/Api/StaffDisciplineIncidentAssociationsApi.md#putstaffdisciplineincidentassociation) | **PUT** /ed-fi/staffDisciplineIncidentAssociations/{id} | Updates a resource based on the resource identifier.
*StaffEducationOrganizationAssignmentAssociationsApi* | [**deleteStaffEducationOrganizationAssignmentAssociationById**](docs/Api/StaffEducationOrganizationAssignmentAssociationsApi.md#deletestaffeducationorganizationassignmentassociationbyid) | **DELETE** /ed-fi/staffEducationOrganizationAssignmentAssociations/{id} | Deletes an existing resource using the resource identifier.
*StaffEducationOrganizationAssignmentAssociationsApi* | [**deletesStaffEducationOrganizationAssignmentAssociations**](docs/Api/StaffEducationOrganizationAssignmentAssociationsApi.md#deletesstaffeducationorganizationassignmentassociations) | **GET** /ed-fi/staffEducationOrganizationAssignmentAssociations/deletes | Retrieves deleted resources based on change version.
*StaffEducationOrganizationAssignmentAssociationsApi* | [**getStaffEducationOrganizationAssignmentAssociations**](docs/Api/StaffEducationOrganizationAssignmentAssociationsApi.md#getstaffeducationorganizationassignmentassociations) | **GET** /ed-fi/staffEducationOrganizationAssignmentAssociations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*StaffEducationOrganizationAssignmentAssociationsApi* | [**getStaffEducationOrganizationAssignmentAssociationsById**](docs/Api/StaffEducationOrganizationAssignmentAssociationsApi.md#getstaffeducationorganizationassignmentassociationsbyid) | **GET** /ed-fi/staffEducationOrganizationAssignmentAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*StaffEducationOrganizationAssignmentAssociationsApi* | [**keyChangesStaffEducationOrganizationAssignmentAssociations**](docs/Api/StaffEducationOrganizationAssignmentAssociationsApi.md#keychangesstaffeducationorganizationassignmentassociations) | **GET** /ed-fi/staffEducationOrganizationAssignmentAssociations/keyChanges | Retrieves resources key changes based on change version.
*StaffEducationOrganizationAssignmentAssociationsApi* | [**postStaffEducationOrganizationAssignmentAssociation**](docs/Api/StaffEducationOrganizationAssignmentAssociationsApi.md#poststaffeducationorganizationassignmentassociation) | **POST** /ed-fi/staffEducationOrganizationAssignmentAssociations | Creates or updates resources based on the natural key values of the supplied resource.
*StaffEducationOrganizationAssignmentAssociationsApi* | [**putStaffEducationOrganizationAssignmentAssociation**](docs/Api/StaffEducationOrganizationAssignmentAssociationsApi.md#putstaffeducationorganizationassignmentassociation) | **PUT** /ed-fi/staffEducationOrganizationAssignmentAssociations/{id} | Updates a resource based on the resource identifier.
*StaffEducationOrganizationContactAssociationsApi* | [**deleteStaffEducationOrganizationContactAssociationById**](docs/Api/StaffEducationOrganizationContactAssociationsApi.md#deletestaffeducationorganizationcontactassociationbyid) | **DELETE** /ed-fi/staffEducationOrganizationContactAssociations/{id} | Deletes an existing resource using the resource identifier.
*StaffEducationOrganizationContactAssociationsApi* | [**deletesStaffEducationOrganizationContactAssociations**](docs/Api/StaffEducationOrganizationContactAssociationsApi.md#deletesstaffeducationorganizationcontactassociations) | **GET** /ed-fi/staffEducationOrganizationContactAssociations/deletes | Retrieves deleted resources based on change version.
*StaffEducationOrganizationContactAssociationsApi* | [**getStaffEducationOrganizationContactAssociations**](docs/Api/StaffEducationOrganizationContactAssociationsApi.md#getstaffeducationorganizationcontactassociations) | **GET** /ed-fi/staffEducationOrganizationContactAssociations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*StaffEducationOrganizationContactAssociationsApi* | [**getStaffEducationOrganizationContactAssociationsById**](docs/Api/StaffEducationOrganizationContactAssociationsApi.md#getstaffeducationorganizationcontactassociationsbyid) | **GET** /ed-fi/staffEducationOrganizationContactAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*StaffEducationOrganizationContactAssociationsApi* | [**keyChangesStaffEducationOrganizationContactAssociations**](docs/Api/StaffEducationOrganizationContactAssociationsApi.md#keychangesstaffeducationorganizationcontactassociations) | **GET** /ed-fi/staffEducationOrganizationContactAssociations/keyChanges | Retrieves resources key changes based on change version.
*StaffEducationOrganizationContactAssociationsApi* | [**postStaffEducationOrganizationContactAssociation**](docs/Api/StaffEducationOrganizationContactAssociationsApi.md#poststaffeducationorganizationcontactassociation) | **POST** /ed-fi/staffEducationOrganizationContactAssociations | Creates or updates resources based on the natural key values of the supplied resource.
*StaffEducationOrganizationContactAssociationsApi* | [**putStaffEducationOrganizationContactAssociation**](docs/Api/StaffEducationOrganizationContactAssociationsApi.md#putstaffeducationorganizationcontactassociation) | **PUT** /ed-fi/staffEducationOrganizationContactAssociations/{id} | Updates a resource based on the resource identifier.
*StaffEducationOrganizationEmploymentAssociationsApi* | [**deleteStaffEducationOrganizationEmploymentAssociationById**](docs/Api/StaffEducationOrganizationEmploymentAssociationsApi.md#deletestaffeducationorganizationemploymentassociationbyid) | **DELETE** /ed-fi/staffEducationOrganizationEmploymentAssociations/{id} | Deletes an existing resource using the resource identifier.
*StaffEducationOrganizationEmploymentAssociationsApi* | [**deletesStaffEducationOrganizationEmploymentAssociations**](docs/Api/StaffEducationOrganizationEmploymentAssociationsApi.md#deletesstaffeducationorganizationemploymentassociations) | **GET** /ed-fi/staffEducationOrganizationEmploymentAssociations/deletes | Retrieves deleted resources based on change version.
*StaffEducationOrganizationEmploymentAssociationsApi* | [**getStaffEducationOrganizationEmploymentAssociations**](docs/Api/StaffEducationOrganizationEmploymentAssociationsApi.md#getstaffeducationorganizationemploymentassociations) | **GET** /ed-fi/staffEducationOrganizationEmploymentAssociations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*StaffEducationOrganizationEmploymentAssociationsApi* | [**getStaffEducationOrganizationEmploymentAssociationsById**](docs/Api/StaffEducationOrganizationEmploymentAssociationsApi.md#getstaffeducationorganizationemploymentassociationsbyid) | **GET** /ed-fi/staffEducationOrganizationEmploymentAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*StaffEducationOrganizationEmploymentAssociationsApi* | [**keyChangesStaffEducationOrganizationEmploymentAssociations**](docs/Api/StaffEducationOrganizationEmploymentAssociationsApi.md#keychangesstaffeducationorganizationemploymentassociations) | **GET** /ed-fi/staffEducationOrganizationEmploymentAssociations/keyChanges | Retrieves resources key changes based on change version.
*StaffEducationOrganizationEmploymentAssociationsApi* | [**postStaffEducationOrganizationEmploymentAssociation**](docs/Api/StaffEducationOrganizationEmploymentAssociationsApi.md#poststaffeducationorganizationemploymentassociation) | **POST** /ed-fi/staffEducationOrganizationEmploymentAssociations | Creates or updates resources based on the natural key values of the supplied resource.
*StaffEducationOrganizationEmploymentAssociationsApi* | [**putStaffEducationOrganizationEmploymentAssociation**](docs/Api/StaffEducationOrganizationEmploymentAssociationsApi.md#putstaffeducationorganizationemploymentassociation) | **PUT** /ed-fi/staffEducationOrganizationEmploymentAssociations/{id} | Updates a resource based on the resource identifier.
*StaffLeavesApi* | [**deleteStaffLeaveById**](docs/Api/StaffLeavesApi.md#deletestaffleavebyid) | **DELETE** /ed-fi/staffLeaves/{id} | Deletes an existing resource using the resource identifier.
*StaffLeavesApi* | [**deletesStaffLeaves**](docs/Api/StaffLeavesApi.md#deletesstaffleaves) | **GET** /ed-fi/staffLeaves/deletes | Retrieves deleted resources based on change version.
*StaffLeavesApi* | [**getStaffLeaves**](docs/Api/StaffLeavesApi.md#getstaffleaves) | **GET** /ed-fi/staffLeaves | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*StaffLeavesApi* | [**getStaffLeavesById**](docs/Api/StaffLeavesApi.md#getstaffleavesbyid) | **GET** /ed-fi/staffLeaves/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*StaffLeavesApi* | [**keyChangesStaffLeaves**](docs/Api/StaffLeavesApi.md#keychangesstaffleaves) | **GET** /ed-fi/staffLeaves/keyChanges | Retrieves resources key changes based on change version.
*StaffLeavesApi* | [**postStaffLeave**](docs/Api/StaffLeavesApi.md#poststaffleave) | **POST** /ed-fi/staffLeaves | Creates or updates resources based on the natural key values of the supplied resource.
*StaffLeavesApi* | [**putStaffLeave**](docs/Api/StaffLeavesApi.md#putstaffleave) | **PUT** /ed-fi/staffLeaves/{id} | Updates a resource based on the resource identifier.
*StaffProgramAssociationsApi* | [**deleteStaffProgramAssociationById**](docs/Api/StaffProgramAssociationsApi.md#deletestaffprogramassociationbyid) | **DELETE** /ed-fi/staffProgramAssociations/{id} | Deletes an existing resource using the resource identifier.
*StaffProgramAssociationsApi* | [**deletesStaffProgramAssociations**](docs/Api/StaffProgramAssociationsApi.md#deletesstaffprogramassociations) | **GET** /ed-fi/staffProgramAssociations/deletes | Retrieves deleted resources based on change version.
*StaffProgramAssociationsApi* | [**getStaffProgramAssociations**](docs/Api/StaffProgramAssociationsApi.md#getstaffprogramassociations) | **GET** /ed-fi/staffProgramAssociations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*StaffProgramAssociationsApi* | [**getStaffProgramAssociationsById**](docs/Api/StaffProgramAssociationsApi.md#getstaffprogramassociationsbyid) | **GET** /ed-fi/staffProgramAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*StaffProgramAssociationsApi* | [**keyChangesStaffProgramAssociations**](docs/Api/StaffProgramAssociationsApi.md#keychangesstaffprogramassociations) | **GET** /ed-fi/staffProgramAssociations/keyChanges | Retrieves resources key changes based on change version.
*StaffProgramAssociationsApi* | [**postStaffProgramAssociation**](docs/Api/StaffProgramAssociationsApi.md#poststaffprogramassociation) | **POST** /ed-fi/staffProgramAssociations | Creates or updates resources based on the natural key values of the supplied resource.
*StaffProgramAssociationsApi* | [**putStaffProgramAssociation**](docs/Api/StaffProgramAssociationsApi.md#putstaffprogramassociation) | **PUT** /ed-fi/staffProgramAssociations/{id} | Updates a resource based on the resource identifier.
*StaffSchoolAssociationsApi* | [**deleteStaffSchoolAssociationById**](docs/Api/StaffSchoolAssociationsApi.md#deletestaffschoolassociationbyid) | **DELETE** /ed-fi/staffSchoolAssociations/{id} | Deletes an existing resource using the resource identifier.
*StaffSchoolAssociationsApi* | [**deletesStaffSchoolAssociations**](docs/Api/StaffSchoolAssociationsApi.md#deletesstaffschoolassociations) | **GET** /ed-fi/staffSchoolAssociations/deletes | Retrieves deleted resources based on change version.
*StaffSchoolAssociationsApi* | [**getStaffSchoolAssociations**](docs/Api/StaffSchoolAssociationsApi.md#getstaffschoolassociations) | **GET** /ed-fi/staffSchoolAssociations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*StaffSchoolAssociationsApi* | [**getStaffSchoolAssociationsById**](docs/Api/StaffSchoolAssociationsApi.md#getstaffschoolassociationsbyid) | **GET** /ed-fi/staffSchoolAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*StaffSchoolAssociationsApi* | [**keyChangesStaffSchoolAssociations**](docs/Api/StaffSchoolAssociationsApi.md#keychangesstaffschoolassociations) | **GET** /ed-fi/staffSchoolAssociations/keyChanges | Retrieves resources key changes based on change version.
*StaffSchoolAssociationsApi* | [**postStaffSchoolAssociation**](docs/Api/StaffSchoolAssociationsApi.md#poststaffschoolassociation) | **POST** /ed-fi/staffSchoolAssociations | Creates or updates resources based on the natural key values of the supplied resource.
*StaffSchoolAssociationsApi* | [**putStaffSchoolAssociation**](docs/Api/StaffSchoolAssociationsApi.md#putstaffschoolassociation) | **PUT** /ed-fi/staffSchoolAssociations/{id} | Updates a resource based on the resource identifier.
*StaffSectionAssociationsApi* | [**deleteStaffSectionAssociationById**](docs/Api/StaffSectionAssociationsApi.md#deletestaffsectionassociationbyid) | **DELETE** /ed-fi/staffSectionAssociations/{id} | Deletes an existing resource using the resource identifier.
*StaffSectionAssociationsApi* | [**deletesStaffSectionAssociations**](docs/Api/StaffSectionAssociationsApi.md#deletesstaffsectionassociations) | **GET** /ed-fi/staffSectionAssociations/deletes | Retrieves deleted resources based on change version.
*StaffSectionAssociationsApi* | [**getStaffSectionAssociations**](docs/Api/StaffSectionAssociationsApi.md#getstaffsectionassociations) | **GET** /ed-fi/staffSectionAssociations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*StaffSectionAssociationsApi* | [**getStaffSectionAssociationsById**](docs/Api/StaffSectionAssociationsApi.md#getstaffsectionassociationsbyid) | **GET** /ed-fi/staffSectionAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*StaffSectionAssociationsApi* | [**keyChangesStaffSectionAssociations**](docs/Api/StaffSectionAssociationsApi.md#keychangesstaffsectionassociations) | **GET** /ed-fi/staffSectionAssociations/keyChanges | Retrieves resources key changes based on change version.
*StaffSectionAssociationsApi* | [**postStaffSectionAssociation**](docs/Api/StaffSectionAssociationsApi.md#poststaffsectionassociation) | **POST** /ed-fi/staffSectionAssociations | Creates or updates resources based on the natural key values of the supplied resource.
*StaffSectionAssociationsApi* | [**putStaffSectionAssociation**](docs/Api/StaffSectionAssociationsApi.md#putstaffsectionassociation) | **PUT** /ed-fi/staffSectionAssociations/{id} | Updates a resource based on the resource identifier.
*StaffsApi* | [**deleteStaffById**](docs/Api/StaffsApi.md#deletestaffbyid) | **DELETE** /ed-fi/staffs/{id} | Deletes an existing resource using the resource identifier.
*StaffsApi* | [**deletesStaffs**](docs/Api/StaffsApi.md#deletesstaffs) | **GET** /ed-fi/staffs/deletes | Retrieves deleted resources based on change version.
*StaffsApi* | [**getStaffs**](docs/Api/StaffsApi.md#getstaffs) | **GET** /ed-fi/staffs | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*StaffsApi* | [**getStaffsById**](docs/Api/StaffsApi.md#getstaffsbyid) | **GET** /ed-fi/staffs/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*StaffsApi* | [**keyChangesStaffs**](docs/Api/StaffsApi.md#keychangesstaffs) | **GET** /ed-fi/staffs/keyChanges | Retrieves resources key changes based on change version.
*StaffsApi* | [**postStaff**](docs/Api/StaffsApi.md#poststaff) | **POST** /ed-fi/staffs | Creates or updates resources based on the natural key values of the supplied resource.
*StaffsApi* | [**putStaff**](docs/Api/StaffsApi.md#putstaff) | **PUT** /ed-fi/staffs/{id} | Updates a resource based on the resource identifier.
*StateEducationAgenciesApi* | [**deleteStateEducationAgencyById**](docs/Api/StateEducationAgenciesApi.md#deletestateeducationagencybyid) | **DELETE** /ed-fi/stateEducationAgencies/{id} | Deletes an existing resource using the resource identifier.
*StateEducationAgenciesApi* | [**deletesStateEducationAgencies**](docs/Api/StateEducationAgenciesApi.md#deletesstateeducationagencies) | **GET** /ed-fi/stateEducationAgencies/deletes | Retrieves deleted resources based on change version.
*StateEducationAgenciesApi* | [**getStateEducationAgencies**](docs/Api/StateEducationAgenciesApi.md#getstateeducationagencies) | **GET** /ed-fi/stateEducationAgencies | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*StateEducationAgenciesApi* | [**getStateEducationAgenciesById**](docs/Api/StateEducationAgenciesApi.md#getstateeducationagenciesbyid) | **GET** /ed-fi/stateEducationAgencies/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*StateEducationAgenciesApi* | [**keyChangesStateEducationAgencies**](docs/Api/StateEducationAgenciesApi.md#keychangesstateeducationagencies) | **GET** /ed-fi/stateEducationAgencies/keyChanges | Retrieves resources key changes based on change version.
*StateEducationAgenciesApi* | [**postStateEducationAgency**](docs/Api/StateEducationAgenciesApi.md#poststateeducationagency) | **POST** /ed-fi/stateEducationAgencies | Creates or updates resources based on the natural key values of the supplied resource.
*StateEducationAgenciesApi* | [**putStateEducationAgency**](docs/Api/StateEducationAgenciesApi.md#putstateeducationagency) | **PUT** /ed-fi/stateEducationAgencies/{id} | Updates a resource based on the resource identifier.
*StudentAcademicRecordsApi* | [**deleteStudentAcademicRecordById**](docs/Api/StudentAcademicRecordsApi.md#deletestudentacademicrecordbyid) | **DELETE** /ed-fi/studentAcademicRecords/{id} | Deletes an existing resource using the resource identifier.
*StudentAcademicRecordsApi* | [**deletesStudentAcademicRecords**](docs/Api/StudentAcademicRecordsApi.md#deletesstudentacademicrecords) | **GET** /ed-fi/studentAcademicRecords/deletes | Retrieves deleted resources based on change version.
*StudentAcademicRecordsApi* | [**getStudentAcademicRecords**](docs/Api/StudentAcademicRecordsApi.md#getstudentacademicrecords) | **GET** /ed-fi/studentAcademicRecords | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*StudentAcademicRecordsApi* | [**getStudentAcademicRecordsById**](docs/Api/StudentAcademicRecordsApi.md#getstudentacademicrecordsbyid) | **GET** /ed-fi/studentAcademicRecords/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*StudentAcademicRecordsApi* | [**keyChangesStudentAcademicRecords**](docs/Api/StudentAcademicRecordsApi.md#keychangesstudentacademicrecords) | **GET** /ed-fi/studentAcademicRecords/keyChanges | Retrieves resources key changes based on change version.
*StudentAcademicRecordsApi* | [**postStudentAcademicRecord**](docs/Api/StudentAcademicRecordsApi.md#poststudentacademicrecord) | **POST** /ed-fi/studentAcademicRecords | Creates or updates resources based on the natural key values of the supplied resource.
*StudentAcademicRecordsApi* | [**putStudentAcademicRecord**](docs/Api/StudentAcademicRecordsApi.md#putstudentacademicrecord) | **PUT** /ed-fi/studentAcademicRecords/{id} | Updates a resource based on the resource identifier.
*StudentAssessmentEducationOrganizationAssociationsApi* | [**deleteStudentAssessmentEducationOrganizationAssociationById**](docs/Api/StudentAssessmentEducationOrganizationAssociationsApi.md#deletestudentassessmenteducationorganizationassociationbyid) | **DELETE** /ed-fi/studentAssessmentEducationOrganizationAssociations/{id} | Deletes an existing resource using the resource identifier.
*StudentAssessmentEducationOrganizationAssociationsApi* | [**deletesStudentAssessmentEducationOrganizationAssociations**](docs/Api/StudentAssessmentEducationOrganizationAssociationsApi.md#deletesstudentassessmenteducationorganizationassociations) | **GET** /ed-fi/studentAssessmentEducationOrganizationAssociations/deletes | Retrieves deleted resources based on change version.
*StudentAssessmentEducationOrganizationAssociationsApi* | [**getStudentAssessmentEducationOrganizationAssociations**](docs/Api/StudentAssessmentEducationOrganizationAssociationsApi.md#getstudentassessmenteducationorganizationassociations) | **GET** /ed-fi/studentAssessmentEducationOrganizationAssociations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*StudentAssessmentEducationOrganizationAssociationsApi* | [**getStudentAssessmentEducationOrganizationAssociationsById**](docs/Api/StudentAssessmentEducationOrganizationAssociationsApi.md#getstudentassessmenteducationorganizationassociationsbyid) | **GET** /ed-fi/studentAssessmentEducationOrganizationAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*StudentAssessmentEducationOrganizationAssociationsApi* | [**keyChangesStudentAssessmentEducationOrganizationAssociations**](docs/Api/StudentAssessmentEducationOrganizationAssociationsApi.md#keychangesstudentassessmenteducationorganizationassociations) | **GET** /ed-fi/studentAssessmentEducationOrganizationAssociations/keyChanges | Retrieves resources key changes based on change version.
*StudentAssessmentEducationOrganizationAssociationsApi* | [**postStudentAssessmentEducationOrganizationAssociation**](docs/Api/StudentAssessmentEducationOrganizationAssociationsApi.md#poststudentassessmenteducationorganizationassociation) | **POST** /ed-fi/studentAssessmentEducationOrganizationAssociations | Creates or updates resources based on the natural key values of the supplied resource.
*StudentAssessmentEducationOrganizationAssociationsApi* | [**putStudentAssessmentEducationOrganizationAssociation**](docs/Api/StudentAssessmentEducationOrganizationAssociationsApi.md#putstudentassessmenteducationorganizationassociation) | **PUT** /ed-fi/studentAssessmentEducationOrganizationAssociations/{id} | Updates a resource based on the resource identifier.
*StudentAssessmentsApi* | [**deleteStudentAssessmentById**](docs/Api/StudentAssessmentsApi.md#deletestudentassessmentbyid) | **DELETE** /ed-fi/studentAssessments/{id} | Deletes an existing resource using the resource identifier.
*StudentAssessmentsApi* | [**deletesStudentAssessments**](docs/Api/StudentAssessmentsApi.md#deletesstudentassessments) | **GET** /ed-fi/studentAssessments/deletes | Retrieves deleted resources based on change version.
*StudentAssessmentsApi* | [**getStudentAssessments**](docs/Api/StudentAssessmentsApi.md#getstudentassessments) | **GET** /ed-fi/studentAssessments | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*StudentAssessmentsApi* | [**getStudentAssessmentsById**](docs/Api/StudentAssessmentsApi.md#getstudentassessmentsbyid) | **GET** /ed-fi/studentAssessments/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*StudentAssessmentsApi* | [**keyChangesStudentAssessments**](docs/Api/StudentAssessmentsApi.md#keychangesstudentassessments) | **GET** /ed-fi/studentAssessments/keyChanges | Retrieves resources key changes based on change version.
*StudentAssessmentsApi* | [**postStudentAssessment**](docs/Api/StudentAssessmentsApi.md#poststudentassessment) | **POST** /ed-fi/studentAssessments | Creates or updates resources based on the natural key values of the supplied resource.
*StudentAssessmentsApi* | [**putStudentAssessment**](docs/Api/StudentAssessmentsApi.md#putstudentassessment) | **PUT** /ed-fi/studentAssessments/{id} | Updates a resource based on the resource identifier.
*StudentCTEProgramAssociationsApi* | [**deleteStudentCTEProgramAssociationById**](docs/Api/StudentCTEProgramAssociationsApi.md#deletestudentcteprogramassociationbyid) | **DELETE** /ed-fi/studentCTEProgramAssociations/{id} | Deletes an existing resource using the resource identifier.
*StudentCTEProgramAssociationsApi* | [**deletesStudentCTEProgramAssociations**](docs/Api/StudentCTEProgramAssociationsApi.md#deletesstudentcteprogramassociations) | **GET** /ed-fi/studentCTEProgramAssociations/deletes | Retrieves deleted resources based on change version.
*StudentCTEProgramAssociationsApi* | [**getStudentCTEProgramAssociations**](docs/Api/StudentCTEProgramAssociationsApi.md#getstudentcteprogramassociations) | **GET** /ed-fi/studentCTEProgramAssociations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*StudentCTEProgramAssociationsApi* | [**getStudentCTEProgramAssociationsById**](docs/Api/StudentCTEProgramAssociationsApi.md#getstudentcteprogramassociationsbyid) | **GET** /ed-fi/studentCTEProgramAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*StudentCTEProgramAssociationsApi* | [**keyChangesStudentCTEProgramAssociations**](docs/Api/StudentCTEProgramAssociationsApi.md#keychangesstudentcteprogramassociations) | **GET** /ed-fi/studentCTEProgramAssociations/keyChanges | Retrieves resources key changes based on change version.
*StudentCTEProgramAssociationsApi* | [**postStudentCTEProgramAssociation**](docs/Api/StudentCTEProgramAssociationsApi.md#poststudentcteprogramassociation) | **POST** /ed-fi/studentCTEProgramAssociations | Creates or updates resources based on the natural key values of the supplied resource.
*StudentCTEProgramAssociationsApi* | [**putStudentCTEProgramAssociation**](docs/Api/StudentCTEProgramAssociationsApi.md#putstudentcteprogramassociation) | **PUT** /ed-fi/studentCTEProgramAssociations/{id} | Updates a resource based on the resource identifier.
*StudentCohortAssociationsApi* | [**deleteStudentCohortAssociationById**](docs/Api/StudentCohortAssociationsApi.md#deletestudentcohortassociationbyid) | **DELETE** /ed-fi/studentCohortAssociations/{id} | Deletes an existing resource using the resource identifier.
*StudentCohortAssociationsApi* | [**deletesStudentCohortAssociations**](docs/Api/StudentCohortAssociationsApi.md#deletesstudentcohortassociations) | **GET** /ed-fi/studentCohortAssociations/deletes | Retrieves deleted resources based on change version.
*StudentCohortAssociationsApi* | [**getStudentCohortAssociations**](docs/Api/StudentCohortAssociationsApi.md#getstudentcohortassociations) | **GET** /ed-fi/studentCohortAssociations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*StudentCohortAssociationsApi* | [**getStudentCohortAssociationsById**](docs/Api/StudentCohortAssociationsApi.md#getstudentcohortassociationsbyid) | **GET** /ed-fi/studentCohortAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*StudentCohortAssociationsApi* | [**keyChangesStudentCohortAssociations**](docs/Api/StudentCohortAssociationsApi.md#keychangesstudentcohortassociations) | **GET** /ed-fi/studentCohortAssociations/keyChanges | Retrieves resources key changes based on change version.
*StudentCohortAssociationsApi* | [**postStudentCohortAssociation**](docs/Api/StudentCohortAssociationsApi.md#poststudentcohortassociation) | **POST** /ed-fi/studentCohortAssociations | Creates or updates resources based on the natural key values of the supplied resource.
*StudentCohortAssociationsApi* | [**putStudentCohortAssociation**](docs/Api/StudentCohortAssociationsApi.md#putstudentcohortassociation) | **PUT** /ed-fi/studentCohortAssociations/{id} | Updates a resource based on the resource identifier.
*StudentCompetencyObjectivesApi* | [**deleteStudentCompetencyObjectiveById**](docs/Api/StudentCompetencyObjectivesApi.md#deletestudentcompetencyobjectivebyid) | **DELETE** /ed-fi/studentCompetencyObjectives/{id} | Deletes an existing resource using the resource identifier.
*StudentCompetencyObjectivesApi* | [**deletesStudentCompetencyObjectives**](docs/Api/StudentCompetencyObjectivesApi.md#deletesstudentcompetencyobjectives) | **GET** /ed-fi/studentCompetencyObjectives/deletes | Retrieves deleted resources based on change version.
*StudentCompetencyObjectivesApi* | [**getStudentCompetencyObjectives**](docs/Api/StudentCompetencyObjectivesApi.md#getstudentcompetencyobjectives) | **GET** /ed-fi/studentCompetencyObjectives | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*StudentCompetencyObjectivesApi* | [**getStudentCompetencyObjectivesById**](docs/Api/StudentCompetencyObjectivesApi.md#getstudentcompetencyobjectivesbyid) | **GET** /ed-fi/studentCompetencyObjectives/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*StudentCompetencyObjectivesApi* | [**keyChangesStudentCompetencyObjectives**](docs/Api/StudentCompetencyObjectivesApi.md#keychangesstudentcompetencyobjectives) | **GET** /ed-fi/studentCompetencyObjectives/keyChanges | Retrieves resources key changes based on change version.
*StudentCompetencyObjectivesApi* | [**postStudentCompetencyObjective**](docs/Api/StudentCompetencyObjectivesApi.md#poststudentcompetencyobjective) | **POST** /ed-fi/studentCompetencyObjectives | Creates or updates resources based on the natural key values of the supplied resource.
*StudentCompetencyObjectivesApi* | [**putStudentCompetencyObjective**](docs/Api/StudentCompetencyObjectivesApi.md#putstudentcompetencyobjective) | **PUT** /ed-fi/studentCompetencyObjectives/{id} | Updates a resource based on the resource identifier.
*StudentContactAssociationsApi* | [**deleteStudentContactAssociationById**](docs/Api/StudentContactAssociationsApi.md#deletestudentcontactassociationbyid) | **DELETE** /ed-fi/studentContactAssociations/{id} | Deletes an existing resource using the resource identifier.
*StudentContactAssociationsApi* | [**deletesStudentContactAssociations**](docs/Api/StudentContactAssociationsApi.md#deletesstudentcontactassociations) | **GET** /ed-fi/studentContactAssociations/deletes | Retrieves deleted resources based on change version.
*StudentContactAssociationsApi* | [**getStudentContactAssociations**](docs/Api/StudentContactAssociationsApi.md#getstudentcontactassociations) | **GET** /ed-fi/studentContactAssociations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*StudentContactAssociationsApi* | [**getStudentContactAssociationsById**](docs/Api/StudentContactAssociationsApi.md#getstudentcontactassociationsbyid) | **GET** /ed-fi/studentContactAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*StudentContactAssociationsApi* | [**keyChangesStudentContactAssociations**](docs/Api/StudentContactAssociationsApi.md#keychangesstudentcontactassociations) | **GET** /ed-fi/studentContactAssociations/keyChanges | Retrieves resources key changes based on change version.
*StudentContactAssociationsApi* | [**postStudentContactAssociation**](docs/Api/StudentContactAssociationsApi.md#poststudentcontactassociation) | **POST** /ed-fi/studentContactAssociations | Creates or updates resources based on the natural key values of the supplied resource.
*StudentContactAssociationsApi* | [**putStudentContactAssociation**](docs/Api/StudentContactAssociationsApi.md#putstudentcontactassociation) | **PUT** /ed-fi/studentContactAssociations/{id} | Updates a resource based on the resource identifier.
*StudentDisciplineIncidentBehaviorAssociationsApi* | [**deleteStudentDisciplineIncidentBehaviorAssociationById**](docs/Api/StudentDisciplineIncidentBehaviorAssociationsApi.md#deletestudentdisciplineincidentbehaviorassociationbyid) | **DELETE** /ed-fi/studentDisciplineIncidentBehaviorAssociations/{id} | Deletes an existing resource using the resource identifier.
*StudentDisciplineIncidentBehaviorAssociationsApi* | [**deletesStudentDisciplineIncidentBehaviorAssociations**](docs/Api/StudentDisciplineIncidentBehaviorAssociationsApi.md#deletesstudentdisciplineincidentbehaviorassociations) | **GET** /ed-fi/studentDisciplineIncidentBehaviorAssociations/deletes | Retrieves deleted resources based on change version.
*StudentDisciplineIncidentBehaviorAssociationsApi* | [**getStudentDisciplineIncidentBehaviorAssociations**](docs/Api/StudentDisciplineIncidentBehaviorAssociationsApi.md#getstudentdisciplineincidentbehaviorassociations) | **GET** /ed-fi/studentDisciplineIncidentBehaviorAssociations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*StudentDisciplineIncidentBehaviorAssociationsApi* | [**getStudentDisciplineIncidentBehaviorAssociationsById**](docs/Api/StudentDisciplineIncidentBehaviorAssociationsApi.md#getstudentdisciplineincidentbehaviorassociationsbyid) | **GET** /ed-fi/studentDisciplineIncidentBehaviorAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*StudentDisciplineIncidentBehaviorAssociationsApi* | [**keyChangesStudentDisciplineIncidentBehaviorAssociations**](docs/Api/StudentDisciplineIncidentBehaviorAssociationsApi.md#keychangesstudentdisciplineincidentbehaviorassociations) | **GET** /ed-fi/studentDisciplineIncidentBehaviorAssociations/keyChanges | Retrieves resources key changes based on change version.
*StudentDisciplineIncidentBehaviorAssociationsApi* | [**postStudentDisciplineIncidentBehaviorAssociation**](docs/Api/StudentDisciplineIncidentBehaviorAssociationsApi.md#poststudentdisciplineincidentbehaviorassociation) | **POST** /ed-fi/studentDisciplineIncidentBehaviorAssociations | Creates or updates resources based on the natural key values of the supplied resource.
*StudentDisciplineIncidentBehaviorAssociationsApi* | [**putStudentDisciplineIncidentBehaviorAssociation**](docs/Api/StudentDisciplineIncidentBehaviorAssociationsApi.md#putstudentdisciplineincidentbehaviorassociation) | **PUT** /ed-fi/studentDisciplineIncidentBehaviorAssociations/{id} | Updates a resource based on the resource identifier.
*StudentDisciplineIncidentNonOffenderAssociationsApi* | [**deleteStudentDisciplineIncidentNonOffenderAssociationById**](docs/Api/StudentDisciplineIncidentNonOffenderAssociationsApi.md#deletestudentdisciplineincidentnonoffenderassociationbyid) | **DELETE** /ed-fi/studentDisciplineIncidentNonOffenderAssociations/{id} | Deletes an existing resource using the resource identifier.
*StudentDisciplineIncidentNonOffenderAssociationsApi* | [**deletesStudentDisciplineIncidentNonOffenderAssociations**](docs/Api/StudentDisciplineIncidentNonOffenderAssociationsApi.md#deletesstudentdisciplineincidentnonoffenderassociations) | **GET** /ed-fi/studentDisciplineIncidentNonOffenderAssociations/deletes | Retrieves deleted resources based on change version.
*StudentDisciplineIncidentNonOffenderAssociationsApi* | [**getStudentDisciplineIncidentNonOffenderAssociations**](docs/Api/StudentDisciplineIncidentNonOffenderAssociationsApi.md#getstudentdisciplineincidentnonoffenderassociations) | **GET** /ed-fi/studentDisciplineIncidentNonOffenderAssociations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*StudentDisciplineIncidentNonOffenderAssociationsApi* | [**getStudentDisciplineIncidentNonOffenderAssociationsById**](docs/Api/StudentDisciplineIncidentNonOffenderAssociationsApi.md#getstudentdisciplineincidentnonoffenderassociationsbyid) | **GET** /ed-fi/studentDisciplineIncidentNonOffenderAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*StudentDisciplineIncidentNonOffenderAssociationsApi* | [**keyChangesStudentDisciplineIncidentNonOffenderAssociations**](docs/Api/StudentDisciplineIncidentNonOffenderAssociationsApi.md#keychangesstudentdisciplineincidentnonoffenderassociations) | **GET** /ed-fi/studentDisciplineIncidentNonOffenderAssociations/keyChanges | Retrieves resources key changes based on change version.
*StudentDisciplineIncidentNonOffenderAssociationsApi* | [**postStudentDisciplineIncidentNonOffenderAssociation**](docs/Api/StudentDisciplineIncidentNonOffenderAssociationsApi.md#poststudentdisciplineincidentnonoffenderassociation) | **POST** /ed-fi/studentDisciplineIncidentNonOffenderAssociations | Creates or updates resources based on the natural key values of the supplied resource.
*StudentDisciplineIncidentNonOffenderAssociationsApi* | [**putStudentDisciplineIncidentNonOffenderAssociation**](docs/Api/StudentDisciplineIncidentNonOffenderAssociationsApi.md#putstudentdisciplineincidentnonoffenderassociation) | **PUT** /ed-fi/studentDisciplineIncidentNonOffenderAssociations/{id} | Updates a resource based on the resource identifier.
*StudentEducationOrganizationAssociationsApi* | [**deleteStudentEducationOrganizationAssociationById**](docs/Api/StudentEducationOrganizationAssociationsApi.md#deletestudenteducationorganizationassociationbyid) | **DELETE** /ed-fi/studentEducationOrganizationAssociations/{id} | Deletes an existing resource using the resource identifier.
*StudentEducationOrganizationAssociationsApi* | [**deletesStudentEducationOrganizationAssociations**](docs/Api/StudentEducationOrganizationAssociationsApi.md#deletesstudenteducationorganizationassociations) | **GET** /ed-fi/studentEducationOrganizationAssociations/deletes | Retrieves deleted resources based on change version.
*StudentEducationOrganizationAssociationsApi* | [**getStudentEducationOrganizationAssociations**](docs/Api/StudentEducationOrganizationAssociationsApi.md#getstudenteducationorganizationassociations) | **GET** /ed-fi/studentEducationOrganizationAssociations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*StudentEducationOrganizationAssociationsApi* | [**getStudentEducationOrganizationAssociationsById**](docs/Api/StudentEducationOrganizationAssociationsApi.md#getstudenteducationorganizationassociationsbyid) | **GET** /ed-fi/studentEducationOrganizationAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*StudentEducationOrganizationAssociationsApi* | [**keyChangesStudentEducationOrganizationAssociations**](docs/Api/StudentEducationOrganizationAssociationsApi.md#keychangesstudenteducationorganizationassociations) | **GET** /ed-fi/studentEducationOrganizationAssociations/keyChanges | Retrieves resources key changes based on change version.
*StudentEducationOrganizationAssociationsApi* | [**postStudentEducationOrganizationAssociation**](docs/Api/StudentEducationOrganizationAssociationsApi.md#poststudenteducationorganizationassociation) | **POST** /ed-fi/studentEducationOrganizationAssociations | Creates or updates resources based on the natural key values of the supplied resource.
*StudentEducationOrganizationAssociationsApi* | [**putStudentEducationOrganizationAssociation**](docs/Api/StudentEducationOrganizationAssociationsApi.md#putstudenteducationorganizationassociation) | **PUT** /ed-fi/studentEducationOrganizationAssociations/{id} | Updates a resource based on the resource identifier.
*StudentEducationOrganizationResponsibilityAssociationsApi* | [**deleteStudentEducationOrganizationResponsibilityAssociationById**](docs/Api/StudentEducationOrganizationResponsibilityAssociationsApi.md#deletestudenteducationorganizationresponsibilityassociationbyid) | **DELETE** /ed-fi/studentEducationOrganizationResponsibilityAssociations/{id} | Deletes an existing resource using the resource identifier.
*StudentEducationOrganizationResponsibilityAssociationsApi* | [**deletesStudentEducationOrganizationResponsibilityAssociations**](docs/Api/StudentEducationOrganizationResponsibilityAssociationsApi.md#deletesstudenteducationorganizationresponsibilityassociations) | **GET** /ed-fi/studentEducationOrganizationResponsibilityAssociations/deletes | Retrieves deleted resources based on change version.
*StudentEducationOrganizationResponsibilityAssociationsApi* | [**getStudentEducationOrganizationResponsibilityAssociations**](docs/Api/StudentEducationOrganizationResponsibilityAssociationsApi.md#getstudenteducationorganizationresponsibilityassociations) | **GET** /ed-fi/studentEducationOrganizationResponsibilityAssociations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*StudentEducationOrganizationResponsibilityAssociationsApi* | [**getStudentEducationOrganizationResponsibilityAssociationsById**](docs/Api/StudentEducationOrganizationResponsibilityAssociationsApi.md#getstudenteducationorganizationresponsibilityassociationsbyid) | **GET** /ed-fi/studentEducationOrganizationResponsibilityAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*StudentEducationOrganizationResponsibilityAssociationsApi* | [**keyChangesStudentEducationOrganizationResponsibilityAssociations**](docs/Api/StudentEducationOrganizationResponsibilityAssociationsApi.md#keychangesstudenteducationorganizationresponsibilityassociations) | **GET** /ed-fi/studentEducationOrganizationResponsibilityAssociations/keyChanges | Retrieves resources key changes based on change version.
*StudentEducationOrganizationResponsibilityAssociationsApi* | [**postStudentEducationOrganizationResponsibilityAssociation**](docs/Api/StudentEducationOrganizationResponsibilityAssociationsApi.md#poststudenteducationorganizationresponsibilityassociation) | **POST** /ed-fi/studentEducationOrganizationResponsibilityAssociations | Creates or updates resources based on the natural key values of the supplied resource.
*StudentEducationOrganizationResponsibilityAssociationsApi* | [**putStudentEducationOrganizationResponsibilityAssociation**](docs/Api/StudentEducationOrganizationResponsibilityAssociationsApi.md#putstudenteducationorganizationresponsibilityassociation) | **PUT** /ed-fi/studentEducationOrganizationResponsibilityAssociations/{id} | Updates a resource based on the resource identifier.
*StudentGradebookEntriesApi* | [**deleteStudentGradebookEntryById**](docs/Api/StudentGradebookEntriesApi.md#deletestudentgradebookentrybyid) | **DELETE** /ed-fi/studentGradebookEntries/{id} | Deletes an existing resource using the resource identifier.
*StudentGradebookEntriesApi* | [**deletesStudentGradebookEntries**](docs/Api/StudentGradebookEntriesApi.md#deletesstudentgradebookentries) | **GET** /ed-fi/studentGradebookEntries/deletes | Retrieves deleted resources based on change version.
*StudentGradebookEntriesApi* | [**getStudentGradebookEntries**](docs/Api/StudentGradebookEntriesApi.md#getstudentgradebookentries) | **GET** /ed-fi/studentGradebookEntries | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*StudentGradebookEntriesApi* | [**getStudentGradebookEntriesById**](docs/Api/StudentGradebookEntriesApi.md#getstudentgradebookentriesbyid) | **GET** /ed-fi/studentGradebookEntries/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*StudentGradebookEntriesApi* | [**keyChangesStudentGradebookEntries**](docs/Api/StudentGradebookEntriesApi.md#keychangesstudentgradebookentries) | **GET** /ed-fi/studentGradebookEntries/keyChanges | Retrieves resources key changes based on change version.
*StudentGradebookEntriesApi* | [**postStudentGradebookEntry**](docs/Api/StudentGradebookEntriesApi.md#poststudentgradebookentry) | **POST** /ed-fi/studentGradebookEntries | Creates or updates resources based on the natural key values of the supplied resource.
*StudentGradebookEntriesApi* | [**putStudentGradebookEntry**](docs/Api/StudentGradebookEntriesApi.md#putstudentgradebookentry) | **PUT** /ed-fi/studentGradebookEntries/{id} | Updates a resource based on the resource identifier.
*StudentHomelessProgramAssociationsApi* | [**deleteStudentHomelessProgramAssociationById**](docs/Api/StudentHomelessProgramAssociationsApi.md#deletestudenthomelessprogramassociationbyid) | **DELETE** /ed-fi/studentHomelessProgramAssociations/{id} | Deletes an existing resource using the resource identifier.
*StudentHomelessProgramAssociationsApi* | [**deletesStudentHomelessProgramAssociations**](docs/Api/StudentHomelessProgramAssociationsApi.md#deletesstudenthomelessprogramassociations) | **GET** /ed-fi/studentHomelessProgramAssociations/deletes | Retrieves deleted resources based on change version.
*StudentHomelessProgramAssociationsApi* | [**getStudentHomelessProgramAssociations**](docs/Api/StudentHomelessProgramAssociationsApi.md#getstudenthomelessprogramassociations) | **GET** /ed-fi/studentHomelessProgramAssociations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*StudentHomelessProgramAssociationsApi* | [**getStudentHomelessProgramAssociationsById**](docs/Api/StudentHomelessProgramAssociationsApi.md#getstudenthomelessprogramassociationsbyid) | **GET** /ed-fi/studentHomelessProgramAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*StudentHomelessProgramAssociationsApi* | [**keyChangesStudentHomelessProgramAssociations**](docs/Api/StudentHomelessProgramAssociationsApi.md#keychangesstudenthomelessprogramassociations) | **GET** /ed-fi/studentHomelessProgramAssociations/keyChanges | Retrieves resources key changes based on change version.
*StudentHomelessProgramAssociationsApi* | [**postStudentHomelessProgramAssociation**](docs/Api/StudentHomelessProgramAssociationsApi.md#poststudenthomelessprogramassociation) | **POST** /ed-fi/studentHomelessProgramAssociations | Creates or updates resources based on the natural key values of the supplied resource.
*StudentHomelessProgramAssociationsApi* | [**putStudentHomelessProgramAssociation**](docs/Api/StudentHomelessProgramAssociationsApi.md#putstudenthomelessprogramassociation) | **PUT** /ed-fi/studentHomelessProgramAssociations/{id} | Updates a resource based on the resource identifier.
*StudentInterventionAssociationsApi* | [**deleteStudentInterventionAssociationById**](docs/Api/StudentInterventionAssociationsApi.md#deletestudentinterventionassociationbyid) | **DELETE** /ed-fi/studentInterventionAssociations/{id} | Deletes an existing resource using the resource identifier.
*StudentInterventionAssociationsApi* | [**deletesStudentInterventionAssociations**](docs/Api/StudentInterventionAssociationsApi.md#deletesstudentinterventionassociations) | **GET** /ed-fi/studentInterventionAssociations/deletes | Retrieves deleted resources based on change version.
*StudentInterventionAssociationsApi* | [**getStudentInterventionAssociations**](docs/Api/StudentInterventionAssociationsApi.md#getstudentinterventionassociations) | **GET** /ed-fi/studentInterventionAssociations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*StudentInterventionAssociationsApi* | [**getStudentInterventionAssociationsById**](docs/Api/StudentInterventionAssociationsApi.md#getstudentinterventionassociationsbyid) | **GET** /ed-fi/studentInterventionAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*StudentInterventionAssociationsApi* | [**keyChangesStudentInterventionAssociations**](docs/Api/StudentInterventionAssociationsApi.md#keychangesstudentinterventionassociations) | **GET** /ed-fi/studentInterventionAssociations/keyChanges | Retrieves resources key changes based on change version.
*StudentInterventionAssociationsApi* | [**postStudentInterventionAssociation**](docs/Api/StudentInterventionAssociationsApi.md#poststudentinterventionassociation) | **POST** /ed-fi/studentInterventionAssociations | Creates or updates resources based on the natural key values of the supplied resource.
*StudentInterventionAssociationsApi* | [**putStudentInterventionAssociation**](docs/Api/StudentInterventionAssociationsApi.md#putstudentinterventionassociation) | **PUT** /ed-fi/studentInterventionAssociations/{id} | Updates a resource based on the resource identifier.
*StudentInterventionAttendanceEventsApi* | [**deleteStudentInterventionAttendanceEventById**](docs/Api/StudentInterventionAttendanceEventsApi.md#deletestudentinterventionattendanceeventbyid) | **DELETE** /ed-fi/studentInterventionAttendanceEvents/{id} | Deletes an existing resource using the resource identifier.
*StudentInterventionAttendanceEventsApi* | [**deletesStudentInterventionAttendanceEvents**](docs/Api/StudentInterventionAttendanceEventsApi.md#deletesstudentinterventionattendanceevents) | **GET** /ed-fi/studentInterventionAttendanceEvents/deletes | Retrieves deleted resources based on change version.
*StudentInterventionAttendanceEventsApi* | [**getStudentInterventionAttendanceEvents**](docs/Api/StudentInterventionAttendanceEventsApi.md#getstudentinterventionattendanceevents) | **GET** /ed-fi/studentInterventionAttendanceEvents | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*StudentInterventionAttendanceEventsApi* | [**getStudentInterventionAttendanceEventsById**](docs/Api/StudentInterventionAttendanceEventsApi.md#getstudentinterventionattendanceeventsbyid) | **GET** /ed-fi/studentInterventionAttendanceEvents/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*StudentInterventionAttendanceEventsApi* | [**keyChangesStudentInterventionAttendanceEvents**](docs/Api/StudentInterventionAttendanceEventsApi.md#keychangesstudentinterventionattendanceevents) | **GET** /ed-fi/studentInterventionAttendanceEvents/keyChanges | Retrieves resources key changes based on change version.
*StudentInterventionAttendanceEventsApi* | [**postStudentInterventionAttendanceEvent**](docs/Api/StudentInterventionAttendanceEventsApi.md#poststudentinterventionattendanceevent) | **POST** /ed-fi/studentInterventionAttendanceEvents | Creates or updates resources based on the natural key values of the supplied resource.
*StudentInterventionAttendanceEventsApi* | [**putStudentInterventionAttendanceEvent**](docs/Api/StudentInterventionAttendanceEventsApi.md#putstudentinterventionattendanceevent) | **PUT** /ed-fi/studentInterventionAttendanceEvents/{id} | Updates a resource based on the resource identifier.
*StudentLanguageInstructionProgramAssociationsApi* | [**deleteStudentLanguageInstructionProgramAssociationById**](docs/Api/StudentLanguageInstructionProgramAssociationsApi.md#deletestudentlanguageinstructionprogramassociationbyid) | **DELETE** /ed-fi/studentLanguageInstructionProgramAssociations/{id} | Deletes an existing resource using the resource identifier.
*StudentLanguageInstructionProgramAssociationsApi* | [**deletesStudentLanguageInstructionProgramAssociations**](docs/Api/StudentLanguageInstructionProgramAssociationsApi.md#deletesstudentlanguageinstructionprogramassociations) | **GET** /ed-fi/studentLanguageInstructionProgramAssociations/deletes | Retrieves deleted resources based on change version.
*StudentLanguageInstructionProgramAssociationsApi* | [**getStudentLanguageInstructionProgramAssociations**](docs/Api/StudentLanguageInstructionProgramAssociationsApi.md#getstudentlanguageinstructionprogramassociations) | **GET** /ed-fi/studentLanguageInstructionProgramAssociations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*StudentLanguageInstructionProgramAssociationsApi* | [**getStudentLanguageInstructionProgramAssociationsById**](docs/Api/StudentLanguageInstructionProgramAssociationsApi.md#getstudentlanguageinstructionprogramassociationsbyid) | **GET** /ed-fi/studentLanguageInstructionProgramAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*StudentLanguageInstructionProgramAssociationsApi* | [**keyChangesStudentLanguageInstructionProgramAssociations**](docs/Api/StudentLanguageInstructionProgramAssociationsApi.md#keychangesstudentlanguageinstructionprogramassociations) | **GET** /ed-fi/studentLanguageInstructionProgramAssociations/keyChanges | Retrieves resources key changes based on change version.
*StudentLanguageInstructionProgramAssociationsApi* | [**postStudentLanguageInstructionProgramAssociation**](docs/Api/StudentLanguageInstructionProgramAssociationsApi.md#poststudentlanguageinstructionprogramassociation) | **POST** /ed-fi/studentLanguageInstructionProgramAssociations | Creates or updates resources based on the natural key values of the supplied resource.
*StudentLanguageInstructionProgramAssociationsApi* | [**putStudentLanguageInstructionProgramAssociation**](docs/Api/StudentLanguageInstructionProgramAssociationsApi.md#putstudentlanguageinstructionprogramassociation) | **PUT** /ed-fi/studentLanguageInstructionProgramAssociations/{id} | Updates a resource based on the resource identifier.
*StudentMigrantEducationProgramAssociationsApi* | [**deleteStudentMigrantEducationProgramAssociationById**](docs/Api/StudentMigrantEducationProgramAssociationsApi.md#deletestudentmigranteducationprogramassociationbyid) | **DELETE** /ed-fi/studentMigrantEducationProgramAssociations/{id} | Deletes an existing resource using the resource identifier.
*StudentMigrantEducationProgramAssociationsApi* | [**deletesStudentMigrantEducationProgramAssociations**](docs/Api/StudentMigrantEducationProgramAssociationsApi.md#deletesstudentmigranteducationprogramassociations) | **GET** /ed-fi/studentMigrantEducationProgramAssociations/deletes | Retrieves deleted resources based on change version.
*StudentMigrantEducationProgramAssociationsApi* | [**getStudentMigrantEducationProgramAssociations**](docs/Api/StudentMigrantEducationProgramAssociationsApi.md#getstudentmigranteducationprogramassociations) | **GET** /ed-fi/studentMigrantEducationProgramAssociations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*StudentMigrantEducationProgramAssociationsApi* | [**getStudentMigrantEducationProgramAssociationsById**](docs/Api/StudentMigrantEducationProgramAssociationsApi.md#getstudentmigranteducationprogramassociationsbyid) | **GET** /ed-fi/studentMigrantEducationProgramAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*StudentMigrantEducationProgramAssociationsApi* | [**keyChangesStudentMigrantEducationProgramAssociations**](docs/Api/StudentMigrantEducationProgramAssociationsApi.md#keychangesstudentmigranteducationprogramassociations) | **GET** /ed-fi/studentMigrantEducationProgramAssociations/keyChanges | Retrieves resources key changes based on change version.
*StudentMigrantEducationProgramAssociationsApi* | [**postStudentMigrantEducationProgramAssociation**](docs/Api/StudentMigrantEducationProgramAssociationsApi.md#poststudentmigranteducationprogramassociation) | **POST** /ed-fi/studentMigrantEducationProgramAssociations | Creates or updates resources based on the natural key values of the supplied resource.
*StudentMigrantEducationProgramAssociationsApi* | [**putStudentMigrantEducationProgramAssociation**](docs/Api/StudentMigrantEducationProgramAssociationsApi.md#putstudentmigranteducationprogramassociation) | **PUT** /ed-fi/studentMigrantEducationProgramAssociations/{id} | Updates a resource based on the resource identifier.
*StudentNeglectedOrDelinquentProgramAssociationsApi* | [**deleteStudentNeglectedOrDelinquentProgramAssociationById**](docs/Api/StudentNeglectedOrDelinquentProgramAssociationsApi.md#deletestudentneglectedordelinquentprogramassociationbyid) | **DELETE** /ed-fi/studentNeglectedOrDelinquentProgramAssociations/{id} | Deletes an existing resource using the resource identifier.
*StudentNeglectedOrDelinquentProgramAssociationsApi* | [**deletesStudentNeglectedOrDelinquentProgramAssociations**](docs/Api/StudentNeglectedOrDelinquentProgramAssociationsApi.md#deletesstudentneglectedordelinquentprogramassociations) | **GET** /ed-fi/studentNeglectedOrDelinquentProgramAssociations/deletes | Retrieves deleted resources based on change version.
*StudentNeglectedOrDelinquentProgramAssociationsApi* | [**getStudentNeglectedOrDelinquentProgramAssociations**](docs/Api/StudentNeglectedOrDelinquentProgramAssociationsApi.md#getstudentneglectedordelinquentprogramassociations) | **GET** /ed-fi/studentNeglectedOrDelinquentProgramAssociations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*StudentNeglectedOrDelinquentProgramAssociationsApi* | [**getStudentNeglectedOrDelinquentProgramAssociationsById**](docs/Api/StudentNeglectedOrDelinquentProgramAssociationsApi.md#getstudentneglectedordelinquentprogramassociationsbyid) | **GET** /ed-fi/studentNeglectedOrDelinquentProgramAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*StudentNeglectedOrDelinquentProgramAssociationsApi* | [**keyChangesStudentNeglectedOrDelinquentProgramAssociations**](docs/Api/StudentNeglectedOrDelinquentProgramAssociationsApi.md#keychangesstudentneglectedordelinquentprogramassociations) | **GET** /ed-fi/studentNeglectedOrDelinquentProgramAssociations/keyChanges | Retrieves resources key changes based on change version.
*StudentNeglectedOrDelinquentProgramAssociationsApi* | [**postStudentNeglectedOrDelinquentProgramAssociation**](docs/Api/StudentNeglectedOrDelinquentProgramAssociationsApi.md#poststudentneglectedordelinquentprogramassociation) | **POST** /ed-fi/studentNeglectedOrDelinquentProgramAssociations | Creates or updates resources based on the natural key values of the supplied resource.
*StudentNeglectedOrDelinquentProgramAssociationsApi* | [**putStudentNeglectedOrDelinquentProgramAssociation**](docs/Api/StudentNeglectedOrDelinquentProgramAssociationsApi.md#putstudentneglectedordelinquentprogramassociation) | **PUT** /ed-fi/studentNeglectedOrDelinquentProgramAssociations/{id} | Updates a resource based on the resource identifier.
*StudentProgramAssociationsApi* | [**deleteStudentProgramAssociationById**](docs/Api/StudentProgramAssociationsApi.md#deletestudentprogramassociationbyid) | **DELETE** /ed-fi/studentProgramAssociations/{id} | Deletes an existing resource using the resource identifier.
*StudentProgramAssociationsApi* | [**deletesStudentProgramAssociations**](docs/Api/StudentProgramAssociationsApi.md#deletesstudentprogramassociations) | **GET** /ed-fi/studentProgramAssociations/deletes | Retrieves deleted resources based on change version.
*StudentProgramAssociationsApi* | [**getStudentProgramAssociations**](docs/Api/StudentProgramAssociationsApi.md#getstudentprogramassociations) | **GET** /ed-fi/studentProgramAssociations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*StudentProgramAssociationsApi* | [**getStudentProgramAssociationsById**](docs/Api/StudentProgramAssociationsApi.md#getstudentprogramassociationsbyid) | **GET** /ed-fi/studentProgramAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*StudentProgramAssociationsApi* | [**keyChangesStudentProgramAssociations**](docs/Api/StudentProgramAssociationsApi.md#keychangesstudentprogramassociations) | **GET** /ed-fi/studentProgramAssociations/keyChanges | Retrieves resources key changes based on change version.
*StudentProgramAssociationsApi* | [**postStudentProgramAssociation**](docs/Api/StudentProgramAssociationsApi.md#poststudentprogramassociation) | **POST** /ed-fi/studentProgramAssociations | Creates or updates resources based on the natural key values of the supplied resource.
*StudentProgramAssociationsApi* | [**putStudentProgramAssociation**](docs/Api/StudentProgramAssociationsApi.md#putstudentprogramassociation) | **PUT** /ed-fi/studentProgramAssociations/{id} | Updates a resource based on the resource identifier.
*StudentProgramAttendanceEventsApi* | [**deleteStudentProgramAttendanceEventById**](docs/Api/StudentProgramAttendanceEventsApi.md#deletestudentprogramattendanceeventbyid) | **DELETE** /ed-fi/studentProgramAttendanceEvents/{id} | Deletes an existing resource using the resource identifier.
*StudentProgramAttendanceEventsApi* | [**deletesStudentProgramAttendanceEvents**](docs/Api/StudentProgramAttendanceEventsApi.md#deletesstudentprogramattendanceevents) | **GET** /ed-fi/studentProgramAttendanceEvents/deletes | Retrieves deleted resources based on change version.
*StudentProgramAttendanceEventsApi* | [**getStudentProgramAttendanceEvents**](docs/Api/StudentProgramAttendanceEventsApi.md#getstudentprogramattendanceevents) | **GET** /ed-fi/studentProgramAttendanceEvents | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*StudentProgramAttendanceEventsApi* | [**getStudentProgramAttendanceEventsById**](docs/Api/StudentProgramAttendanceEventsApi.md#getstudentprogramattendanceeventsbyid) | **GET** /ed-fi/studentProgramAttendanceEvents/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*StudentProgramAttendanceEventsApi* | [**keyChangesStudentProgramAttendanceEvents**](docs/Api/StudentProgramAttendanceEventsApi.md#keychangesstudentprogramattendanceevents) | **GET** /ed-fi/studentProgramAttendanceEvents/keyChanges | Retrieves resources key changes based on change version.
*StudentProgramAttendanceEventsApi* | [**postStudentProgramAttendanceEvent**](docs/Api/StudentProgramAttendanceEventsApi.md#poststudentprogramattendanceevent) | **POST** /ed-fi/studentProgramAttendanceEvents | Creates or updates resources based on the natural key values of the supplied resource.
*StudentProgramAttendanceEventsApi* | [**putStudentProgramAttendanceEvent**](docs/Api/StudentProgramAttendanceEventsApi.md#putstudentprogramattendanceevent) | **PUT** /ed-fi/studentProgramAttendanceEvents/{id} | Updates a resource based on the resource identifier.
*StudentProgramEvaluationsApi* | [**deleteStudentProgramEvaluationById**](docs/Api/StudentProgramEvaluationsApi.md#deletestudentprogramevaluationbyid) | **DELETE** /ed-fi/studentProgramEvaluations/{id} | Deletes an existing resource using the resource identifier.
*StudentProgramEvaluationsApi* | [**deletesStudentProgramEvaluations**](docs/Api/StudentProgramEvaluationsApi.md#deletesstudentprogramevaluations) | **GET** /ed-fi/studentProgramEvaluations/deletes | Retrieves deleted resources based on change version.
*StudentProgramEvaluationsApi* | [**getStudentProgramEvaluations**](docs/Api/StudentProgramEvaluationsApi.md#getstudentprogramevaluations) | **GET** /ed-fi/studentProgramEvaluations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*StudentProgramEvaluationsApi* | [**getStudentProgramEvaluationsById**](docs/Api/StudentProgramEvaluationsApi.md#getstudentprogramevaluationsbyid) | **GET** /ed-fi/studentProgramEvaluations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*StudentProgramEvaluationsApi* | [**keyChangesStudentProgramEvaluations**](docs/Api/StudentProgramEvaluationsApi.md#keychangesstudentprogramevaluations) | **GET** /ed-fi/studentProgramEvaluations/keyChanges | Retrieves resources key changes based on change version.
*StudentProgramEvaluationsApi* | [**postStudentProgramEvaluation**](docs/Api/StudentProgramEvaluationsApi.md#poststudentprogramevaluation) | **POST** /ed-fi/studentProgramEvaluations | Creates or updates resources based on the natural key values of the supplied resource.
*StudentProgramEvaluationsApi* | [**putStudentProgramEvaluation**](docs/Api/StudentProgramEvaluationsApi.md#putstudentprogramevaluation) | **PUT** /ed-fi/studentProgramEvaluations/{id} | Updates a resource based on the resource identifier.
*StudentSchoolAssociationsApi* | [**deleteStudentSchoolAssociationById**](docs/Api/StudentSchoolAssociationsApi.md#deletestudentschoolassociationbyid) | **DELETE** /ed-fi/studentSchoolAssociations/{id} | Deletes an existing resource using the resource identifier.
*StudentSchoolAssociationsApi* | [**deletesStudentSchoolAssociations**](docs/Api/StudentSchoolAssociationsApi.md#deletesstudentschoolassociations) | **GET** /ed-fi/studentSchoolAssociations/deletes | Retrieves deleted resources based on change version.
*StudentSchoolAssociationsApi* | [**getStudentSchoolAssociations**](docs/Api/StudentSchoolAssociationsApi.md#getstudentschoolassociations) | **GET** /ed-fi/studentSchoolAssociations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*StudentSchoolAssociationsApi* | [**getStudentSchoolAssociationsById**](docs/Api/StudentSchoolAssociationsApi.md#getstudentschoolassociationsbyid) | **GET** /ed-fi/studentSchoolAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*StudentSchoolAssociationsApi* | [**keyChangesStudentSchoolAssociations**](docs/Api/StudentSchoolAssociationsApi.md#keychangesstudentschoolassociations) | **GET** /ed-fi/studentSchoolAssociations/keyChanges | Retrieves resources key changes based on change version.
*StudentSchoolAssociationsApi* | [**postStudentSchoolAssociation**](docs/Api/StudentSchoolAssociationsApi.md#poststudentschoolassociation) | **POST** /ed-fi/studentSchoolAssociations | Creates or updates resources based on the natural key values of the supplied resource.
*StudentSchoolAssociationsApi* | [**putStudentSchoolAssociation**](docs/Api/StudentSchoolAssociationsApi.md#putstudentschoolassociation) | **PUT** /ed-fi/studentSchoolAssociations/{id} | Updates a resource based on the resource identifier.
*StudentSchoolAttendanceEventsApi* | [**deleteStudentSchoolAttendanceEventById**](docs/Api/StudentSchoolAttendanceEventsApi.md#deletestudentschoolattendanceeventbyid) | **DELETE** /ed-fi/studentSchoolAttendanceEvents/{id} | Deletes an existing resource using the resource identifier.
*StudentSchoolAttendanceEventsApi* | [**deletesStudentSchoolAttendanceEvents**](docs/Api/StudentSchoolAttendanceEventsApi.md#deletesstudentschoolattendanceevents) | **GET** /ed-fi/studentSchoolAttendanceEvents/deletes | Retrieves deleted resources based on change version.
*StudentSchoolAttendanceEventsApi* | [**getStudentSchoolAttendanceEvents**](docs/Api/StudentSchoolAttendanceEventsApi.md#getstudentschoolattendanceevents) | **GET** /ed-fi/studentSchoolAttendanceEvents | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*StudentSchoolAttendanceEventsApi* | [**getStudentSchoolAttendanceEventsById**](docs/Api/StudentSchoolAttendanceEventsApi.md#getstudentschoolattendanceeventsbyid) | **GET** /ed-fi/studentSchoolAttendanceEvents/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*StudentSchoolAttendanceEventsApi* | [**keyChangesStudentSchoolAttendanceEvents**](docs/Api/StudentSchoolAttendanceEventsApi.md#keychangesstudentschoolattendanceevents) | **GET** /ed-fi/studentSchoolAttendanceEvents/keyChanges | Retrieves resources key changes based on change version.
*StudentSchoolAttendanceEventsApi* | [**postStudentSchoolAttendanceEvent**](docs/Api/StudentSchoolAttendanceEventsApi.md#poststudentschoolattendanceevent) | **POST** /ed-fi/studentSchoolAttendanceEvents | Creates or updates resources based on the natural key values of the supplied resource.
*StudentSchoolAttendanceEventsApi* | [**putStudentSchoolAttendanceEvent**](docs/Api/StudentSchoolAttendanceEventsApi.md#putstudentschoolattendanceevent) | **PUT** /ed-fi/studentSchoolAttendanceEvents/{id} | Updates a resource based on the resource identifier.
*StudentSchoolFoodServiceProgramAssociationsApi* | [**deleteStudentSchoolFoodServiceProgramAssociationById**](docs/Api/StudentSchoolFoodServiceProgramAssociationsApi.md#deletestudentschoolfoodserviceprogramassociationbyid) | **DELETE** /ed-fi/studentSchoolFoodServiceProgramAssociations/{id} | Deletes an existing resource using the resource identifier.
*StudentSchoolFoodServiceProgramAssociationsApi* | [**deletesStudentSchoolFoodServiceProgramAssociations**](docs/Api/StudentSchoolFoodServiceProgramAssociationsApi.md#deletesstudentschoolfoodserviceprogramassociations) | **GET** /ed-fi/studentSchoolFoodServiceProgramAssociations/deletes | Retrieves deleted resources based on change version.
*StudentSchoolFoodServiceProgramAssociationsApi* | [**getStudentSchoolFoodServiceProgramAssociations**](docs/Api/StudentSchoolFoodServiceProgramAssociationsApi.md#getstudentschoolfoodserviceprogramassociations) | **GET** /ed-fi/studentSchoolFoodServiceProgramAssociations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*StudentSchoolFoodServiceProgramAssociationsApi* | [**getStudentSchoolFoodServiceProgramAssociationsById**](docs/Api/StudentSchoolFoodServiceProgramAssociationsApi.md#getstudentschoolfoodserviceprogramassociationsbyid) | **GET** /ed-fi/studentSchoolFoodServiceProgramAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*StudentSchoolFoodServiceProgramAssociationsApi* | [**keyChangesStudentSchoolFoodServiceProgramAssociations**](docs/Api/StudentSchoolFoodServiceProgramAssociationsApi.md#keychangesstudentschoolfoodserviceprogramassociations) | **GET** /ed-fi/studentSchoolFoodServiceProgramAssociations/keyChanges | Retrieves resources key changes based on change version.
*StudentSchoolFoodServiceProgramAssociationsApi* | [**postStudentSchoolFoodServiceProgramAssociation**](docs/Api/StudentSchoolFoodServiceProgramAssociationsApi.md#poststudentschoolfoodserviceprogramassociation) | **POST** /ed-fi/studentSchoolFoodServiceProgramAssociations | Creates or updates resources based on the natural key values of the supplied resource.
*StudentSchoolFoodServiceProgramAssociationsApi* | [**putStudentSchoolFoodServiceProgramAssociation**](docs/Api/StudentSchoolFoodServiceProgramAssociationsApi.md#putstudentschoolfoodserviceprogramassociation) | **PUT** /ed-fi/studentSchoolFoodServiceProgramAssociations/{id} | Updates a resource based on the resource identifier.
*StudentSectionAssociationsApi* | [**deleteStudentSectionAssociationById**](docs/Api/StudentSectionAssociationsApi.md#deletestudentsectionassociationbyid) | **DELETE** /ed-fi/studentSectionAssociations/{id} | Deletes an existing resource using the resource identifier.
*StudentSectionAssociationsApi* | [**deletesStudentSectionAssociations**](docs/Api/StudentSectionAssociationsApi.md#deletesstudentsectionassociations) | **GET** /ed-fi/studentSectionAssociations/deletes | Retrieves deleted resources based on change version.
*StudentSectionAssociationsApi* | [**getStudentSectionAssociations**](docs/Api/StudentSectionAssociationsApi.md#getstudentsectionassociations) | **GET** /ed-fi/studentSectionAssociations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*StudentSectionAssociationsApi* | [**getStudentSectionAssociationsById**](docs/Api/StudentSectionAssociationsApi.md#getstudentsectionassociationsbyid) | **GET** /ed-fi/studentSectionAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*StudentSectionAssociationsApi* | [**keyChangesStudentSectionAssociations**](docs/Api/StudentSectionAssociationsApi.md#keychangesstudentsectionassociations) | **GET** /ed-fi/studentSectionAssociations/keyChanges | Retrieves resources key changes based on change version.
*StudentSectionAssociationsApi* | [**postStudentSectionAssociation**](docs/Api/StudentSectionAssociationsApi.md#poststudentsectionassociation) | **POST** /ed-fi/studentSectionAssociations | Creates or updates resources based on the natural key values of the supplied resource.
*StudentSectionAssociationsApi* | [**putStudentSectionAssociation**](docs/Api/StudentSectionAssociationsApi.md#putstudentsectionassociation) | **PUT** /ed-fi/studentSectionAssociations/{id} | Updates a resource based on the resource identifier.
*StudentSectionAttendanceEventsApi* | [**deleteStudentSectionAttendanceEventById**](docs/Api/StudentSectionAttendanceEventsApi.md#deletestudentsectionattendanceeventbyid) | **DELETE** /ed-fi/studentSectionAttendanceEvents/{id} | Deletes an existing resource using the resource identifier.
*StudentSectionAttendanceEventsApi* | [**deletesStudentSectionAttendanceEvents**](docs/Api/StudentSectionAttendanceEventsApi.md#deletesstudentsectionattendanceevents) | **GET** /ed-fi/studentSectionAttendanceEvents/deletes | Retrieves deleted resources based on change version.
*StudentSectionAttendanceEventsApi* | [**getStudentSectionAttendanceEvents**](docs/Api/StudentSectionAttendanceEventsApi.md#getstudentsectionattendanceevents) | **GET** /ed-fi/studentSectionAttendanceEvents | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*StudentSectionAttendanceEventsApi* | [**getStudentSectionAttendanceEventsById**](docs/Api/StudentSectionAttendanceEventsApi.md#getstudentsectionattendanceeventsbyid) | **GET** /ed-fi/studentSectionAttendanceEvents/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*StudentSectionAttendanceEventsApi* | [**keyChangesStudentSectionAttendanceEvents**](docs/Api/StudentSectionAttendanceEventsApi.md#keychangesstudentsectionattendanceevents) | **GET** /ed-fi/studentSectionAttendanceEvents/keyChanges | Retrieves resources key changes based on change version.
*StudentSectionAttendanceEventsApi* | [**postStudentSectionAttendanceEvent**](docs/Api/StudentSectionAttendanceEventsApi.md#poststudentsectionattendanceevent) | **POST** /ed-fi/studentSectionAttendanceEvents | Creates or updates resources based on the natural key values of the supplied resource.
*StudentSectionAttendanceEventsApi* | [**putStudentSectionAttendanceEvent**](docs/Api/StudentSectionAttendanceEventsApi.md#putstudentsectionattendanceevent) | **PUT** /ed-fi/studentSectionAttendanceEvents/{id} | Updates a resource based on the resource identifier.
*StudentSpecialEducationProgramAssociationsApi* | [**deleteStudentSpecialEducationProgramAssociationById**](docs/Api/StudentSpecialEducationProgramAssociationsApi.md#deletestudentspecialeducationprogramassociationbyid) | **DELETE** /ed-fi/studentSpecialEducationProgramAssociations/{id} | Deletes an existing resource using the resource identifier.
*StudentSpecialEducationProgramAssociationsApi* | [**deletesStudentSpecialEducationProgramAssociations**](docs/Api/StudentSpecialEducationProgramAssociationsApi.md#deletesstudentspecialeducationprogramassociations) | **GET** /ed-fi/studentSpecialEducationProgramAssociations/deletes | Retrieves deleted resources based on change version.
*StudentSpecialEducationProgramAssociationsApi* | [**getStudentSpecialEducationProgramAssociations**](docs/Api/StudentSpecialEducationProgramAssociationsApi.md#getstudentspecialeducationprogramassociations) | **GET** /ed-fi/studentSpecialEducationProgramAssociations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*StudentSpecialEducationProgramAssociationsApi* | [**getStudentSpecialEducationProgramAssociationsById**](docs/Api/StudentSpecialEducationProgramAssociationsApi.md#getstudentspecialeducationprogramassociationsbyid) | **GET** /ed-fi/studentSpecialEducationProgramAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*StudentSpecialEducationProgramAssociationsApi* | [**keyChangesStudentSpecialEducationProgramAssociations**](docs/Api/StudentSpecialEducationProgramAssociationsApi.md#keychangesstudentspecialeducationprogramassociations) | **GET** /ed-fi/studentSpecialEducationProgramAssociations/keyChanges | Retrieves resources key changes based on change version.
*StudentSpecialEducationProgramAssociationsApi* | [**postStudentSpecialEducationProgramAssociation**](docs/Api/StudentSpecialEducationProgramAssociationsApi.md#poststudentspecialeducationprogramassociation) | **POST** /ed-fi/studentSpecialEducationProgramAssociations | Creates or updates resources based on the natural key values of the supplied resource.
*StudentSpecialEducationProgramAssociationsApi* | [**putStudentSpecialEducationProgramAssociation**](docs/Api/StudentSpecialEducationProgramAssociationsApi.md#putstudentspecialeducationprogramassociation) | **PUT** /ed-fi/studentSpecialEducationProgramAssociations/{id} | Updates a resource based on the resource identifier.
*StudentSpecialEducationProgramEligibilityAssociationsApi* | [**deleteStudentSpecialEducationProgramEligibilityAssociationById**](docs/Api/StudentSpecialEducationProgramEligibilityAssociationsApi.md#deletestudentspecialeducationprogrameligibilityassociationbyid) | **DELETE** /ed-fi/studentSpecialEducationProgramEligibilityAssociations/{id} | Deletes an existing resource using the resource identifier.
*StudentSpecialEducationProgramEligibilityAssociationsApi* | [**deletesStudentSpecialEducationProgramEligibilityAssociations**](docs/Api/StudentSpecialEducationProgramEligibilityAssociationsApi.md#deletesstudentspecialeducationprogrameligibilityassociations) | **GET** /ed-fi/studentSpecialEducationProgramEligibilityAssociations/deletes | Retrieves deleted resources based on change version.
*StudentSpecialEducationProgramEligibilityAssociationsApi* | [**getStudentSpecialEducationProgramEligibilityAssociations**](docs/Api/StudentSpecialEducationProgramEligibilityAssociationsApi.md#getstudentspecialeducationprogrameligibilityassociations) | **GET** /ed-fi/studentSpecialEducationProgramEligibilityAssociations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*StudentSpecialEducationProgramEligibilityAssociationsApi* | [**getStudentSpecialEducationProgramEligibilityAssociationsById**](docs/Api/StudentSpecialEducationProgramEligibilityAssociationsApi.md#getstudentspecialeducationprogrameligibilityassociationsbyid) | **GET** /ed-fi/studentSpecialEducationProgramEligibilityAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*StudentSpecialEducationProgramEligibilityAssociationsApi* | [**keyChangesStudentSpecialEducationProgramEligibilityAssociations**](docs/Api/StudentSpecialEducationProgramEligibilityAssociationsApi.md#keychangesstudentspecialeducationprogrameligibilityassociations) | **GET** /ed-fi/studentSpecialEducationProgramEligibilityAssociations/keyChanges | Retrieves resources key changes based on change version.
*StudentSpecialEducationProgramEligibilityAssociationsApi* | [**postStudentSpecialEducationProgramEligibilityAssociation**](docs/Api/StudentSpecialEducationProgramEligibilityAssociationsApi.md#poststudentspecialeducationprogrameligibilityassociation) | **POST** /ed-fi/studentSpecialEducationProgramEligibilityAssociations | Creates or updates resources based on the natural key values of the supplied resource.
*StudentSpecialEducationProgramEligibilityAssociationsApi* | [**putStudentSpecialEducationProgramEligibilityAssociation**](docs/Api/StudentSpecialEducationProgramEligibilityAssociationsApi.md#putstudentspecialeducationprogrameligibilityassociation) | **PUT** /ed-fi/studentSpecialEducationProgramEligibilityAssociations/{id} | Updates a resource based on the resource identifier.
*StudentTitleIPartAProgramAssociationsApi* | [**deleteStudentTitleIPartAProgramAssociationById**](docs/Api/StudentTitleIPartAProgramAssociationsApi.md#deletestudenttitleipartaprogramassociationbyid) | **DELETE** /ed-fi/studentTitleIPartAProgramAssociations/{id} | Deletes an existing resource using the resource identifier.
*StudentTitleIPartAProgramAssociationsApi* | [**deletesStudentTitleIPartAProgramAssociations**](docs/Api/StudentTitleIPartAProgramAssociationsApi.md#deletesstudenttitleipartaprogramassociations) | **GET** /ed-fi/studentTitleIPartAProgramAssociations/deletes | Retrieves deleted resources based on change version.
*StudentTitleIPartAProgramAssociationsApi* | [**getStudentTitleIPartAProgramAssociations**](docs/Api/StudentTitleIPartAProgramAssociationsApi.md#getstudenttitleipartaprogramassociations) | **GET** /ed-fi/studentTitleIPartAProgramAssociations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*StudentTitleIPartAProgramAssociationsApi* | [**getStudentTitleIPartAProgramAssociationsById**](docs/Api/StudentTitleIPartAProgramAssociationsApi.md#getstudenttitleipartaprogramassociationsbyid) | **GET** /ed-fi/studentTitleIPartAProgramAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*StudentTitleIPartAProgramAssociationsApi* | [**keyChangesStudentTitleIPartAProgramAssociations**](docs/Api/StudentTitleIPartAProgramAssociationsApi.md#keychangesstudenttitleipartaprogramassociations) | **GET** /ed-fi/studentTitleIPartAProgramAssociations/keyChanges | Retrieves resources key changes based on change version.
*StudentTitleIPartAProgramAssociationsApi* | [**postStudentTitleIPartAProgramAssociation**](docs/Api/StudentTitleIPartAProgramAssociationsApi.md#poststudenttitleipartaprogramassociation) | **POST** /ed-fi/studentTitleIPartAProgramAssociations | Creates or updates resources based on the natural key values of the supplied resource.
*StudentTitleIPartAProgramAssociationsApi* | [**putStudentTitleIPartAProgramAssociation**](docs/Api/StudentTitleIPartAProgramAssociationsApi.md#putstudenttitleipartaprogramassociation) | **PUT** /ed-fi/studentTitleIPartAProgramAssociations/{id} | Updates a resource based on the resource identifier.
*StudentsApi* | [**deleteStudentById**](docs/Api/StudentsApi.md#deletestudentbyid) | **DELETE** /ed-fi/students/{id} | Deletes an existing resource using the resource identifier.
*StudentsApi* | [**deletesStudents**](docs/Api/StudentsApi.md#deletesstudents) | **GET** /ed-fi/students/deletes | Retrieves deleted resources based on change version.
*StudentsApi* | [**getStudents**](docs/Api/StudentsApi.md#getstudents) | **GET** /ed-fi/students | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*StudentsApi* | [**getStudentsById**](docs/Api/StudentsApi.md#getstudentsbyid) | **GET** /ed-fi/students/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*StudentsApi* | [**keyChangesStudents**](docs/Api/StudentsApi.md#keychangesstudents) | **GET** /ed-fi/students/keyChanges | Retrieves resources key changes based on change version.
*StudentsApi* | [**postStudent**](docs/Api/StudentsApi.md#poststudent) | **POST** /ed-fi/students | Creates or updates resources based on the natural key values of the supplied resource.
*StudentsApi* | [**putStudent**](docs/Api/StudentsApi.md#putstudent) | **PUT** /ed-fi/students/{id} | Updates a resource based on the resource identifier.
*SurveyCourseAssociationsApi* | [**deleteSurveyCourseAssociationById**](docs/Api/SurveyCourseAssociationsApi.md#deletesurveycourseassociationbyid) | **DELETE** /ed-fi/surveyCourseAssociations/{id} | Deletes an existing resource using the resource identifier.
*SurveyCourseAssociationsApi* | [**deletesSurveyCourseAssociations**](docs/Api/SurveyCourseAssociationsApi.md#deletessurveycourseassociations) | **GET** /ed-fi/surveyCourseAssociations/deletes | Retrieves deleted resources based on change version.
*SurveyCourseAssociationsApi* | [**getSurveyCourseAssociations**](docs/Api/SurveyCourseAssociationsApi.md#getsurveycourseassociations) | **GET** /ed-fi/surveyCourseAssociations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*SurveyCourseAssociationsApi* | [**getSurveyCourseAssociationsById**](docs/Api/SurveyCourseAssociationsApi.md#getsurveycourseassociationsbyid) | **GET** /ed-fi/surveyCourseAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*SurveyCourseAssociationsApi* | [**keyChangesSurveyCourseAssociations**](docs/Api/SurveyCourseAssociationsApi.md#keychangessurveycourseassociations) | **GET** /ed-fi/surveyCourseAssociations/keyChanges | Retrieves resources key changes based on change version.
*SurveyCourseAssociationsApi* | [**postSurveyCourseAssociation**](docs/Api/SurveyCourseAssociationsApi.md#postsurveycourseassociation) | **POST** /ed-fi/surveyCourseAssociations | Creates or updates resources based on the natural key values of the supplied resource.
*SurveyCourseAssociationsApi* | [**putSurveyCourseAssociation**](docs/Api/SurveyCourseAssociationsApi.md#putsurveycourseassociation) | **PUT** /ed-fi/surveyCourseAssociations/{id} | Updates a resource based on the resource identifier.
*SurveyProgramAssociationsApi* | [**deleteSurveyProgramAssociationById**](docs/Api/SurveyProgramAssociationsApi.md#deletesurveyprogramassociationbyid) | **DELETE** /ed-fi/surveyProgramAssociations/{id} | Deletes an existing resource using the resource identifier.
*SurveyProgramAssociationsApi* | [**deletesSurveyProgramAssociations**](docs/Api/SurveyProgramAssociationsApi.md#deletessurveyprogramassociations) | **GET** /ed-fi/surveyProgramAssociations/deletes | Retrieves deleted resources based on change version.
*SurveyProgramAssociationsApi* | [**getSurveyProgramAssociations**](docs/Api/SurveyProgramAssociationsApi.md#getsurveyprogramassociations) | **GET** /ed-fi/surveyProgramAssociations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*SurveyProgramAssociationsApi* | [**getSurveyProgramAssociationsById**](docs/Api/SurveyProgramAssociationsApi.md#getsurveyprogramassociationsbyid) | **GET** /ed-fi/surveyProgramAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*SurveyProgramAssociationsApi* | [**keyChangesSurveyProgramAssociations**](docs/Api/SurveyProgramAssociationsApi.md#keychangessurveyprogramassociations) | **GET** /ed-fi/surveyProgramAssociations/keyChanges | Retrieves resources key changes based on change version.
*SurveyProgramAssociationsApi* | [**postSurveyProgramAssociation**](docs/Api/SurveyProgramAssociationsApi.md#postsurveyprogramassociation) | **POST** /ed-fi/surveyProgramAssociations | Creates or updates resources based on the natural key values of the supplied resource.
*SurveyProgramAssociationsApi* | [**putSurveyProgramAssociation**](docs/Api/SurveyProgramAssociationsApi.md#putsurveyprogramassociation) | **PUT** /ed-fi/surveyProgramAssociations/{id} | Updates a resource based on the resource identifier.
*SurveyQuestionResponsesApi* | [**deleteSurveyQuestionResponseById**](docs/Api/SurveyQuestionResponsesApi.md#deletesurveyquestionresponsebyid) | **DELETE** /ed-fi/surveyQuestionResponses/{id} | Deletes an existing resource using the resource identifier.
*SurveyQuestionResponsesApi* | [**deletesSurveyQuestionResponses**](docs/Api/SurveyQuestionResponsesApi.md#deletessurveyquestionresponses) | **GET** /ed-fi/surveyQuestionResponses/deletes | Retrieves deleted resources based on change version.
*SurveyQuestionResponsesApi* | [**getSurveyQuestionResponses**](docs/Api/SurveyQuestionResponsesApi.md#getsurveyquestionresponses) | **GET** /ed-fi/surveyQuestionResponses | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*SurveyQuestionResponsesApi* | [**getSurveyQuestionResponsesById**](docs/Api/SurveyQuestionResponsesApi.md#getsurveyquestionresponsesbyid) | **GET** /ed-fi/surveyQuestionResponses/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*SurveyQuestionResponsesApi* | [**keyChangesSurveyQuestionResponses**](docs/Api/SurveyQuestionResponsesApi.md#keychangessurveyquestionresponses) | **GET** /ed-fi/surveyQuestionResponses/keyChanges | Retrieves resources key changes based on change version.
*SurveyQuestionResponsesApi* | [**postSurveyQuestionResponse**](docs/Api/SurveyQuestionResponsesApi.md#postsurveyquestionresponse) | **POST** /ed-fi/surveyQuestionResponses | Creates or updates resources based on the natural key values of the supplied resource.
*SurveyQuestionResponsesApi* | [**putSurveyQuestionResponse**](docs/Api/SurveyQuestionResponsesApi.md#putsurveyquestionresponse) | **PUT** /ed-fi/surveyQuestionResponses/{id} | Updates a resource based on the resource identifier.
*SurveyQuestionsApi* | [**deleteSurveyQuestionById**](docs/Api/SurveyQuestionsApi.md#deletesurveyquestionbyid) | **DELETE** /ed-fi/surveyQuestions/{id} | Deletes an existing resource using the resource identifier.
*SurveyQuestionsApi* | [**deletesSurveyQuestions**](docs/Api/SurveyQuestionsApi.md#deletessurveyquestions) | **GET** /ed-fi/surveyQuestions/deletes | Retrieves deleted resources based on change version.
*SurveyQuestionsApi* | [**getSurveyQuestions**](docs/Api/SurveyQuestionsApi.md#getsurveyquestions) | **GET** /ed-fi/surveyQuestions | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*SurveyQuestionsApi* | [**getSurveyQuestionsById**](docs/Api/SurveyQuestionsApi.md#getsurveyquestionsbyid) | **GET** /ed-fi/surveyQuestions/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*SurveyQuestionsApi* | [**keyChangesSurveyQuestions**](docs/Api/SurveyQuestionsApi.md#keychangessurveyquestions) | **GET** /ed-fi/surveyQuestions/keyChanges | Retrieves resources key changes based on change version.
*SurveyQuestionsApi* | [**postSurveyQuestion**](docs/Api/SurveyQuestionsApi.md#postsurveyquestion) | **POST** /ed-fi/surveyQuestions | Creates or updates resources based on the natural key values of the supplied resource.
*SurveyQuestionsApi* | [**putSurveyQuestion**](docs/Api/SurveyQuestionsApi.md#putsurveyquestion) | **PUT** /ed-fi/surveyQuestions/{id} | Updates a resource based on the resource identifier.
*SurveyResponseEducationOrganizationTargetAssociationsApi* | [**deleteSurveyResponseEducationOrganizationTargetAssociationById**](docs/Api/SurveyResponseEducationOrganizationTargetAssociationsApi.md#deletesurveyresponseeducationorganizationtargetassociationbyid) | **DELETE** /ed-fi/surveyResponseEducationOrganizationTargetAssociations/{id} | Deletes an existing resource using the resource identifier.
*SurveyResponseEducationOrganizationTargetAssociationsApi* | [**deletesSurveyResponseEducationOrganizationTargetAssociations**](docs/Api/SurveyResponseEducationOrganizationTargetAssociationsApi.md#deletessurveyresponseeducationorganizationtargetassociations) | **GET** /ed-fi/surveyResponseEducationOrganizationTargetAssociations/deletes | Retrieves deleted resources based on change version.
*SurveyResponseEducationOrganizationTargetAssociationsApi* | [**getSurveyResponseEducationOrganizationTargetAssociations**](docs/Api/SurveyResponseEducationOrganizationTargetAssociationsApi.md#getsurveyresponseeducationorganizationtargetassociations) | **GET** /ed-fi/surveyResponseEducationOrganizationTargetAssociations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*SurveyResponseEducationOrganizationTargetAssociationsApi* | [**getSurveyResponseEducationOrganizationTargetAssociationsById**](docs/Api/SurveyResponseEducationOrganizationTargetAssociationsApi.md#getsurveyresponseeducationorganizationtargetassociationsbyid) | **GET** /ed-fi/surveyResponseEducationOrganizationTargetAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*SurveyResponseEducationOrganizationTargetAssociationsApi* | [**keyChangesSurveyResponseEducationOrganizationTargetAssociations**](docs/Api/SurveyResponseEducationOrganizationTargetAssociationsApi.md#keychangessurveyresponseeducationorganizationtargetassociations) | **GET** /ed-fi/surveyResponseEducationOrganizationTargetAssociations/keyChanges | Retrieves resources key changes based on change version.
*SurveyResponseEducationOrganizationTargetAssociationsApi* | [**postSurveyResponseEducationOrganizationTargetAssociation**](docs/Api/SurveyResponseEducationOrganizationTargetAssociationsApi.md#postsurveyresponseeducationorganizationtargetassociation) | **POST** /ed-fi/surveyResponseEducationOrganizationTargetAssociations | Creates or updates resources based on the natural key values of the supplied resource.
*SurveyResponseEducationOrganizationTargetAssociationsApi* | [**putSurveyResponseEducationOrganizationTargetAssociation**](docs/Api/SurveyResponseEducationOrganizationTargetAssociationsApi.md#putsurveyresponseeducationorganizationtargetassociation) | **PUT** /ed-fi/surveyResponseEducationOrganizationTargetAssociations/{id} | Updates a resource based on the resource identifier.
*SurveyResponsePersonTargetAssociationsApi* | [**deleteSurveyResponsePersonTargetAssociationById**](docs/Api/SurveyResponsePersonTargetAssociationsApi.md#deletesurveyresponsepersontargetassociationbyid) | **DELETE** /tpdm/surveyResponsePersonTargetAssociations/{id} | Deletes an existing resource using the resource identifier.
*SurveyResponsePersonTargetAssociationsApi* | [**deletesSurveyResponsePersonTargetAssociations**](docs/Api/SurveyResponsePersonTargetAssociationsApi.md#deletessurveyresponsepersontargetassociations) | **GET** /tpdm/surveyResponsePersonTargetAssociations/deletes | Retrieves deleted resources based on change version.
*SurveyResponsePersonTargetAssociationsApi* | [**getSurveyResponsePersonTargetAssociations**](docs/Api/SurveyResponsePersonTargetAssociationsApi.md#getsurveyresponsepersontargetassociations) | **GET** /tpdm/surveyResponsePersonTargetAssociations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*SurveyResponsePersonTargetAssociationsApi* | [**getSurveyResponsePersonTargetAssociationsById**](docs/Api/SurveyResponsePersonTargetAssociationsApi.md#getsurveyresponsepersontargetassociationsbyid) | **GET** /tpdm/surveyResponsePersonTargetAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*SurveyResponsePersonTargetAssociationsApi* | [**keyChangesSurveyResponsePersonTargetAssociations**](docs/Api/SurveyResponsePersonTargetAssociationsApi.md#keychangessurveyresponsepersontargetassociations) | **GET** /tpdm/surveyResponsePersonTargetAssociations/keyChanges | Retrieves resources key changes based on change version.
*SurveyResponsePersonTargetAssociationsApi* | [**postSurveyResponsePersonTargetAssociation**](docs/Api/SurveyResponsePersonTargetAssociationsApi.md#postsurveyresponsepersontargetassociation) | **POST** /tpdm/surveyResponsePersonTargetAssociations | Creates or updates resources based on the natural key values of the supplied resource.
*SurveyResponsePersonTargetAssociationsApi* | [**putSurveyResponsePersonTargetAssociation**](docs/Api/SurveyResponsePersonTargetAssociationsApi.md#putsurveyresponsepersontargetassociation) | **PUT** /tpdm/surveyResponsePersonTargetAssociations/{id} | Updates a resource based on the resource identifier.
*SurveyResponseStaffTargetAssociationsApi* | [**deleteSurveyResponseStaffTargetAssociationById**](docs/Api/SurveyResponseStaffTargetAssociationsApi.md#deletesurveyresponsestafftargetassociationbyid) | **DELETE** /ed-fi/surveyResponseStaffTargetAssociations/{id} | Deletes an existing resource using the resource identifier.
*SurveyResponseStaffTargetAssociationsApi* | [**deletesSurveyResponseStaffTargetAssociations**](docs/Api/SurveyResponseStaffTargetAssociationsApi.md#deletessurveyresponsestafftargetassociations) | **GET** /ed-fi/surveyResponseStaffTargetAssociations/deletes | Retrieves deleted resources based on change version.
*SurveyResponseStaffTargetAssociationsApi* | [**getSurveyResponseStaffTargetAssociations**](docs/Api/SurveyResponseStaffTargetAssociationsApi.md#getsurveyresponsestafftargetassociations) | **GET** /ed-fi/surveyResponseStaffTargetAssociations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*SurveyResponseStaffTargetAssociationsApi* | [**getSurveyResponseStaffTargetAssociationsById**](docs/Api/SurveyResponseStaffTargetAssociationsApi.md#getsurveyresponsestafftargetassociationsbyid) | **GET** /ed-fi/surveyResponseStaffTargetAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*SurveyResponseStaffTargetAssociationsApi* | [**keyChangesSurveyResponseStaffTargetAssociations**](docs/Api/SurveyResponseStaffTargetAssociationsApi.md#keychangessurveyresponsestafftargetassociations) | **GET** /ed-fi/surveyResponseStaffTargetAssociations/keyChanges | Retrieves resources key changes based on change version.
*SurveyResponseStaffTargetAssociationsApi* | [**postSurveyResponseStaffTargetAssociation**](docs/Api/SurveyResponseStaffTargetAssociationsApi.md#postsurveyresponsestafftargetassociation) | **POST** /ed-fi/surveyResponseStaffTargetAssociations | Creates or updates resources based on the natural key values of the supplied resource.
*SurveyResponseStaffTargetAssociationsApi* | [**putSurveyResponseStaffTargetAssociation**](docs/Api/SurveyResponseStaffTargetAssociationsApi.md#putsurveyresponsestafftargetassociation) | **PUT** /ed-fi/surveyResponseStaffTargetAssociations/{id} | Updates a resource based on the resource identifier.
*SurveyResponsesApi* | [**deleteSurveyResponseById**](docs/Api/SurveyResponsesApi.md#deletesurveyresponsebyid) | **DELETE** /ed-fi/surveyResponses/{id} | Deletes an existing resource using the resource identifier.
*SurveyResponsesApi* | [**deletesSurveyResponses**](docs/Api/SurveyResponsesApi.md#deletessurveyresponses) | **GET** /ed-fi/surveyResponses/deletes | Retrieves deleted resources based on change version.
*SurveyResponsesApi* | [**getSurveyResponses**](docs/Api/SurveyResponsesApi.md#getsurveyresponses) | **GET** /ed-fi/surveyResponses | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*SurveyResponsesApi* | [**getSurveyResponsesById**](docs/Api/SurveyResponsesApi.md#getsurveyresponsesbyid) | **GET** /ed-fi/surveyResponses/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*SurveyResponsesApi* | [**keyChangesSurveyResponses**](docs/Api/SurveyResponsesApi.md#keychangessurveyresponses) | **GET** /ed-fi/surveyResponses/keyChanges | Retrieves resources key changes based on change version.
*SurveyResponsesApi* | [**postSurveyResponse**](docs/Api/SurveyResponsesApi.md#postsurveyresponse) | **POST** /ed-fi/surveyResponses | Creates or updates resources based on the natural key values of the supplied resource.
*SurveyResponsesApi* | [**putSurveyResponse**](docs/Api/SurveyResponsesApi.md#putsurveyresponse) | **PUT** /ed-fi/surveyResponses/{id} | Updates a resource based on the resource identifier.
*SurveySectionAssociationsApi* | [**deleteSurveySectionAssociationById**](docs/Api/SurveySectionAssociationsApi.md#deletesurveysectionassociationbyid) | **DELETE** /ed-fi/surveySectionAssociations/{id} | Deletes an existing resource using the resource identifier.
*SurveySectionAssociationsApi* | [**deletesSurveySectionAssociations**](docs/Api/SurveySectionAssociationsApi.md#deletessurveysectionassociations) | **GET** /ed-fi/surveySectionAssociations/deletes | Retrieves deleted resources based on change version.
*SurveySectionAssociationsApi* | [**getSurveySectionAssociations**](docs/Api/SurveySectionAssociationsApi.md#getsurveysectionassociations) | **GET** /ed-fi/surveySectionAssociations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*SurveySectionAssociationsApi* | [**getSurveySectionAssociationsById**](docs/Api/SurveySectionAssociationsApi.md#getsurveysectionassociationsbyid) | **GET** /ed-fi/surveySectionAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*SurveySectionAssociationsApi* | [**keyChangesSurveySectionAssociations**](docs/Api/SurveySectionAssociationsApi.md#keychangessurveysectionassociations) | **GET** /ed-fi/surveySectionAssociations/keyChanges | Retrieves resources key changes based on change version.
*SurveySectionAssociationsApi* | [**postSurveySectionAssociation**](docs/Api/SurveySectionAssociationsApi.md#postsurveysectionassociation) | **POST** /ed-fi/surveySectionAssociations | Creates or updates resources based on the natural key values of the supplied resource.
*SurveySectionAssociationsApi* | [**putSurveySectionAssociation**](docs/Api/SurveySectionAssociationsApi.md#putsurveysectionassociation) | **PUT** /ed-fi/surveySectionAssociations/{id} | Updates a resource based on the resource identifier.
*SurveySectionResponseEducationOrganizationTargetAssociationsApi* | [**deleteSurveySectionResponseEducationOrganizationTargetAssociationById**](docs/Api/SurveySectionResponseEducationOrganizationTargetAssociationsApi.md#deletesurveysectionresponseeducationorganizationtargetassociationbyid) | **DELETE** /ed-fi/surveySectionResponseEducationOrganizationTargetAssociations/{id} | Deletes an existing resource using the resource identifier.
*SurveySectionResponseEducationOrganizationTargetAssociationsApi* | [**deletesSurveySectionResponseEducationOrganizationTargetAssociations**](docs/Api/SurveySectionResponseEducationOrganizationTargetAssociationsApi.md#deletessurveysectionresponseeducationorganizationtargetassociations) | **GET** /ed-fi/surveySectionResponseEducationOrganizationTargetAssociations/deletes | Retrieves deleted resources based on change version.
*SurveySectionResponseEducationOrganizationTargetAssociationsApi* | [**getSurveySectionResponseEducationOrganizationTargetAssociations**](docs/Api/SurveySectionResponseEducationOrganizationTargetAssociationsApi.md#getsurveysectionresponseeducationorganizationtargetassociations) | **GET** /ed-fi/surveySectionResponseEducationOrganizationTargetAssociations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*SurveySectionResponseEducationOrganizationTargetAssociationsApi* | [**getSurveySectionResponseEducationOrganizationTargetAssociationsById**](docs/Api/SurveySectionResponseEducationOrganizationTargetAssociationsApi.md#getsurveysectionresponseeducationorganizationtargetassociationsbyid) | **GET** /ed-fi/surveySectionResponseEducationOrganizationTargetAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*SurveySectionResponseEducationOrganizationTargetAssociationsApi* | [**keyChangesSurveySectionResponseEducationOrganizationTargetAssociations**](docs/Api/SurveySectionResponseEducationOrganizationTargetAssociationsApi.md#keychangessurveysectionresponseeducationorganizationtargetassociations) | **GET** /ed-fi/surveySectionResponseEducationOrganizationTargetAssociations/keyChanges | Retrieves resources key changes based on change version.
*SurveySectionResponseEducationOrganizationTargetAssociationsApi* | [**postSurveySectionResponseEducationOrganizationTargetAssociation**](docs/Api/SurveySectionResponseEducationOrganizationTargetAssociationsApi.md#postsurveysectionresponseeducationorganizationtargetassociation) | **POST** /ed-fi/surveySectionResponseEducationOrganizationTargetAssociations | Creates or updates resources based on the natural key values of the supplied resource.
*SurveySectionResponseEducationOrganizationTargetAssociationsApi* | [**putSurveySectionResponseEducationOrganizationTargetAssociation**](docs/Api/SurveySectionResponseEducationOrganizationTargetAssociationsApi.md#putsurveysectionresponseeducationorganizationtargetassociation) | **PUT** /ed-fi/surveySectionResponseEducationOrganizationTargetAssociations/{id} | Updates a resource based on the resource identifier.
*SurveySectionResponsePersonTargetAssociationsApi* | [**deleteSurveySectionResponsePersonTargetAssociationById**](docs/Api/SurveySectionResponsePersonTargetAssociationsApi.md#deletesurveysectionresponsepersontargetassociationbyid) | **DELETE** /tpdm/surveySectionResponsePersonTargetAssociations/{id} | Deletes an existing resource using the resource identifier.
*SurveySectionResponsePersonTargetAssociationsApi* | [**deletesSurveySectionResponsePersonTargetAssociations**](docs/Api/SurveySectionResponsePersonTargetAssociationsApi.md#deletessurveysectionresponsepersontargetassociations) | **GET** /tpdm/surveySectionResponsePersonTargetAssociations/deletes | Retrieves deleted resources based on change version.
*SurveySectionResponsePersonTargetAssociationsApi* | [**getSurveySectionResponsePersonTargetAssociations**](docs/Api/SurveySectionResponsePersonTargetAssociationsApi.md#getsurveysectionresponsepersontargetassociations) | **GET** /tpdm/surveySectionResponsePersonTargetAssociations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*SurveySectionResponsePersonTargetAssociationsApi* | [**getSurveySectionResponsePersonTargetAssociationsById**](docs/Api/SurveySectionResponsePersonTargetAssociationsApi.md#getsurveysectionresponsepersontargetassociationsbyid) | **GET** /tpdm/surveySectionResponsePersonTargetAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*SurveySectionResponsePersonTargetAssociationsApi* | [**keyChangesSurveySectionResponsePersonTargetAssociations**](docs/Api/SurveySectionResponsePersonTargetAssociationsApi.md#keychangessurveysectionresponsepersontargetassociations) | **GET** /tpdm/surveySectionResponsePersonTargetAssociations/keyChanges | Retrieves resources key changes based on change version.
*SurveySectionResponsePersonTargetAssociationsApi* | [**postSurveySectionResponsePersonTargetAssociation**](docs/Api/SurveySectionResponsePersonTargetAssociationsApi.md#postsurveysectionresponsepersontargetassociation) | **POST** /tpdm/surveySectionResponsePersonTargetAssociations | Creates or updates resources based on the natural key values of the supplied resource.
*SurveySectionResponsePersonTargetAssociationsApi* | [**putSurveySectionResponsePersonTargetAssociation**](docs/Api/SurveySectionResponsePersonTargetAssociationsApi.md#putsurveysectionresponsepersontargetassociation) | **PUT** /tpdm/surveySectionResponsePersonTargetAssociations/{id} | Updates a resource based on the resource identifier.
*SurveySectionResponseStaffTargetAssociationsApi* | [**deleteSurveySectionResponseStaffTargetAssociationById**](docs/Api/SurveySectionResponseStaffTargetAssociationsApi.md#deletesurveysectionresponsestafftargetassociationbyid) | **DELETE** /ed-fi/surveySectionResponseStaffTargetAssociations/{id} | Deletes an existing resource using the resource identifier.
*SurveySectionResponseStaffTargetAssociationsApi* | [**deletesSurveySectionResponseStaffTargetAssociations**](docs/Api/SurveySectionResponseStaffTargetAssociationsApi.md#deletessurveysectionresponsestafftargetassociations) | **GET** /ed-fi/surveySectionResponseStaffTargetAssociations/deletes | Retrieves deleted resources based on change version.
*SurveySectionResponseStaffTargetAssociationsApi* | [**getSurveySectionResponseStaffTargetAssociations**](docs/Api/SurveySectionResponseStaffTargetAssociationsApi.md#getsurveysectionresponsestafftargetassociations) | **GET** /ed-fi/surveySectionResponseStaffTargetAssociations | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*SurveySectionResponseStaffTargetAssociationsApi* | [**getSurveySectionResponseStaffTargetAssociationsById**](docs/Api/SurveySectionResponseStaffTargetAssociationsApi.md#getsurveysectionresponsestafftargetassociationsbyid) | **GET** /ed-fi/surveySectionResponseStaffTargetAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*SurveySectionResponseStaffTargetAssociationsApi* | [**keyChangesSurveySectionResponseStaffTargetAssociations**](docs/Api/SurveySectionResponseStaffTargetAssociationsApi.md#keychangessurveysectionresponsestafftargetassociations) | **GET** /ed-fi/surveySectionResponseStaffTargetAssociations/keyChanges | Retrieves resources key changes based on change version.
*SurveySectionResponseStaffTargetAssociationsApi* | [**postSurveySectionResponseStaffTargetAssociation**](docs/Api/SurveySectionResponseStaffTargetAssociationsApi.md#postsurveysectionresponsestafftargetassociation) | **POST** /ed-fi/surveySectionResponseStaffTargetAssociations | Creates or updates resources based on the natural key values of the supplied resource.
*SurveySectionResponseStaffTargetAssociationsApi* | [**putSurveySectionResponseStaffTargetAssociation**](docs/Api/SurveySectionResponseStaffTargetAssociationsApi.md#putsurveysectionresponsestafftargetassociation) | **PUT** /ed-fi/surveySectionResponseStaffTargetAssociations/{id} | Updates a resource based on the resource identifier.
*SurveySectionResponsesApi* | [**deleteSurveySectionResponseById**](docs/Api/SurveySectionResponsesApi.md#deletesurveysectionresponsebyid) | **DELETE** /ed-fi/surveySectionResponses/{id} | Deletes an existing resource using the resource identifier.
*SurveySectionResponsesApi* | [**deletesSurveySectionResponses**](docs/Api/SurveySectionResponsesApi.md#deletessurveysectionresponses) | **GET** /ed-fi/surveySectionResponses/deletes | Retrieves deleted resources based on change version.
*SurveySectionResponsesApi* | [**getSurveySectionResponses**](docs/Api/SurveySectionResponsesApi.md#getsurveysectionresponses) | **GET** /ed-fi/surveySectionResponses | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*SurveySectionResponsesApi* | [**getSurveySectionResponsesById**](docs/Api/SurveySectionResponsesApi.md#getsurveysectionresponsesbyid) | **GET** /ed-fi/surveySectionResponses/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*SurveySectionResponsesApi* | [**keyChangesSurveySectionResponses**](docs/Api/SurveySectionResponsesApi.md#keychangessurveysectionresponses) | **GET** /ed-fi/surveySectionResponses/keyChanges | Retrieves resources key changes based on change version.
*SurveySectionResponsesApi* | [**postSurveySectionResponse**](docs/Api/SurveySectionResponsesApi.md#postsurveysectionresponse) | **POST** /ed-fi/surveySectionResponses | Creates or updates resources based on the natural key values of the supplied resource.
*SurveySectionResponsesApi* | [**putSurveySectionResponse**](docs/Api/SurveySectionResponsesApi.md#putsurveysectionresponse) | **PUT** /ed-fi/surveySectionResponses/{id} | Updates a resource based on the resource identifier.
*SurveySectionsApi* | [**deleteSurveySectionById**](docs/Api/SurveySectionsApi.md#deletesurveysectionbyid) | **DELETE** /ed-fi/surveySections/{id} | Deletes an existing resource using the resource identifier.
*SurveySectionsApi* | [**deletesSurveySections**](docs/Api/SurveySectionsApi.md#deletessurveysections) | **GET** /ed-fi/surveySections/deletes | Retrieves deleted resources based on change version.
*SurveySectionsApi* | [**getSurveySections**](docs/Api/SurveySectionsApi.md#getsurveysections) | **GET** /ed-fi/surveySections | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*SurveySectionsApi* | [**getSurveySectionsById**](docs/Api/SurveySectionsApi.md#getsurveysectionsbyid) | **GET** /ed-fi/surveySections/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*SurveySectionsApi* | [**keyChangesSurveySections**](docs/Api/SurveySectionsApi.md#keychangessurveysections) | **GET** /ed-fi/surveySections/keyChanges | Retrieves resources key changes based on change version.
*SurveySectionsApi* | [**postSurveySection**](docs/Api/SurveySectionsApi.md#postsurveysection) | **POST** /ed-fi/surveySections | Creates or updates resources based on the natural key values of the supplied resource.
*SurveySectionsApi* | [**putSurveySection**](docs/Api/SurveySectionsApi.md#putsurveysection) | **PUT** /ed-fi/surveySections/{id} | Updates a resource based on the resource identifier.
*SurveysApi* | [**deleteSurveyById**](docs/Api/SurveysApi.md#deletesurveybyid) | **DELETE** /ed-fi/surveys/{id} | Deletes an existing resource using the resource identifier.
*SurveysApi* | [**deletesSurveys**](docs/Api/SurveysApi.md#deletessurveys) | **GET** /ed-fi/surveys/deletes | Retrieves deleted resources based on change version.
*SurveysApi* | [**getSurveys**](docs/Api/SurveysApi.md#getsurveys) | **GET** /ed-fi/surveys | Retrieves specific resources using the resource&#39;s property values (using the \&quot;Get\&quot; pattern).
*SurveysApi* | [**getSurveysById**](docs/Api/SurveysApi.md#getsurveysbyid) | **GET** /ed-fi/surveys/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
*SurveysApi* | [**keyChangesSurveys**](docs/Api/SurveysApi.md#keychangessurveys) | **GET** /ed-fi/surveys/keyChanges | Retrieves resources key changes based on change version.
*SurveysApi* | [**postSurvey**](docs/Api/SurveysApi.md#postsurvey) | **POST** /ed-fi/surveys | Creates or updates resources based on the natural key values of the supplied resource.
*SurveysApi* | [**putSurvey**](docs/Api/SurveysApi.md#putsurvey) | **PUT** /ed-fi/surveys/{id} | Updates a resource based on the resource identifier.

## Models

- [CredentialExtensions](docs/Model/CredentialExtensions.md)
- [EdFiAcademicWeek](docs/Model/EdFiAcademicWeek.md)
- [EdFiAcademicWeekReference](docs/Model/EdFiAcademicWeekReference.md)
- [EdFiAccountabilityRating](docs/Model/EdFiAccountabilityRating.md)
- [EdFiAssessment](docs/Model/EdFiAssessment.md)
- [EdFiAssessmentAcademicSubject](docs/Model/EdFiAssessmentAcademicSubject.md)
- [EdFiAssessmentAssessedGradeLevel](docs/Model/EdFiAssessmentAssessedGradeLevel.md)
- [EdFiAssessmentContentStandard](docs/Model/EdFiAssessmentContentStandard.md)
- [EdFiAssessmentContentStandardAuthor](docs/Model/EdFiAssessmentContentStandardAuthor.md)
- [EdFiAssessmentIdentificationCode](docs/Model/EdFiAssessmentIdentificationCode.md)
- [EdFiAssessmentItem](docs/Model/EdFiAssessmentItem.md)
- [EdFiAssessmentItemLearningStandard](docs/Model/EdFiAssessmentItemLearningStandard.md)
- [EdFiAssessmentItemPossibleResponse](docs/Model/EdFiAssessmentItemPossibleResponse.md)
- [EdFiAssessmentItemReference](docs/Model/EdFiAssessmentItemReference.md)
- [EdFiAssessmentLanguage](docs/Model/EdFiAssessmentLanguage.md)
- [EdFiAssessmentPerformanceLevel](docs/Model/EdFiAssessmentPerformanceLevel.md)
- [EdFiAssessmentPeriod](docs/Model/EdFiAssessmentPeriod.md)
- [EdFiAssessmentPlatformType](docs/Model/EdFiAssessmentPlatformType.md)
- [EdFiAssessmentProgram](docs/Model/EdFiAssessmentProgram.md)
- [EdFiAssessmentReference](docs/Model/EdFiAssessmentReference.md)
- [EdFiAssessmentScore](docs/Model/EdFiAssessmentScore.md)
- [EdFiAssessmentScoreRangeLearningStandard](docs/Model/EdFiAssessmentScoreRangeLearningStandard.md)
- [EdFiAssessmentScoreRangeLearningStandardLearningStandard](docs/Model/EdFiAssessmentScoreRangeLearningStandardLearningStandard.md)
- [EdFiAssessmentSection](docs/Model/EdFiAssessmentSection.md)
- [EdFiBalanceSheetDimension](docs/Model/EdFiBalanceSheetDimension.md)
- [EdFiBalanceSheetDimensionReference](docs/Model/EdFiBalanceSheetDimensionReference.md)
- [EdFiBalanceSheetDimensionReportingTag](docs/Model/EdFiBalanceSheetDimensionReportingTag.md)
- [EdFiBellSchedule](docs/Model/EdFiBellSchedule.md)
- [EdFiBellScheduleClassPeriod](docs/Model/EdFiBellScheduleClassPeriod.md)
- [EdFiBellScheduleDate](docs/Model/EdFiBellScheduleDate.md)
- [EdFiBellScheduleGradeLevel](docs/Model/EdFiBellScheduleGradeLevel.md)
- [EdFiCalendar](docs/Model/EdFiCalendar.md)
- [EdFiCalendarDate](docs/Model/EdFiCalendarDate.md)
- [EdFiCalendarDateCalendarEvent](docs/Model/EdFiCalendarDateCalendarEvent.md)
- [EdFiCalendarDateReference](docs/Model/EdFiCalendarDateReference.md)
- [EdFiCalendarGradeLevel](docs/Model/EdFiCalendarGradeLevel.md)
- [EdFiCalendarReference](docs/Model/EdFiCalendarReference.md)
- [EdFiChartOfAccount](docs/Model/EdFiChartOfAccount.md)
- [EdFiChartOfAccountReference](docs/Model/EdFiChartOfAccountReference.md)
- [EdFiChartOfAccountReportingTag](docs/Model/EdFiChartOfAccountReportingTag.md)
- [EdFiClassPeriod](docs/Model/EdFiClassPeriod.md)
- [EdFiClassPeriodMeetingTime](docs/Model/EdFiClassPeriodMeetingTime.md)
- [EdFiClassPeriodReference](docs/Model/EdFiClassPeriodReference.md)
- [EdFiCohort](docs/Model/EdFiCohort.md)
- [EdFiCohortProgram](docs/Model/EdFiCohortProgram.md)
- [EdFiCohortReference](docs/Model/EdFiCohortReference.md)
- [EdFiCommunityOrganization](docs/Model/EdFiCommunityOrganization.md)
- [EdFiCommunityOrganizationReference](docs/Model/EdFiCommunityOrganizationReference.md)
- [EdFiCommunityProvider](docs/Model/EdFiCommunityProvider.md)
- [EdFiCommunityProviderLicense](docs/Model/EdFiCommunityProviderLicense.md)
- [EdFiCommunityProviderReference](docs/Model/EdFiCommunityProviderReference.md)
- [EdFiCompetencyObjective](docs/Model/EdFiCompetencyObjective.md)
- [EdFiCompetencyObjectiveReference](docs/Model/EdFiCompetencyObjectiveReference.md)
- [EdFiContact](docs/Model/EdFiContact.md)
- [EdFiContactAddress](docs/Model/EdFiContactAddress.md)
- [EdFiContactAddressPeriod](docs/Model/EdFiContactAddressPeriod.md)
- [EdFiContactElectronicMail](docs/Model/EdFiContactElectronicMail.md)
- [EdFiContactInternationalAddress](docs/Model/EdFiContactInternationalAddress.md)
- [EdFiContactLanguage](docs/Model/EdFiContactLanguage.md)
- [EdFiContactLanguageUse](docs/Model/EdFiContactLanguageUse.md)
- [EdFiContactOtherName](docs/Model/EdFiContactOtherName.md)
- [EdFiContactPersonalIdentificationDocument](docs/Model/EdFiContactPersonalIdentificationDocument.md)
- [EdFiContactReference](docs/Model/EdFiContactReference.md)
- [EdFiContactTelephone](docs/Model/EdFiContactTelephone.md)
- [EdFiCourse](docs/Model/EdFiCourse.md)
- [EdFiCourseAcademicSubject](docs/Model/EdFiCourseAcademicSubject.md)
- [EdFiCourseCompetencyLevel](docs/Model/EdFiCourseCompetencyLevel.md)
- [EdFiCourseIdentificationCode](docs/Model/EdFiCourseIdentificationCode.md)
- [EdFiCourseLearningStandard](docs/Model/EdFiCourseLearningStandard.md)
- [EdFiCourseLevelCharacteristic](docs/Model/EdFiCourseLevelCharacteristic.md)
- [EdFiCourseOfferedGradeLevel](docs/Model/EdFiCourseOfferedGradeLevel.md)
- [EdFiCourseOffering](docs/Model/EdFiCourseOffering.md)
- [EdFiCourseOfferingCourseLevelCharacteristic](docs/Model/EdFiCourseOfferingCourseLevelCharacteristic.md)
- [EdFiCourseOfferingCurriculumUsed](docs/Model/EdFiCourseOfferingCurriculumUsed.md)
- [EdFiCourseOfferingOfferedGradeLevel](docs/Model/EdFiCourseOfferingOfferedGradeLevel.md)
- [EdFiCourseOfferingReference](docs/Model/EdFiCourseOfferingReference.md)
- [EdFiCourseReference](docs/Model/EdFiCourseReference.md)
- [EdFiCourseTranscript](docs/Model/EdFiCourseTranscript.md)
- [EdFiCourseTranscriptAcademicSubject](docs/Model/EdFiCourseTranscriptAcademicSubject.md)
- [EdFiCourseTranscriptAlternativeCourseIdentificationCode](docs/Model/EdFiCourseTranscriptAlternativeCourseIdentificationCode.md)
- [EdFiCourseTranscriptCourseProgram](docs/Model/EdFiCourseTranscriptCourseProgram.md)
- [EdFiCourseTranscriptCreditCategory](docs/Model/EdFiCourseTranscriptCreditCategory.md)
- [EdFiCourseTranscriptEarnedAdditionalCredits](docs/Model/EdFiCourseTranscriptEarnedAdditionalCredits.md)
- [EdFiCourseTranscriptPartialCourseTranscriptAwards](docs/Model/EdFiCourseTranscriptPartialCourseTranscriptAwards.md)
- [EdFiCourseTranscriptSection](docs/Model/EdFiCourseTranscriptSection.md)
- [EdFiCredential](docs/Model/EdFiCredential.md)
- [EdFiCredentialAcademicSubject](docs/Model/EdFiCredentialAcademicSubject.md)
- [EdFiCredentialEndorsement](docs/Model/EdFiCredentialEndorsement.md)
- [EdFiCredentialGradeLevel](docs/Model/EdFiCredentialGradeLevel.md)
- [EdFiCredentialReference](docs/Model/EdFiCredentialReference.md)
- [EdFiDescriptorMapping](docs/Model/EdFiDescriptorMapping.md)
- [EdFiDescriptorMappingModelEntity](docs/Model/EdFiDescriptorMappingModelEntity.md)
- [EdFiDisciplineAction](docs/Model/EdFiDisciplineAction.md)
- [EdFiDisciplineActionDiscipline](docs/Model/EdFiDisciplineActionDiscipline.md)
- [EdFiDisciplineActionStaff](docs/Model/EdFiDisciplineActionStaff.md)
- [EdFiDisciplineActionStudentDisciplineIncidentBehaviorAssociation](docs/Model/EdFiDisciplineActionStudentDisciplineIncidentBehaviorAssociation.md)
- [EdFiDisciplineIncident](docs/Model/EdFiDisciplineIncident.md)
- [EdFiDisciplineIncidentBehavior](docs/Model/EdFiDisciplineIncidentBehavior.md)
- [EdFiDisciplineIncidentExternalParticipant](docs/Model/EdFiDisciplineIncidentExternalParticipant.md)
- [EdFiDisciplineIncidentReference](docs/Model/EdFiDisciplineIncidentReference.md)
- [EdFiDisciplineIncidentWeapon](docs/Model/EdFiDisciplineIncidentWeapon.md)
- [EdFiEducationContent](docs/Model/EdFiEducationContent.md)
- [EdFiEducationContentAppropriateGradeLevel](docs/Model/EdFiEducationContentAppropriateGradeLevel.md)
- [EdFiEducationContentAppropriateSex](docs/Model/EdFiEducationContentAppropriateSex.md)
- [EdFiEducationContentAuthor](docs/Model/EdFiEducationContentAuthor.md)
- [EdFiEducationContentDerivativeSourceEducationContent](docs/Model/EdFiEducationContentDerivativeSourceEducationContent.md)
- [EdFiEducationContentDerivativeSourceLearningResourceMetadataURI](docs/Model/EdFiEducationContentDerivativeSourceLearningResourceMetadataURI.md)
- [EdFiEducationContentDerivativeSourceURI](docs/Model/EdFiEducationContentDerivativeSourceURI.md)
- [EdFiEducationContentLanguage](docs/Model/EdFiEducationContentLanguage.md)
- [EdFiEducationContentReference](docs/Model/EdFiEducationContentReference.md)
- [EdFiEducationOrganizationAddress](docs/Model/EdFiEducationOrganizationAddress.md)
- [EdFiEducationOrganizationAddressPeriod](docs/Model/EdFiEducationOrganizationAddressPeriod.md)
- [EdFiEducationOrganizationCategory](docs/Model/EdFiEducationOrganizationCategory.md)
- [EdFiEducationOrganizationIdentificationCode](docs/Model/EdFiEducationOrganizationIdentificationCode.md)
- [EdFiEducationOrganizationIndicator](docs/Model/EdFiEducationOrganizationIndicator.md)
- [EdFiEducationOrganizationIndicatorPeriod](docs/Model/EdFiEducationOrganizationIndicatorPeriod.md)
- [EdFiEducationOrganizationInstitutionTelephone](docs/Model/EdFiEducationOrganizationInstitutionTelephone.md)
- [EdFiEducationOrganizationInternationalAddress](docs/Model/EdFiEducationOrganizationInternationalAddress.md)
- [EdFiEducationOrganizationInterventionPrescriptionAssociation](docs/Model/EdFiEducationOrganizationInterventionPrescriptionAssociation.md)
- [EdFiEducationOrganizationNetwork](docs/Model/EdFiEducationOrganizationNetwork.md)
- [EdFiEducationOrganizationNetworkAssociation](docs/Model/EdFiEducationOrganizationNetworkAssociation.md)
- [EdFiEducationOrganizationNetworkReference](docs/Model/EdFiEducationOrganizationNetworkReference.md)
- [EdFiEducationOrganizationPeerAssociation](docs/Model/EdFiEducationOrganizationPeerAssociation.md)
- [EdFiEducationOrganizationReference](docs/Model/EdFiEducationOrganizationReference.md)
- [EdFiEducationServiceCenter](docs/Model/EdFiEducationServiceCenter.md)
- [EdFiEducationServiceCenterReference](docs/Model/EdFiEducationServiceCenterReference.md)
- [EdFiEvaluationRubricDimension](docs/Model/EdFiEvaluationRubricDimension.md)
- [EdFiFeederSchoolAssociation](docs/Model/EdFiFeederSchoolAssociation.md)
- [EdFiFunctionDimension](docs/Model/EdFiFunctionDimension.md)
- [EdFiFunctionDimensionReference](docs/Model/EdFiFunctionDimensionReference.md)
- [EdFiFunctionDimensionReportingTag](docs/Model/EdFiFunctionDimensionReportingTag.md)
- [EdFiFundDimension](docs/Model/EdFiFundDimension.md)
- [EdFiFundDimensionReference](docs/Model/EdFiFundDimensionReference.md)
- [EdFiFundDimensionReportingTag](docs/Model/EdFiFundDimensionReportingTag.md)
- [EdFiGeneralStudentProgramAssociationProgramParticipationStatus](docs/Model/EdFiGeneralStudentProgramAssociationProgramParticipationStatus.md)
- [EdFiGeneralStudentProgramAssociationReference](docs/Model/EdFiGeneralStudentProgramAssociationReference.md)
- [EdFiGrade](docs/Model/EdFiGrade.md)
- [EdFiGradeLearningStandardGrade](docs/Model/EdFiGradeLearningStandardGrade.md)
- [EdFiGradeReference](docs/Model/EdFiGradeReference.md)
- [EdFiGradebookEntry](docs/Model/EdFiGradebookEntry.md)
- [EdFiGradebookEntryLearningStandard](docs/Model/EdFiGradebookEntryLearningStandard.md)
- [EdFiGradebookEntryReference](docs/Model/EdFiGradebookEntryReference.md)
- [EdFiGradingPeriod](docs/Model/EdFiGradingPeriod.md)
- [EdFiGradingPeriodReference](docs/Model/EdFiGradingPeriodReference.md)
- [EdFiGraduationPlan](docs/Model/EdFiGraduationPlan.md)
- [EdFiGraduationPlanCreditsByCourse](docs/Model/EdFiGraduationPlanCreditsByCourse.md)
- [EdFiGraduationPlanCreditsByCourseCourse](docs/Model/EdFiGraduationPlanCreditsByCourseCourse.md)
- [EdFiGraduationPlanCreditsByCreditCategory](docs/Model/EdFiGraduationPlanCreditsByCreditCategory.md)
- [EdFiGraduationPlanCreditsBySubject](docs/Model/EdFiGraduationPlanCreditsBySubject.md)
- [EdFiGraduationPlanReference](docs/Model/EdFiGraduationPlanReference.md)
- [EdFiGraduationPlanRequiredAssessment](docs/Model/EdFiGraduationPlanRequiredAssessment.md)
- [EdFiGraduationPlanRequiredAssessmentPerformanceLevel](docs/Model/EdFiGraduationPlanRequiredAssessmentPerformanceLevel.md)
- [EdFiGraduationPlanRequiredAssessmentScore](docs/Model/EdFiGraduationPlanRequiredAssessmentScore.md)
- [EdFiIntervention](docs/Model/EdFiIntervention.md)
- [EdFiInterventionAppropriateGradeLevel](docs/Model/EdFiInterventionAppropriateGradeLevel.md)
- [EdFiInterventionAppropriateSex](docs/Model/EdFiInterventionAppropriateSex.md)
- [EdFiInterventionDiagnosis](docs/Model/EdFiInterventionDiagnosis.md)
- [EdFiInterventionEducationContent](docs/Model/EdFiInterventionEducationContent.md)
- [EdFiInterventionInterventionPrescription](docs/Model/EdFiInterventionInterventionPrescription.md)
- [EdFiInterventionLearningResourceMetadataURI](docs/Model/EdFiInterventionLearningResourceMetadataURI.md)
- [EdFiInterventionMeetingTime](docs/Model/EdFiInterventionMeetingTime.md)
- [EdFiInterventionPopulationServed](docs/Model/EdFiInterventionPopulationServed.md)
- [EdFiInterventionPrescription](docs/Model/EdFiInterventionPrescription.md)
- [EdFiInterventionPrescriptionAppropriateGradeLevel](docs/Model/EdFiInterventionPrescriptionAppropriateGradeLevel.md)
- [EdFiInterventionPrescriptionAppropriateSex](docs/Model/EdFiInterventionPrescriptionAppropriateSex.md)
- [EdFiInterventionPrescriptionDiagnosis](docs/Model/EdFiInterventionPrescriptionDiagnosis.md)
- [EdFiInterventionPrescriptionEducationContent](docs/Model/EdFiInterventionPrescriptionEducationContent.md)
- [EdFiInterventionPrescriptionLearningResourceMetadataURI](docs/Model/EdFiInterventionPrescriptionLearningResourceMetadataURI.md)
- [EdFiInterventionPrescriptionPopulationServed](docs/Model/EdFiInterventionPrescriptionPopulationServed.md)
- [EdFiInterventionPrescriptionReference](docs/Model/EdFiInterventionPrescriptionReference.md)
- [EdFiInterventionPrescriptionURI](docs/Model/EdFiInterventionPrescriptionURI.md)
- [EdFiInterventionReference](docs/Model/EdFiInterventionReference.md)
- [EdFiInterventionStaff](docs/Model/EdFiInterventionStaff.md)
- [EdFiInterventionStudy](docs/Model/EdFiInterventionStudy.md)
- [EdFiInterventionStudyAppropriateGradeLevel](docs/Model/EdFiInterventionStudyAppropriateGradeLevel.md)
- [EdFiInterventionStudyAppropriateSex](docs/Model/EdFiInterventionStudyAppropriateSex.md)
- [EdFiInterventionStudyEducationContent](docs/Model/EdFiInterventionStudyEducationContent.md)
- [EdFiInterventionStudyInterventionEffectiveness](docs/Model/EdFiInterventionStudyInterventionEffectiveness.md)
- [EdFiInterventionStudyLearningResourceMetadataURI](docs/Model/EdFiInterventionStudyLearningResourceMetadataURI.md)
- [EdFiInterventionStudyPopulationServed](docs/Model/EdFiInterventionStudyPopulationServed.md)
- [EdFiInterventionStudyStateAbbreviation](docs/Model/EdFiInterventionStudyStateAbbreviation.md)
- [EdFiInterventionStudyURI](docs/Model/EdFiInterventionStudyURI.md)
- [EdFiInterventionURI](docs/Model/EdFiInterventionURI.md)
- [EdFiLearningStandard](docs/Model/EdFiLearningStandard.md)
- [EdFiLearningStandardAcademicSubject](docs/Model/EdFiLearningStandardAcademicSubject.md)
- [EdFiLearningStandardContentStandard](docs/Model/EdFiLearningStandardContentStandard.md)
- [EdFiLearningStandardContentStandardAuthor](docs/Model/EdFiLearningStandardContentStandardAuthor.md)
- [EdFiLearningStandardEquivalenceAssociation](docs/Model/EdFiLearningStandardEquivalenceAssociation.md)
- [EdFiLearningStandardGradeLevel](docs/Model/EdFiLearningStandardGradeLevel.md)
- [EdFiLearningStandardIdentificationCode](docs/Model/EdFiLearningStandardIdentificationCode.md)
- [EdFiLearningStandardReference](docs/Model/EdFiLearningStandardReference.md)
- [EdFiLocalAccount](docs/Model/EdFiLocalAccount.md)
- [EdFiLocalAccountReference](docs/Model/EdFiLocalAccountReference.md)
- [EdFiLocalAccountReportingTag](docs/Model/EdFiLocalAccountReportingTag.md)
- [EdFiLocalActual](docs/Model/EdFiLocalActual.md)
- [EdFiLocalBudget](docs/Model/EdFiLocalBudget.md)
- [EdFiLocalContractedStaff](docs/Model/EdFiLocalContractedStaff.md)
- [EdFiLocalEducationAgency](docs/Model/EdFiLocalEducationAgency.md)
- [EdFiLocalEducationAgencyAccountability](docs/Model/EdFiLocalEducationAgencyAccountability.md)
- [EdFiLocalEducationAgencyFederalFunds](docs/Model/EdFiLocalEducationAgencyFederalFunds.md)
- [EdFiLocalEducationAgencyReference](docs/Model/EdFiLocalEducationAgencyReference.md)
- [EdFiLocalEncumbrance](docs/Model/EdFiLocalEncumbrance.md)
- [EdFiLocalPayroll](docs/Model/EdFiLocalPayroll.md)
- [EdFiLocation](docs/Model/EdFiLocation.md)
- [EdFiLocationReference](docs/Model/EdFiLocationReference.md)
- [EdFiObjectDimension](docs/Model/EdFiObjectDimension.md)
- [EdFiObjectDimensionReference](docs/Model/EdFiObjectDimensionReference.md)
- [EdFiObjectDimensionReportingTag](docs/Model/EdFiObjectDimensionReportingTag.md)
- [EdFiObjectiveAssessment](docs/Model/EdFiObjectiveAssessment.md)
- [EdFiObjectiveAssessmentAssessmentItem](docs/Model/EdFiObjectiveAssessmentAssessmentItem.md)
- [EdFiObjectiveAssessmentLearningStandard](docs/Model/EdFiObjectiveAssessmentLearningStandard.md)
- [EdFiObjectiveAssessmentPerformanceLevel](docs/Model/EdFiObjectiveAssessmentPerformanceLevel.md)
- [EdFiObjectiveAssessmentReference](docs/Model/EdFiObjectiveAssessmentReference.md)
- [EdFiObjectiveAssessmentScore](docs/Model/EdFiObjectiveAssessmentScore.md)
- [EdFiOpenStaffPosition](docs/Model/EdFiOpenStaffPosition.md)
- [EdFiOpenStaffPositionAcademicSubject](docs/Model/EdFiOpenStaffPositionAcademicSubject.md)
- [EdFiOpenStaffPositionInstructionalGradeLevel](docs/Model/EdFiOpenStaffPositionInstructionalGradeLevel.md)
- [EdFiOperationalUnitDimension](docs/Model/EdFiOperationalUnitDimension.md)
- [EdFiOperationalUnitDimensionReference](docs/Model/EdFiOperationalUnitDimensionReference.md)
- [EdFiOperationalUnitDimensionReportingTag](docs/Model/EdFiOperationalUnitDimensionReportingTag.md)
- [EdFiOrganizationDepartment](docs/Model/EdFiOrganizationDepartment.md)
- [EdFiPerson](docs/Model/EdFiPerson.md)
- [EdFiPersonReference](docs/Model/EdFiPersonReference.md)
- [EdFiPostSecondaryEvent](docs/Model/EdFiPostSecondaryEvent.md)
- [EdFiPostSecondaryInstitution](docs/Model/EdFiPostSecondaryInstitution.md)
- [EdFiPostSecondaryInstitutionMediumOfInstruction](docs/Model/EdFiPostSecondaryInstitutionMediumOfInstruction.md)
- [EdFiPostSecondaryInstitutionReference](docs/Model/EdFiPostSecondaryInstitutionReference.md)
- [EdFiProgram](docs/Model/EdFiProgram.md)
- [EdFiProgramCharacteristic](docs/Model/EdFiProgramCharacteristic.md)
- [EdFiProgramDimension](docs/Model/EdFiProgramDimension.md)
- [EdFiProgramDimensionReference](docs/Model/EdFiProgramDimensionReference.md)
- [EdFiProgramDimensionReportingTag](docs/Model/EdFiProgramDimensionReportingTag.md)
- [EdFiProgramEvaluation](docs/Model/EdFiProgramEvaluation.md)
- [EdFiProgramEvaluationElement](docs/Model/EdFiProgramEvaluationElement.md)
- [EdFiProgramEvaluationElementProgramEvaluationLevel](docs/Model/EdFiProgramEvaluationElementProgramEvaluationLevel.md)
- [EdFiProgramEvaluationElementReference](docs/Model/EdFiProgramEvaluationElementReference.md)
- [EdFiProgramEvaluationLevel](docs/Model/EdFiProgramEvaluationLevel.md)
- [EdFiProgramEvaluationObjective](docs/Model/EdFiProgramEvaluationObjective.md)
- [EdFiProgramEvaluationObjectiveProgramEvaluationLevel](docs/Model/EdFiProgramEvaluationObjectiveProgramEvaluationLevel.md)
- [EdFiProgramEvaluationObjectiveReference](docs/Model/EdFiProgramEvaluationObjectiveReference.md)
- [EdFiProgramEvaluationReference](docs/Model/EdFiProgramEvaluationReference.md)
- [EdFiProgramLearningStandard](docs/Model/EdFiProgramLearningStandard.md)
- [EdFiProgramReference](docs/Model/EdFiProgramReference.md)
- [EdFiProgramSponsor](docs/Model/EdFiProgramSponsor.md)
- [EdFiProjectDimension](docs/Model/EdFiProjectDimension.md)
- [EdFiProjectDimensionReference](docs/Model/EdFiProjectDimensionReference.md)
- [EdFiProjectDimensionReportingTag](docs/Model/EdFiProjectDimensionReportingTag.md)
- [EdFiReportCard](docs/Model/EdFiReportCard.md)
- [EdFiReportCardGrade](docs/Model/EdFiReportCardGrade.md)
- [EdFiReportCardGradePointAverage](docs/Model/EdFiReportCardGradePointAverage.md)
- [EdFiReportCardReference](docs/Model/EdFiReportCardReference.md)
- [EdFiReportCardStudentCompetencyObjective](docs/Model/EdFiReportCardStudentCompetencyObjective.md)
- [EdFiRestraintEvent](docs/Model/EdFiRestraintEvent.md)
- [EdFiRestraintEventProgram](docs/Model/EdFiRestraintEventProgram.md)
- [EdFiRestraintEventReason](docs/Model/EdFiRestraintEventReason.md)
- [EdFiSchool](docs/Model/EdFiSchool.md)
- [EdFiSchoolCategory](docs/Model/EdFiSchoolCategory.md)
- [EdFiSchoolGradeLevel](docs/Model/EdFiSchoolGradeLevel.md)
- [EdFiSchoolReference](docs/Model/EdFiSchoolReference.md)
- [EdFiSchoolYearType](docs/Model/EdFiSchoolYearType.md)
- [EdFiSchoolYearTypeReference](docs/Model/EdFiSchoolYearTypeReference.md)
- [EdFiSection](docs/Model/EdFiSection.md)
- [EdFiSectionAttendanceTakenEvent](docs/Model/EdFiSectionAttendanceTakenEvent.md)
- [EdFiSectionCharacteristic](docs/Model/EdFiSectionCharacteristic.md)
- [EdFiSectionClassPeriod](docs/Model/EdFiSectionClassPeriod.md)
- [EdFiSectionCourseLevelCharacteristic](docs/Model/EdFiSectionCourseLevelCharacteristic.md)
- [EdFiSectionOfferedGradeLevel](docs/Model/EdFiSectionOfferedGradeLevel.md)
- [EdFiSectionProgram](docs/Model/EdFiSectionProgram.md)
- [EdFiSectionReference](docs/Model/EdFiSectionReference.md)
- [EdFiSession](docs/Model/EdFiSession.md)
- [EdFiSessionAcademicWeek](docs/Model/EdFiSessionAcademicWeek.md)
- [EdFiSessionGradingPeriod](docs/Model/EdFiSessionGradingPeriod.md)
- [EdFiSessionReference](docs/Model/EdFiSessionReference.md)
- [EdFiSourceDimension](docs/Model/EdFiSourceDimension.md)
- [EdFiSourceDimensionReference](docs/Model/EdFiSourceDimensionReference.md)
- [EdFiSourceDimensionReportingTag](docs/Model/EdFiSourceDimensionReportingTag.md)
- [EdFiStaff](docs/Model/EdFiStaff.md)
- [EdFiStaffAbsenceEvent](docs/Model/EdFiStaffAbsenceEvent.md)
- [EdFiStaffAddress](docs/Model/EdFiStaffAddress.md)
- [EdFiStaffAddressPeriod](docs/Model/EdFiStaffAddressPeriod.md)
- [EdFiStaffAncestryEthnicOrigin](docs/Model/EdFiStaffAncestryEthnicOrigin.md)
- [EdFiStaffCohortAssociation](docs/Model/EdFiStaffCohortAssociation.md)
- [EdFiStaffCredential](docs/Model/EdFiStaffCredential.md)
- [EdFiStaffDisciplineIncidentAssociation](docs/Model/EdFiStaffDisciplineIncidentAssociation.md)
- [EdFiStaffDisciplineIncidentAssociationDisciplineIncidentParticipationCode](docs/Model/EdFiStaffDisciplineIncidentAssociationDisciplineIncidentParticipationCode.md)
- [EdFiStaffEducationOrganizationAssignmentAssociation](docs/Model/EdFiStaffEducationOrganizationAssignmentAssociation.md)
- [EdFiStaffEducationOrganizationContactAssociation](docs/Model/EdFiStaffEducationOrganizationContactAssociation.md)
- [EdFiStaffEducationOrganizationContactAssociationAddress](docs/Model/EdFiStaffEducationOrganizationContactAssociationAddress.md)
- [EdFiStaffEducationOrganizationContactAssociationAddressPeriod](docs/Model/EdFiStaffEducationOrganizationContactAssociationAddressPeriod.md)
- [EdFiStaffEducationOrganizationContactAssociationTelephone](docs/Model/EdFiStaffEducationOrganizationContactAssociationTelephone.md)
- [EdFiStaffEducationOrganizationEmploymentAssociation](docs/Model/EdFiStaffEducationOrganizationEmploymentAssociation.md)
- [EdFiStaffEducationOrganizationEmploymentAssociationReference](docs/Model/EdFiStaffEducationOrganizationEmploymentAssociationReference.md)
- [EdFiStaffElectronicMail](docs/Model/EdFiStaffElectronicMail.md)
- [EdFiStaffIdentificationCode](docs/Model/EdFiStaffIdentificationCode.md)
- [EdFiStaffIdentificationDocument](docs/Model/EdFiStaffIdentificationDocument.md)
- [EdFiStaffInternationalAddress](docs/Model/EdFiStaffInternationalAddress.md)
- [EdFiStaffLanguage](docs/Model/EdFiStaffLanguage.md)
- [EdFiStaffLanguageUse](docs/Model/EdFiStaffLanguageUse.md)
- [EdFiStaffLeave](docs/Model/EdFiStaffLeave.md)
- [EdFiStaffOtherName](docs/Model/EdFiStaffOtherName.md)
- [EdFiStaffPersonalIdentificationDocument](docs/Model/EdFiStaffPersonalIdentificationDocument.md)
- [EdFiStaffProgramAssociation](docs/Model/EdFiStaffProgramAssociation.md)
- [EdFiStaffRace](docs/Model/EdFiStaffRace.md)
- [EdFiStaffRecognition](docs/Model/EdFiStaffRecognition.md)
- [EdFiStaffReference](docs/Model/EdFiStaffReference.md)
- [EdFiStaffSchoolAssociation](docs/Model/EdFiStaffSchoolAssociation.md)
- [EdFiStaffSchoolAssociationAcademicSubject](docs/Model/EdFiStaffSchoolAssociationAcademicSubject.md)
- [EdFiStaffSchoolAssociationGradeLevel](docs/Model/EdFiStaffSchoolAssociationGradeLevel.md)
- [EdFiStaffSectionAssociation](docs/Model/EdFiStaffSectionAssociation.md)
- [EdFiStaffTelephone](docs/Model/EdFiStaffTelephone.md)
- [EdFiStaffTribalAffiliation](docs/Model/EdFiStaffTribalAffiliation.md)
- [EdFiStaffVisa](docs/Model/EdFiStaffVisa.md)
- [EdFiStateEducationAgency](docs/Model/EdFiStateEducationAgency.md)
- [EdFiStateEducationAgencyAccountability](docs/Model/EdFiStateEducationAgencyAccountability.md)
- [EdFiStateEducationAgencyFederalFunds](docs/Model/EdFiStateEducationAgencyFederalFunds.md)
- [EdFiStateEducationAgencyReference](docs/Model/EdFiStateEducationAgencyReference.md)
- [EdFiStudent](docs/Model/EdFiStudent.md)
- [EdFiStudentAcademicRecord](docs/Model/EdFiStudentAcademicRecord.md)
- [EdFiStudentAcademicRecordAcademicHonor](docs/Model/EdFiStudentAcademicRecordAcademicHonor.md)
- [EdFiStudentAcademicRecordClassRanking](docs/Model/EdFiStudentAcademicRecordClassRanking.md)
- [EdFiStudentAcademicRecordDiploma](docs/Model/EdFiStudentAcademicRecordDiploma.md)
- [EdFiStudentAcademicRecordGradePointAverage](docs/Model/EdFiStudentAcademicRecordGradePointAverage.md)
- [EdFiStudentAcademicRecordRecognition](docs/Model/EdFiStudentAcademicRecordRecognition.md)
- [EdFiStudentAcademicRecordReference](docs/Model/EdFiStudentAcademicRecordReference.md)
- [EdFiStudentAcademicRecordReportCard](docs/Model/EdFiStudentAcademicRecordReportCard.md)
- [EdFiStudentAssessment](docs/Model/EdFiStudentAssessment.md)
- [EdFiStudentAssessmentAccommodation](docs/Model/EdFiStudentAssessmentAccommodation.md)
- [EdFiStudentAssessmentEducationOrganizationAssociation](docs/Model/EdFiStudentAssessmentEducationOrganizationAssociation.md)
- [EdFiStudentAssessmentItem](docs/Model/EdFiStudentAssessmentItem.md)
- [EdFiStudentAssessmentPerformanceLevel](docs/Model/EdFiStudentAssessmentPerformanceLevel.md)
- [EdFiStudentAssessmentPeriod](docs/Model/EdFiStudentAssessmentPeriod.md)
- [EdFiStudentAssessmentReference](docs/Model/EdFiStudentAssessmentReference.md)
- [EdFiStudentAssessmentScoreResult](docs/Model/EdFiStudentAssessmentScoreResult.md)
- [EdFiStudentAssessmentStudentObjectiveAssessment](docs/Model/EdFiStudentAssessmentStudentObjectiveAssessment.md)
- [EdFiStudentAssessmentStudentObjectiveAssessmentPerformanceLevel](docs/Model/EdFiStudentAssessmentStudentObjectiveAssessmentPerformanceLevel.md)
- [EdFiStudentAssessmentStudentObjectiveAssessmentScoreResult](docs/Model/EdFiStudentAssessmentStudentObjectiveAssessmentScoreResult.md)
- [EdFiStudentCTEProgramAssociation](docs/Model/EdFiStudentCTEProgramAssociation.md)
- [EdFiStudentCTEProgramAssociationCTEProgramService](docs/Model/EdFiStudentCTEProgramAssociationCTEProgramService.md)
- [EdFiStudentCohortAssociation](docs/Model/EdFiStudentCohortAssociation.md)
- [EdFiStudentCohortAssociationSection](docs/Model/EdFiStudentCohortAssociationSection.md)
- [EdFiStudentCompetencyObjective](docs/Model/EdFiStudentCompetencyObjective.md)
- [EdFiStudentCompetencyObjectiveGeneralStudentProgramAssociation](docs/Model/EdFiStudentCompetencyObjectiveGeneralStudentProgramAssociation.md)
- [EdFiStudentCompetencyObjectiveReference](docs/Model/EdFiStudentCompetencyObjectiveReference.md)
- [EdFiStudentCompetencyObjectiveStudentSectionAssociation](docs/Model/EdFiStudentCompetencyObjectiveStudentSectionAssociation.md)
- [EdFiStudentContactAssociation](docs/Model/EdFiStudentContactAssociation.md)
- [EdFiStudentDisciplineIncidentBehaviorAssociation](docs/Model/EdFiStudentDisciplineIncidentBehaviorAssociation.md)
- [EdFiStudentDisciplineIncidentBehaviorAssociationDisciplineIncidentParticipationCode](docs/Model/EdFiStudentDisciplineIncidentBehaviorAssociationDisciplineIncidentParticipationCode.md)
- [EdFiStudentDisciplineIncidentBehaviorAssociationReference](docs/Model/EdFiStudentDisciplineIncidentBehaviorAssociationReference.md)
- [EdFiStudentDisciplineIncidentNonOffenderAssociation](docs/Model/EdFiStudentDisciplineIncidentNonOffenderAssociation.md)
- [EdFiStudentDisciplineIncidentNonOffenderAssociationDisciplineIncidentParticipationCode](docs/Model/EdFiStudentDisciplineIncidentNonOffenderAssociationDisciplineIncidentParticipationCode.md)
- [EdFiStudentEducationOrganizationAssociation](docs/Model/EdFiStudentEducationOrganizationAssociation.md)
- [EdFiStudentEducationOrganizationAssociationAddress](docs/Model/EdFiStudentEducationOrganizationAssociationAddress.md)
- [EdFiStudentEducationOrganizationAssociationAddressPeriod](docs/Model/EdFiStudentEducationOrganizationAssociationAddressPeriod.md)
- [EdFiStudentEducationOrganizationAssociationAncestryEthnicOrigin](docs/Model/EdFiStudentEducationOrganizationAssociationAncestryEthnicOrigin.md)
- [EdFiStudentEducationOrganizationAssociationCohortYear](docs/Model/EdFiStudentEducationOrganizationAssociationCohortYear.md)
- [EdFiStudentEducationOrganizationAssociationDisability](docs/Model/EdFiStudentEducationOrganizationAssociationDisability.md)
- [EdFiStudentEducationOrganizationAssociationDisabilityDesignation](docs/Model/EdFiStudentEducationOrganizationAssociationDisabilityDesignation.md)
- [EdFiStudentEducationOrganizationAssociationElectronicMail](docs/Model/EdFiStudentEducationOrganizationAssociationElectronicMail.md)
- [EdFiStudentEducationOrganizationAssociationInternationalAddress](docs/Model/EdFiStudentEducationOrganizationAssociationInternationalAddress.md)
- [EdFiStudentEducationOrganizationAssociationLanguage](docs/Model/EdFiStudentEducationOrganizationAssociationLanguage.md)
- [EdFiStudentEducationOrganizationAssociationLanguageUse](docs/Model/EdFiStudentEducationOrganizationAssociationLanguageUse.md)
- [EdFiStudentEducationOrganizationAssociationRace](docs/Model/EdFiStudentEducationOrganizationAssociationRace.md)
- [EdFiStudentEducationOrganizationAssociationStudentCharacteristic](docs/Model/EdFiStudentEducationOrganizationAssociationStudentCharacteristic.md)
- [EdFiStudentEducationOrganizationAssociationStudentCharacteristicPeriod](docs/Model/EdFiStudentEducationOrganizationAssociationStudentCharacteristicPeriod.md)
- [EdFiStudentEducationOrganizationAssociationStudentIdentificationCode](docs/Model/EdFiStudentEducationOrganizationAssociationStudentIdentificationCode.md)
- [EdFiStudentEducationOrganizationAssociationStudentIndicator](docs/Model/EdFiStudentEducationOrganizationAssociationStudentIndicator.md)
- [EdFiStudentEducationOrganizationAssociationStudentIndicatorPeriod](docs/Model/EdFiStudentEducationOrganizationAssociationStudentIndicatorPeriod.md)
- [EdFiStudentEducationOrganizationAssociationTelephone](docs/Model/EdFiStudentEducationOrganizationAssociationTelephone.md)
- [EdFiStudentEducationOrganizationAssociationTribalAffiliation](docs/Model/EdFiStudentEducationOrganizationAssociationTribalAffiliation.md)
- [EdFiStudentEducationOrganizationResponsibilityAssociation](docs/Model/EdFiStudentEducationOrganizationResponsibilityAssociation.md)
- [EdFiStudentGradebookEntry](docs/Model/EdFiStudentGradebookEntry.md)
- [EdFiStudentHomelessProgramAssociation](docs/Model/EdFiStudentHomelessProgramAssociation.md)
- [EdFiStudentHomelessProgramAssociationHomelessProgramService](docs/Model/EdFiStudentHomelessProgramAssociationHomelessProgramService.md)
- [EdFiStudentIdentificationDocument](docs/Model/EdFiStudentIdentificationDocument.md)
- [EdFiStudentInterventionAssociation](docs/Model/EdFiStudentInterventionAssociation.md)
- [EdFiStudentInterventionAssociationInterventionEffectiveness](docs/Model/EdFiStudentInterventionAssociationInterventionEffectiveness.md)
- [EdFiStudentInterventionAttendanceEvent](docs/Model/EdFiStudentInterventionAttendanceEvent.md)
- [EdFiStudentLanguageInstructionProgramAssociation](docs/Model/EdFiStudentLanguageInstructionProgramAssociation.md)
- [EdFiStudentLanguageInstructionProgramAssociationEnglishLanguageProficiencyAssessment](docs/Model/EdFiStudentLanguageInstructionProgramAssociationEnglishLanguageProficiencyAssessment.md)
- [EdFiStudentLanguageInstructionProgramAssociationLanguageInstructionProgramService](docs/Model/EdFiStudentLanguageInstructionProgramAssociationLanguageInstructionProgramService.md)
- [EdFiStudentMigrantEducationProgramAssociation](docs/Model/EdFiStudentMigrantEducationProgramAssociation.md)
- [EdFiStudentMigrantEducationProgramAssociationMigrantEducationProgramService](docs/Model/EdFiStudentMigrantEducationProgramAssociationMigrantEducationProgramService.md)
- [EdFiStudentNeglectedOrDelinquentProgramAssociation](docs/Model/EdFiStudentNeglectedOrDelinquentProgramAssociation.md)
- [EdFiStudentNeglectedOrDelinquentProgramAssociationNeglectedOrDelinquentProgramService](docs/Model/EdFiStudentNeglectedOrDelinquentProgramAssociationNeglectedOrDelinquentProgramService.md)
- [EdFiStudentOtherName](docs/Model/EdFiStudentOtherName.md)
- [EdFiStudentPersonalIdentificationDocument](docs/Model/EdFiStudentPersonalIdentificationDocument.md)
- [EdFiStudentProgramAssociation](docs/Model/EdFiStudentProgramAssociation.md)
- [EdFiStudentProgramAssociationService](docs/Model/EdFiStudentProgramAssociationService.md)
- [EdFiStudentProgramAttendanceEvent](docs/Model/EdFiStudentProgramAttendanceEvent.md)
- [EdFiStudentProgramEvaluation](docs/Model/EdFiStudentProgramEvaluation.md)
- [EdFiStudentProgramEvaluationExternalEvaluator](docs/Model/EdFiStudentProgramEvaluationExternalEvaluator.md)
- [EdFiStudentProgramEvaluationStudentEvaluationElement](docs/Model/EdFiStudentProgramEvaluationStudentEvaluationElement.md)
- [EdFiStudentProgramEvaluationStudentEvaluationObjective](docs/Model/EdFiStudentProgramEvaluationStudentEvaluationObjective.md)
- [EdFiStudentReference](docs/Model/EdFiStudentReference.md)
- [EdFiStudentSchoolAssociation](docs/Model/EdFiStudentSchoolAssociation.md)
- [EdFiStudentSchoolAssociationAlternativeGraduationPlan](docs/Model/EdFiStudentSchoolAssociationAlternativeGraduationPlan.md)
- [EdFiStudentSchoolAssociationEducationPlan](docs/Model/EdFiStudentSchoolAssociationEducationPlan.md)
- [EdFiStudentSchoolAttendanceEvent](docs/Model/EdFiStudentSchoolAttendanceEvent.md)
- [EdFiStudentSchoolFoodServiceProgramAssociation](docs/Model/EdFiStudentSchoolFoodServiceProgramAssociation.md)
- [EdFiStudentSchoolFoodServiceProgramAssociationSchoolFoodServiceProgramService](docs/Model/EdFiStudentSchoolFoodServiceProgramAssociationSchoolFoodServiceProgramService.md)
- [EdFiStudentSectionAssociation](docs/Model/EdFiStudentSectionAssociation.md)
- [EdFiStudentSectionAssociationProgram](docs/Model/EdFiStudentSectionAssociationProgram.md)
- [EdFiStudentSectionAssociationReference](docs/Model/EdFiStudentSectionAssociationReference.md)
- [EdFiStudentSectionAttendanceEvent](docs/Model/EdFiStudentSectionAttendanceEvent.md)
- [EdFiStudentSectionAttendanceEventClassPeriod](docs/Model/EdFiStudentSectionAttendanceEventClassPeriod.md)
- [EdFiStudentSpecialEducationProgramAssociation](docs/Model/EdFiStudentSpecialEducationProgramAssociation.md)
- [EdFiStudentSpecialEducationProgramAssociationDisability](docs/Model/EdFiStudentSpecialEducationProgramAssociationDisability.md)
- [EdFiStudentSpecialEducationProgramAssociationDisabilityDesignation](docs/Model/EdFiStudentSpecialEducationProgramAssociationDisabilityDesignation.md)
- [EdFiStudentSpecialEducationProgramAssociationServiceProvider](docs/Model/EdFiStudentSpecialEducationProgramAssociationServiceProvider.md)
- [EdFiStudentSpecialEducationProgramAssociationSpecialEducationProgramService](docs/Model/EdFiStudentSpecialEducationProgramAssociationSpecialEducationProgramService.md)
- [EdFiStudentSpecialEducationProgramAssociationSpecialEducationProgramServiceProvider](docs/Model/EdFiStudentSpecialEducationProgramAssociationSpecialEducationProgramServiceProvider.md)
- [EdFiStudentSpecialEducationProgramEligibilityAssociation](docs/Model/EdFiStudentSpecialEducationProgramEligibilityAssociation.md)
- [EdFiStudentTitleIPartAProgramAssociation](docs/Model/EdFiStudentTitleIPartAProgramAssociation.md)
- [EdFiStudentTitleIPartAProgramAssociationTitleIPartAProgramService](docs/Model/EdFiStudentTitleIPartAProgramAssociationTitleIPartAProgramService.md)
- [EdFiStudentVisa](docs/Model/EdFiStudentVisa.md)
- [EdFiSurvey](docs/Model/EdFiSurvey.md)
- [EdFiSurveyCourseAssociation](docs/Model/EdFiSurveyCourseAssociation.md)
- [EdFiSurveyProgramAssociation](docs/Model/EdFiSurveyProgramAssociation.md)
- [EdFiSurveyQuestion](docs/Model/EdFiSurveyQuestion.md)
- [EdFiSurveyQuestionMatrix](docs/Model/EdFiSurveyQuestionMatrix.md)
- [EdFiSurveyQuestionReference](docs/Model/EdFiSurveyQuestionReference.md)
- [EdFiSurveyQuestionResponse](docs/Model/EdFiSurveyQuestionResponse.md)
- [EdFiSurveyQuestionResponseChoice](docs/Model/EdFiSurveyQuestionResponseChoice.md)
- [EdFiSurveyQuestionResponseSurveyQuestionMatrixElementResponse](docs/Model/EdFiSurveyQuestionResponseSurveyQuestionMatrixElementResponse.md)
- [EdFiSurveyQuestionResponseValue](docs/Model/EdFiSurveyQuestionResponseValue.md)
- [EdFiSurveyReference](docs/Model/EdFiSurveyReference.md)
- [EdFiSurveyResponse](docs/Model/EdFiSurveyResponse.md)
- [EdFiSurveyResponseEducationOrganizationTargetAssociation](docs/Model/EdFiSurveyResponseEducationOrganizationTargetAssociation.md)
- [EdFiSurveyResponseReference](docs/Model/EdFiSurveyResponseReference.md)
- [EdFiSurveyResponseStaffTargetAssociation](docs/Model/EdFiSurveyResponseStaffTargetAssociation.md)
- [EdFiSurveyResponseSurveyLevel](docs/Model/EdFiSurveyResponseSurveyLevel.md)
- [EdFiSurveySection](docs/Model/EdFiSurveySection.md)
- [EdFiSurveySectionAssociation](docs/Model/EdFiSurveySectionAssociation.md)
- [EdFiSurveySectionReference](docs/Model/EdFiSurveySectionReference.md)
- [EdFiSurveySectionResponse](docs/Model/EdFiSurveySectionResponse.md)
- [EdFiSurveySectionResponseEducationOrganizationTargetAssociation](docs/Model/EdFiSurveySectionResponseEducationOrganizationTargetAssociation.md)
- [EdFiSurveySectionResponseReference](docs/Model/EdFiSurveySectionResponseReference.md)
- [EdFiSurveySectionResponseStaffTargetAssociation](docs/Model/EdFiSurveySectionResponseStaffTargetAssociation.md)
- [Link](docs/Model/Link.md)
- [SchoolExtensions](docs/Model/SchoolExtensions.md)
- [SurveyResponseExtensions](docs/Model/SurveyResponseExtensions.md)
- [TpdmCandidate](docs/Model/TpdmCandidate.md)
- [TpdmCandidateAddress](docs/Model/TpdmCandidateAddress.md)
- [TpdmCandidateAddressPeriod](docs/Model/TpdmCandidateAddressPeriod.md)
- [TpdmCandidateDisability](docs/Model/TpdmCandidateDisability.md)
- [TpdmCandidateDisabilityDesignation](docs/Model/TpdmCandidateDisabilityDesignation.md)
- [TpdmCandidateEducatorPreparationProgramAssociation](docs/Model/TpdmCandidateEducatorPreparationProgramAssociation.md)
- [TpdmCandidateEducatorPreparationProgramAssociationCohortYear](docs/Model/TpdmCandidateEducatorPreparationProgramAssociationCohortYear.md)
- [TpdmCandidateEducatorPreparationProgramAssociationDegreeSpecialization](docs/Model/TpdmCandidateEducatorPreparationProgramAssociationDegreeSpecialization.md)
- [TpdmCandidateElectronicMail](docs/Model/TpdmCandidateElectronicMail.md)
- [TpdmCandidateLanguage](docs/Model/TpdmCandidateLanguage.md)
- [TpdmCandidateLanguageUse](docs/Model/TpdmCandidateLanguageUse.md)
- [TpdmCandidateOtherName](docs/Model/TpdmCandidateOtherName.md)
- [TpdmCandidatePersonalIdentificationDocument](docs/Model/TpdmCandidatePersonalIdentificationDocument.md)
- [TpdmCandidateRace](docs/Model/TpdmCandidateRace.md)
- [TpdmCandidateReference](docs/Model/TpdmCandidateReference.md)
- [TpdmCandidateTelephone](docs/Model/TpdmCandidateTelephone.md)
- [TpdmCredentialExtension](docs/Model/TpdmCredentialExtension.md)
- [TpdmCredentialStudentAcademicRecord](docs/Model/TpdmCredentialStudentAcademicRecord.md)
- [TpdmEducatorPreparationProgram](docs/Model/TpdmEducatorPreparationProgram.md)
- [TpdmEducatorPreparationProgramGradeLevel](docs/Model/TpdmEducatorPreparationProgramGradeLevel.md)
- [TpdmEducatorPreparationProgramReference](docs/Model/TpdmEducatorPreparationProgramReference.md)
- [TpdmEvaluation](docs/Model/TpdmEvaluation.md)
- [TpdmEvaluationElement](docs/Model/TpdmEvaluationElement.md)
- [TpdmEvaluationElementRating](docs/Model/TpdmEvaluationElementRating.md)
- [TpdmEvaluationElementRatingLevel](docs/Model/TpdmEvaluationElementRatingLevel.md)
- [TpdmEvaluationElementRatingResult](docs/Model/TpdmEvaluationElementRatingResult.md)
- [TpdmEvaluationElementReference](docs/Model/TpdmEvaluationElementReference.md)
- [TpdmEvaluationObjective](docs/Model/TpdmEvaluationObjective.md)
- [TpdmEvaluationObjectiveRating](docs/Model/TpdmEvaluationObjectiveRating.md)
- [TpdmEvaluationObjectiveRatingLevel](docs/Model/TpdmEvaluationObjectiveRatingLevel.md)
- [TpdmEvaluationObjectiveRatingReference](docs/Model/TpdmEvaluationObjectiveRatingReference.md)
- [TpdmEvaluationObjectiveRatingResult](docs/Model/TpdmEvaluationObjectiveRatingResult.md)
- [TpdmEvaluationObjectiveReference](docs/Model/TpdmEvaluationObjectiveReference.md)
- [TpdmEvaluationRating](docs/Model/TpdmEvaluationRating.md)
- [TpdmEvaluationRatingLevel](docs/Model/TpdmEvaluationRatingLevel.md)
- [TpdmEvaluationRatingReference](docs/Model/TpdmEvaluationRatingReference.md)
- [TpdmEvaluationRatingResult](docs/Model/TpdmEvaluationRatingResult.md)
- [TpdmEvaluationRatingReviewer](docs/Model/TpdmEvaluationRatingReviewer.md)
- [TpdmEvaluationRatingReviewerReceivedTraining](docs/Model/TpdmEvaluationRatingReviewerReceivedTraining.md)
- [TpdmEvaluationReference](docs/Model/TpdmEvaluationReference.md)
- [TpdmFinancialAid](docs/Model/TpdmFinancialAid.md)
- [TpdmPerformanceEvaluation](docs/Model/TpdmPerformanceEvaluation.md)
- [TpdmPerformanceEvaluationGradeLevel](docs/Model/TpdmPerformanceEvaluationGradeLevel.md)
- [TpdmPerformanceEvaluationRating](docs/Model/TpdmPerformanceEvaluationRating.md)
- [TpdmPerformanceEvaluationRatingLevel](docs/Model/TpdmPerformanceEvaluationRatingLevel.md)
- [TpdmPerformanceEvaluationRatingReference](docs/Model/TpdmPerformanceEvaluationRatingReference.md)
- [TpdmPerformanceEvaluationRatingResult](docs/Model/TpdmPerformanceEvaluationRatingResult.md)
- [TpdmPerformanceEvaluationRatingReviewer](docs/Model/TpdmPerformanceEvaluationRatingReviewer.md)
- [TpdmPerformanceEvaluationRatingReviewerReceivedTraining](docs/Model/TpdmPerformanceEvaluationRatingReviewerReceivedTraining.md)
- [TpdmPerformanceEvaluationReference](docs/Model/TpdmPerformanceEvaluationReference.md)
- [TpdmRubricDimension](docs/Model/TpdmRubricDimension.md)
- [TpdmSchoolExtension](docs/Model/TpdmSchoolExtension.md)
- [TpdmSurveyResponseExtension](docs/Model/TpdmSurveyResponseExtension.md)
- [TpdmSurveyResponsePersonTargetAssociation](docs/Model/TpdmSurveyResponsePersonTargetAssociation.md)
- [TpdmSurveySectionResponsePersonTargetAssociation](docs/Model/TpdmSurveySectionResponsePersonTargetAssociation.md)
- [TrackedChangesEdFiAcademicWeekDelete](docs/Model/TrackedChangesEdFiAcademicWeekDelete.md)
- [TrackedChangesEdFiAcademicWeekKey](docs/Model/TrackedChangesEdFiAcademicWeekKey.md)
- [TrackedChangesEdFiAcademicWeekKeyChange](docs/Model/TrackedChangesEdFiAcademicWeekKeyChange.md)
- [TrackedChangesEdFiAccountabilityRatingDelete](docs/Model/TrackedChangesEdFiAccountabilityRatingDelete.md)
- [TrackedChangesEdFiAccountabilityRatingKey](docs/Model/TrackedChangesEdFiAccountabilityRatingKey.md)
- [TrackedChangesEdFiAccountabilityRatingKeyChange](docs/Model/TrackedChangesEdFiAccountabilityRatingKeyChange.md)
- [TrackedChangesEdFiAssessmentDelete](docs/Model/TrackedChangesEdFiAssessmentDelete.md)
- [TrackedChangesEdFiAssessmentItemDelete](docs/Model/TrackedChangesEdFiAssessmentItemDelete.md)
- [TrackedChangesEdFiAssessmentItemKey](docs/Model/TrackedChangesEdFiAssessmentItemKey.md)
- [TrackedChangesEdFiAssessmentItemKeyChange](docs/Model/TrackedChangesEdFiAssessmentItemKeyChange.md)
- [TrackedChangesEdFiAssessmentKey](docs/Model/TrackedChangesEdFiAssessmentKey.md)
- [TrackedChangesEdFiAssessmentKeyChange](docs/Model/TrackedChangesEdFiAssessmentKeyChange.md)
- [TrackedChangesEdFiAssessmentScoreRangeLearningStandardDelete](docs/Model/TrackedChangesEdFiAssessmentScoreRangeLearningStandardDelete.md)
- [TrackedChangesEdFiAssessmentScoreRangeLearningStandardKey](docs/Model/TrackedChangesEdFiAssessmentScoreRangeLearningStandardKey.md)
- [TrackedChangesEdFiAssessmentScoreRangeLearningStandardKeyChange](docs/Model/TrackedChangesEdFiAssessmentScoreRangeLearningStandardKeyChange.md)
- [TrackedChangesEdFiBalanceSheetDimensionDelete](docs/Model/TrackedChangesEdFiBalanceSheetDimensionDelete.md)
- [TrackedChangesEdFiBalanceSheetDimensionKey](docs/Model/TrackedChangesEdFiBalanceSheetDimensionKey.md)
- [TrackedChangesEdFiBalanceSheetDimensionKeyChange](docs/Model/TrackedChangesEdFiBalanceSheetDimensionKeyChange.md)
- [TrackedChangesEdFiBellScheduleDelete](docs/Model/TrackedChangesEdFiBellScheduleDelete.md)
- [TrackedChangesEdFiBellScheduleKey](docs/Model/TrackedChangesEdFiBellScheduleKey.md)
- [TrackedChangesEdFiBellScheduleKeyChange](docs/Model/TrackedChangesEdFiBellScheduleKeyChange.md)
- [TrackedChangesEdFiCalendarDateDelete](docs/Model/TrackedChangesEdFiCalendarDateDelete.md)
- [TrackedChangesEdFiCalendarDateKey](docs/Model/TrackedChangesEdFiCalendarDateKey.md)
- [TrackedChangesEdFiCalendarDateKeyChange](docs/Model/TrackedChangesEdFiCalendarDateKeyChange.md)
- [TrackedChangesEdFiCalendarDelete](docs/Model/TrackedChangesEdFiCalendarDelete.md)
- [TrackedChangesEdFiCalendarKey](docs/Model/TrackedChangesEdFiCalendarKey.md)
- [TrackedChangesEdFiCalendarKeyChange](docs/Model/TrackedChangesEdFiCalendarKeyChange.md)
- [TrackedChangesEdFiChartOfAccountDelete](docs/Model/TrackedChangesEdFiChartOfAccountDelete.md)
- [TrackedChangesEdFiChartOfAccountKey](docs/Model/TrackedChangesEdFiChartOfAccountKey.md)
- [TrackedChangesEdFiChartOfAccountKeyChange](docs/Model/TrackedChangesEdFiChartOfAccountKeyChange.md)
- [TrackedChangesEdFiClassPeriodDelete](docs/Model/TrackedChangesEdFiClassPeriodDelete.md)
- [TrackedChangesEdFiClassPeriodKey](docs/Model/TrackedChangesEdFiClassPeriodKey.md)
- [TrackedChangesEdFiClassPeriodKeyChange](docs/Model/TrackedChangesEdFiClassPeriodKeyChange.md)
- [TrackedChangesEdFiCohortDelete](docs/Model/TrackedChangesEdFiCohortDelete.md)
- [TrackedChangesEdFiCohortKey](docs/Model/TrackedChangesEdFiCohortKey.md)
- [TrackedChangesEdFiCohortKeyChange](docs/Model/TrackedChangesEdFiCohortKeyChange.md)
- [TrackedChangesEdFiCommunityOrganizationDelete](docs/Model/TrackedChangesEdFiCommunityOrganizationDelete.md)
- [TrackedChangesEdFiCommunityOrganizationKey](docs/Model/TrackedChangesEdFiCommunityOrganizationKey.md)
- [TrackedChangesEdFiCommunityOrganizationKeyChange](docs/Model/TrackedChangesEdFiCommunityOrganizationKeyChange.md)
- [TrackedChangesEdFiCommunityProviderDelete](docs/Model/TrackedChangesEdFiCommunityProviderDelete.md)
- [TrackedChangesEdFiCommunityProviderKey](docs/Model/TrackedChangesEdFiCommunityProviderKey.md)
- [TrackedChangesEdFiCommunityProviderKeyChange](docs/Model/TrackedChangesEdFiCommunityProviderKeyChange.md)
- [TrackedChangesEdFiCommunityProviderLicenseDelete](docs/Model/TrackedChangesEdFiCommunityProviderLicenseDelete.md)
- [TrackedChangesEdFiCommunityProviderLicenseKey](docs/Model/TrackedChangesEdFiCommunityProviderLicenseKey.md)
- [TrackedChangesEdFiCommunityProviderLicenseKeyChange](docs/Model/TrackedChangesEdFiCommunityProviderLicenseKeyChange.md)
- [TrackedChangesEdFiCompetencyObjectiveDelete](docs/Model/TrackedChangesEdFiCompetencyObjectiveDelete.md)
- [TrackedChangesEdFiCompetencyObjectiveKey](docs/Model/TrackedChangesEdFiCompetencyObjectiveKey.md)
- [TrackedChangesEdFiCompetencyObjectiveKeyChange](docs/Model/TrackedChangesEdFiCompetencyObjectiveKeyChange.md)
- [TrackedChangesEdFiContactDelete](docs/Model/TrackedChangesEdFiContactDelete.md)
- [TrackedChangesEdFiContactKey](docs/Model/TrackedChangesEdFiContactKey.md)
- [TrackedChangesEdFiContactKeyChange](docs/Model/TrackedChangesEdFiContactKeyChange.md)
- [TrackedChangesEdFiCourseDelete](docs/Model/TrackedChangesEdFiCourseDelete.md)
- [TrackedChangesEdFiCourseKey](docs/Model/TrackedChangesEdFiCourseKey.md)
- [TrackedChangesEdFiCourseKeyChange](docs/Model/TrackedChangesEdFiCourseKeyChange.md)
- [TrackedChangesEdFiCourseOfferingDelete](docs/Model/TrackedChangesEdFiCourseOfferingDelete.md)
- [TrackedChangesEdFiCourseOfferingKey](docs/Model/TrackedChangesEdFiCourseOfferingKey.md)
- [TrackedChangesEdFiCourseOfferingKeyChange](docs/Model/TrackedChangesEdFiCourseOfferingKeyChange.md)
- [TrackedChangesEdFiCourseTranscriptDelete](docs/Model/TrackedChangesEdFiCourseTranscriptDelete.md)
- [TrackedChangesEdFiCourseTranscriptKey](docs/Model/TrackedChangesEdFiCourseTranscriptKey.md)
- [TrackedChangesEdFiCourseTranscriptKeyChange](docs/Model/TrackedChangesEdFiCourseTranscriptKeyChange.md)
- [TrackedChangesEdFiCredentialDelete](docs/Model/TrackedChangesEdFiCredentialDelete.md)
- [TrackedChangesEdFiCredentialKey](docs/Model/TrackedChangesEdFiCredentialKey.md)
- [TrackedChangesEdFiCredentialKeyChange](docs/Model/TrackedChangesEdFiCredentialKeyChange.md)
- [TrackedChangesEdFiDescriptorMappingDelete](docs/Model/TrackedChangesEdFiDescriptorMappingDelete.md)
- [TrackedChangesEdFiDescriptorMappingKey](docs/Model/TrackedChangesEdFiDescriptorMappingKey.md)
- [TrackedChangesEdFiDescriptorMappingKeyChange](docs/Model/TrackedChangesEdFiDescriptorMappingKeyChange.md)
- [TrackedChangesEdFiDisciplineActionDelete](docs/Model/TrackedChangesEdFiDisciplineActionDelete.md)
- [TrackedChangesEdFiDisciplineActionKey](docs/Model/TrackedChangesEdFiDisciplineActionKey.md)
- [TrackedChangesEdFiDisciplineActionKeyChange](docs/Model/TrackedChangesEdFiDisciplineActionKeyChange.md)
- [TrackedChangesEdFiDisciplineIncidentDelete](docs/Model/TrackedChangesEdFiDisciplineIncidentDelete.md)
- [TrackedChangesEdFiDisciplineIncidentKey](docs/Model/TrackedChangesEdFiDisciplineIncidentKey.md)
- [TrackedChangesEdFiDisciplineIncidentKeyChange](docs/Model/TrackedChangesEdFiDisciplineIncidentKeyChange.md)
- [TrackedChangesEdFiEducationContentDelete](docs/Model/TrackedChangesEdFiEducationContentDelete.md)
- [TrackedChangesEdFiEducationContentKey](docs/Model/TrackedChangesEdFiEducationContentKey.md)
- [TrackedChangesEdFiEducationContentKeyChange](docs/Model/TrackedChangesEdFiEducationContentKeyChange.md)
- [TrackedChangesEdFiEducationOrganizationInterventionPrescriptionAssociationDelete](docs/Model/TrackedChangesEdFiEducationOrganizationInterventionPrescriptionAssociationDelete.md)
- [TrackedChangesEdFiEducationOrganizationInterventionPrescriptionAssociationKey](docs/Model/TrackedChangesEdFiEducationOrganizationInterventionPrescriptionAssociationKey.md)
- [TrackedChangesEdFiEducationOrganizationInterventionPrescriptionAssociationKeyChange](docs/Model/TrackedChangesEdFiEducationOrganizationInterventionPrescriptionAssociationKeyChange.md)
- [TrackedChangesEdFiEducationOrganizationNetworkAssociationDelete](docs/Model/TrackedChangesEdFiEducationOrganizationNetworkAssociationDelete.md)
- [TrackedChangesEdFiEducationOrganizationNetworkAssociationKey](docs/Model/TrackedChangesEdFiEducationOrganizationNetworkAssociationKey.md)
- [TrackedChangesEdFiEducationOrganizationNetworkAssociationKeyChange](docs/Model/TrackedChangesEdFiEducationOrganizationNetworkAssociationKeyChange.md)
- [TrackedChangesEdFiEducationOrganizationNetworkDelete](docs/Model/TrackedChangesEdFiEducationOrganizationNetworkDelete.md)
- [TrackedChangesEdFiEducationOrganizationNetworkKey](docs/Model/TrackedChangesEdFiEducationOrganizationNetworkKey.md)
- [TrackedChangesEdFiEducationOrganizationNetworkKeyChange](docs/Model/TrackedChangesEdFiEducationOrganizationNetworkKeyChange.md)
- [TrackedChangesEdFiEducationOrganizationPeerAssociationDelete](docs/Model/TrackedChangesEdFiEducationOrganizationPeerAssociationDelete.md)
- [TrackedChangesEdFiEducationOrganizationPeerAssociationKey](docs/Model/TrackedChangesEdFiEducationOrganizationPeerAssociationKey.md)
- [TrackedChangesEdFiEducationOrganizationPeerAssociationKeyChange](docs/Model/TrackedChangesEdFiEducationOrganizationPeerAssociationKeyChange.md)
- [TrackedChangesEdFiEducationServiceCenterDelete](docs/Model/TrackedChangesEdFiEducationServiceCenterDelete.md)
- [TrackedChangesEdFiEducationServiceCenterKey](docs/Model/TrackedChangesEdFiEducationServiceCenterKey.md)
- [TrackedChangesEdFiEducationServiceCenterKeyChange](docs/Model/TrackedChangesEdFiEducationServiceCenterKeyChange.md)
- [TrackedChangesEdFiEvaluationRubricDimensionDelete](docs/Model/TrackedChangesEdFiEvaluationRubricDimensionDelete.md)
- [TrackedChangesEdFiEvaluationRubricDimensionKey](docs/Model/TrackedChangesEdFiEvaluationRubricDimensionKey.md)
- [TrackedChangesEdFiEvaluationRubricDimensionKeyChange](docs/Model/TrackedChangesEdFiEvaluationRubricDimensionKeyChange.md)
- [TrackedChangesEdFiFeederSchoolAssociationDelete](docs/Model/TrackedChangesEdFiFeederSchoolAssociationDelete.md)
- [TrackedChangesEdFiFeederSchoolAssociationKey](docs/Model/TrackedChangesEdFiFeederSchoolAssociationKey.md)
- [TrackedChangesEdFiFeederSchoolAssociationKeyChange](docs/Model/TrackedChangesEdFiFeederSchoolAssociationKeyChange.md)
- [TrackedChangesEdFiFunctionDimensionDelete](docs/Model/TrackedChangesEdFiFunctionDimensionDelete.md)
- [TrackedChangesEdFiFunctionDimensionKey](docs/Model/TrackedChangesEdFiFunctionDimensionKey.md)
- [TrackedChangesEdFiFunctionDimensionKeyChange](docs/Model/TrackedChangesEdFiFunctionDimensionKeyChange.md)
- [TrackedChangesEdFiFundDimensionDelete](docs/Model/TrackedChangesEdFiFundDimensionDelete.md)
- [TrackedChangesEdFiFundDimensionKey](docs/Model/TrackedChangesEdFiFundDimensionKey.md)
- [TrackedChangesEdFiFundDimensionKeyChange](docs/Model/TrackedChangesEdFiFundDimensionKeyChange.md)
- [TrackedChangesEdFiGradeDelete](docs/Model/TrackedChangesEdFiGradeDelete.md)
- [TrackedChangesEdFiGradeKey](docs/Model/TrackedChangesEdFiGradeKey.md)
- [TrackedChangesEdFiGradeKeyChange](docs/Model/TrackedChangesEdFiGradeKeyChange.md)
- [TrackedChangesEdFiGradebookEntryDelete](docs/Model/TrackedChangesEdFiGradebookEntryDelete.md)
- [TrackedChangesEdFiGradebookEntryKey](docs/Model/TrackedChangesEdFiGradebookEntryKey.md)
- [TrackedChangesEdFiGradebookEntryKeyChange](docs/Model/TrackedChangesEdFiGradebookEntryKeyChange.md)
- [TrackedChangesEdFiGradingPeriodDelete](docs/Model/TrackedChangesEdFiGradingPeriodDelete.md)
- [TrackedChangesEdFiGradingPeriodKey](docs/Model/TrackedChangesEdFiGradingPeriodKey.md)
- [TrackedChangesEdFiGradingPeriodKeyChange](docs/Model/TrackedChangesEdFiGradingPeriodKeyChange.md)
- [TrackedChangesEdFiGraduationPlanDelete](docs/Model/TrackedChangesEdFiGraduationPlanDelete.md)
- [TrackedChangesEdFiGraduationPlanKey](docs/Model/TrackedChangesEdFiGraduationPlanKey.md)
- [TrackedChangesEdFiGraduationPlanKeyChange](docs/Model/TrackedChangesEdFiGraduationPlanKeyChange.md)
- [TrackedChangesEdFiInterventionDelete](docs/Model/TrackedChangesEdFiInterventionDelete.md)
- [TrackedChangesEdFiInterventionKey](docs/Model/TrackedChangesEdFiInterventionKey.md)
- [TrackedChangesEdFiInterventionKeyChange](docs/Model/TrackedChangesEdFiInterventionKeyChange.md)
- [TrackedChangesEdFiInterventionPrescriptionDelete](docs/Model/TrackedChangesEdFiInterventionPrescriptionDelete.md)
- [TrackedChangesEdFiInterventionPrescriptionKey](docs/Model/TrackedChangesEdFiInterventionPrescriptionKey.md)
- [TrackedChangesEdFiInterventionPrescriptionKeyChange](docs/Model/TrackedChangesEdFiInterventionPrescriptionKeyChange.md)
- [TrackedChangesEdFiInterventionStudyDelete](docs/Model/TrackedChangesEdFiInterventionStudyDelete.md)
- [TrackedChangesEdFiInterventionStudyKey](docs/Model/TrackedChangesEdFiInterventionStudyKey.md)
- [TrackedChangesEdFiInterventionStudyKeyChange](docs/Model/TrackedChangesEdFiInterventionStudyKeyChange.md)
- [TrackedChangesEdFiLearningStandardDelete](docs/Model/TrackedChangesEdFiLearningStandardDelete.md)
- [TrackedChangesEdFiLearningStandardEquivalenceAssociationDelete](docs/Model/TrackedChangesEdFiLearningStandardEquivalenceAssociationDelete.md)
- [TrackedChangesEdFiLearningStandardEquivalenceAssociationKey](docs/Model/TrackedChangesEdFiLearningStandardEquivalenceAssociationKey.md)
- [TrackedChangesEdFiLearningStandardEquivalenceAssociationKeyChange](docs/Model/TrackedChangesEdFiLearningStandardEquivalenceAssociationKeyChange.md)
- [TrackedChangesEdFiLearningStandardKey](docs/Model/TrackedChangesEdFiLearningStandardKey.md)
- [TrackedChangesEdFiLearningStandardKeyChange](docs/Model/TrackedChangesEdFiLearningStandardKeyChange.md)
- [TrackedChangesEdFiLocalAccountDelete](docs/Model/TrackedChangesEdFiLocalAccountDelete.md)
- [TrackedChangesEdFiLocalAccountKey](docs/Model/TrackedChangesEdFiLocalAccountKey.md)
- [TrackedChangesEdFiLocalAccountKeyChange](docs/Model/TrackedChangesEdFiLocalAccountKeyChange.md)
- [TrackedChangesEdFiLocalActualDelete](docs/Model/TrackedChangesEdFiLocalActualDelete.md)
- [TrackedChangesEdFiLocalActualKey](docs/Model/TrackedChangesEdFiLocalActualKey.md)
- [TrackedChangesEdFiLocalActualKeyChange](docs/Model/TrackedChangesEdFiLocalActualKeyChange.md)
- [TrackedChangesEdFiLocalBudgetDelete](docs/Model/TrackedChangesEdFiLocalBudgetDelete.md)
- [TrackedChangesEdFiLocalBudgetKey](docs/Model/TrackedChangesEdFiLocalBudgetKey.md)
- [TrackedChangesEdFiLocalBudgetKeyChange](docs/Model/TrackedChangesEdFiLocalBudgetKeyChange.md)
- [TrackedChangesEdFiLocalContractedStaffDelete](docs/Model/TrackedChangesEdFiLocalContractedStaffDelete.md)
- [TrackedChangesEdFiLocalContractedStaffKey](docs/Model/TrackedChangesEdFiLocalContractedStaffKey.md)
- [TrackedChangesEdFiLocalContractedStaffKeyChange](docs/Model/TrackedChangesEdFiLocalContractedStaffKeyChange.md)
- [TrackedChangesEdFiLocalEducationAgencyDelete](docs/Model/TrackedChangesEdFiLocalEducationAgencyDelete.md)
- [TrackedChangesEdFiLocalEducationAgencyKey](docs/Model/TrackedChangesEdFiLocalEducationAgencyKey.md)
- [TrackedChangesEdFiLocalEducationAgencyKeyChange](docs/Model/TrackedChangesEdFiLocalEducationAgencyKeyChange.md)
- [TrackedChangesEdFiLocalEncumbranceDelete](docs/Model/TrackedChangesEdFiLocalEncumbranceDelete.md)
- [TrackedChangesEdFiLocalEncumbranceKey](docs/Model/TrackedChangesEdFiLocalEncumbranceKey.md)
- [TrackedChangesEdFiLocalEncumbranceKeyChange](docs/Model/TrackedChangesEdFiLocalEncumbranceKeyChange.md)
- [TrackedChangesEdFiLocalPayrollDelete](docs/Model/TrackedChangesEdFiLocalPayrollDelete.md)
- [TrackedChangesEdFiLocalPayrollKey](docs/Model/TrackedChangesEdFiLocalPayrollKey.md)
- [TrackedChangesEdFiLocalPayrollKeyChange](docs/Model/TrackedChangesEdFiLocalPayrollKeyChange.md)
- [TrackedChangesEdFiLocationDelete](docs/Model/TrackedChangesEdFiLocationDelete.md)
- [TrackedChangesEdFiLocationKey](docs/Model/TrackedChangesEdFiLocationKey.md)
- [TrackedChangesEdFiLocationKeyChange](docs/Model/TrackedChangesEdFiLocationKeyChange.md)
- [TrackedChangesEdFiObjectDimensionDelete](docs/Model/TrackedChangesEdFiObjectDimensionDelete.md)
- [TrackedChangesEdFiObjectDimensionKey](docs/Model/TrackedChangesEdFiObjectDimensionKey.md)
- [TrackedChangesEdFiObjectDimensionKeyChange](docs/Model/TrackedChangesEdFiObjectDimensionKeyChange.md)
- [TrackedChangesEdFiObjectiveAssessmentDelete](docs/Model/TrackedChangesEdFiObjectiveAssessmentDelete.md)
- [TrackedChangesEdFiObjectiveAssessmentKey](docs/Model/TrackedChangesEdFiObjectiveAssessmentKey.md)
- [TrackedChangesEdFiObjectiveAssessmentKeyChange](docs/Model/TrackedChangesEdFiObjectiveAssessmentKeyChange.md)
- [TrackedChangesEdFiOpenStaffPositionDelete](docs/Model/TrackedChangesEdFiOpenStaffPositionDelete.md)
- [TrackedChangesEdFiOpenStaffPositionKey](docs/Model/TrackedChangesEdFiOpenStaffPositionKey.md)
- [TrackedChangesEdFiOpenStaffPositionKeyChange](docs/Model/TrackedChangesEdFiOpenStaffPositionKeyChange.md)
- [TrackedChangesEdFiOperationalUnitDimensionDelete](docs/Model/TrackedChangesEdFiOperationalUnitDimensionDelete.md)
- [TrackedChangesEdFiOperationalUnitDimensionKey](docs/Model/TrackedChangesEdFiOperationalUnitDimensionKey.md)
- [TrackedChangesEdFiOperationalUnitDimensionKeyChange](docs/Model/TrackedChangesEdFiOperationalUnitDimensionKeyChange.md)
- [TrackedChangesEdFiOrganizationDepartmentDelete](docs/Model/TrackedChangesEdFiOrganizationDepartmentDelete.md)
- [TrackedChangesEdFiOrganizationDepartmentKey](docs/Model/TrackedChangesEdFiOrganizationDepartmentKey.md)
- [TrackedChangesEdFiOrganizationDepartmentKeyChange](docs/Model/TrackedChangesEdFiOrganizationDepartmentKeyChange.md)
- [TrackedChangesEdFiPersonDelete](docs/Model/TrackedChangesEdFiPersonDelete.md)
- [TrackedChangesEdFiPersonKey](docs/Model/TrackedChangesEdFiPersonKey.md)
- [TrackedChangesEdFiPersonKeyChange](docs/Model/TrackedChangesEdFiPersonKeyChange.md)
- [TrackedChangesEdFiPostSecondaryEventDelete](docs/Model/TrackedChangesEdFiPostSecondaryEventDelete.md)
- [TrackedChangesEdFiPostSecondaryEventKey](docs/Model/TrackedChangesEdFiPostSecondaryEventKey.md)
- [TrackedChangesEdFiPostSecondaryEventKeyChange](docs/Model/TrackedChangesEdFiPostSecondaryEventKeyChange.md)
- [TrackedChangesEdFiPostSecondaryInstitutionDelete](docs/Model/TrackedChangesEdFiPostSecondaryInstitutionDelete.md)
- [TrackedChangesEdFiPostSecondaryInstitutionKey](docs/Model/TrackedChangesEdFiPostSecondaryInstitutionKey.md)
- [TrackedChangesEdFiPostSecondaryInstitutionKeyChange](docs/Model/TrackedChangesEdFiPostSecondaryInstitutionKeyChange.md)
- [TrackedChangesEdFiProgramDelete](docs/Model/TrackedChangesEdFiProgramDelete.md)
- [TrackedChangesEdFiProgramDimensionDelete](docs/Model/TrackedChangesEdFiProgramDimensionDelete.md)
- [TrackedChangesEdFiProgramDimensionKey](docs/Model/TrackedChangesEdFiProgramDimensionKey.md)
- [TrackedChangesEdFiProgramDimensionKeyChange](docs/Model/TrackedChangesEdFiProgramDimensionKeyChange.md)
- [TrackedChangesEdFiProgramEvaluationDelete](docs/Model/TrackedChangesEdFiProgramEvaluationDelete.md)
- [TrackedChangesEdFiProgramEvaluationElementDelete](docs/Model/TrackedChangesEdFiProgramEvaluationElementDelete.md)
- [TrackedChangesEdFiProgramEvaluationElementKey](docs/Model/TrackedChangesEdFiProgramEvaluationElementKey.md)
- [TrackedChangesEdFiProgramEvaluationElementKeyChange](docs/Model/TrackedChangesEdFiProgramEvaluationElementKeyChange.md)
- [TrackedChangesEdFiProgramEvaluationKey](docs/Model/TrackedChangesEdFiProgramEvaluationKey.md)
- [TrackedChangesEdFiProgramEvaluationKeyChange](docs/Model/TrackedChangesEdFiProgramEvaluationKeyChange.md)
- [TrackedChangesEdFiProgramEvaluationObjectiveDelete](docs/Model/TrackedChangesEdFiProgramEvaluationObjectiveDelete.md)
- [TrackedChangesEdFiProgramEvaluationObjectiveKey](docs/Model/TrackedChangesEdFiProgramEvaluationObjectiveKey.md)
- [TrackedChangesEdFiProgramEvaluationObjectiveKeyChange](docs/Model/TrackedChangesEdFiProgramEvaluationObjectiveKeyChange.md)
- [TrackedChangesEdFiProgramKey](docs/Model/TrackedChangesEdFiProgramKey.md)
- [TrackedChangesEdFiProgramKeyChange](docs/Model/TrackedChangesEdFiProgramKeyChange.md)
- [TrackedChangesEdFiProjectDimensionDelete](docs/Model/TrackedChangesEdFiProjectDimensionDelete.md)
- [TrackedChangesEdFiProjectDimensionKey](docs/Model/TrackedChangesEdFiProjectDimensionKey.md)
- [TrackedChangesEdFiProjectDimensionKeyChange](docs/Model/TrackedChangesEdFiProjectDimensionKeyChange.md)
- [TrackedChangesEdFiReportCardDelete](docs/Model/TrackedChangesEdFiReportCardDelete.md)
- [TrackedChangesEdFiReportCardKey](docs/Model/TrackedChangesEdFiReportCardKey.md)
- [TrackedChangesEdFiReportCardKeyChange](docs/Model/TrackedChangesEdFiReportCardKeyChange.md)
- [TrackedChangesEdFiRestraintEventDelete](docs/Model/TrackedChangesEdFiRestraintEventDelete.md)
- [TrackedChangesEdFiRestraintEventKey](docs/Model/TrackedChangesEdFiRestraintEventKey.md)
- [TrackedChangesEdFiRestraintEventKeyChange](docs/Model/TrackedChangesEdFiRestraintEventKeyChange.md)
- [TrackedChangesEdFiSchoolDelete](docs/Model/TrackedChangesEdFiSchoolDelete.md)
- [TrackedChangesEdFiSchoolKey](docs/Model/TrackedChangesEdFiSchoolKey.md)
- [TrackedChangesEdFiSchoolKeyChange](docs/Model/TrackedChangesEdFiSchoolKeyChange.md)
- [TrackedChangesEdFiSchoolYearTypeDelete](docs/Model/TrackedChangesEdFiSchoolYearTypeDelete.md)
- [TrackedChangesEdFiSchoolYearTypeKey](docs/Model/TrackedChangesEdFiSchoolYearTypeKey.md)
- [TrackedChangesEdFiSchoolYearTypeKeyChange](docs/Model/TrackedChangesEdFiSchoolYearTypeKeyChange.md)
- [TrackedChangesEdFiSectionAttendanceTakenEventDelete](docs/Model/TrackedChangesEdFiSectionAttendanceTakenEventDelete.md)
- [TrackedChangesEdFiSectionAttendanceTakenEventKey](docs/Model/TrackedChangesEdFiSectionAttendanceTakenEventKey.md)
- [TrackedChangesEdFiSectionAttendanceTakenEventKeyChange](docs/Model/TrackedChangesEdFiSectionAttendanceTakenEventKeyChange.md)
- [TrackedChangesEdFiSectionDelete](docs/Model/TrackedChangesEdFiSectionDelete.md)
- [TrackedChangesEdFiSectionKey](docs/Model/TrackedChangesEdFiSectionKey.md)
- [TrackedChangesEdFiSectionKeyChange](docs/Model/TrackedChangesEdFiSectionKeyChange.md)
- [TrackedChangesEdFiSessionDelete](docs/Model/TrackedChangesEdFiSessionDelete.md)
- [TrackedChangesEdFiSessionKey](docs/Model/TrackedChangesEdFiSessionKey.md)
- [TrackedChangesEdFiSessionKeyChange](docs/Model/TrackedChangesEdFiSessionKeyChange.md)
- [TrackedChangesEdFiSourceDimensionDelete](docs/Model/TrackedChangesEdFiSourceDimensionDelete.md)
- [TrackedChangesEdFiSourceDimensionKey](docs/Model/TrackedChangesEdFiSourceDimensionKey.md)
- [TrackedChangesEdFiSourceDimensionKeyChange](docs/Model/TrackedChangesEdFiSourceDimensionKeyChange.md)
- [TrackedChangesEdFiStaffAbsenceEventDelete](docs/Model/TrackedChangesEdFiStaffAbsenceEventDelete.md)
- [TrackedChangesEdFiStaffAbsenceEventKey](docs/Model/TrackedChangesEdFiStaffAbsenceEventKey.md)
- [TrackedChangesEdFiStaffAbsenceEventKeyChange](docs/Model/TrackedChangesEdFiStaffAbsenceEventKeyChange.md)
- [TrackedChangesEdFiStaffCohortAssociationDelete](docs/Model/TrackedChangesEdFiStaffCohortAssociationDelete.md)
- [TrackedChangesEdFiStaffCohortAssociationKey](docs/Model/TrackedChangesEdFiStaffCohortAssociationKey.md)
- [TrackedChangesEdFiStaffCohortAssociationKeyChange](docs/Model/TrackedChangesEdFiStaffCohortAssociationKeyChange.md)
- [TrackedChangesEdFiStaffDelete](docs/Model/TrackedChangesEdFiStaffDelete.md)
- [TrackedChangesEdFiStaffDisciplineIncidentAssociationDelete](docs/Model/TrackedChangesEdFiStaffDisciplineIncidentAssociationDelete.md)
- [TrackedChangesEdFiStaffDisciplineIncidentAssociationKey](docs/Model/TrackedChangesEdFiStaffDisciplineIncidentAssociationKey.md)
- [TrackedChangesEdFiStaffDisciplineIncidentAssociationKeyChange](docs/Model/TrackedChangesEdFiStaffDisciplineIncidentAssociationKeyChange.md)
- [TrackedChangesEdFiStaffEducationOrganizationAssignmentAssociationDelete](docs/Model/TrackedChangesEdFiStaffEducationOrganizationAssignmentAssociationDelete.md)
- [TrackedChangesEdFiStaffEducationOrganizationAssignmentAssociationKey](docs/Model/TrackedChangesEdFiStaffEducationOrganizationAssignmentAssociationKey.md)
- [TrackedChangesEdFiStaffEducationOrganizationAssignmentAssociationKeyChange](docs/Model/TrackedChangesEdFiStaffEducationOrganizationAssignmentAssociationKeyChange.md)
- [TrackedChangesEdFiStaffEducationOrganizationContactAssociationDelete](docs/Model/TrackedChangesEdFiStaffEducationOrganizationContactAssociationDelete.md)
- [TrackedChangesEdFiStaffEducationOrganizationContactAssociationKey](docs/Model/TrackedChangesEdFiStaffEducationOrganizationContactAssociationKey.md)
- [TrackedChangesEdFiStaffEducationOrganizationContactAssociationKeyChange](docs/Model/TrackedChangesEdFiStaffEducationOrganizationContactAssociationKeyChange.md)
- [TrackedChangesEdFiStaffEducationOrganizationEmploymentAssociationDelete](docs/Model/TrackedChangesEdFiStaffEducationOrganizationEmploymentAssociationDelete.md)
- [TrackedChangesEdFiStaffEducationOrganizationEmploymentAssociationKey](docs/Model/TrackedChangesEdFiStaffEducationOrganizationEmploymentAssociationKey.md)
- [TrackedChangesEdFiStaffEducationOrganizationEmploymentAssociationKeyChange](docs/Model/TrackedChangesEdFiStaffEducationOrganizationEmploymentAssociationKeyChange.md)
- [TrackedChangesEdFiStaffKey](docs/Model/TrackedChangesEdFiStaffKey.md)
- [TrackedChangesEdFiStaffKeyChange](docs/Model/TrackedChangesEdFiStaffKeyChange.md)
- [TrackedChangesEdFiStaffLeaveDelete](docs/Model/TrackedChangesEdFiStaffLeaveDelete.md)
- [TrackedChangesEdFiStaffLeaveKey](docs/Model/TrackedChangesEdFiStaffLeaveKey.md)
- [TrackedChangesEdFiStaffLeaveKeyChange](docs/Model/TrackedChangesEdFiStaffLeaveKeyChange.md)
- [TrackedChangesEdFiStaffProgramAssociationDelete](docs/Model/TrackedChangesEdFiStaffProgramAssociationDelete.md)
- [TrackedChangesEdFiStaffProgramAssociationKey](docs/Model/TrackedChangesEdFiStaffProgramAssociationKey.md)
- [TrackedChangesEdFiStaffProgramAssociationKeyChange](docs/Model/TrackedChangesEdFiStaffProgramAssociationKeyChange.md)
- [TrackedChangesEdFiStaffSchoolAssociationDelete](docs/Model/TrackedChangesEdFiStaffSchoolAssociationDelete.md)
- [TrackedChangesEdFiStaffSchoolAssociationKey](docs/Model/TrackedChangesEdFiStaffSchoolAssociationKey.md)
- [TrackedChangesEdFiStaffSchoolAssociationKeyChange](docs/Model/TrackedChangesEdFiStaffSchoolAssociationKeyChange.md)
- [TrackedChangesEdFiStaffSectionAssociationDelete](docs/Model/TrackedChangesEdFiStaffSectionAssociationDelete.md)
- [TrackedChangesEdFiStaffSectionAssociationKey](docs/Model/TrackedChangesEdFiStaffSectionAssociationKey.md)
- [TrackedChangesEdFiStaffSectionAssociationKeyChange](docs/Model/TrackedChangesEdFiStaffSectionAssociationKeyChange.md)
- [TrackedChangesEdFiStateEducationAgencyDelete](docs/Model/TrackedChangesEdFiStateEducationAgencyDelete.md)
- [TrackedChangesEdFiStateEducationAgencyKey](docs/Model/TrackedChangesEdFiStateEducationAgencyKey.md)
- [TrackedChangesEdFiStateEducationAgencyKeyChange](docs/Model/TrackedChangesEdFiStateEducationAgencyKeyChange.md)
- [TrackedChangesEdFiStudentAcademicRecordDelete](docs/Model/TrackedChangesEdFiStudentAcademicRecordDelete.md)
- [TrackedChangesEdFiStudentAcademicRecordKey](docs/Model/TrackedChangesEdFiStudentAcademicRecordKey.md)
- [TrackedChangesEdFiStudentAcademicRecordKeyChange](docs/Model/TrackedChangesEdFiStudentAcademicRecordKeyChange.md)
- [TrackedChangesEdFiStudentAssessmentDelete](docs/Model/TrackedChangesEdFiStudentAssessmentDelete.md)
- [TrackedChangesEdFiStudentAssessmentEducationOrganizationAssociationDelete](docs/Model/TrackedChangesEdFiStudentAssessmentEducationOrganizationAssociationDelete.md)
- [TrackedChangesEdFiStudentAssessmentEducationOrganizationAssociationKey](docs/Model/TrackedChangesEdFiStudentAssessmentEducationOrganizationAssociationKey.md)
- [TrackedChangesEdFiStudentAssessmentEducationOrganizationAssociationKeyChange](docs/Model/TrackedChangesEdFiStudentAssessmentEducationOrganizationAssociationKeyChange.md)
- [TrackedChangesEdFiStudentAssessmentKey](docs/Model/TrackedChangesEdFiStudentAssessmentKey.md)
- [TrackedChangesEdFiStudentAssessmentKeyChange](docs/Model/TrackedChangesEdFiStudentAssessmentKeyChange.md)
- [TrackedChangesEdFiStudentCTEProgramAssociationDelete](docs/Model/TrackedChangesEdFiStudentCTEProgramAssociationDelete.md)
- [TrackedChangesEdFiStudentCTEProgramAssociationKey](docs/Model/TrackedChangesEdFiStudentCTEProgramAssociationKey.md)
- [TrackedChangesEdFiStudentCTEProgramAssociationKeyChange](docs/Model/TrackedChangesEdFiStudentCTEProgramAssociationKeyChange.md)
- [TrackedChangesEdFiStudentCohortAssociationDelete](docs/Model/TrackedChangesEdFiStudentCohortAssociationDelete.md)
- [TrackedChangesEdFiStudentCohortAssociationKey](docs/Model/TrackedChangesEdFiStudentCohortAssociationKey.md)
- [TrackedChangesEdFiStudentCohortAssociationKeyChange](docs/Model/TrackedChangesEdFiStudentCohortAssociationKeyChange.md)
- [TrackedChangesEdFiStudentCompetencyObjectiveDelete](docs/Model/TrackedChangesEdFiStudentCompetencyObjectiveDelete.md)
- [TrackedChangesEdFiStudentCompetencyObjectiveKey](docs/Model/TrackedChangesEdFiStudentCompetencyObjectiveKey.md)
- [TrackedChangesEdFiStudentCompetencyObjectiveKeyChange](docs/Model/TrackedChangesEdFiStudentCompetencyObjectiveKeyChange.md)
- [TrackedChangesEdFiStudentContactAssociationDelete](docs/Model/TrackedChangesEdFiStudentContactAssociationDelete.md)
- [TrackedChangesEdFiStudentContactAssociationKey](docs/Model/TrackedChangesEdFiStudentContactAssociationKey.md)
- [TrackedChangesEdFiStudentContactAssociationKeyChange](docs/Model/TrackedChangesEdFiStudentContactAssociationKeyChange.md)
- [TrackedChangesEdFiStudentDelete](docs/Model/TrackedChangesEdFiStudentDelete.md)
- [TrackedChangesEdFiStudentDisciplineIncidentBehaviorAssociationDelete](docs/Model/TrackedChangesEdFiStudentDisciplineIncidentBehaviorAssociationDelete.md)
- [TrackedChangesEdFiStudentDisciplineIncidentBehaviorAssociationKey](docs/Model/TrackedChangesEdFiStudentDisciplineIncidentBehaviorAssociationKey.md)
- [TrackedChangesEdFiStudentDisciplineIncidentBehaviorAssociationKeyChange](docs/Model/TrackedChangesEdFiStudentDisciplineIncidentBehaviorAssociationKeyChange.md)
- [TrackedChangesEdFiStudentDisciplineIncidentNonOffenderAssociationDelete](docs/Model/TrackedChangesEdFiStudentDisciplineIncidentNonOffenderAssociationDelete.md)
- [TrackedChangesEdFiStudentDisciplineIncidentNonOffenderAssociationKey](docs/Model/TrackedChangesEdFiStudentDisciplineIncidentNonOffenderAssociationKey.md)
- [TrackedChangesEdFiStudentDisciplineIncidentNonOffenderAssociationKeyChange](docs/Model/TrackedChangesEdFiStudentDisciplineIncidentNonOffenderAssociationKeyChange.md)
- [TrackedChangesEdFiStudentEducationOrganizationAssociationDelete](docs/Model/TrackedChangesEdFiStudentEducationOrganizationAssociationDelete.md)
- [TrackedChangesEdFiStudentEducationOrganizationAssociationKey](docs/Model/TrackedChangesEdFiStudentEducationOrganizationAssociationKey.md)
- [TrackedChangesEdFiStudentEducationOrganizationAssociationKeyChange](docs/Model/TrackedChangesEdFiStudentEducationOrganizationAssociationKeyChange.md)
- [TrackedChangesEdFiStudentEducationOrganizationResponsibilityAssociationDelete](docs/Model/TrackedChangesEdFiStudentEducationOrganizationResponsibilityAssociationDelete.md)
- [TrackedChangesEdFiStudentEducationOrganizationResponsibilityAssociationKey](docs/Model/TrackedChangesEdFiStudentEducationOrganizationResponsibilityAssociationKey.md)
- [TrackedChangesEdFiStudentEducationOrganizationResponsibilityAssociationKeyChange](docs/Model/TrackedChangesEdFiStudentEducationOrganizationResponsibilityAssociationKeyChange.md)
- [TrackedChangesEdFiStudentGradebookEntryDelete](docs/Model/TrackedChangesEdFiStudentGradebookEntryDelete.md)
- [TrackedChangesEdFiStudentGradebookEntryKey](docs/Model/TrackedChangesEdFiStudentGradebookEntryKey.md)
- [TrackedChangesEdFiStudentGradebookEntryKeyChange](docs/Model/TrackedChangesEdFiStudentGradebookEntryKeyChange.md)
- [TrackedChangesEdFiStudentHomelessProgramAssociationDelete](docs/Model/TrackedChangesEdFiStudentHomelessProgramAssociationDelete.md)
- [TrackedChangesEdFiStudentHomelessProgramAssociationKey](docs/Model/TrackedChangesEdFiStudentHomelessProgramAssociationKey.md)
- [TrackedChangesEdFiStudentHomelessProgramAssociationKeyChange](docs/Model/TrackedChangesEdFiStudentHomelessProgramAssociationKeyChange.md)
- [TrackedChangesEdFiStudentInterventionAssociationDelete](docs/Model/TrackedChangesEdFiStudentInterventionAssociationDelete.md)
- [TrackedChangesEdFiStudentInterventionAssociationKey](docs/Model/TrackedChangesEdFiStudentInterventionAssociationKey.md)
- [TrackedChangesEdFiStudentInterventionAssociationKeyChange](docs/Model/TrackedChangesEdFiStudentInterventionAssociationKeyChange.md)
- [TrackedChangesEdFiStudentInterventionAttendanceEventDelete](docs/Model/TrackedChangesEdFiStudentInterventionAttendanceEventDelete.md)
- [TrackedChangesEdFiStudentInterventionAttendanceEventKey](docs/Model/TrackedChangesEdFiStudentInterventionAttendanceEventKey.md)
- [TrackedChangesEdFiStudentInterventionAttendanceEventKeyChange](docs/Model/TrackedChangesEdFiStudentInterventionAttendanceEventKeyChange.md)
- [TrackedChangesEdFiStudentKey](docs/Model/TrackedChangesEdFiStudentKey.md)
- [TrackedChangesEdFiStudentKeyChange](docs/Model/TrackedChangesEdFiStudentKeyChange.md)
- [TrackedChangesEdFiStudentLanguageInstructionProgramAssociationDelete](docs/Model/TrackedChangesEdFiStudentLanguageInstructionProgramAssociationDelete.md)
- [TrackedChangesEdFiStudentLanguageInstructionProgramAssociationKey](docs/Model/TrackedChangesEdFiStudentLanguageInstructionProgramAssociationKey.md)
- [TrackedChangesEdFiStudentLanguageInstructionProgramAssociationKeyChange](docs/Model/TrackedChangesEdFiStudentLanguageInstructionProgramAssociationKeyChange.md)
- [TrackedChangesEdFiStudentMigrantEducationProgramAssociationDelete](docs/Model/TrackedChangesEdFiStudentMigrantEducationProgramAssociationDelete.md)
- [TrackedChangesEdFiStudentMigrantEducationProgramAssociationKey](docs/Model/TrackedChangesEdFiStudentMigrantEducationProgramAssociationKey.md)
- [TrackedChangesEdFiStudentMigrantEducationProgramAssociationKeyChange](docs/Model/TrackedChangesEdFiStudentMigrantEducationProgramAssociationKeyChange.md)
- [TrackedChangesEdFiStudentNeglectedOrDelinquentProgramAssociationDelete](docs/Model/TrackedChangesEdFiStudentNeglectedOrDelinquentProgramAssociationDelete.md)
- [TrackedChangesEdFiStudentNeglectedOrDelinquentProgramAssociationKey](docs/Model/TrackedChangesEdFiStudentNeglectedOrDelinquentProgramAssociationKey.md)
- [TrackedChangesEdFiStudentNeglectedOrDelinquentProgramAssociationKeyChange](docs/Model/TrackedChangesEdFiStudentNeglectedOrDelinquentProgramAssociationKeyChange.md)
- [TrackedChangesEdFiStudentProgramAssociationDelete](docs/Model/TrackedChangesEdFiStudentProgramAssociationDelete.md)
- [TrackedChangesEdFiStudentProgramAssociationKey](docs/Model/TrackedChangesEdFiStudentProgramAssociationKey.md)
- [TrackedChangesEdFiStudentProgramAssociationKeyChange](docs/Model/TrackedChangesEdFiStudentProgramAssociationKeyChange.md)
- [TrackedChangesEdFiStudentProgramAttendanceEventDelete](docs/Model/TrackedChangesEdFiStudentProgramAttendanceEventDelete.md)
- [TrackedChangesEdFiStudentProgramAttendanceEventKey](docs/Model/TrackedChangesEdFiStudentProgramAttendanceEventKey.md)
- [TrackedChangesEdFiStudentProgramAttendanceEventKeyChange](docs/Model/TrackedChangesEdFiStudentProgramAttendanceEventKeyChange.md)
- [TrackedChangesEdFiStudentProgramEvaluationDelete](docs/Model/TrackedChangesEdFiStudentProgramEvaluationDelete.md)
- [TrackedChangesEdFiStudentProgramEvaluationKey](docs/Model/TrackedChangesEdFiStudentProgramEvaluationKey.md)
- [TrackedChangesEdFiStudentProgramEvaluationKeyChange](docs/Model/TrackedChangesEdFiStudentProgramEvaluationKeyChange.md)
- [TrackedChangesEdFiStudentSchoolAssociationDelete](docs/Model/TrackedChangesEdFiStudentSchoolAssociationDelete.md)
- [TrackedChangesEdFiStudentSchoolAssociationKey](docs/Model/TrackedChangesEdFiStudentSchoolAssociationKey.md)
- [TrackedChangesEdFiStudentSchoolAssociationKeyChange](docs/Model/TrackedChangesEdFiStudentSchoolAssociationKeyChange.md)
- [TrackedChangesEdFiStudentSchoolAttendanceEventDelete](docs/Model/TrackedChangesEdFiStudentSchoolAttendanceEventDelete.md)
- [TrackedChangesEdFiStudentSchoolAttendanceEventKey](docs/Model/TrackedChangesEdFiStudentSchoolAttendanceEventKey.md)
- [TrackedChangesEdFiStudentSchoolAttendanceEventKeyChange](docs/Model/TrackedChangesEdFiStudentSchoolAttendanceEventKeyChange.md)
- [TrackedChangesEdFiStudentSchoolFoodServiceProgramAssociationDelete](docs/Model/TrackedChangesEdFiStudentSchoolFoodServiceProgramAssociationDelete.md)
- [TrackedChangesEdFiStudentSchoolFoodServiceProgramAssociationKey](docs/Model/TrackedChangesEdFiStudentSchoolFoodServiceProgramAssociationKey.md)
- [TrackedChangesEdFiStudentSchoolFoodServiceProgramAssociationKeyChange](docs/Model/TrackedChangesEdFiStudentSchoolFoodServiceProgramAssociationKeyChange.md)
- [TrackedChangesEdFiStudentSectionAssociationDelete](docs/Model/TrackedChangesEdFiStudentSectionAssociationDelete.md)
- [TrackedChangesEdFiStudentSectionAssociationKey](docs/Model/TrackedChangesEdFiStudentSectionAssociationKey.md)
- [TrackedChangesEdFiStudentSectionAssociationKeyChange](docs/Model/TrackedChangesEdFiStudentSectionAssociationKeyChange.md)
- [TrackedChangesEdFiStudentSectionAttendanceEventDelete](docs/Model/TrackedChangesEdFiStudentSectionAttendanceEventDelete.md)
- [TrackedChangesEdFiStudentSectionAttendanceEventKey](docs/Model/TrackedChangesEdFiStudentSectionAttendanceEventKey.md)
- [TrackedChangesEdFiStudentSectionAttendanceEventKeyChange](docs/Model/TrackedChangesEdFiStudentSectionAttendanceEventKeyChange.md)
- [TrackedChangesEdFiStudentSpecialEducationProgramAssociationDelete](docs/Model/TrackedChangesEdFiStudentSpecialEducationProgramAssociationDelete.md)
- [TrackedChangesEdFiStudentSpecialEducationProgramAssociationKey](docs/Model/TrackedChangesEdFiStudentSpecialEducationProgramAssociationKey.md)
- [TrackedChangesEdFiStudentSpecialEducationProgramAssociationKeyChange](docs/Model/TrackedChangesEdFiStudentSpecialEducationProgramAssociationKeyChange.md)
- [TrackedChangesEdFiStudentSpecialEducationProgramEligibilityAssociationDelete](docs/Model/TrackedChangesEdFiStudentSpecialEducationProgramEligibilityAssociationDelete.md)
- [TrackedChangesEdFiStudentSpecialEducationProgramEligibilityAssociationKey](docs/Model/TrackedChangesEdFiStudentSpecialEducationProgramEligibilityAssociationKey.md)
- [TrackedChangesEdFiStudentSpecialEducationProgramEligibilityAssociationKeyChange](docs/Model/TrackedChangesEdFiStudentSpecialEducationProgramEligibilityAssociationKeyChange.md)
- [TrackedChangesEdFiStudentTitleIPartAProgramAssociationDelete](docs/Model/TrackedChangesEdFiStudentTitleIPartAProgramAssociationDelete.md)
- [TrackedChangesEdFiStudentTitleIPartAProgramAssociationKey](docs/Model/TrackedChangesEdFiStudentTitleIPartAProgramAssociationKey.md)
- [TrackedChangesEdFiStudentTitleIPartAProgramAssociationKeyChange](docs/Model/TrackedChangesEdFiStudentTitleIPartAProgramAssociationKeyChange.md)
- [TrackedChangesEdFiSurveyCourseAssociationDelete](docs/Model/TrackedChangesEdFiSurveyCourseAssociationDelete.md)
- [TrackedChangesEdFiSurveyCourseAssociationKey](docs/Model/TrackedChangesEdFiSurveyCourseAssociationKey.md)
- [TrackedChangesEdFiSurveyCourseAssociationKeyChange](docs/Model/TrackedChangesEdFiSurveyCourseAssociationKeyChange.md)
- [TrackedChangesEdFiSurveyDelete](docs/Model/TrackedChangesEdFiSurveyDelete.md)
- [TrackedChangesEdFiSurveyKey](docs/Model/TrackedChangesEdFiSurveyKey.md)
- [TrackedChangesEdFiSurveyKeyChange](docs/Model/TrackedChangesEdFiSurveyKeyChange.md)
- [TrackedChangesEdFiSurveyProgramAssociationDelete](docs/Model/TrackedChangesEdFiSurveyProgramAssociationDelete.md)
- [TrackedChangesEdFiSurveyProgramAssociationKey](docs/Model/TrackedChangesEdFiSurveyProgramAssociationKey.md)
- [TrackedChangesEdFiSurveyProgramAssociationKeyChange](docs/Model/TrackedChangesEdFiSurveyProgramAssociationKeyChange.md)
- [TrackedChangesEdFiSurveyQuestionDelete](docs/Model/TrackedChangesEdFiSurveyQuestionDelete.md)
- [TrackedChangesEdFiSurveyQuestionKey](docs/Model/TrackedChangesEdFiSurveyQuestionKey.md)
- [TrackedChangesEdFiSurveyQuestionKeyChange](docs/Model/TrackedChangesEdFiSurveyQuestionKeyChange.md)
- [TrackedChangesEdFiSurveyQuestionResponseDelete](docs/Model/TrackedChangesEdFiSurveyQuestionResponseDelete.md)
- [TrackedChangesEdFiSurveyQuestionResponseKey](docs/Model/TrackedChangesEdFiSurveyQuestionResponseKey.md)
- [TrackedChangesEdFiSurveyQuestionResponseKeyChange](docs/Model/TrackedChangesEdFiSurveyQuestionResponseKeyChange.md)
- [TrackedChangesEdFiSurveyResponseDelete](docs/Model/TrackedChangesEdFiSurveyResponseDelete.md)
- [TrackedChangesEdFiSurveyResponseEducationOrganizationTargetAssociationDelete](docs/Model/TrackedChangesEdFiSurveyResponseEducationOrganizationTargetAssociationDelete.md)
- [TrackedChangesEdFiSurveyResponseEducationOrganizationTargetAssociationKey](docs/Model/TrackedChangesEdFiSurveyResponseEducationOrganizationTargetAssociationKey.md)
- [TrackedChangesEdFiSurveyResponseEducationOrganizationTargetAssociationKeyChange](docs/Model/TrackedChangesEdFiSurveyResponseEducationOrganizationTargetAssociationKeyChange.md)
- [TrackedChangesEdFiSurveyResponseKey](docs/Model/TrackedChangesEdFiSurveyResponseKey.md)
- [TrackedChangesEdFiSurveyResponseKeyChange](docs/Model/TrackedChangesEdFiSurveyResponseKeyChange.md)
- [TrackedChangesEdFiSurveyResponseStaffTargetAssociationDelete](docs/Model/TrackedChangesEdFiSurveyResponseStaffTargetAssociationDelete.md)
- [TrackedChangesEdFiSurveyResponseStaffTargetAssociationKey](docs/Model/TrackedChangesEdFiSurveyResponseStaffTargetAssociationKey.md)
- [TrackedChangesEdFiSurveyResponseStaffTargetAssociationKeyChange](docs/Model/TrackedChangesEdFiSurveyResponseStaffTargetAssociationKeyChange.md)
- [TrackedChangesEdFiSurveySectionAssociationDelete](docs/Model/TrackedChangesEdFiSurveySectionAssociationDelete.md)
- [TrackedChangesEdFiSurveySectionAssociationKey](docs/Model/TrackedChangesEdFiSurveySectionAssociationKey.md)
- [TrackedChangesEdFiSurveySectionAssociationKeyChange](docs/Model/TrackedChangesEdFiSurveySectionAssociationKeyChange.md)
- [TrackedChangesEdFiSurveySectionDelete](docs/Model/TrackedChangesEdFiSurveySectionDelete.md)
- [TrackedChangesEdFiSurveySectionKey](docs/Model/TrackedChangesEdFiSurveySectionKey.md)
- [TrackedChangesEdFiSurveySectionKeyChange](docs/Model/TrackedChangesEdFiSurveySectionKeyChange.md)
- [TrackedChangesEdFiSurveySectionResponseDelete](docs/Model/TrackedChangesEdFiSurveySectionResponseDelete.md)
- [TrackedChangesEdFiSurveySectionResponseEducationOrganizationTargetAssociationDelete](docs/Model/TrackedChangesEdFiSurveySectionResponseEducationOrganizationTargetAssociationDelete.md)
- [TrackedChangesEdFiSurveySectionResponseEducationOrganizationTargetAssociationKey](docs/Model/TrackedChangesEdFiSurveySectionResponseEducationOrganizationTargetAssociationKey.md)
- [TrackedChangesEdFiSurveySectionResponseEducationOrganizationTargetAssociationKeyChange](docs/Model/TrackedChangesEdFiSurveySectionResponseEducationOrganizationTargetAssociationKeyChange.md)
- [TrackedChangesEdFiSurveySectionResponseKey](docs/Model/TrackedChangesEdFiSurveySectionResponseKey.md)
- [TrackedChangesEdFiSurveySectionResponseKeyChange](docs/Model/TrackedChangesEdFiSurveySectionResponseKeyChange.md)
- [TrackedChangesEdFiSurveySectionResponseStaffTargetAssociationDelete](docs/Model/TrackedChangesEdFiSurveySectionResponseStaffTargetAssociationDelete.md)
- [TrackedChangesEdFiSurveySectionResponseStaffTargetAssociationKey](docs/Model/TrackedChangesEdFiSurveySectionResponseStaffTargetAssociationKey.md)
- [TrackedChangesEdFiSurveySectionResponseStaffTargetAssociationKeyChange](docs/Model/TrackedChangesEdFiSurveySectionResponseStaffTargetAssociationKeyChange.md)
- [TrackedChangesTpdmCandidateDelete](docs/Model/TrackedChangesTpdmCandidateDelete.md)
- [TrackedChangesTpdmCandidateEducatorPreparationProgramAssociationDelete](docs/Model/TrackedChangesTpdmCandidateEducatorPreparationProgramAssociationDelete.md)
- [TrackedChangesTpdmCandidateEducatorPreparationProgramAssociationKey](docs/Model/TrackedChangesTpdmCandidateEducatorPreparationProgramAssociationKey.md)
- [TrackedChangesTpdmCandidateEducatorPreparationProgramAssociationKeyChange](docs/Model/TrackedChangesTpdmCandidateEducatorPreparationProgramAssociationKeyChange.md)
- [TrackedChangesTpdmCandidateKey](docs/Model/TrackedChangesTpdmCandidateKey.md)
- [TrackedChangesTpdmCandidateKeyChange](docs/Model/TrackedChangesTpdmCandidateKeyChange.md)
- [TrackedChangesTpdmEducatorPreparationProgramDelete](docs/Model/TrackedChangesTpdmEducatorPreparationProgramDelete.md)
- [TrackedChangesTpdmEducatorPreparationProgramKey](docs/Model/TrackedChangesTpdmEducatorPreparationProgramKey.md)
- [TrackedChangesTpdmEducatorPreparationProgramKeyChange](docs/Model/TrackedChangesTpdmEducatorPreparationProgramKeyChange.md)
- [TrackedChangesTpdmEvaluationDelete](docs/Model/TrackedChangesTpdmEvaluationDelete.md)
- [TrackedChangesTpdmEvaluationElementDelete](docs/Model/TrackedChangesTpdmEvaluationElementDelete.md)
- [TrackedChangesTpdmEvaluationElementKey](docs/Model/TrackedChangesTpdmEvaluationElementKey.md)
- [TrackedChangesTpdmEvaluationElementKeyChange](docs/Model/TrackedChangesTpdmEvaluationElementKeyChange.md)
- [TrackedChangesTpdmEvaluationElementRatingDelete](docs/Model/TrackedChangesTpdmEvaluationElementRatingDelete.md)
- [TrackedChangesTpdmEvaluationElementRatingKey](docs/Model/TrackedChangesTpdmEvaluationElementRatingKey.md)
- [TrackedChangesTpdmEvaluationElementRatingKeyChange](docs/Model/TrackedChangesTpdmEvaluationElementRatingKeyChange.md)
- [TrackedChangesTpdmEvaluationKey](docs/Model/TrackedChangesTpdmEvaluationKey.md)
- [TrackedChangesTpdmEvaluationKeyChange](docs/Model/TrackedChangesTpdmEvaluationKeyChange.md)
- [TrackedChangesTpdmEvaluationObjectiveDelete](docs/Model/TrackedChangesTpdmEvaluationObjectiveDelete.md)
- [TrackedChangesTpdmEvaluationObjectiveKey](docs/Model/TrackedChangesTpdmEvaluationObjectiveKey.md)
- [TrackedChangesTpdmEvaluationObjectiveKeyChange](docs/Model/TrackedChangesTpdmEvaluationObjectiveKeyChange.md)
- [TrackedChangesTpdmEvaluationObjectiveRatingDelete](docs/Model/TrackedChangesTpdmEvaluationObjectiveRatingDelete.md)
- [TrackedChangesTpdmEvaluationObjectiveRatingKey](docs/Model/TrackedChangesTpdmEvaluationObjectiveRatingKey.md)
- [TrackedChangesTpdmEvaluationObjectiveRatingKeyChange](docs/Model/TrackedChangesTpdmEvaluationObjectiveRatingKeyChange.md)
- [TrackedChangesTpdmEvaluationRatingDelete](docs/Model/TrackedChangesTpdmEvaluationRatingDelete.md)
- [TrackedChangesTpdmEvaluationRatingKey](docs/Model/TrackedChangesTpdmEvaluationRatingKey.md)
- [TrackedChangesTpdmEvaluationRatingKeyChange](docs/Model/TrackedChangesTpdmEvaluationRatingKeyChange.md)
- [TrackedChangesTpdmFinancialAidDelete](docs/Model/TrackedChangesTpdmFinancialAidDelete.md)
- [TrackedChangesTpdmFinancialAidKey](docs/Model/TrackedChangesTpdmFinancialAidKey.md)
- [TrackedChangesTpdmFinancialAidKeyChange](docs/Model/TrackedChangesTpdmFinancialAidKeyChange.md)
- [TrackedChangesTpdmPerformanceEvaluationDelete](docs/Model/TrackedChangesTpdmPerformanceEvaluationDelete.md)
- [TrackedChangesTpdmPerformanceEvaluationKey](docs/Model/TrackedChangesTpdmPerformanceEvaluationKey.md)
- [TrackedChangesTpdmPerformanceEvaluationKeyChange](docs/Model/TrackedChangesTpdmPerformanceEvaluationKeyChange.md)
- [TrackedChangesTpdmPerformanceEvaluationRatingDelete](docs/Model/TrackedChangesTpdmPerformanceEvaluationRatingDelete.md)
- [TrackedChangesTpdmPerformanceEvaluationRatingKey](docs/Model/TrackedChangesTpdmPerformanceEvaluationRatingKey.md)
- [TrackedChangesTpdmPerformanceEvaluationRatingKeyChange](docs/Model/TrackedChangesTpdmPerformanceEvaluationRatingKeyChange.md)
- [TrackedChangesTpdmRubricDimensionDelete](docs/Model/TrackedChangesTpdmRubricDimensionDelete.md)
- [TrackedChangesTpdmRubricDimensionKey](docs/Model/TrackedChangesTpdmRubricDimensionKey.md)
- [TrackedChangesTpdmRubricDimensionKeyChange](docs/Model/TrackedChangesTpdmRubricDimensionKeyChange.md)
- [TrackedChangesTpdmSurveyResponsePersonTargetAssociationDelete](docs/Model/TrackedChangesTpdmSurveyResponsePersonTargetAssociationDelete.md)
- [TrackedChangesTpdmSurveyResponsePersonTargetAssociationKey](docs/Model/TrackedChangesTpdmSurveyResponsePersonTargetAssociationKey.md)
- [TrackedChangesTpdmSurveyResponsePersonTargetAssociationKeyChange](docs/Model/TrackedChangesTpdmSurveyResponsePersonTargetAssociationKeyChange.md)
- [TrackedChangesTpdmSurveySectionResponsePersonTargetAssociationDelete](docs/Model/TrackedChangesTpdmSurveySectionResponsePersonTargetAssociationDelete.md)
- [TrackedChangesTpdmSurveySectionResponsePersonTargetAssociationKey](docs/Model/TrackedChangesTpdmSurveySectionResponsePersonTargetAssociationKey.md)
- [TrackedChangesTpdmSurveySectionResponsePersonTargetAssociationKeyChange](docs/Model/TrackedChangesTpdmSurveySectionResponsePersonTargetAssociationKeyChange.md)

## Authorization

Authentication schemes defined for the API:
### oauth2_client_credentials

- **Type**: `OAuth`
- **Flow**: `application`
- **Authorization URL**: ``
- **Scopes**: N/A

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `3`
    - Generator version: `7.9.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
