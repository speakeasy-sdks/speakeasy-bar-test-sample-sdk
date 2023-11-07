# Workflow


## Overview

A [Workflow](https://help.logicgate.com/hc/en-us/articles/4402683108756-Create-a-new-Workflow) is a combination of Steps, Paths, Fields, and routing logic that combine to form a system in an Application

### Available Operations

* [create](#create) - Create a workflow
* [delete](#delete) - Delete a workflow
* [read](#read) - Retrieve a workflow
* [readAll](#readall) - Retrieve workflows
* [update](#update) - Update a workflow

## create

**Permissions:** [Build Access to parent application](https://help.logicgate.com/hc/en-us/articles/4402683190164-Control-Build-Access-for-Applications)

Create a workflow from a JSON request body. The workflow will contain a Default Origin step and a Default End step.

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
    $request = new Operations\CreateWorkflowRequest();
    $request->workflowApiCreateIn = new Components\WorkflowApiCreateIn();
    $request->workflowApiCreateIn->applicationId = 'a1b2c3d4';
    $request->workflowApiCreateIn->name = 'Risk Assessments';
    $request->workflowApiCreateIn->recordPrefix = 'Assessment';
    $request->workflowApiCreateIn->xpos = 20;
    $request->workflowApiCreateIn->ypos = 20;

    $response = $sdk->workflow->create($request);

    if ($response->workflowApiOut !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                      | Type                                                                                                                           | Required                                                                                                                       | Description                                                                                                                    |
| ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                     | [\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\CreateWorkflowRequest](../../models/operations/CreateWorkflowRequest.md) | :heavy_check_mark:                                                                                                             | The request object to use for the request.                                                                                     |


### Response

**[?\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\CreateWorkflowResponse](../../models/operations/CreateWorkflowResponse.md)**


## delete

**Permissions:** [Build Access to parent application](https://help.logicgate.com/hc/en-us/articles/4402683190164-Control-Build-Access-for-Applications)

Delete a workflow specified by the ID in the URL path.

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
    $request = new Operations\DeleteWorkflowRequest();
    $request->id = '<ID>';

    $response = $sdk->workflow->delete($request);

    if ($response->appActionResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                      | Type                                                                                                                           | Required                                                                                                                       | Description                                                                                                                    |
| ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                     | [\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\DeleteWorkflowRequest](../../models/operations/DeleteWorkflowRequest.md) | :heavy_check_mark:                                                                                                             | The request object to use for the request.                                                                                     |


### Response

**[?\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\DeleteWorkflowResponse](../../models/operations/DeleteWorkflowResponse.md)**


## read

**Permissions:** [Build Access to parent application](https://help.logicgate.com/hc/en-us/articles/4402683190164-Control-Build-Access-for-Applications)

Retrieve a workflow specified by the ID in the URL path.

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
    $request = new Operations\ReadWorkflowRequest();
    $request->id = '<ID>';

    $response = $sdk->workflow->read($request);

    if ($response->workflowApiOut !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                  | Type                                                                                                                       | Required                                                                                                                   | Description                                                                                                                |
| -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                 | [\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\ReadWorkflowRequest](../../models/operations/ReadWorkflowRequest.md) | :heavy_check_mark:                                                                                                         | The request object to use for the request.                                                                                 |


### Response

**[?\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\ReadWorkflowResponse](../../models/operations/ReadWorkflowResponse.md)**


## readAll

**Permissions:** [Build Access](https://help.logicgate.com/hc/en-us/articles/4402683190164-Control-Build-Access-for-Applications)

Retrieve a page of all workflows that the current user has [Build Access to parent application](https://help.logicgate.com/hc/en-us/articles/4402683190164-Control-Build-Access-for-Applications) to.

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
    $request = new Operations\ReadAllWorkflowsRequest();
    $request->applicationId = 'string';
    $request->includeJiraWorkflows = false;
    $request->page = 853380;
    $request->size = 87498;

    $response = $sdk->workflow->readAll($request);

    if ($response->pageModelOutWorkflowApiOut !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                          | Type                                                                                                                               | Required                                                                                                                           | Description                                                                                                                        |
| ---------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                         | [\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\ReadAllWorkflowsRequest](../../models/operations/ReadAllWorkflowsRequest.md) | :heavy_check_mark:                                                                                                                 | The request object to use for the request.                                                                                         |


### Response

**[?\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\ReadAllWorkflowsResponse](../../models/operations/ReadAllWorkflowsResponse.md)**


## update

**Permissions:** [Build Access to parent application](https://help.logicgate.com/hc/en-us/articles/4402683190164-Control-Build-Access-for-Applications)

Update a workflow specified by the ID in the URL path from a JSON request body. Only present properties with non-empty values are updated.

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
    $request = new Operations\UpdateWorkflowRequest();
    $request->workflowApiUpdateIn = new Components\WorkflowApiUpdateIn();
    $request->workflowApiUpdateIn->name = 'Risk Assessments';
    $request->workflowApiUpdateIn->recordPrefix = 'Assessment';
    $request->workflowApiUpdateIn->xpos = 20;
    $request->workflowApiUpdateIn->ypos = 20;
    $request->id = '<ID>';

    $response = $sdk->workflow->update($request);

    if ($response->workflowApiOut !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                      | Type                                                                                                                           | Required                                                                                                                       | Description                                                                                                                    |
| ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                     | [\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\UpdateWorkflowRequest](../../models/operations/UpdateWorkflowRequest.md) | :heavy_check_mark:                                                                                                             | The request object to use for the request.                                                                                     |


### Response

**[?\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\UpdateWorkflowResponse](../../models/operations/UpdateWorkflowResponse.md)**

