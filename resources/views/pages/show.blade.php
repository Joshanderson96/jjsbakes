@extends('layouts.layout')
@section('pageTitle', 'Show')

@section('content')
    
    
   
   <div class="blogHeading">
       <h3 class="main-heading">{{ $blogs->title }} </h3>
       <p class="main-text">by {{ $blogs->user->name }}</p>
   </div>
   <div class="blog-info">
       <div class="blog-info--time">
           <p class="blog-info--text">{{ $blogs->hours}} Hrs. {{ $blogs->minutes}} Mins. </p>
       </div>
       <div class="blog-info--category">
            <p class="blog-info--text">{{ $blogs->category}}</p>
       </div>
   </div>

   <div class="recipe-image_container">
       <div class="recipe-container">
           <div class="recipe-container--inner">
               <h4 class="recipe-heading">Recipe:</h4>
        <p class="recipe-text">{!! $blogs->recipe !!} </p>
           </div>
       
   </div>

   <div class="blog-image--container">
       <img class="blog-image" src="{{ url('image/'.$blogs->image) }}" alt="">
   </div>
   </div>
   
   <div class="blog-post">
       <h3 class="blog-post--title main-heading">Post</h3>

       <p class="blog-post--post">{!! $blogs->post !!} </p>
   </div>



@stop