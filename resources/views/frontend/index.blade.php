@extends('layouts.frontend')
@section('slider')
    <div class="banner clearfix">

        <!-- slideshow start -->
        <!-- ================ -->
        <div class="slideshow">

            <!-- slider revolution start -->
            <!-- ================ -->
            <div class="slider-banner-container">
                <div class="slider-banner-fullwidth-big-height">
                    <ul class="slides">
                        <!-- slide 1 start -->
                        <!-- ================ -->
                        @foreach($products as $product)
                        <li data-transition="random" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Get 50% Sales">

                            <!-- main image -->
                            <img src="/assets/img/products/medium/{{ $product->image }}" alt="slidebg1" data-bgposition="center top"  data-bgrepeat="no-repeat" data-bgfit="cover">

                            <!-- Transparent Background -->
                            <div class="tp-caption dark-translucent-bg"
                                 data-x="center"
                                 data-y="bottom"
                                 data-speed="600"
                                 data-start="0">
                            </div>

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption sfb fadeout large_white"
                                 data-x="left"
                                 data-y="180"
                                 data-speed="500"
                                 data-start="1000"
                                 data-easing="easeOutQuad">Choose your hoodie<span class="text-default"></span><br> {{ $product->title }}
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption sfb fadeout large_white tp-resizeme hidden-xs"
                                 data-x="left"
                                 data-y="300"
                                 data-speed="500"
                                 data-start="1300"
                                 data-easing="easeOutQuad"><div class="separator-2 light"></div>
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption sfb fadeout medium_white hidden-xs"
                                 data-x="left"
                                 data-y="320"
                                 data-speed="500"
                                 data-start="1300"
                                 data-easing="easeOutQuad"
                                 data-endspeed="600">{!! $product->description !!}
                            </div>

                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption sfb fadeout small_white text-center"
                                 data-x="left"
                                 data-y="430"
                                 data-speed="500"
                                 data-start="1600"
                                 data-easing="easeOutQuad"
                                 data-endspeed="600"><a href="#" class="btn btn-default btn-animated">More<i class="fa fa-arrow-right"></i></a>
                            </div>

                        </li>

                        @endforeach
                        <!-- slide 1 end -->


                    </ul>
                    <div class="tp-bannertimer"></div>
                </div>
            </div>
            <!-- slider revolution end -->

        </div>
        <!-- slideshow end -->

    </div>
@endsection
@section('content')
@endsection
