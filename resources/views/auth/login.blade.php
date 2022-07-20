@extends('layouts/blankLayout')

@section('title', 'Login Basic - Pages')

@section('page-style')
<!-- Page -->
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-auth.css')}}">
@endsection

<x-guest-layout>
  <x-auth-card>
      <x-slot name="logo">
          <a href="/">

          </a>
      </x-slot>

      <!-- Session Status -->
      <x-auth-session-status class="mb-4" :status="session('status')" />

      <!-- Validation Errors -->
      <x-auth-validation-errors class="mb-4" :errors="$errors" />

      @section('content')
<div class="container-xxl">
  <div class="authentication-wrapper authentication-basic container-p-y">
    <div class="authentication-inner">
      <!-- Register -->
      <div class="card">
        <div class="card-body">
          <!-- Logo -->
          <div class="app-brand justify-content-center">
            <a href="{{url('/')}}" class="app-brand-link gap-2">
              <span class="app-brand-logo demo">@include('_partials.macros',["width"=>25,"withbg"=>'#696cff'])</span>
              <span class="app-brand-text demo text-body fw-bolder">{{config('variables.templateName')}}</span>
            </a>
          </div>
          <!-- /Logo -->
          <h4 class="mb-2">Bem-vindo ao {{config('variables.templateName')}}! 👋</h4>

      <form method="POST" action="{{ route('login') }}">
          @csrf

          <!-- Email Address -->
          <div>
              <x-label for="email" :value="__('Email')" />

              <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
          </div>

          <!-- Password -->
          <div class="mt-4">
              <x-label for="password" :value="__('Senha')" />

              <x-input id="password" class="block mt-1 w-full"
                              type="password"
                              name="password"
                              required autocomplete="current-password" />
          </div>

          <!-- Remember Me -->
          {{-- <div class="block mt-4">
              <label for="remember_me" class="inline-flex items-center">
                  <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                  <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
              </label>
          </div> --}}

          <div class="block items-center justify-end mt-4">
              {{-- @if (Route::has('password.request'))
                  <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                      {{ __('Forgot your password?') }}
                  </a>
              @endif --}}

              <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                    {{ __('Cadastrar-se') }}
                </a>

              <x-button class="ml-3" style="background-color: #696cff; width: 100%; border-radius: 5px; !important">
                  {{ __('Logar') }}
              </x-button>
          </div>
      </form>

    </div>
  </div>
</div>
<!-- /Register -->
</div>
</div>

@endsection
  </x-auth-card>
</x-guest-layout>
