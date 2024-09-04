<section class="bg-transparent">
    <div class="mx-auto max-w-7xl">
        <nav class="flex items-center w-full h-24 select-none" x-data="{ showMenu: false }">
            <div class="relative flex flex-wrap items-start justify-between w-full mx-auto font-medium md:items-center md:h-24 md:justify-between">

                <div :class="{'flex': showMenu, 'hidden md:flex': !showMenu }" class="absolute z-50 flex-col items-center justify-center w-full h-auto px-4 text-center text-gray-400 -translate-x-1/2 border-0 border-gray-700 rounded-full md:border md:w-auto md:h-12 left-1/2 md:flex-row md:items-center">                    <a href="/" class="{{ request()->is('/') ? 'relative inline-block w-full h-full px-8 py-4 mx-2 font-medium leading-tight text-center text-white md:py-2 group md:w-auto md:px-4 lg:mx-4' : 'relative inline-block w-full h-full px-8 py-4 mx-2 font-medium leading-tight text-center duration-300 ease-out md:py-2 group hover:text-white md:w-auto md:px-4 lg:mx-4'}}" wire:navigate>
                        <span class="text-xl">Home</span>
                        <span class="{{ request()->is('/') ? 'absolute bottom-0 left-0 w-full h-px duration-300 ease-out translate-y-px bg-gradient-to-r from-gray-900 via-gray-600 to-gray-900 md:from-gray-700 md:via-gray-400 md:to-gray-700' : 'absolute bottom-0 w-0 h-px duration-300 ease-out translate-y-px group-hover:left-0 left-1/2 group-hover:w-full bg-gradient-to-r from-gray-900 via-gray-600 to-gray-900 md:from-gray-700 md:via-gray-400 md:to-gray-700' }}"></span>
                    </a>
                    <a href="/about" class="{{ request()->is('about') ? 'relative inline-block w-full h-full px-8 py-4 mx-2 font-medium leading-tight text-center text-white md:py-2 group md:w-auto md:px-4 lg:mx-4' : 'relative inline-block w-full h-full px-8 py-4 mx-2 font-medium leading-tight text-center duration-300 ease-out md:py-2 group hover:text-white md:w-auto md:px-4 lg:mx-4'}}" wire:navigate>
                        <span class="text-xl">About</span>
                        <span class="{{ request()->is('about') ? 'absolute bottom-0 left-0 w-full h-px duration-300 ease-out translate-y-px bg-gradient-to-r from-gray-900 via-gray-600 to-gray-900 md:from-gray-700 md:via-gray-400 md:to-gray-700' : 'absolute bottom-0 w-0 h-px duration-300 ease-out translate-y-px group-hover:left-0 left-1/2 group-hover:w-full bg-gradient-to-r from-gray-900 via-gray-600 to-gray-900 md:from-gray-700 md:via-gray-400 md:to-gray-700' }}"></span>
                    </a>
                    <a href="/project" class="{{ request()->is('project') ? 'relative inline-block w-full h-full px-8 py-4 mx-2 font-medium leading-tight text-center text-white md:py-2 group md:w-auto md:px-4 lg:mx-4' : 'relative inline-block w-full h-full px-8 py-4 mx-2 font-medium leading-tight text-center duration-300 ease-out md:py-2 group hover:text-white md:w-auto md:px-4 lg:mx-4'}}" wire:navigate>
                        <span class="text-xl">Projects</span>
                        <span class="{{ request()->is('project') ? 'absolute bottom-0 left-0 w-full h-px duration-300 ease-out translate-y-px bg-gradient-to-r from-gray-900 via-gray-600 to-gray-900 md:from-gray-700 md:via-gray-400 md:to-gray-700' : 'absolute bottom-0 w-0 h-px duration-300 ease-out translate-y-px group-hover:left-0 left-1/2 group-hover:w-full bg-gradient-to-r from-gray-900 via-gray-600 to-gray-900 md:from-gray-700 md:via-gray-400 md:to-gray-700' }}"></span>
                    </a>
                    <a href="/contact" class="{{ request()->is('contact') ? 'relative inline-block w-full h-full px-8 py-4 mx-2 font-medium leading-tight text-center text-white md:py-2 group md:w-auto md:px-4 lg:mx-4' : 'relative inline-block w-full h-full px-8 py-4 mx-2 font-medium leading-tight text-center duration-300 ease-out md:py-2 group hover:text-white md:w-auto md:px-4 lg:mx-4'}}" wire:navigate>
                        <span class="text-xl">Contacts</span>
                        <span class="{{ request()->is('contact') ? 'absolute bottom-0 left-0 w-full h-px duration-300 ease-out translate-y-px bg-gradient-to-r from-gray-900 via-gray-600 to-gray-900 md:from-gray-700 md:via-gray-400 md:to-gray-700' : 'absolute bottom-0 w-0 h-px duration-300 ease-out translate-y-px group-hover:left-0 left-1/2 group-hover:w-full bg-gradient-to-r from-gray-900 via-gray-600 to-gray-900 md:from-gray-700 md:via-gray-400 md:to-gray-700' }}"></span>
                    </a>
                </div>
                <div class="fixed top-0 left-0 z-40 items-center hidden w-full h-full p-3 text-sm bg-gray-900 bg-opacity-50 md:w-auto md:bg-transparent md:p-0 md:relative md:flex" :class="{'flex': showMenu, 'hidden': !showMenu }">
                    <div class="flex-col items-center w-full h-full p-3 overflow-hidden bg-black bg-opacity-50 rounded-lg select-none md:p-0 backdrop-blur-lg md:h-auto md:bg-transparent md:rounded-none md:relative md:flex md:flex-row md:overflow-auto">
                        {{-- EMPTY --}}
                    </div>
                </div>
                <div @click="showMenu = !showMenu" class="absolute right-0 z-50 flex flex-col items-end translate-y-1.5 w-10 h-10 p-2 mr-4 rounded-full cursor-pointer md:hidden hover:bg-gray-200/10 hover:bg-opacity-10" :class="{ 'text-gray-400': showMenu, 'text-gray-100': !showMenu }">
                    <svg class="w-6 h-6" x-show="!showMenu" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" x-cloak>
                        <path d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg class="w-6 h-6" x-show="showMenu" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" x-cloak>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </div>
            </div>
        </nav>
    </div>
</section>
