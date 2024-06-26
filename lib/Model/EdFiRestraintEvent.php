<?php
/**
 * EdFiRestraintEvent
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
 * EdFiRestraintEvent Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EdFiRestraintEvent implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'edFi_restraintEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'restraint_event_identifier' => 'string',
        'school_reference' => '\OpenAPI\Client\Model\EdFiSchoolReference',
        'student_reference' => '\OpenAPI\Client\Model\EdFiStudentReference',
        'educational_environment_descriptor' => 'string',
        'event_date' => '\DateTime',
        'programs' => '\OpenAPI\Client\Model\EdFiRestraintEventProgram[]',
        'reasons' => '\OpenAPI\Client\Model\EdFiRestraintEventReason[]',
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
        'restraint_event_identifier' => null,
        'school_reference' => null,
        'student_reference' => null,
        'educational_environment_descriptor' => null,
        'event_date' => 'date',
        'programs' => null,
        'reasons' => null,
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
        'restraint_event_identifier' => 'restraintEventIdentifier',
        'school_reference' => 'schoolReference',
        'student_reference' => 'studentReference',
        'educational_environment_descriptor' => 'educationalEnvironmentDescriptor',
        'event_date' => 'eventDate',
        'programs' => 'programs',
        'reasons' => 'reasons',
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
        'restraint_event_identifier' => 'setRestraintEventIdentifier',
        'school_reference' => 'setSchoolReference',
        'student_reference' => 'setStudentReference',
        'educational_environment_descriptor' => 'setEducationalEnvironmentDescriptor',
        'event_date' => 'setEventDate',
        'programs' => 'setPrograms',
        'reasons' => 'setReasons',
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
        'restraint_event_identifier' => 'getRestraintEventIdentifier',
        'school_reference' => 'getSchoolReference',
        'student_reference' => 'getStudentReference',
        'educational_environment_descriptor' => 'getEducationalEnvironmentDescriptor',
        'event_date' => 'getEventDate',
        'programs' => 'getPrograms',
        'reasons' => 'getReasons',
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
        $this->container['restraint_event_identifier'] = $data['restraint_event_identifier'] ?? null;
        $this->container['school_reference'] = $data['school_reference'] ?? null;
        $this->container['student_reference'] = $data['student_reference'] ?? null;
        $this->container['educational_environment_descriptor'] = $data['educational_environment_descriptor'] ?? null;
        $this->container['event_date'] = $data['event_date'] ?? null;
        $this->container['programs'] = $data['programs'] ?? null;
        $this->container['reasons'] = $data['reasons'] ?? null;
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

        if ($this->container['restraint_event_identifier'] === null) {
            $invalidProperties[] = "'restraint_event_identifier' can't be null";
        }
        if ((mb_strlen($this->container['restraint_event_identifier']) > 36)) {
            $invalidProperties[] = "invalid value for 'restraint_event_identifier', the character length must be smaller than or equal to 36.";
        }

        if ((mb_strlen($this->container['restraint_event_identifier']) < 1)) {
            $invalidProperties[] = "invalid value for 'restraint_event_identifier', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['school_reference'] === null) {
            $invalidProperties[] = "'school_reference' can't be null";
        }
        if ($this->container['student_reference'] === null) {
            $invalidProperties[] = "'student_reference' can't be null";
        }
        if (!is_null($this->container['educational_environment_descriptor']) && (mb_strlen($this->container['educational_environment_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'educational_environment_descriptor', the character length must be smaller than or equal to 306.";
        }

        if ($this->container['event_date'] === null) {
            $invalidProperties[] = "'event_date' can't be null";
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
     * Gets restraint_event_identifier
     *
     * @return string
     */
    public function getRestraintEventIdentifier()
    {
        return $this->container['restraint_event_identifier'];
    }

    /**
     * Sets restraint_event_identifier
     *
     * @param string $restraint_event_identifier A unique number or alphanumeric code assigned to a restraint event by a school, school system, state, or other agency or entity.
     *
     * @return self
     */
    public function setRestraintEventIdentifier($restraint_event_identifier)
    {
        if ((mb_strlen($restraint_event_identifier) > 36)) {
            throw new \InvalidArgumentException('invalid length for $restraint_event_identifier when calling EdFiRestraintEvent., must be smaller than or equal to 36.');
        }
        if ((mb_strlen($restraint_event_identifier) < 1)) {
            throw new \InvalidArgumentException('invalid length for $restraint_event_identifier when calling EdFiRestraintEvent., must be bigger than or equal to 1.');
        }

        $this->container['restraint_event_identifier'] = $restraint_event_identifier;

        return $this;
    }

    /**
     * Gets school_reference
     *
     * @return \OpenAPI\Client\Model\EdFiSchoolReference
     */
    public function getSchoolReference()
    {
        return $this->container['school_reference'];
    }

    /**
     * Sets school_reference
     *
     * @param \OpenAPI\Client\Model\EdFiSchoolReference $school_reference school_reference
     *
     * @return self
     */
    public function setSchoolReference($school_reference)
    {
        $this->container['school_reference'] = $school_reference;

        return $this;
    }

    /**
     * Gets student_reference
     *
     * @return \OpenAPI\Client\Model\EdFiStudentReference
     */
    public function getStudentReference()
    {
        return $this->container['student_reference'];
    }

    /**
     * Sets student_reference
     *
     * @param \OpenAPI\Client\Model\EdFiStudentReference $student_reference student_reference
     *
     * @return self
     */
    public function setStudentReference($student_reference)
    {
        $this->container['student_reference'] = $student_reference;

        return $this;
    }

    /**
     * Gets educational_environment_descriptor
     *
     * @return string|null
     */
    public function getEducationalEnvironmentDescriptor()
    {
        return $this->container['educational_environment_descriptor'];
    }

    /**
     * Sets educational_environment_descriptor
     *
     * @param string|null $educational_environment_descriptor The setting where the RestraintEvent was exercised.
     *
     * @return self
     */
    public function setEducationalEnvironmentDescriptor($educational_environment_descriptor)
    {
        if (!is_null($educational_environment_descriptor) && (mb_strlen($educational_environment_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $educational_environment_descriptor when calling EdFiRestraintEvent., must be smaller than or equal to 306.');
        }

        $this->container['educational_environment_descriptor'] = $educational_environment_descriptor;

        return $this;
    }

    /**
     * Gets event_date
     *
     * @return \DateTime
     */
    public function getEventDate()
    {
        return $this->container['event_date'];
    }

    /**
     * Sets event_date
     *
     * @param \DateTime $event_date Month, day, and year of the restraint event.
     *
     * @return self
     */
    public function setEventDate($event_date)
    {
        $this->container['event_date'] = $event_date;

        return $this;
    }

    /**
     * Gets programs
     *
     * @return \OpenAPI\Client\Model\EdFiRestraintEventProgram[]|null
     */
    public function getPrograms()
    {
        return $this->container['programs'];
    }

    /**
     * Sets programs
     *
     * @param \OpenAPI\Client\Model\EdFiRestraintEventProgram[]|null $programs An unordered collection of restraintEventPrograms. The special education program associated with the restraint event.
     *
     * @return self
     */
    public function setPrograms($programs)
    {
        $this->container['programs'] = $programs;

        return $this;
    }

    /**
     * Gets reasons
     *
     * @return \OpenAPI\Client\Model\EdFiRestraintEventReason[]|null
     */
    public function getReasons()
    {
        return $this->container['reasons'];
    }

    /**
     * Sets reasons
     *
     * @param \OpenAPI\Client\Model\EdFiRestraintEventReason[]|null $reasons An unordered collection of restraintEventReasons. A categorization of the circumstances or reason for the RestraintEvent.
     *
     * @return self
     */
    public function setReasons($reasons)
    {
        $this->container['reasons'] = $reasons;

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


