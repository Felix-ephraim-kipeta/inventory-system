<section class="bg-cardbg border border-gray-700 rounded-lg p-6">
    <div class="flex justify-between items-center mb-4">
      <div>
        <h2 class="text-lg font-semibold">Users</h2>
        <p class="text-sm text-gray-400">A list of all the users in your account including their name, title, email and role.</p>
      </div>
      <button class="bg-highlight text-white text-sm font-medium px-4 py-2 rounded hover:bg-red-600">Add user</button>
    </div>
    <div class="overflow-x-auto">
      <table class="min-w-full text-sm text-left">
        <thead class="border-b border-gray-600">
          <tr>
            <th class="py-2 px-4 font-medium text-textlight">Name</th>
            <th class="py-2 px-4 font-medium text-textlight">Title</th>
            <th class="py-2 px-4 font-medium text-textlight">Email</th>
            <th class="py-2 px-4 font-medium text-textlight">Role</th>
            <th class="py-2 px-4 font-medium text-textlight text-right">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr class="border-t border-gray-700 hover:bg-gray-800">
            <td class="py-2 px-4">Lindsay Walton</td>
            <td class="py-2 px-4 text-gray-400">Front-end Developer</td>
            <td class="py-2 px-4">lindsay.walton@example.com</td>
            <td class="py-2 px-4">Member</td>
            <td class="py-2 px-4 text-right"><a href="#" class="text-highlight hover:underline">Edit</a></td>
          </tr>
          <tr class="border-t border-gray-700 hover:bg-gray-800">
            <td class="py-2 px-4">Courtney Henry</td>
            <td class="py-2 px-4 text-gray-400">Designer</td>
            <td class="py-2 px-4">courtney.henry@example.com</td>
            <td class="py-2 px-4">Admin</td>
            <td class="py-2 px-4 text-right"><a href="#" class="text-highlight hover:underline">Edit</a></td>
          </tr>
          <!-- Add more users as needed -->
        </tbody>
      </table>
    </div>
  </section>
