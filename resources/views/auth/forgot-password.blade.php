@extends('layouts.app')

@section('title', '#somosAETH | Portal') 

@section('meta-description', 'This is a brief description of the home page.')

@section('meta-keywords', 'somosAETH, Portal, members') 

@section('content')
<style>
    .gradient-custom-2 {
        background: #fccb90;
        background: -webkit-linear-gradient(to right, #4a235a, #a569bd, #e8daef);
        background: linear-gradient(to right, #4a235a, #a569bd, #e8daef);
    }

    /*  @media (min-width: 768px) {
        .gradient-form {
            height: 100vh !important;
        }
    } */

    @media (min-width: 769px) {
        .gradient-custom-2 {
            border-top-right-radius: .3rem;
            border-bottom-right-radius: .3rem;
        }
    }
</style>

<section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100" style="padding:0px;">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
                <div class="card rounded-3 text-black">
                    <div class="row g-0">
                        <div class="col-lg-6">
                            <div class="card-body p-md-5 mx-md-4">
                                    <div class="mb-4 text-sm text-gray-600">
                                        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                                    </div>

                                    <!-- Session Status -->
                                    <x-auth-session-status class="mb-4" :status="session('status')" />

                                    <form method="POST" action="{{ route('password.email') }}">
                                        @csrf

                                        <!-- Email Address -->
                                        <div>
                                            <x-input-label for="email" :value="__('Email')" style="border-color:red"/>
                                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                                :value="old('email')" required autofocus />
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>

                                        <div class="flex items-center justify-end mt-4">
                                            <x-primary-button style=" background: linear-gradient(to right, #4a235a, #a569bd, #e8daef);">
                                                {{ __('Email Password Reset Link') }}
                                            </x-primary-button>
                                        </div>
                                    </form>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                            <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                <h4 class="mb-4" style="color:#fff">#somosAETH</h4>
                                <p class="small mb-0" style="color:#4a235a">"¿Olvidaste tu contraseña? No hay problema. Solo danos tu dirección de correo electrónico y te enviaremos un enlace para restablecer la contraseña que te permitirá elegir una nueva."</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection