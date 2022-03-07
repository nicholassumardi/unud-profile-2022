<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{!empty($title_page) ? $title_page:''}} UNIVERSITAS UDAYANA</title>
    <link rel="icon" href="{{asset('images/udayana.png')}}">

    {{-- CUSTOM FONT CSS --}}

    {{--
    <link rel="stylesheet" href="{{asset('css/customfont.css')}}">
    <link rel="stylesheet" href="{{asset('css/font.css')}}"> --}}


    {{-- CUSTOM CSS --}}

    {{--
    <link rel="stylesheet" href="{{asset('css/custom.css')}}"> --}}

    {{-- AOS CSS --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">


    {{-- BOOTSRAP CSS --}}

    {{--
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    {{-- CAROUSEL CSS --}}

    {{--
    <link rel="stylesheet" href="{{asset('css/continuous-carousel.css')}}"> --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('css/combine.css')}}">
</head>

<body>

    @include('frontpages/layouts/navbar')
    @yield('content')
    @include('frontpages/layouts/footer')
    @include('frontpages/layouts/navbar-bottom')




    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
    </script>


    <script src="{{asset('js/combine.js')}}">
    </script>
    {{-- <script src="{{asset('js/bootstrap.bundle.js')}}">
    </script>
    <script src="{{asset('js/jquery.rcbrand.js')}}"></script> --}}
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>


    <script>
        //     $(document).ready(function () {
    //     $(document).click(function (event) {
    //         var click = $(event.target);
    //         var _open = $(".navbar-collapse").hasClass("show");
    //         if (_open === true && !click.hasClass("navbar-toggler")) {
    //             $(".navbar-toggler").click();
    //         }
    //     });
    // }); 



    $(function() {
   $(".navbar-nav a").click(function() {
      // remove classes from all
      $(".navbar-nav a").removeClass("active");
      // add class to the one we clicked
      $(this).addClass("active");
   });
});



$(document).ready(function(){
        $(".search-box").click(function(){
            $("#vhiecles-opener").fadeToggle(500);
        });
       
    });

// (function ($) {
          
//             $('#vhiecles-opener').slideUp();
//             $('.search-box').unbind().bind('click', function () { loginSlideDown() });
            
            
//       // remove classes from all

//             var loginSlideDown = function () {
//                 $('.search-box').unbind();
//                 $('.selected-car').fadeOut('slow');
//                 $('#vhiecles-opener').slideToggle(500, function () {
                    
//                     $('.search-box, .ui-widget').bind('click', loginSlideUp);
//                 });
//             };

//             var loginSlideUp = function () {
//                 $('.search-box').unbind().slideDown(500);
//                 $('.selected-car').fadeIn('slow');
//                 $('#vhiecles-opener').slideToggle(500, function () {
                   
                    
//                     $('.search-box').bind('click', loginSlideDown);
//                 });
//             };

//         })(jQuery);




    // $(window).scroll(function () {
    //             var distance = $(window).scrollTop();
    //             $('.pagesection').each(function (i) {
  
    //                 if ($(this).position().top 
    //                     <= distance) {
                          
    //                         $('.navbar-nav a.active')
    //                             .removeClass('active');
  
    //                         $('.navbar-nav a').eq(i)
    //                             .addClass('active');
    //                 }
    //             });
    //         }).scroll();
       
    </script>

    <script>
        var myCarousel = document.querySelector('#CarouselMine')
        var carousel = new bootstrap.Carousel(myCarousel, {
        interval: false
      
        })
    </script>
    @stack('js')
    {{-- <script>
        $(window).on("scroll load resize",function () {
if ($(window).scrollTop() >= 50 ) {
    $('.navbar').stop().animate({
            height:'100px'
        },400);
    
    
} else  {   
    $('.navbar').stop().animate({
            height:'125px'
        },400);
}
});
    </script> --}}


</body>

</html>