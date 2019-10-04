@extends ('layouts.main')
@section('content')
<h1 style="text-align:center">Football Player Create</h1>

<div class="container">
<form action="{{url('/players/add')}}" enctype="multipart/form-data" method="POST">
@csrf
    <label style="padding-right: 8rem;">Please type your player Team</label><br/>
    <select name="id">
     <option>Select Team</option>
        @foreach ($football as $foot)
     <option value="{{$foot->id}}">
        {{$foot->name}}<br/>
       </option>
       @endforeach
     </select><br/>
    <label style="padding-right: 8rem;" for="check1">Please type your player Name</label><br/>
    <input style="padding-bottom: 7px;" id="check1" type="text" placeholder="Имя Игрока" name="name"> 
    <br/>
    <label style="padding-right: 8rem;" for="check10">Please type your player Number</label><br/>
    <input style="padding-bottom: 7px;" id="check10" type="text" placeholder="Номер Игрока" name="number"> 
    <br/>
    <label  style="padding-right: 7.8rem;" for="check2">Please type your player Age</label><br/>
    <input  style="padding-bottom: 7px;" id="check2" type="text" placeholder="Возрост Игрока" name="age">
    <br/>

    <label style="padding-right: 4.1rem;" for="check3">Please type your player Skill</label><br/>
    <input  style="padding-bottom: 7px;" id="check3" type="text" placeholder="Скилл Игорка" name="skill">
    <br/>

    <label style="padding-right: 9.7rem;" for="check4">Please type your player Income</label><br/>
    <input  style="padding-bottom: 7px;" id="check4" type="text" placeholder="Доход Игрока" name="money">
    <br/>
 
    <label style="padding-right: 3.4rem;" for="check5">Please type your player Nationality</label><br/>
    <input  style="padding-bottom: 7px;" id="check5" type="text" placeholder="Национальность Игрока" name="nationality">
    <br/>

    <label style="padding-right: 8.4rem;" for="check6">Please type your player Position</label><br/>
    <input  style="padding-bottom: 7px;" id="check6" type="text" placeholder="Позиция игрока" name="position">
    <br/>

    <input  type="file" name="images">
    
   <input style="padding-right:2rem;margin-right: 1rem;" type="submit" class="btn btn-primary" value="Registration">
   
    
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