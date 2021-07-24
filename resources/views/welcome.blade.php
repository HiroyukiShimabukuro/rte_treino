<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="/css/app.css" rel="stylesheet">

</head>

<body>
    <script src="{{ asset('js/welcome.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <form x-data="addPessoa" action="post" class="mx-2 my-2" onsubmit="return false;">
        <div class="row">
            <button class="justify-center mx-2 px-2 py-1 text-sm font-medium border-2 border-black rounded-lg">Gravar</button>
            <button class="justify-center mx-2 px-2 py-1 text-sm font-medium border-2 border-black rounded-lg">Ler</button>

            <div class="row my-2" x-data>
                Nome: <input type="text" x-model="pessoa" class="mx-2 bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-lg outline-none  text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" />
                <button @click.prevent="addPessoas(pessoa)" class="justify-center px-2 py-1 text-sm font-medium border-2 border-black rounded-lg">
                    Incluir
                </button>
            </div>
        </div>

        <div class="container flex">
            <ul class="border-collapse border border-gray-600 mr-2 w-1/2">
                <p class="text-center">Pessoas</p>
                <template x-for="pessoa in pessoas">
                    <li class="">
                    <div class="grid grid-flow-col">
                    <p class="border border-l-0 border-r-0 border-gray-600" x-text="pessoa.name"></p>
                    <button class="border border-r-0 border-gray-600" x-on:click="removePessoas(pessoa.id)">Remover</button>
                    </div>
                    <button x-on:click="addDependentes()" class="w-full">Adicionar Filho</button>
                    </li>
                </template>
            </ul>
            <div class="w-1/2">
                <textarea x-text="dependentes" class="w-full" name="lista" id="lista"></textarea>
            </div>
        </div>
    </form>
</body>

</html>