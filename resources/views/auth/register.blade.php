@extends('layouts.app')

@section('content')
     <!--============== Banner Section Start ==============-->
     <div class="page-banner full-row bg-gray py-5">
        <div class="container">
            <div class="row row-cols-md-2 row-cols-1 g-3">
                <div class="col">
                    <h3 class="page-name text-secondary m-0">Register</h3>
                </div>
                <div class="col">
                    <nav class="float-start float-md-end">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="index-1.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item active">Register</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--============== Banner Section End ==============-->

    <!--============== Register Section Start ==============-->
    <div class="full-row bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="mb-5">
                        <h4 class="mb-4 text-secondary">Welcome</h4>
                        <p>Adipiscing lacinia pede proin vulputate habitasse donec adipiscing. Cubilia Interdum hac turpis et dignissim vehicula porta nostra dictum nostra semper. Dictumst congue dictum. Nam massa id, netus interdum amet Metus turpis
                            scelerisque aptent sapien penatibus potenti.</p>
                    </div>
                    <div class="login-condition flat-small flat-primary">
                        <h5 class="mb-4 text-secondary">Keep in a mind a few basic password rules :</h5>
                        <div class="row">
                            <div class="col-md-8 col-xl-6">
                                <ul>
                                    <li><i class="flaticon-checked text-primary"></i>Change your passwords periodically</li>
                                    <li><i class="flaticon-checked text-primary"></i>Avoid re-using password for multiple site</li>
                                    <li><i class="flaticon-checked text-primary"></i>Use complex characters including uppercase and number</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="mt-sm-50">
                        <a href="login.html" class="text-secondary me-3">Login</a>
                        <a href="register.html" class="down-active text-secondary">Register</a>

                        <form method="POST" action="{{ route('register') }}" class="mt-5 icon-form">

                            @csrf

                            <div class="mb-3 user">
                                <label class="form-label" for="name">name</label>
                                <input id="name" name="name" value="{{old('name')}}" type="text" class="form-control bg-gray" placeholder="name">
                            </div>

                            <div class="mb-3 email">
                                <label class="form-label" for="email">Email address</label>
                                <input id="email" name="email" value="{{old('email')}}" type="email" class="form-control bg-gray" placeholder="email">
                            </div>
                            <div class="mb-3 password">
                                <label class="form-label" for="password">Password</label>
                                <input id="password" name="password" type="password" class="form-control bg-gray" placeholder="password">
                            </div>
                            <div class="mb-3 password">
                                <label class="form-label" for="password_confirmation">Re-enter Password</label>
                                <input id="password_confirmation" name="password_confirmation" type="password" class="form-control bg-gray" placeholder="re-enter password">
                            </div>
                            
                            <button type="submit" class="btn btn-primary mt-15">Register</button>

                            @if ($errors->any())
                                
                                @foreach ($errors->all() as $error)
                                    <li style="color:red;">{{$error}}</li>
                                @endforeach

                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============== Register Section End ==============-->
@endsection