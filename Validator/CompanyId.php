<?php

namespace VisionApps\CZICValidatorBundle\Validator;

use Symfony\Component\Validator\Constraint;

class CompanyId extends Constraint
{
    public $message = 'Inserted IČ contains an error, please check the value';
}
