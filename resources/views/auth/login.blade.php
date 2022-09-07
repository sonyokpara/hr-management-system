@extends('layouts.auth')
@section('page', 'Login')
@section('form')
<form class="card mt-5 p-5 md:p-10" action="{{route('login')}}" method="POST">
    @csrf
    <div class="flex flex-col items-center mb-5 mx-5 md:mx-10">
        <img class="p-2" src="{{asset('images/rocksure-logo.webp')}}" alt="rocksure logo">
    </div>

    @if (session()->has('invalid_credentials'))
        <div class="bg-red-500 rounded-full py-3 mb-3 text-sm text-white text-center w-full" role="alert">
            <i class="la la-circle-xmark"></i>
            {{session()->get('invalid_credentials')}}
        </div>
    @endif
    <div class="mb-5">
        <label class="label block mb-2" for="email">Staff ID</label>
        <input id="email" type="text" class="form-control" name="staff_id" placeholder="example@example.com">
    </div>
    <div class="mb-5">
        <label class="label block mb-2" for="password">Password</label>
        <label class="form-control-addon-within">
            <input id="password" type="password" name="password" class="form-control rounded-full border-none">
            <span class="flex items-center ltr:pr-4 rtl:pl-4">
                <button type="button"
                    class="btn btn-link text-gray-300 dark:text-gray-700 la la-eye text-xl leading-none"
                    data-toggle="password-visibility"></button>
            </span>
        </label>
    </div>
    <div class="mb-5">
        <label class="custom-checkbox">
            <input type="checkbox" name="remember_me">
            <span></span>
            <span>Remember Me</span>
        </label>
    </div>
    <div class="flex items-center">
        <a href="auth-forgot-password.html" class="text-sm uppercase">Forgot Password?</a>
        <button type="submit" class="btn btn_primary ltr:ml-auto rtl:mr-auto uppercase">Login</button>
    </div>
    {{-- @yield('form') --}}
</form>
@endsection
