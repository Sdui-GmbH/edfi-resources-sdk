<?php
/**
 * EdFiStudentSectionAssociationReference
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
 * EdFiStudentSectionAssociationReference Class Doc Comment
 *
 * @category Class
 * @package  Resources
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EdFiStudentSectionAssociationReference implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'edFi_studentSectionAssociationReference';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'begin_date' => '\DateTime',
        'local_course_code' => 'string',
        'school_id' => 'int',
        'school_year' => 'int',
        'section_identifier' => 'string',
        'session_name' => 'string',
        'student_unique_id' => 'string',
        'link' => '\Resources\Model\Link'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'begin_date' => 'date',
        'local_course_code' => null,
        'school_id' => 'int64',
        'school_year' => 'int32',
        'section_identifier' => null,
        'session_name' => null,
        'student_unique_id' => null,
        'link' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'begin_date' => false,
        'local_course_code' => false,
        'school_id' => false,
        'school_year' => false,
        'section_identifier' => false,
        'session_name' => false,
        'student_unique_id' => false,
        'link' => false
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
        'begin_date' => 'beginDate',
        'local_course_code' => 'localCourseCode',
        'school_id' => 'schoolId',
        'school_year' => 'schoolYear',
        'section_identifier' => 'sectionIdentifier',
        'session_name' => 'sessionName',
        'student_unique_id' => 'studentUniqueId',
        'link' => 'link'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'begin_date' => 'setBeginDate',
        'local_course_code' => 'setLocalCourseCode',
        'school_id' => 'setSchoolId',
        'school_year' => 'setSchoolYear',
        'section_identifier' => 'setSectionIdentifier',
        'session_name' => 'setSessionName',
        'student_unique_id' => 'setStudentUniqueId',
        'link' => 'setLink'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'begin_date' => 'getBeginDate',
        'local_course_code' => 'getLocalCourseCode',
        'school_id' => 'getSchoolId',
        'school_year' => 'getSchoolYear',
        'section_identifier' => 'getSectionIdentifier',
        'session_name' => 'getSessionName',
        'student_unique_id' => 'getStudentUniqueId',
        'link' => 'getLink'
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
        $this->setIfExists('begin_date', $data ?? [], null);
        $this->setIfExists('local_course_code', $data ?? [], null);
        $this->setIfExists('school_id', $data ?? [], null);
        $this->setIfExists('school_year', $data ?? [], null);
        $this->setIfExists('section_identifier', $data ?? [], null);
        $this->setIfExists('session_name', $data ?? [], null);
        $this->setIfExists('student_unique_id', $data ?? [], null);
        $this->setIfExists('link', $data ?? [], null);
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

        if ($this->container['begin_date'] === null) {
            $invalidProperties[] = "'begin_date' can't be null";
        }
        if ($this->container['local_course_code'] === null) {
            $invalidProperties[] = "'local_course_code' can't be null";
        }
        if ((mb_strlen($this->container['local_course_code']) > 60)) {
            $invalidProperties[] = "invalid value for 'local_course_code', the character length must be smaller than or equal to 60.";
        }

        if ((mb_strlen($this->container['local_course_code']) < 1)) {
            $invalidProperties[] = "invalid value for 'local_course_code', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['school_id'] === null) {
            $invalidProperties[] = "'school_id' can't be null";
        }
        if ($this->container['school_year'] === null) {
            $invalidProperties[] = "'school_year' can't be null";
        }
        if ($this->container['section_identifier'] === null) {
            $invalidProperties[] = "'section_identifier' can't be null";
        }
        if ((mb_strlen($this->container['section_identifier']) > 255)) {
            $invalidProperties[] = "invalid value for 'section_identifier', the character length must be smaller than or equal to 255.";
        }

        if ((mb_strlen($this->container['section_identifier']) < 1)) {
            $invalidProperties[] = "invalid value for 'section_identifier', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['session_name'] === null) {
            $invalidProperties[] = "'session_name' can't be null";
        }
        if ((mb_strlen($this->container['session_name']) > 60)) {
            $invalidProperties[] = "invalid value for 'session_name', the character length must be smaller than or equal to 60.";
        }

        if ((mb_strlen($this->container['session_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'session_name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['student_unique_id'] === null) {
            $invalidProperties[] = "'student_unique_id' can't be null";
        }
        if ((mb_strlen($this->container['student_unique_id']) > 32)) {
            $invalidProperties[] = "invalid value for 'student_unique_id', the character length must be smaller than or equal to 32.";
        }

        if ((mb_strlen($this->container['student_unique_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'student_unique_id', the character length must be bigger than or equal to 1.";
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
     * Gets begin_date
     *
     * @return \DateTime
     */
    public function getBeginDate()
    {
        return $this->container['begin_date'];
    }

    /**
     * Sets begin_date
     *
     * @param \DateTime $begin_date Month, day, and year of the student's entry or assignment to the section.
     *
     * @return self
     */
    public function setBeginDate($begin_date)
    {
        if (is_null($begin_date)) {
            throw new \InvalidArgumentException('non-nullable begin_date cannot be null');
        }
        $this->container['begin_date'] = $begin_date;

        return $this;
    }

    /**
     * Gets local_course_code
     *
     * @return string
     */
    public function getLocalCourseCode()
    {
        return $this->container['local_course_code'];
    }

    /**
     * Sets local_course_code
     *
     * @param string $local_course_code The local code assigned by the School that identifies the course offering provided for the instruction of students.
     *
     * @return self
     */
    public function setLocalCourseCode($local_course_code)
    {
        if (is_null($local_course_code)) {
            throw new \InvalidArgumentException('non-nullable local_course_code cannot be null');
        }
        if ((mb_strlen($local_course_code) > 60)) {
            throw new \InvalidArgumentException('invalid length for $local_course_code when calling EdFiStudentSectionAssociationReference., must be smaller than or equal to 60.');
        }
        if ((mb_strlen($local_course_code) < 1)) {
            throw new \InvalidArgumentException('invalid length for $local_course_code when calling EdFiStudentSectionAssociationReference., must be bigger than or equal to 1.');
        }

        $this->container['local_course_code'] = $local_course_code;

        return $this;
    }

    /**
     * Gets school_id
     *
     * @return int
     */
    public function getSchoolId()
    {
        return $this->container['school_id'];
    }

    /**
     * Sets school_id
     *
     * @param int $school_id The identifier assigned to a school.
     *
     * @return self
     */
    public function setSchoolId($school_id)
    {
        if (is_null($school_id)) {
            throw new \InvalidArgumentException('non-nullable school_id cannot be null');
        }
        $this->container['school_id'] = $school_id;

        return $this;
    }

    /**
     * Gets school_year
     *
     * @return int
     */
    public function getSchoolYear()
    {
        return $this->container['school_year'];
    }

    /**
     * Sets school_year
     *
     * @param int $school_year The identifier for the school year.
     *
     * @return self
     */
    public function setSchoolYear($school_year)
    {
        if (is_null($school_year)) {
            throw new \InvalidArgumentException('non-nullable school_year cannot be null');
        }
        $this->container['school_year'] = $school_year;

        return $this;
    }

    /**
     * Gets section_identifier
     *
     * @return string
     */
    public function getSectionIdentifier()
    {
        return $this->container['section_identifier'];
    }

    /**
     * Sets section_identifier
     *
     * @param string $section_identifier The local identifier assigned to a section.
     *
     * @return self
     */
    public function setSectionIdentifier($section_identifier)
    {
        if (is_null($section_identifier)) {
            throw new \InvalidArgumentException('non-nullable section_identifier cannot be null');
        }
        if ((mb_strlen($section_identifier) > 255)) {
            throw new \InvalidArgumentException('invalid length for $section_identifier when calling EdFiStudentSectionAssociationReference., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($section_identifier) < 1)) {
            throw new \InvalidArgumentException('invalid length for $section_identifier when calling EdFiStudentSectionAssociationReference., must be bigger than or equal to 1.');
        }

        $this->container['section_identifier'] = $section_identifier;

        return $this;
    }

    /**
     * Gets session_name
     *
     * @return string
     */
    public function getSessionName()
    {
        return $this->container['session_name'];
    }

    /**
     * Sets session_name
     *
     * @param string $session_name The identifier for the calendar for the academic session.
     *
     * @return self
     */
    public function setSessionName($session_name)
    {
        if (is_null($session_name)) {
            throw new \InvalidArgumentException('non-nullable session_name cannot be null');
        }
        if ((mb_strlen($session_name) > 60)) {
            throw new \InvalidArgumentException('invalid length for $session_name when calling EdFiStudentSectionAssociationReference., must be smaller than or equal to 60.');
        }
        if ((mb_strlen($session_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $session_name when calling EdFiStudentSectionAssociationReference., must be bigger than or equal to 1.');
        }

        $this->container['session_name'] = $session_name;

        return $this;
    }

    /**
     * Gets student_unique_id
     *
     * @return string
     */
    public function getStudentUniqueId()
    {
        return $this->container['student_unique_id'];
    }

    /**
     * Sets student_unique_id
     *
     * @param string $student_unique_id A unique alphanumeric code assigned to a student.
     *
     * @return self
     */
    public function setStudentUniqueId($student_unique_id)
    {
        if (is_null($student_unique_id)) {
            throw new \InvalidArgumentException('non-nullable student_unique_id cannot be null');
        }
        if ((mb_strlen($student_unique_id) > 32)) {
            throw new \InvalidArgumentException('invalid length for $student_unique_id when calling EdFiStudentSectionAssociationReference., must be smaller than or equal to 32.');
        }
        if ((mb_strlen($student_unique_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $student_unique_id when calling EdFiStudentSectionAssociationReference., must be bigger than or equal to 1.');
        }

        $this->container['student_unique_id'] = $student_unique_id;

        return $this;
    }

    /**
     * Gets link
     *
     * @return \Resources\Model\Link|null
     */
    public function getLink()
    {
        return $this->container['link'];
    }

    /**
     * Sets link
     *
     * @param \Resources\Model\Link|null $link link
     *
     * @return self
     */
    public function setLink($link)
    {
        if (is_null($link)) {
            throw new \InvalidArgumentException('non-nullable link cannot be null');
        }
        $this->container['link'] = $link;

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

