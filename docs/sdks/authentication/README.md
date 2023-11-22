# Authentication


## Overview

Getting Started: How to create an [API Access Token](https://www.logicgate.com/developer/risk-cloud-api-authentication/) to begin integrating with the Risk Cloud API

### Available Operations

* [getApiToken](#getapitoken) - Create an API Access Token

## getApiToken

**Permissions:** Authenticated User

Generates a new, expiring access token from the provided Client and Secret keys.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \speakeasy_bar-test\Risk-Cloud-API;
use \speakeasy_bar-test\Risk-Cloud-API\Models\Components;
use \speakeasy_bar-test\Risk-Cloud-API\Models\Operations;

$sdk = Risk-Cloud-API\RiskCloudAPI::builder()
    ->build();

try {
    $request = new Operations\GetApiTokenRequest();

    $requestSecurity = new Operations\GetApiTokenSecurity();
    $requestSecurity->password = '';
    $requestSecurity->username = '';

    $response = $sdk->authentication->getApiToken($request, $requestSecurity);

    if ($response->legacyApiTokenOut !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                  | Type                                                                                                                       | Required                                                                                                                   | Description                                                                                                                |
| -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                 | [\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\GetApiTokenRequest](../../Models/Operations/GetApiTokenRequest.md)   | :heavy_check_mark:                                                                                                         | The request object to use for the request.                                                                                 |
| `security`                                                                                                                 | [\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\GetApiTokenSecurity](../../Models/Operations/GetApiTokenSecurity.md) | :heavy_check_mark:                                                                                                         | The security requirements to use for the request.                                                                          |


### Response

**[?\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\GetApiTokenResponse](../../Models/Operations/GetApiTokenResponse.md)**

