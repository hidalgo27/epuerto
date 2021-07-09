<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('title')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins.css') }}" rel="stylesheet">
{{--    <link rel="stylesheet" href="https://unpkg.com/element-plus/lib/theme-chalk/index.css">--}}
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('favicon/site.webmanifest')}}">
    <link rel="mask-icon" href="{{asset('favicon/safari-pinned-tab.svg')}}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <style>
        .banner-wrapper {
            z-index: 99;
            transition: all 300ms ease-in-out;
            width: 100%;
        }
        .banner {
            width: 100%;

            text-transform: uppercase;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            /*background: rgba(162, 197, 35, 1);*/
            transition: all 300ms ease-in-out;
        }
        .animateIn{
            transform: translateY(0px);
        }

        .animateOut{
            transform: translateY(-100%);
        }
    </style>
</head>
<body>
<div id="app">
{{--    <div class="fixed z-40 p-8">--}}
{{--        <button onclick="openModal(true)" class="rounded text-gray-50 focus:outline-none">--}}
{{--            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16" />--}}
{{--            </svg>--}}
{{--        </button>--}}
{{--    </div>--}}

    <div class="fixed bottom-0 right-0 z-40 p-2">
        <a href="https://api.whatsapp.com/send?phone=51984645720" target="_blank">
            <img src="{{asset('images/whatsapp-i.png')}}" alt="" class="w-20 animate-bounce">
        </a>
    </div>

    <header>
        <div class="relative shadow h-20 bg-primary dark:bg-gray-800 flex flex-wrap z-30">
            <div class="pt-1 mx-auto">
                <a href="http://en.epuertotravelperu.com"><img src="{{asset('images/iconos/reino-unido.png')}}" alt="" class="w-9"></a>
            </div>
        </div>
    </header>

    <nav class="banner-wrapper sticky -mt-9 lg:px-24 px-4 top-0 z-50">
        <div class="banner">
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow dark:bg-gray-800">
                <nav class="dark:bg-gray-800">
                    <div class="container lg:px-6 px-3 py-6 mx-auto md:flex md:justify-between md:items-center">
                        <div class="flex items-center justify-between">
                            <div>
                                <a class="text-2xl font-bold text-gray-800 dark:text-white lg:text-3xl hover:text-gray-700 dark:hover:text-gray-300" href="/">
                                    <img src="{{asset('images/logo-epuerto.png')}}" alt="" class="w-40">
                                </a>
                            </div>

                            <!-- Mobile menu button -->
                            <div class="flex md:hidden">
                                <button id="clos"type="button" class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400" aria-label="toggle menu">
                                    <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                                        <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
                        <div class="items-center md:flex toggle hidden">
                            <div class="flex flex-col md:flex-row lg:mx-6 md::gap-0 gap-2">
                                <a class="my-1 text-sm font-medium text-gray-700 dark:text-gray-200 hover:text-secondary dark:hover:text-indigo-400 md:mx-4 md:my-0 transform hover:-translate-x-2 transition duration-500 ease-in-out"  href="/nosotros">Nosotros</a>
                                <a class="my-1 text-sm font-medium text-gray-700 dark:text-gray-200 hover:text-secondary dark:hover:text-indigo-400 md:mx-4 md:my-0 transform hover:-translate-x-2 transition duration-500 ease-in-out" href="/en-tours">Best Cusco Tours</a>
                                <a class="my-1 text-sm font-medium text-gray-700 dark:text-gray-200 hover:text-secondary dark:hover:text-indigo-400 md:mx-4 md:my-0 transform hover:-translate-x-2 transition duration-500 ease-in-out" href="/informacion-de-viaje">Información</a>
                                <a class="my-1 text-sm font-medium text-gray-700 dark:text-gray-200 hover:text-secondary dark:hover:text-indigo-400 md:mx-4 md:my-0 transform hover:-translate-x-2 transition duration-500 ease-in-out" href="/hoteles">Hoteles</a>
                                <a class="my-1 text-sm font-medium text-gray-700 dark:text-gray-200 hover:text-secondary dark:hover:text-indigo-400 md:mx-4 md:my-0 transform hover:-translate-x-2 transition duration-500 ease-in-out" href="/f-a-q">FAQs</a>
                                <a class="my-1 text-sm font-medium text-gray-700 dark:text-gray-200 hover:text-secondary dark:hover:text-indigo-400 md:mx-4 md:my-0 transform hover:-translate-x-2 transition duration-500 ease-in-out" href="/contacto">Contacto</a>
                            </div>

                        </div>
                    </div>
                </nav>
            </div>

        </div>
    </nav>

    @yield('content')

    <section id="contacto">
        <div style="background-image: url('{{asset('images/machu-picchu.jpg')}}');" class="bg-fixed bg-center lg:bg-left bg-right px-2 py-10">
            @if (session('status'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Gracias por contactar con nosotros</strong><br>
                <span class="block sm:inline">Su mensaje fue enviado satisfactoriamente.</span>
            </div>
            @endif
            <div class="lg:w-2/5 md:w-3/5 md:p-10 p-5 bg-gray-50 rounded md:ml-20 mt-4">
                <h2 class="text-3xl mb-6 font-black text-primary">Formulario de Contacto</h2>
                <form method="POST" action="{{route('contact_form')}}">
                @csrf
                <div class="mb-4">
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 placeholder-primary placeholder-opacity-70 leading-tight focus:outline-none focus:shadow-outline" name="tNombre" type="text" placeholder="Nombre" required>
                </div>
                <div class="mb-4">
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 placeholder-primary placeholder-opacity-70 leading-tight focus:outline-none focus:shadow-outline" name="tEmail" type="text" placeholder="Correo electrónico" required>
                </div>
                <div class="mb-4">
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 placeholder-primary placeholder-opacity-70 leading-tight focus:outline-none focus:shadow-outline" name="tCelular" type="text" placeholder="Número de celular">
                </div>
                <div class="mb-4">
                    <textarea class="shadow form-textarea mt-1 block w-full border rounded w-full py-2 px-3 placeholder-primary placeholder-opacity-70 leading-tight focus:outline-none focus:shadow-outline" name="tMensaje" placeholder="Mensaje" required></textarea>
                </div>
                <div class="flex items-center justify-center">
                    <button class="bg-secondary hover:bg-opacity-70 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                        Enviar
                    </button>
                </div>
                </form>
            </div>
        </div>
    </section>
    <footer class="relative bg-primary pt-6">
        <div class="bg-footer-texture bg-repeat-x bg-12 top-0 w-full z-30 p-12">
            <div class="grid md:grid-cols-3 grid-cols-1 gap-8">
                <div class="text-white">
                    <div class="font-semibold uppercase text-sm">
                        <span>Epuerto</span><span class="text-secondary"> Perú</span>
                    </div>
                    <p class="p-5 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas molestiae provident illo, eveniet qui deleniti.<p>
                    <span class="font-semibold text-sm">Visita Nuestras redes sociales</span>
                    <div class="flex flex-row pt-5 px-3 gap-3">
                        <a href="https://www.facebook.com/EpuertoTravelPeru" target="_blank"><img src="{{asset('images/iconos/facebook.png')}}" class="h-10 w-10 transform hover:scale-125 transition duration-500 "></a>
                        <a href="https://www.youtube.com/user/EpuertoPeruTravelPer" target="_blank"><img src="{{asset('images/iconos/youtube.png')}}" class="h-10 w-10 transform hover:scale-125 transition duration-500"></a>
                        <div class=" bg-green-500 rounded-full h-10 w-10 flex items-center justify-center transform hover:scale-125 transition duration-500">
                            <a href="https://www.tripadvisor.com.pe/Attraction_Review-g294314-d3836582-Reviews-Epuerto_Peru_Travel_Tours-Cusco_Cusco_Region.html" target="_blank"><img src="{{asset('images/iconos/tripadvisor.png')}}" class="h-8 w-8 "></a>
                        </div>
                    </div>
                </div>
                <div class="text-white">
                    <span class="font-semibold uppercase text-sm">Contacto</span>
                    <div class="flex items-center my-3 gap-x-3 text-sm">
                        <i data-feather="phone" class="ml-6 text-secondary"></i>
                        <div class="grid grid-rows-2">
                            <span>+51 84 228824</span>
                            <span>+51 984 645720</span>
                        </div>
                    </div>
                    <div class="flex items-center gap-x-3 text-sm">
                        <i data-feather="mail" class="ml-6 my-auto text-secondary"></i>
                        <div class="grid grid-rows-2">
                            <span>percy@epuerto.com</span>
                            <span>sales2@epuerto.com</span>
                        </div>
                    </div>
                    <div class="flex items-center my-3 gap-x-3 text-sm">
                        <i data-feather="map-pin" class="ml-6 text-secondary"></i>
                        <span>Jr. Cusco L-10 Dpto. 602 Wanchaq – Cusco – Peru</span>
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <a href="https://www.iglta.org/" target="_blank"><img src="{{asset('images/iglta.jpg')}}" class="w-48"></a>
                    <a href="https://www.gob.pe/promperu" target="_blank"><img src="{{asset('images/logo_promperu.jpg')}}" class="w-48 h-24 object-cover object-center"></a>
                </div>
            </div>
        </div>
        <hr class="mx-16">
        <div class="container mx-auto text-center text-xs text-gray-50 py-3">
            Copyright Nebula 2021 All Rights Reserved
        </div>
    </footer>
</div>
<script src="{{asset('js/app.js')}}"></script>
<script>
    (() => {
        'use strict';

        let refOffset = 0;
        const bannerHeight = 77;
        const bannerWrapper = document.querySelector('.banner-wrapper');
        const banner = document.querySelector('.banner');

        const handler = () => {
            const newOffset = window.scrollY || window.pageYOffset;

            if (newOffset > bannerHeight) {
                if (newOffset > refOffset) {
                    bannerWrapper.classList.remove('animateIn');
                    bannerWrapper.classList.add('animateOut');
                } else {
                    bannerWrapper.classList.remove('animateOut');
                    bannerWrapper.classList.add('animateIn');
                }
                // banner.style.background = 'rgba(162, 197, 35, 0.6)';
                refOffset = newOffset;
            } else {
                // banner.style.backgroundColor = 'rgba(162, 197, 35, 1)';
            }
        };

        window.addEventListener('scroll', handler, false);
    })();
    var myRadios = document.getElementsByName('tabs2');
        var setCheck;
        var x = 0;
        for(x = 0; x < myRadios.length; x++){
            myRadios[x].onclick = function(){
                if(setCheck != this){
                     setCheck = this;
                }else{
                    this.checked = false;
                    setCheck = null;
            }
            };
        }
        document.getElementById("clos").onclick = function toggleMenu() {
  const navToggle = document.getElementsByClassName("toggle");
  for (let i = 0; i < navToggle.length; i++) {
    navToggle.item(i).classList.toggle("hidden");
  }
};
</script>
</body>
</html>
