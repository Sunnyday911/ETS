<x-layout>
    <div class="flex flex-1 justify-center items-center">
  <form action="{{ route('grooming.store') }}" method="POST" class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
    @csrf

    <input type="hidden" name="animal_id" value="{{ $animal->id }}">

    <h2 class="text-2xl font-semibold mb-4 text-gray-800">Grooming Service for {{ $animal->name }}</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <div class="mb-4">
        <label for="service_type">Service Type:</label>
        <select id="service_type" name="service_type" required class="w-full border rounded px-3 py-2">
            <option value="" disabled selected>Select Service</option>
            @foreach($services as $service)
                <option value="{{ $service['name'] }}" data-price="{{ $service['price'] }}">
                    {{ $service['name'] }}
                </option>
            @endforeach
        </select>
    </div>


    <div class="mb-4">
        <label for="price_display">Price:</label>
        <input type="text" id="price_display" readonly class="w-full border rounded px-3 py-2 bg-gray-100">
        <input type="hidden" id="price" name="price">
    </div>


    <div class="mb-4">
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required class="w-full border rounded px-3 py-2">
    </div>

    </div>

    <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600">
        Submit
    </button>
  </form>

  @if ($errors->any())
        <ul class="px-4 py-2 bg-red-100">
            @foreach ($errors->all() as $error )
                <li class="my-2 text-red-500">{{ $error }}</li>
            @endforeach
        </ul>
  @endif

  <script>
      const serviceSelect = document.getElementById('service_type');
      const priceInput = document.getElementById('price'); 
      const priceDisplay = document.getElementById('price_display'); 

      serviceSelect.addEventListener('change', function() {
          const selectedOption = this.options[this.selectedIndex];
          const price = selectedOption.getAttribute('data-price');

          if(price){
              priceInput.value = price; 
              priceDisplay.value = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(price);
          } else {
              priceInput.value = '';
              priceDisplay.value = '';
          }
      });
  </script>
    </div>
</x-layout>
