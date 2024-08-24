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
    <h1 class="text-2xl font-bold mb-6">{{ $atividade->name }}</h1>

    <!-- Campos de Texto (somente exibição) -->
    <div class="mb-4">
        <label class="block text-gray-600 mb-2">Status</label>
        <div>
            {{$atividade->status}}
        </div>
    </div>

    <div class="mb-6">
        <label class="block text-gray-600 mb-2">Data</label>
        <div>
            {{$atividade->data}}
        </div>
    </div>

    <!-- Botões -->
    <div class="flex space-x-4">
        <a class="w-1/2 px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300"
            href="{{route('atividade.index')}}">
            Editar
        </a>
        <a class="w-1/2 px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-300"
            href="{{route('atividade.index')}}">
            Excluir
        </a>
    </div>
</div>