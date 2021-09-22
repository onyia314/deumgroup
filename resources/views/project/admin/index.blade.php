@extends('layouts.dashboard')

@section('content')
<div class="body table-responsive">
    <table class="table m-b-0">
        <thead class="thead-dark">
            <tr>
            <th scope="col">#</th>
            <th scope="col">title</th>
            <th scope="col">client</th>
            <th scope="col">date</th>
            <th scope="col">edit</th>
            <th scope="col">delete</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($projects as $project)
                <tr>
                    <th scope="row">{{$project->id}}</th>
                    <td>{{$project->title}}</td>
                    <td>{{$project->client}}</td>
                    <td>{{$project->created_at->format('d/m/Y')}}</td>
                    <td><a href="{{route('projects.edit' , $project->id)}}" class="btn btn-primary">edit</a></td>
                    <td>
                        <form action="{{route('projects.destroy' , $project->id)}}" method="project">
                            @csrf
                            <button type="submit" class="btn btn-danger">delete</button>
                        </form>
                    </td>
                </tr>        
            @endforeach
        
        </tbody>
        </table>

        {{$projects->links()}}

        @if (session('status'))
            <div class="alert alert-success text-center">{{session('status')}}</div>
        @endif
</div>    
@endsection
