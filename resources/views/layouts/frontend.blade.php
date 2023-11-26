<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>

    <!-- Fav Icon -->
    <link rel="icon" href="fav.png" type="image/x-icon">

    <!-- Stylesheets -->
    <link href="css/font_awesome_all.css" rel="stylesheet">
    <link href="css/flaticon.css" rel="stylesheet">
    <link href="css/icomoon.css" rel="stylesheet">
    <link href="css/owl.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/hover.css" rel="stylesheet">
    <link href="css/global.css" rel="stylesheet">
    <link href="css/nice_select.css" rel="stylesheet">
    <link href="css/jquery_ui.css" rel="stylesheet">
    <link href="css/elpath.css" rel="stylesheet">
    <link href="css/progresscircle.css" rel="stylesheet">
    <link href="css/hover.css" rel="stylesheet">
    <link href="css/element_css/preloader.css" rel="stylesheet">
    <link href="css/element_css/time-travel.css" rel="stylesheet">
    <link href="css/element_css/categories.css" rel="stylesheet">
    <link href="css/element_css/dot_style_one.css" rel="stylesheet">
    <link href="css/element_css/owl_nav_one.css" rel="stylesheet">
    <link href="css/element_css/pagination.css" rel="stylesheet">
    <link href="css/element_css/search_popup.css" rel="stylesheet">
    <link href="css/element_css/header_top.css" rel="stylesheet">
    <link href="css/element_css/header_upper.css" rel="stylesheet">
    <link href="css/element_css/header_lower.css" rel="stylesheet">
    <link href="css/element_css/menu_sidebar.css" rel="stylesheet">
    <link href="css/element_css/menu.css" rel="stylesheet">
    <link href="css/element_css/mobile_menu.css" rel="stylesheet">
    <link href="css/element_css/banner.css" rel="stylesheet">
    <link href="css/element_css/cta_section.css" rel="stylesheet">
    <link href="css/element_css/feature_block_one.css" rel="stylesheet">
    <link href="css/element_css/product_block_one.css" rel="stylesheet">
    <link href="css/element_css/clients_one.css" rel="stylesheet">
    <link href="css/element_css/newsletter_one.css" rel="stylesheet">
    <link href="css/element_css/main_footer_one.css" rel="stylesheet">
    <link href="css/element_css/footer_bottom_one.css" rel="stylesheet">
    <link href="css/element_css/scroll_to_top.css" rel="stylesheet">
    <link href="css/element_css/week_sale.css" rel="stylesheet">
    <link href="css/element_css/add.css" rel="stylesheet">
    <link href="css/element_css/brand.css" rel="stylesheet">
    <link href="css/element_css/blog.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">


</head>

<body>

    <div class="boxed_wrapper">
        {{-- @livewire('components.preloader') --}}
        @livewire('components.nav')

        {{ $slot }}

        @livewire('components.footer')
    </div>



    <!-- jequery plugins -->
    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/validation.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/nav_tool.js"></script>
    <script src="js/scrollbar.js"></script>
    <script src="js/jquery.nice_select.min.js"></script>
    <script src="js/jquery.bootstrap_touchspin.js"></script>
    <script src="js/jquery_ui.js"></script>
    <script src="js/parallax_scroll.js"></script>
    <script src="js/product_filter.js"></script>

    <!-- main-js -->
    <script src="js/script.js"></script>

</body>

</html>
