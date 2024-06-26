<?php
/**
 * EdFiContactOtherName
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
 * EdFiContactOtherName Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EdFiContactOtherName implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'edFi_contactOtherName';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'other_name_type_descriptor' => 'string',
        'first_name' => 'string',
        'generation_code_suffix' => 'string',
        'last_surname' => 'string',
        'middle_name' => 'string',
        'personal_title_prefix' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'other_name_type_descriptor' => null,
        'first_name' => null,
        'generation_code_suffix' => null,
        'last_surname' => null,
        'middle_name' => null,
        'personal_title_prefix' => null
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
        'other_name_type_descriptor' => 'otherNameTypeDescriptor',
        'first_name' => 'firstName',
        'generation_code_suffix' => 'generationCodeSuffix',
        'last_surname' => 'lastSurname',
        'middle_name' => 'middleName',
        'personal_title_prefix' => 'personalTitlePrefix'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'other_name_type_descriptor' => 'setOtherNameTypeDescriptor',
        'first_name' => 'setFirstName',
        'generation_code_suffix' => 'setGenerationCodeSuffix',
        'last_surname' => 'setLastSurname',
        'middle_name' => 'setMiddleName',
        'personal_title_prefix' => 'setPersonalTitlePrefix'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'other_name_type_descriptor' => 'getOtherNameTypeDescriptor',
        'first_name' => 'getFirstName',
        'generation_code_suffix' => 'getGenerationCodeSuffix',
        'last_surname' => 'getLastSurname',
        'middle_name' => 'getMiddleName',
        'personal_title_prefix' => 'getPersonalTitlePrefix'
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
        $this->container['other_name_type_descriptor'] = $data['other_name_type_descriptor'] ?? null;
        $this->container['first_name'] = $data['first_name'] ?? null;
        $this->container['generation_code_suffix'] = $data['generation_code_suffix'] ?? null;
        $this->container['last_surname'] = $data['last_surname'] ?? null;
        $this->container['middle_name'] = $data['middle_name'] ?? null;
        $this->container['personal_title_prefix'] = $data['personal_title_prefix'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['other_name_type_descriptor'] === null) {
            $invalidProperties[] = "'other_name_type_descriptor' can't be null";
        }
        if ((mb_strlen($this->container['other_name_type_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'other_name_type_descriptor', the character length must be smaller than or equal to 306.";
        }

        if ($this->container['first_name'] === null) {
            $invalidProperties[] = "'first_name' can't be null";
        }
        if ((mb_strlen($this->container['first_name']) > 75)) {
            $invalidProperties[] = "invalid value for 'first_name', the character length must be smaller than or equal to 75.";
        }

        if ((mb_strlen($this->container['first_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'first_name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['generation_code_suffix']) && (mb_strlen($this->container['generation_code_suffix']) > 10)) {
            $invalidProperties[] = "invalid value for 'generation_code_suffix', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['generation_code_suffix']) && (mb_strlen($this->container['generation_code_suffix']) < 1)) {
            $invalidProperties[] = "invalid value for 'generation_code_suffix', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['last_surname'] === null) {
            $invalidProperties[] = "'last_surname' can't be null";
        }
        if ((mb_strlen($this->container['last_surname']) > 75)) {
            $invalidProperties[] = "invalid value for 'last_surname', the character length must be smaller than or equal to 75.";
        }

        if ((mb_strlen($this->container['last_surname']) < 1)) {
            $invalidProperties[] = "invalid value for 'last_surname', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['middle_name']) && (mb_strlen($this->container['middle_name']) > 75)) {
            $invalidProperties[] = "invalid value for 'middle_name', the character length must be smaller than or equal to 75.";
        }

        if (!is_null($this->container['middle_name']) && (mb_strlen($this->container['middle_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'middle_name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['personal_title_prefix']) && (mb_strlen($this->container['personal_title_prefix']) > 30)) {
            $invalidProperties[] = "invalid value for 'personal_title_prefix', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['personal_title_prefix']) && (mb_strlen($this->container['personal_title_prefix']) < 1)) {
            $invalidProperties[] = "invalid value for 'personal_title_prefix', the character length must be bigger than or equal to 1.";
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
     * Gets other_name_type_descriptor
     *
     * @return string
     */
    public function getOtherNameTypeDescriptor()
    {
        return $this->container['other_name_type_descriptor'];
    }

    /**
     * Sets other_name_type_descriptor
     *
     * @param string $other_name_type_descriptor The types of alternate names for an individual.
     *
     * @return self
     */
    public function setOtherNameTypeDescriptor($other_name_type_descriptor)
    {
        if ((mb_strlen($other_name_type_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $other_name_type_descriptor when calling EdFiContactOtherName., must be smaller than or equal to 306.');
        }

        $this->container['other_name_type_descriptor'] = $other_name_type_descriptor;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name A name given to an individual at birth, baptism, or during another naming ceremony, or through legal change.
     *
     * @return self
     */
    public function setFirstName($first_name)
    {
        if ((mb_strlen($first_name) > 75)) {
            throw new \InvalidArgumentException('invalid length for $first_name when calling EdFiContactOtherName., must be smaller than or equal to 75.');
        }
        if ((mb_strlen($first_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $first_name when calling EdFiContactOtherName., must be bigger than or equal to 1.');
        }

        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets generation_code_suffix
     *
     * @return string|null
     */
    public function getGenerationCodeSuffix()
    {
        return $this->container['generation_code_suffix'];
    }

    /**
     * Sets generation_code_suffix
     *
     * @param string|null $generation_code_suffix An appendage, if any, used to denote an individual's generation in his family (e.g., Jr., Sr., III).
     *
     * @return self
     */
    public function setGenerationCodeSuffix($generation_code_suffix)
    {
        if (!is_null($generation_code_suffix) && (mb_strlen($generation_code_suffix) > 10)) {
            throw new \InvalidArgumentException('invalid length for $generation_code_suffix when calling EdFiContactOtherName., must be smaller than or equal to 10.');
        }
        if (!is_null($generation_code_suffix) && (mb_strlen($generation_code_suffix) < 1)) {
            throw new \InvalidArgumentException('invalid length for $generation_code_suffix when calling EdFiContactOtherName., must be bigger than or equal to 1.');
        }

        $this->container['generation_code_suffix'] = $generation_code_suffix;

        return $this;
    }

    /**
     * Gets last_surname
     *
     * @return string
     */
    public function getLastSurname()
    {
        return $this->container['last_surname'];
    }

    /**
     * Sets last_surname
     *
     * @param string $last_surname The name borne in common by members of a family.
     *
     * @return self
     */
    public function setLastSurname($last_surname)
    {
        if ((mb_strlen($last_surname) > 75)) {
            throw new \InvalidArgumentException('invalid length for $last_surname when calling EdFiContactOtherName., must be smaller than or equal to 75.');
        }
        if ((mb_strlen($last_surname) < 1)) {
            throw new \InvalidArgumentException('invalid length for $last_surname when calling EdFiContactOtherName., must be bigger than or equal to 1.');
        }

        $this->container['last_surname'] = $last_surname;

        return $this;
    }

    /**
     * Gets middle_name
     *
     * @return string|null
     */
    public function getMiddleName()
    {
        return $this->container['middle_name'];
    }

    /**
     * Sets middle_name
     *
     * @param string|null $middle_name A secondary name given to an individual at birth, baptism, or during another naming ceremony.
     *
     * @return self
     */
    public function setMiddleName($middle_name)
    {
        if (!is_null($middle_name) && (mb_strlen($middle_name) > 75)) {
            throw new \InvalidArgumentException('invalid length for $middle_name when calling EdFiContactOtherName., must be smaller than or equal to 75.');
        }
        if (!is_null($middle_name) && (mb_strlen($middle_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $middle_name when calling EdFiContactOtherName., must be bigger than or equal to 1.');
        }

        $this->container['middle_name'] = $middle_name;

        return $this;
    }

    /**
     * Gets personal_title_prefix
     *
     * @return string|null
     */
    public function getPersonalTitlePrefix()
    {
        return $this->container['personal_title_prefix'];
    }

    /**
     * Sets personal_title_prefix
     *
     * @param string|null $personal_title_prefix A prefix used to denote the title, degree, position, or seniority of the individual.
     *
     * @return self
     */
    public function setPersonalTitlePrefix($personal_title_prefix)
    {
        if (!is_null($personal_title_prefix) && (mb_strlen($personal_title_prefix) > 30)) {
            throw new \InvalidArgumentException('invalid length for $personal_title_prefix when calling EdFiContactOtherName., must be smaller than or equal to 30.');
        }
        if (!is_null($personal_title_prefix) && (mb_strlen($personal_title_prefix) < 1)) {
            throw new \InvalidArgumentException('invalid length for $personal_title_prefix when calling EdFiContactOtherName., must be bigger than or equal to 1.');
        }

        $this->container['personal_title_prefix'] = $personal_title_prefix;

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


