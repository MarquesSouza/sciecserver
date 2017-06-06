<?php

namespace App\Entities;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'name',
                            'email',
                            'password',
                            'cpf',
                            'telefone'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function tipoUser(){
        return $this->belongsToMany(TypeUser::class,'user_type_users','id_user','id_type_user');
    }
    public function tipoAtividadeUser(){
        return $this->belongsToMany(TypeActivityUser::class,'activity_users','id_users','id_type_activity_user');
    }
    public function atividade(){
        return $this->belongsToMany(Activity::class,'activity_users','id_users','id_activity');
    }
    public function evento(){
        return $this->belongsToMany(Event::class,'user_events','id_users','id_evento');
    }
    public function artigo(){
        return $this->belongsToMany(Article::class,'user_events','id_users','id_articles');
    }
    public function participation(){
        return $this->belongsToMany(Participation::class,'user_events','id_users','id_participation');
    }

}
