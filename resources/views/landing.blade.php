<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
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


{{-- ================= HERO ================= --}}
<main class="flex-grow flex flex-col justify-center items-center text-center px-6 pb-28">

    {{-- LOGO CENTRAL --}}
    <img
        src="{{ asset('images/orvix-logo2.png') }}"
        alt="ORVIX STUDIO"
        class="w-56 md:w-[1200px] mb-20 select-none"
    >

    {{-- <h2 class="text-4xl md:text-6xl font-bold tracking-wide mb-6">
        Hacemos crecer tu negocio
    </h2> --}}

    <p class="text-gray-100 max-w-5xl mb-24 text-xl md:text-5xl leading-relaxed">
        "Creamos soluciones digitales para negocios que quieran crecer."
    </p>

    <h2 class="text-4xl  text-yellow-300 md:text-5xl font-bold tracking-wide mb-10">
        ¿Quienes están detrás de Orvix Studio?
    </h2>

    <p class="text-gray-100 max-w-4xl mb-20 text-xl md:text-2xl leading-relaxed text-center md:text-center">
        ORVIX es un equipo que nace de la idea de transformar la manera en la que los negocios/ emprendimientos se posicionan digitalmente.
        Combinamos estrategia, tecnología y creatividad para desarrollar soluciones reales que faciliten el crecimiento de marcas, empresas y emprendimientos.
    </p>

    <div class="w-full max-w-7xl mb-20">
    <img
        src="{{ asset('images/equipo-orvix.png') }}"
        alt="Equipo Orvix"
        class="w-full rounded-2xl border border-yellow-300 object-cover">
    </div>

    <h2 class="text-4xl  text-yellow-300 md:text-5xl font-bold tracking-wide mb-10">
        ¿Qué ofrecemos?
    </h2>

    {{-- ================= SERVICIOS APaisados ================= --}}
<div class="w-full max-w-7xl flex flex-col gap-16 mb-28">

    {{-- ================= CARD 1 ================= --}}
    <div class="group flex flex-col lg:flex-row items-center
                bg-neutral-900 rounded-2xl overflow-hidden
                border border-yellow-300
                transition-all duration-300
                hover:scale-[1.02]
                hover:border-yellow-300
                hover:shadow-[0_0_35px_rgba(212,175,55,0.35)]">

        {{-- Imagen --}}
        <div class="lg:w-1/2">
            <img src="{{ asset('images/social-media.png') }}"
                 class="w-full h-full object-cover">
        </div>

        {{-- Texto --}}
        <div class="lg:w-1/2 p-10">
            <h3 class="text-3xl font-bold text-yellow-300 mb-6">
                Presencia y Estrategia Digital
            </h3>

            <p class="text-gray-300 text-lg leading-relaxed">
                Gestionamos tus redes sociales con una estrategia pensada para atraer
                clientes reales. Creamos contenido, analizamos resultados y posicionamos
                tu marca para que deje de improvisar y empiece a crecer con dirección.
            </p>
        </div>

    </div>



    {{-- ================= CARD 2 ================= --}}
    <div class="group flex flex-col lg:flex-row-reverse items-center
                bg-neutral-900 rounded-2xl overflow-hidden
                border border-yellow-300
                transition-all duration-300
                hover:scale-[1.02]
                hover:border-yellow-300
                hover:shadow-[0_0_35px_rgba(212,175,55,0.35)]">

        {{-- Imagen --}}
        <div class="lg:w-1/2">
            <img src="{{ asset('images/branding.png') }}"
                 class="w-full h-full object-cover">
        </div>

        {{-- Texto --}}
        <div class="lg:w-1/2 p-10">
            <h3 class="text-3xl font-bold text-yellow-300 mb-6">
                Branding e Imagen Profesional
            </h3>

            <p class="text-gray-300 text-lg leading-relaxed">
                Desarrollamos la identidad visual de tu negocio mediante fotografía
                profesional, edición y diseño estratégico. Una marca sólida genera
                confianza, transmite valor y te diferencia desde el primer vistazo.
            </p>
        </div>

    </div>



    {{-- ================= CARD 3 ================= --}}
    <div class="group flex flex-col lg:flex-row items-center
                bg-neutral-900 rounded-2xl overflow-hidden
                border border-yellow-300
                transition-all duration-300
                hover:scale-[1.02]
                hover:border-yellow-300
                hover:shadow-[0_0_35px_rgba(212,175,55,0.35)]">

        {{-- Imagen --}}
        <div class="lg:w-1/2">
            <img src="{{ asset('images/desarrollo-web.png') }}"
                 class="w-full h-full object-cover">
        </div>

        {{-- Texto --}}
        <div class="lg:w-1/2 p-10">
            <h3 class="text-3xl font-bold text-yellow-300 mb-6">
                Automatización y Desarrollo Web
            </h3>

            <p class="text-gray-300 text-lg leading-relaxed">
                Creamos páginas web, sistemas y automatizaciones que optimizan tu
                gestión diaria. Convertimos tu presencia digital en una herramienta
                que trabaja por vos y genera oportunidades constantemente.
            </p>
        </div>

    </div>

</div>

    <h2 class="text-4xl  text-yellow-300 md:text-5xl font-bold tracking-wide mb-10">
        ¡ Tenemos un paquete base para vos !
    </h2>

    <div class="w-full max-w-7xl flex flex-col gap-16 mb-24">

    {{-- ================= CARD 1 ================= --}}
    <div class="group flex flex-col lg:flex-row items-center
                bg-neutral-900 rounded-2xl overflow-hidden
                border border-yellow-300
                transition-all duration-300
                hover:scale-[1.02]
                hover:border-yellow-300
                hover:shadow-[0_0_35px_rgba(212,175,55,0.35)]">

        {{-- Imagen --}}
        <div class="lg:w-1/2">
            <img src="{{ asset('images/paquete-base.png') }}"
                 class="w-full h-full object-cover">
        </div>

        {{-- Texto --}}
        <div class="lg:w-1/2 p-10">
            <h3 class="text-3xl font-bold text-yellow-300 mb-6">
                Redes Sociales + Imagen Visual<br>$ 300.000
            </h3>

            <p class="text-gray-300 text-lg leading-relaxed">
                Este es el paquete inicial, un correcto manejo y difsión de redes sociales vinculados directamente al Whatsapp
                de contacto, sumado a una imagen visual profesional, es la combinación perfecta para empezar a crecer digitalmente.
                <br><br>
                Éste precio base varía en función a los distintos requerimentos que tenga un negocio en particular
                (producción de videos, cantidad de publicaciones, sistemas para gestión o agilización del emprendimiento, etc).
            </p>
        </div>

    </div>
</div>    

    <h2 class="text-4xl  text-yellow-300 md:text-5xl font-bold tracking-wide mb-10">
        ¡ Contactanos !
    </h2>

{{-- ================= FORMULARIO ================= --}}
<form id="leadForm" class="w-full max-w-6xl">

    @csrf

    <div class="w-full bg-neutral-900 p-6 rounded-2xl shadow-lg">

        <div class="flex flex-col lg:flex-row gap-4 w-full">

            <input name="nombre"
                placeholder="Nombre"
                required
                class="flex-1 bg-black border border-yellow-300 p-4 rounded-lg
                focus:outline-none focus:border-white transition">

            <input name="email"
                placeholder="Email"
                class="flex-1 bg-black border border-yellow-300 p-4 rounded-lg
                focus:outline-none focus:border-white transition">

            <input name="telefono"
                placeholder="WhatsApp"
                class="flex-1 bg-black border border-yellow-300 p-4 rounded-lg
                focus:outline-none focus:border-white transition">

            <select name="interes"
                class="flex-1 bg-black border border-yellow-300 p-4 rounded-lg
                focus:outline-none focus:border-white transition">
                <option>Publicidad</option>
                <option>Fotos y Videos</option>
                <option>Redes Sociales</option>
                <option>Página o Sistema Web</option>
                <option>Consultoría</option>
            </select>

            <button type="submit"
                id="btnEnviar"
                class="bg-yellow-300 text-black font-black py-4 px-10 rounded-full
                uppercase tracking-widest hover:scale-105 hover:bg-white
                transition-all shadow-[0_0_25px_rgba(212,175,55,0.3)]">

                Enviar
            </button>

        </div>

    </div>
</form>


{{-- MENSAJE --}}
<p id="mensajeEnviado"
   style="display:none"
   class="mt-6 text-yellow-300 text-lg md:text-xl flex items-center justify-center gap-2">

    <svg xmlns="http://www.w3.org/2000/svg"
         class="w-6 h-6 text-white"
         fill="none"
         viewBox="0 0 24 24"
         stroke="currentColor"
         stroke-width="3">
        <path stroke-linecap="round" stroke-linejoin="round"
              d="M5 13l4 4L19 7"/>
    </svg>

    Consulta enviada!
</p>

</main>


{{-- ================= FOOTER FIJO ================= --}}
<footer class="fixed bottom-0 left-0 w-full bg-black border-t border-yellow-300">

    <div class="max-w-7xl mx-auto px-6 py-4
                flex flex-col md:flex-row
                items-center justify-between gap-4">

        {{-- NOSOTROS --}}
        <a href="{{ route('nosotros') }}"
           class="text-sm tracking-widest hover:text-yellow-300 transition">
            NOSOTROS
        </a>

        <a class="text-sm justify-center  transition">
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



{{-- ================= SCRIPT ================= --}}
<script>
const form = document.getElementById('leadForm');
const mensaje = document.getElementById('mensajeEnviado');
const boton = document.getElementById('btnEnviar');

form.addEventListener('submit', async (e) => {

    e.preventDefault();

    boton.innerText = 'Enviando...';
    boton.disabled = true;

    const formData = new FormData(form);

    try {

        await fetch('/leads', {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN':
                    document.querySelector('input[name=_token]').value,
                'Accept': 'application/json'
            },
            body: formData
        });

        form.reset();
        mensaje.style.display = 'flex';

    } catch (error) {
        alert('Error al enviar');
    }

    boton.innerText = 'Enviar';
    boton.disabled = false;

});
</script>

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