<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use Illuminate\Support\Facades\DB;

class UserTypeUser extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [ 'id_user',
                            'id_type_user',
                            'status'
                            ];
    public function validaUser(){
        $data[]=['id_user','=',$this->id_user];
        $data[]=['id_type_user','=',$this->id_type_user];

        $retorno  = DB::table('user_type_users')->where($data)->get();

        if($retorno->count()>0){
            return false;
        }
        return true;
    }
}
