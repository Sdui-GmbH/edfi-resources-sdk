# # EdFiAssessment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**academic_subjects** | [**\Resources\Model\EdFiAssessmentAcademicSubject[]**](EdFiAssessmentAcademicSubject.md) | An unordered collection of assessmentAcademicSubjects. The description of the content or subject area (e.g., arts, mathematics, reading, stenography, or a foreign language) of an assessment. |
**assessment_identifier** | **string** | A unique number or alphanumeric code assigned to an assessment. |
**namespace** | **string** | Namespace for the assessment. |
**education_organization_reference** | [**\Resources\Model\EdFiEducationOrganizationReference**](EdFiEducationOrganizationReference.md) |  | [optional]
**adaptive_assessment** | **bool** | Indicates that the assessment is adaptive. | [optional]
**assessed_grade_levels** | [**\Resources\Model\EdFiAssessmentAssessedGradeLevel[]**](EdFiAssessmentAssessedGradeLevel.md) | An unordered collection of assessmentAssessedGradeLevels. The grade level(s) for which an assessment is designed. The semantics of null is assumed to mean that the assessment is not associated with any grade level. | [optional]
**assessment_category_descriptor** | **string** | The category of an assessment based on format and content. | [optional]
**assessment_family** | **string** | The assessment family this assessment is a member of. | [optional]
**assessment_form** | **string** | Identifies the form of the assessment, for example a regular versus makeup form, multiple choice versus constructed response, etc. | [optional]
**assessment_title** | **string** | The title or name of the assessment. |
**assessment_version** | **int** | The version identifier for the assessment. | [optional]
**content_standard** | [**\Resources\Model\EdFiAssessmentContentStandard**](EdFiAssessmentContentStandard.md) |  | [optional]
**identification_codes** | [**\Resources\Model\EdFiAssessmentIdentificationCode[]**](EdFiAssessmentIdentificationCode.md) | An unordered collection of assessmentIdentificationCodes. A unique number or alphanumeric code assigned to an assessment by a school, school system, a state, or other agency or entity. | [optional]
**languages** | [**\Resources\Model\EdFiAssessmentLanguage[]**](EdFiAssessmentLanguage.md) | An unordered collection of assessmentLanguages. An indication of the languages in which the assessment is designed. | [optional]
**max_raw_score** | **float** | The maximum raw score achievable across all assessment items that are correct and scored at the maximum. | [optional]
**nomenclature** | **string** | Reflects the specific nomenclature used for assessment. | [optional]
**performance_levels** | [**\Resources\Model\EdFiAssessmentPerformanceLevel[]**](EdFiAssessmentPerformanceLevel.md) | An unordered collection of assessmentPerformanceLevels. Definition of the performance levels and the associated cut scores. Three styles are supported: 1. Specification of performance level by minimum and maximum score, 2. Specification of performance level by cut score, using only minimum score, 3. Specification of performance level without any mapping to scores. | [optional]
**periods** | [**\Resources\Model\EdFiAssessmentPeriod[]**](EdFiAssessmentPeriod.md) | An unordered collection of assessmentPeriods. The period or window in which an assessment is supposed to be administered. | [optional]
**platform_types** | [**\Resources\Model\EdFiAssessmentPlatformType[]**](EdFiAssessmentPlatformType.md) | An unordered collection of assessmentPlatformTypes. The platforms with which the assessment may be delivered. | [optional]
**programs** | [**\Resources\Model\EdFiAssessmentProgram[]**](EdFiAssessmentProgram.md) | An unordered collection of assessmentPrograms. The programs associated with the assessment. | [optional]
**revision_date** | **\DateTime** | The month, day, and year that the conceptual design for the assessment was most recently revised substantially. | [optional]
**scores** | [**\Resources\Model\EdFiAssessmentScore[]**](EdFiAssessmentScore.md) | An unordered collection of assessmentScores. Definition of the scores to be expected from this assessment. | [optional]
**sections** | [**\Resources\Model\EdFiAssessmentSection[]**](EdFiAssessmentSection.md) | An unordered collection of assessmentSections. The Section(s) to which the assessment is associated. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
