<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!--slick-->
    <link rel="stylesheet" href="{{ asset('/frontend/css/slick.css') }}">

    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100i,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <!--font awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <meta name="robots" content="index, follow, archive" />
    <link rel="canonical" href="http://www.gharanabanquet.com/" />


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Welcome') }}</title>

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
            <a href="CorporateEvent.html">Corporate Events</a>
        </li>
        <li>
            <a href="LaunchParties.html">Launch Parties</a>
        </li>
        <li>
            <a href="Conferences.html">Conferences</a>
        </li>
        <li>
            <a href="Anniversary.html">Anniversary</a>
        </li>
        <li>
            <a href="FamilyParties.html">Family Parties</a>
        </li>
        <li>
            <a href="EventManagement.html">Event Management</a>
        </li>
        <li>
            <a href="flowerDecorationServices.html">FLOWER DECORATION</a>
        </li>
        <li>
            <a href="electricDecoration.html">ELECTRIC DECORATION</a>
        </li>
        <li>
            <a href="catareingServices.html">CATERING</a>
        </li>
        <li>
            <a href="photographyServices.html">PHOTOGRAPHY</a>
        </li>
        <li>
            <a href="pakages.html">Packages</a>
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
            <li><a href="index.html">Home</a></li>
            <li>
                <a href="aboutus.html">About us</a>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Occasions</a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ url('/occasions/weddings') }}">Weddings</a>
                    </li>
                    <li>
                        <a href="CorporateEvent.html">Corporate Events</a>
                    </li>
                    <li>
                        <a href="LaunchParties.html">Launch Parties</a>
                    </li>
                    <li>
                        <a href="Conferences.html">Conferences</a>
                    </li>
                    <li>
                        <a href="Anniversary.html">Anniversary</a>
                    </li>
                    <li>
                        <a href="FamilyParties.html">Family Parties</a>
                    </li>
                    <li>
                        <a href="EventManagement.html">Event Management</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Services</a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="flowerDecorationServices.html">FLOWER DECORATION</a>
                    </li>
                    <li>
                        <a href="electricDecoration.html">ELECTRIC DECORATION</a>
                    </li>
                    <li>
                        <a href="catareingServices.html">CATERING</a>
                    </li>
                    <li>
                        <a href="photographyServices.html">PHOTOGRAPHY</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="pakages.html">Packages</a>
            </li>
            <li><a href="gallery.html">Gallery</a></li>
            <li><a href="contact.html">Contact</a></li>

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
                    <a href="index.html"><img src="{{ asset('/frontend/images/footer_logo.png') }}" alt=""></a>
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
                            <br> P. S - Panchasayar
                            <br>
                            P. O - Panchasayar<br>
                            Beside peerless hospital<br>
                       <br>
                        <a href="tel:+91 7003966606" class="wow flash">
                            <img class="fotterCont" src="{{ asset('/frontend/images/phn_icon.png') }}" alt="">
                            <span>+91 7003966606 </span>
                        </a>
                        <a href="tel:+91 9830170287" class="wow flash">
                            <img class="fotterCont" src="{{ asset('/frontend/images/phn_icon.png') }}" alt="">
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
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="aboutus.html">About us</a>
                    </li>
                    <li>
                        <a href="occasons.html">Occasions</a>
                    </li>
                    <li>
                        <a href="services.html">Services</a>
                    </li>
                    <li>
                            <a href="pakages.html">Packages</a>
                        </li>
                    <li>
                        <a href="gallery.html">Gallery</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
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
                            <img class="fotterCont" src="{{ asset('/frontend/images/phn_icon.png') }}" alt="">
                            <span>+91 7003966606 </span>
                        </a><br />
                        <a href="tel:+91 9830170287" class="wow flash">
                            <img class="fotterCont" src="{{ asset('/frontend/images/phn_icon.png') }}" alt="">
                            <span>+91 9830170287 </span>
                        </a>

                    </address>
                    <div class="mail_text">
                        <a href="javascript:void(0);">
                            <i class="fas fa-globe"></i>
                            www.gharanabanquet.com
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom_footer">
            <div class="row">
                <div class="col-md-2 col-sm-3 order-2">
                    <div class="social_area">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i
                                class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-md-5 col-sm-6 order-3">
                    <div class="terms_list text-right">
                        <ul>
                            <li><a href="javascript:void(0)">Terms of Use</a></li>
                            <li><a href="javascript:void(0)">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5 col-sm-12 order-1">
                    <span class="copyright">Copyright @ GharanaBanquet. All rights reserved</span>
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
        background-image: url("{{ asset('/frontend/css/searchicon.png') }}");
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
    });
</script>


</body>
</html>
