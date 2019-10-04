<?php

namespace App\Http\Controllers;

use App\Players;
use App\FootballsPlayers;
use App\Football;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

class sportController extends Controller{
     
    public function index(){
        return view('sport.index');
    }

    public function about(){
        return view('sport.about');
    }
    public function team(){
        return view('sport.team');
    }
    public function news(){
        return view('sport.news');
    }
    public function blog(){
        $football = Football::get();
        return view('sport.blog',['football'=>$football]);
      
    }
    public static function getTeam(){
        $teams = Football::get();
        return $teams;
    }
    
    public function players(Request $request){
        
        $football = Football::get();
        $team = FootballsPlayers::with('Players','Football')->where('footballs_id',$request->id)->get();
        return view('sport.players',['football'=>$football],['team'=>$team]);

    }
    
   
    public function contact(){
        return view('sport.contact');
    }
    public function postCreateTeam(Request $request){
        
        
    //     $player = Players::with(['FootballsPlayers.Football'])->get()->toArray();      

    //    dd($player);
    //     die($player);
        $validator = Validator::make($request->all(),[
            'name'=>'required|string',
            'rating'=>'required|min:1|max:10',
            'nationality'=>'required|string',
            'liga'=>'required|string',
            'profitability'=>'required',
            'costs'=>'required',
            'stadium'=>'string',
            'shapeColor'=>'string',
            
        ]);
        if($validator->fails()){
        
            return redirect('/team')
                    ->withErrors($validator)
                    ->withInput();

                }else{
                    
                    $input = $request->all();
                    if($request->has('name')){
                        $football = new Football;
                        $football->name = $request['name'];
                        $football->rating = $request['rating'];
                        $football->nationality = $request['nationality'];
                        $football->liga = $request['liga'];
                        $football->profitability = $request['profitability'];
                        $football->costs = $request['costs'];
                        $football->stadium = $request['stadium'];
                        $football->shapeColor = $request['shapeColor'];
                        $file_name = $request->name . '_' . time() . '.jpg';
                        $request->logo->storeAs('public/images', $file_name);
                        $football->logo = $file_name;
                        
                        $football->save();
                        return redirect("team");
                    }
                }        
    }
   
}
