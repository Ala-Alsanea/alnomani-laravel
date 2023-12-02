<div>
    @php
        // dd($banners);
    @endphp
    @if ($banners )
    <!-- home four banner -->

        <section class="home-two-banner home-four-banner">
            <div class="banner-carousel home-two-banner-carousel owl-carousel owl-theme">
                @foreach ($banners as $banner)
                    <!-- item -->
                    <div class="home-two-item">
                        <div class="home-two-banner-bg"
                            style="background-image: url({{ asset('/storage/' . $banner->image) }});">
                        </div>
                        <div class="home-two-banner-bg"
                            style="background-color: black; opacity: .5;">
                        </div>
                        <div class="home-two-wrapper">
                            <div class="home-two-wrapper-inner">
                                <h6>{{__('Online spare parts store')}}</h6>
                                <h2>{{$banner->main_text}}</h2>
                                <p>{{__('Everything your car needs and more')}} </p>
                                {{-- button --}}
                                <div class="btn-box clearfix">
                                    <a href="{{$banner->link}}" class="theme-btn btn-style-one">
                                        {{__('more')}}
                                        <i class="flaticon-right-arrow"></i>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
        <!-- home four banner -->
        @endif
</div>
