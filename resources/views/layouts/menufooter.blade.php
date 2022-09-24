<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="{{url('/img/favicon.png')}}"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="{{url('/img/favicon.png')}}">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
    <title>@yield('title')</title>
    <!-- Jquery and tailwind--> 
    @vite('resources/css/app.css')
    <style>
        html{
            font-family: 'Manrope', sans-serif;  
            background-color:#030316;
            color:#fff;
        }

        p{
            font-size:18px;
            font-weight:400;
        }

        h1{
            font-size:50px;
            font-weight:700;
        }
        h2{
            font-size:40px;
            font-weight:600;
        }
        h4{
            font-size:30px;
            font-weight:600;
        }

        .dropdown {position: relative; display:inline-block;}
        .dropdown-content a {display: block;}
        .dropdown-content {display: none; position:absolute;}
        .dropdown:hover .dropdown-content {transition:all; animation:fade 0.25s ease-in-out; display: block;}

        /* .dropdown2 {position: relative; display:inline-block;}
        .dropdown-content2 a {display: block;}
        .dropdown-content2 {display: none; position:absolute;}
        .dropdown2:hover .dropdown-content2 {transition:all; animation:fade 0.25s ease-in-out; display: block;} */
        
        @keyframes fade {
        0%,100% { opacity: 0 }
        100% { opacity: 1 }
        }

    </style>
<!-- Scripts -->
    <script src="https://kit.fontawesome.com/19d82403b1.js" crossorigin="anonymous"></script>
</head>
<body>
<!-- Small screen nav -->
    <div class="sm:hidden dropdown2 ml-5 flex flex-row justify-end">
        <button onclick="showham()" class="mx-5 mt-5font-bold text-white dropbtn py-5"> <i class="fa-solid fa-bars fa-3x text-white"></i></i></button>
        <!-- dropdown content -->
        <div id="dropday" class="hidden bg-custom-slight-purple rounded-lg shadow-xl overflow-hidden w-1/2 h-screen absolute">
            <span id="xmark" onclick="closeham()" class="hover:bg-red-800 text-end duration-200 pr-5"><i class="fa-light fa-circle-xmark fa-2x py-5 text-white"></i></span>
            <a draggable="false" href="{{route('home')}}" class=" hover:bg-custom-button-purple hover:transition-all duration-500 px-5 py-3">Home</a>
            <a draggable="false" href="{{route('about')}}" class=" hover:bg-custom-button-purple hover:transition-all duration-500 px-5  py-3">About us</a>
            <p class="pl-5 py-3 select-none" style="font-size:16px;">Our Portfolio</p>
            <a draggable="false" href="{{route('nik')}}" class=" hover:bg-custom-button-purple hover:transition-all duration-500 pl-10 py-3">Nik Cyrell Z. Yabo</a>
            <a draggable="false" href="{{route('vien')}}" class=" hover:bg-custom-button-purple hover:transition-all duration-500 pl-10  py-3">Vevien T. Consolacion</a>
            <a draggable="false" href="{{route('blogger')}}" class=" hover:bg-custom-button-purple hover:transition-all duration-500 pl-5 py-3">Blogs</a>
            <button class="fullwidthbuttonmobile">Contact us</button>
        </div>
    </div>

    <!-- Small device content -->
<!-- Medium Screen -->
    <div class="hidden sm:flex">
        <nav class="container flex items-center justify-between mx-auto py-6 select-none">
            <a draggable="false" href="{{route('home')}}"><span class="font-bold text-white"> Home </span></a>
            <a draggable="false" href="{{route('about')}}"><span class="px-6 font-bold text-white"> About us </span></a>
            <div class="dropdown px-3">
                <button class="font-bold text-white dropbtn py-5"> Our Portfolio <i class="checker fa-solid fa-chevron-down"></i></button>
                <!-- dropdown content -->
                <div class="dropdown-content bg-custom-slight-purple rounded-lg shadow-xl overflow-hidden w-52">
                    <a draggable="false" href="{{route('nik')}}" class=" hover:bg-custom-button-purple hover:transition-all duration-500 pl-5 py-3">Nik Yabo</a>
                    <a draggable="false" href="{{route('vien')}}" class=" hover:bg-custom-button-purple hover:transition-all duration-500 pl-5  py-3">Vien Consolacion</a>
                </div>
            </div>
            
            <a draggable="false" href="/blogs"><span class="font-bold text-white px-5"> Blogs </span></a>
            <span class="ml-auto"><a draggable="false" href="{{route('contact')}}"><button class="mainbutton"> Contact us </button></a></span>
        </nav>
    </div>
            
        </div>
    @yield('content')


    <footer class="bg-custom-footer-purple mb-auto">
        <div class="container mx-11 md:mx-auto">
            <div class="grid lg:grid-cols-4 md:grid-cols-2 py-20">
                <!-- Column 1 -->
                <h3 class="font-semibold mb-1 text-slate-500">All rights reserve @2022</h3>
                <!-- Column 2 -->
                <div class="mb-6">
                    <h3 class="font-semibold mb-1 text-slate-500">About</h3>
                    <ul class="list-none mb-0">
                        <li><a href="{{route('about')}}"><span class="hover:text-custom-button-purple transition-colors ease-in-out delay-75 duration-200"> About us</span></a></li>
                    </ul>
                </div>
                <!-- Column 3 -->
                <div class="mb-6">
                    <h3 class="font-semibold mb-1 text-slate-500">See our portfolio</h3>
                    <ul class="list-none mb-0">
                        <li><a href="{{route('nik')}}"><span class="hover:text-custom-button-purple transition-colors ease-in-out delay-75 duration-200">Nik Yabo</span></a></li>
                        <li><a href="{{route('vien')}}"><span class="hover:text-custom-button-purple transition-colors ease-in-out delay-75 duration-200">Vien Consolacion</span></a></li>
                    </ul>
                </div>
                <!-- Column 4 -->
                <div class="mb-6">
                    <h3 class="font-semibold mb-1 text-slate-500">Learn</h3>
                    <ul class="list-none mb-0">
                        <li><a href="{{route('blogger')}}"><span class="hover:text-custom-button-purple transition-colors ease-in-out delay-75 duration-200">Read our blogs </span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Parent div of all -->
    </footer>


    <!-- hamburger menu script -->
    <script>
        function showham(){
            document.getElementById("dropday").classList.remove("hidden");
            document.getElementById("dropday").classList.add("flex","flex-col");
        }

        function closeham(){
            document.getElementById("dropday").classList.remove("flex","flex-col");
            document.getElementById("dropday").classList.add("hidden");


        }
    </script>
</body>
</html>