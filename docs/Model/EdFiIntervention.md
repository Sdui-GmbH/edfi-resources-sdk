# # EdFiIntervention

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**intervention_identification_code** | **string** | A unique number or alphanumeric code assigned to an intervention. |
**education_organization_reference** | [**\Resources\Model\EdFiEducationOrganizationReference**](EdFiEducationOrganizationReference.md) |  |
**appropriate_grade_levels** | [**\Resources\Model\EdFiInterventionAppropriateGradeLevel[]**](EdFiInterventionAppropriateGradeLevel.md) | An unordered collection of interventionAppropriateGradeLevels. Grade levels for the intervention. If omitted, considered generally applicable. | [optional]
**appropriate_sexes** | [**\Resources\Model\EdFiInterventionAppropriateSex[]**](EdFiInterventionAppropriateSex.md) | An unordered collection of interventionAppropriateSexes. Sexes for the intervention. If omitted, considered generally applicable. | [optional]
**begin_date** | **\DateTime** | The start date for the intervention implementation. |
**delivery_method_descriptor** | **string** | The way in which an intervention was implemented. |
**diagnoses** | [**\Resources\Model\EdFiInterventionDiagnosis[]**](EdFiInterventionDiagnosis.md) | An unordered collection of interventionDiagnoses. Targeted purpose of the intervention. | [optional]
**education_contents** | [**\Resources\Model\EdFiInterventionEducationContent[]**](EdFiInterventionEducationContent.md) | An unordered collection of interventionEducationContents. Relates the education content source to the education content. | [optional]
**end_date** | **\DateTime** | The end date for the intervention implementation. | [optional]
**intervention_class_descriptor** | **string** | The way in which an intervention is used: curriculum, supplement, or practice. |
**intervention_prescriptions** | [**\Resources\Model\EdFiInterventionInterventionPrescription[]**](EdFiInterventionInterventionPrescription.md) | An unordered collection of interventionInterventionPrescriptions. The reference to the intervention prescription being followed in this intervention implementation. | [optional]
**learning_resource_metadata_uris** | [**\Resources\Model\EdFiInterventionLearningResourceMetadataURI[]**](EdFiInterventionLearningResourceMetadataURI.md) | An unordered collection of interventionLearningResourceMetadataURIs. The URI (typical a URL) pointing to the metadata entry in a LRMI metadata repository, which describes this content item. | [optional]
**max_dosage** | **int** | The maximum duration of time in minutes that may be assigned for the intervention. | [optional]
**meeting_times** | [**\Resources\Model\EdFiInterventionMeetingTime[]**](EdFiInterventionMeetingTime.md) | An unordered collection of interventionMeetingTimes. The times at which this intervention is scheduled to meet. | [optional]
**min_dosage** | **int** | The minimum duration of time in minutes that may be assigned for the intervention. | [optional]
**namespace** | **string** | Namespace for the intervention. | [optional]
**population_serveds** | [**\Resources\Model\EdFiInterventionPopulationServed[]**](EdFiInterventionPopulationServed.md) | An unordered collection of interventionPopulationServeds. A subset of students that are the focus of the intervention. | [optional]
**staffs** | [**\Resources\Model\EdFiInterventionStaff[]**](EdFiInterventionStaff.md) | An unordered collection of interventionStaffs. Relates the staff member associated with the Intervention. | [optional]
**uris** | [**\Resources\Model\EdFiInterventionURI[]**](EdFiInterventionURI.md) | An unordered collection of interventionURIs. The URI (typical a URL) pointing to an education content item. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
