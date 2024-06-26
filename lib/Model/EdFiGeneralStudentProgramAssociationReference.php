<?php
/**
 * EdFiGeneralStudentProgramAssociationReference
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
 * EdFiGeneralStudentProgramAssociationReference Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EdFiGeneralStudentProgramAssociationReference implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'edFi_generalStudentProgramAssociationReference';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'begin_date' => '\DateTime',
        'education_organization_id' => 'int',
        'program_education_organization_id' => 'int',
        'program_name' => 'string',
        'program_type_descriptor' => 'string',
        'student_unique_id' => 'string',
        'link' => '\OpenAPI\Client\Model\Link'
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
        'education_organization_id' => 'int64',
        'program_education_organization_id' => 'int64',
        'program_name' => null,
        'program_type_descriptor' => null,
        'student_unique_id' => null,
        'link' => null
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
        'begin_date' => 'beginDate',
        'education_organization_id' => 'educationOrganizationId',
        'program_education_organization_id' => 'programEducationOrganizationId',
        'program_name' => 'programName',
        'program_type_descriptor' => 'programTypeDescriptor',
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
        'education_organization_id' => 'setEducationOrganizationId',
        'program_education_organization_id' => 'setProgramEducationOrganizationId',
        'program_name' => 'setProgramName',
        'program_type_descriptor' => 'setProgramTypeDescriptor',
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
        'education_organization_id' => 'getEducationOrganizationId',
        'program_education_organization_id' => 'getProgramEducationOrganizationId',
        'program_name' => 'getProgramName',
        'program_type_descriptor' => 'getProgramTypeDescriptor',
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
        $this->container['begin_date'] = $data['begin_date'] ?? null;
        $this->container['education_organization_id'] = $data['education_organization_id'] ?? null;
        $this->container['program_education_organization_id'] = $data['program_education_organization_id'] ?? null;
        $this->container['program_name'] = $data['program_name'] ?? null;
        $this->container['program_type_descriptor'] = $data['program_type_descriptor'] ?? null;
        $this->container['student_unique_id'] = $data['student_unique_id'] ?? null;
        $this->container['link'] = $data['link'] ?? null;
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
        if ($this->container['education_organization_id'] === null) {
            $invalidProperties[] = "'education_organization_id' can't be null";
        }
        if ($this->container['program_education_organization_id'] === null) {
            $invalidProperties[] = "'program_education_organization_id' can't be null";
        }
        if ($this->container['program_name'] === null) {
            $invalidProperties[] = "'program_name' can't be null";
        }
        if ((mb_strlen($this->container['program_name']) > 60)) {
            $invalidProperties[] = "invalid value for 'program_name', the character length must be smaller than or equal to 60.";
        }

        if ((mb_strlen($this->container['program_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'program_name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['program_type_descriptor'] === null) {
            $invalidProperties[] = "'program_type_descriptor' can't be null";
        }
        if ((mb_strlen($this->container['program_type_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'program_type_descriptor', the character length must be smaller than or equal to 306.";
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
     * @param \DateTime $begin_date The earliest date the student is involved with the program. Typically, this is the date the student becomes eligible for the program.
     *
     * @return self
     */
    public function setBeginDate($begin_date)
    {
        $this->container['begin_date'] = $begin_date;

        return $this;
    }

    /**
     * Gets education_organization_id
     *
     * @return int
     */
    public function getEducationOrganizationId()
    {
        return $this->container['education_organization_id'];
    }

    /**
     * Sets education_organization_id
     *
     * @param int $education_organization_id The identifier assigned to an education organization.
     *
     * @return self
     */
    public function setEducationOrganizationId($education_organization_id)
    {
        $this->container['education_organization_id'] = $education_organization_id;

        return $this;
    }

    /**
     * Gets program_education_organization_id
     *
     * @return int
     */
    public function getProgramEducationOrganizationId()
    {
        return $this->container['program_education_organization_id'];
    }

    /**
     * Sets program_education_organization_id
     *
     * @param int $program_education_organization_id The identifier assigned to an education organization.
     *
     * @return self
     */
    public function setProgramEducationOrganizationId($program_education_organization_id)
    {
        $this->container['program_education_organization_id'] = $program_education_organization_id;

        return $this;
    }

    /**
     * Gets program_name
     *
     * @return string
     */
    public function getProgramName()
    {
        return $this->container['program_name'];
    }

    /**
     * Sets program_name
     *
     * @param string $program_name The formal name of the program of instruction, training, services, or benefits available through federal, state, or local agencies.
     *
     * @return self
     */
    public function setProgramName($program_name)
    {
        if ((mb_strlen($program_name) > 60)) {
            throw new \InvalidArgumentException('invalid length for $program_name when calling EdFiGeneralStudentProgramAssociationReference., must be smaller than or equal to 60.');
        }
        if ((mb_strlen($program_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $program_name when calling EdFiGeneralStudentProgramAssociationReference., must be bigger than or equal to 1.');
        }

        $this->container['program_name'] = $program_name;

        return $this;
    }

    /**
     * Gets program_type_descriptor
     *
     * @return string
     */
    public function getProgramTypeDescriptor()
    {
        return $this->container['program_type_descriptor'];
    }

    /**
     * Sets program_type_descriptor
     *
     * @param string $program_type_descriptor The type of program.
     *
     * @return self
     */
    public function setProgramTypeDescriptor($program_type_descriptor)
    {
        if ((mb_strlen($program_type_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $program_type_descriptor when calling EdFiGeneralStudentProgramAssociationReference., must be smaller than or equal to 306.');
        }

        $this->container['program_type_descriptor'] = $program_type_descriptor;

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
        if ((mb_strlen($student_unique_id) > 32)) {
            throw new \InvalidArgumentException('invalid length for $student_unique_id when calling EdFiGeneralStudentProgramAssociationReference., must be smaller than or equal to 32.');
        }
        if ((mb_strlen($student_unique_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $student_unique_id when calling EdFiGeneralStudentProgramAssociationReference., must be bigger than or equal to 1.');
        }

        $this->container['student_unique_id'] = $student_unique_id;

        return $this;
    }

    /**
     * Gets link
     *
     * @return \OpenAPI\Client\Model\Link|null
     */
    public function getLink()
    {
        return $this->container['link'];
    }

    /**
     * Sets link
     *
     * @param \OpenAPI\Client\Model\Link|null $link link
     *
     * @return self
     */
    public function setLink($link)
    {
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


