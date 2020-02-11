@extends('frontend.layouts.app')
@section('content')

    @include('frontend.includes.banner')

    <div class="contact_wrap">
            <div class="contact_area">
                <div class="container">
                    <div class="contact_inner">
                        <h2 class="text-center" >Our offer package which is as follows</h2>

                        <div class="container mt-3">
                            <h4 style="margin-bottom: 20px;font-size: 20px;color: #e8c39d;font-weight: 700">Dcoration Items</h4>
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Banquet Chair
                                    <span class="badge badge-primary badge-pill">100</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Banquet Sofa
                                    <span class="badge badge-primary badge-pill">20</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Couch
                                    <span class="badge badge-primary badge-pill">1</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    PLatform 9*6
                                    <span class="badge badge-primary badge-pill">2</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Round Table with Phrill and Cover
                                    <span class="badge badge-primary badge-pill">6</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Buffet Table with Phrill and Cover
                                    <span class="badge badge-primary badge-pill">60ft</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Janggya Kunda
                                    <span class="badge badge-primary badge-pill">6</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Piri
                                    <span class="badge badge-primary badge-pill">2</span>
                                </li>
                            </ul>
                        </div>
                        <div class="container mt-3">
                            <h4 style="margin-bottom: 20px;font-size: 20px;color: #e8c39d;font-weight: 700">Electrical Items</h4>
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Rice Tuni
                                    <span class="badge badge-primary badge-pill">200</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Perlight
                                    <span class="badge badge-primary badge-pill">6</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Metal
                                    <span class="badge badge-primary badge-pill">5</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Sound System
                                    <span class="badge badge-primary badge-pill">1</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Spot Light
                                    <span class="badge badge-primary badge-pill">50</span>
                                </li>
                            </ul>
                        </div>
                        <div class="container mt-3">
                            <h4 style="margin-bottom: 20px;font-size: 20px;color: #e8c39d;font-weight: 700">Flower (Decoration done by Dry Flower)</h4>
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Gate
                                    <span class="badge badge-primary badge-pill">1</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Background FOR bRIDES $ Grooms
                                    <span class="badge badge-primary badge-pill">1</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Mandap
                                    <span class="badge badge-primary badge-pill">1</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Buffet Canopy
                                    <span class="badge badge-primary badge-pill">60</span>
                                </li>

                            </ul>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <style>
                .contact_inner h2 {
           font-size: 36px;
           margin-bottom: 30px;
           font-weight: 500;
           background: -webkit-linear-gradient(#d08b3d, #26190b);
           -webkit-background-clip: text;
           -webkit-text-fill-color: transparent;
       }
       .contact_area {
           width: 100%;
           max-height: 100% !important;
           /* padding: 100px 0;
           background: url(../images/contact_bg.png) center top no-repeat;
           background-size: cover; */
       }
               * {
                   box-sizing: border-box;
               }

               #myInput {
                   background-image: url('/css/searchicon.png');
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

@endsection
