<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

class UserEventValidator extends LaravelValidator
{

    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'status' => 'required'
        ],
        ValidatorInterface::RULE_UPDATE => [
            'status' => 'required'
        ],
   ];
}
