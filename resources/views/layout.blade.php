<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Nova Bank</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-light">
    <nav class="text-white py-5 bg-light  border-b-2 border-secondary ">

        <div class="flex justify-between text-xl items-center max-w-5xl mx-auto">
            <div>

                <img src="{{ asset('images/bank.png') }}" alt="bank logo" width="150px">

            </div>
            <div class="space-x-5 text-secondary font-bold font-serif">
                <a href="{{ route('index') }}">Home</a>
                <a href="{{ route('bank.index') }}">Bank</a>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="text-white py-5 bg-black ">
        <div class="flex justify-between space-x-5 items-center max-w-5xl mx-auto">

            <div class="flex-col flex">
                <a href="{{ route('index') }}">Home</a>
                <a href="{{ route('bank.index') }}">Bank</a>
            </div>

            <p>©NovaBank</p>
        </div>
    </footer>
</body>

</html>
