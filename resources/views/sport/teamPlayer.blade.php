@extends('layouts.main')
@section('content')
@foreach($team as $tea)
  <div class="col-md-3">
                     <div class="team-column style-2">
                 @if($tea->Players->images)
                        <img width="266px" height="367px" src="{{asset('/storage/images/' . $tea->Players->images)}}" alt="dsfa">
                 @else
                        <img src="{{asset('images/img-1-3.jpg')}}" alt="">
                 @endif
                        <div class="player-name">
                           <div class="desination-2"> 
                                
                                   {{$tea->Players->position}}
                                
                           </div>
                           <h5>{{$tea->Players->name}}</h5>
                           <span class="player-number">{{$tea->Players->number}}</span>
                        </div>
                     </div>
                     <a type="submit" href="{{url('players/edit/' . $tea->Players->id)}}" class="btn btn-danger">Edit</a>
                  </div>
                  
@endforeach
@endsection