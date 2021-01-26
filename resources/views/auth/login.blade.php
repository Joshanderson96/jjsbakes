@extends('partials.layout')

@section('content')

    @extends('partials.navbar')
    @section('pageName', 'Login')

    <form action="{{ route('login') }} " method="post">
        @csrf
        

        <label class="create-form__title" for="email">Email Address</label>
        <input name="email" type="email" id="email" class="create-form__input @error('email') is-invaild @enderror " value="{{ old('email') }}">
        @error('email')
            <span class="invaild-feedback">
                <p>Email is invaild</p>
            </span>
        @enderror

        <label class="create-form__title" for="password">Password</label>
        <input name="password" type="password" id="password" class="create-form__input @error('password') is-invaild @enderror " value="{{ old('password') }}">
        @error('password')
            <span class="invaild-feedback">
                <p>password is invaild</p>
            </span>
        @enderror
            
        {{-- <input type="submit" class="create-form__post" value="Register"> --}}
        <button type="submit" class="create-form__post">Login</button>

    </form>



    
@endsection