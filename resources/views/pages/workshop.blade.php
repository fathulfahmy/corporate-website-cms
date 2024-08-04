<x-container.py>
    <x-container.center>
        <x-typography.page class="pb-8">
            <x-slot:title>Simple no-tricks pricing</x-slot>
            <x-slot:subtitle>Aute magna irure deserunt veniam aliqua magna enim voluptate.</x-slot>
        </x-typography.page>

        @foreach ($workshops as $workshop)
            <x-workshop.card :$workshop />
        @endforeach
    </x-container.center>
</x-container.py>
