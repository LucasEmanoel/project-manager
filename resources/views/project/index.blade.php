<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<header class="bg-blue-500 text-white p-4 shadow-md">
    <div class="container mx-auto flex justify-between items-center">

        <a href="{{ route('project.create') }}" class="bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded-md">
            <i class="fa-solid fa-plus mr-2"></i>New Project
        </a>
        <a href="{{ route('project.index') }}" class="text-white font-semibold py-2 px-4 rounded-md flex items-center">

            <h1 class="text-2xl font-bold text-white font-semibold py-2 px-4 rounded-md flex items-center">Manager
                Projects</h1>
        </a>
    </div>
</header>

<div class="container mx-auto p-8">
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Project</th>
                    <th class="px-1 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Show</th>
                    <th class="px-1 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Edit</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($projects as $project)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $project->title }}</td>
                    <td class="px-1 py-4 whitespace-nowrap text-sm text-blue-600 hover:text-blue-800">
                        <a href="{{ route('project.show', ['id' => $project->id]) }}">
                            <i class="fas fa-eye"></i>
                        </a>
                    </td>
                    <td class="px-1 py-4 whitespace-nowrap text-sm text-blue-600 hover:text-blue-800">
                        <a href="{{ route('project.edit', ['id' => $project->id]) }}">
                            <i class="fas fa-pencil-alt"></i>
                        </a>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
