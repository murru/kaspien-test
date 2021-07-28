<x-layout>
    {{-- Wrapper --}}
    <div class="relative flex flex-col gap-4 items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <label
            class="w-64 flex flex-col items-center px-4 py-6 bg-red-800 shadow sm:rounded-lg shadow-md tracking-wide uppercase border border-red cursor-pointer text-white text-center ease-linear transition-all duration-150"
        >
            CSV was not imported
            Contact the developer
        </label>

        {{-- Return to main view --}}
        <a class="text-gray-500 underline" href="{{ url('/') }}">Return to main</a>
    </div>
</x-layout>