<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

class UserValidator extends LaravelValidator
{

    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'name' => 'required|min:3|max:100',
            'email'=> 'required|email|unique|min:3|max:100',
            'password'=> 'required|min:6',
            'cpf'=> 'required|unique|min:11|max:11',
            'telefone'=> 'required:min:9|max:16',
        ],
        ValidatorInterface::RULE_UPDATE => [
            'name' => 'required|min:3|max:100',
            'email'=> 'required|email|unique|min:3|max:100',
            'password'=> 'required|min:6',
            'cpf'=> 'required|unique|min:11|max:11',
            'telefone'=> 'required|min:8|max:16',
        ],
   ];
}
