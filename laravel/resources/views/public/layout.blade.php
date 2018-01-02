<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('public.header')
        @yield('header')
    </head>

    <body>
        <div class="container">
            @yield('body')
        </div>

        @include('public.footer')
        @yield('footer')
    </body>

</html>