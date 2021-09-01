{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Reset Password') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}

@extends('layouts.app')

@section('content')

    <div class="dashboard-panel w-100">
        <h4 class="text-secondary mb-4">Reset Password</h4>
        <div class="dashboard-change-password p-5 bg-white">

            <form class="change-password" method="POST" action="{{ route('password.update') }}">
                @csrf
                    <!-- Password Reset Token -->
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    
                
                        <div class="mb-3 position-relative">
                            <label for="email" class="form-label">email</label>
                            <abbr title="email">
                                <input id="email" type="email" name="email" class="form-control" value="{{old('email' , $request->email)}}" 
                                required>
                            </abbr>
                        </div>
                        <div class="mb-3 position-relative">
                            <label for="new-password" class="form-label">New Password</label>
                            <abbr title="Password must 8 charactor and contain latter and number">
                                <input id="new-password" type="password" name="password" class="form-control" required>
                            </abbr>
                        </div>
                        <div class="mb-3">
                            <label for="renew-password" class="form-label">Re-Type New Password</label>
                            <abbr title="Re-Type New Password">
                                <input id="renew-password" type="password" name="password_confirmation" class="form-control" required>
                            </abbr>
                        </div>
                        <button class="btn btn-primary mt-3" type="submit">Reset password</button>
                    @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                <li style="color: red;">{{$error}}</li>
                                @endforeach
                    @endif
            </form>
            
        </div>
    </div>
    
    <div class="dashboard-copyright bg-white py-4 text-center w-100">© 2021 Homex All right reserved</div>
@endsection
