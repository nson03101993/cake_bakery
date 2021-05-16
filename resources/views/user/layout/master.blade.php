<!DOCTYPE html>
<html lang="en">
    
<head>
        @section('head')
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="{{ asset('public/frontend/img/fav-icon.png') }}" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Cake Bakery</title>

        <!-- Icon css link -->
        <link href="{{ asset("public/frontend/css/font-awesome.min.css") }}" rel="stylesheet">
        <link href="{{ asset("public/frontend/vendors/linearicons/style.css") }}" rel="stylesheet">
        <link href="{{ asset("public/frontend/vendors/flat-icon/flaticon.css") }}" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="{{ asset("public/frontend/css/bootstrap.min.css") }}" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="{{ asset("public/frontend/vendors/revolution/css/settings.css") }}" rel="stylesheet">
        <link href="{{ asset("public/frontend/vendors/revolution/css/layers.css") }}" rel="stylesheet">
        <link href="{{ asset("public/frontend/vendors/revolution/css/navigation.css") }}" rel="stylesheet">
        <link href="{{ asset("public/frontend/vendors/animate-css/animate.css") }}" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="{{ asset("public/frontend/vendors/owl-carousel/owl.carousel.min.css") }}" rel="stylesheet">
        <link href="{{ asset("public/frontend/vendors/magnifc-popup/magnific-popup.css") }}" rel="stylesheet">
        
        <link href="{{ asset("public/frontend/css/style.css") }}" rel="stylesheet">
        <link href="{{ asset("public/frontend/css/responsive.css") }}" rel="stylesheet">	                
        @show
</head>
<body>

        <!--================Main Header Area =================-->
        @includeIf('user.layout.partials.header')
        <!--================End Main Header Area =================-->

        <!--================Main Content =================-->
        @yield('main_content')
        <!--================End Main Content =================-->
        
        <!--================Newsletter Area =================-->
        @includeIf('user.layout.partials.article')
        <!--================End Newsletter Area =================-->
        
        <!--================Footer Area =================-->
        @includeIf('user.layout.partials.footer')
        <!--================End Footer Area =================-->
        
        
        <!--================Search Box Area =================-->
        @includeIf('user.layout.partials.search_box')
        <!--================End Search Box Area =================-->
        
        
        
        @section('scripts')
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{ asset("public/frontend/js/jquery-3.2.1.min.js") }}"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset("public/frontend/js/popper.min.js") }}"></script>
        <script src="{{ asset("public/frontend/js/bootstrap.min.js") }}"></script>
        <!-- Rev slider js -->
        <script src="{{ asset("public/frontend/vendors/revolution/js/jquery.themepunch.tools.min.js") }}"></script>
        <script src="{{ asset("public/frontend/vendors/revolution/js/jquery.themepunch.revolution.min.js") }}"></script>
        <script src="{{ asset("public/frontend/vendors/revolution/js/extensions/revolution.extension.actions.min.js") }}"></script>
        <script src="{{ asset("public/frontend/vendors/revolution/js/extensions/revolution.extension.video.min.js") }}"></script>
        <script src="{{ asset("public/frontend/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js") }}"></script>
        <script src="{{ asset("public/frontend/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js") }}"></script>
        <script src="{{ asset("public/frontend/vendors/revolution/js/extensions/revolution.extension.navigation.min.js") }}"></script>
        <!-- Extra plugin js -->
        <script src="{{ asset("public/frontend/vendors/owl-carousel/owl.carousel.min.js") }}"></script>
        <script src="{{ asset("public/frontend/vendors/magnifc-popup/jquery.magnific-popup.min.js") }}"></script>
        <script src="{{ asset("public/frontend/vendors/datetime-picker/js/moment.min.js") }}"></script>
        <script src="{{ asset("public/frontend/vendors/datetime-picker/js/bootstrap-datetimepicker.min.js") }}"></script>
        <script src="{{ asset("public/frontend/vendors/nice-select/js/jquery.nice-select.min.js") }}"></script>
        <script src="{{ asset("public/frontend/vendors/jquery-ui/jquery-ui.min.js") }}"></script>
        <script src="{{ asset("public/frontend/vendors/lightbox/simpleLightbox.min.js") }}"></script>
        <script src="{{ asset("public/frontend/js/theme.js") }}"></script>        
        @show
      
</body>

</html>