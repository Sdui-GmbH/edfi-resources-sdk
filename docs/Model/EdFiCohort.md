# # EdFiCohort

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**cohort_identifier** | **string** | The name or ID for the cohort. |
**education_organization_reference** | [**\Resources\Model\EdFiEducationOrganizationReference**](EdFiEducationOrganizationReference.md) |  |
**academic_subject_descriptor** | **string** | The academic subject associated with an academic intervention. | [optional]
**cohort_description** | **string** | The description of the cohort and its purpose. | [optional]
**cohort_scope_descriptor** | **string** | The scope of cohort (e.g., school, district, classroom). | [optional]
**cohort_type_descriptor** | **string** | The type of cohort (e.g., academic intervention, classroom breakout). |
**programs** | [**\Resources\Model\EdFiCohortProgram[]**](EdFiCohortProgram.md) | An unordered collection of cohortPrograms. The (optional) program associated with this cohort (e.g., special education). | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
