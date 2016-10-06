<!doctype html>
<html lang="pt">

    @include('includes.head')

    <body>

        @include('includes.navigation')

        @yield('content')

        @include('includes.newsletter')
        @include('includes.footer')
        @include('includes.scripts')

    </body>

</html>