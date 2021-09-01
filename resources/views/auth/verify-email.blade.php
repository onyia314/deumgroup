{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-button>
                        {{ __('Resend Verification Email') }}
                    </x-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
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
                            <h4 class="text-secondary mb-4">Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.</h4>
                            @if (session('status') == 'verification-link-sent')
                                <div>
                                    A new verification link has been sent to the email address you provided during registration.
                                </div>
                            @endif
                            <form class="icon-form" method="POST" action="{{ route('verification.send') }}">
                                @csrf
                                <button type="submit" class="btn btn-primary mt-3">Resend verification email</button>
                            </form>

                            <form class="icon-form" method="POST" action="{{route('logout')}}">
                                @csrf
                                <button type="submit" class="btn btn-primary mt-3">Logout</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

