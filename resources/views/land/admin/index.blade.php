@extends('layouts.dashboard')

@section('content')
<div class="body table-responsive">
    <table class="table m-b-0">
        <thead class="thead-dark">
            <tr>
            <th scope="col">#</th>
            <th scope="col">date</th>
            <th scope="col">price</th>
            <th scope="col">location</th>
            <th scope="col">description</th>
            <th scope="col">edit</th>
            <th scope="col">delete</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($lands as $land)
                <tr>
                    <th scope="row">{{$land->id}}</th>
                    <td>{{$land->created_at->format('d/m/Y')}}</td>
                    <td>{{$land->price}}</td>
                    <td>{{$land->location}}</td>
                    <td>{{$land->description}}</td>
                    <td><a href="{{route('lands.edit' , $land->id)}}" class="btn btn-primary">edit</a></td>
                    <td>
                        <form action="{{route('lands.destroy' , $land->id)}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger">delete</button>
                        </form>
                    </td>
                </tr>        
            @endforeach
        
        </tbody>
        </table>

        {{$lands->links()}}

        @if (session('status'))
            <div class="alert alert-success text-center">{{session('status')}}</div>
        @endif
</div>    
@endsection
