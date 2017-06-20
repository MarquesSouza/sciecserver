<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

class UserValidator extends LaravelValidator
{

    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'name' => 'required|min:3|max:100',
            'email'=> 'email|required|unique:users,email',
            'password'=> 'required|min:6|max:100',
            'cpf'=> 'required|min:11|max:11|unique:users,cpf',
            'telefone' => 'required|min:8|max:16',
        ],
        ValidatorInterface::RULE_UPDATE => [

            'name' => 'required|min:3|max:100',
            'email'=> 'email|required|unique:users,email',
            'password'=> 'required|min:6|max:100',
            'cpf'=> 'required|min:11|max:11|unique:users,cpf',
            'telefone' => 'required|min:8|max:16',
        ],
   ];
}
