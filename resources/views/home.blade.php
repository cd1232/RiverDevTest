<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>RIVER</title>

        <link href="/css/app.css" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <div id="app">            
            <div class="h-screen w-full bg-top bg-cover bg-no-repeat absolute" style="z-index: -1; background-image:linear-gradient(rgba(0, 39, 47, 0.8), rgba(0, 39, 47, 0.8)), url({{ asset('images/hero-river.png') }})"></div>
            <div class="md:px-10 xl:px-24 mx-auto">
                <div class="grid grid-cols-12 col-gap-8 grid-flow-row">
                    <img src="{{ asset('images/RiverLogo.svg') }}" alt="River Logo" class="mt-6 ml-6 absolute top-0 col-span-12 xl:mt-20 xl:col-span-2 xl:ml-0" />
                    <div class="col-span-12 mx-auto flex h-screen">
                        <h1 class="text-3xl md:text-5xl lg:text-7xl xl:text-8xl font-bold uppercase tracking-widest text-white self-center" style="text-shadow: 0px 3px 6px #00000029">
                            Example Demo
                        </h1>
                    </div>
                    <div class="col-span-12 xl:col-start-3 xl:col-end-13 mt-6 xl:mt-48 px-4 md:px-10 xl:px-0">
                        <p class="text-gray-500 tracking-widest-2">01</p>    
                        <h2 class="uppercase font-bold text-3xl tracking-widest-2">Heading</h2>          
                    </div>
                    <div class="border-t border-black w-full xl:col-start-2 mt-16 hidden xl:block"></div>
                    <div class="col-span-12 xl:col-start-3 xl:col-span-5 mt-8 xl:mt-10 px-4 md:px-10 xl:px-0">
                        <p class="text-lg">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.
                        </p>
                    </div>
                    <div class="col-span-12 xl:col-start-3 xl:col-span-6 mt-8 xl:mt-24 md:px-10 flex justify-center md:block">
                        <a href="#BookingForm" class="bg-transparent hover:text-white py-3 px-16 border border-black hover:bg-black hover:border-transparent rounded">Book Now</a>
                    </div>

                    <div class="mt-10 grid xl:mt-56 xl:col-start-2 col-span-12 md:px-10 xl:px-0 xl:col-span-10 grid-cols-10 col-gap-8">
                        <img src="{{ asset('images/image-water.png') }}" alt="Image of Water" class="w-full col-span-10 md:col-span-5 xl:col-span-6">
                        <div class="border-t border-black w-full mt-32 hidden xl:block"></div>
                        <div class="col-span-10 md:col-span-5 xl:col-start-8 xl:col-span-3 mt-6 xl:mt-16 px-4 md:px-10 xl:px-0">
                            <p class="text-gray-500 tracking-widest-2 xl:col-start-9">02</p>  
                            <p class="text-3xl xl:col-start-9">
                                Lorem ipsum dolor sit amet, consetetur.
                            </p>
                        </div>
                    </div>

                    <div class="col-span-12 xl:col-start-2 xl:col-span-9 grid grid-cols-1 xl:grid-cols-9 xl:col-gap-8 mt-10 xl:mt-40 px-4 md:px-10 xl:px-0">
                        <div class="border-t border-black w-full mt-12 hidden xl:block"></div>
                        <div class="xl:col-span-2">
                            <p class="text-gray-500 tracking-widest-2">03</p>  
                            <h2 class="uppercase font-bold text-3xl tracking-widest-2"  id="BookingForm">Heading</h2> 
                        </div>
                        <div class="col-span-12 xl:col-start-2 xl:col-span-4">
                            <p class="text-3xl mt-4 xl:mt-10">
                                Lorem ipsum dolor sit amet, consetetur.
                            </p>
                            <p class="mt-4 w-4/5 text-lg">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua, vero eos et accusam et justo duo dolores et ea rebum.</p>
                        </div>
                        <div class="col-span-12 xl:col-span-4 mt-6">
                            <booking-form-component>
                                {{ csrf_field() }}
                            </booking-form-component>
                        </div>
                    </div>
                    <bookings-list-component class="col-span-12 mt-16 xl:mt-40 px-4 md:px-10 xl:px-0 mb-12 xl:mb-0">
                    </bookings-list-component>                    
                    <div class="flex flex-row-reverse -mt-32 mb-12 xl:col-span-3 xl:col-end-13 hidden xl:block">
                        <img src="{{ asset('images/RiverLogoAlone.svg') }}" />
                    </div>
                </div>
            </div>
            <footer class="bg-black px-4 md:px-10 xl:px-24 mx-auto pb-10 xl:pb-24 grid grid-cols-12 row-gap-8 xl:row-gap-0 col-gap-8 grid-flow-row pt-10 xl:pt-24">
                <div class="xl:col-start-2 col-span-12 mb-10 xl:col-span-2 xl:mb-0">
                    <img src="{{ asset('images/RiverLogo.svg') }}" alt="River Logo" class="" />
                    <div class="mt-8">
                        <p class="text-white opacity-50">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy.</p>
                    </div>
                    <div class="mt-8 mx-auto xl:mx-0 text-center xl:text-left">
                        <a href="#BookingForm" class="text-white uppercase tracking-widest py-4 border-b rounded hover:text-gray-500 hover:border-gray-500">Book Now</a>
                    </div>
                </div>
                <div class="flex flex-col col-span-6 lg:col-span-3 xl:col-start-5 xl:col-span-2 text-center xl:text-left">
                    <h3 class="uppercase text-sm tracking-widest text-white">Menu</h3>
                    <ul class="mt-5 xl:mt-8">
                        <li class="text-white opacity-50 text-sm py-3 xl:py-0 hover:opacity-100"><a href="#">Heading</a></li>
                        <li class="text-white opacity-50 text-sm mt-3 py-3 xl:py-0 hover:opacity-100"><a href="#">Heading</a></li>
                        <li class="text-white opacity-50 text-sm mt-3 py-3 xl:py-0 hover:opacity-100"><a href="#">Heading</a></li>
                        <li class="text-white opacity-50 text-sm mt-3 py-3 xl:py-0 hover:opacity-100"><a href="#">Heading</a></li>
                    </ul>
                </div>
                <div class="flex flex-col col-span-6 lg:col-span-3 xl:col-span-2 text-center xl:text-left">
                    <h3 class="uppercase text-sm tracking-widest text-white">Menu</h3>
                    <ul class="mt-5 xl:mt-8">
                        <li class="text-white opacity-50 text-sm py-3 xl:py-0 hover:opacity-100"><a href="#">Heading</a></li>
                        <li class="text-white opacity-50 text-sm mt-3 py-3 xl:py-0 hover:opacity-100"><a href="#">Heading</a></li>
                        <li class="text-white opacity-50 text-sm mt-3 py-3 xl:py-0 hover:opacity-100"><a href="#">Heading</a></li>
                    </ul>
                </div>
                <div class="flex flex-col col-span-6 lg:col-span-3 xl:col-span-2 text-center xl:text-left">
                    <h3 class="uppercase text-sm tracking-widest text-white">Menu</h3>
                    <ul class="mt-5 xl:mt-8">
                        <li class="text-white opacity-50 text-sm py-3 xl:py-0 hover:opacity-100"><a href="#">Heading</a></li>
                        <li class="text-white opacity-50 text-sm mt-3 py-3 xl:py-0 hover:opacity-100"><a href="#">Heading</a></li>
                    </ul>
                </div>
                <div class="flex flex-col col-span-6 lg:col-span-3 xl:col-span-2 text-center xl:text-left">
                    <h3 class="uppercase text-sm tracking-widest text-white">Menu</h3>
                    <ul class="mt-5 xl:mt-8">
                        <li class="text-white opacity-50 text-sm py-3 xl:py-0 hover:opacity-100"><a href="#">Heading</a></li>
                        <li class="text-white opacity-50 text-sm mt-3 py-3 xl:py-0 hover:opacity-100"><a href="#">Heading</a></li>
                        <li class="text-white opacity-50 text-sm mt-3 py-3 xl:py-0 hover:opacity-100"><a href="#">Heading</a></li>
                    </ul>
                </div>
                <div class="mt-6 col-span-12 xl:col-span-3 flex justify-center xl:justify-start xl:mt-20 xl:col-start-2">
                    <span class="text-white opacity-50 text-sm">© 2019 RIVER. All Rights Reserved.</span>
                </div>
            </footer>
        </div>
        <script src="/js/app.js"></script>
    </body>
</html>
