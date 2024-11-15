<?php
/**
 * TpdmEvaluationElementRating
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
 * TpdmEvaluationElementRating Class Doc Comment
 *
 * @category Class
 * @package  Resources
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TpdmEvaluationElementRating implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'tpdm_evaluationElementRating';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'evaluation_element_reference' => '\Resources\Model\TpdmEvaluationElementReference',
        'evaluation_objective_rating_reference' => '\Resources\Model\TpdmEvaluationObjectiveRatingReference',
        'area_of_refinement' => 'string',
        'area_of_reinforcement' => 'string',
        'comments' => 'string',
        'evaluation_element_rating_level_descriptor' => 'string',
        'feedback' => 'string',
        'results' => '\Resources\Model\TpdmEvaluationElementRatingResult[]',
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
        'evaluation_element_reference' => null,
        'evaluation_objective_rating_reference' => null,
        'area_of_refinement' => null,
        'area_of_reinforcement' => null,
        'comments' => null,
        'evaluation_element_rating_level_descriptor' => null,
        'feedback' => null,
        'results' => null,
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
        'evaluation_element_reference' => false,
        'evaluation_objective_rating_reference' => false,
        'area_of_refinement' => true,
        'area_of_reinforcement' => true,
        'comments' => true,
        'evaluation_element_rating_level_descriptor' => true,
        'feedback' => true,
        'results' => false,
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
        'evaluation_element_reference' => 'evaluationElementReference',
        'evaluation_objective_rating_reference' => 'evaluationObjectiveRatingReference',
        'area_of_refinement' => 'areaOfRefinement',
        'area_of_reinforcement' => 'areaOfReinforcement',
        'comments' => 'comments',
        'evaluation_element_rating_level_descriptor' => 'evaluationElementRatingLevelDescriptor',
        'feedback' => 'feedback',
        'results' => 'results',
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
        'evaluation_element_reference' => 'setEvaluationElementReference',
        'evaluation_objective_rating_reference' => 'setEvaluationObjectiveRatingReference',
        'area_of_refinement' => 'setAreaOfRefinement',
        'area_of_reinforcement' => 'setAreaOfReinforcement',
        'comments' => 'setComments',
        'evaluation_element_rating_level_descriptor' => 'setEvaluationElementRatingLevelDescriptor',
        'feedback' => 'setFeedback',
        'results' => 'setResults',
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
        'evaluation_element_reference' => 'getEvaluationElementReference',
        'evaluation_objective_rating_reference' => 'getEvaluationObjectiveRatingReference',
        'area_of_refinement' => 'getAreaOfRefinement',
        'area_of_reinforcement' => 'getAreaOfReinforcement',
        'comments' => 'getComments',
        'evaluation_element_rating_level_descriptor' => 'getEvaluationElementRatingLevelDescriptor',
        'feedback' => 'getFeedback',
        'results' => 'getResults',
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
        $this->setIfExists('evaluation_element_reference', $data ?? [], null);
        $this->setIfExists('evaluation_objective_rating_reference', $data ?? [], null);
        $this->setIfExists('area_of_refinement', $data ?? [], null);
        $this->setIfExists('area_of_reinforcement', $data ?? [], null);
        $this->setIfExists('comments', $data ?? [], null);
        $this->setIfExists('evaluation_element_rating_level_descriptor', $data ?? [], null);
        $this->setIfExists('feedback', $data ?? [], null);
        $this->setIfExists('results', $data ?? [], null);
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

        if ($this->container['evaluation_element_reference'] === null) {
            $invalidProperties[] = "'evaluation_element_reference' can't be null";
        }
        if ($this->container['evaluation_objective_rating_reference'] === null) {
            $invalidProperties[] = "'evaluation_objective_rating_reference' can't be null";
        }
        if (!is_null($this->container['area_of_refinement']) && (mb_strlen($this->container['area_of_refinement']) > 1024)) {
            $invalidProperties[] = "invalid value for 'area_of_refinement', the character length must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['area_of_refinement']) && (mb_strlen($this->container['area_of_refinement']) < 1)) {
            $invalidProperties[] = "invalid value for 'area_of_refinement', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['area_of_reinforcement']) && (mb_strlen($this->container['area_of_reinforcement']) > 1024)) {
            $invalidProperties[] = "invalid value for 'area_of_reinforcement', the character length must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['area_of_reinforcement']) && (mb_strlen($this->container['area_of_reinforcement']) < 1)) {
            $invalidProperties[] = "invalid value for 'area_of_reinforcement', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['comments']) && (mb_strlen($this->container['comments']) > 1024)) {
            $invalidProperties[] = "invalid value for 'comments', the character length must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['comments']) && (mb_strlen($this->container['comments']) < 1)) {
            $invalidProperties[] = "invalid value for 'comments', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['evaluation_element_rating_level_descriptor']) && (mb_strlen($this->container['evaluation_element_rating_level_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'evaluation_element_rating_level_descriptor', the character length must be smaller than or equal to 306.";
        }

        if (!is_null($this->container['feedback']) && (mb_strlen($this->container['feedback']) > 2048)) {
            $invalidProperties[] = "invalid value for 'feedback', the character length must be smaller than or equal to 2048.";
        }

        if (!is_null($this->container['feedback']) && (mb_strlen($this->container['feedback']) < 1)) {
            $invalidProperties[] = "invalid value for 'feedback', the character length must be bigger than or equal to 1.";
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
     * Gets evaluation_element_reference
     *
     * @return \Resources\Model\TpdmEvaluationElementReference
     */
    public function getEvaluationElementReference()
    {
        return $this->container['evaluation_element_reference'];
    }

    /**
     * Sets evaluation_element_reference
     *
     * @param \Resources\Model\TpdmEvaluationElementReference $evaluation_element_reference evaluation_element_reference
     *
     * @return self
     */
    public function setEvaluationElementReference($evaluation_element_reference)
    {
        if (is_null($evaluation_element_reference)) {
            throw new \InvalidArgumentException('non-nullable evaluation_element_reference cannot be null');
        }
        $this->container['evaluation_element_reference'] = $evaluation_element_reference;

        return $this;
    }

    /**
     * Gets evaluation_objective_rating_reference
     *
     * @return \Resources\Model\TpdmEvaluationObjectiveRatingReference
     */
    public function getEvaluationObjectiveRatingReference()
    {
        return $this->container['evaluation_objective_rating_reference'];
    }

    /**
     * Sets evaluation_objective_rating_reference
     *
     * @param \Resources\Model\TpdmEvaluationObjectiveRatingReference $evaluation_objective_rating_reference evaluation_objective_rating_reference
     *
     * @return self
     */
    public function setEvaluationObjectiveRatingReference($evaluation_objective_rating_reference)
    {
        if (is_null($evaluation_objective_rating_reference)) {
            throw new \InvalidArgumentException('non-nullable evaluation_objective_rating_reference cannot be null');
        }
        $this->container['evaluation_objective_rating_reference'] = $evaluation_objective_rating_reference;

        return $this;
    }

    /**
     * Gets area_of_refinement
     *
     * @return string|null
     */
    public function getAreaOfRefinement()
    {
        return $this->container['area_of_refinement'];
    }

    /**
     * Sets area_of_refinement
     *
     * @param string|null $area_of_refinement Area identified for person to refine or improve as part of the evaluation.
     *
     * @return self
     */
    public function setAreaOfRefinement($area_of_refinement)
    {
        if (is_null($area_of_refinement)) {
            array_push($this->openAPINullablesSetToNull, 'area_of_refinement');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('area_of_refinement', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($area_of_refinement) && (mb_strlen($area_of_refinement) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $area_of_refinement when calling TpdmEvaluationElementRating., must be smaller than or equal to 1024.');
        }
        if (!is_null($area_of_refinement) && (mb_strlen($area_of_refinement) < 1)) {
            throw new \InvalidArgumentException('invalid length for $area_of_refinement when calling TpdmEvaluationElementRating., must be bigger than or equal to 1.');
        }

        $this->container['area_of_refinement'] = $area_of_refinement;

        return $this;
    }

    /**
     * Gets area_of_reinforcement
     *
     * @return string|null
     */
    public function getAreaOfReinforcement()
    {
        return $this->container['area_of_reinforcement'];
    }

    /**
     * Sets area_of_reinforcement
     *
     * @param string|null $area_of_reinforcement Area identified for reinforcement or positive feedback as part of the evaluation.
     *
     * @return self
     */
    public function setAreaOfReinforcement($area_of_reinforcement)
    {
        if (is_null($area_of_reinforcement)) {
            array_push($this->openAPINullablesSetToNull, 'area_of_reinforcement');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('area_of_reinforcement', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($area_of_reinforcement) && (mb_strlen($area_of_reinforcement) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $area_of_reinforcement when calling TpdmEvaluationElementRating., must be smaller than or equal to 1024.');
        }
        if (!is_null($area_of_reinforcement) && (mb_strlen($area_of_reinforcement) < 1)) {
            throw new \InvalidArgumentException('invalid length for $area_of_reinforcement when calling TpdmEvaluationElementRating., must be bigger than or equal to 1.');
        }

        $this->container['area_of_reinforcement'] = $area_of_reinforcement;

        return $this;
    }

    /**
     * Gets comments
     *
     * @return string|null
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     *
     * @param string|null $comments Any comments about the performance evaluation to be captured.
     *
     * @return self
     */
    public function setComments($comments)
    {
        if (is_null($comments)) {
            array_push($this->openAPINullablesSetToNull, 'comments');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('comments', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($comments) && (mb_strlen($comments) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $comments when calling TpdmEvaluationElementRating., must be smaller than or equal to 1024.');
        }
        if (!is_null($comments) && (mb_strlen($comments) < 1)) {
            throw new \InvalidArgumentException('invalid length for $comments when calling TpdmEvaluationElementRating., must be bigger than or equal to 1.');
        }

        $this->container['comments'] = $comments;

        return $this;
    }

    /**
     * Gets evaluation_element_rating_level_descriptor
     *
     * @return string|null
     */
    public function getEvaluationElementRatingLevelDescriptor()
    {
        return $this->container['evaluation_element_rating_level_descriptor'];
    }

    /**
     * Sets evaluation_element_rating_level_descriptor
     *
     * @param string|null $evaluation_element_rating_level_descriptor The rating level achieved based upon the rating or score.
     *
     * @return self
     */
    public function setEvaluationElementRatingLevelDescriptor($evaluation_element_rating_level_descriptor)
    {
        if (is_null($evaluation_element_rating_level_descriptor)) {
            array_push($this->openAPINullablesSetToNull, 'evaluation_element_rating_level_descriptor');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('evaluation_element_rating_level_descriptor', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($evaluation_element_rating_level_descriptor) && (mb_strlen($evaluation_element_rating_level_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $evaluation_element_rating_level_descriptor when calling TpdmEvaluationElementRating., must be smaller than or equal to 306.');
        }

        $this->container['evaluation_element_rating_level_descriptor'] = $evaluation_element_rating_level_descriptor;

        return $this;
    }

    /**
     * Gets feedback
     *
     * @return string|null
     */
    public function getFeedback()
    {
        return $this->container['feedback'];
    }

    /**
     * Sets feedback
     *
     * @param string|null $feedback Feedback provided to the evaluated person.
     *
     * @return self
     */
    public function setFeedback($feedback)
    {
        if (is_null($feedback)) {
            array_push($this->openAPINullablesSetToNull, 'feedback');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('feedback', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($feedback) && (mb_strlen($feedback) > 2048)) {
            throw new \InvalidArgumentException('invalid length for $feedback when calling TpdmEvaluationElementRating., must be smaller than or equal to 2048.');
        }
        if (!is_null($feedback) && (mb_strlen($feedback) < 1)) {
            throw new \InvalidArgumentException('invalid length for $feedback when calling TpdmEvaluationElementRating., must be bigger than or equal to 1.');
        }

        $this->container['feedback'] = $feedback;

        return $this;
    }

    /**
     * Gets results
     *
     * @return \Resources\Model\TpdmEvaluationElementRatingResult[]|null
     */
    public function getResults()
    {
        return $this->container['results'];
    }

    /**
     * Sets results
     *
     * @param \Resources\Model\TpdmEvaluationElementRatingResult[]|null $results An unordered collection of evaluationElementRatingResults. The numerical summary rating or score for the evaluation element.
     *
     * @return self
     */
    public function setResults($results)
    {
        if (is_null($results)) {
            throw new \InvalidArgumentException('non-nullable results cannot be null');
        }
        $this->container['results'] = $results;

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


