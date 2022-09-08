@extends('layouts.menufooter')
@section('content')
<section class="mb-20 py-20">
    <div class="container mx-auto">
        <div class="flex flex-col lg:flex-row mx-11 md:mx-0">
            <div class="basis-5/12 ml-auto order-last lg:order-first">    
                <p class="font-semibold" style="font-size:20px; color:#C9C3F5;">P O R T F O L I O</p>
                <h1>Vevien T. Consolacion</h1>
                <p class="mt-2 text-custom-subtitle-purple" style="font-size:20px!important;">Graphic Designer / Motion Graphics / Basic Web Development</p>
                <p class="mt-8"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s </p>
                <p class="mt-20 font-normal text-custom-subtitle-purple" style="font-size:20px!important;">Send me a message via email: <a href="mailto:nczyabo@gmail.com"><i class="ml-2 fa-solid fa-envelope"></i></a></p> 
                <button class="mainbutton mt-5 px-11">Get started</button>
                <!-- Contact us -->
            </div>

            <div class="basis-1/2 order-first lg:order-last">
                <img src="{{url('/img/circle_placeholder.svg')}}" alt="image placeholder " class="mr-auto mb-10 lg:mb-0 lg:mx-auto">
            </div>
        </div>
    </div> 
</section>
<!-- Banner End-->

<section class="mb-20 py-20">
    <div class="container mx-auto overflow-auto">
        <div class="flex flex-row justify-evenly items-center bg-custom-slight-purple rounded-3xl shadow-xl">
            <h4 class="text-white">Core Values</h4>
            <img src="{{url('/img/coreval1.png')}}" alt="core value image 1" class="w-30 h-full">
            <p>Lorem Ipsum</p>
            <img src="{{url('/img/coreval2.png')}}" alt="core value image 2" class="w-30 h-full">
            <p>Lorem Ipsum</p>
            <img src="{{url('/img/coreval3.png')}}" alt="core value image 3" class="w-30 h-full">
            <p>Lorem Ipsum</p>
        </div>
    </div> 
</section>
<!-- Small -->

<section class="bg-custom-bg-purple">
    <div class="container mx-auto">
        <div class="flex flex-col mx-11 md:mx-0 lg:flex-row justify-center gap-10">
            <div class="basis-1/2 gap-20 md:order-last lg:order-first">
                <h2 class="mb-10">My Background</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                <a href="/contact"><button class="mainbutton mt-10">Read more about our history</button></a>
            </div>    

            <div class="basis-1/2 gap-20 order-first">
                <img src="{{url('/img/imgplaceholder.png')}}" alt="cirle holder" class="mr-auto lg:mx-auto hover:scale-105 transition-transform duration-500 delay-50 ease-in-out"/>
            </div>
             <!-- End of Half  -->
        </div>
    </div>
</section>

<section class="mb-20 py-20">
    <div class="container mx-auto">
        <div class="flex">
            <div class="basis-8/12 mx-11 md:mx-0">
                <h2 class="mb-10">Software I have experience in</h2>
                <p>I have been in the digital marketing industry since my career started and within those years I have learned several tools and skills sets (Graphic Design and Basic Website Development). </p>
            </div>
            <br>
        </div>

        <div class="mt-5 flex mx-11 md:mx-0">
            <button class="outline outline-custom-yellow text-custom-yellow outline-1 px-5 py-1 rounded-full ">Video/Animation</button> 
            <button class="outline outline-custom-light-blue text-custom-light-blue outline-1 ml-5 px-5 py-1 rounded-full ">Graphic Design/UI&UX</button>
            <button class="outline outline-custom-light-green text-custom-light-green outline-1 ml-5 px-5 py-1 rounded-full ">Development</button>
        </div>

        <div class="grid grid-cols-2 mx-11 md:mx-0 md:grid-cols-3 lg:grid-cols-6 mt-10 content-center">
            <div class="mx-auto">
                <img src="{{url('/img/nik_ps.png')}}" alt="Photoshop logo">
                <p class="text-center">Photoshop</p>
            </div>
            <div class="mx-auto">
                <img src="{{url('/img/nik_ai.png')}}" alt="Illustrator logo">
                <p class="text-center">Illustrator</p>
            </div>
            <div class="mx-auto">
                <img src="{{url('/img/nik_xd.png')}}" alt="XD logo">
                <p class="text-center">XD</pc>
            </div>
            <div class="mx-auto">
                <img src="{{url('/img/nik_pr.png')}}" alt="Adobe Premier logo">
                <p class="text-center">Premier</p>
            </div>
            <div class="mx-auto">
                <img src="{{url('/img/nik_ae.png')}}" alt="After Effects logo">
                <p class="text-center">After Effects</p>
            </div>
            <div class="mx-auto">
                <img src="{{url('/img/nik_c4d.png')}}" alt="Cinema 4D logo">
                <p class="text-center">Cinema 4D</p>
            </div>
            <div class="mx-auto">
                <img src="{{url('/img/nik_id.png')}}" alt="Indesign logo">
                <p class="text-center">Indesign</p>
            </div>
            <div class="mx-auto">
                <img src="{{url('/img/nik_lr.png')}}" alt="Lightroom logo">
                <p class="text-center">Lightroom</p>
            </div>
            <div class="mx-auto">
                <img src="{{url('/img/nik_html.png')}}" alt="Html css and js logo">
                <p class="text-center">Html,CSS and JS</p>
            </div>
            <div class="mx-auto">
                <img src="{{url('/img/nik_tw.png')}}" alt="TailwindCSS logo">
                <p class="text-center">TailwindCSS</p>
            </div>
            <div class="mx-auto">
                <img src="{{url('/img/nik_laravel.png')}}" alt="Laravel logo">
                <p class="text-center">Laravel</p>
            </div>
            <div class="mx-auto">
                <img src="{{url('/img/nik_au.png')}}" alt="Audition logo">
                <p class="text-center">Audition</p>
            </div>
        </div> 
</section>
<!-- End Section -->

<section class="mb-5 py-20">
    <div class="container mx-auto">
<div class="mx-11 md:mx-0">
       <h2>Some of the project I am involved</h2> 
       <p class="mt-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
       <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-x-7 mt-10">
            <div class="mx-auto text-center">
                <img src="{{url('/img/p_image.png')}}" alt="Image placeholder">
                <p>Enter your Prjoect Description here</p>
            </div>
            <div class="mx-auto text-center mb-10">
                <img src="{{url('/img/p_image.png')}}" alt="Image placeholder">
                <p >Enter your Project Description here</p>
            </div>        
            <div class="mx-auto text-center mb-10">
                <img src="{{url('/img/p_image.png')}}" alt="Image placeholder">
                <p>Enter your Project Description here</p>
            </div> 
            <!-- second half -->
            <div class="mx-auto text-center">
                <img src="{{url('/img/p_image.png')}}" alt="Image placeholder">
                <p>Enter your Project Description here</p>
            </div>
            <div class="mx-auto text-center">
                <img src="{{url('/img/p_image.png')}}" alt="Image placeholder">
                <p>Enter your Project Description here</p>
            </div>        
            <div class="mx-auto text-center">
                <img src="{{url('/img/p_image.png')}}" alt="Image placeholder">
                <p>Enter your Project Description here</p>
            </div> 
        </div>
    </div>
</section>

<section>
    <div class="my-10 container mx-auto text-center py-10 bg-custom-section-purple rounded-xl shadow-xl">
        <div class="flex flex-col justify-center mx-11 md:mx-0">
            <p> See my entire portfolio </p>
            <a href="https://www.behance.net/nikyabo"><button class="mainbutton mt-10">Visit my Behance <i class="fa-brands fa-behance"></i></button></a>
        </div>
    </div> 
</section>
<!-- Footer -->
@endsection