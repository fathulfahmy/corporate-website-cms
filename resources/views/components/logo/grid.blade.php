<div class="grid grid-cols-2 sm:grid-cols-4 md:grid-cols-5 gap-3 lg:gap-6">
    @foreach ($model as $model)
        <div class="p-4 md:p-7 bg-gray-100 rounded-lg group">
            <img class="py-3 lg:py-5 w-16 h-auto md:w-20 lg:w-24 mx-auto text-gray-800 object-contain transition-transform duration-500 ease-in-out group-hover:scale-105"
                src="{{ asset('storage/' . $model->logo) }}" alt="{{ $model->name }}" width="158" height="48">
        </div>
    @endforeach
</div>
