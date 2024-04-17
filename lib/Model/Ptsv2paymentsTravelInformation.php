<?php
/**
 * Ptsv2paymentsTravelInformation
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
 * Ptsv2paymentsTravelInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ptsv2paymentsTravelInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsv2payments_travelInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'duration' => 'string',
        'agency' => '\CyberSource\Model\Ptsv2paymentsTravelInformationAgency',
        'autoRental' => '\CyberSource\Model\Ptsv2paymentsTravelInformationAutoRental',
        'lodging' => '\CyberSource\Model\Ptsv2paymentsTravelInformationLodging',
        'transit' => '\CyberSource\Model\Ptsv2paymentsTravelInformationTransit',
        'vehicleData' => '\CyberSource\Model\Ptsv2paymentsTravelInformationVehicleData'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'duration' => null,
        'agency' => null,
        'autoRental' => null,
        'lodging' => null,
        'transit' => null,
        'vehicleData' => null
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
        'duration' => 'duration',
        'agency' => 'agency',
        'autoRental' => 'autoRental',
        'lodging' => 'lodging',
        'transit' => 'transit',
        'vehicleData' => 'vehicleData'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'duration' => 'setDuration',
        'agency' => 'setAgency',
        'autoRental' => 'setAutoRental',
        'lodging' => 'setLodging',
        'transit' => 'setTransit',
        'vehicleData' => 'setVehicleData'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'duration' => 'getDuration',
        'agency' => 'getAgency',
        'autoRental' => 'getAutoRental',
        'lodging' => 'getLodging',
        'transit' => 'getTransit',
        'vehicleData' => 'getVehicleData'
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
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['agency'] = isset($data['agency']) ? $data['agency'] : null;
        $this->container['autoRental'] = isset($data['autoRental']) ? $data['autoRental'] : null;
        $this->container['lodging'] = isset($data['lodging']) ? $data['lodging'] : null;
        $this->container['transit'] = isset($data['transit']) ? $data['transit'] : null;
        $this->container['vehicleData'] = isset($data['vehicleData']) ? $data['vehicleData'] : null;
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
     * Gets duration
     * @return string
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     * @param string $duration Duration of the auto rental or lodging rental.  #### Auto rental This field is supported for Visa, MasterCard, and American Express. **Important** If this field is not included when the `processingInformation.industryDataType` is auto rental, the transaction is declined.
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets agency
     * @return \CyberSource\Model\Ptsv2paymentsTravelInformationAgency
     */
    public function getAgency()
    {
        return $this->container['agency'];
    }

    /**
     * Sets agency
     * @param \CyberSource\Model\Ptsv2paymentsTravelInformationAgency $agency
     * @return $this
     */
    public function setAgency($agency)
    {
        $this->container['agency'] = $agency;

        return $this;
    }

    /**
     * Gets autoRental
     * @return \CyberSource\Model\Ptsv2paymentsTravelInformationAutoRental
     */
    public function getAutoRental()
    {
        return $this->container['autoRental'];
    }

    /**
     * Sets autoRental
     * @param \CyberSource\Model\Ptsv2paymentsTravelInformationAutoRental $autoRental
     * @return $this
     */
    public function setAutoRental($autoRental)
    {
        $this->container['autoRental'] = $autoRental;

        return $this;
    }

    /**
     * Gets lodging
     * @return \CyberSource\Model\Ptsv2paymentsTravelInformationLodging
     */
    public function getLodging()
    {
        return $this->container['lodging'];
    }

    /**
     * Sets lodging
     * @param \CyberSource\Model\Ptsv2paymentsTravelInformationLodging $lodging
     * @return $this
     */
    public function setLodging($lodging)
    {
        $this->container['lodging'] = $lodging;

        return $this;
    }

    /**
     * Gets transit
     * @return \CyberSource\Model\Ptsv2paymentsTravelInformationTransit
     */
    public function getTransit()
    {
        return $this->container['transit'];
    }

    /**
     * Sets transit
     * @param \CyberSource\Model\Ptsv2paymentsTravelInformationTransit $transit
     * @return $this
     */
    public function setTransit($transit)
    {
        $this->container['transit'] = $transit;

        return $this;
    }

    /**
     * Gets vehicleData
     * @return \CyberSource\Model\Ptsv2paymentsTravelInformationVehicleData
     */
    public function getVehicleData()
    {
        return $this->container['vehicleData'];
    }

    /**
     * Sets vehicleData
     * @param \CyberSource\Model\Ptsv2paymentsTravelInformationVehicleData $vehicleData
     * @return $this
     */
    public function setVehicleData($vehicleData)
    {
        $this->container['vehicleData'] = $vehicleData;

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


