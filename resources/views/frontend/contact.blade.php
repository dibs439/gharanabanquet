@extends('frontend.layouts.app')
@section('content')

    @include('frontend.includes.banner')


    <!--contact area-->
    <div class="contact_wrap" style="padding-top: 0 !important">
            <div class="contact_area">
                <div class="container">
                    <div class="contact_inner">
                        <h2 class="text-center">Get in Touch</h2>

                        <div class="row">
                            <div class="col-sm-5">
                                <div class="address_cell">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <address>
                                            O/30, Sahid smriti colony,<br />
                                            kolkata - 700094.<br />
                                            Sahid smriti colony talent group club<br />
                                            P. S - Panchasayar<br />
                                            P. O - Panchasayar<br />
                                            Beside peerless hospital


                                    </address>
                                </div>
                                <div class="contact_cell">
                                    <i><img src="{{ asset('/frontend/images/phn2.png') }}" alt="Call Gharana Banquet"></i>
                                    <a href="tel:+919830170287">+91 9830170287</a><br />
                                    <i><img src="{{ asset('/frontend/images/phn2.png') }}" alt="Call Gharana Banquet"></i>
                                    <a href="tel:+917003966606">+91 7003966606</a>

                                </div>


                                <span class="map_area">

                                    <!--<iframe
                                    src="https://maps.google.com/maps?q=&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                        height="450" frameborder="0" style="border:0;height: 70%; padding-left:16px;"
                                        allowfullscreen></iframe>-->

                                    <iframe src="http://maps.google.com/maps?q=22.608067,88.419453&z=15&output=embed" width="360" height="270" frameborder="0" style="border:0" allowfullscreen></iframe>


                                </span>
                            </div>
                            <div class="col-sm-7">
                                <form id="contact_form" method="POST">
                                    {{ csrf_field() }}

                                    <div class="frm_row">
                                        <div class="frm_cell">
                                            <input type="text" name="name" id="name" placeholder="Name" class="frm_fld">
                                        </div>
                                        <div class="frm_cell">
                                            <input type="mail" name="email" id="email" placeholder="Email" class="frm_fld">
                                        </div>
                                        <div class="frm_cell">
                                            <input type="tel" name="phone" id="phone" placeholder="Contact no"
                                                class="frm_fld">
                                        </div>
                                        <div class="frm_cell">
                                            <input type="text" name="event_date" id="event_date" placeholder="Event Date"
                                                class="frm_fld">
                                        </div>
                                        <div class="frm_cell">
                                            <input type="text" name="occasion" id="occasion" placeholder="Type of Occasion"
                                                class="frm_fld">
                                        </div>
                                        <div class="frm_cell">
                                            <input type="text" name="num_guests" id="num_guests" placeholder="No. of Guests"
                                                class="frm_fld">
                                        </div>

                                        <div class="g-recaptcha" data-sitekey="6LeI_bkUAAAAABggq-DAS4vzDx_EBBtgxtr_TjXd">
                                        </div>


                                    </div>
                                    <div class="clearfix text-center">
                                        <input type="submit" id="submit" value="Submit" class="submit_btn">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



@endsection
