@extends('layouts.menufooter')
@section('content')
<section class="py-20 bg-custom-bg-purple">
    <div class="container mx-auto text-center py-36">
        <i class="fa-solid fa-badge-check fa-8x" ></i>
        <h1 class="mb-20"> Oops! The link you have entered doesn't exist</h1>
        <a href="{{route('home')}}" class="underline hover:text-custom-button-purple hover:transition-all duration-200 text-2xl">Go back to homepage</a>
    </div> 
</section>
@endsection