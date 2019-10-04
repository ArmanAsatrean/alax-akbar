<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Notifications\Notifiable;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
//use Illuminate\Foundation\Auth\Football as Authenticatable;

class Football extends Model{

public $table = 'footballs';


public function FootballsPlayers(){

   return $this->hasMany(FootballsPlayers::Class,'footballs_id','id');
}

};