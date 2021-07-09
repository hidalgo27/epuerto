@extends('default.page.app')
@section('title')
    <title>Contacto best cusco day trips</title>
@endsection
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
        <div class="col-span-3">
            <section class="lg:mb-20 lg:mt-24 md:my-16 my-10 lg:justify-between lg:flex">
                <div class="relative">
                    <h2 class="md:text-5xl text-3xl font-semibold z-30 text-primary relative">Comunícate con nosotros</h2>
                    <h4 class="md:text-8xl text-5xl font-bold inset-0 text-gray-100 text-opacity-90 absolute z-10 md:-top-10 -top-2">EPUERTO</h4>
                </div>
                <div class="block pt-6 text-right lg:mr-10">
                    <div class="transform hover:-translate-y-3 transition duration-500 ease-in-out">
                        <a href="/contacto#contacto" class="transform hover:-translate-y-3 transition duration-500 ease-in-out rounded-full py-4 px-9 bg-secondary text-white font-semibold">CONTACTAR</a>
                    </div>
                </div>
            </section>
            <section class="lg:mx-10">
                <div class="grid lg:grid-cols-3 grid-cols-1 gap-5">
                    <div class="flex lg:gap-3 gap-7 items-center shadow-xl rounded-b-xl p-3 cursor-default border-t-2 border-amber-300 transform hover:scale-105 transition duration-500">
                        <img src="{{asset('images/iconos/cel.png')}}" class="h-16 w-16">
                        <div class="flex flex-col gap-1 text-gray-700">
                            <span class="hover:text-secondary">+51 84 228824</span>
                            <span class="hover:text-secondary">+51 984 645720</span>
                        </div>
                    </div>
                    <div class="flex lg:gap-3 gap-7 items-center shadow-xl rounded-b-xl p-3 cursor-default border-t-2 border-amber-300 transform hover:scale-105 transition duration-500">
                        <img src="{{asset('images/iconos/email.png')}}" class="h-16 w-16">
                        <div class="flex flex-col gap-1 text-gray-700">
                            <span class="hover:text-secondary break-all">percy@epuerto.com</span>
                            <span class="hover:text-secondary break-all">sales2@epuerto.com</span>
                        </div>
                    </div>
                    <div class="flex lg:gap-3 gap-7 items-center shadow-xl rounded-b-xl p-3 cursor-default border-t-2 border-amber-300 transform hover:scale-105 transition duration-500">
                        <img src="{{asset('images/iconos/ubi.png')}}" class="h-16 w-16">
                        <div class="flex flex-col gap-1 text-gray-700">
                            <span class="hover:text-secondary">Jr. Cusco L-10 Dpto. 602 Wanchaq – Cusco – Peru</span>
                        </div>
                    </div>
                </div>
            </section>
            <section class="mt-16 lg:mx-10 pb-10">
                <span class="text-primary text-lg font-semibold">Ubicación</span>
                <div class="flex items-center mt-5">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d969.779223323068!2d-71.96447287085557!3d-13.528417195510997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x916dd5243b2d8e03%3A0x8c51cb07f5d7305a!2sEpuerto%20Per%C3%BA%20travel%20%26%20tours!5e0!3m2!1ses-419!2spe!4v1625240010780!5m2!1ses-419!2spe" height="350" style="border:0;" allowfullscreen="" loading="lazy" class="w-full rounded"></iframe>
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