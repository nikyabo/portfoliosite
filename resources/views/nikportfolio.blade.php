@extends('layouts.menufooter')
@section('title', "Nik's portfolio")
@section('description',"Have a look at Nik's portfolio")
@section('keywords',"Portfolio, Design, Web Development, Marketing Department")
@section('content')


<section class="mb-0 py-20 bg-custom-bg-purple">
    <div class="container mx-auto">
        <div class="flex flex-col lg:flex-row mx-11 md:mx-0">
            <div class="basis-5/12 ml-auto order-last lg:order-first">    
                <p class="font-semibold" style="font-size:20px; color:#C9C3F5;">P O R T F O L I O</p>
                <h1>Nik Cyrell Z. Yabo</h1>
                <p class="mt-2 text-custom-subtitle-purple" style="font-size:20px!important;">Graphic Designer / Motion Graphics / Basic Web Development</p>
                <p class="mt-8"> Hi, I'm Nik, and I love to learn new things constantly. I love new updates and new technologies, be it software or hardware. I started with designing and am now beginning to dwell in the developer's path because I just learned that I love coding so much. It's fun; still new to it, though, but it will get better over time 😄. </p>
                <p class="mt-20 font-normal text-custom-subtitle-purple" style="font-size:20px!important;">Send me a message via email: <a href="mailto:nczyabo@gmail.com"><i class="mx-2 fa-solid fa-envelope"></i></a></a><a href="https://www.linkedin.com/in/nikyabo/"><i class="mx-2 fa-brands fa-linkedin"></i></a></p> 
                <a draggable="false" href="{{route('contact')}}"><button class="mainbutton mt-5 px-11">Contact us</button></a>
                <!-- Contact us -->
            </div>

            <div class="basis-1/2 order-first lg:order-last">
                <img src="{{url('/img/Nik_image.png')}}" alt="image placeholder " class="mr-auto mb-10 lg:mb-0 lg:mx-auto hover:scale-105 duration-200">
            </div>
        </div>
    </div> 
</section>
<!-- Banner End-->

<section class="mb-20 py-20">
    <div class="container mx-auto sm">
        <div class="hidden lg:flex flex-row justify-evenly items-center bg-custom-slight-purple rounded-3xl shadow-xl xl:mx-auto ">
            <h4 class="text-white">Core Values</h4>

            <div class="flex flex-row content-center items-center">
                <img src="{{url('/img/coreval1.png')}}" alt="core value image 1" class="w-30 h-full">
                <p class=" text-center -ml-5">Personal Development</p>
            </div>
            <div class="flex flex-row content-center items-center -ml-5">
                <img src="{{url('/img/coreval2.png')}}" alt="core value image 1" class="w-30 h-full">
                <p class=" text-center ">Compassion</p>
            </div>
            <div class="flex flex-row content-center items-center -ml-5">
                <img src="{{url('/img/coreval3.png')}}" alt="core value image 1" class="w-30 h-full">
                <p class=" text-center ">Constant Evolution</p>
            </div>
        </div>
        <!-- Show up on small -->
        <div class="flex flex-col bg-custom-slight-purple shadow-xl xl:mx-auto px-5 py-10 mx-11 rounded-xl lg:hidden">
            <h4 class="text-white text-center">Core values</h4>
                <div class="px-5">
                    <img src="{{url('/img/coreval1.png')}}" alt="core value image 1" class="mx-auto">
                    <p class=" text-center -ml-5">Personal Development</p>
                
                    <img src="{{url('/img/coreval2.png')}}" alt="core value image 1" class="mx-auto">
                    <p class=" text-center ">Compassion</p>
            
                    <img src="{{url('/img/coreval3.png')}}" alt="core value image 1" class="mx-auto">
                    <p class=" text-center ">Constant Evolution</p>
                </div>
                
        </div>
    </div> 
</section>
<!-- Small -->

<section class="bg-custom-section-purple sm:py-10 md:py-20">
    <div class="container mx-auto">
        <div class="flex flex-col mx-11 md:mx-auto lg:flex-row justify-center gap-10">
            <div class="basis-1/2 gap-20 md:order-last lg:order-first">
                <h2 class="mb-10">My Background</h2>
                <p>I graduated from the University of Science and Technology of Southern Philippines in 2019, holding a Bachelor of Science in Computer Engineering. I learned from this discipline the importance of critical thinking and logic in solving problems in both the virtual and the real worlds. 
                <br><br>
                I have seen different angles in viewing things to have a better foresight of the situation. during my school years, I joined University Digital Arts and honed my Digital arts skills and leadership. It was a wonderful experience working with fellow graphic designers from other courses, and you got to learn leadership and how to deal with people with different attitudes. After graduation, I worked in a digital marketing firm as a designer, which taught me how to work in a professional setting and collaborate with others. 
                <br><br>
                Just now, I was interested in coding, specifically in learning the Laravel framework. After years of infatuation with the framework, I finally started learning this year, and it was an excellent learning experience. Combine all of this, and it's what defines me on why I am where I am today, and for every experience I have had in the past, I am thankful.</p>
                <!-- <a href="/contact"><button class="mainbutton mt-10">Read more about our history</button></a> -->
            </div>    

            <div class="basis-1/2 gap-20 order-first">
                <img src="{{url('/img/imgplaceholder.png')}}" alt="cirle holder" class="mr-auto md:mx-auto hover:scale-105 transition-transform duration-500 delay-50 ease-in-out"/>
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

        <div class="mt-5 flex flex-col sm:flex-row mx-11 md:mx-0 tabs">
            <button id="defaultbtn-1" class="outline outline-white text-white outline-1 mt-5 sm:ml-5 px-3 py-1 rounded-full">All</button>
            <button id="defaultbtn-2" class="outline outline-custom-yellow text-custom-yellow outline-1 mt-5 sm:ml-5 px-3 py-1 rounded-full">Video/Animation</button> 
            <button id="defaultbtn-3" class="outline outline-custom-light-blue text-custom-light-blue outline-1 mt-5 sm:ml-5 px-3 py-1 rounded-full ">Graphic Design/UI&UX</button>
            <button id="defaultbtn-4" class="outline outline-custom-light-green text-custom-light-green outline-1 sm:ml-5 mt-5 px-3 py-1 rounded-full ">Development</button>
        </div>

        <div class="grid grid-cols-2 mx-11 md:mx-0 md:grid-cols-3 lg:grid-cols-6 mt-10 content-center">
            <div class=" cat1 mx-auto">
                <img src="{{url('/img/nik_ps.png')}}" alt="Photoshop logo" class="hover:scale-105 duration-200">
                <p class="text-center">Photoshop</p>
            </div>
            <div class="cat1 mx-auto">
                <img src="{{url('/img/nik_ai.png')}}" alt="Illustrator logo" class="hover:scale-105 duration-200">
                <p class="text-center">Illustrator</p>
            </div>
            <div class="cat1 mx-auto">
                <img src="{{url('/img/nik_xd.png')}}" alt="XD logo" class="hover:scale-105 duration-200">
                <p class="text-center">XD</pc>
            </div>
            <div class="cat2 mx-auto">
                <img src="{{url('/img/nik_pr.png')}}" alt="Adobe Premier logo" class="hover:scale-105 duration-200">
                <p class="text-center">Premier</p>
            </div>
            <div class="cat2 mx-auto">
                <img src="{{url('/img/nik_ae.png')}}" alt="After Effects logo" class="hover:scale-105 duration-200">
                <p class="text-center">After Effects</p>
            </div>
            <div class="cat2 mx-auto">
                <img src="{{url('/img/nik_c4d.png')}}" alt="Cinema 4D logo" class="hover:scale-105 duration-200">
                <p class="text-center">Cinema 4D</p>
            </div>
            <div id="cat1" class="mx-auto">
                <img src="{{url('/img/nik_id.png')}}" alt="Indesign logo" class="hover:scale-105 duration-200">
                <p class="text-center">Indesign</p>
            </div>
            <div class="cat1 mx-auto">
                <img src="{{url('/img/nik_lr.png')}}" alt="Lightroom logo" class="hover:scale-105 duration-200">
                <p class="text-center">Lightroom</p>
            </div>
            <div class="cat3 mx-auto">
                <img src="{{url('/img/nik_html.png')}}" alt="Html css and js logo" class="hover:scale-105 duration-200">
                <p class="text-center">Html,CSS and JS</p>
            </div>
            <div class="cat3 mx-auto">
                <img src="{{url('/img/nik_tw.png')}}" alt="TailwindCSS logo" class="hover:scale-105 duration-200">
                <p class="text-center">TailwindCSS</p>
            </div>
            <div class="cat3 mx-auto">
                <img src="{{url('/img/nik_laravel.png')}}" alt="Laravel logo" class="hover:scale-105 duration-200">
                <p class="text-center">Laravel</p>
            </div>
            <div class="cat2 mx-auto">
                <img src="{{url('/img/nik_au.png')}}" alt="Audition logo" class="hover:scale-105 duration-200">
                <p class="text-center">Audition</p>
            </div>
        </div> 
</section>
<!-- End Section -->

<section class="sm:mb-2 sm:py-5 md:mb-20 md:py-20">
    <div class="container mx-auto">
<div class="mx-11">
       <h2>Some of the project I am involved</h2> 
       <p class="mt-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
       <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-x-7 mt-20">
            <div class="mx-auto text-center mb-10">
                <img src="{{url('/img/p_image.png')}}" alt="Image placeholder">
                <p>Enter your Project Description here</p>
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
            <div class="mx-auto text-center mb-10">
                <img src="{{url('/img/p_image.png')}}" alt="Image placeholder">
                <p>Enter your Project Description here</p>
            </div>
            <div class="mx-auto text-center mb-10">
                <img src="{{url('/img/p_image.png')}}" alt="Image placeholder">
                <p>Enter your Project Description here</p>
            </div>        
            <div class="mx-auto text-center mb-10">
                <img src="{{url('/img/p_image.png')}}" alt="Image placeholder">
                <p>Enter your Project Description here</p>
            </div> 
        </div>
    </div>
</section>

<section class="sm:mb-2 sm:py-11 md:mb-20 md:py-20">
    <div class="container mx-auto text-center py-10 bg-custom-section-purple rounded-xl shadow-xl">
        <div class="flex flex-col justify-center mx-11 md:mx-0">
            <p> See my entire portfolio </p>
            <a href="https://www.behance.net/nikyabo"><button class="mainbutton mt-10">Visit my Behance <i class="fa-brands fa-behance"></i></button></a>
        </div>
    </div> 
</section>
@endsection
<!-- Footer -->