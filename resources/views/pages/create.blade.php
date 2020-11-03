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

            <label class="create-form__title" for="title">Image</label>
            <button class="create-form__button">Upload an image</button>

            <label for="time" class="create-form__title">Time</label>
            <div class="create-form__time-container">
                <input type="number" class="create-form__time">
                <p class="create-form__time-text">Hours</p>
                <input type="number" class="create-form__time">
                <p class="create-form__time-text">Minutes</p>
            </div>
            <label for="recipe" class="create-form__title">Recipe</label>
            <textarea name="recipe" class="create-form__input" id="" cols="30" rows="10"></textarea>

            <label for="post" class="create-form__title">Post</label>
            <textarea name="post" class="create-form__input" id="" cols="30" rows="10"></textarea>

            <button class="create-form__post">Post</button>
        </form>
    </div>

    
@endsection