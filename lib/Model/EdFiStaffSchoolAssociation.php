<?php
/**
 * EdFiStaffSchoolAssociation
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
 * EdFiStaffSchoolAssociation Class Doc Comment
 *
 * @category Class
 * @package  Resources
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EdFiStaffSchoolAssociation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'edFi_staffSchoolAssociation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'program_assignment_descriptor' => 'string',
        'calendar_reference' => '\Resources\Model\EdFiCalendarReference',
        'school_reference' => '\Resources\Model\EdFiSchoolReference',
        'school_year_type_reference' => '\Resources\Model\EdFiSchoolYearTypeReference',
        'staff_reference' => '\Resources\Model\EdFiStaffReference',
        'academic_subjects' => '\Resources\Model\EdFiStaffSchoolAssociationAcademicSubject[]',
        'grade_levels' => '\Resources\Model\EdFiStaffSchoolAssociationGradeLevel[]',
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
        'program_assignment_descriptor' => null,
        'calendar_reference' => null,
        'school_reference' => null,
        'school_year_type_reference' => null,
        'staff_reference' => null,
        'academic_subjects' => null,
        'grade_levels' => null,
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
        'program_assignment_descriptor' => false,
        'calendar_reference' => false,
        'school_reference' => false,
        'school_year_type_reference' => false,
        'staff_reference' => false,
        'academic_subjects' => false,
        'grade_levels' => false,
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
        'program_assignment_descriptor' => 'programAssignmentDescriptor',
        'calendar_reference' => 'calendarReference',
        'school_reference' => 'schoolReference',
        'school_year_type_reference' => 'schoolYearTypeReference',
        'staff_reference' => 'staffReference',
        'academic_subjects' => 'academicSubjects',
        'grade_levels' => 'gradeLevels',
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
        'program_assignment_descriptor' => 'setProgramAssignmentDescriptor',
        'calendar_reference' => 'setCalendarReference',
        'school_reference' => 'setSchoolReference',
        'school_year_type_reference' => 'setSchoolYearTypeReference',
        'staff_reference' => 'setStaffReference',
        'academic_subjects' => 'setAcademicSubjects',
        'grade_levels' => 'setGradeLevels',
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
        'program_assignment_descriptor' => 'getProgramAssignmentDescriptor',
        'calendar_reference' => 'getCalendarReference',
        'school_reference' => 'getSchoolReference',
        'school_year_type_reference' => 'getSchoolYearTypeReference',
        'staff_reference' => 'getStaffReference',
        'academic_subjects' => 'getAcademicSubjects',
        'grade_levels' => 'getGradeLevels',
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
        $this->setIfExists('program_assignment_descriptor', $data ?? [], null);
        $this->setIfExists('calendar_reference', $data ?? [], null);
        $this->setIfExists('school_reference', $data ?? [], null);
        $this->setIfExists('school_year_type_reference', $data ?? [], null);
        $this->setIfExists('staff_reference', $data ?? [], null);
        $this->setIfExists('academic_subjects', $data ?? [], null);
        $this->setIfExists('grade_levels', $data ?? [], null);
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

        if ($this->container['program_assignment_descriptor'] === null) {
            $invalidProperties[] = "'program_assignment_descriptor' can't be null";
        }
        if ((mb_strlen($this->container['program_assignment_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'program_assignment_descriptor', the character length must be smaller than or equal to 306.";
        }

        if ($this->container['school_reference'] === null) {
            $invalidProperties[] = "'school_reference' can't be null";
        }
        if ($this->container['staff_reference'] === null) {
            $invalidProperties[] = "'staff_reference' can't be null";
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
     * Gets program_assignment_descriptor
     *
     * @return string
     */
    public function getProgramAssignmentDescriptor()
    {
        return $this->container['program_assignment_descriptor'];
    }

    /**
     * Sets program_assignment_descriptor
     *
     * @param string $program_assignment_descriptor The name of the program for which the individual is assigned.
     *
     * @return self
     */
    public function setProgramAssignmentDescriptor($program_assignment_descriptor)
    {
        if (is_null($program_assignment_descriptor)) {
            throw new \InvalidArgumentException('non-nullable program_assignment_descriptor cannot be null');
        }
        if ((mb_strlen($program_assignment_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $program_assignment_descriptor when calling EdFiStaffSchoolAssociation., must be smaller than or equal to 306.');
        }

        $this->container['program_assignment_descriptor'] = $program_assignment_descriptor;

        return $this;
    }

    /**
     * Gets calendar_reference
     *
     * @return \Resources\Model\EdFiCalendarReference|null
     */
    public function getCalendarReference()
    {
        return $this->container['calendar_reference'];
    }

    /**
     * Sets calendar_reference
     *
     * @param \Resources\Model\EdFiCalendarReference|null $calendar_reference calendar_reference
     *
     * @return self
     */
    public function setCalendarReference($calendar_reference)
    {
        if (is_null($calendar_reference)) {
            throw new \InvalidArgumentException('non-nullable calendar_reference cannot be null');
        }
        $this->container['calendar_reference'] = $calendar_reference;

        return $this;
    }

    /**
     * Gets school_reference
     *
     * @return \Resources\Model\EdFiSchoolReference
     */
    public function getSchoolReference()
    {
        return $this->container['school_reference'];
    }

    /**
     * Sets school_reference
     *
     * @param \Resources\Model\EdFiSchoolReference $school_reference school_reference
     *
     * @return self
     */
    public function setSchoolReference($school_reference)
    {
        if (is_null($school_reference)) {
            throw new \InvalidArgumentException('non-nullable school_reference cannot be null');
        }
        $this->container['school_reference'] = $school_reference;

        return $this;
    }

    /**
     * Gets school_year_type_reference
     *
     * @return \Resources\Model\EdFiSchoolYearTypeReference|null
     */
    public function getSchoolYearTypeReference()
    {
        return $this->container['school_year_type_reference'];
    }

    /**
     * Sets school_year_type_reference
     *
     * @param \Resources\Model\EdFiSchoolYearTypeReference|null $school_year_type_reference school_year_type_reference
     *
     * @return self
     */
    public function setSchoolYearTypeReference($school_year_type_reference)
    {
        if (is_null($school_year_type_reference)) {
            throw new \InvalidArgumentException('non-nullable school_year_type_reference cannot be null');
        }
        $this->container['school_year_type_reference'] = $school_year_type_reference;

        return $this;
    }

    /**
     * Gets staff_reference
     *
     * @return \Resources\Model\EdFiStaffReference
     */
    public function getStaffReference()
    {
        return $this->container['staff_reference'];
    }

    /**
     * Sets staff_reference
     *
     * @param \Resources\Model\EdFiStaffReference $staff_reference staff_reference
     *
     * @return self
     */
    public function setStaffReference($staff_reference)
    {
        if (is_null($staff_reference)) {
            throw new \InvalidArgumentException('non-nullable staff_reference cannot be null');
        }
        $this->container['staff_reference'] = $staff_reference;

        return $this;
    }

    /**
     * Gets academic_subjects
     *
     * @return \Resources\Model\EdFiStaffSchoolAssociationAcademicSubject[]|null
     */
    public function getAcademicSubjects()
    {
        return $this->container['academic_subjects'];
    }

    /**
     * Sets academic_subjects
     *
     * @param \Resources\Model\EdFiStaffSchoolAssociationAcademicSubject[]|null $academic_subjects An unordered collection of staffSchoolAssociationAcademicSubjects. The academic subjects the individual is eligible to teach.
     *
     * @return self
     */
    public function setAcademicSubjects($academic_subjects)
    {
        if (is_null($academic_subjects)) {
            throw new \InvalidArgumentException('non-nullable academic_subjects cannot be null');
        }
        $this->container['academic_subjects'] = $academic_subjects;

        return $this;
    }

    /**
     * Gets grade_levels
     *
     * @return \Resources\Model\EdFiStaffSchoolAssociationGradeLevel[]|null
     */
    public function getGradeLevels()
    {
        return $this->container['grade_levels'];
    }

    /**
     * Sets grade_levels
     *
     * @param \Resources\Model\EdFiStaffSchoolAssociationGradeLevel[]|null $grade_levels An unordered collection of staffSchoolAssociationGradeLevels. The grade levels the individual is eligible to teach.
     *
     * @return self
     */
    public function setGradeLevels($grade_levels)
    {
        if (is_null($grade_levels)) {
            throw new \InvalidArgumentException('non-nullable grade_levels cannot be null');
        }
        $this->container['grade_levels'] = $grade_levels;

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

