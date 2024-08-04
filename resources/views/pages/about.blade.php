<x-container.py>
    <div data-aos="fade-up">
        <x-container.center>
            <x-typography.oneliner class="py-8">
                Our Sponsors
            </x-typography.oneliner>
            <x-logo.grid :model="$sponsors" />
        </x-container.center>
    </div>
    <div data-aos="fade-up">
        <x-container.center>
            <x-typography.oneliner class="py-8">
                Our Collaboration
            </x-typography.oneliner>
            <x-logo.grid :model="$collaborators" />
        </x-container.center>
    </div>
</x-container.py>
