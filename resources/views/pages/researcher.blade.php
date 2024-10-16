<x-container.center>
    <x-typography.page class="py-8">
        <x-slot:title>Researchers</x-slot>
        <x-slot:subtitle>Aute magna irure deserunt veniam aliqua magna enim voluptate.</x-slot>
    </x-typography.page>

    <x-container.table>

        <x-filament::tabs label="Role">
            <x-filament::tabs.item :active="$role == 'fellows'" wire:click="setRole('fellows')">
                Fellows
            </x-filament::tabs.item>
            <x-filament::tabs.item :active="$role == 'associates'" wire:click="setRole('associates')">
                Associates
            </x-filament::tabs.item>
            <x-filament::tabs.item :active="$role == 'postdoctorals'" wire:click="setRole('postdoctorals')">
                Postdoctorals
            </x-filament::tabs.item>
            <x-filament::tabs.item :active="$role == 'postgraduates'" wire:click="setRole('postgraduates')">
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
