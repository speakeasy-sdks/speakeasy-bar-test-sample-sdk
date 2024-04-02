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

require 'vendor/autoload.php';

use \speakeasy_bar-test\Risk-Cloud-API;
use \speakeasy_bar-test\Risk-Cloud-API\Models\Components;
use \speakeasy_bar-test\Risk-Cloud-API\Models\Operations;

$security = new Components\Security();
$security->basic->password = '<YOUR_PASSWORD_HERE>';
$security->basic->username = '<YOUR_USERNAME_HERE>';

$sdk = Risk-Cloud-API\RiskCloudAPI::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetApiTokenRequest();;

    $response = $sdk->authentication->getApiToken($request);

    if ($response->legacyApiTokenOut !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                | Type                                                                                                                     | Required                                                                                                                 | Description                                                                                                              |
| ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                               | [\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\GetApiTokenRequest](../../Models/Operations/GetApiTokenRequest.md) | :heavy_check_mark:                                                                                                       | The request object to use for the request.                                                                               |


### Response

**[?\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\GetApiTokenResponse](../../Models/Operations/GetApiTokenResponse.md)**

