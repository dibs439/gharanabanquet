@extends('frontend.layouts.app')
@section('content')

    @include('frontend.includes.banner')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.11/css/lightgallery.min.css">


    <div class="container">
        <div class="contact_wrap gallery_inr">
            <ul id="filters" class="button-group">
                <li class="is-checked" data-filter="*">All</li>
                <li data-filter=".metal wedding">Weddings</li>
                <li data-filter=".transition corporate">Corporate Events</li>
                <li data-filter=".alkali, .alkaline-earth launch">Launch Parties </li>
                <li data-filter=":not(.transition) conferences">Conferences</li>
                <li data-filter=".metal:not(.transition) anniversary">Anniversary </li>
                <li data-filter="numberGreaterThan50 family">Family Parties</li>
                <li data-filter="ium event">Event Management</li>
            </ul>

            <div class="grid" id="dynamic">


                <div class="element-item transition metal " data-category="wedding">
                    <img src="{{ asset('/frontend/images/gharana-banquet-banner-2.png') }}" alt="Wedding venue in South Kolkata">
                </div>
                <div class="element-item alkaline-earth metal " data-category="wedding">
                    <img src="{{ asset('/frontend/images/gharana-banquet-banner3.jpg') }}" alt="Banquets for Marriage in South Kolkata">
                </div>

                <div class="element-item transition metal " data-category="wedding">
                    <img src="{{ asset('/frontend/images/gharana-banquet-banner-4.png') }}" alt="Banquet hall in South Kolkata">
                </div>

                <div class="element-item post-transition metal " data-category="corporate">
                    <img src="{{ asset('/frontend/images/gharana-banquet-front.png') }}" alt="AC Banquet Hall for Corporate Parties in South Kolkata">
                </div>

                <div class="element-item transition metal " data-category="corporate">
                    <img src="{{ asset('/frontend/images/gharana-banquet-pic1.jpg') }}" alt="Best AC Banquet Hall in Kolkata">
                </div>

                <div class="element-item transition metal " data-category="corporate">
                    <img src="{{ asset('/frontend/images/gharana-banquet-pic2.jpg') }}" alt="Best AC Wedding Banquet Hall in Kolkata">
                </div>

                <div class="element-item transition metal " data-category="launch">
                    <img src="{{ asset('/frontend/images/gharana-banquet-pic2.jpg') }}" alt="Best AC Banquet Hall in South Kolkata">
                </div>

                <div class="element-item transition metal " data-category="launch">
                    <img src="{{ asset('/frontend/images/gharana-banquet-pic3.jpg') }}" alt="Banquet hall near Garia">
                </div>

                <div class="element-item transition metal " data-category="launch">
                    <img src="{{ asset('/frontend/images/gharana-banquet-pic4.jpg') }}" alt="Best AC Banquet Hall for Annual Meeting">
                </div>

                <div class="element-item transition metal " data-category="conferences">
                    <img src="{{ asset('/frontend/images/gharana-banquet-pic5.jpg') }}" alt="Banquet Hall in Jorabridge">
                </div>

                <div class="element-item transition metal " data-category="conferences">
                    <img src="{{ asset('/frontend/images/gharana-banquet-pic6.jpg') }}" alt="Banquet Hall in Survey Park">
                </div>

                <div class="element-item transition metal " data-category="conferences">
                    <img src="{{ asset('/frontend/images/gharana-banquet-pic7.jpg') }}" alt="Best Banquet Hall in Kolkata for Family Functions">
                </div>

                <div class="element-item transition metal " data-category="anniversary">
                    <img src="{{ asset('/frontend/images/gharana-banquet-pic8.jpg') }}" alt="Banquet Hall near Singhabari">
                </div>

                <div class="element-item transition metal " data-category="anniversary">
                    <img src="{{ asset('/frontend/images/gharana-banquet-pic9.jpg') }}" alt="AC Banquet Hall for Product Launch Parties in South kolkata">
                </div>

                <div class="element-item transition metal " data-category="anniversary">
                    <img src="{{ asset('/frontend/images/gharana-banquet-pic10.jpg') }}" alt="Banquet hall near santoshpur">
                </div>

                <div class="element-item transition metal " data-category="event">
                    <img src="{{ asset('/frontend/images/gharana-banquet-pic11.jpg') }}" alt="Banquet Hall near Singhabari">
                </div>

                <div class="element-item transition metal " data-category="event">
                    <img src="{{ asset('/frontend/images/gharana-banquet-pic12.jpg') }}" alt="Banquet hall near santoshpur">
                </div>

                <div class="element-item transition metal " data-category="family">
                    <img src="{{ asset('/frontend/images/gharana-banquet-pic14.jpg') }}" alt="AC Banquet Hall for Corporate Parties in South Kolkata">
                </div>
                <!--<div class="element-item post-transition metal " data-category="post-transition">
                    <img src="{{ asset('/frontend/images/pic1.png') }}" alt="">
                </div>

                <div class="element-item transition metal " data-category="transition">
                    <img src="{{ asset('/frontend/images/pic1.png') }}" alt="">
                </div>

                <div class="element-item metalloid " data-category="metalloid">
                    <img src="{{ asset('/frontend/images/pic1.png') }}" alt="">
                </div>
                <div  class="element-item alkali  " data-category="alkali">
                    <img src="{{ asset('/frontend/images/pic1.png') }}" alt="">
                </div>
                <div class="element-item alkali  " data-category="alkali">
                <img src="{{ asset('/frontend/images/pic1.png') }}" alt="">
                </div>-->


            </div>
            <!-- <div class="viewmore text-center">
                <a href="javascript:void(0)">
                    VIEW MORE
                </a>
                <button id="dynamic" class="btn btn-primary btn-lg"> VIEW MORE</button>
            </div> -->
        </div>
    </div>

    <script src="{{ asset('/frontend/js/jquery-3.2.1.slim.min.js') }}"></script>
    <script src="{{ asset('/frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('/frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/frontend/js/isotope.pkgd.js') }}"></script>
    <script src="{{ asset('/frontend/js/slick.min.js') }}"></script>
    <script src="{{ asset('/frontend/js/wow.min.js') }}"></script>
    <script src="{{ asset('/frontend/js/custom.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.11/js/lightgallery-all.min.js"></script>
    <style>
            /* body {
              background-color: #152836;
              color: #eee;
              font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif
            } */

            .small {
              font-size: 11px;
              color: #999;
              display: block;
              margin-top: -10px
            }

            .cont {
              text-align: center;
            }

            .page-head {
              padding: 60px 0;
              text-align: center;
            }

            .page-head .lead {
              font-size: 18px;
              font-weight: 400;
              line-height: 1.4;
              margin-bottom: 50px;
              margin-top: 0;
            }

            .btn {
              -moz-user-select: none;
              background-image: none;
              border: 1px solid transparent;
              border-radius: 2px;
              cursor: pointer;
              display: inline-block;
              font-size: 14px;
              font-weight: normal;
              line-height: 1.42857;
              margin-bottom: 0;
              padding: 6px 12px;
              text-align: center;
              vertical-align: middle;
              white-space: nowrap;
              text-decoration: none;
            }

            .btn-lg {
              border-radius: 2px;
              font-size: 18px;
              line-height: 1.33333;
              padding: 10px 16px;
            }

            .btn-primary:hover {
              background-color: #fff;
              color: #152836;
            }

            .btn-primary {
              background-color: #152836;
              border-color: #0e1a24;
              color: #ffffff;
            }

            .btn-primary {
              border-color: #eeeeee;
              color: #eeeeee;
              transition: color 0.1s ease 0s, background-color 0.15s ease 0s;
            }

            .page-head h1 {
              font-size: 42px;
              margin: 0 0 20px;
              color: #FFF;
              position: relative;
              display: inline-block;
            }

            .page-head h1 .version {
              bottom: 0;
              color: #ddd;
              font-size: 11px;
              font-style: italic;
              position: absolute;
              width: 58px;
              right: -58px;
            }

            .demo-gallery > ul {
              margin-bottom: 0;
              padding-left: 15px;
            }

            .demo-gallery > ul > li {
              margin-bottom: 15px;
              width: 180px;
              display: inline-block;
              margin-right: 15px;
              list-style: outside none none;
            }

            .demo-gallery > ul > li a {
              border: 3px solid #FFF;
              border-radius: 3px;
              display: block;
              overflow: hidden;
              position: relative;
              float: left;
            }

            .demo-gallery > ul > li a > img {
              -webkit-transition: -webkit-transform 0.15s ease 0s;
              -moz-transition: -moz-transform 0.15s ease 0s;
              -o-transition: -o-transform 0.15s ease 0s;
              transition: transform 0.15s ease 0s;
              -webkit-transform: scale3d(1, 1, 1);
              transform: scale3d(1, 1, 1);
              height: 100%;
              width: 100%;
            }

            .demo-gallery > ul > li a:hover > img {
              -webkit-transform: scale3d(1.1, 1.1, 1.1);
              transform: scale3d(1.1, 1.1, 1.1);
            }

            .demo-gallery > ul > li a:hover .demo-gallery-poster > img {
              opacity: 1;
            }

            .demo-gallery > ul > li a .demo-gallery-poster {
              background-color: rgba(0, 0, 0, 0.1);
              bottom: 0;
              left: 0;
              position: absolute;
              right: 0;
              top: 0;
              -webkit-transition: background-color 0.15s ease 0s;
              -o-transition: background-color 0.15s ease 0s;
              transition: background-color 0.15s ease 0s;
            }

            .demo-gallery > ul > li a .demo-gallery-poster > img {
              left: 50%;
              margin-left: -10px;
              margin-top: -10px;
              opacity: 0;
              position: absolute;
              top: 50%;
              -webkit-transition: opacity 0.3s ease 0s;
              -o-transition: opacity 0.3s ease 0s;
              transition: opacity 0.3s ease 0s;
            }

            .demo-gallery > ul > li a:hover .demo-gallery-poster {
              background-color: rgba(0, 0, 0, 0.5);
            }

            .demo-gallery .justified-gallery > a > img {
              -webkit-transition: -webkit-transform 0.15s ease 0s;
              -moz-transition: -moz-transform 0.15s ease 0s;
              -o-transition: -o-transform 0.15s ease 0s;
              transition: transform 0.15s ease 0s;
              -webkit-transform: scale3d(1, 1, 1);
              transform: scale3d(1, 1, 1);
              height: 100%;
              width: 100%;
            }

            .demo-gallery .justified-gallery > a:hover > img {
              -webkit-transform: scale3d(1.1, 1.1, 1.1);
              transform: scale3d(1.1, 1.1, 1.1);
            }

            .demo-gallery .justified-gallery > a:hover .demo-gallery-poster > img {
              opacity: 1;
            }

            .demo-gallery .justified-gallery > a .demo-gallery-poster {
              background-color: rgba(0, 0, 0, 0.1);
              bottom: 0;
              left: 0;
              position: absolute;
              right: 0;
              top: 0;
              -webkit-transition: background-color 0.15s ease 0s;
              -o-transition: background-color 0.15s ease 0s;
              transition: background-color 0.15s ease 0s;
            }

            .demo-gallery .justified-gallery > a .demo-gallery-poster > img {
              left: 50%;
              margin-left: -10px;
              margin-top: -10px;
              opacity: 0;
              position: absolute;
              top: 50%;
              -webkit-transition: opacity 0.3s ease 0s;
              -o-transition: opacity 0.3s ease 0s;
              transition: opacity 0.3s ease 0s;
            }

            .demo-gallery .justified-gallery > a:hover .demo-gallery-poster {
              background-color: rgba(0, 0, 0, 0.5);
            }

            .demo-gallery .video .demo-gallery-poster img {
              height: 48px;
              margin-left: -24px;
              margin-top: -24px;
              opacity: 0.8;
              width: 48px;
            }

            .demo-gallery.dark > ul > li a {
              border: 3px solid #04070a;
            }
            </style>
      <script>

        // 	$(document).ready(function(){
        //   $('.menu-toggle').click(function(){
        //     $('nav').toggleClass('active');
        //   })
        // })

        $(document).ready(function() {
          $('#dynamic').on('click', function(e) {
              $(this).lightGallery({
                  dynamic: true,
                  dynamicEl: [{
                      src: 'images/pic23.png',
                      thumb: 'images/pic23.png'
                  },{
                      src: 'images/pic17.png',
                      thumb: 'images/pic17.png',
                      poster: 'images/pic17.png',
                      text:"bx"
                  },{
                    //   html: '#video2',
                      thumb: 'images/pic18.png',
                      poster: 'images/pic18.png'
                  },{
                      src: 'images/pic19.png',
                      thumb: 'images/pic19.png'
                  },
                  {
                      src: 'images/pic20.png',
                      thumb: 'images/pic20.png'
                  },
                  {
                      src: 'images/pic21.png',
                      thumb: 'images/pic21.png'
                  },
                  {
                      src: 'images/pic24.png',
                      thumb: 'images/pic24.png'
                  }
                ]
              });
          });
        });



        </script>

        <script>

        $(document).ready(function(){
            $(".onserch").click(function(){
               $("body").toggleClass("bodyAdd");
               $("body").removeClass("bodymenu");
            });

            ///

            $(".menutgl_btn").click(function(){
                $("body").toggleClass("bodymenu");
            });

            ///

            $(".bodyOverlay").click(function(){
                $("body").toggleClass("bodymenu");
            });
        });
        </script>


@endsection
