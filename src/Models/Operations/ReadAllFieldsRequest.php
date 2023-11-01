<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace speakeasy_bar-test\Risk-Cloud-API\Models\Operations;

use \speakeasy_bar-test\Risk-Cloud-API\Utils\SpeakeasyMetadata;
class ReadAllFieldsRequest
{
    /**
     * The unique ID of an application where, if provided, the response will only contain fields from the identified application
     * 
     * @var ?string $applicationId
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=application-id')]
    public ?string $applicationId = null;
    
    /**
     * A field type where, if provided, the response will only contain fields of the identified field type
     * 
     * @var ?\speakeasy_bar-test\Risk-Cloud-API\Models\Operations\ReadAllFieldsFieldTypeFieldTypeFilter $fieldType
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=field-type')]
    public ?ReadAllFieldsFieldTypeFieldTypeFilter $fieldType = null;
    
    /**
     * The zero-indexed page number (must not be less than 0, defaults to 0)
     * 
     * @var ?int $page
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=page')]
    public ?int $page = null;
    
    /**
     * The size of the page and maximum number of items to be returned (must not be less than 1, defaults to 20)
     * 
     * @var ?int $size
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=size')]
    public ?int $size = null;
    
    /**
     * The unique ID of a step where, if provided, the response will only contain fields from the identified step
     * 
     * @var ?string $stepId
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=step-id')]
    public ?string $stepId = null;
    
    /**
     * The unique ID of a workflow where, if provided, the response will only contain fields from the identified workflow
     * 
     * @var ?string $workflowId
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=workflow-id')]
    public ?string $workflowId = null;
    
	public function __construct()
	{
		$this->applicationId = null;
		$this->fieldType = null;
		$this->page = null;
		$this->size = null;
		$this->stepId = null;
		$this->workflowId = null;
	}
}
