<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Players extends Model
{
    public $table = 'players';
    public $timestamps = false;

    public function Football(){
        return $this->hasMany(Football::Class,'name','teamName');
    }
}
