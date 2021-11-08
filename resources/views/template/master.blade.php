<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        <script src="https://kit.fontawesome.com/b265b4008d.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-default">
    @include('template/header')
    <div id="body" class="min-h-screen bg-gray-100 px-2 md:px-10 py-5">
        <div class="grid grid-cols-4 gap-x-5 gap-y-5 my-5">
            @yield('content')
        </div>
    </div>
    @include('template/footer')
    </body>
</html>
