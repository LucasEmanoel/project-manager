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
<div class="container mx-auto p-6 bg-white shadow-md rounded-lg my-8">
    <h1 class="text-2xl font-bold mb-6">Assign Issue: {{ $issue->title }}</h1>

    <form name="form-edit" id="form-edit" method="post" action="{{ route('issue.assign', $issue->id)  }}"
          class="space-y-6">
        @csrf
        @method('PUT')


        <div>

            <label for="priority" class="block text-sm font-medium text-gray-700">Select user</label>
            <select name="user_id" id="user"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-blue-500 sm:text-sm"
                    required>
                @foreach($users as $user)
                    <option value="{{ $user->id }}">
                        {{ $user->name }}
                    </option>
                @endforeach
            </select>
        </div>


        <button type="submit"
                class="w-full bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded-md">
            <i class="fa-solid fa-check"></i> Assign
        </button>
    </form>
</div>
