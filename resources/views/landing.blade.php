<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>ORVIX STUDIO</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-black text-white font-sans flex flex-col min-h-screen">


{{-- ================= HERO ================= --}}
<main class="flex-grow flex flex-col justify-center items-center text-center px-6 pb-28">

    {{-- LOGO CENTRAL --}}
    <img
        src="{{ asset('images/orvix-logo.png') }}"
        alt="ORVIX STUDIO"
        class="w-56 md:w-[420px] mb-10 select-none"
    >

    {{-- <h2 class="text-4xl md:text-6xl font-bold tracking-wide mb-6">
        Hacemos crecer tu negocio
    </h2> --}}

    <p class="text-gray-100 max-w-xl mb-20 text-xl md:text-4xl leading-relaxed">
        "Creamos soluciones digitales para negocios que quieran crecer."
    </p>

    <h2 class="text-4xl  text-yellow-300 md:text-5xl font-bold tracking-wide mb-20">
        ¿Quienes están detrás de Orvix Studio?
    </h2>

    <p class="text-gray-100 max-w-4xl mb-20 text-xl md:text-2xl leading-relaxed text-center md:text-left">
        ORVIX es un equipo que nace de la idea de transformar la manera en la que los negocios/ emprendimientos se posicionan digitalmente.
        Combinamos estrategia, tecnología y creatividad para desarrollar soluciones reales que faciliten el crecimiento de marcas, empresas y emprendimientos.
    </p>

    <h2 class="text-4xl  text-yellow-300 md:text-5xl font-bold tracking-wide mb-20">
        ¿Qué ofrecemos?
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
                <option>Capacitación</option>
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

</body>
</html>