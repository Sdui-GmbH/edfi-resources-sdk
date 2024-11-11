# # EdFiSection

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**section_identifier** | **string** | The local identifier assigned to a section. |
**course_offering_reference** | [**\Resources\Model\EdFiCourseOfferingReference**](EdFiCourseOfferingReference.md) |  |
**location_reference** | [**\Resources\Model\EdFiLocationReference**](EdFiLocationReference.md) |  | [optional]
**location_school_reference** | [**\Resources\Model\EdFiSchoolReference**](EdFiSchoolReference.md) |  | [optional]
**available_credit_conversion** | **float** | Conversion factor that when multiplied by the number of credits is equivalent to Carnegie units. | [optional]
**available_credits** | **float** | The value of credits or units of value awarded for the completion of a course. | [optional]
**available_credit_type_descriptor** | **string** | The type of credits or units of value awarded for the completion of a course. | [optional]
**characteristics** | [**\Resources\Model\EdFiSectionCharacteristic[]**](EdFiSectionCharacteristic.md) | An unordered collection of sectionCharacteristics. Reflects important characteristics of the section, such as whether or not attendance is taken and the section is graded. | [optional]
**class_periods** | [**\Resources\Model\EdFiSectionClassPeriod[]**](EdFiSectionClassPeriod.md) | An unordered collection of sectionClassPeriods. The class period during which the section meets. | [optional]
**course_level_characteristics** | [**\Resources\Model\EdFiSectionCourseLevelCharacteristic[]**](EdFiSectionCourseLevelCharacteristic.md) | An unordered collection of sectionCourseLevelCharacteristics. The type of specific program or designation with which the section is associated. This collection should only be populated if it differs from the course level characteristics identified at the course offering level. | [optional]
**educational_environment_descriptor** | **string** | The setting in which a student receives education and related services. | [optional]
**instruction_language_descriptor** | **string** | The primary language of instruction. If omitted, English is assumed. | [optional]
**medium_of_instruction_descriptor** | **string** | The media through which teachers provide instruction to students and students and teachers communicate about instructional matters. | [optional]
**offered_grade_levels** | [**\Resources\Model\EdFiSectionOfferedGradeLevel[]**](EdFiSectionOfferedGradeLevel.md) | An unordered collection of sectionOfferedGradeLevels. The grade levels in which the section is offered. This collection should only be populated if it differs from the Offered Grade Levels identified at the course offering level. | [optional]
**official_attendance_period** | **bool** | Indicator of whether this section is used for official daily attendance. Alternatively, official daily attendance may be tied to a class period. | [optional]
**population_served_descriptor** | **string** | The type of students the section is offered and tailored to. | [optional]
**programs** | [**\Resources\Model\EdFiSectionProgram[]**](EdFiSectionProgram.md) | An unordered collection of sectionPrograms. Optional reference to program to which the section is associated. | [optional]
**section_name** | **string** | A locally-defined name for the section, generally created to make the section more recognizable in informal contexts and generally distinct from the section identifier. | [optional]
**section_type_descriptor** | **string** | Specifies whether the section is for attendance only, credit only, or both. | [optional]
**sequence_of_course** | **int** | When a section is part of a sequence of parts for a course, the number of the sequence. If the course has only one part, the value of this section attribute should be 1. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
