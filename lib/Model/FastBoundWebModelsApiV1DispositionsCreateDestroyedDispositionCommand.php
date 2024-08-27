<?php
/**
 * FastBoundWebModelsApiV1DispositionsCreateDestroyedDispositionCommand
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * FastBound API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.62
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * FastBoundWebModelsApiV1DispositionsCreateDestroyedDispositionCommand Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FastBoundWebModelsApiV1DispositionsCreateDestroyedDispositionCommand implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FastBound.Web.Models.Api.V1.Dispositions.CreateDestroyedDisposition+Command';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'external_id' => 'string',
        'date' => '\DateTime',
        'note' => 'string',
        'destroyed_date' => '\DateTime',
        'destroyed_description' => 'string',
        'destroyed_witness1' => 'string',
        'destroyed_witness2' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'external_id' => null,
        'date' => 'date-time',
        'note' => null,
        'destroyed_date' => 'date-time',
        'destroyed_description' => null,
        'destroyed_witness1' => null,
        'destroyed_witness2' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'external_id' => 'externalId',
        'date' => 'date',
        'note' => 'note',
        'destroyed_date' => 'destroyed_Date',
        'destroyed_description' => 'destroyed_Description',
        'destroyed_witness1' => 'destroyed_Witness1',
        'destroyed_witness2' => 'destroyed_Witness2'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'external_id' => 'setExternalId',
        'date' => 'setDate',
        'note' => 'setNote',
        'destroyed_date' => 'setDestroyedDate',
        'destroyed_description' => 'setDestroyedDescription',
        'destroyed_witness1' => 'setDestroyedWitness1',
        'destroyed_witness2' => 'setDestroyedWitness2'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'external_id' => 'getExternalId',
        'date' => 'getDate',
        'note' => 'getNote',
        'destroyed_date' => 'getDestroyedDate',
        'destroyed_description' => 'getDestroyedDescription',
        'destroyed_witness1' => 'getDestroyedWitness1',
        'destroyed_witness2' => 'getDestroyedWitness2'
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
        return self::$swaggerModelName;
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
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['destroyed_date'] = isset($data['destroyed_date']) ? $data['destroyed_date'] : null;
        $this->container['destroyed_description'] = isset($data['destroyed_description']) ? $data['destroyed_description'] : null;
        $this->container['destroyed_witness1'] = isset($data['destroyed_witness1']) ? $data['destroyed_witness1'] : null;
        $this->container['destroyed_witness2'] = isset($data['destroyed_witness2']) ? $data['destroyed_witness2'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets external_id
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param string $external_id external_id
     *
     * @return $this
     */
    public function setExternalId($external_id)
    {
        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime $date date
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string $note note
     *
     * @return $this
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets destroyed_date
     *
     * @return \DateTime
     */
    public function getDestroyedDate()
    {
        return $this->container['destroyed_date'];
    }

    /**
     * Sets destroyed_date
     *
     * @param \DateTime $destroyed_date destroyed_date
     *
     * @return $this
     */
    public function setDestroyedDate($destroyed_date)
    {
        $this->container['destroyed_date'] = $destroyed_date;

        return $this;
    }

    /**
     * Gets destroyed_description
     *
     * @return string
     */
    public function getDestroyedDescription()
    {
        return $this->container['destroyed_description'];
    }

    /**
     * Sets destroyed_description
     *
     * @param string $destroyed_description destroyed_description
     *
     * @return $this
     */
    public function setDestroyedDescription($destroyed_description)
    {
        $this->container['destroyed_description'] = $destroyed_description;

        return $this;
    }

    /**
     * Gets destroyed_witness1
     *
     * @return string
     */
    public function getDestroyedWitness1()
    {
        return $this->container['destroyed_witness1'];
    }

    /**
     * Sets destroyed_witness1
     *
     * @param string $destroyed_witness1 destroyed_witness1
     *
     * @return $this
     */
    public function setDestroyedWitness1($destroyed_witness1)
    {
        $this->container['destroyed_witness1'] = $destroyed_witness1;

        return $this;
    }

    /**
     * Gets destroyed_witness2
     *
     * @return string
     */
    public function getDestroyedWitness2()
    {
        return $this->container['destroyed_witness2'];
    }

    /**
     * Sets destroyed_witness2
     *
     * @param string $destroyed_witness2 destroyed_witness2
     *
     * @return $this
     */
    public function setDestroyedWitness2($destroyed_witness2)
    {
        $this->container['destroyed_witness2'] = $destroyed_witness2;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
