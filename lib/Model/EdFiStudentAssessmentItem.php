<?php
/**
 * EdFiStudentAssessmentItem
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
 * EdFiStudentAssessmentItem Class Doc Comment
 *
 * @category Class
 * @package  Resources
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EdFiStudentAssessmentItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'edFi_studentAssessmentItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'assessment_item_result_descriptor' => 'string',
        'response_indicator_descriptor' => 'string',
        'assessment_response' => 'string',
        'descriptive_feedback' => 'string',
        'item_number' => 'int',
        'raw_score_result' => 'float',
        'time_assessed' => 'string',
        'assessment_item_reference' => '\Resources\Model\EdFiAssessmentItemReference'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'assessment_item_result_descriptor' => null,
        'response_indicator_descriptor' => null,
        'assessment_response' => null,
        'descriptive_feedback' => null,
        'item_number' => 'int32',
        'raw_score_result' => 'double',
        'time_assessed' => null,
        'assessment_item_reference' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'assessment_item_result_descriptor' => false,
        'response_indicator_descriptor' => true,
        'assessment_response' => true,
        'descriptive_feedback' => true,
        'item_number' => true,
        'raw_score_result' => true,
        'time_assessed' => true,
        'assessment_item_reference' => false
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
        'assessment_item_result_descriptor' => 'assessmentItemResultDescriptor',
        'response_indicator_descriptor' => 'responseIndicatorDescriptor',
        'assessment_response' => 'assessmentResponse',
        'descriptive_feedback' => 'descriptiveFeedback',
        'item_number' => 'itemNumber',
        'raw_score_result' => 'rawScoreResult',
        'time_assessed' => 'timeAssessed',
        'assessment_item_reference' => 'assessmentItemReference'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'assessment_item_result_descriptor' => 'setAssessmentItemResultDescriptor',
        'response_indicator_descriptor' => 'setResponseIndicatorDescriptor',
        'assessment_response' => 'setAssessmentResponse',
        'descriptive_feedback' => 'setDescriptiveFeedback',
        'item_number' => 'setItemNumber',
        'raw_score_result' => 'setRawScoreResult',
        'time_assessed' => 'setTimeAssessed',
        'assessment_item_reference' => 'setAssessmentItemReference'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'assessment_item_result_descriptor' => 'getAssessmentItemResultDescriptor',
        'response_indicator_descriptor' => 'getResponseIndicatorDescriptor',
        'assessment_response' => 'getAssessmentResponse',
        'descriptive_feedback' => 'getDescriptiveFeedback',
        'item_number' => 'getItemNumber',
        'raw_score_result' => 'getRawScoreResult',
        'time_assessed' => 'getTimeAssessed',
        'assessment_item_reference' => 'getAssessmentItemReference'
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
        $this->setIfExists('assessment_item_result_descriptor', $data ?? [], null);
        $this->setIfExists('response_indicator_descriptor', $data ?? [], null);
        $this->setIfExists('assessment_response', $data ?? [], null);
        $this->setIfExists('descriptive_feedback', $data ?? [], null);
        $this->setIfExists('item_number', $data ?? [], null);
        $this->setIfExists('raw_score_result', $data ?? [], null);
        $this->setIfExists('time_assessed', $data ?? [], null);
        $this->setIfExists('assessment_item_reference', $data ?? [], null);
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

        if ($this->container['assessment_item_result_descriptor'] === null) {
            $invalidProperties[] = "'assessment_item_result_descriptor' can't be null";
        }
        if ((mb_strlen($this->container['assessment_item_result_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'assessment_item_result_descriptor', the character length must be smaller than or equal to 306.";
        }

        if (!is_null($this->container['response_indicator_descriptor']) && (mb_strlen($this->container['response_indicator_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'response_indicator_descriptor', the character length must be smaller than or equal to 306.";
        }

        if (!is_null($this->container['assessment_response']) && (mb_strlen($this->container['assessment_response']) > 255)) {
            $invalidProperties[] = "invalid value for 'assessment_response', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['assessment_response']) && (mb_strlen($this->container['assessment_response']) < 1)) {
            $invalidProperties[] = "invalid value for 'assessment_response', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['descriptive_feedback']) && (mb_strlen($this->container['descriptive_feedback']) > 1024)) {
            $invalidProperties[] = "invalid value for 'descriptive_feedback', the character length must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['descriptive_feedback']) && (mb_strlen($this->container['descriptive_feedback']) < 1)) {
            $invalidProperties[] = "invalid value for 'descriptive_feedback', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['time_assessed']) && (mb_strlen($this->container['time_assessed']) > 30)) {
            $invalidProperties[] = "invalid value for 'time_assessed', the character length must be smaller than or equal to 30.";
        }

        if ($this->container['assessment_item_reference'] === null) {
            $invalidProperties[] = "'assessment_item_reference' can't be null";
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
     * Gets assessment_item_result_descriptor
     *
     * @return string
     */
    public function getAssessmentItemResultDescriptor()
    {
        return $this->container['assessment_item_result_descriptor'];
    }

    /**
     * Sets assessment_item_result_descriptor
     *
     * @param string $assessment_item_result_descriptor The analyzed result of a student's response to an assessment item.
     *
     * @return self
     */
    public function setAssessmentItemResultDescriptor($assessment_item_result_descriptor)
    {
        if (is_null($assessment_item_result_descriptor)) {
            throw new \InvalidArgumentException('non-nullable assessment_item_result_descriptor cannot be null');
        }
        if ((mb_strlen($assessment_item_result_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $assessment_item_result_descriptor when calling EdFiStudentAssessmentItem., must be smaller than or equal to 306.');
        }

        $this->container['assessment_item_result_descriptor'] = $assessment_item_result_descriptor;

        return $this;
    }

    /**
     * Gets response_indicator_descriptor
     *
     * @return string|null
     */
    public function getResponseIndicatorDescriptor()
    {
        return $this->container['response_indicator_descriptor'];
    }

    /**
     * Sets response_indicator_descriptor
     *
     * @param string|null $response_indicator_descriptor Indicator of the response.
     *
     * @return self
     */
    public function setResponseIndicatorDescriptor($response_indicator_descriptor)
    {
        if (is_null($response_indicator_descriptor)) {
            array_push($this->openAPINullablesSetToNull, 'response_indicator_descriptor');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('response_indicator_descriptor', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($response_indicator_descriptor) && (mb_strlen($response_indicator_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $response_indicator_descriptor when calling EdFiStudentAssessmentItem., must be smaller than or equal to 306.');
        }

        $this->container['response_indicator_descriptor'] = $response_indicator_descriptor;

        return $this;
    }

    /**
     * Gets assessment_response
     *
     * @return string|null
     */
    public function getAssessmentResponse()
    {
        return $this->container['assessment_response'];
    }

    /**
     * Sets assessment_response
     *
     * @param string|null $assessment_response A student's response to a stimulus on a test.
     *
     * @return self
     */
    public function setAssessmentResponse($assessment_response)
    {
        if (is_null($assessment_response)) {
            array_push($this->openAPINullablesSetToNull, 'assessment_response');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('assessment_response', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($assessment_response) && (mb_strlen($assessment_response) > 255)) {
            throw new \InvalidArgumentException('invalid length for $assessment_response when calling EdFiStudentAssessmentItem., must be smaller than or equal to 255.');
        }
        if (!is_null($assessment_response) && (mb_strlen($assessment_response) < 1)) {
            throw new \InvalidArgumentException('invalid length for $assessment_response when calling EdFiStudentAssessmentItem., must be bigger than or equal to 1.');
        }

        $this->container['assessment_response'] = $assessment_response;

        return $this;
    }

    /**
     * Gets descriptive_feedback
     *
     * @return string|null
     */
    public function getDescriptiveFeedback()
    {
        return $this->container['descriptive_feedback'];
    }

    /**
     * Sets descriptive_feedback
     *
     * @param string|null $descriptive_feedback The formative descriptive feedback that was given to a student in response to the results from a scored/evaluated assessment item.
     *
     * @return self
     */
    public function setDescriptiveFeedback($descriptive_feedback)
    {
        if (is_null($descriptive_feedback)) {
            array_push($this->openAPINullablesSetToNull, 'descriptive_feedback');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('descriptive_feedback', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($descriptive_feedback) && (mb_strlen($descriptive_feedback) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $descriptive_feedback when calling EdFiStudentAssessmentItem., must be smaller than or equal to 1024.');
        }
        if (!is_null($descriptive_feedback) && (mb_strlen($descriptive_feedback) < 1)) {
            throw new \InvalidArgumentException('invalid length for $descriptive_feedback when calling EdFiStudentAssessmentItem., must be bigger than or equal to 1.');
        }

        $this->container['descriptive_feedback'] = $descriptive_feedback;

        return $this;
    }

    /**
     * Gets item_number
     *
     * @return int|null
     */
    public function getItemNumber()
    {
        return $this->container['item_number'];
    }

    /**
     * Sets item_number
     *
     * @param int|null $item_number The test question number for this student's test item.
     *
     * @return self
     */
    public function setItemNumber($item_number)
    {
        if (is_null($item_number)) {
            array_push($this->openAPINullablesSetToNull, 'item_number');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('item_number', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['item_number'] = $item_number;

        return $this;
    }

    /**
     * Gets raw_score_result
     *
     * @return float|null
     */
    public function getRawScoreResult()
    {
        return $this->container['raw_score_result'];
    }

    /**
     * Sets raw_score_result
     *
     * @param float|null $raw_score_result A meaningful raw score of the performance of a student on an assessment item.
     *
     * @return self
     */
    public function setRawScoreResult($raw_score_result)
    {
        if (is_null($raw_score_result)) {
            array_push($this->openAPINullablesSetToNull, 'raw_score_result');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('raw_score_result', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['raw_score_result'] = $raw_score_result;

        return $this;
    }

    /**
     * Gets time_assessed
     *
     * @return string|null
     */
    public function getTimeAssessed()
    {
        return $this->container['time_assessed'];
    }

    /**
     * Sets time_assessed
     *
     * @param string|null $time_assessed The overall time a student actually spent during the assessment item.
     *
     * @return self
     */
    public function setTimeAssessed($time_assessed)
    {
        if (is_null($time_assessed)) {
            array_push($this->openAPINullablesSetToNull, 'time_assessed');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('time_assessed', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($time_assessed) && (mb_strlen($time_assessed) > 30)) {
            throw new \InvalidArgumentException('invalid length for $time_assessed when calling EdFiStudentAssessmentItem., must be smaller than or equal to 30.');
        }

        $this->container['time_assessed'] = $time_assessed;

        return $this;
    }

    /**
     * Gets assessment_item_reference
     *
     * @return \Resources\Model\EdFiAssessmentItemReference
     */
    public function getAssessmentItemReference()
    {
        return $this->container['assessment_item_reference'];
    }

    /**
     * Sets assessment_item_reference
     *
     * @param \Resources\Model\EdFiAssessmentItemReference $assessment_item_reference assessment_item_reference
     *
     * @return self
     */
    public function setAssessmentItemReference($assessment_item_reference)
    {
        if (is_null($assessment_item_reference)) {
            throw new \InvalidArgumentException('non-nullable assessment_item_reference cannot be null');
        }
        $this->container['assessment_item_reference'] = $assessment_item_reference;

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

