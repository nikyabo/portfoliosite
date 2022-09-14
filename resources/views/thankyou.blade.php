@extends('layouts.menufooter')
@section('content')


<section class="py-20 bg-custom-bg-purple">
    <div class="container mx-auto text-center py-36">
        <i class="fa-solid fa-badge-check fa-8x" ></i>
        <h1> Thank you for submitting. </h1>
        <p class="mb-10">We will talk get back to you in 24 hours through your email.</p>
        <a href="{{route('home')}}" class="underline hover:text-custom-button-purple hover:transition-all duration-200">Go back to homepage</a>
    </div> 
</section>
<!-- Banner End-->

@endsection
<!-- Footer -->