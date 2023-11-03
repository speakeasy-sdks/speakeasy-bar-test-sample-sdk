<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace speakeasy_bar-test\Risk-Cloud-API;

class Application 
{

	private SDKConfiguration $sdkConfiguration;

	/**
	 * @param SDKConfiguration $sdkConfig
	 */
	public function __construct(SDKConfiguration $sdkConfig)
	{
		$this->sdkConfiguration = $sdkConfig;
	}
	
    /**
     * Create an application
     * 
     * **Permissions:** [Build Access](https://help.logicgate.com/hc/en-us/articles/4402683190164-Control-Build-Access-for-Applications)
     * 
     * Create an application from a JSON request body.
     * 
     * @param \speakeasy_bar-test\Risk-Cloud-API\Models\Operations\CreateApplicationRequest $request
     * @return \speakeasy_bar-test\Risk-Cloud-API\Models\Operations\CreateApplicationResponse
     */
	public function create(
        \speakeasy_bar-test\Risk-Cloud-API\Models\Operations\CreateApplicationRequest $request,
    ): \speakeasy_bar-test\Risk-Cloud-API\Models\Operations\CreateApplicationResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/api/v2/applications');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "applicationApiCreateIn", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options = array_merge_recursive($options, Utils\Utils::getHeaders($request));
        if (!array_key_exists('headers', $options)) {
            $options['headers'] = [];
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \speakeasy_bar-test\Risk-Cloud-API\Models\Operations\CreateApplicationResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->applicationApiOut = $serializer->deserialize((string)$httpResponse->getBody(), 'speakeasy_bar-test\Risk-Cloud-API\Models\Shared\ApplicationApiOut', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Delete an application
     * 
     * **Permissions:** [Build Access to application](https://help.logicgate.com/hc/en-us/articles/4402683190164-Control-Build-Access-for-Applications)
     * 
     * Delete an application specified by the ID in the URL path.
     * 
     * @param \speakeasy_bar-test\Risk-Cloud-API\Models\Operations\DeleteApplicationRequest $request
     * @return \speakeasy_bar-test\Risk-Cloud-API\Models\Operations\DeleteApplicationResponse
     */
	public function delete(
        ?\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\DeleteApplicationRequest $request,
    ): \speakeasy_bar-test\Risk-Cloud-API\Models\Operations\DeleteApplicationResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/api/v2/applications/{id}', \speakeasy_bar-test\Risk-Cloud-API\Models\Operations\DeleteApplicationRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getHeaders($request));
        if (!array_key_exists('headers', $options)) {
            $options['headers'] = [];
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \speakeasy_bar-test\Risk-Cloud-API\Models\Operations\DeleteApplicationResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->appActionResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'speakeasy_bar-test\Risk-Cloud-API\Models\Shared\AppActionResponse', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Retrieve an application
     * 
     * **Permissions:** [Build Access to application](https://help.logicgate.com/hc/en-us/articles/4402683190164-Control-Build-Access-for-Applications)
     * 
     * Retrieve an application specified by the ID in the URL path.
     * 
     * @param \speakeasy_bar-test\Risk-Cloud-API\Models\Operations\ReadApplicationRequest $request
     * @return \speakeasy_bar-test\Risk-Cloud-API\Models\Operations\ReadApplicationResponse
     */
	public function read(
        ?\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\ReadApplicationRequest $request,
    ): \speakeasy_bar-test\Risk-Cloud-API\Models\Operations\ReadApplicationResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/api/v2/applications/{id}', \speakeasy_bar-test\Risk-Cloud-API\Models\Operations\ReadApplicationRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getHeaders($request));
        if (!array_key_exists('headers', $options)) {
            $options['headers'] = [];
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \speakeasy_bar-test\Risk-Cloud-API\Models\Operations\ReadApplicationResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->applicationApiOut = $serializer->deserialize((string)$httpResponse->getBody(), 'speakeasy_bar-test\Risk-Cloud-API\Models\Shared\ApplicationApiOut', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Retrieve applications
     * 
     * **Permissions:** [Build Access](https://help.logicgate.com/hc/en-us/articles/4402683190164-Control-Build-Access-for-Applications)
     * 
     * Retrieve a page of all applications that the current user has [Build Access](https://help.logicgate.com/hc/en-us/articles/4402683190164-Control-Build-Access-for-Applications) to.
     * 
     * @param \speakeasy_bar-test\Risk-Cloud-API\Models\Operations\ReadAllApplicationsRequest $request
     * @return \speakeasy_bar-test\Risk-Cloud-API\Models\Operations\ReadAllApplicationsResponse
     */
	public function readAll(
        ?\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\ReadAllApplicationsRequest $request,
    ): \speakeasy_bar-test\Risk-Cloud-API\Models\Operations\ReadAllApplicationsResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/api/v2/applications');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\ReadAllApplicationsRequest::class, $request, null));
        $options = array_merge_recursive($options, Utils\Utils::getHeaders($request));
        if (!array_key_exists('headers', $options)) {
            $options['headers'] = [];
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \speakeasy_bar-test\Risk-Cloud-API\Models\Operations\ReadAllApplicationsResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->pageModelOutApplicationApiOut = $serializer->deserialize((string)$httpResponse->getBody(), 'speakeasy_bar-test\Risk-Cloud-API\Models\Shared\PageModelOutApplicationApiOut', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Update an application
     * 
     * **Permissions:** [Build Access to application](https://help.logicgate.com/hc/en-us/articles/4402683190164-Control-Build-Access-for-Applications)
     * 
     * Update an application specified by the ID in the URL path from a JSON request body. Only present properties with non-empty values are updated.
     * 
     * @param \speakeasy_bar-test\Risk-Cloud-API\Models\Operations\Update1Request $request
     * @return \speakeasy_bar-test\Risk-Cloud-API\Models\Operations\Update1Response
     */
	public function update(
        \speakeasy_bar-test\Risk-Cloud-API\Models\Operations\Update1Request $request,
    ): \speakeasy_bar-test\Risk-Cloud-API\Models\Operations\Update1Response
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/api/v2/applications/{id}', \speakeasy_bar-test\Risk-Cloud-API\Models\Operations\Update1Request::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "applicationApiUpdateIn", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options = array_merge_recursive($options, Utils\Utils::getHeaders($request));
        if (!array_key_exists('headers', $options)) {
            $options['headers'] = [];
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PATCH', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \speakeasy_bar-test\Risk-Cloud-API\Models\Operations\Update1Response();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->applicationApiOut = $serializer->deserialize((string)$httpResponse->getBody(), 'speakeasy_bar-test\Risk-Cloud-API\Models\Shared\ApplicationApiOut', 'json');
            }
        }

        return $response;
    }
}