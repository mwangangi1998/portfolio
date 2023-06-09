@extends('layouts.app')
@section('content')
    <div class="relative min-h-screen md:flex bg-slate-300">

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

        <div class=" flex-1 text-black p-3 text-lg bg-slate-300 ">
            {{-- content --}}
            <div class=" justify-center p-6 w-auto">
                <h1 class="text text-center text-black font-bold text-lg py-2">My projects </h1>
                <!-- HTML structure for a single project card -->
                <div class="bg-white rounded-lg shadow-md p-6 w-auto ">
                    <ul class="list-disc pl-6">
                        @foreach ($projects as $project)
                            <li class="text-gray-600 mb-2 text-lg ">
                                <h3 class="text font-bold capitalize">{{ $project->title }}.</h3>
                                <p class="overflow-hidden italic  w-94 ">{{ $project->description }}</p>

                                <a href="https://mulika.org" target="_blank">
                                    <span class="text underline text-blue-300">click here !</span></a>
                            </li>
                        @endforeach

                    </ul>

                </div>
                {{ $projects->links('pagination::tailwind') }}
            </div>


        </div>
    </div>
@endsection
