<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>

        <style type="css/tailwindcss">
            .btn {
                @apply rounded-md px-2 py-1 text-center font-medium shadow-sm ring-1 ring-slate-700/10 hover:bg-slate-50;
            }

            .link {
                @apply font-medium text-gray-700 underline decoration-blue-500;
            }

            label {
                @apply block uppercase text-slate-700 mb-2;
            }

            input, 
            textarea {
                @apply shadow-sm apperance-none border w-full py-2 px-3 text-slate-700 leading-tight focus:outline-none;
            }
        </style>

        @yield('styles')
    </head>
    <body class="container mx-auto mt-10 mb-10 max-w-lg">
        @yield('content')
    </body>
</html>
