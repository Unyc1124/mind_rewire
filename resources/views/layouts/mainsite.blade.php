<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta name="theme-color" content="#0b032acc" />
    <meta name="msapplication-navbutton-color" content="#0b032acc">
    <meta name="apple-mobile-web-app-status-bar-style" content="#0b032acc">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="base_url" content="{{ url('/') }}" />
    @php $segments = request()->path(); @endphp

    @yield('title')
    @yield('favicon')

    @include('includes.head')

    @yield('css')

    <style>
.mw-page-offset {
    padding-top: 140px; /* header height */
}
</style>

</head>

<body class="@yield('body-class')">

    @include('includes.header')

    <div style="padding-top:120px;">
        @yield('content')
    </div>

    @include('includes.footer')


    @stack('scripts')

    @yield('footer_script')

    @yield('scripts')

</body>

</html>
