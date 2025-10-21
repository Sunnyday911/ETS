<x-layout>
    <div class="container mx-auto py-6">

        <div class="flex justify-center mb-6 space-x-4">
            <a href="{{ route('history', ['type' => 'grooming']) }}"
               class="px-4 py-2 rounded {{ $type === 'grooming' ? 'bg-blue-500 text-white' : 'bg-gray-200' }}">
                Grooming
            </a>
            <a href="{{ route('history', ['type' => 'clinic']) }}"
               class="px-4 py-2 rounded {{ $type === 'clinic' ? 'bg-blue-500 text-white' : 'bg-gray-200' }}">
                Clinic
            </a>
        </div>

        <ul class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach($services as $service)
                <li class="border rounded-lg p-4 shadow">
                    <h3 class="text-lg font-semibold">{{ $service->animal->name }}</h3>
                    <p class="text-sm text-gray-500">{{ $type === 'clinic' ? $service->diagnosis : $service->service_type }}</p>
                    <p class="text-sm text-gray-500">{{ $type === 'clinic' ? $service->treatment : '' }}</p>
                    <p class="text-sm font-medium">Price: Rp{{ number_format($service->price, 0, ',', '.') }}</p>
                    <p class="text-xs text-gray-400">Date: {{ $service->date }}</p>
                </li>
            @endforeach
        </ul>


        <div class="mt-6 flex justify-center">
            {{ $services->links() }}
        </div>
    </div>
</x-layout>
