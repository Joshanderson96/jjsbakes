@extends('layouts.layout')

@section('pageTitle', 'Gallery')
    

@section('content')
    
    @section('pageName', 'Gallery')

    <div class="content-title">
        <h3 class="content-title--text">Gallery</h3>
        <div class="content-title-create">            
            @if  (Route::has('login'))
                <div class="auth">
            @auth 
                <a  href="blogs/create"><button class="login_button--login content-title-create--button"><p class="opacity-text">Create</p></button></a>
            @else
                                
            @endif    
                </div>
            @endif            
        </div>
    </div>
    <div class="content-container">
        

        <div class="content-filter">
            <div class="content-filter-section">
                <p class="content-filter--title">Categories</p>
                @foreach ($categories as $category)
    
                    <label class="filter-buttons">
                        
                            <input
                                name="category" type="checkbox" class="filter-buttons--toggle" value="{{ $category->id }}"
                                @if (in_array($category->id, explode(',', request()->input('filter.category'))))
                                    checked
                                @endif
                            > 
                            <div class="filter-buttons--btn">
                                <p>{{ $category->category }}</p>
                            </div>


                        
                        
                    </label>
                @endforeach

                <button type="button" id="filter" class="filter-buttons--filter"><span class="opacity-text">Filter</span> </button>
            </div>
        </div>


         <div class="content-container__cards">   
            @foreach ($blog as $data)
        
        

            <div class="content-cards">
                <div class="content-cards__image">
                     <img class="cards__image" src="{{ url('image/'.$data->image)}}" alt="" />
                </div>              
                
                <div class="content-cards-text">
                    <div class="content-cards__title">
                        <p class="cards-title">{{ $data->title}} </p>
                    </div>

                    <div class="content-cards__prep">
                        <svg id="Capa_1" enable-background="new 0 0 443.294 443.294" class="svg-account content-cards--svg " viewBox="0 0 443.294 443.294" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m221.647 0c-122.214 0-221.647 99.433-221.647 221.647s99.433 221.647 221.647 221.647 221.647-99.433 221.647-221.647-99.433-221.647-221.647-221.647zm0 415.588c-106.941 0-193.941-87-193.941-193.941s87-193.941 193.941-193.941 193.941 87 193.941 193.941-87 193.941-193.941 193.941z"/><path d="m235.5 83.118h-27.706v144.265l87.176 87.176 19.589-19.589-79.059-79.059z"/></svg><p class="cards-prep"><span class="cards-highlight">{{ $data->hours}} Hrs. {{ $data->minutes}} Mins. </span> </p>
                    </div>

                    <div class="content-cards__creator">
                        <svg class="svg-account content-cards--svg " viewBox="0 0 512 512"  xmlns="http://www.w3.org/2000/svg"><path d="m512 256c0-141.488281-114.496094-256-256-256-141.488281 0-256 114.496094-256 256 0 140.234375 113.539062 256 256 256 141.875 0 256-115.121094 256-256zm-256-226c124.617188 0 226 101.382812 226 226 0 45.585938-13.558594 89.402344-38.703125 126.515625-100.96875-108.609375-273.441406-108.804687-374.59375 0-25.144531-37.113281-38.703125-80.929687-38.703125-126.515625 0-124.617188 101.382812-226 226-226zm-168.585938 376.5c89.773438-100.695312 247.421876-100.671875 337.167969 0-90.074219 100.773438-247.054687 100.804688-337.167969 0zm0 0"/><path d="m256 271c49.625 0 90-40.375 90-90v-30c0-49.625-40.375-90-90-90s-90 40.375-90 90v30c0 49.625 40.375 90 90 90zm-60-120c0-33.085938 26.914062-60 60-60s60 26.914062 60 60v30c0 33.085938-26.914062 60-60 60s-60-26.914062-60-60zm0 0"/></svg><p class="cards-creator"><a class="cards-highlight--link" href="user/{{ $data->user->id}}"><span class="cards-highlight">{{ $data->user->name }}</span></a>  </p>
                    </div>
                    
                </div>

                <a href="/blogs/{{ $data->id}}" class="content-cards__view"><div  href="/blogs/{{ $data->id}}">
                    <p class="cards-view">View</p>
                    
                </div></a>
            </div>
            

        
        
    @endforeach


        </div>
    </div>

@stop