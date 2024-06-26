<?php
/**
 * EdFiLearningStandard
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Ed-Fi Operational Data Store API
 *
 * The Ed-Fi ODS / API enables applications to read and write education data stored in an Ed-Fi ODS through a secure REST interface.  ***  > *Note: Consumers of ODS / API information should sanitize all data for display and storage. The ODS / API provides reasonable safeguards against cross-site scripting attacks and other malicious content, but the platform does not and cannot guarantee that the data it contains is free of all potentially harmful content.*  ***
 *
 * The version of the OpenAPI document: 3
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * EdFiLearningStandard Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EdFiLearningStandard implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'edFi_learningStandard';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'academic_subjects' => '\OpenAPI\Client\Model\EdFiLearningStandardAcademicSubject[]',
        'grade_levels' => '\OpenAPI\Client\Model\EdFiLearningStandardGradeLevel[]',
        'learning_standard_id' => 'string',
        'parent_learning_standard_reference' => '\OpenAPI\Client\Model\EdFiLearningStandardReference',
        'content_standard' => '\OpenAPI\Client\Model\EdFiLearningStandardContentStandard',
        'course_title' => 'string',
        'description' => 'string',
        'identification_codes' => '\OpenAPI\Client\Model\EdFiLearningStandardIdentificationCode[]',
        'learning_standard_category_descriptor' => 'string',
        'learning_standard_item_code' => 'string',
        'learning_standard_scope_descriptor' => 'string',
        'namespace' => 'string',
        'success_criteria' => 'string',
        'uri' => 'string',
        '_etag' => 'string',
        '_last_modified_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'academic_subjects' => null,
        'grade_levels' => null,
        'learning_standard_id' => null,
        'parent_learning_standard_reference' => null,
        'content_standard' => null,
        'course_title' => null,
        'description' => null,
        'identification_codes' => null,
        'learning_standard_category_descriptor' => null,
        'learning_standard_item_code' => null,
        'learning_standard_scope_descriptor' => null,
        'namespace' => null,
        'success_criteria' => null,
        'uri' => null,
        '_etag' => null,
        '_last_modified_date' => 'date-time'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'academic_subjects' => 'academicSubjects',
        'grade_levels' => 'gradeLevels',
        'learning_standard_id' => 'learningStandardId',
        'parent_learning_standard_reference' => 'parentLearningStandardReference',
        'content_standard' => 'contentStandard',
        'course_title' => 'courseTitle',
        'description' => 'description',
        'identification_codes' => 'identificationCodes',
        'learning_standard_category_descriptor' => 'learningStandardCategoryDescriptor',
        'learning_standard_item_code' => 'learningStandardItemCode',
        'learning_standard_scope_descriptor' => 'learningStandardScopeDescriptor',
        'namespace' => 'namespace',
        'success_criteria' => 'successCriteria',
        'uri' => 'uri',
        '_etag' => '_etag',
        '_last_modified_date' => '_lastModifiedDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'academic_subjects' => 'setAcademicSubjects',
        'grade_levels' => 'setGradeLevels',
        'learning_standard_id' => 'setLearningStandardId',
        'parent_learning_standard_reference' => 'setParentLearningStandardReference',
        'content_standard' => 'setContentStandard',
        'course_title' => 'setCourseTitle',
        'description' => 'setDescription',
        'identification_codes' => 'setIdentificationCodes',
        'learning_standard_category_descriptor' => 'setLearningStandardCategoryDescriptor',
        'learning_standard_item_code' => 'setLearningStandardItemCode',
        'learning_standard_scope_descriptor' => 'setLearningStandardScopeDescriptor',
        'namespace' => 'setNamespace',
        'success_criteria' => 'setSuccessCriteria',
        'uri' => 'setUri',
        '_etag' => 'setEtag',
        '_last_modified_date' => 'setLastModifiedDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'academic_subjects' => 'getAcademicSubjects',
        'grade_levels' => 'getGradeLevels',
        'learning_standard_id' => 'getLearningStandardId',
        'parent_learning_standard_reference' => 'getParentLearningStandardReference',
        'content_standard' => 'getContentStandard',
        'course_title' => 'getCourseTitle',
        'description' => 'getDescription',
        'identification_codes' => 'getIdentificationCodes',
        'learning_standard_category_descriptor' => 'getLearningStandardCategoryDescriptor',
        'learning_standard_item_code' => 'getLearningStandardItemCode',
        'learning_standard_scope_descriptor' => 'getLearningStandardScopeDescriptor',
        'namespace' => 'getNamespace',
        'success_criteria' => 'getSuccessCriteria',
        'uri' => 'getUri',
        '_etag' => 'getEtag',
        '_last_modified_date' => 'getLastModifiedDate'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = $data['id'] ?? null;
        $this->container['academic_subjects'] = $data['academic_subjects'] ?? null;
        $this->container['grade_levels'] = $data['grade_levels'] ?? null;
        $this->container['learning_standard_id'] = $data['learning_standard_id'] ?? null;
        $this->container['parent_learning_standard_reference'] = $data['parent_learning_standard_reference'] ?? null;
        $this->container['content_standard'] = $data['content_standard'] ?? null;
        $this->container['course_title'] = $data['course_title'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['identification_codes'] = $data['identification_codes'] ?? null;
        $this->container['learning_standard_category_descriptor'] = $data['learning_standard_category_descriptor'] ?? null;
        $this->container['learning_standard_item_code'] = $data['learning_standard_item_code'] ?? null;
        $this->container['learning_standard_scope_descriptor'] = $data['learning_standard_scope_descriptor'] ?? null;
        $this->container['namespace'] = $data['namespace'] ?? null;
        $this->container['success_criteria'] = $data['success_criteria'] ?? null;
        $this->container['uri'] = $data['uri'] ?? null;
        $this->container['_etag'] = $data['_etag'] ?? null;
        $this->container['_last_modified_date'] = $data['_last_modified_date'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['academic_subjects'] === null) {
            $invalidProperties[] = "'academic_subjects' can't be null";
        }
        if ($this->container['grade_levels'] === null) {
            $invalidProperties[] = "'grade_levels' can't be null";
        }
        if ($this->container['learning_standard_id'] === null) {
            $invalidProperties[] = "'learning_standard_id' can't be null";
        }
        if ((mb_strlen($this->container['learning_standard_id']) > 60)) {
            $invalidProperties[] = "invalid value for 'learning_standard_id', the character length must be smaller than or equal to 60.";
        }

        if ((mb_strlen($this->container['learning_standard_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'learning_standard_id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['content_standard'] === null) {
            $invalidProperties[] = "'content_standard' can't be null";
        }
        if (!is_null($this->container['course_title']) && (mb_strlen($this->container['course_title']) > 60)) {
            $invalidProperties[] = "invalid value for 'course_title', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['course_title']) && (mb_strlen($this->container['course_title']) < 1)) {
            $invalidProperties[] = "invalid value for 'course_title', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ((mb_strlen($this->container['description']) > 1024)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
        }

        if ((mb_strlen($this->container['description']) < 1)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['learning_standard_category_descriptor']) && (mb_strlen($this->container['learning_standard_category_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'learning_standard_category_descriptor', the character length must be smaller than or equal to 306.";
        }

        if (!is_null($this->container['learning_standard_item_code']) && (mb_strlen($this->container['learning_standard_item_code']) > 60)) {
            $invalidProperties[] = "invalid value for 'learning_standard_item_code', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['learning_standard_item_code']) && (mb_strlen($this->container['learning_standard_item_code']) < 1)) {
            $invalidProperties[] = "invalid value for 'learning_standard_item_code', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['learning_standard_scope_descriptor']) && (mb_strlen($this->container['learning_standard_scope_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'learning_standard_scope_descriptor', the character length must be smaller than or equal to 306.";
        }

        if ($this->container['namespace'] === null) {
            $invalidProperties[] = "'namespace' can't be null";
        }
        if ((mb_strlen($this->container['namespace']) > 255)) {
            $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 255.";
        }

        if ((mb_strlen($this->container['namespace']) < 5)) {
            $invalidProperties[] = "invalid value for 'namespace', the character length must be bigger than or equal to 5.";
        }

        if (!is_null($this->container['success_criteria']) && (mb_strlen($this->container['success_criteria']) > 150)) {
            $invalidProperties[] = "invalid value for 'success_criteria', the character length must be smaller than or equal to 150.";
        }

        if (!is_null($this->container['success_criteria']) && (mb_strlen($this->container['success_criteria']) < 1)) {
            $invalidProperties[] = "invalid value for 'success_criteria', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['uri']) && (mb_strlen($this->container['uri']) > 255)) {
            $invalidProperties[] = "invalid value for 'uri', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['uri']) && (mb_strlen($this->container['uri']) < 5)) {
            $invalidProperties[] = "invalid value for 'uri', the character length must be bigger than or equal to 5.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets academic_subjects
     *
     * @return \OpenAPI\Client\Model\EdFiLearningStandardAcademicSubject[]
     */
    public function getAcademicSubjects()
    {
        return $this->container['academic_subjects'];
    }

    /**
     * Sets academic_subjects
     *
     * @param \OpenAPI\Client\Model\EdFiLearningStandardAcademicSubject[] $academic_subjects An unordered collection of learningStandardAcademicSubjects. Subject area for the learning standard.
     *
     * @return self
     */
    public function setAcademicSubjects($academic_subjects)
    {
        $this->container['academic_subjects'] = $academic_subjects;

        return $this;
    }

    /**
     * Gets grade_levels
     *
     * @return \OpenAPI\Client\Model\EdFiLearningStandardGradeLevel[]
     */
    public function getGradeLevels()
    {
        return $this->container['grade_levels'];
    }

    /**
     * Sets grade_levels
     *
     * @param \OpenAPI\Client\Model\EdFiLearningStandardGradeLevel[] $grade_levels An unordered collection of learningStandardGradeLevels. The grade levels for the specific learning standard.
     *
     * @return self
     */
    public function setGradeLevels($grade_levels)
    {
        $this->container['grade_levels'] = $grade_levels;

        return $this;
    }

    /**
     * Gets learning_standard_id
     *
     * @return string
     */
    public function getLearningStandardId()
    {
        return $this->container['learning_standard_id'];
    }

    /**
     * Sets learning_standard_id
     *
     * @param string $learning_standard_id The identifier for the specific learning standard (e.g., 111.15.3.1.A).
     *
     * @return self
     */
    public function setLearningStandardId($learning_standard_id)
    {
        if ((mb_strlen($learning_standard_id) > 60)) {
            throw new \InvalidArgumentException('invalid length for $learning_standard_id when calling EdFiLearningStandard., must be smaller than or equal to 60.');
        }
        if ((mb_strlen($learning_standard_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $learning_standard_id when calling EdFiLearningStandard., must be bigger than or equal to 1.');
        }

        $this->container['learning_standard_id'] = $learning_standard_id;

        return $this;
    }

    /**
     * Gets parent_learning_standard_reference
     *
     * @return \OpenAPI\Client\Model\EdFiLearningStandardReference|null
     */
    public function getParentLearningStandardReference()
    {
        return $this->container['parent_learning_standard_reference'];
    }

    /**
     * Sets parent_learning_standard_reference
     *
     * @param \OpenAPI\Client\Model\EdFiLearningStandardReference|null $parent_learning_standard_reference parent_learning_standard_reference
     *
     * @return self
     */
    public function setParentLearningStandardReference($parent_learning_standard_reference)
    {
        $this->container['parent_learning_standard_reference'] = $parent_learning_standard_reference;

        return $this;
    }

    /**
     * Gets content_standard
     *
     * @return \OpenAPI\Client\Model\EdFiLearningStandardContentStandard
     */
    public function getContentStandard()
    {
        return $this->container['content_standard'];
    }

    /**
     * Sets content_standard
     *
     * @param \OpenAPI\Client\Model\EdFiLearningStandardContentStandard $content_standard content_standard
     *
     * @return self
     */
    public function setContentStandard($content_standard)
    {
        $this->container['content_standard'] = $content_standard;

        return $this;
    }

    /**
     * Gets course_title
     *
     * @return string|null
     */
    public function getCourseTitle()
    {
        return $this->container['course_title'];
    }

    /**
     * Sets course_title
     *
     * @param string|null $course_title The official course title with which this learning standard is associated.
     *
     * @return self
     */
    public function setCourseTitle($course_title)
    {
        if (!is_null($course_title) && (mb_strlen($course_title) > 60)) {
            throw new \InvalidArgumentException('invalid length for $course_title when calling EdFiLearningStandard., must be smaller than or equal to 60.');
        }
        if (!is_null($course_title) && (mb_strlen($course_title) < 1)) {
            throw new \InvalidArgumentException('invalid length for $course_title when calling EdFiLearningStandard., must be bigger than or equal to 1.');
        }

        $this->container['course_title'] = $course_title;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description The text of the statement. The textual content that either describes a specific competency such as \"Apply the Pythagorean Theorem to determine unknown side lengths in right triangles in real-world and mathematical problems in two and three dimensions.\" or describes a less granular group of competencies within the taxonomy of the standards document, e.g. \"Understand and apply the Pythagorean Theorem,\" or \"Geometry\".
     *
     * @return self
     */
    public function setDescription($description)
    {
        if ((mb_strlen($description) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $description when calling EdFiLearningStandard., must be smaller than or equal to 1024.');
        }
        if ((mb_strlen($description) < 1)) {
            throw new \InvalidArgumentException('invalid length for $description when calling EdFiLearningStandard., must be bigger than or equal to 1.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets identification_codes
     *
     * @return \OpenAPI\Client\Model\EdFiLearningStandardIdentificationCode[]|null
     */
    public function getIdentificationCodes()
    {
        return $this->container['identification_codes'];
    }

    /**
     * Sets identification_codes
     *
     * @param \OpenAPI\Client\Model\EdFiLearningStandardIdentificationCode[]|null $identification_codes An unordered collection of learningStandardIdentificationCodes. A coding scheme that is used for identification and record-keeping purposes by schools, social services, or other agencies to refer to a learning standard.
     *
     * @return self
     */
    public function setIdentificationCodes($identification_codes)
    {
        $this->container['identification_codes'] = $identification_codes;

        return $this;
    }

    /**
     * Gets learning_standard_category_descriptor
     *
     * @return string|null
     */
    public function getLearningStandardCategoryDescriptor()
    {
        return $this->container['learning_standard_category_descriptor'];
    }

    /**
     * Sets learning_standard_category_descriptor
     *
     * @param string|null $learning_standard_category_descriptor An additional classification of the type of a specific learning standard.
     *
     * @return self
     */
    public function setLearningStandardCategoryDescriptor($learning_standard_category_descriptor)
    {
        if (!is_null($learning_standard_category_descriptor) && (mb_strlen($learning_standard_category_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $learning_standard_category_descriptor when calling EdFiLearningStandard., must be smaller than or equal to 306.');
        }

        $this->container['learning_standard_category_descriptor'] = $learning_standard_category_descriptor;

        return $this;
    }

    /**
     * Gets learning_standard_item_code
     *
     * @return string|null
     */
    public function getLearningStandardItemCode()
    {
        return $this->container['learning_standard_item_code'];
    }

    /**
     * Sets learning_standard_item_code
     *
     * @param string|null $learning_standard_item_code A code designated by the promulgating body to identify the statement, e.g. 1.N.3 (usually not globally unique).
     *
     * @return self
     */
    public function setLearningStandardItemCode($learning_standard_item_code)
    {
        if (!is_null($learning_standard_item_code) && (mb_strlen($learning_standard_item_code) > 60)) {
            throw new \InvalidArgumentException('invalid length for $learning_standard_item_code when calling EdFiLearningStandard., must be smaller than or equal to 60.');
        }
        if (!is_null($learning_standard_item_code) && (mb_strlen($learning_standard_item_code) < 1)) {
            throw new \InvalidArgumentException('invalid length for $learning_standard_item_code when calling EdFiLearningStandard., must be bigger than or equal to 1.');
        }

        $this->container['learning_standard_item_code'] = $learning_standard_item_code;

        return $this;
    }

    /**
     * Gets learning_standard_scope_descriptor
     *
     * @return string|null
     */
    public function getLearningStandardScopeDescriptor()
    {
        return $this->container['learning_standard_scope_descriptor'];
    }

    /**
     * Sets learning_standard_scope_descriptor
     *
     * @param string|null $learning_standard_scope_descriptor Signals the scope of usage the standard. Does not necessarily relate the standard to the governing body.
     *
     * @return self
     */
    public function setLearningStandardScopeDescriptor($learning_standard_scope_descriptor)
    {
        if (!is_null($learning_standard_scope_descriptor) && (mb_strlen($learning_standard_scope_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $learning_standard_scope_descriptor when calling EdFiLearningStandard., must be smaller than or equal to 306.');
        }

        $this->container['learning_standard_scope_descriptor'] = $learning_standard_scope_descriptor;

        return $this;
    }

    /**
     * Gets namespace
     *
     * @return string
     */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
     * Sets namespace
     *
     * @param string $namespace The namespace of the organization or entity who governs the standard. It is recommended the namespaces observe a URI format and begin with a domain name under the governing organization or entity control.
     *
     * @return self
     */
    public function setNamespace($namespace)
    {
        if ((mb_strlen($namespace) > 255)) {
            throw new \InvalidArgumentException('invalid length for $namespace when calling EdFiLearningStandard., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($namespace) < 5)) {
            throw new \InvalidArgumentException('invalid length for $namespace when calling EdFiLearningStandard., must be bigger than or equal to 5.');
        }

        $this->container['namespace'] = $namespace;

        return $this;
    }

    /**
     * Gets success_criteria
     *
     * @return string|null
     */
    public function getSuccessCriteria()
    {
        return $this->container['success_criteria'];
    }

    /**
     * Sets success_criteria
     *
     * @param string|null $success_criteria One or more statements that describes the criteria used by teachers and students to check for attainment of a learning standard. This criteria gives clear indications as to the degree to which learning is moving through the Zone or Proximal Development toward independent achievement of the learning standard.
     *
     * @return self
     */
    public function setSuccessCriteria($success_criteria)
    {
        if (!is_null($success_criteria) && (mb_strlen($success_criteria) > 150)) {
            throw new \InvalidArgumentException('invalid length for $success_criteria when calling EdFiLearningStandard., must be smaller than or equal to 150.');
        }
        if (!is_null($success_criteria) && (mb_strlen($success_criteria) < 1)) {
            throw new \InvalidArgumentException('invalid length for $success_criteria when calling EdFiLearningStandard., must be bigger than or equal to 1.');
        }

        $this->container['success_criteria'] = $success_criteria;

        return $this;
    }

    /**
     * Gets uri
     *
     * @return string|null
     */
    public function getUri()
    {
        return $this->container['uri'];
    }

    /**
     * Sets uri
     *
     * @param string|null $uri An unambiguous reference to the statement using a network-resolvable URI.
     *
     * @return self
     */
    public function setUri($uri)
    {
        if (!is_null($uri) && (mb_strlen($uri) > 255)) {
            throw new \InvalidArgumentException('invalid length for $uri when calling EdFiLearningStandard., must be smaller than or equal to 255.');
        }
        if (!is_null($uri) && (mb_strlen($uri) < 5)) {
            throw new \InvalidArgumentException('invalid length for $uri when calling EdFiLearningStandard., must be bigger than or equal to 5.');
        }

        $this->container['uri'] = $uri;

        return $this;
    }

    /**
     * Gets _etag
     *
     * @return string|null
     */
    public function getEtag()
    {
        return $this->container['_etag'];
    }

    /**
     * Sets _etag
     *
     * @param string|null $_etag A unique system-generated value that identifies the version of the resource.
     *
     * @return self
     */
    public function setEtag($_etag)
    {
        $this->container['_etag'] = $_etag;

        return $this;
    }

    /**
     * Gets _last_modified_date
     *
     * @return \DateTime|null
     */
    public function getLastModifiedDate()
    {
        return $this->container['_last_modified_date'];
    }

    /**
     * Sets _last_modified_date
     *
     * @param \DateTime|null $_last_modified_date The date and time the resource was last modified.
     *
     * @return self
     */
    public function setLastModifiedDate($_last_modified_date)
    {
        $this->container['_last_modified_date'] = $_last_modified_date;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


