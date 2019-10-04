<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    public function make(){
        return $this->hasOne(Makes::Class,'id','make_id');
    }
    public function model(){
        return $this->hasOne(Models::Class,'id','model_id');
    }
}
