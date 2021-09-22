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

<div class="body">
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="color-red">{{$error}}</div>
        @endforeach
    @endif

    @if (session('status'))
        <div class="alert alert-success">{{session('status')}}</div>
    @endif

    <form id="form_validation" action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
       
        @csrf

        <div class="form-group form-float mb-3 mt-4">
            <input type="file" name="post_image">
        </div>

        <div class="form-group form-float mb-3">
            <input type="text" name="title" class="form-control" placeholder="title" value="{{old('title')}}">
        </div>

        <select name="categories[]" id="categories" multiple>
            @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
        
        <div class="form-group form-float mb-3 mt-3">
            <textarea name="content"  id="postTextArea" cols="30" rows="5" placeholder="Description" class="form-control no-resize">{{old('content')}}</textarea>
        </div>

        <button class="btn btn-raised btn-primary btn-round waves-effect" type="submit">Save Post</button>
    </form>
</div>

@endsection
