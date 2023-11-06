<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace speakeasy_bar-test\Risk-Cloud-API\Models\Shared;


/** The type of the value */
enum ValuePropertyApiOutType: string
{
    case Number = 'NUMBER';
    case Calculation = 'CALCULATION';
    case Attachment = 'ATTACHMENT';
    case Date = 'DATE';
    case Option = 'OPTION';
    case User = 'USER';
    case Text = 'TEXT';
    case Other = 'OTHER';
}
