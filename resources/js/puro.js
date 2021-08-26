window.incluirPessoas = function()
{
    console.log('rato');
    let nomeDependente = '';
    let ulDependente;
    let dependente;
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
    buttonAddDependente.onclick = function(){
        nomeDependente = prompt("Digite o nome do dependente:");
        ulDependente = document.createElement('ul');
        ulDependente.className = 'w-full border border-black';

        dependente = document.createElement('li');
        dependente.className = 'w-2/3 border border-r-0 border-black';
        dependente.innerHTML = nomeDependente;

        removerDependente = document.createElement('button');
        removerDependente.className = 'w-1/3 border border-black';
        removerDependente.innerHTML = 'Remover Dependente';
        
        ulDependente.appendChild(dependente);
        ulDependente.appendChild(removerDependente);
        
        divUl.appendChild(ulDependente);
    }

    let divUl = document.querySelector("#Pessoas");
    divUl.appendChild(li);
    divUl.appendChild(buttonRemove);
    divUl.appendChild(buttonAddDependente);
    console.log(divUl);
}

