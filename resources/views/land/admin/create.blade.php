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

    <form id="form_validation" action="{{route('lands.store')}}" method="POST" enctype="multipart/form-data">
       
        @csrf

        <div class="form-group form-float mb-3 mt-4">
            <input type="file" name="land_image">
        </div>

        <div class="form-group form-float mb-3">
            <input type="text" name="location" class="form-control" placeholder="location" value="{{old('location')}}">
        </div>

        <div class="form-group form-float mb-3">
            <input type="text" name="price" class="form-control" placeholder="price" value="{{old('price')}}">
        </div>

        <div class="form-group form-float mb-3">
            <input type="text" name="area" class="form-control" placeholder="area" value="{{old('area')}}">
        </div>
        
        <div class="form-group form-float mb-3 mt-3">
            <textarea name="description" cols="30" rows="5" placeholder="Description" class="form-control no-resize">{{old('description')}}</textarea>
        </div>

        <button class="btn btn-raised btn-primary btn-round waves-effect" type="submit">Save Land</button>
    </form>
</div>

@endsection
