@extends('default.page.app')
@section('content')
    <div class="relative -mt-32 flex flex-col justify-between h-screen  overflow-hidden">
        <div class="relative items-start grid grid-cols-3 justify-between ">

        </div>

        <div class="relative grid mt-48 grid-cols-1 gap-12 place-items-center text-center justify-center text-white z-30">
            <div class="relative text-center">
                <h1 class="text-xl mb-6 font-bold font-cinzel text-secondary">Epuerto Perú Travel & Tours</h1>
                <h3 class="md:text-5xl text-3xl font-semibold tracking-widest text-gray-50">EXPERIENCIAS Y CONEXIONES <br> ÚNICAS COMO NINGUNA OTRA.</h3>
                <h4 class="md:text-9xl text-5xl font-bold inset-0 text-white text-opacity-10 absolute top-0">EPUERTO</h4>
            </div>
        </div>
        <div class="relative z-30 p-5 flex justify-center">
            <a href="#" class="text-gray-50">
                <svg xmlns="http://www.w3.org/2000/svg" class="animate-bounce h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                </svg>
            </a>
        </div>
        <video autoplay loop muted class="absolute z-10 w-auto min-w-full min-h-full max-w-none">
                        <source src="https://assets.mixkit.co/videos/preview/mixkit-set-of-plateaus-seen-from-the-heights-in-a-sunset-26070-large.mp4" type="video/mp4" />Your browser does not support the video tag.
    {{--            <source src="{{asset('media/intro.mp4')}}" type="video/mp4" />Your browser does not support the video tag.--}}
        </video>
        {{--        <div class="vimeo-wrapper absolute z-10 w-auto min-w-full min-h-full max-w-none">--}}
        {{--            <iframe src="https://player.vimeo.com/video/361847703?background=1&autoplay=1&loop=1&title=0&byline=0&portrait=0&muted=1"--}}
        {{--                    frameborder="0"  class="absolute z-10 w-auto min-w-full min-h-full max-w-none"></iframe>--}}
        {{--        </div>--}}
        <div class="absolute z-10 w-auto min-w-full min-h-full bg-gray-900 max-w-none opacity-50">
        </div>
    </div>
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
                            <img src="{{asset('images/tour/camino-inca-1.jpg')}}" class="object-cover h-10 w-10 rounded-full transform hover:scale-150 transition duration-500">
                            <span class="lg:text-sm text-xs text-gray-500 hover:text-secondary">{{$paquete->titulo}}</span>
                        </div>
                    </a>
                    <hr class="mx-2">
                 @endforeach
            </div>
        </div>
    </div>
@endsection