<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
</head>

<body class="antialiased">
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                <h1 class="w-100 text-center mt-12">
                    <a href="/">@yield('title')</a>
                </h1>
            </div>
            @yield('content')
            <div class="justify-center mt-4 sm:items-center sm:justify-between w-100">
                <div class="ml-4 text-center text-sm text-gray-500 sm:ml-0">
                    {{--Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})--}}
                    with &#10084; by <a href="https://diovane.me">diovane.me</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>