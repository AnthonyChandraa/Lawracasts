<!doctype html>
<html class="dark" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible"
          content="ie=edge">
    <link rel="shortcut icon"
          href="{{asset('storage/assets/icon.svg')}}"
          type="image/x-icon">
    <link rel="preload" as="image" href="{{asset('storage/assets/logo-white.png')}}">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
    <title>404 Error</title>
</head>
<body class="min-h-screen w-full flex flex-col justify-center bg-gray-800">
<div class="mx-auto ">
    <p style="font-size: 100pt" class="text-center text-white font-semibold">403</p>
    <p style="font-size: 20pt" class="text-center text-white font-semibold">Oops. This Page Is Not Available For You :
        (</p>
</div>
</body>
</html>
