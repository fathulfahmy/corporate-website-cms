<header class="sticky inset-x-0 top-0 z-50 bg-white transition-[top] duration-300" x-data="{
    drawer: false,
    dropdown: false,
    popover: false,
    prevScrollPos: window.scrollY,

    handleResize() {
        if (window.innerWidth >= 1024) {
            this.drawer = false;
            this.dropdown = false;
            this.popover = false;
            this.hideNavbarOnScroll();
        } else {
            window.onscroll = null;
        }
    },

    hideNavbarOnScroll() {
        window.onscroll = () => {
            let currentScrollPos = window.scrollY;
            if (this.prevScrollPos > currentScrollPos) {
                this.$el.style.top = '0';
            } else {
                this.$el.style.top = `-${this.$el.offsetHeight}px`;
            }
            this.prevScrollPos = currentScrollPos;
        };
    }
}"
    x-init="handleResize();
    window.addEventListener('resize', handleResize);" @resize.window="handleResize()" @scroll.window="popover = false">

    <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="/" class="-m-1.5 p-1.5">
                <span class="sr-only">IICE</span>
                <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                    alt="">
            </a>
        </div>
        <div class="flex lg:hidden">
            <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700"
                @click="drawer = true">
                <span class="sr-only">Open main menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">

            <a href="/" class="text-sm font-semibold leading-6 text-gray-900" wire:navigate>Home</a>
            <a href="/about" class="text-sm font-semibold leading-6 text-gray-900" wire:navigate>About</a>
            <x-nav.popover />
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <a href="/contact" class="text-sm font-semibold leading-6 text-gray-900">Contact us <span aria-hidden="true"
                    wire:navigate>&rarr;</span></a>
        </div>
    </nav>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <x-nav.mobile />
</header>
