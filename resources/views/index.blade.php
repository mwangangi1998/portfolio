@extends('layouts.app')
@section('content')
    <div class="relative min-h-screen md:flex bg-slate-900">

        {{-- mobile view --}}
        <div>


            <div class="bg-gray-700 text-white fold-bold flex justify-between md:hidden">
                {{-- logo --}}
                <a href="" class="blockp-4">{{ config('app.name') }}</a>
                {{-- menu nav --}}
                <button class="mobile-menu p-4 focus:outline-none focus:bg-gray-700">
                    <span class="hover:bg-blue-300"><i class="bx bx-menu"></i></span>
                </button>
            </div>

        </div>
        {{-- side navbar goes her --}}

        <div
            class="sidebar bg-gray-700 text-white w-56 text-xl py-4 px-12 justify-center font-bold absolute inset-y-0
    left-0 transform -translate-x-full md:relative md:translate-x-0 transition duration-200 ease-in-out">
            {{-- logi --}}
            <div class="border-b ">
                <div class="flex items-center justify-center">
                    <div class="w-24 h-24 border-4 border-white rounded-full overflow-hidden">
                        <img src="img/img.jpg" alt="Profile Image" class="object-cover obj w-full h-full ">
                    </div>
                </div>
                <a href="/"><span
                        class="px-3 font-bold-400 text-2xl  ">{{ config('app.name', 'vinnie Musyoka') }}</span></a>
                {{-- <div>
social media links here
                    </div> --}}
            </div>
            <nav class="px-0 py-8">
                <a href="/" class="block py-1 font-semibold text-lg transition duration-200 hover:bg-amber-300">
                    <span class="bx bx-home"></span>
                    <span>Home</span>
                </a>
                <a href="{{ url('about') }}"
                    class="block py-1 font-semibold text-lg transition duration-200 hover:bg-amber-300">
                    <span class="bx bx-info-circle"></span>
                    <span class="">About</span>
                </a>
                <a href="{{ url('resume') }}"
                    class="block py-1 font-semibold text-lg transition duration-200 hover:bg-amber-300">
                    <span class="bx bx-file"></span>
                    <span>Resume</span>
                </a>
                <a href="{{ url('project') }}"
                    class="block py-1 font-semibold text-lg transition duration-200 hover:bg-amber-300">
                    <span class="bx bx-book-content"></span>
                    <span>projects</span>
                </a>
                <a href="{{ url('contact') }}"
                    class="block py-1 font-semibold text-lg transition duration-200 hover:bg-amber-300">
                    <span class="bx bx-envelope "></span>
                    <span>contact me</span>
                </a>
            </nav>
        </div>
        {{-- content section --}}
        <div class=" flex-1 text-black p-3 text-lg bg-slate-300  ">

                {{-- mobile design --}}

                <div class="text-center py-24 space-y-6">
                    <h1 class="text-center ">
                        <span class="text text-2xl black-900 font-bold  ">Mwangangi Musyoka</span>
                    </h1>
                    <div class="text-center developer font-mono inline-block  ">
                        <p class="developer-text text-first "><span class="text capitalize">I'm </span> a <span
                                class="developer-text text-sec"></span></p>


                </div>


            </div>
        </div>
    @endsection
