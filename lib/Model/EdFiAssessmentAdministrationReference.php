<?php
/**
 * EdFiAssessmentAdministrationReference
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
 * EdFiAssessmentAdministrationReference Class Doc Comment
 *
 * @category Class
 * @package  Resources
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EdFiAssessmentAdministrationReference implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'edFi_assessmentAdministrationReference';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'administration_identifier' => 'string',
        'assessment_identifier' => 'string',
        'assigning_education_organization_id' => 'int',
        'namespace' => 'string',
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
        'administration_identifier' => null,
        'assessment_identifier' => null,
        'assigning_education_organization_id' => 'int64',
        'namespace' => null,
        'link' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'administration_identifier' => false,
        'assessment_identifier' => false,
        'assigning_education_organization_id' => false,
        'namespace' => false,
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
        'administration_identifier' => 'administrationIdentifier',
        'assessment_identifier' => 'assessmentIdentifier',
        'assigning_education_organization_id' => 'assigningEducationOrganizationId',
        'namespace' => 'namespace',
        'link' => 'link'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'administration_identifier' => 'setAdministrationIdentifier',
        'assessment_identifier' => 'setAssessmentIdentifier',
        'assigning_education_organization_id' => 'setAssigningEducationOrganizationId',
        'namespace' => 'setNamespace',
        'link' => 'setLink'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'administration_identifier' => 'getAdministrationIdentifier',
        'assessment_identifier' => 'getAssessmentIdentifier',
        'assigning_education_organization_id' => 'getAssigningEducationOrganizationId',
        'namespace' => 'getNamespace',
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
        $this->setIfExists('administration_identifier', $data ?? [], null);
        $this->setIfExists('assessment_identifier', $data ?? [], null);
        $this->setIfExists('assigning_education_organization_id', $data ?? [], null);
        $this->setIfExists('namespace', $data ?? [], null);
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

        if ($this->container['administration_identifier'] === null) {
            $invalidProperties[] = "'administration_identifier' can't be null";
        }
        if ((mb_strlen($this->container['administration_identifier']) > 255)) {
            $invalidProperties[] = "invalid value for 'administration_identifier', the character length must be smaller than or equal to 255.";
        }

        if ($this->container['assessment_identifier'] === null) {
            $invalidProperties[] = "'assessment_identifier' can't be null";
        }
        if ((mb_strlen($this->container['assessment_identifier']) > 60)) {
            $invalidProperties[] = "invalid value for 'assessment_identifier', the character length must be smaller than or equal to 60.";
        }

        if ($this->container['assigning_education_organization_id'] === null) {
            $invalidProperties[] = "'assigning_education_organization_id' can't be null";
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
     * Gets administration_identifier
     *
     * @return string
     */
    public function getAdministrationIdentifier()
    {
        return $this->container['administration_identifier'];
    }

    /**
     * Sets administration_identifier
     *
     * @param string $administration_identifier The title or name of the assessment in the context of its administration.
     *
     * @return self
     */
    public function setAdministrationIdentifier($administration_identifier)
    {
        if (is_null($administration_identifier)) {
            throw new \InvalidArgumentException('non-nullable administration_identifier cannot be null');
        }
        if ((mb_strlen($administration_identifier) > 255)) {
            throw new \InvalidArgumentException('invalid length for $administration_identifier when calling EdFiAssessmentAdministrationReference., must be smaller than or equal to 255.');
        }

        $this->container['administration_identifier'] = $administration_identifier;

        return $this;
    }

    /**
     * Gets assessment_identifier
     *
     * @return string
     */
    public function getAssessmentIdentifier()
    {
        return $this->container['assessment_identifier'];
    }

    /**
     * Sets assessment_identifier
     *
     * @param string $assessment_identifier A unique number or alphanumeric code assigned to an assessment.
     *
     * @return self
     */
    public function setAssessmentIdentifier($assessment_identifier)
    {
        if (is_null($assessment_identifier)) {
            throw new \InvalidArgumentException('non-nullable assessment_identifier cannot be null');
        }
        if ((mb_strlen($assessment_identifier) > 60)) {
            throw new \InvalidArgumentException('invalid length for $assessment_identifier when calling EdFiAssessmentAdministrationReference., must be smaller than or equal to 60.');
        }

        $this->container['assessment_identifier'] = $assessment_identifier;

        return $this;
    }

    /**
     * Gets assigning_education_organization_id
     *
     * @return int
     */
    public function getAssigningEducationOrganizationId()
    {
        return $this->container['assigning_education_organization_id'];
    }

    /**
     * Sets assigning_education_organization_id
     *
     * @param int $assigning_education_organization_id The identifier assigned to an education organization.
     *
     * @return self
     */
    public function setAssigningEducationOrganizationId($assigning_education_organization_id)
    {
        if (is_null($assigning_education_organization_id)) {
            throw new \InvalidArgumentException('non-nullable assigning_education_organization_id cannot be null');
        }
        $this->container['assigning_education_organization_id'] = $assigning_education_organization_id;

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
     * @param string $namespace Namespace for the assessment.
     *
     * @return self
     */
    public function setNamespace($namespace)
    {
        if (is_null($namespace)) {
            throw new \InvalidArgumentException('non-nullable namespace cannot be null');
        }
        if ((mb_strlen($namespace) > 255)) {
            throw new \InvalidArgumentException('invalid length for $namespace when calling EdFiAssessmentAdministrationReference., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($namespace) < 5)) {
            throw new \InvalidArgumentException('invalid length for $namespace when calling EdFiAssessmentAdministrationReference., must be bigger than or equal to 5.');
        }

        $this->container['namespace'] = $namespace;

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


