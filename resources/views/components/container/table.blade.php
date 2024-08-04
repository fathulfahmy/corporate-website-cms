<div {{ $attributes->merge(['class' => 'grid flex-1 auto-cols-fr gap-y-8 pb-24 sm:pb-32']) }}>
    <div class="flex flex-col gap-y-8">
        {{ $slot }}
    </div>
</div>
