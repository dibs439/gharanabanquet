@extends('frontend.layouts.app')
@section('content')

    @include('frontend.includes.banner')


    @if(isset($occasion))

    <!--exprnce area-->
    @if(isset($occasion->occasionDetails))
    @php($occasionDetails = $occasion->occasionDetails)
    @php($p = 0)
    @foreach($occasionDetails as $occasionDetail)

            <div class="exprnce_area occasons">
                <div class="container">
                    <div class="text-center cmn_header">
                    <h4 class="wow fadeInDown">{{ $occasionDetail->title }}</h4>
                        <span>{{ $occasionDetail->sub_title }}</span>
                        <div class="pic1">
                        <img src="{{ asset('/frontend/images/pic1.png') }}" alt="">
                        </div>
                    </div>
                    <div class="expence_inr">
                        <div class="row">

                            <div class="col-sm-5">

                                <div class="expnce_left_wrap">
                                    @if(isset($occasionDetail->photo) && $occasionDetail->photo != '')
                                    <div class="expnce_left wow flipInX">
                                    <img src="{{ asset(env('OCCASIONS_PIC_MAX', '/storage/uploads/occasions/').$occasionDetail->photo) }}" alt="{{ $occasionDetail->photo_alt_text }}">
                                    </div>
                                    @endif
                                </div>

                            </div>

                            <div class="col-sm-7">
                                <div class="exprnce_content">
                                    <span>
                                        <img src="{{ asset('/frontend/images/pic3.png') }}" alt="">
                                    </span>
                                    <p>{!! $occasionDetail->description !!}</p>
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
        @php($p++)
    @endforeach
    @endif

    @endif
    <br />

    <!--flat text-->
    <div class="text-center cmn_header">
        <div class="container">
            <h4 class="wow fadeInDown animated" style="visibility: visible;">{{ $occasion->heading }}</h4>
            @if($occasion->sub_heading != '')
            <span>{{ $occasion->sub_heading }}</span>
            @endif
            <div class="exprnce_content">
            <p class="">{!! $occasion->description !!}</p>
            </div><br /><br />
            <div class="book_btn wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <a href="/contact">BOOK NOW</a>
            </div>
        </div>
    </div><br /><br />
    <!--end-->

@endsection
