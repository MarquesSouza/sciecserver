<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

class ActivityUserValidator extends LaravelValidator
{

    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'presenca' => 'required',
            'data_entrada' => 'required',
            'data_saida' => 'required',
        ],
        ValidatorInterface::RULE_UPDATE => [
            'presenca' => 'required',
            'data_entrada' => 'required',
            'data_saida' => 'required',
        ],
   ];
}
