<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace speakeasy_bar-test\Risk-Cloud-API\Models\Shared;


/**
 * ValuePropertyApiOut - The values of the record field
 * 
 * @package speakeasy_bar-test\Risk-Cloud-API\Models\Shared
 * @access public
 */
class ValuePropertyApiOut
{
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
     * The numeric representation of the record value, with the format varying by value type:
     * 
     * - `NUMBER`: the numeric value of the number (example: `42.0`)
     * - `CALCULATION`: the numeric value of the calculation (example: `42.0`)
     * - `ATTACHMENT`: the version count of the attachment (example: `2.0`)
     * - `DATE`: the date measured in milliseconds since the Unix epoch (example: `1672552800000.0`)
     * - `OPTION`: the numeric value of the option (example: `2.0`)
     * - `USER`: a null value (example: `null`)
     * - `TEXT`: a null value (example: `null`)
     * 
     * @var ?float $numericValue
     */
	#[\JMS\Serializer\Annotation\SerializedName('numericValue')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $numericValue = null;
    
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
     * The text representation of the record value, with the format varying by value type:
     * 
     * - `NUMBER`: a string representation of the number, with currency if specified on the field (example: `"42"`)
     * - `CALCULATION`: a string representation of the label if specified on the field, otherwise the number (example: `"Highest Risk"`)
     * - `ATTACHMENT`: the name of the attachment file (example: `"my-evidence.pdf"`)
     * - `DATE`: the date formatted according to the requesting user's settings (example: `"1/1/23, 12:00 PM"`)
     * - `OPTION`: the text value of the option (example: `"Medium Risk"`)
     * - `USER`: the full name and email of the user (example: `"First Last (first.last@example.com)"`)
     * - `TEXT`: the text value (example: `"Data Theft"`)
     * 
     * @var ?string $textValue
     */
	#[\JMS\Serializer\Annotation\SerializedName('textValue')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $textValue = null;
    
    /**
     * The type of the value
     * 
     * @var ?\speakeasy_bar-test\Risk-Cloud-API\Models\Shared\ValuePropertyApiOutType $type
     */
	#[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<speakeasy_bar-test\Risk-Cloud-API\Models\Shared\ValuePropertyApiOutType>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ValuePropertyApiOutType $type = null;
    
	public function __construct()
	{
		$this->id = null;
		$this->numericValue = null;
		$this->object = null;
		$this->textValue = null;
		$this->type = null;
	}
}
