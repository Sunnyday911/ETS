
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Dashboard</title>
    @vite('resources/css/app.css')
  </head>
  <body class="min-h-screen bg-gray-100 font-inter">
    <div class="flex flex-col min-h-screen">

      <header class="flex items-center justify-between h-14 px-4 bg-gray-800 text-white">
        <div class="flex items-center gap-3">
          <button id="toggleSidebar" class="toggle-btn" aria-label="Toggle sidebar" aria-expanded="false">☰</button>
          <span class="font-semibold text-lg">VetDashboard</span>
        </div>

        <div class="flex items-center gap-4">
        </div>
      </header>

      <div class="flex flex-1 relative">
        <aside id="sidebar"
               class="sidebar-base transform -translate-x-full md:translate-x-0 md:static fixed inset-y-0 left-0 transition-transform duration-300 z-40"
               aria-hidden="true">
          <nav class="grid grid-cols-1 gap-3">
            <a href="{{ route('Customer') }}" class="nav-link">Customer</a>
            <a href="{{ route('Animal') }}" class="nav-link">Animal</a>
            <a href="{{ route('servicee.create') }}" class="nav-link">Service</a>
            <a href="{{ route('history') }}" class="nav-link mt-auto">History</a>
          </nav>

        </aside>

        <div id="overlay" class="overlay md:hidden"></div>
        <main class="flex-1 p-6 md:ml-56 grid justify-items-center"> 

            {{ $slot }}

        </main>
      </div>
    </div>

  </body>

</html>