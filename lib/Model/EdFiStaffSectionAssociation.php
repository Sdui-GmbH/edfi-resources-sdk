<?php
/**
 * EdFiStaffSectionAssociation
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
 * EdFiStaffSectionAssociation Class Doc Comment
 *
 * @category Class
 * @package  Resources
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EdFiStaffSectionAssociation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'edFi_staffSectionAssociation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'begin_date' => '\DateTime',
        'section_reference' => '\Resources\Model\EdFiSectionReference',
        'staff_reference' => '\Resources\Model\EdFiStaffReference',
        'classroom_position_descriptor' => 'string',
        'end_date' => '\DateTime',
        'highly_qualified_teacher' => 'bool',
        'percentage_contribution' => 'float',
        'teacher_student_data_link_exclusion' => 'bool',
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
        'section_reference' => null,
        'staff_reference' => null,
        'classroom_position_descriptor' => null,
        'end_date' => 'date',
        'highly_qualified_teacher' => null,
        'percentage_contribution' => 'double',
        'teacher_student_data_link_exclusion' => null,
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
        'section_reference' => false,
        'staff_reference' => false,
        'classroom_position_descriptor' => false,
        'end_date' => true,
        'highly_qualified_teacher' => true,
        'percentage_contribution' => true,
        'teacher_student_data_link_exclusion' => true,
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
        'section_reference' => 'sectionReference',
        'staff_reference' => 'staffReference',
        'classroom_position_descriptor' => 'classroomPositionDescriptor',
        'end_date' => 'endDate',
        'highly_qualified_teacher' => 'highlyQualifiedTeacher',
        'percentage_contribution' => 'percentageContribution',
        'teacher_student_data_link_exclusion' => 'teacherStudentDataLinkExclusion',
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
        'section_reference' => 'setSectionReference',
        'staff_reference' => 'setStaffReference',
        'classroom_position_descriptor' => 'setClassroomPositionDescriptor',
        'end_date' => 'setEndDate',
        'highly_qualified_teacher' => 'setHighlyQualifiedTeacher',
        'percentage_contribution' => 'setPercentageContribution',
        'teacher_student_data_link_exclusion' => 'setTeacherStudentDataLinkExclusion',
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
        'section_reference' => 'getSectionReference',
        'staff_reference' => 'getStaffReference',
        'classroom_position_descriptor' => 'getClassroomPositionDescriptor',
        'end_date' => 'getEndDate',
        'highly_qualified_teacher' => 'getHighlyQualifiedTeacher',
        'percentage_contribution' => 'getPercentageContribution',
        'teacher_student_data_link_exclusion' => 'getTeacherStudentDataLinkExclusion',
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
        $this->setIfExists('section_reference', $data ?? [], null);
        $this->setIfExists('staff_reference', $data ?? [], null);
        $this->setIfExists('classroom_position_descriptor', $data ?? [], null);
        $this->setIfExists('end_date', $data ?? [], null);
        $this->setIfExists('highly_qualified_teacher', $data ?? [], null);
        $this->setIfExists('percentage_contribution', $data ?? [], null);
        $this->setIfExists('teacher_student_data_link_exclusion', $data ?? [], null);
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
        if ($this->container['section_reference'] === null) {
            $invalidProperties[] = "'section_reference' can't be null";
        }
        if ($this->container['staff_reference'] === null) {
            $invalidProperties[] = "'staff_reference' can't be null";
        }
        if ($this->container['classroom_position_descriptor'] === null) {
            $invalidProperties[] = "'classroom_position_descriptor' can't be null";
        }
        if ((mb_strlen($this->container['classroom_position_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'classroom_position_descriptor', the character length must be smaller than or equal to 306.";
        }

        if (!is_null($this->container['percentage_contribution']) && ($this->container['percentage_contribution'] > 9.9999)) {
            $invalidProperties[] = "invalid value for 'percentage_contribution', must be smaller than or equal to 9.9999.";
        }

        if (!is_null($this->container['percentage_contribution']) && ($this->container['percentage_contribution'] < -9.9999)) {
            $invalidProperties[] = "invalid value for 'percentage_contribution', must be bigger than or equal to -9.9999.";
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
     * @param \DateTime $begin_date Month, day, and year of a teacher's assignment to the section.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines.
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
     * Gets section_reference
     *
     * @return \Resources\Model\EdFiSectionReference
     */
    public function getSectionReference()
    {
        return $this->container['section_reference'];
    }

    /**
     * Sets section_reference
     *
     * @param \Resources\Model\EdFiSectionReference $section_reference section_reference
     *
     * @return self
     */
    public function setSectionReference($section_reference)
    {
        if (is_null($section_reference)) {
            throw new \InvalidArgumentException('non-nullable section_reference cannot be null');
        }
        $this->container['section_reference'] = $section_reference;

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
     * Gets classroom_position_descriptor
     *
     * @return string
     */
    public function getClassroomPositionDescriptor()
    {
        return $this->container['classroom_position_descriptor'];
    }

    /**
     * Sets classroom_position_descriptor
     *
     * @param string $classroom_position_descriptor The type of position the staff member holds in the specific class/section.
     *
     * @return self
     */
    public function setClassroomPositionDescriptor($classroom_position_descriptor)
    {
        if (is_null($classroom_position_descriptor)) {
            throw new \InvalidArgumentException('non-nullable classroom_position_descriptor cannot be null');
        }
        if ((mb_strlen($classroom_position_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $classroom_position_descriptor when calling EdFiStaffSectionAssociation., must be smaller than or equal to 306.');
        }

        $this->container['classroom_position_descriptor'] = $classroom_position_descriptor;

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
     * @param \DateTime|null $end_date Month, day, and year of the last day of a staff member's assignment to the section.  Note: Date interpretation may vary. Ed-Fi recommends inclusive dates, but states may define dates as inclusive or exclusive. For calculations, align with local guidelines.
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
     * Gets highly_qualified_teacher
     *
     * @return bool|null
     */
    public function getHighlyQualifiedTeacher()
    {
        return $this->container['highly_qualified_teacher'];
    }

    /**
     * Sets highly_qualified_teacher
     *
     * @param bool|null $highly_qualified_teacher An indication of whether a teacher is classified as highly qualified for his/her assignment according to state definition. This attribute indicates the teacher is highly qualified for this section being taught.
     *
     * @return self
     */
    public function setHighlyQualifiedTeacher($highly_qualified_teacher)
    {
        if (is_null($highly_qualified_teacher)) {
            array_push($this->openAPINullablesSetToNull, 'highly_qualified_teacher');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('highly_qualified_teacher', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['highly_qualified_teacher'] = $highly_qualified_teacher;

        return $this;
    }

    /**
     * Gets percentage_contribution
     *
     * @return float|null
     */
    public function getPercentageContribution()
    {
        return $this->container['percentage_contribution'];
    }

    /**
     * Sets percentage_contribution
     *
     * @param float|null $percentage_contribution Indicates the percentage of the total scheduled course time, academic standards, and/or learning activities delivered in this section by this staff member. A teacher of record designation may be based solely or partially on this contribution percentage.
     *
     * @return self
     */
    public function setPercentageContribution($percentage_contribution)
    {
        if (is_null($percentage_contribution)) {
            array_push($this->openAPINullablesSetToNull, 'percentage_contribution');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('percentage_contribution', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($percentage_contribution) && ($percentage_contribution > 9.9999)) {
            throw new \InvalidArgumentException('invalid value for $percentage_contribution when calling EdFiStaffSectionAssociation., must be smaller than or equal to 9.9999.');
        }
        if (!is_null($percentage_contribution) && ($percentage_contribution < -9.9999)) {
            throw new \InvalidArgumentException('invalid value for $percentage_contribution when calling EdFiStaffSectionAssociation., must be bigger than or equal to -9.9999.');
        }

        $this->container['percentage_contribution'] = $percentage_contribution;

        return $this;
    }

    /**
     * Gets teacher_student_data_link_exclusion
     *
     * @return bool|null
     */
    public function getTeacherStudentDataLinkExclusion()
    {
        return $this->container['teacher_student_data_link_exclusion'];
    }

    /**
     * Sets teacher_student_data_link_exclusion
     *
     * @param bool|null $teacher_student_data_link_exclusion Indicates that the entire section is excluded from calculation of value-added or growth attribution calculations used for a particular teacher evaluation.
     *
     * @return self
     */
    public function setTeacherStudentDataLinkExclusion($teacher_student_data_link_exclusion)
    {
        if (is_null($teacher_student_data_link_exclusion)) {
            array_push($this->openAPINullablesSetToNull, 'teacher_student_data_link_exclusion');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('teacher_student_data_link_exclusion', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['teacher_student_data_link_exclusion'] = $teacher_student_data_link_exclusion;

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


