<x-layout>
  <div class="max-w-5xl w-full mt-6" >

    
    <div class="flex items-center justify-between mb-6">
      <h1 class="text-3xl font-semibold text-gray-800">Animals</h1>

      <a href="{{ route('createan') }}"
         class="inline-flex items-center justify-center bg-sky-500 hover:bg-sky-600 text-white font-semibold rounded-md shadow-lg w-40 h-12 mt-6">
        Add Animal
      </a>
    </div>
    <div class="mt-6 w-full space-y-5">
      @foreach($animal as $anim)
        <x-card href="{{ route('morean', $anim->id) }}">
          <div class="space-y-1">
            <h3 class="text-xl font-semibold text-slate-800">{{ $anim->name }}</h3>
            <p class="text-sm text-gray-500">{{ $anim->customer->name }}</p>
          </div>
        </x-card>
      @endforeach
    </div>

    
    <div class="mt-8 flex justify-center">
      {{ $animal->links() }}
    </div>
  </div>
</x-layout>