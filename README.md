# speakeasy-bar-test/risk-cloud-api

<div align="left">
    <a href="https://speakeasyapi.dev/"><img src="https://custom-icon-badges.demolab.com/badge/-Built%20By%20Speakeasy-212015?style=for-the-badge&logoColor=FBE331&logo=speakeasy&labelColor=545454" /></a>
    <a href="https://github.com/speakeasy-sdks/speakeasy-bar-test-sample-sdk.git/actions"><img src="https://img.shields.io/github/actions/workflow/status/speakeasy-sdks/speakeasy-bar-test-sample-sdk/speakeasy_sdk_generation.yml?style=for-the-badge" /></a>
    
</div>


## 🏗 **Welcome to your new SDK!** 🏗

It has been generated successfully based on your OpenAPI spec. However, it is not yet ready for production use. Here are some next steps:
- [ ] 🛠 Make your SDK feel handcrafted by [customizing it](https://www.speakeasyapi.dev/docs/customize-sdks)
- [ ] ♻️ Refine your SDK quickly by iterating locally with the [Speakeasy CLI](https://github.com/speakeasy-api/speakeasy)
- [ ] 🎁 Publish your SDK to package managers by [configuring automatic publishing](https://www.speakeasyapi.dev/docs/productionize-sdks/publish-sdks)
- [ ] ✨ When ready to productionize, delete this section from the README
<!-- Start SDK Installation -->
# SDK Installation

## Composer

To install the SDK first add the below to your `composer.json` file:

```json
{
    "repositories": [
        {
            "type": "github",
            "url": "https://github.com/speakeasy-sdks/speakeasy-bar-test-sample-sdk.git"
        }
    ],
    "require": {
        "speakeasy-bar-test/risk-cloud-api": "*"
    }
}
```

Then run the following command:

```bash
composer update
```
<!-- End SDK Installation -->

## SDK Example Usage
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

<!-- Start SDK Available Operations -->
# Available Resources and Operations


## [application](docs/sdks/application/README.md)

* [create](docs/sdks/application/README.md#create) - Create an application
* [delete](docs/sdks/application/README.md#delete) - Delete an application
* [read](docs/sdks/application/README.md#read) - Retrieve an application
* [readAll](docs/sdks/application/README.md#readall) - Retrieve applications
* [update](docs/sdks/application/README.md#update) - Update an application

## [authentication](docs/sdks/authentication/README.md)

* [getApiToken](docs/sdks/authentication/README.md#getapitoken) - Create an API Access Token

## [field](docs/sdks/field/README.md)

* [readAll](docs/sdks/field/README.md#readall) - Retrieve fields

## [record](docs/sdks/record/README.md)

* [readAll](docs/sdks/record/README.md#readall) - Retrieve records

## [step](docs/sdks/step/README.md)

* [create](docs/sdks/step/README.md#create) - Create a step
* [delete](docs/sdks/step/README.md#delete) - Delete a step
* [read](docs/sdks/step/README.md#read) - Retrieve a step
* [readAll](docs/sdks/step/README.md#readall) - Retrieve steps
* [update](docs/sdks/step/README.md#update) - Update a step

## [workflow](docs/sdks/workflow/README.md)

* [create](docs/sdks/workflow/README.md#create) - Create a workflow
* [delete](docs/sdks/workflow/README.md#delete) - Delete a workflow
* [read](docs/sdks/workflow/README.md#read) - Retrieve a workflow
* [readAll](docs/sdks/workflow/README.md#readall) - Retrieve workflows
* [update](docs/sdks/workflow/README.md#update) - Update a workflow

## [workflowMap](docs/sdks/workflowmap/README.md)

* [create](docs/sdks/workflowmap/README.md#create) - Create a workflow map
* [delete](docs/sdks/workflowmap/README.md#delete) - Delete a workflow map
* [read](docs/sdks/workflowmap/README.md#read) - Retrieve a workflow map
* [readAll](docs/sdks/workflowmap/README.md#readall) - Retrieve workflow maps
* [update](docs/sdks/workflowmap/README.md#update) - Update a workflow map
<!-- End SDK Available Operations -->

<!-- Start Dev Containers -->



<!-- End Dev Containers -->

<!-- Placeholder for Future Speakeasy SDK Sections -->

# Development

## Maturity

This SDK is in beta, and there may be breaking changes between versions without a major version update. Therefore, we recommend pinning usage
to a specific package version. This way, you can install the same version each time without breaking changes unless you are intentionally
looking for the latest version.

## Contributions

While we value open-source contributions to this SDK, this library is generated programmatically.
Feel free to open a PR or a Github issue as a proof of concept and we'll do our best to include it in a future release!

### SDK Created by [Speakeasy](https://docs.speakeasyapi.dev/docs/using-speakeasy/client-sdks)
