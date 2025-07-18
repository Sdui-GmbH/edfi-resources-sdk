<?php
/**
 * EdFiLocalAccount
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
 * EdFiLocalAccount Class Doc Comment
 *
 * @category Class
 * @package  Resources
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EdFiLocalAccount implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'edFi_localAccount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'account_identifier' => 'string',
        'fiscal_year' => 'int',
        'chart_of_account_reference' => '\Resources\Model\EdFiChartOfAccountReference',
        'education_organization_reference' => '\Resources\Model\EdFiEducationOrganizationReference',
        'account_name' => 'string',
        'reporting_tags' => '\Resources\Model\EdFiLocalAccountReportingTag[]',
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
        'account_identifier' => null,
        'fiscal_year' => 'int32',
        'chart_of_account_reference' => null,
        'education_organization_reference' => null,
        'account_name' => null,
        'reporting_tags' => null,
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
        'account_identifier' => false,
        'fiscal_year' => false,
        'chart_of_account_reference' => false,
        'education_organization_reference' => false,
        'account_name' => true,
        'reporting_tags' => false,
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
        'account_identifier' => 'accountIdentifier',
        'fiscal_year' => 'fiscalYear',
        'chart_of_account_reference' => 'chartOfAccountReference',
        'education_organization_reference' => 'educationOrganizationReference',
        'account_name' => 'accountName',
        'reporting_tags' => 'reportingTags',
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
        'account_identifier' => 'setAccountIdentifier',
        'fiscal_year' => 'setFiscalYear',
        'chart_of_account_reference' => 'setChartOfAccountReference',
        'education_organization_reference' => 'setEducationOrganizationReference',
        'account_name' => 'setAccountName',
        'reporting_tags' => 'setReportingTags',
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
        'account_identifier' => 'getAccountIdentifier',
        'fiscal_year' => 'getFiscalYear',
        'chart_of_account_reference' => 'getChartOfAccountReference',
        'education_organization_reference' => 'getEducationOrganizationReference',
        'account_name' => 'getAccountName',
        'reporting_tags' => 'getReportingTags',
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
        $this->setIfExists('account_identifier', $data ?? [], null);
        $this->setIfExists('fiscal_year', $data ?? [], null);
        $this->setIfExists('chart_of_account_reference', $data ?? [], null);
        $this->setIfExists('education_organization_reference', $data ?? [], null);
        $this->setIfExists('account_name', $data ?? [], null);
        $this->setIfExists('reporting_tags', $data ?? [], null);
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

        if ($this->container['account_identifier'] === null) {
            $invalidProperties[] = "'account_identifier' can't be null";
        }
        if ((mb_strlen($this->container['account_identifier']) > 50)) {
            $invalidProperties[] = "invalid value for 'account_identifier', the character length must be smaller than or equal to 50.";
        }

        if ($this->container['fiscal_year'] === null) {
            $invalidProperties[] = "'fiscal_year' can't be null";
        }
        if (($this->container['fiscal_year'] > 2040)) {
            $invalidProperties[] = "invalid value for 'fiscal_year', must be smaller than or equal to 2040.";
        }

        if (($this->container['fiscal_year'] < 2020)) {
            $invalidProperties[] = "invalid value for 'fiscal_year', must be bigger than or equal to 2020.";
        }

        if ($this->container['chart_of_account_reference'] === null) {
            $invalidProperties[] = "'chart_of_account_reference' can't be null";
        }
        if ($this->container['education_organization_reference'] === null) {
            $invalidProperties[] = "'education_organization_reference' can't be null";
        }
        if (!is_null($this->container['account_name']) && (mb_strlen($this->container['account_name']) > 100)) {
            $invalidProperties[] = "invalid value for 'account_name', the character length must be smaller than or equal to 100.";
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
     * Gets account_identifier
     *
     * @return string
     */
    public function getAccountIdentifier()
    {
        return $this->container['account_identifier'];
    }

    /**
     * Sets account_identifier
     *
     * @param string $account_identifier Code value for the valid combination of account dimensions by LEA under which financials are reported.
     *
     * @return self
     */
    public function setAccountIdentifier($account_identifier)
    {
        if (is_null($account_identifier)) {
            throw new \InvalidArgumentException('non-nullable account_identifier cannot be null');
        }
        if ((mb_strlen($account_identifier) > 50)) {
            throw new \InvalidArgumentException('invalid length for $account_identifier when calling EdFiLocalAccount., must be smaller than or equal to 50.');
        }

        $this->container['account_identifier'] = $account_identifier;

        return $this;
    }

    /**
     * Gets fiscal_year
     *
     * @return int
     */
    public function getFiscalYear()
    {
        return $this->container['fiscal_year'];
    }

    /**
     * Sets fiscal_year
     *
     * @param int $fiscal_year The fiscal year for the account.
     *
     * @return self
     */
    public function setFiscalYear($fiscal_year)
    {
        if (is_null($fiscal_year)) {
            throw new \InvalidArgumentException('non-nullable fiscal_year cannot be null');
        }

        if (($fiscal_year > 2040)) {
            throw new \InvalidArgumentException('invalid value for $fiscal_year when calling EdFiLocalAccount., must be smaller than or equal to 2040.');
        }
        if (($fiscal_year < 2020)) {
            throw new \InvalidArgumentException('invalid value for $fiscal_year when calling EdFiLocalAccount., must be bigger than or equal to 2020.');
        }

        $this->container['fiscal_year'] = $fiscal_year;

        return $this;
    }

    /**
     * Gets chart_of_account_reference
     *
     * @return \Resources\Model\EdFiChartOfAccountReference
     */
    public function getChartOfAccountReference()
    {
        return $this->container['chart_of_account_reference'];
    }

    /**
     * Sets chart_of_account_reference
     *
     * @param \Resources\Model\EdFiChartOfAccountReference $chart_of_account_reference chart_of_account_reference
     *
     * @return self
     */
    public function setChartOfAccountReference($chart_of_account_reference)
    {
        if (is_null($chart_of_account_reference)) {
            throw new \InvalidArgumentException('non-nullable chart_of_account_reference cannot be null');
        }
        $this->container['chart_of_account_reference'] = $chart_of_account_reference;

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
     * Gets account_name
     *
     * @return string|null
     */
    public function getAccountName()
    {
        return $this->container['account_name'];
    }

    /**
     * Sets account_name
     *
     * @param string|null $account_name A descriptive name for the account.
     *
     * @return self
     */
    public function setAccountName($account_name)
    {
        if (is_null($account_name)) {
            array_push($this->openAPINullablesSetToNull, 'account_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('account_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($account_name) && (mb_strlen($account_name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $account_name when calling EdFiLocalAccount., must be smaller than or equal to 100.');
        }

        $this->container['account_name'] = $account_name;

        return $this;
    }

    /**
     * Gets reporting_tags
     *
     * @return \Resources\Model\EdFiLocalAccountReportingTag[]|null
     */
    public function getReportingTags()
    {
        return $this->container['reporting_tags'];
    }

    /**
     * Sets reporting_tags
     *
     * @param \Resources\Model\EdFiLocalAccountReportingTag[]|null $reporting_tags An unordered collection of localAccountReportingTags. Optional tag for accountability reporting.
     *
     * @return self
     */
    public function setReportingTags($reporting_tags)
    {
        if (is_null($reporting_tags)) {
            throw new \InvalidArgumentException('non-nullable reporting_tags cannot be null');
        }
        $this->container['reporting_tags'] = $reporting_tags;

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


