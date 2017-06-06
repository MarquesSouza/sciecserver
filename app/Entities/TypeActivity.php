<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class TypeActivity extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = ['nome','descricao','status'];

    public function atividade()
    {
        return $this->hasMany(Activity::class, 'id_tipo_atividade');

    }

}