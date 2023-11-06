# Authentication
(*authentication*)

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

use \speakeasy_bar-test\Risk-Cloud-API\RiskCloudAPI;
use \speakeasy_bar-test\Risk-Cloud-API\Models\Shared\Security;
use \speakeasy_bar-test\Risk-Cloud-API\Models\Shared\SchemeBasic;
use \speakeasy_bar-test\Risk-Cloud-API\Models\Operations\GetApiTokenRequest;
use \speakeasy_bar-test\Risk-Cloud-API\Models\Operations\GetApiTokenSecurity;

$sdk = RiskCloudAPI::builder()
    ->build();

try {
    $request = new GetApiTokenRequest();

    $requestSecurity = new GetApiTokenSecurity();
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
| `$request`                                                                                                                 | [\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\GetApiTokenRequest](../../models/operations/GetApiTokenRequest.md)   | :heavy_check_mark:                                                                                                         | The request object to use for the request.                                                                                 |
| `security`                                                                                                                 | [\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\GetApiTokenSecurity](../../models/operations/GetApiTokenSecurity.md) | :heavy_check_mark:                                                                                                         | The security requirements to use for the request.                                                                          |


### Response

**[?\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\GetApiTokenResponse](../../models/operations/GetApiTokenResponse.md)**

