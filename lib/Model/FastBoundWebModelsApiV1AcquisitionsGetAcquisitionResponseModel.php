<?php
/**
 * FastBoundWebModelsApiV1AcquisitionsGetAcquisitionResponseModel
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
 * FastBoundWebModelsApiV1AcquisitionsGetAcquisitionResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FastBoundWebModelsApiV1AcquisitionsGetAcquisitionResponseModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FastBound.Web.Models.Api.V1.Acquisitions.GetAcquisitionResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'external_id' => 'string',
        'date' => '\DateTime',
        'type' => 'string',
        'purchase_order_number' => 'string',
        'invoice_number' => 'string',
        'shipment_tracking_number' => 'string',
        'note' => 'string',
        'is_manufacturing_acquisition' => 'bool',
        'acquired_from_contact' => '\Swagger\Client\Model\FastBoundWebModelsApiV1AcquisitionsGetAcquisitionResponseContactModel',
        'items' => '\Swagger\Client\Model\FastBoundWebModelsApiV1AcquisitionsGetAcquisitionResponseItemModel[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
        'external_id' => null,
        'date' => 'date-time',
        'type' => null,
        'purchase_order_number' => null,
        'invoice_number' => null,
        'shipment_tracking_number' => null,
        'note' => null,
        'is_manufacturing_acquisition' => null,
        'acquired_from_contact' => null,
        'items' => null
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
        'id' => 'id',
        'external_id' => 'externalId',
        'date' => 'date',
        'type' => 'type',
        'purchase_order_number' => 'purchaseOrderNumber',
        'invoice_number' => 'invoiceNumber',
        'shipment_tracking_number' => 'shipmentTrackingNumber',
        'note' => 'note',
        'is_manufacturing_acquisition' => 'isManufacturingAcquisition',
        'acquired_from_contact' => 'acquiredFromContact',
        'items' => 'items'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'external_id' => 'setExternalId',
        'date' => 'setDate',
        'type' => 'setType',
        'purchase_order_number' => 'setPurchaseOrderNumber',
        'invoice_number' => 'setInvoiceNumber',
        'shipment_tracking_number' => 'setShipmentTrackingNumber',
        'note' => 'setNote',
        'is_manufacturing_acquisition' => 'setIsManufacturingAcquisition',
        'acquired_from_contact' => 'setAcquiredFromContact',
        'items' => 'setItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'external_id' => 'getExternalId',
        'date' => 'getDate',
        'type' => 'getType',
        'purchase_order_number' => 'getPurchaseOrderNumber',
        'invoice_number' => 'getInvoiceNumber',
        'shipment_tracking_number' => 'getShipmentTrackingNumber',
        'note' => 'getNote',
        'is_manufacturing_acquisition' => 'getIsManufacturingAcquisition',
        'acquired_from_contact' => 'getAcquiredFromContact',
        'items' => 'getItems'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['purchase_order_number'] = isset($data['purchase_order_number']) ? $data['purchase_order_number'] : null;
        $this->container['invoice_number'] = isset($data['invoice_number']) ? $data['invoice_number'] : null;
        $this->container['shipment_tracking_number'] = isset($data['shipment_tracking_number']) ? $data['shipment_tracking_number'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['is_manufacturing_acquisition'] = isset($data['is_manufacturing_acquisition']) ? $data['is_manufacturing_acquisition'] : null;
        $this->container['acquired_from_contact'] = isset($data['acquired_from_contact']) ? $data['acquired_from_contact'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
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
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets purchase_order_number
     *
     * @return string
     */
    public function getPurchaseOrderNumber()
    {
        return $this->container['purchase_order_number'];
    }

    /**
     * Sets purchase_order_number
     *
     * @param string $purchase_order_number purchase_order_number
     *
     * @return $this
     */
    public function setPurchaseOrderNumber($purchase_order_number)
    {
        $this->container['purchase_order_number'] = $purchase_order_number;

        return $this;
    }

    /**
     * Gets invoice_number
     *
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->container['invoice_number'];
    }

    /**
     * Sets invoice_number
     *
     * @param string $invoice_number invoice_number
     *
     * @return $this
     */
    public function setInvoiceNumber($invoice_number)
    {
        $this->container['invoice_number'] = $invoice_number;

        return $this;
    }

    /**
     * Gets shipment_tracking_number
     *
     * @return string
     */
    public function getShipmentTrackingNumber()
    {
        return $this->container['shipment_tracking_number'];
    }

    /**
     * Sets shipment_tracking_number
     *
     * @param string $shipment_tracking_number shipment_tracking_number
     *
     * @return $this
     */
    public function setShipmentTrackingNumber($shipment_tracking_number)
    {
        $this->container['shipment_tracking_number'] = $shipment_tracking_number;

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
     * Gets is_manufacturing_acquisition
     *
     * @return bool
     */
    public function getIsManufacturingAcquisition()
    {
        return $this->container['is_manufacturing_acquisition'];
    }

    /**
     * Sets is_manufacturing_acquisition
     *
     * @param bool $is_manufacturing_acquisition is_manufacturing_acquisition
     *
     * @return $this
     */
    public function setIsManufacturingAcquisition($is_manufacturing_acquisition)
    {
        $this->container['is_manufacturing_acquisition'] = $is_manufacturing_acquisition;

        return $this;
    }

    /**
     * Gets acquired_from_contact
     *
     * @return \Swagger\Client\Model\FastBoundWebModelsApiV1AcquisitionsGetAcquisitionResponseContactModel
     */
    public function getAcquiredFromContact()
    {
        return $this->container['acquired_from_contact'];
    }

    /**
     * Sets acquired_from_contact
     *
     * @param \Swagger\Client\Model\FastBoundWebModelsApiV1AcquisitionsGetAcquisitionResponseContactModel $acquired_from_contact acquired_from_contact
     *
     * @return $this
     */
    public function setAcquiredFromContact($acquired_from_contact)
    {
        $this->container['acquired_from_contact'] = $acquired_from_contact;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \Swagger\Client\Model\FastBoundWebModelsApiV1AcquisitionsGetAcquisitionResponseItemModel[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Swagger\Client\Model\FastBoundWebModelsApiV1AcquisitionsGetAcquisitionResponseItemModel[] $items items
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

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
