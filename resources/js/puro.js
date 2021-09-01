window.incluirPessoas = function()
{
    console.log('rato');
    let nomeDependente = '';
    let ulDependente;
    let nome = document.querySelector("#nomePessoa").value;
    let li = document.createElement('li');
    li.innerHTML = nome;
    li.className = 'w-2/3 border border-r-0 border-black';

    let buttonRemove = document.createElement('button');
    buttonRemove.className = 'w-1/3 border border-black';
    buttonRemove.innerHTML = 'Remover';

    let buttonAddDependente = document.createElement('button');
    buttonAddDependente.className = 'w-full border-b-2 border-gray-400';
    buttonAddDependente.innerHTML = 'Adicionar Dependente';
    
    let divUl = document.querySelector("#Pessoas");
    divUl.appendChild(li);
    divUl.appendChild(buttonRemove);
    divUl.appendChild(buttonAddDependente);
    let rato = document.querySelector("#Pessoas li").length;
    console.log(rato);
    buttonAddDependente.dataset.idPessoa = rato.length; 

    buttonAddDependente.onclick = function(){
        addDependente(buttonAddDependente, rato);
    }
}

window.addDependente = function (buttonAddDependente, id) {
    let dependente;
    
    nomeDependente = prompt("Digite o nome do dependente:");
    ulDependente = document.createElement('ul');
    ulDependente.className = 'w-full border border-black';
    
    divUl.appendChild(ulDependente);

    dependente = document.createElement('li');
    dependente.className = 'w-2/3 border border-r-0 border-black';
    dependente.innerHTML = nomeDependente;

    removerDependente = document.createElement('button');
    removerDependente.className = 'w-1/3 border border-black';
    removerDependente.innerHTML = 'Remover Dependente';
    
    ulDependente.appendChild(dependente);
    ulDependente.appendChild(removerDependente);
}

window.addPessoaObj = function () {
    function Person(nome) {
        this.nome = nome;
    }
    function Dependente(nome, responsavel) {
        Person.call(this);
        this.responsavel = responsavel;
    }

    let nome = document.querySelector("#nomePessoa").value;

    let person = new Person(nome);
    window.arrayPerson = [];
    window.arrayPerson.push(person);
    console.log(window.arrayPerson);

    Dependente.prototype = Object.create(Person.prototype)
}