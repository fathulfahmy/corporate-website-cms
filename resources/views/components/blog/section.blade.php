<x-container.py>
    <x-container.center>
        <div class="mx-auto max-w-2xl lg:mx-0">
            <x-typography.section>
                <x-slot:title>From the blog</x-slot>
                <x-slot:subtitle>Learn how to grow your business with our expert advice.</x-slot>
            </x-typography.section>
        </div>
        <div
            class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
            @foreach ($blogs as $blog)
                <x-blog.card :$blog />
            @endforeach
        </div>
    </x-container.center>
</x-container.py>
