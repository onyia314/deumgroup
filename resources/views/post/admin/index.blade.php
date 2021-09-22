@extends('layouts.dashboard')

@section('content')
<div class="body table-responsive">
    <table class="table m-b-0">
        <thead class="thead-dark">
            <tr>
            <th scope="col">#</th>
            <th scope="col">title</th>
            <th scope="col">date</th>
            <th scope="col">edit</th>
            <th scope="col">view</th>
            <th scope="col">delete</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($posts as $post)
                <tr>
                    <th scope="row">{{$post->id}}</th>
                    <td>{{$post->title}}</td>
                    <td>{{$post->created_at->format('d/m/Y')}}</td>
                    <td><a href="{{route('posts.edit' , $post->slug)}}" class="btn btn-primary">edit</a></td>
                    <td><a href="{{route('posts.show' , $post->slug)}}" class="btn btn-primary">view</a></td>
                    <td>
                        <form action="{{route('posts.destroy' , $post->slug)}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger">delete</button>
                        </form>
                    </td>
                </tr>        
            @endforeach
        
        </tbody>
        </table>

        {{$posts->links()}}

        @if (session('status'))
            <div class="alert alert-success text-center">{{session('status')}}</div>
        @endif
</div>    
@endsection
