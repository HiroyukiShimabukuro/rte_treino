/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************!*\
  !*** ./resources/js/puro.js ***!
  \******************************/
window.incluirPessoas = function () {
  console.log('rato');
  var nomeDependente = '';
  var ulDependente;
  var dependente;
  var nome = document.querySelector("#nomePessoa").value;
  var li = document.createElement('li');
  li.innerHTML = nome;
  li.className = 'w-2/3 border border-r-0 border-black';
  var buttonRemove = document.createElement('button');
  buttonRemove.className = 'w-1/3 border border-black';
  buttonRemove.innerHTML = 'Remover';
  var buttonAddDependente = document.createElement('button');
  buttonAddDependente.className = 'w-full border-b-2 border-gray-400';
  buttonAddDependente.innerHTML = 'Adicionar Dependente';

  buttonAddDependente.onclick = function () {
    nomeDependente = prompt("Digite o nome do dependente:");
    ulDependente = document.createElement('ul');
    dependente = document.createElement('li');
    dependente.className = 'w-2/3 border border-r-0 border-black';
    dependente.innerHTML = nomeDependente;
    ulDependente.appendChild(dependente);
    divUl.appendChild(ulDependente);
  };

  var divUl = document.querySelector("#Pessoas");
  divUl.appendChild(li);
  divUl.appendChild(buttonRemove);
  divUl.appendChild(buttonAddDependente);
  console.log(divUl);
};
/******/ })()
;