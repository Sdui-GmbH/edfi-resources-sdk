# # EdFiGraduationPlan

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**graduation_plan_type_descriptor** | **string** | The type of academic plan the student is following for graduation. |
**education_organization_reference** | [**\Resources\Model\EdFiEducationOrganizationReference**](EdFiEducationOrganizationReference.md) |  |
**graduation_school_year_type_reference** | [**\Resources\Model\EdFiSchoolYearTypeReference**](EdFiSchoolYearTypeReference.md) |  |
**credits_by_courses** | [**\Resources\Model\EdFiGraduationPlanCreditsByCourse[]**](EdFiGraduationPlanCreditsByCourse.md) | An unordered collection of graduationPlanCreditsByCourses. The total credits required for graduation by taking a specific course, or by taking one or more from a set of courses. | [optional]
**credits_by_credit_categories** | [**\Resources\Model\EdFiGraduationPlanCreditsByCreditCategory[]**](EdFiGraduationPlanCreditsByCreditCategory.md) | An unordered collection of graduationPlanCreditsByCreditCategories. The total credits required for graduation based on the credit category. | [optional]
**credits_by_subjects** | [**\Resources\Model\EdFiGraduationPlanCreditsBySubject[]**](EdFiGraduationPlanCreditsBySubject.md) | An unordered collection of graduationPlanCreditsBySubjects. The total credits required in subject to graduate. Only those courses identified as a high school course requirement are eligible to meet subject credit requirements. | [optional]
**individual_plan** | **bool** | An indicator of whether the graduation plan is tailored for an individual. | [optional]
**required_assessments** | [**\Resources\Model\EdFiGraduationPlanRequiredAssessment[]**](EdFiGraduationPlanRequiredAssessment.md) | An unordered collection of graduationPlanRequiredAssessments. The assessments and associated required score and performance level needed to satisfy graduation requirements. | [optional]
**total_required_credit_conversion** | **float** | Conversion factor that when multiplied by the number of credits is equivalent to Carnegie units. | [optional]
**total_required_credits** | **float** | The value of credits or units of value awarded for the completion of a course. |
**total_required_credit_type_descriptor** | **string** | The type of credits or units of value awarded for the completion of a course. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
