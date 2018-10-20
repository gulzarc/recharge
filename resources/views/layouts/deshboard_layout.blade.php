<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <title>{{ config('app.name', 'Recharge Pavilion') }}</title>
     
    <!-- <script src="{{ asset('js/app.js') }}"></script>    -->

    
  
</head>
<body>
    <div id="app">
        @include('template.header')
        <main>
            @yield('content')
        </main>
    </div>
    @include('template.footer')
    @yield('scripts');
</body>
</html>
 