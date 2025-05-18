<x-header/>
<body class="flex h-screen bg-sidebar text-textlight font-sans">

  <!-- Sidebar -->
  <aside class="w-64 bg-sidebar text-textlight border-r border-brand">
    <div class="h-16 flex items-center justify-center border-b border-gray-800">
      <span class="text-xl font-semibold">Dashboard</span>
    </div>
    <nav class="flex flex-col p-4 space-y-2">
      <a href="{{ route('device') }}" class="flex items-center p-2 rounded hover:bg-[#ef3b2d] text-sm transition-colors duration-200">Dashboard</a>
        <a href="{{ route('device') }}" class="flex items-center p-2 rounded hover:bg-[#ef3b2d] text-sm transition-colors duration-200 text-highlight">Devices</a>
      <a href="{{ route('device') }}" class="flex items-center p-2 rounded hover:bg-[#ef3b2d] text-sm transition-colors duration-200">Reports</a>

      <!-- In your layout or nav component -->
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
  @csrf
</form>

<a href="{{ route('logout') }}" class="flex items-center p-2 rounded hover:bg-[#ef3b2d] text-sm transition-colors duration-200"
 onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
 Logout
</a>
  </nav>
  </aside>

  <!-- Main Content -->
  <div class="flex-1 flex flex-col">

    <!-- Header -->
    <header class="flex items-center justify-between h-16 px-6 bg-headerbg border-b border-[#ef3b2d]">
      <div class="flex-1 max-w-md mx-auto">
        <input
          type="text"
          placeholder="Search..."
          class="w-full bg-white text-textlight border border-gray-700 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-highlight"
        />
      </div>
      <div class="flex items-center space-x-4">
        <button class="relative">
          <svg class="w-6 h-6 text-textlight" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6 6 0 10-12 0v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
          <span class="absolute top-0 right-0 inline-flex h-2 w-2 bg-highlight rounded-full"></span>
        </button>
        <div class="relative">
          <img src="https://via.placeholder.com/32" alt="Profile" class="h-8 w-8 rounded-full" />
          <span class="absolute top-0 right-0 inline-flex h-2 w-2 bg-green-500 rounded-full">     
          </span>
        </div>
      </div>
    </header>

    <!-- Cards Grid -->
    <main class="p-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 overflow-auto">
      <!-- Card with Image -->
      <div class="bg-cardbg rounded-lg shadow border border-gray-700 overflow-hidden">
        <div class="overflow-hidden">
          <img src="https://via.placeholder.com/300x150" alt="Device A" class="w-full h-32 object-cover" />
        </div>
        <div class="p-4">
          <h3 class="text-lg font-semibold">Device A</h3>
          <p class="text-sm text-gray-400">Key: ABC123</p>
          <span class="inline-block mt-2 px-2 py-1 text-xs font-medium bg-highlight/20 text-highlight rounded-full">Active</span>
        </div>
      </div>
      <!-- Repeat for other devices -->
      <div class="bg-cardbg rounded-lg shadow border border-gray-700 overflow-hidden">
        <div class="overflow-hidden">
          <img src="https://via.placeholder.com/300x150" alt="Device B" class="w-full h-32 object-cover" />
        </div>
        <div class="p-4">
          <h3 class="text-lg font-semibold">Device B</h3>
          <p class="text-sm text-gray-400">Key: DEF456</p>
          <span class="inline-block mt-2 px-2 py-1 text-xs font-medium bg-highlight/20 text-highlight rounded-full">Broken</span>
        </div>
      </div>
      <!-- Add more cards as needed -->
    </main>

  </div>

</body>
</html>
