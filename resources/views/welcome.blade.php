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

    <!-- This example requires Tailwind CSS v2.0+ -->


    <script src="{{ asset('js/welcome.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <form x-data="addPessoa" action="post" class="mx-2 my-2" onsubmit="return false;">
        <div class="row">
            <button class="justify-center mx-2 px-2 py-1 text-sm font-medium border-2 border-black rounded-lg">Gravar</button>
            <button class="justify-center mx-2 px-2 py-1 text-sm font-medium border-2 border-black rounded-lg">Ler</button>

            <div class="row my-2" x-data>
                Nome: <input type="text" x-model="pessoa" class="mx-2 bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-lg outline-none  text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" />
                <button x-on:click.prevent="addPessoas(pessoa)" class="justify-center px-2 py-1 text-sm font-medium border-2 border-black rounded-lg">
                    Incluir
                </button>
            </div>
        </div>

        <div class="container flex">
            <ul class="border-collapse border border-gray-600 mr-2 w-1/2">
                <p class="text-center">Pessoas</p>
                <template x-for="(pessoa, pessoasId) in pessoas" :key="pessoasId">
                    <li>
                        <div class="grid grid-flow-col">
                            <p class="border border-l-0 border-r-0 border-gray-600" x-text="pessoa.name"></p>
                            <button class="border border-r-0 border-gray-600" x-on:click="removePessoas(pessoa.id)">Remover</button>
                        </div>
                    <template x-for="(dependente, dependentesId) in dependentes" :key="dependentesId">
                    <li>
                        <div x-show="dependentes" class="grid grid-flow-col">
                            <p class="border border-l-0 border-r-0 border-gray-600" x-text="dependente.name"></p>
                            <button class="border border-r-0 border-gray-600" x-on:click="removeDependente(dependente.id)">Remover Filho</button>
                        </div>
                    </li>
                </template>
                <button type="button" x-on:click="showModal = true" class="w-full">Adicionar Filho</button>
                </li>
                </template>
            </ul>
            <div class="w-1/2">
                <div class="border border-gray-600">
                <p x-text="JSON.stringify(json)" class="w-full h-auto" name="lista" id="lista"></pack>
                </div>
            </div>
        </div>

        <div x-show="showModal" x-cloak class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true" x-on:keydown.escape="showModal = false">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

                <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="sm:flex sm:items-start">
                            <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                <!-- Heroicon name: outline/exclamation -->
                                <svg class="h-6 w-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                </svg>
                            </div>
                            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                                    Adicionar dependente
                                </h3>
                                <div class="mt-2">
                                    <p class="text-sm text-gray-500">
                                        Dependente
                                    </p>
                                    <input x-ref="dependente" type="text" x-model="dependente">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                        <button type="button" x-on:click="addDependente(dependente)" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">
                            Adicionar
                        </button>
                        <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm" x-on:click="showModal = false">
                            Cancel
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>