<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Makes extends Model
{
    public function models(){
        return $this->hasMany(Models::Class,'make_id','id');
    }
}
