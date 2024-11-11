# # EdFiInterventionPrescription

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**intervention_prescription_identification_code** | **string** | A unique number or alphanumeric code assigned to an intervention prescription. |
**education_organization_reference** | [**\Resources\Model\EdFiEducationOrganizationReference**](EdFiEducationOrganizationReference.md) |  |
**appropriate_grade_levels** | [**\Resources\Model\EdFiInterventionPrescriptionAppropriateGradeLevel[]**](EdFiInterventionPrescriptionAppropriateGradeLevel.md) | An unordered collection of interventionPrescriptionAppropriateGradeLevels. Grade levels for the prescribed intervention. If omitted, considered generally applicable. | [optional]
**appropriate_sexes** | [**\Resources\Model\EdFiInterventionPrescriptionAppropriateSex[]**](EdFiInterventionPrescriptionAppropriateSex.md) | An unordered collection of interventionPrescriptionAppropriateSexes. Sexes for the intervention prescription. If omitted, considered generally applicable. | [optional]
**delivery_method_descriptor** | **string** | The way in which an intervention was implemented: individual, small group, whole class, or whole school. |
**diagnoses** | [**\Resources\Model\EdFiInterventionPrescriptionDiagnosis[]**](EdFiInterventionPrescriptionDiagnosis.md) | An unordered collection of interventionPrescriptionDiagnoses. Targeted purpose of the intervention prescription. | [optional]
**education_contents** | [**\Resources\Model\EdFiInterventionPrescriptionEducationContent[]**](EdFiInterventionPrescriptionEducationContent.md) | An unordered collection of interventionPrescriptionEducationContents. Relates the education content source to the education content. | [optional]
**intervention_class_descriptor** | **string** | The way in which an intervention is used: curriculum, supplement, or practice. |
**learning_resource_metadata_uris** | [**\Resources\Model\EdFiInterventionPrescriptionLearningResourceMetadataURI[]**](EdFiInterventionPrescriptionLearningResourceMetadataURI.md) | An unordered collection of interventionPrescriptionLearningResourceMetadataURIs. The URI (typical a URL) pointing to the metadata entry in a LRMI metadata repository, which describes this content item. | [optional]
**max_dosage** | **int** | The maximum duration of time in minutes that is recommended for the intervention. | [optional]
**min_dosage** | **int** | The minimum duration of time in minutes that is recommended for the intervention. | [optional]
**namespace** | **string** | Namespace for the intervention. | [optional]
**population_serveds** | [**\Resources\Model\EdFiInterventionPrescriptionPopulationServed[]**](EdFiInterventionPrescriptionPopulationServed.md) | An unordered collection of interventionPrescriptionPopulationServeds. A subset of students that are the focus of the intervention prescription. | [optional]
**uris** | [**\Resources\Model\EdFiInterventionPrescriptionURI[]**](EdFiInterventionPrescriptionURI.md) | An unordered collection of interventionPrescriptionURIs. The URI (typical a URL) pointing to an education content item. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
