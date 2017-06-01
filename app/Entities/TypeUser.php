<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class TypeUser extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [];
    public function user(){
        return $this->belongsToMany(User::class,'user_type_users','id_type_user','id_user');
    }
}
