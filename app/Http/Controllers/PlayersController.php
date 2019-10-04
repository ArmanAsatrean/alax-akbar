<?php

namespace App\Http\Controllers;

use App\Players;
use App\FootballsPlayers;
use App\Football;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PlayersController extends Controller
{
    public function addPlayers(){

        $football = Football::get();
        return view('sport.addPlayers',['football'=>$football]);
    }
    public function postAddPlayers(Request $request){

        $validator = $request->validate([
            'name'=> 'required|max:255',
            'age'=> 'required|numeric',
            'money'=>'numeric',
            'skill'=>'required|numeric',
            'nationality'=>'required|string|max:255',
            'position'=>'string|max:255|min:1',
             'id'=>'required'
        ]);
      
       
               
        $players = new Players;
        $players->name = $request['name'];
        $players->age = $request['age'];
        $players->number = $request['number'];
        $players->money = $request['money'];
        $players->skill = $request['skill'];
        $players->nationality = $request['nationality'];
        $players->position = $request['position'];
        if ($request->hasFile('images')){
        $file_name = $request->name . '_' . time() . '.jpg';
        $request->images->storeAs('public/images', $file_name);
        $players->images = $file_name;
        }
        $players->save();
         
        $plyid = Players::where('id',$players->id)->first();
        
        $footplayers = new FootballsPlayers;
        $footplayers->footballs_id = $request['id'];
        $footplayers->players_id = $plyid->id;
        $footplayers->save();
        
        return redirect('players/add');
    }


    public function teamPlayers($id = false)
    {   
        if(!$id){
            die("Category Not Found");
        }
        $team = FootballsPlayers::with('Players')->where('footballs_id',$id)->get();
        return view('sport.teamPlayer',['team'=>$team]);
    }

    public function editPlayers($id = false){
        $player = Players::where('id',$id)->first();
        return view('sport.editPlayer',['player' => $player]);
    }
    public function postEditPlayers(Request $request){
        $player = Players::where('id',$request->id)->first();
        $player->name = $request['name'];
        if($request->hasFile('images')){
        $file_name = $request->name . '_' . time() . '.jpg';
        $request->images->storeAs('public/images', $file_name);
        $player->images = $file_name;
        }
        $player->save();
        $team = FootballsPlayers::where('players_id', $request->id)->first('footballs_id');
       
        return redirect('/teamPlayer/' . $team->footballs_id);

    }
   
    
}
