<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- SEO Meta Tags -->
    <title data-en="Real Massage Bali - Professional Spa Services | 24 Hour Home Service" data-id="Real Massage Bali - Layanan Spa Profesional | Pijat Panggilan 24 Jam">Real Massage Bali - Professional Spa Services | 24 Hour Home Service</title>
    <meta name="description" data-en="Professional massage and spa services in Bali. Balinese massage, deep tissue, aromatherapy, hot stone, and more. 24-hour home service available." data-id="Layanan pijat dan spa profesional di Bali. Pijat Bali, deep tissue, aromatherapy, hot stone, dan lainnya. Layanan panggilan 24 jam tersedia." content="Professional massage and spa services in Bali. Balinese massage, deep tissue, aromatherapy, hot stone, and more. 24-hour home service available.">
    
    <!-- Stylesheets -->
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Favicon -->
    <link href="{{ asset('img/icon3.png') }}" rel="shortcut icon">
    <link href="{{ asset('img/icon3.png') }}" rel="icon" type="image/png">
</head>

<body class="bg-gray-50 font-sans leading-normal tracking-normal scroll-smooth">
    <div>
        @include('includes.header')
    </div>

    <!-- Hero Section -->
    <!-- <div class="bg-gradient-to-br from-pink-50 to-white py-16 sm:py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-[#5b1641] mb-6" data-en="Our Professional Services" data-id="Layanan Profesional Kami">
                Our Professional Services
            </h1>
            <p class="text-lg sm:text-xl text-gray-600 max-w-3xl mx-auto" data-en="Experience the finest massage and spa treatments in Bali with our professional therapists. All services available 24/7 at your home." data-id="Rasakan perawatan pijat dan spa terbaik di Bali dengan terapis profesional kami. Semua layanan tersedia 24/7 di rumah Anda.">
                Experience the finest massage and spa treatments in Bali with our professional therapists. All services available 24/7 at your home.
            </p>
        </div>
    </div> -->

    <!-- Services Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12 md:py-16 mt-[80px] sm:mt-[100px]">
        <!-- Massage Services -->
        <div class="mb-12 sm:mb-16">
            <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-[#5b1641] mb-6 sm:mb-8 text-center" data-en="Massage Services" data-id="Layanan Pijat">
                Massage Services
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 md:gap-8">
                
                <!-- Balinese Massage -->
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden">
                    <div class="h-40 sm:h-48 relative overflow-hidden">
                        <img src="{{ asset('img/service/bali.png') }}" alt="Balinese Massage" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black bg-opacity-30 flex items-end">
                            <div class="p-3 sm:p-4 text-white">
                                <h3 class="text-lg sm:text-xl font-bold mb-1" data-en="Balinese Massage" data-id="Pijat Bali">Balinese Massage</h3>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 sm:p-6">
                        <p class="text-gray-600 text-xs sm:text-sm mb-3 sm:mb-4 leading-relaxed" data-en="Traditional Balinese Healing Ritual To Reduce Stress & Rebalance Body" data-id="Ritual Penyembuhan Tradisional Bali Untuk Mengurangi Stres & Menyeimbangkan Tubuh">
                            Traditional Balinese Healing Ritual To Reduce Stress & Rebalance Body
                        </p>
                        <div class="space-y-2">
                            <div class="flex justify-between items-center">
                                <span class="text-xs sm:text-sm text-gray-600" data-en="60 mins" data-id="60 menit">60 mins</span>
                                <span class="font-semibold text-[#5b1641] text-sm sm:text-base">Rp 250k</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-xs sm:text-sm text-gray-600" data-en="90 mins" data-id="90 menit">90 mins</span>
                                <span class="font-semibold text-[#5b1641] text-sm sm:text-base">Rp 350k</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Deep Tissue -->
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden">
                    <div class="h-48 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1544161515-4ab6ce6db874?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
                        <div class="h-full bg-black bg-opacity-30 flex items-end">
                            <div class="p-4 text-white">
                                <h3 class="text-xl font-bold mb-1" data-en="Deep Tissue" data-id="Deep Tissue">Deep Tissue</h3>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm mb-4" data-en="Sport Massage To Relax Tight Muscles Uses Slow and Strong Pressure" data-id="Pijat Olahraga Untuk Merelaksasikan Otot Kencang Menggunakan Tekanan Lambat dan Kuat">
                            Sport Massage To Relax Tight Muscles Uses Slow and Strong Pressure
                        </p>
                        <div class="space-y-2">
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-600" data-en="60 mins" data-id="60 menit">60 mins</span>
                                <span class="font-semibold text-[#5b1641]">Rp 300k</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-600" data-en="90 mins" data-id="90 menit">90 mins</span>
                                <span class="font-semibold text-[#5b1641]">Rp 450k</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Aromatherapy Massage -->
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden">
                    <div class="h-48 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1600334129128-685c5582fd35?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80');">
                        <div class="h-full bg-black bg-opacity-30 flex items-end">
                            <div class="p-4 text-white">
                                <h3 class="text-xl font-bold mb-1" data-en="Aromatherapy Massage" data-id="Pijat Aromaterapi">Aromatherapy Massage</h3>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm mb-4" data-en="Balinese Massage with Aromatherapy" data-id="Pijat Bali dengan Aromaterapi">
                            Balinese Massage with Aromatherapy
                        </p>
                        <div class="space-y-2">
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-600" data-en="60 mins" data-id="60 menit">60 mins</span>
                                <span class="font-semibold text-[#5b1641]">Rp 300k</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-600" data-en="90 mins" data-id="90 menit">90 mins</span>
                                <span class="font-semibold text-[#5b1641]">Rp 450k</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Traditional Massage -->
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden">
                    <div class="h-48 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1596178060671-7a80dc8059ea?q=80&w=1169&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
                        <div class="h-full bg-black bg-opacity-30 flex items-end">
                            <div class="p-4 text-white">
                                <h3 class="text-xl font-bold mb-1" data-en="Traditional Massage" data-id="Pijat Tradisional">Traditional Massage</h3>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm mb-4" data-en="Use palms and thumbs to press on the sore area of the body and relax the muscles" data-id="Menggunakan telapak tangan dan jempol untuk menekan area yang sakit pada tubuh dan merelaksasikan otot">
                            Use palms and thumbs to press on the sore area of the body and relax the muscles
                        </p>
                        <div class="space-y-2">
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-600" data-en="60 mins" data-id="60 menit">60 mins</span>
                                <span class="font-semibold text-[#5b1641]">Rp 230k</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-600" data-en="90 mins" data-id="90 menit">90 mins</span>
                                <span class="font-semibold text-[#5b1641]">Rp 330k</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Thai Massage -->
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden">
                    <div class="h-48 bg-cover bg-center" style="background-image: url('https://plus.unsplash.com/premium_photo-1661682650688-8baab88b32ed?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
                        <div class="h-full bg-black bg-opacity-30 flex items-end">
                            <div class="p-4 text-white">
                                <h3 class="text-xl font-bold mb-1" data-en="Thai Massage" data-id="Pijat Thai">Thai Massage</h3>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm mb-4" data-en="Strong Stretching Massage Without Oil To Release Muscular Tension Improve Joint Pain And Promote Mental Clarity" data-id="Pijat Peregangan Kuat Tanpa Minyak Untuk Melepaskan Ketegangan Otot, Meningkatkan Nyeri Sendi Dan Meningkatkan Kejernihan Mental">
                            Strong Stretching Massage Without Oil To Release Muscular Tension Improve Joint Pain And Promote Mental Clarity
                        </p>
                        <div class="space-y-2">
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-600" data-en="60 mins" data-id="60 menit">60 mins</span>
                                <span class="font-semibold text-[#5b1641]">Rp 350k</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-600" data-en="90 mins" data-id="90 menit">90 mins</span>
                                <span class="font-semibold text-[#5b1641]">Rp 450k</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Lomi-Lomi Massage -->
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden">
                    <div class="h-48 bg-cover bg-center" style="background-image: url('https://plus.unsplash.com/premium_photo-1661582395155-e74bb0d891c8?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
                        <div class="h-full bg-black bg-opacity-30 flex items-end">
                            <div class="p-4 text-white">
                                <h3 class="text-xl font-bold mb-1" data-en="Lomi-Lomi Massage" data-id="Pijat Lomi-Lomi">Lomi-Lomi Massage</h3>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm mb-4" data-en="It is done with gentle and repetitive movements using oil to relax the body" data-id="Dilakukan dengan gerakan lembut dan berulang menggunakan minyak untuk merelaksasikan tubuh">
                            It is done with gentle and repetitive movements using oil to relax the body
                        </p>
                        <div class="space-y-2">
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-600" data-en="60 mins" data-id="60 menit">60 mins</span>
                                <span class="font-semibold text-[#5b1641]">Rp 300k</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-600" data-en="90 mins" data-id="90 menit">90 mins</span>
                                <span class="font-semibold text-[#5b1641]">Rp 450k</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Hot Stone -->
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden">
                    <div class="h-48 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1696841212541-449ca29397cc?q=80&w=735&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
                        <div class="h-full bg-black bg-opacity-30 flex items-end">
                            <div class="p-4 text-white">
                                <h3 class="text-xl font-bold mb-1" data-en="Hot Stone" data-id="Hot Stone">Hot Stone</h3>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm mb-4" data-en="Using basalt stones soaked in hot water to apply to specific areas to relieve pain, stress, and tension" data-id="Menggunakan batu basalt yang direndam dalam air panas untuk diterapkan pada area tertentu untuk meredakan nyeri, stres, dan ketegangan">
                            Using basalt stones soaked in hot water to apply to specific areas to relieve pain, stress, and tension
                        </p>
                        <div class="space-y-2">
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-600" data-en="60 mins" data-id="60 menit">60 mins</span>
                                <span class="font-semibold text-[#5b1641]">Rp 350k</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-600" data-en="90 mins" data-id="90 menit">90 mins</span>
                                <span class="font-semibold text-[#5b1641]">Rp 500k</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Lymphatic Drainage -->
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden">
                    <div class="h-48 bg-cover bg-center" style="background-image: url('https://plus.unsplash.com/premium_photo-1661427137141-e72fa32df261?q=80&w=1171&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
                        <div class="h-full bg-black bg-opacity-30 flex items-end">
                            <div class="p-4 text-white">
                                <h3 class="text-xl font-bold mb-1" data-en="Lymphatic Drainage" data-id="Lymphatic Drainage">Lymphatic Drainage</h3>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm mb-4" data-en="A gentle massage performed to help the body's lymphatic system drain excess lymph fluid from the tissues, thereby reducing swelling" data-id="Pijat lembut yang dilakukan untuk membantu sistem limfatik tubuh mengalirkan kelebihan cairan limfe dari jaringan, sehingga mengurangi pembengkakan">
                            A gentle massage performed to help the body's lymphatic system drain excess lymph fluid from the tissues, thereby reducing swelling
                        </p>
                        <div class="space-y-2">
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-600" data-en="60 mins" data-id="60 menit">60 mins</span>
                                <span class="font-semibold text-[#5b1641]">Rp 400k</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-600" data-en="90 mins" data-id="90 menit">90 mins</span>
                                <span class="font-semibold text-[#5b1641]">Rp 550k</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Shiatsu Massage -->
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden">
                    <div class="h-48 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1723655369333-82ef89fb3570?q=80&w=1219&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
                        <div class="h-full bg-black bg-opacity-30 flex items-end">
                            <div class="p-4 text-white">
                                <h3 class="text-xl font-bold mb-1" data-en="Shiatsu Massage" data-id="Pijat Shiatsu">Shiatsu Massage</h3>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm mb-4" data-en="Relieve Tension And Pain Points Using Fingers Pressure" data-id="Meredakan Ketegangan Dan Titik Nyeri Menggunakan Tekanan Jari">
                            Relieve Tension And Pain Points Using Fingers Pressure
                        </p>
                        <div class="space-y-2">
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-600" data-en="60 mins" data-id="60 menit">60 mins</span>
                                <span class="font-semibold text-[#5b1641]">Rp 300k</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-600" data-en="90 mins" data-id="90 menit">90 mins</span>
                                <span class="font-semibold text-[#5b1641]">Rp 450k</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Massage & Body Scrub -->
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden">
                    <div class="h-48 relative overflow-hidden">
                        <img src="{{ asset('img/service/scrub.png') }}" alt="Balinese Massage" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black bg-opacity-30 flex items-end">
                            <div class="p-4 text-white">
                                <h3 class="text-xl font-bold mb-1" data-en="Massage & Body Scrub" data-id="Pijat & Body Scrub">Massage & Body Scrub</h3>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm mb-4" data-en="Two treatments at once: a massage to relax muscles, reduce tension, improve blood circulation, and relax the body as a whole, as well as a scrub using 100% natural ingredients to remove dead skin cells, cleanse dirt, and smooth the skin" data-id="Dua perawatan sekaligus: pijat untuk merelaksasikan otot, mengurangi ketegangan, meningkatkan sirkulasi darah, dan merelaksasikan tubuh secara keseluruhan, serta scrub menggunakan 100% bahan alami untuk menghilangkan sel kulit mati, membersihkan kotoran, dan melembutkan kulit">
                            Two treatments at once: a massage to relax muscles, reduce tension, improve blood circulation, and relax the body as a whole, as well as a scrub using 100% natural ingredients to remove dead skin cells, cleanse dirt, and smooth the skin
                        </p>
                        <div class="space-y-2">
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-600" data-en="60 mins" data-id="60 menit">60 mins</span>
                                <span class="font-semibold text-[#5b1641]">Rp 350k</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-600" data-en="90 mins" data-id="90 menit">90 mins</span>
                                <span class="font-semibold text-[#5b1641]">Rp 450k</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Four Hand Massage -->
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden">
                    <div class="h-48 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1611073615830-9f76902c10fe?q=80&w=1171&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
                        <div class="h-full bg-black bg-opacity-30 flex items-end">
                            <div class="p-4 text-white">
                                <h3 class="text-xl font-bold mb-1" data-en="Four Hand Massage" data-id="Pijat Empat Tangan">Four Hand Massage</h3>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm mb-4" data-en="Balinese Massage By Two Staffs" data-id="Pijat Bali Oleh Dua Staf">
                            Balinese Massage By Two Staffs
                        </p>
                        <div class="space-y-2">
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-600" data-en="60 mins" data-id="60 menit">60 mins</span>
                                <span class="font-semibold text-[#5b1641]">Rp 500k</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-600" data-en="90 mins" data-id="90 menit">90 mins</span>
                                <span class="font-semibold text-[#5b1641]">Rp 950k</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Foot Massage -->
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden">
                    <div class="h-48 bg-cover bg-center" style="background-image: url('https://plus.unsplash.com/premium_photo-1661868958612-7d52c5fb9647?q=80&w=1074&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
                        <div class="h-full bg-black bg-opacity-30 flex items-end">
                            <div class="p-4 text-white">
                                <h3 class="text-xl font-bold mb-1" data-en="Foot Massage" data-id="Pijat Kaki">Foot Massage</h3>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm mb-4" data-en="Foot massage techniques to relax muscles, improve blood circulation, and reduce body tension, often using certain reflexology points to stimulate other parts of the body" data-id="Teknik pijat kaki untuk merelaksasikan otot, meningkatkan sirkulasi darah, dan mengurangi ketegangan tubuh, sering menggunakan titik-titik refleksologi tertentu untuk merangsang bagian lain dari tubuh">
                            Foot massage techniques to relax muscles, improve blood circulation, and reduce body tension, often using certain reflexology points to stimulate other parts of the body
                        </p>
                        <div class="space-y-2">
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-600" data-en="60 mins" data-id="60 menit">60 mins</span>
                                <span class="font-semibold text-[#5b1641]">Rp 230k</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-600" data-en="90 mins" data-id="90 menit">90 mins</span>
                                <span class="font-semibold text-[#5b1641]">Rp 300k</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Facial Acupressure -->
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden">
                    <div class="h-48 bg-cover bg-center" style="background-image: url('https://plus.unsplash.com/premium_photo-1721961597428-a7efa8028598?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
                        <div class="h-full bg-black bg-opacity-30 flex items-end">
                            <div class="p-4 text-white">
                                <h3 class="text-xl font-bold mb-1" data-en="Facial Acupressure" data-id="Akupresur Wajah">Facial Acupressure</h3>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm mb-4" data-en="Facial acupressure is a facial massage technique that involves applying gentle pressure to certain points" data-id="Akupresur wajah adalah teknik pijat wajah yang melibatkan penerapan tekanan lembut pada titik-titik tertentu">
                            Facial acupressure is a facial massage technique that involves applying gentle pressure to certain points
                        </p>
                        <div class="space-y-2">
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-600" data-en="60 mins" data-id="60 menit">60 mins</span>
                                <span class="font-semibold text-[#5b1641]">Rp 300k</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-600" data-en="90 mins" data-id="90 menit">90 mins</span>
                                <span class="font-semibold text-[#5b1641]">Rp 450k</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Beauty Services -->
        <div class="mb-16">
            <h2 class="text-2xl sm:text-3xl font-bold text-[#5b1641] mb-8 text-center" data-en="Beauty Services" data-id="Layanan Kecantikan">
                Beauty Services
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                
                <!-- Mani Pedi Cure -->
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden">
                    <div class="h-48 bg-cover bg-center" style="background-image: url('https://plus.unsplash.com/premium_photo-1661499249417-c20d6b668469?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
                        <div class="h-full bg-black bg-opacity-30 flex items-end">
                            <div class="p-4 text-white">
                                <h3 class="text-xl font-bold mb-1" data-en="Mani Pedi Cure" data-id="Mani Pedi Cure">Mani Pedi Cure</h3>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm mb-4" data-en="Complete nail care treatment for hands and feet" data-id="Perawatan kuku lengkap untuk tangan dan kaki">
                            Complete nail care treatment for hands and feet
                        </p>
                        <div class="space-y-2">
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-600" data-en="Full Treatment" data-id="Perawatan Lengkap">Full Treatment</span>
                                <span class="font-semibold text-[#5b1641]">Rp 450k</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Waxing -->
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden">
                    <div class="h-48 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1700760934166-4c766d708139?q=80&w=464&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
                        <div class="h-full bg-black bg-opacity-30 flex items-end">
                            <div class="p-4 text-white">
                                <h3 class="text-xl font-bold mb-1" data-en="Waxing" data-id="Waxing">Waxing</h3>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm mb-4" data-en="A method of removing hair from the root by applying a sticky substance such as wax or caramelized sugar to the skin, then pulling it quickly in the opposite direction to hair growth, so that the hair is removed down to the follicle" data-id="Metode menghilangkan rambut dari akar dengan mengoleskan zat lengket seperti lilin atau gula karamel ke kulit, kemudian menariknya dengan cepat ke arah yang berlawanan dengan pertumbuhan rambut, sehingga rambut dihilangkan hingga ke folikel">
                            A method of removing hair from the root by applying a sticky substance such as wax or caramelized sugar to the skin, then pulling it quickly in the opposite direction to hair growth, so that the hair is removed down to the follicle
                        </p>
                        <div class="space-y-2">
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-600" data-en="Regular Waxing" data-id="Waxing Reguler">Regular Waxing</span>
                                <span class="font-semibold text-[#5b1641]">Rp 600k</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-600" data-en="Brazilian Waxing" data-id="Brazilian Waxing">Brazilian Waxing</span>
                                <span class="font-semibold text-[#5b1641]">Rp 800k</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Creambath -->
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden">
                    <div class="h-48 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1638609269267-f0128098a809?q=80&w=818&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
                        <div class="h-full bg-black bg-opacity-30 flex items-end">
                            <div class="p-4 text-white">
                                <h3 class="text-xl font-bold mb-1" data-en="Creambath" data-id="Creambath">Creambath</h3>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm mb-4" data-en="Hair treatment with cream to nourish and strengthen hair" data-id="Perawatan rambut dengan krim untuk menutrisi dan memperkuat rambut">
                            Hair treatment with cream to nourish and strengthen hair
                        </p>
                        <div class="space-y-2">
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-600" data-en="60 mins" data-id="60 menit">60 mins</span>
                                <span class="font-semibold text-[#5b1641]">Rp 250k</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-600" data-en="90 mins" data-id="90 menit">90 mins</span>
                                <span class="font-semibold text-[#5b1641]">Rp 300k</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- CTA Section -->
        <div class="bg-gradient-to-br from-[#5b1641] to-[#7e295e] rounded-2xl p-6 sm:p-8 md:p-12 text-center text-white">
            <h2 class="text-xl sm:text-2xl md:text-3xl font-bold mb-3 sm:mb-4" data-en="Ready to Book Your Service?" data-id="Siap Memesan Layanan Anda?">
                Ready to Book Your Service?
            </h2>
            <p class="text-sm sm:text-base md:text-lg mb-6 sm:mb-8 opacity-90 leading-relaxed" data-en="Contact us now to schedule your professional massage and spa treatment at home" data-id="Hubungi kami sekarang untuk menjadwalkan perawatan pijat dan spa profesional di rumah">
                Contact us now to schedule your professional massage and spa treatment at home
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-3 sm:gap-4">
                <a href="https://wa.me/+6281220259505" target="_blank"
                    class="w-full sm:w-auto bg-white text-[#5b1641] px-6 sm:px-8 py-3 sm:py-4 rounded-full font-semibold hover:bg-gray-100 transition duration-300 text-sm sm:text-base" data-en="BOOK NOW" data-id="BOOKING">
                    BOOK NOW
                </a>
                <a href="tel:+6281220259505"
                    class="w-full sm:w-auto border-2 border-white text-white px-6 sm:px-8 py-3 sm:py-4 rounded-full font-semibold hover:bg-white hover:text-[#5b1641] transition duration-300 text-sm sm:text-base" data-en="CALL NOW" data-id="HUBUNGI SEKARANG">
                    CALL NOW
                </a>
            </div>
        </div>
    </div>

    <div>
        @include('includes.footer2')
    </div>

    <!-- Floating WhatsApp Icon -->
    <a href="https://wa.me/6281220259505" target="_blank" 
        class="fixed bottom-16 sm:bottom-20 right-3 sm:right-4 bg-green-500 text-white p-3 sm:p-4 rounded-full shadow-lg hover:bg-green-600 transition duration-300 z-50 group"
        title="WhatsApp Real Massage Bali - +62 812-2025-9505">
        <i class="fab fa-whatsapp text-lg sm:text-xl"></i>
        <span class="absolute right-full mr-2 sm:mr-3 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">
            Chat WhatsApp - +62 812-2025-9505
        </span>
    </a>

    <!-- Back to Top Button -->
    <button onclick="scrollToTop()" class="fixed bottom-3 sm:bottom-4 right-3 sm:right-4 bg-gray-800 text-white p-3 sm:p-4 rounded-full shadow-lg hover:bg-gray-900 transition duration-300 z-50 group">
        <i class="fas fa-arrow-up text-lg sm:text-xl"></i>
        <span class="absolute right-full mr-2 sm:mr-3 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">
            Back to Top
        </span>
    </button>

    <script>
        function scrollToTop() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</body>

</html>
