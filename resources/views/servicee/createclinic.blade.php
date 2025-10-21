<x-layout>
    <div class="flex flex-1 justify-center items-center">
  <form action="{{ route('clinic.store') }}" method="POST" class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
    @csrf

    <input type="hidden" name="animal_id" value="{{ $animal->id }}">

    <h2 class="text-2xl font-semibold mb-4 text-gray-800">Clinic Service for {{ $animal->name }}</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
   
    <div class="mb-4">
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required class="w-full border rounded px-3 py-2">
    </div>

   
    <div class="mb-4">
        <label for="diagnosis">Diagnosis:</label>
        <textarea id="diagnosis" name="diagnosis" rows="3" required class="w-full border rounded px-3 py-2" placeholder="Enter diagnosis"></textarea>
    </div>


    <div class="mb-4">
        <label for="treatment">Treatment:</label>
        <textarea id="treatment" name="treatment" rows="3" required class="w-full border rounded px-3 py-2" placeholder="Enter treatment"></textarea>
    </div>

    <div class="mb-4">
        <label for="price">Price:</label>
        <input type="number" id="price" name="price" required class="w-full border rounded px-3 py-2" placeholder="Enter price">
    </div>

</div>

    <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600">
        Submit
    </button>
  </form>
</div>

  @if ($errors->any())
        <ul class="px-4 py-2 bg-red-100">
            @foreach ($errors->all() as $error )
                <li class="my-2 text-red-500">{{ $error }}</li>
            @endforeach
        </ul>
  @endif
</x-layout>
