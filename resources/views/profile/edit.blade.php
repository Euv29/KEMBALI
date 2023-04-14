<x-layouts.edit title="Editar Pefil">
    <x-headers.header-app />

    <main class="main-container flex align-center col">

        <x-flash-message />


        <div class="flex w-3/4">
            <div class="w-full mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg mx-auto w-full">
                    <div class="p-8 mx-auto w-full">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>

                <div class="sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg mx-auto w-full">
                    <div class="p-8 mx-auto w-full">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>

                <div class="sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg mx-auto">
                    <div class="p-8 mx-auto w-full">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </div>
    </main>

    <x-footer />
</x-layouts.edit>
