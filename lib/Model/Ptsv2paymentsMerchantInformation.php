<?php
/**
 * Ptsv2paymentsMerchantInformation
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
 * Ptsv2paymentsMerchantInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ptsv2paymentsMerchantInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsv2payments_merchantInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'merchantDescriptor' => '\CyberSource\Model\Ptsv2paymentsMerchantInformationMerchantDescriptor',
        'domainName' => 'string',
        'salesOrganizationId' => 'string',
        'categoryCode' => 'int',
        'categoryCodeDomestic' => 'int',
        'taxId' => 'string',
        'vatRegistrationNumber' => 'string',
        'cardAcceptorReferenceNumber' => 'string',
        'transactionLocalDateTime' => 'string',
        'serviceFeeDescriptor' => '\CyberSource\Model\Ptsv2paymentsMerchantInformationServiceFeeDescriptor',
        'cancelUrl' => 'string',
        'successUrl' => 'string',
        'failureUrl' => 'string',
        'merchantName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'merchantDescriptor' => null,
        'domainName' => null,
        'salesOrganizationId' => null,
        'categoryCode' => null,
        'categoryCodeDomestic' => null,
        'taxId' => null,
        'vatRegistrationNumber' => null,
        'cardAcceptorReferenceNumber' => null,
        'transactionLocalDateTime' => null,
        'serviceFeeDescriptor' => null,
        'cancelUrl' => null,
        'successUrl' => null,
        'failureUrl' => null,
        'merchantName' => null
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
        'merchantDescriptor' => 'merchantDescriptor',
        'domainName' => 'domainName',
        'salesOrganizationId' => 'salesOrganizationId',
        'categoryCode' => 'categoryCode',
        'categoryCodeDomestic' => 'categoryCodeDomestic',
        'taxId' => 'taxId',
        'vatRegistrationNumber' => 'vatRegistrationNumber',
        'cardAcceptorReferenceNumber' => 'cardAcceptorReferenceNumber',
        'transactionLocalDateTime' => 'transactionLocalDateTime',
        'serviceFeeDescriptor' => 'serviceFeeDescriptor',
        'cancelUrl' => 'cancelUrl',
        'successUrl' => 'successUrl',
        'failureUrl' => 'failureUrl',
        'merchantName' => 'merchantName'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'merchantDescriptor' => 'setMerchantDescriptor',
        'domainName' => 'setDomainName',
        'salesOrganizationId' => 'setSalesOrganizationId',
        'categoryCode' => 'setCategoryCode',
        'categoryCodeDomestic' => 'setCategoryCodeDomestic',
        'taxId' => 'setTaxId',
        'vatRegistrationNumber' => 'setVatRegistrationNumber',
        'cardAcceptorReferenceNumber' => 'setCardAcceptorReferenceNumber',
        'transactionLocalDateTime' => 'setTransactionLocalDateTime',
        'serviceFeeDescriptor' => 'setServiceFeeDescriptor',
        'cancelUrl' => 'setCancelUrl',
        'successUrl' => 'setSuccessUrl',
        'failureUrl' => 'setFailureUrl',
        'merchantName' => 'setMerchantName'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'merchantDescriptor' => 'getMerchantDescriptor',
        'domainName' => 'getDomainName',
        'salesOrganizationId' => 'getSalesOrganizationId',
        'categoryCode' => 'getCategoryCode',
        'categoryCodeDomestic' => 'getCategoryCodeDomestic',
        'taxId' => 'getTaxId',
        'vatRegistrationNumber' => 'getVatRegistrationNumber',
        'cardAcceptorReferenceNumber' => 'getCardAcceptorReferenceNumber',
        'transactionLocalDateTime' => 'getTransactionLocalDateTime',
        'serviceFeeDescriptor' => 'getServiceFeeDescriptor',
        'cancelUrl' => 'getCancelUrl',
        'successUrl' => 'getSuccessUrl',
        'failureUrl' => 'getFailureUrl',
        'merchantName' => 'getMerchantName'
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
        $this->container['merchantDescriptor'] = isset($data['merchantDescriptor']) ? $data['merchantDescriptor'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['salesOrganizationId'] = isset($data['salesOrganizationId']) ? $data['salesOrganizationId'] : null;
        $this->container['categoryCode'] = isset($data['categoryCode']) ? $data['categoryCode'] : null;
        $this->container['categoryCodeDomestic'] = isset($data['categoryCodeDomestic']) ? $data['categoryCodeDomestic'] : null;
        $this->container['taxId'] = isset($data['taxId']) ? $data['taxId'] : null;
        $this->container['vatRegistrationNumber'] = isset($data['vatRegistrationNumber']) ? $data['vatRegistrationNumber'] : null;
        $this->container['cardAcceptorReferenceNumber'] = isset($data['cardAcceptorReferenceNumber']) ? $data['cardAcceptorReferenceNumber'] : null;
        $this->container['transactionLocalDateTime'] = isset($data['transactionLocalDateTime']) ? $data['transactionLocalDateTime'] : null;
        $this->container['serviceFeeDescriptor'] = isset($data['serviceFeeDescriptor']) ? $data['serviceFeeDescriptor'] : null;
        $this->container['cancelUrl'] = isset($data['cancelUrl']) ? $data['cancelUrl'] : null;
        $this->container['successUrl'] = isset($data['successUrl']) ? $data['successUrl'] : null;
        $this->container['failureUrl'] = isset($data['failureUrl']) ? $data['failureUrl'] : null;
        $this->container['merchantName'] = isset($data['merchantName']) ? $data['merchantName'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['categoryCode']) && ($this->container['categoryCode'] > 9999)) {
            $invalid_properties[] = "invalid value for 'categoryCode', must be smaller than or equal to 9999.";
        }

        if (!is_null($this->container['categoryCodeDomestic']) && ($this->container['categoryCodeDomestic'] > 9999)) {
            $invalid_properties[] = "invalid value for 'categoryCodeDomestic', must be smaller than or equal to 9999.";
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

        if ($this->container['categoryCode'] > 9999) {
            return false;
        }
        if ($this->container['categoryCodeDomestic'] > 9999) {
            return false;
        }
        return true;
    }


    /**
     * Gets merchantDescriptor
     * @return \CyberSource\Model\Ptsv2paymentsMerchantInformationMerchantDescriptor
     */
    public function getMerchantDescriptor()
    {
        return $this->container['merchantDescriptor'];
    }

    /**
     * Sets merchantDescriptor
     * @param \CyberSource\Model\Ptsv2paymentsMerchantInformationMerchantDescriptor $merchantDescriptor
     * @return $this
     */
    public function setMerchantDescriptor($merchantDescriptor)
    {
        $this->container['merchantDescriptor'] = $merchantDescriptor;

        return $this;
    }

    /**
     * Gets domainName
     * @return string
     */
    public function getDomainName()
    {
        return $this->container['domainName'];
    }

    /**
     * Sets domainName
     * @param string $domainName This field will contain either the merchant url or the reverse domain as per the requirement for DSRP Format 3. This might vary transaction to transaction and might not be static. Merchant needs to have access to send this value for all DSRP program.
     * @return $this
     */
    public function setDomainName($domainName)
    {

        $this->container['domainName'] = $domainName;

        return $this;
    }

    /**
     * Gets salesOrganizationId
     * @return string
     */
    public function getSalesOrganizationId()
    {
        return $this->container['salesOrganizationId'];
    }

    /**
     * Sets salesOrganizationId
     * @param string $salesOrganizationId Company ID assigned to an independent sales organization. Get this value from Mastercard.  #### CyberSource through VisaNet The value for this field corresponds to the following data in the TC 33 capture file: - Record: CP01 TCR6 - Position: 106-116 - Field: Mastercard Independent Sales Organization ID  **Note** The TC 33 Capture file contains information about the purchases and refunds that a merchant submits to CyberSource. CyberSource through VisaNet creates the TC 33 Capture file at the end of the day and sends it to the merchant’s acquirer, who uses this information to facilitate end-of-day clearing processing with payment card companies.  For processor-specific information, see the `sales_organization_ID` field description in [Credit Card Services Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html)
     * @return $this
     */
    public function setSalesOrganizationId($salesOrganizationId)
    {

        $this->container['salesOrganizationId'] = $salesOrganizationId;

        return $this;
    }

    /**
     * Gets categoryCode
     * @return int
     */
    public function getCategoryCode()
    {
        return $this->container['categoryCode'];
    }

    /**
     * Sets categoryCode
     * @param int $categoryCode The value for this field is a four-digit number that the payment card industry uses to classify merchants into market segments. A payment card company assigned one or more of these values to your business when you started accepting the payment card company’s cards. When you do not include this field in your request, CyberSource uses the value in your CyberSource account.  For processor-specific information, see the `merchant_category_code` field description in [Credit Card Services Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html)  #### CyberSource through VisaNet The value for this field corresponds to the following data in the TC 33 capture file5: - Record: CP01 TCR4 - Position: 150-153 - Field: Merchant Category Code
     * @return $this
     */
    public function setCategoryCode($categoryCode)
    {
        if (!is_null($categoryCode) && ($categoryCode > 9999)) {
            throw new \InvalidArgumentException('invalid value for $categoryCode when calling Ptsv2paymentsMerchantInformation., must be smaller than or equal to 9999.');
        }

        $this->container['categoryCode'] = $categoryCode;

        return $this;
    }

    /**
     * Gets categoryCodeDomestic
     * @return int
     */
    public function getCategoryCodeDomestic()
    {
        return $this->container['categoryCodeDomestic'];
    }

    /**
     * Sets categoryCodeDomestic
     * @param int $categoryCodeDomestic Merchant category code for domestic transactions. The value for this field is a four-digit number that the payment card industry uses to classify merchants into market segments. A payment card company assigned one or more of these values to your business when you started accepting the payment card company’s cards. Including this field in a request for a domestic transaction might reduce interchange fees.  When you include this field in a request: - Do not include the `merchant_category_code` field. - The value for this field overrides the value in your CyberSource account.  This field is supported only for: - Domestic transactions with Mastercard in Spain. Domestic means that you and the cardholder are in the same country. - Merchants enrolled in the OmniPay Direct interchange program. - First Data Merchant Solutions (Europe) on OmniPay Direct.
     * @return $this
     */
    public function setCategoryCodeDomestic($categoryCodeDomestic)
    {
        if (!is_null($categoryCodeDomestic) && ($categoryCodeDomestic > 9999)) {
            throw new \InvalidArgumentException('invalid value for $categoryCodeDomestic when calling Ptsv2paymentsMerchantInformation., must be smaller than or equal to 9999.');
        }

        $this->container['categoryCodeDomestic'] = $categoryCodeDomestic;

        return $this;
    }

    /**
     * Gets taxId
     * @return string
     */
    public function getTaxId()
    {
        return $this->container['taxId'];
    }

    /**
     * Sets taxId
     * @param string $taxId Your Cadastro Nacional da Pessoa Jurídica (CNPJ) number.  This field is supported only for BNDES transactions on CyberSource through VisaNet.  The value for this field corresponds to the following data in the TC 33 capture file5: - Record: CP07 TCR6 - Position: 40-59 - Field: BNDES Reference Field 1  For details, see `bill_merchant_tax_id` field description in the [Credit Card Services Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/)
     * @return $this
     */
    public function setTaxId($taxId)
    {

        $this->container['taxId'] = $taxId;

        return $this;
    }

    /**
     * Gets vatRegistrationNumber
     * @return string
     */
    public function getVatRegistrationNumber()
    {
        return $this->container['vatRegistrationNumber'];
    }

    /**
     * Sets vatRegistrationNumber
     * @param string $vatRegistrationNumber Your government-assigned tax identification number.  #### Tax Calculation Required field for value added tax only. Not applicable to U.S. and Canadian taxes.  #### CyberSource through VisaNet For CtV processors, the maximum length is 20.  For other processor-specific information, see the `merchant_vat_registration_number` field description in [Level II and Level III Processing Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/Level_2_3_SCMP_API/html)
     * @return $this
     */
    public function setVatRegistrationNumber($vatRegistrationNumber)
    {

        $this->container['vatRegistrationNumber'] = $vatRegistrationNumber;

        return $this;
    }

    /**
     * Gets cardAcceptorReferenceNumber
     * @return string
     */
    public function getCardAcceptorReferenceNumber()
    {
        return $this->container['cardAcceptorReferenceNumber'];
    }

    /**
     * Sets cardAcceptorReferenceNumber
     * @param string $cardAcceptorReferenceNumber Reference number that facilitates card acceptor/corporation communication and record keeping.  For processor-specific information, see the `card_acceptor_ref_number` field description in [Level II and Level III Processing Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/Level_2_3_SCMP_API/html)
     * @return $this
     */
    public function setCardAcceptorReferenceNumber($cardAcceptorReferenceNumber)
    {

        $this->container['cardAcceptorReferenceNumber'] = $cardAcceptorReferenceNumber;

        return $this;
    }

    /**
     * Gets transactionLocalDateTime
     * @return string
     */
    public function getTransactionLocalDateTime()
    {
        return $this->container['transactionLocalDateTime'];
    }

    /**
     * Sets transactionLocalDateTime
     * @param string $transactionLocalDateTime Date and time at your physical location.  Format: `YYYYMMDDhhmmss`, where:  - `YYYY` = year  - `MM` = month  - `DD` = day  - `hh` = hour  - `mm` = minutes  - `ss` = seconds  #### Used by **Authorization** Required for these processors: - American Express Direct                                                                                                                                                                                                                                                                                                                         - American Express Direct - Credit Mutuel-CIC - FDC Nashville Global - SIX  Optional for all other processors.
     * @return $this
     */
    public function setTransactionLocalDateTime($transactionLocalDateTime)
    {

        $this->container['transactionLocalDateTime'] = $transactionLocalDateTime;

        return $this;
    }

    /**
     * Gets serviceFeeDescriptor
     * @return \CyberSource\Model\Ptsv2paymentsMerchantInformationServiceFeeDescriptor
     */
    public function getServiceFeeDescriptor()
    {
        return $this->container['serviceFeeDescriptor'];
    }

    /**
     * Sets serviceFeeDescriptor
     * @param \CyberSource\Model\Ptsv2paymentsMerchantInformationServiceFeeDescriptor $serviceFeeDescriptor
     * @return $this
     */
    public function setServiceFeeDescriptor($serviceFeeDescriptor)
    {
        $this->container['serviceFeeDescriptor'] = $serviceFeeDescriptor;

        return $this;
    }

    /**
     * Gets cancelUrl
     * @return string
     */
    public function getCancelUrl()
    {
        return $this->container['cancelUrl'];
    }

    /**
     * Sets cancelUrl
     * @param string $cancelUrl customer would be redirected to this url based on the decision of the transaction
     * @return $this
     */
    public function setCancelUrl($cancelUrl)
    {

        $this->container['cancelUrl'] = $cancelUrl;

        return $this;
    }

    /**
     * Gets successUrl
     * @return string
     */
    public function getSuccessUrl()
    {
        return $this->container['successUrl'];
    }

    /**
     * Sets successUrl
     * @param string $successUrl customer would be redirected to this url based on the decision of the transaction
     * @return $this
     */
    public function setSuccessUrl($successUrl)
    {

        $this->container['successUrl'] = $successUrl;

        return $this;
    }

    /**
     * Gets failureUrl
     * @return string
     */
    public function getFailureUrl()
    {
        return $this->container['failureUrl'];
    }

    /**
     * Sets failureUrl
     * @param string $failureUrl customer would be redirected to this url based on the decision of the transaction
     * @return $this
     */
    public function setFailureUrl($failureUrl)
    {

        $this->container['failureUrl'] = $failureUrl;

        return $this;
    }

    /**
     * Gets merchantName
     * @return string
     */
    public function getMerchantName()
    {
        return $this->container['merchantName'];
    }

    /**
     * Sets merchantName
     * @param string $merchantName Use this field only if you are requesting payment with Payer Authentication service together.  Your company’s name as you want it to appear to the customer in the issuing bank’s authentication form. This value overrides the value specified by your merchant bank.
     * @return $this
     */
    public function setMerchantName($merchantName)
    {

        $this->container['merchantName'] = $merchantName;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
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


