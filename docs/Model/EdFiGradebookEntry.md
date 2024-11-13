# # EdFiGradebookEntry

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**gradebook_entry_identifier** | **string** | A unique number or alphanumeric code assigned to a gradebook entry by the source system. |
**namespace** | **string** | Namespace URI for the source of the gradebook entry. |
**grading_period_reference** | [**\Resources\Model\EdFiGradingPeriodReference**](EdFiGradingPeriodReference.md) |  | [optional]
**section_reference** | [**\Resources\Model\EdFiSectionReference**](EdFiSectionReference.md) |  | [optional]
**date_assigned** | **\DateTime** | The date the assignment, homework, or assessment was assigned or executed. |
**description** | **string** | A description of the assignment, homework, or classroom assessment. | [optional]
**due_date** | **\DateTime** | The date the assignment, homework, or assessment is due. | [optional]
**due_time** | **string** | The time the assignment, homework, or assessment is due. | [optional]
**gradebook_entry_type_descriptor** | **string** | The type of the gradebook entry. | [optional]
**learning_standards** | [**\Resources\Model\EdFiGradebookEntryLearningStandard[]**](EdFiGradebookEntryLearningStandard.md) | An unordered collection of gradebookEntryLearningStandards. LearningStandard(s) associated with the gradebook entry. | [optional]
**max_points** | **float** | The maximum number of points  that can be earned for the submission. | [optional]
**source_section_identifier** | **string** | The local identifier assigned to a section. |
**title** | **string** | The name or title of the activity to be recorded in the gradebook entry. |
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
