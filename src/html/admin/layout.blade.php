<!doctype html>
<html lang="pt">

    @include('admin.partials.head')

    <body>

        @include('admin.partials.navbar')

        <div id="admin-content">
            @yield('content')
        </div>

        @include('admin.partials.scripts')


    </body>

</html>