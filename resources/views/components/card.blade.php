
<div class="card">
    <div class="flex items-stretch">
      <div ></div>
      <div>
        {{ $slot }}
      </div>
    </div>

    <a href="{{ $attributes->get('href') }}"
       class="ml-6 inline-flex items-center px-4 py-2 bg-slate-100 hover:bg-slate-200 text-slate-700 text-sm font-medium rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2">
       View Details
    </a>
</div>
