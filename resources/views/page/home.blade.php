@extends('default.page.app')
@section('title')
    <title>Best Cusco tours and day trips - Epuerto Travel agency Perú</title>
@endsection
@section('content')
    <div class="relative -mt-32 flex flex-col justify-between h-screen  overflow-hidden">
        <div class="relative items-start grid grid-cols-3 justify-between ">

        </div>

        <div class="relative grid grid-cols-1 gap-12 place-items-center text-center justify-center text-white z-30">
            <div class="relative text-center">
                <img src="{{asset('images/logo-registrado.png')}}" alt="" class="w-32 mx-auto bg-gray-50 bg-opacity-60 p-3 rounded-lg">
                <h1 class="text-xl mb-6 font-bold font-cinzel mt-6 text-secondary">Epuerto Perú Travel & Tours</h1>
                <h3 class="md:text-5xl text-3xl font-semibold tracking-widest text-gray-50">EXPERIENCIAS Y CONEXIONES <br> ÚNICAS COMO NINGUNA OTRA.</h3>
                <h4 class="md:text-9xl text-5xl font-bold inset-0 flex items-center justify-center text-white text-opacity-10 absolute">EPUERTO</h4>
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
        <div class="absolute z-10 w-auto min-w-full min-h-full bg-gray-700 max-w-none opacity-50">

        </div>

    </div>

    <section class="grid lg:grid-cols-4 md:grid-cols-2 gap-6 md:px-24 px-10 relative z-50">
        <div class="text-center shadow-lg rounded-lg md:px-12 px-5 py-8 bg-white -mt-24">
            <svg  xmlns="http://www.w3.org/2000/svg" class="h-20 w-16 mx-auto text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
            <h3 class="font-semibold text-primary text-lg  mt-3 mb-4">Servicio Privado</h3>
            <p class="text-gray-500 mb-9 block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid expedita illo molestias reiciendis.</p>
            <div class="transform hover:-translate-y-3 transition duration-500 ease-in-out">
                <a href="" class="transform hover:-translate-y-3 transition duration-500 ease-in-out rounded-full py-4 px-9 bg-secondary text-white text-xs font-semibold">VER MÁS</a>
            </div>
        </div>
        <div class="text-center shadow-lg rounded-lg md:px-12 px-5 py-8 bg-white md:-mt-24">
            <svg  xmlns="http://www.w3.org/2000/svg" class="h-20 w-16 mx-auto text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
            </svg>
            <h3 class="font-semibold text-primary text-lg  mt-3 mb-4">Soporte 24/7</h3>
            <p class="text-gray-500 mb-9 block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid expedita illo molestias reiciendis.</p>
            <div class="transform hover:-translate-y-3 transition duration-500 ease-in-out">
                <a href="" class="transform hover:-translate-y-3 transition duration-500 ease-in-out rounded-full py-4 px-9 bg-secondary text-white text-xs font-semibold">VER MÁS</a>
            </div>
        </div>
        <div class="text-center shadow-lg rounded-lg md:px-12 px-5 py-8 bg-white lg:-mt-24">
            <svg  xmlns="http://www.w3.org/2000/svg" class="h-20 w-16 mx-auto text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <h3 class="font-semibold text-primary text-lg  mt-3 mb-4">Mejores Precios</h3>
            <p class="text-gray-500 mb-9 block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid expedita illo molestias reiciendis.</p>
            <div class="transform hover:-translate-y-3 transition duration-500 ease-in-out">
                <a href="" class="transform hover:-translate-y-3 transition duration-500 ease-in-out rounded-full py-4 px-9 bg-secondary text-white text-xs font-semibold">VER MÁS</a>
            </div>
        </div>
        <div class="text-center shadow-lg rounded-lg md:px-12 px-5 py-8 bg-primary lg:-mt-24">
            <h3 class="font-semibold text-gray-50 text-lg  mt-3 mb-4">Reservar Ahora</h3>
            <p class="text-gray-500 mb-9 block text-gray-200">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid expedita illo molestias reiciendis.</p>
            <p class="text-white text-xs tracking-tight mb-12">LLAME AHORA</p>
            <div class="transform hover:-translate-y-3 transition duration-500 ease-in-out">
                <a href="https://api.whatsapp.com/send?phone=51984645720" target="_blank" class="transform hover:-translate-y-3 transition duration-500 ease-in-out rounded-full py-4 px-6 bg-secondary text-white text-xs font-semibold">+51 984 645 720</a>
            </div>
        </div>
    </section>

    <section class="md:px-24 px-10 my-24 lg:justify-between lg:flex">
        <div class="relative">
            <h2 class="md:text-5xl text-3xl font-semibold z-30 text-primary relative">Travel Packages</h2>
            <h4 class="md:text-8xl text-5xl font-bold inset-0 text-gray-100 text-opacity-90 absolute z-10 -top-10">TOURS</h4>
        </div>
        <div class="block pt-6 text-right">
            <div class="transform hover:-translate-y-3 transition duration-500 ease-in-out">
                <a href="/en-tours" class="transform hover:-translate-y-3 transition duration-500 ease-in-out rounded-full py-4 px-9 bg-secondary text-white font-semibold">DESCRUBRE MÁS</a>
            </div>
        </div>
    </section>

    <section class="md:px-24 px-10 grid grid-cols-1 lg:grid-cols-3 gap-6">
        @foreach ($paquetes as $paquete)
            <div class="group shadow-lg rounded-xl overflow-hidden">
                <div class="overflow-hidden relative">
                    <img src="{{asset($paquete->imagen)}}"  class="rounded-t-xl object-cover transition duration-500 ease-in-out transform group-hover:-translate-x-0 group-hover:scale-105"/>
                </div>
                <div class="p-9 block">
                    <h2 class="text-xl font-bold">{{$paquete->titulo}} <span class="text-secondary"><span class="text-xs align-top">Desde</span>{{$paquete->precio_paquetes->where('estrellas', 2)->first()->precio_s}}<span class="text-xs">usd</span></span></h2>
                    <div class="text-sm mb-7 text-gray-500 mt-3">{!!Str::limit($paquete->descripcion, 100,$end='...')!!}</div>

                    <div class="transform hover:-translate-y-3 transition duration-500 ease-in-out">
                        <a href="/en-tours/{{$paquete->url}}" class="transform hover:-translate-y-3 transition duration-500 ease-in-out rounded-full py-4 px-9 bg-secondary text-xs text-white font-semibold">VER DETALLES</a>
                    </div>
                </div>
            </div>
        @endforeach
    </section>

    <section class="flex flex-col lg:flex-row lg:mt-32 mt-10 mb-24 items-center">
        <div class="lg:px-24 lg:py-32 p-16 bg-primary text-gray-50 shadow-xl lg:w-3/4 xl:w-3/4 2xl:w-1/2">
            <div class="relative">
                <h4 class="lg:text-4xl md:text-5xl text-3xl text-white font-medium relative z-30 text-secondary">Tómese un descanso y vea</h4>
                <h3 class="md:pl-10 md:text-5xl text-3xl my-3 font-bold text-gray-50 relative z-30">Nuestros ultimas noticias</h3>
                <h4 class="lg:text-7xl md:text-8xl text-5xl font-bold inset-0 text-gray-100 text-opacity-20 absolute z-10 -top-5">EPUERTO</h4>
            </div>
            <div class="transform hover:-translate-y-3 transition duration-500 ease-in-out mt-5">
                <a href="/noticias" class="transform hover:-translate-y-3 transition duration-500 ease-in-out rounded-full py-4 px-9 bg-secondary text-xs text-white font-semibold">VER NOTICIAS</a>
            </div>
            <div class="grid lg:grid-cols-3 grid-cols-1 gap-5 mt-10 mr-12 text-center cursor-pointer">
                <div class="bg-white rounded-lg shadow transform hover:scale-105 transition duration-500">
                    <a href="/hoteles#hotel" class="flex flex-col justify-center items-center gap-4  p-5">
                        <img src="{{asset('/images/iconos/hotel.png')}}" class="h-16 w-16 hover:opacity-60">
                        <span class="text-secondary text-sm font-semibold hover:text-primary">Ver Hoteles</span>
                    </a>
                </div>
                <div class="bg-white rounded-lg shadow transform hover:scale-105 transition duration-500">
                    <a href="/f-a-q#restaurantes" class="flex flex-col justify-center items-center gap-4  p-5">
                        <img src="{{asset('/images/iconos/res.png')}}" class="h-16 w-16  hover:opacity-60">
                        <span class="text-secondary text-sm font-semibold hover:text-primary">Ver restaurantes</span>
                    </a>
                </div>
                <div class="bg-white rounded-lg shadow transform hover:scale-105 transition duration-500">
                    <a href="/f-a-q#consejos" class="flex flex-col justify-center items-center gap-4  p-5">
                        <img src="{{asset('/images/iconos/tourist.png')}}" class="h-16 w-16  hover:opacity-60">
                        <span class="text-secondary text-sm font-semibold hover:text-primary">Ver consejos de viaje</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="-ml-24 lg:-mt-auto">
            <img src="{{asset('images/hotels/2star.jpg')}}" alt="" class="object-cover">
        </div>
    </section>

    <section class="md:px-24 px-10 my-24 lg:justify-between lg:flex">
        <div class="relative">
            <h2 class="md:text-5xl text-3xl font-semibold z-30 text-primary relative">Destinos Populares</h2>
            <h4 class="md:text-8xl text-5xl font-bold inset-0 text-gray-100 text-opacity-90 absolute z-10 -top-10">EPUERTO</h4>
        </div>
        <div class="block pt-6 text-right">
            <div class="transform hover:-translate-y-3 transition duration-500 ease-in-out">
                <a href="/informacion-de-viaje" class="transform hover:-translate-y-3 transition duration-500 ease-in-out rounded-full py-4 px-9 bg-secondary text-white font-semibold">DESCRUBRE MÁS</a>
            </div>
        </div>
    </section>

    <section class="md:px-24 px-10 grid grid-cols-1 lg:grid-cols-3 gap-6 mb-10">
        @foreach ($destinos as $destino)
            <div class="group shadow-lg rounded-xl overflow-hidden">
                <div class="overflow-hidden relative">
                    <img src="{{asset($destino->imagen)}}" class="rounded-t-xl object-cover transition duration-500 ease-in-out transform group-hover:-translate-x-0 group-hover:scale-105"/>
                </div>
                <div class="md:p-9 p-5 block">
                    <h2 class="text-xl font-bold text-primary">{{$destino->nombre}}</h2>
                    <div class="text-sm mb-7 text-gray-500 mt-3">{!!Str::limit($destino->resumen, 100,$end='...')!!}</div>

                    <div class="transform hover:-translate-y-3 transition duration-500 ease-in-out">
                        <a href="/informacion-de-viaje#{{$destino->nombre}}" class="transform hover:-translate-y-3 transition duration-500 ease-in-out rounded-full py-4 px-9 bg-secondary text-xs text-white font-semibold">VER DETALLES</a>
                    </div>
                </div>
            </div>
        @endforeach
    </section>


@endsection
