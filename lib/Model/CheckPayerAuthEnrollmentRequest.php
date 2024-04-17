<?php
/**
 * CheckPayerAuthEnrollmentRequest
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
 * CheckPayerAuthEnrollmentRequest Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CheckPayerAuthEnrollmentRequest implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'checkPayerAuthEnrollmentRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'clientReferenceInformation' => '\CyberSource\Model\Riskv1decisionsClientReferenceInformation',
        'orderInformation' => '\CyberSource\Model\Riskv1authenticationsOrderInformation',
        'paymentInformation' => '\CyberSource\Model\Riskv1authenticationsPaymentInformation',
        'processingInformation' => '\CyberSource\Model\Riskv1authenticationsetupsProcessingInformation',
        'tokenInformation' => '\CyberSource\Model\Riskv1authenticationsetupsTokenInformation',
        'buyerInformation' => '\CyberSource\Model\Riskv1authenticationsBuyerInformation',
        'deviceInformation' => '\CyberSource\Model\Riskv1authenticationsDeviceInformation',
        'merchantInformation' => '\CyberSource\Model\Riskv1decisionsMerchantInformation',
        'acquirerInformation' => '\CyberSource\Model\Riskv1decisionsAcquirerInformation',
        'recurringPaymentInformation' => '\CyberSource\Model\Ptsv2paymentsRecurringPaymentInformation',
        'consumerAuthenticationInformation' => '\CyberSource\Model\Riskv1decisionsConsumerAuthenticationInformation',
        'riskInformation' => '\CyberSource\Model\Riskv1authenticationsRiskInformation',
        'travelInformation' => '\CyberSource\Model\Riskv1authenticationsTravelInformation',
        'merchantDefinedInformation' => '\CyberSource\Model\Riskv1decisionsMerchantDefinedInformation[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'clientReferenceInformation' => null,
        'orderInformation' => null,
        'paymentInformation' => null,
        'processingInformation' => null,
        'tokenInformation' => null,
        'buyerInformation' => null,
        'deviceInformation' => null,
        'merchantInformation' => null,
        'acquirerInformation' => null,
        'recurringPaymentInformation' => null,
        'consumerAuthenticationInformation' => null,
        'riskInformation' => null,
        'travelInformation' => null,
        'merchantDefinedInformation' => null
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
        'clientReferenceInformation' => 'clientReferenceInformation',
        'orderInformation' => 'orderInformation',
        'paymentInformation' => 'paymentInformation',
        'processingInformation' => 'processingInformation',
        'tokenInformation' => 'tokenInformation',
        'buyerInformation' => 'buyerInformation',
        'deviceInformation' => 'deviceInformation',
        'merchantInformation' => 'merchantInformation',
        'acquirerInformation' => 'acquirerInformation',
        'recurringPaymentInformation' => 'recurringPaymentInformation',
        'consumerAuthenticationInformation' => 'consumerAuthenticationInformation',
        'riskInformation' => 'riskInformation',
        'travelInformation' => 'travelInformation',
        'merchantDefinedInformation' => 'merchantDefinedInformation'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'clientReferenceInformation' => 'setClientReferenceInformation',
        'orderInformation' => 'setOrderInformation',
        'paymentInformation' => 'setPaymentInformation',
        'processingInformation' => 'setProcessingInformation',
        'tokenInformation' => 'setTokenInformation',
        'buyerInformation' => 'setBuyerInformation',
        'deviceInformation' => 'setDeviceInformation',
        'merchantInformation' => 'setMerchantInformation',
        'acquirerInformation' => 'setAcquirerInformation',
        'recurringPaymentInformation' => 'setRecurringPaymentInformation',
        'consumerAuthenticationInformation' => 'setConsumerAuthenticationInformation',
        'riskInformation' => 'setRiskInformation',
        'travelInformation' => 'setTravelInformation',
        'merchantDefinedInformation' => 'setMerchantDefinedInformation'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'clientReferenceInformation' => 'getClientReferenceInformation',
        'orderInformation' => 'getOrderInformation',
        'paymentInformation' => 'getPaymentInformation',
        'processingInformation' => 'getProcessingInformation',
        'tokenInformation' => 'getTokenInformation',
        'buyerInformation' => 'getBuyerInformation',
        'deviceInformation' => 'getDeviceInformation',
        'merchantInformation' => 'getMerchantInformation',
        'acquirerInformation' => 'getAcquirerInformation',
        'recurringPaymentInformation' => 'getRecurringPaymentInformation',
        'consumerAuthenticationInformation' => 'getConsumerAuthenticationInformation',
        'riskInformation' => 'getRiskInformation',
        'travelInformation' => 'getTravelInformation',
        'merchantDefinedInformation' => 'getMerchantDefinedInformation'
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
        $this->container['clientReferenceInformation'] = isset($data['clientReferenceInformation']) ? $data['clientReferenceInformation'] : null;
        $this->container['orderInformation'] = isset($data['orderInformation']) ? $data['orderInformation'] : null;
        $this->container['paymentInformation'] = isset($data['paymentInformation']) ? $data['paymentInformation'] : null;
        $this->container['processingInformation'] = isset($data['processingInformation']) ? $data['processingInformation'] : null;
        $this->container['tokenInformation'] = isset($data['tokenInformation']) ? $data['tokenInformation'] : null;
        $this->container['buyerInformation'] = isset($data['buyerInformation']) ? $data['buyerInformation'] : null;
        $this->container['deviceInformation'] = isset($data['deviceInformation']) ? $data['deviceInformation'] : null;
        $this->container['merchantInformation'] = isset($data['merchantInformation']) ? $data['merchantInformation'] : null;
        $this->container['acquirerInformation'] = isset($data['acquirerInformation']) ? $data['acquirerInformation'] : null;
        $this->container['recurringPaymentInformation'] = isset($data['recurringPaymentInformation']) ? $data['recurringPaymentInformation'] : null;
        $this->container['consumerAuthenticationInformation'] = isset($data['consumerAuthenticationInformation']) ? $data['consumerAuthenticationInformation'] : null;
        $this->container['riskInformation'] = isset($data['riskInformation']) ? $data['riskInformation'] : null;
        $this->container['travelInformation'] = isset($data['travelInformation']) ? $data['travelInformation'] : null;
        $this->container['merchantDefinedInformation'] = isset($data['merchantDefinedInformation']) ? $data['merchantDefinedInformation'] : null;
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
     * Gets clientReferenceInformation
     * @return \CyberSource\Model\Riskv1decisionsClientReferenceInformation
     */
    public function getClientReferenceInformation()
    {
        return $this->container['clientReferenceInformation'];
    }

    /**
     * Sets clientReferenceInformation
     * @param \CyberSource\Model\Riskv1decisionsClientReferenceInformation $clientReferenceInformation
     * @return $this
     */
    public function setClientReferenceInformation($clientReferenceInformation)
    {
        $this->container['clientReferenceInformation'] = $clientReferenceInformation;

        return $this;
    }

    /**
     * Gets orderInformation
     * @return \CyberSource\Model\Riskv1authenticationsOrderInformation
     */
    public function getOrderInformation()
    {
        return $this->container['orderInformation'];
    }

    /**
     * Sets orderInformation
     * @param \CyberSource\Model\Riskv1authenticationsOrderInformation $orderInformation
     * @return $this
     */
    public function setOrderInformation($orderInformation)
    {
        $this->container['orderInformation'] = $orderInformation;

        return $this;
    }

    /**
     * Gets paymentInformation
     * @return \CyberSource\Model\Riskv1authenticationsPaymentInformation
     */
    public function getPaymentInformation()
    {
        return $this->container['paymentInformation'];
    }

    /**
     * Sets paymentInformation
     * @param \CyberSource\Model\Riskv1authenticationsPaymentInformation $paymentInformation
     * @return $this
     */
    public function setPaymentInformation($paymentInformation)
    {
        $this->container['paymentInformation'] = $paymentInformation;

        return $this;
    }

    /**
     * Gets processingInformation
     * @return \CyberSource\Model\Riskv1authenticationsetupsProcessingInformation
     */
    public function getProcessingInformation()
    {
        return $this->container['processingInformation'];
    }

    /**
     * Sets processingInformation
     * @param \CyberSource\Model\Riskv1authenticationsetupsProcessingInformation $processingInformation
     * @return $this
     */
    public function setProcessingInformation($processingInformation)
    {
        $this->container['processingInformation'] = $processingInformation;

        return $this;
    }

    /**
     * Gets tokenInformation
     * @return \CyberSource\Model\Riskv1authenticationsetupsTokenInformation
     */
    public function getTokenInformation()
    {
        return $this->container['tokenInformation'];
    }

    /**
     * Sets tokenInformation
     * @param \CyberSource\Model\Riskv1authenticationsetupsTokenInformation $tokenInformation
     * @return $this
     */
    public function setTokenInformation($tokenInformation)
    {
        $this->container['tokenInformation'] = $tokenInformation;

        return $this;
    }

    /**
     * Gets buyerInformation
     * @return \CyberSource\Model\Riskv1authenticationsBuyerInformation
     */
    public function getBuyerInformation()
    {
        return $this->container['buyerInformation'];
    }

    /**
     * Sets buyerInformation
     * @param \CyberSource\Model\Riskv1authenticationsBuyerInformation $buyerInformation
     * @return $this
     */
    public function setBuyerInformation($buyerInformation)
    {
        $this->container['buyerInformation'] = $buyerInformation;

        return $this;
    }

    /**
     * Gets deviceInformation
     * @return \CyberSource\Model\Riskv1authenticationsDeviceInformation
     */
    public function getDeviceInformation()
    {
        return $this->container['deviceInformation'];
    }

    /**
     * Sets deviceInformation
     * @param \CyberSource\Model\Riskv1authenticationsDeviceInformation $deviceInformation
     * @return $this
     */
    public function setDeviceInformation($deviceInformation)
    {
        $this->container['deviceInformation'] = $deviceInformation;

        return $this;
    }

    /**
     * Gets merchantInformation
     * @return \CyberSource\Model\Riskv1decisionsMerchantInformation
     */
    public function getMerchantInformation()
    {
        return $this->container['merchantInformation'];
    }

    /**
     * Sets merchantInformation
     * @param \CyberSource\Model\Riskv1decisionsMerchantInformation $merchantInformation
     * @return $this
     */
    public function setMerchantInformation($merchantInformation)
    {
        $this->container['merchantInformation'] = $merchantInformation;

        return $this;
    }

    /**
     * Gets acquirerInformation
     * @return \CyberSource\Model\Riskv1decisionsAcquirerInformation
     */
    public function getAcquirerInformation()
    {
        return $this->container['acquirerInformation'];
    }

    /**
     * Sets acquirerInformation
     * @param \CyberSource\Model\Riskv1decisionsAcquirerInformation $acquirerInformation
     * @return $this
     */
    public function setAcquirerInformation($acquirerInformation)
    {
        $this->container['acquirerInformation'] = $acquirerInformation;

        return $this;
    }

    /**
     * Gets recurringPaymentInformation
     * @return \CyberSource\Model\Ptsv2paymentsRecurringPaymentInformation
     */
    public function getRecurringPaymentInformation()
    {
        return $this->container['recurringPaymentInformation'];
    }

    /**
     * Sets recurringPaymentInformation
     * @param \CyberSource\Model\Ptsv2paymentsRecurringPaymentInformation $recurringPaymentInformation
     * @return $this
     */
    public function setRecurringPaymentInformation($recurringPaymentInformation)
    {
        $this->container['recurringPaymentInformation'] = $recurringPaymentInformation;

        return $this;
    }

    /**
     * Gets consumerAuthenticationInformation
     * @return \CyberSource\Model\Riskv1decisionsConsumerAuthenticationInformation
     */
    public function getConsumerAuthenticationInformation()
    {
        return $this->container['consumerAuthenticationInformation'];
    }

    /**
     * Sets consumerAuthenticationInformation
     * @param \CyberSource\Model\Riskv1decisionsConsumerAuthenticationInformation $consumerAuthenticationInformation
     * @return $this
     */
    public function setConsumerAuthenticationInformation($consumerAuthenticationInformation)
    {
        $this->container['consumerAuthenticationInformation'] = $consumerAuthenticationInformation;

        return $this;
    }

    /**
     * Gets riskInformation
     * @return \CyberSource\Model\Riskv1authenticationsRiskInformation
     */
    public function getRiskInformation()
    {
        return $this->container['riskInformation'];
    }

    /**
     * Sets riskInformation
     * @param \CyberSource\Model\Riskv1authenticationsRiskInformation $riskInformation
     * @return $this
     */
    public function setRiskInformation($riskInformation)
    {
        $this->container['riskInformation'] = $riskInformation;

        return $this;
    }

    /**
     * Gets travelInformation
     * @return \CyberSource\Model\Riskv1authenticationsTravelInformation
     */
    public function getTravelInformation()
    {
        return $this->container['travelInformation'];
    }

    /**
     * Sets travelInformation
     * @param \CyberSource\Model\Riskv1authenticationsTravelInformation $travelInformation
     * @return $this
     */
    public function setTravelInformation($travelInformation)
    {
        $this->container['travelInformation'] = $travelInformation;

        return $this;
    }

    /**
     * Gets merchantDefinedInformation
     * @return \CyberSource\Model\Riskv1decisionsMerchantDefinedInformation[]
     */
    public function getMerchantDefinedInformation()
    {
        return $this->container['merchantDefinedInformation'];
    }

    /**
     * Sets merchantDefinedInformation
     * @param \CyberSource\Model\Riskv1decisionsMerchantDefinedInformation[] $merchantDefinedInformation
     * @return $this
     */
    public function setMerchantDefinedInformation($merchantDefinedInformation)
    {
        $this->container['merchantDefinedInformation'] = $merchantDefinedInformation;

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


