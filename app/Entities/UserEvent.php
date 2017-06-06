<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class UserEvent extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = ['id_users','id_evento','id_articles','id_participation','status'];

}
