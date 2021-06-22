@extends('layouts.pages.plain')

@section('content')
	<div class="bg-red-500 w-full">
        <header>
            <div class="flex justify-between items-center py-4 px-6">
                <div>
                    <h1 class="font-bold text-white text-3xl">SA<span class="text-blue-400">-LOGO</span></h1>
                </div>
                <div class="flex justify-center space-x-10 hidden sm:block">
                    <a href="#" class="text-white font-semibold text-lg hover:text-yellow-400">Home</a>
                    <a href="#" class="text-white font-semibold text-lg hover:text-yellow-400">About</a>
                    <a href="#" class="text-white font-semibold text-lg hover:text-yellow-400">Contact</a>
                </div>
                <div class="flex space-x-2 space-x-10 hidden sm:block">
                    <button
                        class="bg-gradient-to-b from-yellow-400 to-yellow-500  text-white font-bold py-2 px-4 rounded-lg uppercase text-sm  shadow-xl">
                        HIRE US
                    </button>
                </div>
                <div class="flex space-x-2 space-x-10 block sm:hidden">
                    <a href="#"
                        class="flex items-center bg-gradient-to-b from-yellow-400 to-yellow-500  text-white font-bold py-2 px-4 rounded-full uppercase text-sm  shadow-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                        </svg>
                    </a>
                </div>
            </div>
        </header>
        <!-- Title -->
        <section class="h-screen px-12 sm:px-24 flex items-center relative">
            <div class="grid grid-cols-12 gap-6 ">
                <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-8 xxl:col-span-12">
                    <div class="w-full">
                        <h1 class="text-7xl sm:text-8xl lg:text-8xl xl:text-9xl text-white font-bold my-8">Bring Your<br>
                            Ideas to <span class="text-blue-400">Life</span></h1>
                        <p class="text-xl text-white font-semibold ">Become the best in your industry!<br> Start today
                            our universal quik start program</p>
                    </div>
                </div>
                <div class="absolute bottom-0 left-0 py-6 px-6">
                    <div class="flex space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-yellow-400" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <p class="text-white font-semibold">Explore</p>
                    </div>
                </div>
                <div class="absolute bottom-0 py-6 px-6 right-0">
                    <div class="flex space-x-6">
                        <i class="fa fa-dribbble text-white fa-lg"></i>
                        <i class="fa fa-twitter text-white fa-lg"></i>
                        <i class="fa fa-facebook text-white fa-lg"></i>
                        <i class="fa fa-instagram text-white fa-lg"></i>
                    </div>

                </div>
            </div>
        </section>
        <!-- WE CREATE -->
        <section class="h-full bg-yellow-300">
            <div class="relative  px-8 py-8">
                <div>
                    <h1 class="text-white text-white text-6xl font-bold">
                        <span class="bg-blue-400 py-4 px-4 rounded-full text-5xl">WE</span>CREATE
                    </h1>
                </div>
            </div>
            <div class="grid grid-cols-12 gap-6 px-8 py-8">
                <div class="col-span-12 sm:col-span-12 md:col-span-5 lg:col-span-5 xxl:col-span-5">
                    <div class="py-4">
                        <p class="text-lg font-semibold text-blue-900"><span class="text-red-400 font-bold">01-</span>
                            OPTIMIZED <span class="font-bold">USER EXPERIENCES</span></p>
                        <p class="text-blue-900 text-sm pl-8">Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since
                            the 1500s, when an unknown printer took a galley of type and scrambled it to make a
                            type specimen book.
                        </p>
                    </div>
                    <div class="py-4">
                        <p class="text-lg font-semibold text-blue-900"><span class="text-red-400 font-bold">02-</span>
                            ELEGENT <span class="font-bold">USER INTERFACES</span></p>
                    </div>
                    <div class="py-4">
                        <p class="text-lg font-semibold text-blue-900"><span class="text-red-400 font-bold">03-</span>
                            BEAUTIFUL <span class="font-bold">GRAPHIC DESIGNS</span></p>
                    </div>
                    <div class="py-4">
                        <p class="text-lg font-semibold text-blue-900"><span class="text-red-400 font-bold">04-</span>
                            TACTICAL <span class="font-bold">DIGITAL MARKETING</span></p>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-12 md:col-span-7 lg:col-span-7 xxl:col-span-7 flex justify-center">
                    <img src="https://cdn3d.iconscout.com/3d/premium/thumb/male-employee-looking-at-customer-review-2937682-2426381.png"
                        class="w-auto" />
                </div>
            </div>
        </section>
        <!-- Grow With Us -->
        <section class="h-full bg-yellow-300">
            <div class="grid grid-cols-12 gap-0">
                <div
                    class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-6 xxl:col-span-6 bg-red-500 h-full px-16 py-6">
                    <div>
                        <img src="https://superscene.pro/img/constructor/06.png" class="w-40 -ml-4" />
                        <h1 class="text-white font-semibold text-7xl">Grow With Us</h1>
                        <button
                            class="my-6 bg-gradient-to-b from-yellow-400 to-yellow-500  text-white font-bold py-2 px-4 rounded-lg uppercase text-sm  shadow-xl">
                            Hire Us
                        </button>
                    </div>
                </div>
                <div
                    class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-6 xxl:col-span-6 bg-blue-400 h-full px-16 py-6">
                    <div>
                        <img src="https://assets.materialup.com/uploads/641e0e0f-eddf-4d2c-b0ee-c6f55300bb1b/preview.png"
                            class="w-52 -ml-10" />
                        <h1 class="text-white font-semibold text-7xl">Say Hello</h1>
                        <button
                            class="my-6 bg-gradient-to-b from-red-400 to-red-500  text-white font-bold py-2 px-4 rounded-lg uppercase text-sm  shadow-xl">
                            Hello@123.com
                        </button>
                    </div>
                </div>
            </div>
        </section>

        
    </div>
@endsection