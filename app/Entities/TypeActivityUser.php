<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use Illuminate\Support\Facades\DB;

class TypeActivityUser extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [ 'nome',
                            'descricao',
                            'status'
                            ];
    public function atividadeUser()
    {
        return $this->hasMany(ActivityUser::class, 'id_type_activity_user');

    }
    public function atividade(){
        return $this->belongsToMany(Activity::class,'activity_users','id_type_activity_user','id_activity');
    }
    public function user(){
        return $this->belongsToMany(User::class,'activity_users','id_type_activity_user','id_users');
    }
    public  function  lista_de_tipo($id){

        $retorno  = DB::select("select * from type_activity_users where id='".$id."'");

        return $retorno;
    }
}
