<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- FontAwesome -->

{{--        <title inertia>{{ config('app.name', 'Onlib') }}</title>--}}
        <title>Onlib</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Great+Vibes&family=Orelega+One&display=swap');
        html, body {
            margin: 0; /*Noņemam default margin*/
            padding: 0; /*Noņemam default padding*/

        }

        body{
            background-color: antiquewhite; /*Fona krāsa*/
        }



    </style>
</html>
