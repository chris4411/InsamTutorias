<!DOCTYPE html>
<html lang="en">
    <head>
         @include('layout-frontend.partials.head')
    </head>

    <body class="handheld-toolbar-enabled">
        <noscript>
            <iframe src="http://www.googletagmanager.com/ns.html?id=GTM-WKV3GT5" height="0" width="0" style="display: none; visibility: hidden;"></iframe>
        </noscript>
        @include('layout-frontend.partials.signin-modal')

        <main class="page-wrapper">
             <!-- Navbar-->
             <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
            @include('layout-frontend.partials.header')
            <!-- Demos section-->
            @yield('content')
            <!-- Cartzilla pages section-->
        </main>

        @include('layout-frontend.partials.footer')

        @include('layout-frontend.partials.footer-scripts')
    </body>
</html>

