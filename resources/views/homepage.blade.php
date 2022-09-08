@extends('layouts.menufooter')

@section('content')

<section class="mb-20">
    <div class="container text-center mx-auto">
        <h1 class="mx-11 md:mx-0 text-3xl font-bold text-white mt-20 mb-2"> Welcome to our Portfolio website </h1>
        <p class="font-normal mx-11 md:mx-0 text-white mb-20"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
        <div class="sm:basis-full md:flex md:flex-row md:justify-center md:gap-20 ">
            <!-- Nik -->
            <div class="mx-11 md:mx-0">
                <img src="{{url('/img/circle_placeholder.svg')}}" alt="cirle holder" class="shrink-0  scale-75 mx-auto sm:shrink-1 sm:scale-100 md:scale-100 hover:scale-105 transition-transform duration-500 delay-50 ease-in-out"/>
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
                <img src="{{url('/img/circle_placeholder.svg')}}" alt="cirle holder" class="shrink-0  scale-75 mx-auto sm:shrink-1 sm:scale-100 md:scale-100 hover:scale-105 transition-transform duration-500 delay-50 ease-in-out"/>
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
        <div class="flex flex-col mx-11 md:mx-0 lg:flex-row justify-center gap-10">
            <div class="basis-4/12 gap-20 md:order-last lg:order-first">
                <h2 class="mb-10">A little bit about us <span class="inline-block align-middle"><img src="{{url('/img/lights.png')}}" alt="dots besides title"></span> </h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                <a href="/contact"><button class="mainbutton mt-10">Read more about our history</button></a>
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
            <h2 class="mb-10">A little bit about us <span class="inline-block align-middle"><img src="{{url('/img/lights.png')}}" alt="dots besides title"></span> </h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                <a href="/contact"><button class="mainbutton mt-10">Read more about our history</button></a>
            </div> <!-- End of Half  -->
        </div>
    </div>
</section>
<!-- End of Section -->

<section class="bg-custom-section-purple py-10">
    <div class="container mx-auto text-center py-20">
        <div class="flex flex-col justify-center mx-11 md:mx-0">
            <h2> Contact us </h2>
            <p> We can become your Digital Marketing agency.Want to do business with the both of us? </p>
            <a href="{{route('contact')}}"><button class="mainbutton mt-10">Let's talk</button></a>
        </div>
    </div>
</section>
<!-- End of Section -->

@endsection