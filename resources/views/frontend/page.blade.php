@extends('frontend.layouts.app')
@section('content')

    @include('frontend.includes.banner')

    <!--exprnce area-->
    @php($contents = $page->contentBlock)
    @foreach($contents as $content)
    <div class="exprnce_area occasons">
        <div class="container">
            <div class="text-center cmn_header">
                <h4 class="wow fadeInDown">{{ $content->title }}</h4>
                <span>{{ $page->description }}</span>
                <div class="pic1">
                    <img src="{{ asset('/frontend/images/pic1.png') }}" alt="">
                </div>
            </div>
            <div class="expence_inr">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="expnce_left_wrap">
                            <div class="expnce_left wow flipInX">
                                <img src="{{ asset('/frontend/images/pic7.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="exprnce_content">
                            <span>
                                <img src="{{ asset('/frontend/images/pic3.png') }}" alt="">
                            </span>
                            <p>
                                If you are looking to make your event a grand success, we are the Best AC Banquet Hall in Kolkatafor you. Be it a wedding
                                or an Anniversary party, a seminar or a corporate event- our passionately decorated banquet
                                hall in South Kolkata will steal the show. As the groom and bride take their excited steps
                                towards commencing the holy rituals, as the guest speaker takes the podium by the storm,
                                as the man or woman of the day puts the knife on the cake- the moments are made more memorable
                                with our well-thought backdrop design of the banquet hall.
                            </p>
                            <!-- <div class="viewmore">
                                <a href="javascript:void(0)">
                                    VIEW MORE
                                    <i>
                                        <img src="images/right_arrow.png" alt="">
                                    </i>
                                </a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end-->
    @endforeach



@endsection
