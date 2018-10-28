<?php

namespace App;

class Task extends Model
{
	//Validation
	protected $fillable = ['title', 'body'];
    public function scopeIncomplete($query) //Gerir manni kleift að gera Task::Incomplete() í tinker og klasinn er global
    {

    	return $query->where('complete', 0);

    }

    public function comments()
    {
    	return $this->hasMany('App\Comment', 'post_id');
    }


}
