<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- bootstrap cdn link  -->
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css') }}"
        rel="stylesheet">

    <!--font awesome cdn link-->
    <link rel="stylesheet"
        href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css') }}">

    <!--custom css file link-->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">


    <!--jquery cdn link-->
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js') }}"></script>

    <!--custom js file link-->
    <script src="{{ asset('js/script.js') }}"></script>
    <title>Rental Mobil.Id | Home</title>
    {{-- <link rel="icon" type="image/x-icon" href="/favicon.ico"/> --}}

</head>

<body>
    <!--header sectiom start-->
    @section('header')
    @show

    <!--content sectiom start-->
    @section('content')
    @show

    <!--footer sectiom start-->
    @section('footer')
    @show

</body>

</html>
