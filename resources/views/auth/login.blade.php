<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('layouts.css')
    <title>Login</title>
</head>
<body>
@include('layouts.header')
<br>
<br>
<br>
<br>
<main class="p-5">
<div class="container">
  <div class="row">
   <div class="col-sm-3" >   </div>

    <div class="col-sm-7" > 
    
         <div class="container">
       <!--  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editStd" id=" " onclick=""> Update </button>-->
       <div class="card bg-#eeee" style="width:400px; ">
         <div class="card-header">Login</div>
         <div class="card-body">
         <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="form-control"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <button class="btn btn-primary">
                    {{ __('Log in') }}
                </button>
            </div>
        </form>
    </div> 
  </div>
</div>

    
    </div>
     <div class="col-sm-2" ></div> </div>
     
  </div>
    
    </div>
    </main>
</body>
</html>


