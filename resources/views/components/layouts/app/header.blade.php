<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Skyline Digital</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    @livewireStyles
    @livewireScripts
    {{ $styles ?? '' }}
    <style>
        .mobile-menu {
            transform: translateX(-100%);
            transition: transform 0.3s ease-in-out;
        }

        .mobile-menu.active {
            transform: translateX(0);
        }

        .logo-img {
            width: auto;
            height: 80px;
            object-fit: contain;
        }

        .logo-img-footer {
            width: auto;
            height: 80px;
            object-fit: contain;
        }

        /* Hotline shake animation */
        @keyframes shake {
            0% {
                transform: translateX(0);
            }

            10% {
                transform: translateX(-3px) rotate(-2deg);
            }

            20% {
                transform: translateX(3px) rotate(2deg);
            }

            30% {
                transform: translateX(-3px) rotate(-2deg);
            }

            40% {
                transform: translateX(3px) rotate(2deg);
            }

            50% {
                transform: translateX(-2px) rotate(-1deg);
            }

            60% {
                transform: translateX(2px) rotate(1deg);
            }

            70% {
                transform: translateX(-1px) rotate(-0.5deg);
            }

            80% {
                transform: translateX(1px) rotate(0.5deg);
            }

            90% {
                transform: translateX(-0.5px);
            }

            100% {
                transform: translateX(0);
            }
        }

        .hotline-shake {
            animation: shake 2s ease-in-out infinite;
            animation-delay: 1s;
        }

        .hotline-shake:hover {
            animation: none;
            transform: scale(1.05);
            transition: transform 0.2s ease;
        }
    </style>
</head>

<body>
    <header class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16 lg:h-20">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <div class="flex items-center">
                        <!-- Logo Image -->
                        <a href="/">

                            <img src="{{ asset('Logo2.png') }}" alt="Skyline Digital Logo" class="logo-img mr-3">
                        </a>

                    </div>
                </div>

                <!-- Desktop Menu -->
                <nav class="hidden lg:flex items-center space-x-8">
                    <a href="/" class="text-gray-700 hover:text-blue-600 font-medium transition-colors">Trang Chủ</a>
                    <a href="#" class="text-gray-700 hover:text-blue-600 font-medium transition-colors">Giới Thiệu</a>
                    <a href="#" class="text-gray-700 hover:text-blue-600 font-medium transition-colors">Dịch Vụ</a>
                    <a href="{{route('project')}}"
                        class="text-gray-700 hover:text-blue-600 font-medium transition-colors">Dự Án</a>
                    <a href="#" class="text-gray-700 hover:text-blue-600 font-medium transition-colors">Liên Hệ</a>
                    <a href="#" class="text-gray-700 hover:text-blue-600 font-medium transition-colors">Tin Tức</a>
                </nav>

                <div class="flex items-center space-x-4">
                    <!-- Hotline Button -->
                    <a href="tel:+84123456789"
                        class="hotline-shake bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-full font-medium transition-colors flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-4 h-4 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                        </svg>
                        <span class="hidden sm:inline">HOTLINE</span>
                    </a>

                    <!-- Mobile Menu Button -->
                    <button id="mobile-menu-btn" class="lg:hidden text-gray-700 p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="mobile-menu fixed inset-y-0 left-0 z-50 w-64 bg-white shadow-lg lg:hidden">
            <div class="p-4">
                <div class="flex justify-between items-center mb-6">
                    <div class="flex items-center">
                    </div>
                    <button id="close-menu-btn" class="text-gray-500 p-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <nav class="space-y-4">
                    <a href="#"
                        class="block text-gray-700 hover:text-blue-600 font-medium py-2 border-b border-gray-100">Trang
                        Chủ</a>
                    <a href="#"
                        class="block text-gray-700 hover:text-blue-600 font-medium py-2 border-b border-gray-100">Giới
                        Thiệu</a>
                    <a href="#"
                        class="block text-gray-700 hover:text-blue-600 font-medium py-2 border-b border-gray-100">Dịch
                        Vụ</a>
                    <a href="#"
                        class="block text-gray-700 hover:text-blue-600 font-medium py-2 border-b border-gray-100">Dự
                        Án</a>
                    <a href="#"
                        class="block text-gray-700 hover:text-blue-600 font-medium py-2 border-b border-gray-100">Liên
                        Hệ</a>
                    <a href="#"
                        class="block text-gray-700 hover:text-blue-600 font-medium py-2 border-b border-gray-100">Tin
                        Tức</a>
                </nav>
            </div>
        </div>

        <div id="menu-overlay" class="fixed inset-0  bg-opacity-50 z-40 lg:hidden hidden"></div>
    </header>

    {{$slot ?? ''}}

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12">

                <div class="md:col-span-2 lg:col-span-1">
                    <!-- Logo -->
                    <div class="flex items-center mb-6">
                        <img src="{{ asset('Logo1.png') }}" alt="Skyline Digital Logo" class="logo-img-footer mr-3">
                    </div>


                    <p class="text-gray-600 text-sm leading-relaxed mb-6">
                        SKYLINE DIGITAL ra đời với sứ mệnh đồng hành và nâng tầm thương hiệu của bạn trên thị trường.
                        Chúng tôi giúp bạn phát triển với sự hỗ trợ của hệ sinh thái các giải pháp Marketing toàn diện.
                    </p>

                    <div class="space-y-2 text-sm text-gray-600 mb-6">
                        <p>Điện thoại: (028) 7300.1288 - 0901.850.050</p>
                        <p>Email: info@skylinedigital.vn</p>
                    </div>

                    <div class="flex space-x-4">
                        <a href="https://facebook.com/skylinedigital" target="_blank"
                            class="w-10 h-10 bg-gray-100 hover:bg-blue-500 rounded-full flex items-center justify-center text-gray-600 hover:text-white transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                        </a>
                        <a href="https://instagram.com/skylinedigital" target="_blank"
                            class="w-10 h-10 bg-gray-100 hover:bg-pink-500 rounded-full flex items-center justify-center text-gray-600 hover:text-white transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 6.621 5.367 11.988 11.988 11.988s11.988-5.367 11.988-11.988C24.005 5.367 18.638.001 12.017.001zM8.449 16.988c-2.508 0-4.541-2.033-4.541-4.54s2.033-4.541 4.541-4.541c2.508 0 4.541 2.033 4.541 4.541s-2.033 4.54-4.541 4.54zm7.049 0c-2.508 0-4.541-2.033-4.541-4.54s2.033-4.541 4.541-4.541c2.508 0 4.541 2.033 4.541 4.541s-2.033 4.54-4.541 4.54z" />
                            </svg>
                        </a>
                        <a href="https://linkedin.com/company/skylinedigital" target="_blank"
                            class="w-10 h-10 bg-gray-100 hover:bg-blue-600 rounded-full flex items-center justify-center text-gray-600 hover:text-white transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-6">Đường dẫn Website</h3>
                    <ul class="space-y-3">
                        <li>
                            <a href="#" class="text-gray-600 hover:text-blue-600 text-sm transition-colors">Trang
                                chủ</a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-600 hover:text-blue-600 text-sm transition-colors">Về chúng
                                tôi</a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-600 hover:text-blue-600 text-sm transition-colors">Liên Hệ</a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-600 hover:text-blue-600 text-sm transition-colors">FAQs</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-6">Dịch vụ công ty</h3>
                    <ul class="space-y-3">
                        <li>
                            <a href="#" class="text-gray-600 hover:text-blue-600 text-sm transition-colors">Thiết kế
                                website</a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-600 hover:text-blue-600 text-sm transition-colors">Chăm sóc
                                website</a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-600 hover:text-blue-600 text-sm transition-colors">Tư vấn giải
                                pháp CNTT</a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-600 hover:text-blue-600 text-sm transition-colors">Thiết kế
                                portfolio</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-6">Kết nối với chúng tôi</h3>
                    <div class="grid grid-cols-3 gap-2">
                        <div class="aspect-square bg-gray-200 rounded overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=100&h=100&fit=crop"
                                alt="Building" class="w-full h-full object-cover hover:scale-105 transition-transform">
                        </div>
                        <div class="aspect-square bg-gray-200 rounded overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?w=100&h=100&fit=crop"
                                alt="Architecture"
                                class="w-full h-full object-cover hover:scale-105 transition-transform">
                        </div>
                        <div class="aspect-square bg-gray-200 rounded overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1555636222-cae831e670b3?w=100&h=100&fit=crop"
                                alt="Office" class="w-full h-full object-cover hover:scale-105 transition-transform">
                        </div>
                        <div class="aspect-square bg-gray-200 rounded overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop"
                                alt="Technology"
                                class="w-full h-full object-cover hover:scale-105 transition-transform">
                        </div>
                        <div class="aspect-square bg-gray-200 rounded overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1497215728101-856f4ea42174?w=100&h=100&fit=crop"
                                alt="Team" class="w-full h-full object-cover hover:scale-105 transition-transform">
                        </div>
                        <div class="aspect-square bg-gray-200 rounded overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?w=100&h=100&fit=crop"
                                alt="Workspace" class="w-full h-full object-cover hover:scale-105 transition-transform">
                        </div>
                        <div class="aspect-square bg-gray-200 rounded overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1449824913935-59a10b8d2000?w=100&h=100&fit=crop"
                                alt="City" class="w-full h-full object-cover hover:scale-105 transition-transform">
                        </div>
                        <div class="aspect-square bg-gray-200 rounded overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=100&h=100&fit=crop"
                                alt="Modern" class="w-full h-full object-cover hover:scale-105 transition-transform">
                        </div>
                        <div class="aspect-square bg-gray-200 rounded overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop"
                                alt="Design" class="w-full h-full object-cover hover:scale-105 transition-transform">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="border-t border-gray-200 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
                <p class="text-center text-sm text-gray-500">
                    Copyright © 2025 SKYLINE DIGITAL. All rights reserved.
                </p>
            </div>
        </div>
    </footer>

    {{$script ?? ''}}

    <script>
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const closeMenuBtn = document.getElementById('close-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuOverlay = document.getElementById('menu-overlay');

        function openMobileMenu() {
            mobileMenu.classList.add('active');
            menuOverlay.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeMobileMenu() {
            mobileMenu.classList.remove('active');
            menuOverlay.classList.add('hidden');
            document.body.style.overflow = '';
        }

        mobileMenuBtn.addEventListener('click', openMobileMenu);
        closeMenuBtn.addEventListener('click', closeMobileMenu);
        menuOverlay.addEventListener('click', closeMobileMenu);

        // Close menu on escape key
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') {
                closeMobileMenu();
            }
        });
    </script>
</body>

</html>