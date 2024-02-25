# Application


## Overview

An [Application](https://help.logicgate.com/hc/en-us/articles/4402674055572-Create-a-new-Application) is a collection of Workflows, Steps, and logic that collectively solve a business use case

### Available Operations

* [create](#create) - Create an application
* [delete](#delete) - Delete an application
* [read](#read) - Retrieve an application
* [readAll](#readall) - Retrieve applications
* [update](#update) - Update an application

## create

**Permissions:** [Build Access](https://help.logicgate.com/hc/en-us/articles/4402683190164-Control-Build-Access-for-Applications)

Create an application from a JSON request body.

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
        $request = new Operations\CreateApplicationRequest();
    $request->applicationApiCreateIn = new Components\ApplicationApiCreateIn();
    $request->applicationApiCreateIn->color = '#00a3de';
    $request->applicationApiCreateIn->icon = Components\Icon::Cubes;
    $request->applicationApiCreateIn->name = 'Cyber Risk Management Application';
    $request->applicationApiCreateIn->type = Components\Type::ControlsCompliance;;

    $response = $sdk->application->create($request);

    if ($response->applicationApiOut !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                            | Type                                                                                                                                 | Required                                                                                                                             | Description                                                                                                                          |
| ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                           | [\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\CreateApplicationRequest](../../Models/Operations/CreateApplicationRequest.md) | :heavy_check_mark:                                                                                                                   | The request object to use for the request.                                                                                           |


### Response

**[?\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\CreateApplicationResponse](../../Models/Operations/CreateApplicationResponse.md)**


## delete

**Permissions:** [Build Access to application](https://help.logicgate.com/hc/en-us/articles/4402683190164-Control-Build-Access-for-Applications)

Delete an application specified by the ID in the URL path.

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
        $request = new Operations\DeleteApplicationRequest();
    $request->id = '<id>';;

    $response = $sdk->application->delete($request);

    if ($response->appActionResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                            | Type                                                                                                                                 | Required                                                                                                                             | Description                                                                                                                          |
| ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                           | [\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\DeleteApplicationRequest](../../Models/Operations/DeleteApplicationRequest.md) | :heavy_check_mark:                                                                                                                   | The request object to use for the request.                                                                                           |


### Response

**[?\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\DeleteApplicationResponse](../../Models/Operations/DeleteApplicationResponse.md)**


## read

**Permissions:** [Build Access to application](https://help.logicgate.com/hc/en-us/articles/4402683190164-Control-Build-Access-for-Applications)

Retrieve an application specified by the ID in the URL path.

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
        $request = new Operations\ReadApplicationRequest();
    $request->id = '<id>';;

    $response = $sdk->application->read($request);

    if ($response->applicationApiOut !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                        | Type                                                                                                                             | Required                                                                                                                         | Description                                                                                                                      |
| -------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                       | [\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\ReadApplicationRequest](../../Models/Operations/ReadApplicationRequest.md) | :heavy_check_mark:                                                                                                               | The request object to use for the request.                                                                                       |


### Response

**[?\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\ReadApplicationResponse](../../Models/Operations/ReadApplicationResponse.md)**


## readAll

**Permissions:** [Build Access](https://help.logicgate.com/hc/en-us/articles/4402683190164-Control-Build-Access-for-Applications)

Retrieve a page of all applications that the current user has [Build Access](https://help.logicgate.com/hc/en-us/articles/4402683190164-Control-Build-Access-for-Applications) to.

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
        $request = new Operations\ReadAllApplicationsRequest();
    $request->page = 853380;
    $request->size = 87498;;

    $response = $sdk->application->readAll($request);

    if ($response->pageModelOutApplicationApiOut !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                | Type                                                                                                                                     | Required                                                                                                                                 | Description                                                                                                                              |
| ---------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                               | [\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\ReadAllApplicationsRequest](../../Models/Operations/ReadAllApplicationsRequest.md) | :heavy_check_mark:                                                                                                                       | The request object to use for the request.                                                                                               |


### Response

**[?\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\ReadAllApplicationsResponse](../../Models/Operations/ReadAllApplicationsResponse.md)**


## update

**Permissions:** [Build Access to application](https://help.logicgate.com/hc/en-us/articles/4402683190164-Control-Build-Access-for-Applications)

Update an application specified by the ID in the URL path from a JSON request body. Only present properties with non-empty values are updated.

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
        $request = new Operations\Update1Request();
    $request->applicationApiUpdateIn = new Components\ApplicationApiUpdateIn();
    $request->applicationApiUpdateIn->color = '#00a3de';
    $request->applicationApiUpdateIn->icon = Components\ApplicationApiUpdateInIcon::Cubes;
    $request->applicationApiUpdateIn->live = false;
    $request->applicationApiUpdateIn->name = 'Cyber Risk Management Application';
    $request->applicationApiUpdateIn->restrictBuildAccess = false;
    $request->applicationApiUpdateIn->type = Components\ApplicationApiUpdateInType::ControlsCompliance;
    $request->id = '<id>';;

    $response = $sdk->application->update($request);

    if ($response->applicationApiOut !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\Update1Request](../../Models/Operations/Update1Request.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |


### Response

**[?\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\Update1Response](../../Models/Operations/Update1Response.md)**

