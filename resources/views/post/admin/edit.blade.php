@extends('layouts.dashboard')
@push('tinymce')
{{-- <script>
    tinymce.init({
        selector: '#postTextArea',
        plugins: 'link hr lists',
        default_link_target: '_blank',
        toolbar: 'link hr numlist bullist',
    });
</script> --}}
@endpush
@section('content')

{{-- @if ($errors->any())
    @foreach ($errors->all() as $error)
        <div>{{$error}}</div>
    @endforeach
@endif
@if (session('status'))
<div class="alert alert-success">{{session('status')}}</div>
@endif
<form action="{{route('posts.update' , $post->slug)}}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="post_image">
    <input type="text" name="title" placeholder="title" value="{{$post->title}}">
    <select name="categories[]" id="categories" multiple>
        @foreach ($categories as $category)
            <option value="{{$category->id}}" @php if(in_array($category->id,$post_category_ids)) echo 'selected';@endphp>{{$category->name}}</option>
        @endforeach
    </select>
    <textarea name="content" id="postTextArea" cols="30" rows="10">{{$post->content}}</textarea>
    <button class ="btn" type="submit">save post</button>
</form>  --}}   

<div class="body">
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="color-red">{{$error}}</div>
        @endforeach
    @endif

    @if (session('status'))
        <div class="alert alert-success">{{session('status')}}</div>
    @endif

    <form id="form_validation" action="{{route('posts.update' , $post->slug)}}" method="POST" enctype="multipart/form-data">
       
        @csrf

        <div class="form-group form-float mb-3 mt-4">
            <input type="file" name="post_image">
        </div>

        <div class="form-group form-float mb-3">
            <input type="text" name="title" class="form-control" placeholder="title" value="{{$post->title}}">
        </div>

        <div class="form-group form-float mb-3">
            <select name="categories[]" id="categories" multiple>
                @foreach ($categories as $category)
                    <option value="{{$category->id}}" @php if(in_array($category->id,$post_category_ids)) echo 'selected'; @endphp> {{$category->name}}</option>
                    @endforeach
            </select>
        </div>

        <div class="form-group form-float mb-3 mt-3">
            <textarea name="content"  id="postTextArea" cols="30" rows="5" placeholder="Description" class="form-control no-resize">{{$post->content}}</textarea>
        </div>

        <button class="btn btn-raised btn-primary btn-round waves-effect" type="submit">update Post</button>
    </form>
</div>
@endsection
