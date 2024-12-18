<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <link href="../img/icon3.png" rel="shortcut icon">


    <title>Kamari's Spa</title>
</head>

<body class="bg-gray-50 font-sans leading-normal tracking-normal">
    <div>
        @include('includes.header')
    </div>

    <div>
        @include('home.section1')
    </div>

    {{-- <div>
        @include('home.section2')
    </div> --}}

    <div>
        @include('home.section3')
    </div>

    <div>
        @include('home.section4')
    </div>

    <div>
        @include('home.section5')
    </div>

    <div>
        @include('home.ctabutton')
    </div>

    <div>
        @include('home.contact')
    </div>


    <div class="w-full h-[450px] md:h-[600px]">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31552.137937447107!2d115.12643978826873!3d-8.689909520745706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd246dfe07cc8ff%3A0x5030bfbca82fdd0!2sSeminyak%2C%20Kec.%20Kuta%2C%20Kabupaten%20Badung%2C%20Bali!5e0!3m2!1sid!2sid!4v1734429102577!5m2!1sid!2sid"
            class="w-full h-full border-0" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>


    <div>
        @include('includes.footer2')
    </div>

    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</body>

</html>
