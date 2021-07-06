@extends('default.page.app')
@section('content')
   <div class="relative -mt-32 flex flex-col justify-between h-screen  overflow-hidden">
      <div class="relative items-start grid grid-cols-3 justify-between ">
      </div>
      <div class="relative grid mt-48 grid-cols-1 gap-12 place-items-center text-center justify-center text-white z-30">
         <div class="relative text-center">
            <h3 class="text-xl mb-6 font-bold font-cinzel text-secondary">Epuerto Perú Travel & Tours</h3>
            <h1 class="md:text-5xl text-3xl font-bold tracking-widest text-gray-50">{{$paquete->titulo}}</h1>
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
      <div class="grid md:grid-cols-6 grid-cols-1 md:gap-16 p-10 text-gray-700">
         <div class="md:col-span-4 lg:ml-8 mt-10">
            <hr>
            <div class="grid lg:grid-cols-4 md:grid-cols-2 my-4 text-sm gap-2 flex justify-center">
               <div class="flex items-center gap-5">
                  <i data-feather="clock" class=" text-primary"></i>
                  <div class="grid grid-rows-2">
                     <span class="text-primary font-bold">Duración</span>
                     <span class="text-gray-400">{{$paquete->duracion}} Días</span>
                  </div>
               </div>
               <div class="flex items-center gap-5">
                  <i data-feather="map-pin" class=" text-primary"></i>
                  <div class="grid grid-rows-2">
                     <span class="text-primary font-bold">Ubicación</span>
                     <span class="text-gray-400">Cusco,Perú</span>
                  </div>
               </div>
               <div class="flex items-center gap-5">
                  <i data-feather="activity" class=" text-primary"></i>
                  <div class="grid grid-rows-2">
                     <span class="text-primary font-bold">Categorìa</span>
                     <span class="text-gray-400">Familiar</span>
                  </div>
               </div>
               <div class="flex items-center gap-5">
                     <i data-feather="dollar-sign" class=" text-primary"></i>
                     <div class="grid grid-rows-2">
                        <span class="text-primary font-bold">Precio</span>
                        <span class="text-gray-400">from {{$paquete->precio_paquetes->where('estrellas', 2)->first()->precio_s}} usd</span>
                     </div>
                  </div>
            </div>
            <hr>
            <div class="my-12 mt-16">
               <div class="flex gap-5">
                  <i data-feather="file-text" class=" text-amber-300"></i>
                  <h3 class="pb-7 text-primary text-lg font-semibold">Descripción</h3>
               </div>
               <div class="text-justify text-gray-500">{!!$paquete->descripcion!!}</div>
            </div>
            <div class="my-12">
               <div class="flex gap-5">
                  <i data-feather="send" class=" text-amber-300"></i>
                  <h3 class="pb-7 text-primary text-lg font-semibold">Itinerario</h3>
               </div>
               <div class="shadow text-gray-500">
                  @foreach ($itinerario as $item)
                     <div class="tab overflow-hidden border-t">
                        <input class="absolute opacity-0 " id="tab-multi-{{$loop->index}}" type="checkbox" name="tabs">
                        <label class="block p-5 cursor-pointer" for="tab-multi-{{$loop->index}}">Día {{$loop->index+1}}: {{$item->itinerarios->titulo}}</label>
                        <div class="tab-content overflow-hidden border-l-2 bg-gray-100 ">
                           <div class="text-gray-500 p-5">{!!$item->itinerarios->descripcion!!}</div>
                        </div>
                     </div>
                  @endforeach
               </div>
            </div>
            <div class="my-12">
               <div class="grid md:grid-cols-2 grid-cols-1 gap-10">
                  @if ($paquete->incluye !=null)
                  <div>
                     <div class="flex gap-5">
                        <i data-feather="user-check" class=" text-amber-300"></i>
                        <h3 class="pb-7 text-lg text-primary font-semibold">Incluye</h3>                                         
                     </div>
                     <ul class="list-inside list-disc ml-5 text-gray-500">
                        {!!$paquete->incluye!!}
                     </ul>
                  </div>
                  @endif
                  @if ($paquete->noincluye !=null)
                     <div>
                        <div class="flex gap-5">
                           <i data-feather="user-x" class=" text-amber-300"></i>
                           <h3 class="pb-7 text-lg text-primary font-semibold">No incluye</h3>
                        </div>
                        <ul class="list-inside list-disc ml-5 text-gray-500">
                           {!!$paquete->noincluye!!}
                        </ul>
                     </div>
                  @endif
               </div>
               @if ($paquete->opcional !=null)
               <div>
                  <div class="flex gap-5 my-6">
                     <i data-feather="user" class=" text-amber-300"></i>
                     <h3 class="pb-7 text-lg text-primary font-semibold">Que llevar</h3>                                         
                  </div>
                  <ul class="list-inside list-disc ml-5 text-gray-500">
                     {!!$paquete->opcional!!}
                  </ul>
               </div>
               @endif
            </div>
            <div class="my-12">
               <div class="flex gap-5">
                  <i data-feather="map-pin" class=" text-amber-300"></i>
                  <h3 class="pb-7 text-lg text-primary font-semibold">Ubicación geográfica</h3>                                         
               </div>
               <div class="flex justify-center">
                  <iframe class="shadow rounded w-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7766.948289097877!2d-72.26987952796162!3d-13.258283769771339!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x916dea6dde30c85f%3A0x6b45959fbd0c6f6a!2sOllantaytambo!5e0!3m2!1ses-419!2spe!4v1624983835113!5m2!1ses-419!2spe" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
               </div>
            </div>
            <div class="mt-12">
               <div class="flex gap-5">
                  <i data-feather="image" class=" text-amber-300"></i>
                  <h3 class="pb-7 text-lg text-primary font-semibold">Galería</h3>                                         
               </div>
               <div class="carousel relative shadow rounded">
                  <div class="carousel-inner relative overflow-hidden w-full">
                  <!--Slide 1-->
                     <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
                     <div class="carousel-item absolute opacity-0">
                        <img src="{{asset('images/tour/camino-inca-1.jpg')}}" class=" object-cover w-full">
                     </div>
                     <!--Slide 2-->
                     <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
                     <div class="carousel-item absolute opacity-0">
                           <img src="{{asset('images/tour/camino-inca-2.jpg')}}" class=" object-cover w-full">
                     </div>
                     <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
                     <div class="carousel-item absolute opacity-0">
                           <img src="{{asset('images/tour/camino-inca-3.jpg')}}" class=" object-cover w-full">
                     </div>
                     
                     <input class="carousel-open" type="radio" id="carousel-4" name="carousel" aria-hidden="true" hidden="">
                     <div class="carousel-item absolute opacity-0">
                           <img src="{{asset('images/tour/camino-inca-2.jpg')}}" class=" object-cover w-full">
                     </div>
                     <ol class="carousel-indicators">
                        <li class="inline-block mr-3">
                           <label for="carousel-1" class="carousel-bullet cursor-pointer block text-secondary text-7xl hover:text-primary">•</label>
                        </li>
                        <li class="inline-block mr-3">
                           <label for="carousel-2" class="carousel-bullet cursor-pointer block text-secondary text-7xl hover:text-primary">•</label>
                        </li>
                        <li class="inline-block mr-3">
                           <label for="carousel-3" class="carousel-bullet cursor-pointer block text-secondary text-7xl hover:text-primary">•</label>
                        </li>
                        <li class="inline-block mr-3">
                           <label for="carousel-4" class="carousel-bullet cursor-pointer block text-secondary text-7xl hover:text-primary">•</label>
                        </li>
                     </ol>              
                  </div>
               </div>
            </div>
         </div>
         <div class="md:col-span-2 lg:mr-8 mt-10">
            <div class="shadow-lg mt-10 lg:mt-0">
               <div class="bg-secondary text-center rounded-t">
                  <div class="p-5"><span class=" text-2xl font-bold text-white">Contactar</span></div>
               </div>
               <div class="text-sm px-5 py-5 rounded-b">
                  <div class="p-2">
                     <input type="text" name="name" placeholder="Nombre" required class="w-full p-2 focus:outline-none border border-gray-400 rounded hover:shadow">
                  </div>
                  <div class="p-2">
                     <input type="email" name="email" placeholder="Correo electrónico" required class="w-full p-2 focus:outline-none border border-gray-400 rounded hover:shadow">
                  </div>
                  <div class="p-2">
                     <input type="text" name="telefono" placeholder="Número de celular" required class="w-full p-2 focus:outline-none border border-gray-400 rounded hover:shadow">
                  </div>
                  <div class="p-2">
                     <textarea type="text" name="mensaje" placeholder="Mensaje" required class="w-full p-2 focus:outline-none border border-gray-400 rounded hover:shadow"></textarea>
                  </div>
                  <div class="p-2">
                     <button id="button" type="submit" class="w-full py-2 text-lg text-white transition-all duration-150 ease-linear bg-secondary tracking-wider hover:bg-secondary hover:bg-opacity-80 transition duration-500 rounded-full">
                        Enviar
                     </button>
                  </div>
               </div>
            </div>
            <div class="my-12">
               <span class="text-primary font-semibold">Tours recomendados</span>
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