# Application
(*application*)

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

### Parameters

| Parameter                                                                                                                            | Type                                                                                                                                 | Required                                                                                                                             | Description                                                                                                                          |
| ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                           | [\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\CreateApplicationRequest](../../models/operations/CreateApplicationRequest.md) | :heavy_check_mark:                                                                                                                   | The request object to use for the request.                                                                                           |


### Response

**[?\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\CreateApplicationResponse](../../models/operations/CreateApplicationResponse.md)**


## delete

**Permissions:** [Build Access to application](https://help.logicgate.com/hc/en-us/articles/4402683190164-Control-Build-Access-for-Applications)

Delete an application specified by the ID in the URL path.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \speakeasy_bar-test\Risk-Cloud-API\RiskCloudAPI;
use \speakeasy_bar-test\Risk-Cloud-API\Models\Shared\Security;
use \speakeasy_bar-test\Risk-Cloud-API\Models\Shared\SchemeBasic;
use \speakeasy_bar-test\Risk-Cloud-API\Models\Operations\DeleteApplicationRequest;

$security = new Security();
$security->basic->password = '';
$security->basic->username = '';

$sdk = RiskCloudAPI::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new DeleteApplicationRequest();
    $request->id = '<ID>';

    $response = $sdk->application->delete($request);

    if ($response->appActionResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                            | Type                                                                                                                                 | Required                                                                                                                             | Description                                                                                                                          |
| ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                           | [\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\DeleteApplicationRequest](../../models/operations/DeleteApplicationRequest.md) | :heavy_check_mark:                                                                                                                   | The request object to use for the request.                                                                                           |


### Response

**[?\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\DeleteApplicationResponse](../../models/operations/DeleteApplicationResponse.md)**


## read

**Permissions:** [Build Access to application](https://help.logicgate.com/hc/en-us/articles/4402683190164-Control-Build-Access-for-Applications)

Retrieve an application specified by the ID in the URL path.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \speakeasy_bar-test\Risk-Cloud-API\RiskCloudAPI;
use \speakeasy_bar-test\Risk-Cloud-API\Models\Shared\Security;
use \speakeasy_bar-test\Risk-Cloud-API\Models\Shared\SchemeBasic;
use \speakeasy_bar-test\Risk-Cloud-API\Models\Operations\ReadApplicationRequest;

$security = new Security();
$security->basic->password = '';
$security->basic->username = '';

$sdk = RiskCloudAPI::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ReadApplicationRequest();
    $request->id = '<ID>';

    $response = $sdk->application->read($request);

    if ($response->applicationApiOut !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                        | Type                                                                                                                             | Required                                                                                                                         | Description                                                                                                                      |
| -------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                       | [\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\ReadApplicationRequest](../../models/operations/ReadApplicationRequest.md) | :heavy_check_mark:                                                                                                               | The request object to use for the request.                                                                                       |


### Response

**[?\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\ReadApplicationResponse](../../models/operations/ReadApplicationResponse.md)**


## readAll

**Permissions:** [Build Access](https://help.logicgate.com/hc/en-us/articles/4402683190164-Control-Build-Access-for-Applications)

Retrieve a page of all applications that the current user has [Build Access](https://help.logicgate.com/hc/en-us/articles/4402683190164-Control-Build-Access-for-Applications) to.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \speakeasy_bar-test\Risk-Cloud-API\RiskCloudAPI;
use \speakeasy_bar-test\Risk-Cloud-API\Models\Shared\Security;
use \speakeasy_bar-test\Risk-Cloud-API\Models\Shared\SchemeBasic;
use \speakeasy_bar-test\Risk-Cloud-API\Models\Operations\ReadAllApplicationsRequest;

$security = new Security();
$security->basic->password = '';
$security->basic->username = '';

$sdk = RiskCloudAPI::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ReadAllApplicationsRequest();
    $request->page = 853380;
    $request->size = 87498;

    $response = $sdk->application->readAll($request);

    if ($response->pageModelOutApplicationApiOut !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                | Type                                                                                                                                     | Required                                                                                                                                 | Description                                                                                                                              |
| ---------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                               | [\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\ReadAllApplicationsRequest](../../models/operations/ReadAllApplicationsRequest.md) | :heavy_check_mark:                                                                                                                       | The request object to use for the request.                                                                                               |


### Response

**[?\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\ReadAllApplicationsResponse](../../models/operations/ReadAllApplicationsResponse.md)**


## update

**Permissions:** [Build Access to application](https://help.logicgate.com/hc/en-us/articles/4402683190164-Control-Build-Access-for-Applications)

Update an application specified by the ID in the URL path from a JSON request body. Only present properties with non-empty values are updated.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \speakeasy_bar-test\Risk-Cloud-API\RiskCloudAPI;
use \speakeasy_bar-test\Risk-Cloud-API\Models\Shared\Security;
use \speakeasy_bar-test\Risk-Cloud-API\Models\Shared\SchemeBasic;
use \speakeasy_bar-test\Risk-Cloud-API\Models\Operations\Update1Request;
use \speakeasy_bar-test\Risk-Cloud-API\Models\Shared\ApplicationApiUpdateIn;
use \speakeasy_bar-test\Risk-Cloud-API\Models\Shared\ApplicationApiUpdateInIcon;
use \speakeasy_bar-test\Risk-Cloud-API\Models\Shared\ApplicationApiUpdateInType;

$security = new Security();
$security->basic->password = '';
$security->basic->username = '';

$sdk = RiskCloudAPI::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Update1Request();
    $request->applicationApiUpdateIn = new ApplicationApiUpdateIn();
    $request->applicationApiUpdateIn->color = '#00a3de';
    $request->applicationApiUpdateIn->icon = ApplicationApiUpdateInIcon::Cubes;
    $request->applicationApiUpdateIn->live = false;
    $request->applicationApiUpdateIn->name = 'Cyber Risk Management Application';
    $request->applicationApiUpdateIn->restrictBuildAccess = false;
    $request->applicationApiUpdateIn->type = ApplicationApiUpdateInType::ControlsCompliance;
    $request->id = '<ID>';

    $response = $sdk->application->update($request);

    if ($response->applicationApiOut !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\Update1Request](../../models/operations/Update1Request.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |


### Response

**[?\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\Update1Response](../../models/operations/Update1Response.md)**

