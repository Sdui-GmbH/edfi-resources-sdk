# # EdFiLearningStandard

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**academic_subjects** | [**\OpenAPI\Client\Model\EdFiLearningStandardAcademicSubject[]**](EdFiLearningStandardAcademicSubject.md) | An unordered collection of learningStandardAcademicSubjects. Subject area for the learning standard. |
**grade_levels** | [**\OpenAPI\Client\Model\EdFiLearningStandardGradeLevel[]**](EdFiLearningStandardGradeLevel.md) | An unordered collection of learningStandardGradeLevels. The grade levels for the specific learning standard. |
**learning_standard_id** | **string** | The identifier for the specific learning standard (e.g., 111.15.3.1.A). |
**parent_learning_standard_reference** | [**\OpenAPI\Client\Model\EdFiLearningStandardReference**](EdFiLearningStandardReference.md) |  | [optional]
**content_standard** | [**\OpenAPI\Client\Model\EdFiLearningStandardContentStandard**](EdFiLearningStandardContentStandard.md) |  |
**course_title** | **string** | The official course title with which this learning standard is associated. | [optional]
**description** | **string** | The text of the statement. The textual content that either describes a specific competency such as \&quot;Apply the Pythagorean Theorem to determine unknown side lengths in right triangles in real-world and mathematical problems in two and three dimensions.\&quot; or describes a less granular group of competencies within the taxonomy of the standards document, e.g. \&quot;Understand and apply the Pythagorean Theorem,\&quot; or \&quot;Geometry\&quot;. |
**identification_codes** | [**\OpenAPI\Client\Model\EdFiLearningStandardIdentificationCode[]**](EdFiLearningStandardIdentificationCode.md) | An unordered collection of learningStandardIdentificationCodes. A coding scheme that is used for identification and record-keeping purposes by schools, social services, or other agencies to refer to a learning standard. | [optional]
**learning_standard_category_descriptor** | **string** | An additional classification of the type of a specific learning standard. | [optional]
**learning_standard_item_code** | **string** | A code designated by the promulgating body to identify the statement, e.g. 1.N.3 (usually not globally unique). | [optional]
**learning_standard_scope_descriptor** | **string** | Signals the scope of usage the standard. Does not necessarily relate the standard to the governing body. | [optional]
**namespace** | **string** | The namespace of the organization or entity who governs the standard. It is recommended the namespaces observe a URI format and begin with a domain name under the governing organization or entity control. |
**success_criteria** | **string** | One or more statements that describes the criteria used by teachers and students to check for attainment of a learning standard. This criteria gives clear indications as to the degree to which learning is moving through the Zone or Proximal Development toward independent achievement of the learning standard. | [optional]
**uri** | **string** | An unambiguous reference to the statement using a network-resolvable URI. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
