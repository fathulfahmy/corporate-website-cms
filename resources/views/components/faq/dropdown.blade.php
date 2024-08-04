<div {{ $attributes->merge(['class' => 'pb-3']) }} x-data="{ dropdown: false }">
    <button
        class="group inline-flex w-full items-center justify-between gap-x-3 rounded-lg pb-3 text-start font-semibold text-gray-800 hover:text-gray-500 md:text-lg"
        @click="dropdown = !dropdown">
        {{ $title }}
        <svg class="size-5 block flex-shrink-0 text-gray-600 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg"
            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round" x-show="!dropdown" x-cloak>
            <path d="m6 9 6 6 6-6" />
        </svg>
        <svg class="size-5 flex-shrink-0 text-gray-600 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg"
            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round" x-show="dropdown" x-cloak>
            <path d="m18 15-6-6-6 6" />
        </svg>
    </button>
    <div class="w-full overflow-hidden" x-show="dropdown" x-collapse>
        <p class="text-gray-600">
            {{ $content }}
        </p>
    </div>
</div>
