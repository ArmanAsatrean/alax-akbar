@extends('layouts.main')
@section('content')
<div class="container">
<table >
<tr>
    <th>
    <form action="{{url('/players')}}" method="POST">
    @csrf
   <p><select name="id">
   <option>Select Team</option>
   @foreach ($football as $foot)
   <option value="{{$foot->id}}">
        {{$foot->name}}<br/>
       </option>
       @endforeach


   </select>
   <input type="submit" value="Отправить"></p>
    
   </th>
  </tr>
  </table>
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
                  </div>
@endforeach

</table>
<a href="{{url('/players/add')}}" class="btn btn-primary">Add Players</a>
</div>
@endsection