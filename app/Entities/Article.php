<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Article extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [];
    public function evento(){
        return $this->belongsToMany(Event::class,'user_events','id_articles','id_evento');
    }
    public function user(){
        return $this->belongsToMany(Article::class,'user_events','id_articles','id_users');
    }
    public function participation(){
        return $this->belongsToMany(Participation::class,'user_events','id_articles','id_participation');
    }

}
