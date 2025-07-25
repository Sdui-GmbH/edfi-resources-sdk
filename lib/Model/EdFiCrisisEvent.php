<?php
/**
 * EdFiCrisisEvent
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
 * EdFiCrisisEvent Class Doc Comment
 *
 * @category Class
 * @package  Resources
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EdFiCrisisEvent implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'edFi_crisisEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'crisis_event_name' => 'string',
        'crisis_description' => 'string',
        'crisis_end_date' => '\DateTime',
        'crisis_start_date' => '\DateTime',
        'crisis_type_descriptor' => 'string',
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
        'crisis_event_name' => null,
        'crisis_description' => null,
        'crisis_end_date' => 'date',
        'crisis_start_date' => 'date',
        'crisis_type_descriptor' => null,
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
        'crisis_event_name' => false,
        'crisis_description' => true,
        'crisis_end_date' => true,
        'crisis_start_date' => true,
        'crisis_type_descriptor' => false,
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
        'crisis_event_name' => 'crisisEventName',
        'crisis_description' => 'crisisDescription',
        'crisis_end_date' => 'crisisEndDate',
        'crisis_start_date' => 'crisisStartDate',
        'crisis_type_descriptor' => 'crisisTypeDescriptor',
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
        'crisis_event_name' => 'setCrisisEventName',
        'crisis_description' => 'setCrisisDescription',
        'crisis_end_date' => 'setCrisisEndDate',
        'crisis_start_date' => 'setCrisisStartDate',
        'crisis_type_descriptor' => 'setCrisisTypeDescriptor',
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
        'crisis_event_name' => 'getCrisisEventName',
        'crisis_description' => 'getCrisisDescription',
        'crisis_end_date' => 'getCrisisEndDate',
        'crisis_start_date' => 'getCrisisStartDate',
        'crisis_type_descriptor' => 'getCrisisTypeDescriptor',
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
        $this->setIfExists('crisis_event_name', $data ?? [], null);
        $this->setIfExists('crisis_description', $data ?? [], null);
        $this->setIfExists('crisis_end_date', $data ?? [], null);
        $this->setIfExists('crisis_start_date', $data ?? [], null);
        $this->setIfExists('crisis_type_descriptor', $data ?? [], null);
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

        if ($this->container['crisis_event_name'] === null) {
            $invalidProperties[] = "'crisis_event_name' can't be null";
        }
        if ((mb_strlen($this->container['crisis_event_name']) > 100)) {
            $invalidProperties[] = "invalid value for 'crisis_event_name', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['crisis_description']) && (mb_strlen($this->container['crisis_description']) > 1024)) {
            $invalidProperties[] = "invalid value for 'crisis_description', the character length must be smaller than or equal to 1024.";
        }

        if ($this->container['crisis_type_descriptor'] === null) {
            $invalidProperties[] = "'crisis_type_descriptor' can't be null";
        }
        if ((mb_strlen($this->container['crisis_type_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'crisis_type_descriptor', the character length must be smaller than or equal to 306.";
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
     * Gets crisis_event_name
     *
     * @return string
     */
    public function getCrisisEventName()
    {
        return $this->container['crisis_event_name'];
    }

    /**
     * Sets crisis_event_name
     *
     * @param string $crisis_event_name The name of the crisis event that occurred. If there is no generally accepted name for this crisis event, the suggested format: Location + Crisis type + Year.
     *
     * @return self
     */
    public function setCrisisEventName($crisis_event_name)
    {
        if (is_null($crisis_event_name)) {
            throw new \InvalidArgumentException('non-nullable crisis_event_name cannot be null');
        }
        if ((mb_strlen($crisis_event_name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $crisis_event_name when calling EdFiCrisisEvent., must be smaller than or equal to 100.');
        }

        $this->container['crisis_event_name'] = $crisis_event_name;

        return $this;
    }

    /**
     * Gets crisis_description
     *
     * @return string|null
     */
    public function getCrisisDescription()
    {
        return $this->container['crisis_description'];
    }

    /**
     * Sets crisis_description
     *
     * @param string|null $crisis_description Provides a textual description of the crisis event affecting the student. It may include details such as the nature of the crisis (e.g., natural disaster, conflict, medical emergency), its severity, location, and any other relevant information describing the crisis situation.
     *
     * @return self
     */
    public function setCrisisDescription($crisis_description)
    {
        if (is_null($crisis_description)) {
            array_push($this->openAPINullablesSetToNull, 'crisis_description');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('crisis_description', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($crisis_description) && (mb_strlen($crisis_description) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $crisis_description when calling EdFiCrisisEvent., must be smaller than or equal to 1024.');
        }

        $this->container['crisis_description'] = $crisis_description;

        return $this;
    }

    /**
     * Gets crisis_end_date
     *
     * @return \DateTime|null
     */
    public function getCrisisEndDate()
    {
        return $this->container['crisis_end_date'];
    }

    /**
     * Sets crisis_end_date
     *
     * @param \DateTime|null $crisis_end_date The date on which the crisis ceased to affect the student. Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines.
     *
     * @return self
     */
    public function setCrisisEndDate($crisis_end_date)
    {
        if (is_null($crisis_end_date)) {
            array_push($this->openAPINullablesSetToNull, 'crisis_end_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('crisis_end_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['crisis_end_date'] = $crisis_end_date;

        return $this;
    }

    /**
     * Gets crisis_start_date
     *
     * @return \DateTime|null
     */
    public function getCrisisStartDate()
    {
        return $this->container['crisis_start_date'];
    }

    /**
     * Sets crisis_start_date
     *
     * @param \DateTime|null $crisis_start_date The year, month and day on which the crisis affected the student. This date may not be the same as the date the crisis occurred if evacuation orders are implemented in anticipation of a crisis.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines.
     *
     * @return self
     */
    public function setCrisisStartDate($crisis_start_date)
    {
        if (is_null($crisis_start_date)) {
            array_push($this->openAPINullablesSetToNull, 'crisis_start_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('crisis_start_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['crisis_start_date'] = $crisis_start_date;

        return $this;
    }

    /**
     * Gets crisis_type_descriptor
     *
     * @return string
     */
    public function getCrisisTypeDescriptor()
    {
        return $this->container['crisis_type_descriptor'];
    }

    /**
     * Sets crisis_type_descriptor
     *
     * @param string $crisis_type_descriptor The type or category of crisis.
     *
     * @return self
     */
    public function setCrisisTypeDescriptor($crisis_type_descriptor)
    {
        if (is_null($crisis_type_descriptor)) {
            throw new \InvalidArgumentException('non-nullable crisis_type_descriptor cannot be null');
        }
        if ((mb_strlen($crisis_type_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $crisis_type_descriptor when calling EdFiCrisisEvent., must be smaller than or equal to 306.');
        }

        $this->container['crisis_type_descriptor'] = $crisis_type_descriptor;

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


