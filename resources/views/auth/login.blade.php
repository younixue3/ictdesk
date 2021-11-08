@extends('layouts.app')

@section('content')
<div class="container">
    <form class="absolute bg-white shadow-lg border border-gray-300 rounded-xl w-72 md:w-96 left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center"  method="POST" action="{{ route('login') }}">
        @csrf
        <div class="my-10">
            <div class="text-4xl font-bold">Welcome</div>
            <div class="text-lg font-light leading-3">Sign in to your account</div>
        </div>
        @error('email')
        <div class="bg-red-300 mx-5 rounded-sm font-light" role="alert">
            <strong>{{ $message }}</strong>
        </div>
        @enderror
        @error('password')
        <div class="bg-red-300 mx-5 rounded-sm font-light" role="alert">
            <strong>{{ $message }}</strong>
        </div>
        @enderror
        <div class="mx-5 my-10">
            <input type="email" class="flex-1 block w-full rounded-t-xl focus:outline-none px-3 py-1.5 border border-b-0 border-gray-300" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            <input type="password" class="flex-1 block w-full rounded-b-xl focus:outline-none px-3 py-1.5 border border-gray-300" name="password" placeholder="Password" required autocomplete="current-password">
            <div class="flex items-start pl-1 mt-2 mx-1">
                <div class="flex items-center h-5">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                </div>
                <div class="ml-2 text-sm">
                    <label class="font-medium text-gray-700">Remember Me</label>
                </div>
            </div>
        </div>
        <div class="mx-5 my-10">
            <div class="m-auto flex space-x-5">
                <button class="bg-indigo-500 text-xl text-white text-center rounded-md shadow-md w-full px-5 py-1" type="submit"><span class="align-text-top">Sign in</span></button>
                <button class="text-xl text-indigo-500 text-center rounded-md shadow-md border border-gray-100 w-full px-5 py-1"><span class="align-text-top">Sign up</span></button>
            </div>
            <div class="mt-10 pt-3 border-t-2 space-x-2">
                <h1 class="text-gray-500 mb-2">login with</h1>
                <button class="bg-blue-700 focus:bg-blue-800 transition duration-150 text-white text-xl text-center rounded-full shadow-md w-8 h-8 px-1 py-0.5 pt-1"><i class="fab fa-facebook"></i></button>
                <button class="bg-red-600 focus:bg-red-600 transition duration-150 text-white text-xl text-center rounded-full shadow-md w-8 h-8 px-1 py-0.5 pt-1"><i class="fab fa-google"></i></button>
                <button class="bg-blue-500 focus:bg-blue-600 transition duration-150 text-white text-xl text-center rounded-full shadow-md w-8 h-8 pt-0.5"><i class="fab fa-twitter"></i></button>
            </div>
        </div>
    </form>

</div>
@endsection
