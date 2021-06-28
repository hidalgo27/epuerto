<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins.css') }}" rel="stylesheet">
{{--    <link rel="stylesheet" href="https://unpkg.com/element-plus/lib/theme-chalk/index.css">--}}
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

{{--    <div class="fixed bottom-0 right-0 z-40 p-8">--}}
{{--        <a href="https://api.whatsapp.com/send?phone=51958123295" target="_blank">--}}
{{--            <img src="{{asset('images/whatsapp-i.png')}}" alt="" class="w-20 animate-bounce">--}}
{{--        </a>--}}
{{--    </div>--}}
    <header>
        <div class="relative shadow h-20 bg-primary dark:bg-gray-800 items-center flex flex-wrap z-30">

        </div>
    </header>

    <nav class="banner-wrapper sticky -mt-10 px-24 top-0 z-50">
        <div class="banner">
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow dark:bg-gray-800">
                <nav class="dark:bg-gray-800">
                    <div class="container px-6 py-6 mx-auto md:flex md:justify-between md:items-center">
                        <div class="flex items-center justify-between">
                            <div>
                                <a class="text-2xl font-bold text-gray-800 dark:text-white lg:text-3xl hover:text-gray-700 dark:hover:text-gray-300" href="#">
                                    <img src="{{asset('images/epuerto.png')}}" alt="" class="w-40">
                                </a>
                            </div>

                            <!-- Mobile menu button -->
                            <div class="flex md:hidden">
                                <button type="button" class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400" aria-label="toggle menu">
                                    <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                                        <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
                        <div class="items-center md:flex">
                            <div class="flex flex-col md:flex-row md:mx-6">
                                <a class="my-1 text-sm font-medium text-gray-700 dark:text-gray-200 hover:text-indigo-500 dark:hover:text-indigo-400 md:mx-4 md:my-0" href="#">Nosotros</a>
                                <a class="my-1 text-sm font-medium text-gray-700 dark:text-gray-200 hover:text-indigo-500 dark:hover:text-indigo-400 md:mx-4 md:my-0" href="#">Best Cusco Tours</a>
                                <a class="my-1 text-sm font-medium text-gray-700 dark:text-gray-200 hover:text-indigo-500 dark:hover:text-indigo-400 md:mx-4 md:my-0" href="#">Información</a>
                                <a class="my-1 text-sm font-medium text-gray-700 dark:text-gray-200 hover:text-indigo-500 dark:hover:text-indigo-400 md:mx-4 md:my-0" href="#">Hoteles</a>
                                <a class="my-1 text-sm font-medium text-gray-700 dark:text-gray-200 hover:text-indigo-500 dark:hover:text-indigo-400 md:mx-4 md:my-0" href="#">FAQs</a>
                                <a class="my-1 text-sm font-medium text-gray-700 dark:text-gray-200 hover:text-indigo-500 dark:hover:text-indigo-400 md:mx-4 md:my-0" href="#">Contacto</a>
                            </div>

                        </div>
                    </div>
                </nav>
            </div>

        </div>
    </nav>


    <div class="relative -mt-32 flex flex-col justify-between h-screen  overflow-hidden">
        <div class="relative items-start grid grid-cols-3 justify-between ">

        </div>

        <div class="relative grid mt-48 grid-cols-1 gap-12 place-items-center text-center justify-center text-white z-30">
            <div class="relative text-center">
                <h1 class="text-xl mb-6 font-bold font-cinzel text-secondary">Epuerto Perú Travel & Tours</h1>
                <h3 class="text-5xl font-semibold tracking-widest text-gray-50">EXPERIENCIAS Y CONEXIONES <br> ÚNICAS COMO NINGUNA OTRA.</h3>
                <h4 class="text-9xl font-bold inset-0 text-white text-opacity-10 absolute top-0">EPUERTO</h4>
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

    <section class="grid grid-cols-4 gap-6 px-24 -mt-24 relative z-50">
        <div class="text-center shadow-lg rounded-lg px-12 py-8 bg-white">
            <svg  xmlns="http://www.w3.org/2000/svg" class="h-20 w-16 mx-auto text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
            <h3 class="font-semibold text-primary text-lg  mt-3 mb-4">Servicio Privado</h3>
            <p class="text-gray-500 mb-9 block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid expedita illo molestias reiciendis.</p>
            <div class="transform hover:-translate-y-3 transition duration-500 ease-in-out">
                <a href="" class="transform hover:-translate-y-3 transition duration-500 ease-in-out rounded-full py-4 px-9 bg-secondary text-white text-xs font-semibold">VER MÁS</a>
            </div>
        </div>
        <div class="text-center shadow-lg rounded-lg px-12 py-8 bg-white">
            <svg  xmlns="http://www.w3.org/2000/svg" class="h-20 w-16 mx-auto text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
            </svg>
            <h3 class="font-semibold text-primary text-lg  mt-3 mb-4">Soporte 24/7</h3>
            <p class="text-gray-500 mb-9 block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid expedita illo molestias reiciendis.</p>
            <div class="transform hover:-translate-y-3 transition duration-500 ease-in-out">
                <a href="" class="transform hover:-translate-y-3 transition duration-500 ease-in-out rounded-full py-4 px-9 bg-secondary text-white text-xs font-semibold">VER MÁS</a>
            </div>
        </div>
        <div class="text-center shadow-lg rounded-lg px-12 py-8 bg-white">
            <svg  xmlns="http://www.w3.org/2000/svg" class="h-20 w-16 mx-auto text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <h3 class="font-semibold text-primary text-lg  mt-3 mb-4">Mejores Precios</h3>
            <p class="text-gray-500 mb-9 block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid expedita illo molestias reiciendis.</p>
            <div class="transform hover:-translate-y-3 transition duration-500 ease-in-out">
                <a href="" class="transform hover:-translate-y-3 transition duration-500 ease-in-out rounded-full py-4 px-9 bg-secondary text-white text-xs font-semibold">VER MÁS</a>
            </div>
        </div>
        <div class="text-center shadow-lg rounded-lg px-12 py-8 bg-primary">
            <h3 class="font-semibold text-gray-50 text-lg  mt-3 mb-4">Reservar Ahora</h3>
            <p class="text-gray-500 mb-9 block text-gray-200">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid expedita illo molestias reiciendis.</p>
            <p class="text-white text-xs tracking-tight mb-12">LLAME AHORA</p>
            <div class="transform hover:-translate-y-3 transition duration-500 ease-in-out">
                <a href="" class="transform hover:-translate-y-3 transition duration-500 ease-in-out rounded-full py-4 px-9 bg-secondary text-white text-xs font-semibold">+51 99877654</a>
            </div>
        </div>
    </section>


    <section class="px-24 my-24 justify-between flex">
        <div class="relative">
            <h2 class="text-5xl font-semibold z-30 text-primary relative">Destinos Pupulares</h2>
            <h4 class="text-9xl font-bold inset-0 text-gray-100 text-opacity-90 absolute z-10 -top-10">EPUERTO</h4>
        </div>
        <div class="">
            <div class="transform hover:-translate-y-3 transition duration-500 ease-in-out">
                <a href="" class="transform hover:-translate-y-3 transition duration-500 ease-in-out rounded-full py-4 px-9 bg-secondary text-white font-semibold">DESCRUBRE MÁS</a>
            </div>
        </div>
    </section>

    <section class="px-24 grid grid-cols-3 gap-6">
        <div class="group shadow-lg rounded-xl overflow-hidden">
            <div class="overflow-hidden relative">
                <img src="https://templatekit.jegtheme.com/travenu/wp-content/uploads/sites/22/2020/12/imagee-NUEL43L.jpg" alt="sds" class="rounded-t-xl object-cover transition duration-500 ease-in-out transform group-hover:-translate-x-0 group-hover:scale-105"/>
            </div>
            <div class="p-9 block">
                <h2 class="text-xl font-bold">Best of Peru <span class="text-secondary"><span class="text-xs align-top">from</span> $ 2045 <span class="text-xs">usd</span></span></h2>
                <p class="text-sm mb-7 text-gray-500 mt-3">Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>

                <div class="transform hover:-translate-y-3 transition duration-500 ease-in-out">
                    <a href="" class="transform hover:-translate-y-3 transition duration-500 ease-in-out rounded-full py-4 px-9 bg-secondary text-xs text-white font-semibold">VER DETALLES</a>
                </div>
            </div>
        </div>
        <div class="group shadow-lg rounded-xl overflow-hidden">
            <div class="overflow-hidden relative">
                <img src="https://templatekit.jegtheme.com/travenu/wp-content/uploads/sites/22/2020/12/imagee-NUEL43L.jpg" alt="sds" class="rounded-t-xl object-cover transition duration-500 ease-in-out transform group-hover:-translate-x-0 group-hover:scale-105"/>
            </div>
            <div class="p-9 block">
                <h2 class="text-xl font-bold">Best of Peru <span class="text-secondary"><span class="text-xs align-top">from</span> $ 2045 <span class="text-xs">usd</span></span></h2>
                <p class="text-sm mb-7 text-gray-500 mt-3">Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>

                <div class="transform hover:-translate-y-3 transition duration-500 ease-in-out">
                    <a href="" class="transform hover:-translate-y-3 transition duration-500 ease-in-out rounded-full py-4 px-9 bg-secondary text-xs text-white font-semibold">VER DETALLES</a>
                </div>
            </div>
        </div>
        <div class="group shadow-lg rounded-xl overflow-hidden">
            <div class="overflow-hidden relative">
                <img src="https://templatekit.jegtheme.com/travenu/wp-content/uploads/sites/22/2020/12/imagee-NUEL43L.jpg" alt="sds" class="rounded-t-xl object-cover transition duration-500 ease-in-out transform group-hover:-translate-x-0 group-hover:scale-105"/>
            </div>
            <div class="p-9 block">
                <h2 class="text-xl font-bold">Best of Peru <span class="text-secondary"><span class="text-xs align-top">from</span> $ 2045 <span class="text-xs">usd</span></span></h2>
                <p class="text-sm mb-7 text-gray-500 mt-3">Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>

                <div class="transform hover:-translate-y-3 transition duration-500 ease-in-out">
                    <a href="" class="transform hover:-translate-y-3 transition duration-500 ease-in-out rounded-full py-4 px-9 bg-secondary text-xs text-white font-semibold">VER DETALLES</a>
                </div>
            </div>
        </div>
    </section>

    <section class="flex flex mt-32 mb-24 items-center">
        <div class="px-24 py-32 bg-primary text-gray-50 shadow-xl md:w-3/4 lg:w-3/4 xl:w-3/4 2xl:w-1/2">
            <div class="relative">
                <h4 class="text-2xl text-white font-medium relative z-30">Tómese un descanso y vea</h4>
                <h3 class="text-2xl my-3 font-bold text-gray-50 relative z-30">Nuestros principales destinos</h3>
                <h4 class="text-8xl font-bold inset-0 text-gray-100 text-opacity-20 absolute z-10 -top-5">EPUERTO</h4>
            </div>
            <p class="mb-9">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At eveniet ipsam nesciunt sunt voluptatum? Commodi corporis distinctio et expedita.</p>
            <div class="transform hover:-translate-y-3 transition duration-500 ease-in-out">
                <a href="" class="transform hover:-translate-y-3 transition duration-500 ease-in-out rounded-full py-4 px-9 bg-secondary text-xs text-white font-semibold">VER DETALLES</a>
            </div>
        </div>
        <div class="-ml-24 -mt-36">
            <img src="{{asset('images/hotels/2star.jpg')}}" alt="" class="object-cover">
        </div>
    </section>


    <section class="px-24 my-24 justify-between flex">
        <div class="relative">
            <h2 class="text-5xl font-semibold z-30 text-primary relative">Travel Packages</h2>
            <h4 class="text-9xl font-bold inset-0 text-gray-100 text-opacity-90 absolute z-10 -top-10">TOURS</h4>
        </div>
        <div class="">
            <div class="transform hover:-translate-y-3 transition duration-500 ease-in-out">
                <a href="" class="transform hover:-translate-y-3 transition duration-500 ease-in-out rounded-full py-4 px-9 bg-secondary text-white font-semibold">DESCRUBRE MÁS</a>
            </div>
        </div>
    </section>

    <section class="px-24 grid grid-cols-3 gap-6">
        <div class="group shadow-lg rounded-xl overflow-hidden">
            <div class="overflow-hidden relative">
                <img src="https://templatekit.jegtheme.com/travenu/wp-content/uploads/sites/22/2020/12/imagee-NUEL43L.jpg" alt="sds" class="rounded-t-xl object-cover transition duration-500 ease-in-out transform group-hover:-translate-x-0 group-hover:scale-105"/>
            </div>
            <div class="p-9 block">
                <h2 class="text-xl font-bold">Best of Peru <span class="text-secondary"><span class="text-xs align-top">from</span> $ 2045 <span class="text-xs">usd</span></span></h2>
                <p class="text-sm mb-7 text-gray-500 mt-3">Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>

                <div class="transform hover:-translate-y-3 transition duration-500 ease-in-out">
                    <a href="" class="transform hover:-translate-y-3 transition duration-500 ease-in-out rounded-full py-4 px-9 bg-secondary text-xs text-white font-semibold">VER DETALLES</a>
                </div>
            </div>
        </div>
        <div class="group shadow-lg rounded-xl overflow-hidden">
            <div class="overflow-hidden relative">
                <img src="https://templatekit.jegtheme.com/travenu/wp-content/uploads/sites/22/2020/12/imagee-NUEL43L.jpg" alt="sds" class="rounded-t-xl object-cover transition duration-500 ease-in-out transform group-hover:-translate-x-0 group-hover:scale-105"/>
            </div>
            <div class="p-9 block">
                <h2 class="text-xl font-bold">Best of Peru <span class="text-secondary"><span class="text-xs align-top">from</span> $ 2045 <span class="text-xs">usd</span></span></h2>
                <p class="text-sm mb-7 text-gray-500 mt-3">Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>

                <div class="transform hover:-translate-y-3 transition duration-500 ease-in-out">
                    <a href="" class="transform hover:-translate-y-3 transition duration-500 ease-in-out rounded-full py-4 px-9 bg-secondary text-xs text-white font-semibold">VER DETALLES</a>
                </div>
            </div>
        </div>
        <div class="group shadow-lg rounded-xl overflow-hidden">
            <div class="overflow-hidden relative">
                <img src="https://templatekit.jegtheme.com/travenu/wp-content/uploads/sites/22/2020/12/imagee-NUEL43L.jpg" alt="sds" class="rounded-t-xl object-cover transition duration-500 ease-in-out transform group-hover:-translate-x-0 group-hover:scale-105"/>
            </div>
            <div class="p-9 block">
                <h2 class="text-xl font-bold">Best of Peru <span class="text-secondary"><span class="text-xs align-top">from</span> $ 2045 <span class="text-xs">usd</span></span></h2>
                <p class="text-sm mb-7 text-gray-500 mt-3">Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>

                <div class="transform hover:-translate-y-3 transition duration-500 ease-in-out">
                    <a href="" class="transform hover:-translate-y-3 transition duration-500 ease-in-out rounded-full py-4 px-9 bg-secondary text-xs text-white font-semibold">VER DETALLES</a>
                </div>
            </div>
        </div>
    </section>








    <footer class="relative bg-primary pt-6">
        <div class="bg-footer-texture bg-repeat-x h-6 bg-12 top-0 w-full z-30"></div>
        <div class="container mx-auto text-center text-gray-50 py-3">
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
</script>
</body>
</html>
