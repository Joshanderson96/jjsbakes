@extends('partials.layout')

@section('content')

    
    

    <form action="{{ route('login') }}" class="auth-form-container" method="post">
        @csrf
        
        <div class="email">
            <label class="auth-form__title" for="email">Email Address</label>
        <input name="email" type="email" id="email" class="auth-form__input @error('email') is-invaild @enderror " value="{{ old('email') }}">
        @error('email')
            <span class="invaild-feedback">
                <p>Email is invaild</p>
            </span>
        @enderror

        </div>

        <div class="password">
           <label class="auth-form__title" for="password">Password</label>
        <input name="password" type="password" id="password" class="auth-form__input @error('password') is-invaild @enderror " value="{{ old('password') }}">
        @error('password')
            <span class="invaild-feedback">
                <p>password is invaild</p>
            </span>
        @enderror 
        </div>
        
        
            
        {{-- <input type="submit" class="create-form__post" value="Register"> --}}
        <button type="submit" class="auth-form__button">Login</button>

    </form>



    
@endsection