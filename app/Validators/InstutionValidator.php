<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

class InstutionValidator extends LaravelValidator
{

    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'nome' => 'required|min:3',
            'descricao' => 'min:5|max:150',
            'email' => 'required|email',
            'telefone' => 'numeric',


        ],
        ValidatorInterface::RULE_UPDATE => [

        ],
    ];


}
