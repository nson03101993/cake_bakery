<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Trang quản trị') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Fonts Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Vendors -->
        <link rel="stylesheet" href="{{ asset('public/backend/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
        <link rel="stylesheet" href="{{ asset('public/backend/vendors/bootstrap-icons/bootstrap-icons.css') }}">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('public/backend/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('public/backend/css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ asset('public/backend/js/app.js') }}" defer></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>
        <div id="app">
            @livewire('layouts.partials.sidebar')
            
            <div id="main" class='layout-navbar'>
                @livewire('layouts.partials.header')
                <div id="main-content">

                    <div class="page-heading">
                        <div class="page-title">
                            {{ $header }}
                        </div>
                        {{ $slot }}
                    </div>

                    @livewire('layouts.partials.footer')
                </div>
            </div>
        </div>
        <script src="{{ asset('public/backend/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
        <script src="{{ asset('public/backend/js/bootstrap.bundle.min.js') }}"></script>
        <!-- CKEditor -->
        <script src="{{ asset('public/backend/vendors/ckeditor/ckeditor.js') }}"></script>

        @livewireScripts
        <script src="{{ asset('public/backend/js/main.js') }}"></script>
        

    </body>

</html>
