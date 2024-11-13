# # EdFiCourseTranscript

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**course_attempt_result_descriptor** | **string** | The result from the student&#39;s attempt to take the course. |
**course_reference** | [**\Resources\Model\EdFiCourseReference**](EdFiCourseReference.md) |  |
**external_education_organization_reference** | [**\Resources\Model\EdFiEducationOrganizationReference**](EdFiEducationOrganizationReference.md) |  | [optional]
**responsible_teacher_staff_reference** | [**\Resources\Model\EdFiStaffReference**](EdFiStaffReference.md) |  | [optional]
**student_academic_record_reference** | [**\Resources\Model\EdFiStudentAcademicRecordReference**](EdFiStudentAcademicRecordReference.md) |  |
**academic_subjects** | [**\Resources\Model\EdFiCourseTranscriptAcademicSubject[]**](EdFiCourseTranscriptAcademicSubject.md) | An unordered collection of courseTranscriptAcademicSubjects. The subject area for the course transcript credits awarded in the course transcript. | [optional]
**alternative_course_identification_codes** | [**\Resources\Model\EdFiCourseTranscriptAlternativeCourseIdentificationCode[]**](EdFiCourseTranscriptAlternativeCourseIdentificationCode.md) | An unordered collection of courseTranscriptAlternativeCourseIdentificationCodes. The code that identifies the course, course offering, the code from an external educational organization, or other alternate course code. | [optional]
**alternative_course_title** | **string** | The descriptive name given to a course of study offered in the school, if different from the CourseTitle. | [optional]
**assigning_organization_identification_code** | **string** | The organization code or name assigning the course identification code. | [optional]
**attempted_credit_conversion** | **float** | Conversion factor that when multiplied by the number of credits is equivalent to Carnegie units. | [optional]
**attempted_credits** | **float** | The value of credits or units of value awarded for the completion of a course. | [optional]
**attempted_credit_type_descriptor** | **string** | The type of credits or units of value awarded for the completion of a course. | [optional]
**course_catalog_url** | **string** | The URL for the course catalog that defines the course identification code. | [optional]
**course_programs** | [**\Resources\Model\EdFiCourseTranscriptCourseProgram[]**](EdFiCourseTranscriptCourseProgram.md) | An unordered collection of courseTranscriptCoursePrograms. The program(s) that the student participated in the context of the course. | [optional]
**course_repeat_code_descriptor** | **string** | Indicates that an academic course has been repeated by a student and how that repeat is to be computed in the student&#39;s academic grade average. | [optional]
**course_title** | **string** | The descriptive name given to a course of study offered in a school or other institution or organization. In departmentalized classes at the elementary, secondary, and postsecondary levels (and for staff development activities), this refers to the name by which a course is identified (e.g., American History, English III). For elementary and other non-departmentalized classes, it refers to any portion of the instruction for which a grade or report is assigned (e.g., reading, composition, spelling, language arts). | [optional]
**credit_categories** | [**\Resources\Model\EdFiCourseTranscriptCreditCategory[]**](EdFiCourseTranscriptCreditCategory.md) | An unordered collection of courseTranscriptCreditCategories. A categorization for the course transcript credits awarded in the course transcript. | [optional]
**earned_additional_credits** | [**\Resources\Model\EdFiCourseTranscriptEarnedAdditionalCredits[]**](EdFiCourseTranscriptEarnedAdditionalCredits.md) | An unordered collection of courseTranscriptEarnedAdditionalCredits. The number of additional credits a student attempted and could earn for successfully completing a given course. | [optional]
**earned_credit_conversion** | **float** | Conversion factor that when multiplied by the number of credits is equivalent to Carnegie units. | [optional]
**earned_credits** | **float** | The value of credits or units of value awarded for the completion of a course. | [optional]
**earned_credit_type_descriptor** | **string** | The type of credits or units of value awarded for the completion of a course. | [optional]
**external_education_organization_name_of_institution** | **string** | Name of the external institution where the student completed the course; to be used only when the reference external education organization is not available. | [optional]
**final_letter_grade_earned** | **string** | The final indicator of student performance in a class as submitted by the instructor. | [optional]
**final_numeric_grade_earned** | **float** | The final indicator of student performance in a class as submitted by the instructor. | [optional]
**method_credit_earned_descriptor** | **string** | The method the credits were earned. | [optional]
**partial_course_transcript_awards** | [**\Resources\Model\EdFiCourseTranscriptPartialCourseTranscriptAwards[]**](EdFiCourseTranscriptPartialCourseTranscriptAwards.md) | An unordered collection of courseTranscriptPartialCourseTranscriptAwards. A collection of partial credits and/or grades a student earned against the course over the session, used when awards of credit are incremental. | [optional]
**sections** | [**\Resources\Model\EdFiCourseTranscriptSection[]**](EdFiCourseTranscriptSection.md) | An unordered collection of courseTranscriptSections. The section(s) associated with the course transcript. | [optional]
**when_taken_grade_level_descriptor** | **string** | Student&#39;s grade level at time of course. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
