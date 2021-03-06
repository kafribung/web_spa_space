@extends('auth.master_auth', ['title' => 'Register Kafri Bung'])
@section('content')
<div class="flex justify-center items-center h-screen">
    <div class="bg-white shadow-lg px-16 py-10 rounded-t-lg w-1/4">
        <div class="text-xl font-bold mb-2">Register</div>
        <form  method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-2">
                <label for="username" class="block text-sm mb-2">Username</label>
                <input type="text" name="name"  class="shadow w-full border py-1 px-3 border-gray-500 rounded-md leading-tight focus:outline-none focus:shadow-outline" placeholder="username" id="username">
                @error('name')
                    <div class="text-sm mt-2 text-red-600">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-2">
                <label for="email" class="block text-sm mb-2">Email</label>
                <input type="email" name="email"  class="shadow w-full border py-1 px-3 border-gray-500 rounded-md leading-tight focus:outline-none focus:shadow-outline" placeholder="email" id="username">
                @error('email')
                    <div class="text-sm mt-2 text-red-600">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-2">
                <label for="password" class="block text-sm mb-2">Password</label>
                <input type="password" name="password" class="shadow w-full border py-1 px-3 border-gray-500 rounded-md leading-tight focus:outline-none focus:shadow-outline" placeholder="Password" id="password">
                @error('password')
                    <div class="text-sm mt-2 text-red-600">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-2">
                <label for="password_confir" class="block text-sm mb-2">Password Confirmation</label>
                <input type="password" name="password_confirmation"  class="shadow w-full border py-1 px-3 border-gray-500 rounded-md leading-tight focus:outline-none focus:shadow-outline" placeholder="password_confirmation" id="password_confir">
                @error('password')
                    <div class="text-sm mt-2 text-red-600">{{ $message }}</div>
                @enderror
            </div>
            <div class="flex items-center justify-between mt-2">
                <button class="bg-blue-500  hover:bg-blue-700 text-white mr-2 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Sign Up
                </button>
                <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
                    Forgot Password?
                </a>
            </div>
        </form>
    </div>
</div>
@stop

