<div>
    <!-- main header -->
    <header class="main-header ex_shop_header header-style-four">
        <!-- Header Top -->
        <div class="header-top">
            <div class="auto-container">
                <div class="wrapper-box">
                    <div>
                        {{-- @include('backpack.language-switcher::language-switcher') --}}

                        @livewire('Components.language-switcher')
                    </div>
                    <div class="left-column">
                        <ul class="contact-info">
                            {{-- <li><a href="#0">نبذة عنا </a></li> --}}
                        </ul>
                    </div>
                    <div class="right-column">
                        <div class="help-info">
                            {{__('help?')}} <span> {{__("call us:")}} </span> <a href="tel:0112040824" class="help-info-number">
                            {{$contact_info->phone_1}}
                            </a>
                            <span> or </span>
                            <a href="mailto: {{$contact_info->email}}">{{$contact_info->email}}</a>
                        </div>
                        <!-- <div class="curency">
                                <div class="language">
                                    <span class="flag"><img src="images/icons/flag.png" alt="flag"></span>
                                    <select class="selectpicker" name="make">
                                        <option value="*">English</option>
                                        <option value=".category-1">Arabic</option>

                                    </select>
                                </div>
                                <div class="currency">
                                    <select class="selectpicker" name="make">
                                        <option value="*">USD</option>
                                        <option value=".category-1">EURO</option>
                                    </select>
                                </div>
                            </div> -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Header Upper -->
        <div class="header-upper">
            <div class="auto-container">
                <div class="inner-container">
                    <!-- nav -->
                    <div class="logo_menu">


                        <div class="menu-area clearfix">
                            <nav class="main-menu clearfix navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent" >
                                    <ul class="navigation clearfix home-menu" >

                                        <li><a href={{url('contact')}}>{{__('contact us')}} </a></li>
                                        @foreach ($types as $type)
                                            <li><a href={{ url("/$type->id/product") }}>{{ app()->getLocale() =='ar'? $type->name : $type->name_en }}</a></li>
                                        @endforeach
                                        <li><a href={{url('about-us')}}>{{__('about us')}}</a></li>
                                        <li><a href={{ url('/') }}>{{__('home')}}</a></li>

                                    </ul>
                                </div>
                            </nav>

                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>
                        </div>

                          <!--Logo-->
                        <div class="logo-box">
                            <div class="logo"><a href="index-4.html"><img src="{{ asset('images/logoo.jpg') }}"
                                        width="80" alt="logo"></a></div>
                        </div>
                    </div>

                    <!-- <ul class="right-info"  >
                            <li>
                                <div class="shopping-cart"><i class="icon-shopping-cart"></i><span class="count"></span>
                                </div>
                            </li>
                        </ul> -->

                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <!--sticky Header-->
        <div class="sticky-header">
            <div class="auto-container">
                <div class="outer-box">
                    <div class="logo-box">
                        <div class="logo"><a href="index.html"><img src="{{ asset('images/logoo.jpg') }}" height="60"
                                    width="60" alt="logo"></a></div>
                    </div>
                    <div class="menu-area clearfix">
                        <nav class="main-menu clearfix">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- main-header end -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><i class="fas fa-times"></i></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="index.html"><img src="{{ asset('images/logoo.jpg') }}" alt="logo" title=""></a>
            </div>
            <div class="menu-outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
            <div class="contact-info">
                <h4>Contact Info</h4>
                <ul>
                    <li>Chicago 12, Melborne City, USA</li>
                    <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                    <li><a href="mailto:info@example.com">info@example.com</a></li>
                </ul>
            </div>
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="#0"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="#0"><span class="fab fa-facebook-square"></span></a></li>
                    <li><a href="#0"><span class="fab fa-pinterest-p"></span></a></li>
                    <li><a href="#0"><span class="fab fa-instagram"></span></a></li>
                    <li><a href="#0"><span class="fab fa-youtube"></span></a></li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- End Mobile Menu -->
</div>
