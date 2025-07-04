<?php
/**
 * EdFiReportCard
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
 * EdFiReportCard Class Doc Comment
 *
 * @category Class
 * @package  Resources
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EdFiReportCard implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'edFi_reportCard';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'education_organization_reference' => '\Resources\Model\EdFiEducationOrganizationReference',
        'grading_period_reference' => '\Resources\Model\EdFiGradingPeriodReference',
        'student_reference' => '\Resources\Model\EdFiStudentReference',
        'grade_point_averages' => '\Resources\Model\EdFiReportCardGradePointAverage[]',
        'grades' => '\Resources\Model\EdFiReportCardGrade[]',
        'number_of_days_absent' => 'float',
        'number_of_days_in_attendance' => 'float',
        'number_of_days_tardy' => 'int',
        'student_competency_objectives' => '\Resources\Model\EdFiReportCardStudentCompetencyObjective[]',
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
        'education_organization_reference' => null,
        'grading_period_reference' => null,
        'student_reference' => null,
        'grade_point_averages' => null,
        'grades' => null,
        'number_of_days_absent' => 'double',
        'number_of_days_in_attendance' => 'double',
        'number_of_days_tardy' => 'int32',
        'student_competency_objectives' => null,
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
        'education_organization_reference' => false,
        'grading_period_reference' => false,
        'student_reference' => false,
        'grade_point_averages' => false,
        'grades' => false,
        'number_of_days_absent' => true,
        'number_of_days_in_attendance' => true,
        'number_of_days_tardy' => true,
        'student_competency_objectives' => false,
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
        'education_organization_reference' => 'educationOrganizationReference',
        'grading_period_reference' => 'gradingPeriodReference',
        'student_reference' => 'studentReference',
        'grade_point_averages' => 'gradePointAverages',
        'grades' => 'grades',
        'number_of_days_absent' => 'numberOfDaysAbsent',
        'number_of_days_in_attendance' => 'numberOfDaysInAttendance',
        'number_of_days_tardy' => 'numberOfDaysTardy',
        'student_competency_objectives' => 'studentCompetencyObjectives',
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
        'education_organization_reference' => 'setEducationOrganizationReference',
        'grading_period_reference' => 'setGradingPeriodReference',
        'student_reference' => 'setStudentReference',
        'grade_point_averages' => 'setGradePointAverages',
        'grades' => 'setGrades',
        'number_of_days_absent' => 'setNumberOfDaysAbsent',
        'number_of_days_in_attendance' => 'setNumberOfDaysInAttendance',
        'number_of_days_tardy' => 'setNumberOfDaysTardy',
        'student_competency_objectives' => 'setStudentCompetencyObjectives',
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
        'education_organization_reference' => 'getEducationOrganizationReference',
        'grading_period_reference' => 'getGradingPeriodReference',
        'student_reference' => 'getStudentReference',
        'grade_point_averages' => 'getGradePointAverages',
        'grades' => 'getGrades',
        'number_of_days_absent' => 'getNumberOfDaysAbsent',
        'number_of_days_in_attendance' => 'getNumberOfDaysInAttendance',
        'number_of_days_tardy' => 'getNumberOfDaysTardy',
        'student_competency_objectives' => 'getStudentCompetencyObjectives',
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
        $this->setIfExists('education_organization_reference', $data ?? [], null);
        $this->setIfExists('grading_period_reference', $data ?? [], null);
        $this->setIfExists('student_reference', $data ?? [], null);
        $this->setIfExists('grade_point_averages', $data ?? [], null);
        $this->setIfExists('grades', $data ?? [], null);
        $this->setIfExists('number_of_days_absent', $data ?? [], null);
        $this->setIfExists('number_of_days_in_attendance', $data ?? [], null);
        $this->setIfExists('number_of_days_tardy', $data ?? [], null);
        $this->setIfExists('student_competency_objectives', $data ?? [], null);
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

        if ($this->container['education_organization_reference'] === null) {
            $invalidProperties[] = "'education_organization_reference' can't be null";
        }
        if ($this->container['grading_period_reference'] === null) {
            $invalidProperties[] = "'grading_period_reference' can't be null";
        }
        if ($this->container['student_reference'] === null) {
            $invalidProperties[] = "'student_reference' can't be null";
        }
        if (!is_null($this->container['number_of_days_absent']) && ($this->container['number_of_days_absent'] > 1.0E+14)) {
            $invalidProperties[] = "invalid value for 'number_of_days_absent', must be smaller than or equal to 1.0E+14.";
        }

        if (!is_null($this->container['number_of_days_absent']) && ($this->container['number_of_days_absent'] < 0.0)) {
            $invalidProperties[] = "invalid value for 'number_of_days_absent', must be bigger than or equal to 0.0.";
        }

        if (!is_null($this->container['number_of_days_in_attendance']) && ($this->container['number_of_days_in_attendance'] > 1.0E+14)) {
            $invalidProperties[] = "invalid value for 'number_of_days_in_attendance', must be smaller than or equal to 1.0E+14.";
        }

        if (!is_null($this->container['number_of_days_in_attendance']) && ($this->container['number_of_days_in_attendance'] < 0.0)) {
            $invalidProperties[] = "invalid value for 'number_of_days_in_attendance', must be bigger than or equal to 0.0.";
        }

        if (!is_null($this->container['number_of_days_tardy']) && ($this->container['number_of_days_tardy'] < 0)) {
            $invalidProperties[] = "invalid value for 'number_of_days_tardy', must be bigger than or equal to 0.";
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
     * Gets education_organization_reference
     *
     * @return \Resources\Model\EdFiEducationOrganizationReference
     */
    public function getEducationOrganizationReference()
    {
        return $this->container['education_organization_reference'];
    }

    /**
     * Sets education_organization_reference
     *
     * @param \Resources\Model\EdFiEducationOrganizationReference $education_organization_reference education_organization_reference
     *
     * @return self
     */
    public function setEducationOrganizationReference($education_organization_reference)
    {
        if (is_null($education_organization_reference)) {
            throw new \InvalidArgumentException('non-nullable education_organization_reference cannot be null');
        }
        $this->container['education_organization_reference'] = $education_organization_reference;

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
     * Gets student_reference
     *
     * @return \Resources\Model\EdFiStudentReference
     */
    public function getStudentReference()
    {
        return $this->container['student_reference'];
    }

    /**
     * Sets student_reference
     *
     * @param \Resources\Model\EdFiStudentReference $student_reference student_reference
     *
     * @return self
     */
    public function setStudentReference($student_reference)
    {
        if (is_null($student_reference)) {
            throw new \InvalidArgumentException('non-nullable student_reference cannot be null');
        }
        $this->container['student_reference'] = $student_reference;

        return $this;
    }

    /**
     * Gets grade_point_averages
     *
     * @return \Resources\Model\EdFiReportCardGradePointAverage[]|null
     */
    public function getGradePointAverages()
    {
        return $this->container['grade_point_averages'];
    }

    /**
     * Sets grade_point_averages
     *
     * @param \Resources\Model\EdFiReportCardGradePointAverage[]|null $grade_point_averages An unordered collection of reportCardGradePointAverages. A measure of average performance for courses taken by an individual.
     *
     * @return self
     */
    public function setGradePointAverages($grade_point_averages)
    {
        if (is_null($grade_point_averages)) {
            throw new \InvalidArgumentException('non-nullable grade_point_averages cannot be null');
        }
        $this->container['grade_point_averages'] = $grade_point_averages;

        return $this;
    }

    /**
     * Gets grades
     *
     * @return \Resources\Model\EdFiReportCardGrade[]|null
     */
    public function getGrades()
    {
        return $this->container['grades'];
    }

    /**
     * Sets grades
     *
     * @param \Resources\Model\EdFiReportCardGrade[]|null $grades An unordered collection of reportCardGrades. Grades for the classes attended by the student for this grading period.
     *
     * @return self
     */
    public function setGrades($grades)
    {
        if (is_null($grades)) {
            throw new \InvalidArgumentException('non-nullable grades cannot be null');
        }
        $this->container['grades'] = $grades;

        return $this;
    }

    /**
     * Gets number_of_days_absent
     *
     * @return float|null
     */
    public function getNumberOfDaysAbsent()
    {
        return $this->container['number_of_days_absent'];
    }

    /**
     * Sets number_of_days_absent
     *
     * @param float|null $number_of_days_absent The number of days an individual is absent when school is in session during a given reporting period.
     *
     * @return self
     */
    public function setNumberOfDaysAbsent($number_of_days_absent)
    {
        if (is_null($number_of_days_absent)) {
            array_push($this->openAPINullablesSetToNull, 'number_of_days_absent');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('number_of_days_absent', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($number_of_days_absent) && ($number_of_days_absent > 1.0E+14)) {
            throw new \InvalidArgumentException('invalid value for $number_of_days_absent when calling EdFiReportCard., must be smaller than or equal to 1.0E+14.');
        }
        if (!is_null($number_of_days_absent) && ($number_of_days_absent < 0.0)) {
            throw new \InvalidArgumentException('invalid value for $number_of_days_absent when calling EdFiReportCard., must be bigger than or equal to 0.0.');
        }

        $this->container['number_of_days_absent'] = $number_of_days_absent;

        return $this;
    }

    /**
     * Gets number_of_days_in_attendance
     *
     * @return float|null
     */
    public function getNumberOfDaysInAttendance()
    {
        return $this->container['number_of_days_in_attendance'];
    }

    /**
     * Sets number_of_days_in_attendance
     *
     * @param float|null $number_of_days_in_attendance The number of days an individual is present when school is in session during a given reporting period.
     *
     * @return self
     */
    public function setNumberOfDaysInAttendance($number_of_days_in_attendance)
    {
        if (is_null($number_of_days_in_attendance)) {
            array_push($this->openAPINullablesSetToNull, 'number_of_days_in_attendance');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('number_of_days_in_attendance', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($number_of_days_in_attendance) && ($number_of_days_in_attendance > 1.0E+14)) {
            throw new \InvalidArgumentException('invalid value for $number_of_days_in_attendance when calling EdFiReportCard., must be smaller than or equal to 1.0E+14.');
        }
        if (!is_null($number_of_days_in_attendance) && ($number_of_days_in_attendance < 0.0)) {
            throw new \InvalidArgumentException('invalid value for $number_of_days_in_attendance when calling EdFiReportCard., must be bigger than or equal to 0.0.');
        }

        $this->container['number_of_days_in_attendance'] = $number_of_days_in_attendance;

        return $this;
    }

    /**
     * Gets number_of_days_tardy
     *
     * @return int|null
     */
    public function getNumberOfDaysTardy()
    {
        return $this->container['number_of_days_tardy'];
    }

    /**
     * Sets number_of_days_tardy
     *
     * @param int|null $number_of_days_tardy The number of days an individual is tardy during a given reporting period.
     *
     * @return self
     */
    public function setNumberOfDaysTardy($number_of_days_tardy)
    {
        if (is_null($number_of_days_tardy)) {
            array_push($this->openAPINullablesSetToNull, 'number_of_days_tardy');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('number_of_days_tardy', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($number_of_days_tardy) && ($number_of_days_tardy < 0)) {
            throw new \InvalidArgumentException('invalid value for $number_of_days_tardy when calling EdFiReportCard., must be bigger than or equal to 0.');
        }

        $this->container['number_of_days_tardy'] = $number_of_days_tardy;

        return $this;
    }

    /**
     * Gets student_competency_objectives
     *
     * @return \Resources\Model\EdFiReportCardStudentCompetencyObjective[]|null
     */
    public function getStudentCompetencyObjectives()
    {
        return $this->container['student_competency_objectives'];
    }

    /**
     * Sets student_competency_objectives
     *
     * @param \Resources\Model\EdFiReportCardStudentCompetencyObjective[]|null $student_competency_objectives An unordered collection of reportCardStudentCompetencyObjectives. The student competency evaluations associated for this grading period.
     *
     * @return self
     */
    public function setStudentCompetencyObjectives($student_competency_objectives)
    {
        if (is_null($student_competency_objectives)) {
            throw new \InvalidArgumentException('non-nullable student_competency_objectives cannot be null');
        }
        $this->container['student_competency_objectives'] = $student_competency_objectives;

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


