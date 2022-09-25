@extends('layouts.menufooter')
@section('title', 'Our Blogs')
@section('description',"Read our blogs relating to digital marketing, SEO, design and development")
@section('keywords',"Portfolio, Design, Web Development, Marketi    ng Department")
@section('content')
<section class="py-20 bg-custom-bg-purple">
    <div class="container mx-auto text-center py-36">
        <i class="fa-solid fa-badge-check fa-8x" ></i>
        <h1 class="mb-10 mx-11 md:mx-auto"> Blogs coming soon</h1>
        <p class="mb-5">Under construction</p>
        <a href="{{route('home')}}" class="underline hover:text-custom-button-purple hover:transition-all duration-200"><button class="mainbutton">Go back to homepage</button></a>
    </div> 
</section>
@endsection