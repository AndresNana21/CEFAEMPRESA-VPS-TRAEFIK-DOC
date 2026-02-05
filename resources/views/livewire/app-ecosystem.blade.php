<section id="ecosistema" class="py-24 bg-slate-50/50">
    <div class="max-w-7xl mx-auto px-6">
        <div class="mb-16">
            <h2 class="text-orange-600 font-bold uppercase tracking-[0.3em] text-[10px] mb-2">Estructura Empresarial
            </h2>
            <h3 class="text-4xl font-black text-slate-900">Módulos de Gestión</h3>
        </div>

        <div class="bg-white rounded-[3rem] p-8 md:p-12 shadow-sm border border-slate-100">
            {{-- Encabezado del Módulo --}}
            <div class="flex flex-col md:flex-row md:items-center justify-between mb-10 gap-4">
                <div class="flex items-center space-x-4">
                    <div class="p-3 bg-orange-600 rounded-2xl text-white shadow-lg shadow-orange-200">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-2xl font-black text-slate-900">Módulo Administrativo</h4>
                        <p class="text-sm text-slate-400 font-medium">Gestión legal, financiera y de talento.</p>
                    </div>
                </div>
                <span
                    class="text-[10px] font-black bg-slate-100 text-slate-500 px-4 py-1.5 rounded-full uppercase tracking-widest">
                    {{ $count }} Aplicaciones activas
                </span>
            </div>

            {{-- Grid de Aplicaciones --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($apps as $app)
                <a href="{{ $app->url }}" target="_blank"
                    class="group p-8 rounded-[2.5rem] bg-slate-50 border border-transparent hover:bg-white hover:border-orange-200 hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 flex flex-col items-center text-center">

                    {{-- Contenedor del Icono Gigante --}}
                    <div
                        class="w-24 h-24 mb-6 rounded-3xl bg-white flex items-center justify-center shadow-sm group-hover:shadow-orange-100 transition-all duration-500">
                        <div class="text-orange-600 filament-icon-container">
                            @if(str_contains($app->icon, 'heroicon'))
                            {{-- Forzamos el renderizado del componente de Filament --}}
                            <x-filament::icon :icon="$app->icon" class="w-12 h-12" />
                            @else
                            <i class="{{ $app->icon }} text-5xl"></i>
                            @endif
                        </div>
                    </div>

                    <h5 class="font-bold text-slate-900 text-base mb-2 group-hover:text-orange-600 transition-colors">
                        {{ $app->name }}
                    </h5>
                    <p class="text-[12px] text-slate-500 leading-relaxed px-2">
                        {{ $app->description }}
                    </p>
                </a>
                @endforeach

                {{-- Botón Placeholder --}}
                <div
                    class="p-8 rounded-[2.5rem] border-2 border-dashed border-slate-100 flex flex-col items-center justify-center opacity-30 hover:opacity-100 transition-all cursor-pointer group">
                    <div
                        class="w-12 h-12 rounded-full border-2 border-dashed border-slate-300 flex items-center justify-center mb-2 group-hover:border-orange-400">
                        <span class="text-2xl text-slate-400 group-hover:text-orange-500">+</span>
                    </div>
                    <span class="text-xs font-bold text-slate-400 uppercase tracking-widest">Nueva App</span>
                </div>
            </div>
        </div>
    </div>


    <style>
        /* TRUCO MAESTRO PARA FILAMENT ICONS:
       Filament a veces inyecta clases que limitan el tamaño del SVG.
       Esto asegura que el icono ocupe el espacio que queremos. */
        .filament-icon-container svg {
            width: 3rem !important;
            /* Equivale a w-12 */
            height: 3rem !important;
            /* Equivale h-12 */
            stroke-width: 1.8px;
        }

        /* Animación suave para los iconos al hacer hover en la tarjeta */
        .group:hover .filament-icon-container {
            transform: scale(1.1);
            transition: transform 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
    </style>
</section>
