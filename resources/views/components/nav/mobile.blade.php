<div class="lg:hidden" role="dialog" aria-modal="true" x-show="drawer" x-cloak>
    <!-- Background backdrop, show/hide based on slide-over state. -->
    <div class="fixed inset-0 z-10 bg-gray-500 bg-opacity-75 transition-opacity" x-show="drawer" x-cloak
        x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-trap.noscroll="drawer"
        @click="drawer = false"></div>
    <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10"
        x-show="drawer" x-cloak x-transition:enter="ease-out duration-300" x-transition:enter-start="translate-x-full"
        x-transition:enter-end="translate-x-0" x-transition:leave="ease-in duration-200"
        x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full">
        <div class="flex items-center justify-between">
            <a href="/" class="-m-1.5 p-1.5">
                <span class="sr-only">IICE</span>
                <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                    alt="">
            </a>
            <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700" @click="drawer = false">
                <span class="sr-only">Close menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <div class="mt-6 flow-root">
            <div class="-my-6 divide-y divide-gray-500/10">
                <div class="space-y-2 py-6">
                    <a href="/"
                        class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
                        wire:navigate>Home</a>
                    <a href="/about"
                        class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
                        wire:navigate>About</a>
                    <x-nav.dropdown />
                </div>
                <div class="py-6">
                    <a href="/contact"
                        class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Contact
                        us</a>
                </div>
            </div>
        </div>
    </div>
</div>
