<?php
/**
 * InlineResponse2011IntegrationInformationTenantConfigurations
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
 * InlineResponse2011IntegrationInformationTenantConfigurations Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse2011IntegrationInformationTenantConfigurations implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_201_1_integrationInformation_tenantConfigurations';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'solutionId' => 'string',
        'tenantConfigurationId' => 'string',
        'status' => 'string',
        'submitTimeUtc' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'solutionId' => null,
        'tenantConfigurationId' => null,
        'status' => null,
        'submitTimeUtc' => 'date-time'
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
        'solutionId' => 'solutionId',
        'tenantConfigurationId' => 'tenantConfigurationId',
        'status' => 'status',
        'submitTimeUtc' => 'submitTimeUtc'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'solutionId' => 'setSolutionId',
        'tenantConfigurationId' => 'setTenantConfigurationId',
        'status' => 'setStatus',
        'submitTimeUtc' => 'setSubmitTimeUtc'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'solutionId' => 'getSolutionId',
        'tenantConfigurationId' => 'getTenantConfigurationId',
        'status' => 'getStatus',
        'submitTimeUtc' => 'getSubmitTimeUtc'
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

    const STATUS_LIVE = 'LIVE';
    const STATUS_INACTIVE = 'INACTIVE';
    const STATUS_TEST = 'TEST';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_LIVE,
            self::STATUS_INACTIVE,
            self::STATUS_TEST,
        ];
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
        $this->container['solutionId'] = isset($data['solutionId']) ? $data['solutionId'] : null;
        $this->container['tenantConfigurationId'] = isset($data['tenantConfigurationId']) ? $data['tenantConfigurationId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['submitTimeUtc'] = isset($data['submitTimeUtc']) ? $data['submitTimeUtc'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

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

        $allowed_values = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets solutionId
     * @return string
     */
    public function getSolutionId()
    {
        return $this->container['solutionId'];
    }

    /**
     * Sets solutionId
     * @param string $solutionId The solutionId is the unique identifier for this system resource. Partner can use it to reference the specific solution through out the system.
     * @return $this
     */
    public function setSolutionId($solutionId)
    {
        $this->container['solutionId'] = $solutionId;

        return $this;
    }

    /**
     * Gets tenantConfigurationId
     * @return string
     */
    public function getTenantConfigurationId()
    {
        return $this->container['tenantConfigurationId'];
    }

    /**
     * Sets tenantConfigurationId
     * @param string $tenantConfigurationId The tenantConfigurationId is the unique identifier for this system resource. You will see various places where it must be referenced in the URI path, or when querying the hierarchy for ancestors or descendants.
     * @return $this
     */
    public function setTenantConfigurationId($tenantConfigurationId)
    {
        $this->container['tenantConfigurationId'] = $tenantConfigurationId;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets submitTimeUtc
     * @return \DateTime
     */
    public function getSubmitTimeUtc()
    {
        return $this->container['submitTimeUtc'];
    }

    /**
     * Sets submitTimeUtc
     * @param \DateTime $submitTimeUtc Time of request in UTC.
     * @return $this
     */
    public function setSubmitTimeUtc($submitTimeUtc)
    {
        $this->container['submitTimeUtc'] = $submitTimeUtc;

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


