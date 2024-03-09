<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace speakeasy_bar-test\Risk-Cloud-API\Models\Components;


/**
 * FieldApiOut - A array of returned items
 * 
 * @package speakeasy_bar-test\Risk-Cloud-API\Models\Components
 * @access public
 */
class FieldApiOut
{
    /**
     * The parent application of the record
     * 
     * @var ?\speakeasy_bar-test\Risk-Cloud-API\Models\Components\ApplicationPropertyApiOut $application
     */
	#[\JMS\Serializer\Annotation\SerializedName('application')]
    #[\JMS\Serializer\Annotation\Type('speakeasy_bar-test\Risk-Cloud-API\Models\Components\ApplicationPropertyApiOut')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ApplicationPropertyApiOut $application = null;
    
    /**
     * The default values of the field
     * 
     * @var ?array<\speakeasy_bar-test\Risk-Cloud-API\Models\Components\ValuePropertyApiOut> $defaultValues
     */
	#[\JMS\Serializer\Annotation\SerializedName('defaultValues')]
    #[\JMS\Serializer\Annotation\Type('array<speakeasy_bar-test\Risk-Cloud-API\Models\Components\ValuePropertyApiOut>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $defaultValues = null;
    
    /**
     * Whether the field is global
     * 
     * @var ?bool $global
     */
	#[\JMS\Serializer\Annotation\SerializedName('global')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $global = null;
    
    /**
     * The help text of the field to supply necessary context for filling out the field
     * 
     * @var ?string $helpText
     */
	#[\JMS\Serializer\Annotation\SerializedName('helpText')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $helpText = null;
    
    /**
     * The unique ID of this Risk Cloud resource
     * 
     * @var ?string $id
     */
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $id = null;
    
    /**
     * The label of the field as shown on the record
     * 
     * @var ?string $label
     */
	#[\JMS\Serializer\Annotation\SerializedName('label')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $label = null;
    
    /**
     * The name of the field
     * 
     * @var ?string $name
     */
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $name = null;
    
    /**
     * Identifies the type of object this data represents
     * 
     * @var ?string $object
     */
	#[\JMS\Serializer\Annotation\SerializedName('object')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $object = null;
    
    /**
     * The option values of the field for Select, Multi-Select, Radio, Checkbox, and E-Signature field types
     * 
     * @var ?array<\speakeasy_bar-test\Risk-Cloud-API\Models\Components\ValuePropertyApiOut> $optionValues
     */
	#[\JMS\Serializer\Annotation\SerializedName('optionValues')]
    #[\JMS\Serializer\Annotation\Type('array<speakeasy_bar-test\Risk-Cloud-API\Models\Components\ValuePropertyApiOut>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $optionValues = null;
    
    /**
     * The tooltip information of the field
     * 
     * @var ?string $tooltip
     */
	#[\JMS\Serializer\Annotation\SerializedName('tooltip')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $tooltip = null;
    
    /**
     * The type of the field
     * 
     * @var ?\speakeasy_bar-test\Risk-Cloud-API\Models\Components\FieldType $type
     */
	#[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<speakeasy_bar-test\Risk-Cloud-API\Models\Components\FieldType>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?FieldType $type = null;
    
    /**
     * The type of the field value
     * 
     * @var ?\speakeasy_bar-test\Risk-Cloud-API\Models\Components\ValueType $valueType
     */
	#[\JMS\Serializer\Annotation\SerializedName('valueType')]
    #[\JMS\Serializer\Annotation\Type('enum<speakeasy_bar-test\Risk-Cloud-API\Models\Components\ValueType>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ValueType $valueType = null;
    
    /**
     * The parent workflow of the step
     * 
     * @var ?\speakeasy_bar-test\Risk-Cloud-API\Models\Components\WorkflowPropertyApiOut $workflow
     */
	#[\JMS\Serializer\Annotation\SerializedName('workflow')]
    #[\JMS\Serializer\Annotation\Type('speakeasy_bar-test\Risk-Cloud-API\Models\Components\WorkflowPropertyApiOut')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?WorkflowPropertyApiOut $workflow = null;
    
	public function __construct()
	{
		$this->application = null;
		$this->defaultValues = null;
		$this->global = null;
		$this->helpText = null;
		$this->id = null;
		$this->label = null;
		$this->name = null;
		$this->object = null;
		$this->optionValues = null;
		$this->tooltip = null;
		$this->type = null;
		$this->valueType = null;
		$this->workflow = null;
	}
}
