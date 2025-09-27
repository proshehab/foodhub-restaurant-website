<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodhub</title>

    <!--
    - custom css link
  -->
    <link rel="stylesheet" href="{{ asset('website/assets/css/foodhub.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/media_query.css') }}">

    <!--
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Monoton&family=Rubik:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

</head>

<body>

    <!--
    - main container
  -->

    <div class="container">

        @include('website.layouts.header')



        @yield('content')


        @include('website.layouts.footer')
    </div>





    <!--
    - custom js link
  -->
    <script src="{{ asset('website/assets/js/foodhub.js') }}"></script>

    <!--
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
