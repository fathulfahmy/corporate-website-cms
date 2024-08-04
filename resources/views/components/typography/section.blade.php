<div>
    @isset($label)
        <h2 class="mb-2 text-base font-semibold leading-7 text-primary-600">{{ $label }}</h2>
    @endisset
    @isset($title)
        <p class="mb-6 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{ $title }}</p>
    @endisset
    @isset($subtitle)
        <p class="text-lg leading-8 text-gray-600">{{ $subtitle }}</p>
    @endisset
</div>
