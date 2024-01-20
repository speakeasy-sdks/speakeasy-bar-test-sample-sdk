# Field


## Overview

A [Field](https://help.logicgate.com/hc/en-us/articles/4402674064020-Create-Fields) is used to capture information from and display information to users in a Workflow

### Available Operations

* [readAll](#readall) - Retrieve fields

## readAll

**Permissions:** [Build Access](https://help.logicgate.com/hc/en-us/articles/4402683190164-Control-Build-Access-for-Applications)

Retrieve a page of all fields whose parent application the current user has [Build Access](https://help.logicgate.com/hc/en-us/articles/4402683190164-Control-Build-Access-for-Applications) to.

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
        $request = new Operations\ReadAllFieldsRequest();
    $request->applicationId = 'string';
    $request->fieldType = Operations\FieldTypeFilter::Attachment;
    $request->page = 87498;
    $request->size = 581176;
    $request->stepId = 'string';
    $request->workflowId = 'string';;

    $response = $sdk->field->readAll($request);

    if ($response->pageModelOutFieldApiOut !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                    | Type                                                                                                                         | Required                                                                                                                     | Description                                                                                                                  |
| ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                   | [\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\ReadAllFieldsRequest](../../Models/Operations/ReadAllFieldsRequest.md) | :heavy_check_mark:                                                                                                           | The request object to use for the request.                                                                                   |


### Response

**[?\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\ReadAllFieldsResponse](../../Models/Operations/ReadAllFieldsResponse.md)**

