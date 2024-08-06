<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> --}}

    <div class="py-20 light:bg-gray-800 flex flex-col items-center">
        <div class="text-center mb-12">
            <h6 class="text-3xl font-bold mb-4">How do people feel about this topic?</h6>
        </div>
        <section class="grid gap-20 md:grid-cols-2 p-4 md:p-8 max-w-5xl mx-auto w-full">
            <div class="p-6 bg-white shadow rounded-2xl light:bg-gray-900">
                <dl class="space-y-2">
                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Agree</dt>
                    <dd class="text-5xl font-light md:text-6xl light:text-white">20</dd>
                    <dd class="flex items-center space-x-1 text-sm font-medium text-green-500 dark:text-green-400">
                        <span>Up vote</span>
                        <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M17.25 15.25V6.75H8.75"></path>
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M17 7L6.75 17.25"></path>
                        </svg>
                    </dd>
                </dl>
            </div>
    
            <div class="p-6 bg-white shadow rounded-2xl light:bg-gray-900">
                <dl class="space-y-2">
                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Disagree</dt>
                    <dd class="text-5xl font-light md:text-6xl light:text-white">5</dd>
                    <dd class="flex items-center space-x-1 text-sm font-medium text-red-500 dark:text-red-400">
                        <span>Down Vote</span>
                        <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M17.25 8.75V17.25H8.75"></path>
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M17 17L6.75 6.75"></path>
                        </svg>
                    </dd>
                </dl>
            </div>
        </section>
    </div>
    
</x-app-layout>
