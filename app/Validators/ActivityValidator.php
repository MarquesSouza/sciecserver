<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

class ActivityValidator extends LaravelValidator
{

    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'nome' => 'required|min:3|max:100',
            'descricao' => 'required|min:3|max:1000',
            'hora' => 'required',
            'local' => 'required|min:3|max:100',
            'qtd_inscritos' => 'required|numeric',
            'cod_inscritos' => 'required|numeric|unique:activities,cod_inscritos',
            'data_inicio' => 'required',
            'data_conclusao' => 'required',
        ],
        ValidatorInterface::RULE_UPDATE => [

            'nome' => 'required|min:3|max:100',
            'descricao' => 'required|min:3|max:1000',
            'hora' => 'required',
            'local' => 'required|min:3|max:100',
            'qtd_inscritos' => 'required|numeric',
            'cod_inscritos' => 'required|numeric|unique:activities,cod_inscritos',
            'data_inicio' => 'required',
            'data_conclusao' => 'required',
        ],
   ];
}
