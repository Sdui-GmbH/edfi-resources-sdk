# # EdFiStudentSpecialEducationProgramAssociationSpecialEducationProgramService

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**special_education_program_service_descriptor** | **string** | Indicates the service being provided to the student by the special education program. |
**primary_indicator** | **bool** | True if service is a primary service. | [optional]
**service_begin_date** | **\DateTime** | First date the student was in this option for the current school year.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines. | [optional]
**service_end_date** | **\DateTime** | Last date the student was in this option for the current school year.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines. | [optional]
**providers** | [**\Resources\Model\EdFiStudentSpecialEducationProgramAssociationSpecialEducationProgramServiceProvider[]**](EdFiStudentSpecialEducationProgramAssociationSpecialEducationProgramServiceProvider.md) | An unordered collection of studentSpecialEducationProgramAssociationSpecialEducationProgramServiceProviders. The staff providing the service to the student. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
