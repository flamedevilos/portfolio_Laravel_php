<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Portfolio~Home')</title>

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- ICON -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- JQuery package -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" charset="utf-8"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

    <!-- Scroll Pakage Ext-Link -->
    <script src="https://unpkg.com/scrollreveal"></script>
</head>
<body>
    <!-- Preloader -->
    <div class="loader">
        <div class="ring1"></div>
        <div class="ring1"></div>
        <div class="ring1"></div>
        <span>Loading...</span>
    </div>

    <!-- Header/ Navigation Section -->
    @include('partials.navbar')

    <!-- Content Section -->
    @yield('content')

    <!-- Footer Section -->
    <footer>
        @include('partials.footer')
    </footer>


    <!-- Script -->
    <script src="{{ asset('/js/main.js') }}"></script>

    <!-- Icon Font awesome Link-->
    {{-- <script src="https://kit.fontawesome.com/804bdde827.js" crossorigin="anonymous"></script> --}}

</body>
</html>

