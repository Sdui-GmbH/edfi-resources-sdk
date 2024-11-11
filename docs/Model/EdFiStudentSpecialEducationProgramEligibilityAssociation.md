# # EdFiStudentSpecialEducationProgramEligibilityAssociation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**consent_to_evaluation_received_date** | **\DateTime** | Indicates the date on which the local education agency received written consent for the evaluation from the student&#39;s parent or guardian. This is the first day of the evaluation timeframe. |
**education_organization_reference** | [**\OpenAPI\Client\Model\EdFiEducationOrganizationReference**](EdFiEducationOrganizationReference.md) |  |
**program_reference** | [**\OpenAPI\Client\Model\EdFiProgramReference**](EdFiProgramReference.md) |  |
**student_reference** | [**\OpenAPI\Client\Model\EdFiStudentReference**](EdFiStudentReference.md) |  |
**consent_to_evaluation_date** | **\DateTime** | The date on which the student&#39;s parent gave a consent (Parent Consent Date). | [optional]
**eligibility_conference_date** | **\DateTime** | The month, day, and year when the eligibility conference is held between the parent(s)/guardian(s) and the educational organization responsible staff member(s) to review and make decision on special education related services eligibility. | [optional]
**eligibility_delay_reason_descriptor** | **string** | The reason why the eligibility determination was completed beyond the required timeframe. | [optional]
**eligibility_determination_date** | **\DateTime** | Indicates the month, day, and year the local education agency (LEA) held the admission, review, and dismissal committee meeting regarding the child&#39;s eligibility determination for special education and related services. An individualized education plan (IEP) would be developed and implemented for a child admitted into special education on this same date. | [optional]
**eligibility_evaluation_date** | **\DateTime** | Indicates the month, day, and year when the written individual evaluation report was completed. | [optional]
**eligibility_evaluation_type_descriptor** | **string** | Indicates if this is an initial evaluation or a reevaluation. | [optional]
**evaluation_complete_indicator** | **bool** | Indicates the evaluation completed status. | [optional]
**evaluation_delay_days** | **int** | Indicates the number of student absences, if any, beginning the first instructional day following the date on which the local education agency (LEA) received written parental or guardian consent for the evaluation. | [optional]
**evaluation_delay_reason_descriptor** | **string** | Refers to the justification as to why the evaluation report was completed beyond the state-established timeframe. This descriptor field will have allowed reasons as descriptor values. | [optional]
**evaluation_late_reason** | **string** | Refers to additional information for delay in doing the evaluation. | [optional]
**idea_indicator** | **bool** | Indicates whether or not the student was determined eligible as a result of an evaluation. | [optional]
**idea_part_descriptor** | **string** | Indicates if the evaluation is done under Part B IDEA or Part C IDEA. |
**original_eci_services_date** | **\DateTime** | The month, date, and year when an infant or toddler, from birth through age 2, began participating in the early childhood intervention (ECI) program. | [optional]
**transition_conference_date** | **\DateTime** | Indicates the month, day, and year when the transition conference was held (for a child receiving early childhood intervention (ECI) services) among the lead agency, the family, and the local education agency (LEA) where the child resides to discuss the child&#39;s potential eligibility for early childhood special education (ECSE) services. | [optional]
**transition_notification_date** | **\DateTime** | Indicates the month, day, and year the LEA Notification of Potentially Eligible for Special Education Services was sent by the early childhood intervention (ECI) contractor to the local education agency (LEA) to notify them that a child enrolled in ECI will shortly reach the age of eligibility for Part B services and the child is potentially eligible for services under Part B, early childhood special education (ECSE). The LEA Notification constitutes a referral to the LEA for an initial evaluation and eligibility determination of the child which the parent or guardian may opt out from the referral. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
