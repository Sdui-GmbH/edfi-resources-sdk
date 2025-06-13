# # TpdmFinancialAid

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**aid_type_descriptor** | **string** | The classification of financial aid awarded to a person for the academic term/year. |
**begin_date** | **\DateTime** | The date the award was designated.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines. |
**student_reference** | [**\Resources\Model\EdFiStudentReference**](EdFiStudentReference.md) |  |
**aid_amount** | **float** | The amount of financial aid awarded to a person for the term/year. | [optional]
**aid_condition_description** | **string** | The description of the condition (e.g., placement in a high need school) under which the aid was given. | [optional]
**end_date** | **\DateTime** | The date the award was removed.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines. | [optional]
**pell_grant_recipient** | **bool** | Indicates a person who receives Pell Grant aid. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
