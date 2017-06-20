<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

class ArticleValidator extends LaravelValidator
{

    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'titulo' => 'required|min:3|max:100',
            'resumo' => 'required|min:5|max:1000',
            'autores' => 'required|min:3|max:100',
            'local' => 'required|min:3|max:100',
            'subtitulo' => 'required|min:3|max:100',
            'situacao' => 'required',
        ],
        ValidatorInterface::RULE_UPDATE => [
            'titulo' => 'required|min:3|max:100',
            'resumo' => 'required|min:5|max:1000',
            'autores' => 'required|min:3|max:100',
            'local' => 'required|min:3|max:100',
            'subtitulo' => 'required|min:3|max:100',
            'situacao' => 'required',
        ],
   ];
}
