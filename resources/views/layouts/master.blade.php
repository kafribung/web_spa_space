<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kafri Bung Space</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Quicksand:wght@600&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="shortcut icon" href="{{ asset('img_users/kafri.png') }}" type="image/x-icon">
</head>

<body class="bg-gray-100">
    <main id="app">
        <router-view></router-view>
    </main>
</body>
<script src="{{ asset('js/app.js') }}" defer></script>


</html>