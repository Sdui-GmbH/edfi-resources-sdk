<?php
/**
 * EdFiStudentNeglectedOrDelinquentProgramAssociation
 *
 * PHP version 7.4
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
 * Generator version: 7.9.0
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
 * EdFiStudentNeglectedOrDelinquentProgramAssociation Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EdFiStudentNeglectedOrDelinquentProgramAssociation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'edFi_studentNeglectedOrDelinquentProgramAssociation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'begin_date' => '\DateTime',
        'education_organization_reference' => '\OpenAPI\Client\Model\EdFiEducationOrganizationReference',
        'program_reference' => '\OpenAPI\Client\Model\EdFiProgramReference',
        'student_reference' => '\OpenAPI\Client\Model\EdFiStudentReference',
        'ela_progress_level_descriptor' => 'string',
        'end_date' => '\DateTime',
        'mathematics_progress_level_descriptor' => 'string',
        'neglected_or_delinquent_program_descriptor' => 'string',
        'neglected_or_delinquent_program_services' => '\OpenAPI\Client\Model\EdFiStudentNeglectedOrDelinquentProgramAssociationNeglectedOrDelinquentProgramService[]',
        'program_participation_statuses' => '\OpenAPI\Client\Model\EdFiGeneralStudentProgramAssociationProgramParticipationStatus[]',
        'reason_exited_descriptor' => 'string',
        'served_outside_of_regular_session' => 'bool',
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
        'education_organization_reference' => null,
        'program_reference' => null,
        'student_reference' => null,
        'ela_progress_level_descriptor' => null,
        'end_date' => 'date',
        'mathematics_progress_level_descriptor' => null,
        'neglected_or_delinquent_program_descriptor' => null,
        'neglected_or_delinquent_program_services' => null,
        'program_participation_statuses' => null,
        'reason_exited_descriptor' => null,
        'served_outside_of_regular_session' => null,
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
        'education_organization_reference' => false,
        'program_reference' => false,
        'student_reference' => false,
        'ela_progress_level_descriptor' => true,
        'end_date' => true,
        'mathematics_progress_level_descriptor' => true,
        'neglected_or_delinquent_program_descriptor' => true,
        'neglected_or_delinquent_program_services' => false,
        'program_participation_statuses' => false,
        'reason_exited_descriptor' => true,
        'served_outside_of_regular_session' => true,
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
        'education_organization_reference' => 'educationOrganizationReference',
        'program_reference' => 'programReference',
        'student_reference' => 'studentReference',
        'ela_progress_level_descriptor' => 'elaProgressLevelDescriptor',
        'end_date' => 'endDate',
        'mathematics_progress_level_descriptor' => 'mathematicsProgressLevelDescriptor',
        'neglected_or_delinquent_program_descriptor' => 'neglectedOrDelinquentProgramDescriptor',
        'neglected_or_delinquent_program_services' => 'neglectedOrDelinquentProgramServices',
        'program_participation_statuses' => 'programParticipationStatuses',
        'reason_exited_descriptor' => 'reasonExitedDescriptor',
        'served_outside_of_regular_session' => 'servedOutsideOfRegularSession',
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
        'education_organization_reference' => 'setEducationOrganizationReference',
        'program_reference' => 'setProgramReference',
        'student_reference' => 'setStudentReference',
        'ela_progress_level_descriptor' => 'setElaProgressLevelDescriptor',
        'end_date' => 'setEndDate',
        'mathematics_progress_level_descriptor' => 'setMathematicsProgressLevelDescriptor',
        'neglected_or_delinquent_program_descriptor' => 'setNeglectedOrDelinquentProgramDescriptor',
        'neglected_or_delinquent_program_services' => 'setNeglectedOrDelinquentProgramServices',
        'program_participation_statuses' => 'setProgramParticipationStatuses',
        'reason_exited_descriptor' => 'setReasonExitedDescriptor',
        'served_outside_of_regular_session' => 'setServedOutsideOfRegularSession',
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
        'education_organization_reference' => 'getEducationOrganizationReference',
        'program_reference' => 'getProgramReference',
        'student_reference' => 'getStudentReference',
        'ela_progress_level_descriptor' => 'getElaProgressLevelDescriptor',
        'end_date' => 'getEndDate',
        'mathematics_progress_level_descriptor' => 'getMathematicsProgressLevelDescriptor',
        'neglected_or_delinquent_program_descriptor' => 'getNeglectedOrDelinquentProgramDescriptor',
        'neglected_or_delinquent_program_services' => 'getNeglectedOrDelinquentProgramServices',
        'program_participation_statuses' => 'getProgramParticipationStatuses',
        'reason_exited_descriptor' => 'getReasonExitedDescriptor',
        'served_outside_of_regular_session' => 'getServedOutsideOfRegularSession',
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
        $this->setIfExists('education_organization_reference', $data ?? [], null);
        $this->setIfExists('program_reference', $data ?? [], null);
        $this->setIfExists('student_reference', $data ?? [], null);
        $this->setIfExists('ela_progress_level_descriptor', $data ?? [], null);
        $this->setIfExists('end_date', $data ?? [], null);
        $this->setIfExists('mathematics_progress_level_descriptor', $data ?? [], null);
        $this->setIfExists('neglected_or_delinquent_program_descriptor', $data ?? [], null);
        $this->setIfExists('neglected_or_delinquent_program_services', $data ?? [], null);
        $this->setIfExists('program_participation_statuses', $data ?? [], null);
        $this->setIfExists('reason_exited_descriptor', $data ?? [], null);
        $this->setIfExists('served_outside_of_regular_session', $data ?? [], null);
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
        if ($this->container['education_organization_reference'] === null) {
            $invalidProperties[] = "'education_organization_reference' can't be null";
        }
        if ($this->container['program_reference'] === null) {
            $invalidProperties[] = "'program_reference' can't be null";
        }
        if ($this->container['student_reference'] === null) {
            $invalidProperties[] = "'student_reference' can't be null";
        }
        if (!is_null($this->container['ela_progress_level_descriptor']) && (mb_strlen($this->container['ela_progress_level_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'ela_progress_level_descriptor', the character length must be smaller than or equal to 306.";
        }

        if (!is_null($this->container['mathematics_progress_level_descriptor']) && (mb_strlen($this->container['mathematics_progress_level_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'mathematics_progress_level_descriptor', the character length must be smaller than or equal to 306.";
        }

        if (!is_null($this->container['neglected_or_delinquent_program_descriptor']) && (mb_strlen($this->container['neglected_or_delinquent_program_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'neglected_or_delinquent_program_descriptor', the character length must be smaller than or equal to 306.";
        }

        if (!is_null($this->container['reason_exited_descriptor']) && (mb_strlen($this->container['reason_exited_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'reason_exited_descriptor', the character length must be smaller than or equal to 306.";
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
     * @param \DateTime $begin_date The earliest date the student is involved with the program. Typically, this is the date the student becomes eligible for the program.
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
        if (is_null($education_organization_reference)) {
            throw new \InvalidArgumentException('non-nullable education_organization_reference cannot be null');
        }
        $this->container['education_organization_reference'] = $education_organization_reference;

        return $this;
    }

    /**
     * Gets program_reference
     *
     * @return \OpenAPI\Client\Model\EdFiProgramReference
     */
    public function getProgramReference()
    {
        return $this->container['program_reference'];
    }

    /**
     * Sets program_reference
     *
     * @param \OpenAPI\Client\Model\EdFiProgramReference $program_reference program_reference
     *
     * @return self
     */
    public function setProgramReference($program_reference)
    {
        if (is_null($program_reference)) {
            throw new \InvalidArgumentException('non-nullable program_reference cannot be null');
        }
        $this->container['program_reference'] = $program_reference;

        return $this;
    }

    /**
     * Gets student_reference
     *
     * @return \OpenAPI\Client\Model\EdFiStudentReference
     */
    public function getStudentReference()
    {
        return $this->container['student_reference'];
    }

    /**
     * Sets student_reference
     *
     * @param \OpenAPI\Client\Model\EdFiStudentReference $student_reference student_reference
     *
     * @return self
     */
    public function setStudentReference($student_reference)
    {
        if (is_null($student_reference)) {
            throw new \InvalidArgumentException('non-nullable student_reference cannot be null');
        }
        $this->container['student_reference'] = $student_reference;

        return $this;
    }

    /**
     * Gets ela_progress_level_descriptor
     *
     * @return string|null
     */
    public function getElaProgressLevelDescriptor()
    {
        return $this->container['ela_progress_level_descriptor'];
    }

    /**
     * Sets ela_progress_level_descriptor
     *
     * @param string|null $ela_progress_level_descriptor The progress measured from pre- to post- test for ELA.
     *
     * @return self
     */
    public function setElaProgressLevelDescriptor($ela_progress_level_descriptor)
    {
        if (is_null($ela_progress_level_descriptor)) {
            array_push($this->openAPINullablesSetToNull, 'ela_progress_level_descriptor');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ela_progress_level_descriptor', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($ela_progress_level_descriptor) && (mb_strlen($ela_progress_level_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $ela_progress_level_descriptor when calling EdFiStudentNeglectedOrDelinquentProgramAssociation., must be smaller than or equal to 306.');
        }

        $this->container['ela_progress_level_descriptor'] = $ela_progress_level_descriptor;

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
     * @param \DateTime|null $end_date The month, day, and year on which the student exited the program or stopped receiving services.
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
     * Gets mathematics_progress_level_descriptor
     *
     * @return string|null
     */
    public function getMathematicsProgressLevelDescriptor()
    {
        return $this->container['mathematics_progress_level_descriptor'];
    }

    /**
     * Sets mathematics_progress_level_descriptor
     *
     * @param string|null $mathematics_progress_level_descriptor The progress measured from pre- to post-test for Mathematics.
     *
     * @return self
     */
    public function setMathematicsProgressLevelDescriptor($mathematics_progress_level_descriptor)
    {
        if (is_null($mathematics_progress_level_descriptor)) {
            array_push($this->openAPINullablesSetToNull, 'mathematics_progress_level_descriptor');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('mathematics_progress_level_descriptor', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($mathematics_progress_level_descriptor) && (mb_strlen($mathematics_progress_level_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $mathematics_progress_level_descriptor when calling EdFiStudentNeglectedOrDelinquentProgramAssociation., must be smaller than or equal to 306.');
        }

        $this->container['mathematics_progress_level_descriptor'] = $mathematics_progress_level_descriptor;

        return $this;
    }

    /**
     * Gets neglected_or_delinquent_program_descriptor
     *
     * @return string|null
     */
    public function getNeglectedOrDelinquentProgramDescriptor()
    {
        return $this->container['neglected_or_delinquent_program_descriptor'];
    }

    /**
     * Sets neglected_or_delinquent_program_descriptor
     *
     * @param string|null $neglected_or_delinquent_program_descriptor The type of program under ESEA Title I, Part D, Subpart 1 (state programs) or Subpart 2 (LEA).
     *
     * @return self
     */
    public function setNeglectedOrDelinquentProgramDescriptor($neglected_or_delinquent_program_descriptor)
    {
        if (is_null($neglected_or_delinquent_program_descriptor)) {
            array_push($this->openAPINullablesSetToNull, 'neglected_or_delinquent_program_descriptor');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('neglected_or_delinquent_program_descriptor', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($neglected_or_delinquent_program_descriptor) && (mb_strlen($neglected_or_delinquent_program_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $neglected_or_delinquent_program_descriptor when calling EdFiStudentNeglectedOrDelinquentProgramAssociation., must be smaller than or equal to 306.');
        }

        $this->container['neglected_or_delinquent_program_descriptor'] = $neglected_or_delinquent_program_descriptor;

        return $this;
    }

    /**
     * Gets neglected_or_delinquent_program_services
     *
     * @return \OpenAPI\Client\Model\EdFiStudentNeglectedOrDelinquentProgramAssociationNeglectedOrDelinquentProgramService[]|null
     */
    public function getNeglectedOrDelinquentProgramServices()
    {
        return $this->container['neglected_or_delinquent_program_services'];
    }

    /**
     * Sets neglected_or_delinquent_program_services
     *
     * @param \OpenAPI\Client\Model\EdFiStudentNeglectedOrDelinquentProgramAssociationNeglectedOrDelinquentProgramService[]|null $neglected_or_delinquent_program_services An unordered collection of studentNeglectedOrDelinquentProgramAssociationNeglectedOrDelinquentProgramServices. Indicates the service(s) being provided to the student by the neglected or delinquent program.
     *
     * @return self
     */
    public function setNeglectedOrDelinquentProgramServices($neglected_or_delinquent_program_services)
    {
        if (is_null($neglected_or_delinquent_program_services)) {
            throw new \InvalidArgumentException('non-nullable neglected_or_delinquent_program_services cannot be null');
        }
        $this->container['neglected_or_delinquent_program_services'] = $neglected_or_delinquent_program_services;

        return $this;
    }

    /**
     * Gets program_participation_statuses
     *
     * @return \OpenAPI\Client\Model\EdFiGeneralStudentProgramAssociationProgramParticipationStatus[]|null
     */
    public function getProgramParticipationStatuses()
    {
        return $this->container['program_participation_statuses'];
    }

    /**
     * Sets program_participation_statuses
     *
     * @param \OpenAPI\Client\Model\EdFiGeneralStudentProgramAssociationProgramParticipationStatus[]|null $program_participation_statuses An unordered collection of generalStudentProgramAssociationProgramParticipationStatuses. The status of the student's program participation.
     *
     * @return self
     */
    public function setProgramParticipationStatuses($program_participation_statuses)
    {
        if (is_null($program_participation_statuses)) {
            throw new \InvalidArgumentException('non-nullable program_participation_statuses cannot be null');
        }
        $this->container['program_participation_statuses'] = $program_participation_statuses;

        return $this;
    }

    /**
     * Gets reason_exited_descriptor
     *
     * @return string|null
     */
    public function getReasonExitedDescriptor()
    {
        return $this->container['reason_exited_descriptor'];
    }

    /**
     * Sets reason_exited_descriptor
     *
     * @param string|null $reason_exited_descriptor The reason the student left the program within a school or district.
     *
     * @return self
     */
    public function setReasonExitedDescriptor($reason_exited_descriptor)
    {
        if (is_null($reason_exited_descriptor)) {
            array_push($this->openAPINullablesSetToNull, 'reason_exited_descriptor');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('reason_exited_descriptor', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($reason_exited_descriptor) && (mb_strlen($reason_exited_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $reason_exited_descriptor when calling EdFiStudentNeglectedOrDelinquentProgramAssociation., must be smaller than or equal to 306.');
        }

        $this->container['reason_exited_descriptor'] = $reason_exited_descriptor;

        return $this;
    }

    /**
     * Gets served_outside_of_regular_session
     *
     * @return bool|null
     */
    public function getServedOutsideOfRegularSession()
    {
        return $this->container['served_outside_of_regular_session'];
    }

    /**
     * Sets served_outside_of_regular_session
     *
     * @param bool|null $served_outside_of_regular_session Indicates whether the student received services during the summer session or between sessions.
     *
     * @return self
     */
    public function setServedOutsideOfRegularSession($served_outside_of_regular_session)
    {
        if (is_null($served_outside_of_regular_session)) {
            array_push($this->openAPINullablesSetToNull, 'served_outside_of_regular_session');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('served_outside_of_regular_session', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['served_outside_of_regular_session'] = $served_outside_of_regular_session;

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

