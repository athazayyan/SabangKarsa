@extends('layouts.app')

@section('title', 'Destination')

@section('content')
@vite('resources/css/app.css')
<div class="absolute top-0 left-0 w-full h-150 -z-10 mt-0 overflow-hidden rounded-bl-[50px] rounded-br-[50px]">
    <img src="{{ asset('storage/img/carou5.jpg') }}" class="w-full h-150 object-cover" alt="">
</div>
<div class="pt-10 mr-50 ml-50 mt-50">
    <h2 class="text-5xl font-black mb-4 text-white">Destinasi</h2>
</div>


    <!-- Filter Section -->
    <section class="py-8 mt-40">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <h2 class="text-5xl text-white font-bold mb-4 md:mb-0"> Destinasi</h2>
                <div class="flex flex-wrap gap-4">
                    <button class="px-4 py-2 rounded bg-amber-400 hover:bg-amber-500 transition">Semua</button>
                    <button class="px-4 py-2 rounded bg-gray-200 hover:bg-gray-300 transition">Pantai</button>
                    <button class="px-4 py-2 rounded bg-gray-200 hover:bg-gray-300 transition">Gunung</button>
                    <button class="px-4 py-2 rounded bg-gray-200 hover:bg-gray-300 transition">Diving</button>
                    <button class="px-4 py-2 rounded bg-gray-200 hover:bg-gray-300 transition">Sejarah</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Destinations Grid -->
    <section class="py-12">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Destination 1 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-lg image-card animate-on-scroll">
                    <a href="destination-detail.html">
                        <div class="relative">
                            <img src="{{ asset('storage/img/carou6.jpg') }}" alt="Pantai Iboih" class="w-full h-64 object-cover">
                            <span class="absolute top-4 left-4 bg-amber-400 text-black text-xs font-bold px-3 py-1 rounded">PANTAI</span>
                            <div class="absolute bottom-0 left-0 right-0 p-4 caption-overlay">
                                <h3 class="text-white font-bold text-xl">PANTAI IBOIH</h3>
                                <div class="flex items-center mt-2">
                                    <div class="flex text-amber-400">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <span class="text-white ml-2">4.5/5</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="p-6">
                        <p class="text-gray-700 mb-4">Pantai eksotis dengan pasir putih dan perairan jernih yang sempurna untuk snorkeling dan diving. Terkenal dengan keindahan terumbu karangnya.</p>
                        <div class="flex items-center justify-between">
                            <a href="destination-detail.html" class="text-amber-500 font-medium hover:text-amber-600 transition">Lihat Detail <i class="fas fa-arrow-right ml-1"></i></a>
                            <div class="flex items-center">
                                <i class="fas fa-map-marker-alt text-gray-500 mr-1"></i>
                                <span class="text-gray-500 text-sm">15 km dari pusat kota</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Destination 2 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-lg image-card animate-on-scroll">
                    <a href="destination-detail.html">
                        <div class="relative">
                            <img src="{{ asset('storage/img/carou7.jpg') }}" alt="Tugu Kilometer Nol" class="w-full h-64 object-cover">
                            <span class="absolute top-4 left-4 bg-amber-400 text-black text-xs font-bold px-3 py-1 rounded">SEJARAH</span>
                            <div class="absolute bottom-0 left-0 right-0 p-4 caption-overlay">
                                <h3 class="text-white font-bold text-xl">TUGU KILOMETER NOL</h3>
                                <div class="flex items-center mt-2">
                                    <div class="flex text-amber-400">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <span class="text-white ml-2">4.0/5</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="p-6">
                        <p class="text-gray-700 mb-4">Titik awal pengukuran jarak di Indonesia yang berada di ujung barat nusantara. Lokasi ikonik yang sering dikunjungi untuk berfoto.</p>
                        <div class="flex items-center justify-between">
                            <a href="destination-detail.html" class="text-amber-500 font-medium hover:text-amber-600 transition">Lihat Detail <i class="fas fa-arrow-right ml-1"></i></a>
                            <div class="flex items-center">
                                <i class="fas fa-map-marker-alt text-gray-500 mr-1"></i>
                                <span class="text-gray-500 text-sm">5 km dari pusat kota</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Destination 3 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-lg image-card animate-on-scroll">
                    <a href="destination-detail.html">
                        <div class="relative">
                            <img src="{{ asset('storage/img/carou8.jpg') }}" alt="Pantai Sumur Tiga" class="w-full h-64 object-cover">
                            <span class="absolute top-4 left-4 bg-amber-400 text-black text-xs font-bold px-3 py-1 rounded">PANTAI</span>
                            <div class="absolute bottom-0 left-0 right-0 p-4 caption-overlay">
                                <h3 class="text-white font-bold text-xl">PANTAI SUMUR TIGA</h3>
                                <div class="flex items-center mt-2">
                                    <div class="flex text-amber-400">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <span class="text-white ml-2">4.9/5</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="p-6">
                        <p class="text-gray-700 mb-4">Pantai yang terkenal dengan pasir putihnya yang lembut dan air laut yang jernih. Tempat ideal untuk berenang dan bersantai.</p>
                        <div class="flex items-center justify-between">
                            <a href="destination-detail.html" class="text-amber-500 font-medium hover:text-amber-600 transition">Lihat Detail <i class="fas fa-arrow-right ml-1"></i></a>
                            <div class="flex items-center">
                                <i class="fas fa-map-marker-alt text-gray-500 mr-1"></i>
                                <span class="text-gray-500 text-sm">10 km dari pusat kota</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Destination 4 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-lg image-card animate-on-scroll">
                    <a href="destination-detail.html">
                        <div class="relative">
                            <img src="{{ asset('storage/img/carou9.jpg') }}" alt="Pulau Rubiah" class="w-full h-64 object-cover">
                            <span class="absolute top-4 left-4 bg-amber-400 text-black text-xs font-bold px-3 py-1 rounded">DIVING</span>
                            <div class="absolute bottom-0 left-0 right-0 p-4 caption-overlay">
                                <h3 class="text-white font-bold text-xl">PULAU RUBIAH</h3>
                                <div class="flex items-center mt-2">
                                    <div class="flex text-amber-400">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <span class="text-white ml-2">4.7/5</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="p-6">
                        <p class="text-gray-700 mb-4">Surga snorkeling dan diving dengan terumbu karang yang cantik dan keanekaragaman biota laut yang menakjubkan.</p>
                        <div class="flex items-center justify-between">
                            <a href="destination-detail.html" class="text-amber-500 font-medium hover:text-amber-600 transition">Lihat Detail <i class="fas fa-arrow-right ml-1"></i></a>
                            <div class="flex items-center">
                                <i class="fas fa-map-marker-alt text-gray-500 mr-1"></i>
                                <span class="text-gray-500 text-sm">18 km dari pusat kota</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Destination 5 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-lg image-card animate-on-scroll">
                    <a href="destination-detail.html">
                        <div class="relative">
                            <img src="{{ asset('storage/img/carou10.jpg') }}" alt="Benteng Jepang" class="w-full h-64 object-cover">
                            <span class="absolute top-4 left-4 bg-amber-400 text-black text-xs font-bold px-3 py-1 rounded">SEJARAH</span>
                            <div class="absolute bottom-0 left-0 right-0 p-4 caption-overlay">
                                <h3 class="text-white font-bold text-xl">BENTENG JEPANG</h3>
                                <div class="flex items-center mt-2">
                                    <div class="flex text-amber-400">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <span class="text-white ml-2">3.8/5</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="p-6">
                        <p class="text-gray-700 mb-4">Situs bersejarah yang merupakan peninggalan pada masa pendudukan Jepang. Menawarkan pemandangan indah dari ketinggian.</p>
                        <div class="flex items-center justify-between">
                            <a href="destination-detail.html" class="text-amber-500 font-medium hover:text-amber-600 transition">Lihat Detail <i class="fas fa-arrow-right ml-1"></i></a>
                            <div class="flex items-center">
                                <i class="fas fa-map-marker-alt text-gray-500 mr-1"></i>
                                <span class="text-gray-500 text-sm">8 km dari pusat kota</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Destination 6 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-lg image-card animate-on-scroll">
                    <a href="destination-detail.html">
                        <div class="relative">
                            <img src="{{ asset('storage/img/carou11.jpg') }}" alt="Gunung Api Sabang" class="w-full h-64 object-cover">
                            <span class="absolute top-4 left-4 bg-amber-400 text-black text-xs font-bold px-3 py-1 rounded">GUNUNG</span>
                            <div class="absolute bottom-0 left-0 right-0 p-4 caption-overlay">
                                <h3 class="text-white font-bold text-xl">GUNUNG API SABANG</h3>
                                <div class="flex items-center mt-2">
                                    <div class="flex text-amber-400">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <span class="text-white ml-2">4.2/5</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="p-6">
                        <p class="text-gray-700 mb-4">Gunung berapi yang sudah tidak aktif. Menawarkan trek pendakian yang menantang dengan pemandangan laut yang spektakuler dari puncaknya.</p>
                        <div class="flex items-center justify-between">
                            <a href="destination-detail.html" class="text-amber-500 font-medium hover:text-amber-600 transition">Lihat Detail <i class="fas fa-arrow-right ml-1"></i></a>
                            <div class="flex items-center">
                                <i class="fas fa-map-marker-alt text-gray-500 mr-1"></i>
                                <span class="text-gray-500 text-sm">12 km dari pusat kota</span>
                            </div>
                        </div>
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
        </div>
    </section>

    <!-- Subscribe Section -->
    <section class="py-16 bg-gray-900 mt-40">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto text-center text-white">
                <h2 class="text-3xl font-bold mb-6 animate-on-scroll">DAPATKAN INFORMASI TERBARU</h2>
                <p class="mb-8 animate-on-scroll">Berlangganan newsletter kami untuk mendapatkan update destinasi terbaru dan promo menarik</p>
                <div class="flex flex-col md:flex-row gap-4 justify-center animate-on-scroll ">
                    <input type="email" placeholder="email@contoh.com" class="px-4 py-3 rounded flex-grow md:max-w-md text-white newsletter-input border-2 border-white">
                    <button class="bg-amber-400 text-black px-6 py-3 rounded hover:bg-amber-500 transition font-medium btn-amber">BERLANGGANAN</button>
                </div>
            </div>
        </div>
    </section>

@endsection
