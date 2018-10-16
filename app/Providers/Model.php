<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function scopeIncomplete($query) //Gerir manni kleift að gera Task::Incomplete() í tinker og klasinn er global
    {

    	return $query->where('complete', 0);

    }

    protected $fillable = ['title', 'body'];

}
