# # EdFiStaffEducationOrganizationEmploymentAssociation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**employment_status_descriptor** | **string** | Reflects the type of employment or contract. |
**hire_date** | **\DateTime** | The month, day, and year on which an individual was hired for a position.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines. |
**credential_reference** | [**\Resources\Model\EdFiCredentialReference**](EdFiCredentialReference.md) |  | [optional]
**education_organization_reference** | [**\Resources\Model\EdFiEducationOrganizationReference**](EdFiEducationOrganizationReference.md) |  |
**staff_reference** | [**\Resources\Model\EdFiStaffReference**](EdFiStaffReference.md) |  |
**annual_wage** | **float** | Annual wage associated with the employment position being reported. | [optional]
**department** | **string** | The department or suborganization the employee/contractor is associated with in the education organization. | [optional]
**end_date** | **\DateTime** | The month, day, and year on which a contract between an individual and a governing authority ends or is terminated under the provisions of the contract (or the date on which the agreement is made invalid).  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines. | [optional]
**full_time_equivalency** | **float** | The ratio between the hours of work expected in a position and the hours of work normally expected in a full-time position in the same setting. | [optional]
**hourly_wage** | **float** | Hourly wage associated with the employment position being reported. | [optional]
**offer_date** | **\DateTime** | Date at which the staff member was made an official offer for this employment. | [optional]
**separation_descriptor** | **string** | Type of employment separation. | [optional]
**separation_reason_descriptor** | **string** | Reason for terminating the employment. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
