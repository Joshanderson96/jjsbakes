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




        <form action="{{ url('blogs/edit') }}" class="create-form" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="blogHeading">
                <label class="create-form__title" for="title"></label>
            <input name="title" type="text" id="title" class="main-heading create-form__input"  placeholder="Title" value="{{ $blog->title}}">
                
            </div>

            <div class="blog-info">
                <div class="blog-info--time">
                    <div class="create-form__time-container">
                        <input type="text" class="blog-info--text create-form__time" name="hours" value="{{ $blog->hours }} ">
                        <p class="create-form__time-text blog-info--text">Hrs.</p>

                        <input type="number" class="blog-info--text create-form__time" name="minutes" value="{{ $blog->minutes }}">
                        <p class="create-form__time-text blog-info--text">Mins</p>
                    </div>
                </div>
                <div class="blog-info--category">
                    <select name="category" class="create-form__select">
                        <option "disabled selected>Select your category</option>
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
                 <textarea name="recipe" class="create-form__input recipe-text" id="" cols="30" rows="10" required value="">{{ $blog->recipe }}</textarea>
                    </div>
                
            </div>
            
            <div class="blog-image--container">
                <div class="blog-image--container">
                    <img class="blog-image" src="{{ url('image/'.$blog->image) }}" alt="">
                </div>
                <img  src="" alt="">
                <input class="blog-image" name="image" type="file" />
            </div>
            </div>
            
            <div class="blog-post">
                <h3 class="blog-post--title main-heading blog-post--post">Post</h3>
                <textarea name="post" placeholder="Enter Your Post..." class="create-form__input tinymce-post" id="" cols="30" rows="10" value="" required>{{ $blog->post }}</textarea>
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