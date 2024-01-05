# WorkflowMap


## Overview

A [Workflow Map](https://help.logicgate.com/hc/en-us/articles/4402683117588) represents a relationship between two Workflows

### Available Operations

* [create](#create) - Create a workflow map
* [delete](#delete) - Delete a workflow map
* [read](#read) - Retrieve a workflow map
* [readAll](#readall) - Retrieve workflow maps
* [update](#update) - Update a workflow map

## create

**Permissions:** [Build Access to parent applications](https://help.logicgate.com/hc/en-us/articles/4402683190164-Control-Build-Access-for-Applications)

Create a workflow map from a JSON request body.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \speakeasy_bar-test\Risk-Cloud-API;
use \speakeasy_bar-test\Risk-Cloud-API\Models\Components;
use \speakeasy_bar-test\Risk-Cloud-API\Models\Operations;

$security = new Components\Security();
$security->basic->password = '<YOUR_PASSWORD_HERE>';
$security->basic->username = '<YOUR_USERNAME_HERE>';

$sdk = Risk-Cloud-API\RiskCloudAPI::builder()->setSecurity($security)->build();

try {
        $request = new Operations\CreateWorkflowMapRequest();
    $request->workflowMapApiCreateIn = new Components\WorkflowMapApiCreateIn();
    $request->workflowMapApiCreateIn->from = 'a1b2c3d4';
    $request->workflowMapApiCreateIn->relationship = Components\Relationship::OneToMany;
    $request->workflowMapApiCreateIn->to = 'a1b2c3d4';;

    $response = $sdk->workflowMap->create($request);

    if ($response->workflowMapApiOut !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                            | Type                                                                                                                                 | Required                                                                                                                             | Description                                                                                                                          |
| ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                           | [\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\CreateWorkflowMapRequest](../../Models/Operations/CreateWorkflowMapRequest.md) | :heavy_check_mark:                                                                                                                   | The request object to use for the request.                                                                                           |


### Response

**[?\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\CreateWorkflowMapResponse](../../Models/Operations/CreateWorkflowMapResponse.md)**


## delete

**Permissions:** [Build Access to a parent application](https://help.logicgate.com/hc/en-us/articles/4402683190164-Control-Build-Access-for-Applications)

Delete a workflow map specified by the ID in the URL path.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \speakeasy_bar-test\Risk-Cloud-API;
use \speakeasy_bar-test\Risk-Cloud-API\Models\Components;
use \speakeasy_bar-test\Risk-Cloud-API\Models\Operations;

$security = new Components\Security();
$security->basic->password = '<YOUR_PASSWORD_HERE>';
$security->basic->username = '<YOUR_USERNAME_HERE>';

$sdk = Risk-Cloud-API\RiskCloudAPI::builder()->setSecurity($security)->build();

try {
        $request = new Operations\DeleteWorkflowMapRequest();
    $request->id = '<ID>';;

    $response = $sdk->workflowMap->delete($request);

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
| `$request`                                                                                                                           | [\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\DeleteWorkflowMapRequest](../../Models/Operations/DeleteWorkflowMapRequest.md) | :heavy_check_mark:                                                                                                                   | The request object to use for the request.                                                                                           |


### Response

**[?\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\DeleteWorkflowMapResponse](../../Models/Operations/DeleteWorkflowMapResponse.md)**


## read

**Permissions:** [Build Access to a parent application](https://help.logicgate.com/hc/en-us/articles/4402683190164-Control-Build-Access-for-Applications)

Retrieve a workflow map specified by the ID in the URL path.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \speakeasy_bar-test\Risk-Cloud-API;
use \speakeasy_bar-test\Risk-Cloud-API\Models\Components;
use \speakeasy_bar-test\Risk-Cloud-API\Models\Operations;

$security = new Components\Security();
$security->basic->password = '<YOUR_PASSWORD_HERE>';
$security->basic->username = '<YOUR_USERNAME_HERE>';

$sdk = Risk-Cloud-API\RiskCloudAPI::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ReadWorkflowMapRequest();
    $request->id = '<ID>';;

    $response = $sdk->workflowMap->read($request);

    if ($response->workflowMapApiOut !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                        | Type                                                                                                                             | Required                                                                                                                         | Description                                                                                                                      |
| -------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                       | [\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\ReadWorkflowMapRequest](../../Models/Operations/ReadWorkflowMapRequest.md) | :heavy_check_mark:                                                                                                               | The request object to use for the request.                                                                                       |


### Response

**[?\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\ReadWorkflowMapResponse](../../Models/Operations/ReadWorkflowMapResponse.md)**


## readAll

**Permissions:** [Build Access](https://help.logicgate.com/hc/en-us/articles/4402683190164-Control-Build-Access-for-Applications)

Retrieve a page of all workflow maps that the current user has [Build Access to a parent application](https://help.logicgate.com/hc/en-us/articles/4402683190164-Control-Build-Access-for-Applications) to.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \speakeasy_bar-test\Risk-Cloud-API;
use \speakeasy_bar-test\Risk-Cloud-API\Models\Components;
use \speakeasy_bar-test\Risk-Cloud-API\Models\Operations;

$security = new Components\Security();
$security->basic->password = '<YOUR_PASSWORD_HERE>';
$security->basic->username = '<YOUR_USERNAME_HERE>';

$sdk = Risk-Cloud-API\RiskCloudAPI::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ReadAllWorkflowMapsRequest();
    $request->page = 853380;
    $request->size = 87498;
    $request->workflowId = 'string';;

    $response = $sdk->workflowMap->readAll($request);

    if ($response->pageModelOutWorkflowMapApiOut !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                | Type                                                                                                                                     | Required                                                                                                                                 | Description                                                                                                                              |
| ---------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                               | [\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\ReadAllWorkflowMapsRequest](../../Models/Operations/ReadAllWorkflowMapsRequest.md) | :heavy_check_mark:                                                                                                                       | The request object to use for the request.                                                                                               |


### Response

**[?\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\ReadAllWorkflowMapsResponse](../../Models/Operations/ReadAllWorkflowMapsResponse.md)**


## update

**Permissions:** [Build Access to a parent application](https://help.logicgate.com/hc/en-us/articles/4402683190164-Control-Build-Access-for-Applications)

Update a workflow map specified by the ID in the URL path from a JSON request body. Only present properties with non-empty values are updated.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \speakeasy_bar-test\Risk-Cloud-API;
use \speakeasy_bar-test\Risk-Cloud-API\Models\Components;
use \speakeasy_bar-test\Risk-Cloud-API\Models\Operations;

$security = new Components\Security();
$security->basic->password = '<YOUR_PASSWORD_HERE>';
$security->basic->username = '<YOUR_USERNAME_HERE>';

$sdk = Risk-Cloud-API\RiskCloudAPI::builder()->setSecurity($security)->build();

try {
        $request = new Operations\UpdateWorkflowMapRequest();
    $request->workflowMapApiUpdateIn = new Components\WorkflowMapApiUpdateIn();
    $request->workflowMapApiUpdateIn->relationship = Components\WorkflowMapApiUpdateInRelationship::ManyToMany;
    $request->id = '<ID>';;

    $response = $sdk->workflowMap->update($request);

    if ($response->workflowMapApiOut !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                            | Type                                                                                                                                 | Required                                                                                                                             | Description                                                                                                                          |
| ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                           | [\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\UpdateWorkflowMapRequest](../../Models/Operations/UpdateWorkflowMapRequest.md) | :heavy_check_mark:                                                                                                                   | The request object to use for the request.                                                                                           |


### Response

**[?\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\UpdateWorkflowMapResponse](../../Models/Operations/UpdateWorkflowMapResponse.md)**

