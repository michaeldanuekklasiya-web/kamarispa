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
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-16 mt-[100px]">
        <!-- Massage Services -->
        <div class="mb-16">
            <h2 class="text-2xl sm:text-3xl font-bold text-[#5b1641] mb-8 text-center" data-en="Massage Services" data-id="Layanan Pijat">
                Massage Services
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                
                <!-- Balinese Massage -->
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-[#5b1641] mb-3" data-en="Balinese Massage" data-id="Pijat Bali">Balinese Massage</h3>
                        <p class="text-gray-600 text-sm mb-4" data-en="Traditional Balinese Healing Ritual To Reduce Stress & Rebalance Body" data-id="Ritual Penyembuhan Tradisional Bali Untuk Mengurangi Stres & Menyeimbangkan Tubuh">
                            Traditional Balinese Healing Ritual To Reduce Stress & Rebalance Body
                        </p>
                        <div class="space-y-2">
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-600" data-en="60 mins" data-id="60 menit">60 mins</span>
                                <span class="font-semibold text-[#5b1641]">Rp 250k</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-600" data-en="90 mins" data-id="90 menit">90 mins</span>
                                <span class="font-semibold text-[#5b1641]">Rp 350k</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Deep Tissue -->
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-[#5b1641] mb-3" data-en="Deep Tissue" data-id="Deep Tissue">Deep Tissue</h3>
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
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-[#5b1641] mb-3" data-en="Aromatherapy Massage" data-id="Pijat Aromaterapi">Aromatherapy Massage</h3>
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
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-[#5b1641] mb-3" data-en="Traditional Massage" data-id="Pijat Tradisional">Traditional Massage</h3>
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
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-[#5b1641] mb-3" data-en="Thai Massage" data-id="Pijat Thai">Thai Massage</h3>
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
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-[#5b1641] mb-3" data-en="Lomi-Lomi Massage" data-id="Pijat Lomi-Lomi">Lomi-Lomi Massage</h3>
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
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-[#5b1641] mb-3" data-en="Hot Stone" data-id="Hot Stone">Hot Stone</h3>
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
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-[#5b1641] mb-3" data-en="Lymphatic Drainage" data-id="Lymphatic Drainage">Lymphatic Drainage</h3>
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
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-[#5b1641] mb-3" data-en="Shiatsu Massage" data-id="Pijat Shiatsu">Shiatsu Massage</h3>
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
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-[#5b1641] mb-3" data-en="Massage & Body Scrub" data-id="Pijat & Body Scrub">Massage & Body Scrub</h3>
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
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-[#5b1641] mb-3" data-en="Four Hand Massage" data-id="Pijat Empat Tangan">Four Hand Massage</h3>
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
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-[#5b1641] mb-3" data-en="Foot Massage" data-id="Pijat Kaki">Foot Massage</h3>
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
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-[#5b1641] mb-3" data-en="Facial Acupressure" data-id="Akupresur Wajah">Facial Acupressure</h3>
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
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-[#5b1641] mb-3" data-en="Mani Pedi Cure" data-id="Mani Pedi Cure">Mani Pedi Cure</h3>
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
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-[#5b1641] mb-3" data-en="Waxing" data-id="Waxing">Waxing</h3>
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
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-[#5b1641] mb-3" data-en="Creambath" data-id="Creambath">Creambath</h3>
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
        <div class="bg-gradient-to-br from-[#5b1641] to-[#7e295e] rounded-2xl p-8 sm:p-12 text-center text-white">
            <h2 class="text-2xl sm:text-3xl font-bold mb-4" data-en="Ready to Book Your Service?" data-id="Siap Memesan Layanan Anda?">
                Ready to Book Your Service?
            </h2>
            <p class="text-lg mb-8 opacity-90" data-en="Contact us now to schedule your professional massage and spa treatment at home" data-id="Hubungi kami sekarang untuk menjadwalkan perawatan pijat dan spa profesional di rumah">
                Contact us now to schedule your professional massage and spa treatment at home
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="https://wa.me/+6285929893713" target="_blank"
                    class="bg-white text-[#5b1641] px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition duration-300" data-en="BOOK NOW" data-id="BOOKING">
                    BOOK NOW
                </a>
                <a href="tel:+6285929893713"
                    class="border-2 border-white text-white px-8 py-3 rounded-full font-semibold hover:bg-white hover:text-[#5b1641] transition duration-300" data-en="CALL NOW" data-id="HUBUNGI SEKARANG">
                    CALL NOW
                </a>
            </div>
        </div>
    </div>

    <div>
        @include('includes.footer2')
    </div>

    <!-- Floating WhatsApp Icon -->
    <a href="https://wa.me/6285929893713" target="_blank" class="fixed bottom-20 right-4 bg-green-500 text-white p-3 rounded-full shadow-lg hover:bg-green-600 transition duration-300 z-50">
        <i class="fab fa-whatsapp text-xl"></i>
    </a>

    <!-- Back to Top Button -->
    <button onclick="scrollToTop()" class="fixed bottom-4 right-4 bg-gray-800 text-white p-3 rounded-full shadow-lg hover:bg-gray-900 transition duration-300 z-50">
        <i class="fas fa-arrow-up text-xl"></i>
    </button>

    <script>
        function scrollToTop() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</body>

</html>
