<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $session->title }} - {{ $webSetting->site_name ?? 'Stammering Solutions' }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body { font-family: 'Instrument Sans', sans-serif; }
    </style>
</head>
<body class="bg-gray-50">
    <nav class="bg-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="/" class="flex-shrink-0 flex items-center">
                        @if($webSetting && $webSetting->logo)
                            <img src="{{ asset('storage/' . $webSetting->logo) }}" alt="{{ $webSetting->site_name ?? 'Logo' }}" class="h-8 w-8">
                        @else
                            <svg class="h-8 w-8 text-indigo-600" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        @endif
                        <span class="ml-2 text-xl font-bold text-gray-900">{{ $webSetting->site_name ?? 'Stammering Solutions' }}</span>
                    </a>
                </div>
                <div class="flex items-center">
                    <a href="{{ route('practice-sessions.index') }}" class="text-gray-700 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">
                        Back to Sessions
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="max-w-4xl mx-auto  px-4 sm:px-6 lg:px-8">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="px-6 py-8 sm:px-10">
                <h1 class="text-3xl font-extrabold text-gray-900">Day {{ $session->day }}: {{ $session->title }}</h1>
                <p class="mt-4 text-lg text-gray-500">{{ $session->description }}</p>

                <div class="mt-8">
                    <h2 class="text-xl font-semibold text-gray-900">Tips for Today</h2>
                    <p class="mt-2 text-gray-700">{{ $session->tips }}</p>
                </div>

                <div class="mt-8 flex space-x-4">
                    @if($session->day > 1)
                        <a href="{{ route('practice-sessions.show', $session->id - 1) }}" class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                            Previous Day
                        </a>
                    @endif
                    @if($session->day < 40)
                        <a href="{{ route('practice-sessions.show', $session->id + 1) }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
                            Next Day
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</body>
</html>
