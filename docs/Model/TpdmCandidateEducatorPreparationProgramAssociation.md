# # TpdmCandidateEducatorPreparationProgramAssociation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**begin_date** | **\DateTime** | The begin date for the association. |
**candidate_reference** | [**\OpenAPI\Client\Model\TpdmCandidateReference**](TpdmCandidateReference.md) |  |
**educator_preparation_program_reference** | [**\OpenAPI\Client\Model\TpdmEducatorPreparationProgramReference**](TpdmEducatorPreparationProgramReference.md) |  |
**cohort_years** | [**\OpenAPI\Client\Model\TpdmCandidateEducatorPreparationProgramAssociationCohortYear[]**](TpdmCandidateEducatorPreparationProgramAssociationCohortYear.md) | An unordered collection of candidateEducatorPreparationProgramAssociationCohortYears. The type and year of a cohort the student belongs to as determined by the year that student entered a specific grade. | [optional]
**degree_specializations** | [**\OpenAPI\Client\Model\TpdmCandidateEducatorPreparationProgramAssociationDegreeSpecialization[]**](TpdmCandidateEducatorPreparationProgramAssociationDegreeSpecialization.md) | An unordered collection of candidateEducatorPreparationProgramAssociationDegreeSpecializations. Information around the area(s) of specialization for an individual. | [optional]
**end_date** | **\DateTime** | The end date for the association. | [optional]
**epp_program_pathway_descriptor** | **string** | The program pathway the candidate is following; for example: Residency, Internship, Traditional | [optional]
**reason_exited_descriptor** | **string** | Reason exited for the association. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
