<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" />

    @vite('resources/css/app.css')
</head>
<body>

@yield('content')
<div class="container">
    @include('inc.messages')
</div>

@vite('resources/js/app.js')

</body>
</html>
