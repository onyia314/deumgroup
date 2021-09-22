@extends('layouts.dashboard')

@section('content')
<div class="body table-responsive">
    <table class="table m-b-0">
        <thead class="thead-dark">
            <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">edit</th>
            <th scope="col">delete</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($categories as $category)
                <tr>
                    <th scope="row">{{$category->id}}</th>
                    <td>{{$category->name}}</td>
                    <td><a href="{{route('categories.edit' , $category->id)}}" class="btn btn-primary">edit</a></td>
                    <td>
                        <form action="{{route('categories.destroy' , $category->id)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">delete</button>
                        </form>
                    </td>
                </tr>        
            @endforeach
        
        </tbody>
        </table>

        {{$categories->links()}}

        @if (session('success'))
            <div class="alert alert-success text-center">{{session('success')}}</div>
        @endif

        @if (session('failed'))
            <div class="alert alert-danger text-center">{{session('failed')}}</div>
        @endif
</div>    
@endsection
