<x-container.center>
    <x-typography.page class="py-8">
        <x-slot:title>Blog</x-slot>
        <x-slot:subtitle>Aute magna irure deserunt veniam aliqua magna enim voluptate.</x-slot>
    </x-typography.page>

    <x-container.table>

        <x-filament::tabs label="Category">
            <x-filament::tabs.item :active="$category == ''" wire:click="setCategory('')">
                All
            </x-filament::tabs.item>
            <x-filament::tabs.item :active="$category == 'News'" wire:click="setCategory('News')">
                News
            </x-filament::tabs.item>
            <x-filament::tabs.item :active="$category == 'Event'" wire:click="setCategory('Event')">
                Event
            </x-filament::tabs.item>
        </x-filament::tabs>

        <x-container.grid>
            @foreach ($blogs as $blog)
                <x-blog.card :$blog />
            @endforeach
        </x-container.grid>

        {{ $blogs->links('components.nav.links') }}

    </x-container.table>
</x-container.center>
