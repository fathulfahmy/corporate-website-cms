<x-container.center>
    <x-typography.page class="py-8">
        <x-slot:title>Projects</x-slot>
        <x-slot:subtitle>Aute magna irure deserunt veniam aliqua magna enim voluptate.</x-slot>
    </x-typography.page>
    <x-container.table>
        <x-filament::tabs label="Status">
            <x-filament::tabs.item :active="$status == ''" wire:click="setStatus('')">
                All
            </x-filament::tabs.item>
            <x-filament::tabs.item :active="$status == 'Ongoing'" wire:click="setStatus('Ongoing')">
                Ongoing
            </x-filament::tabs.item>
            <x-filament::tabs.item :active="$status == 'Completed'" wire:click="setStatus('Completed')">
                Completed
            </x-filament::tabs.item>
        </x-filament::tabs>
        {{ $this->table }}
    </x-container.table>
</x-container.center>
