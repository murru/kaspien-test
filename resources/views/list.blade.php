<x-layout>
    <div class="relative flex flex-col gap-4 items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        
        {{-- Data Table --}}
        @if (count($products) > 0)
            <table class="table text-gray-400 border-separate space-y-6 text-sm">
                <thead class="bg-gray-800 text-gray-500">
                    <tr>
                        <th class="p-3 text-white">ASIN</th>
                        <th class="p-3 text-white">TITLE</th>
                        <th class="p-3 text-white">PRICE</th>
                        <th class="p-3 text-white">NET MARGIN</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr class="bg-gray-800">
                            <td class="p-3">{{ $product->asin }}</td>
                            <td class="p-3">{{ $product->title }}</td>
                            <td class="p-3">{{ $product->price }}</td>
                            <td class="p-3">{{ $product->net_margin }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p class="text-white">DB IS EMPTY</p>
        @endif

        {{-- Return to main view --}}
        <a class="text-gray-500 underline" href="{{ url('/') }}">Return to main</a>
    </div>
</x-layout>