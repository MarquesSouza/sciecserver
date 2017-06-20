<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

class InstutionValidator extends LaravelValidator
{

    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'nome' => 'required|min:3|max:100',
            'descricao' => 'required|min:3|max:150',
            'email' => 'required|email|unique:instutions,email',
            'telefone' => 'required|min:8|numeric',
        ],
        ValidatorInterface::RULE_UPDATE => [
            'nome' => 'required|min:3|max:100',
            'descricao' => 'required|min:3|max:150',
            'email' => 'required|email|unique:instutions,email',
            'telefone' => 'required|min:3|numeric',
        ],
    ];

}
