@extends('layouts.dashboard')
@section('content')

    @if (session('status'))
    <div class="alert alert-success">{{session('status')}}</div>
    @endif
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    @endif
    <form action="{{route('categories.update' , $category->id)}}" method="POST">
    @csrf
    @method('put')
    <input type="text" name="name" id="category_name" value="{{$category->name}}">
    <button type="submit">Update Category</button>
    </form>
@endsection