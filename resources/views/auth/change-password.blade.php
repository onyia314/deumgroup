@extends('layouts.dashboard')
@section('content')
<div class="block-header">
    <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-12">
            <h2>Form Validation</h2>
            @if (session('success'))
            <div class="alert alert-success text-center">{{session('success')}}</div>
             @endif
            <ul class="breadcrumb padding-0">
                <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i></a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                <li class="breadcrumb-item active">Form Validation</li>
            </ul>
        </div>
        <div class="col-lg-7 col-md-7 col-sm-12">
            <div class="input-group m-b-0">                
                <input type="text" class="form-control" placeholder="Search...">
                <span class="input-group-addon">
                    <i class="zmdi zmdi-search"></i>
                </span>
            </div>
        </div>
    </div>
</div>
<!-- Basic Validation -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2><strong>Basic</strong> Validation</h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                            <li><a href="javascript:void(0);" class="boxs-close">Delete</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <form id="form_validation" method="POST" action="{{route('password.change')}}">
                    @csrf
                    <div class="form-group form-float">
                        <input type="password" class="form-control" placeholder="Current Password" name="current_password" >
                        @error('current_password')
                                <div style="color: red;">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group form-float">
                        <input type="password" class="form-control" placeholder="New Password" name="password" >
                        @error('password')
                                <div style="color: red;">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group form-float">
                        <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" >
                    </div>
                
                    <button class="btn btn-raised btn-primary btn-round waves-effect" type="submit">SUBMIT</button>
                </form>

            </div>
        </div>
    </div>
</div>

    
@endsection
