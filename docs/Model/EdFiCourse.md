# # EdFiCourse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**course_code** | **string** | A unique alphanumeric code assigned to a course. |
**identification_codes** | [**\OpenAPI\Client\Model\EdFiCourseIdentificationCode[]**](EdFiCourseIdentificationCode.md) | An unordered collection of courseIdentificationCodes. The code that identifies the organization of subject matter and related learning experiences provided for the instruction of students. |
**education_organization_reference** | [**\OpenAPI\Client\Model\EdFiEducationOrganizationReference**](EdFiEducationOrganizationReference.md) |  |
**academic_subjects** | [**\OpenAPI\Client\Model\EdFiCourseAcademicSubject[]**](EdFiCourseAcademicSubject.md) | An unordered collection of courseAcademicSubjects. The intended major subject/s area of the course. | [optional]
**career_pathway_descriptor** | **string** | Indicates the career cluster or pathway the course is associated with as part of a CTE curriculum. | [optional]
**competency_levels** | [**\OpenAPI\Client\Model\EdFiCourseCompetencyLevel[]**](EdFiCourseCompetencyLevel.md) | An unordered collection of courseCompetencyLevels. The competency levels defined to rate the student for the course. | [optional]
**course_defined_by_descriptor** | **string** | Specifies whether the course was defined by the SEA, LEA, School, or national organization. | [optional]
**course_description** | **string** | A description of the content standards and goals covered in the course. Reference may be made to state or national content standards. | [optional]
**course_gpa_applicability_descriptor** | **string** | An indicator of whether or not the course being described is included in the computation of the student&#39;s grade point average, and if so, if it is weighted differently from regular courses. | [optional]
**course_title** | **string** | The descriptive name given to a course of study offered in a school or other institution or organization. In departmentalized classes at the elementary, secondary, and postsecondary levels (and for staff development activities), this refers to the name by which a course is identified (e.g., American History, English III). For elementary and other non-departmentalized classes, it refers to any portion of the instruction for which a grade or report is assigned (e.g., reading, composition, spelling, and language arts). |
**date_course_adopted** | **\DateTime** | Date the course was adopted by the education agency. | [optional]
**high_school_course_requirement** | **bool** | An indication that this course may satisfy high school graduation requirements in the course&#39;s subject area. | [optional]
**learning_standards** | [**\OpenAPI\Client\Model\EdFiCourseLearningStandard[]**](EdFiCourseLearningStandard.md) | An unordered collection of courseLearningStandards. Learning standard(s) to be taught by the course. | [optional]
**level_characteristics** | [**\OpenAPI\Client\Model\EdFiCourseLevelCharacteristic[]**](EdFiCourseLevelCharacteristic.md) | An unordered collection of courseLevelCharacteristics. The type of specific program or designation with which the course is associated (e.g., AP, IB, Dual Credit, CTE). | [optional]
**max_completions_for_credit** | **int** | Designates how many times the course may be taken with credit received by the student. | [optional]
**maximum_available_credit_conversion** | **float** | Conversion factor that when multiplied by the number of credits is equivalent to Carnegie units. | [optional]
**maximum_available_credits** | **float** | The value of credits or units of value awarded for the completion of a course. | [optional]
**maximum_available_credit_type_descriptor** | **string** | The type of credits or units of value awarded for the completion of a course. | [optional]
**minimum_available_credit_conversion** | **float** | Conversion factor that when multiplied by the number of credits is equivalent to Carnegie units. | [optional]
**minimum_available_credits** | **float** | The value of credits or units of value awarded for the completion of a course. | [optional]
**minimum_available_credit_type_descriptor** | **string** | The type of credits or units of value awarded for the completion of a course. | [optional]
**number_of_parts** | **int** | The number of parts identified for a course. |
**offered_grade_levels** | [**\OpenAPI\Client\Model\EdFiCourseOfferedGradeLevel[]**](EdFiCourseOfferedGradeLevel.md) | An unordered collection of courseOfferedGradeLevels. The grade levels in which the course is offered. | [optional]
**time_required_for_completion** | **int** | The actual or estimated number of clock minutes required for class completion. This number is especially important for career and technical education classes and may represent (in minutes) the clock hour requirement of the class. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
