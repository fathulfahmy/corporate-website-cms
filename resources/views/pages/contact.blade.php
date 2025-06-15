<x-container.backdrop>
    <x-container.py>
        <x-typography.page title="Contact Us" subtitle="Connect with us for collaborations and inquiries" />
        <form wire:submit="submitContactForm" class="mx-auto mt-16 max-w-xl sm:mt-20">
            <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-3">
                <div class="sm:col-span-3">
                    <label for="sender" class="block text-sm font-semibold leading-6 text-gray-900">Name</label>
                    <div class="mt-2.5">
                        <input wire:model.live="name" id="name" type="text" name="name" autocomplete="name"
                            value="{{ old('name') }}" placeholder="John Doe"
                            class="block w-full rounded-md border-0 px-3.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6
                            {{ $errors->has('name') ? 'focus:ring-red-600' : 'focus:ring-indigo-600' }}">
                        <div class="mt-1.5 text-sm leading-6 text-red-600">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">Email</label>
                    <div class="mt-2.5">
                        <input wire:model.live="email" id="email" type="email" name="email" autocomplete="email"
                            value="{{ old('email') }}" placeholder="john@doe.com"
                            class="block w-full rounded-md border-0 px-3.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6
                            {{ $errors->has('email') ? 'focus:ring-red-600' : 'focus:ring-indigo-600' }}">
                        <div class="mt-1.5 text-sm leading-6 text-red-600">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="sm:col-span-1">
                    <label for="phone" class="block text-sm font-semibold leading-6 text-gray-900">Phone</label>
                    <div class="mt-2.5">
                        <input wire:model.live="phone" id="phone" type="tel" name="phone" autocomplete="phone"
                            value="{{ old('phone') }}" placeholder="60105421343"
                            class="block w-full rounded-md border-0 px-3.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6
                            {{ $errors->has('phone') ? 'focus:ring-red-600' : 'focus:ring-indigo-600' }}">
                        <div class="mt-1.5 text-sm leading-6 text-red-600">
                            @error('phone')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="sm:col-span-3">
                    <label for="subject" class="block text-sm font-semibold leading-6 text-gray-900">Subject</label>
                    <div class="mt-2.5">
                        <input wire:model.live="subject" id="subject" type="text" name="subject"
                            autocomplete="subject" value="{{ old('subject') }}" placeholder="Workshop Enquiry"
                            class="block w-full rounded-md border-0 px-3.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6
                            {{ $errors->has('subject') ? 'focus:ring-red-600' : 'focus:ring-indigo-600' }}">
                        <div class="mt-1.5 text-sm leading-6 text-red-600">
                            @error('subject')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="sm:col-span-3">
                    <label for="message" class="block text-sm font-semibold leading-6 text-gray-900">Message</label>
                    <div class="mt-2.5">
                        <textarea wire:model.live="message" id="message" name="message" rows="4"
                            placeholder="I would like to enquire..."
                            class="block w-full rounded-md border-0 px-3.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6 
                            {{ $errors->has('message') ? 'focus:ring-red-600' : 'focus-indigo-600' }}">{{ old('message') }}</textarea>
                        <div class="mt-1.5 text-sm leading-6 text-red-600">
                            @error('message')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-10">
                <button wire:loading.remove wire:target="submitContactForm" type="submit"
                    class="block w-full rounded-md bg-primary-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-primary-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Send
                </button>
                <button wire:loading wire:target="submitContactForm" disabled
                    class="block w-full rounded-md bg-primary-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-primary-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    <span class="flex items-center justify-center gap-2.5">Sending... <x-filament::loading-indicator
                            class="h-5 w-5" /></span>
                </button>
            </div>
        </form>
        @if (Session::has('success'))
            <div class="max-w-64 sm:max-w-full fixed top-24 bg-white border border-gray-200 rounded-lg shadow-lg">
                <div class="flex p-4">
                    <div class="shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="shrink-0 size-6 text-teal-600">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </div>
                    <div class="ms-3">
                        <p class="text-sm leading-6 text-gray-700">
                            {{ Session::get('success') }}
                        </p>
                    </div>
                </div>
            </div>
        @elseif(Session::has('fail'))
            <div class="max-w-64 sm:max-w-full fixed top-24 bg-white border border-gray-200 rounded-lg shadow-lg">
                <div class="flex p-4">
                    <div class="shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="shrink-0 size-6 text-red-600">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                        </svg>

                    </div>
                    <div class="ms-3">
                        <p class="text-sm leading-6 text-gray-700">
                            {{ Session::get('fail') }}
                        </p>
                    </div>
                </div>
            </div>
        @endif
    </x-container.py>
</x-container.backdrop>
