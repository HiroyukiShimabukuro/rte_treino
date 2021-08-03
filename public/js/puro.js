/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************!*\
  !*** ./resources/js/puro.js ***!
  \******************************/
window.incluirPessoas = function () {
  console.log('rato');
  var nome = document.querySelector("#nomePessoa").value;
  var li = document.createElement('li');
  li.innerHTML = nome;
  var buttonRemove = document.createElement('button');
  var buttonAddDependente = document.createElement('button');
  li.className = 'w-2/3 border border-r-0 border-black';
  buttonRemove.className = 'w-1/3 border border-black';
  buttonAddDependente.className = 'w-full border-b-2 border-gray-400';
  buttonRemove.innerHTML = 'Remover';
  buttonAddDependente.innerHTML = 'Adicionar Dependente';
  var divUl = document.querySelector("#Pessoas");
  divUl.appendChild(li);
  divUl.appendChild(buttonRemove);
  divUl.appendChild(buttonAddDependente);
  console.log(divUl);
};
/******/ })()
;