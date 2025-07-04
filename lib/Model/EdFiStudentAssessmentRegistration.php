<?php
/**
 * EdFiStudentAssessmentRegistration
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
 * EdFiStudentAssessmentRegistration Class Doc Comment
 *
 * @category Class
 * @package  Resources
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EdFiStudentAssessmentRegistration implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'edFi_studentAssessmentRegistration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'assessment_administration_reference' => '\Resources\Model\EdFiAssessmentAdministrationReference',
        'reporting_education_organization_reference' => '\Resources\Model\EdFiEducationOrganizationReference',
        'scheduled_student_education_organization_assessment_accommodation_reference' => '\Resources\Model\EdFiStudentEducationOrganizationAssessmentAccommodationReference',
        'student_education_organization_association_reference' => '\Resources\Model\EdFiStudentEducationOrganizationAssociationReference',
        'student_school_association_reference' => '\Resources\Model\EdFiStudentSchoolAssociationReference',
        'testing_education_organization_reference' => '\Resources\Model\EdFiEducationOrganizationReference',
        'assessment_accommodations' => '\Resources\Model\EdFiStudentAssessmentRegistrationAssessmentAccommodation[]',
        'assessment_customizations' => '\Resources\Model\EdFiStudentAssessmentRegistrationAssessmentCustomization[]',
        'assessment_grade_level_descriptor' => 'string',
        'platform_type_descriptor' => 'string',
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
        'assessment_administration_reference' => null,
        'reporting_education_organization_reference' => null,
        'scheduled_student_education_organization_assessment_accommodation_reference' => null,
        'student_education_organization_association_reference' => null,
        'student_school_association_reference' => null,
        'testing_education_organization_reference' => null,
        'assessment_accommodations' => null,
        'assessment_customizations' => null,
        'assessment_grade_level_descriptor' => null,
        'platform_type_descriptor' => null,
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
        'assessment_administration_reference' => false,
        'reporting_education_organization_reference' => false,
        'scheduled_student_education_organization_assessment_accommodation_reference' => false,
        'student_education_organization_association_reference' => false,
        'student_school_association_reference' => false,
        'testing_education_organization_reference' => false,
        'assessment_accommodations' => false,
        'assessment_customizations' => false,
        'assessment_grade_level_descriptor' => true,
        'platform_type_descriptor' => true,
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
        'assessment_administration_reference' => 'assessmentAdministrationReference',
        'reporting_education_organization_reference' => 'reportingEducationOrganizationReference',
        'scheduled_student_education_organization_assessment_accommodation_reference' => 'scheduledStudentEducationOrganizationAssessmentAccommodationReference',
        'student_education_organization_association_reference' => 'studentEducationOrganizationAssociationReference',
        'student_school_association_reference' => 'studentSchoolAssociationReference',
        'testing_education_organization_reference' => 'testingEducationOrganizationReference',
        'assessment_accommodations' => 'assessmentAccommodations',
        'assessment_customizations' => 'assessmentCustomizations',
        'assessment_grade_level_descriptor' => 'assessmentGradeLevelDescriptor',
        'platform_type_descriptor' => 'platformTypeDescriptor',
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
        'assessment_administration_reference' => 'setAssessmentAdministrationReference',
        'reporting_education_organization_reference' => 'setReportingEducationOrganizationReference',
        'scheduled_student_education_organization_assessment_accommodation_reference' => 'setScheduledStudentEducationOrganizationAssessmentAccommodationReference',
        'student_education_organization_association_reference' => 'setStudentEducationOrganizationAssociationReference',
        'student_school_association_reference' => 'setStudentSchoolAssociationReference',
        'testing_education_organization_reference' => 'setTestingEducationOrganizationReference',
        'assessment_accommodations' => 'setAssessmentAccommodations',
        'assessment_customizations' => 'setAssessmentCustomizations',
        'assessment_grade_level_descriptor' => 'setAssessmentGradeLevelDescriptor',
        'platform_type_descriptor' => 'setPlatformTypeDescriptor',
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
        'assessment_administration_reference' => 'getAssessmentAdministrationReference',
        'reporting_education_organization_reference' => 'getReportingEducationOrganizationReference',
        'scheduled_student_education_organization_assessment_accommodation_reference' => 'getScheduledStudentEducationOrganizationAssessmentAccommodationReference',
        'student_education_organization_association_reference' => 'getStudentEducationOrganizationAssociationReference',
        'student_school_association_reference' => 'getStudentSchoolAssociationReference',
        'testing_education_organization_reference' => 'getTestingEducationOrganizationReference',
        'assessment_accommodations' => 'getAssessmentAccommodations',
        'assessment_customizations' => 'getAssessmentCustomizations',
        'assessment_grade_level_descriptor' => 'getAssessmentGradeLevelDescriptor',
        'platform_type_descriptor' => 'getPlatformTypeDescriptor',
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
        $this->setIfExists('assessment_administration_reference', $data ?? [], null);
        $this->setIfExists('reporting_education_organization_reference', $data ?? [], null);
        $this->setIfExists('scheduled_student_education_organization_assessment_accommodation_reference', $data ?? [], null);
        $this->setIfExists('student_education_organization_association_reference', $data ?? [], null);
        $this->setIfExists('student_school_association_reference', $data ?? [], null);
        $this->setIfExists('testing_education_organization_reference', $data ?? [], null);
        $this->setIfExists('assessment_accommodations', $data ?? [], null);
        $this->setIfExists('assessment_customizations', $data ?? [], null);
        $this->setIfExists('assessment_grade_level_descriptor', $data ?? [], null);
        $this->setIfExists('platform_type_descriptor', $data ?? [], null);
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

        if ($this->container['assessment_administration_reference'] === null) {
            $invalidProperties[] = "'assessment_administration_reference' can't be null";
        }
        if ($this->container['student_education_organization_association_reference'] === null) {
            $invalidProperties[] = "'student_education_organization_association_reference' can't be null";
        }
        if ($this->container['student_school_association_reference'] === null) {
            $invalidProperties[] = "'student_school_association_reference' can't be null";
        }
        if (!is_null($this->container['assessment_grade_level_descriptor']) && (mb_strlen($this->container['assessment_grade_level_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'assessment_grade_level_descriptor', the character length must be smaller than or equal to 306.";
        }

        if (!is_null($this->container['platform_type_descriptor']) && (mb_strlen($this->container['platform_type_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'platform_type_descriptor', the character length must be smaller than or equal to 306.";
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
     * Gets assessment_administration_reference
     *
     * @return \Resources\Model\EdFiAssessmentAdministrationReference
     */
    public function getAssessmentAdministrationReference()
    {
        return $this->container['assessment_administration_reference'];
    }

    /**
     * Sets assessment_administration_reference
     *
     * @param \Resources\Model\EdFiAssessmentAdministrationReference $assessment_administration_reference assessment_administration_reference
     *
     * @return self
     */
    public function setAssessmentAdministrationReference($assessment_administration_reference)
    {
        if (is_null($assessment_administration_reference)) {
            throw new \InvalidArgumentException('non-nullable assessment_administration_reference cannot be null');
        }
        $this->container['assessment_administration_reference'] = $assessment_administration_reference;

        return $this;
    }

    /**
     * Gets reporting_education_organization_reference
     *
     * @return \Resources\Model\EdFiEducationOrganizationReference|null
     */
    public function getReportingEducationOrganizationReference()
    {
        return $this->container['reporting_education_organization_reference'];
    }

    /**
     * Sets reporting_education_organization_reference
     *
     * @param \Resources\Model\EdFiEducationOrganizationReference|null $reporting_education_organization_reference reporting_education_organization_reference
     *
     * @return self
     */
    public function setReportingEducationOrganizationReference($reporting_education_organization_reference)
    {
        if (is_null($reporting_education_organization_reference)) {
            throw new \InvalidArgumentException('non-nullable reporting_education_organization_reference cannot be null');
        }
        $this->container['reporting_education_organization_reference'] = $reporting_education_organization_reference;

        return $this;
    }

    /**
     * Gets scheduled_student_education_organization_assessment_accommodation_reference
     *
     * @return \Resources\Model\EdFiStudentEducationOrganizationAssessmentAccommodationReference|null
     */
    public function getScheduledStudentEducationOrganizationAssessmentAccommodationReference()
    {
        return $this->container['scheduled_student_education_organization_assessment_accommodation_reference'];
    }

    /**
     * Sets scheduled_student_education_organization_assessment_accommodation_reference
     *
     * @param \Resources\Model\EdFiStudentEducationOrganizationAssessmentAccommodationReference|null $scheduled_student_education_organization_assessment_accommodation_reference scheduled_student_education_organization_assessment_accommodation_reference
     *
     * @return self
     */
    public function setScheduledStudentEducationOrganizationAssessmentAccommodationReference($scheduled_student_education_organization_assessment_accommodation_reference)
    {
        if (is_null($scheduled_student_education_organization_assessment_accommodation_reference)) {
            throw new \InvalidArgumentException('non-nullable scheduled_student_education_organization_assessment_accommodation_reference cannot be null');
        }
        $this->container['scheduled_student_education_organization_assessment_accommodation_reference'] = $scheduled_student_education_organization_assessment_accommodation_reference;

        return $this;
    }

    /**
     * Gets student_education_organization_association_reference
     *
     * @return \Resources\Model\EdFiStudentEducationOrganizationAssociationReference
     */
    public function getStudentEducationOrganizationAssociationReference()
    {
        return $this->container['student_education_organization_association_reference'];
    }

    /**
     * Sets student_education_organization_association_reference
     *
     * @param \Resources\Model\EdFiStudentEducationOrganizationAssociationReference $student_education_organization_association_reference student_education_organization_association_reference
     *
     * @return self
     */
    public function setStudentEducationOrganizationAssociationReference($student_education_organization_association_reference)
    {
        if (is_null($student_education_organization_association_reference)) {
            throw new \InvalidArgumentException('non-nullable student_education_organization_association_reference cannot be null');
        }
        $this->container['student_education_organization_association_reference'] = $student_education_organization_association_reference;

        return $this;
    }

    /**
     * Gets student_school_association_reference
     *
     * @return \Resources\Model\EdFiStudentSchoolAssociationReference
     */
    public function getStudentSchoolAssociationReference()
    {
        return $this->container['student_school_association_reference'];
    }

    /**
     * Sets student_school_association_reference
     *
     * @param \Resources\Model\EdFiStudentSchoolAssociationReference $student_school_association_reference student_school_association_reference
     *
     * @return self
     */
    public function setStudentSchoolAssociationReference($student_school_association_reference)
    {
        if (is_null($student_school_association_reference)) {
            throw new \InvalidArgumentException('non-nullable student_school_association_reference cannot be null');
        }
        $this->container['student_school_association_reference'] = $student_school_association_reference;

        return $this;
    }

    /**
     * Gets testing_education_organization_reference
     *
     * @return \Resources\Model\EdFiEducationOrganizationReference|null
     */
    public function getTestingEducationOrganizationReference()
    {
        return $this->container['testing_education_organization_reference'];
    }

    /**
     * Sets testing_education_organization_reference
     *
     * @param \Resources\Model\EdFiEducationOrganizationReference|null $testing_education_organization_reference testing_education_organization_reference
     *
     * @return self
     */
    public function setTestingEducationOrganizationReference($testing_education_organization_reference)
    {
        if (is_null($testing_education_organization_reference)) {
            throw new \InvalidArgumentException('non-nullable testing_education_organization_reference cannot be null');
        }
        $this->container['testing_education_organization_reference'] = $testing_education_organization_reference;

        return $this;
    }

    /**
     * Gets assessment_accommodations
     *
     * @return \Resources\Model\EdFiStudentAssessmentRegistrationAssessmentAccommodation[]|null
     */
    public function getAssessmentAccommodations()
    {
        return $this->container['assessment_accommodations'];
    }

    /**
     * Sets assessment_accommodations
     *
     * @param \Resources\Model\EdFiStudentAssessmentRegistrationAssessmentAccommodation[]|null $assessment_accommodations An unordered collection of studentAssessmentRegistrationAssessmentAccommodations. The special variation(s) to be used in how assessments (in general) are presented, how it is administered, or how the test taker is allowed to respond. This generally refers to changes that do not substantially alter what the examination measures. The proper use of accommodations does not substantially change academic level or performance criteria.
     *
     * @return self
     */
    public function setAssessmentAccommodations($assessment_accommodations)
    {
        if (is_null($assessment_accommodations)) {
            throw new \InvalidArgumentException('non-nullable assessment_accommodations cannot be null');
        }
        $this->container['assessment_accommodations'] = $assessment_accommodations;

        return $this;
    }

    /**
     * Gets assessment_customizations
     *
     * @return \Resources\Model\EdFiStudentAssessmentRegistrationAssessmentCustomization[]|null
     */
    public function getAssessmentCustomizations()
    {
        return $this->container['assessment_customizations'];
    }

    /**
     * Sets assessment_customizations
     *
     * @param \Resources\Model\EdFiStudentAssessmentRegistrationAssessmentCustomization[]|null $assessment_customizations An unordered collection of studentAssessmentRegistrationAssessmentCustomizations. Key/value pairs which may be used to facilitate customization of an assessment or to support vendor reporting/analysis.
     *
     * @return self
     */
    public function setAssessmentCustomizations($assessment_customizations)
    {
        if (is_null($assessment_customizations)) {
            throw new \InvalidArgumentException('non-nullable assessment_customizations cannot be null');
        }
        $this->container['assessment_customizations'] = $assessment_customizations;

        return $this;
    }

    /**
     * Gets assessment_grade_level_descriptor
     *
     * @return string|null
     */
    public function getAssessmentGradeLevelDescriptor()
    {
        return $this->container['assessment_grade_level_descriptor'];
    }

    /**
     * Sets assessment_grade_level_descriptor
     *
     * @param string|null $assessment_grade_level_descriptor The grade level or primary instructional level at which the student is to be assessed.
     *
     * @return self
     */
    public function setAssessmentGradeLevelDescriptor($assessment_grade_level_descriptor)
    {
        if (is_null($assessment_grade_level_descriptor)) {
            array_push($this->openAPINullablesSetToNull, 'assessment_grade_level_descriptor');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('assessment_grade_level_descriptor', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($assessment_grade_level_descriptor) && (mb_strlen($assessment_grade_level_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $assessment_grade_level_descriptor when calling EdFiStudentAssessmentRegistration., must be smaller than or equal to 306.');
        }

        $this->container['assessment_grade_level_descriptor'] = $assessment_grade_level_descriptor;

        return $this;
    }

    /**
     * Gets platform_type_descriptor
     *
     * @return string|null
     */
    public function getPlatformTypeDescriptor()
    {
        return $this->container['platform_type_descriptor'];
    }

    /**
     * Sets platform_type_descriptor
     *
     * @param string|null $platform_type_descriptor The environment or format in which the assessment is expected to be administered.
     *
     * @return self
     */
    public function setPlatformTypeDescriptor($platform_type_descriptor)
    {
        if (is_null($platform_type_descriptor)) {
            array_push($this->openAPINullablesSetToNull, 'platform_type_descriptor');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('platform_type_descriptor', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($platform_type_descriptor) && (mb_strlen($platform_type_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $platform_type_descriptor when calling EdFiStudentAssessmentRegistration., must be smaller than or equal to 306.');
        }

        $this->container['platform_type_descriptor'] = $platform_type_descriptor;

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


