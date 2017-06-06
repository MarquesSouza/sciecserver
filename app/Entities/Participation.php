<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Participation extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = ['nome','descricao','status'];
    public function evento(){
        return $this->belongsToMany(Event::class,'user_events','id_participation','id_evento');
    }
    public function user(){
        return $this->belongsToMany(Article::class,'user_events','id_participation','id_users');
    }
    public function artigo(){
        return $this->belongsToMany(Participation::class,'user_events','id_participation','id_articles');
    }
}
