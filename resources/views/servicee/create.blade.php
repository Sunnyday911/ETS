<x-layout>
  <div class="flex flex-1 justify-center items-center">

    <form action="{{ route('service.redirect') }}" method="POST" class="w-full max-w-3xl bg-white p-8 rounded-lg shadow-md">
      @csrf

      <h2 class="text-2xl font-semibold mb-6 text-gray-800 text-center">Choose Service Type</h2>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <div> 
          <label for="type" class="block font-medium text-gray-700 mb-1">Type:</label>
          <select id="type" name="type" required class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none">
            <option value="" disabled selected>Select type</option>
            <option value="Grooming">Grooming</option>
            <option value="Clinic">Clinic</option>
          </select>
        </div>

        <div> 
          <label for="animal_id" class="block font-medium text-gray-700 mb-1">Animal:</label>
          <select id="animal_id" name="animal_id" required class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none">
            <option value="" disabled selected>Select Animal</option>
            @foreach ($animal as $anim)
              <option value="{{ $anim->id }}">{{ $anim->name }}</option>
            @endforeach
          </select>
        </div>

      </div> 
      
      <div class="mt-8">
        <button type="submit" class="w-full bg-blue-500 text-white font-semibold py-2 rounded-md hover:bg-blue-600 transition">
          Next
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
  </div>
</x-layout>