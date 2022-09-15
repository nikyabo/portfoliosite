@extends('layouts.menufooter')
@section('content')
<section class="mb-20 py-20">
    <div class="container mx-auto">
        <div class="flex flex-row justify-center mx-11 md:mx-auto">
            <div class=" bg-custom-slight-purple px-10 py-10 md:w-3/4 lg:w-1/2 rounded shadow-xl">
                <h1>Let's have a chat</h1>
                <p class="mb-5"> No commital just shoot us an email. Let's discuss what you want to do :)</p>
                <div class="flex flex-col">
                    <form action="https://formsubmit.co/nczyabo@gmail.com" method="POST" class="">
                        <!-- input hidden -->
                        <input type="hidden" name="_next" value="{{route('thankyou')}}">
                        <input type="hidden" name="_autoresponse" value="Hi! Thank you for sending a message. Rest assured we have received it and will get to you within 24 hours.">
                        <input type="hidden" name="_subject" value="New submission!">
                        <!--input hidden  -->
                        <label for="email" class="text-gray-500 text-sm">Email Address<span class="text-red-500 text-sm">(required)</span></label>
                        <input type="email" name="email" placeholder="Enter your email" class="block px-2 py-3 w-full text-black outline-2 mb-5 outline-gray-700 rounded" required>
                        
                        <label for="email" class="text-gray-500 text-sm">Your name<span class="text-red-500 text-sm">(required)</span></label>
                        <input type="name" name="name" placeholder="Enter your name" class="block px-2 py-3 w-full text-black mb-5 outline-gray-700 rounded" required>
                        
                        <label for="email" class="text-gray-500 text-sm mt-5">Your Message <span class="text-red-500 text-sm">(required)</span></label>
                        <input type="text" name="What do you want to say?" class="block px-2 py-3 w-full text-black outline-gray-700 rounded" placeholder="What do you want to say?" required>
                        <p class="mt-5">By submitting your inquiry means you have agreed to our <a href="" class="underline">Privacy Policy<a></p>
                        <button type="submit" class="fullwidthbutton mt-5 w-full">Let's talk</button>
                        <span class="inline-block"><span class="inline-block"><p>Social Media:</p><a href="https://www.linkedin.com/in/nikyabo/"><i class="fa-brands fa-linkedin ml-4 mt-5"></i><a></span></span>
                    </form>
                </div>
            </div>
        </div>
    </div> 
</section>
@endsection