<x-header/>
<body class="flex h-screen bg-sidebar text-textlight font-sans">

  <!-- Sidebar -->
  <aside class="w-64 bg-sidebar text-textlight border-r border-brand">
    <div class="h-16 flex items-center justify-center border-b border-gray-800">
      <span class="text-xl font-semibold">Dashboard</span>
    </div>
    <nav class="flex flex-col p-4 space-y-2">
      <a href="{{ route('dashboard') }}" class="flex items-center p-2 rounded hover:bg-[#ef3b2d] text-sm transition-colors duration-200">Dashboard</a>
        <a href="{{ route('device') }}" class="flex items-center p-2 rounded hover:bg-[#ef3b2d] text-sm transition-colors duration-200 text-highlight">Devices</a>
      <a href="{{ route('reports') }}" class="flex items-center p-2 rounded hover:bg-[#ef3b2d] text-sm transition-colors duration-200">Reports</a>

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

    <!-- Filter and Actions Row -->
    <div class="flex justify-between items-center mb-6">
      <button id="filterDropdownButton" data-dropdown-toggle="filterDropdown" type="button" class="flex items-center px-4 py-2 bg-white text-gray-700 border border-gray-300 rounded hover:bg-gray-100">
        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zm0 6a1 1 0 011-1h16a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1v-2zm0 6a1 1 0 011-1h16a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1v-2z"/></svg>
        Filter
      </button>
      <div id="filterDropdown" class="hidden absolute z-10 mt-2 w-48 bg-white rounded shadow p-4">
        <p class="font-semibold mb-2">Filter by status</p>
        <button class="block w-full text-left px-2 py-1 rounded hover:bg-gray-100">Active</button>
        <button class="block w-full text-left px-2 py-1 rounded hover:bg-gray-100">Broken</button>
      </div>
    </div>
    <main class="p-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 overflow-auto">
      <!-- Card with Image -->
      <div class="bg-cardbg rounded-lg shadow border border-gray-700 overflow-hidden relative">
        <div class="absolute top-2 right-2 flex space-x-2 z-10">
          <button data-modal-toggle="editModal" class="p-1 bg-white rounded hover:bg-gray-100" title="Edit"><svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536M9 13l6-6m2 2l-6 6m-2 2h2v2H7v-2h2z"/></svg></button>
          <button data-modal-toggle="previewModal" class="p-1 bg-white rounded hover:bg-gray-100" title="Preview"><svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0zm-6 0a6 6 0 1112 0 6 6 0 01-12 0z"/></svg></button>
          <button data-modal-toggle="deleteModal" class="p-1 bg-white rounded hover:bg-gray-100" title="Delete"><svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg></button>
        </div>
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
      <div class="bg-cardbg rounded-lg shadow border border-gray-700 overflow-hidden relative">
        <div class="absolute top-2 right-2 flex space-x-2 z-10">
          <button data-modal-toggle="editModal" class="p-1 bg-white rounded hover:bg-gray-100" title="Edit"><svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536M9 13l6-6m2 2l-6 6m-2 2h2v2H7v-2h2z"/></svg></button>
          <button data-modal-toggle="previewModal" class="p-1 bg-white rounded hover:bg-gray-100" title="Preview"><svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0zm-6 0a6 6 0 1112 0 6 6 0 01-12 0z"/></svg></button>
          <button data-modal-toggle="deleteModal" class="p-1 bg-white rounded hover:bg-gray-100" title="Delete"><svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg></button>
        </div>
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

    <!-- Edit Modal -->
    <div id="editModal" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-40">
      <div class="bg-white rounded-lg p-6 w-full max-w-md">
        <h2 class="text-lg font-semibold mb-4">Edit Device</h2>
        <input type="text" class="w-full border rounded px-3 py-2 mb-4" placeholder="Device Name" />
        <div class="flex justify-end space-x-2">
          <button data-modal-toggle="editModal" class="px-4 py-2 bg-gray-200 rounded">Cancel</button>
          <button class="px-4 py-2 bg-blue-600 text-white rounded">Save</button>
        </div>
      </div>
    </div>
    <!-- Preview Modal -->
    <div id="previewModal" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-40">
      <div class="bg-white rounded-lg p-6 w-full max-w-md">
        <h2 class="text-lg font-semibold mb-4">Device Preview</h2>
        <p>Device details go here.</p>
        <div class="flex justify-end">
          <button data-modal-toggle="previewModal" class="px-4 py-2 bg-gray-200 rounded">Close</button>
        </div>
      </div>
    </div>
    <!-- Delete Modal -->
    <div id="deleteModal" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-40">
      <div class="bg-white rounded-lg p-6 w-full max-w-md text-center">
        <h2 class="text-lg font-semibold mb-4 text-red-600">Delete Device</h2>
        <p class="mb-4">Are you sure you want to delete this device?</p>
        <div class="flex justify-center space-x-2">
          <button data-modal-toggle="deleteModal" class="px-4 py-2 bg-gray-200 rounded">Cancel</button>
          <button class="px-4 py-2 bg-red-600 text-white rounded">Delete</button>
        </div>
      </div>
    </div>

  </div>

</body>
</html>
