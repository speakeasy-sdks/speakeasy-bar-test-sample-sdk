<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace speakeasy_bar-test\Risk-Cloud-API;

class SDKConfiguration
{
	public ?\GuzzleHttp\ClientInterface $defaultClient = null;
	public ?\GuzzleHttp\ClientInterface $securityClient = null;
	public ?Models\Components\Security $security = null;
	public string $serverUrl = '';
	public int $serverIndex = 0;
	public string $language = 'php';
	public string $openapiDocVersion = 'v2023.10.0';
	public string $sdkVersion = '0.1.0';
	public string $genVersion = '2.192.3';
	public string $userAgent = 'speakeasy-sdk/php 0.1.0 2.192.3 v2023.10.0 speakeasy-bar-test/risk-cloud-api';
	

	public function getServerUrl(): string
	{
		
		if ($this->serverUrl !== '') {
			return $this->serverUrl;
		};
		return RiskCloudAPI::SERVERS[$this->serverIndex];
	}
	
}