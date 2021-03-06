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

    /**
     * @param $id_evento
     * @return mixed
     */
    public function colisaoAtividade($id_evento){
        $atividade = Activity::all();
        $activities = $atividade->where('id_evento', '=', $id_evento);
        //dd($activities);
        $activitiesEspelho=$activities;
        foreach ($activities as $ativi){
            $dataIni = new \DateTime($ativi->data_inicio);
            $dataFim = new \DateTime($ativi->data_conclusao);

            if($ativi->status==1){
                foreach ($activitiesEspelho as $ativiEspelho){
                    $dataEspelhoIni = new \DateTime($ativiEspelho->data_inicio);
                    $dataEspelhoFim = new \DateTime($ativiEspelho->data_conclusao);

                    if(!(($dataIni>$dataEspelhoIni) && ($dataIni>$dataEspelhoFim)||
                        ($dataFim<$dataEspelhoIni) && ($dataFim<$dataEspelhoFim)
                        )&&($ativi->id<>$ativiEspelho->id)){


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
    public function listarFrequencia($id_atividade){
        $retorno  = DB::select("select au.id as id_activiUser, au.id_users, au.id_activity,tcu.nome as tipo_atividade_user, au.presenca, u.name,  u.cpf, au.data_entrada, au.data_saida 
          from activity_users as au 
          left join users as u on au.id_users = u.id 
          left join type_activity_users as tcu on au.id_type_activity_user= tcu.id 
          where au.id_activity ='".$id_atividade."' order by u.name");

        return $retorno;

    }
    public function qtd($id_atividade)
    {
        $retorno = DB::select("select au.id as id_activiUser, au.id_users, au.id_activity,tcu.nome as tipo_atividade_user, au.presenca, u.name,  u.cpf, au.data_entrada, au.data_saida 
          from activity_users as au 
          left join users as u on au.id_users = u.id 
          left join type_activity_users as tcu on au.id_type_activity_user= tcu.id 
           where au.id_activity ='" . $id_atividade . "' and au.id_type_activity_user='1'");

        return $retorno;

    }
    public  function  certificado($id_evento){

        $retorno  = DB::select("select a.descricao ,a.hora as qtdhoras,au.id as id_activiUser, au.id_users, au.id_activity,tcu.nome as tipo_atividade_user, au.presenca, u.name, a.nome as atividade, e.nome as evento, u.cpf, e.local, e.data_inicio, e.data_conclusao 
          from activity_users as au 
          left join users as u on au.id_users = u.id 
          left join activities as a on au.id_activity = a.id 
          left join events as e on a.id_evento =e.id 
          left join type_activity_users as tcu on au.id_type_activity_user= tcu.id 
          where au.id_users ='".$this->id_users."'and e.id='".$id_evento."'");

        return $retorno;
    }
    public  function  lista_de_atividade($id_evento){

        $retorno  = DB::select("select e.status ,a.descricao ,a.hora as qtdhoras,au.id as id_activiUser, au.id_users, au.id_activity,tcu.nome as tipo_atividade_user, au.presenca, u.name, a.nome as atividade, e.nome as evento, u.cpf, e.local, e.data_inicio, e.data_conclusao 
          from activity_users as au 
          left join users as u on au.id_users = u.id 
          left join activities as a on au.id_activity = a.id 
          left join events as e on a.id_evento =e.id 
          left join type_activity_users as tcu on au.id_type_activity_user= tcu.id 
          where au.id_users ='".$this->id_users."' and e.id='".$id_evento."'");

        return $retorno;
    }


}
