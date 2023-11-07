# Step


## Overview

A [Step](https://help.logicgate.com/hc/en-us/articles/4402674059668-Create-a-Step) lives in a Workflow and is configured with a set of Sections, Subsections and Fields to create a form

### Available Operations

* [create](#create) - Create a step
* [delete](#delete) - Delete a step
* [read](#read) - Retrieve a step
* [readAll](#readall) - Retrieve steps
* [update](#update) - Update a step

## create

**Permissions:** [Build Access to parent application](https://help.logicgate.com/hc/en-us/articles/4402683190164-Control-Build-Access-for-Applications)

Create a step from a JSON request body.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \speakeasy_bar-test\Risk-Cloud-API;
use \speakeasy_bar-test\Risk-Cloud-API\Models\Components;
use \speakeasy_bar-test\Risk-Cloud-API\Models\Operations;

$security = new Components\Security();
$security->basic->password = '';
$security->basic->username = '';

$sdk = Risk-Cloud-API\RiskCloudAPI::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\CreateStepRequest();
    $request->stepApiCreateIn = new Components\StepApiCreateIn();
    $request->stepApiCreateIn->assignableUserType = Components\AssignableUserType::AppUsers;
    $request->stepApiCreateIn->enableComments = false;
    $request->stepApiCreateIn->externalUserMfaRequired = false;
    $request->stepApiCreateIn->name = 'Identify Risk';
    $request->stepApiCreateIn->workflowId = 'a1b2c3d4';
    $request->stepApiCreateIn->xpos = 20;
    $request->stepApiCreateIn->ypos = 20;

    $response = $sdk->step->create($request);

    if ($response->stepApiOut !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                              | Type                                                                                                                   | Required                                                                                                               | Description                                                                                                            |
| ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                             | [\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\CreateStepRequest](../../models/operations/CreateStepRequest.md) | :heavy_check_mark:                                                                                                     | The request object to use for the request.                                                                             |


### Response

**[?\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\CreateStepResponse](../../models/operations/CreateStepResponse.md)**


## delete

**Permissions:** [Build Access to parent application](https://help.logicgate.com/hc/en-us/articles/4402683190164-Control-Build-Access-for-Applications)

Delete a step specified by the ID in the URL path.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \speakeasy_bar-test\Risk-Cloud-API;
use \speakeasy_bar-test\Risk-Cloud-API\Models\Components;
use \speakeasy_bar-test\Risk-Cloud-API\Models\Operations;

$security = new Components\Security();
$security->basic->password = '';
$security->basic->username = '';

$sdk = Risk-Cloud-API\RiskCloudAPI::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\DeleteStepRequest();
    $request->id = '<ID>';

    $response = $sdk->step->delete($request);

    if ($response->appActionResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                              | Type                                                                                                                   | Required                                                                                                               | Description                                                                                                            |
| ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                             | [\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\DeleteStepRequest](../../models/operations/DeleteStepRequest.md) | :heavy_check_mark:                                                                                                     | The request object to use for the request.                                                                             |


### Response

**[?\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\DeleteStepResponse](../../models/operations/DeleteStepResponse.md)**


## read

**Permissions:** [Build Access to parent application](https://help.logicgate.com/hc/en-us/articles/4402683190164-Control-Build-Access-for-Applications)

Retrieve a step specified by the ID in the URL path.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \speakeasy_bar-test\Risk-Cloud-API;
use \speakeasy_bar-test\Risk-Cloud-API\Models\Components;
use \speakeasy_bar-test\Risk-Cloud-API\Models\Operations;

$security = new Components\Security();
$security->basic->password = '';
$security->basic->username = '';

$sdk = Risk-Cloud-API\RiskCloudAPI::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\ReadStepRequest();
    $request->id = '<ID>';

    $response = $sdk->step->read($request);

    if ($response->stepApiOut !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                         | [\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\ReadStepRequest](../../models/operations/ReadStepRequest.md) | :heavy_check_mark:                                                                                                 | The request object to use for the request.                                                                         |


### Response

**[?\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\ReadStepResponse](../../models/operations/ReadStepResponse.md)**


## readAll

**Permissions:** [Build Access](https://help.logicgate.com/hc/en-us/articles/4402683190164-Control-Build-Access-for-Applications)

Retrieve a page of all steps that the current user has [Build Access to parent application](https://help.logicgate.com/hc/en-us/articles/4402683190164-Control-Build-Access-for-Applications) to.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \speakeasy_bar-test\Risk-Cloud-API;
use \speakeasy_bar-test\Risk-Cloud-API\Models\Components;
use \speakeasy_bar-test\Risk-Cloud-API\Models\Operations;

$security = new Components\Security();
$security->basic->password = '';
$security->basic->username = '';

$sdk = Risk-Cloud-API\RiskCloudAPI::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\ReadAllStepsRequest();
    $request->page = 853380;
    $request->size = 87498;
    $request->workflowId = 'string';

    $response = $sdk->step->readAll($request);

    if ($response->pageModelOutStepApiOut !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                  | Type                                                                                                                       | Required                                                                                                                   | Description                                                                                                                |
| -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                 | [\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\ReadAllStepsRequest](../../models/operations/ReadAllStepsRequest.md) | :heavy_check_mark:                                                                                                         | The request object to use for the request.                                                                                 |


### Response

**[?\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\ReadAllStepsResponse](../../models/operations/ReadAllStepsResponse.md)**


## update

**Permissions:** [Build Access to parent application](https://help.logicgate.com/hc/en-us/articles/4402683190164-Control-Build-Access-for-Applications)

Update a step specified by the ID in the URL path from a JSON request body. Only present properties with non-empty values are updated.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \speakeasy_bar-test\Risk-Cloud-API;
use \speakeasy_bar-test\Risk-Cloud-API\Models\Components;
use \speakeasy_bar-test\Risk-Cloud-API\Models\Operations;

$security = new Components\Security();
$security->basic->password = '';
$security->basic->username = '';

$sdk = Risk-Cloud-API\RiskCloudAPI::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\UpdateRequest();
    $request->stepApiUpdateIn = new Components\StepApiUpdateIn();
    $request->stepApiUpdateIn->assignableUserType = Components\StepApiUpdateInAssignableUserType::AppUsers;
    $request->stepApiUpdateIn->enableComments = false;
    $request->stepApiUpdateIn->externalUserMfaRequired = false;
    $request->stepApiUpdateIn->name = 'Identify Risk';
    $request->stepApiUpdateIn->type = Components\StepApiUpdateInType::Origin;
    $request->stepApiUpdateIn->xpos = 20;
    $request->stepApiUpdateIn->ypos = 20;
    $request->id = '<ID>';

    $response = $sdk->step->update($request);

    if ($response->stepApiOut !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\UpdateRequest](../../models/operations/UpdateRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |


### Response

**[?\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\UpdateResponse](../../models/operations/UpdateResponse.md)**

