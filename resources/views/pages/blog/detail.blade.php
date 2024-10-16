<x-container.center>
    <x-container.padding />

    <x-typography.page class="py-8 !text-left" title="{{ $blog->title }}" subtitle="{{ $blog->subtitle }}">
        <div class="mt-4 flex gap-x-4 items-center text-sm">
            <span class="px-4 py-2 rounded-full bg-gray-200">{{ $blog->category }}</span>
            <time datetime="{{ $blog->updated_at->format('Y-m-d') }}"
                class="text-gray-500">{{ $blog->updated_at->format('j M Y') }}</time>
        </div>
    </x-typography.page>

    <div class="mx-auto max-w-4xl">
        <div class="aspect-video rounded-xl">
            <img class="size-full rounded-xl object-cover" src="{{ asset('storage/' . $blog->image) }}"
                alt="{{ $blog->title }}">
        </div>
        <div class="mt-8 prose max-w-4xl">
            {!! $blog->content !!}
        </div>
    </div>

    <x-container.padding />
</x-container.center>
