<?php
/**
 * EdFiStaffEducationOrganizationAssignmentAssociation
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
 * EdFiStaffEducationOrganizationAssignmentAssociation Class Doc Comment
 *
 * @category Class
 * @package  Resources
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EdFiStaffEducationOrganizationAssignmentAssociation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'edFi_staffEducationOrganizationAssignmentAssociation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'begin_date' => '\DateTime',
        'staff_classification_descriptor' => 'string',
        'credential_reference' => '\Resources\Model\EdFiCredentialReference',
        'education_organization_reference' => '\Resources\Model\EdFiEducationOrganizationReference',
        'employment_staff_education_organization_employment_association_reference' => '\Resources\Model\EdFiStaffEducationOrganizationEmploymentAssociationReference',
        'staff_reference' => '\Resources\Model\EdFiStaffReference',
        'end_date' => '\DateTime',
        'full_time_equivalency' => 'float',
        'order_of_assignment' => 'int',
        'position_title' => 'string',
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
        'begin_date' => 'date',
        'staff_classification_descriptor' => null,
        'credential_reference' => null,
        'education_organization_reference' => null,
        'employment_staff_education_organization_employment_association_reference' => null,
        'staff_reference' => null,
        'end_date' => 'date',
        'full_time_equivalency' => 'double',
        'order_of_assignment' => 'int32',
        'position_title' => null,
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
        'begin_date' => false,
        'staff_classification_descriptor' => false,
        'credential_reference' => false,
        'education_organization_reference' => false,
        'employment_staff_education_organization_employment_association_reference' => false,
        'staff_reference' => false,
        'end_date' => true,
        'full_time_equivalency' => true,
        'order_of_assignment' => true,
        'position_title' => true,
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
        'begin_date' => 'beginDate',
        'staff_classification_descriptor' => 'staffClassificationDescriptor',
        'credential_reference' => 'credentialReference',
        'education_organization_reference' => 'educationOrganizationReference',
        'employment_staff_education_organization_employment_association_reference' => 'employmentStaffEducationOrganizationEmploymentAssociationReference',
        'staff_reference' => 'staffReference',
        'end_date' => 'endDate',
        'full_time_equivalency' => 'fullTimeEquivalency',
        'order_of_assignment' => 'orderOfAssignment',
        'position_title' => 'positionTitle',
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
        'begin_date' => 'setBeginDate',
        'staff_classification_descriptor' => 'setStaffClassificationDescriptor',
        'credential_reference' => 'setCredentialReference',
        'education_organization_reference' => 'setEducationOrganizationReference',
        'employment_staff_education_organization_employment_association_reference' => 'setEmploymentStaffEducationOrganizationEmploymentAssociationReference',
        'staff_reference' => 'setStaffReference',
        'end_date' => 'setEndDate',
        'full_time_equivalency' => 'setFullTimeEquivalency',
        'order_of_assignment' => 'setOrderOfAssignment',
        'position_title' => 'setPositionTitle',
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
        'begin_date' => 'getBeginDate',
        'staff_classification_descriptor' => 'getStaffClassificationDescriptor',
        'credential_reference' => 'getCredentialReference',
        'education_organization_reference' => 'getEducationOrganizationReference',
        'employment_staff_education_organization_employment_association_reference' => 'getEmploymentStaffEducationOrganizationEmploymentAssociationReference',
        'staff_reference' => 'getStaffReference',
        'end_date' => 'getEndDate',
        'full_time_equivalency' => 'getFullTimeEquivalency',
        'order_of_assignment' => 'getOrderOfAssignment',
        'position_title' => 'getPositionTitle',
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
        $this->setIfExists('begin_date', $data ?? [], null);
        $this->setIfExists('staff_classification_descriptor', $data ?? [], null);
        $this->setIfExists('credential_reference', $data ?? [], null);
        $this->setIfExists('education_organization_reference', $data ?? [], null);
        $this->setIfExists('employment_staff_education_organization_employment_association_reference', $data ?? [], null);
        $this->setIfExists('staff_reference', $data ?? [], null);
        $this->setIfExists('end_date', $data ?? [], null);
        $this->setIfExists('full_time_equivalency', $data ?? [], null);
        $this->setIfExists('order_of_assignment', $data ?? [], null);
        $this->setIfExists('position_title', $data ?? [], null);
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

        if ($this->container['begin_date'] === null) {
            $invalidProperties[] = "'begin_date' can't be null";
        }
        if ($this->container['staff_classification_descriptor'] === null) {
            $invalidProperties[] = "'staff_classification_descriptor' can't be null";
        }
        if ((mb_strlen($this->container['staff_classification_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'staff_classification_descriptor', the character length must be smaller than or equal to 306.";
        }

        if ($this->container['education_organization_reference'] === null) {
            $invalidProperties[] = "'education_organization_reference' can't be null";
        }
        if ($this->container['staff_reference'] === null) {
            $invalidProperties[] = "'staff_reference' can't be null";
        }
        if (!is_null($this->container['full_time_equivalency']) && ($this->container['full_time_equivalency'] > 9.9999)) {
            $invalidProperties[] = "invalid value for 'full_time_equivalency', must be smaller than or equal to 9.9999.";
        }

        if (!is_null($this->container['full_time_equivalency']) && ($this->container['full_time_equivalency'] < 0.0)) {
            $invalidProperties[] = "invalid value for 'full_time_equivalency', must be bigger than or equal to 0.0.";
        }

        if (!is_null($this->container['position_title']) && (mb_strlen($this->container['position_title']) > 100)) {
            $invalidProperties[] = "invalid value for 'position_title', the character length must be smaller than or equal to 100.";
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
     * @param \DateTime $begin_date Month, day, and year of the start or effective date of a staff member's employment, contract, or relationship with the education organization.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines.
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
     * Gets staff_classification_descriptor
     *
     * @return string
     */
    public function getStaffClassificationDescriptor()
    {
        return $this->container['staff_classification_descriptor'];
    }

    /**
     * Sets staff_classification_descriptor
     *
     * @param string $staff_classification_descriptor The titles of employment, official status, or rank of education staff.
     *
     * @return self
     */
    public function setStaffClassificationDescriptor($staff_classification_descriptor)
    {
        if (is_null($staff_classification_descriptor)) {
            throw new \InvalidArgumentException('non-nullable staff_classification_descriptor cannot be null');
        }
        if ((mb_strlen($staff_classification_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $staff_classification_descriptor when calling EdFiStaffEducationOrganizationAssignmentAssociation., must be smaller than or equal to 306.');
        }

        $this->container['staff_classification_descriptor'] = $staff_classification_descriptor;

        return $this;
    }

    /**
     * Gets credential_reference
     *
     * @return \Resources\Model\EdFiCredentialReference|null
     */
    public function getCredentialReference()
    {
        return $this->container['credential_reference'];
    }

    /**
     * Sets credential_reference
     *
     * @param \Resources\Model\EdFiCredentialReference|null $credential_reference credential_reference
     *
     * @return self
     */
    public function setCredentialReference($credential_reference)
    {
        if (is_null($credential_reference)) {
            throw new \InvalidArgumentException('non-nullable credential_reference cannot be null');
        }
        $this->container['credential_reference'] = $credential_reference;

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
     * Gets employment_staff_education_organization_employment_association_reference
     *
     * @return \Resources\Model\EdFiStaffEducationOrganizationEmploymentAssociationReference|null
     */
    public function getEmploymentStaffEducationOrganizationEmploymentAssociationReference()
    {
        return $this->container['employment_staff_education_organization_employment_association_reference'];
    }

    /**
     * Sets employment_staff_education_organization_employment_association_reference
     *
     * @param \Resources\Model\EdFiStaffEducationOrganizationEmploymentAssociationReference|null $employment_staff_education_organization_employment_association_reference employment_staff_education_organization_employment_association_reference
     *
     * @return self
     */
    public function setEmploymentStaffEducationOrganizationEmploymentAssociationReference($employment_staff_education_organization_employment_association_reference)
    {
        if (is_null($employment_staff_education_organization_employment_association_reference)) {
            throw new \InvalidArgumentException('non-nullable employment_staff_education_organization_employment_association_reference cannot be null');
        }
        $this->container['employment_staff_education_organization_employment_association_reference'] = $employment_staff_education_organization_employment_association_reference;

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
     * Gets end_date
     *
     * @return \DateTime|null
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime|null $end_date Month, day, and year of the end or termination date of a staff member's employment, contract, or relationship with the education organization.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines.
     *
     * @return self
     */
    public function setEndDate($end_date)
    {
        if (is_null($end_date)) {
            array_push($this->openAPINullablesSetToNull, 'end_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('end_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets full_time_equivalency
     *
     * @return float|null
     */
    public function getFullTimeEquivalency()
    {
        return $this->container['full_time_equivalency'];
    }

    /**
     * Sets full_time_equivalency
     *
     * @param float|null $full_time_equivalency The ratio between the hours of work expected in a position and the hours of work normally expected in a full-time position in the same setting.
     *
     * @return self
     */
    public function setFullTimeEquivalency($full_time_equivalency)
    {
        if (is_null($full_time_equivalency)) {
            array_push($this->openAPINullablesSetToNull, 'full_time_equivalency');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('full_time_equivalency', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($full_time_equivalency) && ($full_time_equivalency > 9.9999)) {
            throw new \InvalidArgumentException('invalid value for $full_time_equivalency when calling EdFiStaffEducationOrganizationAssignmentAssociation., must be smaller than or equal to 9.9999.');
        }
        if (!is_null($full_time_equivalency) && ($full_time_equivalency < 0.0)) {
            throw new \InvalidArgumentException('invalid value for $full_time_equivalency when calling EdFiStaffEducationOrganizationAssignmentAssociation., must be bigger than or equal to 0.0.');
        }

        $this->container['full_time_equivalency'] = $full_time_equivalency;

        return $this;
    }

    /**
     * Gets order_of_assignment
     *
     * @return int|null
     */
    public function getOrderOfAssignment()
    {
        return $this->container['order_of_assignment'];
    }

    /**
     * Sets order_of_assignment
     *
     * @param int|null $order_of_assignment Describes whether the assignment is this the staff member's primary assignment, secondary assignment, etc.
     *
     * @return self
     */
    public function setOrderOfAssignment($order_of_assignment)
    {
        if (is_null($order_of_assignment)) {
            array_push($this->openAPINullablesSetToNull, 'order_of_assignment');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('order_of_assignment', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['order_of_assignment'] = $order_of_assignment;

        return $this;
    }

    /**
     * Gets position_title
     *
     * @return string|null
     */
    public function getPositionTitle()
    {
        return $this->container['position_title'];
    }

    /**
     * Sets position_title
     *
     * @param string|null $position_title The descriptive name of an individual's position.
     *
     * @return self
     */
    public function setPositionTitle($position_title)
    {
        if (is_null($position_title)) {
            array_push($this->openAPINullablesSetToNull, 'position_title');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('position_title', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($position_title) && (mb_strlen($position_title) > 100)) {
            throw new \InvalidArgumentException('invalid length for $position_title when calling EdFiStaffEducationOrganizationAssignmentAssociation., must be smaller than or equal to 100.');
        }

        $this->container['position_title'] = $position_title;

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


