"use strict";

/**
 * Definição de uma classe de carros
 */
class Carro {
    constructor(marca, modelo) {
        this.marca = marca;
        this.modelo = modelo;
        console.log("Criando o carro " + modelo + " da marca " + marca);
    }
}

// Arrays para criar os carros iniciais.
const modelos = ["Gol", "Cruze", "Uno", "Fiesta"];
const marcas = ["Volkswagen", "Chevrolet", "Fiat", "Ford"];

// Array para armazenar os carros criados
const carros = [];

/**
 * Função para remover um carro.
 * @param tr
 * @param carro
 */
function delCarro(tr, carro) {
    tr.remove();
    carros.splice(carros.indexOf(carro), 1);
    console.log(carros);
}

/**
 * Função para adicionar um carro. Altera o DOM da página e o array de carros.
 * @param marca
 * @param modelo
 */
function addCarro(marca, modelo) {
    const carro = new Carro(marca, modelo);
    carros.push(carro);
    let tr = document.createElement("tr");
    let td1 = document.createElement("td");
    let td2 = document.createElement("td");
    let td3 = document.createElement("td");

    // Criando o Botão para remover um carro
    let btRemove = document.createElement("input");
    btRemove.type = "button";
    btRemove.value = "Del";
    btRemove.classList.add("btn");
    btRemove.classList.add("btn-sm");
    btRemove.classList.add("btn-danger");
    btRemove.onclick = function () {
        delCarro(tr, carro);
    };

    // Setando o conteúdo das colunas/células
    td1.innerHTML = carro.marca;
    td2.innerHTML = carro.modelo;
    td3.appendChild(btRemove);

    // Adicionando as colunas/células na linha (tr)
    tr.appendChild(td1);
    tr.appendChild(td2);
    tr.appendChild(td3);

    // Adicionando a linha no corpo <tbody> da tabela
    let table = document.getElementById("tbcarros");
    table.tBodies[0].appendChild(tr);
}

// Laço de repetição para fabricar os carros iniciais
for (let index = 0; index < modelos.length; index++) {
    addCarro(marcas[index], modelos[index]);
}