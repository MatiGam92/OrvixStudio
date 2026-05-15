<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Orvix Studio</title>

        
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
                margin: 0;
                padding: 0;
            }
        </style>
    </head>
    <body class="bg-black text-[var(--gold)] antialiased h-full overflow-hidden">
        <!-- Usamos h-screen para que ocupe exactamente el alto de la ventana -->
        <div class="relative h-screen w-full flex flex-col items-center justify-center overflow-hidden">
            
            <!-- Botones de Login y Register -->
            @if (Route::has('login'))
                <nav class="absolute top-0 right-0 p-4 md:p-6 flex gap-4 z-10">
                    <a href="{{ route('login') }}" class="text-xs md:text-sm font-bold border border-[var(--gold)] px-4 py-2 rounded-md hover:bg-[var(--gold)] hover:text-black transition-all uppercase tracking-tight">
                        Log in
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="text-xs md:text-sm font-bold bg-[var(--gold)] text-black px-4 py-2 rounded-md hover:bg-white transition-all uppercase tracking-tight">
                            Register
                        </a>
                    @endif
                </nav>
            @endif

            <!-- Contenido Principal -->
            <main class="text-center px-6 flex flex-col items-center">
                <!-- Reduje el margen del header de mb-12 a mb-6 -->
                <header class="mb-6 md:mb-8">
                    <x-logo width="w-72 md:w-[420px]" />
                </header>

                <div class="max-w-xl mx-auto">
                   

                    <a href="{{ route('landing') }}" class="inline-block bg-[var(--gold)] text-black font-black py-3 px-8 md:py-4 md:px-10 rounded-full text-base md:text-lg uppercase tracking-widest hover:scale-105 hover:bg-white transition-all shadow-[0_0_25px_rgba(212,175,55,0.3)]">
                        Landing
                    </a>
                </div>
            </main>

        </div>
    </body>
</html>