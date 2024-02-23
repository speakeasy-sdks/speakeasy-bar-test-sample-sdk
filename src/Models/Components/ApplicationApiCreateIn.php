<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace speakeasy_bar-test\Risk-Cloud-API\Models\Components;


class ApplicationApiCreateIn
{
    /**
     * The hex representation of the icon color of the application (defaults to #00a3de)
     * 
     * @var ?string $color
     */
	#[\JMS\Serializer\Annotation\SerializedName('color')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $color = null;
    
    /**
     * The icon type of the application (defaults to CUBES)
     * 
     * @var ?\speakeasy_bar-test\Risk-Cloud-API\Models\Components\Icon $icon
     */
	#[\JMS\Serializer\Annotation\SerializedName('icon')]
    #[\JMS\Serializer\Annotation\Type('enum<speakeasy_bar-test\Risk-Cloud-API\Models\Components\Icon>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Icon $icon = null;
    
    /**
     * The name of the application
     * 
     * @var string $name
     */
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $name;
    
    /**
     * The type of Risk Cloud application (defaults to NONE)
     * 
     * @var ?\speakeasy_bar-test\Risk-Cloud-API\Models\Components\Type $type
     */
	#[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<speakeasy_bar-test\Risk-Cloud-API\Models\Components\Type>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Type $type = null;
    
	public function __construct()
	{
		$this->color = null;
		$this->icon = null;
		$this->name = "";
		$this->type = null;
	}
}
