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
        @include('home.ctabutton')
    </div>

    <div>
        @include('home.contact')
    </div>


    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</body>

</html>
