@extends('layouts.main')
@section('blog')
<div class="table-responsive-md">
<table style="margin:0 auto;border:1px solid black; " class="table-dark">
    <tr>
    <th>Team name</th>
    <th style="padding-right:10px">Team Rating</th>
    <th style="padding-right:20px">Team Nationality</th>
    <th style="padding-right:10px">Team Liga</th>
    <th style="padding-right:10px">Team Profitability</th>
    <th style="padding-right:10px">Team Costs</th>
    <th style="text-align:center">Team stadium</th>
    <th>Team Shape Color</th>
  </tr>
  
    <td style="padding:10px">@foreach ($football as $foot)
        {{ $foot->name }}<br/>
        @endforeach
    </td>
  
   
    <td style="text-align:center">@foreach ($football as $foot)
        {{ $foot->rating }}<br/>
        @endforeach
    </td>
 
  
    <td style="text-align:center">@foreach ($football as $foot)
        {{ $foot->nationality }}<br/>
        @endforeach
    </td>
 
  
    <td>@foreach ($football as $foot)
        {{ $foot->liga }}<br/>
        @endforeach
    </td>
  
    <td style="text-align:center">@foreach ($football as $foot)
        {{ $foot->profitability }}<br/>
        @endforeach
    </td>
 
    <td style="text-align:center">@foreach ($football as $foot)
        {{ $foot->costs }}<br/>
        @endforeach
    </td>
  
    <td style="text-align:center">@foreach ($football as $foot)
        {{ $foot->stadium }}<br/>
        @endforeach
    </td>
  
    <td style="text-align:center">@foreach ($football as $foot)
        {{ $foot->shapeColor }}<br/>
        @endforeach
    </td>
    <td>
        @if($foot->logo)
           <img width="50" src="{{asset('/storage/images/' . $foot->logo)}}">
        @endif
    </td>
    </table>
</div>
    <form method="get" action="/team">
    <button type="submit" class="btn btn-primary" url="/team">Creat Team</button>
    </form>
    
    
@endsection

