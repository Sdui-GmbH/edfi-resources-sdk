<?php
/**
 * EdFiDisciplineIncident
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
 * EdFiDisciplineIncident Class Doc Comment
 *
 * @category Class
 * @package  Resources
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EdFiDisciplineIncident implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'edFi_disciplineIncident';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'incident_identifier' => 'string',
        'school_reference' => '\Resources\Model\EdFiSchoolReference',
        'behaviors' => '\Resources\Model\EdFiDisciplineIncidentBehavior[]',
        'case_number' => 'string',
        'external_participants' => '\Resources\Model\EdFiDisciplineIncidentExternalParticipant[]',
        'incident_cost' => 'float',
        'incident_date' => '\DateTime',
        'incident_description' => 'string',
        'incident_location_descriptor' => 'string',
        'incident_time' => 'string',
        'reported_to_law_enforcement' => 'bool',
        'reporter_description_descriptor' => 'string',
        'reporter_name' => 'string',
        'weapons' => '\Resources\Model\EdFiDisciplineIncidentWeapon[]',
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
        'incident_identifier' => null,
        'school_reference' => null,
        'behaviors' => null,
        'case_number' => null,
        'external_participants' => null,
        'incident_cost' => 'double',
        'incident_date' => 'date',
        'incident_description' => null,
        'incident_location_descriptor' => null,
        'incident_time' => null,
        'reported_to_law_enforcement' => null,
        'reporter_description_descriptor' => null,
        'reporter_name' => null,
        'weapons' => null,
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
        'incident_identifier' => false,
        'school_reference' => false,
        'behaviors' => false,
        'case_number' => true,
        'external_participants' => false,
        'incident_cost' => true,
        'incident_date' => false,
        'incident_description' => true,
        'incident_location_descriptor' => true,
        'incident_time' => true,
        'reported_to_law_enforcement' => true,
        'reporter_description_descriptor' => true,
        'reporter_name' => true,
        'weapons' => false,
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
        'incident_identifier' => 'incidentIdentifier',
        'school_reference' => 'schoolReference',
        'behaviors' => 'behaviors',
        'case_number' => 'caseNumber',
        'external_participants' => 'externalParticipants',
        'incident_cost' => 'incidentCost',
        'incident_date' => 'incidentDate',
        'incident_description' => 'incidentDescription',
        'incident_location_descriptor' => 'incidentLocationDescriptor',
        'incident_time' => 'incidentTime',
        'reported_to_law_enforcement' => 'reportedToLawEnforcement',
        'reporter_description_descriptor' => 'reporterDescriptionDescriptor',
        'reporter_name' => 'reporterName',
        'weapons' => 'weapons',
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
        'incident_identifier' => 'setIncidentIdentifier',
        'school_reference' => 'setSchoolReference',
        'behaviors' => 'setBehaviors',
        'case_number' => 'setCaseNumber',
        'external_participants' => 'setExternalParticipants',
        'incident_cost' => 'setIncidentCost',
        'incident_date' => 'setIncidentDate',
        'incident_description' => 'setIncidentDescription',
        'incident_location_descriptor' => 'setIncidentLocationDescriptor',
        'incident_time' => 'setIncidentTime',
        'reported_to_law_enforcement' => 'setReportedToLawEnforcement',
        'reporter_description_descriptor' => 'setReporterDescriptionDescriptor',
        'reporter_name' => 'setReporterName',
        'weapons' => 'setWeapons',
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
        'incident_identifier' => 'getIncidentIdentifier',
        'school_reference' => 'getSchoolReference',
        'behaviors' => 'getBehaviors',
        'case_number' => 'getCaseNumber',
        'external_participants' => 'getExternalParticipants',
        'incident_cost' => 'getIncidentCost',
        'incident_date' => 'getIncidentDate',
        'incident_description' => 'getIncidentDescription',
        'incident_location_descriptor' => 'getIncidentLocationDescriptor',
        'incident_time' => 'getIncidentTime',
        'reported_to_law_enforcement' => 'getReportedToLawEnforcement',
        'reporter_description_descriptor' => 'getReporterDescriptionDescriptor',
        'reporter_name' => 'getReporterName',
        'weapons' => 'getWeapons',
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
        $this->setIfExists('incident_identifier', $data ?? [], null);
        $this->setIfExists('school_reference', $data ?? [], null);
        $this->setIfExists('behaviors', $data ?? [], null);
        $this->setIfExists('case_number', $data ?? [], null);
        $this->setIfExists('external_participants', $data ?? [], null);
        $this->setIfExists('incident_cost', $data ?? [], null);
        $this->setIfExists('incident_date', $data ?? [], null);
        $this->setIfExists('incident_description', $data ?? [], null);
        $this->setIfExists('incident_location_descriptor', $data ?? [], null);
        $this->setIfExists('incident_time', $data ?? [], null);
        $this->setIfExists('reported_to_law_enforcement', $data ?? [], null);
        $this->setIfExists('reporter_description_descriptor', $data ?? [], null);
        $this->setIfExists('reporter_name', $data ?? [], null);
        $this->setIfExists('weapons', $data ?? [], null);
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

        if ($this->container['incident_identifier'] === null) {
            $invalidProperties[] = "'incident_identifier' can't be null";
        }
        if ((mb_strlen($this->container['incident_identifier']) > 36)) {
            $invalidProperties[] = "invalid value for 'incident_identifier', the character length must be smaller than or equal to 36.";
        }

        if ($this->container['school_reference'] === null) {
            $invalidProperties[] = "'school_reference' can't be null";
        }
        if (!is_null($this->container['case_number']) && (mb_strlen($this->container['case_number']) > 20)) {
            $invalidProperties[] = "invalid value for 'case_number', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['incident_cost']) && ($this->container['incident_cost'] > 922337203685477.6)) {
            $invalidProperties[] = "invalid value for 'incident_cost', must be smaller than or equal to 922337203685477.6.";
        }

        if (!is_null($this->container['incident_cost']) && ($this->container['incident_cost'] < -922337203685477.6)) {
            $invalidProperties[] = "invalid value for 'incident_cost', must be bigger than or equal to -922337203685477.6.";
        }

        if ($this->container['incident_date'] === null) {
            $invalidProperties[] = "'incident_date' can't be null";
        }
        if (!is_null($this->container['incident_description']) && (mb_strlen($this->container['incident_description']) > 1024)) {
            $invalidProperties[] = "invalid value for 'incident_description', the character length must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['incident_location_descriptor']) && (mb_strlen($this->container['incident_location_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'incident_location_descriptor', the character length must be smaller than or equal to 306.";
        }

        if (!is_null($this->container['reporter_description_descriptor']) && (mb_strlen($this->container['reporter_description_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'reporter_description_descriptor', the character length must be smaller than or equal to 306.";
        }

        if (!is_null($this->container['reporter_name']) && (mb_strlen($this->container['reporter_name']) > 75)) {
            $invalidProperties[] = "invalid value for 'reporter_name', the character length must be smaller than or equal to 75.";
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
     * Gets incident_identifier
     *
     * @return string
     */
    public function getIncidentIdentifier()
    {
        return $this->container['incident_identifier'];
    }

    /**
     * Sets incident_identifier
     *
     * @param string $incident_identifier A locally assigned unique identifier (within the school or school district) to identify each specific DisciplineIncident or occurrence. The same identifier should be used to document the entire discipline incident even if it included multiple offenses and multiple offenders.
     *
     * @return self
     */
    public function setIncidentIdentifier($incident_identifier)
    {
        if (is_null($incident_identifier)) {
            throw new \InvalidArgumentException('non-nullable incident_identifier cannot be null');
        }
        if ((mb_strlen($incident_identifier) > 36)) {
            throw new \InvalidArgumentException('invalid length for $incident_identifier when calling EdFiDisciplineIncident., must be smaller than or equal to 36.');
        }

        $this->container['incident_identifier'] = $incident_identifier;

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
     * Gets behaviors
     *
     * @return \Resources\Model\EdFiDisciplineIncidentBehavior[]|null
     */
    public function getBehaviors()
    {
        return $this->container['behaviors'];
    }

    /**
     * Sets behaviors
     *
     * @param \Resources\Model\EdFiDisciplineIncidentBehavior[]|null $behaviors An unordered collection of disciplineIncidentBehaviors. Describes behavior by category and provides a detailed description.
     *
     * @return self
     */
    public function setBehaviors($behaviors)
    {
        if (is_null($behaviors)) {
            throw new \InvalidArgumentException('non-nullable behaviors cannot be null');
        }
        $this->container['behaviors'] = $behaviors;

        return $this;
    }

    /**
     * Gets case_number
     *
     * @return string|null
     */
    public function getCaseNumber()
    {
        return $this->container['case_number'];
    }

    /**
     * Sets case_number
     *
     * @param string|null $case_number The case number assigned to the DisciplineIncident by law enforcement or other organization.
     *
     * @return self
     */
    public function setCaseNumber($case_number)
    {
        if (is_null($case_number)) {
            array_push($this->openAPINullablesSetToNull, 'case_number');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('case_number', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($case_number) && (mb_strlen($case_number) > 20)) {
            throw new \InvalidArgumentException('invalid length for $case_number when calling EdFiDisciplineIncident., must be smaller than or equal to 20.');
        }

        $this->container['case_number'] = $case_number;

        return $this;
    }

    /**
     * Gets external_participants
     *
     * @return \Resources\Model\EdFiDisciplineIncidentExternalParticipant[]|null
     */
    public function getExternalParticipants()
    {
        return $this->container['external_participants'];
    }

    /**
     * Sets external_participants
     *
     * @param \Resources\Model\EdFiDisciplineIncidentExternalParticipant[]|null $external_participants An unordered collection of disciplineIncidentExternalParticipants. Information on an individual involved in the discipline incident.
     *
     * @return self
     */
    public function setExternalParticipants($external_participants)
    {
        if (is_null($external_participants)) {
            throw new \InvalidArgumentException('non-nullable external_participants cannot be null');
        }
        $this->container['external_participants'] = $external_participants;

        return $this;
    }

    /**
     * Gets incident_cost
     *
     * @return float|null
     */
    public function getIncidentCost()
    {
        return $this->container['incident_cost'];
    }

    /**
     * Sets incident_cost
     *
     * @param float|null $incident_cost The value of any quantifiable monetary loss directly resulting from the discipline incident. Examples include the value of repairs necessitated by vandalism of a school facility, or the value of personnel resources used for repairs or consumed by the incident.
     *
     * @return self
     */
    public function setIncidentCost($incident_cost)
    {
        if (is_null($incident_cost)) {
            array_push($this->openAPINullablesSetToNull, 'incident_cost');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('incident_cost', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($incident_cost) && ($incident_cost > 922337203685477.6)) {
            throw new \InvalidArgumentException('invalid value for $incident_cost when calling EdFiDisciplineIncident., must be smaller than or equal to 922337203685477.6.');
        }
        if (!is_null($incident_cost) && ($incident_cost < -922337203685477.6)) {
            throw new \InvalidArgumentException('invalid value for $incident_cost when calling EdFiDisciplineIncident., must be bigger than or equal to -922337203685477.6.');
        }

        $this->container['incident_cost'] = $incident_cost;

        return $this;
    }

    /**
     * Gets incident_date
     *
     * @return \DateTime
     */
    public function getIncidentDate()
    {
        return $this->container['incident_date'];
    }

    /**
     * Sets incident_date
     *
     * @param \DateTime $incident_date The month, day, and year on which the discipline incident occurred.
     *
     * @return self
     */
    public function setIncidentDate($incident_date)
    {
        if (is_null($incident_date)) {
            throw new \InvalidArgumentException('non-nullable incident_date cannot be null');
        }
        $this->container['incident_date'] = $incident_date;

        return $this;
    }

    /**
     * Gets incident_description
     *
     * @return string|null
     */
    public function getIncidentDescription()
    {
        return $this->container['incident_description'];
    }

    /**
     * Sets incident_description
     *
     * @param string|null $incident_description The description for an incident.
     *
     * @return self
     */
    public function setIncidentDescription($incident_description)
    {
        if (is_null($incident_description)) {
            array_push($this->openAPINullablesSetToNull, 'incident_description');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('incident_description', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($incident_description) && (mb_strlen($incident_description) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $incident_description when calling EdFiDisciplineIncident., must be smaller than or equal to 1024.');
        }

        $this->container['incident_description'] = $incident_description;

        return $this;
    }

    /**
     * Gets incident_location_descriptor
     *
     * @return string|null
     */
    public function getIncidentLocationDescriptor()
    {
        return $this->container['incident_location_descriptor'];
    }

    /**
     * Sets incident_location_descriptor
     *
     * @param string|null $incident_location_descriptor Identifies where the discipline incident occurred and whether or not it occurred on school.
     *
     * @return self
     */
    public function setIncidentLocationDescriptor($incident_location_descriptor)
    {
        if (is_null($incident_location_descriptor)) {
            array_push($this->openAPINullablesSetToNull, 'incident_location_descriptor');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('incident_location_descriptor', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($incident_location_descriptor) && (mb_strlen($incident_location_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $incident_location_descriptor when calling EdFiDisciplineIncident., must be smaller than or equal to 306.');
        }

        $this->container['incident_location_descriptor'] = $incident_location_descriptor;

        return $this;
    }

    /**
     * Gets incident_time
     *
     * @return string|null
     */
    public function getIncidentTime()
    {
        return $this->container['incident_time'];
    }

    /**
     * Sets incident_time
     *
     * @param string|null $incident_time An indication of the time of day the incident took place.
     *
     * @return self
     */
    public function setIncidentTime($incident_time)
    {
        if (is_null($incident_time)) {
            array_push($this->openAPINullablesSetToNull, 'incident_time');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('incident_time', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['incident_time'] = $incident_time;

        return $this;
    }

    /**
     * Gets reported_to_law_enforcement
     *
     * @return bool|null
     */
    public function getReportedToLawEnforcement()
    {
        return $this->container['reported_to_law_enforcement'];
    }

    /**
     * Sets reported_to_law_enforcement
     *
     * @param bool|null $reported_to_law_enforcement Indicator of whether the incident was reported to law enforcement.
     *
     * @return self
     */
    public function setReportedToLawEnforcement($reported_to_law_enforcement)
    {
        if (is_null($reported_to_law_enforcement)) {
            array_push($this->openAPINullablesSetToNull, 'reported_to_law_enforcement');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('reported_to_law_enforcement', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['reported_to_law_enforcement'] = $reported_to_law_enforcement;

        return $this;
    }

    /**
     * Gets reporter_description_descriptor
     *
     * @return string|null
     */
    public function getReporterDescriptionDescriptor()
    {
        return $this->container['reporter_description_descriptor'];
    }

    /**
     * Sets reporter_description_descriptor
     *
     * @param string|null $reporter_description_descriptor Information on the type of individual who reported the discipline incident. When known and/or if useful, use a more specific option code (e.g., \"Counselor\" rather than \"Professional Staff\").
     *
     * @return self
     */
    public function setReporterDescriptionDescriptor($reporter_description_descriptor)
    {
        if (is_null($reporter_description_descriptor)) {
            array_push($this->openAPINullablesSetToNull, 'reporter_description_descriptor');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('reporter_description_descriptor', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($reporter_description_descriptor) && (mb_strlen($reporter_description_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $reporter_description_descriptor when calling EdFiDisciplineIncident., must be smaller than or equal to 306.');
        }

        $this->container['reporter_description_descriptor'] = $reporter_description_descriptor;

        return $this;
    }

    /**
     * Gets reporter_name
     *
     * @return string|null
     */
    public function getReporterName()
    {
        return $this->container['reporter_name'];
    }

    /**
     * Sets reporter_name
     *
     * @param string|null $reporter_name Identifies the reporter of the discipline incident by name.
     *
     * @return self
     */
    public function setReporterName($reporter_name)
    {
        if (is_null($reporter_name)) {
            array_push($this->openAPINullablesSetToNull, 'reporter_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('reporter_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($reporter_name) && (mb_strlen($reporter_name) > 75)) {
            throw new \InvalidArgumentException('invalid length for $reporter_name when calling EdFiDisciplineIncident., must be smaller than or equal to 75.');
        }

        $this->container['reporter_name'] = $reporter_name;

        return $this;
    }

    /**
     * Gets weapons
     *
     * @return \Resources\Model\EdFiDisciplineIncidentWeapon[]|null
     */
    public function getWeapons()
    {
        return $this->container['weapons'];
    }

    /**
     * Sets weapons
     *
     * @param \Resources\Model\EdFiDisciplineIncidentWeapon[]|null $weapons An unordered collection of disciplineIncidentWeapons. Identifies the type of weapon used during an incident. The Federal Gun-Free Schools Act requires states to report the number of students expelled for bringing firearms to school by type of firearm.
     *
     * @return self
     */
    public function setWeapons($weapons)
    {
        if (is_null($weapons)) {
            throw new \InvalidArgumentException('non-nullable weapons cannot be null');
        }
        $this->container['weapons'] = $weapons;

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


