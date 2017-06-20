<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

class CourseValidator extends LaravelValidator
{

    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'nome' => 'required|min:3|max:100',
            'descricao' => 'required|min:5|max:1000',
        ],
        ValidatorInterface::RULE_UPDATE => [
            'nome' => 'required|min:3|max:100',
            'descricao'=> 'required|min:5|max:1000',
        ],
   ];
}
