@extends('layouts.guest')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6">

        <section class="py-6 my-5 rounded-lg ">
            <div class="container mx-auto flex flex-col items-center justify-center  space-y-8 md:p-10 md:px-24 xl:px-48">
                <h1 class="text-5xl font-base leading-none text-center text-white">BERSAMA RAKYAT
                    MEMPERJUANGKAN

                </h1>
                <span class="text-5xl font-base leading-none text-center text-red-600 font-bold">

                    PERUBAHAN DAN PERBAIKAN
                </span>
                </span>
                <div
                    class=" text-xl font-medium text-white ring ring-blue-800 rounded-full py-5 px-5 text-center hover:bg-blue-300">
                    <a href="/pendaftaran">DAFTAR CALEG SEKARANG</a>
                </div>
                <div class="">
                    <img class="h-auto md:h-60 lg:h-60" src="{{ asset('image/maps.png') }}" alt="Indonesia">
                </div>

            </div>
            <div class="">
                <div class="flex justify-center">
                    <img class="h-36 w-36 md:h-60 md:w-60" src="{{ asset('image/ahy.jpeg') }}" alt="Agus Hamurti Yodhoyono">
                    <img class="h-36 w-36 md:h-60 md:w-60" src="{{ asset('image/teuku.jpeg') }}" alt="Teuku Riefky Harsya">

                    <img class="h-36 w-36 md:h-60 md:w-60" src="{{ asset('image/endang.jpeg') }}" alt="Muh. Endang">
                    <img class="h-36 w-36 md:h-60 md:w-60" src="{{ asset('image/budhi.jpeg') }}" alt="S. Budhi Prasodjo">
                </div>

            </div>


        </section>
    </div>
</main>
@endsection
