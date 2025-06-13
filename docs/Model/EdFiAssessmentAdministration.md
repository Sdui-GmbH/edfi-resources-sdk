# # EdFiAssessmentAdministration

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**administration_identifier** | **string** | The title or name of the assessment in the context of its administration. |
**assessment_reference** | [**\Resources\Model\EdFiAssessmentReference**](EdFiAssessmentReference.md) |  |
**assigning_education_organization_reference** | [**\Resources\Model\EdFiEducationOrganizationReference**](EdFiEducationOrganizationReference.md) |  |
**assessment_battery_parts** | [**\Resources\Model\EdFiAssessmentAdministrationAssessmentBatteryPart[]**](EdFiAssessmentAdministrationAssessmentBatteryPart.md) | An unordered collection of assessmentAdministrationAssessmentBatteryParts. A reference to the parts of the assessment battery that are offered in this administration of the assessment. | [optional]
**periods** | [**\Resources\Model\EdFiAssessmentAdministrationPeriod[]**](EdFiAssessmentAdministrationPeriod.md) | An unordered collection of assessmentAdministrationPeriods. The anticipated dates for the assessment or administration window. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
