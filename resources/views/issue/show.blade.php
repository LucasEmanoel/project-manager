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
        <div class="container mx-auto p-6">
            <div class="flex justify-between items-center">
                <h1 class="text-2xl font-bold mb-6">{{ $issue->title }}</h1>


                <a class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300"
                   href="{{route('issue.edit',  ['id' => $issue->id] )}}">
                    Editar
                </a>

            </div>
        </div>
        <div class="mb-4">
            <label class="block text-gray-600 mb-2">Description</label>
            <div>
                {{$issue->description}}
            </div>
        </div>

        <div class="mb-4">
            <label class="block text-gray-600 mb-2">Priority</label>
            <div>
                {{$issue->priority}}
            </div>
        </div>

        <div class="mb-4">
            <label class="block text-gray-600 mb-2">Status</label>
            <div>
                {{$issue->status}}
            </div>
        </div>
    </div>

    <div class="container mx-auto p-6 bg-white shadow-md rounded-lg my-8">
        <div class="px-6 py-4 whitespace-nowrap text-sm flex justify-between items-center">
            <h1 class="text-2xl font-bold">Assigned Users</h1>
            <a href="{{ route('issue.user', ['id' => $issue->id]) }}"
               class="bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded-md">
                <i class="fa-solid fa-plus mr-2"></i> Add
            </a>
        </div>

        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Name
                    </th>
                </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                @foreach($users as $user)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $user->name }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
