<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

class InstutionValidator extends LaravelValidator
{

    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'nome' => 'required|min:3',
            'site'=> 'required',
            'email'=> 'required',
            'descricao'=> 'required',
            'telefone'=> 'required',

        ],
        ValidatorInterface::RULE_UPDATE => [],
    ];


}
