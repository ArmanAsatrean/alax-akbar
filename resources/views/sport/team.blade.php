@extends('layouts.main')
@section('content')
<h1 style="text-align:center">Football Team Create</h1>

<div class="container">
 
<img style="float: right; width: 60%;height:100%;" src="http://i1.ytimg.com/vi/awoz1_KNK8g/maxresdefault.jpg">
    
<form action="{{url('/team')}}" method="post" enctype="multipart/form-data">
@csrf

    <label style="padding-right: 8rem;" for="check1">Please type your team name</label><br/>
    <input style="padding-bottom: 7px;" id="check1" type="text" placeholder="Имя команды" name="name"> 
    <br/>
    <label  style="padding-right: 7.8rem;" for="check2">Please type your team rating</label><br/>
    <input  style="padding-bottom: 7px;" id="check2" type="text" placeholder="Рейтинг команды" name="rating">
    <br/>

    <label style="padding-right: 4.1rem;" for="check3">Please type your team nationality</label><br/>
    <input  style="padding-bottom: 7px;" id="check3" type="text" placeholder="Национальность команды " name="nationality">
    <br/>

    <label style="padding-right: 9.7rem;" for="check4">Please type your team liga</label><br/>
    <input  style="padding-bottom: 7px;" id="check4" type="text" placeholder="Лига команды" name="liga">
    <br/>
 
    <label style="padding-right: 3.4rem;" for="check5">Please type your team profitability</label><br/>
    <input  style="padding-bottom: 7px;" id="check5" type="text" placeholder="Доходность команды" name="profitability">
    <br/>

    <label style="padding-right: 8.4rem;" for="check6">Please type your team costs</label><br/>
    <input  style="padding-bottom: 7px;" id="check6" type="text" placeholder="Расходы команди" name="costs">
    <br/>
 
    <label style="padding-right: 1.3rem;" for="check7">Please type your team home stadium</label><br/>
    <input  style="padding-bottom: 7px;" id="check7" type="text" placeholder="Домашний стадион " name="stadium">
    <br/>
 
    <label style="padding-right: 3.5rem;" for="check8">Please type your team shape color</label><br/>
    <input  style="padding-bottom: 7px;" id="check8" type="text" placeholder="Цвет формы" name="shapeColor">
    <br/>
    <input class="form-control" type="file" name="logo"><br/>
 
    <input style="padding-bottom:7px;" type="submit" class="btn btn-primary" value="Registration">
    
</form>
<form method="get" action="/blog">
    <button type="submit" class="btn btn-primary">Created Team</button>
</form>
   
</div>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


@endsection