<?php
/**
 * Ptsv2billingagreementsDeviceInformation
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
 * Ptsv2billingagreementsDeviceInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ptsv2billingagreementsDeviceInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsv2billingagreements_deviceInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'httpAcceptBrowserValue' => 'string',
        'ipAddress' => 'string',
        'userAgentBrowserValue' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'httpAcceptBrowserValue' => null,
        'ipAddress' => null,
        'userAgentBrowserValue' => null
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
        'httpAcceptBrowserValue' => 'httpAcceptBrowserValue',
        'ipAddress' => 'ipAddress',
        'userAgentBrowserValue' => 'userAgentBrowserValue'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'httpAcceptBrowserValue' => 'setHttpAcceptBrowserValue',
        'ipAddress' => 'setIpAddress',
        'userAgentBrowserValue' => 'setUserAgentBrowserValue'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'httpAcceptBrowserValue' => 'getHttpAcceptBrowserValue',
        'ipAddress' => 'getIpAddress',
        'userAgentBrowserValue' => 'getUserAgentBrowserValue'
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
        $this->container['httpAcceptBrowserValue'] = isset($data['httpAcceptBrowserValue']) ? $data['httpAcceptBrowserValue'] : null;
        $this->container['ipAddress'] = isset($data['ipAddress']) ? $data['ipAddress'] : null;
        $this->container['userAgentBrowserValue'] = isset($data['userAgentBrowserValue']) ? $data['userAgentBrowserValue'] : null;
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
     * Gets httpAcceptBrowserValue
     * @return string
     */
    public function getHttpAcceptBrowserValue()
    {
        return $this->container['httpAcceptBrowserValue'];
    }

    /**
     * Sets httpAcceptBrowserValue
     * @param string $httpAcceptBrowserValue Value of the Accept header sent by the customer's web browser. **Note** If the customer's browser provides a value, you must include it in your request.
     * @return $this
     */
    public function setHttpAcceptBrowserValue($httpAcceptBrowserValue)
    {
        $this->container['httpAcceptBrowserValue'] = $httpAcceptBrowserValue;

        return $this;
    }

    /**
     * Gets ipAddress
     * @return string
     */
    public function getIpAddress()
    {
        return $this->container['ipAddress'];
    }

    /**
     * Sets ipAddress
     * @param string $ipAddress IP address of the customer.  #### Used by **Authorization, Capture, and Credit** Optional field.
     * @return $this
     */
    public function setIpAddress($ipAddress)
    {
        $this->container['ipAddress'] = $ipAddress;

        return $this;
    }

    /**
     * Gets userAgentBrowserValue
     * @return string
     */
    public function getUserAgentBrowserValue()
    {
        return $this->container['userAgentBrowserValue'];
    }

    /**
     * Sets userAgentBrowserValue
     * @param string $userAgentBrowserValue Value of the User-Agent header sent by the customer's web browser. Note If the customer's browser provides a value, you must include it in your request.
     * @return $this
     */
    public function setUserAgentBrowserValue($userAgentBrowserValue)
    {
        $this->container['userAgentBrowserValue'] = $userAgentBrowserValue;

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


