<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gelembong Playground</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="{{ asset('js/filter.js') }}"></script>
</head>
<body class="bg-gray-50 min-h-screen font-[Montserrat]">
    <!-- Header/Navigation -->
<header class="fixed top-0 left-0 w-full bg-white/70 backdrop-blur-md z-50 shadow-sm border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-3">
        <div class="flex justify-between items-center h-16">
            <!-- Logo/Brand -->
            <div class="flex items-center">
                <h1 class="text-xl font-bold text-blue-600">Gelembong Playground</h1>
            </div>

            <!-- Navigation Links -->
            <nav class="hidden md:flex items-center space-x-8">
                <a href="/" class="text-blue-600 hover:text-blue-800 font-medium transition-colors duration-200">
                    Homepage
                </a>
                <a href="/developer" class="text-gray-600 hover:text-gray-900 font-medium transition-colors duration-200">
                    Developer
                </a>
            </nav>

            <!-- User Profile -->
            <div class="flex items-center">
                <div class="relative">
                    <button class="flex items-center space-x-2 text-gray-700 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 rounded-lg p-2 transition-colors duration-200">
                        <div class="w-8 h-8 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full flex items-center justify-center">
                            <span class="text-white text-sm font-medium">JD</span>
                        </div>
                        <span class="hidden sm:block text-sm font-medium">John Doe</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>


    <!-- Fullscreen Hero / Intro Section -->
        <section
        class="relative h-[700px] bg-fixed bg-center bg-cover bg-no-repeat"
        style="background-image: url('https://images.unsplash.com/photo-1575783970733-1aaedde1db74?q=80&w=1176&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">

        <!-- Overlay -->
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>

        <!-- Content (Teks + Gambar) -->
        <div class="relative z-10 h-full flex items-center justify-between px-10 gap-8">
            <!-- Text Content -->
            <div class="flex-1 text-left">
            <p class="text-lg md:text-xl text-gray-200 max-w-3xl">Hi! welcome to,</p>
            <h3 class="text-4xl md:text-5xl font-extrabold text-white mb-4 tracking-tight">
                Gelembong Playground
            </h3>
            <p class="text-lg md:text-xl text-gray-200 max-w-xl">
                This playground was established as a platform for developers to enhance their individual skills
                through projects that build their personal portfolios. Check out our mini projects below!
            </p>
            </div>

            <!-- Image Content -->
            <div class="hidden md:block flex-1">
                <img src="https://upload.wikimedia.org/wikipedia/commons/4/47/PNG_transparency_demonstration_1.png"
                     alt="Hero Image" class="w-full max-w-md mx-auto object-contain" />
            </div>
        </div>
        </section>


    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Hero Section -->
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Mini Projects</h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Explore our collection of innovative mini projects. Each project is designed to showcase different technologies and creative solutions.
            </p>
        </div>

        <!-- Filter Button -->
        <div class="flex flex-wrap gap-4 justify-center mb-8">
        <button data-filter="all" class="filter-btn bg-blue-100 text-blue-800 px-4 py-2 rounded-full hover:bg-blue-200 transition">All</button>
        <button data-filter="quiz" class="filter-btn bg-green-100 text-green-800 px-4 py-2 rounded-full hover:bg-green-200 transition">Quiz</button>
        <button data-filter="aplikasi" class="filter-btn bg-purple-100 text-purple-800 px-4 py-2 rounded-full hover:bg-purple-200 transition">Aplikasi</button>
        <button data-filter="utility" class="filter-btn bg-yellow-100 text-yellow-800 px-4 py-2 rounded-full hover:bg-yellow-200 transition">Utility</button>
        </div>
        <!-- Project Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Project Card 1 -->
            <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300 overflow-hidden" data-category="quiz">
                <div class="h-48 bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center">
                    <div class="text-white text-center">
                        <div class="w-16 h-16 bg-white/20 rounded-lg flex items-center justify-center mx-auto mb-2">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold">Coming Soon</h3>
                    </div>
                </div>
                <div class="p-6">
                    <h4 class="text-xl font-semibold text-gray-900 mb-2">MBTI Quiz</h4>
                    <p class="text-gray-600 mb-4">Discover your MBTI personality type with our quick and easy quiz.</p>
                    <div class="flex items-center justify-between">
                        <span class="px-3 py-1 bg-blue-100 text-blue-800 text-sm font-medium rounded-full">React.js</span>
                        <span class="text-sm text-gray-500">Coming Soon</span>
                    </div>
                </div>
            </div>

            <!-- Project Card 2 -->
            <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300 overflow-hidden" data-category="aplikasi">
                <div class="h-48 bg-gradient-to-br from-green-400 to-green-600 flex items-center justify-center">
                    <div class="text-white text-center">
                        <div class="w-16 h-16 bg-white/20 rounded-lg flex items-center justify-center mx-auto mb-2">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold">Coming Soon</h3>
                    </div>
                </div>
                <div class="p-6">
                    <h4 class="text-xl font-semibold text-gray-900 mb-2">Weather Dashboard</h4>
                    <p class="text-gray-600 mb-4">Real-time weather information with beautiful charts and forecasts.</p>
                    <div class="flex items-center justify-between">
                        <span class="px-3 py-1 bg-green-100 text-green-800 text-sm font-medium rounded-full">Vue.js</span>
                        <span class="text-sm text-gray-500">Coming Soon</span>
                    </div>
                </div>
            </div>

            <!-- Project Card 3 -->
            <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300 overflow-hidden" data-category="aplikasi">
                <div class="h-48 bg-gradient-to-br from-purple-400 to-purple-600 flex items-center justify-center">
                    <div class="text-white text-center">
                        <div class="w-16 h-16 bg-white/20 rounded-lg flex items-center justify-center mx-auto mb-2">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                                <path fill-rule="evenodd" d="M4 5a2 2 0 012-2v1a1 1 0 102 0V3a2 2 0 012 2v6a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 2a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold">Coming Soon</h3>
                    </div>
                </div>
                <div class="p-6">
                    <h4 class="text-xl font-semibold text-gray-900 mb-2">Expense Tracker</h4>
                    <p class="text-gray-600 mb-4">Track your expenses with categories, charts, and monthly reports.</p>
                    <div class="flex items-center justify-between">
                        <span class="px-3 py-1 bg-purple-100 text-purple-800 text-sm font-medium rounded-full">Laravel</span>
                        <span class="text-sm text-gray-500">Coming Soon</span>
                    </div>
                </div>
            </div>

            <!-- Project Card 4 -->
            <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300 overflow-hidden" data-category="aplikasi">
                <div class="h-48 bg-gradient-to-br from-red-400 to-red-600 flex items-center justify-center">
                    <div class="text-white text-center">
                        <div class="w-16 h-16 bg-white/20 rounded-lg flex items-center justify-center mx-auto mb-2">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold">Coming Soon</h3>
                    </div>
                </div>
                <div class="p-6">
                    <h4 class="text-xl font-semibold text-gray-900 mb-2">Video Chat App</h4>
                    <p class="text-gray-600 mb-4">Real-time video calling application with screen sharing features.</p>
                    <div class="flex items-center justify-between">
                        <span class="px-3 py-1 bg-red-100 text-red-800 text-sm font-medium rounded-full">Node.js</span>
                        <span class="text-sm text-gray-500">Coming Soon</span>
                    </div>
                </div>
            </div>

            <!-- Project Card 5 -->
            <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300 overflow-hidden" data-category="aplikasi">
                <div class="h-48 bg-gradient-to-br from-yellow-400 to-yellow-600 flex items-center justify-center">
                    <div class="text-white text-center">
                        <div class="w-16 h-16 bg-white/20 rounded-lg flex items-center justify-center mx-auto mb-2">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold">Coming Soon</h3>
                    </div>
                </div>
                <div class="p-6">
                    <h4 class="text-xl font-semibold text-gray-900 mb-2">Portfolio Website</h4>
                    <p class="text-gray-600 mb-4">A modern portfolio website template with animations and responsive design.</p>
                    <div class="flex items-center justify-between">
                        <span class="px-3 py-1 bg-yellow-100 text-yellow-800 text-sm font-medium rounded-full">Next.js</span>
                        <span class="text-sm text-gray-500">Coming Soon</span>
                    </div>
                </div>
            </div>

            <!-- Project Card 6 -->
            <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300 overflow-hidden" data-category="aplikasi">
                <div class="h-48 bg-gradient-to-br from-indigo-400 to-indigo-600 flex items-center justify-center">
                    <div class="text-white text-center">
                        <div class="w-16 h-16 bg-white/20 rounded-lg flex items-center justify-center mx-auto mb-2">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold">Coming Soon</h3>
                    </div>
                </div>
                <div class="p-6">
                    <h4 class="text-xl font-semibold text-gray-900 mb-2">E-commerce Store</h4>
                    <p class="text-gray-600 mb-4">Full-featured e-commerce platform with cart, payments, and admin panel.</p>
                    <div class="flex items-center justify-between">
                        <span class="px-3 py-1 bg-indigo-100 text-indigo-800 text-sm font-medium rounded-full">Django</span>
                        <span class="text-sm text-gray-500">Coming Soon</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="mt-16 text-center">
            <div class="bg-white rounded-2xl shadow-lg p-8">
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Want to contribute?</h3>
                <p class="text-gray-600 mb-6 max-w-2xl mx-auto">
                    We're always looking for new project ideas and contributors. If you have a mini project you'd like to share or want to collaborate, get in touch!
                </p>
                <button class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg transition-colors duration-200 shadow-md hover:shadow-lg">
                    Get Started
                </button>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200 mt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="text-center text-gray-600">
                <p>&copy; 2025 MiniProjects Hub. Built with Laravel & Tailwind CSS.</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript for interactivity -->
    <script>
        // Simple dropdown toggle for user profile (optional)
        document.addEventListener('DOMContentLoaded', function() {
            // Add any interactive JavaScript here if needed
            console.log('MiniProjects Hub loaded successfully!');
        });
    </script>
</body>
</html>
