<div class="flex flex-col rounded-xl p-4 md:p-6 bg-white border border-gray-200" data-aos="fade-up"
    x-data="{ activeTab: 'researchArea' }">
    <div class="flex items-center gap-x-4">
        <img class="rounded-full size-20" src="{{ asset('storage/' . $researcher->image) }}" alt="Avatar">
        <div class="grow">
            <h3 class="font-medium text-gray-800">
                {{ $researcher->name }}
            </h3>
            @isset($researcher->position)
                <p class="text-xs text-gray-500">
                    {{ $researcher->position }}
                </p>
            @endisset
            @isset($researcher->institute)
                <p class="text-xs text-gray-500">
                    {{ $researcher->institute }}
                </p>
            @endisset
            @isset($researcher->candidancy)
                <p class="text-xs text-gray-500">
                    Candidancy in {{ $researcher->candidancy }}
                </p>
            @endisset
            <p class="text-xs text-gray-500">
                {{ $researcher->email }}
            </p>
        </div>
    </div>

    @isset($researcher->qualifications)
        <div class="flex flex-gap-4 my-4 text-sm ">
            <button type="button" @click="activeTab = 'researchArea'"
                :class="activeTab == 'researchArea' ?
                    'text-primary-500 border-b-indigo-500 border-b-2 grow' :
                    'text-gray-500 border-b border-gray-200 hover:text-gray-600 hover:border-b-2 grow'">
                Research areas
            </button>
            <button type="button" @click="activeTab = 'qualification'"
                :class="activeTab == 'qualification' ?
                    'text-primary-500 border-b-indigo-500 border-b-2 grow' :
                    'text-gray-500 border-b border-gray-200 hover:text-gray-600 hover:border-b-2 grow'">
                Qualifications
            </button>
        </div>

        <div x-show="activeTab == 'researchArea'">
            <ul class="text-gray-500 list-disc list-inside text-sm sm:text-base">
                @foreach ($researcher->research_areas as $research_area)
                    <li>{{ $research_area }}</li>
                @endforeach
            </ul>
        </div>

        <div x-show="activeTab == 'qualification'" x-cloak>
            <ul class="text-gray-500 list-disc list-inside text-sm sm:text-base">
                @foreach ($researcher->qualifications as $qualification)
                    <li>{{ $qualification }}</li>
                @endforeach
            </ul>
        </div>
    @endisset
    @empty($researcher->qualifications)
        <p class="text-gray-500 mt-4 ">Research Areas:</p>
        <ul class="text-gray-500 list-disc list-inside text-sm sm:text-base">
            @foreach ($researcher->research_areas as $research_area)
                <li>{{ $research_area }}</li>
            @endforeach
        </ul>

    @endempty
</div>
