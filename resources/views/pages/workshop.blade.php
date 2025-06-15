<x-container.center>
    <x-typography.page class="py-8" title="Simple no-tricks pricing"
        subtitle="Join trainings to enhance your expertise" />
    @foreach ($workshops as $workshop)
        <x-workshop.card :$workshop />
    @endforeach
    {{ $workshops->links('components.nav.links') }}
</x-container.center>
