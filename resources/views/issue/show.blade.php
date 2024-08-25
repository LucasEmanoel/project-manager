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



    <!-- Botões -->

</div>
