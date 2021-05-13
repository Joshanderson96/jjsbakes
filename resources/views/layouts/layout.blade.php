<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="public/css/app.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">    
        <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet"> 
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
        
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        

        <script src="https://cdn.tiny.cloud/1/wk1aw2t7b9l8anlqpvev4u665xx77x8ishqqjl4s76vfscww/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        

        {{-- This is Jquery --}}
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

        {{-- This is Parsely --}}
        {{-- <script src="http://parsleyjs.org/dist/parsley.js"></script> --}}
        {{-- This is bootstrap --}}
        
        <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css2?family=Solway:wght@300;400;500;700;800&display=swap" rel="stylesheet"> 

        <title>@yield('pageTitle') - JJ's Bakes</title>
    </head>

    <body>
        
        @include('auth.register')
        @include('partials.navbar')
        <div class="container">
            
            @yield('content')
            
        </div>
            
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>