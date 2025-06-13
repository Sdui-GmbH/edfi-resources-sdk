# # EdFiLearningStandardContentStandard

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**publication_status_descriptor** | **string** | The publication status of the document (i.e., Adopted, Draft, Published, Deprecated, Unknown). | [optional]
**begin_date** | **\DateTime** | The beginning of the period during which this learning standard document is intended for use.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines. | [optional]
**end_date** | **\DateTime** | The end of the period during which this learning standard document is intended for use.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines. | [optional]
**publication_date** | **\DateTime** | The date on which this content was first published. | [optional]
**publication_year** | **int** | The year at which this content was first published. | [optional]
**title** | **string** | The name of the content standard, for example Common Core. |
**uri** | **string** | An unambiguous reference to the standards using a network-resolvable URI. | [optional]
**version** | **string** | The version identifier for the content. | [optional]
**mandating_education_organization_reference** | [**\Resources\Model\EdFiEducationOrganizationReference**](EdFiEducationOrganizationReference.md) |  | [optional]
**authors** | [**\Resources\Model\EdFiLearningStandardContentStandardAuthor[]**](EdFiLearningStandardContentStandardAuthor.md) | An unordered collection of learningStandardContentStandardAuthors. The person or organization chiefly responsible for the intellectual content of the standard. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
