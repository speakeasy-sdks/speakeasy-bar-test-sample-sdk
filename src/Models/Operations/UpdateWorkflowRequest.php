<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace speakeasy_bar-test\Risk-Cloud-API\Models\Operations;

use \speakeasy_bar-test\Risk-Cloud-API\Utils\SpeakeasyMetadata;
class UpdateWorkflowRequest
{
	#[SpeakeasyMetadata('request:mediaType=application/json')]
    public \speakeasy_bar-test\Risk-Cloud-API\Models\Components\WorkflowApiUpdateIn $workflowApiUpdateIn;
    
    /**
     * The unique ID of the workflow
     * 
     * @var string $id
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;
    
	public function __construct()
	{
		$this->workflowApiUpdateIn = new \speakeasy_bar-test\Risk-Cloud-API\Models\Components\WorkflowApiUpdateIn();
		$this->id = "";
	}
}
