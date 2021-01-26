<div class="navbar"> 

    <div class="navbar-container reset-this">

        <div class="navbar-logo">
            <img class="navbar-logo--image" src="img/jjsbakes-logo.png" alt="">
        </div>
            
            
        
        <ul class="navbar-options">
            <a class="navbar-options__link" href="/home"><li class="navbar-options-text">Home</li></a>

            <a class="navbar-options__link" href="/content"><li class="navbar-options-text navbar-options-text--active">Content</li></a>
                <a class="navbar-options__link" href=""><li class="navbar-options-text navbar-options-text--center">About</li></a>

            <a class="navbar-options__link" href=""><li class="navbar-options-text">Socials</li></a>
        </ul>
        
        @if  (Route::has('login'))
            <div class="auth">
                @auth 
                    <a>{{ Auth::user()->name }}</a>
                    <a class="navbar-options__link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

                    <form id="logout-form" action="{{ route('logout')}} " method="post" style="display: none">
                        @csrf
                    </form>
                @else
                    <a href="{{ route('login') }} ">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endif    
            </div>
        @endif
        
    </div>      
</div>

<div class="page-title">
    <div class="container page-title--container">
        <h2 class="main-heading">@yield('pageName')</h2>
    </div>
    
</div>