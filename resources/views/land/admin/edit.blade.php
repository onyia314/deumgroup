@extends('layouts.dashboard')

@section('content')

<div class="body">
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="color-red">{{$error}}</div>
        @endforeach
    @endif

    @if (session('status'))
        <div class="alert alert-success">{{session('status')}}</div>
    @endif

    <form id="form_validation" action="{{route('lands.update' , $land->id )}}" method="POST" enctype="multipart/form-data">
       
        @csrf

        <div class="form-group form-float mb-3 mt-4">
            <input type="file" name="land_image">
        </div>

        <div class="form-group form-float mb-3">
            <input type="text" name="location" class="form-control" placeholder="location" value="{{$land->location}}">
        </div>

        <div class="form-group form-float mb-3">
            <input type="text" name="price" class="form-control" placeholder="price" value="{{$land->price}}">
        </div>

        <div class="form-group form-float mb-3">
            <input type="text" name="area" class="form-control" placeholder="area" value="{{$land->area}}">
        </div>
        
        <div class="form-group form-float mb-3 mt-3">
            <textarea name="description" cols="30" rows="5" placeholder="Description" class="form-control no-resize">{{$land->description}}</textarea>
        </div>

        <button class="btn btn-raised btn-primary btn-round waves-effect" type="submit">Update Land</button>
    </form>
</div>

@endsection
