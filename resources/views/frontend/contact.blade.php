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
            <a href="{{ url('about') }}" class="block py-1 font-semibold text-lg transition duration-200 hover:bg-amber-300">
                <span class="bx bx-info-circle"></span>
                <span class="">About</span>
            </a>
            <a href="{{ url('resume') }}" class="block py-1 font-semibold text-lg transition duration-200 hover:bg-amber-300">
                <span class="bx bx-file"></span>
                <span>Resume</span>
            </a>
            <a href="{{ url('project') }}" class="block py-1 font-semibold text-lg transition duration-200 hover:bg-amber-300">
                <span class="bx bx-book-content"></span>
                <span>projects</span>
            </a>
            <a href="{{ url('contact') }}" class="block py-1 font-semibold text-lg transition duration-200 hover:bg-amber-300">
                <span class="bx bx-envelope "></span>
                <span>contact me</span>
            </a>
        </nav>
    </div>

    <div class=" flex-1 text-black p-3 text-lg bg-slate-300 ">
        <div class="p-6">
            <h1 class="text text uppercase text-center">Contact Me</h1>

        <div class="max-w-md mx-auto">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{ url('contactme') }}" method="post">
              @csrf
                <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                  Name
                </label>
                <input
                  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                  id="name"
                  type="text"
                  name="name"
                  placeholder="Your Name"
                />
              </div>
              <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                  Email
                </label>
                <input
                  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                  id="email"
                  type="email"
                  name="email"
                  placeholder="Your Email"
                />
              </div>
              <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="message">
                  Message
                </label>
                <textarea
                  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                  id="message"
                  name="message"
                  placeholder="Your Message"
                  rows="5"
                ></textarea>
              </div>
              <div class="flex items-center justify-center">
                <button
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"

                >
                 <span >Contact me</span>
                </button>
              </div>
            </form>
          </div>
        </div>


    </div>
</div>

@endsection
