<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-100">

<div class="flex h-screen">

    <!-- Sidebar -->
    <aside class="w-64 bg-slate-900 text-white flex flex-col">
        <div class="h-16 flex items-center px-6 border-b border-slate-800">
            <h1 class="text-xl font-bold">
                SMS
            </h1>
        </div>

        <nav class="flex-1 px-4 py-6 space-y-2">
            <a href="{{ route('dashboard') }}" class=" {{ request()->routeIs('dashboard') ? 'bg-slate-800' : '' }} block px-4 py-3 rounded-lg hover:bg-slate-700" >
                Dashboard
            </a>

            <a href="{{ route('students') }}"class=" {{ request()->routeIs('students') ? 'bg-slate-800' : '' }} block px-4 py-3 rounded-lg hover:bg-slate-700">
                Students
            </a>

            <a href="{{ route('rooms') }}"class=" {{ request()->routeIs('rooms') ? 'bg-slate-800' : '' }} block px-4 py-3 rounded-lg hover:bg-slate-700">
                Rooms
            </a>

        </nav>
    </aside>

    <!-- Content Area -->
    <div class="flex-1 flex flex-col overflow-hidden">

        <!-- Header -->
        <header class="h-16 bg-white border-b flex items-center justify-between px-6">
            <div>
                <h2 class="text-xl font-semibold text-gray-800">
                    Dashboard
                </h2>
            </div>

            <div class="flex items-center gap-4">
                <span class="text-gray-600">
                  Hi welcome ,  {{ Auth::user()->name }}
                </span>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button
                        type="submit"
                        class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600"
                    >
                        Logout
                    </button>
                </form>
            </div>
        </header>

        <!-- Main Content -->
        <main class="flex-1 overflow-y-auto p-6">
            {{ $slot }}
        </main>

    </div>

</div>

</body>
</html>
