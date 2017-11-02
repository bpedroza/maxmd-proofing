<?php

namespace Endeavors\MaxMD\Proofing\Validation;

use Endeavors\MaxMD\Proofing\Contracts\IValidate;

/**
 * The validators perform the exact same functionality, except for defining
 * The required fields. Inheritance makes sense at this point.
 */
final class OneTimePasswordRequestValidator extends Validator implements IValidate
{
    protected $request;

    protected $missingFields = [];

    public function __construct($request = [])
    {
        $this->request = $request;
    }

    public function setRequest($request)
    {
        $this->request = $request;

        return $this;
    }

    protected function requiredFields()
    {
        return [
            'otp',
            'firstName',
            'lastName',
            'ssn4',
            'dob'
        ];
    }
}