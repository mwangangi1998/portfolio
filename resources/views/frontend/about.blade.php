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
        <h3 class="text text-black-700 text-lg text-center font-bold">About Me</h3>
<div class="bg-white p-8">

    <p class="text text font-serif text-black text-lg w-96">
        <p>I am a skilled software engineer with expertise in Laravel, PHP, and Vue.js.
            My  passion for web development has driven me to specialize in these technologies,
             and I have honed my skills to a level that makes me an invaluable asset to any project.</p><br>

<p>My experience as a blogger and freelancer has also contributed to my development as a software engineer.
     My ability to communicate complex technical concepts in simple,
      easy-to-understand language has made me an effective collaborator and team member.
      I am always looking for ways to improve my communication skills, and
       I am dedicated to staying up-to-date with the latest web development trends and practices.</p><br>

<p>In addition to my technical skills, I also have a strong background in Linux and Unix administration.
     My experience in  managing complex technical environments and troubleshooting issues quickly and effectively.
      My knowledge in this area adds a valuable dimension to my skills as a software engineer,
      making me a well-rounded IT professional.</p><br>

<p>As a freelancer, I have developed the ability to work independently and manage time effectively.
    I am comfortable taking on new projects and working with clients to deliver high-quality
    web development solutions that meet their specific needs.
</p>



    </p>
</div>


    </div>
</div>


</section>
@endsection
