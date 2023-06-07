<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield("title")</title>
        <link rel="icon" href="/favicon.png"/>
        {{-- Includiamo gli assets con la direttiva @vite --}}
        @vite('resources/js/app.js')
    </head>
    <body>


        <header>

          @include("partials.header")
        </header>


        <main>

            @yield("content")

        </main>


        <footer>

          @include("partials.footer")
        </footer>

    </body>
</html>
