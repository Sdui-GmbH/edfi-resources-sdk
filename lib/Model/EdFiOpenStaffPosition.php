<?php
/**
 * EdFiOpenStaffPosition
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
 * EdFiOpenStaffPosition Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EdFiOpenStaffPosition implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'edFi_openStaffPosition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'requisition_number' => 'string',
        'education_organization_reference' => '\OpenAPI\Client\Model\EdFiEducationOrganizationReference',
        'academic_subjects' => '\OpenAPI\Client\Model\EdFiOpenStaffPositionAcademicSubject[]',
        'date_posted' => '\DateTime',
        'date_posting_removed' => '\DateTime',
        'employment_status_descriptor' => 'string',
        'instructional_grade_levels' => '\OpenAPI\Client\Model\EdFiOpenStaffPositionInstructionalGradeLevel[]',
        'position_title' => 'string',
        'posting_result_descriptor' => 'string',
        'program_assignment_descriptor' => 'string',
        'staff_classification_descriptor' => 'string',
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
        'requisition_number' => null,
        'education_organization_reference' => null,
        'academic_subjects' => null,
        'date_posted' => 'date',
        'date_posting_removed' => 'date',
        'employment_status_descriptor' => null,
        'instructional_grade_levels' => null,
        'position_title' => null,
        'posting_result_descriptor' => null,
        'program_assignment_descriptor' => null,
        'staff_classification_descriptor' => null,
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
        'requisition_number' => 'requisitionNumber',
        'education_organization_reference' => 'educationOrganizationReference',
        'academic_subjects' => 'academicSubjects',
        'date_posted' => 'datePosted',
        'date_posting_removed' => 'datePostingRemoved',
        'employment_status_descriptor' => 'employmentStatusDescriptor',
        'instructional_grade_levels' => 'instructionalGradeLevels',
        'position_title' => 'positionTitle',
        'posting_result_descriptor' => 'postingResultDescriptor',
        'program_assignment_descriptor' => 'programAssignmentDescriptor',
        'staff_classification_descriptor' => 'staffClassificationDescriptor',
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
        'requisition_number' => 'setRequisitionNumber',
        'education_organization_reference' => 'setEducationOrganizationReference',
        'academic_subjects' => 'setAcademicSubjects',
        'date_posted' => 'setDatePosted',
        'date_posting_removed' => 'setDatePostingRemoved',
        'employment_status_descriptor' => 'setEmploymentStatusDescriptor',
        'instructional_grade_levels' => 'setInstructionalGradeLevels',
        'position_title' => 'setPositionTitle',
        'posting_result_descriptor' => 'setPostingResultDescriptor',
        'program_assignment_descriptor' => 'setProgramAssignmentDescriptor',
        'staff_classification_descriptor' => 'setStaffClassificationDescriptor',
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
        'requisition_number' => 'getRequisitionNumber',
        'education_organization_reference' => 'getEducationOrganizationReference',
        'academic_subjects' => 'getAcademicSubjects',
        'date_posted' => 'getDatePosted',
        'date_posting_removed' => 'getDatePostingRemoved',
        'employment_status_descriptor' => 'getEmploymentStatusDescriptor',
        'instructional_grade_levels' => 'getInstructionalGradeLevels',
        'position_title' => 'getPositionTitle',
        'posting_result_descriptor' => 'getPostingResultDescriptor',
        'program_assignment_descriptor' => 'getProgramAssignmentDescriptor',
        'staff_classification_descriptor' => 'getStaffClassificationDescriptor',
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
        $this->container['requisition_number'] = $data['requisition_number'] ?? null;
        $this->container['education_organization_reference'] = $data['education_organization_reference'] ?? null;
        $this->container['academic_subjects'] = $data['academic_subjects'] ?? null;
        $this->container['date_posted'] = $data['date_posted'] ?? null;
        $this->container['date_posting_removed'] = $data['date_posting_removed'] ?? null;
        $this->container['employment_status_descriptor'] = $data['employment_status_descriptor'] ?? null;
        $this->container['instructional_grade_levels'] = $data['instructional_grade_levels'] ?? null;
        $this->container['position_title'] = $data['position_title'] ?? null;
        $this->container['posting_result_descriptor'] = $data['posting_result_descriptor'] ?? null;
        $this->container['program_assignment_descriptor'] = $data['program_assignment_descriptor'] ?? null;
        $this->container['staff_classification_descriptor'] = $data['staff_classification_descriptor'] ?? null;
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

        if ($this->container['requisition_number'] === null) {
            $invalidProperties[] = "'requisition_number' can't be null";
        }
        if ((mb_strlen($this->container['requisition_number']) > 20)) {
            $invalidProperties[] = "invalid value for 'requisition_number', the character length must be smaller than or equal to 20.";
        }

        if ((mb_strlen($this->container['requisition_number']) < 1)) {
            $invalidProperties[] = "invalid value for 'requisition_number', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['education_organization_reference'] === null) {
            $invalidProperties[] = "'education_organization_reference' can't be null";
        }
        if ($this->container['date_posted'] === null) {
            $invalidProperties[] = "'date_posted' can't be null";
        }
        if ($this->container['employment_status_descriptor'] === null) {
            $invalidProperties[] = "'employment_status_descriptor' can't be null";
        }
        if ((mb_strlen($this->container['employment_status_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'employment_status_descriptor', the character length must be smaller than or equal to 306.";
        }

        if (!is_null($this->container['position_title']) && (mb_strlen($this->container['position_title']) > 100)) {
            $invalidProperties[] = "invalid value for 'position_title', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['position_title']) && (mb_strlen($this->container['position_title']) < 1)) {
            $invalidProperties[] = "invalid value for 'position_title', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['posting_result_descriptor']) && (mb_strlen($this->container['posting_result_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'posting_result_descriptor', the character length must be smaller than or equal to 306.";
        }

        if (!is_null($this->container['program_assignment_descriptor']) && (mb_strlen($this->container['program_assignment_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'program_assignment_descriptor', the character length must be smaller than or equal to 306.";
        }

        if ($this->container['staff_classification_descriptor'] === null) {
            $invalidProperties[] = "'staff_classification_descriptor' can't be null";
        }
        if ((mb_strlen($this->container['staff_classification_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'staff_classification_descriptor', the character length must be smaller than or equal to 306.";
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
     * Gets requisition_number
     *
     * @return string
     */
    public function getRequisitionNumber()
    {
        return $this->container['requisition_number'];
    }

    /**
     * Sets requisition_number
     *
     * @param string $requisition_number The number or identifier assigned to an open staff position, typically a requisition number assigned by Human Resources.
     *
     * @return self
     */
    public function setRequisitionNumber($requisition_number)
    {
        if ((mb_strlen($requisition_number) > 20)) {
            throw new \InvalidArgumentException('invalid length for $requisition_number when calling EdFiOpenStaffPosition., must be smaller than or equal to 20.');
        }
        if ((mb_strlen($requisition_number) < 1)) {
            throw new \InvalidArgumentException('invalid length for $requisition_number when calling EdFiOpenStaffPosition., must be bigger than or equal to 1.');
        }

        $this->container['requisition_number'] = $requisition_number;

        return $this;
    }

    /**
     * Gets education_organization_reference
     *
     * @return \OpenAPI\Client\Model\EdFiEducationOrganizationReference
     */
    public function getEducationOrganizationReference()
    {
        return $this->container['education_organization_reference'];
    }

    /**
     * Sets education_organization_reference
     *
     * @param \OpenAPI\Client\Model\EdFiEducationOrganizationReference $education_organization_reference education_organization_reference
     *
     * @return self
     */
    public function setEducationOrganizationReference($education_organization_reference)
    {
        $this->container['education_organization_reference'] = $education_organization_reference;

        return $this;
    }

    /**
     * Gets academic_subjects
     *
     * @return \OpenAPI\Client\Model\EdFiOpenStaffPositionAcademicSubject[]|null
     */
    public function getAcademicSubjects()
    {
        return $this->container['academic_subjects'];
    }

    /**
     * Sets academic_subjects
     *
     * @param \OpenAPI\Client\Model\EdFiOpenStaffPositionAcademicSubject[]|null $academic_subjects An unordered collection of openStaffPositionAcademicSubjects. The teaching field required for the open staff position.
     *
     * @return self
     */
    public function setAcademicSubjects($academic_subjects)
    {
        $this->container['academic_subjects'] = $academic_subjects;

        return $this;
    }

    /**
     * Gets date_posted
     *
     * @return \DateTime
     */
    public function getDatePosted()
    {
        return $this->container['date_posted'];
    }

    /**
     * Sets date_posted
     *
     * @param \DateTime $date_posted Date the open staff position was posted.
     *
     * @return self
     */
    public function setDatePosted($date_posted)
    {
        $this->container['date_posted'] = $date_posted;

        return $this;
    }

    /**
     * Gets date_posting_removed
     *
     * @return \DateTime|null
     */
    public function getDatePostingRemoved()
    {
        return $this->container['date_posting_removed'];
    }

    /**
     * Sets date_posting_removed
     *
     * @param \DateTime|null $date_posting_removed The date the posting was removed or filled.
     *
     * @return self
     */
    public function setDatePostingRemoved($date_posting_removed)
    {
        $this->container['date_posting_removed'] = $date_posting_removed;

        return $this;
    }

    /**
     * Gets employment_status_descriptor
     *
     * @return string
     */
    public function getEmploymentStatusDescriptor()
    {
        return $this->container['employment_status_descriptor'];
    }

    /**
     * Sets employment_status_descriptor
     *
     * @param string $employment_status_descriptor Reflects the type of employment or contract desired for the position.
     *
     * @return self
     */
    public function setEmploymentStatusDescriptor($employment_status_descriptor)
    {
        if ((mb_strlen($employment_status_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $employment_status_descriptor when calling EdFiOpenStaffPosition., must be smaller than or equal to 306.');
        }

        $this->container['employment_status_descriptor'] = $employment_status_descriptor;

        return $this;
    }

    /**
     * Gets instructional_grade_levels
     *
     * @return \OpenAPI\Client\Model\EdFiOpenStaffPositionInstructionalGradeLevel[]|null
     */
    public function getInstructionalGradeLevels()
    {
        return $this->container['instructional_grade_levels'];
    }

    /**
     * Sets instructional_grade_levels
     *
     * @param \OpenAPI\Client\Model\EdFiOpenStaffPositionInstructionalGradeLevel[]|null $instructional_grade_levels An unordered collection of openStaffPositionInstructionalGradeLevels. The set of grade levels for which the position's assignment is responsible.
     *
     * @return self
     */
    public function setInstructionalGradeLevels($instructional_grade_levels)
    {
        $this->container['instructional_grade_levels'] = $instructional_grade_levels;

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
        if (!is_null($position_title) && (mb_strlen($position_title) > 100)) {
            throw new \InvalidArgumentException('invalid length for $position_title when calling EdFiOpenStaffPosition., must be smaller than or equal to 100.');
        }
        if (!is_null($position_title) && (mb_strlen($position_title) < 1)) {
            throw new \InvalidArgumentException('invalid length for $position_title when calling EdFiOpenStaffPosition., must be bigger than or equal to 1.');
        }

        $this->container['position_title'] = $position_title;

        return $this;
    }

    /**
     * Gets posting_result_descriptor
     *
     * @return string|null
     */
    public function getPostingResultDescriptor()
    {
        return $this->container['posting_result_descriptor'];
    }

    /**
     * Sets posting_result_descriptor
     *
     * @param string|null $posting_result_descriptor Indication of whether the OpenStaffPosition was filled or retired without filling.
     *
     * @return self
     */
    public function setPostingResultDescriptor($posting_result_descriptor)
    {
        if (!is_null($posting_result_descriptor) && (mb_strlen($posting_result_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $posting_result_descriptor when calling EdFiOpenStaffPosition., must be smaller than or equal to 306.');
        }

        $this->container['posting_result_descriptor'] = $posting_result_descriptor;

        return $this;
    }

    /**
     * Gets program_assignment_descriptor
     *
     * @return string|null
     */
    public function getProgramAssignmentDescriptor()
    {
        return $this->container['program_assignment_descriptor'];
    }

    /**
     * Sets program_assignment_descriptor
     *
     * @param string|null $program_assignment_descriptor The name of the program for which the open staff position will be assigned.
     *
     * @return self
     */
    public function setProgramAssignmentDescriptor($program_assignment_descriptor)
    {
        if (!is_null($program_assignment_descriptor) && (mb_strlen($program_assignment_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $program_assignment_descriptor when calling EdFiOpenStaffPosition., must be smaller than or equal to 306.');
        }

        $this->container['program_assignment_descriptor'] = $program_assignment_descriptor;

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
        if ((mb_strlen($staff_classification_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $staff_classification_descriptor when calling EdFiOpenStaffPosition., must be smaller than or equal to 306.');
        }

        $this->container['staff_classification_descriptor'] = $staff_classification_descriptor;

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


