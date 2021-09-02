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
    <script src="{{ asset('js/puro.js') }}" defer></script>

</head>

<body>
    <form action="" method="post" class="mx-2 my-2" onsubmit="return false;">
        @csrf

        <div class="row">
            <button onclick="submit()" class="justify-center mx-2 px-2 py-1 text-sm font-medium border-2 border-black rounded-lg">Gravar</button>
            <button class="justify-center mx-2 px-2 py-1 text-sm font-medium border-2 border-black rounded-lg">Ler</button>

            <div class="row my-2">
                Nome: <input type="text" id="nomePessoa" class="mx-2 bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-lg outline-none  text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" />
                <button onclick="incluirPessoas()" class="justify-center px-2 py-1 text-sm font-medium border-2 border-black rounded-lg">
                    Incluir
                </button>
            </div>
            <div class="flex flex-row">
                <div class="w-1/3 mr-4">
                    <ul class="bg-gray-400 text-center">
                        <li>Pessoas</li>
                    </ul>
                    <ul>
                        <div class="flex flex-wrap" id="Pessoas">
                            <div class="hidden">
                                <div id="pessoaHidden">
                                    <ul class="w-full">
                                        <li id="listaPessoa" class="w-2/3 border border-r-0 border-black">pesso</li>
                                        <button class="w-1/3 border border-black">Remover</button>
                                    </ul>
                                    <button onclick="adicionarDependente()" class="w-full border-2 border-t-0 border-gray-400">Adicionar Dependente</button>
                                </div>
                                <div id="dependenteHidden">
                                    <ul class="flex flex-wrap w-full mt-2" id="Dependentes">
                                        <li id="listaDependente" class="w-2/3 border border-r-0 border-black">dep</li>
                                        <button class="w-1/3 border border-black">Remover Dependente</button>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </ul>

                </div>
                <div class="w-2/3">
                    <textarea name="jsonResult" id="jsonResult"></textarea>
                </div>
            </div>
        </div>
    </form>
</body>

</html>