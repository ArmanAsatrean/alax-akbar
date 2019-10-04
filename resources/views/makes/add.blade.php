@extends('layouts.main')
@section('content')

<form enctype="multipart/form-data" method="POST" action="{{url('/makes/add')}}">
                @csrf
                <input class="form-control" name="name">
                <input class="form-control" type="file" name="logo">
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