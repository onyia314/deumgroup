{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}

@extends('layouts.app')

@section('content')
    <!--============== Password Recovery Section Start ==============-->
    <div class="full-row bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="w-50 m-auto w-sm-100">
                        <div class="login-form">
                            <h4 class="text-secondary mb-4">Recover Your Password</h4>

                            @if (session('status'))
                                <p>{{session('status')}}</p>
                            @endif
                            
                            <form class="icon-form" method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div class="form-group email">
                                    <label for="email">Email address</label>
                                    <input name="email" id="email" type="email" class="form-control bg-gray" placeholder="email" value="{{old('email')}}">

                                </div>
                                <button type="submit" class="btn btn-primary mt-3">Email Password Reset Link</button>
                            </form>

                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                <li style="color: red;">{{$error}}</li>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--============== Password Recovery Section End ==============-->
@endsection
