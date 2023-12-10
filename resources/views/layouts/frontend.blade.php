<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>شركة النعماني لقطع غيار مرسيدس ولاندروفر</title>
    <!-- Fav Icon -->
    <link rel="icon" href="fav.png" type="image/x-icon">


    <!-- Stylesheets -->
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.0.0/mdb.min.css" rel="stylesheet" />
    <link href="{{ asset('css/font_awesome_all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('css/icomoon.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/hover.css') }}" rel="stylesheet">
    <link href="{{ asset('css/global.css') }}" rel="stylesheet">
    <link href="{{ asset('css/nice_select.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery_ui.css') }}" rel="stylesheet">
    <link href="{{ asset('css/elpath.css') }}" rel="stylesheet">
    <link href="{{ asset('css/progresscircle.css') }}" rel="stylesheet">
    <link href="{{ asset('css/hover.css') }}" rel="stylesheet">
    <link href="{{ asset('css/element_css/preloader.css') }}" rel="stylesheet">
    <link href="{{ asset('css/element_css/time-travel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/element_css/categories.css') }}" rel="stylesheet">
    <link href="{{ asset('css/element_css/dot_style_one.css') }}" rel="stylesheet">
    <link href="{{ asset('css/element_css/owl_nav_one.css') }}" rel="stylesheet">
    <link href="{{ asset('css/element_css/pagination.css') }}" rel="stylesheet">
    <link href="{{ asset('css/element_css/search_popup.css') }}" rel="stylesheet">
    <link href="{{ asset('css/element_css/header_top.css') }}" rel="stylesheet">
    <link href="{{ asset('css/element_css/header_upper.css') }}" rel="stylesheet">
    <link href="{{ asset('css/element_css/header_lower.css') }}" rel="stylesheet">
    <link href="{{ asset('css/element_css/menu_sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/element_css/menu.css') }}" rel="stylesheet">
    <link href="{{ asset('css/element_css/mobile_menu.css') }}" rel="stylesheet">
    <link href="{{ asset('css/element_css/banner.css') }}" rel="stylesheet">
    <link href="{{ asset('css/element_css/cta_section.css') }}" rel="stylesheet">
    <link href="{{ asset('css/element_css/feature_block_one.css') }}" rel="stylesheet">
    <link href="{{ asset('css/element_css/product_block_one.css') }}" rel="stylesheet">
    <link href="{{ asset('css/element_css/clients_one.css') }}" rel="stylesheet">
    <link href="{{ asset('css/element_css/newsletter_one.css') }}" rel="stylesheet">
    <link href="{{ asset('css/element_css/main_footer_one.css') }}" rel="stylesheet">
    <link href="{{ asset('css/element_css/footer_bottom_one.css') }}" rel="stylesheet">
    <link href="{{ asset('css/element_css/scroll_to_top.css') }}" rel="stylesheet">
    <link href="{{ asset('css/element_css/week_sale.css') }}" rel="stylesheet">
    <link href="{{ asset('css/element_css/add.css') }}" rel="stylesheet">
    <link href="{{ asset('css/element_css/brand.css') }}" rel="stylesheet">
    <link href="{{ asset('css/element_css/blog.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">



</head>

<body>

    <div class="boxed_wrapper">
        {{-- @livewire('components.preloader') --}}
        @livewire('components.nav')

        {{ $slot }}

        @livewire('components.whatsapp-floating-button')
        @livewire('components.footer')
    </div>



    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.0.0/mdb.umd.min.js"></script>
    <!-- jequery plugins -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/owl.js') }}"></script>
    <script src="{{ asset('js/wow.js') }}"></script>
    <script src="{{ asset('js/validation.js') }}"></script>
    <script src="{{ asset('js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('js/appear.js') }}"></script>
    <script src="{{ asset('js/nav_tool.js') }}"></script>
    <script src="{{ asset('js/scrollbar.js') }}"></script>
    <script src="{{ asset('js/jquery.nice_select.min.js') }}"></script>
    <script src="{{ asset('js/jquery.bootstrap_touchspin.js') }}"></script>
    <script src="{{ asset('js/jquery_ui.js') }}"></script>
    <script src="{{ asset('js/parallax_scroll.js') }}"></script>
    <script src="{{ asset('js/product_filter.js') }}"></script>


    <!-- main-js -->
    <script src="{{ asset('js/script.js') }}"></script>



</body>

</html>
