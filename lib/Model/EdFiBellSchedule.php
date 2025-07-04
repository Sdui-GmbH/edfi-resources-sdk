<?php
/**
 * EdFiBellSchedule
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
 * EdFiBellSchedule Class Doc Comment
 *
 * @category Class
 * @package  Resources
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EdFiBellSchedule implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'edFi_bellSchedule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'bell_schedule_name' => 'string',
        'class_periods' => '\Resources\Model\EdFiBellScheduleClassPeriod[]',
        'school_reference' => '\Resources\Model\EdFiSchoolReference',
        'alternate_day_name' => 'string',
        'dates' => '\Resources\Model\EdFiBellScheduleDate[]',
        'end_time' => 'string',
        'grade_levels' => '\Resources\Model\EdFiBellScheduleGradeLevel[]',
        'start_time' => 'string',
        'total_instructional_time' => 'int',
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
        'bell_schedule_name' => null,
        'class_periods' => null,
        'school_reference' => null,
        'alternate_day_name' => null,
        'dates' => null,
        'end_time' => null,
        'grade_levels' => null,
        'start_time' => null,
        'total_instructional_time' => 'int32',
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
        'bell_schedule_name' => false,
        'class_periods' => false,
        'school_reference' => false,
        'alternate_day_name' => true,
        'dates' => false,
        'end_time' => true,
        'grade_levels' => false,
        'start_time' => true,
        'total_instructional_time' => true,
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
        'bell_schedule_name' => 'bellScheduleName',
        'class_periods' => 'classPeriods',
        'school_reference' => 'schoolReference',
        'alternate_day_name' => 'alternateDayName',
        'dates' => 'dates',
        'end_time' => 'endTime',
        'grade_levels' => 'gradeLevels',
        'start_time' => 'startTime',
        'total_instructional_time' => 'totalInstructionalTime',
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
        'bell_schedule_name' => 'setBellScheduleName',
        'class_periods' => 'setClassPeriods',
        'school_reference' => 'setSchoolReference',
        'alternate_day_name' => 'setAlternateDayName',
        'dates' => 'setDates',
        'end_time' => 'setEndTime',
        'grade_levels' => 'setGradeLevels',
        'start_time' => 'setStartTime',
        'total_instructional_time' => 'setTotalInstructionalTime',
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
        'bell_schedule_name' => 'getBellScheduleName',
        'class_periods' => 'getClassPeriods',
        'school_reference' => 'getSchoolReference',
        'alternate_day_name' => 'getAlternateDayName',
        'dates' => 'getDates',
        'end_time' => 'getEndTime',
        'grade_levels' => 'getGradeLevels',
        'start_time' => 'getStartTime',
        'total_instructional_time' => 'getTotalInstructionalTime',
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
        $this->setIfExists('bell_schedule_name', $data ?? [], null);
        $this->setIfExists('class_periods', $data ?? [], null);
        $this->setIfExists('school_reference', $data ?? [], null);
        $this->setIfExists('alternate_day_name', $data ?? [], null);
        $this->setIfExists('dates', $data ?? [], null);
        $this->setIfExists('end_time', $data ?? [], null);
        $this->setIfExists('grade_levels', $data ?? [], null);
        $this->setIfExists('start_time', $data ?? [], null);
        $this->setIfExists('total_instructional_time', $data ?? [], null);
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

        if ($this->container['bell_schedule_name'] === null) {
            $invalidProperties[] = "'bell_schedule_name' can't be null";
        }
        if ((mb_strlen($this->container['bell_schedule_name']) > 60)) {
            $invalidProperties[] = "invalid value for 'bell_schedule_name', the character length must be smaller than or equal to 60.";
        }

        if ($this->container['class_periods'] === null) {
            $invalidProperties[] = "'class_periods' can't be null";
        }
        if ($this->container['school_reference'] === null) {
            $invalidProperties[] = "'school_reference' can't be null";
        }
        if (!is_null($this->container['alternate_day_name']) && (mb_strlen($this->container['alternate_day_name']) > 20)) {
            $invalidProperties[] = "invalid value for 'alternate_day_name', the character length must be smaller than or equal to 20.";
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
     * Gets bell_schedule_name
     *
     * @return string
     */
    public function getBellScheduleName()
    {
        return $this->container['bell_schedule_name'];
    }

    /**
     * Sets bell_schedule_name
     *
     * @param string $bell_schedule_name Name or title of the bell schedule.
     *
     * @return self
     */
    public function setBellScheduleName($bell_schedule_name)
    {
        if (is_null($bell_schedule_name)) {
            throw new \InvalidArgumentException('non-nullable bell_schedule_name cannot be null');
        }
        if ((mb_strlen($bell_schedule_name) > 60)) {
            throw new \InvalidArgumentException('invalid length for $bell_schedule_name when calling EdFiBellSchedule., must be smaller than or equal to 60.');
        }

        $this->container['bell_schedule_name'] = $bell_schedule_name;

        return $this;
    }

    /**
     * Gets class_periods
     *
     * @return \Resources\Model\EdFiBellScheduleClassPeriod[]
     */
    public function getClassPeriods()
    {
        return $this->container['class_periods'];
    }

    /**
     * Sets class_periods
     *
     * @param \Resources\Model\EdFiBellScheduleClassPeriod[] $class_periods An unordered collection of bellScheduleClassPeriods. The class periods that compose this bell schedule.
     *
     * @return self
     */
    public function setClassPeriods($class_periods)
    {
        if (is_null($class_periods)) {
            throw new \InvalidArgumentException('non-nullable class_periods cannot be null');
        }
        $this->container['class_periods'] = $class_periods;

        return $this;
    }

    /**
     * Gets school_reference
     *
     * @return \Resources\Model\EdFiSchoolReference
     */
    public function getSchoolReference()
    {
        return $this->container['school_reference'];
    }

    /**
     * Sets school_reference
     *
     * @param \Resources\Model\EdFiSchoolReference $school_reference school_reference
     *
     * @return self
     */
    public function setSchoolReference($school_reference)
    {
        if (is_null($school_reference)) {
            throw new \InvalidArgumentException('non-nullable school_reference cannot be null');
        }
        $this->container['school_reference'] = $school_reference;

        return $this;
    }

    /**
     * Gets alternate_day_name
     *
     * @return string|null
     */
    public function getAlternateDayName()
    {
        return $this->container['alternate_day_name'];
    }

    /**
     * Sets alternate_day_name
     *
     * @param string|null $alternate_day_name An alternate name for the day (e.g., Red, Blue).
     *
     * @return self
     */
    public function setAlternateDayName($alternate_day_name)
    {
        if (is_null($alternate_day_name)) {
            array_push($this->openAPINullablesSetToNull, 'alternate_day_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('alternate_day_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($alternate_day_name) && (mb_strlen($alternate_day_name) > 20)) {
            throw new \InvalidArgumentException('invalid length for $alternate_day_name when calling EdFiBellSchedule., must be smaller than or equal to 20.');
        }

        $this->container['alternate_day_name'] = $alternate_day_name;

        return $this;
    }

    /**
     * Gets dates
     *
     * @return \Resources\Model\EdFiBellScheduleDate[]|null
     */
    public function getDates()
    {
        return $this->container['dates'];
    }

    /**
     * Sets dates
     *
     * @param \Resources\Model\EdFiBellScheduleDate[]|null $dates An unordered collection of bellScheduleDates. The dates for which the bell schedule applies.
     *
     * @return self
     */
    public function setDates($dates)
    {
        if (is_null($dates)) {
            throw new \InvalidArgumentException('non-nullable dates cannot be null');
        }
        $this->container['dates'] = $dates;

        return $this;
    }

    /**
     * Gets end_time
     *
     * @return string|null
     */
    public function getEndTime()
    {
        return $this->container['end_time'];
    }

    /**
     * Sets end_time
     *
     * @param string|null $end_time An indication of the time of day the bell schedule ends.
     *
     * @return self
     */
    public function setEndTime($end_time)
    {
        if (is_null($end_time)) {
            array_push($this->openAPINullablesSetToNull, 'end_time');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('end_time', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['end_time'] = $end_time;

        return $this;
    }

    /**
     * Gets grade_levels
     *
     * @return \Resources\Model\EdFiBellScheduleGradeLevel[]|null
     */
    public function getGradeLevels()
    {
        return $this->container['grade_levels'];
    }

    /**
     * Sets grade_levels
     *
     * @param \Resources\Model\EdFiBellScheduleGradeLevel[]|null $grade_levels An unordered collection of bellScheduleGradeLevels. The grade levels the particular bell schedule applies to.
     *
     * @return self
     */
    public function setGradeLevels($grade_levels)
    {
        if (is_null($grade_levels)) {
            throw new \InvalidArgumentException('non-nullable grade_levels cannot be null');
        }
        $this->container['grade_levels'] = $grade_levels;

        return $this;
    }

    /**
     * Gets start_time
     *
     * @return string|null
     */
    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time
     *
     * @param string|null $start_time An indication of the time of day the bell schedule begins.
     *
     * @return self
     */
    public function setStartTime($start_time)
    {
        if (is_null($start_time)) {
            array_push($this->openAPINullablesSetToNull, 'start_time');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('start_time', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['start_time'] = $start_time;

        return $this;
    }

    /**
     * Gets total_instructional_time
     *
     * @return int|null
     */
    public function getTotalInstructionalTime()
    {
        return $this->container['total_instructional_time'];
    }

    /**
     * Sets total_instructional_time
     *
     * @param int|null $total_instructional_time The total instructional time in minutes per day for the bell schedule.
     *
     * @return self
     */
    public function setTotalInstructionalTime($total_instructional_time)
    {
        if (is_null($total_instructional_time)) {
            array_push($this->openAPINullablesSetToNull, 'total_instructional_time');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('total_instructional_time', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['total_instructional_time'] = $total_instructional_time;

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


