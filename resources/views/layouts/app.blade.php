<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @include('includes.link')

    @stack('prepend-style')
    @include('includes.style');
    @stack('addon-style')


</head>

<body>
    <div id="app">

        <main class="py-4">
            @yield('content')
        </main>
    </div>


    @stack('prepend-script')
    @include('includes.script');
    @stack('addon-script')
</body>

</html>