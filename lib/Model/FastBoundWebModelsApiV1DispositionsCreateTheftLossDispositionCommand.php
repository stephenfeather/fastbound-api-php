<?php
/**
 * FastBoundWebModelsApiV1DispositionsCreateTheftLossDispositionCommand
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
 * FastBoundWebModelsApiV1DispositionsCreateTheftLossDispositionCommand Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FastBoundWebModelsApiV1DispositionsCreateTheftLossDispositionCommand implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FastBound.Web.Models.Api.V1.Dispositions.CreateTheftLossDisposition+Command';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'external_id' => 'string',
        'date' => '\DateTime',
        'note' => 'string',
        'theft_loss_discovered_date' => '\DateTime',
        'theft_loss_type' => 'string',
        'theft_loss_atf_issued_incident_number' => 'string',
        'theft_loss_police_incident_number' => 'string'
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
        'theft_loss_discovered_date' => 'date-time',
        'theft_loss_type' => null,
        'theft_loss_atf_issued_incident_number' => null,
        'theft_loss_police_incident_number' => null
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
        'theft_loss_discovered_date' => 'theftLoss_DiscoveredDate',
        'theft_loss_type' => 'theftLoss_Type',
        'theft_loss_atf_issued_incident_number' => 'theftLoss_ATFIssuedIncidentNumber',
        'theft_loss_police_incident_number' => 'theftLoss_PoliceIncidentNumber'
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
        'theft_loss_discovered_date' => 'setTheftLossDiscoveredDate',
        'theft_loss_type' => 'setTheftLossType',
        'theft_loss_atf_issued_incident_number' => 'setTheftLossAtfIssuedIncidentNumber',
        'theft_loss_police_incident_number' => 'setTheftLossPoliceIncidentNumber'
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
        'theft_loss_discovered_date' => 'getTheftLossDiscoveredDate',
        'theft_loss_type' => 'getTheftLossType',
        'theft_loss_atf_issued_incident_number' => 'getTheftLossAtfIssuedIncidentNumber',
        'theft_loss_police_incident_number' => 'getTheftLossPoliceIncidentNumber'
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
        $this->container['theft_loss_discovered_date'] = isset($data['theft_loss_discovered_date']) ? $data['theft_loss_discovered_date'] : null;
        $this->container['theft_loss_type'] = isset($data['theft_loss_type']) ? $data['theft_loss_type'] : null;
        $this->container['theft_loss_atf_issued_incident_number'] = isset($data['theft_loss_atf_issued_incident_number']) ? $data['theft_loss_atf_issued_incident_number'] : null;
        $this->container['theft_loss_police_incident_number'] = isset($data['theft_loss_police_incident_number']) ? $data['theft_loss_police_incident_number'] : null;
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
     * Gets theft_loss_discovered_date
     *
     * @return \DateTime
     */
    public function getTheftLossDiscoveredDate()
    {
        return $this->container['theft_loss_discovered_date'];
    }

    /**
     * Sets theft_loss_discovered_date
     *
     * @param \DateTime $theft_loss_discovered_date theft_loss_discovered_date
     *
     * @return $this
     */
    public function setTheftLossDiscoveredDate($theft_loss_discovered_date)
    {
        $this->container['theft_loss_discovered_date'] = $theft_loss_discovered_date;

        return $this;
    }

    /**
     * Gets theft_loss_type
     *
     * @return string
     */
    public function getTheftLossType()
    {
        return $this->container['theft_loss_type'];
    }

    /**
     * Sets theft_loss_type
     *
     * @param string $theft_loss_type theft_loss_type
     *
     * @return $this
     */
    public function setTheftLossType($theft_loss_type)
    {
        $this->container['theft_loss_type'] = $theft_loss_type;

        return $this;
    }

    /**
     * Gets theft_loss_atf_issued_incident_number
     *
     * @return string
     */
    public function getTheftLossAtfIssuedIncidentNumber()
    {
        return $this->container['theft_loss_atf_issued_incident_number'];
    }

    /**
     * Sets theft_loss_atf_issued_incident_number
     *
     * @param string $theft_loss_atf_issued_incident_number theft_loss_atf_issued_incident_number
     *
     * @return $this
     */
    public function setTheftLossAtfIssuedIncidentNumber($theft_loss_atf_issued_incident_number)
    {
        $this->container['theft_loss_atf_issued_incident_number'] = $theft_loss_atf_issued_incident_number;

        return $this;
    }

    /**
     * Gets theft_loss_police_incident_number
     *
     * @return string
     */
    public function getTheftLossPoliceIncidentNumber()
    {
        return $this->container['theft_loss_police_incident_number'];
    }

    /**
     * Sets theft_loss_police_incident_number
     *
     * @param string $theft_loss_police_incident_number theft_loss_police_incident_number
     *
     * @return $this
     */
    public function setTheftLossPoliceIncidentNumber($theft_loss_police_incident_number)
    {
        $this->container['theft_loss_police_incident_number'] = $theft_loss_police_incident_number;

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
