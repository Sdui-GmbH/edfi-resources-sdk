# # EdFiOpenStaffPosition

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**requisition_number** | **string** | The number or identifier assigned to an open staff position, typically a requisition number assigned by Human Resources. |
**education_organization_reference** | [**\Resources\Model\EdFiEducationOrganizationReference**](EdFiEducationOrganizationReference.md) |  |
**academic_subjects** | [**\Resources\Model\EdFiOpenStaffPositionAcademicSubject[]**](EdFiOpenStaffPositionAcademicSubject.md) | An unordered collection of openStaffPositionAcademicSubjects. The teaching field required for the open staff position. | [optional]
**date_posted** | **\DateTime** | Date the open staff position was posted.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines. |
**date_posting_removed** | **\DateTime** | The date the posting was removed or filled.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines. | [optional]
**employment_status_descriptor** | **string** | Reflects the type of employment or contract desired for the position. |
**instructional_grade_levels** | [**\Resources\Model\EdFiOpenStaffPositionInstructionalGradeLevel[]**](EdFiOpenStaffPositionInstructionalGradeLevel.md) | An unordered collection of openStaffPositionInstructionalGradeLevels. The set of grade levels for which the position&#39;s assignment is responsible. | [optional]
**position_title** | **string** | The descriptive name of an individual&#39;s position. | [optional]
**posting_result_descriptor** | **string** | Indication of whether the OpenStaffPosition was filled or retired without filling. | [optional]
**program_assignment_descriptor** | **string** | The name of the program for which the open staff position will be assigned. | [optional]
**staff_classification_descriptor** | **string** | The titles of employment, official status, or rank of education staff. |
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
