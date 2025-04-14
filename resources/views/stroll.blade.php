@extends('layouts.app')

@section('title', 'Stroll & Culiner')

@section('content')
@vite('resources/css/app.css')

<section>
    <!-- Background Video -->
    <div class="absolute top-0 left-0 w-full h-150 -z-10 mt-0 overflow-hidden rounded-bl-[50px] rounded-br-[50px]">
        <video autoplay loop muted playsinline class="w-full h-150 object-cover">
            <source src="{{ asset('storage/video/videobg.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

    <!-- Header -->
    <div class="pt-10 mr-50 ml-50 mt-50">
        <h2 class="text-5xl font-black mb-4 text-white">Stroll & Culiner</h2>
    </div>
<div class="ml-50 mr-50">
    <!-- Category Filter -->
    <div class="container mx-auto px-4 mt-50">
        <div class="flex justify-center space-x-4 mb-8">
            <button class="px-6 py-2 bg-amber-400 text-white rounded-full hover:bg-amber-500 transition duration-300 focus:outline-none" onclick="filterCategory('all')">All</button>
            <button class="px-6 py-2 bg-gray-200 text-gray-800 rounded-full hover:bg-gray-300 transition duration-300 focus:outline-none" onclick="filterCategory('stroll')">Stroll</button>
            <button class="px-6 py-2 bg-gray-200 text-gray-800 rounded-full hover:bg-gray-300 transition duration-300 focus:outline-none" onclick="filterCategory('culiner')">Culiner</button>
        </div>
    </div>

    <!-- Cards Grid -->
    <div class="container mx-auto px-4 pb-16">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Card 1 -->
            <div class="card bg-white rounded-lg shadow-lg overflow-hidden" data-category="stroll">
                <img src="{{ asset('storage/img/carou3.jpg') }}" alt="Stroll Location 1" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Coastal Walkway</h3>
                    <p class="text-gray-600 mb-4">Enjoy a serene walk along the coast with stunning ocean views and fresh sea breeze.</p>
                    <a href="#" class="inline-block px-4 py-2 bg-amber-400 text-white rounded hover:bg-amber-500 transition duration-300">Explore Now</a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="card bg-white rounded-lg shadow-lg overflow-hidden" data-category="culiner">
                <img src="{{ asset('storage/img/carou4.jpg') }}" alt="Culiner Spot 1" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Street Food Market</h3>
                    <p class="text-gray-600 mb-4">Savor local delicacies at the vibrant night market, from spicy noodles to sweet desserts.</p>
                    <a href="#" class="inline-block px-4 py-2 bg-amber-400 text-white rounded hover:bg-amber-500 transition duration-300">Taste Now</a>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="card bg-white rounded-lg shadow-lg overflow-hidden" data-category="stroll">
                <img src="{{ asset('storage/img/carou6.jpg') }}" alt="Stroll Location 2" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Botanical Garden</h3>
                    <p class="text-gray-600 mb-4">Stroll through lush greenery and colorful blooms in this tranquil urban oasis.</p>
                    <a href="#" class="inline-block px-4 py-2 bg-amber-400 text-white rounded hover:bg-amber-500 transition duration-300">Explore Now</a>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="card bg-white rounded-lg shadow-lg overflow-hidden" data-category="culiner">
                <img src="{{ asset('storage/img/carou8.jpg') }}" alt="Culiner Spot 2" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Rooftop Cafe</h3>
                    <p class="text-gray-600 mb-4">Relish gourmet dishes with a panoramic city view at this trendy rooftop spot.</p>
                    <a href="#" class="inline-block px-4 py-2 bg-amber-400 text-white rounded hover:bg-amber-500 transition duration-300">Taste Now</a>
                </div>
            </div>


            <!-- Add more cards as needed -->
        </div>
    </div>
    </div>
</section>

<!-- JavaScript for Category Filtering -->
<script>
    function filterCategory(category) {
        const cards = document.querySelectorAll('.card');
        const buttons = document.querySelectorAll('.container button');

        // Update button styles
        buttons.forEach(button => {
            button.classList.remove('bg-amber-400', 'text-white');
            button.classList.add('bg-gray-200', 'text-gray-800');
        });
        event.target.classList.remove('bg-gray-200', 'text-gray-800');
        event.target.classList.add('bg-amber-400', 'text-white');

        // Filter cards
        cards.forEach(card => {
            if (category === 'all' || card.dataset.category === category) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
    }
</script>

@endsection
