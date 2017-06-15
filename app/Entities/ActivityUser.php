<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use Illuminate\Support\Facades\DB;
class ActivityUser extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [ 'status',
                            'presenca',
                            'data_entrada',
                            'data_saida',
                            'id_users',
                            'id_activity',
                            'id_type_activity_user'
                        ];
    public function atividade(){
        return $this->belongsTo(Activity::class,'id_activity');
    }
    public function user(){
        return $this->belongsTo(User::class,'id_users');
    }
    public function atividadeUser(){
        return $this->belongsTo(TypeActivityUser::class,'id_type_activity_user');
    }
    public function valida(){

        $data[]=['id_users','=',$this->id_users];
        $data[]=['id_activity','=',$this->id_activity];
        $data[]=['id_type_activity_user','=',$this->id_type_activity_user];

        $retorno  = DB::table('activity_users')->where($data)->get();

        if($retorno->count()>0){
            return false;
        }
        return true;
    }
    public function quantidade($id_atividade){
        $data[]=['id_activity','=',$id_atividade];

        $retorno  = DB::table('activity_users')->where($data)->get();

        return $retorno->count();

    }
    public function validaUserAtividade($id_atividade,$id_user){
        $data[]=['id_users','=',$id_user];
        $data[]=['id_activity','=',$id_atividade];

        $retorno  = DB::table('activity_users')->where($data)->get();

        if($retorno->count()>0){
            return false;
        }
        return true;
    }
    public function colisaoAtividade($id_evento){
        $atividade = Activity::all();
        $activities = $atividade->where('id_evento', '=', $id_evento);
        $activitiesEspelho=$activities;
        foreach ($activities as $ativi){
            if($ativi->status==1){
            foreach ($activitiesEspelho as $ativiEspelho){
                if(!(($ativi->data_inicio<$ativiEspelho->data_inicio)&&($ativi->data_conclusao<$ativiEspelho->data_inicio))||(($ativi->data_inicio>$ativiEspelho->data_conclusao)&&($ativi->data_conclusao>$ativiEspelho->data_conclusao))){
                    $data[]=$ativiEspelho->id;
                }
            }
            if(!isset($data)){
            }else{
            $teste[$ativi->id]=$data;
            unset($data);
            }
            };
        };


        return $teste;

    }


}
