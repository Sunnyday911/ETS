<x-layout>
  <div class="flex flex-1 justify-center items-center">
    
    <div class="w-full max-w-3xl bg-white p-8 rounded-2xl shadow-lg">
      <h1 class="text-2xl font-bold text-gray-700 mb-6 text-center">Edit Customer</h1>

      <form action="{{ route('customer.update', $customer->id) }}" method="POST" class="space-y-6">
        @csrf
        @method('PUT')
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <div>
            <label class="block font-semibold text-gray-600 mb-1" for="name">Name</label>
            <input type="text" name="name" id="name"
                   value="{{ old('name', $customer->name) }}"
                   class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none">
            @error('name')
              <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
            @enderror
          </div>

          <div>
            <label class="block font-semibold text-gray-600 mb-1" for="email">Email</label>
            <input type="email" name="email" id="email"
                   value="{{ old('email', $customer->email) }}"
                   class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none">
            @error('email')
              <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
            @enderror
          </div>

          <div>
            <label class="block font-semibold text-gray-600 mb-1" for="phone">Phone</label>
            <input type="text" name="phone" id="phone"
                   value="{{ old('phone', $customer->phone) }}"
                   class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none">
            @error('phone')
              <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
            @enderror
          </div>

          <div>
            <label class="block font-semibold text-gray-600 mb-1" for="address">Address</label>
            <input type="text" name="address" id="address"
                   value="{{ old('address', $customer->address) }}"
                   class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none">
            @error('address')
              <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
            @enderror
          </div>
        </div>

        <div class="flex justify-between pt-4">
          <a href="{{ route('more', $customer->id) }}"
             class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400 transition">
            Cancel
          </a>
          <button type="submit"
                  class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
            Update
          </button>
        </div>
      </form>
    </div>
  </div>
</x-layout>