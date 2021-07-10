@extends('default.page.app')
@section('title')
    <title>Nosotros best cusco day trips</title>
@endsection
@section('title_header')
    <h1 class="text-xl mb-6 font-bold font-cinzel text-secondary">Epuerto Perú Travel & Tours</h1>
    <h3 class="md:text-5xl text-3xl font-semibold tracking-widest text-gray-50">Bienvenidos</h3>
    <h4 class="md:text-8xl text-5xl font-bold inset-0 text-white text-opacity-10 absolute top-0">Bienvenidos</h4>
@endsection
@section('content')

    <div class="grid md:grid-cols-4 grid-cols-1 lg:mx-10 mx-5 gap-10">
        <div class="md:col-span-3">
            <section class="lg:mb-20 lg:mt-24 md:my-16 my-10 lg:justify-between lg:flex">
                <div class="relative">
                    <h2 class="md:text-5xl text-3xl font-semibold z-30 text-primary relative">Bienvenidos</h2>
                    <h4 class="md:text-8xl text-5xl font-bold inset-0 text-gray-100 text-opacity-90 absolute z-10 md:-top-10 -top-2">EPUERTO</h4>
                </div>
                <div class="block pt-6 text-right lg:mr-10">
                    <div class="transform hover:-translate-y-3 transition duration-500 ease-in-out">
                        <a href="/nosotros#contacto" class="transform hover:-translate-y-3 transition duration-500 ease-in-out rounded-full py-4 px-9 bg-secondary text-white font-semibold">CONTACTAR</a>
                    </div>
                </div>
            </section>
            <section class="px-5">
                <div class="relative">
                    <div class="text-gray-500">
                        <p>Somos una agencia de viajes basada en los fundamentos básicos de integridad, servicio al cliente, tecnología, calidad y precios. <span class="text-primary">Nuestras unidades de negocio consiste en la planificación de vacaciones destino Perú</span>, te invitamos a que te tomes un clic-tour en nuestro sitio web y conocer nuestros servicios.</p>
                    </div>
                    <div class="text-gray-500 py-5">
                        <p>Este sitio está destinado a la información sobre nuestra organización y un medio para comunicarse con todos aquellos que planean visitar el Perú y los que buscan hacer negocios con epuerto. Vamos a seguir actualizando nuestro sitio con la información y las medidas adoptadas sobre la base de fundamentos de nuestra esencia y cómo vamos a seguir teniendo una organización basada en la integridad, proporcionar un servicio superior al cliente, con productos de calidad a través de los usos efectivos de la tecnología, mientras que la toma de decisiones a la ayuda social y el medio ambiente</p>
                    </div>
                    <div class="text-gray-500">
                        <p>Estamos continuamente actualizando nuestro portal y te animamos a reservar todas sus necesidades de viaje, boletos de avión, hotel o vacaciones todo incluido resort. Nuestro sitio lo tiene todo y precios altamente competitivos. Si usted necesita ayuda con sus planes de viaje por favor póngase en contacto con nuestros asesores de viajes profesionales para crear un itinerario para usted. Nos especializamos en todos los destinos del Perú.<span class="text-primary">¡Llámenos! Todo lo que tienes que hacer es comenzar a empacar!</span></p>
                    </div>
                    <img src="{{asset('images/iconos/calidad.png')}}" class="opacity-10 absolute top-10 right-10 h-64 w-64">
                </div>
                <div class="pt-12 pb-16">
                    <span class="text-primary font-semibold text-xl">Acerca del Administrador de Epuerto Perú <span class="text-gray-700">(Percy Chacón Guerra)</span></span>
                    <div class="grid lg:grid-cols-3 grid-cols-1 pt-5 gap-5 ">
                        <div class="flex justify-center"><img src="{{asset('images/percy.jpg')}}" class="h-full object-cover rounded-lg shadow-lg"></div>
                        <div class="lg:col-span-2 text-gray-500 pt-5 border-r border-b border-secondary border-opacity-30 px-5">
                            <p class="pb-5">Percy es un consultor de viajes, con más de 20 años de experiencia en la industria de viajes. Después de graduarse con un título de Hostelería y Turismo de la Escuela de Turismo en el Perú (CENFOTUR), Percy ha trabajado con una serie de empresas y firmas de diseño, en la planificación y operación de circuitos turísticos e itinerarios.</p>
                            <p class="pb-5">Percy ha llevado también excursiones y trabajó como tour leader para los clientes individuales y grupos, y está muy familiarizado con el trabajo que hay que hacer en el campo.</p>
                            <p class="pb-5">Epuerto Perú, su nuevo proyecto, es una experiencia que combina el conocimiento de la vida y de trabajo en el campo durante años, su amor por los viajes y su formación profesional, con el objetivo de crear la magia en cada experiencia.</p>
                            <p class="pb-5">Percy vive con su familia en el Cusco.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="lg:my-16 md:my-16 my-5">
            <div class="md:mt-5 lg:ml-2">
                <span class="text-primary font-semibold lg:text-lg text-base mb-2">Tours recomendados</span>
                @foreach ($paquetes as $paquete)
                    <a href="/en-tours/{{$paquete->url}}">
                        <div class="flex flex-cols-2 px-2 py-5 lg:gap-5 gap-2 items-center">
                            <img src="{{asset($paquete->imagen)}}" class="object-cover h-10 w-10 rounded-full transform hover:scale-150 transition duration-500">
                            <div class="lg:text-sm text-xs text-gray-500 hover:text-secondary transform hover:-translate-x-2 transition duration-500 ease-in-out">{{$paquete->titulo}}</div>
                        </div>
                    </a>
                    <hr class="mx-2">
                 @endforeach
            </div>
        </div>
    </div>
@endsection
