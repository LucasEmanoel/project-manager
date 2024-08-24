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
  <h1 class="text-2xl font-bold mb-6">Atividade</h1>

  <form name="form-edit" id="form-edit" method="post" action="{{route('atividade.store')}}" class="space-y-6">
    @csrf
    @method('POST')

    <div>
      <label for="name" class="block text-sm font-medium text-gray-700">Nome</label>
      <input type="text" id="name" name="name" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-blue-500 sm:text-sm" required>
    </div>

    <div>
      <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
      <input type="text" id="status" name="status" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-blue-500 sm:text-sm" required>
    </div>

    <div>
      <label for="data" class="block text-sm font-medium text-gray-700">Data</label>
      <input type="date" id="data" name="data" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-blue-500 sm:text-sm" required>
    </div>

    <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-md">
      Atualizar
    </button>
  </form>
</div>