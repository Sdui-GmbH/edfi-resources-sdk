# # EdFiStudentSchoolAssociation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**entry_date** | **\DateTime** | The month, day, and year on which an individual enters and begins to receive instructional services in a school. |
**calendar_reference** | [**\Resources\Model\EdFiCalendarReference**](EdFiCalendarReference.md) |  | [optional]
**class_of_school_year_type_reference** | [**\Resources\Model\EdFiSchoolYearTypeReference**](EdFiSchoolYearTypeReference.md) |  | [optional]
**graduation_plan_reference** | [**\Resources\Model\EdFiGraduationPlanReference**](EdFiGraduationPlanReference.md) |  | [optional]
**next_year_school_reference** | [**\Resources\Model\EdFiSchoolReference**](EdFiSchoolReference.md) |  | [optional]
**school_reference** | [**\Resources\Model\EdFiSchoolReference**](EdFiSchoolReference.md) |  |
**school_year_type_reference** | [**\Resources\Model\EdFiSchoolYearTypeReference**](EdFiSchoolYearTypeReference.md) |  | [optional]
**student_reference** | [**\Resources\Model\EdFiStudentReference**](EdFiStudentReference.md) |  |
**alternative_graduation_plans** | [**\Resources\Model\EdFiStudentSchoolAssociationAlternativeGraduationPlan[]**](EdFiStudentSchoolAssociationAlternativeGraduationPlan.md) | An unordered collection of studentSchoolAssociationAlternativeGraduationPlans. The secondary graduation plan or plans associated with the student enrolled in the school. | [optional]
**education_plans** | [**\Resources\Model\EdFiStudentSchoolAssociationEducationPlan[]**](EdFiStudentSchoolAssociationEducationPlan.md) | An unordered collection of studentSchoolAssociationEducationPlans. The type of education plan(s) the student is following, if appropriate. | [optional]
**employed_while_enrolled** | **bool** | An individual who is a paid employee or works in his or her own business, profession, or farm and at the same time is enrolled in secondary, postsecondary, or adult education. | [optional]
**enrollment_type_descriptor** | **string** | The type of enrollment reflected by the StudentSchoolAssociation. | [optional]
**entry_grade_level_descriptor** | **string** | The grade level or primary instructional level at which a student enters and receives services in a school or an educational institution during a given academic session. |
**entry_grade_level_reason_descriptor** | **string** | The primary reason as to why a staff member determined that a student should be promoted or not (or be demoted) at the end of a given school term. | [optional]
**entry_type_descriptor** | **string** | The process by which a student enters a school during a given academic session. | [optional]
**exit_withdraw_date** | **\DateTime** | The recorded exit or withdraw date for the student. | [optional]
**exit_withdraw_type_descriptor** | **string** | The circumstances under which the student exited from membership in an educational institution. | [optional]
**full_time_equivalency** | **float** | The full-time equivalent ratio for the student s assignment to a school for services or instruction. For example, a full-time student would have an FTE value of 1 while a half-time student would have an FTE value of 0.5. | [optional]
**next_year_grade_level_descriptor** | **string** | The anticipated grade level for the student for the next school year. | [optional]
**primary_school** | **bool** | Indicates if a given enrollment record should be considered the primary record for a student. | [optional]
**repeat_grade_indicator** | **bool** | An indicator of whether the student is enrolling to repeat a grade level, either by failure or an agreement to hold the student back. | [optional]
**residency_status_descriptor** | **string** | An indication of the location of a persons legal residence relative to (within or outside of) the boundaries of the public school attended and its administrative unit. | [optional]
**school_choice** | **bool** | An indication of whether the student enrolled in this school under the provisions for public school choice | [optional]
**school_choice_basis_descriptor** | **string** | The legal basis for the school choice enrollment according to local, state or federal policy or regulation. (The descriptor provides the list of available bases specific to the state | [optional]
**school_choice_transfer** | **bool** | An indication of whether students transferred in or out of the school did so during the school year under the provisions for public school choice in accordance with Title I, Part A, Section 1116. | [optional]
**term_completion_indicator** | **bool** | Idicates whether or not a student completed the most recent school term. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
