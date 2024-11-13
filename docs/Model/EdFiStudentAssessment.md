# # EdFiStudentAssessment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**student_assessment_identifier** | **string** | A unique number or alphanumeric code assigned to an assessment administered to a student. |
**assessment_reference** | [**\Resources\Model\EdFiAssessmentReference**](EdFiAssessmentReference.md) |  |
**reported_school_reference** | [**\Resources\Model\EdFiSchoolReference**](EdFiSchoolReference.md) |  | [optional]
**school_year_type_reference** | [**\Resources\Model\EdFiSchoolYearTypeReference**](EdFiSchoolYearTypeReference.md) |  | [optional]
**student_reference** | [**\Resources\Model\EdFiStudentReference**](EdFiStudentReference.md) |  |
**accommodations** | [**\Resources\Model\EdFiStudentAssessmentAccommodation[]**](EdFiStudentAssessmentAccommodation.md) | An unordered collection of studentAssessmentAccommodations. The specific type of special variation used in how an examination is presented, how it is administered, or how the test taker is allowed to respond. This generally refers to changes that do not substantially alter what the examination measures. The proper use of accommodations does not substantially change academic level or performance criteria. | [optional]
**administration_date** | **\DateTime** | The date and time an assessment was completed by the student. The use of ISO-8601 formats with a timezone designator (UTC or time offset) is recommended in order to prevent ambiguity due to time zones. | [optional]
**administration_end_date** | **\DateTime** | The date and time an assessment administration ended. | [optional]
**administration_environment_descriptor** | **string** | The environment in which the test was administered. | [optional]
**administration_language_descriptor** | **string** | The language in which an assessment is written and/or administered. | [optional]
**assessed_minutes** | **int** | Reported time student was assessed in minutes. | [optional]
**event_circumstance_descriptor** | **string** | An unusual event occurred during the administration of the assessment. This could include fire alarm, student became ill, etc. | [optional]
**event_description** | **string** | Describes special events that occur before during or after the assessment session that may impact use of results. | [optional]
**items** | [**\Resources\Model\EdFiStudentAssessmentItem[]**](EdFiStudentAssessmentItem.md) | An unordered collection of studentAssessmentItems. The student&#39;s response to an assessment item and the item-level scores such as correct, incorrect, or met standard. | [optional]
**performance_levels** | [**\Resources\Model\EdFiStudentAssessmentPerformanceLevel[]**](EdFiStudentAssessmentPerformanceLevel.md) | An unordered collection of studentAssessmentPerformanceLevels. The performance level(s) achieved for the student assessment. | [optional]
**period** | [**\Resources\Model\EdFiStudentAssessmentPeriod**](EdFiStudentAssessmentPeriod.md) |  | [optional]
**platform_type_descriptor** | **string** | The platform with which the assessment was delivered to the student during the assessment session. | [optional]
**reason_not_tested_descriptor** | **string** | The primary reason student is not tested. | [optional]
**reported_school_identifier** | **string** | A reported school identifier for the school the enrollment at the time of the assessment used when the assigned SchoolId is not known by the assessment vendor. | [optional]
**retest_indicator_descriptor** | **string** | Indicator if the test was a retake. | [optional]
**score_results** | [**\Resources\Model\EdFiStudentAssessmentScoreResult[]**](EdFiStudentAssessmentScoreResult.md) | An unordered collection of studentAssessmentScoreResults. A meaningful score or statistical expression of the performance of an individual. The results can be expressed as a number, percentile, range, level, etc. | [optional]
**serial_number** | **string** | The unique number for the assessment form or answer document. | [optional]
**student_objective_assessments** | [**\Resources\Model\EdFiStudentAssessmentStudentObjectiveAssessment[]**](EdFiStudentAssessmentStudentObjectiveAssessment.md) | An unordered collection of studentAssessmentStudentObjectiveAssessments. The student&#39;s score and/or performance levels earned for an objective assessment. | [optional]
**when_assessed_grade_level_descriptor** | **string** | The grade level of a student when assessed. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
