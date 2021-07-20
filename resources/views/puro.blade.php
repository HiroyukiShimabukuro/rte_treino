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
    <script src="{{ asset('js/puro.js') }}" defer></script>
    <form action="post" class="mx-2 my-2" onsubmit="return false;">
        <div class="row">
            <button class="justify-center mx-2 px-2 py-1 text-sm font-medium border-2 border-black rounded-lg">Gravar</button>
            <button class="justify-center mx-2 px-2 py-1 text-sm font-medium border-2 border-black rounded-lg">Ler</button>

            <div class="row my-2">
                Nome: <input type="text" id="nomePessoa" class="mx-2 bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-lg outline-none  text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" />
                <button onclick="incluirPessoas()" class="justify-center px-2 py-1 text-sm font-medium border-2 border-black rounded-lg">
                    Incluir
                </button>
            </div>
        </div>

        <div class="container flex">
            <table class="border-collapse border border-gray-600 table-auto mr-5 w-1/2">
                <thead class="border border-gray-600">
                    <tr>
                        <th colspan=2 class="w-100 border border-gray-600">Pessoas</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="h-auto border border-gray-600">
                        <td id="tdNomePessoa" class="w-2/3 h-auto border border-gray-600"></td>

                        <td class="w-1/3 h-auto text-center border border-gray-600"><button onclick="removePessoas($key)" class="justify-center py-2 px-2 rounded-lg border-2 border-black">remover</button></td>

                    </tr>
                    <tr class="h-auto border border-gray-600">
                        <td class="h-auto border border-gray-600">
                            <button onclick="addDependente($dependente)" class="w-full justify-center py-2 px-2 rounded-lg border-2 border-black">Adicionar filho</button>
                        </td>
                    </tr>
                    <!-- <tr>
                                <td class="w-2/3 h-auto border border-gray-600"></td>
                                <td class="w-1/3 h-auto text-center border border-gray-600"><button class="justify-center py-2 px-2 rounded-lg border-2 border-black">Remover Dependente</button></td>
                            </tr> -->
                </tbody>
            </table>
            <!-- <div x-text='dependentes' class="w-1/2">
                <textarea x-model="dependentes" class="w-full" name="dependentes" id="dependentes"></textarea>
            </div> -->
        </div>
    </form>
</body>

</html>