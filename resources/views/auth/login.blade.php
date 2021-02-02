@extends('layouts.layout')

@section('content')

    
    

    <form action="{{ route('login') }}" class="auth-form-container" method="post">
        @csrf
        <div class="auth-form__heading">
            <h1 class="main-heading auth-form__heading--text" >Welcome!</h1>
        </div>
        
        
        <div class="email">
            {{-- <label class="auth-form__title" for="email">Email Address</label> --}}
        <input placeholder="Email" name="email" type="email" id="email" class="auth-form__input @error('email') is-invaild @enderror " value="{{ old('email') }}">
        @error('email')
            <span class="invaild-feedback">
                <p>Email is invaild</p>
            </span>
        @enderror

        </div>

        <div class="password">
           {{-- <label class="auth-form__title" for="password">Password</label> --}}
        <input name="password" type="password" id="password" class="auth-form__input @error('password') is-invaild @enderror " value="{{ old('password') }}" placeholder="Password">
        @error('password')
            <span class="invaild-feedback">
                <p>password is invaild</p>
            </span>
        @enderror 
        </div>
        
        
            
        {{-- <input type="submit" class="create-form__post" value="Register"> --}}
        <button type="submit" class="auth-form__button"><span class="auth-form__button--text">Login</span></button>

    </form>



    
@endsection