<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>ORVIX STUDIO — Nosotros</title>
    @vite('resources/css/app.css')
    <style>
        h2 { font-family: 'Raleway', sans-serif; font-weight: 500; }
        h3 { font-family: 'Raleway', sans-serif; font-weight: 500; }
        p  { font-family: 'Raleway', sans-serif; font-weight: 200; }
        
    </style>
</head>

<body class="bg-black text-white font-sans flex flex-col min-h-screen">

    {{-- FONDO TRAMADO --}}
<canvas id="bgCanvas" class="fixed inset-0 w-full h-full pointer-events-none" style="z-index:0"></canvas>

<main class="flex-grow flex flex-col px-6 pb-28 pt-16 max-w-7xl mx-auto w-full">

    {{-- ================= HEADER "EL EQUIPO" ================= --}}
<div class="flex flex-col items-center justify-center mb-20 gap-6">

    <p class="text-5xl md:text-4xl text-white tracking-wide mb-">
        Somos el equipo
    </p>

    <img
        src="{{ asset('images/orvix-logo2.png') }}"
        alt="ORVIX STUDIO"
        class="w-132 md:w-[1256px] select-none mb-10"
    >

</div>

    {{-- ================= CARDS INTEGRANTES ================= --}}
    <div class="w-full flex flex-col gap-16 mb-24">

        {{-- ================= INTEGRANTE 1 ================= --}}
        <div class="group flex flex-col lg:flex-row items-center
                    bg-neutral-900 rounded-2xl overflow-hidden
                    border border-yellow-300
                    transition-all duration-300
                    hover:scale-[1.02]
                    hover:shadow-[0_0_35px_rgba(212,175,55,0.35)]">

            {{-- Foto --}}
            <div class="lg:w-1/2">
                <img src="{{ asset('images/integrante-1.png') }}"
                     alt="Integrante 1"
                     class="w-full h-full object-cover">
            </div>

            {{-- Info --}}
            <div class="lg:w-1/2 p-10">
                <h3 class="text-3xl text-yellow-300 mb-2">
                    Nombre Apellido
                </h3>
                <p class="text-yellow-300/60 text-sm tracking-widest uppercase mb-6">
                    Rol / Especialidad
                </p>
                <p class="text-gray-300 text-lg leading-relaxed">
                    Breve descripción del integrante: su background, qué aporta al equipo
                    y cuál es su enfoque dentro de Orvix Studio. Puede incluir experiencia,
                    pasión o visión sobre el trabajo digital.
                </p>
            </div>

        </div>

        {{-- ================= INTEGRANTE 2 ================= --}}
        <div class="group flex flex-col lg:flex-row-reverse items-center
                    bg-neutral-900 rounded-2xl overflow-hidden
                    border border-yellow-300
                    transition-all duration-300
                    hover:scale-[1.02]
                    hover:shadow-[0_0_35px_rgba(212,175,55,0.35)]">

            {{-- Foto --}}
            <div class="lg:w-1/2">
                <img src="{{ asset('images/integrante-2.png') }}"
                     alt="Integrante 2"
                     class="w-full h-full object-cover">
            </div>

            {{-- Info --}}
            <div class="lg:w-1/2 p-10">
                <h3 class="text-3xl text-yellow-300 mb-2">
                    Nombre Apellido
                </h3>
                <p class="text-yellow-300/60 text-sm tracking-widest uppercase mb-6">
                    Rol / Especialidad
                </p>
                <p class="text-gray-300 text-lg leading-relaxed">
                    Breve descripción del integrante: su background, qué aporta al equipo
                    y cuál es su enfoque dentro de Orvix Studio. Puede incluir experiencia,
                    pasión o visión sobre el trabajo digital.
                </p>
            </div>

        </div>

        {{-- ================= INTEGRANTE 3 ================= --}}
        <div class="group flex flex-col lg:flex-row items-center
                    bg-neutral-900 rounded-2xl overflow-hidden
                    border border-yellow-300
                    transition-all duration-300
                    hover:scale-[1.02]
                    hover:shadow-[0_0_35px_rgba(212,175,55,0.35)]">

            {{-- Foto --}}
            <div class="lg:w-1/2">
                <img src="{{ asset('images/integrante-3.png') }}"
                     alt="Integrante 3"
                     class="w-full h-full object-cover">
            </div>

            {{-- Info --}}
            <div class="lg:w-1/2 p-10">
                <h3 class="text-3xl text-yellow-300 mb-2">
                    Nombre Apellido
                </h3>
                <p class="text-yellow-300/60 text-sm tracking-widest uppercase mb-6">
                    Rol / Especialidad
                </p>
                <p class="text-gray-300 text-lg leading-relaxed">
                    Breve descripción del integrante: su background, qué aporta al equipo
                    y cuál es su enfoque dentro de Orvix Studio. Puede incluir experiencia,
                    pasión o visión sobre el trabajo digital.
                </p>
            </div>

        </div>

    </div>

</main>


{{-- ================= FOOTER FIJO ================= --}}
<footer class="fixed bottom-0 left-0 w-full bg-black border-t border-yellow-300">

    <div class="max-w-7xl mx-auto px-6 py-4
                flex flex-col md:flex-row
                items-center justify-between gap-4">

        {{-- VOLVER AL INICIO --}}
        <a href="{{ route('landing') }}"
           class="text-sm tracking-widest hover:text-yellow-300 transition">
            INICIO  
        </a>

        <a class="text-sm justify-center transition">
            ORVIX STUDIO - Formosa, Argentina.
        </a>

        {{-- REDES --}}
        <div class="flex items-center gap-6">

            {{-- WhatsApp --}}
            <a href="https://wa.me/5493704244835"
               target="_blank"
               class="hover:text-yellow-300 transition">
                <svg xmlns="http://www.w3.org/2000/svg"
                     class="w-7 h-7"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor"
                     stroke-width="1.8">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M20 12a8 8 0 10-3 6.3L20 20l-1.7-3A7.96 7.96 0 0020 12z"/>
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M9.5 8.5c.4-.4 1-.3 1.3.2l.5.8c.2.4.2.9-.2 1.2l-.4.4a9 9 0 004 4l.4-.4c.3-.3.8-.4 1.2-.2l.8.5c.5.3.6.9.2 1.3-.6.7-1.7 1-2.6.7A10.5 10.5 0 017.3 9.8c-.3-.9 0-2 .7-2.6z"/>
                </svg>
            </a>

            {{-- Instagram --}}
            <a href="https://instagram.com/orvix.studio3"
               target="_blank"
               class="hover:text-yellow-300 transition">
                <svg xmlns="http://www.w3.org/2000/svg"
                     class="w-7 h-7"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor"
                     stroke-width="1.8">
                    <rect x="3" y="3" width="18" height="18" rx="5"/>
                    <circle cx="12" cy="12" r="4"/>
                    <circle cx="17.5" cy="6.5" r="1"/>
                </svg>
            </a>

        </div>

    </div>

</footer>

<script>
const canvas = document.getElementById('bgCanvas');
const ctx = canvas.getContext('2d');

function resize() {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
}
resize();
window.addEventListener('resize', resize);

function drawStar(x, y, size, opacity) {
    ctx.save();
    ctx.translate(x, y);
    ctx.globalAlpha = opacity;

    // Destello largo horizontal y vertical
    const gradient1 = ctx.createLinearGradient(-size * 3, 0, size * 3, 0);
    gradient1.addColorStop(0, 'transparent');
    gradient1.addColorStop(0.5, `rgba(255, 220, 80, 1)`);
    gradient1.addColorStop(1, 'transparent');

    const gradient2 = ctx.createLinearGradient(0, -size * 3, 0, size * 3);
    gradient2.addColorStop(0, 'transparent');
    gradient2.addColorStop(0.5, `rgba(255, 220, 80, 1)`);
    gradient2.addColorStop(1, 'transparent');

    // Destello diagonal
    const gradient3 = ctx.createLinearGradient(-size * 2, -size * 2, size * 2, size * 2);
    gradient3.addColorStop(0, 'transparent');
    gradient3.addColorStop(0.5, `rgba(255, 220, 80, 0.4)`);
    gradient3.addColorStop(1, 'transparent');

    const gradient4 = ctx.createLinearGradient(size * 2, -size * 2, -size * 2, size * 2);
    gradient4.addColorStop(0, 'transparent');
    gradient4.addColorStop(0.5, `rgba(255, 220, 80, 0.4)`);
    gradient4.addColorStop(1, 'transparent');

    // Núcleo brillante
    const core = ctx.createRadialGradient(0, 0, 0, 0, 0, size * 1.2);
    core.addColorStop(0, 'rgba(255, 255, 220, 1)');
    core.addColorStop(0.3, 'rgba(255, 220, 80, 0.8)');
    core.addColorStop(1, 'transparent');

    // Dibujar brazos
    ctx.lineWidth = size * 0.4;
    ctx.strokeStyle = gradient1;
    ctx.beginPath(); ctx.moveTo(-size * 3, 0); ctx.lineTo(size * 3, 0); ctx.stroke();

    ctx.strokeStyle = gradient2;
    ctx.beginPath(); ctx.moveTo(0, -size * 3); ctx.lineTo(0, size * 3); ctx.stroke();

    ctx.lineWidth = size * 0.2;
    ctx.strokeStyle = gradient3;
    ctx.beginPath(); ctx.moveTo(-size * 2, -size * 2); ctx.lineTo(size * 2, size * 2); ctx.stroke();

    ctx.strokeStyle = gradient4;
    ctx.beginPath(); ctx.moveTo(size * 2, -size * 2); ctx.lineTo(-size * 2, size * 2); ctx.stroke();

    // Núcleo
    ctx.fillStyle = core;
    ctx.beginPath(); ctx.arc(0, 0, size * 1.2, 0, Math.PI * 2); ctx.fill();

    ctx.restore();
}

// Generar destellos con distintos tamaños y opacidades
const stars = Array.from({ length: 28 }, () => ({
    x: Math.random() * canvas.width,
    y: Math.random() * canvas.height,
    size: Math.random() * 3 + 1,
    opacity: Math.random() * 0.5 + 0.15,
    speed: Math.random() * 0.008 + 0.003,
    phase: Math.random() * Math.PI * 2,
}));

function animate(t) {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    stars.forEach(s => {
        const pulse = s.opacity * (0.6 + 0.4 * Math.sin(t * s.speed + s.phase));
        drawStar(s.x, s.y, s.size, pulse);
    });
    requestAnimationFrame(animate);
}

requestAnimationFrame(animate);
</script>

</body>
</html>