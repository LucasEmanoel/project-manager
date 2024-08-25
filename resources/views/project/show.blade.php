<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<header class="bg-blue-500 text-white p-4 shadow-md">
<div class="container mx-auto flex justify-between items-center ">
    <!-- Botão Voltar -->
    <a href="{{ url()->previous() }}" class="text-white font-semibold py-2 px-4 rounded-md flex items-center">
      <i class="fas fa-arrow-left mr-2"></i> Voltar
    </a>

  </div>
</header>
<div class="container mx-auto p-6 bg-white shadow-md rounded-lg my-8">
    <h1 class="text-2xl font-bold mb-6">{{ $project->title }}</h1>

    <!-- Campos de Texto (somente exibição) -->
    <div class="mb-4">
        <label class="block text-gray-600 mb-2">Status</label>
        <div>
            {{$project->status}}
        </div>
    </div>

    <div class="mb-6">
        <label class="block text-gray-600 mb-2">Title</label>
        <div>
            {{$project->title}}
        </div>
    </div>

    <!-- Botões -->
    <div class="flex space-x-4">
        <a class="w-1/2 px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300"
            href="{{route('project.index')}}">
            Editar
        </a>
        <a class="w-1/2 px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-300"
            href="{{route('project.index')}}">
            Excluir
        </a>
    </div>
</div>
<div class="container mx-auto p-6 bg-white shadow-md rounded-lg my-8">
    <div class="px-6 py-4 whitespace-nowrap text-sm text-blue-600 hover:text-blue-800">
        <a href="{{ route('issue.create', ['project_id' => $project->id]) }}">
            <i class="fa-solid fa-plus"></i> Adicionar
        </a>
    </div>
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Issue</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Visualizar</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Editar</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Deletar</th>
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
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-red-600 hover:text-red-800">
                        <form action="{{ route('issue.remove', ['id' => $issue->id]) }}" method="POST" onsubmit="return confirm('Você tem certeza que deseja excluir?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-800">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
