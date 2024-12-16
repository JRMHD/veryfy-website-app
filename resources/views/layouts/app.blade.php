<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- SEO Optimized Meta Tags -->
    <title>Expert Wager: Transforming Challenges into Opportunities | Trading & Digital Solutions</title>

    <meta name="description"
        content="Expert Wager is a dynamic professional platform offering content writing, web development, and binary options trading expertise. Learn how we transform challenges into opportunities.">

    <meta name="keywords"
        content="expert wager, trading strategies, content writing, web development, binary options, entrepreneurship, digital solutions, professional services">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Expert Wager: Professional Digital Solutions & Trading Expertise">
    <meta property="og:description"
        content="Discover Expert Wager's journey from content writing to trading. Overcome challenges and create opportunities in the digital world.">
    <meta property="og:image" content="{{ asset('images/Verify logo 1.png') }}">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Expert Wager: Professional Digital Solutions & Trading">
    <meta name="twitter:description"
        content="Learn how Expert Wager transforms challenges into opportunities through content, web development, and trading expertise.">
    <meta name="twitter:image" content="{{ asset('images/Verify logo 1.png') }}">

    <!-- Canonical Link -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/Verify logo 1.png') }}">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        :root {
            --primary-color: #00A550;
            --secondary-color: #073F62;
            --bg-color: #F4F7F6;
        }

        body {
            background-color: var(--bg-color);
        }

        /* Mobile Menu Toggle */
        #mobile-menu-toggle {
            display: none;
        }

        #mobile-menu {
            display: none;
        }

        @media (max-width: 640px) {

            /* Mobile Navigation Styles */
            #desktop-nav {
                display: none;
            }

            #mobile-menu-toggle {
                display: block;
                cursor: pointer;
            }

            #mobile-menu {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 64px;
                left: 0;
                width: 100%;
                background-color: white;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            }

            #mobile-menu.active {
                display: flex;
            }

            #mobile-menu a {
                padding: 15px;
                border-bottom: 1px solid #eee;
                display: flex;
                align-items: center;
                justify-content: start;
            }
        }
    </style>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen">
        <nav class="bg-white shadow-md relative">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16 items-center">
                    <!-- Logo -->
                    <div class="shrink-0 flex items-center">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('images/Verify logo 1.png') }}" alt="Expert Wager Logo"
                                class="h-10 w-auto">
                        </a>
                    </div>

                    <!-- Mobile Menu Toggle -->
                    <div id="mobile-menu-toggle" class="sm:hidden">
                        <button onclick="toggleMobileMenu()" class="text-[#073F62] hover:text-[#00A550]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>

                    <!-- Desktop Navigation -->
                    <div id="desktop-nav" class="hidden sm:flex sm:items-center sm:justify-center sm:flex-1">
                        <div class="flex space-x-8">
                            <a href="{{ url('/') }}"
                                class="group flex items-center px-3 py-2 rounded-md transition-all duration-300 hover:bg-[#00A550]/10">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 mr-2 text-[#073F62] group-hover:text-[#00A550]" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                                <span class="text-[#073F62] group-hover:text-[#00A550]">Home</span>
                            </a>
                            <a href="{{ url('about') }}"
                                class="group flex items-center px-3 py-2 rounded-md transition-all duration-300 hover:bg-[#00A550]/10">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 mr-2 text-[#073F62] group-hover:text-[#00A550]" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class="text-[#073F62] group-hover:text-[#00A550]">About</span>
                            </a>
                            {{-- <a href="{{ url('services') }}"
                                class="group flex items-center px-3 py-2 rounded-md transition-all duration-300 hover:bg-[#00A550]/10">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 mr-2 text-[#073F62] group-hover:text-[#00A550]" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 01-4.02-3.773l-.799-2.398a2 2 0 00-1.845-1.375h-.189a2 2 0 00-1.734 1.008l-.839 1.678a6 6 0 01-4.553 3.126l-2.386.477a2 2 0 00-1.022.547c-.719.719-.719 1.883 0 2.602l1.734 1.734a6 6 0 011.757 4.243v1.189a2 2 0 001.857 1.994l2.535.212a6 6 0 004.11-1.495l1.925-1.672a2 2 0 00.679-1.448v-1.887a2 2 0 00-.679-1.448l-1.925-1.672z" />
                                </svg>
                                <span class="text-[#073F62] group-hover:text-[#00A550]">Services</span>
                            </a> --}}
                            <a href="{{ url('contact') }}"
                                class="group flex items-center px-3 py-2 rounded-md transition-all duration-300 hover:bg-[#00A550]/10">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 mr-2 text-[#073F62] group-hover:text-[#00A550]" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <span class="text-[#073F62] group-hover:text-[#00A550]">Contact</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Mobile Menu -->
                <div id="mobile-menu">
                    <a href="{{ url('/') }}"
                        class="group flex items-center px-3 py-2 rounded-md transition-all duration-300 hover:bg-[#00A550]/10">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 mr-2 text-[#073F62] group-hover:text-[#00A550]" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        <span class="text-[#073F62] group-hover:text-[#00A550]">Home</span>
                    </a>
                    <a href="{{ url('about') }}"
                        class="group flex items-center px-3 py-2 rounded-md transition-all duration-300 hover:bg-[#00A550]/10">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 mr-2 text-[#073F62] group-hover:text-[#00A550]" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="text-[#073F62] group-hover:text-[#00A550]">About</span>
                    </a>
                    {{-- <a href="{{ url('services') }}"
                        class="group flex items-center px-3 py-2 rounded-md transition-all duration-300 hover:bg-[#00A550]/10">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 mr-2 text-[#073F62] group-hover:text-[#00A550]" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 01-4.02-3.773l-.799-2.398a2 2 0 00-1.845-1.375h-.189a2 2 0 00-1.734 1.008l-.839 1.678a6 6 0 01-4.553 3.126l-2.386.477a2 2 0 00-1.022.547c-.719.719-.719 1.883 0 2.602l1.734 1.734a6 6 0 011.757 4.243v1.189a2 2 0 001.857 1.994l2.535.212a6 6 0 004.11-1.495l1.925-1.672a2 2 0 00.679-1.448v-1.887a2 2 0 00-.679-1.448l-1.925-1.672z" />
                        </svg>
                        <span class="text-[#073F62] group-hover:text-[#00A550]">Services</span>
                    </a> --}}
                    <a href="{{ url('contact') }}"
                        class="group flex items-center px-3 py-2 rounded-md transition-all duration-300 hover:bg-[#00A550]/10">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 mr-2 text-[#073F62] group-hover:text-[#00A550]" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <span class="text-[#073F62] group-hover:text-[#00A550]">Contact</span>
                    </a>
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <main>
            @yield('content')
        </main>
    </div>

    <script>
        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('active');
        }
    </script>
</body>

</html>
