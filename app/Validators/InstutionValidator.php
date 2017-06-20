<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

class InstutionValidator extends LaravelValidator
{

    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'nome' => 'required|min:3|max:100',
            'descricao' => 'required|min:5|max:150',
            'email' => 'required|email',
            'telefone' => 'required|numeric|min:9|max:16',
            'site' => 'required|min:5|max:100',
        ],
        ValidatorInterface::RULE_UPDATE => [
            'nome' => 'required|min:3|max:100',
            'descricao' => 'required|min:5|max:150',
            'email' => 'required|email',
            'telefone' => 'required|numeric|min:9|max:16',
            'site' => 'required|min:5|max:100',
        ],
    ];


}
