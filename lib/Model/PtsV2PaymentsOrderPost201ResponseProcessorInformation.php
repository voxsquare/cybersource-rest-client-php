<?php
/**
 * PtsV2PaymentsOrderPost201ResponseProcessorInformation
 *
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CyberSource Merged Spec
 *
 * All CyberSource API specs merged together. These are available at https://developer.cybersource.com/api/reference/api-reference.html
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CyberSource\Model;

use \ArrayAccess;

/**
 * PtsV2PaymentsOrderPost201ResponseProcessorInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PtsV2PaymentsOrderPost201ResponseProcessorInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsV2PaymentsOrderPost201Response_processorInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sellerProtection' => '\CyberSource\Model\PtsV2PaymentsOrderPost201ResponseProcessorInformationSellerProtection',
        'avs' => '\CyberSource\Model\PtsV2PaymentsPost201Response1ProcessorInformationAvs',
        'transactionId' => 'string',
        'responseDetails' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sellerProtection' => null,
        'avs' => null,
        'transactionId' => null,
        'responseDetails' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'sellerProtection' => 'sellerProtection',
        'avs' => 'avs',
        'transactionId' => 'transactionId',
        'responseDetails' => 'responseDetails'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'sellerProtection' => 'setSellerProtection',
        'avs' => 'setAvs',
        'transactionId' => 'setTransactionId',
        'responseDetails' => 'setResponseDetails'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'sellerProtection' => 'getSellerProtection',
        'avs' => 'getAvs',
        'transactionId' => 'getTransactionId',
        'responseDetails' => 'getResponseDetails'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['sellerProtection'] = isset($data['sellerProtection']) ? $data['sellerProtection'] : null;
        $this->container['avs'] = isset($data['avs']) ? $data['avs'] : null;
        $this->container['transactionId'] = isset($data['transactionId']) ? $data['transactionId'] : null;
        $this->container['responseDetails'] = isset($data['responseDetails']) ? $data['responseDetails'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets sellerProtection
     * @return \CyberSource\Model\PtsV2PaymentsOrderPost201ResponseProcessorInformationSellerProtection
     */
    public function getSellerProtection()
    {
        return $this->container['sellerProtection'];
    }

    /**
     * Sets sellerProtection
     * @param \CyberSource\Model\PtsV2PaymentsOrderPost201ResponseProcessorInformationSellerProtection $sellerProtection
     * @return $this
     */
    public function setSellerProtection($sellerProtection)
    {
        $this->container['sellerProtection'] = $sellerProtection;

        return $this;
    }

    /**
     * Gets avs
     * @return \CyberSource\Model\PtsV2PaymentsPost201Response1ProcessorInformationAvs
     */
    public function getAvs()
    {
        return $this->container['avs'];
    }

    /**
     * Sets avs
     * @param \CyberSource\Model\PtsV2PaymentsPost201Response1ProcessorInformationAvs $avs
     * @return $this
     */
    public function setAvs($avs)
    {
        $this->container['avs'] = $avs;

        return $this;
    }

    /**
     * Gets transactionId
     * @return string
     */
    public function getTransactionId()
    {
        return $this->container['transactionId'];
    }

    /**
     * Sets transactionId
     * @param string $transactionId Network transaction identifier (TID). You can use this value to identify a specific transaction when you are discussing the transaction with your processor. Not all processors provide this value.  Returned by the authorization service.  #### PIN debit Transaction identifier generated by the processor.  Returned by PIN debit credit.  #### GPX Processor transaction ID.  #### Cielo For Cielo, this value is the non-sequential unit (NSU) and is supported for all transactions. The value is generated by Cielo or the issuing bank.  #### Comercio Latino For Comercio Latino, this value is the proof of sale or non-sequential unit (NSU) number generated by the acquirers Cielo and Rede, or the issuing bank.  #### CyberSource through VisaNet and GPN For details about this value for CyberSource through VisaNet and GPN, see \"processorInformation.networkTransactionId\" in [REST API Fields](https://developer.cybersource.com/content/dam/docs/cybs/en-us/apifields/reference/all/rest/api-fields.pdf)  #### Moneris This value identifies the transaction on a host system. It contains the following information: - Terminal used to process the transaction - Shift during which the transaction took place - Batch number - Transaction number within the batch You must store this value. If you give the customer a receipt, display this value on the receipt.  **Example** For the value 66012345001069003: - Terminal ID = 66012345 - Shift number = 001 - Batch number = 069 - Transaction number = 003
     * @return $this
     */
    public function setTransactionId($transactionId)
    {
        $this->container['transactionId'] = $transactionId;

        return $this;
    }

    /**
     * Gets responseDetails
     * @return string
     */
    public function getResponseDetails()
    {
        return $this->container['responseDetails'];
    }

    /**
     * Sets responseDetails
     * @param string $responseDetails This field might contain information about a decline. This field is supported only for **CyberSource through VisaNet**.
     * @return $this
     */
    public function setResponseDetails($responseDetails)
    {
        $this->container['responseDetails'] = $responseDetails;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this));
    }
}


