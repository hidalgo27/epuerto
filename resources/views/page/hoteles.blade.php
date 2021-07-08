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
    <div id="hotel" class="md:col-span-3">
        <section class="lg:mb-20 lg:mt-24 md:my-16 my-10 lg:justify-between lg:flex">
            <div class="relative">
                <h2 class="md:text-5xl text-3xl font-semibold z-30 text-primary relative">Hoteles en Cusco</h2>
                <h4 class="md:text-8xl text-5xl font-bold inset-0 text-gray-100 text-opacity-90 absolute z-10 md:-top-10 -top-2">EPUERTO</h4>
            </div>
            <div class="block pt-6 text-right lg:mr-10">
                <div class="transform hover:-translate-y-3 transition duration-500 ease-in-out">
                    <a href="/hoteles#contacto" class="transform hover:-translate-y-3 transition duration-500 ease-in-out rounded-full py-4 px-9 bg-secondary text-white font-semibold">CONTACTAR</a>
                </div>
            </div>
        </section>
        <section>
            @foreach ($hoteles as $hotel)
                <div class="md:block hidden mb-20 cursor-pointer lg:mx-10 lg:w-3/4 11/12">
                    <div class="card bg-gray-900 relative">
                        <div class="image overflow-hidden">
                            <img src="{{asset($hotel->imagen)}}" class="transition duration-500 ease-out"/>
                            <div class="box">
                                <div class="absolute top-0 left-0">
                                    <h3 class="text-white font-black text-3xl bg-primary bg-opacity-30 p-3 tracking-wide rounded-br">{{$hotel->nombre}}</h3>
                                </div>
                                <div class="absolute bottom-0 right-0 p-3 bg-primary bg-opacity-40 rounded-tl">
                                    <div class="flex text-white items-center gap-2">
                                        <span>Categoria: {{$hotel->estrellas}}</span>
                                        <i data-feather="star" class="text-secondary fill-current"></i>
                                    </div>                    
                                </div>
                                <div class=" absolute top-0 right-0 bg-secondary p-2 text-white">
                                    <i data-feather="plus"></i>
                                </div>
                            </div>
                        </div>
                        <div class="details absolute top-0 left-0 lg:w-11/12 w-full duration-500 ease-out bg-gray-400 origin-left h-full">
                            <div class="lg:m-10 m-2">
                                <h3 class="text-primary text-xl">{{$hotel->nombre}}</h3>
                                <div class="border border-solid border-blue-900 border-opacity-10 my-2"></div>
                                <div class="lg:text-base text-sm text-gray-700">{!!$hotel->descripcion!!}</div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-3 my-5 md:hidden">
                    <h3 class="text-primary text-lg font-semibold">{{$hotel->nombre}}</h3>
                    <div class="relative">
                        <img src="{{asset('/images/hotels/1228333.jpg')}}" class="w-full object-center rounded shadow"/>
                        <div class="absolute bottom-0 right-0 p-1 bg-primary bg-opacity-40 rounded-tl">
                            <div class="flex text-sm text-white items-center gap-0">
                                <span>Categoria: {{$hotel->estrellas}}</span>
                                <i data-feather="star" class="text-secondary fill-current"></i>
                            </div>                    
                        </div>
                    </div>
                    <div class="text-xs text-gray-700 text-justify">{!!$hotel->descripcion!!}</div>
                </div>
            @endforeach
            
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