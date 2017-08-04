<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

class UserValidator extends LaravelValidator
{

    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'name' => 'required|min:3|max:100',
            'email'=> 'email|unique:users,email',
            'password'=> 'alpha_num|between:6,20|Confirmed',
            'password' => 'alpha_num|between:6,20',
            'cpf'=> 'required|cpf|unique:users,cpf',
            'telefone' => 'required|celular_com_ddd',
        ],
        ValidatorInterface::RULE_UPDATE => [

            //'name' => 'required|min:3|max:100',
            'password'=> 'alpha_num|between:6,20|Confirmed',
            'password' => 'alpha_num|between:6,20',
            //'telefone' => 'required|celular_com_ddd',
        ],
   ];


}


