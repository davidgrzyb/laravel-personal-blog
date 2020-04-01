<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <main class="flex h-screen items-center justify-center bg-gray-100">
            <div class="flex flex-col items-center w-full">
                <div class="pb-6">
                    <a href="{{ route('blog.index') }}">
                        <img class="w-32 rounded-full border-8 border-gray-header" src="{{ getAsset('storage/david-grzyb-animoji.jpg') }}" loading="lazy">
                    </a>
                </div>
                <div class="sm:w-2/3 md:w-2/5 lg:w-1/5">
                    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                            {{ __('E-Mail Address') }}
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        </div>
                        <div class="mb-6">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                                {{ __('Password') }}
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 mb-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" name="password" required autocomplete="current-password">
                        </div>
                        <div class="flex items-center justify-between">
                            <button type="submit" class="w-full bg-blue-300 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </form>
                </div>
                <p class="text-center text-gray-500 text-xs">
                    &copy; {{ now()->year }} David Grzyb.
                </p>
            </div>
        </main>
    </div>
</body>
</html>
