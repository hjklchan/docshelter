<?php

/**
 * Title: Header
 * Slug: docshelter/header
 * Block Types: core/template-part/header
 * Categories: header
 */
?>
<header class="w-full border-b border-gray-200 bg-white dark:bg-black">
    <div class="w-full flex items-center justify-between px-6 h-16">

        <!-- 左侧 Logo -->
        <div class="text-xl font-bold text-black dark:text-white whitespace-nowrap">
            Bitworld Dev
        </div>

        <!-- 中间搜索框 -->
        <div class="flex-1 mx-8 max-w-xl">
            <input
                type="text"
                placeholder="Search..."
                class="w-full max-w-xl mx-auto border border-gray-300 dark:border-gray-600 px-3 py-2 text-sm focus:outline-none focus:border-black dark:focus:border-white" />
        </div>

        <div class="hidden md:flex space-x-8 text-sm font-medium text-gray-700 dark:text-gray-300 whitespace-nowrap">
            <!-- 右侧导航菜单（桌面端） -->
            <nav>
                <a href="#" class="hover:text-black dark:hover:text-white">Home</a>
                <a href="#" class="hover:text-black dark:hover:text-white">About</a>
                <a href="#" class="hover:text-black dark:hover:text-white">Contact</a>
            </nav>

            <!-- 白天/黑夜模式切换按钮 -->
            <div>
                <button id="theme-toggle" class="text-gray-700 dark:text-white">
                    <!-- 白天/黑夜模式图标 -->
                    <svg id="sun-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 hidden dark:block">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v3m0 12v3m9-9h3m-18 0h3m3-9l1.5 1.5m9 9l1.5 1.5m-9-9l1.5-1.5m-9 9l1.5-1.5"></path>
                    </svg>
                    <svg id="moon-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 dark:hidden">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3C7.03 3 3 7.03 3 12c0 4.97 4.03 9 9 9 1.69 0 3.29-.49 4.64-1.32A8.978 8.978 0 0 0 21 12c0-4.97-4.03-9-9-9z"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- 移动端折叠按钮 -->
        <div class="md:hidden">
            <button id="menu-toggle" class="text-gray-700 dark:text-white" aria-label="Menu">
                <!-- 图标：三条横线 -->
                <svg xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>


    </div>

    <!-- 移动端折叠菜单 -->
    <div id="mobile-menu" class="hidden md:hidden bg-white space-y-4 py-4 px-6 border-t border-gray-200 dark:bg-gray-800">
        <a href="#" class="block text-sm text-gray-700 dark:text-gray-300 hover:text-black dark:hover:text-white">Home</a>
        <a href="#" class="block text-sm text-gray-700 dark:text-gray-300 hover:text-black dark:hover:text-white">About</a>
        <a href="#" class="block text-sm text-gray-700 dark:text-gray-300 hover:text-black dark:hover:text-white">Contact</a>
    </div>
</header>
<script>
    // 白天/黑夜模式切换功能
    const themeToggleBtn = document.getElementById('theme-toggle');
    const sunIcon = document.getElementById('sun-icon');
    const moonIcon = document.getElementById('moon-icon');
    const htmlTag = document.documentElement;

    // 监听切换按钮
    themeToggleBtn.addEventListener('click', () => {
        htmlTag.classList.toggle('dark'); // 切换 dark 模式
        // 切换图标
        sunIcon.classList.toggle('hidden');
        moonIcon.classList.toggle('hidden');
    });

    // 折叠菜单切换
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    menuToggle.addEventListener("click", () => {
        mobileMenu.classList.toggle("hidden");
    });
</script>