
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
    <title>@yield('title')</title>
    @notifyCss
    <style>
        .notify{
            z-index: 1000000;
            margin-top: 4%;
        }

        [x-cloak] {
            display: none !important;
        }
    </style>
</head>
<body x-data="{ openRegister: false,
    toggleRegister() {this.openRegister =! this.openRegister},
    get isRegisterOpen() {return this.openRegister},
    openLogin: false,
    toggleLogin() {this.openLogin =! this.openLogin},
    get isLoginOpen() {return this.openLogin},
    }" class="min-h-screen w-full flex flex-col justify-between bg-gray-100">
    @include('notify::components.notify')
    <x:notify-messages/>
    <x-forms.login/>
    <x-forms.register/>
    <x-navbar/>
    @yield('content')
    <x-footer/>
    @notifyJs
</body>
</html>
