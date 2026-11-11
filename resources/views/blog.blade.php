<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- SEO Meta Tags -->
    <title data-en="Real Massage Bali Blog - Spa & Wellness Tips | Professional Massage Articles" data-id="Blog Real Massage Bali - Tips Spa & Kesehatan | Artikel Pijat Profesional">Real Massage Bali Blog - Spa & Wellness Tips | Professional Massage Articles</title>
    <meta name="description" data-en="Discover expert tips on spa treatments, massage benefits, wellness advice, and professional massage techniques from Real Massage Bali. Your guide to relaxation and health." data-id="Temukan tips ahli tentang perawatan spa, manfaat pijat, saran kesehatan, dan teknik pijat profesional dari Real Massage Bali. Panduan Anda untuk relaksasi dan kesehatan." content="Discover expert tips on spa treatments, massage benefits, wellness advice, and professional massage techniques from Real Massage Bali. Your guide to relaxation and health.">
    
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
    <div class="bg-gradient-to-br from-pink-50 to-white py-16 sm:py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-[#5b1641] mb-6" data-en="Wellness & Spa Blog" data-id="Blog Kesehatan & Spa">
                Wellness & Spa Blog
            </h1>
            <p class="text-lg sm:text-xl text-gray-600 max-w-3xl mx-auto" data-en="Discover expert tips, wellness advice, and professional insights about massage therapy, spa treatments, and healthy living from Real Massage Bali." data-id="Temukan tips ahli, saran kesehatan, dan wawasan profesional tentang terapi pijat, perawatan spa, dan hidup sehat dari Real Massage Bali.">
                Discover expert tips, wellness advice, and professional insights about massage therapy, spa treatments, and healthy living from Real Massage Bali.
            </p>
        </div>
    </div>

    <!-- Blog Articles Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-16">
        <!-- Featured Article -->
        <div class="mb-16">
            <h2 class="text-2xl sm:text-3xl font-bold text-[#5b1641] mb-8" data-en="Featured Article" data-id="Artikel Unggulan">
                Featured Article
            </h2>
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <div class="md:flex">
                    <div class="md:w-1/2">
                        <img src="{{ asset('img/service/spa.jpg') }}" alt="Benefits of Regular Massage" class="w-full h-64 md:h-full object-cover">
                    </div>
                    <div class="md:w-1/2 p-8">
                        <div class="flex items-center mb-4">
                            <span class="bg-[#5b1641] text-white px-3 py-1 rounded-full text-sm font-semibold" data-en="Wellness" data-id="Kesehatan">Wellness</span>
                            <span class="text-gray-500 text-sm ml-4" data-en="December 15, 2024" data-id="15 Desember 2024">December 15, 2024</span>
                        </div>
                        <h3 class="text-2xl font-bold text-[#5b1641] mb-4" data-en="10 Amazing Benefits of Regular Massage Therapy" data-id="10 Manfaat Luar Biasa dari Terapi Pijat Rutin">
                            10 Amazing Benefits of Regular Massage Therapy
                        </h3>
                        <p class="text-gray-600 mb-6" data-en="Discover how regular massage therapy can transform your physical and mental well-being. From stress reduction to improved circulation, learn why massage should be part of your wellness routine." data-id="Temukan bagaimana terapi pijat rutin dapat mengubah kesejahteraan fisik dan mental Anda. Dari pengurangan stres hingga peningkatan sirkulasi, pelajari mengapa pijat harus menjadi bagian dari rutinitas kesehatan Anda.">
                            Discover how regular massage therapy can transform your physical and mental well-being. From stress reduction to improved circulation, learn why massage should be part of your wellness routine.
                        </p>
                        <a href="{{ url('/blog-detail') }}" class="inline-flex items-center text-[#5b1641] font-semibold hover:text-[#7e295e] transition-colors" data-en="Read More →" data-id="Baca Selengkapnya →">
                            Read More →
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Blog Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Article 1 -->
            <article class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden">
                <img src="{{ asset('img/service/spas (4).jpg') }}" alt="Balinese Massage Techniques" class="w-full h-48 object-cover">
                <div class="p-6">
                    <div class="flex items-center mb-3">
                        <span class="bg-pink-100 text-[#5b1641] px-3 py-1 rounded-full text-sm font-semibold" data-en="Techniques" data-id="Teknik">Techniques</span>
                        <span class="text-gray-500 text-sm ml-4" data-en="Dec 12, 2024" data-id="12 Des 2024">Dec 12, 2024</span>
                    </div>
                    <h3 class="text-xl font-bold text-[#5b1641] mb-3" data-en="The Art of Traditional Balinese Massage" data-id="Seni Pijat Tradisional Bali">
                        The Art of Traditional Balinese Massage
                    </h3>
                    <p class="text-gray-600 text-sm mb-4" data-en="Explore the ancient techniques and healing benefits of traditional Balinese massage, passed down through generations of skilled therapists." data-id="Jelajahi teknik kuno dan manfaat penyembuhan dari pijat tradisional Bali, yang diturunkan melalui generasi terapis terampil.">
                        Explore the ancient techniques and healing benefits of traditional Balinese massage, passed down through generations of skilled therapists.
                    </p>
                    <a href="{{ url('/blog-detail') }}" class="text-[#5b1641] font-semibold hover:text-[#7e295e] transition-colors text-sm" data-en="Read More" data-id="Baca Selengkapnya">
                        Read More
                    </a>
                </div>
            </article>

            <!-- Article 2 -->
            <article class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden">
                <img src="{{ asset('img/service/spas (3).jpg') }}" alt="Home Spa Setup" class="w-full h-48 object-cover">
                <div class="p-6">
                    <div class="flex items-center mb-3">
                        <span class="bg-green-100 text-[#5b1641] px-3 py-1 rounded-full text-sm font-semibold" data-en="Tips" data-id="Tips">Tips</span>
                        <span class="text-gray-500 text-sm ml-4" data-en="Dec 10, 2024" data-id="10 Des 2024">Dec 10, 2024</span>
                    </div>
                    <h3 class="text-xl font-bold text-[#5b1641] mb-3" data-en="Creating Your Perfect Home Spa Experience" data-id="Menciptakan Pengalaman Spa Rumah yang Sempurna">
                        Creating Your Perfect Home Spa Experience
                    </h3>
                    <p class="text-gray-600 text-sm mb-4" data-en="Learn how to transform your home into a relaxing spa sanctuary with these simple tips and professional massage services." data-id="Pelajari cara mengubah rumah Anda menjadi tempat spa yang menenangkan dengan tips sederhana dan layanan pijat profesional ini.">
                        Learn how to transform your home into a relaxing spa sanctuary with these simple tips and professional massage services.
                    </p>
                    <a href="{{ url('/blog-detail') }}" class="text-[#5b1641] font-semibold hover:text-[#7e295e] transition-colors text-sm" data-en="Read More" data-id="Baca Selengkapnya">
                        Read More
                    </a>
                </div>
            </article>

            <!-- Article 3 -->
            <article class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden">
                <img src="{{ asset('img/service/s (4).jpg') }}" alt="Aromatherapy Benefits" class="w-full h-48 object-cover">
                <div class="p-6">
                    <div class="flex items-center mb-3">
                        <span class="bg-purple-100 text-[#5b1641] px-3 py-1 rounded-full text-sm font-semibold" data-en="Aromatherapy" data-id="Aromaterapi">Aromatherapy</span>
                        <span class="text-gray-500 text-sm ml-4" data-en="Dec 8, 2024" data-id="8 Des 2024">Dec 8, 2024</span>
                    </div>
                    <h3 class="text-xl font-bold text-[#5b1641] mb-3" data-en="Essential Oils for Relaxation and Healing" data-id="Minyak Esensial untuk Relaksasi dan Penyembuhan">
                        Essential Oils for Relaxation and Healing
                    </h3>
                    <p class="text-gray-600 text-sm mb-4" data-en="Discover the power of essential oils in massage therapy and how they can enhance your relaxation and healing experience." data-id="Temukan kekuatan minyak esensial dalam terapi pijat dan bagaimana mereka dapat meningkatkan pengalaman relaksasi dan penyembuhan Anda.">
                        Discover the power of essential oils in massage therapy and how they can enhance your relaxation and healing experience.
                    </p>
                    <a href="{{ url('/blog-detail') }}" class="text-[#5b1641] font-semibold hover:text-[#7e295e] transition-colors text-sm" data-en="Read More" data-id="Baca Selengkapnya">
                        Read More
                    </a>
                </div>
            </article>

            <!-- Article 4 -->
            <article class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden">
                <img src="{{ asset('img/service/s (2).jpg') }}" alt="Stress Relief" class="w-full h-48 object-cover">
                <div class="p-6">
                    <div class="flex items-center mb-3">
                        <span class="bg-blue-100 text-[#5b1641] px-3 py-1 rounded-full text-sm font-semibold" data-en="Health" data-id="Kesehatan">Health</span>
                        <span class="text-gray-500 text-sm ml-4" data-en="Dec 5, 2024" data-id="5 Des 2024">Dec 5, 2024</span>
                    </div>
                    <h3 class="text-xl font-bold text-[#5b1641] mb-3" data-en="How Massage Therapy Reduces Stress and Anxiety" data-id="Bagaimana Terapi Pijat Mengurangi Stres dan Kecemasan">
                        How Massage Therapy Reduces Stress and Anxiety
                    </h3>
                    <p class="text-gray-600 text-sm mb-4" data-en="Scientific research shows that regular massage therapy can significantly reduce cortisol levels and improve mental well-being." data-id="Penelitian ilmiah menunjukkan bahwa terapi pijat rutin dapat secara signifikan mengurangi kadar kortisol dan meningkatkan kesejahteraan mental.">
                        Scientific research shows that regular massage therapy can significantly reduce cortisol levels and improve mental well-being.
                    </p>
                    <a href="{{ url('/blog-detail') }}" class="text-[#5b1641] font-semibold hover:text-[#7e295e] transition-colors text-sm" data-en="Read More" data-id="Baca Selengkapnya">
                        Read More
                    </a>
                </div>
            </article>

            <!-- Article 5 -->
            <article class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden">
                <img src="{{ asset('img/service/s (3).jpg') }}" alt="Hot Stone Therapy" class="w-full h-48 object-cover">
                <div class="p-6">
                    <div class="flex items-center mb-3">
                        <span class="bg-orange-100 text-[#5b1641] px-3 py-1 rounded-full text-sm font-semibold" data-en="Therapy" data-id="Terapi">Therapy</span>
                        <span class="text-gray-500 text-sm ml-4" data-en="Dec 3, 2024" data-id="3 Des 2024">Dec 3, 2024</span>
                    </div>
                    <h3 class="text-xl font-bold text-[#5b1641] mb-3" data-en="The Healing Power of Hot Stone Massage" data-id="Kekuatan Penyembuhan Pijat Hot Stone">
                        The Healing Power of Hot Stone Massage
                    </h3>
                    <p class="text-gray-600 text-sm mb-4" data-en="Learn about the therapeutic benefits of hot stone massage and how heated basalt stones can provide deep muscle relief." data-id="Pelajari tentang manfaat terapeutik pijat hot stone dan bagaimana batu basalt yang dipanaskan dapat memberikan pereda otot yang mendalam.">
                        Learn about the therapeutic benefits of hot stone massage and how heated basalt stones can provide deep muscle relief.
                    </p>
                    <a href="{{ url('/blog-detail') }}" class="text-[#5b1641] font-semibold hover:text-[#7e295e] transition-colors text-sm" data-en="Read More" data-id="Baca Selengkapnya">
                        Read More
                    </a>
                </div>
            </article>

            <!-- Article 6 -->
            <article class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden">
                <img src="{{ asset('img/service/spa.jpg') }}" alt="Foot Reflexology" class="w-full h-48 object-cover">
                <div class="p-6">
                    <div class="flex items-center mb-3">
                        <span class="bg-yellow-100 text-[#5b1641] px-3 py-1 rounded-full text-sm font-semibold" data-en="Reflexology" data-id="Refleksologi">Reflexology</span>
                        <span class="text-gray-500 text-sm ml-4" data-en="Dec 1, 2024" data-id="1 Des 2024">Dec 1, 2024</span>
                    </div>
                    <h3 class="text-xl font-bold text-[#5b1641] mb-3" data-en="Foot Reflexology: Ancient Healing for Modern Wellness" data-id="Refleksologi Kaki: Penyembuhan Kuno untuk Kesehatan Modern">
                        Foot Reflexology: Ancient Healing for Modern Wellness
                    </h3>
                    <p class="text-gray-600 text-sm mb-4" data-en="Discover how foot reflexology can stimulate healing throughout your entire body by targeting specific pressure points on your feet." data-id="Temukan bagaimana refleksologi kaki dapat merangsang penyembuhan di seluruh tubuh Anda dengan menargetkan titik-titik tekanan tertentu di kaki Anda.">
                        Discover how foot reflexology can stimulate healing throughout your entire body by targeting specific pressure points on your feet.
                    </p>
                    <a href="{{ url('/blog-detail') }}" class="text-[#5b1641] font-semibold hover:text-[#7e295e] transition-colors text-sm" data-en="Read More" data-id="Baca Selengkapnya">
                        Read More
                    </a>
                </div>
            </article>

        </div>

        <!-- Newsletter Signup -->
        <div class="mt-16 bg-gradient-to-br from-[#5b1641] to-[#7e295e] rounded-2xl p-8 sm:p-12 text-center text-white">
            <h2 class="text-2xl sm:text-3xl font-bold mb-4" data-en="Stay Updated with Our Latest Articles" data-id="Tetap Update dengan Artikel Terbaru Kami">
                Stay Updated with Our Latest Articles
            </h2>
            <p class="text-lg mb-8 opacity-90" data-en="Subscribe to our newsletter for wellness tips, spa insights, and exclusive offers" data-id="Berlangganan newsletter kami untuk tips kesehatan, wawasan spa, dan penawaran eksklusif">
                Subscribe to our newsletter for wellness tips, spa insights, and exclusive offers
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 max-w-md mx-auto">
                <input type="email" placeholder="Enter your email" class="flex-1 px-4 py-3 rounded-full text-gray-900 focus:outline-none focus:ring-2 focus:ring-white" data-en-placeholder="Enter your email" data-id-placeholder="Masukkan email Anda">
                <button class="bg-white text-[#5b1641] px-6 py-3 rounded-full font-semibold hover:bg-gray-100 transition duration-300" data-en="Subscribe" data-id="Berlangganan">
                    Subscribe
                </button>
            </div>
        </div>
    </div>

    <div>
        @include('includes.footer2')
    </div>

    <!-- Floating WhatsApp Icon -->
    <a href="https://wa.me/6281220259505" target="_blank" class="fixed bottom-20 right-4 bg-green-500 text-white p-3 rounded-full shadow-lg hover:bg-green-600 transition duration-300 z-50">
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
