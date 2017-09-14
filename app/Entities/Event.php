<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use Illuminate\Support\Facades\DB;

class Event extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [ 'nome',
                            'descricao',
                            'status',
                            'local',
                            'data_inicio',
                            'data_conclusao',
                            'logoEvento'
    ];
    public function curso(){
        return $this->belongsToMany(CourseEvent::class,'course_events','id_eventos','id_cursos');
    }
    public function atividade(){
        return $this->hasMany(Activity::class,'id_evento');
    }
    public function user(){
        return $this->belongsToMany(User::class,'user_events','id_evento','id_users');
    }

    public function artigo(){
        return $this->belongsToMany(Article::class,'user_events','id_evento','id_articles');
    }
    public function participation(){
        return $this->belongsToMany(Participation::class,'user_events','id_evento','id_participation');
    }
    public  function  lista_de_evento($id_evento){

        $retorno  = DB::select("select * from events where id='".$id_evento."'");

        return $retorno;
    }

}
