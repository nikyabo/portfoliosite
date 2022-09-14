@extends('layouts.menufooter')

@section('content')

<section class="mb-20">
    <div class="container text-center mx-auto">
        <div class="w-full lg:w-1/2 mx-auto">
            <h1 class="mx-11 md:mx-0 text-3xl font-bold text-white mt-20 mb-2"> Welcome to our Portfolio website </h1>
            <p class="font-normal mx-11 md:mx-0 text-white mb-20"> Both of us have relevant experience in digital marketing, so why not create a super awesome website about it? Yep. We make things happen. </p>
        </div>
        <div class="sm:basis-full md:flex md:flex-row md:justify-center md:gap-20 ">
            <!-- Nik -->
            <div class="mx-11 md:mx-0">
                <img src="{{url('/img/nik_image.png')}}" alt="cirle holder" class="shrink-0  scale-75 mx-auto sm:shrink-1 sm:scale-100 md:scale-100 hover:scale-105 transition-transform duration-500 delay-50 ease-in-out"/>
                <p class="text-3xl mt-10 font-semibold "/>
                <p class="text-3xl mt-10 font-semibold"> Nik Cyrell Z. Yabo</p>
                <p class="mt-3 text-custom-subtitle-purple" > Graphic Designer / Motion Graphics / Basic Web Development </p>
                <div class=" mt-6 mb-6 block p-6 max-w-s bg-custom-slight-purple rounded-xl hover:shadow-xl hover:bg-custom-button-purple transition-all duration-200 delay-75">
                    <ul class="sm:text-center md:text-left">
                        <p class="text-2xl font-semibold mb-2"> Expertise </p>
                        <li><i class="fa-solid fa-check"></i><span class="ml-2"> Graphic Design </span></li>
                        <li><i class="fa-solid fa-check"></i><span class="ml-2"> Illustration </span></li>
                        <li><i class="fa-solid fa-check"></i> <span class="ml-2"> UI/UX Design </span></li>
                        <li><i class="fa-solid fa-check"></i><span class="ml-2"> Motion Graphics </span></li>
                        <li><i class="fa-solid fa-check"></i><span class="ml-2"> Video Editing </span></li>
                        <li><i class="fa-solid fa-check"></i><span class="ml-2"> Basic Web Development</span></li>
                    </ul>
                </div>
                <a href="{{route('nik')}}"><button class="mainbutton"> Visit my Porfolio</button></a>
            </div>

            <div class="py-7 md:hidden"></div>
            <!-- Vevien -->
            <div class="mx-11 md:mx-0">
                <img src="{{url('/img/vien_image.png')}}" alt="cirle holder" class="shrink-0  scale-75 mx-auto sm:shrink-1 sm:scale-100 md:scale-100 hover:scale-105 transition-transform duration-500 delay-50 ease-in-out"/>
                <p class="text-3xl mt-10 font-semibold "> Vevien T. Consolacion </p>
                <p class="mt-3 text-custom-subtitle-purple" >Digital Marketing Specialist  / Project Manager / SEO Specialist</p>
                <div class="mt-6 mb-6 block p-6 sm:max-w-s bg-custom-slight-purple rounded-xl hover:shadow-xl hover:bg-custom-button-purple transition-all duration-200 delay-75">
                    <ul class="text-center md:text-left">
                        <p class="text-2xl font-semibold mb-2"> Expertise </p>
                        <li><i class="fa-solid fa-check"></i><span class="ml-2">Digital Marketing</span></li>
                        <li><i class="fa-solid fa-check"></i><span class="ml-2">Search Engine Optimization</span></li>
                        <li><i class="fa-solid fa-check"></i> <span class="ml-2">Project Management </span></li>
                        <li><i class="fa-solid fa-check"></i><span class="ml-2">Analytics Reporting</span></li>
                        <li><i class="fa-solid fa-check"></i><span class="ml-2">KPI Tracking</span></li>
                        <li><i class="fa-solid fa-check"></i><span class="ml-2">Team Manager</span></li>
                    </ul>
                </div>
                <a href="/portfolio/nik"><button class="mainbutton"> Visit my Porfolio</button></a>
            </div>
        </div>
    </div>  
    <!-- End of container -->
</section>
<!-- End of Section -->

<section class="bg-custom-bg-purple py-10">
    <div class="container mx-auto py-20">
        <div class="flex flex-col mx-11 md:mx-0 lg:flex-row justify-center gap-10 align-middle">
            <div class="basis-4/12 gap-20 md:order-last lg:order-first">
                <h2 class="mb-10">A little bit about us <span class="inline-block align-middle"><img src="{{url('/img/lights.png')}}" alt="dots besides title"></span> </h2>
                <p>We are in the same class from college with a BS in Computer Engineering. We graduated in the same year of batch 2019 from the University of Science and Technology of Southern Philippines. Now we are working on a Norway-based company that excels in Digital Marketing. 
                <br><br>Years and accomplishments have passed since we started the company, and we want to use things we learned beyond that. Nik is a designer who knows little about development, and Vevien is a Marketing Manager who leads a team of marketers.</p>
                <a href="/about"><button class="mainbutton mt-10">Read more about us</button></a>
            </div>    

            <div class="basis-4/12 gap-20 order-first">
                <img src="{{url('/img/imgplaceholder.png')}}" alt="cirle holder" class="mr-auto lg:mx-auto hover:scale-105 transition-transform duration-500 delay-50 ease-in-out"/>
            </div>
             <!-- End of Half  -->
        </div>
    </div>
</section>
<!-- End of Section -->

<section class="bg-custom-bg-purple py-10">
    <div class="container mx-auto py-20">
        <div class="flex flex-col mx-11 md:mx-0 lg:flex-row justify-center gap-10">
            <div class="basis-4/12 gap-20">
                <img src="{{url('/img/imgplaceholder.png')}}" alt="cirle holder" class="mr-auto lg:mx-auto hover:scale-105 transition-transform duration-500 delay-50 ease-in-out"/>
            </div>
            <div class="basis-4/12 gap-20">
            <h2 class="mb-10">Our skillset might match your need <span class="inline-block align-middle"><img src="{{url('/img/lights.png')}}" alt="dots besides title"></span> </h2>
                <p>We have experienced many things in 3 years of working in a highly competitive digital marketing space—design practices, Marketing strategies that work, and targeting the proper leads; we have all covered.Hard to find someone that is the master of everything because that person doesn't exist. We might be the missing link to your company.<br><br> We both deliver design, development, and marketing strategies. We also keep track of your stats to make sure we are moving forward 😉</p>
                <div><a href="/contact"><button class="mainbutton mt-10 w-full md:w-auto">See Nik's Portfolio</button></a> <a href="/contact"><button class="mainbutton mt-5 w-full md:w-auto sm:mt-5 md:ml-5">See Vevien's Portfolio</button></a></div>
            </div> <!-- End of Half  -->
        </div>
    </div>
</section>
<!-- End of Section -->

<section class="bg-custom-section-purple py-10">
    <div class="container mx-auto text-center py-20">
        <div class="flex flex-col justify-center mx-11 md:mx-0">
            <h2> Contact us </h2>
            <p> We might have the "something" you have been looking for. Want to talk about it? </p>
            <a href="{{route('contact')}}"><button class="mainbutton mt-10">Let's talk</button></a>
        </div>
    </div>
</section>
<!-- End of Section -->

@endsection