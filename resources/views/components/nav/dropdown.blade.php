<div class="-mx-3">
    <button type="button"
        class="flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
        aria-controls="disclosure-1" aria-expanded="false" @click="dropdown = !dropdown"> Resources
        {{-- Expand/collapse icon, toggle classes based on menu open state. Open: "rotate-180", Closed: "" --}}
        <svg class="h-5 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd"
                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                clip-rule="evenodd" />
        </svg>
    </button>
    <!-- 'Product' sub-menu, show/hide based on menu state. -->
    <div id="disclosure-1" class="mt-2 space-y-2" x-show="dropdown">
        <a href="/blog"
            class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50"
            wire:navigate>Blog</a>
        <a href="/projects"
            class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50"
            wire:navigate>Projects</a>
        <a href="/researchers"
            class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50"
            wire:navigate>Researchers</a>
        <a href="/workshops"
            class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50"
            wire:navigate>Workshops</a>
    </div>
</div>
