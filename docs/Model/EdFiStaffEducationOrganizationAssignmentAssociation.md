# # EdFiStaffEducationOrganizationAssignmentAssociation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**begin_date** | **\DateTime** | Month, day, and year of the start or effective date of a staff member&#39;s employment, contract, or relationship with the education organization.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines. |
**staff_classification_descriptor** | **string** | The titles of employment, official status, or rank of education staff. |
**credential_reference** | [**\Resources\Model\EdFiCredentialReference**](EdFiCredentialReference.md) |  | [optional]
**education_organization_reference** | [**\Resources\Model\EdFiEducationOrganizationReference**](EdFiEducationOrganizationReference.md) |  |
**employment_staff_education_organization_employment_association_reference** | [**\Resources\Model\EdFiStaffEducationOrganizationEmploymentAssociationReference**](EdFiStaffEducationOrganizationEmploymentAssociationReference.md) |  | [optional]
**staff_reference** | [**\Resources\Model\EdFiStaffReference**](EdFiStaffReference.md) |  |
**end_date** | **\DateTime** | Month, day, and year of the end or termination date of a staff member&#39;s employment, contract, or relationship with the education organization.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines. | [optional]
**full_time_equivalency** | **float** | The ratio between the hours of work expected in a position and the hours of work normally expected in a full-time position in the same setting. | [optional]
**order_of_assignment** | **int** | Describes whether the assignment is this the staff member&#39;s primary assignment, secondary assignment, etc. | [optional]
**position_title** | **string** | The descriptive name of an individual&#39;s position. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
