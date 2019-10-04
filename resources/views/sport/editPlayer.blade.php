@extends('layouts.main')
@section('content')


<form enctype="multipart/form-data" method="POST" action="{{url('/players/edit')}}">
                @csrf
                <input type="hidden" name="id" value="{{$player->id}}">
                <input class="form-control" name="name" value="{{$player->name}}">
                <input class="form-control" type="file" name="images">
                @if($player->images)
                <img src="{{asset('/storage/images/' . $player->images)}}">
                @endif
                <button type="submit" class="btn btn-success">Save</button>
            </form>

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