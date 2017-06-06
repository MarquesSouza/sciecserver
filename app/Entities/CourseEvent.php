<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class CourseEvent extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [ 'id_cursos','id_eventos'];
    public function instution(){

    }
}
