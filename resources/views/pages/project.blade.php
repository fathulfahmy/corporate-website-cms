<x-container.center>
    <x-typography.page class="py-8">
        <x-slot:title>Projects</x-slot>
        <x-slot:subtitle>Aute magna irure deserunt veniam aliqua magna enim voluptate.</x-slot>
    </x-typography.page>
    {{$this->form}}
    <x-container.table>
        <x-filament::tabs label="Status">
            <x-filament::tabs.item :active="$status == ''" wire:click="setStatus('')">
                All
            </x-filament::tabs.item>
            <x-filament::tabs.item :active="$status == 'ongoing'" wire:click="setStatus('ongoing')">
                Ongoing
            </x-filament::tabs.item>
            <x-filament::tabs.item :active="$status == 'completed'" wire:click="setStatus('completed')">
                Completed
            </x-filament::tabs.item>
        </x-filament::tabs>
        {{ $this->table }}
    </x-container.table>
</x-container.center>
