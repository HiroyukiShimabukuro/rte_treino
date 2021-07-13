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
            <table class="table-fixed mr-5 w-1/2">
                <thead>
                    <tr>
                    <th class="w-3/4 ...">Author</th>
                    <th class="w-1/4 ...">Views</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>Adam</td>
                    <td>858</td>
                    </tr>
                    <tr class="bg-blue-200">
                    <td>Adam</td>
                    <td>112</td>
                    </tr>
                    <tr>
                    <td>Chris</td>
                    <td>1,280</td>
                    </tr>
                </tbody>
            </table>
            <div x-data="{listar : false}" class="w-1/2">
                <textarea class="w-full" name="dependente" id="dependente" cols="30" rows="10"></textarea>
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