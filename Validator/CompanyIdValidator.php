<?php

namespace CZICValidatorBundle\Validator;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use CZICValidator\Validator\CZICValidator;

class CompanyIdValidator extends ConstraintValidator
{
    /**
     * @param string $value
     * @param \Symfony\Component\Validator\Constraint $constraint
     * @return bool
     */
    public function validate($value, Constraint $constraint)
    {
        if (!(new CZICValidator())->validate($value)) {
            $this->context->buildViolation($constraint->message)->setParameter('%string%', $value)->addViolation();

            return;
        }
    }
}
