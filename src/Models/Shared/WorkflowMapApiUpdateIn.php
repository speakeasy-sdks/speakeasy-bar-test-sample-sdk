<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace speakeasy_bar-test\Risk-Cloud-API\Models\Shared;


/**
 * WorkflowMapApiUpdateIn - Workflow (Update)
 * 
 * @package speakeasy_bar-test\Risk-Cloud-API\Models\Shared
 * @access public
 */
class WorkflowMapApiUpdateIn
{
    /**
     * The type of the relationship between workflows
     * 
     * @var \speakeasy_bar-test\Risk-Cloud-API\Models\Shared\WorkflowMapApiUpdateInRelationship $relationship
     */
	#[\JMS\Serializer\Annotation\SerializedName('relationship')]
    #[\JMS\Serializer\Annotation\Type('enum<speakeasy_bar-test\Risk-Cloud-API\Models\Shared\WorkflowMapApiUpdateInRelationship>')]
    public WorkflowMapApiUpdateInRelationship $relationship;
    
	public function __construct()
	{
		$this->relationship = \speakeasy_bar-test\Risk-Cloud-API\Models\Shared\WorkflowMapApiUpdateInRelationship::OneToOne;
	}
}
