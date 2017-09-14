<!doctype html>
<html class="fixed">
<head>

    <!-- Basic -->
    <title>@yield('title')</title>

    @include('admin.layouts.header.meta.meta')

    <!-- Web Fonts  -->
    @include('admin.layouts.header.font.font')

    <!-- Vendor CSS -->
    @include('admin.layouts.header.css.css')

    <!-- Special Pages CSS -->
    @yield('css')

    <!-- Head Libs -->
    @include('admin.layouts.header.js.js')

    <!-- Special Pages Js -->
    @yield('js')
</head>
<body>
<section class="body">

    <!-- start: header -->
    <header class="header">
        @include('admin.layouts.header.logo.logo')

        <!-- start: search & user box -->
        <div class="header-right">
            <span class="separator"></span>

            <!-- search-form -->
            @include('admin.layouts.header.form-search.form_search')

            <span class="separator"></span>

            <!-- user-box -->
            <div id="userbox" class="userbox">
                @include('admin.layouts.header.account.avatar')

                <!-- drop-menu -->
                @include('admin.layouts.header.account.drop_menu')
            </div>
        </div>
        <!-- end: search & user box -->
    </header>
    <!-- end: header -->