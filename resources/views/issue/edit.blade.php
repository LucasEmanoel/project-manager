<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<header class="bg-blue-500 text-white p-4 shadow-md">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Botão Voltar -->
        <a href="{{ url()->previous() }}" class="text-white font-semibold py-2 px-4 rounded-md flex items-center">
            <i class="fas fa-arrow-left mr-2"></i> Back
        </a>

    </div>
</header>
<div class="container mx-auto p-6 bg-white shadow-md rounded-lg my-8">
    <h1 class="text-2xl font-bold mb-6">Issue: {{ $issue->title }}</h1>

    <form name="form-edit" id="form-edit" method="post" action="{{ route('issue.update', $issue->id)  }}" class="space-y-6">
        @csrf
        @method('PUT')

        <div>
            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
            <input type="text" id="title" name="title" value="{{ $issue->title }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-blue-500 sm:text-sm" required>
        </div>

        <div>
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <input type="text" id="description" name="description" value="{{ $issue->description }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-blue-500 sm:text-sm" required>
        </div>

        <div>

            <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
            <select name="status" id="status" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-blue-500 sm:text-sm"  required>
                <option value="open" @selected($issue->status == 'open')>Open</option>
                <option value="closed" @selected($issue->status == 'closed')>Closed</option>

            </select>
        </div>

        <div>

            <label for="priority" class="block text-sm font-medium text-gray-700">Priority</label>
            <select name="priority" id="priority" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-blue-500 sm:text-sm"  required>
                <option value="high" @selected($issue->priority == 'high')>High</option>
                <option value="normal" @selected($issue->priority == 'normal')>Normal</option>
                <option value="low" @selected($issue->priority == 'low')>Low</option>
            </select>
        </div>


        <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-md">
            Update
        </button>
    </form>
    <form action="{{ route('issue.remove', ['id' => $issue->id]) }}" method="POST" onsubmit="return confirm('Você tem certeza que deseja excluir?');">
        @csrf
        @method('DELETE')
        <button type="submit" class="w-full bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded-md">
            <i class="fas fa-trash-alt"></i> Remove
        </button>
    </form>
</div>
