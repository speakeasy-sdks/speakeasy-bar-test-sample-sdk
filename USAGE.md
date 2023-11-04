<!-- Start SDK Example Usage -->


```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \speakeasy_bar-test\Risk-Cloud-API\RiskCloudAPI;
use \speakeasy_bar-test\Risk-Cloud-API\Models\Shared\Security;
use \speakeasy_bar-test\Risk-Cloud-API\Models\Shared\SchemeBasic;
use \speakeasy_bar-test\Risk-Cloud-API\Models\Operations\CreateApplicationRequest;
use \speakeasy_bar-test\Risk-Cloud-API\Models\Shared\ApplicationApiCreateIn;
use \speakeasy_bar-test\Risk-Cloud-API\Models\Shared\ApplicationApiCreateInIcon;
use \speakeasy_bar-test\Risk-Cloud-API\Models\Shared\ApplicationApiCreateInType;

$security = new Security();
$security->basic->password = '';
$security->basic->username = '';

$sdk = RiskCloudAPI::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreateApplicationRequest();
    $request->applicationApiCreateIn = new ApplicationApiCreateIn();
    $request->applicationApiCreateIn->color = '#00a3de';
    $request->applicationApiCreateIn->icon = ApplicationApiCreateInIcon::Cubes;
    $request->applicationApiCreateIn->name = 'Cyber Risk Management Application';
    $request->applicationApiCreateIn->type = ApplicationApiCreateInType::ControlsCompliance;

    $response = $sdk->application->create($request);

    if ($response->applicationApiOut !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
<!-- End SDK Example Usage -->