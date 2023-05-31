document.addEventListener('DOMContentLoaded', function() {
    const botoesCEP = document.getElementsByClassName('comprarButton');
    for (let i = 0; i < botoesCEP.length; i++) {
        botoesCEP[i].addEventListener('click', redirecionarParaPagina2);
    }

    const consultarButton = document.getElementById('consultarButton');
    if (consultarButton) {
        consultarButton.addEventListener('click', consultarCEP);
    }
});


function redirecionarParaPagina2() {
    window.location.href = 'endereco.html';
}

function consultarCEP() {
    const cep = document.getElementById('cepInput').value;
    const url = `https://viacep.com.br/ws/${cep}/json/`;

    fetch(url)
        .then(response => response.json())
        .then(endereco => {
            exibirEndereco(endereco);
        })
        .catch(error => {
            console.error('Erro ao consultar o CEP.', error);
        });
}

function exibirEndereco(endereco) {
    const enderecoDiv = document.getElementById('endereco');
    enderecoDiv.innerHTML = `
        <p>CEP: ${endereco.cep}</p>
        <p>Logradouro: ${endereco.logradouro}</p>
        <p>Bairro: ${endereco.bairro}</p>
        <p>Localidade: ${endereco.localidade}</p>
        <p>UF: ${endereco.uf}</p>`;
}
