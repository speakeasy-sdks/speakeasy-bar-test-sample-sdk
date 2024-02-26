# Record


## Overview

A [Record](https://help.logicgate.com/hc/en-us/articles/4402683104020-Complete-a-Record) is a form that can capture information, store cataloged data, and link to other Records as it moves through each Step of a Workflow

### Available Operations

* [readAll](#readall) - Retrieve records

## readAll

**Permissions:** Authenticated User

Retrieve a page of all records that the current user has [Read or Write access](https://help.logicgate.com/hc/en-us/articles/4402683227156-Permission-Sets-) to.

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
        $request = new Operations\ReadAllRecordsRequest();
    $request->applicationId = '<value>';
    $request->page = 853380;
    $request->size = 87498;
    $request->stepId = '<value>';
    $request->updatedMin = 581176;
    $request->workflowId = '<value>';;

    $response = $sdk->record->readAll($request);

    if ($response->pageModelOutRecordApiOut !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                      | Type                                                                                                                           | Required                                                                                                                       | Description                                                                                                                    |
| ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                     | [\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\ReadAllRecordsRequest](../../Models/Operations/ReadAllRecordsRequest.md) | :heavy_check_mark:                                                                                                             | The request object to use for the request.                                                                                     |


### Response

**[?\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\ReadAllRecordsResponse](../../Models/Operations/ReadAllRecordsResponse.md)**

