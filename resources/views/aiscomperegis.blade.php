@extends('layouts.navbar-regis-volunteer');

@section('content')
    <div class="md:hidden absolute left-0 top-0">
        <img src="images/bulet-respon-volun-1.png" alt="" class="h-96"> 
    </div>
    <div class="hidden md:block absolute">
        <img src="images/bulet-regis-volun-4.png" alt="" class="w-2/7 ml-98 pl-20 mt-20">
    </div>
    <div class="absolute bottom-0 right-0">
        <img src="images/bulet-regis-volun-2.png" alt="" class="h-52 -mt-80 md:hidden">
    </div>
    <div class="absolute left-0 mt-24 pt-100">
        <img src="images/bulet-mob-regis-volun-1.png" alt="" class="h-80 md:h-96">
    </div>

    <div class="pt-32 grid md:grid-cols-5 pb-96 md:pb-0">
        <div class="md:col-span-2 md:col-start-1 pl-5 md:pl-24 flex flex-col items-start w-full">
            <div class="absolute top-32">
                <h1 class="absolute md:relative text-xs md:text-2xl font-bold">AISCompetency 1: Looking</h1>
            </div>       
            <h1 class="pt-2 absolute md:relative text-xl md:text-5xl font-bold">
                Registration
                <div class="md:hidden flex flex-row right-0 pl-80 -mt-10 pt-6">
                    <div class="rounded-full h-3 md:h-4 w-3 md:w-4 bg-gradient-to-l from-blue-300 to-purple-400 shadow-lg"></div>
                    <div class="px-1 md:px-2">
                        <div class="rounded-full h-3 md:h-4 w-3 md:w-4 bg-gradient-to-r from-gray-100 to-gray-300 shadow-lg"></div>
                    </div>
                    <div class="">
                        <div class="rounded-full h-3 md:h-4 w-3 md:w-4 bg-gradient-to-r from-gray-100 to-gray-300 shadow-lg"></div>
                    </div>
                </div>
            </h1>
            <div class="absolute md:relative pt-10 md:pt-4">
                <div class="rounded-full py-0.5 md:py-1 bg-gradient-to-l from-blue-300 to-purple-400">
                    <div class="px-14 md:px-20"></div>
                </div>
            </div>
            <div class="w-full pt-10 md:pt-0 pr-5 z-10">
                <form action="{{ route('competency-regis-1-store') }}" method="POST" class="flex flex-col pt-10 md:pt-12">
                    @csrf
                    <label for="name" class="pb-2 pl-4 text-base md:text-xl font-medium">Name</label>
                    <input name="name" type="text" class="outline-none rounded-full border border-form py-1 px-4 w-72 md:w-96 text-sm focus:ring-2 focus:ring-form" placeholder="Your Name">
                    <label for="place" class="pt-4 pb-2 pl-4 text-base md:text-xl font-medium">Institution / University</label>
                    <input name="place" type="text" class="outline-none rounded-full border border-form py-1 px-4 w-72 md:w-96 text-sm focus:ring-2 focus:ring-form" placeholder="Your Institution">
                    <label for="email" class="pt-4 pb-2 pl-4 text-base md:text-xl font-medium">Email</label>
                    <input name="email" type="email" class="outline-none rounded-full border border-form py-1 px-4 w-72 md:w-96 text-sm focus:ring-2 focus:ring-form" placeholder="youremail@email.com">
                    <label for="wa" class="pt-4 pb-2 pl-4 text-base md:text-xl font-medium">Whatsapp Number</label>
                    <input name="wa" type="tel" class="outline-none rounded-full border border-form py-1 px-4 w-72 md:w-96 text-sm focus:ring-2 focus:ring-form" placeholder="08xxxxxxxx">
                    <div class="pt-40">
                        <div class="flex flex-row pl-4">
                            <p class="text-sm md:text-lg font-medium">You can see the requirements.</p>
                            <a href="" class="underline text-blue-700 text-sm md:text-lg pl-1">Here</a>
                        </div>
                    </div>
                    <a href="" class="pt-2">
                        <button type="submit" class="w-full md:w-96 bg-gradient-to-l from-blue-300 to-purple-400 py-1 rounded-full text-white text-lg font-semibold shadow-lg">
                            Next
                        </button>
                    </a>
                </form>
            </div>
            <img src="images/aiscomregis.png" alt="" class="h-1/3 md:hidden absolute right-0 bottom-0 h-96 -mb-80">
        </div>
        <div class="hidden col-span-3 col-start-3 md:flex flex-col items-end">
            <div class="flex flex-row pt-6 pr-20">
                <div class="rounded-full h-4 w-4 bg-gradient-to-l from-blue-300 to-purple-400 shadow-lg"></div>
                <div class="px-2">
                    <div class="rounded-full h-4 w-4 bg-gradient-to-r from-gray-100 to-gray-300 shadow-lg"></div>
                </div>
                <div class="">
                    <div class="rounded-full h-4 w-4 bg-gradient-to-r from-gray-100 to-gray-300 shadow-lg"></div>
                </div>
            </div>
            <!-- <div style="background-image: url('images/bg-register-volunteer.png')" class="bg-cover h-landing bg-local relative h-full"></div> -->
            <img src="images/aiscomregis.png" alt="" class="w-4/6 pt-60">
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-footer absolute w-full z-10">
        <div class="h-full flex flex-col items-start">
            <div class="px-10 md:px-12 lg:px-16 xl:px-20 py-8 md:py-10">
                <h2 class="font-bold text-2xl md:text-3xl lg:text-4xl xl:text-5xl text-white">
                    Contact Us
                </h2>
                <div class="flex pt-2 md:pt-4 lg:pt-6 xl:pt-8 items-center">
                    <img src="images/tiktok.png" alt="" class="w-6 md:w-8 lg:w-10 xl:w-12 mr-2 md:mr-4">
                    <img src="images/instagram.png" alt="" class="w-6 md:w-8 lg:w-10 xl:w-12">
                    <p class="pl-2 md:pl-5 text-white font-semibold text-sm md:text-base lg:text-lg xl:text-2xl">@aisc2022</p>
                </div>
                <div class="flex pl-8 md:pl-12 lg:pl-14 xl:pl-16 pt-2 md:pt-4 lg:pt-6 xl:pt-8 items-center">
                    <img src="images/line-app.png" alt="" class="w-6 md:w-8 lg:w-10 xl:w-12">
                    <p class="pl-2 xl:pl-5 text-white font-semibold text-sm md:text-base lg:text-lg xl:text-2xl">@961ckski</p>
                </div>
                <div class="flex pl-8 md:pl-12 lg:pl-14 xl:pl-16 pt-2 md:pt-4 lg:pt-6 xl:pt-8 items-center">
                    <img src="images/linkedin.png" alt="" class="w-6 md:w-8 lg:w-10 xl:w-12">
                    <p class="pl-2 xl:pl-5 text-white font-semibold text-sm md:text-base lg:text-lg xl:text-2xl">AIChE Indonesia Student Conference 2022</p>
                </div>
            </div>
        </div>
    </footer>
@endsection