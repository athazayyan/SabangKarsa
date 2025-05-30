@extends('layouts.app')

@section('title', 'travelkit')

@section('content')
@vite('resources/css/app.css')
<section>
    <div class="absolute top-0 left-0 w-full h-150 bg-amber-950 -z-10 mt-0 overflow-hidden rounded-bl-[50px] rounded-br-[50px]">
        <img src="{{ asset('storage/img/tourkit.jpg') }}" class="w-full opacity-70 h-150 object-cover
" alt="">
    </div>
    <div class="pt-10 mr-50 ml-50 mt-50">
        <h2 class="text-5xl font-black mb-4 text-white">Travel Kit</h2>
    </div>
</section>
<section class="mt-40 ml-50 mr-50">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- E-Book Section -->
        <div class="bg-white shadow-lg rounded-lg p-6">
            <h3 class="text-2xl font-bold mb-4">E-Book</h3>
            <p class="text-gray-700 mb-4">Download our comprehensive travel e-book to guide your journey.</p>
            <a href="{{ asset('storage/files/ebook.pdf') }}" class="bg-amber-400 text-white px-4 py-2 rounded hover:bg-amber-600" download>
                Download E-Book
            </a>
        </div>

        <!-- E-Map Section -->
        <div class="bg-white shadow-lg rounded-lg p-6">
            <h3 class="text-2xl font-bold mb-4">E-Map</h3>
            <p class="text-gray-700 mb-4">Access our detailed e-map to explore the area with ease.</p>
            <a href="{{ asset('storage/files/emap.pdf') }}" class="bg-amber-400 text-white px-4 py-2 rounded hover:bg-amber-600" download>
                Download E-Map
            </a>
        </div>
    </div>
</section>

@endsection
