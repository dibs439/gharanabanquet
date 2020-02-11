<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TPKTSVH');</script>
    <!-- End Google Tag Manager -->


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="keywords" content="{{ !empty($page['meta_keywords']) ? $page['meta_keywords'] : $meta['keyword'] }}">
    <meta name="description" content="{{ !empty($page['meta_description']) ? $page['meta_description'] : $meta['description'] }}">

    <link rel="apple-touch-icon" sizes="57x57" href="/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
    <link rel="manifest" href="/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="canonical" href="{{ Request::fullUrl() }}">

    <!--slick-->
    <link rel="stylesheet" href="{{ asset('/frontend/css/slick.css') }}">

    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100i,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <!--font awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <meta name="robots" content="index, follow, archive" />


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ !empty($page['meta_title']) ? $page['meta_title'] : $meta['title'] }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('/frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/frontend/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('/frontend/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('/frontend/css/responsive.css') }}">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TPKTSVH"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

<!--body overlay-->
<div class="bodyOverlay"></div>
<!--end-->

<!--search window  -->
<div class="searcoverlay text-center">
    <a href="javascript:void" class="close_btn onserch"><i class="fas fa-times"></i></a>
    <input type="text" id="myInput" onkeyup="myFunction()" class="serchfld" placeholder="Search Here....">
    <!-- <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name"> -->
    <!-- <P id="myIffnput"></p> -->
    <ul id="myUL">
        <li>
        <a href="{{ url('/occasions/weddings') }}">Weddings</a>
        </li>
        <li>
            <a href="{{ url('/occasions/corporate-events') }}">Corporate Events</a>
        </li>
        <li>
            <a href="{{ url('/occasions/launch-parties') }}">Launch Parties</a>
        </li>
        <li>
            <a href="{{ url('/occasions/conferences') }}">Conferences</a>
        </li>
        <li>
            <a href="{{ url('/occasions/anniversaries') }}">Anniversary</a>
        </li>
        <li>
            <a href="{{ url('/occasions/family-parties') }}">Family Parties</a>
        </li>
        <li>
            <a href="{{ url('/occasions/event-management') }}">Event Management</a>
        </li>
        <li>
            <a href="{{ url('/occasions/meetings-reunions') }}">Meeting and Reunions</a>
        </li>
        <li>
            <a href="{{ url('/services/flower-decoration') }}">FLOWER DECORATION</a>
        </li>
        <li>
            <a href="{{ url('/services/lighting-decoration') }}">ELECTRIC DECORATION</a>
        </li>
        <li>
            <a href="{{ url('/services/catering-services') }}">CATERING</a>
        </li>
        <li>
            <a href="{{ url('/services/photography-services') }}">PHOTOGRAPHY</a>
        </li>
        <li>
            <a href="{{ url('/packages') }}">Packages</a>
        </li>
    </ul>

</div>

<!--end-->

<!--header area-->

<header class="header_menu">
    <div class="container">
        <div class="menutgl_btn">
            <a href="javascript:void(0)"><i class="fas fa-bars"></i></a>
        </div>
        <ul>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li>
                <a href="{{ url('/about') }}">About us</a>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Occasions</a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ url('/occasions/weddings') }}">Weddings</a>
                    </li>
                    <li>
                        <a href="{{ url('/occasions/corporate-events') }}">Corporate Events</a>
                    </li>
                    <li>
                        <a href="{{ url('/occasions/launch-parties') }}">Launch Parties</a>
                    </li>
                    <li>
                        <a href="{{ url('/occasions/conferences') }}">Conferences</a>
                    </li>
                    <li>
                        <a href="{{ url('/occasions/anniversaries') }}">Anniversary</a>
                    </li>
                    <li>
                        <a href="{{ url('/occasions/family-parties') }}">Family Parties</a>
                    </li>
                    <li>
                        <a href="{{ url('/occasions/event-management') }}">Event Management</a>
                    </li>
                    <li>
                        <a href="{{ url('/occasions/meetings-reunions') }}">Meeting and Reunions</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Services</a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ url('/services/flower-decoration') }}">FLOWER DECORATION</a>
                    </li>
                    <li>
                        <a href="{{ url('/services/lighting-decoration') }}">ELECTRIC DECORATION</a>
                    </li>
                    <li>
                        <a href="{{ url('/services/catering-services') }}">CATERING</a>
                    </li>
                    <li>
                        <a href="{{ url('/services/photography-services') }}">PHOTOGRAPHY</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ url('/packages') }}">Packages</a>
            </li>
            <li>
                <a href="{{ url('/gallery') }}">Gallery</a>
            </li>
            <li>
                <a href="{{ url('/contact') }}">Contact</a>
            </li>

            <li><a href="javascript:void(0)" class="search onserch"><i class="fas fa-search"></i></a></li>
        </ul>
    </div>
</header>


@yield('content')

<footer class="footer_wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <div class="footer_lgo">
                    <a href="{{ url('/') }}"><img src="{{ asset('/frontend/images/footer_logo.png') }}" alt="Banquet hall in South Kolkata"></a>
                </div>
                <div class="venue_area cmn_adrs">
                    <span>
                        <i class="fas fa-map-marker-alt"></i>
                        The Venue<br>
                    </span>
                    <address>
                        <h2 style="font-size: 18px;color: #000;font-weight: 500;margin-bottom: -16px;">GHARANA
                            BANQUET</h2><br>
                            O/30, Sahid smriti colony,<br>
                             kolkata - 700094.<br>
                            Sahid smriti colony talent group club
                            <br> P. S. - Panchasayar
                            <br>
                            P. O. - Panchasayar<br>
                            Beside peerless hospital<br>
                       <br>

                        <a href="tel:+91 9830170287" class="wow flash">
                            <img class="fotterCont" src="{{ asset('/frontend/images/phn_icon.png') }}" alt="Call Gharana Banquet">
                            <span>+91 9830170287 </span>
                        </a>
                    </address>
                    <div class="googlemap">
                        <a href="javascript:void(0)">
                            OPEN GOOGLE MAP
                            <i><img src="{{ asset('/frontend/images/right_arrow.png') }}" alt=""></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 offset-lg-2 col-md-3 col-sm-5">
                <ul>
                    <li>
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ url('/about') }}">About us</a>
                    </li>
                    <li>
                        <a href="{{ url('/occasions/weddings') }}">Occasions</a>
                    </li>
                    <li>
                        <a href="{{ url('/occasions/catering-services') }}">Catering</a>
                    </li>
                    <li>
                        <a href="{{ url('/packages') }}">Packages</a>
                    </li>
                    <li>
                        <a href="{{ url('/gallery') }}">Gallery</a>
                    </li>
                    <li>
                        <a href="{{ url('/contact') }}">Contact</a>
                    </li>

                </ul>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-7">
                <div class="register_ofc cmn_adrs">
                    <span>
                        <i class="fas fa-map-marker-alt"></i>
                        Register Office
                    </span>
                    <address>
                        <h2 style="font-size: 18px;color: #000;font-weight: 500;margin-bottom: -16px;">GHARANA
                            BANQUET</h2><br>
                            O/30, Sahid smriti colony,
                            <br>
                             kolkata - 700094.<br>
                            Sahid smriti colony talent group club
                            <br> P. S - Panchasayar
                            <br>
                            P. O - Panchasayar<br>
                            Beside peerless hospital<br>
                       <br>
                        <a href="tel:+91 7003966606" class="wow flash">
                            <img class="fotterCont" src="{{ asset('/frontend/images/phn_icon.png') }}" alt="Call Gharana Baquet">
                            <span>+91 7003966606 </span>
                        </a><br />

                    </address>
                    <div class="mail_text">
                        <a href="http://www.gharanabanquet.com">
                            <i class="fas fa-globe"></i>
                            www.gharanabanquet.com
                        </a><br />
                        <a href="mailto:info@gharanabanquet.com">
                            <i class="fas fa-envelope"></i>
                            info@gharanabanquet.com
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom_footer">
            <div class="row">
                <div class="col-md-4 col-sm-3 order-2">
                    <div class="social_area">
                        <a href="https://www.facebook.com/Gharana-Banquet-103971477651706/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/gharanabanquet" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/gharanabanquet/" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.youtube.com/channel/UCOO5gLiO8xYRNtxS68XrIVA" target="_blank"><i class="fab fa-youtube"></i></a>
                        <a href="https://www.pinterest.com/gharanabanquet/" target="_blank"><i class="fab fa-pinterest"></i></a>
                    </div>
                </div>
                <!--<div class="col-md-5 col-sm-6 order-3">
                    <div class="terms_list text-right">
                        <ul>
                            <li><a href="javascript:void(0)">Terms of Use</a></li>
                            <li><a href="javascript:void(0)">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>-->
                <div class="col-md-5 col-sm-12 order-1">
                    <span class="copyright">Copyright &copy; GharanaBanquet.com. All rights reserved</span>
                </div>
            </div>
        </div>
    </div>
</footer>
<style>
    * {
        box-sizing: border-box;
    }

    #myInput {
        background-image: url("{{ asset('/frontend/images/searchicon.png') }}");
        background-position: 10px 12px;
        background-repeat: no-repeat;
        /* width: 100%; */
        font-size: 16px;
        padding: 12px 20px 12px 40px;
        border: 1px solid #ddd;
        margin-bottom: 12px;
    }

    #myUL {
        list-style-type: none;
        padding: 0;
        margin: 0;

    }

    #myUL li a {
        border: 1px solid #ddd;
        margin-top: -1px;
        /* Prevent double borders */
        background-color: #f6f6f6;
        padding: 12px;
        text-decoration: none;
        font-size: 18px;
        color: black;
        display: block
    }

    #myUL li a:hover:not(.header) {
        background-color: #eee;
    }
</style>
<script>
    function myFunction() {
        var input, filter, ul, li, a, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        ul = document.getElementById("myUL");
        li = ul.getElementsByTagName("li");
        console.log("li.length ", input.value)
        //  if(input.value.length === 0){
        //                document.getElementById("myIffnput").innerHTML="";

        //     }
        //     else {(input.value.length === 0)
        //                            document.getElementById("myIffnput").innerHTML="No Record Found";

        //     }
        for (i = 0; i < li.length; i++) {
            a = li[i].getElementsByTagName("a")[0];
            txtValue = a.textContent || a.innerText;

            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            } else {
                li[i].style.display = "none";
            }
        }
    }

</script>

<!--js links-->
<script src="{{ asset('/frontend/js/jquery-3.2.1.slim.min.js') }}"></script>
<script src="{{ asset('/frontend/js/popper.min.js') }}"></script>
<script src="{{ asset('/frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/frontend/js/slick.min.js') }}"></script>
<script src="{{ asset('/frontend/js/wow.min.js') }}"></script>
<script src="{{ asset('/frontend/js/custom.js') }}"></script>


<script>

    //slider1
    $('.demo_slider').slick({
        dots: false,
        arrows: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        responsive: [
            {
                breakpoint: 575,
                settings: {
                    arrows: false,
                    dots: true
                }
            }
        ]
    });

    //slider2
    $('.video_slider').slick({
        dots: false,
        arrows: true,
        infinite: true,
        speed: 300,
        slidesToShow: 2,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]
    });

    //search area

    $(document).ready(function () {

        // Image Alt Tag setting not in use right now.

        var altTags = [

            'Banquet hall in South Kolkata',
            'Wedding venue in South Kolkata',
            'Best AC Banquet Hall in Kolkata',
            'Best AC Wedding Banquet Hall in Kolkata',
            'Banquets for Marriage in South Kolkata',
            'AC Banquet Hall for Corporate Parties in South Kolkata',
            'Best AC Banquet Hall in South Kolkata',
            'Banquet hall near Garia',
            'Best AC Banquet Hall for Annual Meeting',
            'Banquet Hall in Jorabridge',
            'Banquet Hall for Anniversary Party in Kolkata',
            'Banquet Hall in Survey Park',
            'Best Banquet Hall in Kolkata for Family Functions',
            'Banquet Hall near Singhabari',
            'AC Banquet Hall for Product Launch Parties in South kolkata',
            'Banquet hall near santoshpur',
        ];

        $(".onserch").click(function () {
            $("body").toggleClass("bodyAdd");
            $("body").removeClass("bodymenu");
        });

        $(".menutgl_btn").click(function () {
            $("body").toggleClass("bodymenu");
        });

        ///

        $(".bodyOverlay").click(function () {
            $("body").toggleClass("bodymenu");
        });

        // document.images.item(0).src;
        var imgs = document.images;
        for (i = 0; i < imgs.length; i++) {
            //txt = txt + x[i].src + "<br>";
            var img = imgs[i];

            var rand = Math.floor(Math.random() * altTags.length-1);

            console.log(altTags[rand])
            //imgs[i].alt(altTags[rand]);
            //img.attr("alt", "some text");
            //imgs[i].src;
            console.log(imgs[i].src);
        }

    });
</script>


</body>
</html>
