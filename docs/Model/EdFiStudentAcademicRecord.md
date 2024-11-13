# # EdFiStudentAcademicRecord

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**term_descriptor** | **string** | The term for the session during the school year. |
**education_organization_reference** | [**\Resources\Model\EdFiEducationOrganizationReference**](EdFiEducationOrganizationReference.md) |  |
**school_year_type_reference** | [**\Resources\Model\EdFiSchoolYearTypeReference**](EdFiSchoolYearTypeReference.md) |  |
**student_reference** | [**\Resources\Model\EdFiStudentReference**](EdFiStudentReference.md) |  |
**academic_honors** | [**\Resources\Model\EdFiStudentAcademicRecordAcademicHonor[]**](EdFiStudentAcademicRecordAcademicHonor.md) | An unordered collection of studentAcademicRecordAcademicHonors. Academic distinctions earned by or awarded to the student. | [optional]
**class_ranking** | [**\Resources\Model\EdFiStudentAcademicRecordClassRanking**](EdFiStudentAcademicRecordClassRanking.md) |  | [optional]
**cumulative_attempted_credit_conversion** | **float** | Conversion factor that when multiplied by the number of credits is equivalent to Carnegie units. | [optional]
**cumulative_attempted_credits** | **float** | The value of credits or units of value awarded for the completion of a course. | [optional]
**cumulative_attempted_credit_type_descriptor** | **string** | The type of credits or units of value awarded for the completion of a course. | [optional]
**cumulative_earned_credit_conversion** | **float** | Conversion factor that when multiplied by the number of credits is equivalent to Carnegie units. | [optional]
**cumulative_earned_credits** | **float** | The value of credits or units of value awarded for the completion of a course. | [optional]
**cumulative_earned_credit_type_descriptor** | **string** | The type of credits or units of value awarded for the completion of a course. | [optional]
**diplomas** | [**\Resources\Model\EdFiStudentAcademicRecordDiploma[]**](EdFiStudentAcademicRecordDiploma.md) | An unordered collection of studentAcademicRecordDiplomas. Diploma(s) earned by the student. | [optional]
**grade_point_averages** | [**\Resources\Model\EdFiStudentAcademicRecordGradePointAverage[]**](EdFiStudentAcademicRecordGradePointAverage.md) | An unordered collection of studentAcademicRecordGradePointAverages. The grade point average for an individual computed as the grade points earned divided by the number of credits attempted. | [optional]
**projected_graduation_date** | **\DateTime** | The month and year the student is projected to graduate. | [optional]
**recognitions** | [**\Resources\Model\EdFiStudentAcademicRecordRecognition[]**](EdFiStudentAcademicRecordRecognition.md) | An unordered collection of studentAcademicRecordRecognitions. Recognitions given to the student for accomplishments in a co-curricular or extracurricular activity. | [optional]
**report_cards** | [**\Resources\Model\EdFiStudentAcademicRecordReportCard[]**](EdFiStudentAcademicRecordReportCard.md) | An unordered collection of studentAcademicRecordReportCards. Report cards for the student. | [optional]
**session_attempted_credit_conversion** | **float** | Conversion factor that when multiplied by the number of credits is equivalent to Carnegie units. | [optional]
**session_attempted_credits** | **float** | The value of credits or units of value awarded for the completion of a course. | [optional]
**session_attempted_credit_type_descriptor** | **string** | The type of credits or units of value awarded for the completion of a course. | [optional]
**session_earned_credit_conversion** | **float** | Conversion factor that when multiplied by the number of credits is equivalent to Carnegie units. | [optional]
**session_earned_credits** | **float** | The value of credits or units of value awarded for the completion of a course. | [optional]
**session_earned_credit_type_descriptor** | **string** | The type of credits or units of value awarded for the completion of a course. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
