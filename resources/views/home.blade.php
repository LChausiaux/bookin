<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="{{ asset('/js/vendor/parallax.js') }}"></script>
        <title>Laravel</title>
    </head>
    <body>
        <div id="app">
            <navbar></navbar>
            <ad
                background="got-bg.jpg"
                cover="got-cover.jpg"
                title="Le trône de fer"
                content="vcxvcxvxcwvvcxvcxvxcwvvcxvcvcxvcxvxcw
cwvvcxvcvcxvcxvxcwvcxvcxvxcwvvcxvc
vvcxvcxvxcwvvcxvcvcxvcxvxcwvvcxv">
            </ad>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
