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
    <form action="post" class="mx-2 my-2">
        <div class="row">
            <button class="justify-center mx-2 px-2 py-1 text-sm font-medium border-2 border-black rounded-lg">Gravar</button>
            <button class="justify-center mx-2 px-2 py-1 text-sm font-medium border-2 border-black rounded-lg">Ler</button>
            
            <div class="row my-2">
            Nome: <input type="text" x-model="dependente" class="mx-2 bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-lg outline-none  text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"/>
            <button @click="addDependente(dependente)" class="justify-center px-2 py-1 text-sm font-medium border-2 border-black rounded-lg">
            Incluir
            </button>
            </div>
        </div>
        <div class="container flex">
            <table class="border-collapse border border-gray-600 table-auto mr-5 w-1/2">
                <thead class="border border-gray-600" >
                    <tr>
                    <th colspan=2 class="w-100 border border-gray-600">Pessoas</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="h-auto border border-gray-600">
                    <td class="w-2/3 h-auto border border-gray-600">Adam</td>
                    <td class="w-1/3 h-auto text-center border border-gray-600"><button class="justify-center py-2 px-2 rounded-lg border-2 border-black">remover</button></td>
                    </tr>
                    <tr>
                    <td colspan=2>
                    <button class="w-full justify-center py-2 px-2 rounded-lg border-2 border-black">Adicionar filho</button>
                    </td>
                    </tr>
                </tbody>
            </table>
            <div x-data="{listar : false}" class="w-1/2">
                <textarea class="w-full" name="dependente" id="dependente"></textarea>
            </div>
        </div>
    </form>
    <script src="{{ asset('js/app.js') }}" defer></script>

    </body>
</html>

<script>
document.addEventListener('alpine:init', () => {
    Alpine.data('listar', ()=> ({

    }))
})

</script>