@extends('layouts.layout')

@section('content')

    
    @section('pageName', 'Register')

    <form action="{{ route('register') }} " class="auth-form-container" method="post">
        @csrf

        <div class="auth-form__heading">
            <h1 class="main-heading auth-form__heading--text" >Register</h1>
        </div>

        <div>
        <input name="name" type="text" id="name" class="auth-form__input @error('name') is-invaild @enderror " value="{{ old('name') }}" placeholder="Name">
        @error('name')
            <span class="invaild-feedback">
                <p>Name in invaild</p>
            </span>
        @enderror
        </div>
        <input name="email" type="email" id="email" class="auth-form__input @error('email') is-invaild @enderror " value="{{ old('email') }}" placeholder="Email">
        @error('email')
            <span class="invaild-feedback">
                <p>Email is invaild</p>
            </span>
        @enderror
        <div>
<input name="password" type="password" id="password" class="auth-form__input @error('password') is-invaild @enderror " value="{{ old('password') }}" placeholder="Password">
        @error('password')
            <span class="invaild-feedback">
                <p>password is invaild</p>
            </span>
        @enderror
        </div>
        <div>
        <input name="password_confirmation" type="password" id="password" class="auth-form__input @error('password_confirmation') is-invaild @enderror " value="{{ old('password_confirmation') }}" placeholder="Confirm Password">
        @error('password_confirmation')
            <span class="invaild-feedback">
                <p>Passwrod does not match</p>
            </span>
        @enderror
        </div>
        

        
        

        
            
        {{-- <input type="submit" class="auth-form__post" value="Register"> --}}
        <button type="submit" class="auth-form__button">Register</button>

    </form>



    
@endsection