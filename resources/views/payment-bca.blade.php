@extends('layouts.navbar-regis-volunteer')

@section('content')
    <div class="hidden md:block absolute left-0 top-0 z-0">
        <img src="/images/bulet-payment-1.png" alt="" class="w-96 -mb-40">
    </div>
    <div class="hidden md:block absolute right-0 bottom-0 z-0">
        <img src="/images/bulet-payment-2.png" alt="" class="h-60 -mb-40">
    </div>

    <div class="flex justify-center pt-40">
        <h1 class="text-5xl font-bold">
            Payment
        </h1>
    </div>

    <div class="absolute flex flex-row right-0 pr-28 -mt-4">
        <div class="px-2">
            <div class="rounded-full h-4 w-4 bg-gradient-to-r from-gray-100 to-gray-300 shadow-lg"></div>
        </div>
        <div class="rounded-full h-4 w-4 bg-gradient-to-r from-gray-100 to-gray-300 shadow-lg"></div>
        <div class="px-2">
            <div class="rounded-full h-4 w-4 bg-gradient-to-r from-gray-100 to-gray-300 shadow-lg"></div>
        </div>
        <div class="rounded-full h-4 w-4 bg-gradient-to-l from-blue-300 to-purple-400 shadow-lg"></div>
    </div>

    <div class ="flex flex-col px-60 py-32">
        <div class="rounded-lg py-4 px-4 border border-grey-200 overflow-hidden bg-white w-full shadow-lg z-10">
            <div class="px-6 flex flex-row items-center justify-between h-16">
                <img src="images/BCA.png" alt="" class="h-14">
                <h2 class="text-2xl font-bold -ml-20">BCA Transfer</h2>
                <div class="rounded-full h-6 w-6 border-2 border-gray-400">
                    <img src="images/ceklis.png" alt="" class="h-full">
                </div>
            </div>
        </div>

        <div class="">
            <form action="" class="flex flex-col items-start pt-12">
                @csrf
                <label for="name" class="pb-2 pl-4 text-xl font-medium">Name on Card</label>
                <input type="text" class="input border-b-2 focus:border-form border-form py-1 px-4 pt-4 w-full text-sm bg-transparent" placeholder="Name on Card">
                <label for="payment-date" class="pt-4 pb-2 pl-4 text-xl font-medium">Date of Payment</label>
                <input type="date" class="input border-b-2 focus:border-form border-form py-1 px-4 pt-4 w-full text-sm bg-transparent">
                <label for="sg" class="pt-4 pb-2 pl-4 text-base md:text-xl font-medium">Transfer Receipt</label>
                <label for="file-upload-6" class="outline-none rounded-full border border-form py-1 px-4 w-40 md:w-40 text-white content-center focus:ring-2 focus:ring-form bg-gradient-to-l from-blue-300 to-purple-400">
                    File
                </label>
                <input name="tf-receipt" type="file" id="file-upload-6" class="hidden">
                <div class="pt-20 w-full">
                    <button type="submit" class="w-full bg-gradient-to-l from-blue-300 to-purple-400 py-1.5 rounded-full text-white text-lg font-semibold shadow-lg">
                        Next
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-footer absolute w-full z-10">
        <div class="h-full flex flex-col items-start">
            <div class="px-10 md:px-20 py-8 md:py-10">
                <h2 class="font-bold text-2xl md:text-5xl text-white">
                    Contact Us
                </h2>
                <div class="flex pt-2 md:pt-8 items-center">
                    <img src="images/tiktok.png" alt="" class="w-6 md:w-12 mx-4">
                    <img src="images/instagram.png" alt="" class="w-6 md:w-12">
                    <p class="pl-2 md:pl-5 text-white font-semibold text-sm md:text-2xl">@aisc2022</p>
                </div>
                <div class="flex pl-20 pt-2 md:pt-8 items-center">
                    <img src="images/line-app.png" alt="" class="w-6 md:w-12">
                    <p class="pl-2 md:pl-5 text-white font-semibold text-sm md:text-2xl">@961ckski</p>
                </div>
                <div class="flex pl-20 pt-2 md:pt-8 items-center">
                    <img src="images/linkedin.png" alt="" class="w-6 md:w-12">
                    <p class="pl-2 md:pl-5 text-white font-semibold text-sm md:text-2xl">AIChE Indonesia Student Conference 2022</p>
                </div>
            </div>
        </div>
    </footer>
@endsection