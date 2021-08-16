<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('layouts.css')
    <title>Register</title>
</head>
<body>
@include('layouts.header')
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
         <div class="card-header">Register</div>
         <div class="card-body">
            
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="form-control"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="form-control"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="btn btn-primary ml-4 ">
                    {{ __('Register') }}
                </x-button>
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