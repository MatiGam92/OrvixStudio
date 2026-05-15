<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Leads | ORVIX STUDIO</title>

    @vite('resources/css/app.css')

    <style>
        :root {
            --gold:#D4AF37;
        }
    </style>
</head>

<body class="bg-black text-white min-h-screen">

{{-- ================= NAVBAR ================= --}}
<header class="w-full px-8 py-4 flex justify-between items-center border-b border-[var(--gold)]">

    <div class="flex items-center gap-6">
        <x-logo2 width="w-28 md:w-[200px]" />
    </div>

    {{-- Derecha --}}
    <div class="flex items-center gap-5">

        <a href="{{ route('landing') }}"
           class="text-sm tracking-widest hover:text-yellow-300 transition">
            LANDING
        </a>
        
        <a href="{{ route('nosotros') }}"
           class="text-sm tracking-widest hover:text-yellow-300 transition">
            NOSOTROS
        </a>

        
        {{-- WhatsApp --}}
        <a href="https://wa.me/5493704244835"
           target="_blank"
           class="hover:scale-110 transition">

            <svg xmlns="http://www.w3.org/2000/svg"
                class="w-6 h-6"
                fill="currentColor"
                viewBox="0 0 24 24">
                <path d="M20.52 3.48A11.8 11.8 0 0012.05 0C5.4 0 .02 5.37.02 12c0 2.11.55 4.18 1.6 6L0 24l6.2-1.62a11.94 11.94 0 005.85 1.49h.01c6.63 0 12.02-5.37 12.02-12 0-3.21-1.25-6.22-3.56-8.39zM12.06 21.8a9.75 9.75 0 01-4.97-1.37l-.35-.21-3.68.96.98-3.59-.23-.37a9.72 9.72 0 01-1.5-5.22c0-5.38 4.37-9.76 9.75-9.76a9.7 9.7 0 016.9 2.86 9.69 9.69 0 012.85 6.9c0 5.38-4.37 9.8-9.75 9.8zm5.35-7.33c-.29-.15-1.72-.85-1.99-.94-.27-.1-.46-.15-.66.15-.19.29-.75.94-.92 1.13-.17.19-.34.22-.63.07-.29-.15-1.24-.46-2.36-1.48-.87-.77-1.46-1.72-1.63-2.01-.17-.29-.02-.45.13-.6.13-.13.29-.34.44-.51.15-.17.19-.29.29-.48.1-.19.05-.36-.02-.51-.07-.15-.66-1.59-.91-2.18-.24-.58-.49-.5-.66-.51h-.56c-.19 0-.5.07-.76.36-.26.29-1 1-1 2.43s1.03 2.81 1.17 3.01c.15.19 2.03 3.1 4.92 4.34.69.3 1.23.48 1.65.62.69.22 1.32.19 1.81.12.55-.08 1.72-.7 1.96-1.38.24-.68.24-1.26.17-1.38-.07-.12-.26-.19-.55-.34z"/>
            </svg>

        </a>

        {{-- Instagram --}}
        <a href="https://instagram.com/orvix.studio3"
           target="_blank"
           class="hover:scale-110 transition">

            <svg xmlns="http://www.w3.org/2000/svg"
                class="w-6 h-6"
                fill="currentColor"
                viewBox="0 0 24 24">
                <path d="M7.75 2h8.5A5.75 5.75 0 0122 7.75v8.5A5.75 5.75 0 0116.25 22h-8.5A5.75 5.75 0 012 16.25v-8.5A5.75 5.75 0 017.75 2zm4.25 5.5a4.75 4.75 0 100 9.5 4.75 4.75 0 000-9.5zm0 7.75a3 3 0 110-6 3 3 0 010 6zm4.88-8.88a1.13 1.13 0 110-2.25 1.13 1.13 0 010 2.25z"/>
            </svg>

        </a>

        {{-- LOGOUT --}}
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit"
                class="text-sm uppercase tracking-widest
                       bg-[var(--gold)] text-black
                       px-4 py-2 rounded-md
                       hover:bg-red-700 transition">
                Logout
            </button>
        </form>

    </div>

</header>


{{-- ================= CONTENIDO ================= --}}
<section class="max-w-7xl mx-auto px-6 py-10">

    <h1 class="text-3xl font-black mb-8 text-[var(--gold)] tracking-widest">
        Leads recibidos
    </h1>

    <div class="overflow-x-auto rounded-2xl border border-neutral-800">

        <table class="w-full text-left">

            <thead class="bg-neutral-900 text-[var(--gold)] uppercase text-sm tracking-widest">
            <tr>
                <th class="p-4">Nombre</th>
                <th class="p-4">Email</th>
                <th class="p-4">WhatsApp</th>
                <th class="p-4">Interés</th>
                <th class="p-4">Fecha</th>
                <th class="p-4">Estado</th>
                <th class="p-4 text-center">Acciones</th>
            </tr>
            </thead>

            <tbody>

                @foreach($leads as $lead)
                <tr class="border-t border-neutral-800 hover:bg-neutral-900 transition">

                    <td class="p-4 font-semibold">
                        {{ $lead->nombre }}
                    </td>

                    <td class="p-4 text-gray-300">
                        {{ $lead->email }}
                    </td>

                    <td class="p-4">
                        <a href="https://wa.me/{{ $lead->telefono }}"
                            target="_blank"
                            class="text-[var(--gold)] hover:underline">
                            {{ $lead->telefono }}
                        </a>
                    </td>

                    <td class="p-4">
                        {{ $lead->interes }}
                    </td>

                    {{-- FECHA Y HORA --}}
                    <td class="p-4 text-gray-400 text-sm whitespace-nowrap">
                        {{ $lead->created_at->format('d/m/Y') }}
                        <br>
                        <span class="text-xs text-gray-500">
                            {{ $lead->created_at->format('H:i') }}
                        </span>
                    </td>

                    {{-- ESTADO + DELETE --}}
                    <td class="p-4 flex items-center gap-3">

                    {{-- SELECTOR ESTADO --}}
                    <select
                        class="estadoSelect bg-black border border-[var(--gold)]
                            rounded-lg px-3 py-2"
                        data-id="{{ $lead->id }}">

                        <option value="Nuevo"
                            {{ $lead->estado=='Nuevo' ? 'selected' : '' }}>
                            Nuevo
                        </option>

                        <option value="Atendido"
                            {{ $lead->estado=='Atendido' ? 'selected' : '' }}>
                            Atendido
                        </option>

                    </select>

                    </td>

                    {{-- BOTON ELIMINAR --}}
                    <td class="p-4 text-center">

                        <form method="POST"
                            action="{{ route('admin.leads.destroy',$lead->id) }}"
                            onsubmit="return confirm('¿Eliminar este lead?')">

                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                class="transition hover:scale-110 text-white hover:text-red-600">

                            {{-- SVG Trash --}}
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-5 h-5"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                viewBox="0 0 24 24">

                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6 7h12M9 7V4h6v3m-7 4v6m4-6v6m4-10v12a2 2 0 01-2 2H8a2 2 0 01-2-2V7h12z" />

                            </svg>

                            </button>

                        </form>

                    </td>

                </tr>
                @endforeach

            </tbody>
        </table>

    </div>

</section>


{{-- ================= AJAX UPDATE ================= --}}
<script>

document.querySelectorAll('.estadoSelect')
.forEach(select => {

    select.addEventListener('change', async function(){

        const leadId = this.dataset.id;
        const estado = this.value;

        await fetch(`/admin/leads/${leadId}/estado`,{
            method:'PATCH',
            headers:{
                'Content-Type':'application/json',
                'X-CSRF-TOKEN':'{{ csrf_token() }}'
            },
            body:JSON.stringify({estado})
        });

    });

});
</script>

</body>
</html>