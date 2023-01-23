<!doctype html>
<html class="dark" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('storage/assets/icon.svg') }}" type="image/x-icon">
    <link rel="preload" as="image" href="{{ asset('storage/assets/logo-white.png') }}">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')


    {{-- Particle JS --}}
    {{-- <script src="particles.js"></script> --}}

    <title>@yield('title')</title>
    @notifyCss
    <style>
        .notify {
            z-index: 1000000;
            margin-top: 4%;
        }

        [x-cloak] {
            display: none !important;
        }

        /* Override the color of the pagination links */
        .pagination .page-link {
            color: blue !important;
        }

        /* Override the background color of the active pagination link */
        .pagination .page-item.active .page-link {
            background-color: blue !important;
        }

        /* Override the hover state of the pagination links */
        .pagination .page-link:hover {
            background-color: blue !important;
        }
    </style>
</head>

<body x-data="{
    openRegister: false,
    toggleRegister() { this.openRegister = !this.openRegister },
    get isRegisterOpen() { return this.openRegister },
    openLogin: false,
    toggleLogin() { this.openLogin = !this.openLogin },
    get isLoginOpen() { return this.openLogin },
    openAddThread: false,
    toggleAddThread() { this.openAddThread = !this.openAddThread },
    get isAddThreadOpen() { return this.openAddThread },
    openAddPodcast: false,
    toggleAddPodcast() { this.openAddPodcast = !this.openAddPodcast },
    get isAddPodcastOpen() { return this.openAddPodcast },
    openEditPodcast: false,
    toggleEditPodcast() { this.openEditPodcast = !this.openEditPodcast },
    get isEditPodcastOpen() { return this.openEditPodcast },
    openAddCourseHeader: false,
    toggleAddCourseHeader() { this.openAddCourseHeader = !this.openAddCourseHeader },
    get isAddCourseHeaderOpen() { return this.openAddCourseHeader },
    openAddNewVideo: false,
    toggleAddNewVideo() { this.openAddNewVideo = !this.openAddNewVideo },
    get isAddNewVideo() { return this.openAddNewVideo }
}" class="">
    {{-- Particle JS --}}
    <x-particles />
    {{-- ------------------ --}}
    <div class="min-h-screen relative z-20 w-full flex flex-col justify-between ">
        @include('notify::components.notify')
        <x:notify-messages />
        <x-forms.login />
        <x-forms.register />
        <x-podcast.add-podcast-form />
        <x-navbar />
        @yield('content')
        <x-footer />
        @notifyJs
    </div>
    @vite('resources/js/particles.js')
    @vite('resources/js/app.js')
</body>

</html>
