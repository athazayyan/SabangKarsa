@extends('layouts.app')

@section('title', 'agenda')

@section('content')
@vite('resources/css/app.css')

<section>
    <div class="absolute top-0 left-0 w-full h-150 -z-10 mt-0 overflow-hidden rounded-bl-[50px] rounded-br-[50px] bg-amber-950">
        <img src="{{ asset('storage/img/agenda.jpg') }}" class="w-full h-150 object-cover opacity-70 " alt="">
    </div>
    <div class="pt-10 mr-50 ml-50 mt-50">
        <h2 class="text-5xl font-black mb-4 text-white">Agenda</h2>

    </div>
    </section>


<section class="mt-50">
    <div class=" items-center flex justify-center overflow-hidden rounded-2xl m-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d329107.34308610234!2d95.22521858185829!3d5.872294096356269!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3041cf2458af5be9%3A0x20892775b3c98e17!2sPulau%20We!5e0!3m2!1sid!2sid!4v1744604129408!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
</section>
<section class="mt-10 mr-50 ml-50  mb-15">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mx-4">
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="{{ asset('storage/img/carou5.jpg') }}" alt="Sample Agenda 1" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-xl font-bold mb-2">Sabang Sail</h3>
                <p class="text-gray-600 text-sm mb-4">Sabang Sail is an annual event showcasing the beauty and culture of Sabang Island, attracting visitors from around the world.</p>
                <a href="#" class="text-blue-500 hover:underline">Read more</a>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="{{ asset('storage/img/carou7.jpg') }}" alt="Sample Agenda 2" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-xl font-bold mb-2">Open Diving Festival</h3>
                <p class="text-gray-600 text-sm mb-4">The Open Diving Festival is a celebration of underwater exploration, featuring diving competitions, workshops, and marine conservation activities.</p>
                <a href="#" class="text-blue-500 hover:underline">Read more</a>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="{{ asset('storage/img/carou8.jpg') }}" alt="Sample Agenda 3" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-xl font-bold mb-2">Event Tour de Sabang</h3>
                <p class="text-gray-600 text-sm mb-4">Event Tour de Sabang is a cycling event that takes participants through the scenic routes of Sabang, promoting eco-tourism and healthy living.</p>
                <a href="#" class="text-blue-500 hover:underline">Read more</a>
            </div>
        </div>
    </div>
    <!-- Pagination -->
    <div class="flex justify-center mt-12">
        <nav class="flex items-center space-x-2">
            <a href="#" class="px-4 py-2 rounded border border-gray-300 bg-white text-gray-500 hover:bg-gray-50">Sebelumnya</a>
            <a href="#" class="px-4 py-2 rounded border border-amber-400 bg-amber-400 text-black font-medium">1</a>
            <a href="#" class="px-4 py-2 rounded border border-gray-300 bg-white text-gray-700 hover:bg-gray-50">2</a>
            <a href="#" class="px-4 py-2 rounded border border-gray-300 bg-white text-gray-700 hover:bg-gray-50">3</a>
            <a href="#" class="px-4 py-2 rounded border border-gray-300 bg-white text-gray-500 hover:bg-gray-50">Selanjutnya</a>
        </nav>
    </div>
</section>

@endsection
