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
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="/css/app.css" rel="stylesheet">

</head>

<body>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <form x-data="addPessoa()" action="post" class="mx-2 my-2" onsubmit="return false;">
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
            <table class="border-collapse border border-gray-600 table-auto mr-5 w-1/2">
                <thead class="border border-gray-600">
                    <tr>
                        <th colspan=2 class="w-100 border border-gray-600">Pessoas</th>
                    </tr>
                </thead>
                <tbody>
                    <template x-for="pessoa in pessoas">
                        <tr class="h-auto border border-gray-600">
                            <td x-text="pessoa.name" class="w-2/3 h-auto border border-gray-600"></td>
                            <td class="w-1/3 h-auto text-center border border-gray-600"><button @click="removePessoas(pessoa.id)" class="justify-center py-2 px-2 rounded-lg border-2 border-black">remover</button></td>
                            <p>ascfasf</p>
                        </tr>
                        <tr>
                            <button @click="addDependente()" class="w-full justify-center py-2 px-2 rounded-lg border-2 border-black">Adicionar filho</button>
                        </tr>
                        </td>
                        <template x-for="(dependente, index) in dependentes" :key="index">
                            <tr>
                                <td x-show="dependentes" x-text="dependente.name" class="w-2/3 h-auto border border-gray-600"></td>
                                <td x-show="dependentes" class="w-1/3 h-auto text-center border border-gray-600"><button class="justify-center py-2 px-2 rounded-lg border-2 border-black">Remover Dependente</button></td>
                            </tr>
                        </template>
                    </template>

                </tbody>
            </table>
            <!-- <div x-text='dependentes' class="w-1/2">
                <textarea x-model="dependentes" class="w-full" name="dependentes" id="dependentes"></textarea>
            </div> -->
        </div>
    </form>
</body>

</html>
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('addPessoa', () => ({
            pessoa: '',
            pessoas: [],
            pessoasId: 0,
            dependente: '',
            dependentes: [],
            dependentesId: 0,
            addPessoas($pessoa) {
                if ($pessoa.trim() === '') return;
                this.pessoas.push({
                    id: this.pessoasId++,
                    name: $pessoa
                })
            },
            removePessoas($pessoaId) {
                this.pessoas = this.pessoas.filter(pessoa => pessoa.id != $pessoaId);
            },
            addDependente($dependente) {
                if ($dependente.trim() === '') return;
                this.dependentes.push({
                    id: this.dependentesId++,
                    name: $pessoa
                })
                this.pessoas.push({
                    dependentes: this.dependentes
                })
            }
        }))
    })

    // function todoApp() {
    //     return {
    //         description: '',
    //         todoId: 0,
    //         todoArray: [],
    //         addTodo($type, $description) {
    //             if ($description.trim() === '') {
    //                 return;
    //             }
    //             this.todoArray.push({
    //                 id: this.todoId++,
    //                 type: $type,
    //                 description: $description.trim()
    //             });
    //             this.filterUrl = '';
    //         },
    //         removeTodo($todoId) {
    //             this.todoArray = this.todoArray.filter(todoSingle => todoSingle.id != $todoId);
    //         }
    //     }
    // }
</script>