<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    
    @vite('resources/css/app.css')
    <style>
        /* Custom styles */
        .top-menu-bg {
            background-color: #f0f0f0; /* Light gray background */
            padding: 8px 16px; /* Padding around menu items */
            border-radius: 20px; /* Rounded corners */
            display: inline-block; /* Display as inline block */
        }

        .mobile-menu {
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3); /* Text shadow for mobile menu */
        }

        .dropdown-content {
            display: none;  /* Hidden by default */
            position: absolute; /* Absolute positioning */
            background-color: white; /* Background color */
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); /* Box shadow */
            z-index: 1; /* Ensure it's on top */
        }

        .dropdown:hover .dropdown-content {
            display: block; /* Display when hovered */
        }

        .dropdown-content a {
            color: black; /* Link color */
            padding: 12px 16px; /* Padding */
            text-decoration: none; /* No underline */
            display: block; /* Block display */
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1; /* Background color on hover */
        }

        /* Increased font size for menu items */
        .menu-item, .dropdown-content a {
            font-size: 1.25rem; /* 20px */
        }
    </style>
</head>
<body class="flex flex-col bg-gray-200 ">
<div class="fixed top-0 left-0 w-full">
    <header class="bg-white ">
        <div class="flex bg-stone-500 shadow items-center justify-between py-2 px-6">
            <div class="flex">
                <div class="flex items-center mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                    </svg>                  
                    <span class="ml-2">somethingemial@gmail.com</span>
                </div>
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                    </svg>
                    <span class="ml-2">01-3489w489</span>
                </div>
            </div>
            <div class="flex">
                <div class="mr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                        <path d="M21 2H3a1 1 0 0 0-1 1v18a1 1 0 0 0 1 1h9.75v-7.35h-2.6V11.9h2.6V9.44c0-2.57 1.57-3.97 3.86-3.97 1.1 0 2.05.08 2.33.12v2.7h-1.6c-1.26 0-1.5.6-1.5 1.48v1.94h3l-.39 3.75h-2.61V23H21a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1z"/>
                    </svg>
                </div>
                <div class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                        <path d="M12 2.38c-2.89 0-3.25.01-4.37.06-1.12.06-1.9.27-2.57.57a4.89 4.89 0 0 0-1.88 1.21 4.89 4.89 0 0 0-1.21 1.88c-.3.67-.51 1.45-.57 2.57C2.01 8.75 2 9.11 2 12s.01 3.25.06 4.37c.06 1.12.27 1.9.57 2.57a4.89 4.89 0 0 0 1.21 1.88 4.89 4.89 0 0 0 1.88 1.21c.67.3 1.45.51 2.57.57 1.12.06 1.48.07 4.37.07s3.25-.01 4.37-.06c1.12-.06 1.9-.27 2.57-.57a4.89 4.89 0 0 0 1.88-1.21 4.89 4.89 0 0 0 1.21-1.88c.3-.67.51-1.45.57-2.57.06-1.12.07-1.48.07-4.37s-.01-3.25-.06-4.37c-.06-1.12-.27-1.9-.57-2.57a4.89 4.89 0 0 0-1.21-1.88 4.89 4.89 0 0 0-1.88-1.21c-.67-.3-1.45-.51-2.57-.57C15.25 2.01 14.89 2 12 2s-3.25.01-4.37.06c-1.12.06-1.9.27-2.57.57a4.89 4.89 0 0 0-1.88 1.21 4.89 4.89 0 0 0-1.21 1.88c-.3.67-.51 1.45-.57 2.57C2.01 8.75 2 9.11 2 12s.01 3.25.06 4.37c.06 1.12.27 1.9.57 2.57a4.89 4.89 0 0 0 1.21 1.88 4.89 4.89 0 0 0 1.88 1.21c.67.3 1.45.51 2.57.57 1.12.06 1.48.07 4.37.07s3.25-.01 4.37-.06c1.12-.06 1.9-.27 2.57-.57a4.89 4.89 0 0 0 1.88-1.21 4.89 4.89 0 0 0 1.21-1.88c.3-.67.51-1.45.57-2.57.06-1.12.07-1.48.07-4.37s-.01-3.25-.06-4.37c-.06-1.12-.27-1.9-.57-2.57a4.89 4.89 0 0 0-1.21-1.88 4.89 4.89 0 0 0-1.88-1.21c-.67-.3-1.45-.51-2.57-.57C15.25 2.01 14.89 2 12 2zm0 17.1a5.1 5.1 0 1 1 0-10.2 5.1 5.1 0 0 1 0 10.2zm6.49-9.1a1.17 1.17 0 1 1 0-2.34 1.17 1.17 0 0 1 0 2.34z"/>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Mobile menu button -->
        <div x-data="{ open: false }" class="bg-white border-b border-gray-200 md:hidden">
            <div class="flex items-center justify-between p-4">
                <a href="#" class="text-2xl font-bold tracking-tight text-gray-800 no-underline hover:no-underline">
                    <img src="{{ asset('images/abmcLogo.png') }}" alt="Logo" class="h-12">
                </a>
                <button @click="open = !open" class="text-gray-500 hover:text-gray-700 focus:outline-none focus:text-gray-700">
                    <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                        <path x-show="!open" fill-rule="evenodd" clip-rule="evenodd" d="M4 5h16M4 12h16M4 19h16" />
                        <path x-show="open" fill-rule="evenodd" clip-rule="evenodd" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div x-show="open" class="px-2 pt-2 pb-3">
                <a href="/" class="block px-3 py-2 mt-1 text-lg font-semibold text-gray-800 rounded hover:bg-gray-100">Home</a>
                <a href="/about" class="block px-3 py-2 mt-1 text-lg font-semibold text-gray-800 rounded hover:bg-gray-100">About</a>
                <div class="relative inline-block text-left dropdown">
                    <button class="inline-flex justify-center w-full px-3 py-2 mt-1 text-lg font-semibold text-gray-800 rounded hover:bg-gray-100">Programs</button>
                    <div class="dropdown-content absolute mt-1 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5">
                        <a href="/programs" class="block px-4 py-2 text-lg text-gray-700 hover:bg-gray-100">Program List</a>
                        <a href="/programs/new" class="block px-4 py-2 text-lg text-gray-700 hover:bg-gray-100">New Program</a>
                    </div>
                </div>
                <a href="/contact" class="block px-3 py-2 mt-1 text-lg font-semibold text-gray-800 rounded hover:bg-gray-100">Contact</a>
            </div>
        </div>

        <!-- Desktop menu -->
        <nav class="items-center justify-between hidden md:flex">
            <div class="p-4">
                <a href="#" class="text-2xl font-bold tracking-tight text-gray-800 no-underline hover:no-underline">
                    <img src="{{ asset('images/abmcLogo.png') }}" alt="Logo" class="h-12">
                </a>
            </div>
            <div class="flex-1 flex items-center justify-center space-x-4">
                <a href="/" class="menu-item text-lg font-semibold text-gray-800 hover:text-gray-600">Home</a>
                <a href="/about" class="menu-item text-lg font-semibold text-gray-800 hover:text-gray-600">About</a>
                <div class="relative inline-block text-left dropdown">
                    <button class="menu-item inline-flex items-center text-lg font-semibold text-gray-800 hover:text-gray-600">
                        Programs
                    </button>
                    <div class="dropdown-content absolute mt-1 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5">
                        <a href="/programs" class="block px-4 py-2 text-lg text-gray-700 hover:bg-gray-100">Program List</a>
                        <a href="/programs/new" class="block px-4 py-2 text-lg text-gray-700 hover:bg-gray-100">New Program</a>
                    </div>
                </div>
                <a href="/contact" class="menu-item text-lg font-semibold text-gray-800 hover:text-gray-600">Contact</a>
            </div>
            <div class="p-4">
                <div class="flex items-center space-x-4">
                    <a href="#" class="text-gray-500 hover:text-gray-700">
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M21 2H3a1 1 0 0 0-1 1v18a1 1 0 0 0 1 1h9.75v-7.35h-2.6V11.9h2.6V9.44c0-2.57 1.57-3.97 3.86-3.97 1.1 0 2.05.08 2.33.12v2.7h-1.6c-1.26 0-1.5.6-1.5 1.48v1.94h3l-.39 3.75h-2.61V23H21a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-700">
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2.38c-2.89 0-3.25.01-4.37.06-1.12.06-1.9.27-2.57.57a4.89 4.89 0 0 0-1.88 1.21 4.89 4.89 0 0 0-1.21 1.88c-.3.67-.51 1.45-.57 2.57C2.01 8.75 2 9.11 2 12s.01 3.25.06 4.37c.06 1.12.27 1.9.57 2.57a4.89 4.89 0 0 0 1.21 1.88 4.89 4.89 0 0 0 1.88 1.21c.67.3 1.45.51 2.57.57 1.12.06 1.48.07 4.37.07s3.25-.01 4.37-.06c1.12-.06 1.9-.27 2.57-.57a4.89 4.89 0 0 0 1.88-1.21 4.89 4.89 0 0 0 1.21-1.88c.3-.67.51-1.45.57-2.57.06-1.12.07-1.48.07-4.37s-.01-3.25-.06-4.37c-.06-1.12-.27-1.9-.57-2.57a4.89 4.89 0 0 0-1.21-1.88 4.89 4.89 0 0 0-1.88-1.21c-.67-.3-1.45-.51-2.57-.57C15.25 2.01 14.89 2 12 2zm0 17.1a5.1 5.1 0 1 1 0-10.2 5.1 5.1 0 0 1 0 10.2zm6.49-9.1a1.17 1.17 0 1 1 0-2.34 1.17 1.17 0 0 1 0 2.34z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-700">
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2.38c-2.89 0-3.25.01-4.37.06-1.12.06-1.9.27-2.57.57a4.89 4.89 0 0 0-1.88 1.21 4.89 4.89 0 0 0-1.21 1.88c-.3.67-.51 1.45-.57 2.57C2.01 8.75 2 9.11 2 12s.01 3.25.06 4.37c.06 1.12.27 1.9.57 2.57a4.89 4.89 0 0 0 1.21 1.88 4.89 4.89 0 0 0 1.88 1.21c.67.3 1.45.51 2.57.57 1.12.06 1.48.07 4.37.07s3.25-.01 4.37-.06c1.12-.06 1.9-.27 2.57-.57a4.89 4.89 0 0 0 1.88-1.21 4.89 4.89 0 0 0 1.21-1.88c.3-.67.51-1.45.57-2.57.06-1.12.07-1.48.07-4.37s-.01-3.25-.06-4.37c-.06-1.12-.27-1.9-.57-2.57a4.89 4.89 0 0 0-1.21-1.88 4.89 4.89 0 0 0-1.88-1.21c-.67-.3-1.45-.51-2.57-.57C15.25 2.01 14.89 2 12 2zm0 17.1a5.1 5.1 0 1 1 0-10.2 5.1 5.1 0 0 1 0 10.2zm6.49-9.1a1.17 1.17 0 1 1 0-2.34 1.17 1.17 0 0 1 0 2.34z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </nav>
    
    
</div>
        @hasSection('content')
            @yield('content')
        @else
            <h2>NOT FOUND</h2>
        @endif

    @stack('scripts') 
<script>
    
    const icon = document.getElementById('icon');
    const mobileMenu = document.getElementById('mobile-menu');
    const hamburgerIcon = document.getElementById('hamburger-icon');
    const crossIcon = document.getElementById('cross-icon');

    icon.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
        hamburgerIcon.classList.toggle('hidden');
        crossIcon.classList.toggle('hidden');
    });

    const dropdown = document.querySelector('.dropdown');
    const dropdownContent = document.querySelector('.dropdown-content');

// Change 'click' to 'mouseenter'
dropdown.addEventListener('mouseenter', function() {
  dropdownContent.classList.toggle('hidden'); // Toggle visibility
});

// Optionally, add another listener for 'mouseleave' to hide on hover out
dropdown.addEventListener('mouseleave', function() {
  dropdownContent.classList.add('hidden'); // Hide on mouse leave
});

</script>


<!----------------------------------------------------------------------------------------->

    <footer class="bg-gray-800 text-white py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="mb-4 md:mb-0">
                    <a href="{{ url('/') }}" class="lg:ml-60 md:ml-5 sm:ml-1">
                        <img src="{{ asset('/images/brand.avif') }}" alt="Brand Image" class="w-20 h-20">
                    </a>
                    <span>Location:dsvnuisdvisdv</span>
                </div>

                <div class="md:col-span-1">
                    <h3 class="text-lg font-semibold mb-4">Useful Links</h3>
                    <ul>
                        <li><a href="/" class="hover:text-gray-400">Home</a></li>
                        <li><a href="/about" class="hover:text-gray-400">About Us</a></li>
                        <li><a href="/services" class="hover:text-gray-400">Services</a></li>
                        <li><a href="/contact" class="hover:text-gray-400">Contact Us</a></li>
                    </ul>
                </div>

                <div class="md:col-span-1 ">
                    <h3 class="text-lg font-semibold mb-4">Contact Information</h3>
                    <p class="flex"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                    </svg>
                    +977774567890</p>

                    <p class="flex mt-5"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 3.75H6.912a2.25 2.25 0 0 0-2.15 1.588L2.35 13.177a2.25 2.25 0 0 0-.1.661V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 0 0-2.15-1.588H15M2.25 13.5h3.86a2.25 2.25 0 0 1 2.012 1.244l.256.512a2.25 2.25 0 0 0 2.013 1.244h3.218a2.25 2.25 0 0 0 2.013-1.244l.256-.512a2.25 2.25 0 0 1 2.013-1.244h3.859M12 3v8.25m0 0-3-3m3 3 3-3" />
                    </svg>
                        email@gmail.com</p>
                </div>

                <div class="md:col-span-1">
                    <h3 class="text-lg font-semibold mb-4">Follow Us</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-white hover:text-gray-400">
                          <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
                            <linearGradient id="awSgIinfw5_FS5MLHI~A9a_yGcWL8copNNQ_gr1" x1="6.228" x2="42.077" y1="4.896" y2="43.432" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#0d61a9"></stop><stop offset="1" stop-color="#16528c"></stop></linearGradient><path fill="url(#awSgIinfw5_FS5MLHI~A9a_yGcWL8copNNQ_gr1)" d="M42,40c0,1.105-0.895,2-2,2H8c-1.105,0-2-0.895-2-2V8c0-1.105,0.895-2,2-2h32	c1.105,0,2,0.895,2,2V40z"></path><path d="M25,38V27h-4v-6h4v-2.138c0-5.042,2.666-7.818,7.505-7.818c1.995,0,3.077,0.14,3.598,0.208	l0.858,0.111L37,12.224L37,17h-3.635C32.237,17,32,18.378,32,19.535V21h4.723l-0.928,6H32v11H25z" opacity=".05"></path><path d="M25.5,37.5v-11h-4v-5h4v-2.638c0-4.788,2.422-7.318,7.005-7.318c1.971,0,3.03,0.138,3.54,0.204	l0.436,0.057l0.02,0.442V16.5h-3.135c-1.623,0-1.865,1.901-1.865,3.035V21.5h4.64l-0.773,5H31.5v11H25.5z" opacity=".07"></path><path fill="#fff" d="M33.365,16H36v-3.754c-0.492-0.064-1.531-0.203-3.495-0.203c-4.101,0-6.505,2.08-6.505,6.819V22h-4v4	h4v11h5V26h3.938l0.618-4H31v-2.465C31,17.661,31.612,16,33.365,16z"></path>
                            </svg>
                        </a>
                        <a href="#" class="text-white hover:text-gray-400">
                           <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
                            <radialGradient id="yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1" cx="19.38" cy="42.035" r="44.899" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fd5"></stop><stop offset=".328" stop-color="#ff543f"></stop><stop offset=".348" stop-color="#fc5245"></stop><stop offset=".504" stop-color="#e64771"></stop><stop offset=".643" stop-color="#d53e91"></stop><stop offset=".761" stop-color="#cc39a4"></stop><stop offset=".841" stop-color="#c837ab"></stop></radialGradient><path fill="url(#yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1)" d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z"></path><radialGradient id="yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2" cx="11.786" cy="5.54" r="29.813" gradientTransform="matrix(1 0 0 .6663 0 1.849)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#4168c9"></stop><stop offset=".999" stop-color="#4168c9" stop-opacity="0"></stop></radialGradient><path fill="url(#yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2)" d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z"></path><path fill="#fff" d="M24,31c-3.859,0-7-3.14-7-7s3.141-7,7-7s7,3.14,7,7S27.859,31,24,31z M24,19c-2.757,0-5,2.243-5,5	s2.243,5,5,5s5-2.243,5-5S26.757,19,24,19z"></path><circle cx="31.5" cy="16.5" r="1.5" fill="#fff"></circle><path fill="#fff" d="M30,37H18c-3.859,0-7-3.14-7-7V18c0-3.86,3.141-7,7-7h12c3.859,0,7,3.14,7,7v12	C37,33.86,33.859,37,30,37z M18,13c-2.757,0-5,2.243-5,5v12c0,2.757,2.243,5,5,5h12c2.757,0,5-2.243,5-5V18c0-2.757-2.243-5-5-5H18z"></path>
                            </svg> 
                            </svg>
                        </a>
                        <a href="#" class="text-white hover:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
                            <path fill="#FF3D00" d="M43.2,33.9c-0.4,2.1-2.1,3.7-4.2,4c-3.3,0.5-8.8,1.1-15,1.1c-6.1,0-11.6-0.6-15-1.1c-2.1-0.3-3.8-1.9-4.2-4C4.4,31.6,4,28.2,4,24c0-4.2,0.4-7.6,0.8-9.9c0.4-2.1,2.1-3.7,4.2-4C12.3,9.6,17.8,9,24,9c6.2,0,11.6,0.6,15,1.1c2.1,0.3,3.8,1.9,4.2,4c0.4,2.3,0.9,5.7,0.9,9.9C44,28.2,43.6,31.6,43.2,33.9z"></path><path fill="#FFF" d="M20 31L20 17 32 24z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-8 border-t border-gray-700 pt-8 flex justify-center">
            <p>&copy; 2024 Your Company. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
