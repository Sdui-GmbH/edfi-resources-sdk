# # EdFiStudentAssessmentRegistration

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**assessment_administration_reference** | [**\Resources\Model\EdFiAssessmentAdministrationReference**](EdFiAssessmentAdministrationReference.md) |  |
**reporting_education_organization_reference** | [**\Resources\Model\EdFiEducationOrganizationReference**](EdFiEducationOrganizationReference.md) |  | [optional]
**scheduled_student_education_organization_assessment_accommodation_reference** | [**\Resources\Model\EdFiStudentEducationOrganizationAssessmentAccommodationReference**](EdFiStudentEducationOrganizationAssessmentAccommodationReference.md) |  | [optional]
**student_education_organization_association_reference** | [**\Resources\Model\EdFiStudentEducationOrganizationAssociationReference**](EdFiStudentEducationOrganizationAssociationReference.md) |  |
**student_school_association_reference** | [**\Resources\Model\EdFiStudentSchoolAssociationReference**](EdFiStudentSchoolAssociationReference.md) |  |
**testing_education_organization_reference** | [**\Resources\Model\EdFiEducationOrganizationReference**](EdFiEducationOrganizationReference.md) |  | [optional]
**assessment_accommodations** | [**\Resources\Model\EdFiStudentAssessmentRegistrationAssessmentAccommodation[]**](EdFiStudentAssessmentRegistrationAssessmentAccommodation.md) | An unordered collection of studentAssessmentRegistrationAssessmentAccommodations. The special variation(s) to be used in how assessments (in general) are presented, how it is administered, or how the test taker is allowed to respond. This generally refers to changes that do not substantially alter what the examination measures. The proper use of accommodations does not substantially change academic level or performance criteria. | [optional]
**assessment_customizations** | [**\Resources\Model\EdFiStudentAssessmentRegistrationAssessmentCustomization[]**](EdFiStudentAssessmentRegistrationAssessmentCustomization.md) | An unordered collection of studentAssessmentRegistrationAssessmentCustomizations. Key/value pairs which may be used to facilitate customization of an assessment or to support vendor reporting/analysis. | [optional]
**assessment_grade_level_descriptor** | **string** | The grade level or primary instructional level at which the student is to be assessed. | [optional]
**platform_type_descriptor** | **string** | The environment or format in which the assessment is expected to be administered. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
