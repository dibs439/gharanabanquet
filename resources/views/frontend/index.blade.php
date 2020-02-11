@extends('frontend.layouts.app')
@section('content')

    @include('frontend.includes.banner')
    <!--listing blog-->
    <div class="container text-center">
        <div class="listing_blog">
            <div class="row">
                <div class="col-sm-4">
                    <div class="listing_cell">
                        <div class="img_area"><img src="{{ asset('/frontend/images/icon1.png') }}" alt=""></div>
                        <h2 class="wow fadeInUp" data-wow-duration="0.3s">Banquet Hall</h2>
                        <p>Marriage or seminar, rice ceremony or corporate party - our banquet hall offers a perfect blend between elegance and comfort. Situated near Garia it is extremely accessible from different parts of the city. Measuring an area of around 4500 sq. feet, ground and first floor combined it is our primary goal to make our guests feel at home.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="listing_cell">
                        <div class="img_area"><img src="{{ asset('/frontend/images/icon2.png') }}" alt=""></div>
                        <h2 class="wow fadeInUp" data-wow-duration="0.6">The Service</h2>
                        <p>Our in-house team consists of none but experienced employees. Our in-house event management team has hands-on experience in serving some of the top-notch corporate clients. We are confident that our team will create a memorable experience for you and your guests. From the set-up to presentation and service, we arrange everything on special request.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="listing_cell">
                        <div class="img_area"><img src="{{ asset('/frontend/images/icon3.png') }}" alt=""></div>
                        <h2 class="wow fadeInUp" data-wow-duration="0.9">Fabulous Food</h2>
                        <p>On any occasion, the two primary focus points remain the space to host and the food to serve.
                            While our banquet and the lawn put together can comfortably accommodate your invitees, our in-house
                            catering service, Gharana Caterer offers a sumptuous range of Veg and Non-Veg dishes to offer to your guests.</p>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--end-->

    <!--banquet area-->
    <div class="container">
        <div class="banquet_list_area">
            <div class="row">
                <div class="col-md-6">
                    <div class="innr_cell clearfix">
                        <div class="banquet_hall"><img style="height: 205px;"
                                src="{{ asset('/frontend/images/4.jpg') }}" alt=""></div>
                        <div class="content_cell">
                            <span>Occasions to Celebrate</span>
                            <h3>Weddings & Receptions </h3>
                            <p>You dream; we deliver. Make your wedding a memorable one.
                            </p>
                            <a href="Weddings.html">
                                View Details
                                <i><img src="{{ asset('/frontend/images/right_arrow.png') }}" alt=""></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="innr_cell clearfix">
                        <div class="banquet_hall"><img style="height: 205px;"
                                src="{{ asset('/frontend/images/conferences1.jpg') }}" alt=""></div>
                        <div class="content_cell">
                            <span>Corporate Events</span>
                            <h3>Perfect corporate touch</h3>
                            <p>Host annual meetings, corporate parties & award ceremonies. </p>
                            <a href="CorporateEvent.html">
                                View Details
                                <i><img src="{{ asset('/frontend/images/right_arrow.png') }}" alt=""></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="innr_cell clearfix">
                        <div class="banquet_hall"><img style="height: 205px;"
                                src="{{ asset('/frontend/images/conferences2.jpg') }}" alt=""></div>
                        <div class="content_cell">
                            <span>Conferences
                            </span>
                            <h3>Steal the show</h3>
                            <p>Host VIP guests & high-profile dignitaries.</p>
                            <a href="Conferences.html">
                                View Details
                                <i><img src="{{ asset('/frontend/images/right_arrow.png') }}" alt=""></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="innr_cell clearfix">
                        <div class="banquet_hall"><img style="height: 205px;"
                                src="{{ asset('/frontend/images/2.jpg') }}" alt=""></div>
                        <div class="content_cell">
                            <span>Family Parties</span>
                            <h3>Bring a smile to your near and dear ones </h3>
                            <p>Host social events and make your guests feel special. </p>
                            <a href="FamilyParties.html">
                                View Details
                                <i><img src="{{ asset('/frontend/images/right_arrow.png') }}" alt=""></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="viewmore text-center">
                <a href="javascript:void(0)">
                    VIEW MORE
                    <i><img src="images/right_arrow.png" alt=""></i>
                </a>
            </div> -->
        </div>
    </div>
    <!--end-->

    <!--exprnce area-->
    <div class="exprnce_area">
        <div class="gharanatext"><img src="{{ asset('/frontend/images/text.png') }}" alt=""></div>
        <div class="container">
            <div class="text-center cmn_header">
                <h4 class="wow fadeInDown">We take your experience up a notch every time
                </h4>
                <span>Banquet Offers - The Best Banquet Hall Deals This Season</span>
                <div class="pic1"><img src="{{ asset('/frontend/images/pic1.png') }}" alt=""></div>
            </div>
            <div class="expence_inr">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="expnce_left_wrap">
                            <div class="expnce_left wow flipInX">
                                <img src="{{ asset('/frontend/images/gharana-banquet-pic10.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="exprnce_content">
                            <span><img src="{{ asset('/frontend/images/pic3.png') }}" alt=""></span>
                            <p>At Gharana, we value customer satisfaction the most. We believe that with the kind of services that we offer we will make you want to come back over and over again. 
                                Our exquisite food (in case you book our catering service) coupled with a relaxing atmosphere will surely make each of your guests delighted and stay longer.
                                The perfectly neat space coupled with delicious catering services
                                makes us the perfect package cut out for your needs.
                                We accept booking for Grand Wedding, Reception, Anniversary, Upanayana, Shadi Events, Sangeet, Bar-B-Que Garden Parties.
                                For more detail give us a buzz.
                            </p>
                            <!-- <div class="viewmore">
                                <a href="javascript:void(0)">
                                    VIEW MORE
                                    <i><img src="images/right_arrow.png" alt=""></i>
                                </a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end-->

    <!--testimonials area-->
    <div class="testimonials_area">
        <div class="container">
            <div class="text-center cmn_header">
                <h4 class="wow fadeInDown">Our Offers</h4>
                <span>Banquet OffersThe Best Banquet Hall Deals This Season</span>
                <div class="pic1"><img src="{{ asset('/frontend/images/pic1.png') }}" alt=""></div>
            </div>
            <div class="slider_inr">
                <div class="demo_slider">
                    <div class="item">
                        <div class="slider_content wow flipInX" style="padding: 37px 45px 9px !important;">
                            <p style="margin-bottom: 15px !important;">Ring us at +91 9830170287 / 7003966606.

                                    We offer exciting discounts to you in case you decide to book our
                                    Catering Service along with the Banquet. For more information,
                                    please visit our dedicated catering website <a href="http://www.gharanacaterer.co.in">www.gharanacaterer.co.in</a>
                            </p>
                            <h5 class="text-center" style="margin-bottom: 5px !important;">Make your event truly memorable</h5>
                            <span class="text-center"><img src="{{ asset('/frontend/images/pic3.png') }}" alt=""></span>
                        </div>
                        <div class="slider_pic"><img src="{{ asset('/frontend/images/gharana-banquet-pic11.jpg') }}"
                                alt=""></div>
                    </div>
                    <div class="item">
                        <div class="slider_content wow flipInX">
                            <p>Have you already visited our banquet before? We would love to hear your feedback on the experience you had.
                                Write to us & share your thoughts so we can improve our services at info@gharanabanquet.com</p>
                            <h5 class="text-center">News & Update
                            </h5>
                            <span class="text-center"><img src="{{ asset('/frontend/images/pic3.png') }}" alt=""></span>
                        </div>
                        <div class="slider_pic"><img src="{{ asset('/frontend/images/gharana-banquet-pic12.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="slider_content wow flipInX">
                            <p>We make the memories of your event last long with our splendid management,
                                    opulent decoration, palatable catering services and easy-to-reach location. If you want
                                    your occasion to create an everlasting impact on the guests, you are on the right page.</p>

                            <span class="text-center"><img src="{{ asset('/frontend/images/pic3.png') }}" alt=""></span>
                        </div>
                        <div class="slider_pic"><img src="{{ asset('/frontend/images/gharana-banquet-pic14.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end-->

    <!--videos area-->

    <!--<div class="video_area">
        <div class="container">
            <div class="text-center cmn_header">
                <h4 class="wow fadeInDown">Our Videos</h4>
                <div class="pic1"><img src="images/pic1.png" alt=""></div>
            </div>
            <div class="video_inr video_slider">
                <div class="item">
                    <div class="video_cell wow fadeInLeft">
                        <img src="images/video1.png" alt="">
                        <div class="play_btn"><img src="images/play_btn.png" alt=""></div>
                    </div>
                </div>
                <div class="item">
                    <div class="video_cell wow fadeInRight">
                        <img src="images/video2.png" alt="">
                        <div class="play_btn"><img src="images/play_btn.png" alt=""></div>
                    </div>
                </div>
                <div class="item">
                    <div class="video_cell">
                        <img src="images/video1.png" alt="">
                        <div class="play_btn"><img src="images/play_btn.png" alt=""></div>
                    </div>
                </div>
                <div class="item">
                    <div class="video_cell">
                        <img src="images/video2.png" alt="">
                        <div class="play_btn"><img src="images/play_btn.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->

    <!--end-->

    <!--get touch area-->

    <div class="gettouch_area">
        <div class="container">
            <div class="gettouch_inr">
                <div class="text-center cmn_header">
                    <h4 class="wow fadeInDown">Contact Us</h4>
                    <div class="pic1"><img src="{{ asset('/frontend/images/pic1.png') }}" alt=""></div>
                </div>
                <div class="frm_area">
                    <div class="row">
                        <div class="col-sm-5">
                            <input type="text" class="frm_fld" placeholder="Name">
                            <input type="tel" class="frm_fld" placeholder="Contact Number">
                            <input type="text" class="frm_fld" placeholder="Event Date">
                        </div>
                        <div class="col-sm-2">
                            <div class="midd_pic"><img src="{{ asset('/frontend/images/pic6.png') }}" alt=""></div>
                        </div>
                        <div class="col-sm-5">
                            <input type="mail" class="frm_fld" placeholder="Email">
                            <input type="text" class="frm_fld" placeholder="Type of Occasion">
                            <input type="tel" class="frm_fld" placeholder="Number of Guests">
                        </div>
                    </div>
                    <div class="viewmore text-center">
                        <a href="javascript:void(0)">
                            SUBMIT
                            <i><img src="{{ asset('/frontend/images/right_arrow.png') }}" alt=""></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--end-->

@endsection
