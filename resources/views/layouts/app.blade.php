<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Title Dynamic --}}
    <title>@yield('title', 'Gemini Academy')</title>

    {{-- Meta SEO Basic --}}
    <meta name="description" content="@yield('meta_description', 'Platform pembelajaran Gemini Academy')">

    {{-- Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    {{-- Icons --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    {{-- Main CSS --}}
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    {{-- Page Specific CSS --}}
    @stack('styles')

    <style>
        body{
            font-family: 'Inter', sans-serif;
            background:#f4f7fb;
            margin:0;
            color:#1e293b;
        }
    </style>
</head>

<body>

    {{-- Page Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Bottom Navigation --}}
    @include('fe.bottom-nav')

    {{-- Scripts --}}
    @stack('scripts')

</body>
</html>
