<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace speakeasy_bar-test\Risk-Cloud-API;

class Record 
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
     * Retrieve records
     * 
     * **Permissions:** Authenticated User
     * 
     * Retrieve a page of all records that the current user has [Read or Write access](https://help.logicgate.com/hc/en-us/articles/4402683227156-Permission-Sets-) to.
     * 
     * @param \speakeasy_bar-test\Risk-Cloud-API\Models\Operations\ReadAllRecordsRequest $request
     * @return \speakeasy_bar-test\Risk-Cloud-API\Models\Operations\ReadAllRecordsResponse
     */
	public function readAll(
        ?\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\ReadAllRecordsRequest $request,
    ): \speakeasy_bar-test\Risk-Cloud-API\Models\Operations\ReadAllRecordsResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/api/v2/records');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\ReadAllRecordsRequest::class, $request, null));
        $options = array_merge_recursive($options, Utils\Utils::getHeaders($request));
        if (!array_key_exists('headers', $options)) {
            $options['headers'] = [];
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \speakeasy_bar-test\Risk-Cloud-API\Models\Operations\ReadAllRecordsResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->pageModelOutRecordApiOut = $serializer->deserialize((string)$httpResponse->getBody(), 'speakeasy_bar-test\Risk-Cloud-API\Models\Shared\PageModelOutRecordApiOut', 'json');
            }
        }

        return $response;
    }
}