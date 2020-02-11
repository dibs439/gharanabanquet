<!--banner area-->
<div class="banner_area">
    @if (url()->current() == "/")
        <img src="{{ asset('/frontend/images/gharana-banquet-front.png') }}" alt="Gharana Banquet">
    @elseif (strpos(url()->current(), '/occasions') >= 0)
        <img src="{{ asset('/frontend/images/banner.jpg') }}" alt="Gharana Banquet">
    @else
        <img src="{{ asset('/frontend/images/gharana-banquet-banner2.png') }}" alt="Gharana Banquet">
    @endif
    <div class="banner_caption text-center">
        <div class="logo wow fadeIn">
        <a href="{{ url('/') }}"><img src="{{ asset('/frontend/images/logo.png') }}" alt="{{ env('APP_TITLE') }}"></a>
        </div>
        <span class="book_btn wow fadeInUp">
            <a href="{{ url('/contact') }}">BOOK NOW</a>
        </span>
    </div>

</div>
<!--banner end-->

<!--banner btm area-->
<div class="banner_btm">
    <div class="container">
        <h1 class="wow fadeInDown">Gharana - One of the finest Comfort Banquet Hall in Kolkata
        </h1>
        <span class="wow fadeInUp" style="font-size: 20px !important; ">A Splendid Banquet for a Striking Celebration!</span>
    </div>
</div>
<!--end-->



    <!--contact no-->
    <div class="contact_no text-center">
        <img src="{{ asset('/frontend/images/phn_icon.png') }}" alt=""><br />
        <a href="tel:+919830170287" class="wow flash"><span>+91-9830170287</span></a><br />
        <a href="tel:+7003966606" class="wow flash"><span>+91-7003966606</span></a>
    </div>
    <!--end-->

