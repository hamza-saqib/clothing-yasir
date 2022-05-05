<!DOCTYPE html>
<html lang="en">
@include('adminpanel.partials.head')

<body>
    <div id="wrapper">

        @include('adminpanel.partials.sidebar')

        @yield('content')

    </div>

    @include('adminpanel.partials.script')
    @yield('custom-script')
</body>

</html>
