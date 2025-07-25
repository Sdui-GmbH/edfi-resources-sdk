<?php
/**
 * TrackedChangesEdFiGradingPeriodKey
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
 * TrackedChangesEdFiGradingPeriodKey Class Doc Comment
 *
 * @category Class
 * @package  Resources
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TrackedChangesEdFiGradingPeriodKey implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'trackedChanges_edFi_gradingPeriodKey';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'grading_period_descriptor' => 'string',
        'grading_period_name' => 'string',
        'school_id' => 'int',
        'school_year' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'grading_period_descriptor' => null,
        'grading_period_name' => null,
        'school_id' => 'int64',
        'school_year' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'grading_period_descriptor' => false,
        'grading_period_name' => false,
        'school_id' => false,
        'school_year' => false
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
        'grading_period_descriptor' => 'gradingPeriodDescriptor',
        'grading_period_name' => 'gradingPeriodName',
        'school_id' => 'schoolId',
        'school_year' => 'schoolYear'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'grading_period_descriptor' => 'setGradingPeriodDescriptor',
        'grading_period_name' => 'setGradingPeriodName',
        'school_id' => 'setSchoolId',
        'school_year' => 'setSchoolYear'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'grading_period_descriptor' => 'getGradingPeriodDescriptor',
        'grading_period_name' => 'getGradingPeriodName',
        'school_id' => 'getSchoolId',
        'school_year' => 'getSchoolYear'
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
        $this->setIfExists('grading_period_descriptor', $data ?? [], null);
        $this->setIfExists('grading_period_name', $data ?? [], null);
        $this->setIfExists('school_id', $data ?? [], null);
        $this->setIfExists('school_year', $data ?? [], null);
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

        if (!is_null($this->container['grading_period_descriptor']) && (mb_strlen($this->container['grading_period_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'grading_period_descriptor', the character length must be smaller than or equal to 306.";
        }

        if (!is_null($this->container['grading_period_name']) && (mb_strlen($this->container['grading_period_name']) > 60)) {
            $invalidProperties[] = "invalid value for 'grading_period_name', the character length must be smaller than or equal to 60.";
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
     * Gets grading_period_descriptor
     *
     * @return string|null
     */
    public function getGradingPeriodDescriptor()
    {
        return $this->container['grading_period_descriptor'];
    }

    /**
     * Sets grading_period_descriptor
     *
     * @param string|null $grading_period_descriptor The state's name of the period for which grades are reported.
     *
     * @return self
     */
    public function setGradingPeriodDescriptor($grading_period_descriptor)
    {
        if (is_null($grading_period_descriptor)) {
            throw new \InvalidArgumentException('non-nullable grading_period_descriptor cannot be null');
        }
        if ((mb_strlen($grading_period_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $grading_period_descriptor when calling TrackedChangesEdFiGradingPeriodKey., must be smaller than or equal to 306.');
        }

        $this->container['grading_period_descriptor'] = $grading_period_descriptor;

        return $this;
    }

    /**
     * Gets grading_period_name
     *
     * @return string|null
     */
    public function getGradingPeriodName()
    {
        return $this->container['grading_period_name'];
    }

    /**
     * Sets grading_period_name
     *
     * @param string|null $grading_period_name The school's descriptive name of the grading period.
     *
     * @return self
     */
    public function setGradingPeriodName($grading_period_name)
    {
        if (is_null($grading_period_name)) {
            throw new \InvalidArgumentException('non-nullable grading_period_name cannot be null');
        }
        if ((mb_strlen($grading_period_name) > 60)) {
            throw new \InvalidArgumentException('invalid length for $grading_period_name when calling TrackedChangesEdFiGradingPeriodKey., must be smaller than or equal to 60.');
        }

        $this->container['grading_period_name'] = $grading_period_name;

        return $this;
    }

    /**
     * Gets school_id
     *
     * @return int|null
     */
    public function getSchoolId()
    {
        return $this->container['school_id'];
    }

    /**
     * Sets school_id
     *
     * @param int|null $school_id The identifier assigned to a school. It must be distinct from any other identifier assigned to educational organizations, such as a LocalEducationAgencyId, to prevent duplication.
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
     * @return int|null
     */
    public function getSchoolYear()
    {
        return $this->container['school_year'];
    }

    /**
     * Sets school_year
     *
     * @param int|null $school_year The identifier for the grading period school year.
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


