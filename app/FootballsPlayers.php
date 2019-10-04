<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FootballsPlayers extends Model
{
    public $table = 'footballs_players';
    public $timestamps = false;
    public function Players(){
    return $this->hasOne(Players::Class,'id','players_id');
    }
    public function Football(){
        return $this->hasOne(Football::Class,'id','footballs_id');
    }
    
}
