# # EdFiInterventionStudy

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**intervention_study_identification_code** | **string** | A unique number or alphanumeric code assigned to an intervention study. |
**education_organization_reference** | [**\OpenAPI\Client\Model\EdFiEducationOrganizationReference**](EdFiEducationOrganizationReference.md) |  |
**intervention_prescription_reference** | [**\OpenAPI\Client\Model\EdFiInterventionPrescriptionReference**](EdFiInterventionPrescriptionReference.md) |  |
**appropriate_grade_levels** | [**\OpenAPI\Client\Model\EdFiInterventionStudyAppropriateGradeLevel[]**](EdFiInterventionStudyAppropriateGradeLevel.md) | An unordered collection of interventionStudyAppropriateGradeLevels. Grade levels participating in this study. | [optional]
**appropriate_sexes** | [**\OpenAPI\Client\Model\EdFiInterventionStudyAppropriateSex[]**](EdFiInterventionStudyAppropriateSex.md) | An unordered collection of interventionStudyAppropriateSexes. Sexes participating in this study. If omitted, considered generally applicable. | [optional]
**delivery_method_descriptor** | **string** | The way in which an intervention was implemented: individual, small group, whole class, or whole school. |
**education_contents** | [**\OpenAPI\Client\Model\EdFiInterventionStudyEducationContent[]**](EdFiInterventionStudyEducationContent.md) | An unordered collection of interventionStudyEducationContents. Relates the education content source to the education content. | [optional]
**intervention_class_descriptor** | **string** | The way in which an intervention is used: curriculum, supplement, or practice. |
**intervention_effectivenesses** | [**\OpenAPI\Client\Model\EdFiInterventionStudyInterventionEffectiveness[]**](EdFiInterventionStudyInterventionEffectiveness.md) | An unordered collection of interventionStudyInterventionEffectivenesses. Measurement of the effectiveness of the intervention study per diagnosis. | [optional]
**learning_resource_metadata_uris** | [**\OpenAPI\Client\Model\EdFiInterventionStudyLearningResourceMetadataURI[]**](EdFiInterventionStudyLearningResourceMetadataURI.md) | An unordered collection of interventionStudyLearningResourceMetadataURIs. The URI (typical a URL) pointing to the metadata entry in a LRMI metadata repository, which describes this content item. | [optional]
**participants** | **int** | The number of participants observed in the study. |
**population_serveds** | [**\OpenAPI\Client\Model\EdFiInterventionStudyPopulationServed[]**](EdFiInterventionStudyPopulationServed.md) | An unordered collection of interventionStudyPopulationServeds. A subset of students that are the focus of the intervention study. | [optional]
**state_abbreviations** | [**\OpenAPI\Client\Model\EdFiInterventionStudyStateAbbreviation[]**](EdFiInterventionStudyStateAbbreviation.md) | An unordered collection of interventionStudyStateAbbreviations. The abbreviation for the state (within the United States) or outlying area, the school system of which the participants of the study are considered to be a part. | [optional]
**uris** | [**\OpenAPI\Client\Model\EdFiInterventionStudyURI[]**](EdFiInterventionStudyURI.md) | An unordered collection of interventionStudyURIs. The URI (typical a URL) pointing to an education content item. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
