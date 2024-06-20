<?php
/**
 * PaymentInstrumentApi
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swagger Codegen team
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

namespace CyberSource\Api;

use \CyberSource\ApiClient;
use \CyberSource\ApiException;
use \CyberSource\Configuration;
use \CyberSource\ObjectSerializer;
use \CyberSource\Logging\LogFactory as LogFactory;

/**
 * PaymentInstrumentApi Class Doc Comment
 *
 * @category Class
 * @package  CyberSource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentInstrumentApi
{
    private static $logger = null;
    
    /**
     * API Client
     *
     * @var \CyberSource\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \CyberSource\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\CyberSource\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;

        if (self::$logger === null) {
            self::$logger = (new LogFactory())->getLogger(\CyberSource\Utilities\Helpers\ClassHelper::getClassName(get_class($this)), $apiClient->merchantConfig->getLogConfiguration());
        }
    }

    /**
     * Get API client
     *
     * @return \CyberSource\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \CyberSource\ApiClient $apiClient set the API client
     *
     * @return PaymentInstrumentApi
     */
    public function setApiClient(\CyberSource\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation deletePaymentInstrument
     *
     * Delete a Payment Instrument
     *
     * @param string $paymentInstrumentId The Id of a payment instrument. (required)
     * @param string $profileId The Id of a profile containing user specific TMS configuration. (optional)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of void, HTTP status code, HTTP response headers (array of strings)
     */
    public function deletePaymentInstrument($paymentInstrumentId, $profileId = null)
    {
        self::$logger->info('CALL TO METHOD deletePaymentInstrument STARTED');
        list($response, $statusCode, $httpHeader) = $this->deletePaymentInstrumentWithHttpInfo($paymentInstrumentId, $profileId);
        self::$logger->info('CALL TO METHOD deletePaymentInstrument ENDED');
        self::$logger->close();
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation deletePaymentInstrumentWithHttpInfo
     *
     * Delete a Payment Instrument
     *
     * @param string $paymentInstrumentId The Id of a payment instrument. (required)
     * @param string $profileId The Id of a profile containing user specific TMS configuration. (optional)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deletePaymentInstrumentWithHttpInfo($paymentInstrumentId, $profileId = null)
    {
        // verify the required parameter 'paymentInstrumentId' is set
        if ($paymentInstrumentId === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $paymentInstrumentId when calling deletePaymentInstrument");
            throw new \InvalidArgumentException('Missing the required parameter $paymentInstrumentId when calling deletePaymentInstrument');
        }
        // parse inputs
        $resourcePath = "/tms/v1/paymentinstruments/{paymentInstrumentId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // header params
        if ($profileId !== null) {
            $headerParams['profile-id'] = $this->apiClient->getSerializer()->toHeaderValue($profileId);
        }
        // path params
        if ($paymentInstrumentId !== null) {
            $resourcePath = str_replace(
                "{" . "paymentInstrumentId" . "}",
                $this->apiClient->getSerializer()->toPathValue($paymentInstrumentId),
                $resourcePath
            );
        }
        if ('DELETE' == 'POST') {
            $_tempBody = '{}';
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // Logging
        self::$logger->debug("Resource : DELETE $resourcePath");
        if (isset($httpBody)) {
            if ($this->apiClient->merchantConfig->getLogConfiguration()->isMaskingEnabled()) {
                $printHttpBody = \CyberSource\Utilities\Helpers\DataMasker::maskData($httpBody);
            } else {
                $printHttpBody = $httpBody;
            }
            
            self::$logger->debug("Body Parameter :\n" . $printHttpBody); 
        }

        self::$logger->debug("Return Type : null");
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/tms/v1/paymentinstruments/{paymentInstrumentId}'
            );
            
            self::$logger->debug("Response Headers :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($httpHeader));

            return [$response, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse403', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse424', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 410:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse410', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 424:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse424', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse500', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            self::$logger->error("ApiException : $e");
            throw $e;
        }
    }

    /**
     * Operation getPaymentInstrument
     *
     * Retrieve a Payment Instrument
     *
     * @param string $paymentInstrumentId The Id of a payment instrument. (required)
     * @param string $profileId The Id of a profile containing user specific TMS configuration. (optional)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\PostPaymentInstrumentRequest, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPaymentInstrument($paymentInstrumentId, $profileId = null)
    {
        self::$logger->info('CALL TO METHOD getPaymentInstrument STARTED');
        list($response, $statusCode, $httpHeader) = $this->getPaymentInstrumentWithHttpInfo($paymentInstrumentId, $profileId);
        self::$logger->info('CALL TO METHOD getPaymentInstrument ENDED');
        self::$logger->close();
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation getPaymentInstrumentWithHttpInfo
     *
     * Retrieve a Payment Instrument
     *
     * @param string $paymentInstrumentId The Id of a payment instrument. (required)
     * @param string $profileId The Id of a profile containing user specific TMS configuration. (optional)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\PostPaymentInstrumentRequest, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPaymentInstrumentWithHttpInfo($paymentInstrumentId, $profileId = null)
    {
        // verify the required parameter 'paymentInstrumentId' is set
        if ($paymentInstrumentId === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $paymentInstrumentId when calling getPaymentInstrument");
            throw new \InvalidArgumentException('Missing the required parameter $paymentInstrumentId when calling getPaymentInstrument');
        }
        // parse inputs
        $resourcePath = "/tms/v1/paymentinstruments/{paymentInstrumentId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // header params
        if ($profileId !== null) {
            $headerParams['profile-id'] = $this->apiClient->getSerializer()->toHeaderValue($profileId);
        }
        // path params
        if ($paymentInstrumentId !== null) {
            $resourcePath = str_replace(
                "{" . "paymentInstrumentId" . "}",
                $this->apiClient->getSerializer()->toPathValue($paymentInstrumentId),
                $resourcePath
            );
        }
        if ('GET' == 'POST') {
            $_tempBody = '{}';
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // Logging
        self::$logger->debug("Resource : GET $resourcePath");
        if (isset($httpBody)) {
            if ($this->apiClient->merchantConfig->getLogConfiguration()->isMaskingEnabled()) {
                $printHttpBody = \CyberSource\Utilities\Helpers\DataMasker::maskData($httpBody);
            } else {
                $printHttpBody = $httpBody;
            }
            
            self::$logger->debug("Body Parameter :\n" . $printHttpBody); 
        }

        self::$logger->debug("Return Type : \CyberSource\Model\PostPaymentInstrumentRequest");
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\PostPaymentInstrumentRequest',
                '/tms/v1/paymentinstruments/{paymentInstrumentId}'
            );
            
            self::$logger->debug("Response Headers :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($httpHeader));

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\PostPaymentInstrumentRequest', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PostPaymentInstrumentRequest', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse400', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse403', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse424', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 410:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse410', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 424:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse424', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse500', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            self::$logger->error("ApiException : $e");
            throw $e;
        }
    }

    /**
     * Operation patchPaymentInstrument
     *
     * Update a Payment Instrument
     *
     * @param string $paymentInstrumentId The Id of a payment instrument. (required)
     * @param \CyberSource\Model\PatchPaymentInstrumentRequest $patchPaymentInstrumentRequest  (required)
     * @param string $profileId The Id of a profile containing user specific TMS configuration. (optional)
     * @param string $ifMatch Contains an ETag value from a GET request to make the request conditional. (optional)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\PatchPaymentInstrumentRequest, HTTP status code, HTTP response headers (array of strings)
     */
    public function patchPaymentInstrument($paymentInstrumentId, $patchPaymentInstrumentRequest, $profileId = null, $ifMatch = null)
    {
        self::$logger->info('CALL TO METHOD patchPaymentInstrument STARTED');
        list($response, $statusCode, $httpHeader) = $this->patchPaymentInstrumentWithHttpInfo($paymentInstrumentId, $patchPaymentInstrumentRequest, $profileId, $ifMatch);
        self::$logger->info('CALL TO METHOD patchPaymentInstrument ENDED');
        self::$logger->close();
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation patchPaymentInstrumentWithHttpInfo
     *
     * Update a Payment Instrument
     *
     * @param string $paymentInstrumentId The Id of a payment instrument. (required)
     * @param \CyberSource\Model\PatchPaymentInstrumentRequest $patchPaymentInstrumentRequest  (required)
     * @param string $profileId The Id of a profile containing user specific TMS configuration. (optional)
     * @param string $ifMatch Contains an ETag value from a GET request to make the request conditional. (optional)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\PatchPaymentInstrumentRequest, HTTP status code, HTTP response headers (array of strings)
     */
    public function patchPaymentInstrumentWithHttpInfo($paymentInstrumentId, $patchPaymentInstrumentRequest, $profileId = null, $ifMatch = null)
    {
        // verify the required parameter 'paymentInstrumentId' is set
        if ($paymentInstrumentId === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $paymentInstrumentId when calling patchPaymentInstrument");
            throw new \InvalidArgumentException('Missing the required parameter $paymentInstrumentId when calling patchPaymentInstrument');
        }
        // verify the required parameter 'patchPaymentInstrumentRequest' is set
        if ($patchPaymentInstrumentRequest === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $patchPaymentInstrumentRequest when calling patchPaymentInstrument");
            throw new \InvalidArgumentException('Missing the required parameter $patchPaymentInstrumentRequest when calling patchPaymentInstrument');
        }
        // parse inputs
        $resourcePath = "/tms/v1/paymentinstruments/{paymentInstrumentId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // header params
        if ($profileId !== null) {
            $headerParams['profile-id'] = $this->apiClient->getSerializer()->toHeaderValue($profileId);
        }
        // header params
        if ($ifMatch !== null) {
            $headerParams['if-match'] = $this->apiClient->getSerializer()->toHeaderValue($ifMatch);
        }
        // path params
        if ($paymentInstrumentId !== null) {
            $resourcePath = str_replace(
                "{" . "paymentInstrumentId" . "}",
                $this->apiClient->getSerializer()->toPathValue($paymentInstrumentId),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($patchPaymentInstrumentRequest)) {
            $_tempBody = $patchPaymentInstrumentRequest;
        }
        
        $sdkTracker = new \CyberSource\Utilities\Tracking\SdkTracker();
        $modelClassLocation = explode('\\', '\CyberSource\Model\PatchPaymentInstrumentRequest');

        $_tempBody = $sdkTracker->insertDeveloperIdTracker($_tempBody, end($modelClassLocation), $this->apiClient->merchantConfig->getRunEnvironment());

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // Logging
        self::$logger->debug("Resource : PATCH $resourcePath");
        if (isset($httpBody)) {
            if ($this->apiClient->merchantConfig->getLogConfiguration()->isMaskingEnabled()) {
                $printHttpBody = \CyberSource\Utilities\Helpers\DataMasker::maskData($httpBody);
            } else {
                $printHttpBody = $httpBody;
            }
            
            self::$logger->debug("Body Parameter :\n" . $printHttpBody); 
        }

        self::$logger->debug("Return Type : \CyberSource\Model\PatchPaymentInstrumentRequest");
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PATCH',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\PatchPaymentInstrumentRequest',
                '/tms/v1/paymentinstruments/{paymentInstrumentId}'
            );
            
            self::$logger->debug("Response Headers :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($httpHeader));

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\PatchPaymentInstrumentRequest', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PatchPaymentInstrumentRequest', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse400', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse403', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse424', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 410:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse410', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 412:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse412', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 424:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse424', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse500', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            self::$logger->error("ApiException : $e");
            throw $e;
        }
    }

    /**
     * Operation postPaymentInstrument
     *
     * Create a Payment Instrument
     *
     * @param \CyberSource\Model\PostPaymentInstrumentRequest $postPaymentInstrumentRequest  (required)
     * @param string $profileId The Id of a profile containing user specific TMS configuration. (optional)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\PostPaymentInstrumentRequest, HTTP status code, HTTP response headers (array of strings)
     */
    public function postPaymentInstrument($postPaymentInstrumentRequest, $profileId = null)
    {
        self::$logger->info('CALL TO METHOD postPaymentInstrument STARTED');
        list($response, $statusCode, $httpHeader) = $this->postPaymentInstrumentWithHttpInfo($postPaymentInstrumentRequest, $profileId);
        self::$logger->info('CALL TO METHOD postPaymentInstrument ENDED');
        self::$logger->close();
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation postPaymentInstrumentWithHttpInfo
     *
     * Create a Payment Instrument
     *
     * @param \CyberSource\Model\PostPaymentInstrumentRequest $postPaymentInstrumentRequest  (required)
     * @param string $profileId The Id of a profile containing user specific TMS configuration. (optional)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\PostPaymentInstrumentRequest, HTTP status code, HTTP response headers (array of strings)
     */
    public function postPaymentInstrumentWithHttpInfo($postPaymentInstrumentRequest, $profileId = null)
    {
        // verify the required parameter 'postPaymentInstrumentRequest' is set
        if ($postPaymentInstrumentRequest === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $postPaymentInstrumentRequest when calling postPaymentInstrument");
            throw new \InvalidArgumentException('Missing the required parameter $postPaymentInstrumentRequest when calling postPaymentInstrument');
        }
        // parse inputs
        $resourcePath = "/tms/v1/paymentinstruments";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // header params
        if ($profileId !== null) {
            $headerParams['profile-id'] = $this->apiClient->getSerializer()->toHeaderValue($profileId);
        }
        // body params
        $_tempBody = null;
        if (isset($postPaymentInstrumentRequest)) {
            $_tempBody = $postPaymentInstrumentRequest;
        }
        
        $sdkTracker = new \CyberSource\Utilities\Tracking\SdkTracker();
        $modelClassLocation = explode('\\', '\CyberSource\Model\PostPaymentInstrumentRequest');

        $_tempBody = $sdkTracker->insertDeveloperIdTracker($_tempBody, end($modelClassLocation), $this->apiClient->merchantConfig->getRunEnvironment());

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // Logging
        self::$logger->debug("Resource : POST $resourcePath");
        if (isset($httpBody)) {
            if ($this->apiClient->merchantConfig->getLogConfiguration()->isMaskingEnabled()) {
                $printHttpBody = \CyberSource\Utilities\Helpers\DataMasker::maskData($httpBody);
            } else {
                $printHttpBody = $httpBody;
            }
            
            self::$logger->debug("Body Parameter :\n" . $printHttpBody); 
        }

        self::$logger->debug("Return Type : \CyberSource\Model\PostPaymentInstrumentRequest");
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\PostPaymentInstrumentRequest',
                '/tms/v1/paymentinstruments'
            );
            
            self::$logger->debug("Response Headers :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($httpHeader));

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\PostPaymentInstrumentRequest', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PostPaymentInstrumentRequest', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse400', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse403', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse409', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 424:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse424', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse500', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            self::$logger->error("ApiException : $e");
            throw $e;
        }
    }
}
