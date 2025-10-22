<x-layout>
  <div class="max-w-6xl w-full mt-6">

    
    <div class="flex items-center justify-between mb-6">
      <h1 class="text-3xl font-semibold text-gray-800">Customers</h1>
      <a href="{{ route('create') }}"
         class="inline-flex items-center justify-center bg-sky-500 hover:bg-sky-600 text-white font-semibold rounded-md shadow-lg w-40 h-12">
        Add Customer
      </a>
    </div>

    
    <div class="mt-6 space-y-5">
      @foreach($customer as $cust)
        <x-card href="{{ route('more', $cust->id) }}">
          <div class="space-y-1">
            <h3 class="text-xl font-semibold text-slate-800">{{ $cust->name }}</h3>
          </div>
        </x-card>
      @endforeach
    </div>

    
    <div class="mt-8 flex justify-center">
      {{ $customer->links() }}
    </div>

  </div>
</x-layout>