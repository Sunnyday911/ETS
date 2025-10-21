<x-layout>
  <div class="flex flex-1 justify-center items-center">

    <div class="w-full max-w-3xl bg-white p-8 rounded-2xl shadow-lg">
      
      <h1 class="text-2xl font-bold text-gray-700 mb-6 text-center">Customer Details</h1>

      <div class="space-y-4 text-gray-700">
        
        <div>
          <span class="font-semibold text-gray-500 text-sm">Name:</span>
          <p class="text-xl font-semibold text-gray-900">{{ $customer->name }}</p>
        </div>
        
        <hr> <div>
          <span class="font-semibold text-gray-500 text-sm">Email:</span>
          <p class="text-lg text-gray-900">{{ $customer->email }}</p>
        </div>

        <div>
          <span class="font-semibold text-gray-500 text-sm">Phone Number:</span>
          <p class="text-lg text-gray-900">{{ $customer->phone }}</p>
        </div>

        <div>
          <span class="font-semibold text-gray-500 text-sm">Address:</span>
          <p class="text-lg text-gray-900">{{ $customer->address }}</p>
        </div>

      </div>

      <div class="flex justify-between items-center pt-6 mt-8 border-t border-gray-200">
        
        <a href="{{ route('Customer') }}"
           class="px-5 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400 transition">
          Back
        </a>

        <form action="{{ route('destroy', $customer->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this animal?');">
          @csrf
          @method('DELETE')
          <button type="submit"
                  class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition">
            Delete
          </button>
        </form>
        
        <a href="{{ route('customer.edit', $customer->id) }}"
           class="px-5 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
          Update
        </a>
      </div>

    </div>
  </div>
</x-layout>