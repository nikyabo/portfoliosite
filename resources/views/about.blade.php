@extends('layouts.menufooter')
@section('title', 'About us')
@section('content')
<section class="mb-0 py-20 bg-custom-bg-purple">
    <div class="container mx-auto">
        <div class="flex flex-col lg:flex-row mx-11 md:mx-0">
            <div class="basis-5/12 ml-auto order-last lg:order-first">    
                <p class="font-semibold" style="font-size:20px; color:#C9C3F5;">P O R T F O L I O</p>
                <h1>Crossed paths during school years, ended up here.</h1>
                <!-- <p class="mt-2 text-custom-subtitle-purple" style="font-size:20px!important;">Graphic Designer / Motion Graphics / Basic Web Development</p> -->
                <p class="mt-8"> We have the same degree of <strong> Bachelor of Science in Computer Engineering,</strong> and after graduation, we both ended up in a Digital Marketing agency firm. Since then, we have honed our skills to be where we at today! </p>
                <!-- <p class="mt-20 font-normal text-custom-subtitle-purple" style="font-size:20px!important;">Send me a message via email: <a href="mailto:nczyabo@gmail.com"><i class="mx-2 fa-solid fa-envelope"></i></a></a><a href="https://www.linkedin.com/in/nikyabo/"><i class="mx-2 fa-brands fa-linkedin"></i></a></p>  -->
                <a draggable="false" href="{{route('nik')}}"><button class="fullwidthbuttonmobile lg:mainbutton md:w-full mx-auto lg:w-auto mt-5 md:px-11">See Nik's Portfolio</button></a> 
                <a draggable="false" href="{{route('vien')}}"><button class="fullwidthbuttonmobile lg:mainbutton mt-5 mx-auto md:w-full lg:w-auto xl:mx-4 px-11">See Vevien's Portfolio</button></a>
                <!-- Contact us -->
            </div> 

            <div class="basis-1/2 order-first lg:order-last">
                <img src="{{url('/img/aboutusphoto.png')}}" alt="image placeholder " class="mr-auto mb-10 lg:mb-0 lg:mx-auto hover:scale-105 duration-200">
            </div>
        </div>
    </div> 
</section>
<!-- ABout us -->
<section class="bg-custom-section-purple sm:py-10 md:py-20">
    <div class="container mx-auto">
        <div class="flex flex-col mx-11 md:mx-auto lg:flex-row justify-center gap-10">
            <div class="basis-1/2 gap-20 md:order-last lg:order-first">
                <h2 class="mb-10">Our background</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                <!-- <a href="/contact"><button class="mainbutton mt-10">Read more about our history</button></a> -->
            </div>    

            <div class="basis-1/2 gap-20 order-first">
                <img src="{{url('/img/imgplaceholder.png')}}" alt="cirle holder" class="mr-auto md:mx-auto hover:scale-105 transition-transform duration-500 delay-50 ease-in-out"/>
            </div>
             <!-- End of Half  -->
        </div>
    </div>
</section>

<!-- Social media section -->
<section class="py-10 bg-custom-bg-purple">
    <div class="container mx-auto text-center py-20">
        <div class="flex flex-col justify-center mx-11 md:mx-0">
            <h2> Follow us on Social media </h2>
            <div class="flex flex-row gap-10 justify-center">
                <div class="flex flex-row justify-center items-center mt-5 bg-slate-900 py-2 px-4 rounded-lg">
                    <p class="text-2xl"> Nik : </p>
                    <a href="https://www.linkedin.com/in/nikyabo/"><i class="mx-1 fa-brands fa-linkedin fa-2xl"></i></a>
                    <a href="mailto:nczyabo@gmail.com"><i class="mx-1 fa-solid fa-envelope fa-2xl"></i></i></a>
                </div>

                <div class="flex flex-row justify-center items-center mt-5 bg-slate-900 py-2 px-4 rounded-lg">
                    <p class="text-2xl"> Vevien : </p>
                    <a href="https://www.linkedin.com/in/vevien-consolacion-9b20b7187/"><i class="mx-1 fa-brands fa-linkedin fa-2xl"></i></a>
                    <a href="mailto:consolacionvien@gmail.com"><i class="mx-1 fa-solid fa-envelope fa-2xl"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Section -->
@endsection