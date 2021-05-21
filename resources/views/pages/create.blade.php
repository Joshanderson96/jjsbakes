@extends('layouts.layout')

@section('content')

    
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif




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
                 <textarea name="recipe" class="create-form__input recipe-text" id="" cols="30" rows="10" ></textarea>
                    </div>
                
            </div>
         
            <div class="blog-image--container">
                <img  src="" alt="">
                <input class="blog-image" name="image" type="file" />
            </div>
            </div>
            
            <div class="blog-post">
                <h3 class="blog-post--title main-heading blog-post--post">Post</h3>
                <textarea name="post" placeholder="Enter Your Post..." class="create-form__input tinymce-post" id="" cols="30" rows="10" ></textarea>
                <p ></p>
            </div>

            <input type="submit" class="create-form__post" value="Post">

        </form>


    </div>
    <script>
        tinymce.init({
          selector: 'textarea',
          plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
          toolbar_mode: 'floating',
       });
    </script>
    
@endsection