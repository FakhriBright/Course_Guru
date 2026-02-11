<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LMS – Login</title>

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://cdn.tailwindcss.com"></script>
    @endif

    <style>
        .brand-gradient {
            background: linear-gradient(135deg, #1e3a8a, #2563eb, #06b6d4);
        }
    </style>
</head>

<body class="min-h-screen brand-gradient flex items-center justify-center p-6">

    <div class="bg-white w-full max-w-md rounded-2xl shadow-2xl p-8 relative">

        <!-- Logo / Brand -->
        <div class="text-center mb-6">
            <div class="w-16 h-16 mx-auto mb-3 bg-blue-600 text-white rounded-full flex items-center justify-center text-2xl font-bold shadow-lg">
                LMS
            </div>
            <h1 class="text-2xl font-bold text-gray-800">Login Course</h1>
            <p class="text-sm text-gray-500 mt-1">SMK TI BAZMA Learning Platform</p>
        </div>

        @if (session('status'))
            <div class="mb-4 text-green-600 text-sm text-center">
                {{ session('status') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="mb-4 text-red-600 text-sm">
                @foreach ($errors->all() as $error)
                    <p>• {{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 mb-1">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
            </div>

            <!-- Password -->
            <div class="mb-4 relative">
                <label class="block text-sm font-medium text-gray-600 mb-1">Password</label>
                <input id="password" type="password" name="password" required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition">

                <!-- Toggle Button -->
                <button type="button"
                    onclick="togglePassword()"
                    class="absolute right-3 top-9 text-gray-400 hover:text-gray-600 text-sm">
                    👁
                </button>
            </div>

            <!-- Remember + Forgot -->
            <div class="flex items-center justify-between text-sm mb-6">
                <label class="flex items-center gap-2 text-gray-600">
                    <input type="checkbox" name="remember" class="rounded">
                    Remember me
                </label>

                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}"
                       class="text-blue-600 hover:underline">
                        Lupa password?
                    </a>
                @endif
            </div>

            <!-- Button -->
            <button type="submit"
                class="w-full py-2.5 bg-blue-600 text-white rounded-lg font-semibold hover:bg-blue-700 transition duration-200 shadow-md">
                Login
            </button>
        </form>

        <!-- Footer -->
        <div class="mt-6 text-center text-xs text-gray-400">
            © {{ date('Y') }} SMK TI BAZMA. All rights reserved.
        </div>

    </div>

    <!-- Script -->
    <script>
        function togglePassword() {
            const password = document.getElementById("password");
            password.type = password.type === "password" ? "text" : "password";
        }
    </script>

</body>
</html>
