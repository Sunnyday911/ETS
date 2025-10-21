<x-layout>
  <div class="flex flex-1 justify-center items-center">

    <form method="POST" action="{{ route('storean') }}" class="w-full max-w-3xl bg-white p-8 rounded-lg shadow-md">
      @csrf

      <h2 class="text-2xl font-semibold mb-6 text-gray-800 text-center">Register New Animal</h2>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <div>
          <label for="name" class="block font-medium text-gray-700 mb-1">Name:</label>
          <input 
            type="text" 
            id="name" 
            name="name" 
            value="{{ old('name') }}" 
            required
            class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none"
          >
        </div>

        <div>
          <label for="age" class="block font-medium text-gray-700 mb-1">Age:</label>
          <input 
            type="number" 
            id="age" 
            name="age" 
            value="{{ old('age') }}"
            required
            class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none"
          >
        </div>

        <div>
          <label for="type" class="block font-medium text-gray-700 mb-1">Type:</label>
          <select id="type" name="type" required class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none">
            <option value="" disabled selected>Select type</option>
            <option value="Cat" {{ old('type') == 'Cat' ? 'selected' : '' }}>Cat</option>
            <option value="Dog" {{ old('type') == 'Dog' ? 'selected' : '' }}>Dog</option>
            <option value="Bird" {{ old('type') == 'Bird' ? 'selected' : '' }}>Bird</option>
            </select>
        </div>

        <div>
          <label for="customer_id" class="block font-medium text-gray-700 mb-1">Owner:</label>
          <select id="customer_id" name="customer_id" required class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none">
            <option value="" disabled selected>Select customer</option>
            @foreach ($customer as $cust)
              <option value="{{ $cust->id }}" {{ old('customer_id') == $cust->id ? 'selected' : '' }}>
                {{ $cust->name }}
              </option>
            @endforeach
          </select>
        </div>

      </div> <div class="mt-8">
        <button type="submit" class="w-full bg-blue-500 text-white font-semibold py-2 rounded-md hover:bg-blue-600 transition">
          Create Animal
        </button>
      </div>

      @if ($errors->any())
        <ul class="mt-4 p-3 bg-red-100 border border-red-300 rounded-md text-red-600">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      @endif
    </form>

  </div> </x-layout>