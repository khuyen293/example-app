<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <style>
            h1 {
                font-size: 36px;
            }
            .header-title {
                font-size: 40px;
                color: aqua;
                text-align: center;
            }
            .header {
                background-color: #333;
                height: 70px;
                width: 100%;
            }
            .footer{
                 background-color: #333;
                height: 70px;
                width: 100%;
                bottom: 0;
            }
        </style>
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div>
            <div class="header">
                <h1 class="header-title"></h1>
            </div>
            <div class="body">
                @yield('content')
            </div>
            <div class="footer">
            </div>
        </div>
    </body>
</html>
