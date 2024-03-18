<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    @vite('resources/css/app.css')
</head>
<body>
    <div class="max-w-2xl mx-auto mt-20 py-8 px-8 bg-white rounded-md">
        <button class="py-2 px-4 rounded-md bg-blue-400 text-white font-medium hover:bg-blue-600 duration-150 ease-in-out"><a href="{{ route('home') }}"><i class="fa fa-home mr-1"></i>Home</a></button>
        <div class="flex justify-center">
            <img src="{{ asset('img/logo.png') }}" alt="" width="100">
        </div>
        
        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>
        
            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>
        
            <div class="block mt-4 flex justify-between">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
                @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
                @endif
            </div>
        
            <div class="flex items-center justify-end mt-4">
                <button type="submit" class="w-full py-2 px-2 rounded-md bg-blue-500 text-white font-medium hover:bg-blue-600 duration-150 ease-in-out">Log In</button>
            </div>
        </form>
    </div>
</body>
</html>

