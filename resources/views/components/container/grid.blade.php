<div
    {{ $attributes->merge(['class' => 'mx-auto grid max-w-2xl grid-cols-1 gap-8 lg:mx-0 lg:max-w-none lg:grid-cols-3 pb-8']) }}>
    {{ $slot }}
</div>
