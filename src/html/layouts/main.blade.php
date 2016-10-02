<!doctype html>
<html lang="pt">

    @include('includes.head')

    <body>

        @include('includes.navigation')

        <div class="content">
            @yield('content')
        </div>

        @include('includes.newsletter')
        @include('includes.footer')
        @include('includes.scripts')

    </body>

</html>