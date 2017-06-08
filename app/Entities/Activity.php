<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Activity extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [ 'nome',
                            'descricao',
                            'hora',
                            'local',
                            'qtd_inscritos',
                            'cod_inscritos',
                            'data_inicio',
                           // 'id_evento',
                            'id_tipo_atividade',
                            'status'
                ];
    public function tipoAtividade(){
        return $this->belongsTo(TypeActivity::class,'id_tipo_atividade');
    }
    public function evento(){
        return $this->belongsTo(Event::class,'id_evento');
    }
    public function user(){
        return $this->belongsToMany(User::class,'activity_users','id_activity','id_users');
     }
     public function atividadeUser(){
       return $this->hasMany(ActivityUser::class,'id_activity');
     }
     public function tipoAtividadeUser(){
         return $this->belongsToMany(TypeActivityUser::class,'activity_users','id_activity','id_type_activity_user');
     }
}
