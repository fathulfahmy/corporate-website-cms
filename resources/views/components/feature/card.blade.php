<x-container.py>
    <x-container.center>
        <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2"
            data-aos="fade-up">
            <div class="lg:pr-8 lg:pt-4">
                <div class="lg:max-w-lg">
                    <x-typography.section>
                        <x-slot:label>{{ $label }}</x-slot>
                        <x-slot:title>{{ $title }}</x-slot>
                        <x-slot:subtitle>{{ $subtitle }}</x-slot>
                    </x-typography.section>
                    {{ $slot }}
                </div>
            </div>
            {{ $img }}
        </div>
    </x-container.center>
</x-container.py>
