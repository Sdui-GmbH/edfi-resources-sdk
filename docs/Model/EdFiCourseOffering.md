# # EdFiCourseOffering

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**local_course_code** | **string** | The local code assigned by the School that identifies the course offering provided for the instruction of students. |
**course_reference** | [**\OpenAPI\Client\Model\EdFiCourseReference**](EdFiCourseReference.md) |  |
**school_reference** | [**\OpenAPI\Client\Model\EdFiSchoolReference**](EdFiSchoolReference.md) |  |
**session_reference** | [**\OpenAPI\Client\Model\EdFiSessionReference**](EdFiSessionReference.md) |  |
**course_level_characteristics** | [**\OpenAPI\Client\Model\EdFiCourseOfferingCourseLevelCharacteristic[]**](EdFiCourseOfferingCourseLevelCharacteristic.md) | An unordered collection of courseOfferingCourseLevelCharacteristics. The type of specific program or designation with which the course offering is associated (e.g., AP, IB, Dual Credit, CTE). This collection should only be populated if it differs from the course level characteristics identified at the course level. | [optional]
**curriculum_useds** | [**\OpenAPI\Client\Model\EdFiCourseOfferingCurriculumUsed[]**](EdFiCourseOfferingCurriculumUsed.md) | An unordered collection of courseOfferingCurriculumUseds. The type of curriculum used in an early learning classroom or group. | [optional]
**instructional_time_planned** | **int** | The planned total number of clock minutes of instruction for this course offering. Generally, this should be at least as many minutes as is required for completion by the related state- or district-defined course. | [optional]
**local_course_title** | **string** | The descriptive name given to a course of study offered in the school, if different from the course title. | [optional]
**offered_grade_levels** | [**\OpenAPI\Client\Model\EdFiCourseOfferingOfferedGradeLevel[]**](EdFiCourseOfferingOfferedGradeLevel.md) | An unordered collection of courseOfferingOfferedGradeLevels. The grade levels in which the course is offered. This collection should only be populated if it differs from the offered grade levels identified at the course level. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
