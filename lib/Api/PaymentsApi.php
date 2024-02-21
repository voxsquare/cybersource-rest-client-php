<?php
/**
 * PaymentsApi
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
 * PaymentsApi Class Doc Comment
 *
 * @category Class
 * @package  CyberSource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentsApi
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
            self::$logger = (new LogFactory())->getLogger(\CyberSource\Utilities\Helpers\ClassHelper::getClassName(get_class()), $apiClient->merchantConfig->getLogConfiguration());
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
     * @return PaymentsApi
     */
    public function setApiClient(\CyberSource\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createPayment
     *
     * Process a Payment
     *
     * @param \CyberSource\Model\CreatePaymentRequest $createPaymentRequest  (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\PtsV2PaymentsPost201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function createPayment($createPaymentRequest)
    {
        self::$logger->info('CALL TO METHOD createPayment STARTED');
        list($response, $statusCode, $httpHeader) = $this->createPaymentWithHttpInfo($createPaymentRequest);
        self::$logger->info('CALL TO METHOD createPayment ENDED');
        self::$logger->close();
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation createPaymentWithHttpInfo
     *
     * Process a Payment
     *
     * @param \CyberSource\Model\CreatePaymentRequest $createPaymentRequest  (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\PtsV2PaymentsPost201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function createPaymentWithHttpInfo($createPaymentRequest)
    {
        // verify the required parameter 'createPaymentRequest' is set
        if ($createPaymentRequest === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $createPaymentRequest when calling createPayment");
            throw new \InvalidArgumentException('Missing the required parameter $createPaymentRequest when calling createPayment');
        }
        // parse inputs
        $resourcePath = "/pts/v2/payments";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/hal+json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // body params
        $_tempBody = null;
        if (isset($createPaymentRequest)) {
            $_tempBody = $createPaymentRequest;
        }
        
        $sdkTracker = new \CyberSource\Utilities\Tracking\SdkTracker();
        $modelClassLocation = explode('\\', '\CyberSource\Model\CreatePaymentRequest');

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

        self::$logger->debug("Return Type : \CyberSource\Model\PtsV2PaymentsPost201Response");
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\PtsV2PaymentsPost201Response',
                '/pts/v2/payments'
            );
            
            self::$logger->debug("Response Headers :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($httpHeader));

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\PtsV2PaymentsPost201Response', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PtsV2PaymentsPost201Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PtsV2PaymentsPost400Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PtsV2PaymentsPost502Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            self::$logger->error("ApiException : $e");
            throw $e;
        }
    }

    /**
     * Operation incrementAuth
     *
     * Increment an Authorization
     *
     * @param string $id The ID returned from the original authorization request. (required)
     * @param \CyberSource\Model\IncrementAuthRequest $incrementAuthRequest  (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\PtsV2IncrementalAuthorizationPatch201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function incrementAuth($id, $incrementAuthRequest)
    {
        self::$logger->info('CALL TO METHOD incrementAuth STARTED');
        list($response, $statusCode, $httpHeader) = $this->incrementAuthWithHttpInfo($id, $incrementAuthRequest);
        self::$logger->info('CALL TO METHOD incrementAuth ENDED');
        self::$logger->close();
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation incrementAuthWithHttpInfo
     *
     * Increment an Authorization
     *
     * @param string $id The ID returned from the original authorization request. (required)
     * @param \CyberSource\Model\IncrementAuthRequest $incrementAuthRequest  (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\PtsV2IncrementalAuthorizationPatch201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function incrementAuthWithHttpInfo($id, $incrementAuthRequest)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $id when calling incrementAuth");
            throw new \InvalidArgumentException('Missing the required parameter $id when calling incrementAuth');
        }
        // verify the required parameter 'incrementAuthRequest' is set
        if ($incrementAuthRequest === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $incrementAuthRequest when calling incrementAuth");
            throw new \InvalidArgumentException('Missing the required parameter $incrementAuthRequest when calling incrementAuth');
        }
        // parse inputs
        $resourcePath = "/pts/v2/payments/{id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/hal+json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($incrementAuthRequest)) {
            $_tempBody = $incrementAuthRequest;
        }
        
        $sdkTracker = new \CyberSource\Utilities\Tracking\SdkTracker();
        $modelClassLocation = explode('\\', '\CyberSource\Model\IncrementAuthRequest');

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

        self::$logger->debug("Return Type : \CyberSource\Model\PtsV2IncrementalAuthorizationPatch201Response");
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PATCH',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\PtsV2IncrementalAuthorizationPatch201Response',
                '/pts/v2/payments/{id}'
            );
            
            self::$logger->debug("Response Headers :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($httpHeader));

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\PtsV2IncrementalAuthorizationPatch201Response', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PtsV2IncrementalAuthorizationPatch201Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PtsV2IncrementalAuthorizationPatch400Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PtsV2PaymentsPost502Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            self::$logger->error("ApiException : $e");
            throw $e;
        }
    }

    /**
     * Operation refreshPaymentStatus
     *
     * Check a Payment Status
     *
     * @param string $id The payment id whose status needs to be checked and updated. (required)
     * @param \CyberSource\Model\RefreshPaymentStatusRequest $refreshPaymentStatusRequest  (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\PtsV2PaymentsPost201Response1, HTTP status code, HTTP response headers (array of strings)
     */
    public function refreshPaymentStatus($id, $refreshPaymentStatusRequest)
    {
        self::$logger->info('CALL TO METHOD refreshPaymentStatus STARTED');
        list($response, $statusCode, $httpHeader) = $this->refreshPaymentStatusWithHttpInfo($id, $refreshPaymentStatusRequest);
        self::$logger->info('CALL TO METHOD refreshPaymentStatus ENDED');
        self::$logger->close();
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation refreshPaymentStatusWithHttpInfo
     *
     * Check a Payment Status
     *
     * @param string $id The payment id whose status needs to be checked and updated. (required)
     * @param \CyberSource\Model\RefreshPaymentStatusRequest $refreshPaymentStatusRequest  (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\PtsV2PaymentsPost201Response1, HTTP status code, HTTP response headers (array of strings)
     */
    public function refreshPaymentStatusWithHttpInfo($id, $refreshPaymentStatusRequest)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $id when calling refreshPaymentStatus");
            throw new \InvalidArgumentException('Missing the required parameter $id when calling refreshPaymentStatus');
        }
        // verify the required parameter 'refreshPaymentStatusRequest' is set
        if ($refreshPaymentStatusRequest === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $refreshPaymentStatusRequest when calling refreshPaymentStatus");
            throw new \InvalidArgumentException('Missing the required parameter $refreshPaymentStatusRequest when calling refreshPaymentStatus');
        }
        // parse inputs
        $resourcePath = "/pts/v2/refresh-payment-status/{id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/hal+json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($refreshPaymentStatusRequest)) {
            $_tempBody = $refreshPaymentStatusRequest;
        }
        
        $sdkTracker = new \CyberSource\Utilities\Tracking\SdkTracker();
        $modelClassLocation = explode('\\', '\CyberSource\Model\RefreshPaymentStatusRequest');

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

        self::$logger->debug("Return Type : \CyberSource\Model\PtsV2PaymentsPost201Response1");
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\PtsV2PaymentsPost201Response1',
                '/pts/v2/refresh-payment-status/{id}'
            );
            
            self::$logger->debug("Response Headers :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($httpHeader));

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\PtsV2PaymentsPost201Response1', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PtsV2PaymentsPost201Response1', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PtsV2PaymentsPost400Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PtsV2PaymentsPost502Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            self::$logger->error("ApiException : $e");
            throw $e;
        }
    }
}
