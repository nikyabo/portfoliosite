@extends('layouts.menufooter')
@section('title', "Vevien's portfolio")
@section('description',"Have a look at Vevien's portfolio")
@section('keywords',"Portfolio,Digital Marketing, SEO, Marketing Department")
@section('content')


<section class="mb-0 py-20">
    <div class="container mx-auto">
        <div class="flex flex-col lg:flex-row mx-11 md:mx-0">
            <div class="basis-5/12 ml-auto order-last lg:order-first">    
                <p class="font-semibold" style="font-size:20px; color:#C9C3F5;">P O R T F O L I O</p>
                <h1>Vevien Consolacion</h1>
                <p class="mt-2 text-custom-subtitle-purple" style="font-size:20px!important;">Digital Marketing Specialist / Project Manager / SEO Specialist</p>
                <p class="mt-8"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s </p>
                <p class="mt-20 font-normal text-custom-subtitle-purple" style="font-size:20px!important;">Send me a message via email: <a href="mailto:consolacionvien@gmail.com"><i class="mx-2 fa-solid fa-envelope"></i></a><a href="https://www.linkedin.com/in/vevien-consolacion-9b20b7187/"><i class="mx-2 fa-brands fa-linkedin"></i></a></p> 
                <a draggable="false" href="{{route('contact')}}"><button class="mainbutton mt-5 px-11">Contact us</button></a>
                <!-- Contact us -->
            </div>

            <div class="basis-1/2 order-first lg:order-last">
                <img src="{{url('/img/Vien_image.png')}}" alt="image placeholder " class="mr-auto mb-10 lg:mb-0 lg:mx-auto">
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
                <p class=" text-center -ml-5">Lorem Ipsum</p>
            </div>
            <div class="flex flex-row content-center items-center -ml-5">
                <img src="{{url('/img/coreval2.png')}}" alt="core value image 1" class="w-30 h-full">
                <p class=" text-center ">Lorem Ipsum</p>
            </div>
            <div class="flex flex-row content-center items-center -ml-5">
                <img src="{{url('/img/coreval3.png')}}" alt="core value image 1" class="w-30 h-full">
                <p class=" text-center ">Lorem Ipsum</p>
            </div>
        </div>
        <!-- Show up on small -->
        <div class="flex flex-col bg-custom-slight-purple shadow-xl xl:mx-auto px-5 py-10 mx-11 rounded-xl lg:hidden">
            <h4 class="text-white text-center">Our core values</h4>
                <div class="px-5">
                    <img src="{{url('/img/coreval1.png')}}" alt="core value image 1" class="mx-auto">
                    <p class=" text-center -ml-5">Lorem Ipsum</p>
                
                    <img src="{{url('/img/coreval2.png')}}" alt="core value image 1" class="mx-auto">
                    <p class=" text-center ">Lorem Ipsum</p>
            
                    <img src="{{url('/img/coreval3.png')}}" alt="core value image 1" class="mx-auto">
                    <p class=" text-center ">Lorem Ipsum</p>
                </div>
                
        </div>
    </div> 
</section>
<!-- Small -->

<section class="bg-custom-bg-purple">
    <div class="container mx-auto">
        <div class="flex flex-col mx-11 md:mx-auto lg:flex-row justify-center gap-10">
            <div class="basis-1/2 gap-20 md:order-last lg:order-first">
                <h2 class="mb-10">My Background</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                <!-- <a href="/contact"><button class="mainbutton mt-10">Read more about our history</button></a> -->
            </div>    

            <div class="basis-1/2 gap-20 order-first">
                <img src="{{url('/img/imgplaceholder.png')}}" alt="cirle holder" class="mr-auto md:mx-auto"/>
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

        <div class="mt-5 flex flex-col sm:flex-row mx-11 md:mx-0">
            <button id="all" class="bg-white text-black outline-1 mt-5 sm:ml-5 px-3 py-1 rounded-full">All</button>
            <button id="campaign" class="outline outline-custom-yellow text-custom-yellow outline-1 mt-5 sm:ml-5 px-3 py-1 rounded-full">Campaign tools</button> 
            <button id="seo" class="outline outline-custom-light-blue text-custom-light-blue outline-1 mt-5 sm:ml-5 px-3 py-1 rounded-full ">SEO tools</button>
            <button id="project" class="outline outline-custom-light-green text-custom-light-green outline-1 sm:ml-5 mt-5 px-3 py-1 rounded-full ">Project Management</button>
        </div>

        <div class="grid grid-cols-2 mx-11 md:mx-0 md:grid-cols-3 lg:grid-cols-6 mt-10 content-center">
        <div class="campaigntag mx-auto">
                <img src="{{url('/img/vien_mbs.png')}}" alt="Linkedin Campaign manager logo">
                <p class="text-center">Meta business suite</p>
            </div>
            <div class="campaigntag mx-auto">
                <img src="{{url('/img/vien_linkedinads.png')}}" alt="Linkedin Campaign manager logo">
                <p class="text-center">Linkedin ads</p>
            </div>
            <div class="campaigntag mx-auto">
                <img src="{{url('/img/vien_googleads.png')}}" alt="Google ads logo">
                <p class="text-center">Google ads</pc>
            </div>
            <div class="campaigntag mx-auto">
                <img src="{{url('/img/vien_bigmarker.png')}}" alt="Big Marker logo">
                <p class="text-center">Big Marker</p>
            </div>
            <div class="seotag mx-auto">
                <img src="{{url('/img/vien_semrush.png')}}" alt="Semrush logo">
                <p class="text-center">Semrush</p>
            </div>
            <div class="seotag mx-auto">
                <img src="{{url('/img/vien_ubersuggest.png')}}" alt="Screaming frog logo">
                <p class="text-center">Ubersuggest</p>
            </div>
            <div class="seotag mx-auto">
                <img src="{{url('/img/vien_screamingfrog.png')}}" alt="Screaming frog logo">
                <p class="text-center">Screaming frog</p>
            </div>
            <div class="seotag mx-auto">
                <img src="{{url('/img/vien_gkeywordplanner.png')}}" alt="Google keyword planner logo">
                <p class="text-center">Google keyword planner</p>
            </div>
            <div class="seotag mx-auto">
                <img src="{{url('/img/vien_agency360.png')}}" alt="Agency 360 logo">
                <p class="text-center">Agency 360</p>
            </div>
            <div class="seotag mx-auto">
                <img src="{{url('/img/vien_ganalytics.png')}}" alt="Agency 360 logo">
                <p class="text-center">Agency 360</p>
            </div>
            <div class="seotag mx-auto">
                <img src="{{url('/img/vien_gsearchconsole.png')}}" alt="Data studio logo">
                <p class="text-center">Google Search Console</p>
            </div>
            <div class="seotag mx-auto">
                <img src="{{url('/img/vien_gdatastudio.png')}}" alt="Data studio logo">
                <p class="text-center">Google Data studio</p>
            </div>
            <div class="pmtag mx-auto">
                <img src="{{url('/img/vien_monday.png')}}" alt="Monday.com logo">
                <p class="text-center">Monday</p>
            </div>
            <div class="pmtag mx-auto">
                <img src="{{url('/img/vien_mteams.png')}}" alt="Microsoft Teams logo">
                <p class="text-center">Microsoft Teams</p>
            </div>
            <div class="pmtag mx-auto">
                <img src="{{url('/img/vien_office365.png')}}" alt="Microsoft Office logo">
                <p class="text-center">Office 365</p>
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