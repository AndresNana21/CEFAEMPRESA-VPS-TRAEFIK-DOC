<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>CEFAEMPRESA | Simulación Empresarial Agroindustrial SENA</title>
    <meta name="title" content="CEFAEMPRESA | Simulación Empresarial Agroindustrial SENA">
    <meta name="description"
        content="Estrategia de formación integral del SENA. Simulación de una empresa real para la gestión agrícola, contable, legal y ambiental de aprendices en Colombia.">
    <meta name="keywords"
        content="SENA, CEFAEMPRESA, gestión agrícola, formación profesional, simulación empresarial, agricultura Colombia, SICEFA, contabilidad agrícola">
    <meta name="author" content="SENA - Centro para la Formación Cafetera">
    <meta name="robots" content="index, follow">

    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="CEFAEMPRESA - Innovación en Formación Agroindustrial">
    <meta property="og:description"
        content="Simulación de entornos reales de administración y producción agrícola para aprendices SENA.">
    <meta property="og:image" content="{{ asset('img/logo-cefaempresa.png') }}">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="CEFAEMPRESA - SENA Colombia">
    <meta property="twitter:description"
        content="Entorno de aprendizaje basado en la administración real de recursos agrícolas y legales.">
    <meta property="twitter:image" content="{{ asset('img/logo-cefaempresa.png') }}">

    <link rel="icon" type="image/png" href="{{ asset('img/logo-cefaempresa.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('img/logo-cefaempresa.png') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    @vite(['resources/css/tailwindcss/app.css'])

    <link rel="canonical" href="{{ url()->current() }}">
</head>

<body class="bg-slate-50 text-slate-900 selection:bg-orange-100 selection:text-orange-600">

    <section class="relative min-h-screen flex flex-col bg-white">
        <nav class="fixed top-0 w-full z-50 glass-nav border-b border-orange-100/50">
            <div class="max-w-7xl mx-auto px-6">
                <div class="flex justify-between h-20 items-center">
                    <div class="flex items-center group cursor-default">
                        <div class="bg-white p-1 rounded-xl shadow-sm group-hover:shadow-orange-200 transition-all">
                            <img class="h-12 w-auto" src="{{ asset('img/logo-cefaempresa.png') }}"
                                alt="Logo CEFAEMPRESA">
                        </div>
                        <span class="ml-4 font-black text-2xl tracking-tighter text-principal">CEFAEMPRESA</span>
                    </div>
                    <div class="hidden md:flex items-center space-x-10">
                        <a href="#proposito"
                            class="text-xs font-bold uppercase tracking-widest text-slate-500 hover:text-principal transition">Propósito</a>
                        <a href="#rendimiento"
                            class="text-xs font-bold uppercase tracking-widest text-slate-500 hover:text-principal transition">Rendimiento</a>
                        <a href="#escalabilidad"
                            class="text-xs font-bold uppercase tracking-widest text-slate-500 hover:text-principal transition">Escalabilidad</a>
                        <a href="#"
                            class="bg-principal text-white px-8 py-2.5 rounded-full text-xs font-bold hover:bg-principal-claro transition-all shadow-lg shadow-orange-200">ACCESO
                            PORTAL</a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="relative flex-1 flex items-center justify-center">
            <div
                class="absolute top-1/4 left-1/4 w-64 h-64 bg-orange-100 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse">
            </div>
            <div
                class="absolute bottom-1/4 right-1/4 w-64 h-64 bg-green-100 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse">
            </div>

            <div class="relative z-10 text-center px-6">
                <div
                    class="inline-flex items-center space-x-2 bg-orange-50 px-4 py-2 rounded-full mb-8 border border-orange-100">
                    <span class="flex h-2 w-2 rounded-full bg-orange-600"></span>
                    <span class="text-[10px] font-black uppercase tracking-[0.3em] text-orange-700">Innovación SENA
                        Colombia</span>
                </div>
                <h1 class="text-6xl md:text-9xl font-black text-slate-900 leading-[0.8] mb-8">
                    CEFA<span class="text-principal">EMPRESA</span>
                </h1>
                <p class="text-slate-500 text-lg md:text-2xl font-light max-w-2xl mx-auto leading-relaxed">
                    Transformando la gestión agroindustrial con <span class="text-slate-900 font-medium">precisión
                        técnica</span> y compromiso ambiental.
                </p>
                <div class="mt-12">
                    <a href="#proposito"
                        class="animate-bounce inline-block p-4 rounded-full border border-slate-200 text-slate-400 hover:text-principal hover:border-principal transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>



    <!-- APPS --->
    <livewire:app-ecosystem />


    <section id="proposito" class="py-32 bg-slate-900 text-white overflow-hidden relative">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
                <div>
                    <h2 class="text-orange-500 font-bold uppercase tracking-widest text-sm mb-4">Nuestro Horizonte</h2>
                    <h3 class="text-4xl md:text-5xl font-black leading-tight mb-8">Formar para producir, <br>producir
                        para <span class="italic font-light">trascender</span>.</h3>
                    <p class="text-slate-400 text-lg leading-relaxed mb-8">
                        Como brazo agroindustrial del <strong>SENA</strong>, nuestro propósito va más allá del
                        rendimiento económico. Buscamos integrar a nuevos miembros de la sociedad en un ecosistema donde
                        la técnica agropecuaria convive con el respeto profundo por el medio ambiente.
                    </p>
                    <div class="grid grid-cols-2 gap-8">
                        <div>
                            <p class="text-3xl font-black text-white">100%</p>
                            <p class="text-xs uppercase tracking-wider text-slate-500 mt-2 font-bold">Compromiso SENA
                            </p>
                        </div>
                        <div>
                            <p class="text-3xl font-black text-white">CO₂</p>
                            <p class="text-xs uppercase tracking-wider text-slate-500 mt-2 font-bold">Neutralidad
                                Agrícola</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white/5 p-12 rounded-4xl border border-white/10 backdrop-blur-sm">
                    <blockquote class="text-2xl font-light italic text-slate-200">
                        "En CEFAEMPRESA, cada semilla plantada es un futuro profesional formado para los retos de la
                        seguridad alimentaria global."
                    </blockquote>
                    <div class="mt-8 flex items-center space-x-4">
                        <div class="h-px w-12 bg-orange-500"></div>
                        <p class="text-sm font-bold uppercase tracking-widest text-orange-500">Gestión de Talento Humano
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="rendimiento" class="py-32 bg-white">
        <div class="max-w-7xl mx-auto px-6 text-center mb-24">
            <h2 class="text-4xl md:text-5xl font-black text-slate-900 mb-6">Ingeniería del Campo</h2>
            <p class="text-slate-500 max-w-3xl mx-auto text-lg leading-relaxed">
                Nuestra arquitectura operativa está diseñada para ser eficiente, permitiendo que cada proceso sea
                medible y escalable.
            </p>
        </div>

        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-12">
            <div class="group">
                <div
                    class="h-16 w-16 bg-orange-50 text-principal flex items-center justify-center rounded-2xl mb-8 group-hover:bg-principal group-hover:text-white transition-all">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-4">Máximo Rendimiento</h3>
                <p class="text-slate-500 leading-relaxed italic">
                    Optimizamos el uso de recursos hídricos y fertilizantes orgánicos para obtener cosechas de alta
                    calidad con el menor impacto posible.
                </p>
            </div>

            <div id="escalabilidad" class="group">
                <div
                    class="h-16 w-16 bg-orange-50 text-principal flex items-center justify-center rounded-2xl mb-8 group-hover:bg-principal group-hover:text-white transition-all">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4">
                        </path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-4">Escalabilidad Social</h3>
                <p class="text-slate-500 leading-relaxed italic">
                    Un modelo diseñado para replicarse. Integramos nuevos aprendices SENA cada trimestre, expandiendo
                    nuestra capacidad de impacto en la región.
                </p>
            </div>

            <div class="group">
                <div
                    class="h-16 w-16 bg-orange-50 text-principal flex items-center justify-center rounded-2xl mb-8 group-hover:bg-principal group-hover:text-white transition-all">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                        </path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-4">Conciencia Global</h3>
                <p class="text-slate-500 leading-relaxed italic">
                    Nuestras prácticas de cuidado ambiental aseguran que el suelo se regenere, garantizando la
                    producción agrícola para las próximas generaciones.
                </p>
            </div>
        </div>
    </section>

    <footer class="bg-slate-50 py-20 border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center">
            <div class="flex items-center mb-8 md:mb-0">
                <img class="h-8 w-auto grayscale opacity-50" src="{{ asset('img/logo-cefaempresa.png') }}" alt="Logo">
                <p class="ml-4 text-xs font-bold text-slate-400 uppercase tracking-[0.2em]">SENA - Centro para la
                    formación cafetera</p>
            </div>
            <div class="text-slate-400 text-[10px] font-bold uppercase tracking-widest">
                © 2026 CEFAEMPRESA | Gestión de Proyectos
            </div>
        </div>
    </footer>

</body>

</html>
