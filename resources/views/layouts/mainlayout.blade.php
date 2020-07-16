<!DOCTYPE html>
<html lang="en">

<head>
    <title>Rentaly - @yield('title')</title>

    @include('layouts.partials.head')
</head>

<body class="@yield('body-class')">

    @include('layouts.partials.nav')

    @yield('content')

    @include('layouts.partials.footer')

    @include('layouts.partials.footer-scripts')

</body>

</html>