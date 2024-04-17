<?php
/**
 * SAConfigCheckout
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
 * SAConfigCheckout Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SAConfigCheckout implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SAConfig_checkout';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'displayTaxAmount' => 'bool',
        'templateType' => 'string',
        'returnToMerchantSiteUrl' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'displayTaxAmount' => null,
        'templateType' => null,
        'returnToMerchantSiteUrl' => null
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
        'displayTaxAmount' => 'displayTaxAmount',
        'templateType' => 'templateType',
        'returnToMerchantSiteUrl' => 'returnToMerchantSiteUrl'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'displayTaxAmount' => 'setDisplayTaxAmount',
        'templateType' => 'setTemplateType',
        'returnToMerchantSiteUrl' => 'setReturnToMerchantSiteUrl'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'displayTaxAmount' => 'getDisplayTaxAmount',
        'templateType' => 'getTemplateType',
        'returnToMerchantSiteUrl' => 'getReturnToMerchantSiteUrl'
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
        $this->container['displayTaxAmount'] = isset($data['displayTaxAmount']) ? $data['displayTaxAmount'] : null;
        $this->container['templateType'] = isset($data['templateType']) ? $data['templateType'] : null;
        $this->container['returnToMerchantSiteUrl'] = isset($data['returnToMerchantSiteUrl']) ? $data['returnToMerchantSiteUrl'] : null;
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
     * Gets displayTaxAmount
     * @return bool
     */
    public function getDisplayTaxAmount()
    {
        return $this->container['displayTaxAmount'];
    }

    /**
     * Sets displayTaxAmount
     * @param bool $displayTaxAmount Toggles whether or not the tax amount is displayed on the Hosted Checkout.
     * @return $this
     */
    public function setDisplayTaxAmount($displayTaxAmount)
    {
        $this->container['displayTaxAmount'] = $displayTaxAmount;

        return $this;
    }

    /**
     * Gets templateType
     * @return string
     */
    public function getTemplateType()
    {
        return $this->container['templateType'];
    }

    /**
     * Sets templateType
     * @param string $templateType Specifies whether the Hosted Checkout is displayed as a single page form or multi page checkout.   Valid values:  `multi`  `single`
     * @return $this
     */
    public function setTemplateType($templateType)
    {
        $this->container['templateType'] = $templateType;

        return $this;
    }

    /**
     * Gets returnToMerchantSiteUrl
     * @return string
     */
    public function getReturnToMerchantSiteUrl()
    {
        return $this->container['returnToMerchantSiteUrl'];
    }

    /**
     * Sets returnToMerchantSiteUrl
     * @param string $returnToMerchantSiteUrl URL of the website linked to from the Secure Acceptance receipt page. Only used if the profile does not have custom receipt pages configured.
     * @return $this
     */
    public function setReturnToMerchantSiteUrl($returnToMerchantSiteUrl)
    {
        $this->container['returnToMerchantSiteUrl'] = $returnToMerchantSiteUrl;

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


