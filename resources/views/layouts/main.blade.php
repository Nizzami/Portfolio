<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portfolio | Nizam')</title>

    <!-- Styles -->

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <!-- Boxicons CSS -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <!-- Remixicon CSS -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet">

    <!-- Google Fonts (Inter) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
</head>
<body>
    <!-- Header -->
     @yield('header')

    <!-- Content -->
     @yield('content')

    <!-- Footer -->
     <div class="footer">
        <div class="copyright">
            <p>2024 Nizzami Ramdhan, All Rights Reserved</p>
        </div>
        <a href="#home" class="scroll-top">
            <i class="ri-arrow-up-s-fill"></i>
        </a>
     </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
     <script src="{{ asset('js/script.js') }}"></script>
     <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
     <script>
        AOS.init({
            offset: 300,
            duration: 1400,
        })
     </script>
    
</body>
</html>