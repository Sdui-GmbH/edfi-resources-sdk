# # EdFiStudentInterventionAssociation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**cohort_reference** | [**\Resources\Model\EdFiCohortReference**](EdFiCohortReference.md) |  | [optional]
**intervention_reference** | [**\Resources\Model\EdFiInterventionReference**](EdFiInterventionReference.md) |  |
**student_reference** | [**\Resources\Model\EdFiStudentReference**](EdFiStudentReference.md) |  |
**diagnostic_statement** | **string** | A statement provided by the assigner that provides information regarding why the student was assigned to this intervention. | [optional]
**dosage** | **int** | The duration of time in minutes for which the student was assigned to participate in the intervention. | [optional]
**intervention_effectivenesses** | [**\Resources\Model\EdFiStudentInterventionAssociationInterventionEffectiveness[]**](EdFiStudentInterventionAssociationInterventionEffectiveness.md) | An unordered collection of studentInterventionAssociationInterventionEffectivenesses. A measure of the effects of an intervention in each outcome domain. The rating of effectiveness takes into account four factors: the quality of the research on the intervention, the statistical significance of the research findings, the size of the differences between participants in the intervention and comparison groups and the consistency in results. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
