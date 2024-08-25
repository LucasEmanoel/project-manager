<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<header class="bg-blue-500 text-white p-4 shadow-md">
  <div class="container mx-auto flex justify-between items-center">
    <!-- Botão Voltar -->
    <a href="{{ url()->previous() }}" class="text-white font-semibold py-2 px-4 rounded-md flex items-center">
      <i class="fas fa-arrow-left mr-2"></i> Voltar
    </a>

  </div>
</header>
<div class="container mx-auto p-6 bg-white shadow-md rounded-lg my-8">
  <h1 class="text-2xl font-bold mb-6">Projetos</h1>

  <form name="form-edit" id="form-edit" method="post" action="{{route('project.store')}}" class="space-y-6">
    @csrf
    @method('POST')

    <div>
      <label for="name" class="block text-sm font-medium text-gray-700">Title</label>
      <input type="text" id="title" name="title" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-blue-500 sm:text-sm" required>
    </div>

    <div>
      <label for="data" class="block text-sm font-medium text-gray-700">Description</label>
      <input type="text" id="description" name="description" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-blue-500 sm:text-sm" required>
    </div>

    <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-md">
      Salvar
    </button>
  </form>
</div>
