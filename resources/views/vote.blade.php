<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Vote') }}
        </h2>
    </x-slot>


    <div class="py-20 light:bg-gray-800 flex flex-col items-center">
        <div class="text-center mb-12">
            <h6 class="text-3xl font-bold mb-4">How do people feel about this topic?</h6>
        </div>
        <section class="grid gap-20 md:grid-cols-2 p-4 md:p-8 max-w-5xl mx-auto w-full">
            <div class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700">
                <input id="bordered-radio-1" type="radio" value="" name="bordered-radio"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 light:ring-offset-gray-800 focus:ring-2 light:bg-gray-700 light:border-gray-600">
                <label for="bordered-radio-1"
                    class="w-full py-4 ms-2 text-sm font-medium text-gray-900 light:text-gray-300">Yes, I Agree.</label>
            </div>
            <div class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700">
                <input checked id="bordered-radio-2" type="radio" value="" name="bordered-radio"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 light:ring-offset-gray-800 focus:ring-2 light:bg-gray-700 light:border-gray-600">
                <label for="bordered-radio-2"
                    class="w-full py-4 ms-2 text-sm font-medium text-gray-900 light:text-gray-300">No, I am not.</label>
            </div>
        </section>
        <div class="text-center mb-12">
            <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Submit Your Vote</button>
        </div>
    </div>

</x-app-layout>
