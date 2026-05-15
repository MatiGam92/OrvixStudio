<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login — Orvix Studio</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=montserrat:400,700,900" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        :root {
            --gold: #D4AF37;
        }

        body {
            font-family: 'Montserrat', sans-serif !important;
        }
    </style>
</head>

<body class="bg-black text-[var(--gold)] antialiased h-screen overflow-hidden flex items-center justify-center px-6">

    {{-- BACK --}}
    <a href="{{ route('welcome') }}"
       class="absolute top-6 left-6 text-xs uppercase tracking-widest text-gray-500 hover:text-white transition">
        ← Back
    </a>

    <div class="w-full max-w-md">

        {{-- Logo (menos margen) --}}
        <div class="flex justify-center mb-6">
            <x-logo width="w-52 md:w-60" />
        </div>

        {{-- Card Login --}}
        <div class="border border-[var(--gold)] rounded-2xl p-6 md:p-7 bg-black/40 backdrop-blur-sm shadow-[0_0_25px_rgba(212,175,55,0.15)]">

            {{-- Session Status --}}
            @if (session('status'))
                <div class="mb-3 text-center text-sm text-white">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="space-y-4">
                @csrf

                {{-- Email --}}
                <div>
                    <label class="uppercase text-xs tracking-widest text-[var(--gold)]">
                        Email
                    </label>

                    <input
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        autofocus
                        autocomplete="username"
                        class="mt-1 w-full bg-black border border-[var(--gold)] text-white rounded-md px-4 py-2 focus:border-white focus:ring-white"
                    >

                    @error('email')
                        <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Password --}}
                <div>
                    <label class="uppercase text-xs tracking-widest text-[var(--gold)]">
                        Password
                    </label>

                    <input
                        type="password"
                        name="password"
                        required
                        autocomplete="current-password"
                        class="mt-1 w-full bg-black border border-[var(--gold)] text-white rounded-md px-4 py-2 focus:border-white focus:ring-white"
                    >

                    @error('password')
                        <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Remember + Forgot --}}
                <div class="flex items-center justify-between text-xs">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" name="remember"
                               class="rounded border-[var(--gold)] bg-black text-[var(--gold)] focus:ring-[var(--gold)]">
                        <span class="text-gray-400">Remember</span>
                    </label>

                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}"
                           class="text-gray-500 hover:text-white transition">
                            Forgot?
                        </a>
                    @endif
                </div>

                {{-- Button --}}
                <button
                    type="submit"
                    class="w-full bg-[var(--gold)] text-black font-black py-2.5 rounded-full uppercase tracking-widest hover:bg-white hover:scale-105 transition-all shadow-[0_0_20px_rgba(212,175,55,0.3)]">
                    Log in
                </button>

            </form>
        </div>

    </div>

</body>
</html>