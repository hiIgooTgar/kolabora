<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mona+Sans:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
    <link rel="icon" href="/images/logo-kolabora.png">
    <!-- Swiper -->
     <link rel="stylesheet" href="{{asset('library/swiper/swiper-bundle.min.css')}}">
    <title>Kolabora</title>
    @vite('resources/css/app.css')
</head>
<body class="font-primary overflow-x-hidden">
    @include('mainpage.header')
    @include('mainpage.about')
    @include('mainpage.goals')
    @include('mainpage.how-works')
    @include('mainpage.testimoni')
    @include('mainpage.faq')
    @include('mainpage.footer')


    <!-- Icons -->
    <script src="https://unpkg.com/@phosphor-icons/web@2.1.1"></script>

    <!-- Swiper -->
    <script src="{{asset('library/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>
