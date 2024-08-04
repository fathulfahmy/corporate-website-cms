<x-container.center>
    <x-typography.page class="py-8">
        <x-slot:title>Meet our researchers</x-slot>
        <x-slot:subtitle>Aute magna irure deserunt veniam aliqua magna enim voluptate.</x-slot>
    </x-typography.page>

    <x-container.table>

        <x-filament::tabs label="Category">
            <x-filament::tabs.item :active="$role == 'Fellow'" wire:click="setRole('Fellow')">
                Fellows
            </x-filament::tabs.item>
            <x-filament::tabs.item :active="$role == 'Associate'" wire:click="setRole('Associate')">
                Associates
            </x-filament::tabs.item>
            <x-filament::tabs.item :active="$role == 'Postdoctoral'" wire:click="setRole('Postdoctoral')">
                Postdoctorals
            </x-filament::tabs.item>
            <x-filament::tabs.item :active="$role == 'Postgraduate'" wire:click="setRole('Postgraduate')">
                Postgraduates
            </x-filament::tabs.item>
        </x-filament::tabs>

        <x-container.grid>
            @foreach ($researchers as $researcher)
                <x-researcher.card :$researcher />
            @endforeach
        </x-container.grid>

        {{ $researchers->links('components.nav.links') }}

    </x-container.table>
</x-container.center>
