<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Event extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [];
    public function evento(){
        return $this->belongsToMany(CourseEvent::class,'course_events','id_eventos','id_cursos');
    }
    public function atividade(){
        return $this->hasMany(Activity::class,'id_evento');

    }
}
