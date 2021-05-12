@extends('layouts.layout')

@section('content')

    
    @section('pageName', 'Login/Register')




        <div class="userForm-container">
          <div class="userForm-tabs-header">
            <div class="userForm-tabs userForm-tabs--left  userForm-tabs--active " data-id="login">Login</div>
            <div class="userForm-tabs userForm-tabs--right" data-id="register">Register</div>
          </div>
          <div class="contentWrapper">
            <div class="userForm-content-active userForm-content" id="login">
                <form action="{{ route('login') }}" method="post">
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
            </div>

            <div class="userForm-content" id="register">
                <form action="{{ route('register') }} "  method="post">
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
                            <p>Password does not match</p>
                        </span>
                    @enderror
                    </div>     
            
                    <button type="submit" class="auth-form__button"><span class="opacity-text">Register</span></button>
            
                </form>
            </div>
          </div>
        </div>
      


{{-- <div class="userForm-tabs-header">
            <div     data-id="login" class="userForm-tabs userForm-tabs--active userForm-tabs--left">
                <h3 class="userForm-tabs_text">Login</h3>
            </div>

            <div data-id="register" class="userForm-tabs  userForm-tabs--right">
                <h3 class="userForm-tabs_text">Register</h3>
            </div>
        </div>

        <div class="userForm-form-container">
            <div class="userForm-content userForm-content--active" id="loginForm">
                <p>Login</p>
            </div>

            <div class="userForm-content" id="registerForm">
                <p>Register</p>
            </div>
        </div>
     --}}
@endsection