<x-layout>
  <div class="flex flex-1 justify-center items-center">

    <form action="{{ route('store') }}" method="POST" class="w-full max-w-3xl bg-white p-8 rounded-lg shadow-md">
      @csrf

      <h2 class="text-2xl font-semibold mb-6 text-gray-800 text-center">Create New Customer</h2>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <div class="mb-4">
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

        <div class="mb-4">
          <label for="email" class="block font-medium text-gray-700 mb-1">Email:</label>
          <input 
            type="email"
            id="email"
            name="email"
            value="{{ old('email') }}"
            required
            class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none"
          >
        </div>

        <div class="mb-4">
          <label for="phone" class="block font-medium text-gray-700 mb-1">Phone Number:</label>
          <input 
            type="text"
            id="phone"
            name="phone"
            value="{{ old('phone') }}"
            required
            class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none"
          >
        </div>

        <div class="mb-4">
          <label for="address" class="block font-medium text-gray-700 mb-1">Address:</label>
          <input 
            type="text"
            id="address"
            name="address"
            value="{{ old('address') }}"
            required
            class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none"
          >
        </div>

      </div> <div class="mt-8">
        <button 
          type="submit"
          class="w-full bg-blue-500 text-white font-semibold py-2 rounded-md hover:bg-blue-600 transition"
        >
          Submit
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