@extends('layouts.app')
@push('tinymce')
<script>
    tinymce.init({
        selector: '#postTextArea',
        plugins: 'link hr lists',
        default_link_target: '_blank',
        toolbar: 'link hr numlist bullist',
    });
</script>
@endpush
@section('content')
<form action="" method="post">
    <textarea name="post" id="postTextArea" cols="30" rows="10"></textarea>
</form>    
@endsection
