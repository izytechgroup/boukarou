<!DOCTYPE html>
<html lang="fr-FR">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="/assets/css/app.min.css?{{ time() }}">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">
        <meta name="robots" content="index,follow">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" type="image/png"  href="/favicon.ico">
        <meta http-equiv="content-language" content="fr">
        @yield('head')
    </head>
    <body class="projets-template">
        @include('front.includes.nav')

        @yield('body')
        @include('front.includes.footer')
        <script src="/assets/js/scripts.min.js"></script>
    </body>
</html>
