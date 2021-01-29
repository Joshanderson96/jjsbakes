@extends('partials.layout')

@section('content')

    @extends('partials.navbar')
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    
    {{-- <div class="create-container">
        <div class="create-title">
            <h1 class="main-heading">Create Your Post</h1>
        </div>

        <form action="{{ route('blogs.store') }}" class="create-form" method="POST" enctype="multipart/form-data">
            @csrf
            <label class="create-form__title" for="title">Title</label>
            <input name="title" type="text" id="title" class="main-heading create-form__input "  >

            <label class="create-form__title" for="category">Category</label>
            <select name="category" class="create-form__select">
                <option value="" disabled selected>Select your category</option>
                <option value="Cake">Cake</option>
                <option value="Brownies">Brownies</option>
                <option value="Cookies">Cookies</option>
            </select>

            <label class="create-form__title" for="image" required>Image</label>
            <input  name="image" type="file" />
            

            <label for="time" class="create-form__title">Time</label>
            <div class="create-form__time-container">
                <input type="text" class="create-form__time" name="hours">
                <p class="create-form__time-text">Hours</p>
                <input type="number" class="create-form__time" name="minutes">
                <p class="create-form__time-text">Minutes</p>
            </div>
            <label for="recipe" class="create-form__title">Recipe</label>
            <textarea name="recipe" class="create-form__input" id="" cols="30" rows="10" required></textarea>

            <label for="post" class="create-form__title">Post</label>
            <textarea name="post" class="create-form__input" id="" cols="30" rows="10" required></textarea>

            <input type="submit" class="create-form__post" value="Post">

            
        </form> --}}

        <form action="{{ route('blogs.store') }}" class="create-form" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="blogHeading">
                <label class="create-form__title" for="title"></label>
            <input name="title" type="text" id="title" class="main-heading create-form__input"  placeholder="Title">
                
            </div>

            <div class="blog-info">
                <div class="blog-info--time">
                    {{-- <p class="blog-info--text">{{ $blogs->hours}} Hrs. {{ $blogs->minutes}} Mins. </p> --}}

                    <div class="create-form__time-container">
                        <input type="text" class="blog-info--text create-form__time" name="hours">
                        <p class="create-form__time-text blog-info--text">Hrs.</p>

                        <input type="number" class="blog-info--text create-form__time" name="minutes">
                        <p class="create-form__time-text blog-info--text">Mins</p>
                    </div>
                </div>
                <div class="blog-info--category">
                    <select name="category" class="create-form__select">
                        <option value="" disabled selected>Select your category</option>
                        <option value="Cake">Cake</option>
                        <option value="Brownies">Brownies</option>
                        <option value="Cookies">Cookies</option>
                    </select>
                     {{-- <p class="">{{ $blogs->category}}</p> --}}
                </div>
            </div>
         
            <div class="recipe-image_container">
                <div class="recipe-container">
                    <div class="recipe-container--inner">
                        <h4 class="recipe-heading">Recipe:</h4>
                 <p class="recipe-text"> </p>
                 <textarea name="recipe" class="create-form__input recipe-text" id="" cols="30" rows="10" required></textarea>
                    </div>
                
            </div>
         
            <div class="blog-image--container">
                <img  src="" alt="">
                <input class="blog-image" name="image" type="file" />
            </div>
            </div>
            
            <div class="blog-post">
                <h3 class="blog-post--title main-heading blog-post--post">Post</h3>
                <textarea name="post" placeholder="Enter Your Post..." class="create-form__input" id="" cols="30" rows="10" required></textarea>
                <p ></p>
            </div>

            <input type="submit" class="create-form__post" value="Post">

        </form>


    </div>

    
@endsection