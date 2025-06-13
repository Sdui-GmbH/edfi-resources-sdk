# # EdFiEducationContent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**content_identifier** | **string** | A unique identifier for the education content. |
**learning_standard_reference** | [**\Resources\Model\EdFiLearningStandardReference**](EdFiLearningStandardReference.md) |  | [optional]
**additional_authors_indicator** | **bool** | Indicates whether there are additional un-named authors. In a research report, this is often marked by the abbreviation \&quot;et al\&quot;. | [optional]
**appropriate_grade_levels** | [**\Resources\Model\EdFiEducationContentAppropriateGradeLevel[]**](EdFiEducationContentAppropriateGradeLevel.md) | An unordered collection of educationContentAppropriateGradeLevels. Grade levels for which this education content is applicable. If omitted, considered generally applicable. | [optional]
**appropriate_sexes** | [**\Resources\Model\EdFiEducationContentAppropriateSex[]**](EdFiEducationContentAppropriateSex.md) | An unordered collection of educationContentAppropriateSexes. Sexes for which this education content is applicable. If omitted, considered generally applicable. | [optional]
**authors** | [**\Resources\Model\EdFiEducationContentAuthor[]**](EdFiEducationContentAuthor.md) | An unordered collection of educationContentAuthors. The individual credited with the creation of the resource. | [optional]
**content_class_descriptor** | **string** | The predominate type or kind characterizing the learning resource. | [optional]
**cost** | **float** | An amount that has to be paid or spent to buy or obtain the education content. | [optional]
**cost_rate_descriptor** | **string** | The rate by which the cost applies. | [optional]
**derivative_source_education_contents** | [**\Resources\Model\EdFiEducationContentDerivativeSourceEducationContent[]**](EdFiEducationContentDerivativeSourceEducationContent.md) | An unordered collection of educationContentDerivativeSourceEducationContents. Relates the education content source to the education content. | [optional]
**derivative_source_learning_resource_metadata_uris** | [**\Resources\Model\EdFiEducationContentDerivativeSourceLearningResourceMetadataURI[]**](EdFiEducationContentDerivativeSourceLearningResourceMetadataURI.md) | An unordered collection of educationContentDerivativeSourceLearningResourceMetadataURIs. The URI (typical a URL) pointing to the metadata entry in a LRMI metadata repository, which describes this content item. | [optional]
**derivative_source_uris** | [**\Resources\Model\EdFiEducationContentDerivativeSourceURI[]**](EdFiEducationContentDerivativeSourceURI.md) | An unordered collection of educationContentDerivativeSourceURIs. The URI (typical a URL) pointing to an education content item. | [optional]
**description** | **string** | An extended written representation of the education content. | [optional]
**interactivity_style_descriptor** | **string** | The predominate mode of learning supported by the learning resource. Acceptable values are active, expositive, or mixed. | [optional]
**languages** | [**\Resources\Model\EdFiEducationContentLanguage[]**](EdFiEducationContentLanguage.md) | An unordered collection of educationContentLanguages. An indication of the languages in which the Education Content is designed. | [optional]
**learning_resource_metadata_uri** | **string** | The URI (typical a URL) pointing to the metadata entry in a LRMI metadata repository, which describes this content item. | [optional]
**namespace** | **string** | Namespace for the education content. |
**publication_date** | **\DateTime** | The date on which this content was first published. | [optional]
**publication_year** | **int** | The year at which this content was first published. | [optional]
**publisher** | **string** | The organization credited with publishing the resource. | [optional]
**short_description** | **string** | A short description or name of the entity. | [optional]
**time_required** | **string** | Approximate or typical time that it takes to work with or through this learning resource for the typical intended target audience expressed in minutes. | [optional]
**use_rights_url** | **string** | The URL where the owner specifies permissions for using the resource. | [optional]
**version** | **string** | The version identifier for the content. | [optional]
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional]
**_last_modified_date** | **\DateTime** | The date and time the resource was last modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
