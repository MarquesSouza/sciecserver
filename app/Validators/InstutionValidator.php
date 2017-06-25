<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

class InstutionValidator extends LaravelValidator
{

    protected $rules = [

        ValidatorInterface::RULE_CREATE => [
            'nome' => 'required|min:3|max:100',
            'site' => 'required|url|unique:instutions,site',
            'descricao' => 'required|min:3|max:500',
            'email' => 'required|email|unique:instutions,email',
            'telefone' => 'required|celular_com_ddd',
        ],
        ValidatorInterface::RULE_UPDATE => [
            'nome' => 'required|min:3|max:100',
            'descricao' => 'required|min:3|max:500',
            'telefone' => 'required|celular_com_ddd',
        ],
    ];

}
