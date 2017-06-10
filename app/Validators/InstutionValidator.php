<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

class InstutionValidator extends LaravelValidator
{

    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'nome' => 'min:5',
            'site'=> 'required',
            'email'=> 'required',
            'descricao'=> 'required',
            'telefone'=> 'required',

        ],
        ValidatorInterface::RULE_UPDATE => [],
   ];

    Protected  $messages  = [
    'min:' =>  'O campo de atributo é obrigatório.'

    ];


}
