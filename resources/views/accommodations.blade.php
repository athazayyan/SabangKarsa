@extends('layouts.app')

@section('title', 'accomodations')

@section('content')
@vite('resources/css/app.css')
<section>
    <div class="absolute top-0 left-0 w-full h-150 -z-10 mt-0 overflow-hidden rounded-bl-[50px] rounded-br-[50px]">
       <img src="{{ asset('storage/img/penginapan/6.jpg') }}"  class="w-full h-150 object-cover" alt="">
    </div>
    <div class="pt-10 mr-50 ml-50 mt-30">
        <h2 class="text-5xl font-black mb-4 text-white">Penginapan</h2>

    </div>
    </section>


    <!-- Search Section -->
    <section class="py-8 bg-white shadow-md">
        <div class="container mx-auto px-6">
            <form class="max-w-5xl mx-auto animate-on-scroll">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div>
                        <label for="destination" class="block text-gray-700 mb-2">Lokasi</label>
                        <select id="destination" class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:border-amber-400">
                            <option value="">Semua area</option>
                            <option value="iboih">Iboih</option>
                            <option value="gapang">Gapang</option>
                            <option value="sumur-tiga">Sumur Tiga</option>
                            <option value="kota">Kota Sabang</option>
                            <option value="anoi-itam">Anoi Itam</option>
                        </select>
                    </div>
                    <div>
                        <label for="check-in" class="block text-gray-700 mb-2">Check-in</label>
                        <input type="date" id="check-in" class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:border-amber-400">
                    </div>
                    <div>
                        <label for="check-out" class="block text-gray-700 mb-2">Check-out</label>
                        <input type="date" id="check-out" class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:border-amber-400">
                    </div>
                    <div>
                        <label for="guests" class="block text-gray-700 mb-2">Tamu & Kamar</label>
                        <select id="guests" class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:border-amber-400">
                            <option value="1-1">1 Tamu, 1 Kamar</option>
                            <option value="2-1">2 Tamu, 1 Kamar</option>
                            <option value="3-1">3 Tamu, 1 Kamar</option>
                            <option value="4-2">4 Tamu, 2 Kamar</option>
                            <option value="more">Lebih banyak</option>
                        </select>
                    </div>
                </div>
                <div class="mt-6 flex justify-center">
                    <button type="submit" class="bg-amber-400 text-black px-8 py-3 rounded hover:bg-amber-500 transition font-medium btn-amber">CARI PENGINAPAN</button>
                </div>
            </form>
        </div>
    </section>

    <!-- Filter Section -->
    <section class="py-8">
        <div class="container mx-auto px-6">
            <div class="flex flex-wrap gap-4 justify-center">
                <button class="px-4 py-2 rounded bg-amber-400 hover:bg-amber-500 transition text-black">Semua (24)</button>
                <button class="px-4 py-2 rounded bg-gray-200 hover:bg-gray-300 transition">Resort (5)</button>
                <button class="px-4 py-2 rounded bg-gray-200 hover:bg-gray-300 transition">Hotel (8)</button>
                <button class="px-4 py-2 rounded bg-gray-200 hover:bg-gray-300 transition">Cottage (6)</button>
                <button class="px-4 py-2 rounded bg-gray-200 hover:bg-gray-300 transition">Homestay (5)</button>
                <button class="flex items-center px-4 py-2 rounded bg-gray-200 hover:bg-gray-300 transition">
                    <i class="fas fa-sliders-h mr-2"></i> Filter Lanjutan
                </button>
            </div>
        </div>
    </section>

    <!-- Accommodations Grid -->
    <section class="py-8">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Accommodation 1 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-lg animate-on-scroll">
                    <a href="accommodation-detail.html" class="block">
                        <div class="relative">
                            <img src="{{ asset('storage/img/penginapan/1.jpg') }}" alt="Sabang Hill Resort" class="w-full h-64 object-cover">
                            <span class="absolute top-4 left-4 bg-amber-400 text-black text-xs font-bold px-3 py-1 rounded">RESORT</span>
                            <span class="absolute top-4 right-4 bg-white text-black text-xs font-bold px-3 py-1 rounded flex items-center">
                                <i class="fas fa-star text-amber-400 mr-1"></i>4.5
                            </span>
                        </div>
                    </a>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-bold text-xl">Sabang Hill Resort</h3>
                            <div class="text-amber-500 font-bold">Rp 1.500.000<span class="text-gray-600 font-normal">/malam</span></div>
                        </div>
                        <div class="flex items-center text-sm text-gray-600 mb-4">
                            <i class="fas fa-map-marker-alt text-amber-500 mr-1"></i>
                            <span>Iboih, 500m dari pantai</span>
                        </div>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded flex items-center">
                                <i class="fas fa-wifi mr-1"></i> WiFi
                            </span>
                            <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded flex items-center">
                                <i class="fas fa-swimming-pool mr-1"></i> Kolam Renang
                            </span>
                            <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded flex items-center">
                                <i class="fas fa-utensils mr-1"></i> Restoran
                            </span>
                        </div>
                        <p class="text-gray-700 mb-4 text-sm">Resort mewah dengan pemandangan laut yang menakjubkan. Dilengkapi dengan kolam renang infinity dan restoran yang menyajikan hidangan lokal dan internasional.</p>
                        <div class="flex justify-between items-center">
                            <a href="accommodation-detail.html" class="text-amber-500 font-medium hover:text-amber-600 transition">Lihat Detail <i class="fas fa-arrow-right ml-1"></i></a>
                            <button class="bg-amber-400 text-black px-4 py-2 rounded hover:bg-amber-500 transition text-sm btn-amber">Pesan</button>
                        </div>
                    </div>
                </div>

                <!-- Accommodation 2 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-lg animate-on-scroll">
                    <a href="accommodation-detail.html" class="block">
                        <div class="relative">
                            <img src="{{ asset('storage/img/penginapan/2.jpg') }}" alt="Iboih Beach Cottage" class="w-full h-64 object-cover">
                            <span class="absolute top-4 left-4 bg-amber-400 text-black text-xs font-bold px-3 py-1 rounded">COTTAGE</span>
                            <span class="absolute top-4 right-4 bg-white text-black text-xs font-bold px-3 py-1 rounded flex items-center">
                                <i class="fas fa-star text-amber-400 mr-1"></i>4.0
                            </span>
                        </div>
                    </a>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-bold text-xl">Iboih Beach Cottage</h3>
                            <div class="text-amber-500 font-bold">Rp 600.000<span class="text-gray-600 font-normal">/malam</span></div>
                        </div>
                        <div class="flex items-center text-sm text-gray-600 mb-4">
                            <i class="fas fa-map-marker-alt text-amber-500 mr-1"></i>
                            <span>Iboih, tepat di pantai</span>
                        </div>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded flex items-center">
                                <i class="fas fa-wifi mr-1"></i> WiFi
                            </span>
                            <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded flex items-center">
                                <i class="fas fa-coffee mr-1"></i> Sarapan
                            </span>
                            <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded flex items-center">
                                <i class="fas fa-snorkel mr-1"></i> Penyewaan Alat Snorkel
                            </span>
                        </div>
                        <p class="text-gray-700 mb-4 text-sm">Cottage nyaman tepat di tepi pantai dengan akses langsung ke area snorkeling. Menawarkan bungalow kayu tradisional dengan balkon menghadap ke laut.</p>
                        <div class="flex justify-between items-center">
                            <a href="accommodation-detail.html" class="text-amber-500 font-medium hover:text-amber-600 transition">Lihat Detail <i class="fas fa-arrow-right ml-1"></i></a>
                            <button class="bg-amber-400 text-black px-4 py-2 rounded hover:bg-amber-500 transition text-sm btn-amber">Pesan</button>
                        </div>
                    </div>
                </div>

                <!-- Accommodation 3 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-lg animate-on-scroll">
                    <a href="accommodation-detail.html" class="block">
                        <div class="relative">
                            <img src="{{ asset('storage/img/penginapan/3.jpg') }}" alt="Hotel Sabang Baru" class="w-full h-64 object-cover">
                            <span class="absolute top-4 left-4 bg-amber-400 text-black text-xs font-bold px-3 py-1 rounded">HOTEL</span>
                            <span class="absolute top-4 right-4 bg-white text-black text-xs font-bold px-3 py-1 rounded flex items-center">
                                <i class="fas fa-star text-amber-400 mr-1"></i>4.8
                            </span>
                        </div>
                    </a>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-bold text-xl">Hotel Sabang Baru</h3>
                            <div class="text-amber-500 font-bold">Rp 800.000<span class="text-gray-600 font-normal">/malam</span></div>
                        </div>
                        <div class="flex items-center text-sm text-gray-600 mb-4">
                            <i class="fas fa-map-marker-alt text-amber-500 mr-1"></i>
                            <span>Pusat Kota Sabang</span>
                        </div>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded flex items-center">
                                <i class="fas fa-wifi mr-1"></i> WiFi
                            </span>
                            <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded flex items-center">
                                <i class="fas fa-utensils mr-1"></i> Restoran
                            </span>
                            <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded flex items-center">
                                <i class="fas fa-spa mr-1"></i> Spa
                            </span>
                        </div>
                        <p class="text-gray-700 mb-4 text-sm">Hotel bintang 3 di pusat kota Sabang dengan akses mudah ke semua atraksi utama. Menawarkan kamar modern dengan fasilitas lengkap dan restoran yang menyajikan hidangan lokal.</p>
                        <div class="flex justify-between items-center">
                            <a href="accommodation-detail.html" class="text-amber-500 font-medium hover:text-amber-600 transition">Lihat Detail <i class="fas fa-arrow-right ml-1"></i></a>
                            <button class="bg-amber-400 text-black px-4 py-2 rounded hover:bg-amber-500 transition text-sm btn-amber">Pesan</button>
                        </div>
                    </div>
                </div>

                <!-- Accommodation 4 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-lg animate-on-scroll">
                    <a href="accommodation-detail.html" class="block">
                        <div class="relative">
                            <img src="{{ asset('storage/img/penginapan/4.jpg') }}" alt="Sumur Tiga Homestay" class="w-full h-64 object-cover">
                            <span class="absolute top-4 left-4 bg-amber-400 text-black text-xs font-bold px-3 py-1 rounded">HOMESTAY</span>
                            <span class="absolute top-4 right-4 bg-white text-black text-xs font-bold px-3 py-1 rounded flex items-center">
                                <i class="fas fa-star text-amber-400 mr-1"></i>3.5
                            </span>
                        </div>
                    </a>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-bold text-xl">Sumur Tiga Homestay</h3>
                            <div class="text-amber-500 font-bold">Rp 350.000<span class="text-gray-600 font-normal">/malam</span></div>
                        </div>
                        <div class="flex items-center text-sm text-gray-600 mb-4">
                            <i class="fas fa-map-marker-alt text-amber-500 mr-1"></i>
                            <span>Sumur Tiga, 300m dari pantai</span>
                        </div>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded flex items-center">
                                <i class="fas fa-wifi mr-1"></i> WiFi
                            </span>
                            <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded flex items-center">
                                <i class="fas fa-coffee mr-1"></i> Sarapan
                            </span>
                            <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded flex items-center">
                                <i class="fas fa-motorcycle mr-1"></i> Sewa Motor
                            </span>
                        </div>
                        <p class="text-gray-700 mb-4 text-sm">Homestay sederhana dengan nuansa kekeluargaan. Pemilik yang ramah akan membantu Anda merencanakan aktivitas dan menyediakan makanan lokal yang otentik.</p>
                        <div class="flex justify-between items-center">
                            <a href="accommodation-detail.html" class="text-amber-500 font-medium hover:text-amber-600 transition">Lihat Detail <i class="fas fa-arrow-right ml-1"></i></a>
                            <button class="bg-amber-400 text-black px-4 py-2 rounded hover:bg-amber-500 transition text-sm btn-amber">Pesan</button>
                        </div>
                    </div>
                </div>

                <!-- Accommodation 5 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-lg animate-on-scroll">
                    <a href="accommodation-detail.html" class="block">
                        <div class="relative">
                            <img src="{{ asset('storage/img/penginapan/5.jpg') }}" alt="Rubiah Island Resort" class="w-full h-64 object-cover">
                            <span class="absolute top-4 left-4 bg-amber-400 text-black text-xs font-bold px-3 py-1 rounded">RESORT</span>
                            <span class="absolute top-4 right-4 bg-white text-black text-xs font-bold px-3 py-1 rounded flex items-center">
                                <i class="fas fa-star text-amber-400 mr-1"></i>4.3
                            </span>
                        </div>
                    </a>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-bold text-xl">Rubiah Island Resort</h3>
                            <div class="text-amber-500 font-bold">Rp 1.200.000<span class="text-gray-600 font-normal">/malam</span></div>
                        </div>
                        <div class="flex items-center text-sm text-gray-600 mb-4">
                            <i class="fas fa-map-marker-alt text-amber-500 mr-1"></i>
                            <span>Pulau Rubiah</span>
                        </div>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded flex items-center">
                                <i class="fas fa-wifi mr-1"></i> WiFi
                            </span>
                            <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded flex items-center">
                                <i class="fas fa-utensils mr-1"></i> Restoran
                            </span>
                            <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded flex items-center">
                                <i class="fas fa-water mr-1"></i> Diving Center
                            </span>
                        </div>
                        <p class="text-gray-700 mb-4 text-sm">Resort eksklusif di Pulau Rubiah dengan akses langsung ke lokasi diving terbaik. Menawarkan bungalow mewah dan pusat diving profesional.</p>
                        <div class="flex justify-between items-center">
                            <a href="accommodation-detail.html" class="text-amber-500 font-medium hover:text-amber-600 transition">Lihat Detail <i class="fas fa-arrow-right ml-1"></i></a>
                            <button class="bg-amber-400 text-black px-4 py-2 rounded hover:bg-amber-500 transition text-sm btn-amber">Pesan</button>
                        </div>
                    </div>
                </div>

                <!-- Accommodation 6 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-lg animate-on-scroll">
                    <a href="accommodation-detail.html" class="block">
                        <div class="relative">
                            <img src="{{ asset('storage/img/penginapan/6.jpg') }}" alt="Gapang Beach Hotel" class="w-full h-64 object-cover">
                            <span class="absolute top-4 left-4 bg-amber-400 text-black text-xs font-bold px-3 py-1 rounded">HOTEL</span>
                            <span class="absolute top-4 right-4 bg-white text-black text-xs font-bold px-3 py-1 rounded flex items-center">
                                <i class="fas fa-star text-amber-400 mr-1"></i>4.2
                            </span>
                        </div>
                    </a>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-bold text-xl">Gapang Beach Hotel</h3>
                            <div class="text-amber-500 font-bold">Rp 750.000<span class="text-gray-600 font-normal">/malam</span></div>
                        </div>
                        <div class="flex items-center text-sm text-gray-600 mb-4">
                            <i class="fas fa-map-marker-alt text-amber-500 mr-1"></i>
                            <span>Gapang, 200m dari pantai</span>
                        </div>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded flex items-center">
                                <i class="fas fa-wifi mr-1"></i> WiFi
                            </span>
                            <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded flex items-center">
                                <i class="fas fa-coffee mr-1"></i> Sarapan
                            </span>
                            <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded flex items-center">
                                <i class="fas fa-swimmer mr-1"></i> Aktivitas Air
                            </span>
                        </div>
                        <p class="text-gray-700 mb-4 text-sm">Hotel modern dekat Pantai Gapang dengan berbagai aktivitas air yang dapat diakses dengan mudah. Menawarkan kamar nyaman dengan balkon pribadi.</p>
                        <div class="flex justify-between items-center">
                            <a href="accommodation-detail.html" class="text-amber-500 font-medium hover:text-amber-600 transition">Lihat Detail <i class="fas fa-arrow-right ml-1"></i></a>
                            <button class="bg-amber-400 text-black px-4 py-2 rounded hover:bg-amber-500 transition text-sm btn-amber">Pesan</button>
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

    <!-- Featured Accommodation -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold mb-12 text-center animate-on-scroll">Penginapan Pilihan</h2>
            <div class="bg-white rounded-lg shadow-xl overflow-hidden animate-on-scroll">
                <div class="md:flex">
                    <div class="md:w-1/2">
                        <img src="{{ asset('storage/img/penginapan/6.jpg') }}" alt="Sabang Blue Ocean Resort" class="w-full h-full object-cover">
                    </div>
                    <div class="md:w-1/2 p-8">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <span class="bg-amber-400 text-black text-xs font-bold px-3 py-1 rounded inline-block mb-2">RESORT MEWAH</span>
                                <h3 class="text-2xl font-bold">Sabang Blue Ocean Resort</h3>
                                <div class="flex text-amber-400 text-sm mt-1">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="text-gray-600 ml-1">5.0 (98 ulasan)</span>
                                </div>
                            </div>
                            <div class="text-amber-500 font-bold text-xl">Rp 2.000.000<span class="text-gray-600 font-normal text-base">/malam</span></div>
                        </div>
                        <div class="flex items-center text-gray-600 mb-6">
                            <i class="fas fa-map-marker-alt text-amber-500 mr-2"></i>
                            <span>Sumur Tiga, dengan akses langsung ke pantai</span>
                        </div>
                        <p class="text-gray-700 mb-6">Resort mewah dengan villa pribadi yang menghadap langsung ke Samudera Hindia. Setiap villa dilengkapi dengan kolam renang pribadi dan layanan butler 24 jam. Nikmati spa premium, restoran fine dining, dan aktivitas air eksklusif.</p>
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded flex items-center">
                                <i class="fas fa-wifi mr-1"></i> WiFi Gratis
                            </span>
                            <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded flex items-center">
                                <i class="fas fa-swimming-pool mr-1"></i> Kolam Renang Pribadi
                            </span>
                            <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded flex items-center">
                                <i class="fas fa-utensils mr-1"></i> Restoran Bintang 5
                            </span>
                            <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded flex items-center">
                                <i class="fas fa-spa mr-1"></i> Spa Premium
                            </span>
                            <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded flex items-center">
                                <i class="fas fa-concierge-bell mr-1"></i> Butler 24 Jam
                            </span>
                        </div>
                        <div class="flex justify-between items-center">
                            <a href="accommodation-detail.html" class="text-amber-500 font-medium hover:text-amber-600 transition">Lihat Detail <i class="fas fa-arrow-right ml-1"></i></a>
                            <button class="bg-amber-400 text-black px-6 py-3 rounded hover:bg-amber-500 transition font-medium btn-amber">Pesan Sekarang</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Accommodation Types -->
    <section class="py-16">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold mb-12 text-center animate-on-scroll">Jenis Penginapan</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Type 1 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-lg group animate-on-scroll">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('storage/img/penginapan/5.jpg') }}" alt="Resort" class="w-full h-60 object-cover transition duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
                            <h3 class="text-white text-2xl font-bold">RESORT</h3>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-700 mb-4">Penginapan mewah dengan berbagai fasilitas premium seperti kolam renang, spa, dan restoran.</p>
                        <a href="#" class="text-amber-500 font-medium hover:text-amber-600 transition">Lihat Semua Resort <i class="fas fa-arrow-right ml-1"></i></a>
                    </div>
                </div>

                <!-- Type 2 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-lg group animate-on-scroll">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('storage/img/penginapan/2.jpg') }}" alt="Hotel" class="w-full h-60 object-cover transition duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
                            <h3 class="text-white text-2xl font-bold">HOTEL</h3>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-700 mb-4">Akomodasi dengan berbagai tipe kamar, layanan kamar, dan fasilitas standar untuk kenyamanan Anda.</p>
                        <a href="#" class="text-amber-500 font-medium hover:text-amber-600 transition">Lihat Semua Hotel <i class="fas fa-arrow-right ml-1"></i></a>
                    </div>
                </div>

                <!-- Type 3 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-lg group animate-on-scroll">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('storage/img/penginapan/3.jpg') }}" alt="Cottage" class="w-full h-60 object-cover transition duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
                            <h3 class="text-white text-2xl font-bold">COTTAGE</h3>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-700 mb-4">Penginapan dengan desain tradisional, biasanya terletak di dekat pantai dengan nuansa yang lebih lokal.</p>
                        <a href="#" class="text-amber-500 font-medium hover:text-amber-600 transition">Lihat Semua Cottage <i class="fas fa-arrow-right ml-1"></i></a>
                    </div>
                </div>

                <!-- Type 4 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-lg group animate-on-scroll">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('storage/img/penginapan/4.jpg') }}" alt="Homestay" class="w-full h-60 object-cover transition duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
                            <h3 class="text-white text-2xl font-bold">HOMESTAY</h3>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-700 mb-4">Penginapan di rumah penduduk lokal yang menawarkan pengalaman otentik dan interaksi dengan masyarakat setempat.</p>
                        <a href="#" class="text-amber-500 font-medium hover:text-amber-600 transition">Lihat Semua Homestay <i class="fas fa-arrow-right ml-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Subscribe Section -->
    <section class="py-16 bg-gray-900">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto text-center text-white">
                <h2 class="text-3xl font-bold mb-6 animate-on-scroll">DAPATKAN PROMO EKSKLUSIF</h2>
                <p class="mb-8 animate-on-scroll">Berlangganan newsletter kami untuk mendapatkan penawaran khusus dan diskon untuk penginapan di Sabang</p>
                <div class="flex flex-col md:flex-row gap-4 justify-center animate-on-scroll">
                    <input type="email" placeholder="email@contoh.com" class="px-4 py-3 rounded flex-grow md:max-w-md text-black newsletter-input">
                    <button class="bg-amber-400 text-black px-6 py-3 rounded hover:bg-amber-500 transition font-medium btn-amber">BERLANGGANAN</button>
                </div>
            </div>
        </div>
    </section>
@endsection
