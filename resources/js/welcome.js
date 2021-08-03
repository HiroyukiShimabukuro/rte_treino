import Alpine from 'alpinejs'

window.Alpine = Alpine

document.addEventListener('alpine:init', () => {
    Alpine.data('addPessoa', () => ({
        pessoa: '',
        pessoas: [],
        pessoasId: 0,
        dependente: '',
        dependentes: [],
        json: [],
        dependentesId: 0,
        showModal: false,
        teste : [],
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
            console.log($dependente);
            this.dependentes.push({
                id : this.dependentesId++,
                name: $dependente,
            })
            this.json = this.pessoas.forEach(pessoa => {
                this.teste = {nome : pessoa.name}
                this.dependentes.forEach(dependente => {
                                        
                });
                return element.id +' - '+element.name;
            });
            this.showModal = false;
        }
    }))
})
Alpine.start()
