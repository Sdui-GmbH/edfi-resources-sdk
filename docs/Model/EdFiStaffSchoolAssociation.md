# # EdFiStaffSchoolAssociation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**program_assignment_descriptor** | **string** | The name of the program for which the individual is assigned. |
**calendar_reference** | [**\OpenAPI\Client\Model\EdFiCalendarReference**](EdFiCalendarReference.md) |  | [optional]
**school_reference** | [**\OpenAPI\Client\Model\EdFiSchoolReference**](EdFiSchoolReference.md) |  |
**school_year_type_reference** | [**\OpenAPI\Client\Model\EdFiSchoolYearTypeReference**](EdFiSchoolYearTypeReference.md) |  | [optional]
**staff_reference** | [**\OpenAPI\Client\Model\EdFiStaffReference**](EdFiStaffReference.md) |  |
**academic_subjects** | [**\OpenAPI\Client\Model\EdFiStaffSchoolAssociationAcademicSubject[]**](EdFiStaffSchoolAssociationAcademicSubject.md) | An unordered collection of staffSchoolAssociationAcademicSubjects. The academic subjects the individual is eligible to teach. | [optional]
**grade_levels** | [**\OpenAPI\Client\Model\EdFiStaffSchoolAssociationGradeLevel[]**](EdFiStaffSchoolAssociationGradeLevel.md) | An unordered collection of staffSchoolAssociationGradeLevels. The grade levels the individual is eligible to teach. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
