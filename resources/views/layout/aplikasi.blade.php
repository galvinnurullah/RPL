<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js')}}" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="{{asset('assets/img/favicon.jpg')}}" rel="icon">
    <link href="{{asset('assets/img/favicon.jpg')}}" rel="apple-touch-icon">
    <link href="{{asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet')}}">
    <link href="{{asset('assets/vendor/aos/aos.css" rel="stylesheet')}}">
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <title>Website PsikomenHealth</title>
</head>
<body>
    <div class="container py-5">
        @include('komponen/pesan')
        @yield('konten')
    </div>
     <!-- Vendor JS Files -->
     <script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
     <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
     <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
     <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
     <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
     <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
     <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
 
     <!-- Template Main JS File -->
     <script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>