<?php
/**
 * PtsV2PaymentsPost201ResponseConsumerAuthenticationInformationIvr
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
 * PtsV2PaymentsPost201ResponseConsumerAuthenticationInformationIvr Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PtsV2PaymentsPost201ResponseConsumerAuthenticationInformationIvr implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsV2PaymentsPost201Response_consumerAuthenticationInformation_ivr';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'enabledMessage' => 'bool',
        'encryptionKey' => 'string',
        'encryptionMandatory' => 'bool',
        'encryptionType' => 'string',
        'label' => 'string',
        'prompt' => 'string',
        'statusMessage' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'enabledMessage' => null,
        'encryptionKey' => null,
        'encryptionMandatory' => null,
        'encryptionType' => null,
        'label' => null,
        'prompt' => null,
        'statusMessage' => null
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
        'enabledMessage' => 'enabledMessage',
        'encryptionKey' => 'encryptionKey',
        'encryptionMandatory' => 'encryptionMandatory',
        'encryptionType' => 'encryptionType',
        'label' => 'label',
        'prompt' => 'prompt',
        'statusMessage' => 'statusMessage'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'enabledMessage' => 'setEnabledMessage',
        'encryptionKey' => 'setEncryptionKey',
        'encryptionMandatory' => 'setEncryptionMandatory',
        'encryptionType' => 'setEncryptionType',
        'label' => 'setLabel',
        'prompt' => 'setPrompt',
        'statusMessage' => 'setStatusMessage'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'enabledMessage' => 'getEnabledMessage',
        'encryptionKey' => 'getEncryptionKey',
        'encryptionMandatory' => 'getEncryptionMandatory',
        'encryptionType' => 'getEncryptionType',
        'label' => 'getLabel',
        'prompt' => 'getPrompt',
        'statusMessage' => 'getStatusMessage'
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
        $this->container['enabledMessage'] = isset($data['enabledMessage']) ? $data['enabledMessage'] : null;
        $this->container['encryptionKey'] = isset($data['encryptionKey']) ? $data['encryptionKey'] : null;
        $this->container['encryptionMandatory'] = isset($data['encryptionMandatory']) ? $data['encryptionMandatory'] : null;
        $this->container['encryptionType'] = isset($data['encryptionType']) ? $data['encryptionType'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['prompt'] = isset($data['prompt']) ? $data['prompt'] : null;
        $this->container['statusMessage'] = isset($data['statusMessage']) ? $data['statusMessage'] : null;
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
     * Gets enabledMessage
     * @return bool
     */
    public function getEnabledMessage()
    {
        return $this->container['enabledMessage'];
    }

    /**
     * Sets enabledMessage
     * @param bool $enabledMessage Flag to indicate if a valid IVR transaction was detected.
     * @return $this
     */
    public function setEnabledMessage($enabledMessage)
    {
        $this->container['enabledMessage'] = $enabledMessage;

        return $this;
    }

    /**
     * Gets encryptionKey
     * @return string
     */
    public function getEncryptionKey()
    {
        return $this->container['encryptionKey'];
    }

    /**
     * Sets encryptionKey
     * @param string $encryptionKey Encryption key to be used in the event the ACS requires encryption of the credential field.
     * @return $this
     */
    public function setEncryptionKey($encryptionKey)
    {
        $this->container['encryptionKey'] = $encryptionKey;

        return $this;
    }

    /**
     * Gets encryptionMandatory
     * @return bool
     */
    public function getEncryptionMandatory()
    {
        return $this->container['encryptionMandatory'];
    }

    /**
     * Sets encryptionMandatory
     * @param bool $encryptionMandatory Flag to indicate if the ACS requires the credential to be encrypted.
     * @return $this
     */
    public function setEncryptionMandatory($encryptionMandatory)
    {
        $this->container['encryptionMandatory'] = $encryptionMandatory;

        return $this;
    }

    /**
     * Gets encryptionType
     * @return string
     */
    public function getEncryptionType()
    {
        return $this->container['encryptionType'];
    }

    /**
     * Sets encryptionType
     * @param string $encryptionType An indicator from the ACS to inform the type of encryption that should be used in the event the ACS requires encryption of the credential field.
     * @return $this
     */
    public function setEncryptionType($encryptionType)
    {
        $this->container['encryptionType'] = $encryptionType;

        return $this;
    }

    /**
     * Gets label
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     * @param string $label An ACS Provided label that can be presented to the Consumer. Recommended use with an application.
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets prompt
     * @return string
     */
    public function getPrompt()
    {
        return $this->container['prompt'];
    }

    /**
     * Sets prompt
     * @param string $prompt An ACS provided string that can be presented to the Consumer. Recommended use with an application.
     * @return $this
     */
    public function setPrompt($prompt)
    {
        $this->container['prompt'] = $prompt;

        return $this;
    }

    /**
     * Gets statusMessage
     * @return string
     */
    public function getStatusMessage()
    {
        return $this->container['statusMessage'];
    }

    /**
     * Sets statusMessage
     * @param string $statusMessage An ACS provided message that can provide additional information or details.
     * @return $this
     */
    public function setStatusMessage($statusMessage)
    {
        $this->container['statusMessage'] = $statusMessage;

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


