# # EdFiStudentHealth

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**education_organization_reference** | [**\Resources\Model\EdFiEducationOrganizationReference**](EdFiEducationOrganizationReference.md) |  |
**student_reference** | [**\Resources\Model\EdFiStudentReference**](EdFiStudentReference.md) |  |
**additional_immunizations** | [**\Resources\Model\EdFiStudentHealthAdditionalImmunization[]**](EdFiStudentHealthAdditionalImmunization.md) | An unordered collection of studentHealthAdditionalImmunizations. A record of additional immunizations satisfactorily received and reported. | [optional]
**as_of_date** | **\DateTime** | Date of last update of the student&#39;s health record. |
**non_medical_immunization_exemption_date** | **\DateTime** | The year, month and day of the nonmedical exemption from vaccination claimed by the student&#39;s parent or guardian. | [optional]
**non_medical_immunization_exemption_descriptor** | **string** | The type of nonmedical exemption from vaccination claimed by the student&#39;s parent or guardian. | [optional]
**required_immunizations** | [**\Resources\Model\EdFiStudentHealthRequiredImmunization[]**](EdFiStudentHealthRequiredImmunization.md) | An unordered collection of studentHealthRequiredImmunizations. A record of the immunizations satisfactorily  received for those recommended to protect the student against vaccine-preventable diseases. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
