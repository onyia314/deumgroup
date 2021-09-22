@extends('layouts.dashboard')
@push('tinymce')

@endpush
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

    <form id="form_validation" action="{{route('projects.update' , $project->id)}}" method="POST" enctype="multipart/form-data">
       
        @csrf

        <div class="form-group form-float mb-3 mt-4">
            <input type="file" name="project_image">
        </div>

        <div class="form-group form-float mb-3">
            <input type="text" name="title" class="form-control" placeholder="title" value="{{$project->title}}">
        </div>

        <div class="form-group form-float mb-3">
            <input type="text" name="client" class="form-control" placeholder="client" value="{{$project->client}}">
        </div>
        
        <div class="form-group form-float mb-3 mt-3">
            <textarea name="content" cols="30" rows="5" placeholder="content" class="form-control no-resize">{{$project->content}}</textarea>
        </div>

        <button class="btn btn-raised btn-primary btn-round waves-effect" type="submit">Update Project</button>
    </form>
</div>

@endsection
