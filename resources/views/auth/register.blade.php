@extends('partials.layout')

@section('content')

    
    @section('pageName', 'Register')

    <form action="{{ route('register') }} " class="auth-form-container" method="post">
        @csrf

        <div>
            <label class="auth-form__title" for="name">Name</label>
        <input name="name" type="text" id="name" class="auth-form__input @error('name') is-invaild @enderror " value="{{ old('name') }}">
        @error('name')
            <span class="invaild-feedback">
                <p>Name in invaild</p>
            </span>
        @enderror
        </div>
<label class="auth-form__title" for="email">Email Address</label>
        <input name="email" type="email" id="email" class="auth-form__input @error('email') is-invaild @enderror " value="{{ old('email') }}">
        @error('email')
            <span class="invaild-feedback">
                <p>Email is invaild</p>
            </span>
        @enderror
        <div>
            <label class="auth-form__title" for="password">Password</label>
<input name="password" type="password" id="password" class="auth-form__input @error('password') is-invaild @enderror " value="{{ old('password') }}">
        @error('password')
            <span class="invaild-feedback">
                <p>password is invaild</p>
            </span>
        @enderror
        </div>
        <div>
<label class="auth-form__title" for="password"> Confirm Password</label>
        <input name="password_confirmation" type="password" id="password" class="auth-form__input @error('password_confirmation') is-invaild @enderror " value="{{ old('password_confirmation') }}">
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