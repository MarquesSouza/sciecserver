<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

class EventValidator extends LaravelValidator
{

    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'nome' => 'required|min:3|max:100',
            'descricao' => 'required|min:3|max:1000',
            'status' => 'required',
            'local' => 'required|min:3|max:100',
            'data_inicio' => 'required|date',
            'data_conclusao' => 'required|date|after:data_inicio',
            'logoEvento' => 'required|image',
        ],
        ValidatorInterface::RULE_UPDATE => [
            'nome' => 'required|min:3|max:100',
            'descricao' => 'required|min:3|max:1000',
            'status' => 'required',
            'local' => 'required|min:3|max:100',
            'data_inicio' => 'required',
            'data_conclusao' => 'required|date|after:data_inicio',
            'logoEvento' => 'required|image',
        ],
   ];
}
