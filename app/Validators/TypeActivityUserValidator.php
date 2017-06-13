<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

class TypeActivityUserValidator extends LaravelValidator
{

    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'nome'=> 'required|min:3|max:100',
            'descricao' => 'required|min:3|max:1000',
            'status' => 'required',
        ],
        ValidatorInterface::RULE_UPDATE => [
            'nome'=> 'required|min:3|max:100',
            'descricao' => 'required|min:3|max:1000',
            'status' => 'required',
        ],
   ];
}
