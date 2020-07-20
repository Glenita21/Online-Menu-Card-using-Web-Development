<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Ice Cream Hotel Category Bootstrap Responsive Web Template | Home :: W3layouts</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Ice Cream Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
    />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!--// Meta tag Keywords -->

    <!-- Custom-Files -->
    <link rel="stylesheet" href="{{ asset('frontside/css/bootstrap.css') }}">
    <!-- Bootstrap-Core-CSS -->
    <link href="{{ asset('frontside/css/pogo-slider.min.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!-- Banner-Slider-CSS -->
    <link rel="stylesheet" href="{{ asset('frontside/css/owl.carousel.min.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('frontside/css/owl.theme.default.min.css') }}" type="text/css" media="all" />
    <!-- owl carousel css (for welcome section) -->
    <link rel="stylesheet" href="{{ asset('frontside/css/flexslider.css') }}" type="text/css" media="screen" property="" />
    <!-- flexSlider css (for testimonials) -->
    <link rel="stylesheet" href="{{ asset('frontside/css/style.css') }}" type="text/css" media="all" />
    <!-- Style-CSS -->
    <link rel="stylesheet" href="{{ asset('frontside/css/fontawesome-all.css') }}">
    <!-- Font-Awesome-Icons-CSS -->
    <!-- //Custom-Files -->

    <!-- Web-Fonts -->
    <link href="//fonts.googleapis.com/css?family=Pacifico&amp;subset=cyrillic,latin-ext,vietnamese" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Barlow+Semi+Condensed:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext"
        rel="stylesheet">
    <!-- //Web-Fonts -->

</head>

<body>
    <!-- header -->
    <div class="header">
        <!-- navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <h1>
                <a class="navbar-brand" href="index.html">
                    <img src="{{ asset('frontside/images/logo.png') }}" alt=" " class="img-fluid">
                </a>
            </h1>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('welcome') }}">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    
                    
                    <li class="nav-item  mx-lg-3">
                        <a class="nav-link" href="{{ url('menu') }}">Menu</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('contact') }}">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- //navigation -->
    </div>
    <!-- //header -->
    <!-- banner -->
    
    <!-- //banner -->

    <!-- about -->
   
    <!--//about-->

    <!-- about bottom -->
    
    <!-- //about bottom -->

    <!-- work -->
        <!-- .Section ends here -->
    <!-- //work -->

    <!-- news -->
            </div>
    </div>

   
    <!-- //news -->

    <!-- middle slider -->

    <!-- //middle slider -->

    <!-- stats -->
   
    <!-- //stats -->

    <!-- testimonials -->
    
    <!-- //testimonials -->

    <!-- newsletter -->
    <div class="footer-top py-4 text-center">
        <div class="container py-xl-5 py-lg-3">
            <!-- newsletter  -->
            <div class="agile-newsletter">
            <h1>welcome to the flavaboom!</h1>
               
                 <img src="{{ asset('frontside/images/g4.jpg') }}">
            </div>
            <!-- //newsletter -->
            <!-- social icons -->
           
            <!-- //social icons -->
        </div>
    </div>
    <!-- //newsletter -->

    <!-- footer -->
        
    <!-- //footer -->

    <!-- copyright -->
    <div class="w3l-copy text-center py-4">
        <p class="text-white">© 2018 Ice Cream. All rights reserved | Design by
            <a href="http://w3layouts.com/">W3layouts</a>
        </p>
    </div>
    <!-- //copyright -->


    <!-- Js files -->

    <!-- JavaScript -->
    <script src="{{ asset('frontside/js/jquery-2.2.3.min.js') }}"></script>
    <!-- Default-JavaScript-File -->

    <!-- Owl-Carousel-JavaScript (for welcome section) -->
    <script src="{{ asset('frontside/js/owl.carousel.js') }}"></script>
    <script>
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            items: 1,
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
        });
    </script>
    <!-- //Owl-Carousel-JavaScript (for welcome section) -->

    <!-- flexisel slider (for middle Slider) -->
    <script src="{{ asset('frontside/js/jquery.flexisel.js') }}"></script>
    <script>
        $(window).load(function () {
            $("#flexiselDemo1").flexisel({
                visibleItems: 5,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 3000,
                pauseOnHover: true,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: {
                    portrait: {
                        changePoint: 440,
                        visibleItems: 1
                    },
                    landscape: {
                        changePoint: 667,
                        visibleItems: 3
                    },
                    tablet: {
                        changePoint: 900,
                        visibleItems: 4
                    }
                }
            });

        });
    </script>
    <!-- //flexisel slider (for middle Slider) -->

    <!-- flexSlider (for testimonials) -->
    <script defer src="{{ asset('frontside/js/jquery.flexslider.js') }}"></script>
    <script>
        $(window).load(function () {
            $('.flexslider').flexslider({
                animation: "slide",
                start: function (slider) {
                    $('body').removeClass('loading');
                }
            });
        });
    </script>
    <!-- //flexSlider (for testimonials) -->

    <!-- stats -->
    <script src="{{ asset('frontside/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('frontside/js/jquery.countup.js') }}"></script>
    <script>
        $('.counter').countUp();
    </script>
    <!-- //stats -->

    <!-- smooth scrolling -->
    <script src="{{ asset('frontside/js/SmoothScroll.min.js') }}"></script>
    <!-- //smooth scrolling -->

    <!-- start-smoth-scrolling -->
    <script src="{{ asset('frontside/js/move-top.js') }}"></script>
    <script src="{{ asset('frontside/js/easing.js') }}"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->

    <!-- smooth scrolling-bottom-to-top -->
    <script>
        $(document).ready(function () {
            /*
                var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
                };
            */
            $().UItoTop({
                easingType: 'easeOutQuart'
            });
        });
    </script>
    <!-- //smooth scrolling-bottom-to-top -->

    <!-- Pogo slider (for banner) -->
    <script src="{{ asset('frontside/js/jquery.pogo-slider.min.js') }}"></script>
    <script src="{{ asset('frontside/js/main.js') }}"></script>
    <!-- Pogo slider (for banner) -->

    <script src="{{ asset('frontside/js/bootstrap.js') }}"></script>
    <!-- Necessary-JavaScript-File-For-Bootstrap -->

    <!-- //Js files -->

</body>

</html>