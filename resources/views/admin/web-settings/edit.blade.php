<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Web Settings') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('admin.web-settings.update') }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Site Name -->
                        <div class="mb-4">
                            <x-input-label for="site_name" :value="__('Site Name')" />
                            <x-text-input id="site_name" class="block mt-1 w-full" type="text" name="site_name" :value="old('site_name', $webSetting->site_name ?? '')" required autofocus autocomplete="site_name" />
                            <x-input-error :messages="$errors->get('site_name')" class="mt-2" />
                        </div>

                        <!-- Site Tagline -->
                        <div class="mb-4">
                            <x-input-label for="site_tagline" :value="__('Site Tagline')" />
                            <x-text-input id="site_tagline" class="block mt-1 w-full" type="text" name="site_tagline" :value="old('site_tagline', $webSetting->site_tagline ?? '')" autocomplete="site_tagline" />
                            <x-input-error :messages="$errors->get('site_tagline')" class="mt-2" />
                        </div>

                        <!-- Logo -->
                        <div class="mb-4">
                            <x-input-label for="logo" :value="__('Logo')" />
                            <input id="logo" class="block mt-1 w-full" type="file" name="logo" accept="image/*" />
                            <x-input-error :messages="$errors->get('logo')" class="mt-2" />
                            @if($webSetting && $webSetting->logo)
                                <img src="{{ asset('storage/' . $webSetting->logo) }}" alt="Logo" class="mt-2 w-32 h-32 object-cover">
                            @endif
                        </div>

                        <!-- Favicon -->
                        <div class="mb-4">
                            <x-input-label for="favicon" :value="__('Favicon')" />
                            <input id="favicon" class="block mt-1 w-full" type="file" name="favicon" accept="image/*" />
                            <x-input-error :messages="$errors->get('favicon')" class="mt-2" />
                            @if($webSetting && $webSetting->favicon)
                                <img src="{{ asset('storage/' . $webSetting->favicon) }}" alt="Favicon" class="mt-2 w-16 h-16 object-cover">
                            @endif
                        </div>

                        <!-- Footer Text -->
                        <div class="mb-4">
                            <x-input-label for="footer_text" :value="__('Footer Text')" />
                            <textarea id="footer_text" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" name="footer_text" rows="4">{{ old('footer_text', $webSetting->footer_text ?? '') }}</textarea>
                            <x-input-error :messages="$errors->get('footer_text')" class="mt-2" />
                        </div>

                        <!-- Email -->
                        <div class="mb-4">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $webSetting->email ?? '')" autocomplete="email" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Phone -->
                        <div class="mb-4">
                            <x-input-label for="phone" :value="__('Phone')" />
                            <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone', $webSetting->phone ?? '')" autocomplete="phone" />
                            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                        </div>

                        <!-- Address -->
                        <div class="mb-4">
                            <x-input-label for="address" :value="__('Address')" />
                            <textarea id="address" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" name="address" rows="4">{{ old('address', $webSetting->address ?? '') }}</textarea>
                            <x-input-error :messages="$errors->get('address')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button>
                                {{ __('Update Settings') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
