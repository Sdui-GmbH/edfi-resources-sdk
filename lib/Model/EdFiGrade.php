<?php
/**
 * EdFiGrade
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Resources
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
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Resources\Model;

use \ArrayAccess;
use \Resources\ObjectSerializer;

/**
 * EdFiGrade Class Doc Comment
 *
 * @category Class
 * @package  Resources
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EdFiGrade implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'edFi_grade';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'grade_type_descriptor' => 'string',
        'grading_period_reference' => '\Resources\Model\EdFiGradingPeriodReference',
        'student_section_association_reference' => '\Resources\Model\EdFiStudentSectionAssociationReference',
        'current_grade_as_of_date' => '\DateTime',
        'current_grade_indicator' => 'bool',
        'diagnostic_statement' => 'string',
        'grade_earned_description' => 'string',
        'learning_standard_grades' => '\Resources\Model\EdFiGradeLearningStandardGrade[]',
        'letter_grade_earned' => 'string',
        'numeric_grade_earned' => 'float',
        'performance_base_conversion_descriptor' => 'string',
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
        'grade_type_descriptor' => null,
        'grading_period_reference' => null,
        'student_section_association_reference' => null,
        'current_grade_as_of_date' => 'date',
        'current_grade_indicator' => null,
        'diagnostic_statement' => null,
        'grade_earned_description' => null,
        'learning_standard_grades' => null,
        'letter_grade_earned' => null,
        'numeric_grade_earned' => 'double',
        'performance_base_conversion_descriptor' => null,
        '_etag' => null,
        '_last_modified_date' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'grade_type_descriptor' => false,
        'grading_period_reference' => false,
        'student_section_association_reference' => false,
        'current_grade_as_of_date' => true,
        'current_grade_indicator' => true,
        'diagnostic_statement' => true,
        'grade_earned_description' => true,
        'learning_standard_grades' => false,
        'letter_grade_earned' => true,
        'numeric_grade_earned' => true,
        'performance_base_conversion_descriptor' => true,
        '_etag' => false,
        '_last_modified_date' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'grade_type_descriptor' => 'gradeTypeDescriptor',
        'grading_period_reference' => 'gradingPeriodReference',
        'student_section_association_reference' => 'studentSectionAssociationReference',
        'current_grade_as_of_date' => 'currentGradeAsOfDate',
        'current_grade_indicator' => 'currentGradeIndicator',
        'diagnostic_statement' => 'diagnosticStatement',
        'grade_earned_description' => 'gradeEarnedDescription',
        'learning_standard_grades' => 'learningStandardGrades',
        'letter_grade_earned' => 'letterGradeEarned',
        'numeric_grade_earned' => 'numericGradeEarned',
        'performance_base_conversion_descriptor' => 'performanceBaseConversionDescriptor',
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
        'grade_type_descriptor' => 'setGradeTypeDescriptor',
        'grading_period_reference' => 'setGradingPeriodReference',
        'student_section_association_reference' => 'setStudentSectionAssociationReference',
        'current_grade_as_of_date' => 'setCurrentGradeAsOfDate',
        'current_grade_indicator' => 'setCurrentGradeIndicator',
        'diagnostic_statement' => 'setDiagnosticStatement',
        'grade_earned_description' => 'setGradeEarnedDescription',
        'learning_standard_grades' => 'setLearningStandardGrades',
        'letter_grade_earned' => 'setLetterGradeEarned',
        'numeric_grade_earned' => 'setNumericGradeEarned',
        'performance_base_conversion_descriptor' => 'setPerformanceBaseConversionDescriptor',
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
        'grade_type_descriptor' => 'getGradeTypeDescriptor',
        'grading_period_reference' => 'getGradingPeriodReference',
        'student_section_association_reference' => 'getStudentSectionAssociationReference',
        'current_grade_as_of_date' => 'getCurrentGradeAsOfDate',
        'current_grade_indicator' => 'getCurrentGradeIndicator',
        'diagnostic_statement' => 'getDiagnosticStatement',
        'grade_earned_description' => 'getGradeEarnedDescription',
        'learning_standard_grades' => 'getLearningStandardGrades',
        'letter_grade_earned' => 'getLetterGradeEarned',
        'numeric_grade_earned' => 'getNumericGradeEarned',
        'performance_base_conversion_descriptor' => 'getPerformanceBaseConversionDescriptor',
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('grade_type_descriptor', $data ?? [], null);
        $this->setIfExists('grading_period_reference', $data ?? [], null);
        $this->setIfExists('student_section_association_reference', $data ?? [], null);
        $this->setIfExists('current_grade_as_of_date', $data ?? [], null);
        $this->setIfExists('current_grade_indicator', $data ?? [], null);
        $this->setIfExists('diagnostic_statement', $data ?? [], null);
        $this->setIfExists('grade_earned_description', $data ?? [], null);
        $this->setIfExists('learning_standard_grades', $data ?? [], null);
        $this->setIfExists('letter_grade_earned', $data ?? [], null);
        $this->setIfExists('numeric_grade_earned', $data ?? [], null);
        $this->setIfExists('performance_base_conversion_descriptor', $data ?? [], null);
        $this->setIfExists('_etag', $data ?? [], null);
        $this->setIfExists('_last_modified_date', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['grade_type_descriptor'] === null) {
            $invalidProperties[] = "'grade_type_descriptor' can't be null";
        }
        if ((mb_strlen($this->container['grade_type_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'grade_type_descriptor', the character length must be smaller than or equal to 306.";
        }

        if ($this->container['grading_period_reference'] === null) {
            $invalidProperties[] = "'grading_period_reference' can't be null";
        }
        if ($this->container['student_section_association_reference'] === null) {
            $invalidProperties[] = "'student_section_association_reference' can't be null";
        }
        if (!is_null($this->container['diagnostic_statement']) && (mb_strlen($this->container['diagnostic_statement']) > 1024)) {
            $invalidProperties[] = "invalid value for 'diagnostic_statement', the character length must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['grade_earned_description']) && (mb_strlen($this->container['grade_earned_description']) > 64)) {
            $invalidProperties[] = "invalid value for 'grade_earned_description', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['letter_grade_earned']) && (mb_strlen($this->container['letter_grade_earned']) > 20)) {
            $invalidProperties[] = "invalid value for 'letter_grade_earned', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['numeric_grade_earned']) && ($this->container['numeric_grade_earned'] > 9999999.99)) {
            $invalidProperties[] = "invalid value for 'numeric_grade_earned', must be smaller than or equal to 9999999.99.";
        }

        if (!is_null($this->container['numeric_grade_earned']) && ($this->container['numeric_grade_earned'] < -9999999.99)) {
            $invalidProperties[] = "invalid value for 'numeric_grade_earned', must be bigger than or equal to -9999999.99.";
        }

        if (!is_null($this->container['performance_base_conversion_descriptor']) && (mb_strlen($this->container['performance_base_conversion_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'performance_base_conversion_descriptor', the character length must be smaller than or equal to 306.";
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
     * @param string|null $id 
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets grade_type_descriptor
     *
     * @return string
     */
    public function getGradeTypeDescriptor()
    {
        return $this->container['grade_type_descriptor'];
    }

    /**
     * Sets grade_type_descriptor
     *
     * @param string $grade_type_descriptor The type of grade reported (e.g., exam, final, grading period).
     *
     * @return self
     */
    public function setGradeTypeDescriptor($grade_type_descriptor)
    {
        if (is_null($grade_type_descriptor)) {
            throw new \InvalidArgumentException('non-nullable grade_type_descriptor cannot be null');
        }
        if ((mb_strlen($grade_type_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $grade_type_descriptor when calling EdFiGrade., must be smaller than or equal to 306.');
        }

        $this->container['grade_type_descriptor'] = $grade_type_descriptor;

        return $this;
    }

    /**
     * Gets grading_period_reference
     *
     * @return \Resources\Model\EdFiGradingPeriodReference
     */
    public function getGradingPeriodReference()
    {
        return $this->container['grading_period_reference'];
    }

    /**
     * Sets grading_period_reference
     *
     * @param \Resources\Model\EdFiGradingPeriodReference $grading_period_reference grading_period_reference
     *
     * @return self
     */
    public function setGradingPeriodReference($grading_period_reference)
    {
        if (is_null($grading_period_reference)) {
            throw new \InvalidArgumentException('non-nullable grading_period_reference cannot be null');
        }
        $this->container['grading_period_reference'] = $grading_period_reference;

        return $this;
    }

    /**
     * Gets student_section_association_reference
     *
     * @return \Resources\Model\EdFiStudentSectionAssociationReference
     */
    public function getStudentSectionAssociationReference()
    {
        return $this->container['student_section_association_reference'];
    }

    /**
     * Sets student_section_association_reference
     *
     * @param \Resources\Model\EdFiStudentSectionAssociationReference $student_section_association_reference student_section_association_reference
     *
     * @return self
     */
    public function setStudentSectionAssociationReference($student_section_association_reference)
    {
        if (is_null($student_section_association_reference)) {
            throw new \InvalidArgumentException('non-nullable student_section_association_reference cannot be null');
        }
        $this->container['student_section_association_reference'] = $student_section_association_reference;

        return $this;
    }

    /**
     * Gets current_grade_as_of_date
     *
     * @return \DateTime|null
     */
    public function getCurrentGradeAsOfDate()
    {
        return $this->container['current_grade_as_of_date'];
    }

    /**
     * Sets current_grade_as_of_date
     *
     * @param \DateTime|null $current_grade_as_of_date As-Of date for a grade posted as the current grade.
     *
     * @return self
     */
    public function setCurrentGradeAsOfDate($current_grade_as_of_date)
    {
        if (is_null($current_grade_as_of_date)) {
            array_push($this->openAPINullablesSetToNull, 'current_grade_as_of_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('current_grade_as_of_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['current_grade_as_of_date'] = $current_grade_as_of_date;

        return $this;
    }

    /**
     * Gets current_grade_indicator
     *
     * @return bool|null
     */
    public function getCurrentGradeIndicator()
    {
        return $this->container['current_grade_indicator'];
    }

    /**
     * Sets current_grade_indicator
     *
     * @param bool|null $current_grade_indicator An indicator that the posted grade is an interim grade for the grading period and not the final grade.
     *
     * @return self
     */
    public function setCurrentGradeIndicator($current_grade_indicator)
    {
        if (is_null($current_grade_indicator)) {
            array_push($this->openAPINullablesSetToNull, 'current_grade_indicator');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('current_grade_indicator', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['current_grade_indicator'] = $current_grade_indicator;

        return $this;
    }

    /**
     * Gets diagnostic_statement
     *
     * @return string|null
     */
    public function getDiagnosticStatement()
    {
        return $this->container['diagnostic_statement'];
    }

    /**
     * Sets diagnostic_statement
     *
     * @param string|null $diagnostic_statement A statement provided by the teacher that provides information in addition to the grade or assessment score.
     *
     * @return self
     */
    public function setDiagnosticStatement($diagnostic_statement)
    {
        if (is_null($diagnostic_statement)) {
            array_push($this->openAPINullablesSetToNull, 'diagnostic_statement');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('diagnostic_statement', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($diagnostic_statement) && (mb_strlen($diagnostic_statement) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $diagnostic_statement when calling EdFiGrade., must be smaller than or equal to 1024.');
        }

        $this->container['diagnostic_statement'] = $diagnostic_statement;

        return $this;
    }

    /**
     * Gets grade_earned_description
     *
     * @return string|null
     */
    public function getGradeEarnedDescription()
    {
        return $this->container['grade_earned_description'];
    }

    /**
     * Sets grade_earned_description
     *
     * @param string|null $grade_earned_description A description of the grade earned by the learner.
     *
     * @return self
     */
    public function setGradeEarnedDescription($grade_earned_description)
    {
        if (is_null($grade_earned_description)) {
            array_push($this->openAPINullablesSetToNull, 'grade_earned_description');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('grade_earned_description', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($grade_earned_description) && (mb_strlen($grade_earned_description) > 64)) {
            throw new \InvalidArgumentException('invalid length for $grade_earned_description when calling EdFiGrade., must be smaller than or equal to 64.');
        }

        $this->container['grade_earned_description'] = $grade_earned_description;

        return $this;
    }

    /**
     * Gets learning_standard_grades
     *
     * @return \Resources\Model\EdFiGradeLearningStandardGrade[]|null
     */
    public function getLearningStandardGrades()
    {
        return $this->container['learning_standard_grades'];
    }

    /**
     * Sets learning_standard_grades
     *
     * @param \Resources\Model\EdFiGradeLearningStandardGrade[]|null $learning_standard_grades An unordered collection of gradeLearningStandardGrades. A collection of learning standards associated with the grade.
     *
     * @return self
     */
    public function setLearningStandardGrades($learning_standard_grades)
    {
        if (is_null($learning_standard_grades)) {
            throw new \InvalidArgumentException('non-nullable learning_standard_grades cannot be null');
        }
        $this->container['learning_standard_grades'] = $learning_standard_grades;

        return $this;
    }

    /**
     * Gets letter_grade_earned
     *
     * @return string|null
     */
    public function getLetterGradeEarned()
    {
        return $this->container['letter_grade_earned'];
    }

    /**
     * Sets letter_grade_earned
     *
     * @param string|null $letter_grade_earned A final or interim (grading period) indicator of student performance in a class as submitted by the instructor.
     *
     * @return self
     */
    public function setLetterGradeEarned($letter_grade_earned)
    {
        if (is_null($letter_grade_earned)) {
            array_push($this->openAPINullablesSetToNull, 'letter_grade_earned');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('letter_grade_earned', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($letter_grade_earned) && (mb_strlen($letter_grade_earned) > 20)) {
            throw new \InvalidArgumentException('invalid length for $letter_grade_earned when calling EdFiGrade., must be smaller than or equal to 20.');
        }

        $this->container['letter_grade_earned'] = $letter_grade_earned;

        return $this;
    }

    /**
     * Gets numeric_grade_earned
     *
     * @return float|null
     */
    public function getNumericGradeEarned()
    {
        return $this->container['numeric_grade_earned'];
    }

    /**
     * Sets numeric_grade_earned
     *
     * @param float|null $numeric_grade_earned A final or interim (grading period) indicator of student performance in a class as submitted by the instructor.
     *
     * @return self
     */
    public function setNumericGradeEarned($numeric_grade_earned)
    {
        if (is_null($numeric_grade_earned)) {
            array_push($this->openAPINullablesSetToNull, 'numeric_grade_earned');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('numeric_grade_earned', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($numeric_grade_earned) && ($numeric_grade_earned > 9999999.99)) {
            throw new \InvalidArgumentException('invalid value for $numeric_grade_earned when calling EdFiGrade., must be smaller than or equal to 9999999.99.');
        }
        if (!is_null($numeric_grade_earned) && ($numeric_grade_earned < -9999999.99)) {
            throw new \InvalidArgumentException('invalid value for $numeric_grade_earned when calling EdFiGrade., must be bigger than or equal to -9999999.99.');
        }

        $this->container['numeric_grade_earned'] = $numeric_grade_earned;

        return $this;
    }

    /**
     * Gets performance_base_conversion_descriptor
     *
     * @return string|null
     */
    public function getPerformanceBaseConversionDescriptor()
    {
        return $this->container['performance_base_conversion_descriptor'];
    }

    /**
     * Sets performance_base_conversion_descriptor
     *
     * @param string|null $performance_base_conversion_descriptor A conversion of the level to a standard set of performance levels.
     *
     * @return self
     */
    public function setPerformanceBaseConversionDescriptor($performance_base_conversion_descriptor)
    {
        if (is_null($performance_base_conversion_descriptor)) {
            array_push($this->openAPINullablesSetToNull, 'performance_base_conversion_descriptor');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('performance_base_conversion_descriptor', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($performance_base_conversion_descriptor) && (mb_strlen($performance_base_conversion_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $performance_base_conversion_descriptor when calling EdFiGrade., must be smaller than or equal to 306.');
        }

        $this->container['performance_base_conversion_descriptor'] = $performance_base_conversion_descriptor;

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
        if (is_null($_etag)) {
            throw new \InvalidArgumentException('non-nullable _etag cannot be null');
        }
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
        if (is_null($_last_modified_date)) {
            throw new \InvalidArgumentException('non-nullable _last_modified_date cannot be null');
        }
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
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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


