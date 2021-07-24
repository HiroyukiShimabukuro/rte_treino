import Alpine from 'alpinejs'

window.Alpine = Alpine

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
Alpine.start()
