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
    <form action="{{route('categories.store')}}" method="POST">
    @csrf
    <input type="text" name="name" id="category_name">
    <button type="submit">Add Category</button>
    </form>
@endsection