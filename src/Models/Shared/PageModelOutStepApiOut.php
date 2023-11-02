<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace speakeasy_bar-test\Risk-Cloud-API\Models\Shared;


class PageModelOutStepApiOut
{
    /**
     * A array of returned items
     * 
     * @var ?array<\speakeasy_bar-test\Risk-Cloud-API\Models\Shared\StepApiOut> $content
     */
	#[\JMS\Serializer\Annotation\SerializedName('content')]
    #[\JMS\Serializer\Annotation\Type('array<speakeasy_bar-test\Risk-Cloud-API\Models\Shared\StepApiOut>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $content = null;
    
    /**
     * A collection of page URL links for navigation and iteration
     * 
     * @var ?\speakeasy_bar-test\Risk-Cloud-API\Models\Shared\PageLinksOut $links
     */
	#[\JMS\Serializer\Annotation\SerializedName('links')]
    #[\JMS\Serializer\Annotation\Type('speakeasy_bar-test\Risk-Cloud-API\Models\Shared\PageLinksOut')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?PageLinksOut $links = null;
    
    /**
     * A collection page metadata
     * 
     * @var ?\speakeasy_bar-test\Risk-Cloud-API\Models\Shared\PageInfoOut $page
     */
	#[\JMS\Serializer\Annotation\SerializedName('page')]
    #[\JMS\Serializer\Annotation\Type('speakeasy_bar-test\Risk-Cloud-API\Models\Shared\PageInfoOut')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?PageInfoOut $page = null;
    
	public function __construct()
	{
		$this->content = null;
		$this->links = null;
		$this->page = null;
	}
}
