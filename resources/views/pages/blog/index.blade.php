<x-container.center>
    <x-typography.page class="py-8" title="Blog"
        subtitle="Aute magna irure deserunt veniam aliqua magna enim voluptate." />

    <x-container.table>

        <x-filament::tabs label="Category">
            <x-filament::tabs.item :active="$category == ''" wire:click="setCategory('')">
                All
            </x-filament::tabs.item>
            <x-filament::tabs.item :active="$category == 'news'" wire:click="setCategory('news')">
                News
            </x-filament::tabs.item>
            <x-filament::tabs.item :active="$category == 'events'" wire:click="setCategory('events')">
                Events
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
