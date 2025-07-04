<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <div class="bg-pink-100 rounded-2xl shadow border-l-4 border-pink-400 p-6 flex items-center gap-4">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form') // masukkan isi file dari update yang berada di folder resources/view/profile/partials
                </div>
            </div>

            <div class="bg-pink-100 rounded-2xl shadow border-l-4 border-pink-400 p-6 flex items-center gap-4">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="bg-pink-100 rounded-2xl shadow border-l-4 border-pink-400 p-6 flex items-center gap-4">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>

        </div>
    </div>
</x-app-layout>