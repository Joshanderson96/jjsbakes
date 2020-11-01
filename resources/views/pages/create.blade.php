@extends('partials.layout')

@section('content')

    @extends('partials.navbar')

    
    <div class="create-container">
        <div class="create-title">
            <h1 class="main-heading">Create Your Post</h1>
        </div>

        <form action="" class="create-form">
            <label class="create-form__title" for="title">Title</label>
            <input type="text" id="title" class="create-form__input">
        </form>
    </div>

    
@endsection