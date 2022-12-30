<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Blog</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/custom.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    {{-- font --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

    {{-- alpine.js framwork --}}
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>

<body class=" bg-white h-screen antialiased leading-none font-sans">
    <section class="px-6 py-8">
        <nav class="md:flex md:justify-between md:items-center">
            <div>
                <a href="/">
                    <img src="/images/logo.svg" alt="Laracasts Logo" width="165" height="16">
                </a>
            </div>

            <div class="mt-8 md:mt-0 flex items-center">
                @auth
                    <x-drop-down>
                        <x-slot name="tregger">
                            <button>welcome, {{ auth()->user()->name }}!</button>
                        </x-slot>
                        <x-dropdown-item href="/admin/posts" :active="request()->is('admin/posts')">dashborad</x-dropdown-item>
                        <x-dropdown-item href="/admin/posts/create" :active="request()->is('admin/posts/create')">New Post</x-dropdown-item>
                        <x-dropdown-item href="#" x-data="{}"
                            @click.prevent="document.querySelector('#logoutform').submit()">logout</x-dropdown-item>
                        <form action="/logout" method="post" class="hidden" id="logoutform">
                            @csrf
                        </form>
                    </x-drop-down>
                @endauth
                @guest
                    <a href="/register" class="text-xs font-bold uppercase">Register</a>
                    <a href="/login" class="text-xs font-bold uppercase ml-2">login</a>
                @endguest
                <a href="#newsletter"
                    class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                    Subscribe for Updates
                </a>
            </div>
        </nav>

        {{ $slot }}

        <footer class="bg-gray-200 border border-gray border-opacity-5 rounded-xl text-center py-16 px-10 mt-16"
            id="newsletter">
            <img src="/images/lary-newsletter-icon.svg" alt="" class="mx-auto -mb-6" style="width: 145px;">
            <h5 class="text-3xl">Stay in touch with the latest posts</h5>
            <p class="text-sm mt-3">Promise to keep the inbox clean. No bugs.</p>

            <div class="mt-10">
                <div class="relative inline-block mx-auto lg:bg-gray-300 rounded-full">
                    <form method="POST" action="/newsletter" class="lg:flex text-sm">
                        @csrf
                        <div class="lg:py-3 lg:px-5 flex items-center">
                            <label for="email" class="hidden lg:inline-block">
                                <img src="/images/mailbox-icon.svg" alt="mailbox letter">
                            </label>
                            <input id="email" type="text" placeholder="Your email address" name="email"
                                class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none outline-none">
                        </div>

                        <button type="submit"
                            class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-5 px-8">
                            Subscribe
                        </button>
                    </form>
                </div>
                <x-form.error name="email" />
            </div>
        </footer>

    </section>

</body>

</html>
