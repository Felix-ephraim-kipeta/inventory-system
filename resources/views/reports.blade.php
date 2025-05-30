<x-header/>
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Reports</h1>
    <div class="mb-4 flex gap-2">
        <a href="{{ route('reports.pdf') }}" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">Export PDF</a>
        <a href="{{ route('reports.excel') }}" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Export Excel</a>
    </div>
    <!-- Example table, replace with your data -->
    <table class="min-w-full bg-white">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">ID</th>
                <th class="py-2 px-4 border-b">Name</th>
                <th class="py-2 px-4 border-b">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $row)
            <tr>
                <td class="py-2 px-4 border-b">{{ $row['id'] ?? '' }}</td>
                <td class="py-2 px-4 border-b">{{ $row['name'] ?? '' }}</td>
                <td class="py-2 px-4 border-b">{{ $row['status'] ?? '' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

