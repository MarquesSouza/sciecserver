<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use Illuminate\Support\Facades\DB;

class UserEvent extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [ 'id_users',
                            'id_evento',
                            'id_articles',
                            'id_participation',
                            'status'
    ];

    /**
     * @return bool
     */
    public function valida(){

        $data[]=['id_users','=',$this->id_users];
        $data[]=['id_evento','=',$this->id_evento];
        $data[]=['id_articles','=',$this->id_articles];
        $data[]=['id_participation',$this->id_participation];

        $retorno  = DB::table('user_events')->where($data)->get();

        if($retorno->count()>0){
            return false;
        }
        return true;
    }
    public function validaEvento($id_evento,$id_user){
        $data[]=['id_users','=',$id_user];
        $data[]=['id_evento','=',$id_evento];

        $retorno  = DB::table('user_events')->where($data)->get();

        if($retorno->count()>0){
            return false;
        }
        return true;
    }
    public  function  lista_de_userEvento($id_evento){

        $retorno  = DB::select("select u.name,u.cpf 
          from user_events as au 
          left join users as u on au.id_users = u.id 
          left join events as e on au.id_evento =e.id 
          where e.id='".$id_evento."'");

        return $retorno;
    }

}
