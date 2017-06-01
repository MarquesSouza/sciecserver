<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Course extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [];
    public function instution(){
        return $this->belongsTo(Instution::class,'id_instutions');
    }
}
