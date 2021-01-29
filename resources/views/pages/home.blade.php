@extends('partials.layout')
@section('pageTitle', 'Home')
@extends('partials.navbar')
    
@section('content')
    
    
    

    

    <div class="container">
        
        <div class="content">
            <div class="content-welcome">
                <div class="content-welcome--title">
                    <h1 class="main-heading">Welcome</h1>
                </div>
    
                <div class="content-welcome--paragraph">
                    <p class="main-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dictum odio sit amet felis efficitur, eget feugiat felis eleifend. Nullam cursus dui eget massa semper feugiat. Sed eget odio eget orci tristique maximus porttitor sit amet libero. Nam mollis est at auctor feugiat. Vestibulum dignissim auctor ultrices. Nam eu feugiat magna, a dictum turpis. Morbi in ultrices quam, nec eleifend ipsum. Donec at felis a mi dictum faucibus ut nec urna. Morbi non mi non nulla tincidunt porttitor at in neque. </p>
                </div>
            </div>
        </div>
    
        <div class="showcase">
            <div class="showcase-title">
                <h1 class="main-heading">Showcase</h1>
            </div>
    
            <div class="showcase-container">
                <div class="showcase-card">
                    <div class="showcase-card-image">
                        <img class="showcase-card-image--picture" src="img/Chocolate-cheese-cake.jpg" alt="">
                        <figcaption class="showcase-card-image--view">
                            View &#8594;
                        </figcaption>
                     </div>
                    <div class="showcase-card--title">Chocolate Cheesecake</div>
                </div>
                <div class="showcase-card">
                    <div class="showcase-card-image">
                        <img class="showcase-card-image--picture" src="img/Gingerbread-shortbread.jpg" alt="">
                        <figcaption class="showcase-card-image--view">
                            View &#8594;
                        </figcaption>
                     </div>
                   
                    <div class="showcase-card--title">Gingerbread Millionaire 
                        Shortbread</div>
                </div>
                <div class="showcase-card">
                    <div class="showcase-card-image">
                        <img class="showcase-card-image--picture" src="img/mint-areo-rockyroads.jpg" alt="">
                        <figcaption class="showcase-card-image--view">
                            View &#8594;
                        </figcaption>
                    </div>
                    
                    <div class="showcase-card--title">Mint Aero Rocky Road</div>
                </div>
                <div class="showcase-card">
                    <div class="showcase-card-image">
                        <img class="showcase-card-image--picture" src="img/cookiebars.jpg" alt="">
                        <figcaption class="showcase-card-image--view">
                            View &#8594;
                        </figcaption>
                    </div>
                    
                    <div class="showcase-card--title">Cookie Bars</div>
                </div>
                <div class="showcase-card">
                    <div class="showcase-card-image">
                        <img class="showcase-card-image--picture" src="img/lemon-cupcakes.jpg" alt="">
                        <figcaption class="showcase-card-image--view">
                            View &#8594;
                        </figcaption>
                    </div>
                    
                    <div class="showcase-card--title">Lemon Cupcakes</div>
                </div>
    
    
                
            </div>
            
            
        </div>
    </div>
    
@stop