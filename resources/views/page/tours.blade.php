@extends('default.page.app')
@section('title')
    <title>Best Cusco tours best cusco day trips</title>
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
<div class="lg:mx-20 md:mx-10 mx-5">
   <section class="lg:mb-20 lg:mt-24 md:my-16 my-10 lg:justify-between lg:flex">
      <div class="relative">
            <h2 class="md:text-5xl text-3xl font-semibold z-30 text-primary relative">Paquetes de Tour</h2>
            <h4 class="md:text-8xl text-5xl font-bold inset-0 text-gray-100 text-opacity-90 absolute z-10 md:-top-10 -top-2">EPUERTO</h4>
      </div>
      <div class="block pt-6 text-right lg:mr-10">
            <div class="transform hover:-translate-y-3 transition duration-500 ease-in-out">
               <a href="/en-tours#contacto" class="transform hover:-translate-y-3 transition duration-500 ease-in-out rounded-full py-4 px-9 bg-secondary text-white font-semibold">CONTACTAR</a>
            </div>
      </div>
   </section>
   <section class="md:px-5 px-2">
      @foreach ($paquetes as $paquete)
         <div class="mb-16">
            <a href="/en-tours/{{$paquete->url}}" class="lg:hidden"><h3 class="text-2xl font-semibold text-primary pb-3 hover:text-secondary hover:font-light">Cusco Magico 4 Días 3 Noches</h3></a>
            <div class="grid lg:grid-cols-2 grid-cols-1 gap-8 items-center">
               <div class="relative">
                  <a href="/en-tours/{{$paquete->url}}"><img src="{{asset($paquete->imagen)}}" class="object-cover shadow-lg rounded transform hover:scale-105 transition duration-500"></a>
                  <div class=" absolute p-2 bottom-0 left-0 bg-gray-800 bg-opacity-60 text-secondary border-t border-r border-amber-300">
                     <div class="cursor-pointer transform hover:scale-125 transition duration-500 font-black">{{$paquete->duracion}} días</div>
                  </div>
               </div>
               <div class="pr-5 py-2 border-r border-b border-secondary border-opacity-30 pb-5">
                  <a href="/en-tours/{{$paquete->url}}" class="hidden lg:block"><h3 class="text-2xl font-semibold text-primary pb-3 hover:text-secondary hover:font-light">{{$paquete->titulo}}</h3></a>
                  <div class="text-sm text-justify text-gray-600">{!!$paquete->descripcion!!}</div>
                  <div class="mt-3"><a href="/en-tours/{{$paquete->url}}" class="text-sm bg-secondary bg-opacity-80 rounded p-2 text-white hover:text-primary hover:opacity-70">Ver detalles</a></div>
               </div>
            </div>
         </div>
      @endforeach
      <div class="mb-10">
         {{ $paquetes->links() }}
      </div>
   </section>
</div>
@endsection