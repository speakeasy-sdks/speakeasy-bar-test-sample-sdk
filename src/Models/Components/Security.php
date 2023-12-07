<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace speakeasy_bar-test\Risk-Cloud-API\Models\Components;

use \speakeasy_bar-test\Risk-Cloud-API\Utils\SpeakeasyMetadata;
class Security
{
	#[SpeakeasyMetadata('security:scheme=true,type=http,subtype=basic')]
    public ?SchemeBasic $basic = null;
    
	#[SpeakeasyMetadata('security:scheme=true,type=http,subtype=bearer,name=Authorization')]
    public ?string $bearer = null;
    
	public function __construct()
	{
		$this->basic = null;
		$this->bearer = null;
	}
}
