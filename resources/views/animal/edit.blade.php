<x-layout>
  <div class="flex flex-1 justify-center items-center">
    <div class="w-full max-w-lg bg-white p-8 rounded-2xl shadow-lg">
      <h1 class="text-2xl font-bold text-gray-700 mb-6 text-center">Edit Animal</h1>

      <form action="{{ route('animal.update', $animal->id) }}" method="POST" class="space-y-5">
        @csrf
        @method('PUT')
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
       
        <div >
          <label class="block font-semibold text-gray-600 mb-1" for="name">Name</label>
          <input type="text" name="name" id="name"
                 value="{{ old('name', $animal->name) }}"
                 class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none">
          @error('name')
            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
          @enderror
        </div>


        <div>
          <label class="block font-semibold text-gray-600 mb-1" for="age">Age</label>
          <input type="number" name="age" id="age"
                 value="{{ old('age', $animal->age) }}"
                 class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none">
          @error('age')
            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
          @enderror
        </div>

  
        <div>
          <label class="block font-semibold text-gray-600 mb-1" for="type">Type</label>
          <select id="type" name="type"
                  class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none">
            <option value="Cat" {{ old('type', $animal->type) == 'Cat' ? 'selected' : '' }}>Cat</option>
            <option value="Dog" {{ old('type', $animal->type) == 'Dog' ? 'selected' : '' }}>Dog</option>
            <option value="Bird" {{ old('type', $animal->type) == 'Bird' ? 'selected' : '' }}>Bird</option>
          </select>
          @error('type')
            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
          @enderror
        </div>

  
        <div>
          <label class="block font-semibold text-gray-600 mb-1" for="customer_id">Owner</label>
          <select id="customer_id" name="customer_id" required
                  class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none">
            @foreach($customers as $cust)
              <option value="{{ $cust->id }}" {{ old('customer_id', $animal->customer_id) == $cust->id ? 'selected' : '' }}>
                {{ $cust->name }}
              </option>
            @endforeach
          </select>
          @error('customer_id')
            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
          @enderror
        </div>
        </div>

        <div class="flex justify-between pt-4">
          <a href="{{ route('more', $animal->id) }}"
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
