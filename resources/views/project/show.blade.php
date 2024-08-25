<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<header class="bg-blue-500 text-white p-4 shadow-md">
    <div class="container mx-auto flex justify-between items-center ">
        <a href="{{ url()->previous() }}" class="text-white font-semibold py-2 px-4 rounded-md flex items-center">
            <i class="fas fa-arrow-left mr-2"></i> Back
        </a>
        <a href="{{ route('project.index') }}" class="text-white font-semibold py-2 px-4 rounded-md flex items-center">

            <h1 class="text-2xl font-bold text-white font-semibold py-2 px-4 rounded-md flex items-center">Manager
                Projects</h1>
        </a>
    </div>
</header>

<div class="container flex mx-auto">
    <div class="container mx-auto p-6">
        <h6>Project</h6>
        <div class="flex justify-between items-center">

            <h1 class="text-2xl font-bold mb-6">{{ $project->title }}</h1>

            <a class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300"
               href="{{ route('project.edit', ['id' => $project->id]) }}">
                <i class="fas fa-pencil-alt"></i> Edit
            </a>
        </div>
        <div>
            <div class="mb-4">
                <label class="block text-gray-600 mb-2">Status</label>
                <div>
                    {{$project->status}}
                </div>
            </div>

            <div class="mb-6">
                <label class="block text-gray-600 mb-2">Description</label>
                <div>
                    {{$project->description}}
                </div>
            </div>

        </div>
    </div>

    <div class="container mx-auto p-6 bg-white shadow-md rounded-lg my-8">
        <div class="px-6 py-4 whitespace-nowrap text-sm flex justify-between items-center">
            <h1 class="text-2xl font-bold">Related Issues</h1>
            <a href="{{ route('issue.create', ['project_id' => $project->id]) }}"
               class="bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded-md">
                <i class="fa-solid fa-plus mr-2"></i> Add
            </a>

        </div>

        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Issue
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Show
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Edit
                    </th>
                </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                @foreach($issues as $issue)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $issue->title }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-blue-600 hover:text-blue-800">
                            <a href="{{ route('issue.show', ['id' => $issue->id]) }}">
                                <i class="fas fa-eye"></i>
                            </a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-blue-600 hover:text-blue-800">
                            <a href="{{ route('issue.edit', ['id' => $issue->id]) }}">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
