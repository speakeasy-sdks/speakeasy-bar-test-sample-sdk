<!-- Start SDK Example Usage -->


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
<!-- End SDK Example Usage -->