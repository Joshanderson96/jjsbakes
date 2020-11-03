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

            <label class="create-form__title" for="category">Category</label>
            <select name="category" class="create-form__select">
                <option value="" disabled selected>Select your category</option>
                <option value="Cake">Cake</option>
                <option value="Brownies">Brownies</option>
                <option value="Cookies">Cookies</option>
            </select>

            <label class="create-form__title" for="title">image</label>
            <button class="crete-form__button">Upload an image</button>
        </form>
    </div>

    
@endsection