<?php

namespace App;

class Task extends Model
{
    public function scopeIncomplete($query) //Gerir manni kleift að gera Task::Incomplete() í tinker og klasinn er global
    {

    	return $query->where('complete', 0);

    }



}
