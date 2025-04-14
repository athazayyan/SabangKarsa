@extends('layouts.app')

@section('title', 'About')

@section('content')
@vite('resources/css/app.css')
<div class="absolute top-0 left-0 w-full h-150 -z-10 mt-0 overflow-hidden rounded-bl-[50px] rounded-br-[50px]">
    <video autoplay loop muted playsinline class="w-full h-150 object-cover">
        <source src="{{ asset('storage/video/videobg.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</div>
<div class="pt-10 mr-50 ml-50 mt-50">
    <h2 class="text-5xl font-black mb-4 text-white">About Us</h2>
</div>


    <!-- Vision & Mission -->
    <section class="py-16 bg-gray-900 text-white mt-40 ml-50 mr-50 rounded-3xl">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16 animate-on-scroll">
                <h2 class="text-3xl font-black mb-6">VISI & MISI</h2>
                <p>Komitmen kami untuk memajukan pariwisata Sabang secara berkelanjutan</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div class="bg-gray-800 p-8 rounded-lg animate-on-scroll">
                    <div class="w-16 h-16 bg-amber-400 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-eye text-black text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-black mb-4 text-center">Visi</h3>
                    <p class="text-center mb-6">Menjadi platform wisata terdepan yang menghubungkan wisatawan dengan keindahan Sabang, mendukung ekonomi lokal, dan mempromosikan pariwisata berkelanjutan.</p>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-amber-400 mt-1 mr-3"></i>
                            <span>Menjadikan Sabang sebagai destinasi wisata utama di Indonesia bagian barat</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-amber-400 mt-1 mr-3"></i>
                            <span>Mengembangkan ekosistem pariwisata yang berkelanjutan dan ramah lingkungan</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-amber-400 mt-1 mr-3"></i>
                            <span>Menciptakan pengalaman wisata yang berkesan bagi setiap pengunjung</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-gray-800 p-8 rounded-lg animate-on-scroll">
                    <div class="w-16 h-16 bg-amber-400 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-bullseye text-black text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-center">Misi</h3>
                    <p class="text-center mb-6">Menghadirkan layanan terbaik untuk memudahkan wisatawan menjelajahi Sabang sekaligus mendukung masyarakat lokal.</p>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-amber-400 mt-1 mr-3"></i>
                            <span>Menyediakan informasi lengkap dan akurat tentang destinasi wisata di Sabang</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-amber-400 mt-1 mr-3"></i>
                            <span>Menghubungkan wisatawan dengan penyedia layanan lokal terbaik dan terpercaya</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-amber-400 mt-1 mr-3"></i>
                            <span>Memberdayakan masyarakat lokal melalui peluang ekonomi dalam industri pariwisata</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-amber-400 mt-1 mr-3"></i>
                            <span>Mendukung praktik pariwisata yang menjaga kelestarian alam dan budaya Sabang</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-amber-400 mt-1 mr-3"></i>
                            <span>Meningkatkan kualitas layanan melalui edukasi dan pelatihan</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!-- Our Partners -->
    <section class="py-16  ml-50 mr-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16 animate-on-scroll">
                <h2 class="text-3xl font-bold mb-6">MITRA KAMI</h2>
                <p class="text-gray-700 max-w-3xl mx-auto">Bekerja sama dengan berbagai pihak untuk menghadirkan pengalaman wisata terbaik di Sabang</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 gap-6 md:gap-12 items-center justify-center content-center">
                <div class="bg-white rounded-lg p-6 shadow-md flex items-center justify-center h-32 animate-on-scroll">
                    <img src="{{ asset('storage/img/LOGO_PEMKO_SABANG_333.png') }}" alt="Partner Logo" class="max-h-full">
                </div>
                <div class="bg-white rounded-lg p-6 shadow-md flex items-center justify-center h-32 animate-on-scroll">
                    <img src="{{ asset('storage/img/dinaspwsbg.jpeg') }}" alt="Partner Logo" class="max-h-full rounded-2xl">
                </div>
                <div class="bg-white rounded-lg p-6 shadow-md flex items-center justify-center h-32 animate-on-scroll">
                    <img src="{{ asset('storage/img/piyoh.jpg') }}" alt="Partner Logo" class="max-h-full">
                </div>
                <div class="bg-white rounded-lg p-6 shadow-md flex items-center justify-center h-32 animate-on-scroll">
                    <img src="{{ asset('storage/img/agam.jpg') }}" alt="Partner Logo" class="max-h-full">
                </div>
                <div class="bg-white rounded-lg p-6 shadow-md flex items-center justify-center h-32 animate-on-scroll">
                    <img src="{{ asset('storage/img/disbpr.jpg') }}" alt="Partner Logo" class="max-h-full">
                </div>
                <div class="bg-white rounded-lg p-6 shadow-md flex items-center justify-center h-32 animate-on-scroll">
                    <img src="{{ asset('storage/img/logo-aceh.jpg') }}" alt="Partner Logo" class="max-h-full">
                </div>

            </div>
        </div>
    </section>

    <!-- Contact Us -->
    <section class="py-16 ml-50 mr-50 ">
        <div class="container mx-auto px-6">
            <div class="bg-white rounded-lg shadow-xl overflow-hidden animate-on-scroll border-2">
                <div class="md:flex">
                    <div class="md:w-1/2 bg-gray-900 p-8 text-white">
                        <h2 class="text-3xl font-bold mb-6">Hubungi Kami</h2>
                        <p class="mb-8">Kami siap menjawab pertanyaan dan membantu Anda merencanakan perjalanan terbaik di Sabang</p>

                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="mr-4 bg-amber-400 w-10 h-10 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-map-marker-alt text-black"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold mb-1">Alamat</h3>
                                    <p class="text-gray-300">Jl. Perdagangan No. 23, Kota Sabang, Aceh, Indonesia</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="mr-4 bg-amber-400 w-10 h-10 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-phone text-black"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold mb-1">Telepon</h3>
                                    <p class="text-gray-300">+62 852-7706-3536</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="mr-4 bg-amber-400 w-10 h-10 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-envelope text-black"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold mb-1">Email</h3>
                                    <p class="text-gray-300">info@SabangKarsa.com</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="mr-4 bg-amber-400 w-10 h-10 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-clock text-black"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold mb-1">Jam Operasional</h3>
                                    <p class="text-gray-300">Senin - Jumat: 09:00 - 17:00</p>
                                    <p class="text-gray-300">Sabtu: 09:00 - 15:00</p>
                                    <p class="text-gray-300">Minggu: Tutup</p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8">
                            <h3 class="font-bold mb-4">Ikuti Kami</h3>
                            <div class="flex space-x-4">
                                <a href="#" class="bg-white text-gray-900 w-10 h-10 rounded-full flex items-center justify-center hover:bg-amber-400 transition">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="bg-white text-gray-900 w-10 h-10 rounded-full flex items-center justify-center hover:bg-amber-400 transition">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="bg-white text-gray-900 w-10 h-10 rounded-full flex items-center justify-center hover:bg-amber-400 transition">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="#" class="bg-white text-gray-900 w-10 h-10 rounded-full flex items-center justify-center hover:bg-amber-400 transition">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="md:w-1/2 p-8">
                        <h2 class="text-2xl font-bold mb-6">Kirim Pesan</h2>
                        <form>
                            <div class="mb-4">
                                <label for="name" class="block text-gray-700 mb-2">Nama Lengkap</label>
                                <input type="text" id="name" class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:border-amber-400">
                            </div>
                            <div class="mb-4">
                                <label for="email" class="block text-gray-700 mb-2">Email</label>
                                <input type="email" id="email" class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:border-amber-400">
                            </div>
                            <div class="mb-4">
                                <label for="subject" class="block text-gray-700 mb-2">Subjek</label>
                                <input type="text" id="subject" class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:border-amber-400">
                            </div>
                            <div class="mb-6">
                                <label for="message" class="block text-gray-700 mb-2">Pesan</label>
                                <textarea id="message" rows="5" class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:border-amber-400"></textarea>
                            </div>
                            <button type="submit" class="bg-amber-400 text-black px-6 py-3 rounded hover:bg-amber-500 transition font-medium w-full btn-amber">KIRIM PESAN</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


</body>
</html>
@endsection
