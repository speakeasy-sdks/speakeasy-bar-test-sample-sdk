# Field
(*field*)

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

use \speakeasy_bar-test\Risk-Cloud-API\RiskCloudAPI;
use \speakeasy_bar-test\Risk-Cloud-API\Models\Shared\Security;
use \speakeasy_bar-test\Risk-Cloud-API\Models\Shared\SchemeBasic;
use \speakeasy_bar-test\Risk-Cloud-API\Models\Operations\ReadAllFieldsRequest;
use \speakeasy_bar-test\Risk-Cloud-API\Models\Operations\ReadAllFieldsFieldTypeFieldTypeFilter;

$security = new Security();
$security->basic->password = '';
$security->basic->username = '';

$sdk = RiskCloudAPI::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ReadAllFieldsRequest();
    $request->applicationId = 'string';
    $request->fieldType = ReadAllFieldsFieldTypeFieldTypeFilter::Attachment;
    $request->page = 87498;
    $request->size = 581176;
    $request->stepId = 'string';
    $request->workflowId = 'string';

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
| `$request`                                                                                                                   | [\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\ReadAllFieldsRequest](../../models/operations/ReadAllFieldsRequest.md) | :heavy_check_mark:                                                                                                           | The request object to use for the request.                                                                                   |


### Response

**[?\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\ReadAllFieldsResponse](../../models/operations/ReadAllFieldsResponse.md)**

