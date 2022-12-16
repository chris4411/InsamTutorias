<!DOCTYPE html>
<html lang="en">
    <head>
         @include('layout-admin.partials.head')
    </head>

    <body>
        <div id="layout-wrapper">
            @include('layout-admin.partials.header')
            @include('layout-admin.partials.leftsidebar')
            <div class="main-content">
                @yield('content')
                @include('layout-admin.partials.footer')
            </div>
        </div>
        @include('layout-admin.partials.rightsidebar')

        @include('layout-admin.partials.footer-scripts')
    </body>
</html>

