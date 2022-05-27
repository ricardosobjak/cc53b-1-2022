class Cidade {
  constructor(nome, uf, populacao) {
    this.nome = nome;
    this.uf = uf;
    this.populacao = populacao;
  }
}

// Criar o array de cidades
const cidades = [
  new Cidade('Medianeira', 'PR', 50000),
  new Cidade('Missal', 'PR', 10000),
  new Cidade('Ceu Azul', 'PR', 11000),
  new Cidade('Florianopolis', 'SC', 500000),
  new Cidade('Chapecó', 'SC', 350000),
];

function uniqueUFs() {
  return cidades
    .map(e => e.uf) //Extrair os UFs do array
    .filter((e, i, arr) => i === arr.indexOf(e));
       // Filtra os elementos do array não repetidos
}

/**
 * Criar todas as opções de estado dentro do <select>
 */
function updateSelectUF() {
  const ufs = uniqueUFs(); // Lista de UFs (únicos)
  
  // Buscando a referência para o select de estados
  const selectUf = document.getElementById('estado');

  ufs.forEach(uf => {
    // Criar os options
    const opt = document.createElement('option');
    opt.innerText = uf;
    opt.value = uf;

    selectUf.appendChild(opt);
  })
}

// Função para atualizar o select de cidades
function changeSelectUF() {
  // Obter o nome do estado selecionado no select UF
  const uf = document.getElementById('estado').value;

  const selectCidade = document.getElementById('cidade');

  // Eliminar todas as cidades existentes no select de cidade
  while(selectCidade.firstChild)
    selectCidade.firstChild.remove();

  cidades
    .filter( cidade => cidade.uf == uf)
    .forEach( cidade => {
      // Criar os options
      const opt = document.createElement('option');
      opt.innerText = cidade.nome;
      opt.value = cidade.nome;

      selectCidade.appendChild(opt);
    });
}

function updateTotais () {
  
  const total = cidades
    .map(cid => cid.populacao) // Obtendo somente a população
    .reduce((soma, pop) => soma + pop, 0);

  document.getElementById('tot_geral').innerText = 
   `População total: ${total}`;
}

// Invocar a funcão para criar os estados
updateSelectUF();
changeSelectUF();